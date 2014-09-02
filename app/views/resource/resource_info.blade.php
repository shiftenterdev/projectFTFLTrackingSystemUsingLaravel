@extends('layout.reference')

@section('main')

<div id="header">
    <h1><a href="./index.html">Unicorn Admin</a></h1>
    <a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>
</div>

@include('layout.navigation')

@include('layout.switcher')

@include('layout.sidebar')

<div id="content">

    <div id="content-header" class="mini">
        <h1>Resource</h1>
    </div>

    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
        <a href="/resource" >Resource</a>
        <a href="/document" class="current">Resource's Information</a>

    </div>

    <div class="container-fluid">

        <div class="col-xs-12 col-sm-12 col-lg-12">
            <div class="widget-box">
                <div class="widget-title">
								<span class="icon">
									<i class="fa fa-eye"></i>
								</span>
                    <h5>Resource View/Download</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Topics</th>
                            <th>Summary</th>
                            <th>FILE TYPE</th>
                            <th>DATE</th>
                            <th>HITS</th>
                            <th>DOWNLOAD</th>
                        </tr>
                        </thead>
                        <tbody>

                        <td> {{$item -> title}} </td>
                        <td> {{$item -> summary}} </td>
                        <td> {{$item -> file_type}} </td>
                        <td> {{$item -> date}} </td>
                        <td> {{$item -> views}} </td>
                        <td><a href="#" class="btn btn-dark-green ">Download</a> </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>

@include('layout.footer')


@stop