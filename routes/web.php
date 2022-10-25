<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Api;
use App\Article;
use App\About;
use App\User;

function callAPI($method, $url, $data){
    $curl = curl_init();
    switch ($method){
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'APIKEY: lmro3ykaiJeqxU8Tz7gVh1bMw6RXOptd',
        'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
}
Route::get('sss', function () {
    $get_data = callAPI('GET', 'http://api.navasan.tech/latest/?api_key=freeNgXYTvlPeWzv6yukAQze6aa433u5', false);
    $response = json_decode($get_data, true);
    echo
        'یورو به تومان : '.$response["eur"]['value'].'<br/> تغییر نسبت به دیروز : '.$response["eur"]['change'].'<br/> زمان بروزرسانی : '.$response["eur"]['date']
        .'</br></br></br> دلار آمریکا به تومان : '.$response["usd"]['value'].'<br/> تغییر نسبت به دیروز : '.$response["usd"]['change'].'<br/> زمان بروزرسانی : '.$response["usd"]['date']
        .'</br></br></br> لیر ترکیه به تومان : '.$response["try"]['value'].'<br/> تغییر نسبت به دیروز : '.$response["try"]['change'].'<br/> زمان بروزرسانی : '.$response["try"]['date']
        .'</br></br></br> درهم امارات به تومان : '.$response["aed"]['value'].'<br/> تغییر نسبت به دیروز : '.$response["aed"]['change'].'<br/> زمان بروزرسانی : '.$response["aed"]['date'];
});

Route::get('test', function () {
    echo file_get_contents("https://www.doviz.com/");
});


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

Route::get('maketable', function () {

    /*Schema::create('teams', function (Blueprint $table) {
        $table->increments('id');
        $table->char('name',255);
        $table->char('text',255);
        $table->char('lang',255)->default('fa');
        $table->timestamps();
    });

    Schema::create('CustomerSlider', function (Blueprint $table) {
        $table->increments('id');
        $table->char('name',255);
        $table->char('title',255);
        $table->char('text',255);
        $table->char('pic',255);
        $table->char('lang',255)->default('fa');
        $table->timestamps();
    });
    Schema::create('boutSlider', function (Blueprint $table) {
        $table->increments('id');
        $table->char('title',255);
        $table->text('text');
        $table->char('pic',255);
        $table->char('lang',255)->default('fa');
        $table->timestamps();
    });

    Schema::create('about_sliders', function (Blueprint $table) {
        $table->increments('id');
        $table->char('title',255);
        $table->text('text');
        $table->char('pic',255);
        $table->char('lang',255)->default('fa');
        $table->timestamps();
    });

    Schema::create('Services', function (Blueprint $table) {
        $table->increments('id');
        $table->char('title',255)->nullable(true);
        $table->text('text_short')->nullable(true);
        $table->longText('text')->nullable(true);
        $table->text('photo')->nullable(true);
        $table->text('file')->nullable(true);
        $table->char('author',255)->nullable(true);
        $table->char('slug',255)->nullable(true);
        $table->integer('status')->nullable(true);
        $table->char('page_title',255)->nullable(true);
        $table->text('keywords')->nullable(true);
        $table->text('description')->nullable(true);
        $table->integer('user_id')->nullable(true);
        $table->integer('seen')->nullable(true);
        $table->integer('search')->nullable(true);
        $table->char('type',255)->nullable(true);
        $table->integer('category_id')->nullable(true);
        $table->char('lang',255)->default('fa');
        $table->timestamps();
    });
    Schema::create('abouts', function (Blueprint $table) {
        $table->increments('id');
        $table->char('title',255)->nullable(true);
        $table->text('text_short')->nullable(true);
        $table->longText('text')->nullable(true);
        $table->text('photo')->nullable(true);
        $table->text('file')->nullable(true);
        $table->char('author',255)->nullable(true);
        $table->char('slug',255)->nullable(true);
        $table->integer('status')->nullable(true);
        $table->char('page_title',255)->nullable(true);
        $table->text('keywords')->nullable(true);
        $table->text('description')->nullable(true);
        $table->integer('user_id')->nullable(true);
        $table->integer('seen')->nullable(true);
        $table->integer('search')->nullable(true);
        $table->char('type',255)->nullable(true);
        $table->integer('category_id')->nullable(true);
        $table->char('lang',255)->default('fa');
        $table->timestamps();
    });
    Schema::create('events', function (Blueprint $table) {
        $table->increments('id');
        $table->char('title',255)->nullable(true);
        $table->text('text_short')->nullable(true);
        $table->longText('text')->nullable(true);
        $table->text('photo')->nullable(true);
        $table->text('file')->nullable(true);
        $table->char('author',255)->nullable(true);
        $table->char('slug',255)->nullable(true);
        $table->integer('status')->nullable(true);
        $table->char('page_title',255)->nullable(true);
        $table->text('keywords')->nullable(true);
        $table->text('description')->nullable(true);
        $table->integer('user_id')->nullable(true);
        $table->integer('seen')->nullable(true);
        $table->integer('search')->nullable(true);
        $table->char('type',255)->nullable(true);
        $table->integer('category_id')->nullable(true);
        $table->char('lang',255)->default('fa');
        $table->timestamps();
    });

    Schema::create('franchise', function (Blueprint $table) {
        $table->increments('id');
        $table->longText('text')->nullable(true);
        $table->text('photo')->nullable(true);
        $table->json('winners');
        $table->char('service_1',255);
        $table->char('service_2',255);
        $table->char('service_3',255);
        $table->char('service_4',255);
        $table->timestamps();
    });
    Schema::create('menus', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('title');
        $table->string('slug');
        $table->integer('parent_id');
        $table->integer('page_id');
        $table->timestamps();
    });
    Schema::create('exchanges', function (Blueprint $table) {
        $table->increments('id');
        $table->longText('text')->nullable(true);
        $table->text('photo')->nullable(true);
        $table->integer('lirPrice');
        $table->char('SpecialTiltle',255);
        $table->char('SpecialText',255);
        $table->timestamps();
    });
    Schema::create('exchange_sliders', function (Blueprint $table) {
        $table->increments('id');
        $table->char('title',255)->nullable(true);
        $table->timestamps();
    });
    Schema::create('estates', function (Blueprint $table) {
        $table->increments('id');
        $table->longText('text')->nullable(true);
        $table->text('photo')->nullable(true);
        $table->char('photo_tab_1',255);
        $table->char('photo_tab_2',255);
        $table->char('photo_tab_3',255);
        $table->char('photo_tab_4',255);
        $table->char('photo_tab_5',255);
        $table->char('photo_category_1',255);
        $table->char('photo_category_2',255);
        $table->char('photo_category_3',255);
        $table->char('photo_category_4',255);
        $table->char('photo_category_5',255);
        $table->char('photo_category_6',255);
        $table->char('photo_category_7',255);
        $table->char('photo_category_8',255);
        $table->char('photo_category_9',255);
        $table->char('photo_category_10',255);

        $table->timestamps();
    });*/

//    Schema::create('footers', function (Blueprint $table) {
//        $table->increments('id');
//        $table->char('title',255)->nullable(true);
//        $table->char('img',255)->nullable(true);
//        $table->char('link',255)->nullable(true);
//        $table->timestamps();
//    });

});

Route::post('loadMoreVilla','HomeController@loadMore')->name('loadMoreVilla');

Route::get('fake/{id}', function ($id) {
    Auth::loginUsingId($id);

    return redirect('panel');
});
 

Route::get('get/{id}', function ($id) {
    dd(User::find($id));
});

Auth::routes(['register' => false]);


// index

Route::get('/city_ajax_js/{type}/{id}','HomeController@city_ajax_js')->name('city_ajax_js');
Route::get('sitemap.xml','HomeController@sitemap');
Route::post('request_expert', 'Auth\RegisterController@request_expert')->name('request_expert');

Route::post('filemanager/upload',function (Request $request ){
    if(isset($_FILES['upload']['name'])) {
        $file=$_FILES['upload']['name'];
        $filetmp=$_FILES['upload']['tmp_name'];
        $file_pas=explode('.',$file);
        $file_n='check_editor_'.time().'_'.$file_pas[0].'.'.end($file_pas);
        $photo=move_uploaded_file($filetmp,'source/assets/uploads/editor/'.$file_n);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = url('source/assets/uploads/editor/'.$file_n);
        $msg = 'Image uploaded successfully';
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

        @header('Content-type: text/html; charset=utf-8');
        echo $response;
    }
})->name('filemanager_upload');
Route::get('filemanager',function (Request $request ){
    $paths=glob('source/assets/uploads/editor/*');
    $fileNames=array();
    foreach ($paths as $path)
    {
        array_push($fileNames,basename($path));
    }
    $data=array(
        'fileNames'=>$fileNames
    );
    return view('file_manager')->with($data);
})->name('filemanager');
Route::group(['prefix' => 'panel', 'namespace' => 'Panel', 'middleware' => ['auth']], function () {

    // index
    Route::get('/', 'PanelController@index')->name('index');

    // upload-list
    Route::get('upload/list', 'ReController@upload')->name('upload-list');
    Route::post('upload/store', 'ReController@upload_store')->name('upload-store');
    // upload file
    Route::any('/uploads/{folder}/{waterMark}/{height}/{width}', 'PanelController@upload')->name('index-upload');
    Route::post('/uploads/file/delete', 'PanelController@deleteUpload')->name('index-files-delete');
    // profile
    Route::get('profile-show/{id}', 'ProfileController@show')->name('profile-show');
    Route::get('profile-edit/{id}', 'ProfileController@edit')->name('profile-edit');
    Route::get('profile-password-change/{id}', 'ProfileController@password')->name('profile-password');
    Route::get('profile-info/{id}', 'ProfileController@info')->name('profile-info');
    Route::patch('profile-update/{id}', 'ProfileController@update')->name('profile-update');
    Route::patch('profile-password-update/{id}', 'ProfileController@password_update')->name('profile-password-update');
    Route::patch('profile-info-update/{id}', 'ProfileController@info_update')->name('profile-info-update');

    // Cities
    Route::get('city-list', 'CityController@index')->name('city-list');
    Route::get('city-create', 'CityController@create')->name('city-create');
    Route::post('city-save', 'CityController@store')->name('city-save');
    Route::get('city-edit/{id}', 'CityController@create')->name('city-edit');
    Route::post('city-update', 'CityController@update')->name('city-update');
    Route::get('city-delete/{id}', 'CityController@destory')->name('city-delete');
    Route::get('city/{id}', 'PanelController@city')->name('city');

    Route::get('/set-photo-sort', 'PanelController@setPhotoSort')->name('set-photo-sort');
    Route::get('/set-photo-delete', 'PanelController@setPhotoDelete')->name('set-photo-delete');

    // visitlog
    Route::get('visitlogs', 'VisitlogController@index')->name('visitlogs');

    // settings
    Route::get('settings', 'SettingController@index')->name('settings-list');
    Route::patch('settings/{id}', 'SettingController@update')->name('settings-update');

    // locations
//    Route::get('location-create', 'LocationController@create')->name('location-create');
//    Route::put('location-store', 'LocationController@store')->name('location-store');
    Route::get('location-list', 'LocationController@index')->name('location-list');
    Route::get('location-edit/{id}', 'LocationController@edit')->name('location-edit');
    Route::patch('location-update/{id}', 'LocationController@update')->name('location-update');
//    Route::delete('location-destroy/{id}', 'LocationController@destroy')->name('location-destroy');
//    Route::post('location-list', 'LocationController@search')->name('location-search');
    Route::get('location-active/{id}/{type}', 'LocationController@active')->name('location-active');

    // properties
    Route::get('property-create', 'PropertyController@create')->name('property-create');
    Route::put('property-store', 'PropertyController@store')->name('property-store');
    Route::get('property-list', 'PropertyController@index')->name('property-list');
    Route::get('property-edit/{id}', 'PropertyController@edit')->name('property-edit');
    Route::patch('property-update/{id}', 'PropertyController@update')->name('property-update');
    Route::delete('property-destroy/{id}', 'PropertyController@destroy')->name('property-destroy');
    Route::post('property-list', 'PropertyController@search')->name('property-search');
    // cats
    Route::get('cats-create', 'CatController@create')->name('cats-create');
    Route::put('cats-store', 'CatController@store')->name('cats-store');
    Route::get('cats-list', 'CatController@index')->name('cats-list');
    Route::get('cats-edit/{id}', 'CatController@edit')->name('cats-edit');
    Route::patch('cats-update/{id}', 'CatController@update')->name('cats-update');
    Route::delete('cats-destroy/{id}', 'CatController@destroy')->name('cats-destroy');
    // cat locale
    Route::get('cat-locale-create', 'CatLocaleController@create')->name('cat-locale-create');
    Route::put('cat-locale-store', 'CatLocaleController@store')->name('cat-locale-store');
    Route::get('cat-locale-list', 'CatLocaleController@index')->name('cat-locale-list');
    Route::get('cat-locale-edit/{id}', 'CatLocaleController@edit')->name('cat-locale-edit');
    Route::patch('cat-locale-update/{id}', 'CatLocaleController@update')->name('cat-locale-update');
    Route::delete('cat-locale-destroy/{id}', 'CatLocaleController@destroy')->name('cat-locale-destroy');
    Route::get('cat-locale-active/{id}/{type}', 'CatLocaleController@active')->name('cat-locale-active');

    // categories
    Route::get('villa-category-create', 'VillaCategoryController@create')->name('villa-category-create');
    Route::put('villa-category-store', 'VillaCategoryController@store')->name('villa-category-store');
    Route::get('villa-category-list', 'VillaCategoryController@index')->name('villa-category-list');
    Route::get('villa-category-edit/{id}', 'VillaCategoryController@edit')->name('villa-category-edit');
    Route::patch('villa-category-update/{id}', 'VillaCategoryController@update')->name('villa-category-update');
    Route::delete('villa-category-destroy/{id}', 'VillaCategoryController@destroy')->name('villa-category-destroy');
    Route::post('villa-category-sort', 'VillaCategoryController@sort_item')->name('villa-category-sort');
    Route::post('villa-category-update-count/{id}', 'VillaCategoryController@update_count')->name('villa-category-update-count');
    Route::get('villa-category-photo-destroy/{id}', 'VillaCategoryController@photo_destroy')->name('villa-category-photo-destroy');
    Route::get('villa-category-active/{id}/{type}', 'VillaCategoryController@active')->name('villa-category-active');
    Route::get('villa-category-vip/{id}/{type}', 'VillaCategoryController@vip')->name('villa-category-vip');
    // categories property top
    Route::get('villa-category-property-create/{c_id}', 'VillaCategoryPropertyController@create')->name('villa-category-property-create');
    Route::put('villa-category-property-store/{c_id}', 'VillaCategoryPropertyController@store')->name('villa-category-property-store');
    Route::get('villa-category-property-list/{c_id}', 'VillaCategoryPropertyController@index')->name('villa-category-property-list');
    Route::get('villa-category-property-edit/{id}', 'VillaCategoryPropertyController@edit')->name('villa-category-property-edit');
    Route::patch('villa-category-property-update/{id}', 'VillaCategoryPropertyController@update')->name('villa-category-property-update');
    Route::delete('villa-category-property-destroy/{id}', 'VillaCategoryPropertyController@destroy')->name('villa-category-property-destroy');
    Route::post('villa-category-property-sort/{id}', 'VillaCategoryPropertyController@sort')->name('villa-category-property-sort');
    Route::get('villa-category-property-active/{id}/{type}', 'VillaCategoryPropertyController@active')->name('villa-category-property-active');

    // villa
    Route::get('districts/{id}', 'VillaController@districts')->name('districts');
    Route::get('villa-create', 'VillaController@create')->name('villa-create');
    Route::put('villa-store', 'VillaController@store')->name('villa-store');
    Route::get('villa-list/{type?}', 'VillaController@index')->name('villa-list');
    Route::get('villa-list-indexByUserId/{id}/{from?}/{to?}', 'VillaController@indexByUserId')->name('villa-list-indexByUserId');
    Route::get('villa-search-index', 'VillaController@search_index')->name('villa-search-index');
    Route::get('villa-show/{id}', 'VillaController@show')->name('villa-show');
    Route::get('villa-edit/{id}', 'VillaController@edit')->name('villa-edit');
    Route::patch('villa-update/{id}', 'VillaController@update')->name('villa-update');
    Route::delete('villa-destroy/{id}', 'VillaController@destroy')->name('villa-destroy');
    Route::get('villa-search/{type?}', 'VillaController@search')->name('villa-search');
    Route::get('villa-find/{type?}', 'VillaController@find')->name('villa-find');
    Route::post('villa-verify', 'VillaController@verify')->name('villa-verify');
    Route::post('villa-status/{villa}', 'VillaController@status')->name('villa-status');
    Route::get('villa-active/{id}/{type}', 'VillaController@active')->name('villa-active');
    Route::get('villa-active-sale/{id}/{type}', 'VillaController@active_sale')->name('villa-active-sale');

    // categories
    Route::get('post-category-create/{type?}', 'PostCategoryController@create')->name('post-category-create');
    Route::put('post-category-store', 'PostCategoryController@store')->name('post-category-store');
    Route::get('post-category-list/{type?}', 'PostCategoryController@index')->name('post-category-list');
    Route::get('post-category-edit/{id}', 'PostCategoryController@edit')->name('post-category-edit');
    Route::patch('post-category-update/{id}', 'PostCategoryController@update')->name('post-category-update');
    Route::delete('post-category-destroy/{id}', 'PostCategoryController@destroy')->name('post-category-destroy');
    Route::post('post-category-sort', 'PostCategoryController@sort_item')->name('post-category-sort');

    // Article
    Route::get('post-create/{type?}', 'ArticleController@create')->name('article-create');
    Route::put('post-store', 'ArticleController@store')->name('article-store');
    Route::get('post-list/{type?}', 'ArticleController@index')->name('article-list');
    Route::get('post-show/{id}', 'ArticleController@show')->name('article-show');
    Route::get('post-edit/{id}', 'ArticleController@edit')->name('article-edit');
    Route::patch('post-update/{id}', 'ArticleController@update')->name('article-update');
    Route::delete('post-destroy/{id}', 'ArticleController@destroy')->name('article-destroy');
    Route::post('post-list', 'ArticleController@search')->name('article-search');

    // slider
    Route::get('slider-create', 'SliderController@create')->name('slider-create');
    Route::put('slider-store', 'SliderController@store')->name('slider-store');
    Route::get('slider-list', 'SliderController@index')->name('slider-list');
    Route::delete('slider-destroy/{id}', 'SliderController@destroy')->name('slider-destroy');
    Route::get('slider-edit/{id}', 'SliderController@edit')->name('slider-edit');
    Route::patch('slider-update', 'SliderController@update')->name('slider-update');

    //gallery
    Route::get('gallery-edit', 'galleryController@index')->name('gallery-edit');
    Route::post('gallery-update', 'galleryController@update')->name('gallery-update-a');


    // abouts
    Route::get('about-list', 'AboutController@index')->name('about-list');
    Route::get('about-create', 'AboutController@create')->name('about-create');
    Route::post('about-store', 'AboutController@store')->name('about-store');
    Route::get('about-edit/{id}', 'AboutController@edit')->name('about-edit');
    Route::post('about-update/{id}', 'AboutController@update')->name('about-update');
    Route::get('about-destroy/{id}', 'AboutController@destroy')->name('about-destroy');
    Route::get('about-active/{id}/{type}/{item_type}', 'AboutController@active')->name('about-active');

    // faq
    Route::get('faq-create', 'FaqController@create')->name('faq-create');
    Route::put('faq-store', 'FaqController@store')->name('faq-store');
    Route::get('faq-list', 'FaqController@index')->name('faq-list');
    Route::delete('faq-destroy/{id}', 'FaqController@destroy')->name('faq-destroy');
    Route::get('faq-edit/{id}', 'FaqController@edit')->name('faq-edit');
    Route::patch('faq-update', 'FaqController@update')->name('faq-update');

    // contact info
    Route::get('contact-info-list', 'ContactInfoController@index')->name('contact-info-list');
    Route::get('contact-info-create', 'ContactInfoController@create')->name('contact-info-create');
    Route::post('contact-info-store', 'ContactInfoController@store')->name('contact-info-store');
    Route::get('contact-info-edit/{id}', 'ContactInfoController@edit')->name('contact-info-edit');
    Route::post('contact-info-update/{id}', 'ContactInfoController@update')->name('contact-info-update');
    Route::get('contact-info-destroy/{id}', 'ContactInfoController@destroy')->name('contact-info-destroy');
    Route::get('contact-info-active/{id}/{type}/{item_type}', 'ContactInfoController@active')->name('contact-info-active');

    // contacts
    // contact list
    Route::get('contact-list', 'ContactController@index')->name('contact-list');
    Route::get('contacts-list', 'ContactController@index')->name('contacts-list');
    Route::delete('contact-destroy', 'ContactController@destroy')->name('contact-destroy');
    Route::delete('contacts-destroy/{id}', 'ContactController@destroy')->name('contacts-destroy');
    // consulting
    Route::get('consulting-list', 'ContactController@index1')->name('consulting-list');

    // meta
    Route::get('meta-list', 'MetaController@index')->name('meta-list');
    Route::get('meta-create', 'MetaController@create')->name('meta-create');
    Route::post('meta-store', 'MetaController@store')->name('meta-store');
    Route::get('meta-edit/{id}', 'MetaController@edit')->name('meta-edit');
    Route::post('meta-update/{id}', 'MetaController@update')->name('meta-update');
    Route::get('meta-destroy/{id}', 'MetaController@destroy')->name('meta-destroy');
    Route::get('meta-active/{id}/{type}', 'MetaController@active')->name('meta-active');

    // price list
    Route::get('price-convert', 'PanelController@price_index')->name('price-convert');
    Route::post('price-convert-update', 'PanelController@price_update')->name('price-convert-update');

    // team
    Route::get('team-create', 'teamController@create')->name('team-create');
    Route::put('team-store', 'teamController@store')->name('team-store');
    Route::get('team-list', 'teamController@index')->name('team-list');
    Route::get('team-edit/{id}', 'teamController@edit')->name('team-edit');
    Route::patch('team-update/{id}', 'teamController@update')->name('team-update');
    Route::delete('team-destroy/{id}', 'teamController@destroy')->name('team-destroy');
    Route::post('team-list', 'teamController@search')->name('team-search');

    // CustomerSlider
    Route::get('CustomerSlider-create', 'CustomerSliderController@create')->name('CustomerSlider-create');
    Route::put('CustomerSlider-store', 'CustomerSliderController@store')->name('CustomerSlider-store');
    Route::get('CustomerSlider-list', 'CustomerSliderController@index')->name('CustomerSlider-list');
    Route::get('CustomerSlider-edit/{id}', 'CustomerSliderController@edit')->name('CustomerSlider-edit');
    Route::patch('CustomerSlider-update/{id}', 'CustomerSliderController@update')->name('CustomerSlider-update');
    Route::delete('CustomerSlider-destroy/{id}', 'CustomerSliderController@destroy')->name('CustomerSlider-destroy');
    Route::post('CustomerSlider-list', 'CustomerSliderController@search')->name('CustomerSlider-search');

    //about slider

    Route::get('aboutSlider-create', 'aboutSliderController@create')->name('aboutSlider-create');
    Route::put('aboutSlider-store', 'aboutSliderController@store')->name('aboutSlider-store');
    Route::get('aboutSlider-list', 'aboutSliderController@index')->name('aboutSlider-list');
    Route::get('aboutSlider-edit/{id}', 'aboutSliderController@edit')->name('aboutSlider-edit');
    Route::patch('aboutSlider-update/{id}', 'aboutSliderController@update')->name('aboutSlider-update');
    Route::patch('boutSlider-update/{id}', 'aboutSliderController@boutSliderupdate')->name('boutSlider-update');
    Route::delete('aboutSlider-destroy/{id}', 'aboutSliderController@destroy')->name('aboutSlider-destroy');
    Route::post('aboutSlider-list', 'aboutSliderController@search')->name('aboutSlider-search');

    //Footer

    Route::get('Footer-create', 'FooterController@create')->name('Footer-create');
    Route::put('Footer-store', 'FooterController@store')->name('Footer-store');
    Route::get('Footer-list', 'FooterController@index')->name('Footer-list');
    Route::get('Footer-edit/{id}', 'FooterController@edit')->name('Footer-edit');
    Route::patch('Footer-update/{id}', 'FooterController@update')->name('Footer-update');
    Route::delete('Footer-destroy/{id}', 'FooterController@destroy')->name('Footer-destroy');


    // Services
    Route::get('Services-create/{type?}', 'ServicesController@create')->name('Services-create');
    Route::put('Services-store', 'ServicesController@store')->name('Services-store');
    Route::get('Services-list/{type?}', 'ServicesController@index')->name('Services-list');
    Route::get('Services-show/{id}', 'ServicesController@show')->name('Services-show');
    Route::get('Services-edit/{id}', 'ServicesController@edit')->name('Services-edit');
    Route::patch('Services-update/{id}', 'ServicesController@update')->name('Services-update');
    Route::delete('Services-destroy/{id}', 'ServicesController@destroy')->name('Services-destroy');
    Route::post('Services-list', 'ServicesController@search')->name('Services-search');

    // aboutS
    Route::get('abouts-create/{type?}', 'aboutsController@create')->name('abouts-create');
    Route::put('abouts-store', 'aboutsController@store')->name('abouts-store');
    Route::get('abouts-list/{type?}', 'aboutsController@index')->name('abouts-list');
    Route::get('abouts-show/{id}', 'aboutsController@show')->name('abouts-show');
    Route::get('abouts-edit/{id}', 'aboutsController@edit')->name('abouts-edit');
    Route::patch('abouts-update/{id}', 'aboutsController@update')->name('abouts-update');
    Route::delete('abouts-destroy/{id}', 'aboutsController@destroy')->name('abouts-destroy');
    Route::post('abouts-list', 'aboutsController@search')->name('abouts-search');

    // event
    Route::get('event-create/{type?}', 'eventController@create')->name('event-create');
    Route::put('event-store', 'eventController@store')->name('event-store');
    Route::get('event-list/{type?}', 'eventController@index')->name('event-list');
    Route::get('event-show/{id}', 'eventController@show')->name('event-show');
    Route::get('event-edit/{id}', 'eventController@edit')->name('event-edit');
    Route::patch('event-update/{id}', 'eventController@update')->name('event-update');
    Route::delete('event-destroy/{id}', 'eventController@destroy')->name('event-destroy');
    Route::post('event-list', 'eventController@search')->name('event-search');

    // educational
    Route::get('educational-create/{type?}', 'educationalController@create')->name('educational-create');
    Route::put('educational-store', 'educationalController@store')->name('educational-store');
    Route::get('educational-list/{type?}', 'educationalController@index')->name('educational-list');
    Route::get('educational-show/{id}', 'educationalController@show')->name('educational-show');
    Route::get('educational-edit/{id}', 'educationalController@edit')->name('educational-edit');
    Route::patch('educational-update/{id}', 'educationalController@update')->name('educational-update');
    Route::delete('educational-destroy/{id}', 'educationalController@destroy')->name('educational-destroy');
    Route::post('educational-list', 'educationalController@search')->name('educational-search');
    Route::get('menu-destroy/{id}', 'educationalController@destroy_menu')->name('menu-destroy');

    // Legal
    Route::get('Legal-create/{type?}', 'LegalController@create')->name('Legal-create');
    Route::put('Legal-store', 'LegalController@store')->name('Legal-store');
    Route::get('Legal-list/{type?}', 'LegalController@index')->name('Legal-list');
    Route::get('Legal-show/{id}', 'LegalController@show')->name('Legal-show');
    Route::get('Legal-edit/{id}', 'LegalController@edit')->name('Legal-edit');
    Route::patch('Legal-update/{id}', 'LegalController@update')->name('Legal-update');
    Route::delete('Legal-destroy/{id}', 'LegalController@destroy')->name('Legal-destroy');
    Route::post('Legal-list', 'LegalController@search')->name('Legal-search');


    Route::get('franchise-edit', 'franchiseController@edit')->name('franchise-edit');
    Route::patch('franchise-update/{id}', 'franchiseController@update')->name('franchise-update');
    Route::get('franchise-create/{type?}', 'franchiseController@create')->name('franchise-create');
    Route::put('franchise-store', 'franchiseController@store')->name('franchise-store');
    Route::get('franchise-post-edit/{id}', 'franchiseController@editPost')->name('franchise-post-edit');
    Route::patch('franchise-post-update/{id}', 'franchiseController@updatePost')->name('franchise-post-update');
    Route::delete('franchise-destroy/{id}', 'franchiseController@destroy')->name('franchise-destroy');



    // educational
    Route::get('Export-create/{type?}', 'ExportController@create')->name('Export-create');
    Route::put('Export-store', 'ExportController@store')->name('Export-store');
    Route::get('Export-list/{type?}', 'ExportController@index')->name('Export-list');
    Route::get('Export-show/{id}', 'ExportController@show')->name('Export-show');
    Route::get('Export-edit/{id}', 'ExportController@edit')->name('Export-edit');
    Route::patch('Export-update/{id}', 'ExportController@update')->name('Export-update');
    Route::delete('Export-destroy/{id}', 'ExportController@destroy')->name('Export-destroy');
    Route::post('Export-list', 'ExportController@search')->name('Export-search');
    Route::get('menu-destroy/{id}', 'ExportController@destroy_menu')->name('menu-destroy');

    // slider exchange
    Route::get('exchange-edit', 'ExchangeController@edit')->name('exchange-edit');
    Route::patch('exchange-update/{id}', 'ExchangeController@update')->name('exchange-update');

    Route::get('exchangeSlider-create', 'exchangeSliderController@create')->name('exchangeSlider-create');
    Route::put('exchangeSlider-store', 'exchangeSliderController@store')->name('exchangeSlider-store');
    Route::delete('exchangeSlider-destroy/{id}', 'exchangeSliderController@destroy')->name('exchangeSlider-destroy');
    Route::get('exchangeSlider-edit/{id}', 'exchangeSliderController@edit')->name('exchangeSlider-edit');
    Route::patch('exchangeSlider-update', 'exchangeSliderController@update')->name('exchangeSlider-update');


    Route::get('Estate-edit', 'EstateController@edit')->name('Estate-edit');
    Route::patch('Estate-update/{id}', 'EstateController@update')->name('Estate-update');
    Route::get('Estate-create/{type?}', 'EstateController@create')->name('Estate-create');
    Route::put('Estate-store', 'EstateController@store')->name('Estate-store');
    Route::get('Estate-post-edit/{id}', 'EstateController@editPost')->name('Estate-post-edit');
    Route::patch('Estate-post-update/{id}', 'EstateController@updatePost')->name('Estate-post-update');
    Route::delete('Estate-destroy/{id}', 'EstateController@destroy')->name('Estate-destroy');


});


Route::get('/VillasByCity','User\VillasByCity@Index');





/*Add By Mahbod*/
Route::get('/Test','TestMahbod\MyController@index');
//Route::get('/AjaxTest','TestMahbod\MyController@MyTest');
Route::get('/AjaxTest','TestMahbod\MyController@SelectTestContact');

