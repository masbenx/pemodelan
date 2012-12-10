<?php
$this->breadcrumbs=array(
	'Bpms'=>array('index'),
	$model->bpm_id=>array('view','id'=>$model->bpm_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bpm','url'=>array('index')),
	array('label'=>'Create Bpm','url'=>array('create')),
	array('label'=>'View Bpm','url'=>array('view','id'=>$model->bpm_id)),
	array('label'=>'Manage Bpm','url'=>array('admin')),
);
?>

<h1>Update Bpm <?php echo $model->bpm_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>