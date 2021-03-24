<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan tree</h1>
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
          
          <form action="<?= site_url('admin/tree/simpan') ?>" method="post" enctype="multipart/form-data">
              
                <?= 
                    form::input([
                        "title" => "User",
                        "type" => "hidden",
                        "fc" => "user_id",
                        "placeholder" => "tambahkan user_id",
                        "value" => iduser(),
                    ])
                ?>
            
                <?= 
                    form::select_db([
                        "title" => "User Keluarga",
                        "type" => "password",
                        "fc" => "user_kel_id",
                        "placeholder" => "tambahkan user_kel_id",
                        "db" => "user_kel",
                        "data" => "id",
                        "name" => "nama",
                    ])
                ?>
            
                <?= 
                    form::select_db([
                        "title" => "Sebagai",
                        "type" => "password",
                        "fc" => "mkel_id",
                        "placeholder" => "tambahkan mkel_id",
                        "db" => "mkel",
                        "data" => "id",
                        "name" => "keluarga",
                    ])
                ?>
            
                <?= 
                    form::select_db([
                        "title" => "Child",
                        "type" => "password",
                        "fc" => "child",
                        "placeholder" => "tambahkan child",
                        "db" => "user_kel",
                        "data" => "id",
                        "name" => "nama",
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/tree'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>