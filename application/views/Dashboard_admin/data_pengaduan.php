<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard Admin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pengaduan Admin </li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Laporan Masyarakat
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
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
                                    <td><?= $k['id'] ?></td>
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