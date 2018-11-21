@extends('admin.app')


@section('content')

<section class="card">
    <div class="card-header">
        <span class="utils__title">

            <strong>Total Questions</strong>
                    <select class="selectpicker">
                        <option>Select Category</option>
                        <option value="">Drupal</option>
                        <option value="">PHP</option>
                        <option value="">Java</option>
                    </select>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h5 class="text-black"><strong>Basic Editable Table</strong></h5>
                <p class="text-muted">Element: read <a href="http://mindmup.github.io/editable-table/" target="_blank">official documentation<small><i class="icmn-link ml-1"></i></small></a></p> -->
                <div class="table-responsive mb-5">
                    <table class="table table-hover nowrap editable-table" id="example1" style="cursor: pointer;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td tabindex="1">1</td>
                            <td tabindex="1">5516 Adolfo Green</td>
                            <td tabindex="1">Littelhaven</td>
                            <td tabindex="1">85</td>
                            <td tabindex="1">Inactive</td>
                            <td tabindex="1">Edit / Delete</td>
                        </tr>
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


