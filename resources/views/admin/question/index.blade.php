@extends('admin.app')


@section('content')

<section class="card">
    <div class="card-header">
        <span class="utils__title">

            <strong>Total Questions</strong>
                    <select class="selectpicker">
                        <option>Select Category</option>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                         @endforeach
                    </select>

                    <a href="{{ url('admin/new_question') }}"><button type="button" class="btn btn-icon btn-outline-primary mr-2 mb-2 float-right" id="add_category" data-toggle="modal" data-target="#add_newcategory"><i class="icmn-rocket" aria-hidden="true"></i></button></a>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
               
                <div class="table-responsive mb-5">
                    <table class="table table-hover nowrap editable-table" id="example1" style="cursor: pointer;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                           $i = 1; 
                        @endphp

                        @foreach($questions as $question)    
                        <tr>
                            <td tabindex="1">{{ $i++ }}</td>
                            <td tabindex="1">{{ $question->question }}</td>
                            <td tabindex="1">{{ $question->cat_name }}</td>
                            <td tabindex="1">{{ $question->subcat_name }}</td>
                            <td tabindex="1">{{ ($question->status == 1)? "Active" : "Inactive" }}</td>
                            <td tabindex="1">Edit / Delete</td>
                        </tr>
                        @endforeach
                        </tbody>
                        
                    </table>
                <input style="position: absolute; display: none;"></div>
            </div>
        </div>
        
    </div>
</section>


<script>
  (function($) {
    "use strict";
    $(function () {

      $('#example1').DataTable({
        responsive: true
      });

    });
  })(jQuery)
</script>
@endsection


