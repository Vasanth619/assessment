@extends('admin.app')

@section('content')
   
	<div class="utils__content">
      <section class="card">
				
		    <div class="card-header">
		        <span class="utils__title">
		            <strong>New Test</strong>
		        </span>
		    </div>
		    <div class="card-body">
				
				<div class="row">

			        <div class="col-md-4">
                        <input type="password" class="form-control" placeholder="Enter test name">
                    </div>
                    <div class="col-md-4">
                        <input type="password" class="form-control" placeholder="Default Input">
                    </div>
                    <div class="col-md-4">
                        <input type="password" class="form-control" placeholder="Default Input">
                    </div>

				</div>
				 
		    </div>

	  </section>
	</div>

 

@endsection

