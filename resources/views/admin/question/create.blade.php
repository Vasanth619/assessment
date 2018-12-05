@extends('admin.app')

@section('content')
   
	<div class="utils__content">
      <section class="card">
		<div class="row">
			<div class="col-md-3">
				 <div class="card-body">
				<form  action="{{ url('admin/store_question') }}" method="post" id="new_question">
		     	 @csrf

		     	 <div class="form-group"> 
		     	 <label class="form-label">Category</label>	
				     <select class="form-control" name="question_category" id="main_category">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                         @endforeach
                    </select>
				 </div>

					<div class="form-group">
					<label class="form-label">Sucategory</label>
	                    <select class="form-control" name="question_subcategory" id="question_subcategory">
	                    	<option value="">Select Subcategory</option>
	                    </select>
                     </div>
					
			         <div class="form-group">
                            <label class="form-label">Status</label>
                            <select name="question_status" id="question_status" class="form-control" data-validation="[NOTEMPTY]" required>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                            
                            </select>
                     </div>
						
						
							<div class="alert alert-danger alert-dismissible fade show" role="alert"id="error_category" style="display: none;">
							    <span id="error_category_text"></span>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
						

                  </div>    
			</div>
			<div class="col-md-9">
				
		    <div class="card-header">
		        <span class="utils__title">
		            <strong>Question</strong>
		        </span>
		    </div>
		    <div class="card-body">
		     
		     
		         <div class="form-group"> 
		             <div class="input-append input-group"> 
		               <textarea  class="form-control" id="question_name" placeholder="" name="question_name"></textarea>
		             </div>
		         </div>

				<div class="row">
			         <div class="form-group col-md-10"> 
			             <div class="input-append input-group"> 

			             	    <label class="utils__control utils__control--radio">
			                        <input type="radio" class="correct_answer" name="correct_answer" value="0">
			                        <span class="utils__control__indicator"></span>
			                    </label>
			               <textarea  class="form-control question_choice" placeholder="" name="answer[]"></textarea>
			             </div>
			         </div>
					<div class="col-md-1">
			         <!-- <button type="button" class="btn btn-icon btn-outline-primary add_newchoice"><i class="fa fa-plus" aria-hidden="true"></i></button> -->
			        </div> 
				</div>	
				
				<div class="row">
			         <div class="form-group col-md-10"> 
			             <div class="input-append input-group"> 

			             	    <label class="utils__control utils__control--radio">
			                        <input type="radio" class="correct_answer" name="correct_answer" value="1">
			                        <span class="utils__control__indicator"></span>
			                    </label>
			               <textarea  class="form-control question_choice" placeholder="" name="answer[]"></textarea>
			             </div>
			         </div>
					<div class="col-md-1">
			         <button type="button" class="btn btn-icon btn-outline-primary add_newchoice"><i class="fa fa-plus" aria-hidden="true"></i></button>
			        </div> 
				</div>

				<div id="append_template"></div>
					
				<div class="alert alert-danger alert-dismissible fade show" id="error_question" role="alert" style="display: none;">
				<span id="error_question_text"></span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
	
				<div class="float-right"> 
				
					<button class="btn btn-primary ladda-button mr-2 mb-2" id="submit_question" type="button" >Save</button>
					
			   </div>

			  </form> 
		    </div>
		  
			</div>
		</div>

		</section>

		</div>

                

<script>
	$('#main_category').change(function() {
			$.ajax({
				url: '{{ url("/admin/get_subcategory") }}',
				method: 'get',
				data: {
					category: $(this).val(),
					_token: '{{ csrf_token() }}'
				},
				dataType: 'html',
				success: function(response) {
					$('#question_subcategory').empty().html(response);
				}
			});
		});
</script>
<script src="{{ asset('js/admin/question.js') }}"></script>

@endsection


<div class="row choiceTemplate" style="display: none" id="choice_template">
			         <div class="form-group col-md-10"> 
			             <div class="input-append input-group"> 
			             	     <label class="utils__control utils__control--radio">
			                        <input type="radio" class="correct_answer" name="correct_answer">
			                         <span class="utils__control__indicator"></span>
			                    </label> 
			               <textarea  class="form-control right_choice" placeholder="" name="answer[]"></textarea>
			             </div>
			         </div>
					<div class="col-md-1">
			         <button type="button" class="btn btn-icon btn-outline-primary remove_choice"><i class="fa fa-minus" aria-hidden="true"></i></button>
			        </div> 
				</div>