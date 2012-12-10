<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'erd-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'erd_alias',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'erd_nama',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'erd_judul',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'erd_deskripsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'erd_tanggal',array('class'=>'span5')); ?>

	
        <?php echo $form->dropDownListRow($model, 'anggota_id',
        CHtml::listData(Anggota::model()->findAll(), 'anggota_id','anggota_realname'),array('class'=>'span5')); ?>
	
        <?php echo $form->dropDownListRow($model, 'erd_status_id',
        CHtml::listData(ErdStatus::model()->findAll(), 'erd_status_id','erd_status_nama'),array('class'=>'span5')); ?>

	
        <?php echo $form->dropDownListRow($model, 'proyek_versi_id',
        CHtml::listData(ProyekVersi::model()->findAll(), 'proyek_versi_id','proyek_versi_kode'),array('class'=>'span5')); ?>
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
