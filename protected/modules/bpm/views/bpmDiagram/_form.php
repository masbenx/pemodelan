<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'bpm-diagram-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_alias',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_nama',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_judul',array('class'=>'span5','maxlength'=>21)); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_deskripsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'bpm_diagram_keterangan_sebelum',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'bpm_diagram_keterangan_sesudah',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_tanggal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_urutan',array('class'=>'span5')); ?>
	
        <?php echo $form->dropDownListRow($model, 'anggota_id',
        CHtml::listData(Anggota::model()->findAll(), 'anggota_id','anggota_realname'),array('class'=>'span5')); ?>

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
