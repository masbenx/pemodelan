<?php
$this->breadcrumbs=array(
	'Bpm Diagrams',
);

$this->menu=array(
	array('label'=>'Create BpmDiagram','url'=>array('create')),
	array('label'=>'Manage BpmDiagram','url'=>array('admin')),
);
?>

<h1>Bpm Diagrams</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
