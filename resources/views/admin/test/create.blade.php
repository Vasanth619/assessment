@extends('admin.app')

@section('content')
   
<style>
	.astrik {
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
                            <input id="validation-testname" class="form-control" name="testname" type="text" data-validation="[NOTEMPTY]">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right">
	                    <label for="category">Category <span class="astrik">*</span></label>
	                    <select class="form-control height-200" id="validation-category" name="category" data-validation="[NOTEMPTY]">
	                        <option value="">Select Category</option>
	                    </select>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
	                        <label for="subcategory">Subcategory <span class="astrik">*</span></label>
		                    <select class="form-control height-200" id="validation-subcategory" name="subcategory" data-validation="[NOTEMPTY]">
		                        <option value="">Select subcategory</option>
		                    </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
                            <label for="instruction">Instruction <span class="astrik">*</span></label>
		                    <select class="form-control height-200" id="validation-instruction" name="instruction" data-validation="[NOTEMPTY]">
                                <option value="">Select instruction</option>
		                        <option value="1">instruction</option>
		                    </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
                            <label for="duration">Test Duration (in Min) <span class="astrik">*</span></label>
                            <input type="number" id="validation-duration" name="duration" class="form-control" data-validation="[NOTEMPTY]" value="10">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
	                    <label for="difficulty">Difficulty Level <span class="astrik">*</span></label>
	                    <select class="form-control height-200" id="l20">
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
                            <input type="number" id="validation-totalquest" name="totalquest" class="form-control" data-validation="[NOTEMPTY]" value="10">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-input-icon form-input-icon-right form-group">
	                    <label class="form-control-label" for="l20">Total Marks <span class="astrik">*</span></label>
	                    <input type="number" class="form-control" id="validation-mark" name="mark" data-validation="[NOTEMPTY]" min="10">
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
							<textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
	                      <label class="form-control-label">Feedback for fail
							</label>
							<textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
							<label class="form-control-label">Message On Submit Test
							</label>
							<textarea class="form-control"></textarea>
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
                     <button type="button" class="btn btn-default">Back</button>
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
 

<script>
  (function($) {
    "use strict";
    $(function () {
      // Form Validation
      $('#newassessment').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            errorListClass: 'form-control-error',
            errorClass: 'has-danger'
          },
        }
      });

      // Show/Hide Password
      $('.password').password({
        eyeClass: '',
        eyeOpenClass: 'icmn-eye',
        eyeCloseClass: 'icmn-eye-blocked'
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
			    $('#validation-category').append($('<option>', { 
			        value: item.id,
			        text : item.name 
			    }));
    //console.log(item.name);
            });
    	}
    });
   //get sub category
   $('body').on('change', '#validation-category', function() {
    $.ajax({
        url: "{{ url('load_subcategories') }}",
        method: 'get',
        data: {
            "_token": "{{ csrf_token() }}",
            "category": $(this).val(),
        },
        dataType: "json",
        success: function(response) {
             $('#validation-subcategory').empty();
             $.each(response, function (i, item) {
                $('#validation-subcategory').append($('<option>', { 
                    value: item.id,
                    text : item.name 
                }));
    //console.log(item.name);
            });
        }
    });
    });

});                 
  })(jQuery)
</script>


<script>
    $(function() {
        $('#newassessment').submit(function(e) {
            alert();
        e.preventDefault();
        /*var form = $(this);
        var url = form.attr('action');

        $.ajax({
            url: "{{ url('create_assessment') }}",
            method: 'post',
            data: {
                '_token': '{{ csrf_token() }}',
                'assment_data': form.serialize(),
            },
            success: function(response) {

            }
        });*/
        
        
    });
    });
</script>
@endsection

