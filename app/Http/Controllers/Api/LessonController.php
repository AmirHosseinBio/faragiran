<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|numeric',
            'name' => 'required|min:3|max:100',
            'price' => 'required|numeric',
        ]);

        $lesson = Lesson::create([
            'course_id' => $request['course_id'],
            'name' => $request['name'],
            'price' => $request['price'],
        ]);

        return response()->json($lesson, 201);
    }
}
