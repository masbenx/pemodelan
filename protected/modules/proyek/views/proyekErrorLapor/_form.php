<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'proyek-error-lapor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'proyek_error_lapor_judul',array('class'=>'span5','maxlength'=>32)); ?>

        <?php echo $form->datepickerRow($model, 'proyek_error_lapor_tanggal',
        array('prepend'=>'<i class="icon-calendar"></i>','options'=>array('format'=>'yyyy-mm-dd'))); ?>

        <?php echo $form->redactorRow($model, 'proyek_error_lapor_konten', array('class'=>'span4', 'rows'=>5)); ?>

	<?php echo $form->textFieldRow($model,'proyek_error_lapor_status',array('class'=>'span5','maxlength'=>32)); ?>

        <?php echo $form->dropDownListRow($model, 'anggota_id',
        CHtml::listData(Anggota::model()->findAll(), 'anggota_id','anggota_realname'),array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'proyek_sub_id',
        CHtml::listData(proyekSUb::model()->findAll(), 'proyek_sub_id','proyek_sub_judul'),array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
