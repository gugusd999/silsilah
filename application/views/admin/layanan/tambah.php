<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan Layanan</h1>
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
          
          <form action="<?= site_url('admin/layanan/simpan') ?>" method="post" enctype="multipart/form-data">
              
                <?=
                    form::input([
                        "title" => "Judul",
                        "type" => "text",
                        "fc" => "title",
                        "placeholder" => "tambahkan title",
                    ])
                ?>
            
                <?=
                    form::input([
                        "title" => "icon",
                        "type" => "text",
                        "fc" => "icon",
                        "placeholder" => "tambahkan icon",
                    ])
                ?>
            
                <?=
                    form::input([
                        "title" => "deskripsi",
                        "type" => "text",
                        "fc" => "description",
                        "placeholder" => "tambahkan description",
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/layanan'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>