@extends('studentdata.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Add Student Data
                        <a href="{{url('studentdata')  }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('studentdata.store')}}" method="POST">
                        @csrf @csrf


                        <div class="mb-3">
                            <label for="student_name">Student Name</label>
                            <input type="text" name="student_name" id="student_name" class="form-control" placeholder="Enter student name" required />
                        </div>
                        <div class="mb-3">
                            <label for="student_email">Student Email</label>
                            <input type="email" name="student_email" id="student_email" class="form-control" placeholder="Enter student email" required />
                        </div>
                        <div class="mb-3">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="enrollment_number">Enrollment Number</label>
                            <input type="text" name="enrollment_number" id="enrollment_number" class="form-control" placeholder="Enter enrollment number" required />
                        </div>
                        <div class="mb-3">
                            <label for="course">Course</label>
                            <input type="text" name="course" id="course" class="form-control" placeholder="Enter course name" required />
                        </div>
                        <div class="mb-3">
                            <label for="enrollment_date">Enrollment Date</label>
                            <input type="date" name="enrollment_date" id="enrollment_date" class="form-control" required />
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