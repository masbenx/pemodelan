<?php
$this->breadcrumbs=array(
	'Erd Statuses'=>array('index'),
	$model->erd_status_id,
);

$this->menu=array(
	array('label'=>'List ErdStatus','url'=>array('index')),
	array('label'=>'Create ErdStatus','url'=>array('create')),
	array('label'=>'Update ErdStatus','url'=>array('update','id'=>$model->erd_status_id)),
	array('label'=>'Delete ErdStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->erd_status_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ErdStatus','url'=>array('admin')),
);
?>

<h1>View ErdStatus #<?php echo $model->erd_status_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'erd_status_id',
		'erd_status_nama',
	),
)); ?>
