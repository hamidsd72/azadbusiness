<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\GalleryRequest;
use App\Photo;
use App\Setting;
use App\Gallery;
use App\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class galleryController extends Controller
{

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'گالری‌ها';
        } elseif ('single') {
            return 'گالری';
        }
    }

    public function controller_paginate()
    {
        $settings = Setting::select('paginate')->latest()->firstOrFail();
        return $settings->paginate;
    }

    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Photo::where('type','gallery_Istanbul')->get();
        return view('panel.galleries.index', compact('galleries'), ['title' => $this->controller_title('sum')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            try {

                $galls = $request->file('gallery');

                if ($request->hasFile('gallery')) {
                    foreach ($galls as $gall) {
                        $photo = new Photo();
                        $photo->type = 'gallery_Istanbul';
                        $photo->name = $request->link;
                        $photo->path = file_store($gall, 'source/assets/uploads/villas/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');
                        $photo->save();
                    }
                }

                return redirect()->route('gallery-edit')->with('flash_message', 'تصویر با موفقیت افزوده شد.');

            } catch (\Exception $e) {

                return redirect()->back()->withInput();

            }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        $villas = Villa::latest()->get();
        return view('panel.galleries.edit', compact('gallery', 'villas'), ['title' => $this->controller_title('single')]);
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        try {

            $gallery->delete();
            return redirect()->route('gallery-list')->with('flash_message', 'گالری با موفقیت حذف شد.');

        } catch (\Exception $e) {

            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function photo_destroy($id)
    {
        $photo = Photo::findOrFail($id);

        try {

            File::delete($photo->path);
            $photo->delete();
            return redirect()->back()->with('flash_message', 'تصویر با موفقیت حذف شد.');

        } catch (\Exception $e) {

            return redirect()->back();

        }
    }
}
