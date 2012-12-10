<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proyek_id),array('view','id'=>$data->proyek_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_alias')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_judul')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_abstrak')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_abstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_tanggal_mulai); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_tanggal_target')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_tanggal_target); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota_id); ?>
	<br />

	*/ ?>

</div>