<?php
$this->breadcrumbs=array(
	'Erd Diagrams'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ErdDiagram','url'=>array('index')),
	array('label'=>'Create ErdDiagram','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('erd-diagram-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Erd Diagrams</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'erd-diagram-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'erd_diagram_id',
		'erd_diagram_alias',
		'erd_diagram_nama',
		'erd_diagram_judul',
		'erd_diagram_deskrispsi',
		'erd_diagram_keterangan_sebelum',
		/*
		'erd_diagram_keterangan_sesudah',
		'erd_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
