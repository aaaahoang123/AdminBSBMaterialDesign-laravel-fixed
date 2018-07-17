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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix' => '/'], function () {
    Route::view('/', 'index')->name('dashboard');
    Route::view('/typography', 'pages.typography')->name('typography');
    Route::view('/helper-classes', 'pages.helper-classes')->name('helper-classes');
});

Route::group(['prefix' => '/widgets'], function () {
    Route::group(['prefix' => '/cards'], function () {
        Route::view('/basic', 'pages.widgets.cards.basic')->name('widgets.cards.basic');
        Route::view('/colored', 'pages.widgets.cards.colored')->name('widgets.cards.colored');
        Route::view('/no-header', 'pages.widgets.cards.no-header')->name('widgets.cards.no-header');
    });
    Route::group(['prefix' => 'info-box'], function () {
        Route::view('/info-box-1', 'pages.widgets.info-box.info-box-1')->name('widgets.info-box.info-box-1');
        Route::view('/info-box-2', 'pages.widgets.info-box.info-box-2')->name('widgets.info-box.info-box-2');
        Route::view('/info-box-3', 'pages.widgets.info-box.info-box-3')->name('widgets.info-box.info-box-3');
        Route::view('/info-box-4', 'pages.widgets.info-box.info-box-4')->name('widgets.info-box.info-box-4');
        Route::view('/info-box-5', 'pages.widgets.info-box.info-box-5')->name('widgets.info-box.info-box-5');
    });
});

Route::group(['prefix' => 'ui'], function () {
    Route::view('/alerts', 'pages.ui.alerts')->name('ui.alerts');
    Route::view('/animations', 'pages.ui.animations')->name('ui.animations');
    Route::view('/badges', 'pages.ui.badges')->name('ui.badges');
    Route::view('/breadcrumbs', 'pages.ui.breadcrumbs')->name('ui.breadcrumbs');
    Route::view('/buttons', 'pages.ui.buttons')->name('ui.buttons');
    Route::view('/collapse', 'pages.ui.collapse')->name('ui.collapse');
    Route::view('/colors', 'pages.ui.colors')->name('ui.colors');
    Route::view('/dialogs', 'pages.ui.dialogs')->name('ui.dialogs');
    Route::view('/icons', 'pages.ui.icons')->name('ui.icons');
    Route::view('/labels', 'pages.ui.labels')->name('ui.labels');
    Route::view('/list-group', 'pages.ui.list-group')->name('ui.list-group');
    Route::view('/media-object', 'pages.ui.media-object')->name('ui.media-object');
    Route::view('/modals', 'pages.ui.modals')->name('ui.modals');
    Route::view('/notifications', 'pages.ui.notifications')->name('ui.notifications');
    Route::view('/pagination', 'pages.ui.pagination')->name('ui.pagination');
    Route::view('/preloaders', 'pages.ui.preloaders')->name('ui.preloaders');
    Route::view('/progressbars', 'pages.ui.progressbars')->name('ui.progressbars');
    Route::view('/range-sliders', 'pages.ui.range-sliders')->name('ui.range-sliders');
    Route::view('/sortable-nestable', 'pages.ui.sortable-nestable')->name('ui.sortable-nestable');
    Route::view('/tabs', 'pages.ui.tabs')->name('ui.tabs');
    Route::view('/thumbnails', 'pages.ui.thumbnails')->name('ui.thumbnails');
    Route::view('/tooltips-popovers', 'pages.ui.tooltips-popovers')->name('ui.tooltips-popovers');
    Route::view('/waves', 'pages.ui.waves')->name('ui.waves');
});

Route::group(['prefix'=>'forms'], function () {
    Route::view('/basic-form-elements', 'pages.forms.basic-form-elements')->name('forms.basic-form-elements');
    Route::view('/advanced-form-elements', 'pages.forms.advanced-form-elements')->name('advanced-form-elements');
    Route::view('/form-examples', 'pages.forms.form-examples')->name('forms.form-examples');
    Route::view('/form-validation', 'pages.forms.form-validation')->name('forms.form-validation');
    Route::view('/editors', 'pages.forms.editors')->name('forms.editors');
    Route::view('/form-wizard', 'pages.forms.form-wizard')->name('forms.form-wizard');
});

Route::group(['prefix'=>'tables', 'as'=>'tables.'], function () {
    Route::view('normal-tables', 'pages.tables.normal-tables')->name('normal-tables');
    Route::view('jquery-datatable', 'pages.tables.jquery-datatable')->name('jquery-datatable');
    Route::view('editable-table', 'pages.tables.editable-table')->name('editable-table');
});

Route::group(['prefix'=>'medias', 'as'=>'medias.'], function() {
    Route::view('image-gallery', 'pages.medias.image-gallery')->name('image-gallery');
    Route::view('carousel', 'pages.medias.carousel')->name('carousel');
});

Route::group(['prefix'=>'charts', 'as'=>'charts.'], function() {
    Route::view('morris', 'pages.charts.morris')->name('morris');
    Route::view('flot', 'pages.charts.flot')->name('flot');
    Route::view('chartjs', 'pages.charts.chartjs')->name('chartjs');
    Route::view('sparkline', 'pages.charts.sparkline')->name('sparkline');
    Route::view('jquery-knob', 'pages.charts.jquery-knob')->name('jquery-knob');
});

Route::group(['prefix'=>'examples', 'as'=>'examples.'], function() {
    Route::view('sign-in', 'auth.login')->name('sign-in');
    Route::view('sign-up', 'auth.register')->name('sign-up');
    Route::view('forgot-password', 'auth.passwords.email')->name('forgot-password');
    Route::view('404', 'pages.examples.404')->name('404');
    Route::view('500', 'pages.examples.500')->name('500');
    Route::view('blank', 'pages.examples.blank')->name('blank');
});

Route::group(['prefix'=>'maps', 'as'=>'maps.'], function() {
    Route::view('google-map', 'pages.maps.google-map')->name('google-map');
    Route::view('yandex-map', 'pages.maps.yandex-map')->name('yandex-map');
    Route::view('jvector-map', 'pages.maps.jvector-map')->name('jvector-map');
});
