<?php

namespace interactivesolutions\honeycombslugs\app\models;


use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class HCSlugs extends HCUuidModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hc_slugs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'path', 'slug', 'slug_count'];

}
