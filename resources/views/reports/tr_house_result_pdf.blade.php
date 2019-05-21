<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Isipathana College </title>

   
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

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
                    
                                              Hello  {{$houses->house_name}}
                      <br><br>
                     <table class="table table-bordered" id='search'>
                                <thead>
                                <tr>
                                    <th>Teacher Id</th>
                                    <th>Full Name</th>
                                </tr>
                                </thead>
                               
                                <tbody>
                                @foreach($tr_houses as $tr_house)
                                    <tr>
                                        <td>{{$tr_house->tr_id}}</td>
                                        <td>{{$tr_house->first_name}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
         <!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
  
  </body>
</html>
