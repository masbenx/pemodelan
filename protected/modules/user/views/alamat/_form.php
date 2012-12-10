<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'alamat-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'alamat_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'alamat_perusahaan',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'alamat_nama',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'alamat_satu',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldRow($model,'alamat_dua',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldRow($model,'alamat_kota',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'alamat_kodepos_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'alamat_negara_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'alamat_propinsi_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
