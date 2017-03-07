<?php

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('slugs', ['as' => 'admin.slugs', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@adminView']);

    Route::group(['prefix' => 'api'], function () {
        Route::get('slugs', ['as' => 'admin.api.slugs', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@pageData']);
        Route::get('slugs/list', ['as' => 'admin.api.slugs.list', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@list']);
        Route::get('slugs/search', ['as' => 'admin.api.slugs.search', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@search']);
    });
});
