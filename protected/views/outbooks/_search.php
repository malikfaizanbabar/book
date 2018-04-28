<?php
/* @var $this OutbooksController */
/* @var $model Outbooks */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Issued_ID'); ?>
		<?php echo $form->textField($model,'Issued_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Book_ID'); ?>
		<?php echo $form->textField($model,'Book_ID',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'User_ID'); ?>
		<?php echo $form->textField($model,'User_ID',array('size'=>45,'maxlength'=>45)); ?>
	</div>
    	<div class="row">
		<?php echo $form->label($model,'Issued_Date'); ?>
		<?php echo $form->textField($model,'Issued_Date',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->