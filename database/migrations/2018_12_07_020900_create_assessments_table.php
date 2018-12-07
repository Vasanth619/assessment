<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('test_name');
            $table->integer('category');
            $table->integer('sub_category');
            $table->integer('instruction');
            $table->integer('total_question');
            $table->integer('difficult_level');
            $table->integer('total_mark');
            $table->integer('duration');
            $table->integer('question_mandetory')->nullable();
            $table->integer('allow_movement')->nullable();
            $table->text('pass_feedback')->nullable();
            $table->text('fail_feedback')->nullable();
            $table->text('submit_message')->nullable();
            $table->integer('markin_percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
