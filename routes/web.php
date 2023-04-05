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

 //Route::get('/', function () {
  //  return view('admin.home'); 
// });


Route::group(['namespace' =>'admin'], function(){

        //home routes
        Route::get('/','HomeController@index')->name('admin.home');
        
         Route::resource('project','ProjectController');
         Route::resource('project_checklist','ProjectCheckListController');
         Route::resource('stakeholder','StakeholderController');
         Route::resource('beneficiary','BeneficiaryController');
         Route::resource('DIP','DIPController');
         Route::get('get-district-list','StakeholderController@getDistrictList');
         Route::get('get-village-list','StakeholderController@getVillageList');

        
        // Route::resource('qarardadha','QarardadhaController');
        // Route::resource('suggesstion','SuggesstionController');
        // Route::resource('internal_report','IReportController');
        //reports of page qarardadha
        // Route::get('reports_q','QarardadhaController@getReportResultshow')->name('reports_q');
        // Route::post('getReportResultt','QarardadhaController@getReportResultt')->name('dispalyreport_q');

});

// Route::get('dropdownlist','DropdownCityController@index');
// Route::get('get-state-list','DropdownCityController@getStateList');
// Route::get('get-city-list','DropdownCityController@getCityList');


