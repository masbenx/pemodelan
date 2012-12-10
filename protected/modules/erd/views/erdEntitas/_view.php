<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_entitas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->erd_entitas_id),array('view','id'=>$data->erd_entitas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_entitas_upline')); ?>:</b>
	<?php echo CHtml::encode($data->erd_entitas_upline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_entitas_nama')); ?>:</b>
	<?php echo CHtml::encode($data->erd_entitas_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_entitas_judul')); ?>:</b>
	<?php echo CHtml::encode($data->erd_entitas_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_id')); ?>:</b>
	<?php echo CHtml::encode($data->erd_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_entitas_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->erd_entitas_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_entitas_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->erd_entitas_status_id); ?>
	<br />


</div>