<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_divisi_ke_diagram_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bpm_divisi_ke_diagram_id),array('view','id'=>$data->bpm_divisi_ke_diagram_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_divisi_ke_diagram_urutan')); ?>:</b>
	<?php echo CHtml::encode($data->bpm_divisi_ke_diagram_urutan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_diagram_id')); ?>:</b>
	<?php echo CHtml::encode($data->bpmDiagram->bpm_diagram_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpm_divisi_id')); ?>:</b>
	<?php echo CHtml::encode($data->bpmDivisi->bpm_divisi_nama); ?>
	<br />


</div>