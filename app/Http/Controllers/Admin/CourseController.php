<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Country;
use App\Models\University;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;

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
        // 🔥 Fetch duration directly from DB
        $data['durations'] = DB::table('duration_master')
                                ->orderBy('duration')
                                ->get();
        return view('admin.course.add_edit', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'course_name' => 'required|string|max:200',
            'course_price' => 'required|string|max:100',
            'duration_id' => 'required|integer|exists:duration_master,id',
            'course_criteria' => 'required|string|max:200',
            'course_image' => 'required|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'university_id' => 'required|integer',
            'country_id' => 'required|integer',
            'faculty_id' => 'required|integer',
        ]);
         // 🔽 PUT THIS CODE HERE
        $imageName = null;

        if ($request->hasFile('course_image')) {

            $dir = afc_base_path('course_image');
            ensure_dir($dir);

            $file = $request->file('course_image');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move($dir, $imageName);
        }
        // 🔼 END HERE


        Course::create([
            'course_name'     => $request->course_name,
            'course_price'    => $request->course_price,
            'duration_id'     => $request->duration_id,
            'course_criteria' => $request->course_criteria,
            'course_image'    => $imageName, 
            'description'     => $request->description,
            'university_id'   => $request->university_id,
            'country_id'      => $request->country_id,
            'faculty_id'      => $request->faculty_id,
            'iStatus'         => 1,
            'isDelete'        => 0,
        ]);
        // dd($course);

        return redirect()->route('admin.course.index')->with('success', 'Course added successfully.');
    }

    public function edit($id)
    {
        $data['course'] = Course::findOrFail($id);
        $data['countries'] = Country::where('isDelete', 0)->orderBy('country_name')->get();
        $data['universities'] = University::where('isDelete', 0)->orderBy('university_name')->get();
        $data['faculties'] = Faculty::where('isDelete', 0)->orderBy('faculty_name')->get();
        $data['durations'] = DB::table('duration_master')->orderBy('duration')->get();
        return view('admin.course.add_edit', $data);
    }

   public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'course_name'      => 'required|string|max:200',
            'course_price'     => 'required|string|max:100',
            'duration_id' => 'required|integer|exists:duration_master,id',
            'course_criteria'  => 'required|string|max:200',
            'course_image' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048',
            'description'      => 'nullable|string',
            'university_id'    => 'required|integer',
            'country_id'       => 'required|integer',
            'faculty_id'       => 'required|integer',
        ]);

        $course = Course::findOrFail($id);

        // 🔽 IMAGE UPDATE LOGIC
        if ($request->hasFile('course_image')) {

            // delete old image
            if (!empty($course->course_image)) {
                $oldPath = afc_base_path('course_image/'.$course->course_image);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // upload new image
            $dir = afc_base_path('course_image');
            ensure_dir($dir);

            $file = $request->file('course_image');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move($dir, $imageName);

            $course->course_image = $imageName;
        }

        // 🔽 UPDATE OTHER FIELDS
        $course->update([
            'course_name'     => $request->course_name,
            'course_price'    => $request->course_price,
            'duration_id' => $request->duration_id,
            'course_criteria' => $request->course_criteria,
            'description'     => $request->description,
            'university_id'   => $request->university_id,
            'country_id'      => $request->country_id,
            'faculty_id'      => $request->faculty_id,
        ]);
        

        return redirect()
            ->route('admin.course.index')
            ->with('success', 'Course updated successfully.');
    }


    public function delete($id)
    {
        $course = Course::findOrFail($id);
        // $course->isDelete = 1;
        $course->delete();

        return redirect()->back()->with('success', 'Course deleted successfully.');
    }

    public function destroy(Request $request)
    {
        if ($request->has('ids')) {
            Course::whereIn('course_id', $request->ids)->delete();
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