@extends('layout')

@section('content')

<div class="setup">
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 7 Crud Application</h2>

            </div>

            <div class="pull-right">
              {{ method_field('POST') }}

                <a class="btn btn-primary" href="{{ route('students.create') }}"> Create new students</a>

            </div>

        </div>

    </div>



    <!-- @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif -->



    <table class="table table-bordered">

        <tr>

            <th>ID</th>

            <th>Name</th>
            <th>Father Name</th>
            <th>Phone Number</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($students as $student)

        <tr>

            <td>{{$student->id}}</td>

            <td>{{ $student->name }}</td>

            <td>{{ $student->father_name }}</td>
            <td>{{ $student->phone_number }}</td>

            <td>

                <form action="{{ route('students.delete',['student_id' => $student->id]) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('students.detail',['student_id' => $student->id]) }}">Details</a>



                    <a class="btn btn-primary" href="{{ route('students.edit',['student_id' => $student->id]) }}">Edit</a>


                    @csrf

                    @method('POST')


                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



@endsection
</div>
