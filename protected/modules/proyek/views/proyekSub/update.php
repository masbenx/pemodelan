<?php
$this->breadcrumbs=array(
	'Proyek Subs'=>array('index'),
	$model->proyek_sub_id=>array('view','id'=>$model->proyek_sub_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyekSub','url'=>array('index')),
	array('label'=>'Create ProyekSub','url'=>array('create')),
	array('label'=>'View ProyekSub','url'=>array('view','id'=>$model->proyek_sub_id)),
	array('label'=>'Manage ProyekSub','url'=>array('admin')),
);
?>

<h1>Update ProyekSub <?php echo $model->proyek_sub_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>