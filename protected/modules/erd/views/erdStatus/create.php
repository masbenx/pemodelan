<?php
$this->breadcrumbs=array(
	'Erd Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ErdStatus','url'=>array('index')),
	array('label'=>'Manage ErdStatus','url'=>array('admin')),
);
?>

<h1>Create ErdStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>