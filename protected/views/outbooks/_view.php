<?php
/* @var $this OutbooksController */
/* @var $data Outbooks */
/* @var $User user */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Issued ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Issued_ID), array('view', 'id'=>$data->Issued_ID)); ?>
	<br />
  
	<b><?php echo CHtml::encode($data->getAttributeLabel('Book ID')); ?>:</b>
	<?php echo CHtml::encode($data->Book_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User ID')); ?>:</b>
	<?php echo CHtml::encode($data->User_ID); ?>
	<br />
    	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />
    	<b><?php echo CHtml::encode($data->getAttributeLabel('Issued Date')); ?>:</b>
	<?php echo CHtml::encode($data->Issued_Date); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('Return Date')); ?>:</b>
	<?php echo CHtml::encode($data->Return_Date); ?>
	<br />


</div>