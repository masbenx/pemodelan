<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'proyek-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'proyek_alias',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'proyek_judul',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'proyek_deskripsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_abstrak',array('class'=>'span5','maxlength'=>2000)); ?>

	<?php echo $form->textFieldRow($model,'proyek_tanggal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_tanggal_mulai',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_tanggal_target',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_tanggal_selesai',array('class'=>'span5')); ?>	
       
        <?php echo $form->dropDownListRow($model, 'proyek_type_id',
        CHtml::listData(proyekType::model()->findAll(), 'proyek_type_id','proyek_type_nama'),array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'proyek_status_id',
        CHtml::listData(proyekStatus::model()->findAll(), 'proyek_status_id','proyek_status_nama'),array('class'=>'span5')); ?>
        
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
