<header class="mb-auto">
    <div>
        <a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a>
        <a href="<?= base_url('') ?>" class="btn btn-info"><i data-feather="home"></i></a>
        <a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-right-circle"></i></a>
        <h1 class="float-md-center mb-0"><?= $judul ?></h1>
        <h2 class="float-md-center mb-0"><?= $judul1 ?></h2>
        <!-- <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="#">Features</a>
            <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
        </nav> -->
    </div>
</header>

<main class="px-3 align-items-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-1 justify-content-center">
        <div class="col">
            <div class="card card-transparent">
                <a href="<?= base_url('indi/profil') ?>" class="text-white text-decoration-none">
                    <img src="<?= base_url('assets/img/thumbindi.png') ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h2 class="card-text">INDI 4.0</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card card-transparent">
                <a href="<?= base_url('lsih/profil') ?>" class="text-white text-decoration-none">
                    <img src="<?= base_url('assets/img/thumblsih.png') ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h3 class="card-text">SERTIFIKASI INDUSTRI HIJAU</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card card-transparent">
                <a href="<?= base_url('optikji/profil') ?>" class="text-white text-decoration-none">
                    <img src="<?= base_url('assets/img/thumboptikji.png') ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h3 class="card-text">OPTIMALISASI PEMANFAATAN TEKNOLOGI</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card card-transparent">
                <a href="<?= base_url('design/profil') ?>" class="text-white text-decoration-none">
                    <img src="<?= base_url('assets/img/thumbdesign.png') ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h3 class="card-text">DESIGN & ENGINEERING</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card card-transparent">
                <a href="<?= base_url('pabrikasi/profil') ?>" class="text-white text-decoration-none">
                    <img src="<?= base_url('assets/img/thumbfabrikasi.png') ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h3 class="card-text">FABRIKASI & PENGELASAN</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

<footer class="mt-auto text-white-50">
    <p>© Copyright Balai Besar Standardisasi dan Pelayanan Jasa Industri Logam dan Mesin </p>
</footer>

<script>
    feather.replace();
</script>