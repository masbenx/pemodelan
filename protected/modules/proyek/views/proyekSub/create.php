<?php
$this->breadcrumbs=array(
	'Proyek Subs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyekSub','url'=>array('index')),
	array('label'=>'Manage ProyekSub','url'=>array('admin')),
);
?>

<h1>Create ProyekSub</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>