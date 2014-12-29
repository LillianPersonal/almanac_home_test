<?php
/* @var $this AlmanacPostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almanac Posts',
);

$this->menu=array(
	array('label'=>'Create AlmanacPost', 'url'=>array('create')),
	array('label'=>'Manage AlmanacPost', 'url'=>array('admin')),
);
?>
<h1>Create AlmanacPost</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<h1>Almanac Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
