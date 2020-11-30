<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
$cache = [
    'class' => yii\caching\FileCache::class,
    'cachePath' => '@api/runtime/cache'
];

if (YII_ENV_DEV || YII_ENV == 'test') {
    $cache = [
        'class' => yii\caching\DummyCache::class
    ];
}

return $cache;
