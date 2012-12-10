<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'proyek-sub-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_alias',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_judul',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_deskripsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->redactorRow($model, 'proyek_sub_abstrak', array('class'=>'span4', 'rows'=>5)); ?>

        <?php echo $form->textFieldRow($model,'proyek_sub_tanggal_mulai',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_tanggal_target',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_tanggal_selesai',array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'proyek_versi_id',
        CHtml::listData(proyekVersi::model()->findAll(), 'proyek_versi_id','proyek_versi_kode'),array('class'=>'span5')); ?>
	
        <?php echo $form->dropDownListRow($model, 'anggota_id',
        CHtml::listData(Anggota::model()->findAll(), 'anggota_id','anggota_realname'),array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
