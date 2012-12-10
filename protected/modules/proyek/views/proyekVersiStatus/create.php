<?php
$this->breadcrumbs=array(
	'Proyek Versi Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyekVersiStatus','url'=>array('index')),
	array('label'=>'Manage ProyekVersiStatus','url'=>array('admin')),
);
?>

<h1>Create ProyekVersiStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>