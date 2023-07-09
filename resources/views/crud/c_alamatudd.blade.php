@extends('layouts.index')

@section('container')
  
    <!-- Main content -->
    <section class="content">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Form</h3>
                </div>
                <!-- /.card-header -->
                    <div class="col-lg-8">
                        <form class="card-body" method="post" action="/dashboard/alamatudd">
                            
                            @csrf
                            <div class="form-group row">
                                <label for="udd_kabkot" class="col-sm-2 col-form-label">UDD Kabupaten/Kota</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control focus-color" id="udd_kabkot" name="udd_kabkot" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control focus-color" id="alamat" name="alamat" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_telp" class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control focus-color" id="no_telp" name="no_telp" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control focus-color" id="email" name="email" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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

