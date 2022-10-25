<?php

namespace App\Http\Controllers\User;

use App\about;
use App\Article;
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

class LegalController extends Controller
{

    public function index()
    {
        $post = Article::where('type','Legal')->where('id',125)->first();
        $Menus = Menu::where('page_id',$post->id)->where('parent_id',0)->get();
        return view('user.Legal.index',compact('post','Menus'));

    }
    public function Show($slug)
    {
        $item = Article::where('slug',$slug)->where('type','Legal')->first();
        $Menus = Menu::where('page_id',132)->where('parent_id',0)->get();

        return view('user.Legal.show',compact('item','Menus'));
    }


}
