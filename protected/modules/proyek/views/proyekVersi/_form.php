<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'proyek-versi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'proyek_versi_kode',array('class'=>'span5','maxlength'=>8)); ?>

        <?php echo $form->dropDownListRow($model, 'proyek_id',
        CHtml::listData(Proyek::model()->findAll(), 'proyek_id','proyek_judul'),array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'anggota_id',
        CHtml::listData(Anggota::model()->findAll(), 'anggota_id','anggota_realname'),array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'proyek_versi_status_id',
        CHtml::listData(proyekVersiStatus::model()->findAll(), 'proyek_versi_status_id','proyek_versi_status_nama'),array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
