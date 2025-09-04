<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title><?= $judul ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    <link href="<?= base_url('') ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/DataTables/datatables.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" /> -->

    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script> -->

    <script src="<?= base_url('') ?>assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url('') ?>assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('') ?>assets/DataTables/datatables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script> -->

    <script src="<?= base_url('assets/js/feather.min.js') ?>"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> -->
    <script src="<?= base_url('') ?>assets/js/dashboard.js"></script>


    <style>
        body {
            background: url('<?= base_url() ?>/assets/img/bg1.png') no-repeat center center fixed;
            background-size: cover;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .card-transparent {
            background-color: transparent;
            border: none;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url('') ?>/assets/css/dashboard.css" rel="stylesheet">
</head>

<body class="text-white">

    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
        <a class="navbar-brand col-md-3 col-lg-3 me-10 px-3 fs-6" href="<?= base_url('dashboard/menuutama') ?>">

            <h1>BBSPJILM</h1>
        </a>
        <!-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">xxx</span>yyy
        </button> -->
        <!-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> -->
        <!-- <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div> -->
        <!-- <h1 class="h1 w-100">PROFIL LAYANAN</h1> -->
    </header>

    <div class="container-fluid text-white">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky pt-5 sidebar-sticky ">
                    <ul class="nav nav-pills d-flex flex-column justify-content-evenly align-text-center mb-auto ">

                        <?php foreach ($getmenu as $row) : ?>
                            <li class="nav-item">
                                <a href="<?= base_url($row['link']) ?>" class="nav-link fs-4 text-light <?= ($row['id'] == $menuid) ? "active" : "" ?>" aria-current="page">
                                    <i data-feather="<?= $row['icon'] ?>"></i>
                                    <?= $row['nama'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col px-md-4">