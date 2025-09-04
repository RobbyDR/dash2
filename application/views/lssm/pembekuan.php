<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><a href="<?= base_url('dashboard/menulayanan') ?>" class="btn btn-info"><i data-feather="arrow-left-circle"></i></a> <?= $judul ?></h1>
</div>

<h4>
    Pembekuan Sertifikasi dilakukan apabila:
    <ul>
        <li>Sistem manajemen pelanggan yang disertifikasi gagal secara berulang atau secara serius dalam memenuhi persyaratan sertifikasi, termasuk persyaratan efektivitas sistem manajemen.</li>
        <li>Pelanggan yang telah mendapat sertifikasi tidak bersedia untuk dilakukan kegiatan audit surveilans atau sertifikasi ulang yang akan dilakukan pada frekuensi yang telah dipersyaratkan.</li>
        <li>Pelanggan yang telah disertifikasi meminta untuk dilakukan pembekuan secara sukarela.</li>
        <li>Apabila 2 bulan hari pelanggan tidak dapat menutup ketidaksesuaian maka akan diberikan peringatan pembekuan sertifikat pada pelanggan.</li>
        <li>Sertifikasi dapat dibekukan apabila pelanggan tidak memberikan tindakan perbaikan pada ketidaksesuaian mayor setelah 4 bulan sejak surat peringatan pembekuan diberikan. Masa pembekuan sertifikat adalah 6 bulan</li>
        <li>Selama masa pembekuan, maka sertifikat system manajemen dianggap tidak berlaku</li>
    </ul>
    Pengaktifan Kembali Sertifikasi dilakukan apabila:
    <ul>
        <li>Pada masa pembekuan sertifikasi, perusahaan dapat memberikan perbaikan dan tindakan koreksi pada temuan yang menyebabkan pembekuan dan telah dilakukan verifikasi pada perbaikan dan tindakan korektif tersebut.</li>
    </ul>
</h4>

<script>
    feather.replace();
</script>