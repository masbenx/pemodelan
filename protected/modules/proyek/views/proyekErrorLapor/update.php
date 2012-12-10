<?php
$this->breadcrumbs=array(
	'Proyek Error Lapors'=>array('index'),
	$model->proyek_error_lapor_id=>array('view','id'=>$model->proyek_error_lapor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyekErrorLapor','url'=>array('index')),
	array('label'=>'Create ProyekErrorLapor','url'=>array('create')),
	array('label'=>'View ProyekErrorLapor','url'=>array('view','id'=>$model->proyek_error_lapor_id)),
	array('label'=>'Manage ProyekErrorLapor','url'=>array('admin')),
);
?>

<h1>Update ProyekErrorLapor <?php echo $model->proyek_error_lapor_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>