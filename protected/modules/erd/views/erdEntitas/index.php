<?php
$this->breadcrumbs=array(
	'Erd Entitases',
);

$this->menu=array(
	array('label'=>'Create ErdEntitas','url'=>array('create')),
	array('label'=>'Manage ErdEntitas','url'=>array('admin')),
);
?>

<h1>Erd Entitases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
