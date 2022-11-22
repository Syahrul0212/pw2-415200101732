<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<a href="<?= site_url('kategori/insert') ?>"  class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br>
<br>

<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['nama']; ?></td>
          
          <td nowrap>
            <a href="<?= site_url('kategori/'.$row['id']) ?>" class="btn btn-info"><i class="fas fa-edit"></i> >Update</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>

<br />
<a href="<?= site_url('buku_export_xls') ?>" class="btn btn-success"><i class="fas fa-download"></i> Export Excel</a>
<a href="<?= site_url('buku_export_pdf') ?>" class="btn btn-danger"><i class="fas fa-download"></i> Export PDF</a>

<?= $this->endSection('content'); ?>