<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="<?= base_url('master'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1><?= $subtitle; ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="<?= base_url('master'); ?>">Daftar master</a></div>
        <div class="breadcrumb-item"><?= $subtitle; ?></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"><?= $subtitle; ?></h2>
      <p class="section-lead">
        Di halaman ini Anda dapat mengedit master <?= $master->nama_master; ?>
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4><?= $title; ?></h4>
            </div>
            <div class="card-body">
              <?php
              // foreach ($news as $key => $value) :  
              ?>
              <form method="POST" action="<?= base_url('master/edit/' . $master->id_master); ?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-lg-6 col-sm-12 col-md-12">
                    <label class="">nama</label>
                    <input type="text" class="form-control" name="judul" autofocus value="<?= $master->nama_master; ?>">
                    <small class="text-danger "><?= form_error('judul') ?></small>
                  </div>
                    <div class="form-group col-lg-6 col-sm-12 col-md-12">
                    <label for="status">deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" autofocus value="<?= $master->deskripsi; ?>">
                    <small class="text-danger "><?= form_error('deskripsi') ?></small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label ">Isi master</label>
                  <div class="">
                    <textarea name="isi" id="berita" placeholder="Isi Berita"><?= $master->isi_master; ?></textarea>
                    <small class="text-danger "><?= form_error('isi') ?></small>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center">
                  <button type="submit" class="btn btn-warning ">Edit master</button>
                </div>
              </form>
              <?php ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>