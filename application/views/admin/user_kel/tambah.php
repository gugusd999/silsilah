<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan User Keluarga</h1>
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
          
          <form action="<?= site_url('admin/user_kel/simpan') ?>" method="post" enctype="multipart/form-data">
              
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
                        "title" => "nama",
                        "type" => "text",
                        "fc" => "nama",
                        "placeholder" => "tambahkan nama",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jenis kelamin",
                        "type" => "text",
                        "fc" => "kelamin_id",
                        "placeholder" => "tambahkan kelamin_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tempat lahir",
                        "type" => "text",
                        "fc" => "tmptlahir",
                        "placeholder" => "tambahkan tmptlahir",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tanggal lahir",
                        "type" => "text",
                        "fc" => "tgllahir",
                        "placeholder" => "tambahkan tgllahir",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "agama",
                        "type" => "text",
                        "fc" => "agama_id",
                        "placeholder" => "tambahkan agama_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "pendidikan",
                        "type" => "text",
                        "fc" => "pendidikan_id",
                        "placeholder" => "tambahkan pendidikan_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "pekerjaan",
                        "type" => "text",
                        "fc" => "pekerjaan_id",
                        "placeholder" => "tambahkan pekerjaan_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "alamat",
                        "type" => "text",
                        "fc" => "alamat",
                        "placeholder" => "tambahkan alamat",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "kelurahan",
                        "type" => "text",
                        "fc" => "kel",
                        "placeholder" => "tambahkan kel",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "kecamatan",
                        "type" => "text",
                        "fc" => "kec",
                        "placeholder" => "tambahkan kec",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "kabupaten",
                        "type" => "text",
                        "fc" => "kab_id",
                        "placeholder" => "tambahkan kab_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "provinsi",
                        "type" => "text",
                        "fc" => "prov_id",
                        "placeholder" => "tambahkan prov_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "perkawinan",
                        "type" => "text",
                        "fc" => "perkawinan_id",
                        "placeholder" => "tambahkan perkawinan_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tanggal menikah",
                        "type" => "text",
                        "fc" => "tglmenikah",
                        "placeholder" => "tambahkan tglmenikah",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tanggal meninggal",
                        "type" => "text",
                        "fc" => "tglmeninggal",
                        "placeholder" => "tambahkan tglmeninggal",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tempat meninggal",
                        "type" => "text",
                        "fc" => "tmptmeninggal",
                        "placeholder" => "tambahkan tmptmeninggal",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "foto",
                        "type" => "text",
                        "fc" => "foto",
                        "placeholder" => "tambahkan foto",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "username",
                        "type" => "text",
                        "fc" => "username",
                        "placeholder" => "tambahkan username",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "password",
                        "type" => "text",
                        "fc" => "password",
                        "placeholder" => "tambahkan password",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "waktu",
                        "type" => "text",
                        "fc" => "waktu",
                        "placeholder" => "tambahkan waktu",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "status",
                        "type" => "text",
                        "fc" => "status_id",
                        "placeholder" => "tambahkan status_id",
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/user_kel'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>