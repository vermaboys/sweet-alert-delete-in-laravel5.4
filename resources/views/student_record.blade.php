@extends('layouts.app')

@section('content')
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student's Record</div>
			</div>
			<table class="table table-hover table-bordered table-responsive">
				<thead>
					<tr>
						<th>Roll Number</th>
						<th>Student Name</th>
						<th>Class</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $result)
					<tr>
						<td>{{$result->roll_no}}</td>
						<td>{{$result->name}}</td>
						<td>{{$result->class}}</td>
						<td><button onclick="deleteStudent('{{$result->id}}')" class="btn btn-danger">delete</button></td>
					</tr>
					@endforeach
				</tbody>
			</table>
        </div>
    </div>
</div>
<script type="text/javascript">
function deleteStudent(id){
	swal({
  title: 'Be sure to perform this action?',
  text: 'This action can not be undone',
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#DD6B55',
  confirmButtonText: 'Remove!',
  cancelButtonText: 'Cancel',
  closeOnConfirm: false,
  closeOnCancel: false
},

function(isConfirm) {
    if (isConfirm) {
    	 $.ajax({
               type:'get',
               url:'<?php echo url("delete-student"); ?>/'+id,
               success:function(data){
               		location.reload();
				}
            });
       
    }else {
        swal("Cancel", "This Student has not removed from records.", "error");
    }
});
}
</script>
@endsection
