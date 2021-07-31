<?php 
$con = $this->vehiculosInscritos();
$con1 = $this->conductoresInscritos();
$con2= $this->propietariosInscritos();?>
<div class="container-fluid">

    <div class="col-sm-12">
        <center>
            <h2><b>Reporte General ACME</b></h2><br><br>
        </center>
    </div>

    <center>
      
        <div class="col-sm-3" style="   border-color: #5392FF;
   border-width: 3px;
   border-style: solid;">
            <h4>Vehículos Inscritos</h4>
            <img src="https://img.icons8.com/office/80/000000/car.png" />
            <?php foreach ($con as $key => $value) {?>
            <h4><b><?= $value['vehiculo'] ?></b></h4>
            <?php }?>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-3" style="   border-color: #5392FF;
   border-width: 3px;
   border-style: solid;">
            <h4>Conductores Inscritos</h4>
            <img src="https://img.icons8.com/office/80/000000/driver.png"/>
            <?php foreach ($con1 as $key => $valuee) {?>
            <h4><b><?= $valuee['conductor'] ?></b></h4>
            <?php }?>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-3" style="   border-color: #5392FF;
   border-width: 3px;
   border-style: solid;">
            <h4>Propietarios Inscritos</h4>
            <img src="https://img.icons8.com/color/100/000000/keys-holder.png" width="80px" height="80px"/>
            <?php foreach ($con2 as $key => $valueee) {?>
            <h4><b><?= $valueee['propietario'] ?></b></h4>
            <?php }?>
        </div>
    </center>
</div>