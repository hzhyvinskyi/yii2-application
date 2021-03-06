<?php

namespace console\controllers;

use yii\console\Controller;
use console\models\Time;
use yii\helpers\Console;

/**
 * Logs the time when the method was called
 */
class LoggerController extends Controller
{
	/**
	 * Gets formatted time from model and log it
	 */
	public function actionLog()
	{
		$time = Time::getTime();
		file_put_contents(__DIR__ . '/../../frontend/web/log.txt', $time, FILE_APPEND);

		Console::output("\nlogged at {$time}");
	}
}
