<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_alias',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_nama',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_judul',array('class'=>'span5','maxlength'=>21)); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_deskripsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'bpm_diagram_keterangan_sebelum',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'bpm_diagram_keterangan_sesudah',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_tanggal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_urutan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
