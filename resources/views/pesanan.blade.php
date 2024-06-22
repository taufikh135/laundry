@extends('templates.admin')

@section('content')
<div class="container-fluid">
    <div class="card bg-light mt-5">
        <div class="card-body">
            <h1>Data Pesanan</h1>
            <h2 class="card-subtitle mb-2 text-muted">Data Seluruh Pesanan GoLaundry</h2>
            <div class="card-body p-4">
                <a href="/add-pesanan" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i> Add-Pesanan</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Pesanan Laundry</h1>
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                    <th scope="col">No. Pesanan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Jenis Pakaian</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12345</td>
                    <td>Budi</td>
                    <td>Kemeja</td>
                    <td>5</td>
                    <td>Rp. 10.000</td>
                    <td>Rp. 50.000</td>
                    <td>Menunggu</td>
                    <td>
                        <a href="/edit-pesanan" class="btn btn-warning mb-1"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger mb-1" onclick="handleDeleteClick(this)"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>67890</td>
                    <td>Ani</td>
                    <td>Celana</td>
                    <td>3</td>
                    <td>Rp. 15.000</td>
                    <td>Rp. 45.000</td>
                    <td>Sedang Diproses</td>
                    <td>
                        <a href="/edit-pesanan" class="btn btn-warning mb-1"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger mb-1" onclick="handleDeleteClick(this)"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>Budi</td>
                    <td>Sepatu</td>
                    <td>2</td>
                    <td>Rp. 25.000</td>
                    <td>Rp. 50.000</td>
                    <td>Selesai</td>
                    <td>
                        <a href="/edit-pesanan" class="btn btn-warning mb-1"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger mb-1" onclick="handleDeleteClick(this)"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Function to handle delete button click
    function handleDeleteClick(btn) {
        var row = btn.closest('tr');

        // Show the modal
        $('#deleteConfirmationModal').modal('show');

        // Handle confirmation
        $('#confirmDeleteBtn').on('click', function() {
            // Perform deletion logic here (e.g., Ajax request)
            row.remove();
            // Hide the modal
            $('#deleteConfirmationModal').modal('hide');
        });
    }
</script>
@endsection
