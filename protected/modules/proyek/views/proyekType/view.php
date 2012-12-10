<?php
$this->breadcrumbs=array(
	'Proyek Types'=>array('index'),
	$model->proyek_type_id,
);

$this->menu=array(
	array('label'=>'List ProyekType','url'=>array('index')),
	array('label'=>'Create ProyekType','url'=>array('create')),
	array('label'=>'Update ProyekType','url'=>array('update','id'=>$model->proyek_type_id)),
	array('label'=>'Delete ProyekType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->proyek_type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyekType','url'=>array('admin')),
);
?>

<h1>View ProyekType #<?php echo $model->proyek_type_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'proyek_type_id',
		'proyek_type_nama',
	),
)); ?>
