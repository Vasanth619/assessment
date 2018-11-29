@extends('admin.app')


@section('content')

<section class="card">
    <div class="card-header">
        <span class="utils__title">
            <strong>Sub Categories</strong>
            <button type="button" class="btn btn-icon btn-outline-primary mr-2 mb-2 float-right" id="add_category" data-toggle="modal" data-target="#add_new_subcategory"><i class="icmn-rocket" aria-hidden="true"></i></button>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h5 class="text-black"><strong>Basic Editable Table</strong></h5>
                <p class="text-muted">Element: read <a href="http://mindmup.github.io/editable-table/" target="_blank">official documentation<small><i class="icmn-link ml-1"></i></small></a></p> -->
                
                <div class="modal fade" id="add_new_subcategory" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Subcategory</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/admin/add_question_sub_category') }}" method="post" id="new_sub_category">
                                  @csrf

                                <div class="form-group">
                                    <label class="form-label">Main Category</label>
                                    <select name="category_status" class="form-control" data-validation="[NOTEMPTY]" >
                                    <option>Select</option>
                                    @foreach($categories as $category) 
                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>
                                

                                <div class="form-group">
                                    <label class="form-label">Category Name</label>
                                    <input name="sub_category_name" type="text" class="form-control" data-validation="[NOTEMPTY]">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select name="sub_category_status" class="form-control" data-validation="[NOTEMPTY]">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                    
                                    </select>
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


                <div class="table-responsive mb-5">
                    <table class="table table-hover nowrap editable-table" id="example1" style="cursor: pointer;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Main Category Name</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
						   @php
						      $i = 1;
						   @endphp


                           @foreach($subcategories as $subcategory)	
                        	<tr>
                        		<td>{{ $i++ }}</td>
                        		<td>{{ $subcategory->name }}</td>
                        		<td>{{ $subcategory->category_name }}</td>
                        		<td>{{ $subcategory->created_at }}</td>
                        		<td>{{ $subcategory->updated_at }}</td>
                        		<td>{{ $subcategory->status }}</td>
                        		<td><a edit-id="{{ $subcategory->id }}" class="edit_subcategory">Edit</a> / <a delete-id="{{ $subcategory->id }}" class="delete_subcategory">Delete</a></td>
                        	</tr>
                           @endforeach 	
                        </tbody>
                        
                    </table>
                <input style="position: absolute; display: none;"></div>
            </div>
        </div>
        
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>

<script>
  (function($) {
    "use strict";
    $(function () {

      $('#example1').DataTable({
        responsive: true
      });


       $('#new_category').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            errorListClass: 'form-control-error',
            errorClass: 'has-danger'
          }
        }
      });


    });
  })(jQuery)


   
   $(function() {
   	  $('#new_sub_category').submit(function() {
   	  	  $('#new_sub_category').validate();
   	  }); 
   });


</script>


<script>
 
 $('body').on('click', '.delete_subcategory', function() {
 	var delete_category = $(this).attr('delete-id');
	swal({
		title: "Are you sure?",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "Yes, delete it!",
		cancelButtonText: "No, cancel plx!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm) {
		if (isConfirm) {
			$.ajax({
				url: '{{ url("/admin/delete_subcategory") }}',
				method: 'post',
				data:{
					'_token': "{{ csrf_token() }}",
					'data_id':  delete_category,
					
				},
				dataType: 'json',
				success: function(response) {
					if(response.status == 1) {
						swal(response.message ,"success");

						location.reload();
					}
					else if(response.status == 0) {
						swal(response.message ,"error");

						location.reload();
					}
				}
			});
	} else {
		
	}
	});

});

</script>


@endsection


