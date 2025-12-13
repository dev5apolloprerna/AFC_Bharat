<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryMaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GalleryMasterController extends Controller
{
    private string $uploadPath; // e.g. .../public_html/khatushyam/timetable
    private string $publicUrl;  // e.g. {APP_URL}/khatushyam/timetable

    public function __construct()
    {
        // Folder name only; base path & base url come from helpers
        $folder = 'gallery_master';

        $this->uploadPath = afc_base_path($folder);
        $this->publicUrl  = afc_base_url($folder);

        ensure_dir($this->uploadPath);

    }

    public function index()
    {
        $gallery = DB::table('gallery_master as g')
                    ->where('g.isDelete', 0)
                    ->paginate(10);


        return view('admin.gallery_master.index', compact('gallery'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = $this->storeImage($request->file('image'));
        }

        GalleryMaster::create([
            'image' => $imageName,
            'iStatus' => $request->iStatus ?? 1,
        ]);

        return redirect()->route('admin.gallery_master.index')->with('success', 'Image uploaded successfully.');
    }

    public function edit($id)
    {
        $data = GalleryMaster::findOrFail($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $gallery = GalleryMaster::findOrFail($id);

        $image = $gallery->image;

        $imageName = $gallery->image;
        if ($request->hasFile('image')) {
            $newName = $this->storeImage($request->file('image'));
            if ($imageName) {
                $this->unlinkImage($imageName);
            }
            $imageName = $newName;
        }

        
        $gallery->update([
            'image' => $imageName,
            'iStatus' => $request->iStatus ?? 1,
        ]);

        return redirect()->route('admin.gallery_master.index')->with('success', 'Image updated successfully.');
    }

    public function destroy(Request $request)
    {
        $gallery = GalleryMaster::findOrFail($request->id);
        
        if ($gallery->image) {
            $this->unlinkImage($gallery->image);
            $gallery->delete();
        }

        return back()->with('success', 'Album deleted.');
    }

    public function bulkDelete(Request $request)
    {
        $items = GalleryMaster::whereIn('gallery_id', $request->ids)->get();

        foreach($items as $item) {

            if ($item->image) {
                $this->unlinkImage($item->image);
                $b->update(['image' => null]);
            }

           $item->update(['isDelete' => 1]);
        }

        return response()->json(['status' => 'success']);
    }

    public function toggleStatus($gallery)
    {
        $gallery = GalleryMaster::where('gallery_id',$gallery)->first();
        if ($gallery->isDelete) {
            return response()->json(['ok' => false, 'message' => 'Cannot toggle deleted record.'], 422);
        }
        $gallery->iStatus = $gallery->iStatus ? 0 : 1;
        $gallery->update([
            'iStatus' => $gallery->iStatus
        ]);

        return redirect()->back()->with('success','Status Updated');
    }
    private function storeImage($file): string
    {
        $ts  = now()->format('YmdHisv'); // timestamped filename
        $ext = $file->getClientOriginalExtension();
        $name = $ts . '.' . $ext;
        $file->move($this->uploadPath, $name);
        return $name;
    }

    private function unlinkImage(?string $name): void
    {
        if (!$name) return;
        $full = $this->uploadPath . DIRECTORY_SEPARATOR . $name;
        if (File::exists($full)) {
            @File::delete($full);
        }
    }
}
