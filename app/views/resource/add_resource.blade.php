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
        <h1>Reference</h1>
    </div>

    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
        <a href="resource" >Resource</a>

        <a href="document" class="current">Add Resource</a>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="fa fa-align-justify"></i>
								</span>
                        <h5>Add Resources</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <h3>@if (Session::has('message'))
                            <div class="alert alert-success">
                                <button class="close" data-dismiss="alert">×</button>
                                <strong>Success..</strong> {{ Session::get('message') }}
                            </div>
                            @endif</h3>
                        {{ Form::open(array('route' => 'resource.store','class'=>'form-horizontal')) }}

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">User ID</label>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                <input type="text" name="user_id" placeholder="User ID">
                            </div>
                        </div>  <!--user id---->

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">Resource Title</label>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                <input type="text" name="title" placeholder="Title of Resource">
                            </div>
                        </div>  <!--title---->

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">Resource CODE</label>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                <input type="text" name="code" placeholder="Resource CODE">
                            </div>
                        </div>  <!--code---->

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">Summary</label>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                <textarea name="summary"></textarea>
                            </div>
                        </div>  <!--summary---->

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">Resource Type</label>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                <select name="catagory_id">
                                    <option>Document</option>
                                    <option>Audio</option>
                                    <option>Video</option>

                                </select>
                            </div>
                        </div>  <!--type---->

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">Date </label>
                            <div class=" col-sm-9 col-md-9 col-lg-10">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" name="date" data-date="12-02-2012" data-date-format="dd-mm-yyyy" value="12-02-2012" class="datepicker form-control input-sm" />
                                    </div>

                                </div>
                            </div>
                        </div>  <!--date---->

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">URL</label>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                <input type="text" name="url" placeholder="www.example.com">
                            </div>
                        </div>  <!--url---->

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">File Type</label>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                <label><input type="radio" name="file_type" value="DOC" /> .doc/.docx</label>
                                <label><input type="radio" name="file_type" value="PDF" /> .pdf</label><br/>
                                <label><input type="radio" name="file_type" value="MP3" /> .mp3</label>
                                <label><input type="radio" name="file_type" value="WMA" /> .wma</label><br/>
                                <label><input type="radio" name="file_type" value="WMV" /> .wmv</label>
                                <label><input type="radio" name="file_type" value="MP4" /> .mp4</label>
                                <label><input type="radio" name="file_type" value="MKV" /> .mkv</label>
                                <label><input type="radio" name="file_type" value="OGG" /> .ogg</label>

                            </div>
                        </div>  <!--radio---->

                        <div class="form-group">
                            <label class="col-sm-3 col-md-3 col-lg-2 control-label">File upload input</label>
                            <div class="col-sm-9 col-md-9 col-lg-10">
                                <input type="file" />
                            </div>
                        </div>  <!--file upload---->

                        <div class="form-group">
                            <div class="col-sm-offset-1">
                                <input type="submit" class="btn btn-dark-blue" value="Add Resource"/>
                            </div>
                        </div>  <!--submit---->

                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@include('layout.footer')


@stop