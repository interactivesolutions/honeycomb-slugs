<?php

namespace interactivesolutions\honeycombslugs\app\providers;

use Illuminate\Support\ServiceProvider;

class HCSlugsServiceProvider extends ServiceProvider
{
    protected $homeDirectory = __DIR__;

    protected $commands = [];

    protected $namespace = 'interactivesolutions\honeycombslugs\app\http\controllers';
}


