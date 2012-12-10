<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->erd_id),array('view','id'=>$data->erd_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_alias')); ?>:</b>
	<?php echo CHtml::encode($data->erd_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_nama')); ?>:</b>
	<?php echo CHtml::encode($data->erd_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_judul')); ?>:</b>
	<?php echo CHtml::encode($data->erd_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->erd_deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->erd_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota->anggota_realname); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->erdStatus->erd_status_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_versi_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyekVersi->proyek_versi_kode); ?>
	<br />


</div>