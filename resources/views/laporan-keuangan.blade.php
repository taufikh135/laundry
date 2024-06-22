@extends('templates.admin')

@section('content')

<div class="container-fluid">
    <div class="card mb-12 mt-5">
        <div class="card-header bg-light">
            <h1>pengeluaran Hari Ini</h1>
            <p>Data pengeluaran Hari ini</p>
            <a href="/add-pengeluaran" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Add-Pengeluaran</a>
        </div>
        <div class="card mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <div>
                Show
                <select name="page" id="page">
                    <option value="10">10</option>
                    <!-- Tambahkan opsi lain jika diperlukan -->
                </select>
                Entries
            </div>
            <div>
                Search
                <input type="text" name="search" id="search">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-light-danger">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Supplier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>admin 1</td>
                        <td>sabun</td>
                        <td>Rp.20.000</td>
                        <td>Cibuaya</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>admin 2</td>
                        <td>sabun</td>
                        <td>Rp.20.000</td>
                        <td>Pancawati</td>
                    </tr>
                    <!-- Baris untuk jumlah total -->
                    <tr id="total-row">
                        <td colspan="3" class="text-right">Total Pengeluaran</td>
                        <td id="total-amount"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
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
<script>
    // Menghitung total harga
    document.addEventListener('DOMContentLoaded', function() {
        var totalAmount = 0;
        var hargaCells = document.querySelectorAll('tbody tr:not(#total-row) td:nth-child(4)');
        
        hargaCells.forEach(function(cell) {
            var hargaText = cell.textContent.trim().replace('Rp.', '').replace('.', '').trim();
            var harga = parseInt(hargaText);
            totalAmount += harga;
        });
        
        var totalAmountCell = document.getElementById('total-amount');
        totalAmountCell.textContent = 'Rp.' + totalAmount.toLocaleString();
    });
</script>


@endsection
