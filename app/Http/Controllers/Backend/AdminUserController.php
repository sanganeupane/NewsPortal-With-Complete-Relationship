<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdminUser\AdminUser;
use App\Models\Photography\Photography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends BackendController
{
    public function index(Request $request)
    {
        if(!empty($request->search)){

            $criteria=$request->search;

          $userData=AdminUser::where('name','LIKE','%'.$criteria.'%')->orwhere('username','LIKE','%'.$criteria.'%')
               ->orwhere('email','LIKE','%'.$criteria.'%')->paginate(25);

              $this->data('usersData', $userData);
              return view($this->pagePath.'admins.show-admin-users',$this->data);
        }
        else{
            $userData = AdminUser::orderBy('id', 'desc')->paginate(5);
            $this->data('usersData', $userData);
            return view($this->pagePath . 'admins.show-admin-users', $this->data);

        }

         }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'admins.add-admin-user', $this->data);

        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3|max:30',
                'username' => 'required|min:3|max:15|unique:admin_users,username',
                'email' => 'required|email|unique:admin_users,email',
                'password' => 'required|min:3|confirmed',
                'password_confirmation' => 'required',
                'image' => 'mimes:jpg,jpeg,gif,png'

            ]);

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = strtolower($file->getClientOriginalExtension());
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/admins');
                if (!$file->move($uploadPath, $imageName)) {
                    return redirect()->with('error', 'File was not uploaded');
                }

                $data['image'] = $imageName;
            }

  if (AdminUser::create($data)) {
                return redirect()->route('show-admin-users')->with('success', 'Data was inserted successfully');
            } else {
                return redirect()->back()->with('success', 'Data was not inserted');

            }

        }

    }

    public function updateStatus(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();

        }
        if ($request->isMethod('post')) {
            $criteria = $request->criteria;
            $findUser = AdminUser::findorfail($criteria);
            if (isset($_POST['active'])) {
                $findUser->status = 0;
                $message = ' status was inactive';

            }
            if (isset($_POST['inactive'])) {
                $findUser->status = 1;
                $message = 'user status was active';

            }
            if ($findUser->update()) {
                return redirect()->back()->with('success', $message);

            } else {
                return redirect()->back()->with('error', 'there wa a problems');

            }
        }
    }

    public function updateType(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();

        }

        if ($request->isMethod('post')) {
            $criteria = $request->criteria;
            $findUser = AdminUser::findorfail($criteria);
            if (isset($_POST['admin'])) {
                $findUser->admin_type = 'super-admin';
                $message = ' User type was Changed';

            }
            if (isset($_POST['super-admin'])) {
                $findUser->admin_type = 'admin';
                $message = 'Admin Type was active';

            }
            if ($findUser->update()) {
                return redirect()->back()->with('success', $message);

            } else {
                return redirect()->back()->with('error', 'there was a problems');

            }
        }
    }

    function deleteFiles($id)
    {
        $findData = AdminUser::findorfail($id);
        $fileName = $findData->image;
        $filePath = public_path('uploads/admins/'.$fileName);

        if (file_exists($filePath) && is_file($filePath)) {
            unlink($filePath);
            return true;
        } else {
            return true;
        }
    }

    public function delete(Request $request)
    {

        $id = $request->criteria;

        if ($this->deleteFiles($id) && AdminUser::findorfail($id)->delete()) {
            return redirect()->back()->with('error', 'Data successfully delete');

        }

    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $userData = AdminUser::findorfail($id);
        $this->data('userData', $userData);

        return view($this->pagePath . 'admins.edit', $this->data);

    }

        public function editAction(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }

        if ($request->isMethod('post')) {
            $id = $request->id;
            $this->validate($request, [
                'name' => 'required|min:3|max:30',
                'username' => 'required',
                'email' => 'required|email'

            ]);

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            if ( AdminUser::findOrFail($id)->update($data))
            {
                return redirect()->route('show-admin-users')->with('success', 'Data was Updated successfully');
            } else {
                return redirect()->back()->with('success', 'Data was not updated');

            }

        }

    }



    public function login(Request $request){
        if ($request->isMethod('get')){
            return view($this->pagePath.'admin-login.index',$this->data);

        }
        if ($request->isMethod('post')){
            $username=$request->username;
            $password=$request->password;
           if( Auth::guard('admin')->attempt(['username'=>$username,'password'=>$password])) {
                return redirect()->intended(route('admin'));
           }
                else{
                    return redirect()->back()->with('error','Username & Password Not match');
               }
            }

        }


        public function photography(Request $request)
        {


            if ($request->isMethod('get')) {
                return view($this->pagePath . 'photography.photography', $this->data);

            }
            if ($request->isMethod('post')) {
                $this->validate($request, [

                    'image' => 'required|mimes:jpg,jpeg,gif,png'

                ]);


                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $ext = strtolower($file->getClientOriginalExtension());
                    $imageName = md5(microtime()) . '.' . $ext;
                    $uploadPath = public_path('uploads/photography');
                    if (!$file->move($uploadPath, $imageName)) {
                        return redirect()->back()->with('error', 'File was not uploaded');
                    }

                    $data['image'] = $imageName;


                }
                if (Photography::create($data)) {
                    return redirect()->route('photography')->with('error', 'photo was inserted successfully');
                } else {
                    return redirect()->back()->with('error', 'photo was not inserted');

                }

            }
        }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->intended(route('admin-login'));



    }


    }
