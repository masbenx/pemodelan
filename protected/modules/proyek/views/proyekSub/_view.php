<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proyek_sub_id),array('view','id'=>$data->proyek_sub_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_alias')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_sub_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_judul')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_sub_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_sub_deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_abstrak')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_sub_abstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_sub_tanggal_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_tanggal_target')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_sub_tanggal_target); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_sub_tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_versi_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyekVersi->proyek_versi_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota->anggota_realname); ?>
	<br />

	

</div>