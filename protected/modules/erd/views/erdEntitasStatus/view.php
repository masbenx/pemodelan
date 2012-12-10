<?php
$this->breadcrumbs=array(
	'Erd Entitas Statuses'=>array('index'),
	$model->erd_entitas_status_id,
);

$this->menu=array(
	array('label'=>'List ErdEntitasStatus','url'=>array('index')),
	array('label'=>'Create ErdEntitasStatus','url'=>array('create')),
	array('label'=>'Update ErdEntitasStatus','url'=>array('update','id'=>$model->erd_entitas_status_id)),
	array('label'=>'Delete ErdEntitasStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->erd_entitas_status_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ErdEntitasStatus','url'=>array('admin')),
);
?>

<h1>View ErdEntitasStatus #<?php echo $model->erd_entitas_status_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'erd_entitas_status_id',
		'erd_entitas_status_nama',
	),
)); ?>
