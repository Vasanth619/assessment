@extends('admin.app')


@section('content')

<section class="card">
    <div class="card-header">
        <span class="utils__title">
            <strong>Total Categories</strong>
            <button type="button" class="btn btn-icon btn-outline-primary mr-2 mb-2 float-right" id="add_category" data-toggle="modal" data-target="#add_newcategory"><i class="icmn-rocket" aria-hidden="true"></i></button>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h5 class="text-black"><strong>Basic Editable Table</strong></h5>
                <p class="text-muted">Element: read <a href="http://mindmup.github.io/editable-table/" target="_blank">official documentation<small><i class="icmn-link ml-1"></i></small></a></p> -->
                
                <div class="modal fade" id="add_newcategory" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/admin/add_questioncategory') }}" method="post">
                                  @csrf
                                <div class="form-group">
                                    <label class="form-label">Category Name</label>
                                    <input name="category_name" type="text" class="form-control" data-validation="[NOTEMPTY]" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select name="category_status" class="form-control" data-validation="[NOTEMPTY]" required>
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
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($categories as $category)

                     
                        <tr>
                            <td tabindex="1">1</td>
                            <td tabindex="1">{{ $category->name }}</td>
                            <td tabindex="1">{{ $category->updated_at }}</td>
                            <td tabindex="1">{{ $category->created_at }}</td>
                            <td tabindex="1">{{ $category->status }}</td>
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





</script>



<script>
    
/* jquery.validate plagin added using cdn. Go to jqueryvalidation.org to see what methods are provided */
/* Create custom validation method */
$.validator.addMethod("startWithA", function(value, element) {
    return /^A/.test(value);
}, "Field must start with A");
$("form").validate({
    rules: {
        fullname: {
            required: true
            //minlength: 5,
            //maxlength: 10,
            //email: true
            //startWithA: true
        },
        password: {
            required: true
        },
        pet: {
            required: true,
            maxlength: 2
        }
    },
// Custom message for error
    messages: {
        fullname: {
            required: "You must enter your fullname"
        }
    },
    messages: {
        pet: {
            required: "You must select at least 1 box",
            maxlength: "You must select no more then 2 boxes"
        }
    },
    highlight: function(element, errorClass) {
        $(element).closest(".form-group").addClass("has-error");
    },
    unhighlight: function(element, errorClass) {
        $(element).closest(".form-group").removeClass("has-error");
    },
    errorPlacement: function (error, element) {
        error.appendTo(element.parent().next());
    },
    errorPlacement: function (error, element) {
        if(element.attr("type") == "checkbox") {
            element.closest(".form-group").children(0).prepend(error);
        }
        else
            error.insertAfter(element);
    }
});
</script>

@endsection


