<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = Category::where('isDelete', 0)->get();
        $subcategories = DB::table('sub_categories')->leftJoin('categories', 'sub_categories.parent_category_id','=', 'categories.id')->select('categories.name as category_name', 'sub_categories.*')->where('categories.isDelete', '=', 0)->where('sub_categories.isDelete', '=', 0)->get();
        return view('admin.category.subcategory.index', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = new SubCategory;
        $subcategory->parent_category_id = $request->category_status;
        $subcategory->user_id = 1;
        $subcategory->name = $request->sub_category_name;
        $subcategory->status = $request->sub_category_status;
        $subcategory->save();

        return redirect('/admin/question_sub_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = SubCategory::find($request->data_id);
        $category->isDelete = 1;
        $category->save();

        if($category){
            $data['status'] = 1;
            $data['message'] = "Subcategory Deleted Successfully";
        }
        else {
            $data['status'] = 0;
            $data['message'] = "Something Went Wrong Please Tryagain";
        }
          echo json_encode($data);

    }

    public function getSubCategory(Request $request){
        $subcategories = SubCategory::where('parent_category_id', $request->category)->get()->toArray();
      
        echo view('admin.category.onchange_category', ['type' => 'sub_category', 'subcategories' => $subcategories])->render();

        //echo json_encode($data);
    }
}
