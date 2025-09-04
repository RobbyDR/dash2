<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>

<div class="row">
    <img src="<?= base_url('assets/img/permesinan.jpg') ?>" class="img-fluid col-lg-4" alt="" srcset="">
    <h5 class="col">
        Di BBLM, kami bangga telah menghasilkan berbagai produk unggulan yang digunakan dalam berbagai industri. Berikut beberapa produk unggulan yang telah kami buat:
        <ul>
            <li>MOULD & DIES: Kami menghasilkan mould dan dies berkualitas tinggi yang digunakan dalam berbagai aplikasi industri.</li>
            <li>CNC ROUTER: Produk CNC Router kami dirancang untuk keperluan pemotongan dan ukiran presisi tinggi.</li>
            <li>Komponen-komponen Otomotif: Kami memproduksi berbagai komponen otomotif dengan standar kualitas yang ketat.</li>
            <li>Komponen Mesin Produksi: Berbagai komponen mesin produksi yang kami buat memastikan efisiensi dan kinerja tinggi dalam operasi industri.</li>
            <li>High Thrust Drone: Kami juga telah membuat drone dengan thrust tinggi untuk keperluan industri dan komersial.</li>
        </ul>
    </h5>
</div>

<script>
    // new DataTable('#tabelspmkalibrasi');
    $(document).ready(function() {
        $('#tabelspmkalibrasi').DataTable();
    });

    feather.replace();
</script>