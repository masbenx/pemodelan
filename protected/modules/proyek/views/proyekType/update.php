<?php
$this->breadcrumbs=array(
	'Proyek Types'=>array('index'),
	$model->proyek_type_id=>array('view','id'=>$model->proyek_type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyekType','url'=>array('index')),
	array('label'=>'Create ProyekType','url'=>array('create')),
	array('label'=>'View ProyekType','url'=>array('view','id'=>$model->proyek_type_id)),
	array('label'=>'Manage ProyekType','url'=>array('admin')),
);
?>

<h1>Update ProyekType <?php echo $model->proyek_type_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>