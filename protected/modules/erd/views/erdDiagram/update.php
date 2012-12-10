<?php
$this->breadcrumbs=array(
	'Erd Diagrams'=>array('index'),
	$model->erd_diagram_id=>array('view','id'=>$model->erd_diagram_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ErdDiagram','url'=>array('index')),
	array('label'=>'Create ErdDiagram','url'=>array('create')),
	array('label'=>'View ErdDiagram','url'=>array('view','id'=>$model->erd_diagram_id)),
	array('label'=>'Manage ErdDiagram','url'=>array('admin')),
);
?>

<h1>Update ErdDiagram <?php echo $model->erd_diagram_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>