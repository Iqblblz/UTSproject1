<h1>Kalkulator BMI</h1>
     

     <div class="content">
       <div class="container-fluid">
       <div class='container'>
                  <form class='form-horizontal p-5' action="halamanBMI.php" method="POST">
                      <div class='text-center'>
                      <h3 class='mb-5'>FORM ISIAN INDEKS MASSA TUBUH (BMI)</h3>
                      </div>
                      <!-------->
                      <div class="form-group row ">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" name='nama_lengkap' placeholder="nama">
                          </div>
                      </div>
                      <!----> 
                      <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Berat Badan</label>
                          <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputPassword3" name='berat_' placeholder="berat">
                          </div>
                      </div>
                      <!----> 
                      <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi Badan</label>
                          <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputPassword3" name='tinggi_' placeholder="tinggi">
                          </div>
                      </div>
                      <!----->
                      <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                          <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputPassword3" name='umur_' placeholder="umur">
                          </div>
                      </div>
                      <!---->
                      <div class="row">
                      <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                      <div class="col-sm-10">
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" checked>
                          <label class="form-check-label" for="perempuan">
                              Perempuan
                          </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                          <label class="form-check-label" for="laki-laki">
                              Laki-Laki 
                          </label>
                          </div>
                      </div>
                      </div>
                      <br>
                      <!---->
                      <div class="text-center">
                  <input class="btn" type="submit" style="color:white; background-color:grey;" value="Submit" name="proses"/>
              </div>
  
                  </form>
  
      </div>