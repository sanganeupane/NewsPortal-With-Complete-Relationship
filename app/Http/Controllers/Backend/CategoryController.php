<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends BackendController
{
    public function index()
    {

        $userData = Category::orderBy('id', 'desc')->get();
        $this->data('usersData', $userData);
        return view($this->pagePath . 'category.show-category', $this->data);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'category.add-category', $this->data);

        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'cat_name' => 'required',
                'slug' => 'required',
                'description' => '',

            ]);

            $data['cat_name'] = $request->cat_name;
            $data['slug'] = $request->slug;
            $data['description'] = $request->description;
            $data['posted_by'] = Auth::guard('admin')->user()->id;


            if (Category::create($data)) {
                return redirect()->route('show-category')->with('success', 'Category was inserted successfully');
            } else {
                return redirect()->back()->with('success', 'Data was not inserted');

            }
        }
    }
}
