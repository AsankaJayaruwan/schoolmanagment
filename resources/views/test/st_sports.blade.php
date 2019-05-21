@extends('sidebar_header')
@section('content')
                        <!-- page content -->
                        <div class="right_col" role="main">
                            <div class="">
                                <div class="page-title">
                                    <div class="title_left">
                                        <h3>House <small>Student sports</small></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                 <form class="form-inline" method="post" action="{{url("stclub")}}"> 
                                                      {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Select student</label>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        
                                                         <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Admission
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="index" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                                        
                                                    </div>
                                                </div>
                                                <br><br>
                                                
                                              <div class="col-md-3 col-sm-3  col-xs-9">
                                                  <button type="submit"  class="btn btn-success">Search</button>
                                                </div>           
                                                 </form>
                                                
                                            </div>
                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /page content -->
                        @endsection

@section('script_content')

@endsection
