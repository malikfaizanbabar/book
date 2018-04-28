<?php
/* @var $this OutbooksController */
/* @var $model Outbooks */

$this->breadcrumbs=array(
	'Outbooks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Outbooks', 'url'=>array('index')),
	array('label'=>'Manage Outbooks', 'url'=>array('admin')),
);
?>

<h1>Create Outbooks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>