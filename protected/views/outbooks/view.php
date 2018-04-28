<?php
/* @var $this OutbooksController */
/* @var $model Outbooks */

$this->breadcrumbs=array(
	'Outbooks'=>array('index'),
	$model->Issued_ID,
);

$this->menu=array(
	array('label'=>'List Outbooks', 'url'=>array('index')),
	array('label'=>'Create Outbooks', 'url'=>array('create')),
	array('label'=>'Update Outbooks', 'url'=>array('update', 'Issued_ID'=>$model->Issued_ID)),
	array('label'=>'Delete Outbooks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','Issued_ID'=>$model->Issued_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Outbooks', 'url'=>array('admin')),
);
?>

<h1>View Outbooks #<?php echo $model->Issued_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Issued_ID',
		'Book_ID',
		'User_ID',
		'Status',
	),
)); ?>
