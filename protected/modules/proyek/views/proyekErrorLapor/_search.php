<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'proyek_error_lapor_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_error_lapor_judul',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'proyek_error_lapor_tanggal',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'proyek_error_lapor_konten',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'proyek_error_lapor_status',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
