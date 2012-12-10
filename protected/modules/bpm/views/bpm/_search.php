<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'bpm_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_alias',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_nama',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_judul',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_deskripsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'bpm_tanggal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_status_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_versi_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
