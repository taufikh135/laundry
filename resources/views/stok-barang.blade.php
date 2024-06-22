@extends('templates.admin')

@section('content')
<div class="card mb-3">
    <div class="card-header bg-light text-dark">
        <h1 class="card-title mb-0">Stok Barang</h1>
    </div>
    <div class="card-body">
        <p class="card-text">Hallo admin, Selamat datang di Halaman Stok Barang</p>
<div class="card mb-3">
    <div class="card-header bg-light">
        <h3 class="card-title">Data Stok Barang</h3>
    </div>
    <div class="card-body p-4">
        <a href="/add-stok-barang" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Stok Barang</a>
    </div>
    <div class="table-responsive">
        <table class="table table-danger table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>So Clean Liquid</td>
                    <td>Sabun Cair</td>
                    <td>12</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="edit-stok-barang" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-danger" onclick="handleDeleteClick(this)"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Downy</td>
                    <td>Pewangi</td>
                    <td>12</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="edit-stok-barang" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-danger" onclick="handleDeleteClick(this)"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Proclin</td>
                    <td>Pemutih</td>
                    <td>12</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="edit-stok-barang" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-danger" onclick="handleDeleteClick(this)"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Jazz one</td>
                    <td>Deterjen</td>
                    <td>12</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="edit-stok-barang" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-danger" onclick="handleDeleteClick(this)"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Kispray</td>
                    <td>Pelembut Baju</td>
                    <td>12</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="edit-stok-barang" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <button type="button" class="btn btn-danger" onclick="handleDeleteClick(this)"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

<!-- Modal for Delete Confirmation -->
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
        var row = $(btn).closest('tr');

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
