<?php

Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function () {
    Route::get('slugs', ['as' => 'api.v1.slugs', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@adminView']);

    Route::group(['prefix' => 'v1/slugs'], function () {
        Route::get('/', ['as' => 'api.v1.api.slugs', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@listPage']);
        Route::get('list/{timestamp}', ['as' => 'api.v1.api.slugs.list.update', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@listUpdate']);
        Route::get('list', ['as' => 'api.v1.api.slugs.list', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@list']);
        Route::get('search', ['as' => 'api.v1.api.slugs.search', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@search']);
    });
});
