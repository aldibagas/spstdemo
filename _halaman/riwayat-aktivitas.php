<?php
  session_start();
  $title="Riwayat Aktivitas";
?>

            <div class="row mb-4 items-align-center">
                <div class="col-md">
                  <ul class="nav nav-pills justify-content-start">
                    <li class="nav-item">
                      <a class="nav-link active bg-transparent pr-2 pl-0 text-primary" href="#">All <span class="badge badge-pill bg-primary text-white ml-2">164</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Pending <span class="badge badge-pill bg-white border text-muted ml-2">64</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Processing <span class="badge badge-pill bg-white border text-muted ml-2">48</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Completed <span class="badge badge-pill bg-white border text-muted ml-2">52</span></a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-auto ml-auto text-right">
                  <span class="small bg-white border py-1 px-2 rounded mr-2 d-none d-lg-inline">
                    <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                    <span class="text-muted">Status : <strong>Pending</strong></span>
                  </span>
                  <span class="small bg-white border py-1 px-2 rounded mr-2 d-none d-lg-inline">
                    <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                    <span class="text-muted">April 14, 2020 - May 13, 2020</span>
                  </span>
                  <button type="button" class="btn" data-toggle="modal" data-target=".modal-slide"><span class="fe fe-filter fe-16 text-muted"></span></button>
                  <button type="button" class="btn"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                </div>
            </div>
            <div class="modal fade modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="defaultModalLabel">Filters</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x fe-12"></i>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="p-2">
                        <div class="form-group my-4">
                          <p class="mb-2"><strong>Regions</strong></p>
                          <label for="multi-select2" class="sr-only"></label>
                          <select class="form-control select2-multi" id="multi-select2">
                            <optgroup label="Mountain Time Zone">
                              <option value="AZ">Arizona</option>
                              <option value="CO">Colorado</option>
                              <option value="ID">Idaho</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NM">New Mexico</option>
                              <option value="ND">North Dakota</option>
                              <option value="UT">Utah</option>
                              <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                              <option value="AL">Alabama</option>
                              <option value="AR">Arkansas</option>
                              <option value="IL">Illinois</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="OK">Oklahoma</option>
                              <option value="SD">South Dakota</option>
                              <option value="TX">Texas</option>
                              <option value="TN">Tennessee</option>
                              <option value="WI">Wisconsin</option>
                            </optgroup>
                          </select>
                        </div> <!-- form-group -->
                        <div class="form-group my-4">
                          <p class="mb-2">
                            <strong>Payment</strong>
                          </p>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Paypal</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Credit Card</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1-1" checked>
                            <label class="custom-control-label" for="customCheck1">Wire Transfer</label>
                          </div>
                        </div> <!-- form-group -->
                        <div class="form-group my-4">
                          <p class="mb-2">
                            <strong>Types</strong>
                          </p>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">End users</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadio2">Whole Sales</label>
                          </div>
                        </div> <!-- form-group -->
                        <div class="form-group my-4">
                          <p class="mb-2">
                            <strong>Completed</strong>
                          </p>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Include</label>
                          </div>
                        </div> <!-- form-group -->
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn mb-2 btn-primary btn-block">Apply</button>
                      <button type="button" class="btn mb-2 btn-secondary btn-block">Reset</button>
                    </div>
                  </div>
                </div>
            </div>
            <table class="table border table-hover bg-white">
                <thead>
                  <tr role="row">
                    <th>Tanggal</th>
                    <th>Nama Petugas</th>
                    <th>Data Sampah</th>
                    <th>Total Harga</th>
                    <th>Metode Pembayaran</th>
                    <th>Metode Transaksi</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    session_start();
                    $title="Riwayat Aktivitas";  
                    include '_helpers/connect.php';
                  
                    $nama = $_SESSION['nama'];
                    $sql ="SELECT * FROM `pengguna` WHERE Nama = '$nama'";
                    $run = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($run);
                    $Kelas = $row['Kelas'];
                    $telp = $row['Telepon'];
                  $Query = "select * from pemesanan where idp=1";
                  $Run = mysqli_query($conn, $Query);
                  
                  if(mysqli_num_rows($Run)>0){
                    while($Fetch = mysqli_fetch_assoc($Run)){
                      echo"
                        <tr>
                          <td>".$Fetch['tanggal']."</td>
                          <td>". $row['Kelas']."</td>
                          <td>".$Fetch['pesanan_1']." , ".$Fetch['pesanan_2']." , ".$Fetch['pesanan_3']." </td>
                          <td>".$Fetch['biaya']."</td>
                          <td>".$Fetch['metodebayar']."</td>
                          <td>".$Fetch['metodetransaksi']."</td>
                          <td>".$Fetch['status']."</td>
                        </tr>
                      ";
                    }
                  }
                ?>
                </tbody>
              </table>
