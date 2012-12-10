<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'erd-diagram-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'erd_diagram_alias',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'erd_diagram_nama',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'erd_diagram_judul',array('class'=>'span5','maxlength'=>64)); ?>

	<?php echo $form->textFieldRow($model,'erd_diagram_deskrispsi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'erd_diagram_keterangan_sebelum',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'erd_diagram_keterangan_sesudah',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

        
        <?php echo $form->dropDownListRow($model, 'erd_id',
        CHtml::listData(Erd::model()->findAll(), 'erd_id','erd_nama'),array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
