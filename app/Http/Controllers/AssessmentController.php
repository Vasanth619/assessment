<?php

namespace App\Http\Controllers;

use App\Assessment;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assessments = DB::table('assessments')->leftJoin('categories', 'categories.id', '=', 'assessments.category')->leftJoin('sub_categories', 'sub_categories.id', '=', 'assessments.sub_category')->select('assessments.*', 'categories.name as category_name', 'sub_categories.name as subcategory_name')->get();
        return view('admin.assessment.index', ['assessments' => $assessments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.assessment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assessment = new Assessment;
        $assessment->test_name = $request->testname;
        $assessment->category = $request->category;
        $assessment->sub_category = $request->subcategory;
        $assessment->instruction = $request->instruction;
        $assessment->total_question = $request->totalquest;
        $assessment->difficult_level = $request->difficulty;
        $assessment->total_mark = $request->mark;
        $assessment->duration = $request->duration;
        $assessment->question_mandetory = $request->mandetory;
        $assessment->allow_movement = $request->movement;
        $assessment->pass_feedback = $request->pass_feedback;
        $assessment->fail_feedback = $request->fail_feedback;
        $assessment->submit_message = $request->submit_message;
        $assessment->markin_percentage = $request->percentage;
        $assessment->save();

        if($assessment)
            echo json_encode(['status' => 1, 'message' => 'Test Created Successfully']);
        else
            echo json_encode(['status' => 0, 'message' => 'Something went wrong try again']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessment $assessment)
    {
        //
    }
}
