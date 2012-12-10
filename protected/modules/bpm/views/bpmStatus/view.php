<?php
$this->breadcrumbs=array(
	'Bpm Statuses'=>array('index'),
	$model->bpm_status_id,
);

$this->menu=array(
	array('label'=>'List BpmStatus','url'=>array('index')),
	array('label'=>'Create BpmStatus','url'=>array('create')),
	array('label'=>'Update BpmStatus','url'=>array('update','id'=>$model->bpm_status_id)),
	array('label'=>'Delete BpmStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->bpm_status_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BpmStatus','url'=>array('admin')),
);
?>

<h1>View BpmStatus #<?php echo $model->bpm_status_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'bpm_status_id',
		'bpm_status_nama',
	),
)); ?>
