<?php
namespace backend\controllers;
use common\helps\Common;
use yii\web\Controller;
use common\models\Article;
use yii\web\UploadedFile;
class IndexController extends Controller{
	public $layout = 'show';

	public function actionShow($user=array()){
		$model = new Article();
		$user = $this->actionCheckLogin();
		$list = $model->find()->select('id,title,create_time,author,img')->where(['is_del'=>'未删除'])->orderBy('sort desc')->asArray()->all();
		return $this->render('index',['username'=>$user['username'],'model'=>$model,'list'=>$list]);
	}
	/**
	* 验证是否登录方法
	* @return Array
	*/
	private function actionCheckLogin(){
		$session = \Yii::$app->session;
		$user = $session->get('user');
		if(empty($user)){
			Common::Script('请登录','index.php?r=login/index');
		}else{
			return $user;
		}
	}
	/**
	* 新增文章
	*/
	public function actionAddarticle(){
		$model = new Article();
		//接值
		$post = \yii::$app->request->post();
		//验证是否登录
		$user = $this->actionCheckLogin();

		//文件上传
		$model->img = UploadedFile::getInstance($model, 'img');
        if ($model->img && $model->validate()) {
        	$path = 'upload/' . time().rand(1000,9999) . '.' . $model->img->extension;                
        	$model->img->saveAs($path);
        }
		//添加文章
		$sort = empty($post['Article']['sort'])?'0':$post['Article']['sort'];
		$model->title = $post['Article']['title'];
		$model->content = $post['Article']['content'];
		$model->create_time = date('Y-m-d');
		$model->sort = $sort;
		$model->author = $user['username'];
		$model->img = $path;
		$result = $model->save();
		if($result){
			return $this->redirect('index.php?r=index/show');
		}else{
			Common::Script('添加失败','index.php?r=index/show');
		}
	}
	/**
	* 编辑百度编辑器的上传路径
	*/
	public function actions()
	{
	    return [
	        'upload' => [
	            'class' => 'kucha\ueditor\UEditorAction',
	            'config' => [
	                "imageUrlPrefix"  => "http://admin_blog.com",//图片访问路径前缀
	                "imagePathFormat" => "/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}" //上传保存路径
	            ],
	        ]
	    ];
	}
}