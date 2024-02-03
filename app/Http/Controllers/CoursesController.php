<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CoursesController extends Controller
{
    public function create()
    {   
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:Programming,Web Development,Data Science,Design,Business,Marketing,Language Learning,Finance,Health and Fitness,Music,Photography,Cooking,Art and Crafts,Science,History,Mathematics,Personal Development,Technology,Environmental Studies,Psychology',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->description, 
            'price' => $request->price, 
            'instructor_id' => $request->instructor_id
        ]);

        return redirect()->route('courses.painel');
    }
}
