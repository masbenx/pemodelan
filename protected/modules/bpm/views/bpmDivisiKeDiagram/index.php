<?php
$this->breadcrumbs=array(
	'Bpm Divisi Ke Diagrams',
);

$this->menu=array(
	array('label'=>'Create BpmDivisiKeDiagram','url'=>array('create')),
	array('label'=>'Manage BpmDivisiKeDiagram','url'=>array('admin')),
);
?>

<h1>Bpm Divisi Ke Diagrams</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
