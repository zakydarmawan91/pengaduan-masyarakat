<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px12">
            <h1 class="mt-8">Pengaduan Masyarakat</h1>
            <ol class="breadcrumb mb12">
            </ol>
            <div class="card mb-4">
            </div>
            <div class="card mb-6">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Laporan Masyarakat
                </div>
                <div class="card-body">
                    <a href="<?= base_url('dashboard/tambah_pengaduan') ?>" class="btn btn-success btn-sm btn-round ml-auto"><i class="fa fa-plus"></i>Tambah Pengaduan</a>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>tanggal</th>

                                <th>isi</th>
                                <th>foto</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1 ?>
                            <?php foreach ($pengaduan as $k) : ?>
                                <tr>
                                <td><?= $i ?></td>
                                    <td><?= $k['tgl_pengaduan'] ?></td>

                                    <td><?= $k['isi_laporan'] ?></td>
                                    <td><img src="<?php echo base_url() . '/assets/img/' . $k['foto']; ?>" width="100px"></td>
                                    <td><?= $k['status'] ?></td>

                                </tr>
                            <?php $i++;
                            endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div>
                    &middot;

                </div>
            </div>
        </div>
    </footer>

</div>
</div>