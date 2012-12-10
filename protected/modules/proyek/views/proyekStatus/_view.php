<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_status_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proyek_status_id),array('view','id'=>$data->proyek_status_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_status_nama')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_status_nama); ?>
	<br />


</div>