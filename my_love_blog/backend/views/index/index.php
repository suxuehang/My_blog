<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>      
<h2>表格部分</h2> 
                               
<table id="rounded-corner">
    <thead>
    	<tr>
        	<th></th>
            <th>ID</th>
            <th>Title</th>
            <th>Create_time</th>
            <th>Author</th>
            <th>logo</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</td>
        </tr>
    </tfoot>
    <tbody>
    <?php
        foreach($list as $k=>$v){?>
    	<tr class="odd">
        	<td><input type="checkbox" name="" /></td>
            <td><?=$v['id'];?></td>
            <td><?=$v['title'];?></td>
            <td><?=$v['create_time'];?></td>
            <td><?=$v['author'];?></td>
            <td><img src="<?=$v['img'];?>" style="width: 100px;"></td>
            <td><a href="#"><img src="images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0" /></a></td>
        </tr>
        <?php  }?>
      </tbody>
</table>

	<div class="form_sub_buttons">
	<a href="#" class="button green">Edit selected</a>
    <a href="#" class="button red">Delete selected</a>
    </div>
    
    <ul id="tabsmenu" class="tabsmenu">
        <li class="active"><a href="#tab1">say</a></li>
        <li><a href="#tab2">Tab two</a></li>
        <li><a href="#tab3">Tab three</a></li>
        <li><a href="#tab4">Tab four</a></li>
    </ul>
    <div id="tab1" class="tabcontent">
        <h3>Tab one title</h3>
        <div class="form">
            <?php $form = ActiveForm::begin(['action' => ['index/addarticle'],'method'=>'post']); ?>
            <div class="form_row">
            <?= $form->field($model,'title',['inputOptions'=>['class'=>'form_input']])->label('Title')?>
            </div>
             
            <div class="form_row">
            <?= $form->field($model,'sort',['inputOptions'=>['class'=>'form_input']])->label('Sort')?>
            </div>
            <div class="form_row">
            <?= $form->field($model,'img',['inputOptions'=>['class'=>'form_img']])->fileInput()->label('Img')?>
            </div>
            
             <div class="form_row">
            <?=$form->field($model,'content')->widget('kucha\ueditor\UEditor',['id'=>'content','name'=>'content','clientOptions' => ['initialFrameHeight' => '200']]) ?>
            </div>
            <div class="form_row">
            <?=Html::submitButton('Submit',['inputOptions'=>['class'=>'form_submit']]) ?>
            </div> 
            <div class="clear"></div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>