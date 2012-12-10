<?php
$this->breadcrumbs=array(
	'Bpm Diagrams'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BpmDiagram','url'=>array('index')),
	array('label'=>'Create BpmDiagram','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('bpm-diagram-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bpm Diagrams</h1>

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
	'id'=>'bpm-diagram-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'bpm_diagram_id',
		'bpm_diagram_alias',
		'bpm_diagram_nama',
		'bpm_diagram_judul',
		'bpm_diagram_deskripsi',
		'bpm_diagram_keterangan_sebelum',
		/*
		'bpm_diagram_keterangan_sesudah',
		'bpm_diagram_tanggal',
		'bpm_diagram_urutan',
		'anggota_id',
		'bpm_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
