<?php
/**
 * Yii Конфиг
 *
 * Локально.
 * Самый высокий приоритет.
 *
 * @see https://docdoc.atlassian.net/wiki/pages/viewpage.action?pageId=5373985#id-Концепцияновойархитектуры-Управлениеконфигурацией
 */
return array(
	'params'     => array(
		'env'          => 'dev',
		'hosts'        => [
			'front'       => 'front.aparshukov.docdoc.pro',
			'back'        => 'back.aparshukov.docdoc.pro',
			'diagnostica' => 'diagnostica.aparshukov.docdoc.pro',
			'static'      => 's.aparshukov.docdoc.pro',
		],
		'php_user_ini' => [
			'xdebug.idekey' => 'aparshukov',
		],
	),
	'components' => array(
		// База данных
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=docdoc_aparshukov',
			'username'         => 'aparshukov',
			'password'         => 'cgTgdVBg',
		),
		'referral' => [
			'runABTest' => true,
		],
	),
);
