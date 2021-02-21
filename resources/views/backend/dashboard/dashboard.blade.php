@extends('backend.master')
@section('home')
<div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Ecommerce Dashboard</h2>
                                    <p class="sub-title">One stop solution for perfect Ecommerce dashboard!</p>
                                </div>
                                <!-- /.col-sm-6 -->
                                <div class="col-sm-6 right-side">
                                    <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
                                </div>
                                <!-- /.col-sm-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-sm-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li>Ecommerce Dashboard</li>
            						</ul>
                                </div>
                                <!-- /.col-sm-6 -->
                                <div class="col-sm-6 text-right hidden-xs">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="#">
                                            <span class="number counter">1,789,235</span>
                                            <span class="name">Lifetime Sales</span>
                                            <span class="bg-icon"><i class="fa fa-usd"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-primary" href="#"&gt;
    &lt;span class="number counter"&gt;1,789,235&lt;/span&gt;
    &lt;span class="name"&gt;Lifetime Sales&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-usd"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="#">
                                            <span class="number counter">65,500</span>
                                            <span class="name">Total Orders</span>
                                            <span class="bg-icon"><i class="fa fa-shopping-cart"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-danger" href="#"&gt;
    &lt;span class="number counter"&gt;65,500&lt;/span&gt;
    &lt;span class="name"&gt;Total Orders&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-shopping-cart"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="#">
                                            <span class="number counter">13,500</span>
                                            <span class="name">Average Monthly Orders</span>
                                            <span class="bg-icon"><i class="fa fa-area-chart"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-warning" href="#"&gt;
    &lt;span class="number counter"&gt;13,500&lt;/span&gt;
    &lt;span class="name"&gt;Average Monthly Orders&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-area-chart"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="#">
                                            <span class="number counter">450</span>
                                            <span class="name">Daily Orders</span>
                                            <span class="bg-icon"><i class="fa fa-thumbs-o-up"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-success" href="#"&gt;
    &lt;span class="number counter"&gt;450&lt;/span&gt;
    &lt;span class="name"&gt;Daily Orders&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        <section class="section pt-10">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Online Revenue Chart</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <div id="chart2" class="op-chart"></div>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;!-- ========== HTML ========== --&gt;
&lt;div id="chart2" class="op-chart"&gt;&lt;/div&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        // chart2
        var chart2 = AmCharts.makeChart( "chart2", {
          "type": "serial",
          "theme": "light",
          "fontFamily": "Poppins",
          "dataProvider": [ {
            "revenue": "500012",
            "year": 2001
          },{
            "revenue": "623012",
            "year": 2002
          },{
            "revenue": "756895",
            "year": 2003
          },{
            "revenue": "846658",
            "year": 2004
          },{
            "revenue": "954284",
            "year": 2005
          },{
            "revenue": "1024364",
            "year": 2006
          }, {
            "revenue": "1125975",
            "year": 2007
          }, {
            "revenue": "1236364",
            "year": 2008
          }, {
            "revenue": "1352024",
            "year": 2009
          }, {
            "revenue": "1458256",
            "year": 2010
          }, {
            "revenue": "1568964",
            "year": 2011
          }, {
            "revenue": "1592035",
            "year": 2012
          }, {
            "revenue": "1794678",
            "year": 2013
          }, {
            "revenue": "1865598",
            "year": 2014
          }, {
            "revenue": "1962587",
            "year": 2015
          }, {
            "revenue": "2225468",
            "year": 2016
          }, {
            "revenue": "2557487",
            "year": 2017
          } ],
          "valueAxes": [ {
            "gridColor": "#FFFFFF",
            "gridAlpha": 0.2,
            "dashLength": 0,
            "title": "Generated Revenue, USD"
          } ],
          "gridAboveGraphs": true,
          "startDuration": 1,
          "graphs": [ {
            "balloonText": "[[category]]: <b>[[value]]</b>",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "type": "column",
            "valueField": "revenue"
          } ],
          "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
          },
          "categoryField": "year",
          "categoryAxis": {
            "gridPosition": "start",
            "gridAlpha": 0,
            "tickPosition": "start",
            "tickLength": 20,
            "title": "Years"
          },
          "export": {
            "enabled": true
          }
        } );
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        <section class="section pt-10">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>List Of Order</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20 overflow-x-auto">

                                                <table class="table table-striped">
                                                	<thead>
                                                		<tr>
                                                			<th>Order #</th>
                                                			<th>Purchased On</th>
                                                            <th>Purchased Price</th>
                                                			<th>Customer</th>
                                                			<th>Username</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                		</tr>
                                                	</thead>
                                                	<tbody>
                                                		<tr>
                                                			<td>1</td>
                                                			<td>12/02/2016</td>
                                                            <td>650.40$</td>
                                                			<td>Otto</td>
                                                			<td>@mdo</td>
                                                            <td>mark@gmail.com</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Pending</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                		<tr>
                                                			<td>2</td>
                                                			<td>22/02/2016</td>
                                                            <td>870.40$</td>
                                                			<td>Thornton</td>
                                                			<td>@fat</td>
                                                            <td>jacob@gmail.com</td>
                                                            <td>
                                                                <span class="label label-success label-wide">Delivered</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                		<tr>
                                                			<td>3</td>
                                                			<td>15/02/2016</td>
                                                            <td>250.40$</td>
                                                			<td>the Bird</td>
                                                			<td>@twitter</td>
                                                            <td>larry@gmail.com</td>
                                                            <td>
                                                                <span class="label label-warning label-wide">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                        <tr>
                                                			<td>4</td>
                                                			<td>17/02/2016</td>
                                                            <td>230.40$</td>
                                                			<td>Bird</td>
                                                			<td>@twitter</td>
                                                            <td>larry@gmail.com</td>
                                                            <td>
                                                                <span class="label label-warning label-wide">On Hold</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                        <tr>
                                                			<td>5</td>
                                                			<td>22/02/2016</td>
                                                            <td>870.40$</td>
                                                			<td>Thornton</td>
                                                			<td>@fat</td>
                                                            <td>jacob@gmail.com</td>
                                                            <td>
                                                                <span class="label label-success label-wide">Delivered</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                        <tr>
                                                			<td>6</td>
                                                			<td>12/02/2016</td>
                                                            <td>650.40$</td>
                                                			<td>Otto</td>
                                                			<td>@mdo</td>
                                                            <td>mark@gmail.com</td>
                                                            <td>
                                                                <span class="label label-info label-wide">Pending</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                        <tr>
                                                			<td>7</td>
                                                			<td>19/02/2016</td>
                                                            <td>290.40$</td>
                                                			<td>the Bird</td>
                                                			<td>@twitter</td>
                                                            <td>larry@gmail.com</td>
                                                            <td>
                                                                <span class="label label-danger label-wide">Not Delivered</span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                                <button type="button" class="btn btn-danger btn-xs btn-labeled next-btn">Reject<span class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                            </td>
                                                		</tr>
                                                	</tbody>
                                                </table>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;table class="table table-striped"&gt;
    &lt;caption&gt;Optional table caption.&lt;/caption&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Order #&lt;/th&gt;
            &lt;th&gt;Purchased On&lt;/th&gt;
            &lt;th&gt;Purchased Price&lt;/th&gt;
            &lt;th&gt;Customer&lt;/th&gt;
            &lt;th&gt;Username&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
            &lt;th&gt;Actions&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;1&lt;/th&gt;
            &lt;td&gt;12/02/2016&lt;/td&gt;
            &lt;td&gt;650.40$&lt;/td&gt;
            &lt;td&gt;Otto&lt;/td&gt;
            &lt;td&gt;@mdo&lt;/td&gt;
            &lt;td&gt;mark@gmail.com&lt;/td&gt;
            &lt;td&gt;
                &lt;span class="label label-info label-wide"&gt;Pending&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
                &lt;button type="button" class="btn btn-success btn-xs btn-labeled"&gt;Approve&lt;span class="btn-label btn-label-right"&gt;&lt;i class="fa fa-check"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
                &lt;button type="button" class="btn btn-danger btn-xs btn-labeled"&gt;Reject&lt;span class="btn-label btn-label-right"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
&lt;/table&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->
                    </div>
                    <!-- /.main-page -->

                    <div class="right-sidebar bg-white fixed-sidebar">
                        <div class="sidebar-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Useful Sidebar <i class="fa fa-times close-icon"></i></h4>
                                        <p>Code for help is added within the main page. Check for code below the example.</p>
                                        <p>You can use this sidebar to help your end-users. You can enter any HTML in this sidebar.</p>
                                        <p>This sidebar can be a 'fixed to top' or you can unpin it to scroll with main page.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <!-- /.col-md-12 -->

                                    <div class="text-center mt-20">
                                        <button type="button" class="btn btn-success btn-labeled">Purchase Now<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                    </div>
                                    <!-- /.text-center -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.right-sidebar -->
                </div>
@endsection