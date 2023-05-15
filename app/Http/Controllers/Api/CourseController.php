<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'price' => 'required|numeric',
        ]);

        $course->update($request->all());

        return response()->json($course, 200);
    }
}
