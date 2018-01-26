<?php/*|--------------------------------------------------------------------------| Web Routes|--------------------------------------------------------------------------|| Here is where you can register web routes for your application. These| routes are loaded by the RouteServiceProvider within a group which| contains the "web" middleware group. Now create something great!|*/Route::get('/', 'HomePageController@getInfoHomepage');Route::get('/lien-he', function () {    return view('frontend.contact.contact1');});Route::get('/gioi-thieu', 'HomePageController@getContentGioiThieu');Route::get('/bao-gia', 'HomePageController@getContentBaoGia');Route::get('/tuyen-dung', 'HomePageController@getContentTuyenDung');Route::get('/tuyen-dung/{path}', 'HomePageController@getDetailTuyenDung');Route::get('/hoi-dap/{path}', 'HomePageController@getContentHoiDap');//Route::getRoute::get('/category', function () {    return view('frontend.common.m-category');});Route::get('/demo/xu-ly-nuoc-thai/category', function () {    return view('frontend.demo.xulynuocthai.m-category');});Route::get('dich-vu/{path}','HomePageController@getContentDichVu');Route::get('/bao-tri', function () {    return view('frontend.update.index');});//DEMO WEBSITE//XU LY NUOC THAIRoute::get('/demo/xu-ly-nuoc-thai', function () {    return view('frontend.demo.xulynuocthai.index');});//PHÂN TÍCH WEBSITERoute::post('/phan-tich-website','PageSpeedInsightController@resultInfo')->name('analytic.info');Route::post('/phan-tich-website-online/','PageSpeedInsightController@redirectInfo')->name('analytic.index');Route::post('/phan-tich-website-mobile','PageSpeedInsightController@resultAnalyticsMobile');Route::post('/phan-tich-website-desktop','PageSpeedInsightController@resultAnalyticsDesktop');//ENDRoute::get('/sml_login','AuthController@checklogin');Route::post('sml_login', 'AuthController@login')->name('login');Route::get('sml_logout', 'AuthController@logout')->name('logout');Route::post('/sendmail', ['as' => 'mail.send', 'uses' => 'MailController@send']);Route::group(['middleware' => ['auth']], function () {    //DASHBOARD    Route::get('sml_admin/dashboard', function () {        return view('backend.admin.dashboard.index');    })->name('dashboard');    //USER    Route::resource('sml_admin/users', 'UserController');    //ROLE    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);    //EMPLOYEE    Route::get('sml_admin/emoloyee', ['as' => 'emp.index', 'uses' => 'EmployeeController@index', 'middleware' => ['permission:emp-list|emp-create|emp-edit|emp-delete']]);    Route::post('sml_admin/emoloyee/create', ['as' => 'emp.store', 'uses' => 'EmployeeController@store', 'middleware' => ['permission:emp-create']]);    Route::post('sml_admin/emoloyee', ['as' => 'emp.search', 'uses' => 'EmployeeController@search']);    Route::get('sml_admin/emoloyee/create', ['as' => 'emp.create', 'uses' => 'EmployeeController@create', 'middleware' => ['permission:emp-create']]);    Route::get('sml_admin/emoloyee/{id}/edit', ['as' => 'emp.edit', 'uses' => 'EmployeeController@edit', 'middleware' => ['permission:emp-edit']]);    Route::patch('sml_admin/emoloyee/{id}', ['as' => 'emp.update', 'uses' => 'EmployeeController@update', 'middleware' => ['permission:emp-edit']]);    Route::delete('sml_admin/emoloyee/{id}', ['as' => 'emp.destroy', 'uses' => 'EmployeeController@destroy', 'middleware' => ['permission:emp-delete']]);    //MENU    Route::get('sml_admin/menu', ['as' => 'menu.index', 'uses' => 'MenuController@index', 'middleware' => ['permission:menu-list|menu-create|menu-edit|menu-delete']]);    Route::post('sml_admin/menu/create', ['as' => 'menu.store', 'uses' => 'MenuController@store', 'middleware' => ['permission:menu-create']]);    Route::post('sml_admin/menu', ['as' => 'menu.search', 'uses' => 'MenuController@search']);    Route::get('sml_admin/menu/create', ['as' => 'menu.create', 'uses' => 'MenuController@create', 'middleware' => ['permission:menu-create']]);    Route::get('sml_admin/menu/{id}/edit', ['as' => 'menu.edit', 'uses' => 'MenuController@edit', 'middleware' => ['permission:menu-edit']]);    Route::patch('sml_admin/menu/{id}', ['as' => 'menu.update', 'uses' => 'MenuController@update', 'middleware' => ['permission:menu-edit']]);    Route::delete('sml_admin/menu/{id}', ['as' => 'menu.destroy', 'uses' => 'MenuController@destroy', 'middleware' => ['permission:menu-delete']]);    //CONFIG    //--MAIL--//    Route::get('sml_admin/cau-hinh/mail', ['as' => 'config.email.index', 'uses' => 'CauHinhController@getAllCauHinh']);    Route::get('sml_admin/config/email', ['as' => 'config.email.index', 'uses' => 'ConfigController@getEmailConfig']);    Route::post('sml_admin/config/email', ['as' => 'config.email.store', 'uses' => 'ConfigController@saveEmailConfig']);    //--SLIDER--//    Route::get('sml_admin/slider', ['as' => 'config.slider.index', 'uses' => 'SliderController@index', 'middleware' => ['permission:config-list|config-create|config-edit|config-delete']]);    Route::post('sml_admin/slider/create', ['as' => 'config.slider.store', 'uses' => 'SliderController@store', 'middleware' => ['permission:config-create']]);    Route::get('sml_admin/slider/create', ['as' => 'config.slider.create', 'uses' => 'SliderController@create', 'middleware' => ['permission:config-create']]);    Route::get('sml_admin/slider/{id}/edit', ['as' => 'config.slider.edit', 'uses' => 'SliderController@edit', 'middleware' => ['permission:config-edit']]);    Route::patch('sml_admin/slider/{id}', ['as' => 'config.slider.update', 'uses' => 'SliderController@update', 'middleware' => ['permission:config-edit']]);    Route::delete('sml_admin/slider/{id}', ['as' => 'config.slider.destroy', 'uses' => 'SliderController@destroy', 'middleware' => ['permission:config-delete']]);    //ACCOUNT//    Route::get('sml_admin/emoloyee', ['as' => 'emp.index', 'uses' => 'EmployeeController@index', 'middleware' => ['permission:emp-list|emp-create|emp-edit|emp-delete']]);    Route::get('sml_admin/account',function(){        return view('backend.admin.account.index');    })->name('account.index');    Route::post('sml_admin/account/create', ['as' => 'account.store', 'uses' => 'AccountController@store']);    Route::post('sml_admin/account', ['as' => 'account.search', 'uses' => 'AccountController@search']);    Route::get('sml_admin/account/create', ['as' => 'account.create', 'uses' => 'AccountController@create']);    Route::get('sml_admin/account/{id}/edit', ['as' => 'account.edit', 'uses' => 'AccountController@edit']);    //PAGE    Route::get('sml_admin/page', ['as' => 'page.index', 'uses' => 'PageController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);    Route::post('sml_admin/page/create', ['as' => 'page.store', 'uses' => 'PageController@store', 'middleware' => ['permission:page-create']]);    Route::post('sml_admin/page', ['as' => 'page.search', 'uses' => 'PageController@search']);    Route::get('sml_admin/page/create', ['as' => 'page.create', 'uses' => 'PageController@create', 'middleware' => ['permission:page-create']]);    Route::get('sml_admin/page/{id}/edit', ['as' => 'page.edit', 'uses' => 'PageController@edit', 'middleware' => ['permission:page-edit']]);    Route::patch('sml_admin/page/{id}', ['as' => 'page.update', 'uses' => 'PageController@update', 'middleware' => ['permission:page-edit']]);    Route::delete('sml_admin/page/{id}', ['as' => 'page.destroy', 'uses' => 'PageController@destroy', 'middleware' => ['permission:page-delete']]);    //POST    Route::get('sml_admin/post', ['as' => 'post.index', 'uses' => 'PostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);    Route::post('sml_admin/post/create', ['as' => 'post.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']]);    Route::post('sml_admin/post', ['as' => 'post.search', 'uses' => 'PostController@search']);    Route::get('sml_admin/post/create', ['as' => 'post.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']]);    Route::get('sml_admin/post/{id}/edit', ['as' => 'post.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']]);    Route::patch('sml_admin/post/{id}', ['as' => 'post.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']]);    Route::delete('sml_admin/post/{id}', ['as' => 'post.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']]);    //TUYEN DUNG    Route::get('sml_admin/tuyen-dung', ['as' => 'tuyendung.index', 'uses' => 'TuyenDungController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);    Route::post('sml_admin/tuyen-dung/create', ['as' => 'tuyendung.store', 'uses' => 'TuyenDungController@store', 'middleware' => ['permission:page-create']]);    Route::post('sml_admin/tuyen-dung', ['as' => 'tuyendung.search', 'uses' => 'TuyenDungController@search']);    Route::get('sml_admin/tuyen-dung/create', ['as' => 'tuyendung.create', 'uses' => 'TuyenDungController@create', 'middleware' => ['permission:page-create']]);    Route::get('sml_admin/tuyen-dung/{id}/edit', ['as' => 'tuyendung.edit', 'uses' => 'TuyenDungController@edit', 'middleware' => ['permission:page-edit']]);    Route::patch('sml_admin/tuyen-dung/{id}', ['as' => 'tuyendung.update', 'uses' => 'TuyenDungController@update', 'middleware' => ['permission:page-edit']]);    Route::delete('sml_admin/tuyen-dung/{id}', ['as' => 'tuyendung.destroy', 'uses' => 'TuyenDungController@destroy', 'middleware' => ['permission:page-delete']]);    //CATEGORY POST    Route::get('sml_admin/danh-muc-bai-viet', ['as' => 'categorypost.index', 'uses' => 'CategoryPostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);    Route::post('sml_admin/danh-muc-bai-vie/create', ['as' => 'categorypost.store', 'uses' => 'CategoryPostController@store', 'middleware' => ['permission:page-create']]);//    Route::post('sml_admin/danh-muc-bai-vie', ['as' => 'categorypost.search', 'uses' => 'TuyenDungController@search']);    Route::get('sml_admin/danh-muc-bai-vie/create', ['as' => 'categorypost.create', 'uses' => 'CategoryPostController@create', 'middleware' => ['permission:page-create']]);    Route::get('sml_admin/danh-muc-bai-vie/{id}/edit', ['as' => 'categorypost.edit', 'uses' => 'CategoryPostController@edit', 'middleware' => ['permission:page-edit']]);    Route::patch('sml_admin/danh-muc-bai-vie/{id}', ['as' => 'categorypost.update', 'uses' => 'CategoryPostController@update', 'middleware' => ['permission:page-edit']]);    Route::delete('sml_admin/danh-muc-bai-vie/{id}', ['as' => 'categorypost.destroy', 'uses' => 'CategoryPostController@destroy', 'middleware' => ['permission:page-delete']]);////    Route::patch('sml_admin/emoloyee/{id}', ['as' => 'emp.update', 'uses' => 'EmployeeController@update', 'middleware' => ['permission:emp-edit']]);////    Route::delete('sml_admin/emoloyee/{id}', ['as' => 'emp.destroy', 'uses' => 'EmployeeController@destroy', 'middleware' => ['permission:emp-delete']]);});