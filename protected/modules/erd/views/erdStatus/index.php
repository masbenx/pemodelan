<?php
$this->breadcrumbs=array(
	'Erd Statuses',
);

$this->menu=array(
	array('label'=>'Create ErdStatus','url'=>array('create')),
	array('label'=>'Manage ErdStatus','url'=>array('admin')),
);
?>

<h1>Erd Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
