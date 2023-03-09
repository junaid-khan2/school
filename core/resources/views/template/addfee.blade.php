@extends('template.layouts.master')
@push('css')

@endpush
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fee Submit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Fee submit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post"  action="{{url('student/store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="st_id" value="{{$data->id}}">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Name </small></label>
                          <input type="text" readonly value="{{$data->full_name}}" name="full_name" class="form-control" id="exampleInputPassword1">
                        </div>
                      </div>
                    <div class="col-6">
                       <div class="form-group " >
                          <label for="exampleInputPassword1">Father Name </label>
                          <input type="text" readonly name="father_name" value="{{$data->father_name}}" class="form-control" id="exampleInputPassword1" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                   
                    <div class="col-6">
                          <label for="exampleInputPassword1">Monthly Fee </label>
                          <input readonly type="text"  class="form-control " value="{{$data->monthly_fee}}">
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Remming <small>(old)</small> </label>
                          <input type="text" readonly value="{{$data->remming}}" class="form-control" id="exampleInputPassword1"  >
                        </div>
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tuition Fee</label>
                          <input type="number" value="{{$data->monthly_fee}}"  name="tuition_fee" class="form-control" id="tuition_fee">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Fine</label>
                          <input type="number"  name="fine" class="form-control" id="fine" >
                        </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                          <label for="exampleInputPassword1">Arrears</label>
                          <input type="number" name="arrears" class="form-control" id="arrears" >
                        </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Addmistion</label>
                        <input type="text" name="adm_porm" class="form-control" id="adm_porm" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Remming</label>
                          <input type="text" value="{{$data->remming}}" name="old_remming" class="form-control" id="old_remming" >
                        </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Recivied</label>
                        <input type="number" name="recivied" class="form-control" id="recivied" >
                      </div>
                    </div>
                    
                    <div class="col-3">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Month </label>
                        <input type="month" value="<?=date('Y-m')?>" class="form-control">
                       <!-- <select class="custom-select form-control-border" name="month" id="">
                        <option selected value='1'>Janaury</option>
                        <option value='2'>February</option>
                        <option value='3'>March</option>
                        <option value='4'>April</option>
                        <option value='5'>May</option>
                        <option value='6'>June</option>
                        <option value='7'>July</option>
                        <option value='8'>August</option>
                        <option value='9'>September</option>
                        <option value='10'>October</option>
                        <option value='11'>November</option>
                        <option value='12'>December</option>
                       </select> -->
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="date" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="exampleInputPassword1" >
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <hr>
                <div class="row">
                  <div class="col-md-9">

                  </div>
                  <div class="col-md-3 ">
                    <strong>Total Fees :</strong><p id="total">1500</p>
                    <strong>Received :</strong><p id="pad">1500</p>
                    <strong>Remming :</strong><p id="remming">1500</p>
                  </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@push('scripts')

<script>
  $(document).ready(function(){
    function addtotal(){
    var tuition_fee =   $('#tuition_fee').val();
    var fine        =   $('#fine').val();
    var arrears     =   $('#arrears').val();
    var adm_porm    =   $('#adm_porm').val();
    var old_remming =   $('#old_remming').val();
    var recivied    =   $('#recivied').val();
    var total       =   $('#total').text();
    var pad         =   $('#pad').text();
    var remming     =   $('#remming').text();
    }
  });
</script>
@endpush
