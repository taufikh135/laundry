@extends('templates.admin')

  @section('content')
  <div class="bg-light text-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-5 mb-5">Edit Kategori</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item"><a href="/kategori">Data Kategori</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>
                        </ol>
                    </nav>
    <!-- Main content -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-112">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Edit Kategori</h2>
                        <form action="/submit_form" method="post">
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option value="pakaian">Pakaian</option>
                                    <option value="celana">Celana</option>
                                    <option value="baju-dinas">Baju Dinas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <select class="form-control" id="harga" name="harga" required>
                                    <option value="9000">9.000/satuan</option>
                                    <option value="12000">12.000/satuan</option>
                                    <option value="free">Gratis</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
          const quantity = document.getElementsByName('quantity')[0];
          
          function tambahQty() {
            quantity.value++
          }

          function kurangQty() {
            if (quantity.value > 0) {
              quantity.value--
            }
          }
</script> 
@endsection