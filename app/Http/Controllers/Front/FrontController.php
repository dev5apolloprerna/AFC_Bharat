<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        try {
            $galleryImages = DB::table('gallery_master')
                ->where('iStatus', 1)
                ->where('isDelete', 0)
                ->orderBy('gallery_id', 'ASC')
                ->take(4)
                ->get();

            $galleryVideos = DB::table('video_gallery')
                ->where('iStatus', 1)
                ->where('isDelete', 0)
                ->orderBy('video_Id', 'ASC')
                ->take(4)
                ->get();

            return view('frontview.index', compact('galleryImages', 'galleryVideos'));

        } catch (\Throwable $e) {
            Log::error('Home Page Error', [
                'message' => $e->getMessage(),
                'file'    => $e->getFile(),
                'line'    => $e->getLine(),
            ]);

            return redirect()->back()
                ->with('error', 'Failed to load homepage. Please try again.');
        }
    }

    public function about(Request $request)
    {
        try {
            return view('frontview.about');

        } catch (\Throwable $e) {
            Log::error('About Page Error', [
                'message' => $e->getMessage(),
            ]);

            return redirect()->back()
                ->with('error', 'Failed to load about page.');
        }
    }
     public function destination(Request $request)
    {
        try {
            return view('frontview.studydestination');

        } catch (\Throwable $e) {
            Log::error('destination Page Error', [
                'message' => $e->getMessage(),
            ]);

            return redirect()->back()
                ->with('error', 'Failed to load destination page.');
        }
    }

     public function program(Request $request)
    {
        // try {
         $courses = DB::table('courses_master as c')
        ->leftJoin('duration_master as d', 'c.duration_id', '=', 'd.id')
        ->where('c.isDelete', 0)
        ->where('c.iStatus', 1)
        ->orderBy('c.course_name', 'ASC')
        ->select(
            'c.*',
            'd.duration as duration_name'
        )
        ->get();

    $durations = DB::table('duration_master')
        
        ->orderBy('duration', 'ASC')
        ->get();


            return view('frontview.program', compact('courses', 'durations'));

        // } catch (\Throwable $e) {
        //     Log::error('program Page Error', [
        //         'message' => $e->getMessage(),
        //     ]);

        //     return redirect()->back()
        //         ->with('error', 'Failed to load program page.');
        // }
    }

     public function contact(Request $request)
    {
        try {
            return view('frontview.contact');

        } catch (\Throwable $e) {
            Log::error('contact Page Error', [
                'message' => $e->getMessage(),
            ]);

            return redirect()->back()
                ->with('error', 'Failed to load contact page.');
        }
    }

    public function gallery(Request $request)
    {
        try {
            $galleryImages = DB::table('gallery_master')
                ->where('iStatus', 1)
                ->where('isDelete', 0)
                ->orderBy('gallery_id', 'ASC')
                ->get();

            $galleryVideos = DB::table('video_gallery')
                ->where('iStatus', 1)
                ->where('isDelete', 0)
                ->orderBy('video_Id', 'ASC')
                ->get();

            return view('frontview.gallery', compact('galleryImages', 'galleryVideos'));

        } catch (\Throwable $e) {
            Log::error('Gallery Page Error', [
                'message' => $e->getMessage(),
            ]);

            return redirect()->back()
                ->with('error', 'Failed to load gallery.');
        }
    }

     public function franchisee(Request $request)
    {
        try {
            return view('frontview.franchisee');

        } catch (\Throwable $e) {
            Log::error('franchisee Page Error', [
                'message' => $e->getMessage(),
            ]);

            return redirect()->back()
                ->with('error', 'Failed to load franchisee page.');
        }
    }

     public function admission(Request $request)
    {
        try {
            return view('frontview.admission');

        } catch (\Throwable $e) {
            Log::error('admission Page Error', [
                'message' => $e->getMessage(),
            ]);

            return redirect()->back()
                ->with('error', 'Failed to load admission page.');
        }
    }
}

