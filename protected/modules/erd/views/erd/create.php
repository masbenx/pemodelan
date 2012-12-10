<?php
$this->breadcrumbs=array(
	'Erds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Erd','url'=>array('index')),
	array('label'=>'Manage Erd','url'=>array('admin')),
);
?>

<h1>Create Erd</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>