<br>
<div class="notika-email-post-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="email-statis-inner notika-shadow">
                    <h1 class="m-0 text-dark">Tabel Kegiatan</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <br>
<div class="notika-email-post-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="email-statis-inner notika-shadow">
                  <?php
                    link_button([
                      "link" => "admin/tbl_kegiatan/tambah_data",
                      "class" => "btn btn-success",
                      "text" => "Tambah Data",
                    ]);
                  ?>
                  <?php
                    link_button([
                      "link" => "admin/tbl_kegiatan",
                      "class" => "btn btn-success",
                      "text" => "Lihat view kegiatan",
                    ]);
                  ?>
                  <hr>
                      <?= $datatable ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
