@extends('layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Student Data</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>

            </div>

        </div>

    </div>



    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="frmAddRoles" method="post" action="{{ route('students.update',['student_id' => $student->id]) }}">
                               {{ csrf_field() }}
                               {{ method_field('POST') }}
                               <div class="m-portlet__body">
                                   <div class="form-group m-form__group row">
                                       <div class="col-lg-6">
                                           <label>Student Name</label>
                                          <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Name">
                                       </div>
                                       <div class="col-lg-6">
                                           <label>Father Name</label>
                                           <input type="text" name="father_name" value="{{ $student->father_name }}" class="form-control" placeholder="Father Name">
                                       </div>
                                       <div class="col-lg-6">
                                           <label>Student Address</label>
                                           <input type="text" name="address" value="{{ $student->address }}" class="form-control" placeholder="Address">
                                       </div>
                                       <div class="col-lg-6">
                                           <label>Email</label>
                                           <input type="text" name="email" value="{{ $student->email }}" class="form-control" placeholder="Email">
                                       </div>
                                       <div class="col-lg-6">
                                           <label>Student Phone Number</label>
                                           <input type="text" name="phone_number" value="{{ $student->phone_number }}" class="form-control" placeholder="Phone Number">
                                       </div>
                                       <div class="col-lg-6">
                                           <label>Student Fee</label>
                                           <input type="text" name="Fee" value="{{ $student->Fee }}" class="form-control" placeholder="Fee">
                                       </div>

                                   </div>
                               </div>

                               <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                    <div class="m-form__actions m-form__actions--solid">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                <a class="btn btn-secondary" href="{{url('index')}}">Cancel</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$student->id}}" name="student_id">

                           </form>


    </form>

@endsection
