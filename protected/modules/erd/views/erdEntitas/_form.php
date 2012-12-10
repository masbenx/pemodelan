<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'erd-entitas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'erd_entitas_upline',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'erd_entitas_nama',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'erd_entitas_judul',array('class'=>'span5','maxlength'=>100)); ?>

	
        <?php echo $form->dropDownListRow($model, 'erd_id',
        CHtml::listData(Erd::model()->findAll(), 'erd_id','erd_nama'),array('class'=>'span5')); ?>

	
        <?php echo $form->dropDownListRow($model, 'erd_entitas_type_id',
        CHtml::listData(ErdEntitasType::model()->findAll(), 'erd_entitas_type_id','erd_entitas_type_nama'),array('class'=>'span5')); ?>

	
        <?php echo $form->dropDownListRow($model, 'erd_entitas_status_id',
        CHtml::listData(ErdEntitasStatus::model()->findAll(), 'erd_entitas_status_id','erd_entitas_status_nama'),array('class'=>'span5')); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
