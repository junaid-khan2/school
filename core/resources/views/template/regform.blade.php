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
                <h3 class="card-title">Addmistion Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post"  action="{{url('student/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Student Name *  <small>(in capital letter)</small></label>
                    <input type="text" class="form-control" require id="exampleInputEmail1" name="full_name" placeholder="Full Name">
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Father Name * <small>(In capital letter)</small></label>
                          <input type="text" name="father_name" class="form-control" id="exampleInputPassword1" placeholder="Father Name">
                        </div>
                      </div>
                    <div class="col-6">
                       <div class="form-group " >
                          <label for="exampleInputPassword1">Father CNIC </label>
                          <input type="number" name="father_cnic" class="form-control" id="exampleInputPassword1" placeholder="1730106469573">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                   
                    <div class="col-6">
                       
                          <label for="exampleInputPassword1">Date of Birth  </label>
                          <input type="date" name="date_of_birth" class="form-control " >
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Date of Birth <small>(In Words)</small> </label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="word_date_of_barth" placeholder="Seventeen junuary two thousand four">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Father Occupation</label>
                          <input type="text" name="father_occuption" class="form-control" id="exampleInputPassword1" placeholder="Software Engineer">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Monthly Income</label>
                          <input type="number" name="monthly_income" class="form-control" id="exampleInputPassword1" placeholder="50,000/-">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nationality</label>
                          <input type="text" name="nationality" class="form-control" id="exampleInputPassword1" placeholder="Engrazz">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Religion</label>
                          <input type="text" name="religion" class="form-control" id="exampleInputPassword1" placeholder="Muslim">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Name of School last Attended</label>
                          <input type="text" name="last_school" class="form-control" id="exampleInputPassword1" placeholder="XYZ eSchool ">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">SLC Seril No</label>
                          <input type="number" name="slc_no" class="form-control" id="exampleInputPassword1" placeholder="003214">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Class last Attended</label>
                          <input type="text" name="last_attended_class" class="form-control" id="exampleInputPassword1" placeholder="Post Doc ">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Admited in class</label>
                          <input type="number" name="admited_class" class="form-control" id="exampleInputPassword1" placeholder="Rocat Science">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputPassword1">Permanent Home Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="home_address" placeholder="XYZ Street 123 Home  ">
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">District</label>
                          <select class="custom-select form-control-border" name="district" id="exampleSelectBorder">
                            <option>Peshware</option>
                            <option>Lahore</option>
                            <option>Karcha </option>
                          </select>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Tehsil</label><select class="custom-select  form-control-border" name="tehsil" id="exampleSelectBorder">
                            <option>Peshware</option>
                            <option>Lahore</option>
                            <option>Karcha </option>
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Class </label>
                          <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="class ">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Roll NO</label>
                          <input type="number" name="roll_no" class="form-control" id="exampleInputPassword1" placeholder="Rocat Science">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputPassword1">monthley Fee </label>
                          <input type="text" name="monthly_fee" class="form-control" id="exampleInputPassword1" placeholder="class ">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                          <label for="exampleInputPassword1">Phone NO</label>
                          <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Rocat Science">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Student Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
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
