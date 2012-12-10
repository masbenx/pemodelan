<?php
$this->breadcrumbs=array(
	'Proyeks',
);

$this->menu=array(
	array('label'=>'Create Proyek','url'=>array('create')),
	array('label'=>'Manage Proyek','url'=>array('admin')),
);
?>

<h1>Proyeks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
