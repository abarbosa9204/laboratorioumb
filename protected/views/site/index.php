<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<!-- inicio del contenido -->
<div class ="container">
	<h1>Tus labortorios</h1>
	
</div>
<!-- fin de contenido -->

<?php
$query = Yii::app()->db->createCommand(
    "select *
        from 
            usuarios"
)->queryAll();

// print_r($query);
?> 


<div class="row">
    <?php 
    $lab = Laboratorio::model()->findAll();
    foreach ($lab as $key => $value) { ?>
        
        <div class="col-sm-6">
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title"><?= $value->laboratorio, $value->IDlaboratorio; ?></h5>
        <a href= "<?= Yii::app()->createUrl('/site/formulario', ['idForm' => Encrypt::encryption($value->IDlaboratorio)]); ?> " class="btn btn-primary">ingresar</a>
      </div>
    </div>
  </div>
  </div>
  <?php }  ?>

</div>