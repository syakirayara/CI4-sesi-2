<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>
<h3>Data Siswa</h3>
<table class="table-border table-striped">
    <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tanggal Lahir</th>
    </tr>
    <tr>
        <td>Andi Saputra</td>
        <td>101</td>
        <td>2003-12-22</td>
    </tr>
    <tr>
        <td>Budi Cahya</td>
        <td>102</td>
        <td>2003-1-30</td>
    </tr>
</table>
<?= $this->endSection(); ?>
