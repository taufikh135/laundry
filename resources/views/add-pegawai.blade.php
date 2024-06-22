@extends('templates.admin')

  @section('content')
  <div class="card mt-5">
        <h1 class="card-header font-weight-bold">Add Pegawai</h1>
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pegawai">Data Pegawai</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Pegawai</li>
                </ol>
            </nav>

            <div class="card mb-5">
                <div class="card-body">
                    <form action="/submit_form" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="namaLengkap" class="form-label">Nama:</label>
                                <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Pegawai" required>
                            </div>
                            <div class="col-md-6">
                                <label for="userName" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="userName" name="userName" placeholder="Username Pegawai" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="role" class="form-label">Role:</label>
                                <select class="form-control" id="role" name="role" required>
                                    <option value="admin">Admin</option>
                                    <option value="owner">Owner</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="numberPhone" class="form-label">Nomor Handphone:</label>
                                <input type="tel" class="form-control" id="numberPhone" name="numberPhone" placeholder="Nomor Handphone" required>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-12 mb-4">
                                <label for="status" class="form-label">Status:</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        <div class="d-grid gap-2">
                            <a  href="/pegawai" class="btn btn-primary btn-lg">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 