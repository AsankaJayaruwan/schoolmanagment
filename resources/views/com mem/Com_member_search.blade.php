@extends('sidebar_header')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Registered Committee Member</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <!-- <h2>Add new student</h2> -->
                            <ol class="breadcrumb">
                                Committee Member Search
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select class="form-control">
                                            <option>Name</option>
                                            <option>Member Id</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" id="search-option1" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                            <br><br>

                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-0">
                                        <button class="btn btn-primary" type="button onclick=" showDiv()
                                        ">Advanced search</button>
                                    </div>
                                </div>
                                <br>
                            </form>
                            <div class="x_panel" id="ads">
                                <form class="form-inline">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Enter Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-9 col-sm-9 col-xs-12">Select Birth
                                            Year</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <select class="select2_multiple form-control" multiple="multiple" size=1>
                                                <option>1998</option>
                                                <option>1999</option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Enter City">
                                    </div>
                                </form>
                                <br>
                                <form class="form-inline">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                        Height</label>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                        Weight</label>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Running
                                        Speed</label>
                                </form>
                            </div>
                        </div>
                        <div class="x_content">
                            <div class="x_content">
                                <p class="text-muted font-13 m-b-30">
                                    Search results

                                </p>
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Index No</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Birth Year</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->
</div>
</div>
@section('script_content')
@endsection