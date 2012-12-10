<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'proyek_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_alias',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'proyek_judul',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'proyek_deskripsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_abstrak',array('class'=>'span5','maxlength'=>2000)); ?>

	<?php echo $form->textFieldRow($model,'proyek_tanggal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_tanggal_mulai',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_tanggal_target',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_tanggal_selesai',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_type_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_status_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
