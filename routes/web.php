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

Route::get('/index', 'StaticController@index');

Route::get('index-data-sources8', 'DataController@index_data_sources8');

Route::get('/index-exit1', 'ExitController@index_exit1');

Route::get('/index-list-users4', 'ListController@index_list_users4');

Route::get('/index-monitoring16', 'Monitoring16Controller@index_monitoring16');

Route::get('/index-monitoring17', 'Monitoring17Controller@index_monitoring17');

Route::get('/index-monitoring-edit18-19', 'MonitoringEditController@index_monitoring_edit18_19');

Route::get('/index-newusers5', 'NewUsersController@index_newusers5');

Route::get('/index-profile6-7', 'ProfileController@index_profile6_7');

Route::get('/index-search-results15', 'SearchR15Controller@index_search_results15');

Route::get('/index-search-results-header13', 'SearchRH13Controller@index_search_results_header13');

Route::get('/index-search-source12-14', 'SearchSourceController@index_search_source12_14');

Route::get('/index-setting2', 'SettingController@index_setting2');

Route::get('/index-source-name9-10', 'SourceNController@index_source_name9_10');

Route::get('/index-source-name-export11', 'SourceNEController@index_source_name_export11');

Route::get('/index-stat-new-charts21', 'Stat21Controller@index_stat_new_charts21');

Route::get('/index-stat-new-charts22', 'Stat22Controller@index_stat_new_charts22');

Route::get('/index-statistic20', 'StatisticController@index_statistic20');
