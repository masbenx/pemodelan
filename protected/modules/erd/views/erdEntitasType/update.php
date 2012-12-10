<?php
$this->breadcrumbs=array(
	'Erd Entitas Types'=>array('index'),
	$model->erd_entitas_type_id=>array('view','id'=>$model->erd_entitas_type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ErdEntitasType','url'=>array('index')),
	array('label'=>'Create ErdEntitasType','url'=>array('create')),
	array('label'=>'View ErdEntitasType','url'=>array('view','id'=>$model->erd_entitas_type_id)),
	array('label'=>'Manage ErdEntitasType','url'=>array('admin')),
);
?>

<h1>Update ErdEntitasType <?php echo $model->erd_entitas_type_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>