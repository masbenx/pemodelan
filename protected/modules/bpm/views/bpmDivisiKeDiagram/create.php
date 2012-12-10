<?php
$this->breadcrumbs=array(
	'Bpm Divisi Ke Diagrams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BpmDivisiKeDiagram','url'=>array('index')),
	array('label'=>'Manage BpmDivisiKeDiagram','url'=>array('admin')),
);
?>

<h1>Create BpmDivisiKeDiagram</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>