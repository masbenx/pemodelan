<?php
$this->breadcrumbs=array(
	'Proyek Error Lapors'=>array('index'),
	$model->proyek_error_lapor_id,
);

$this->menu=array(
	array('label'=>'List ProyekErrorLapor','url'=>array('index')),
	array('label'=>'Create ProyekErrorLapor','url'=>array('create')),
	array('label'=>'Update ProyekErrorLapor','url'=>array('update','id'=>$model->proyek_error_lapor_id)),
	array('label'=>'Delete ProyekErrorLapor','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->proyek_error_lapor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyekErrorLapor','url'=>array('admin')),
);
?>

<h1>View ProyekErrorLapor #<?php echo $model->proyek_error_lapor_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'proyek_error_lapor_id',
		'proyek_error_lapor_judul',
		'proyek_error_lapor_tanggal',		
                array(
                    'label' => 'Konten',
                    'value' => $model->proyek_error_lapor_konten,
                    'type' => 'raw'
                ),
		'proyek_error_lapor_status',		
                array(
                'label' => 'Anggota',
                'value' => $model->anggota->anggota_realname
                ),		
                array(
                    'label' => 'Proyek Sub',
                    'value' => $model->proyekSub->proyek_sub_judul
                ),
	),
)); ?>
