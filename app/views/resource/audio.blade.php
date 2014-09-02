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
        <h1>Audio</h1>
    </div>

    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
        <a href="resource">Resource</a>
        <a href="audio" class="current">Audio</a>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="fa fa-eye"></i>
								</span>
                        <h5>Documents</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Topics</th>
                                <th>Summary</th>
                                <th>URL</th>
                                <th>USER_ID</th>
                                <th>CODE</th>
                                <th>FILE TYPE</th>
                                <th>DATE</th>
                                <th>HITS</th>
                                <th>DOWNLOAD</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($resource as $item)
                            @if(($item -> catagory_id) == 'Audio')
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->summary}}</td>
                                <td><a href="http://{{$item->url}}">{{$item->url}}</a></td>
                                <td>{{$item->user_id}}</td>
                                <td>{{$item->code}}</td>
                                <td>{{$item->file_type}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->views}}</td>
                                <td><a href="#" class="btn btn-dark-green">DOWNLOAD</a></td>
                            </tr>
                            @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@include('layout.footer')


@stop