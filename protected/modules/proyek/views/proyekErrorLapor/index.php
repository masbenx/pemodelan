<?php
$this->breadcrumbs=array(
	'Proyek Error Lapors',
);

$this->menu=array(
	array('label'=>'Create ProyekErrorLapor','url'=>array('create')),
	array('label'=>'Manage ProyekErrorLapor','url'=>array('admin')),
);
?>

<h1>Proyek Error Lapors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
