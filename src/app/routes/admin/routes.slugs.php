<?php

Route::group(['prefix' => env('HC_ADMIN_URL'), 'middleware' => ['web', 'auth']], function ()
{
    Route::get('slugs', ['as' => 'admin.slugs', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@adminIndex']);

    Route::group(['prefix' => 'api/slugs'], function ()
    {
        Route::get('/', ['as' => 'admin.api.slugs', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@apiIndexPaginate']);
    });
});
