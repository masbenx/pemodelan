<?php
$this->breadcrumbs=array(
	'Proyek Hasils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyekHasil','url'=>array('index')),
	array('label'=>'Manage ProyekHasil','url'=>array('admin')),
);
?>

<h1>Create ProyekHasil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>