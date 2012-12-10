<?php
$this->breadcrumbs=array(
	'Proyek Versis',
);

$this->menu=array(
	array('label'=>'Create ProyekVersi','url'=>array('create')),
	array('label'=>'Manage ProyekVersi','url'=>array('admin')),
);
?>

<h1>Proyek Versis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
