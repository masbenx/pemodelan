<?php
$this->breadcrumbs=array(
	'Bpm Divisis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BpmDivisi','url'=>array('index')),
	array('label'=>'Create BpmDivisi','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('bpm-divisi-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bpm Divisis</h1>

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
	'id'=>'bpm-divisi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'bpm_divisi_id',
		'bpm_divisi_upline',
		'bpm_divisi_alias',
		'bpm_divisi_nama',
		'bpm_divisi_judul',		
                array('name'=>'bpm_id','header'=>'Bpm','value'=>'$data->bpm->bpm_nama'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
