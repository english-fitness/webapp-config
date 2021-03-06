<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'modules'=>array(
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'123456',
            'ipFilters'=>array('127.0.0.1','::1'),
            'generatorPaths' => array('bootstrap.gii'),
        ),
    ),
    // application components
    'components'=>array(
        'board'=>array(
            'class' => 'Board',
            'licodeUrl'=>'http://daykem11.local:8000',
            'trialUrl'=>'http://daykem11.local:3000',
            'licodeCurl'=>'http://daykem11.local:8000',
            'trialCurl'=>'http://daykem11.local:3000',
        ),
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=onschool',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf8',
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(
        'facebook' => array(
            'appId'  => '625866227535073',
            'secret' => 'b67eb0cd7b30d0d3389fdec5039cbe16',
        ),
        'googleOauth' => array(
            'clientId'  => '581312982977-e8h34gl924n2ve6d3jjsp1m87ikqia5a.apps.googleusercontent.com',
            'secret' => '6y3lSF0NYZ9fF8XyZ5Au9tt2',
            'developerKey' => "AIzaSyCx7KFNIUUrV0a1wdML5n0F1yauYdF3XZI",
        ),
        'nganluong' => array(
			'nganluongUrl' => 'http://beta.nganluong.vn/checkout.php',
			'merchantSiteCode' => '15873',
			'securePass' => '12345678',
			'receiver' => 'phuonglh@peacesoft.net',
			'setExpressCheckout' => false,
		),
    ),
);
