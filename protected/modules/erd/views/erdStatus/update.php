<?php
$this->breadcrumbs=array(
	'Erd Statuses'=>array('index'),
	$model->erd_status_id=>array('view','id'=>$model->erd_status_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ErdStatus','url'=>array('index')),
	array('label'=>'Create ErdStatus','url'=>array('create')),
	array('label'=>'View ErdStatus','url'=>array('view','id'=>$model->erd_status_id)),
	array('label'=>'Manage ErdStatus','url'=>array('admin')),
);
?>

<h1>Update ErdStatus <?php echo $model->erd_status_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>