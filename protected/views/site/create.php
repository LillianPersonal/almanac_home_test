<?php
/* @var $this AlmanacPostController */
/* @var $model AlmanacPost */

$this->breadcrumbs=array(
	'Almanac Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlmanacPost', 'url'=>array('index')),
	array('label'=>'Manage AlmanacPost', 'url'=>array('admin')),
);
?>

<h1>Create AlmanacPost</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>