<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_hasil_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proyek_hasil_id),array('view','id'=>$data->proyek_hasil_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_hasil_judul')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_hasil_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_hasil_catatan')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_hasil_catatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_hasil_pencapaian')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_hasil_pencapaian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_hasil_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->proyek_hasil_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota->anggota_realname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyek_sub_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyekSub->proyek_sub_judul); ?>
	<br />


</div>