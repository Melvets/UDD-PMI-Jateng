@extends('layouts.index')

@section('container')
  
    <!-- Main content -->
    <section class="content">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex">
                  <h3 class="card-title p-2">Stok Darah UDD PMI Se-Jateng</h3>
                  <a class="btn btn-social btn-primary shadow ml-auto p-2" href="/dashboard/stokdarah/create" id="btn-create">
                    <i class="fas fa-plus-circle"></i> 
                    Tambah Data
                  </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table-alamatudd" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>UDD Kabupaten/Kota</th>
                      <th>Golda A</th>
                      <th>Golda B</th>
                      <th>Golda AB</th>
                      <th>Golda O</th>
                      <th>Tanggal Update</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    @foreach ($data_stokdarah as $data)
                        <tr>
                            <th>{{ $loop -> iteration }}</th>
                            <td>{{ $data -> udd_kabkot }}</td>
                            <td>{{ $data -> golda_a }}</td>
                            <td>{{ $data -> golda_b }}</td>
                            <td>{{ $data -> golda_ab }}</td>
                            <td>{{ $data -> golda_o }}</td>
                            <td>{{ $data -> tanggal }}</td>
                            <td>
                              <a href="/dashboard/alamatudd/edit/{{ $data -> id_stokdarah }}" class="btn btn-default text-green btn-sm shadow " title="update"><i class="fas fa-pen"></i></a>
                              <a href="/dashboard/alamatudd/delete/{{ $data -> id_stokdarah }}" class="btn btn-default text-red btn-sm shadow " title="delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

@endsection

