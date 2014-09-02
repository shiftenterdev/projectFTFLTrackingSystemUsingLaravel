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
        <a href="resource" class="current">Resource</a>
    </div>

    <div class="container-fluid">

        @include('layout.statistics')

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4">
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
                                <th>Views</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($resource as $item)
                            @if(($item->catagory_id) == 'Document')
                            <tr>

                                <td>{{ link_to_route('resource.show', $item->title, array($item->id))}}</td>
                                <td> {{$item -> views}} </td>
                            </tr>
                            @endif
                            @endforeach
                            <tr>
                                <td colspan="2">
                                    <a href="document" class="btn btn-inverse pull-right col-sm-4">more...</a>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="fa fa-arrow-right"></i>
								</span>
                        <h5>Audio</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Topics</th>
                                <th>Views</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($resource as $item)
                            @if(($item->catagory_id) == 'Audio')
                            <tr>
                                <td>{{ link_to_route('resource.show', $item->title, array($item->id))}}</td>
                                <td> {{$item -> views}} </td>
                            </tr>
                            @endif
                            @endforeach
                            <tr>
                                <td colspan="2">
                                    <a href="audio" class="btn btn-inverse pull-right col-sm-4">more...</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="fa fa-file"></i>
								</span>
                        <h5>Video</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Page</th>
                                <th>Visits</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($resource as $item)
                            @if(($item->catagory_id) == 'Video')
                            <tr>
                                <td>{{ link_to_route('resource.show', $item->title, array($item->id))}}</td>
                                <td> {{$item -> views}} </td>
                            </tr>
                            @endif
                            @endforeach
                            <tr>
                                <td colspan="2">
                                    <a href="video" class="btn btn-inverse pull-right col-sm-4">more...</a>
                                </td>
                            </tr>
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