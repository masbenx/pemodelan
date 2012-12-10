<?php
$this->breadcrumbs=array(
	'Bpm Divisis'=>array('index'),
	$model->bpm_divisi_id=>array('view','id'=>$model->bpm_divisi_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BpmDivisi','url'=>array('index')),
	array('label'=>'Create BpmDivisi','url'=>array('create')),
	array('label'=>'View BpmDivisi','url'=>array('view','id'=>$model->bpm_divisi_id)),
	array('label'=>'Manage BpmDivisi','url'=>array('admin')),
);
?>

<h1>Update BpmDivisi <?php echo $model->bpm_divisi_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>