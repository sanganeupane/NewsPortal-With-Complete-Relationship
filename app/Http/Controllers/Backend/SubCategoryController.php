<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends BackendController
{
    public function index()
    {
//echo 'yes';
//        $userData = Category::orderBy('id', 'desc')->get();
//        $this->data('usersData', $userData);
        return view($this->pagePath . 'sub-category.show-subcategory', $this->data);
    }

    public function add(Request $request)
    {

        $userData = Category::orderBy('id', 'desc')->get();

        $this->data('usersData', $userData);

//        echo "hey yes ";
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'sub-category.add-subcategory', $this->data);

        }
        if ($request->isMethod('post'))

        {

            $this->validate($request, [
                'sub_cat_name' => 'required',
                'slug' => 'required',
                'description' => '',
                'category' => 'required',

            ]);

            $data['sub_cat_name'] = $request->sub_cat_name;
            $data['slug'] = $request->slug;
            $data['description'] = $request->description;
            $data['cat_id'] = $request->category;
            $data['posted_by'] = Auth::guard('admin')->user()->id;
//dd( $data);
//die();

            if (SubCategory::create($data)) {

                return redirect()->route('show-subcategory')->with('success', 'SubCategory was inserted successfully');
            } else {
                return redirect()->back()->with('success', 'Data was not inserted');

            }
        }
//
//                $userData = Category::orderBy('id', 'desc')->get();
//        $this->data('usersData', $userData);
//        return view($this->pagePath . 'sub-category.add-subcategory', $this->data);

    }
}
