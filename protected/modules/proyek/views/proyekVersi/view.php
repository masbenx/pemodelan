<?php
$this->breadcrumbs=array(
	'Proyek Versis'=>array('index'),
	$model->proyek_versi_id,
);

$this->menu=array(
	array('label'=>'List ProyekVersi','url'=>array('index')),
	array('label'=>'Create ProyekVersi','url'=>array('create')),
	array('label'=>'Update ProyekVersi','url'=>array('update','id'=>$model->proyek_versi_id)),
	array('label'=>'Delete ProyekVersi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->proyek_versi_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyekVersi','url'=>array('admin')),
);
?>

<h1>View ProyekVersi #<?php echo $model->proyek_versi_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'proyek_versi_id',
		'proyek_versi_kode',		
                array(
                    'label'=>'Proyek',
                    'value'=>$model->proyek->proyek_judul
                ),		
                array(
                    'label'=>'Anggota',
                    'value'=>$model->anggota->anggota_realname
                ),
                array(
                    'label'=>'Status',
                    'value'=>$model->proyekVersiStatus->proyek_versi_status_nama
                ),
		
	),
)); ?>
