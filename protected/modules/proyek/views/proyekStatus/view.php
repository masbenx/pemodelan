<?php
$this->breadcrumbs=array(
	'Proyek Statuses'=>array('index'),
	$model->proyek_status_id,
);

$this->menu=array(
	array('label'=>'List ProyekStatus','url'=>array('index')),
	array('label'=>'Create ProyekStatus','url'=>array('create')),
	array('label'=>'Update ProyekStatus','url'=>array('update','id'=>$model->proyek_status_id)),
	array('label'=>'Delete ProyekStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->proyek_status_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyekStatus','url'=>array('admin')),
);
?>

<h1>View ProyekStatus #<?php echo $model->proyek_status_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'proyek_status_id',
		'proyek_status_nama',
	),
)); ?>
