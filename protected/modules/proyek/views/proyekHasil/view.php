<?php
$this->breadcrumbs=array(
	'Proyek Hasils'=>array('index'),
	$model->proyek_hasil_id,
);

$this->menu=array(
	array('label'=>'List ProyekHasil','url'=>array('index')),
	array('label'=>'Create ProyekHasil','url'=>array('create')),
	array('label'=>'Update ProyekHasil','url'=>array('update','id'=>$model->proyek_hasil_id)),
	array('label'=>'Delete ProyekHasil','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->proyek_hasil_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyekHasil','url'=>array('admin')),
);
?>

<h1>View ProyekHasil #<?php echo $model->proyek_hasil_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'proyek_hasil_id',
		'proyek_hasil_judul',
		'proyek_hasil_catatan',
		'proyek_hasil_pencapaian',
		'proyek_hasil_tanggal',		
                 array(
                    'label'=>'Anggota',
                    'value'=>$model->anggota->anggota_realname
                ),		
                 array(
                    'label'=>'Proyek Sub',
                    'value'=>$model->proyekSub->proyek_sub_judul
                ),
	),
)); ?>
