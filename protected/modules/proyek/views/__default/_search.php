<?php
/* @var $this ProyekController */
/* @var $model Proyek */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'proyek_id'); ?>
		<?php echo $form->textField($model,'proyek_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_alias'); ?>
		<?php echo $form->textField($model,'proyek_alias',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_judul'); ?>
		<?php echo $form->textField($model,'proyek_judul',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_deskripsi'); ?>
		<?php echo $form->textField($model,'proyek_deskripsi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_abstrak'); ?>
		<?php echo $form->textField($model,'proyek_abstrak',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_tanggal'); ?>
		<?php echo $form->textField($model,'proyek_tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_tanggal_mulai'); ?>
		<?php echo $form->textField($model,'proyek_tanggal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_tanggal_target'); ?>
		<?php echo $form->textField($model,'proyek_tanggal_target'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_tanggal_selesai'); ?>
		<?php echo $form->textField($model,'proyek_tanggal_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_type_id'); ?>
		<?php echo $form->textField($model,'proyek_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyek_status_id'); ?>
		<?php echo $form->textField($model,'proyek_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anggota_id'); ?>
		<?php echo $form->textField($model,'anggota_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->