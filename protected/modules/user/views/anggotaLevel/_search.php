<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'anggota_level_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'anggota_level_alias',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'anggota_level_nama',array('class'=>'span5','maxlength'=>25)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
