<?php

namespace App\Http\Controllers\User;

use App\about;
use App\Article;
use App\Villa;
use App\Category;
use App\Cat;
use App\CatLocale;
use App\Property;
use App\Menu;
use function Couchbase\defaultDecoder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class educationalController extends Controller
{

    public function index()
    {
        $post = Article::where('type','educational')->where('id',119)->first();
        $Menus = Menu::where('page_name','educational')->where('parent_id',0)->get();
        return view('user.educational.index',compact('post','Menus'));
    }

    public function Show($slug)
    {
        $item = Article::where('slug',$slug)->first();
        $Menus = Menu::where('page_id',119)->where('parent_id',0)->get();

        return view('user.educational.show',compact('item','Menus'),['title'=>'خدمت ']);
    }




}
