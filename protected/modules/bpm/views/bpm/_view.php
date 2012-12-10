<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bpm_id),array('view','id'=>$data->bpm_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_alias')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_nama')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_judul')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota->anggota_realname); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->bpmStatus->bpm_status_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_versi_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyekVersi->proyek_versi_kode); ?>
	<br />

</div>