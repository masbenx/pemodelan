<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'bpm-divisi-ke-diagram-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'bpm_divisi_ke_diagram_urutan',array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'bpm_diagram_id',
        CHtml::listData(BpmDiagram::model()->findAll(), 'bpm_diagram_id','bpm_diagram_nama'),array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'bpm_divisi_id',
        CHtml::listData(BpmDivisi::model()->findAll(), 'bpm_divisi_id','bpm_divisi_nama'),array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
