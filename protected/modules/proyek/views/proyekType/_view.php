<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_type_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proyek_type_id),array('view','id'=>$data->proyek_type_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_type_nama')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_type_nama); ?>
	<br />


</div>