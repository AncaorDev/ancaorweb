<section class="menu">
  <div class="container">
    <div class="row cont-menu">
      <div class="col-md-12 cuadro-menu">
        <ul id="" class="ul-menu nav nav-justified">
          <?php if (isset($_GET['page'])){
            if (strtolower($_GET['page'])=="index"){ ?>
            <li class="active"><a href="<?php echo DIR_ROOT?>index"><i class="fa fa-home"></i> Inicio</a></li>
            <?php }else { ?>
            <li class="normal"><a href="<?php echo DIR_ROOT?>index"><i class="fa fa-home"></i> Inicio</a></li>
            <?php } ?>
            <?php if (strtolower($_GET['page'])=="proyectos"){ ?>
            <li class="active"><a href="<?php echo DIR_ROOT?>proyectos"><i class="fa fa-book"></i> Proyectos</a></li>
            <?php }else { ?>
            <li class="normal"><a href="<?php echo DIR_ROOT?>proyectos"><i class="fa fa-book"></i> Proyectos</a></li>
            <?php } ?>
            <?php if (strtolower($_GET['page'])=="info"){ ?>
            <li class="active"><a href="<?php echo DIR_ROOT?>info"><i class="fa fa-info-circle" aria-hidden="true"></i> Sobre la Web</a></li>
            <?php }else { ?>
            <li class="normal"><a href="<?php echo DIR_ROOT?>info"><i class="fa fa-info-circle" aria-hidden="true"></i> Sobre la Web</a></li>
            <?php } ?>
          <?php } else {?>
                <li class="active"><a href="<?php echo DIR_ROOT?>index"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="normal"><a href="<?php echo DIR_ROOT?>proyectos"><i class="fa fa-book"></i> Proyectos</a></li>
                <li class="normal"><a href="<?php echo DIR_ROOT?>info"><i class="fa fa-info-circle" aria-hidden="true"></i> Sobre la Web</a></li>
          <?php }  ?>
          
        </ul>
      </div>
    </div>
  </div>
</section>
