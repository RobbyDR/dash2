<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>

<h3>Layanan pelatihan meliputi :
    <ol>
        <li>Permesinan</li>
        <li>Pengelasan</li>
        <li>Pengecoran Logam</li>
        <li>Pelapisan Logam Perlakuan Panas</li>
        <li>Kalibrasi</li>
        <li>Pengujian</li>
        <li>Manajemen Industri</li>
        <li>Tingkat Komponen Dalam Negeri (TKDN)</li>
        <li>Awarness INDI 4.0</li>
    </ol>
</h3>

<script>
    // new DataTable('#tabelruanglingkuppengujian');
    $(document).ready(function() {
        $('#tabelruanglingkuppengujian').DataTable();
    });

    feather.replace();
</script>