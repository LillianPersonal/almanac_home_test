<?php
/* @var $this AlmanacPostController */
/* @var $model AlmanacPost */

$this->breadcrumbs=array(
	'Almanac Posts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlmanacPost', 'url'=>array('index')),
	array('label'=>'Create AlmanacPost', 'url'=>array('create')),
	array('label'=>'View AlmanacPost', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlmanacPost', 'url'=>array('admin')),
);
?>

<h1>Update AlmanacPost <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>