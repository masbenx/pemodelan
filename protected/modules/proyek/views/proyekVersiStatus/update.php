<?php
$this->breadcrumbs=array(
	'Proyek Versi Statuses'=>array('index'),
	$model->proyek_versi_status_id=>array('view','id'=>$model->proyek_versi_status_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyekVersiStatus','url'=>array('index')),
	array('label'=>'Create ProyekVersiStatus','url'=>array('create')),
	array('label'=>'View ProyekVersiStatus','url'=>array('view','id'=>$model->proyek_versi_status_id)),
	array('label'=>'Manage ProyekVersiStatus','url'=>array('admin')),
);
?>

<h1>Update ProyekVersiStatus <?php echo $model->proyek_versi_status_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>