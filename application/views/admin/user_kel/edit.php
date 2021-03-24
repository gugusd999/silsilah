<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Ubah User Keluarga</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">

          <form action="<?= site_url('admin/user_kel/update') ?>" method="post" enctype="multipart/form-data">
              
        <?= 
            form::input([
                "type" => "hidden",
                "fc" => "id",
                "value" => $form_data->id,
            ])
        ?>
    
                <?= 
                    form::input([
                        "title" => "user",
                        "type" => "text",
                        "fc" => "user_id",
                        "placeholder" => "tambahkan user_id",
                        "value" => $form_data->user_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "nama",
                        "type" => "text",
                        "fc" => "nama",
                        "placeholder" => "tambahkan nama",
                        "value" => $form_data->nama,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jenis kelamin",
                        "type" => "text",
                        "fc" => "kelamin_id",
                        "placeholder" => "tambahkan kelamin_id",
                        "value" => $form_data->kelamin_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tempat lahir",
                        "type" => "text",
                        "fc" => "tmptlahir",
                        "placeholder" => "tambahkan tmptlahir",
                        "value" => $form_data->tmptlahir,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tanggal lahir",
                        "type" => "text",
                        "fc" => "tgllahir",
                        "placeholder" => "tambahkan tgllahir",
                        "value" => $form_data->tgllahir,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "agama",
                        "type" => "text",
                        "fc" => "agama_id",
                        "placeholder" => "tambahkan agama_id",
                        "value" => $form_data->agama_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "pendidikan",
                        "type" => "text",
                        "fc" => "pendidikan_id",
                        "placeholder" => "tambahkan pendidikan_id",
                        "value" => $form_data->pendidikan_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "pekerjaan",
                        "type" => "text",
                        "fc" => "pekerjaan_id",
                        "placeholder" => "tambahkan pekerjaan_id",
                        "value" => $form_data->pekerjaan_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "alamat",
                        "type" => "text",
                        "fc" => "alamat",
                        "placeholder" => "tambahkan alamat",
                        "value" => $form_data->alamat,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "kelurahan",
                        "type" => "text",
                        "fc" => "kel",
                        "placeholder" => "tambahkan kel",
                        "value" => $form_data->kel,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "kecamatan",
                        "type" => "text",
                        "fc" => "kec",
                        "placeholder" => "tambahkan kec",
                        "value" => $form_data->kec,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "kabupaten",
                        "type" => "text",
                        "fc" => "kab_id",
                        "placeholder" => "tambahkan kab_id",
                        "value" => $form_data->kab_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "provinsi",
                        "type" => "text",
                        "fc" => "prov_id",
                        "placeholder" => "tambahkan prov_id",
                        "value" => $form_data->prov_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "perkawinan",
                        "type" => "text",
                        "fc" => "perkawinan_id",
                        "placeholder" => "tambahkan perkawinan_id",
                        "value" => $form_data->perkawinan_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tanggal menikah",
                        "type" => "text",
                        "fc" => "tglmenikah",
                        "placeholder" => "tambahkan tglmenikah",
                        "value" => $form_data->tglmenikah,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tanggal meninggal",
                        "type" => "text",
                        "fc" => "tglmeninggal",
                        "placeholder" => "tambahkan tglmeninggal",
                        "value" => $form_data->tglmeninggal,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tempat meninggal",
                        "type" => "text",
                        "fc" => "tmptmeninggal",
                        "placeholder" => "tambahkan tmptmeninggal",
                        "value" => $form_data->tmptmeninggal,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "foto",
                        "type" => "text",
                        "fc" => "foto",
                        "placeholder" => "tambahkan foto",
                        "value" => $form_data->foto,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "username",
                        "type" => "text",
                        "fc" => "username",
                        "placeholder" => "tambahkan username",
                        "value" => $form_data->username,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "password",
                        "type" => "text",
                        "fc" => "password",
                        "placeholder" => "tambahkan password",
                        "value" => $form_data->password,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "waktu",
                        "type" => "text",
                        "fc" => "waktu",
                        "placeholder" => "tambahkan waktu",
                        "value" => $form_data->waktu,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "status",
                        "type" => "text",
                        "fc" => "status_id",
                        "placeholder" => "tambahkan status_id",
                        "value" => $form_data->status_id,
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