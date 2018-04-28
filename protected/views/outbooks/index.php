<?php
/* @var $this OutbooksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Outbooks',
);

$this->menu=array(
	array('label'=>'Create Outbooks', 'url'=>array('create')),
	array('label'=>'Manage Outbooks', 'url'=>array('admin')),
);
?>

<h1>Outbooks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
