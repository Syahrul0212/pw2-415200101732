<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<form method="post" action="<?= site_url('kategori/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table class="table table-striped">
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
        <a href="<?= site_url('kategori/delete/'.$data['id']) ?>" class="btn btn-outline-secondary"><i class="fas fa-trash"></i>Delete</a>
      </td>
    </tr>
  </table>
</form>

<?= $this->endSection('content'); ?>