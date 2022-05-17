<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - Crear Laboratorio';

?>
 <h1>Registrar equipos de laboratoro<?php echo CHtml::hiddenField('idLaboratory', 50, array('id' => 'idLaboratorio')); ?></h1>

<!-- inicio del contenido -->
<form>
  <div class="form-group">
    <input type="text" class="form-control" id="item" placeholder="Item">
    <input type="number" class="form-control" id="cant" placeholder="Cantidad">
    <input type="text" class="form-control" id="placa" placeholder="No placa">
    <input type="text" class="form-control" id="descripcion" placeholder="Descripcion">
    <input type="text" class="form-control" id="marca" placeholder="Marca">
    <input type="text" class="form-control" id="modelo" placeholder="Modelo">
    <input type="text" class="form-control" id="serie" placeholder="Serie">
    <input type="text" class="form-control" id="ubicacion" placeholder="Ubcacion">
    <input type="text" class="form-control" id="Estado" placeholder="Estado">
    <input type="text" class="form-control" id="observacion" placeholder="Observacion">
    <input type="text" class="form-control" id="unidad" placeholder="Valor unidad">
    <input type="text" class="form-control" id="total " placeholder="Valor total">
    <h1></h1>
    <button type="button" class="btn btn-primary">AÑADIR</button>

  </div>
</form>
<!-- fin de contenido -->