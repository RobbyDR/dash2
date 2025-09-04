<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>

<h5>Berikut adalah beberapa layanan unggulan kami :
    <ol>
        <li>Pattern Design</li>
        <li>Pembuatan Pola Manual</li>
        <li>Pembuatan Pola CNC</li>
        <li>Pembuatan pola 3D print</li>
        <li>Casting desain</li>
        <li>Casting simulasi</li>
        <li>Prototyping</li>
        <li>Jasa produksi produk casting</li>
        <li>Heat Treatment</li>
        <li>Pengujian pasir</li>
    </ol>
</h5>

<script>
    // new DataTable('#tabelruanglingkuppengujian');
    $(document).ready(function() {
        $('#tabelruanglingkuppengujian').DataTable();
    });

    feather.replace();
</script>