<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Photography\Photography;
use App\Models\Post\Post;
use App\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends FrontendController
{

    public function index()
    {
        $this->data('photographyData', Photography::orderBy('id', 'desc')->paginate(6));
        $this->data('categoryData', Category::all());
        $this->data('subCategoryData', SubCategory::all());
        $this->data('postData', Post::orderBy('id', 'desc')->paginate(5));
        $this->data('nuwakotData', \App\Models\Post\Post::where('cat_id', '=', '9')->paginate(2));
        $this->data('nuwakoteData', \App\Models\Post\Post::where('cat_id', '=', '9')->paginate(1));
        $this->data('sportData', \App\Models\Post\Post::where('cat_id', '=', '5')->orderBy('id', 'desc')->paginate(2));
        $this->data('technologyData', \App\Models\Post\Post::where('cat_id', '=', '3')->orderBy('id', 'desc')->paginate(2));

        $this->data('title', $this->makeTitle('home'));

        return view($this->pagePath . 'home.home', $this->data);
    }



    public function category(Request $request )
    {

        $this->data('postData', Post::orderBy('id', 'desc')->paginate(5));
        $this->data('categoryData', Category::all());
        $this->data('subCategoryData', SubCategory::all());

        $id = $request->id;

        $this->data('categoryCatData', Post::where('cat_id' ,'=', $id)->get());
        return view($this->pagePath . 'home.category', $this->data);

    }



    public function subcategory(Request $request)
    {
        $this->data('postData', Post::orderBy('id', 'desc')->paginate(5));

        $this->data('categoryData', Category::all());
        $id = $request->id;
        $this->data('subcategoryData', Post::where('sub_cat_id', $id)->get());
        return view($this->pagePath . 'home.subcategory', $this->data);
    }


    public function post(Request $request)
    {

        $this->data('categoryData', Category::all());
        $this->data('subCategoryData', SubCategory::all());
        $this->data('postData', Post::orderBy('id', 'desc')->paginate(5));

        $id = $request->id;

        $post = Post::findorfail($id);

        $this->data('post', $post);
        return view($this->pagePath . 'home.post', $this->data);
    }


    public function contact()
    {
        $this->data('postData', Post::orderBy('id', 'desc')->paginate(5));
        $this->data('categoryData', Category::all());

        $this->data('title', $this->makeTitle('welcome'));
        return view($this->pagePath . 'home.contact', $this->data);
    }


    public function about()
    {
        $this->data('categoryData', Category::all());
        $this->data('postData', Post::orderBy('id', 'desc')->paginate(5));

        $this->data('title',$this->makeTitle('about'));
        return view($this->pagePath . 'home.about', $this->data);
    }


    public function login(Request $request)
    {

        $this->data('postData', Post::orderBy('id', 'desc')->paginate(5));
        $this->data('categoryData', Category::all());

        if ($request->isMethod('get')) {
            return view($this->frontendPath . 'users.login', $this->data);

        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required'
            ]);
            $username = $request->username;
            $password = $request->password;

            if (Auth::guard('web')->attempt(['username' => $username, 'password' => $password])) {

                return redirect()->intended(route('users'));
            } else {
                return redirect()->back()->with('error', 'Username & Password Not match');
            }
        }
    }


    public function user(Request $request)
    {
        $this->data('categoryData', Category::all());
        $this->data('postData', Post::orderBy('id', 'desc')->paginate(5));

        return view($this->frontendPath . 'users.index', $this->data);
    }



    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect()->intended(route('login'))->with('success', 'Successfully logout');
    }

}
