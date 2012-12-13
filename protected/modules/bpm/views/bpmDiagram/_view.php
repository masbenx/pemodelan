<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bpm_diagram_id),array('view','id'=>$data->bpm_diagram_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_alias')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_diagram_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_nama')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_diagram_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_judul')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_diagram_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_diagram_deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_keterangan_sebelum')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_diagram_keterangan_sebelum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_keterangan_sesudah')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_diagram_keterangan_sesudah); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_diagram_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_urutan')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_diagram_urutan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota->anggota_realname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_id')); ?>:</b>
	<?php echo CHtml::encode($data->bpm->bpm_nama); ?>
	<br />


</div>