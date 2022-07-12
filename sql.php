//SQL SORGULARI 


// BU sorgu veritabanından verileri çekmeye yarıyor.
<?php 
        	$sql=$db->prepare("SELECT * FROM slider");
        	$sql->execute();
        	

        	while ($sqlCek=$sql->fetch(PDO::FETCH_ASSOC)) {
        			
        	?>		
        	<div class="carousel-item <?= ($sqlCek['slider_image_order']==1) ? 'active' : '' ?>">
            <img src="<?php echo $sqlCek['slider_image']; ?>" class="d-block w-100" alt="slide01">
          	</div>

        	<?php } ?>