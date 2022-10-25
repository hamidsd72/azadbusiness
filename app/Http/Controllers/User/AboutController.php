<?php

namespace App\Http\Controllers\User;

use App\about;
use Carbon\Carbon;
use function Couchbase\defaultDecoder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use function Sodium\compare;

class AboutController extends Controller
{
    public function show($slug)
    {
        $item = about::where('slug',$slug)->first();
        $abouts = about::all();
        return view('user.about.show',compact('item','abouts'),['title'=>'خدمت ']);
    }

}
