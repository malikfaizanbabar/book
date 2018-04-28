<?php
/* @var $this OutbooksController */
/* @var $model Outbooks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'outbooks-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Book_ID'); ?>
		<?php //echo $form->dropDownList($model,'Book_ID',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Book_ID'); ?>
        <?php
         $data = CHtml::listData(Book::model()->findAll(),'id','title');
                
                echo CHtml::activeDropDownList(new Book,'id',$data, array('prompt'=>'Select'));?>
                
                
               
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'User_ID'); ?>
		<?php echo $form->textField($model,'User_ID',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'User_ID'); ?>
	</div>



<div class="row">
		<?php echo $form->labelEx($model,'Issued_Date'); ?>
		<?php echo $form->dateField($model,'Issued_Date',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Issued_Date'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'Return_Date'); ?>
		<?php echo $form->dateField($model,'Return_Date',array('size'=>45,'maxlength'=>45, 'type'=>'date')); ?>
		<?php echo $form->error($model,'Return_Date'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php //echo $form->textField($model,'Status',array('size'=>45,'maxlength'=>45)); 
      echo  $form->dropDownList($model,'Status',array('Active'=>'Active','UnActive'=>'UnActive'), array('options' => array('Active'=>array('selected'=>true))));
?>		<?php echo $form->error($model,'Status'); ?>
	</div>
	<div class="row buttons">
    
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->