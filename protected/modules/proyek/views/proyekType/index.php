<?php
$this->breadcrumbs=array(
	'Proyek Types',
);

$this->menu=array(
	array('label'=>'Create ProyekType','url'=>array('create')),
	array('label'=>'Manage ProyekType','url'=>array('admin')),
);
?>

<h1>Proyek Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
