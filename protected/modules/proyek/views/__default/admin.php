<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyeks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Proyek', 'url'=>array('index')),
	array('label'=>'Create Proyek', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('proyek-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Proyeks</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyek-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'proyek_id',
		'proyek_alias',
		'proyek_judul',
		'proyek_deskripsi',
		'proyek_abstrak',
		'proyek_tanggal',
		/*
		'proyek_tanggal_mulai',
		'proyek_tanggal_target',
		'proyek_tanggal_selesai',
		'proyek_type_id',
		'proyek_status_id',
		'anggota_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
