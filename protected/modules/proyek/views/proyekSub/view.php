<?php
$this->breadcrumbs=array(
	'Proyek Subs'=>array('index'),
	$model->proyek_sub_id,
);

$this->menu=array(
	array('label'=>'List ProyekSub','url'=>array('index')),
	array('label'=>'Create ProyekSub','url'=>array('create')),
	array('label'=>'Update ProyekSub','url'=>array('update','id'=>$model->proyek_sub_id)),
	array('label'=>'Delete ProyekSub','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->proyek_sub_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyekSub','url'=>array('admin')),
);
?>

<h1>View ProyekSub #<?php echo $model->proyek_sub_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'proyek_sub_id',
		'proyek_sub_alias',
		'proyek_sub_judul',
		'proyek_sub_deskripsi',		
                array('label'=>'Abstrak','value'=>$model->proyek_sub_abstrak,'type'=>'raw'),
		'proyek_sub_tanggal_mulai',
		'proyek_sub_tanggal_target',
		'proyek_sub_tanggal_selesai',		
                array('label'=>'Proyek Versi','value'=>$model->proyekVersi->proyek_versi_kode),		
                array('label'=>'Anggota','value'=>$model->anggota->anggota_realname),
	),
)); ?>
