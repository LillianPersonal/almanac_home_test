<?php
/* @var $this AlmanacPostController */
/* @var $model AlmanacPost */

$this->breadcrumbs=array(
	'Almanac Posts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AlmanacPost', 'url'=>array('index')),
	array('label'=>'Create AlmanacPost', 'url'=>array('create')),
	array('label'=>'Update AlmanacPost', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AlmanacPost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlmanacPost', 'url'=>array('admin')),
);
?>

<h1>View AlmanacPost #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'text',
		'image_path',
	),
)); ?>
