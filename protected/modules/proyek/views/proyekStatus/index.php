<?php
$this->breadcrumbs=array(
	'Proyek Statuses',
);

$this->menu=array(
	array('label'=>'Create ProyekStatus','url'=>array('create')),
	array('label'=>'Manage ProyekStatus','url'=>array('admin')),
);
?>

<h1>Proyek Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
