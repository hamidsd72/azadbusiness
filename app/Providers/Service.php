<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Service extends Model
{

    protected $table = 'Services';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function category()
    {
        return $this->hasOne('App\Category', 'id','category_id');
    }

//    public function photo()
//    {
//        return $this->morphOne('App\Photo', 'pictures');
//    }
//
//    public function comments()
//    {
//        return $this->morphMany('App\Comment', 'commendable');
//    }

//    protected static function boot()
//    {
//        parent::boot();
//        static::deleting(function ($post) {
//            $post->photo()->get()->each(function ($photo) {
//                File::delete($photo);
//                $photo->delete();
//            });
//            $post->comments()->get()->each(function ($comment) {
//                $comment->delete();
//            });
//        });
//    }

}
