<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_judul',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_catatan',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_pencapaian',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_hasil_tanggal',array('class'=>'span5')); ?>

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
