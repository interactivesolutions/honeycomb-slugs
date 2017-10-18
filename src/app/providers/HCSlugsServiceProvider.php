<?php

namespace interactivesolutions\honeycombslugs\app\providers;


use InteractiveSolutions\HoneycombCore\Providers\HCBaseServiceProvider;

class HCSlugsServiceProvider extends HCBaseServiceProvider
{
    protected $homeDirectory = __DIR__;

    protected $commands = [];

    protected $namespace = 'interactivesolutions\honeycombslugs\app\http\controllers';

    public $serviceProviderNameSpace = 'HCSlugs';

}


