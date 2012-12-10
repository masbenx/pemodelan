<?php
$this->breadcrumbs=array(
	'Proyek Hasils',
);

$this->menu=array(
	array('label'=>'Create ProyekHasil','url'=>array('create')),
	array('label'=>'Manage ProyekHasil','url'=>array('admin')),
);
?>

<h1>Proyek Hasils</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
