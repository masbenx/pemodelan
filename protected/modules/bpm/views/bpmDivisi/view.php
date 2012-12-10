<?php
$this->breadcrumbs=array(
	'Bpm Divisis'=>array('index'),
	$model->bpm_divisi_id,
);

$this->menu=array(
	array('label'=>'List BpmDivisi','url'=>array('index')),
	array('label'=>'Create BpmDivisi','url'=>array('create')),
	array('label'=>'Update BpmDivisi','url'=>array('update','id'=>$model->bpm_divisi_id)),
	array('label'=>'Delete BpmDivisi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->bpm_divisi_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BpmDivisi','url'=>array('admin')),
);
?>

<h1>View BpmDivisi #<?php echo $model->bpm_divisi_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'bpm_divisi_id',
		'bpm_divisi_upline',
		'bpm_divisi_alias',
		'bpm_divisi_nama',
		'bpm_divisi_judul',		
                array('label'=>'Bpm','value'=>$model->bpm->bpm_nama),
	),
)); ?>
