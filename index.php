<?php require_once 'header.php'; ?>
  <body>

    <div class="container-fluid p-0">
      <div id="slider_id" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          
        	<?php 
        	$sql=$db->prepare("SELECT * FROM slider");
        	$sql->execute();
        	

        	while ($sqlCek=$sql->fetch(PDO::FETCH_ASSOC)) {
        			
        	?>		
        	<div class="carousel-item <?= ($sqlCek['slider_image_order']==1) ? 'active' : '' ?>">
            <img src="<?php echo $sqlCek['slider_image']; ?>" class="d-block w-100" alt="slide01">
          	</div>

        	<?php } ?>

          

        </div>
        <div class="card mt-3 bg-white rounded p-2">
          <div class="card text-center justify-content-center d-flex mt-2">
            <div class="card-header">Gelir Gider Uygulaması</div>
          <div class="card-body">
            <div class="card-title">Bu uygulama ile gelir ve giderlerinizi kolayca takip edebilirsiniz.</div>
          </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="carousel-control-prev" type="button" data-bs-target="#slider_id" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-secondary"></span>
    </div>
    <div class="carousel-control-next" type="button" data-bs-target="#slider_id" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-secondary"></span>
    </div>
  </div>
    
    
  <?php require_once 'footer.php' ?>  
