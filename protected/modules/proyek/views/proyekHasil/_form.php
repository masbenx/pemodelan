<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'proyek-hasil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_judul',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_catatan',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_pencapaian',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_tanggal',array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'anggota_id',
        CHtml::listData(Anggota::model()->findAll(), 'anggota_id','anggota_realname'),array('class'=>'span5')); ?>

        <?php echo $form->dropDownListRow($model, 'proyek_sub_id',
        CHtml::listData(proyekSub::model()->findAll(), 'proyek_sub_id','proyek_sub_judul'),array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
