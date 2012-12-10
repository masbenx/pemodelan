<?php
$this->breadcrumbs=array(
	'Erd Entitases'=>array('index'),
	$model->erd_entitas_id=>array('view','id'=>$model->erd_entitas_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ErdEntitas','url'=>array('index')),
	array('label'=>'Create ErdEntitas','url'=>array('create')),
	array('label'=>'View ErdEntitas','url'=>array('view','id'=>$model->erd_entitas_id)),
	array('label'=>'Manage ErdEntitas','url'=>array('admin')),
);
?>

<h1>Update ErdEntitas <?php echo $model->erd_entitas_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>