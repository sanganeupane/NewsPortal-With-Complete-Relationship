<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends BackendController
{
    public function index(Request $request)
    {
        $postData = Post::orderBy('id', 'desc')->get();
            $this->data('postsData', $postData);
//            echo $postData;
//            die();
            return view($this->pagePath . 'post.show-post', $this->data);
        }


    public function add(Request $request)
    {

        $userData = Category::orderBy('id', 'desc')->get();
        $subCatData = SubCategory::orderBy('id', 'desc')->get();

        $this->data('usersData', $userData);
        $this->data('subCatData', $subCatData);

        if ($request->isMethod('get')) {
            return view($this->pagePath . 'post.add-post', $this->data);

        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'image' => 'mimes:jpg,jpeg,gif,png'

            ]);

            $data['title'] = $request->title;
            $data['description'] = $request->description;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = strtolower($file->getClientOriginalExtension());
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/post');
                if (!$file->move($uploadPath, $imageName)) {
                    return redirect()->back()->with('error', 'File was not uploaded');
                }
                
                $data['image'] = $imageName;
                $data['cat_id'] = $request->category;
                $data['sub_cat_id'] = $request->sub_category;
                $data['posted_by'] = Auth::guard('admin')->user()->id;


            }

//            dd($data);
//            die();
            if (Post::create($data)) {
                return redirect()->route('show-post')->with('success', 'Post was inserted successfully');
            } else {
                return redirect()->back()->with('success', 'Post was not inserted');

            }

        }

    }

}
