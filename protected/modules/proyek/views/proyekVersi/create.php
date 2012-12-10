<?php
$this->breadcrumbs=array(
	'Proyek Versis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyekVersi','url'=>array('index')),
	array('label'=>'Manage ProyekVersi','url'=>array('admin')),
);
?>

<h1>Create ProyekVersi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>