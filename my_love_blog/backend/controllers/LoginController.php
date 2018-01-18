<?php
namespace backend\controllers;
use yii\web\Controller;
use \common\helps\Common;
use backend\models\Admin;
class LoginController extends Controller{
	//关闭Yii2 表单验证
	public $enableCsrfValidation=false;

	//加载登录视图
	public function actionIndex(){
		return $this->renderPartial('login');
	}

	//验证登录
	public function actionLogin(){
		$username = \yii::$app->request->post('Username');
		$password = \yii::$app->request->post('Password');
		if(empty($username) || empty($password)){
			Common::Script('账号密码不能为空','index.php?r=login/index');
		}
		$result = Admin::find()->select('password,u_id,username')->where(['username'=>$username])->asArray()->one();
		if($result){
			if($result['password']!=md5($password)){
				Common::Script('密码不正确','index.php?r=login/index');
			}else{
				//存储账户信息
				$session = \Yii::$app->session;
				$session->set('user',$result);
				return $this->redirect('index.php?r=index/show');
			}
		}else{
			Common::Script('没有此账号','index.php?r=login/index');
		}

	}
}