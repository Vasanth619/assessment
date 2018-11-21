@extends('admin.app')


@section('content')

<section class="card">
    <div class="card-header">
        <span class="utils__title">
            <strong>Editable Tables</strong>
            <a href="http://mindmup.github.io/editable-table/" target="_blank" class="btn btn-sm btn-primary ml-2">Official Documentation <i class="icmn-link ml-1"><!-- --></i></a>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-black"><strong>Basic Editable Table</strong></h5>
                <p class="text-muted">Element: read <a href="http://mindmup.github.io/editable-table/" target="_blank">official documentation<small><i class="icmn-link ml-1"><!-- --></i></small></a></p>
                <div class="table-responsive mb-5">
                    <table class="table table-hover nowrap editable-table" id="example1" style="cursor: pointer;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td tabindex="1">Damon</td>
                            <td tabindex="1">5516 Adolfo Green</td>
                            <td tabindex="1">Littelhaven</td>
                            <td tabindex="1">85</td>
                            <td tabindex="1">2014/06/13</td>
                            <td tabindex="1">$553,536</td>
                        </tr>
                        </tbody>
                        
                    </table>
                <input style="position: absolute; display: none;"></div>
            </div>
        </div>
        
    </div>
</section>

@endsection


