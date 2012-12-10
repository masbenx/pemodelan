<?php
$this->breadcrumbs=array(
	'Bpm Diagrams'=>array('index'),
	$model->bpm_diagram_id,
);

$this->menu=array(
	array('label'=>'List BpmDiagram','url'=>array('index')),
	array('label'=>'Create BpmDiagram','url'=>array('create')),
	array('label'=>'Update BpmDiagram','url'=>array('update','id'=>$model->bpm_diagram_id)),
	array('label'=>'Delete BpmDiagram','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->bpm_diagram_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BpmDiagram','url'=>array('admin')),
);
?>

<h1>View BpmDiagram #<?php echo $model->bpm_diagram_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'bpm_diagram_id',
		'bpm_diagram_alias',
		'bpm_diagram_nama',
		'bpm_diagram_judul',
		'bpm_diagram_deskripsi',
		'bpm_diagram_keterangan_sebelum',
		'bpm_diagram_keterangan_sesudah',
		'bpm_diagram_tanggal',
		'bpm_diagram_urutan',		
                array('label'=>'Anggota','value'=>$model->anggota->anggota_realname),
		
                array('label'=>'Bpm','value'=>$model->bpm->bpm_nama),
	),
)); ?>
