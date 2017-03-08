<?php
$params = array_merge(
	require (__DIR__ . '/../../common/config/params.php'),
	require (__DIR__ . '/../../common/config/params-local.php'),
	require (__DIR__ . '/params.php'),
	require (__DIR__ . '/params-local.php')
);

use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

return [
	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	'controllerNamespace' => 'frontend\controllers',
	'components' => [
		/*'request' => [
			'csrfParam' => '_csrf-frontend',
		],*/
		'request' => [
           'baseUrl' => $baseUrl,
        ],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
		],
		'session' => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'useFileTransport' => false,
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],

		'urlManager' => [
            'baseUrl' => $baseUrl,
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => array(
					'site/pages/<page>' => 'site/pages',
                    'site/contact/<office>' => 'site/contact',
					'blog/single-post/<id>/<post_name>' => 'blog/single-post',
           ),
		],

		'blog' => [
            'class' => '\monitorbacklinks\yii2wp\Wordpress',
            'endpoint' => 'http://localhost/finalsalarytransfer_blog/xmlrpc.php',
            'username' => 'parthshah',
            'password' => 'parth@0102'
        ],
		'log' => [
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error'],
                    'categories' => ['monitorbacklinks\yii2wp\Wordpress::*'],
                ],
            ],
        ],

	],
	'params' => $params,
];
