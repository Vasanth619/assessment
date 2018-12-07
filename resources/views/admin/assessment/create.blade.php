@extends('admin.app')

@section('content')
   
<style>
	.astrik, .error {
		color: red;
	}
</style>

	<div class="utils__content">
<!-- START: ecommerce/product-edit -->
<div class="card">
    <div class="card-header">
        <span class="utils__title">
            <strong>New Test</strong>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
            	<form id="newassessment" action="{{ url('create_assessment') }}"  method="post" name="newassessment">
                    @csrf()
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <div class="form-input-icon form-input-icon-right">
                            <label for="testname">Test Name <span class="astrik">*</span></label>
                            <input id="testname" class="form-control" name="testname" type="text" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right">
	                    <label for="category">Category <span class="astrik">*</span></label>
	                    <select class="form-control height-200" id="category" name="category">
	                        <option value="">Select Category</option>
	                    </select>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
	                        <label for="subcategory">Subcategory <span class="astrik">*</span></label>
		                    <select class="form-control height-200" id="subcategory" name="subcategory">
		                        <option value="">Select subcategory</option>
		                    </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
                            <label for="instruction">Instruction <span class="astrik">*</span></label>
		                    <select class="form-control height-200" id="instruction" name="instruction">
                                <option value="">Select instruction</option>
                                 <option value="2">Select instruction</option>
		                    </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
                            <label for="duration">Test Duration (in Min) <span class="astrik">*</span></label>
                            <input type="number" id="duration" name="duration" class="form-control" value="10">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
	                    <label for="difficulty">Difficulty Level <span class="astrik">*</span></label>
	                    <select class="form-control height-200" name="difficulty">
	                        <option value="1">Difficult</option>
	                        <option value="2">Easy</option>
	                        <option value="3">Normal</option>
	                    </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
                            <label for="totalquestion">Total Questions <span class="astrik">*</span></label>
                            <input type="number" id="totalquest" name="totalquest" class="form-control" value="10">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
	                    <label class="form-control-label" for="l20">Total Marks <span class="astrik">*</span></label>
	                    <input type="number" class="form-control" id="mark" name="mark" min="10">
                        </div>
                    </div>
                </div>
												
				<hr>
				
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
							<label class="utils__control utils__control--checkbox">Mandatory to attempt all question
								<input type="checkbox" name="mandetory" value="1">
							<span class="utils__control__indicator"></span>
							</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
	                      <label class="utils__control utils__control--checkbox">Allow user to move back and forward
								<input type="checkbox" name="movement" value="1">
							<span class="utils__control__indicator"></span>
							</label>
                        </div>
                    </div>
                </div>
				<hr>

				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
							<label class="form-control-label">Feedback for pass
							</label>
							<textarea class="form-control" name="pass_feedback"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
	                      <label class="form-control-label">Feedback for fail
							</label>
							<textarea class="form-control" name="fail_feedback"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
							<label class="form-control-label">Message On Submit Test
							</label>
							<textarea class="form-control" name="submit_message"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
	                      <label class="form-control-label">Pass /Fail Marks (%)
							</label>
								<label class="utils__control utils__control--radio">Yes
								<input type="radio" name="percentage" value="1">
								<span class="utils__control__indicator"></span>
								</label>

								<label class="utils__control utils__control--radio">No
								<input type="radio" name="percentage" checked value="0">
								<span class="utils__control__indicator"></span>
								</label>
                        </div>
                    </div>
                </div>

                <div class="form-group float-right">
                     <a href="{{ url('/admin/assessment') }}" class="btn btn-default">Back</a>
                     <button type="submit" class="btn btn-primary width-150">Submit</button>
                </div>
				
				</form>
            </div>

            <div class="col-lg-4">
               
            </div>

        </div>
    </div>
</div>

</div>
 
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
<script>
  (function($) {
    "use strict";
    $(function () {

    	

      var validate = $("#newassessment").validate({
      	rules: {
      		testname: "required",
      		category: "required",
      		subcategory: "required",
      		instruction: "required",
      		duration: "required",
            totalquest: "required",
      		mark: "required",
      	},
      	messages: {
      		testname: "Test name is required",
      		category: "Category is required",
      		subcategory: "Category is required",
      		instruction: "Instruction is required",
      		duration: "Duration is required",
            totalquest: "Total question is required",
      		mark: "Total mark is required",
      	},
      	submitHandler: function(form) {
        $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            dataType: 'json',
            success: function(response) {
                if(response.status == 1) {
                	swal(response.message);
                	setTimeout(function(){
                		location.reload();
                	}, 2000);
                }
                else {
                	swal(response.message);
                }
            }            
        });
    }
      });
    //load category
    $.ajax({
    	url: "{{ url('load_categories') }}",
    	method: 'get',
    	data: {
    		"_token": "{{ csrf_token() }}",
    	},
    	dataType: "json",
    	success: function(response) {
    		 $.each(response, function (i, item) {
			    $('#category').append($('<option>', { 
			        value: item.id,
			        text : item.name 
			    }));
            });
    	}
    });
   //get sub category
   $('body').on('change', '#category', function() {
    $.ajax({
        url: "{{ url('load_subcategories') }}",
        method: 'get',
        data: {
            "_token": "{{ csrf_token() }}",
            "category": $(this).val(),
        },
        dataType: "json",
        success: function(response) {
             $('#subcategory').empty();
             $.each(response, function (i, item) {
                $('#subcategory').append($('<option>', { 
                    value: item.id,
                    text : item.name 
                }));
            });
        }
    });
    });

});                 
  })(jQuery)
</script>


@endsection

