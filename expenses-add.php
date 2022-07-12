<?php require_once 'header.php'; ?>


<body>

  <div class="container-fluid p-0">

    <div class="card-body">
      <div class="d-flex justify-content-center col-md-12">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link " href="income-add.php">GELİR</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="expenses-add.php">GİDER</a>
          </li>
        </ul>  
      </div>


      <div>
        <?php
        if (isset($_GET['durum'])) {

          if ($_GET['durum']=="ok") {?>
            <div class="alert alert-success mt-2">İşlem Başarılı</div>
          <?php } elseif ($_GET['durum']=="no") { ?>
            <div class="alert alert-danger mt-2">İşlem Başarısız</div>
          <?php } } ?>
      </div>


      <form  action="netting/islem.php" method="POST" class="needs-validation" novalidate>
        <div class="input-group mb-3 mt-3">
          <span class="input-group-text">TL</span>
          <input type="number" pattern="\d*" required class="form-control" name="expenses_price">
          <span class="input-group-text">.00</span>
        </div>


        <div class="mb-3">
          <input type="" name="expenses_category" class="form-control" required placeholder="Kategori Seçin" list="dataListOption" id="kategoriDataList">
          <datalist id="dataListOption">
            <option value="Kira">
            <option value="Market">
              <option value="Yemek">
                <option value="Eğlence">
                  <option value="Alış Veriş">
                    <option value="Faturalar"> 
                    </datalist>
                  </div>


                  <div class="input-group date mt-3" id="datepicker">
                          <input type="text" class="form-control" required value="21-12-2021" name="expenses_date">
                          <span class="input-group-append">
                            <span class="input-group-text bg-white">
                              <i class="bi bi-calendar"></i>
                            </span>
                          </span>
                        </div>

                    <div class="mt-3">
                      <button type="submit" name="expenses_add" class="btn btn-outline-secondary w-100 btn-lg"><i class="bi bi-plus"></i> Gelir Ekle</button>
                    </div>

                  </form>

                  <div class="card mt-4">
                    <div class="card-header">
                      SABO'dan Sözler
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mt-2">
                        <p>Düşünerek kazanmalısın yoksa düşerek paranı kaybedersin.</p>
                        <footer class="blockquote-footer"><cite>İbrahim Tunç</cite></footer>
                      </blockquote>
                    </div>
                  </div>


                </div>
              </div>


              <footer>
                <nav class="navbar fixed-bottom navbar-light bg-light p-0 m-0">
                  <div class="container p-0 "> 
                    <div class="btn-group col-12">
                      <a href="index.php" class="btn btn-outline-secondary btn-lg"><i class="bi bi-house"></i></a>
                      <a href="income-expense.php" class="btn btn-outline-secondary btn-lg active"><i class="bi bi-arrow-down-up" ></i></a>
                      <a href="income-report.php" class="btn btn-outline-secondary btn-lg"><i class="bi bi-cash"></i></a>
                      <a href="about.php" class="btn btn-outline-secondary btn-lg"><i class="bi bi-info"></i></a>
                    </div>
                  </div>
                </nav>
              </footer>


             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>






          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

          <script type="text/javascript">
            $(function() {
             $('#datepicker').datepicker({
              format: 'dd-mm-yyyy'

            });
           });
         </script>


         <script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>