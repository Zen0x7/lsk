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

Route::get('/', 'WelcomeController')->name('welcome');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/settings', 'SettingsController@index')->name('settings');

    Route::get('/settings/profile', 'SettingsProfileController@index')->name('settings.profile');
    Route::post('/settings/profile/update-profile', 'SettingsProfileController@updateProfile')->name('settings.update-profile');

    Route::get('/settings/account', 'SettingsAccountController@index')->name('settings.account');
    Route::post('/settings/account/update-email', 'SettingsAccountController@updateEmail')->name('settings.account.update-email');
    Route::post('/settings/account/update-password', 'SettingsAccountController@updatePassword')->name('settings.account.update-password');

    Route::get('/settings/organizations', 'SettingsOrganizationsController@index')->name('settings.organizations');

    Route::get('/settings/notifications', 'SettingsNotificationsController@index')->name('settings.notifications');

    Route::get('/settings/sessions', 'SettingsSessionsController@index')->name('settings.sessions');
});


