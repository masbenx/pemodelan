<?php
$this->breadcrumbs=array(
	'Bpm Divisis',
);

$this->menu=array(
	array('label'=>'Create BpmDivisi','url'=>array('create')),
	array('label'=>'Manage BpmDivisi','url'=>array('admin')),
);
?>

<h1>Bpm Divisis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
