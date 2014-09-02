<div class="row">
    <div class="col-xs-9">
        <div class="widget-box widget-plain">
            <div class="widget-content center">
                <ul class="stats-plain">
                    <li>

                        <a href="/resource">
                            <h4>60</h4>
                            <b><span class="fa fa-download"></span> Download</b>
                        </a>
                    </li>
                    <li>
                        <a href="/document">
                            <h4>{{$resource = DB::table('resources')->where('catagory_id','=','Document')->count()}}</h4>
                            <b><span class="fa fa-file-text"></span> Document</b>
                        </a>
                    </li>
                    <li>
                        <a href="/audio">
                            <h4>{{$resource = DB::table('resources')->where('catagory_id','=','Audio')->count()}}</h4>
                            <b><span class="fa fa-volume-up"></span> Audio</b>
                        </a>
                    </li>
                    <li>
                        <a href="/video">
                            <h4>{{$resource = DB::table('resources')->where('catagory_id','=','Video')->count()}}</h4>
                            <b><span class="fa fa-film"></span> Video</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <br/><br/><br/>
        <div class="btn-toolbar">
            <div class="btn-group">
                <button class="btn btn-lg btn-dark-blue"><span class="fa fa-cog"></span> Operation</button>
                <button data-toggle="dropdown" class="btn btn-lg btn-default dropdown-toggle"><span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-info">
                    <li><a href="/add_resource">Add Resource</a></li>
                    <li class="divider"></li>
                    <li><a href="/resource_option">Other Option</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>