<?php
$this->breadcrumbs=array(
	'Bpm Statuses'=>array('index'),
	$model->bpm_status_id=>array('view','id'=>$model->bpm_status_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BpmStatus','url'=>array('index')),
	array('label'=>'Create BpmStatus','url'=>array('create')),
	array('label'=>'View BpmStatus','url'=>array('view','id'=>$model->bpm_status_id)),
	array('label'=>'Manage BpmStatus','url'=>array('admin')),
);
?>

<h1>Update BpmStatus <?php echo $model->bpm_status_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>