<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan Tabel Berita</h1>
        </div><!-- /.col -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<br>

<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          
          <form action="<?= site_url('admin/tbl_berita/simpan') ?>" method="post" enctype="multipart/form-data">
              
                <?= 
                    form::input([
                        "title" => "user",
                        "type" => "text",
                        "fc" => "user_id",
                        "placeholder" => "tambahkan user_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "user keluarga",
                        "type" => "text",
                        "fc" => "user_kel_id",
                        "placeholder" => "tambahkan user_kel_id",
                    ])
                ?>
            
                <?= 
                    form::select_db([
                        "title" => "berita",
                        "type" => "password",
                        "fc" => "berita_id",
                        "placeholder" => "tambahkan berita_id",
                        "db" => "mberita",
                        "data" => "id",
                        "name" => "berita",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "judul",
                        "type" => "text",
                        "fc" => "judul",
                        "placeholder" => "tambahkan judul",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "foto",
                        "type" => "file",
                        "fc" => "foto",
                        "placeholder" => "tambahkan foto",
                    ])
                ?>
            
                <?= 
                    form::editor([
                        "title" => "isi",
                        "type" => "text",
                        "fc" => "isi",
                        "placeholder" => "tambahkan isi",
                    ])
                ?>
            
                <?= 
                    form::select_db([
                        "title" => "status",
                        "type" => "password",
                        "fc" => "status_id",
                        "placeholder" => "tambahkan status_id",
                        "db" => "mstatus",
                        "data" => "id",
                        "name" => "status",
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/tbl_berita'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>