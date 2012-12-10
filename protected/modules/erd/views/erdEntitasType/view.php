<?php
$this->breadcrumbs=array(
	'Erd Entitas Types'=>array('index'),
	$model->erd_entitas_type_id,
);

$this->menu=array(
	array('label'=>'List ErdEntitasType','url'=>array('index')),
	array('label'=>'Create ErdEntitasType','url'=>array('create')),
	array('label'=>'Update ErdEntitasType','url'=>array('update','id'=>$model->erd_entitas_type_id)),
	array('label'=>'Delete ErdEntitasType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->erd_entitas_type_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ErdEntitasType','url'=>array('admin')),
);
?>

<h1>View ErdEntitasType #<?php echo $model->erd_entitas_type_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'erd_entitas_type_id',
		'erd_entitas_type_nama',
	),
)); ?>
