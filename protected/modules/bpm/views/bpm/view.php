<?php
$this->breadcrumbs=array(
	'Bpms'=>array('index'),
	$model->bpm_id,
);

$this->menu=array(
	array('label'=>'List Bpm','url'=>array('index')),
	array('label'=>'Create Bpm','url'=>array('create')),
	array('label'=>'Update Bpm','url'=>array('update','id'=>$model->bpm_id)),
	array('label'=>'Delete Bpm','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->bpm_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bpm','url'=>array('admin')),
);
?>

<h1>View Bpm #<?php echo $model->bpm_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'bpm_id',
		'bpm_alias',
		'bpm_nama',
		'bpm_judul',
		'bpm_deskripsi',
		'bpm_tanggal',		
                array('label'=>'Anggota','value'=>$model->anggota->anggota_realname),
		
                array('label'=>'Bpm Status','value'=>$model->bpmStatus->bpm_status_nama),
		
                array('label'=>'Proyek Versi','value'=>$model->proyekVersi->proyek_versi_kode),
	),
)); ?>
