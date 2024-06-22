@extends('templates.admin')

  @section('content')

  <div class="card mt-5">
                <div class="card-header">
                <h1 class="mb-2">Add-Kategori</h1>
                </div>
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="/kategori">Data Kategori</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add-Kategori</li>
                        </ol>
                    </nav>
                    <form action="/submit_form" method="post">
                <div class="form-row">

                    <div class="form-group col-4 mb-4">
                        <label for="role" class="form-label">Kategori</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="admin">Baju</option>
                            <option value="user">Celana</option>
                        </select>
                    </div>
                    <div class="form-group col-4 mb-4">
                        <label for="role" class="form-label">Harga</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="admin">9.000/satuan</option>
                            <option value="user">20.000/kiloan</option>
                        </select>
                        <br>
                    </div>     
              <div class="d-grid gap-2 col-4 ">
                <button type="submit" class="btn btn-primary btn-lg mt-5">Submit</button>
              </div>
            </form>
        </div>
@endsection