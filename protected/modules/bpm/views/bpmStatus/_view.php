<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_status_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bpm_status_id),array('view','id'=>$data->bpm_status_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_status_nama')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_status_nama); ?>
	<br />


</div>