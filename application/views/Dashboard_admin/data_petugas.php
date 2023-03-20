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
                                <th>username</th>

                                <th>nama</th>
                                <th>level</th>
                            

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no =1;
                            foreach ($petugas as $k) : ?>
                                <tr>
                                <td><?= $no ?></td>
                                    <td><?= $k['username'] ?></td>
                                    <td><?= $k['nama'] ?></td>

                                    <td><?= $k['level'] ?></td>
                                   
                                   

                                </tr>
                            <?php
                            $no++;
                             endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>