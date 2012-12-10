<?php
$this->breadcrumbs=array(
	'Bpm Divisi Ke Diagrams'=>array('index'),
	$model->bpm_divisi_ke_diagram_id=>array('view','id'=>$model->bpm_divisi_ke_diagram_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BpmDivisiKeDiagram','url'=>array('index')),
	array('label'=>'Create BpmDivisiKeDiagram','url'=>array('create')),
	array('label'=>'View BpmDivisiKeDiagram','url'=>array('view','id'=>$model->bpm_divisi_ke_diagram_id)),
	array('label'=>'Manage BpmDivisiKeDiagram','url'=>array('admin')),
);
?>

<h1>Update BpmDivisiKeDiagram <?php echo $model->bpm_divisi_ke_diagram_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>