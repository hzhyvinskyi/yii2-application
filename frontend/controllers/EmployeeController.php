<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\Animal;
use frontend\models\example\Human;

class EmployeeController extends Controller
{
	public function actionIndex()
	{
		$employee1 = new Employee();
		$employee1->firstName = 'Alex';
		$employee1->lastName = 'Mail';
		$employee1->middleName = 'Smith';
		$employee1->salary = 1000;

		echo $employee1['salary'] . '<hr>';

		$array = $employee1->toArray();

		echo '<pre>' . print_r($array, 1) . '</pre>';
	}

	public function actionWalk()
	{
		$animal1 = new Animal();
		$human1 = new Human();

		$animal1->walk();
		echo '<br>';
		$human1->walk();
	}

	public function actionRegister()
	{
		$model = new Employee();
		$model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
		$formData = Yii::$app->request->post();

		if (Yii::$app->request->isPost) {
			$model->attributes = $formData;

			if ($model->validate() && $model->save()) {
				Yii::$app->session->setFlash('success', 'Registration was successful!');
			}
		}

		return $this->render('register', [
			'model' => $model,
		]);
	}

	public function actionUpdate()
	{
		$model = new Employee(['scenario' => Employee::SCENARIO_EMPLOYEE_UPDATE]);
		$formData = Yii::$app->request->post();

		if (Yii::$app->request->isPost) {
			$model->attributes = $formData;

			if ($model->validate() && $model->save()) {
				Yii::$app->session->setFlash('danger', 'Updated!');
			}
		}

		return $this->render('update', [
			'model' => $model,
		]);
	}
}
