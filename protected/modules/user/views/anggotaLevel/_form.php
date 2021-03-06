<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'anggota-level-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'anggota_level_alias',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'anggota_level_nama',array('class'=>'span5','maxlength'=>25)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
