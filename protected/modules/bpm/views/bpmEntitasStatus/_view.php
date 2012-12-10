<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_entitas_status_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bpm_entitas_status_id),array('view','id'=>$data->bpm_entitas_status_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_entitas_status_nama')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_entitas_status_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_entitas_id')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_entitas_id); ?>
	<br />


</div>