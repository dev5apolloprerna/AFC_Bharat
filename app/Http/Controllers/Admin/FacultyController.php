<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\University;
use App\Models\Country;

class FacultyController extends Controller
{
    public function index(Request $request)
    {
        $query = Faculty::with('country','university')->where('isDelete', 0);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('faculty_name', 'like', "%$search%")
                  ->orWhereHas('country', function($cq) use ($search) {
                      $cq->where('country_name', 'like', "%$search%") ;
                  })
                  ->orWhereHas('university', function($cq) use ($search) {
                      $cq->where('university_name', 'like', "%$search%") ;
                  });
                  
            });
        }

        $data['faculties'] = $query->orderBy('faculty_id', 'desc')->paginate(10);
        $data['university'] = University::where('isDelete', 0)->orderBy('university_name')->get();
        $data['countries'] = Country::where('isDelete', 0)->orderBy('country_name')->get();
        return view('admin.faculty.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'faculty_name' => 'required|string|max:200',
            'country_id' => 'required|integer',
            'university_id' => 'required|integer',
        ]);

        Faculty::create([
            'faculty_name' => $request->faculty_name,
            'country_id' => $request->country_id,
            'university_id' => $request->university_id,
        ]);

        return redirect()->back()->with('success', 'Faculty added successfully.');
    }

    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        return response()->json($faculty);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'faculty_name' => 'required|string|max:200',
            'country_id' => 'required|integer',
            'university_id' => 'required|integer',
        ]);

        Faculty::where('faculty_id', $id)->update([
            'faculty_name' => $request->faculty_name,
            'country_id' => $request->country_id,
            'university_id' => $request->university_id,
        ]);

        return redirect()->back()->with('success', 'Faculty updated successfully.');
    }

    public function delete($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->isDelete = 1;
        $faculty->save();

        return redirect()->back()->with('success', 'Faculty deleted successfully.');
    }

    public function destroy(Request $request)
    {
        if ($request->has('ids')) {
            Faculty::whereIn('faculty_id', $request->ids)->update(['isDelete' => 1]);
        }

        return response()->json(['success' => 'Selected faculties deleted.']);
    }

    public function status($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->iStatus = $faculty->iStatus == 1 ? 0 : 1;
        $faculty->save();

        return redirect()->back()->with('success', 'Status updated.');
    }
    public function universitiesByCountry($countryId)
    {
        $universities = University::where('isDelete', 0)
            ->where('country_id', $countryId)
            ->orderBy('university_name')
            ->get();
    
        return response()->json([
            'success' => true,
            'data' => $universities
        ]);
    }
    public function byUniversity($university_id)
{
    $faculties = Faculty::select('faculty_id', 'faculty_name')
        ->where('isDelete', 0)
        ->where('university_id', $university_id)
        ->orderBy('faculty_name')
        ->get();

    return response()->json([
        'success' => true,
        'data' => $faculties
    ]);
}


}