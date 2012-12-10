<?php
$this->breadcrumbs=array(
	'Erd Entitas Statuses'=>array('index'),
	$model->erd_entitas_status_id=>array('view','id'=>$model->erd_entitas_status_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ErdEntitasStatus','url'=>array('index')),
	array('label'=>'Create ErdEntitasStatus','url'=>array('create')),
	array('label'=>'View ErdEntitasStatus','url'=>array('view','id'=>$model->erd_entitas_status_id)),
	array('label'=>'Manage ErdEntitasStatus','url'=>array('admin')),
);
?>

<h1>Update ErdEntitasStatus <?php echo $model->erd_entitas_status_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>