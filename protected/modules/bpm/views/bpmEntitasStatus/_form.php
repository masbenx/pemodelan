<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'bpm-entitas-status-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'bpm_entitas_status_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_entitas_status_nama',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'bpm_entitas_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
