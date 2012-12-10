<?php
$this->breadcrumbs=array(
	'Erds',
);

$this->menu=array(
	array('label'=>'Create Erd','url'=>array('create')),
	array('label'=>'Manage Erd','url'=>array('admin')),
);
?>

<h1>Erds</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
