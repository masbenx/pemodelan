<?php
$this->breadcrumbs=array(
	'Proyek Statuses'=>array('index'),
	$model->proyek_status_id=>array('view','id'=>$model->proyek_status_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyekStatus','url'=>array('index')),
	array('label'=>'Create ProyekStatus','url'=>array('create')),
	array('label'=>'View ProyekStatus','url'=>array('view','id'=>$model->proyek_status_id)),
	array('label'=>'Manage ProyekStatus','url'=>array('admin')),
);
?>

<h1>Update ProyekStatus <?php echo $model->proyek_status_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>