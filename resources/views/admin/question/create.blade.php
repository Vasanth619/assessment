@extends('admin.app')

@section('content')
   
	<div class="utils__content">
      <section class="card">
		<div class="row">
			<div class="col-md-3">
				 <div class="card-body">
				     <select class="selectpicker">
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
		     
		     <form action="" method="post">
		         <div class="form-group"> 
		             <div class="input-append input-group"> 
		               <input type="text" class="summernote" pla>
		             </div>
		         </div>


		         <div class="form-group"> 
		             <div class="input-append input-group"> 

		             	    <label class="utils__control utils__control--radio">
		                        <input type="radio" name="radio">
		                        <span class="utils__control__indicator"></span>
		                    </label>

		               <input type="text" class="summernote">
		             </div>
		         </div>


		         <div class="form-group"> 
		             <div class="input-append input-group"> 

		             	    <label class="utils__control utils__control--radio">
		                        <input type="radio" name="radio">
		                        <span class="utils__control__indicator"></span>
		                    </label>

		               <input type="text" class="summernote">
		             </div>
		         </div>


		         <div class="form-group"> 
		             <div class="input-append input-group"> 

		             	    <label class="utils__control utils__control--radio">
		                        <input type="radio" name="radio">
		                        <span class="utils__control__indicator"></span>
		                    </label>

		               <input type="text" class="summernote">
		             </div>
		         </div>
				
				<div class="float-right"> 
					<a class="btn btn-primary ladda-button mr-2 mb-2" data-style="expand-left"><span class="ladda-label">Save</span><span class="ladda-spinner"></span></a>

					<a class="btn btn-primary ladda-button mr-2 mb-2" data-style="expand-left"><span class="ladda-label">Save and Next</span><span class="ladda-spinner"></span></a>
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
		    ['misc', ['table','undo', 'redo', 'print', 'help', 'fullscreen']]
		  ],
      });
</script>



@endsection