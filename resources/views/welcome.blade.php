@extends('templates.admin')

  @section('content')
      <div class="container-fluid">
        <!--  Row 1 -->
        <header class="bg-light-danger text-dark p-3">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h1>Dashboard Laundry</h1>
              </div>
              <div class="col-4 text-start">
                <p>Hallo admin, Selamat datang di Deshboard</p>
              </div>
            </div>
          </div>
        </header>
        <main class="container mt-3">
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="card-title font-weight-bold displey-1">
                      <span>0</span>
                      </h5>
                      <p class="card-text">Jumlah Customer</p>
                  </div>
                  <i class="fa-solid fa-users fa-3x" style="color: #B197FC;"></i>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="card-title font-weight-bold displey-1">
                      <span>0</span>
                      </h5>
                      <p class="card-text">Laundry Masuk</p>
                  </div>
                  <i class="fa-solid fa-right-to-bracket fa-3x" style="color: #63E6BE;"></i>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="card-title font-weight-bold displey-1">
                      <span>0</span>
                      </h5>
                      <p class="card-text">Laundry Selesai</p>
                  </div>
                  <i class="fa-solid fa-circle-check fa-3x" style="color: #009e60;"></i>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="card-title font-weight-bold displey-1">
                      <span>0</span>
                      </h5>
                      <p class="card-text">Laundry Diambil</p>
                  </div>
                  <i class="fa-solid fa-dollar-sign fa-3x" style="color: #FFD43B;"></i>
                </div>
              </div>
            </div>
        </main>
          <div class="container-fluid">
            <div class="card bg-light-danger">
              <div class="card-body">
            <h3>Pelanggan Hari Ini</h3>
            <p>Data Pemesanan Hari ini</p>
          </div>
          <div class="card mb-0 bg-light-danger">
            <div class="card-body p-4 overflow-scroll bg-light-danger">
              <table class="table table-danger table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">No. Telp</th>
                    <th>Alamat</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked"></label>
                      </div>
                    </td>
                    <td scope="col">1</td>
                    <td>taufik Hidayat</td>
                    <td><button class="btn btn-danger btn-md ">Cancel</button></td>
                    <td>08123456789</td>
                    <td>Cibuaya</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked"></label>
                      </div>
                    </td>
                    <td>2</td>
                    <td>Fauzan Azhar</td>
                    <td><button type="button" class="btn btn-warning btn-md">Peding</button></td>
                    <td>08123456789</td>
                    <td>Bekasi</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked"></label>
                      </div>
                    </td>
                    <td>3</td>
                    <td>Afriza Fadli Nugraha</td>
                    <td><button type="button" class="btn btn-success">Selesai</button></td>
                    <td>08123456789</td>
                    <td>Telagasari</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked"></label>
                      </div>
                    </td>
                    <td>4</td>
                    <td>Tiar</td>
                    <td><button type="button" class="btn btn-danger">Cencel</button></td>
                    <td>08123456789</td>
                    <td>cikampek</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked"></label>
                      </div>
                    </td>
                    <td>5</td>
                    <td>Teguh Susilo</td>
                    <td><button type="button" class="btn btn-warning">Peding</button></td>
                    <td>08123456789</td>
                    <td>Patok Besi</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked"></label>
                      </div>
                    </td>
                    <td>6</td>
                    <td>Fadel Raihan</td>
                    <td><button type="button" class="btn btn-success">Selesai</button></td>
                    <td>08123456789</td>
                    <td>Terang Sari</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection

