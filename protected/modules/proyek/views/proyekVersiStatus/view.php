<?php
$this->breadcrumbs=array(
	'Proyek Versi Statuses'=>array('index'),
	$model->proyek_versi_status_id,
);

$this->menu=array(
	array('label'=>'List ProyekVersiStatus','url'=>array('index')),
	array('label'=>'Create ProyekVersiStatus','url'=>array('create')),
	array('label'=>'Update ProyekVersiStatus','url'=>array('update','id'=>$model->proyek_versi_status_id)),
	array('label'=>'Delete ProyekVersiStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->proyek_versi_status_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyekVersiStatus','url'=>array('admin')),
);
?>

<h1>View ProyekVersiStatus #<?php echo $model->proyek_versi_status_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'proyek_versi_status_id',
		'proyek_versi_status_nama',
	),
)); ?>
