<?php
$this->breadcrumbs=array(
	'Bpms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bpm','url'=>array('index')),
	array('label'=>'Manage Bpm','url'=>array('admin')),
);
?>

<h1>Create Bpm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>