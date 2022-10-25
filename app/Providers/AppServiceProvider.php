<?php

namespace App\Providers;

use App\Like;
use App\Location;
use App\Setting;
use App\Category;
use App\Villa;
use App\Post;
use App\Article;
use App\User;
use App\Meta;
use App\Fav;
use App\about;
use App\ContactInfo;
use App\Contact;
use App\Footer;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $this->url = $request->fullUrl();
        Schema::defaultStringLength(191);
        Carbon::setLocale('fa');

        Blade::directive('dir', function () {
            if(Carbon::getLocale() == "fa") {
                return "dir='rtl'";
            }
        });

        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });

        view()->composer('panel.particle.nav', function ($view) {
            $view->with('setting', Setting::select('title')->latest()->firstOrFail());
        });
        view()->composer('user.layouts.user', function ($view) {
            $seo = Meta::where('url', $this->url)->where('status','active')->first();
//            dd($seo);
            if (is_null($seo)) {
                $seo = Meta::where('url', $this->url . '/')->where('status','active')->first();
                if (is_null($seo)) {
                    $seo = Meta::where('url', explode('?', $this->url)[0])->where('status','active')->first();
                    if (is_null($seo)) {
                        $seo = Meta::where('url', explode('?', $this->url)[0] . '/')->first();
                    }
                }
            }
            if (!is_null($seo)) {
                $titleSeo = $seo->title;
                $keywordsSeo = $seo->key_word;
                $descriptionSeo = $seo->description;
            }
            else {
                $titleSeo ='خرید خانه در ترکیه-اقامت در ترکیه-خرید ملک در ترکیه';
                $keywordsSeo = 'خرید خانه در ترکیه-اقامت در ترکیه-خرید ملک در ترکیه';
                $descriptionSeo = '';
            }
            $contact_provider=ContactInfo::first();
            $view
                ->with('urlPage', $this->url)
                ->with('contact_provider', $contact_provider)
                ->with('abouts', about::all())
                ->with('titleSeo', $titleSeo)
                ->with('keywordsSeo', $keywordsSeo)
                ->with('descriptionSeo', $descriptionSeo)
                ->with('eghamat_cats', Category::where('type','eghamat')->where('parent_id',null)->get())
                ->with('shahrvandi_cats', Category::where('type','shahrvandi')->where('parent_id',null)->get())
                ->with('job_cats', Category::where('type','job')->where('parent_id',null)->get())
                ->with('article_cats', Category::where('type','article')->where('parent_id',null)->get())
                ->with('radio_cats', Category::where('type','radio_vandidad')->where('parent_id',null)->get())
                ->with('about_footer', About::where('page','footer')->where('status','active')->first())
                ->with('villas_category', Category::where('type', 'villa')->where('status', 'published')->orderBy('id','DESC')->take(7)->get());
        });
        view()->composer('layouts.app', function ($view) {
            $compare=session('compare')??[];
            $view->with('price_min', Villa::all()->min('price'));
            $view->with('price_max', Villa::all()->max('price'));
            $view->with('compare', $compare);
        });
        view()->composer('user.layouts.app', function ($view) {
            $compare=session('compare')??[];
            $view->with('compare', $compare);
            $view->with('abouts', about::all());
            $view->with('fav_count', Fav::where('user_id',Auth::check()?Auth::user()->id:0)->whereHas('project')->count());
        });

        view()->composer('layouts.back', function ($view) {
            $pending_users = User::where('account_status','pending')->role(['مدیر ملک','مدیر ملک(برنزی)','کارشناس فروش'])->limit(5)->get();
            $view
                ->with('count_contact', Contact::where('new',0)->where('type','contact')->count())
                ->with('count_consulting', Contact::where('new',0)->where('type','consulting')->count())
                ->with('pending_users', $pending_users);
        });

        view()->composer('layouts.frontend', function ($view) {
            $seo = Meta::where('url', $this->url)->where('status','active')->first();
//            dd($seo);
            if (is_null($seo)) {
                $seo = Meta::where('url', $this->url . '/')->where('status','active')->first();
                if (is_null($seo)) {
                    $seo = Meta::where('url', explode('?', $this->url)[0])->where('status','active')->first();
                    if (is_null($seo)) {
                        $seo = Meta::where('url', explode('?', $this->url)[0] . '/')->first();
                    }
                }
            }
            if (!is_null($seo)) {
                $titleSeo = $seo->title;
                $keywordsSeo = $seo->key_word;
                $descriptionSeo = $seo->description;
            }
            else {
                $titleSeo ='خرید خانه در استانبول';
                $keywordsSeo = 'مهاجرت، خرید ملک در استانبول';
                $descriptionSeo = 'مشاوره خرید ملک در اسنانبول';
            }
            $view
                ->with('titleSeo', $titleSeo)
                ->with('keywordsSeo', $keywordsSeo)
                ->with('descriptionSeo', $descriptionSeo);
        });

        view()->composer('layouts.front', function ($view) {
            $post_lastest = Post::where('status', 'published')->latest()->take(5)->get();
            $view->with(['locations' => Location::get(), 'post_lastest' => $post_lastest]);
        });

        view()->composer('user.layouts.header', function ($view) {
            $about = about::latest()->first();
            $contact_provider=ContactInfo::first();
            $view->with(['about' => $about]);
            $view->with('contact_provider', $contact_provider);
        });
        view()->composer('user.layouts.footer', function ($view) {
            $about = about::latest()->first();
            $contact_provider=ContactInfo::first();
            $Footers = Footer::orderBy('id', 'DESC')->get();
            $view->with(['about' => $about,'Footers'=>$Footers]);
            $view->with('contact_provider', $contact_provider);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
