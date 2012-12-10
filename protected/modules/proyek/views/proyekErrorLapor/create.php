<?php
$this->breadcrumbs=array(
	'Proyek Error Lapors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyekErrorLapor','url'=>array('index')),
	array('label'=>'Manage ProyekErrorLapor','url'=>array('admin')),
);
?>

<h1>Create ProyekErrorLapor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>