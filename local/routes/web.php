<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomePageController@getInfoHomepage');
Route::get('/lien-he', function () {
    return view('frontend.contact.contact1');
});
Route::get('/category', function () {
    return view('frontend.common.m-category');
});
Route::get('/google-adwords', function () {
    return view('frontend.trangcon.google');
});
Route::get('/thiet-ke-website', function () {
    return view('frontend.trangcon.website');
});
Route::get('/bao-tri', function () {
    return view('frontend.update.index');
});

//PHÂN TÍCH WEBSITE

Route::post('/phan-tich-website','PageSpeedInsightController@resultInfo')->name('analytic.info');
Route::post('/phan-tich-website-online/','PageSpeedInsightController@redirectInfo')->name('analytic.index');
Route::post('/phan-tich-website-mobile','PageSpeedInsightController@resultAnalyticsMobile');
Route::post('/phan-tich-website-desktop','PageSpeedInsightController@resultAnalyticsDesktop');
//END

Route::get('/sml_login', function () {
    return view('backend.login.login1');
});

Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('sml_logout', 'AuthController@logout')->name('logout');
Route::post('/sendmail', ['as' => 'mail.send', 'uses' => 'MailController@send']);
Route::group(['middleware' => ['auth']], function () {
    //DASHBOARD
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard.index');
    })->name('dashboard');
    //USER
    Route::resource('sml_admin/users', 'UserController');


    //ROLE
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    //NEWS
    Route::get('sml_admin/news', ['as' => 'news.index', 'uses' => 'NewsController@index', 'middleware' => ['permission:news-list|news-create|news-edit|news-delete']]);
    Route::post('sml_admin/news/create', ['as' => 'news.store', 'uses' => 'NewsController@store', 'middleware' => ['permission:news-create']]);
    Route::post('sml_admin/news', ['as' => 'news.search', 'uses' => 'NewsController@search']);
    Route::get('sml_admin/news/create', ['as' => 'news.create', 'uses' => 'NewsController@create', 'middleware' => ['permission:news-create']]);
    Route::get('sml_admin/news/{id}/edit', ['as' => 'news.edit', 'uses' => 'NewsController@edit', 'middleware' => ['permission:news-edit']]);
    Route::patch('sml_admin/news/{id}', ['as' => 'news.update', 'uses' => 'NewsController@update', 'middleware' => ['permission:news-edit']]);
    Route::delete('sml_admin/news/{id}', ['as' => 'news.destroy', 'uses' => 'NewsController@destroy', 'middleware' => ['permission:news-delete']]);

    //EMPLOYEE
    Route::get('sml_admin/emoloyee', ['as' => 'emp.index', 'uses' => 'EmployeeController@index', 'middleware' => ['permission:emp-list|emp-create|emp-edit|emp-delete']]);
    Route::post('sml_admin/emoloyee/create', ['as' => 'emp.store', 'uses' => 'EmployeeController@store', 'middleware' => ['permission:emp-create']]);
    Route::post('sml_admin/emoloyee', ['as' => 'emp.search', 'uses' => 'EmployeeController@search']);
    Route::get('sml_admin/emoloyee/create', ['as' => 'emp.create', 'uses' => 'EmployeeController@create', 'middleware' => ['permission:emp-create']]);
    Route::get('sml_admin/emoloyee/{id}/edit', ['as' => 'emp.edit', 'uses' => 'EmployeeController@edit', 'middleware' => ['permission:emp-edit']]);
    Route::patch('sml_admin/emoloyee/{id}', ['as' => 'emp.update', 'uses' => 'EmployeeController@update', 'middleware' => ['permission:emp-edit']]);
    Route::delete('sml_admin/emoloyee/{id}', ['as' => 'emp.destroy', 'uses' => 'EmployeeController@destroy', 'middleware' => ['permission:emp-delete']]);

    //CONFIG
    //--MAIL--//
    Route::get('sml_admin/cau-hinh/mail', ['as' => 'config.email.index', 'uses' => 'CauHinhController@getAllCauHinh']);
    Route::get('sml_admin/config/email', ['as' => 'config.email.index', 'uses' => 'ConfigController@getEmailConfig']);
    Route::post('sml_admin/config/email', ['as' => 'config.email.store', 'uses' => 'ConfigController@saveEmailConfig']);

    //--SLIDER--//
    Route::get('sml_admin/slider', ['as' => 'config.slider.index', 'uses' => 'SliderController@index', 'middleware' => ['permission:config-list|config-create|config-edit|config-delete']]);
    Route::post('sml_admin/slider/create', ['as' => 'config.slider.store', 'uses' => 'SliderController@store', 'middleware' => ['permission:config-create']]);
    Route::get('sml_admin/slider/create', ['as' => 'config.slider.create', 'uses' => 'SliderController@create', 'middleware' => ['permission:config-create']]);
    Route::get('sml_admin/slider/{id}/edit', ['as' => 'config.slider.edit', 'uses' => 'SliderController@edit', 'middleware' => ['permission:config-edit']]);
    Route::patch('sml_admin/slider/{id}', ['as' => 'config.slider.update', 'uses' => 'SliderController@update', 'middleware' => ['permission:config-edit']]);
    Route::delete('sml_admin/slider/{id}', ['as' => 'config.slider.destroy', 'uses' => 'SliderController@destroy', 'middleware' => ['permission:config-delete']]);
});
