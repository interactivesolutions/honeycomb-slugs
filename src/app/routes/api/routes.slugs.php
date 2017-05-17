<?php

Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function ()
{
    Route::get('slugs', ['as' => 'api.v1.slugs', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@adminIndex']);

    Route::group(['prefix' => 'v1/slugs'], function ()
    {
        Route::get('/', ['as' => 'api.v1.slugs', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@apiIndexPaginate']);

        Route::group(['prefix' => 'list'], function ()
        {
            Route::get('/', ['as' => 'api.v1.slugs.list', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@apiIndex']);
            Route::get('{timestamp}', ['as' => 'api.v1.slugs.list.update', 'middleware' => ['acl-apps:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@apiIndexSync']);
        });
    });
});
