<?php

class ResourceController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $resource = Resource::all();
        //$resource = DB::table('resources')->orderBy('id', 'desc')->take(10)->get();
        return View::make('resource.index',compact('resource'));

    }
    public function document()
    {
        $resource = Resource::all();
        //$resource = DB::table('resources')->orderBy('id', 'desc')->take(10)->get();
        return View::make('resource.document',compact('resource'));

    }
    public function audio()
    {
        $resource = Resource::all();
        //$resource = DB::table('resources')->orderBy('id', 'desc')->take(10)->get();
        return View::make('resource.audio',compact('resource'));

    }
    public function video()
    {
        $resource = Resource::all();
        //$resource = DB::table('resources')->orderBy('id', 'desc')->take(10)->get();
        return View::make('resource.video',compact('resource'));

    }
    public function profile()
    {
        return View::make('resource.profile');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $rules=array(
            'title'=>'required',
            'url'=>'required',

        );
        //get all book information
        $referenceInfo = Input::all();
        //save new book information in the database
        //and redirect to index page
        Resource::create($referenceInfo);

        return Redirect::to('add_resource')
            ->withInput()
            ->with('message', 'Resources Added');
    }

//    public function resource_info()
//    {
//
//        $item = Resource::find(6);
//        return View::make('resource.resource_info')
//            ->with('item',$item);
//    }
    public function resource_option()
    {

        $item = Resource::all();
        return View::make('resource.resource_option')
            ->with('item',$item);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $item = Resource::find($id);
        return View::make('resource.resource_info')
            ->with('item',$item);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = Resource::find($id);
        return View::make('resource.edit', compact('item'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $rules=array(

            'title'=>'required',

        );
        $item = Input::all();
        $item1 = Resource::find($id);
        $item1->update($item);
        return Redirect::to('add_resource')
            ->withInput()
            ->with('message', 'Successfully updated Resource.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Resource::find($id)->delete();
        return Redirect::to('add_resource')
            ->withInput()
            ->with('message', 'Successfully deleted Resource.');
    }


}
