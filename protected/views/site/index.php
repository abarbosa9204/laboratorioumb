<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<!-- inicio del contenido -->
<div class ="container">
	<h1>Contenido principal</h1>
	
</div>
<!-- fin de contenido -->

<?php
$query = Yii::app()->db->createCommand(
    "select *
        from 
            usuarios"
)->queryAll();

print_r($query);
?>