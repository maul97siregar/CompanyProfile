<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $subtitle; ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><?= $subtitle; ?></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"><?= $subtitle; ?></h2>
      <p class="section-lead">
        <?= $subtitle; ?>
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h4><?= $subtitle; ?></h4>
              <div class="float-right">
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="example1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        No
                      </th>
                      <th class="text-center">Id Master</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Isi</th>
                      <th class="text-center">Pembuat</th>
                      <!-- <th class="text-center">Tanggal Buat</th> -->
                      <th class="text-center">Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($master as $key => $value) : ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td class="text-center"><?= $value->id_master; ?>
                        <td class="text-center"><?= $value->nama_master; ?>
                          <div class="table-links">
                            <div class="bullet"></div>
                            <a href="<?= base_url('master/edit/' . $value->id_master); ?>">Edit</a>
                            <div class="bullet"></div>
                            
                            <a data-toggle="modal" data-target="#hapus<?= $value->id_master; ?>" class="text-danger">Hapus</a>
                          </div>
                        </td>
                        <td class="text-center"><?= $value->isi_master; ?>
                        <?php
                        // MENGGUBAH FORMAT TANGGAL
                        $source = date('d-M-Y H:i:s', strtotime($value->date_created));
                        // $date = new DateTime($source);
                        // $date_created = $date->format('d-M-Y');
                        ?>
                        <td class="text-center"><?= $value->nama; ?></td>
                        <td class="text-center"><?= $value->deskripsi; ?></td>


                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- hapus Modal -->
<?php
foreach ($master as $key => $value) : ?>
  <div class="modal fade" id="hapus<?= $value->id_master; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title mr-1">Menghapus master <h6 class="text-center badge badge-danger"><?= $value->nama_master; ?></h6>
          </h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="<?= base_url('master/hapus/' . $value->id_master); ?>">
            <h5>Apakah Anda Yakin?</h5>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>