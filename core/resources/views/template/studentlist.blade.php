@extends('template.layouts.master')
@push('css')

@endpush
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   

     <!-- Main content -->
        <div class="container-fluid py-4">
            <form action="enhanced-results.html">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Search By Class:</label>
                                    <select onchange="st_list()" name="search_by_class" id="search_by_class" class="form-control select2">
                                        <option value="">All</option>
                                        <option value="narsery">Narsary</option>
                                        <option value="kg">Kg</option>
                                        <option value="one">1</option>
                                        <option value="two">2</option>
                                        <option value="three">3</option>
                                        <option value="four">4</option>
                                        <option value="five">5</option>
                                        <option value="six">6</option>
                                        <option value="seven">7</option>
                                        <option value="eight">8</option>
                                        <option value="nine">9</option>
                                        <option value="ten">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Search By Roll:</label>
                                    <input onkeyup="st_list()" class="form-control" type="number" name="search_by_roll" id="search_by_roll">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Sort Order:</label>
                                    <select  class="form-control select2" >
                                        <option selected>ASC</option>
                                        <option>DESC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input onkeyup="st_list()" name="search_by_name" id="search_by_name" type="search" class="form-control form-control-lg " placeholder="Search By Name" >
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <!-- Table -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Student List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   
                  <tr>
                    <th>Student Name</th>
                    <th>Father Name</th>
                    <th>Class</th>
                    <th>Phone NO</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody class="show_list">

                  </tbody>
                  <tbody class="hide_list">
                  @forelse($student as $student)
                  <tr>
                    <td>{{$student->full_name}}</td>
                    <td>{{$student->father_name}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->phone}}</td>
                    <td><img src="{{asset('assets/students/images')}}/{{$student->image}}" alt=""></td>
                    <td>
                    <a class="btn btn-primary btn-sm view" href="{{url('/fee/form/')}}/{{$student->id}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                    </td>
                  </tr>
                  
                  @empty
                  @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
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
  </div>
  <script src="{{asset('assets/template/plugins/jquery/jquery.min.js')}}"></script>
<script>
  function st_list(){
    var search_by_class = $("#search_by_class").val();
    var search_by_roll = $("#search_by_roll").val();
    var search_by_name = $("#search_by_name").val();
    $('.hide_list').hide();
    $.ajax({
      type: "post",
      url: "{{url('/ajax')}}",
      data:{
        search_by_name: search_by_name,
        search_by_class: search_by_class,
        search_by_roll: search_by_roll,
      },
      success:function(data){
        if(data.length > 0){
          $(".show_list").html("");
          $.each(data,function(index,value){
          var image = "{{url('/assets/students/images')}}/"+value.image;
          var slug = "{{url('/fee/form')}}/"+value.id;
          $('.show_list').append(' <tr> <td>'+value.full_name+'</td> <td>'+value.father_name+'</td> <td>'+value.class+'</td> <td>'+value.phone+'</td> <td><img src="'+image+'" alt=""></td> <td> <a class="btn btn-primary btn-sm view" href="'+slug+'"> <i class="fas fa-folder"> </i> View </a> <a class="btn btn-info btn-sm" href="#"> <i class="fas fa-pencil-alt"> </i> Edit </a> <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a> </td> </tr>');
        });
        }else{
          $('.show_list').html("<h3>Not Found !</h3>");
        }
        
      },
      error:function(data){
        console.log("error"+data);
      }
    })
  }
</script> 
@endsection


