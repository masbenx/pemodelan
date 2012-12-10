<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_divisi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bpm_divisi_id),array('view','id'=>$data->bpm_divisi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_divisi_upline')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_divisi_upline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_divisi_alias')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_divisi_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_divisi_nama')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_divisi_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_divisi_judul')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_divisi_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_id')); ?>:</b>
	<?php echo CHtml::encode($data->bpm->bpm_nama); ?>
	<br />


</div>