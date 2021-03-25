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
                        "type" => "hidden",
                        "fc" => "user_id",
                        "placeholder" => "tambahkan user_id",
                        "value" => generate_session("datalogin")["id"],
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
                    form::select_db([
                        "title" => "jenis kelamin",
                        "type" => "password",
                        "fc" => "kelamin_id",
                        "placeholder" => "tambahkan kelamin_id",
                        "db" => "mkelamin",
                        "data" => "id",
                        "name" => "kelamin",
                        "selected" => $form_data->kelamin_id,
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
                    form::select_db([
                        "title" => "agama",
                        "type" => "password",
                        "fc" => "agama_id",
                        "placeholder" => "tambahkan agama_id",
                        "db" => "magama",
                        "data" => "id",
                        "name" => "agama",
                        "selected" => $form_data->agama_id,
                    ])
                ?>
            
                <?=
                    form::select_db([
                        "title" => "pendidikan",
                        "type" => "password",
                        "fc" => "pendidikan_id",
                        "placeholder" => "tambahkan pendidikan_id",
                        "db" => "mpendidikan",
                        "data" => "id",
                        "name" => "pendidikan",
                        "selected" => $form_data->pendidikan_id,
                    ])
                ?>
            
                <?=
                    form::select_db([
                        "title" => "pekerjaan",
                        "type" => "password",
                        "fc" => "pekerjaan_id",
                        "placeholder" => "tambahkan pekerjaan_id",
                        "db" => "mpekerjaan",
                        "data" => "id",
                        "name" => "pekerjaan",
                        "selected" => $form_data->pekerjaan_id,
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
                    form::select_db([
                        "title" => "kelurahan",
                        "type" => "password",
                        "fc" => "kel",
                        "placeholder" => "tambahkan kel",
                        "db" => "mdesa",
                        "data" => "id",
                        "name" => "name",
                        "selected" => $form_data->kel,
                    ])
                ?>
            
                <?=
                    form::select_db([
                        "title" => "kecamatan",
                        "type" => "password",
                        "fc" => "kec",
                        "placeholder" => "tambahkan kec",
                        "db" => "mkecamatan",
                        "data" => "id",
                        "name" => "name",
                        "selected" => $form_data->kec,
                    ])
                ?>
            
                <?=
                    form::select_db([
                        "title" => "kabupaten",
                        "type" => "password",
                        "fc" => "kab_id",
                        "placeholder" => "tambahkan kab_id",
                        "db" => "mkabupaten",
                        "data" => "id",
                        "name" => "name",
                        "selected" => $form_data->kab_id,
                    ])
                ?>
            
                <?=
                    form::select_db([
                        "title" => "provinsi",
                        "type" => "password",
                        "fc" => "prov_id",
                        "placeholder" => "tambahkan prov_id",
                        "db" => "mprovinsi",
                        "data" => "id",
                        "name" => "name",
                        "selected" => $form_data->prov_id,
                    ])
                ?>
            
                <?=
                    form::select_db([
                        "title" => "perkawinan",
                        "type" => "password",
                        "fc" => "perkawinan_id",
                        "placeholder" => "tambahkan perkawinan_id",
                        "db" => "mstatkel",
                        "data" => "id",
                        "name" => "statkel",
                        "selected" => $form_data->perkawinan_id,
                    ])
                ?>
            
                <?=
                    form::input([
                        "title" => "foto",
                        "type" => "file",
                        "fc" => "foto",
                        "placeholder" => "tambahkan foto",
                        "value" => $form_data->foto,
                    ])
                ?>
            
                <?=
                    form::input([
                        "title" => "username",
                        "type" => "username",
                        "fc" => "username",
                        "placeholder" => "tambahkan username",
                    ])
                ?>
            
                <?=
                    form::input([
                        "title" => "password",
                        "type" => "password",
                        "fc" => "password",
                        "placeholder" => "tambahkan password",
                        "value" => $form_data->password,
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
                        "selected" => $form_data->status_id,
                    ])
                ?>
            
                <?=
                    form::select_db([
                        "title" => "sebagai",
                        "type" => "password",
                        "fc" => "sebagai",
                        "placeholder" => "tambahkan sebagai",
                        "db" => "mkel",
                        "data" => "id",
                        "name" => "keluarga",
                        "selected" => $form_data->sebagai,
                    ])
                ?>
            
                <?=
                    form::select_db([
                        "title" => "kepala keluarga",
                        "type" => "password",
                        "fc" => "id_kel",
                        "placeholder" => "tambahkan id_kel",
                        "db" => "user_kel",
                        "data" => "id",
                        "name" => "nama",
                        "selected" => $form_data->id_kel,
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