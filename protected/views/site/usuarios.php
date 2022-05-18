<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<form>
<div class="row">

<div class="col-6">
    <label for="formGroupExampleInput">Nombres</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ingrese nombres completos ">
    </div>

    <div class="col-6">
    <label for="formGroupExampleInput">codigo</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="ingrese codigo">
    </div>
    
    <div class="col-6">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" 
           aria-describedby="emailHelp" placeholder="Enter email">
       </div>

       <div class="col-6">
       <label for="inputPass" class="sr-only">Password</label>
       <input type="password" class="form-control" id="inputPass" placeholder="Pass">
      </div>

</div>

 
   <div class="menu-inner-shadow"></div>

   <div class="row">

          <ul class="UTF-1">
 
            <?php
            $lab = Laboratorio::model()->findAll();
            foreach ($lab as $key => $value) { ?>
              <div class="form-check">
              <div class="col">
              <input class="form-check-input" type="checkbox" value="" id="<?= Encrypt::encryption($value->IDlaboratorio); ?>">
              <label class="form-check-label" for="<?= $value->IDlaboratorio; ?>">
                <?= $value->laboratorio; ?>
              </label>
            </div>
            </div>
            <?php } ?>   
            </ul> 

            </div>
            <button type="submit" class="btn btn-primary">Confirm</button>
</form>
