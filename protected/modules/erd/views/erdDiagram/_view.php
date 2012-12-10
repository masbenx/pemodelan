<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_diagram_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->erd_diagram_id),array('view','id'=>$data->erd_diagram_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_diagram_alias')); ?>:</b>
	<?php echo CHtml::encode($data->erd_diagram_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_diagram_nama')); ?>:</b>
	<?php echo CHtml::encode($data->erd_diagram_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_diagram_judul')); ?>:</b>
	<?php echo CHtml::encode($data->erd_diagram_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_diagram_deskrispsi')); ?>:</b>
	<?php echo CHtml::encode($data->erd_diagram_deskrispsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_diagram_keterangan_sebelum')); ?>:</b>
	<?php echo CHtml::encode($data->erd_diagram_keterangan_sebelum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_diagram_keterangan_sesudah')); ?>:</b>
	<?php echo CHtml::encode($data->erd_diagram_keterangan_sesudah); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('erd_id')); ?>:</b>
	<?php echo CHtml::encode($data->erd->erd_nama); ?>
	<br />

</div>