<?php
$this->breadcrumbs=array(
	'Bpm Statuses',
);

$this->menu=array(
	array('label'=>'Create BpmStatus','url'=>array('create')),
	array('label'=>'Manage BpmStatus','url'=>array('admin')),
);
?>

<h1>Bpm Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
