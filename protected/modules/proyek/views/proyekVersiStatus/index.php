<?php
$this->breadcrumbs=array(
	'Proyek Versi Statuses',
);

$this->menu=array(
	array('label'=>'Create ProyekVersiStatus','url'=>array('create')),
	array('label'=>'Manage ProyekVersiStatus','url'=>array('admin')),
);
?>

<h1>Proyek Versi Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
