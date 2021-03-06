<?php

use Dotenv\Dotenv;

require(__DIR__ . '/../vendor/autoload.php');

$env = new Dotenv(dirname(__DIR__));
$env->load();

defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG') == 'true' ? true : false);
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV'));

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
