<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <div class ="col-6">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul>
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nrp']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      <form action "<? BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class = "form-control" id="nama" name="nama">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class ="form-group">
        <label for="jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknik Informatika"> Teknik Informatika </option>
            <option value="Teknik Mesin">Teknik Mesin/option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Pangan">Teknik Pangan</option>
            <option value="Teknik Planalogi">Teknik Planalogi</option>
            <option value="Teknik Lingkungan">Teknik Lingkunagn</option>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>