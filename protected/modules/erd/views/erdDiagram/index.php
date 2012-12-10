<?php
$this->breadcrumbs=array(
	'Erd Diagrams',
);

$this->menu=array(
	array('label'=>'Create ErdDiagram','url'=>array('create')),
	array('label'=>'Manage ErdDiagram','url'=>array('admin')),
);
?>

<h1>Erd Diagrams</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
