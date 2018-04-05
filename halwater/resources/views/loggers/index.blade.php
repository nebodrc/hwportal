@extends('layouts.app')
@section('content')

    

   


        <!--Main Content Start -->
        <section class="content">
            
        <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                  <a href=""><i class="fa fa-search"></i></a>
                </form>
                
                <!-- Left navbar -->
                <nav class=" navbar-default" role="navigation">
                    <ul class="nav navbar-nav hidden-xs">
                        <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">English <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">German</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Files</a></li>
                    </ul>

                    <!-- Right navbar -->
                    <ul class="nav navbar-nav navbar-right top-menu top-right-menu">  
                        <!-- mesages -->  
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="fa fa-envelope-o "></i>
                                <span class="badge badge-sm up bg-purple count">4</span>
                            </a>
                            <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                                <li>
                                    <p>Messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><img src="{{asset('img/avatar-2.jpg')}}" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><img src="{{asset('img/avatar-3.jpg')}}" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><img src="{{asset('img/avatar-4.jpg')}}" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <p><a href="#" class="text-right">See all Messages</a></p>
                                </li>
                            </ul>
                        </li>
                        <!-- /messages -->
                        <!-- Notification -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge badge-sm up bg-pink count">3</span>
                            </a>
                            <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                                <li class="noti-header">
                                    <p>Notifications</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                        <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                        <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                        <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                    </a>
                                </li>
                                
                                <li>
                                    <p><a href="#" class="text-right">See all notifications</a></p>
                                </li>
                            </ul>
                        </li>
                        <!-- /Notification -->

                        <!-- user login dropdown start-->
                        <li class="dropdown text-center">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="{{ asset('img/avatar-2.jpg')}}" class="img-circle profile-img thumb-sm">
                                <span class="username">John Deo </span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                                <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                <li><a href="#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>

                        </li>
                        <!-- user login dropdown end -->       
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                    <!-- End right navbar -->
                </nav>
                
            </header>
            <!-- Header Ends -->
            
            <!-- Page Content Start -->
            <!-- ================== -->
             <center>
                <h3>Dashboard</h3>
             </center>
            <div class="wraper container-fluid">
                <div class="page-title"> 
                        
                    </div>


                 <div class="row">
                    <div class="col-lg-6">
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark">
                                    America Tank 
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#portlet1"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet1" class="panel-collapse collapse in">
                                <div class="portlet-body chartJS">
                                    <canvas id="lineChart" data-type="Line" width="520" height="250"></canvas>
                                   
                                    <script type="text/javascript">

                                        window.onload = function(){
                                        var ctx = document.getElementById("lineChart");
                                        //var Chart = require("js/chartjs/chart.min.js");
                                        var myChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                
                                                labels: [
                                                    <?php
                                                        foreach($evvoslogs as $evvoslog){
                                                            echo '"'.$evvoslog->created_at.'",';
                                                        }
                                                    ?>

                                                ],
                                                
                                                datasets: [{
                                                    label: 'Voltage_1',
                                                    data: [

                                                        <?php
                                                        foreach($evvoslogs as $evvoslog){
                                                            echo $evvoslog->voltage_1.',';
                                                        }
                                                    ?>

                                                    ],
                                                    backgroundColor : "rgba(235, 193, 66, 0.4)",
                                                    borderColor : "rgba(235, 193, 66, 1)",
                                                    pointColor : "#ebc142",
                                                    pointStrokeColor : "#fff",
                                                    pointHoverBorderColor: "rgba(3, 169, 244, 0.4)",
                                                    borderWidth: 1
                                                },

                                                {
                                                    label: 'Voltage 2',
                                                    data: [

                                                        <?php
                                                        foreach($evvoslogs as $evvoslog){
                                                            echo $evvoslog->voltage_2.',';
                                                        }
                                                    ?>

                                                    ],
                                                    backgroundColor : "rgba(3, 169, 244, 0.4)",
                                                    borderColor : "rgba(3, 169, 244, 1)",
                                                    pointColor : "rgba(3, 169, 244, 1)",
                                                    pointStrokeColor : "#fff",
                                                     pointHoverBorderColor: "rgba(235, 193, 66, 0.4)",
                                                    borderWidth: 1
                                                }]
                                            }
                                        });        

                                        }
                                        

                                    </script>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->
                    </div>
                </div> <!-- End row -->

            </div>
        
         <div class="col-lg-10">

                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Evvos
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>RAW DATA</th>
                                                    <th>DEVICE NAME</th>
                                                    <th>VOLTAGE 1</th>
                                                    <th>VOLTAGE 2</th>
                                                    <th>STATUS</th>
                                                    <th>TIMESTAMP</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($evvoslogs as $evvoslog)
                                                <tr>

                                                    <td>{{$evvoslog->id}}</td>
                                                    <td>{{$evvoslog->raw_data}}</td>
                                                    <td>{{$evvoslog->device_name}}</td>
                                                    <td>{{$evvoslog->voltage_1}}</td>
                                                    <td>{{$evvoslog->voltage_2}}</td>
                                                    <td><span class="label label-success">{{$evvoslog->battery_status}}</span></td>
                                                    <td>{{$evvoslog->created_at}}</td>
                                                </tr>
                                                @endforeach
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
         </div> <!-- end col -->
    </div>
        

 
@endsection