<?php
$this->breadcrumbs=array(
	'Anggota Types',
);

$this->menu=array(
	array('label'=>'Create AnggotaType','url'=>array('create')),
	array('label'=>'Manage AnggotaType','url'=>array('admin')),
);
?>

<h1>Anggota Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
