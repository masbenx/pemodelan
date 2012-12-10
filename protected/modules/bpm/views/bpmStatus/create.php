<?php
$this->breadcrumbs=array(
	'Bpm Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BpmStatus','url'=>array('index')),
	array('label'=>'Manage BpmStatus','url'=>array('admin')),
);
?>

<h1>Create BpmStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>