<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Country;
use App\Models\University;
use App\Models\Faculty;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::with(['university', 'country', 'faculty'])->where('isDelete', 0);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('course_name', 'like', "%$search%")
                  ->orWhereHas('university', function($uq) use ($search) {
                      $uq->where('university_name', 'like', "%$search%") ;
                  })
                  ->orWhereHas('faculty', function($fq) use ($search) {
                      $fq->where('faculty_name', 'like', "%$search%") ;
                  });
            });
        }

        $data['courses'] = $query->orderBy('course_id', 'desc')->paginate(10);
        return view('admin.course.index', $data);
    }

    public function create()
    {
        $data['countries'] = Country::where('isDelete', 0)->orderBy('country_name')->get();
        $data['universities'] = University::where('isDelete', 0)->orderBy('university_name')->get();
        $data['faculties'] = Faculty::where('isDelete', 0)->orderBy('faculty_name')->get();
        return view('admin.course.add_edit', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:200',
            'course_price' => 'required|string|max:100',
            'description' => 'nullable|string',
            'university_id' => 'required|integer',
            'country_id' => 'required|integer',
            'faculty_id' => 'required|integer',
        ]);

        Course::create($request->only([
            'course_name', 'course_price', 'description', 'university_id', 'country_id', 'faculty_id'
        ]));

        return redirect()->route('admin.course.index')->with('success', 'Course added successfully.');
    }

    public function edit($id)
    {
        $data['course'] = Course::findOrFail($id);
        $data['countries'] = Country::where('isDelete', 0)->orderBy('country_name')->get();
        $data['universities'] = University::where('isDelete', 0)->orderBy('university_name')->get();
        $data['faculties'] = Faculty::where('isDelete', 0)->orderBy('faculty_name')->get();
        return view('admin.course.add_edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required|string|max:200',
            'course_price' => 'required|string|max:100',
            'description' => 'nullable|string',
            'university_id' => 'required|integer',
            'country_id' => 'required|integer',
            'faculty_id' => 'required|integer',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->only([
            'course_name', 'course_price', 'description', 'university_id', 'country_id', 'faculty_id'
        ]));

        return redirect()->route('admin.course.index')->with('success', 'Course updated successfully.');
    }

    public function delete($id)
    {
        $course = Course::findOrFail($id);
        $course->isDelete = 1;
        $course->save();

        return redirect()->back()->with('success', 'Course deleted successfully.');
    }

    public function destroy(Request $request)
    {
        if ($request->has('ids')) {
            Course::whereIn('course_id', $request->ids)->update(['isDelete' => 1]);
        }
        return response()->json(['success' => 'Selected courses deleted.']);
    }

    public function status($id)
    {
        $course = Course::findOrFail($id);
        $course->iStatus = $course->iStatus == 1 ? 0 : 1;
        $course->save();

        return redirect()->back()->with('success', 'Status updated.');
    }
}