<?php
$this->breadcrumbs=array(
	'Proyek Versis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProyekVersi','url'=>array('index')),
	array('label'=>'Create ProyekVersi','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('proyek-versi-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Proyek Versis</h1>

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
	'id'=>'proyek-versi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'proyek_versi_id',
		'proyek_versi_kode',
                array('name'=>'proyek_id','header'=>'Proyek','value'=>'$data->proyek->proyek_judul'),
		array('name'=>'anggota_id','header'=>'Anggota','value'=>'$data->anggota->anggota_realname'),
                array('name'=>'proyek_versi_status_id','header'=>'Status','value'=>'$data->proyekVersiStatus->proyek_versi_status_nama'),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
