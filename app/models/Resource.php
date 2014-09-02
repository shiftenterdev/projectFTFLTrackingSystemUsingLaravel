<?php
class Resource extends Eloquent{
    public $timestamps = false;
    protected $fillable = array('title','url','user_id','summary','catagory_id','date','code','file_type');
}