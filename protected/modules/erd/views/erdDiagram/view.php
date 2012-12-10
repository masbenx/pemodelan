<?php
$this->breadcrumbs=array(
	'Erd Diagrams'=>array('index'),
	$model->erd_diagram_id,
);

$this->menu=array(
	array('label'=>'List ErdDiagram','url'=>array('index')),
	array('label'=>'Create ErdDiagram','url'=>array('create')),
	array('label'=>'Update ErdDiagram','url'=>array('update','id'=>$model->erd_diagram_id)),
	array('label'=>'Delete ErdDiagram','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->erd_diagram_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ErdDiagram','url'=>array('admin')),
);
?>

<h1>View ErdDiagram #<?php echo $model->erd_diagram_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'erd_diagram_id',
		'erd_diagram_alias',
		'erd_diagram_nama',
		'erd_diagram_judul',
		'erd_diagram_deskrispsi',
		'erd_diagram_keterangan_sebelum',
		'erd_diagram_keterangan_sesudah',
		
                array(
                    'label' => 'Erd',
                    'value' => $model->erd->erd_nama
                )
	),
)); ?>
