<?php
$this->breadcrumbs=array(
	'Erd Diagrams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ErdDiagram','url'=>array('index')),
	array('label'=>'Manage ErdDiagram','url'=>array('admin')),
);
?>

<h1>Create ErdDiagram</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>