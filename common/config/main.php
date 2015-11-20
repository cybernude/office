<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
	'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
	'modules' => [
        	'km' => [
            		'class' => 'app\modules\km\Km',
        	],
		'roombook' => [
          		 'class' => 'app\modules\roombook\Roombook',
        	],
		'carbook' => [
	            	 'class' => 'app\modules\carbook\Carbook',
        	],
		'rm' => [
            		'class' => 'app\modules\rm\Rm',
        	],
		'hrd' => [
          		  'class' => 'app\modules\hrd\Hrd',
        	],
    ],
];
