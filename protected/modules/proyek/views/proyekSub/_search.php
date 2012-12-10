<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_alias',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_judul',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_deskripsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'proyek_sub_abstrak',array('rows'=>6, 'cols'=>4, 'class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_tanggal_mulai',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_tanggal_target',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_sub_tanggal_selesai',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'proyek_versi_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
