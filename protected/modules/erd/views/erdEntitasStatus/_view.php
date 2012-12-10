<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_entitas_status_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->erd_entitas_status_id),array('view','id'=>$data->erd_entitas_status_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_entitas_status_nama')); ?>:</b>
	<?php echo CHtml::encode($data->erd_entitas_status_nama); ?>
	<br />


</div>