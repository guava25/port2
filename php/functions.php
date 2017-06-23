<?php
function carousel($id,$img1,$img2,$img3) { ?>
    
<div id="<?php echo $id; ?>" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="<?php echo "#"+$id; ?>" data-slide-to="0" class="active"></li>
    <li data-target="<?php echo "#"+$id; ?>" data-slide-to="1"></li>
    <li data-target="<?php echo "#"+$id; ?>" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo $img1;?>" alt="Image Not Found">
    </div>

    <div class="item">
      <img src="<?php echo $img2;?>" alt="Image Not Found">
    </div>

    <div class="item">
      <img src="<?php echo $img3;?>" alt="Image Not Found">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="<?php echo "#"+$id; ?>" data-slide="prev">
    <div class="icon">
        <i class="mdi-hardware-keyboard-arrow-left"></i>
      </div>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="<?php echo "#"+$id; ?>" data-slide="next">
    <div class="icon">
        <i class="mdi-hardware-keyboard-arrow-right"></i>
      </div>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php } ?>