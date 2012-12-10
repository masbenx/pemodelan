<?php
$this->breadcrumbs=array(
	'Erd Entitas Types',
);

$this->menu=array(
	array('label'=>'Create ErdEntitasType','url'=>array('create')),
	array('label'=>'Manage ErdEntitasType','url'=>array('admin')),
);
?>

<h1>Erd Entitas Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
