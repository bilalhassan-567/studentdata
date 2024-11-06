@extends('studentdata.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            @session('success')
            
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            
            @endsession
            <div class="card">
                <div class="card-header">
                    <h4> Student list
                        <a href="{{url('studentdata/create')  }}" class="btn btn-primary float-end">Add Student data</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-stiped table-bordered">
                        <thead>
                            <tr>
                                <th>student_name</th>
                                <th>student_email</th>
                                <th>date_of_birth</th>
                                <th>gender</th>
                                <th>enrollment_number</th>
                                <th>course</th>
                                <th>enrollment_date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentdata as $studentdata)
                            <tr>
                                <td>{{ $studentdata->student_name  }}</td>
                                <td>{{ $studentdata->student_email  }}</td>
                                <td>{{ $studentdata->date_of_birth  }}</td>
                                <td>{{ $studentdata->gender }}</td>
                                <td>{{ $studentdata->enrollment_number  }}</td>
                                <td>{{ $studentdata->course }}</td>
                                <td>{{ $studentdata->enrollment_date  }}</td>
                                <td>
                                    <a href="{{route('studentdata.edit', $studentdata->id )}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('studentdata.show', $studentdata->id)}}" class="btn btn-info">Show</a>

                                    <form action="{{route('studentdata.destroy', $studentdata->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                 </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection