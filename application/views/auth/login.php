<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pengaduan Masyarakat</title>
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">

        <body class="img js-fullheight" style="background-image:url('<?= base_url('assets/img/pemandangan02.jpg') ?>')">>
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">
                                    <h2 class="text-center font-weight-light my-4"> Login Masyarakat</h2>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('auth') ?>" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputNik" type="number" name="nik" placeholder="Nik" />
                                            <label for="inputNik">NIK</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <div class="mt-5 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Login</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 card-footer text-center py-3">
                                        <div class="small"><a href="<?= base_url('auth/register') ?>" style="color: primary;">Belum Punya Akun? Silahkan Daftar!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
</body>

</html>