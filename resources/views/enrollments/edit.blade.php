@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        <label>Enrollment No</label></br>
        <input type="text" name="enrollment_no" id="enrollment_no" value="{{$enrollments->name}}" class="form-control"></br>
        <label>Batch Id</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{$enrollments->course_id}}" class="form-control"></br>
        <label>Student Id</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$enrollments->start_date}}" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="date" name="join_date" id="join_date" value="{{$enrollments->start_date}}" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$enrollments->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop