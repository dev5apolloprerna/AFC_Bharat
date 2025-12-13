<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Country;
use Illuminate\Support\Facades\File;

class UniversityController extends Controller
{
    public function index(Request $request)
    {
        $query = University::with('country')->where('isDelete', 0);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('university_name', 'like', "%$search%")
                  ->orWhere('university_city', 'like', "%$search%")
                  ->orWhereHas('country', function($cq) use ($search) {
                      $cq->where('country_name', 'like', "%$search%") ;
                  });
            });
        }

        $data['universities'] = $query->orderBy('university_id', 'desc')->paginate(10);
        return view('admin.university.index', $data);
    }

    public function create()
    {
        $data['countries'] = Country::where('isDelete', 0)->orderBy('country_name')->get();
        return view('admin.university.add_edit', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required|integer',
            'university_name' => 'required|string|max:200',
            'university_logo' => 'nullable|image',
        ]);

        $filename = null;
        if ($request->hasFile('university_logo')) {
            $file = $request->file('university_logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = afc_base_path('university_logo');
            ensure_dir($path);
            $file->move($path, $filename);
        }

        University::create([
            'country_id' => $request->country_id,
            'university_name' => $request->university_name,
            'university_logo' => $filename,
            'university_address' => $request->university_address,
            'university_city' => $request->university_city,
            'university_state' => $request->university_state,
        ]);

        return redirect()->route('admin.university.index')->with('success', 'University added successfully.');
    }

    public function edit($id)
    {
        $data['university'] = University::findOrFail($id);
        $data['countries'] = Country::where('isDelete', 0)->orderBy('country_name')->get();
        return view('admin.university.add_edit', $data);
    }

    public function update(Request $request, $id)
    {
        $university = University::findOrFail($id);

        $request->validate([
            'country_id' => 'required|integer',
            'university_name' => 'required|string|max:200',
            'university_logo' => 'nullable|image',
        ]);

        $filename = $university->university_logo;

        if ($request->hasFile('university_logo')) {
            if ($filename && file_exists(afc_base_path('university_logo/' . $filename))) {
                unlink(afc_base_path('university_logo/' . $filename));
            }
            $file = $request->file('university_logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = afc_base_path('university_logo');
            ensure_dir($path);
            $file->move($path, $filename);
        }

        $university->update([
            'country_id' => $request->country_id,
            'university_name' => $request->university_name,
            'university_logo' => $filename,
            'university_address' => $request->university_address,
            'university_city' => $request->university_city,
            'university_state' => $request->university_state,
        ]);

        return redirect()->route('admin.university.index')->with('success', 'University updated successfully.');
    }

    public function delete($id)
    {
        $uni = University::findOrFail($id);
        if ($uni->university_logo && file_exists(afc_base_path('university_logo/' . $uni->university_logo))) {
            unlink(afc_base_path('university_logo/' . $uni->university_logo));
        }
        $uni->isDelete = 1;
        $uni->save();

        return redirect()->back()->with('success', 'University deleted successfully.');
    }

    public function destroy(Request $request)
    {
        if ($request->has('ids')) {
            $universities = University::whereIn('university_id', $request->ids)->get();
            foreach ($universities as $uni) {
                if ($uni->university_logo && file_exists(afc_base_path('university_logo/' . $uni->university_logo))) {
                    unlink(afc_base_path('university_logo/' . $uni->university_logo));
                }
                $uni->isDelete = 1;
                $uni->save();
            }
        }

        return response()->json(['success' => 'Selected universities deleted.']);
    }

    public function status($id)
    {
        $uni = University::findOrFail($id);
        $uni->iStatus = $uni->iStatus == 1 ? 0 : 1;
        $uni->save();

        return redirect()->back()->with('success', 'Status updated.');
    }
}
