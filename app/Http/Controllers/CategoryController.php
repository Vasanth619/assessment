<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = DB::table('categories')->where('isDelete', 0)->get();
         return view('admin.category.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $category = new Category;
         $category->name = $request->category_name;
         $category->status = $request->category_status;
         $category->save();

         return redirect('/admin/question_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
         $category_id = $request->data_id;
         $categories = DB::table('categories')->where('id', $category_id)->get()->toArray();
         $data['result'] = view('admin.category.edit_ajaxform', ['categories' => $categories])->render();

         echo json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $update_category = DB::table('categories')
            ->where('id', $request->id)
            ->update(['name' => $request->category_name, 'status' => $request->status]);

            if($update_category) {
                $data['status'] = 1;
            }

            echo json_encode($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = Category::find($request->data_id);
        $category->isDelete = 1;
        $category->save();

        if($category){
            $data['status'] = 1;
            $data['message'] = "Category Deleted Successfully";
        }
        else {
            $data['status'] = 0;
            $data['message'] = "Something Went Wrong Please Tryagain";
        }
          echo json_encode($data);
    }
}
