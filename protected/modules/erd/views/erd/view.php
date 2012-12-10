<?php
$this->breadcrumbs=array(
	'Erds'=>array('index'),
	$model->erd_id,
);

$this->menu=array(
	array('label'=>'List Erd','url'=>array('index')),
	array('label'=>'Create Erd','url'=>array('create')),
	array('label'=>'Update Erd','url'=>array('update','id'=>$model->erd_id)),
	array('label'=>'Delete Erd','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->erd_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Erd','url'=>array('admin')),
);
?>

<h1>View Erd #<?php echo $model->erd_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'erd_id',
		'erd_alias',
		'erd_nama',
		'erd_judul',
		'erd_deskripsi',
		'erd_tanggal',		
                array(
                    'label' => 'Anggota',
                    'value' => $model->anggota->anggota_realname
                ),
		
                array(
                    'label' => 'Erd Status',
                    'value' => $model->erdStatus->erd_status_nama
                ),
		
                array(
                    'label' => 'Proyek Versi',
                    'value' => $model->proyekVersi->proyek_versi_kode
                ),
	),
)); ?>
