@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('USERS') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class = "container">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

             
                <div>
                
                    <div style="background-color:#006266; color:white;" class="alert alert-info">
                 
                   User Table

                   <button style="align:right; background-color:blue; color:white; width:10%; margin:0;" href="{{url('home')}}" type="submit" class="btn btn-primary">Add</button>


                   
                 
                   <div>
                    <div>
</div>



                    
</div>

                    </div>


                  

</div>


                    <div class="card">
                        <div class="card-body p-0">
                               
                            <table class="table ">
                                <thead >
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                          <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $infos)
                                    <tr>
                                        <td>{{ $infos->id }}</td>
                                        <td>{{ $infos->name }}</td>
                                        <td>{{ $infos->email }}</td>
                                  
                                        <td scope="col">

                            <a href="{{ url('employee/'.$infos->id.'/edit')}}">
                            <button style="background-color:#009432; color:white;" class="btn btn-info btn-sm">
                            <i  class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                           
                            </a>

                                </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                       
                    </div>

            </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->



</div>

 <!-- /.content -->
@endsection