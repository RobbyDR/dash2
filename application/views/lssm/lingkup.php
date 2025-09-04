<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>


<h5>RUANG LINGKUP :
    <ul>
        <li>LOGAM DASAR DAN PRODUK LOGAM FABRIKASI (SEKTOR 17)</li>
        <li>MESIN DAN PERALATAN (SEKTOR 18)</li>
        <li>KELISTRIKAN DAN PERALATAN OPTIK (SEKTOR 19)</li>
        <li>PERALATAN ANGKUT LAINNYA (SEKTOR 20)</li>
        <li>ADMINISTRASI PELAYANAN PUBLIK *) (SEKTOR 36)</li>
    </ul>
    *) Sedang Proses Akreditasi
</h5>

<script>
    // new DataTable('#tabelruanglingkuppengujian');
    $(document).ready(function() {
        $('#tabelruanglingkuppengujian').DataTable();
    });

    feather.replace();
</script>