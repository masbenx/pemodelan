<?php
$this->breadcrumbs=array(
	'Bpm Entitas Statuses'=>array('index'),
	$model->bpm_entitas_status_id,
);

$this->menu=array(
	array('label'=>'List BpmEntitasStatus','url'=>array('index')),
	array('label'=>'Create BpmEntitasStatus','url'=>array('create')),
	array('label'=>'Update BpmEntitasStatus','url'=>array('update','id'=>$model->bpm_entitas_status_id)),
	array('label'=>'Delete BpmEntitasStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->bpm_entitas_status_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BpmEntitasStatus','url'=>array('admin')),
);
?>

<h1>View BpmEntitasStatus #<?php echo $model->bpm_entitas_status_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'bpm_entitas_status_id',
		'bpm_entitas_status_nama',
		'bpm_entitas_id',
	),
)); ?>
