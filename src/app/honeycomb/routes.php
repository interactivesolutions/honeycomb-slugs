<?php

//./packages//interactivesolutions/honeycomb-slugs/src/app/routes/routes.slugs.php

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function ()
{
    Route::get('slugs', ['as' => 'admin.slugs', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@adminView']);

    Route::group(['prefix' => 'api'], function ()
    {
        Route::get('slugs', ['as' => 'admin.api.slugs', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@listData']);
        Route::get('slugs/search', ['as' => 'admin.api.slugs.search', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@search']);
        Route::get('slugs/{id}', ['as' => 'admin.api.slugs.single', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_list'], 'uses' => 'HCSlugsController@getSingleRecord']);
        Route::post('slugs/{id}/duplicate', ['as' => 'admin.api.slugs.duplicate', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_update'], 'uses' => 'HCSlugsController@duplicate']);
        Route::post('slugs/restore', ['as' => 'admin.api.slugs.restore', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_update'], 'uses' => 'HCSlugsController@restore']);
        Route::post('slugs/merge', ['as' => 'admin.api.slugs.merge', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_update'], 'uses' => 'HCSlugsController@merge']);
        Route::post('slugs', ['middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_create'], 'uses' => 'HCSlugsController@create']);
        Route::put('slugs/{id}', ['middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_update'], 'uses' => 'HCSlugsController@update']);
        Route::delete('slugs/{id}', ['middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_delete'], 'uses' => 'HCSlugsController@delete']);
        Route::delete('slugs', ['middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_delete'], 'uses' => 'HCSlugsController@delete']);
        Route::delete('slugs/{id}/force', ['as' => 'admin.api.slugs.force', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_force_delete'], 'uses' => 'HCSlugsController@forceDelete']);
        Route::delete('slugs/force', ['as' => 'admin.api.slugs.force.multi', 'middleware' => ['acl:interactivesolutions_honeycomb_slugs_slugs_force_delete'], 'uses' => 'HCSlugsController@forceDelete']);
    });
});

