@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Form') }}</h1>
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

                    <div style="background-color:#006266; color:white;" class="alert alert-info">
                    Employee Table
                    </div>

                    <div class="card">
                        <div class="card-body p-0">
                               
                            <table class="table ">
                                <thead >
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Courty</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Zip</th>
                                        <th>Birthday</th>
                                        <th>Hired Date</th>
                                        <th>Department</th>
                                          <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $infos)
                                    <tr>
                                        <td>{{ $infos->id }}</td>
                                        <td>{{ $infos->firstname }}</td>
                                        <td>{{ $infos->middlename }}</td>
                                        <td>{{ $infos->lastname }}</td>
                                        <td>{{ $infos->address }}</td>
                                        <td>{{ $infos->country }}</td>
                                        <td>{{ $infos->state }}</td>
                                        <td>{{ $infos->city }}</td>
                                        <td>{{ $infos->zip }}</td>
                                         <td>{{ $infos->birth }}</td>
                                        <td>{{ $infos-> hired }}</td>
                                        <td>{{ $infos->department}}</td>
                                  
                                        <td scope="col">

                            <a href="{{ url('employee/'.$infos->id.'/edit')}}">
                            <button style="background-color:#009432; color:white;" class="btn btn-info btn-sm">
                            <i  class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                           
                            </a>

                                </td>

                                <td>

                                <a href="{{ url('employee/'.$infos->id.'/delete')}}">
                            <button style="background-color:red; color:white;" class="btn btn-info btn-sm">
                            <i  class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete
                                </button>
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