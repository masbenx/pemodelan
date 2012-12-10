<?php
$this->breadcrumbs=array(
	'Proyek Versis'=>array('index'),
	$model->proyek_versi_id=>array('view','id'=>$model->proyek_versi_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyekVersi','url'=>array('index')),
	array('label'=>'Create ProyekVersi','url'=>array('create')),
	array('label'=>'View ProyekVersi','url'=>array('view','id'=>$model->proyek_versi_id)),
	array('label'=>'Manage ProyekVersi','url'=>array('admin')),
);
?>

<h1>Update ProyekVersi <?php echo $model->proyek_versi_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>