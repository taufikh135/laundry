@extends('templates.admin')

@section('content')
      <div class="container-fluid">
          <div class="card bg-light mt-5">
            <div class="card-body">
              <h1 class="card-title">Data Kategori</h1>
              <h2 class="card-subtitle mb-2 text-muted">Data Seluruh kategori GoLaundry</h2>
              <div class="card">
                <div class="card-body p-4">
                  <a href="/add-kategori" type="button" class="btn btn-primary"><i class="bi bi-person-add me-2"></i>Add-Kategori</a>
                </div>
              </div>
              <div class="d-flex justify-content-between mb-3 bg-light-danger">
                <div>
                  Show
                  <select name="page" id="page">
                    <option v alue="10">10</option>
                  </select>
                  Entries
                </div>
                <div>
                  Search
                  <input type="text" name="" id="">
                </div>
              </div>
              <div class="card mb-0 bg-light-danger">
                <div class="card-body p-4 overflow-scroll">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">kategori</th>
                        <th scope="col">harga</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Edit</th>
                        <th scope="col">hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>BAJU</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a type="button" class="btn btn-warning mb-10" href="/edit-kategori"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                          </td>
                          <td>
                          <button type="button" class="btn btn-danger mb-1"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>CELANA</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a type="button" class="btn btn-warning mb-10" href="/edit-kategori"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                        </td>
                        <td>
                          <button type="button" class="btn btn-danger mb-1"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>JASS</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a type="button" class="btn btn-warning mb-10" href="/edit-kategori"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                        </td>
                        <td>
                          <button type="button" class="btn btn-danger mb-1"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>SPRINGBAD</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a type="button" class="btn btn-warning mb-10" href="/edit-kategori"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                        </td>
                        <td>
                          <button type="button" class="btn btn-danger mb-1"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                        </td>
                      </tr>
                      </tbody>
                  </table>
                </div>

                <div class="d-flex justify-content-end w-100 mt-2 pe-2">
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
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  Main wrapper -->
<div class="body-wrapper">
  <!-- Your existing HTML content goes here -->
  <!-- Add Bootstrap modal for delete confirmation -->  
  <div class="body-wrapper">
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
  </div>
@endsection
@section('script')
<script>
    // Function to handle delete button click
    function handleDeleteClick(btn) {
      var row = btn.closest('tr');
      var confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
      
      // Add event listener to confirmation button
      confirmDeleteBtn.addEventListener('click', function() {
        // Here you can add your code to perform the actual deletion
        // For example, you can make an AJAX request to delete the data from the server
        // After successful deletion, you can remove the row from the DOM
        row.remove();
        // Close the modal
        $('#deleteConfirmationModal').modal('hide');
      });
  
      // Show the modal
      $('#deleteConfirmationModal').modal('show');
    }
  
    // Add event listeners to all delete buttons
    document.querySelectorAll('.btn.btn-danger').forEach(function(button) {
      button.addEventListener('click', function() {
        handleDeleteClick(this);
      });
    });
  </script>
@endsection
