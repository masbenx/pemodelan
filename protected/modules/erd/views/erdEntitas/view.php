<?php
$this->breadcrumbs=array(
	'Erd Entitases'=>array('index'),
	$model->erd_entitas_id,
);

$this->menu=array(
	array('label'=>'List ErdEntitas','url'=>array('index')),
	array('label'=>'Create ErdEntitas','url'=>array('create')),
	array('label'=>'Update ErdEntitas','url'=>array('update','id'=>$model->erd_entitas_id)),
	array('label'=>'Delete ErdEntitas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->erd_entitas_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ErdEntitas','url'=>array('admin')),
);
?>

<h1>View ErdEntitas #<?php echo $model->erd_entitas_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'erd_entitas_id',
		'erd_entitas_upline',
		'erd_entitas_nama',
		'erd_entitas_judul',
		
                array('label' =>'Erd','value'=>$model->erd->erd_nama),
		
                array('label'=>'Type','value'=>$model->erdEntitasType->erd_entitas_type_nama),
		
                array('label'=>'Status','value'=>$model->erdEntitasStatus->erd_entitas_status_nama),
	),
)); ?>
