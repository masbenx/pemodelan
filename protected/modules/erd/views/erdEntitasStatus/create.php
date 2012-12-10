<?php
$this->breadcrumbs=array(
	'Erd Entitas Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ErdEntitasStatus','url'=>array('index')),
	array('label'=>'Manage ErdEntitasStatus','url'=>array('admin')),
);
?>

<h1>Create ErdEntitasStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>