<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Pelanggan Page</title>
</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?= base_url('/plg') ?>">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item mt-2 ml-5">pelanggan :</li>

                            <li class=" nav-item mr-4">
                                <a class="nav-link" href="#">
                                    <?php
                                    if (!empty(session()->get('pelanggan'))) {
                                        echo session()->get('pelanggan');
                                    }
                                    ?> <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item mt-2 ml-5">Email :</li>
                            <li class=" nav-item mt-2 ml-2">
                                <?php
                                if (!empty(session()->get('email'))) {
                                    echo session()->get('email');
                                }
                                ?>
                            </li>


                            <li class=" nav-item mt-2 ml-2">
                                <a href="<?= base_url('admin/loginp/logout') ?>">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 px-2"><?= $this->renderSection('content') ?></div>
        </div>
    </div>
</body>

</html>