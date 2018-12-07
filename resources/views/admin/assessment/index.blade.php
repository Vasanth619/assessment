@extends('admin.app')


@section('content')

<section class="card">
    <div class="card-header">
        <span class="utils__title">
            <strong>Total Assessments</strong>
            <a class="btn btn-icon btn-outline-primary mr-2 mb-2 float-right" href="{{ url('/admin/add_assessment') }}"><i class="icmn-rocket" aria-hidden="true"></i></a>
        </span>
    </div>
           <div class="card-body">
                <div class="table-responsive mb-5">
                    <table class="table table-hover nowrap editable-table" id="example1" style="cursor: pointer;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Assessment Name</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Difficulty Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                     @php
                       $i = 1;
                     @endphp

                    @foreach($assessments as $assessment)
                         <tr>
                            <td tabindex="1">{{ $i++ }}</td>
                            <td tabindex="1">{{ $assessment->test_name }}</td>
                            <td tabindex="1">{{ $assessment->category_name }}</td>
                            <td tabindex="1">{{ $assessment->subcategory_name }}</td>
                            <td tabindex="1">{{ $assessment->difficult_level }}</td>
                            <td><a edit-id="{{ $assessment->id }}" class="edit_category" data-toggle="modal" data-target="#example2">Edit</a> / <a delete-id="{{ $assessment->id }}" class="delete_category">Delete</a></td>
                        </tr>
                    @endforeach
                        </tbody>
                        
                    </table>
                <input style="position: absolute; display: none;"></div>
            </div>
        </div>
                    <div class="modal" role="dialog" tabindex="-1" role="dialog" id="custom_prodtemp">
            </div>  

    </div>


        

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>


@endsection


