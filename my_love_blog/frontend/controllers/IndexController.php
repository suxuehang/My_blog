<?php
namespace frontend\controllers;

use yii\web\Controller;
use common\models\Article;
class IndexController extends Controller{
	public function actionIndex(){
		$list = Article::find()->select('id,title,content,create_time,author,img')->where(['is_del'=>'未删除'])->orderBy('create_time')->asArray()->all();
		return $this->renderPartial('index');
	}
}