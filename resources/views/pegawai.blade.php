@extends('templates.admin')

  @section('content')

      <!--  Header End -->
      <div class="container-fluid">
      <div class="card mb-12 mt-5">
        <div class="card-header bg-light">
          <h1>Data pegawai</h1>
          <p>Data pegwai</p>
                  <a href="/add-pegawai" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Add-Pegawai</a>
              <div class="d-flex justify-content-between mb-3 bg-light-danger mt-5">
                <div class="bg-light-danger">
                  Show
                  <select name="page" id="page" class="bg-light-danger">
                    <option value="10">10</option>
                  </select>
                  Entries
                </div>
                <div>
                  Search
                  <input type="text" name="" id="" class="bg-light-danger">
                </div>
              </div>
              <div class="card mb-0 bg-light-danger">
                <div class="card-body p-4 overflow-scroll">
                  <table class="table table-danger table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">No. Handphone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Taufik</td>
                        <td>Taufik@golaundry.com</td>
                        <td>Admin</td>
                        <td>08578900000</td>
                        <td>Active</td>
                        <td>
                          <a type="button" class="btn btn-warning mb-10" href="/edit-pegawai"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                          </td>
                          <td>
                          <button type="button" class="btn btn-danger mb-1"><i class="fa-regular fa-trash-can"></i> Hapus</button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Fauzan</td>
                        <td>Fauzan@golaundry.com</td>
                        <td>Staff</td>
                        <td>08123456789</td>
                        <td>Active</td>
                        <td>
                          <a type="button" class="btn btn-warning mb-10" href="/edit-pegawai"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
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
