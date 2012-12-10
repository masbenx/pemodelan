<?php
$this->breadcrumbs=array(
	'Erd Entitas Statuses',
);

$this->menu=array(
	array('label'=>'Create ErdEntitasStatus','url'=>array('create')),
	array('label'=>'Manage ErdEntitasStatus','url'=>array('admin')),
);
?>

<h1>Erd Entitas Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
