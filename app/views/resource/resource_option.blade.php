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
        <h1>Resource Option</h1>

    </div>

    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
        <a href="resource" >Resource </a>
        <a href="resource_option" class="current">Resource Option</a>
    </div>

    <div class="container-fluid">

        @include('layout.statistics')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="fa fa-eye"></i>
								</span>
                        <h5>Resource Operation</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Topics</th>
                                <th>File    Type</th>
                                <th>Views</th>
                                <th colspan="2">Operation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($item as $item)

                            <tr>

                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->file_type}}</td>
                                <td> {{$item -> views}} </td>
                                <td>
                                    {{ link_to_route('resource.edit', 'Edit', array($item->id),array('class' => 'btn btn-info')) }}
                                </td>
                                <td>
                                    {{ Form::open(array('method'=> 'DELETE', 'route' =>array('resource.destroy', $item->id))) }}
                                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}
                                </td>
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

@include('layout.footer')


@stop