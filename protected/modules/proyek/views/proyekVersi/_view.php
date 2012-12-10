<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_versi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proyek_versi_id),array('view','id'=>$data->proyek_versi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_versi_kode')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_versi_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyek->proyek_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota->anggota_realname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_versi_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyekVersiStatus->proyek_versi_status_nama); ?>
	<br />


</div>