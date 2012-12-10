<?php
$this->breadcrumbs=array(
	'Bpms',
);

$this->menu=array(
	array('label'=>'Create Bpm','url'=>array('create')),
	array('label'=>'Manage Bpm','url'=>array('admin')),
);
?>

<h1>Bpms</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
