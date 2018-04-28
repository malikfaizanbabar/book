<?php
/* @var $this OutbooksController */
/* @var $model Outbooks */

$this->breadcrumbs=array(
	'Outbooks'=>array('index'),
	$model->Issued_ID=>array('view','Issued_ID'=>$model->Issued_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Outbooks', 'url'=>array('index')),
	array('label'=>'Create Outbooks', 'url'=>array('create')),
	array('label'=>'View Outbooks', 'url'=>array('view', 'Issued_ID'=>$model->Issued_ID)),
	array('label'=>'Manage Outbooks', 'url'=>array('admin')),
);
?>

<h1>Update Outbooks <?php echo $model->Issued_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>