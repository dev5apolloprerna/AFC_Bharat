<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $query = Country::where('isDelete', 0);

        if ($request->has('search') && $request->search != '') {
            $query->where('country_name', 'like', '%' . $request->search . '%');
        }

        $data['countries'] = $query->orderBy('country_id', 'desc')->paginate(10);
        return view('admin.country.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|string|max:100',
        ]);

        Country::create([
            'country_name' => $request->country_name,
        ]);

        return redirect()->back()->with('success', 'Country added successfully.');
    }

    public function edit($id)
    {
        $country = Country::where('isDelete', 0)->findOrFail($id);
        return response()->json($country);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'country_name' => 'required|string|max:100',
        ]);

        $country = Country::findOrFail($id);
        $country->update([
            'country_name' => $request->country_name,
        ]);

        return redirect()->back()->with('success', 'Country updated successfully.');
    }

    public function delete($id)
    {
        $country = Country::findOrFail($id);
        // $country->isDelete = 1;
        $country->delete();

        return redirect()->back()->with('success', 'Country deleted successfully.');
    }

    public function destroy(Request $request)
    {
        if ($request->has('ids')) {
            Country::whereIn('country_id', $request->ids)->delete();
        }

        return response()->json(['success' => 'Selected countries deleted.']);
    }

    public function status($id)
    {
        $country = Country::findOrFail($id);
        $country->iStatus = $country->iStatus == 1 ? 0 : 1;
        $country->save();

        return redirect()->back()->with('success', 'Status updated.');
    }
}
