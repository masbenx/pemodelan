<?php
$this->breadcrumbs=array(
	'Proyeks'=>array('index'),
	$model->proyek_id,
);

$this->menu=array(
	array('label'=>'List Proyek','url'=>array('index')),
	array('label'=>'Create Proyek','url'=>array('create')),
	array('label'=>'Update Proyek','url'=>array('update','id'=>$model->proyek_id)),
	array('label'=>'Delete Proyek','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->proyek_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proyek','url'=>array('admin')),
);
?>

<h1>View Proyek #<?php echo $model->proyek_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'proyek_id',
		'proyek_alias',
		'proyek_judul',
		'proyek_deskripsi',
		'proyek_abstrak',
		'proyek_tanggal',
		'proyek_tanggal_mulai',
		'proyek_tanggal_target',
		'proyek_tanggal_selesai',		
                 array(
		'label'=>'Proyek Type',
		'value'=>$model->proyekType->proyek_type_nama,
		),		
                 array(
		'label'=>'Proyek Status',
		'value'=>$model->proyekStatus->proyek_status_nama,
		),		
                  array(
		'label'=>'Anggota',
		'value'=>$model->anggotas->anggota_realname,
		),
	),
)); ?>
