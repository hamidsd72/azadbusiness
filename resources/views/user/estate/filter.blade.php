<!-- Property Search Area Start -->
<div class="property-search-area container">
    <div class="property-search-form ">
        <ul class="nav nav-tabs mt-20px">
            <li id="slider_1"><a data-toggle="tab" href="#tab1" dideo-checked="true">زمین</a></li>
            <li id="slider_2"><a data-toggle="tab" href="#tab2" dideo-checked="true">ویلا</a></li>
            <li id="slider_3"><a data-toggle="tab" href="#tab3" dideo-checked="true">اداری</a></li>
            <li id="slider_3"><a data-toggle="tab" href="#tab4" dideo-checked="true">تجاری</a></li>
            <li id="slider_4"><a data-toggle="tab" href="#tab4" dideo-checked="true">آپارتمان</a></li>
        </ul>
        <div class="advanced-search-sec row">


            <div class="col-md-9 px-0">
                <form method="get" class="container-fluid px-0" action="{{route('user.estate.search')}}" id="frm_filter_villa">
                    <input type="hidden" name="vip" class="search_vip" value="0">
                    <div class="col-xs-12 col-sm-6 col-md-2 search-field">
                        <div class="submit">
                            <button type="submit" value="Search" class="new-post-btn">جستجو</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 search-field">
                        <label for="property-location">منطقه</label>
                        <select id="property-location" name="locale_id">
                            <option value="all">همه</option>
                            @if(isset($locales) and $locales!='')
                                @foreach($locales as $locale)
                                    <option class="catId catId{{$locale->cat_id}}"
                                            value="{{ $locale->id }}" {{isset($_GET['locale_id']) && $_GET['locale_id']==$locale->id ? 'selected' : '' }}>{{ $locale->title }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 search-field">
                        <label for="project_type">نوع</label>
                        <select id="project_type" name="project_type">
                            <option value="all">همه</option>
                            @foreach(App\Category::project_types() as $key=>$type)
                                <option value="{{$type["val"]}}" {{isset($_GET['project_type']) && $_GET['project_type']==$type["val"] ? 'selected' : '' }} >
                                    {{$type["name"]}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 search-field search_top d-none">
                        <label for="payment">شرایط پرداخت</label>
                        <select id="payment" name="payment">
                            <option value="all" {{isset($_GET['payment']) && $_GET['payment']=='all' ? 'selected' : '' }}>همه</option>
                            <option value="2" {{isset($_GET['payment']) && $_GET['payment']==2 ? 'selected' : '' }}>نقد</option>
                            <option value="1" {{isset($_GET['payment']) && $_GET['payment']==1 ? 'selected' : '' }}>اقساط</option>
                            <option value="3" {{isset($_GET['payment']) && $_GET['payment']==3 ? 'selected' : '' }}>نقد/اقساط</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 search-field search_top d-none">
                        <label for="b_or_t">بالکن یا تراس</label>
                        <select id="b_or_t" name="b_or_t">
                            <option value="all" {{isset($_GET['b_or_t']) && $_GET['b_or_t']=='all' ? 'selected' : '' }}>همه</option>
                            <option value="1" {{isset($_GET['b_or_t']) && $_GET['b_or_t']==1 ? 'selected' : '' }}>دارد</option>
                            <option value="2" {{isset($_GET['b_or_t']) && $_GET['b_or_t']==2 ? 'selected' : '' }}>ندارد</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 search-field search_top d-none">
                        <label for="anbari">انباری</label>
                        <select id="anbari" name="anbari">
                            <option value="all" {{isset($_GET['anbari']) && $_GET['anbari']=='all' ? 'selected' : '' }}>همه</option>
                            <option value="1" {{isset($_GET['anbari']) && $_GET['anbari']==1 ? 'selected' : '' }}>دارد</option>
                            <option value="2" {{isset($_GET['anbari']) && $_GET['anbari']==2 ? 'selected' : '' }}>ندارد</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 search-field search_top d-none">
                        <label for="garmayesh">گرمایش</label>
                        <select id="garmayesh" name="garmayesh">
                            <option value="all">همه</option>
                            <option value="1" {{isset($_GET['garmayesh']) && $_GET['garmayesh']==1 ? 'selected' : '' }}>مرکزی</option>
                            <option value="2" {{isset($_GET['garmayesh']) && $_GET['garmayesh']==2 ? 'selected' : '' }}>پکیج</option>
                            <option value="3" {{isset($_GET['garmayesh']) && $_GET['garmayesh']==3 ? 'selected' : '' }}>از کف</option>
                            <option value="4" {{isset($_GET['garmayesh']) && $_GET['garmayesh']==4 ? 'selected' : '' }}>شومینه</option>
                            <option value="5" {{isset($_GET['garmayesh']) && $_GET['garmayesh']==5 ? 'selected' : '' }}>چیلر</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 search-field search_top d-none">
                        <label for="sarmayesh">سرمایش</label>
                        <select id="sarmayesh" name="sarmayesh">
                            <option value="all">همه</option>
                            <option value="1" {{isset($_GET['sarmayesh']) && $_GET['sarmayesh']==1 ? 'selected' : '' }}>کولر گازی</option>
                            <option value="2" {{isset($_GET['sarmayesh']) && $_GET['sarmayesh']==2 ? 'selected' : '' }}>مرکزی</option>
                            <option value="3" {{isset($_GET['sarmayesh']) && $_GET['sarmayesh']==3 ? 'selected' : '' }}>VRF</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 search-field search_top d-none">
                        <label for="Special">خصوصیات</label>
                        <select id="Special" name="Special">
                            <option value="all">همه</option>
                            @foreach($Special as $ss)
                                <option value="{{$ss->id}}" {{isset($_GET['Special']) && $_GET['Special']==$ss->id ? 'selected' : '' }}>
                                    {{$ss->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 search-field">
                        <div class="price-range">
                            <div class="property-price">
                                <label>رنج قیمت</label>
                                <div class="price-range style_new">
                                    <div class="price-input-count">
                                        <input type="text" name="price_min1" id="price-min" readonly/>
                                    </div>
                                    <span class="price-money">-</span>
                                    <div class="price-input-count">
                                        <input type="text" name="price_max1" id="price-max" readonly/>
                                    </div>
                                </div>
                                <div class="price-range-select">
                                    <div class="priceSlider" id="nonlinear"></div>
                                </div>
                            </div> <!-- /.property-price -->
                        </div> <!-- /.price-range -->
                    </div>

                </form>
            </div>
            <div class="col-md-3">
                <div class="submit mt-0">
                    <button type="button" value="جستجو پیشرفته" class="new-post-btn search_top_btn w-100">جستجو پیشرفته</button>
                </div>
                <div class="submit mt-15">
                    <button type="button" value="پیشنهادات ویژه" class="new-post-btn search_vip_btn w-100">پیشنهادات ویژه</button>
                </div>
            </div>
        </div> <!-- /.advanced-search-sec -->
        <!-- Show or Hide Property -->
        <a class="more-options close-element"></a>
    </div>
</div> <!-- /.property-search-area -->
<!-- Property Search Area End -->


