<div class="container">

<div class="row">
    <div class="col-md-6">

    <div class="card">
  <div class="card-header">
    Form Tambah Data Mahasiswa
  </div>
  <div class="card-body">

  <form action="" method="post">
    <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" >
    <small  class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
    <div class="form-group">
    <label for="nrp">NRP</label>
    <input type="text" name="nrp" class="form-control" id="nrp" >
    <small  class="form-text text-danger"><?= form_error('nrp'); ?></small>
  </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" >
    <small  class="form-text text-danger"><?= form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknik Akuntansi">Teknik Akuntansi</option>
      <option value="Teknik IT">Teknik IT</option>
      <option value="Teknik C++">Teknik C++</option>
      <option value="Teknik Js">Teknik Js</option>
      <option value="Teknik Python">Teknik Python</option>
    </select>
  </div>
<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
    </form>
  </div>
</div>

   

    </div>
</div>

</div>