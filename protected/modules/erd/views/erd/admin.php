<?php
$this->breadcrumbs=array(
	'Erds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Erd','url'=>array('index')),
	array('label'=>'Create Erd','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('erd-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Erds</h1>

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
	'id'=>'erd-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'erd_id',
		'erd_alias',
		'erd_nama',
		'erd_judul',
		'erd_deskripsi',
		'erd_tanggal',
		/*
		'anggota_id',
		'erd_status_id',
		'proyek_versi_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
