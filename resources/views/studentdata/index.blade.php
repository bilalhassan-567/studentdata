@extends('studentdata.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection