<?php
$this->breadcrumbs=array(
	'Bpm Divisi Ke Diagrams'=>array('index'),
	$model->bpm_divisi_ke_diagram_id,
);

$this->menu=array(
	array('label'=>'List BpmDivisiKeDiagram','url'=>array('index')),
	array('label'=>'Create BpmDivisiKeDiagram','url'=>array('create')),
	array('label'=>'Update BpmDivisiKeDiagram','url'=>array('update','id'=>$model->bpm_divisi_ke_diagram_id)),
	array('label'=>'Delete BpmDivisiKeDiagram','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->bpm_divisi_ke_diagram_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BpmDivisiKeDiagram','url'=>array('admin')),
);
?>

<h1>View BpmDivisiKeDiagram #<?php echo $model->bpm_divisi_ke_diagram_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'bpm_divisi_ke_diagram_id',
		'bpm_divisi_ke_diagram_urutan',
		
                array('label'=>'Bpm Diagram','value'=>$model->bpmDiagram->bpm_diagram_nama),
		
                array('label'=>'Bpm Divisi','value'=>$model->bpmDivisi->bpm_divisi_nama),
	),
)); ?>
