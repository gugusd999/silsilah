<br>
<div class="notika-email-post-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="email-statis-inner notika-shadow">
                    <h1 class="m-0 text-dark">Berita Terkini</h1>
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
                      "link" => "admin/mberita/tambah_data",
                      "class" => "btn btn-success",
                      "text" => "Tambah Data",
                    ]);
                  ?>
                  <hr>
                  <!-- Start Card -->
                  <div class="row">
                  
                  <?php if (!empty($detail)):
                  
                  link_button([
                        "link" => "admin/tbl_berita/editor",
                        "class" => "btn btn-warning",
                      "text" => "Manage Data",
                    ]);

                  echo htmlspecialchars_decode($detail);
                  ?>

                  <?php
                  elseif(!empty($datatable)):
                    echo $datatable;
                  ?>

                  <?php else: 
                    echo $list_berita;  
                  ?>
                  </div>

                <?php endif; ?>
              </div>
          </div>
      </div>
  </div>
