@extends('templates.admin')

@section('content')
<div class="container-fluid">
    <div class="card mt-5">
        <div class="card-header bg-light">
            <h1>Pelanggan Hari Ini</h1>
            <p>Data Pemesanan Hari ini</p>
            <a href="/add-pelanggan" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Add-Pelanggan</a>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3 mt-5">
                <div class="bg-light">
                    Show
                    <select name="page" id="page" class="bg-light">
                        <option value="10">10</option>
                    </select>
                    Entries
                </div>
                <div>
                    Search
                    <input type="text" class="form-control bg-light" placeholder="Search...">
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-body bg-light-danger">
                    <div class="table-responsive">
                        <table class="table table-danger table-striped caption-top">
                            <caption>List of Admin</caption>
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Coin</th>
                                    <th scope="col">PH</th>
                                    <th scope="col">Harga Asli</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Zhot-Kun</td>
                                    <td>Citoe</td>
                                    <td>1000</td>
                                    <td>Rp. 1,000</td>
                                    <td>Rp. 50,000</td>
                                    <td>Rp. 49,000</td>
                                    <td>
                                        <a href="/edit-pelanggan" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                        <button type="button" class="btn btn-danger" onclick="handleDeleteClick(this)"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Afriza</td>
                                    <td>Perum</td>
                                    <td>5000</td>
                                    <td>Rp. 5,000</td>
                                    <td>Rp. 50,000</td>
                                    <td>Rp. 45,000</td>
                                    <td>
                                        <a href="/edit-pelanggan" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                        <button type="button" class="btn btn-danger" onclick="handleDeleteClick(this)"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jawir</td>
                                    <td>Jawa</td>
                                    <td>10000</td>
                                    <td>Rp. 10,000</td>
                                    <td>Rp. 50,000</td>
                                    <td>Rp. 40,000</td>
                                    <td>
                                        <a href="/edit-pelanggan" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                        <button type="button" class="btn btn-danger" onclick="handleDeleteClick(this)"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mt-2 pe-2">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
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
