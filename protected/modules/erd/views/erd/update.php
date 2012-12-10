<?php
$this->breadcrumbs=array(
	'Erds'=>array('index'),
	$model->erd_id=>array('view','id'=>$model->erd_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Erd','url'=>array('index')),
	array('label'=>'Create Erd','url'=>array('create')),
	array('label'=>'View Erd','url'=>array('view','id'=>$model->erd_id)),
	array('label'=>'Manage Erd','url'=>array('admin')),
);
?>

<h1>Update Erd <?php echo $model->erd_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>