<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<form>
  <div class="form-group col">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" 
           aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
       <label for="inputPass" class="sr-only">Password</label>
       <input type="password" class="form-control" id="inputPass" placeholder="Pass">
   </div>

   <div class="menu-inner-shadow"></div>
   <div class="menu-inner-shadow"></div>

          <ul class="UTF-1">
 
            <?php
            $lab = Laboratorio::model()->findAll();
            foreach ($lab as $key => $value) { ?>
              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="<?= Encrypt::encryption($value->IDlaboratorio); ?>">
              <label class="form-check-label" for="<?= $value->IDlaboratorio; ?>">
                <?= $value->laboratorio; ?>
              </label>
            </div>
            <?php } ?>   
            </ul> 


            <button type="submit" class="btn btn-primary">Confirm</button>
</form>
