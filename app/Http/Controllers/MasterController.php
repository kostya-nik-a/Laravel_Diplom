<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;

class MasterController extends Controller
{
    public function getData()
    {
        $questions = Question::all();
        $categories = Category::all();

        return view('welcome', compact('questions', 'categories'));
    }

    public function takeFormQuestion()
    {
        $categories = Category::all();

        return view('ask_question', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'author' => 'required|string|max:255',
            'email_author' => 'required|string|email|max:255',
            'category_id' => 'required|integer',
            'question' => 'required|string|max:1500',
        ]);
        Question::create($request->all());

        return redirect()->route('master');
    }
}
