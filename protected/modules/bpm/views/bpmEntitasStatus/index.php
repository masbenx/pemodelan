<?php
$this->breadcrumbs=array(
	'Bpm Entitas Statuses',
);

$this->menu=array(
	array('label'=>'Create BpmEntitasStatus','url'=>array('create')),
	array('label'=>'Manage BpmEntitasStatus','url'=>array('admin')),
);
?>

<h1>Bpm Entitas Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
