<?php
$this->breadcrumbs=array(
	'Proyek Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyekType','url'=>array('index')),
	array('label'=>'Manage ProyekType','url'=>array('admin')),
);
?>

<h1>Create ProyekType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>