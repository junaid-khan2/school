@extends('template.layouts.master')
@push('css')

@endpush
@section('content')
  <style>
  .cnic_style  .form-control{
    margin:0px 5px;
    padding:0  !important;
    width:20px !important;
    height: 30px !important;
  }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admission Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admission Form</li>
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
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Student Name *  <small>(in capital letter)</small></label>
                    <input type="text" class="form-control" require id="exampleInputEmail1" placeholder="Full Name">
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Father Name * <small>(In capital letter)</small></label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Father Name">
                        </div>
                      </div>
                    <div class="col-6">
                       <div class="form-group cnic_style" >
                          <label for="exampleInputPassword1">Father CNIC </label>
                          <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Father Name"> -->
                              <div id="otp" class="inputs d-flex flex-row justify-content-center border p-1 rounded">
                                
                              <input class=" text-center form-control rounded" type="text" id="first" maxlength="1" />
                              <input class=" text-center form-control rounded" type="text" id="second" maxlength="1" />
                              <input class=" text-center form-control rounded" type="text" id="third" maxlength="1" />
                              <input class=" text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                              <input class=" text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                                -
                                <input class=" text-center form-control rounded" type="text" id="seven" maxlength="1" />
                                <input class=" text-center form-control rounded" type="text" id="eight" maxlength="1" />
                                <input class=" text-center form-control rounded" type="text" id="nine" maxlength="1" />
                                <input class=" text-center form-control rounded" type="text" id="ten" maxlength="1" />
                                <input class=" text-center form-control rounded" type="text" id="eleven" maxlength="1" />
                                <input class=" text-center form-control rounded" type="text" id="twelve" maxlength="1" />
                                <input class=" text-center form-control rounded" type="text" id="thirteen" maxlength="1" />
                                -
                                <input class=" text-center form-control rounded" type="text" id="fifteen" maxlength="1" />
                              </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                   
                    <div class="col-6">
                       
                          <label for="exampleInputPassword1">Date of Birth  </label>
                          <input type="date" class="form-control " >
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Date of Birth <small>(In Words)</small> </label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Seventeen junuary two thousand four">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Father Occupation</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Software Engineer">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Monthly Income</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="50,000/-">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nationality</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Engrazz">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Religion</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Muslim">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Name of School last Attended</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="XYZ eSchool ">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">SLC Seril No</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="003214">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Class last Attended</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Post Doc ">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Admited in class</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Rocat Science">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                          <label for="exampleInputPassword1">Permanent Home Address</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="XYZ Street 123 Home  ">
                        </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">District</label>
                          <select class="custom-select form-control-border" id="exampleSelectBorder">
                            <option>Peshware</option>
                            <option>Lahore</option>
                            <option>Karcha </option>
                          </select>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Tehsil</label><select class="custom-select form-control-border" id="exampleSelectBorder">
                            <option>Peshware</option>
                            <option>Lahore</option>
                            <option>Karcha </option>
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"> Student Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
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


<script>
    document.addEventListener("DOMContentLoaded", function(event) {
  
  function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput();

    
});
</script>