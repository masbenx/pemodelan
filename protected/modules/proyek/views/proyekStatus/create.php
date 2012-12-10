<?php
$this->breadcrumbs=array(
	'Proyek Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyekStatus','url'=>array('index')),
	array('label'=>'Manage ProyekStatus','url'=>array('admin')),
);
?>

<h1>Create ProyekStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>