<?php
$this->breadcrumbs=array(
	'Proyek Hasils'=>array('index'),
	$model->proyek_hasil_id=>array('view','id'=>$model->proyek_hasil_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyekHasil','url'=>array('index')),
	array('label'=>'Create ProyekHasil','url'=>array('create')),
	array('label'=>'View ProyekHasil','url'=>array('view','id'=>$model->proyek_hasil_id)),
	array('label'=>'Manage ProyekHasil','url'=>array('admin')),
);
?>

<h1>Update ProyekHasil <?php echo $model->proyek_hasil_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>