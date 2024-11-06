@extends('studentdata.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Show Student Data Details
                        <a href="{{url('studentdata')  }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="mb-3">
                        <label for="student_name" class="fw-bold fs-5">Student Name</label>
                        <p>
                            {{$studentdata->student_name}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="student_email" class="fw-bold fs-5">Student Email</label>
                        <p>
                            {{$studentdata->student_email}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="date_of_birth" class="fw-bold fs-5">Date of Birth</label>
                        <p>
                            {{$studentdata->date_of_birth}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="fw-bold fs-5">Gender</label>
                        <p>
                            {{$studentdata->gender}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="enrollment_number" class="fw-bold fs-5">Enrollment Number</label>
                        <p>
                            {{$studentdata->enrollment_number}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="fw-bold fs-5">Course</label>
                        <p>
                            {{$studentdata->course}}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="enrollment_date" class="fw-bold fs-5">Enrollment Date</label>
                        <p>
                            {{$studentdata->enrollment_date}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection