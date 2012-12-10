<?php
$this->breadcrumbs=array(
	'Bpm Entitas Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BpmEntitasStatus','url'=>array('index')),
	array('label'=>'Manage BpmEntitasStatus','url'=>array('admin')),
);
?>

<h1>Create BpmEntitasStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>