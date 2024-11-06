@extends('studentdata.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Student Data
                        <a href="{{url('studentdata')}}" class="btn btn-danger float-end">Back</a>
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

                    <form action="{{route('studentdata.update', $studentdata->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="student_name">Student Name</label>
                            <input type="text" name="student_name" id="student_name" class="form-control" value="{{$studentdata->student_name}}" placeholder="Enter student name" required />
                        </div>

                        <!-- Removed Student Email and Enrollment Number Fields -->

                        <div class="mb-3">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{$studentdata->date_of_birth}}" required />
                        </div>
                        
                        <div class="mb-3">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="male" {{ $studentdata->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $studentdata->gender == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ $studentdata->gender == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        

                        <div class="mb-3">
                            <label for="course">Course</label>
                            <input type="text" name="course" id="course" class="form-control" value="{{$studentdata->course}}" placeholder="Enter course name" required />
                        </div>

                        <div class="mb-3">
                            <label for="enrollment_date">Enrollment Date</label>
                            <input type="date" name="enrollment_date" id="enrollment_date" class="form-control" value="{{$studentdata->enrollment_date}}" required />
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
