@extends('layouts.index')

@section('container')
  
    <!-- Main content -->
    <section class="content">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Jadwal Mobile Unit PMI Se-Jateng</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table-alamatudd" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>UDD Kabupaten/Kota</th>
                      <th>Tempat</th>
                      <th>Alamat</th>
                      <th>Jam Mulai</th>
                      <th>Jam Selesai</th>
                      <th>Peruntukan</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($data_jadwalmu as $data2)
                        <tr>
                            <th>{{ $loop -> iteration }}</th>
                            <td>{{ $data2 -> udd_kabkot }}</td>
                            <td>{{ $data2 -> tempat }}</td>
                            <td>{{ $data2 -> alamat }}</td>
                            <td>{{ $data2 -> jam_mulai }}</td>
                            <td>{{ $data2 -> jam_selesai }}</td>
                            <td>{{ $data2 -> peruntukan }}</td>
                            <td>{{ $data2 -> tanggal }}</td>
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

