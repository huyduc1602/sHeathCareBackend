<?php
use Illuminate\Support\Facades\Config;
return [
    'host' => request()->getHttpHost(),
    'api' => request()->getHttpHost().'/api',
];