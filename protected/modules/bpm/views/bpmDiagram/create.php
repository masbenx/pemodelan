<?php
$this->breadcrumbs=array(
	'Bpm Diagrams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BpmDiagram','url'=>array('index')),
	array('label'=>'Manage BpmDiagram','url'=>array('admin')),
);
?>

<h1>Create BpmDiagram</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>