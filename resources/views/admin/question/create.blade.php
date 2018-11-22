@extends('admin.app')

@section('content')
   
	<div class="utils__content">
      <section class="card">
		<div class="row">
			<div class="col-md-3">
				 <div class="card-body">
				<form action="{{ url('admin/store_question') }}" method="post">
		     	 @csrf 	
				     <select class="selectpicker" name="question_category">
                        <option>Select Category</option>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                         @endforeach
                    </select>
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
		               <textarea class="summernote" placeholder="" name="question_name"></textarea>
		             </div>
		         </div>


		         <div class="form-group"> 
		             <div class="input-append input-group"> 

		             	    <label class="utils__control utils__control--radio">
		                        <input type="radio" name="radio[]" value="1">
		                        <span class="utils__control__indicator"></span>
		                    </label>
		               <textarea class="summernote" placeholder="" name="answer[]"></textarea>
		             </div>
		         </div>


		         <div class="form-group"> 
		             <div class="input-append input-group"> 

		             	    <label class="utils__control utils__control--radio">
		                        <input type="radio" name="radio[]" value="2">
		                        <span class="utils__control__indicator"></span>
		                    </label>

		               <textarea class="summernote" placeholder="" name="answer[]"></textarea>
		             </div>
		         </div>


		         <div class="form-group"> 
		             <div class="input-append input-group"> 

		             	    <label class="utils__control utils__control--radio">
		                        <input type="radio" name="radio[]" value="3">
		                        <span class="utils__control__indicator"></span>
		                    </label>

		               <textarea class="summernote" placeholder="" name="answer[]"></textarea>
		             </div>
		         </div>
				
				<div class="float-right"> 
				
					<button class="btn btn-primary ladda-button mr-2 mb-2" type="submit" >Save</button>
					
			   </div>

			  </form> 
		    </div>
		  
			</div>
		</div>

		</section>

		</div>

<script>
      $('.summernote').summernote({
       	    placeholder: 'write here...',
		      toolbar: [
		    
		    ['para', ['style', 'ul', 'ol', 'paragraph']],
		    ['fontsize', ['fontsize']],
		    ['style', ['bold', 'italic', 'underline', 'clear']],
		    ['font', ['strikethrough', 'superscript', 'subscript']],
		    ['height', ['height']],
		    ['insert', ['link', 'picture', 'hr']],
		    ['misc', ['table','undo', 'redo', 'print', 'help', 'fullscreen']]
		  ],
      });
</script>



@endsection