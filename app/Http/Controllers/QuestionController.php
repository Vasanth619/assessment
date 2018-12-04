<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('sub_categories')->get();
        $questions = DB::table('questions')->leftJoin('categories', 'categories.id', '=', 'questions.category')->leftJoin('sub_categories', 'sub_categories.id' ,'=' ,'questions.sub_category')->select('categories.name as cat_name', 'sub_categories.name as subcat_name', 'questions.*')->get();
        return view('admin.question.index', ['categories' => $categories, 'subcategories' => $subcategories, 'questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('sub_categories')->get();
        return view('admin.question.create', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        $question->question = $request->question_name;
        $question->category = $request->question_category;
        $question->sub_category = $request->question_subcategory;
        $question->choice = json_encode($request->answer);
        $question->answer = $request->correct_answer[0];
        $question->status = $request->question_status;
        $question->save();

        return redirect('/admin/question');

        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }



}
