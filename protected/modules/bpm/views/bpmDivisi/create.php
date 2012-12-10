<?php
$this->breadcrumbs=array(
	'Bpm Divisis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BpmDivisi','url'=>array('index')),
	array('label'=>'Manage BpmDivisi','url'=>array('admin')),
);
?>

<h1>Create BpmDivisi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>