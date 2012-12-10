<?php
$this->breadcrumbs=array(
	'Erd Entitases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ErdEntitas','url'=>array('index')),
	array('label'=>'Manage ErdEntitas','url'=>array('admin')),
);
?>

<h1>Create ErdEntitas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>