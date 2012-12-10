<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'bpm-divisi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'bpm_divisi_upline',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_divisi_alias',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_divisi_nama',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_divisi_judul',array('class'=>'span5','maxlength'=>32)); ?>

	
        <?php echo $form->dropDownListRow($model, 'bpm_id',
        CHtml::listData(Bpm::model()->findAll(), 'bpm_id','bpm_nama'),array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
