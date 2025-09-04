<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>

<h4>
    <ul>
        <li class="mb-3">Sertifikasi diberikan apabila ketidaksesuaian yang terjadi pada audit stage 2 telah diverifikasi dan telah memenuhi. Dan pelaksanaan sertifikasi telah memenuhi skema sertifikasi.</li>
        <li>Masukan untuk keputusan pemberian sertifikasi adalah rekomendasi hasil rapat review untuk memberikan sertifikasi.</li>
    </ul>
</h4>

<script>
    // new DataTable('#tabeltarifpengujian');
    $(document).ready(function() {
        $('#tabeltarifpengujian').DataTable();
    });

    feather.replace();
</script>