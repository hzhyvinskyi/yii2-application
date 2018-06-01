<?php

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

class EmailService extends Component
{
	/**
	 * @param \common\components\UserNotificationInterface $user
	 * @param $subject
	 * @return bool
	 */
	public function notifyUser(UserNotificationInterface $event)
	{
		return Yii::$app->mailer->compose()
			->setFrom('service.email@yii2-application.com')
			->setTo($event->getEmail())
			->setSubject($event->getSubject())
			->send();
	}

	/**
	 * @param \common\components\UserNotificationInterface $event
	 * @return bool
	 */
	public function notifyAdmins(UserNotificationInterface $event)
	{
		return Yii::$app->mailer->compose()
			->setFrom('service.email@yii2-application.com')
			->setTo(Yii::$app->params['adminEmail'])
			->setSubject($event->getSubject())
			->send();
	}
}
