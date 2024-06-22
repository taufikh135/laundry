@extends('templates.admin')

  @section('content')
      <div class="container-fluid">
  <div class="card mt-5">
    <h1 class="card-header">Edit Pegawai</h1>
    <div class="card-body">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/pegawai">Data Pegawai</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Pegawai</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <h1>Edit Pegawai</h1>
              <form action="/submit_form" method="post">
                <div class="mb-3">
                  <label for="namaLengkap" class="form-label">Nama</label>
                  <input type="text" id="namaLengkap" name="namaLengkap" class="form-control" placeholder="Nama Pegawai" />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" id="username" name="username" class="form-control" placeholder="username" />
                </div>
                <div class="mb-3">
                  <label for="no_handphone" class="form-label">No. Handphone</label>
                  <input type="text" id="no_handphone" name="no_handphone" class="form-control" placeholder="no. handphone pegawai">
                </div>
                <div class="mb-3">
                  <label for="role" class="form-label">Role</label>
                  <select class="form-control" id="role" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
      