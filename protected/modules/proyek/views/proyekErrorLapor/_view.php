<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_error_lapor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proyek_error_lapor_id),array('view','id'=>$data->proyek_error_lapor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_error_lapor_judul')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_error_lapor_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_error_lapor_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_error_lapor_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_error_lapor_konten')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_error_lapor_konten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_error_lapor_status')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_error_lapor_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota->anggota_realname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyekSub->proyek_sub_judul); ?>
	<br />


</div>