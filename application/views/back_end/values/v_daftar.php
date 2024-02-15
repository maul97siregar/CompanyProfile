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
                      <th class="text-center">Judul</th>
                      <th class="text-center">Isi</th>
                      <th class="text-center">Pembuat</th>
                      <!-- <th class="text-center">Tanggal Buat</th> -->
                      <th class="text-center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($values as $key => $value) : ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td class="text-center"><?= $value->judul_values; ?>
                          <div class="table-links">
                            <div class="bullet"></div>
                            <a href="<?= base_url('values/edit/' . $value->id_values); ?>">Edit</a>
                            <div class="bullet"></div>
                            
                            <a data-toggle="modal" data-target="#hapus<?= $value->id_values; ?>" class="text-danger">Hapus</a>
                          </div>
                        </td>
                        <td class="text-center"><?= $value->isi_values; ?>
                        <?php
                        // MENGGUBAH FORMAT TANGGAL
                        $source = date('d-M-Y H:i:s', strtotime($value->date_created));
                        // $date = new DateTime($source);
                        // $date_created = $date->format('d-M-Y');
                        ?>
                        <td class="text-center"><?= $value->nama; ?></td>
                        <!-- <td class="text-center"><?= $source; ?></td> -->
                        <?php if ($value->status_values == "Publish") : ?>
                          <td class="text-center"><span class="badge badge-primary"><?= $value->status_values; ?></span></td>
                        <?php elseif ($value->status_values == "Pending") : ?>
                          <td class="text-center"><span class="badge badge-waring"><?= $value->status_values; ?></span></td>
                        <?php else : ?>
                          <td class="text-center"><span class="badge badge-danger"><?= $value->status_values; ?></span></td>
                        <?php endif; ?>

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
foreach ($values as $key => $value) : ?>
  <div class="modal fade" id="hapus<?= $value->id_values; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title mr-1">Menghapus values <h6 class="text-center badge badge-danger"><?= $value->judul_values; ?></h6>
          </h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="<?= base_url('values/hapus/' . $value->id_values); ?>">
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