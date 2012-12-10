<?php
$this->breadcrumbs=array(
	'Bpm Diagrams'=>array('index'),
	$model->bpm_diagram_id=>array('view','id'=>$model->bpm_diagram_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BpmDiagram','url'=>array('index')),
	array('label'=>'Create BpmDiagram','url'=>array('create')),
	array('label'=>'View BpmDiagram','url'=>array('view','id'=>$model->bpm_diagram_id)),
	array('label'=>'Manage BpmDiagram','url'=>array('admin')),
);
?>

<h1>Update BpmDiagram <?php echo $model->bpm_diagram_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>