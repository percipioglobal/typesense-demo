<?php
/**
 * Yii Application Config
 *
 * Edit this file at your own risk!
 *
 * The array returned by this file will get merged with
 * vendor/craftcms/cms/src/config/app.php and app.[web|console].php, when
 * Craft's bootstrap script is defining the configuration for the entire
 * application.
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 *
 * If you want to modify the application config for *only* web requests or
 * *only* console requests, create an app.web.php or app.console.php file in
 * your config/ folder, alongside this one.
 */

use craft\helpers\App;

return [
    'modules' => [
        'site-module' => [
            'class' => \modules\sitemodule\SiteModule::class,
        ],
    ],
    'bootstrap' => ['site-module'],
    'components' => [
        'redis' => [
            'class' => yii\redis\Connection::class,
            'hostname' => App::env('REDIS_HOSTNAME'),
            'port' => App::env('REDIS_PORT'),
            'database' => App::env('REDIS_CRAFT_DB'),
        ],
        'cache' => [
            'class' => yii\redis\Cache::class,
            'keyPrefix' => App::env('APP_ID') ?: 'Percipio',
            'defaultDuration' => 86400,
        ],
        'deprecator' => [
            'throwExceptions' => App::env('DEV_MODE'),
        ],
        'queue' => [
            'class' => craft\queue\Queue::class,
            'ttr' => 10 * 60,
        ],
    ],
];