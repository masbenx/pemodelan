<?php
$this->breadcrumbs=array(
	'Proyek Subs',
);

$this->menu=array(
	array('label'=>'Create ProyekSub','url'=>array('create')),
	array('label'=>'Manage ProyekSub','url'=>array('admin')),
);
?>

<h1>Proyek Subs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
