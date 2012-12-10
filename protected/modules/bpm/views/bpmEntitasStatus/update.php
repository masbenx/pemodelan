<?php
$this->breadcrumbs=array(
	'Bpm Entitas Statuses'=>array('index'),
	$model->bpm_entitas_status_id=>array('view','id'=>$model->bpm_entitas_status_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BpmEntitasStatus','url'=>array('index')),
	array('label'=>'Create BpmEntitasStatus','url'=>array('create')),
	array('label'=>'View BpmEntitasStatus','url'=>array('view','id'=>$model->bpm_entitas_status_id)),
	array('label'=>'Manage BpmEntitasStatus','url'=>array('admin')),
);
?>

<h1>Update BpmEntitasStatus <?php echo $model->bpm_entitas_status_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>