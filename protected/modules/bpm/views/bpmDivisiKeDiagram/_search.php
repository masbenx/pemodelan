<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'bpm_divisi_ke_diagram_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_divisi_ke_diagram_urutan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_diagram_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bpm_divisi_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
