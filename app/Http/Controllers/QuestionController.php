<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Category;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */

    public function answers()
    {
        return $this->hasMany('App\Question');
    }

    public function edit(Question $question, Request $request)
    {
        $categories = Category::all();
        return view('admin.questions.edit', compact('question', 'categories'));        
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
        $question->update($request->all());
        return redirect()->route('category.index');          
    }

    public function update_answer(Request $request, Question $question)
    {
        $question->answer = $request['answer'];
        $question->save();

        return redirect()->route('admin.questions.edit', [
            'question' => $question,
        ]);
    }

    public function answer(Request $request, Question $question){
        return view('admin.questions.answer', [
            'question' => $question,
            'answer' => $question->answers(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return back();
    }

    public function questions(Request $request, Category $category){        
        return view('admin.categories.questions', [ 
            'category' => $category,         
            'questions' => $category->question()->paginate(5),            
        ]);        
    }

    public function unanswered(Category $category){        
        return view('admin.questions.unanswered', [ 
            'category' => $category,         
            'questions' => $category->question()->where('answer', NULL)->orderBy('date_created')->paginate(5),
        ]);       
    }

    public function publishHide(Question $question)
    {
        if ($question->status == 0) {
            $newStatus = 1;
        } 
        else {
            $newStatus = 0;
        }
        $question->update([
            'status' => $newStatus,
        ]);
                
        return back();
    }
}
