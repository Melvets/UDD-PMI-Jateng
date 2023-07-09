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
                        <form class="card-body" method="post" action="/dashboard/stokdarah">
                            
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">UDD Kabupaten/Kota</label>
                                <div class="col-sm-10">
                                    <select class="form-control focus-color" id="udd_kabkot" name="udd_kabkot" required>
                                        @foreach ($udd_kabkot as $data)
                                        <option value="{{ $data -> id_alamatudd }}"> {{ $data -> udd_kabkot }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="golda_a" class="col-sm-2 col-form-label">Golda A</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control focus-color" id="golda_a" name="golda_a" placeholder="Wajib diisi ..." required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="golda_b" class="col-sm-2 col-form-label">Golda B</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control focus-color" id="golda_b" name="golda_b" placeholder="Wajib diisi ..." required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="golda_ab" class="col-sm-2 col-form-label">Golda AB</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control focus-color" id="golda_ab" name="golda_ab" placeholder="Wajib diisi ..." required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="golda_o" class="col-sm-2 col-form-label">Golda O</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control focus-color" id="golda_o" name="golda_o" placeholder="Wajib diisi ..." required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_update" class="col-sm-2 col-form-label">Tanggal Update</label>
                                    <div class="col-sm-10">
                                    <input type="date" class="form-control focus-color" id="tgl_update" name="tgl_update" placeholder="Wajib diisi ..." required>
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
{{-- 
      <!-- date-range-picker -->
    <script src="../../../../template/plugins/daterangepicker/daterangepicker.js"></script>
        <script>
            $(function () {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                theme: 'bootstrap4'
                })

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })

                //Date picker
                $('#reservationdate').datetimepicker({
                    format: 'L'
                });

                //Date range picker
                $('#reservation').daterangepicker()

            })
        </script> --}}
      
@endsection

