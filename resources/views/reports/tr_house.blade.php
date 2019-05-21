@extends('sidebar_header')
@section('content')
                        <!-- page content -->
                        <div class="right_col" role="main">
                            <div class="">
                                <div class="page-title">
                                    <div class="title_left">
                                        <h3>House <small>Teacher list</small></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_content">
                                                 <form class="form-inline" method="post" action="{{url("tr_house")}}"> 
                                                      {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Select House</label>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        
                                                        <select class="form-control" name="house_id">
                                                            @foreach ($houses as $house)
                                                            <option value="{{$house->id}}">{{$house->house_name}}</option>
                                                            
                                                            @endforeach
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                                <br><br>
                                                
                                              <div class="col-md-3 col-sm-3  col-xs-9">
                                                  <button type="submit" onclick="showresult()" class="btn btn-success">Search</button>
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
<script>
        function showDiv() {
            div = document.getElementById('ads');
            div.style.display = "block";
        }
    </script>
@endsection
