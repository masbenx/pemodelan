<?php
$this->breadcrumbs=array(
	'Erd Entitas Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ErdEntitasType','url'=>array('index')),
	array('label'=>'Manage ErdEntitasType','url'=>array('admin')),
);
?>

<h1>Create ErdEntitasType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>