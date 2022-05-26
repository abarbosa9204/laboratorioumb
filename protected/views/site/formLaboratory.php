<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - Crear Laboratorio';

?>

<!-- inicio del contenido -->
<div class="container">
  <h1>Registrar nombre del laboratorio<?php echo CHtml::hiddenField('idLaboratory', 50, array('id' => 'idLaboratorio')); ?></h1>

  <form id="formLaboratory" name="formLaboratory">
    <div class="form-group">
      <label for="validation01"></label>
      <input type="text" class="form-control is-valid" id="validation01" name="validation01" placeholder="Laboratorio" value="" required>
    </div>
  </form>
  <h1></h1>
  <a type="button" class="btn btn-outline-dark" onclick="saveForm()">Crear</a>
</div>
<script>
  $(document).ready(function() {
    console.log('value', $('#idLaboratorio').val());
  });

  function saveForm() {

    $.ajax({
      url: "CreateLaboratory",
      type: "post",
      dataType: "json",
      data: {
        idForm: $('#idLaboratorio').val(),
        dataForm: $('#formLaboratory').serializeArray()
      },
      success: function(response) {
        console.log(response);
        window.location.reload();
      },
      error: function(data) {
        console.log(data);
      }
    });
  }
</script>