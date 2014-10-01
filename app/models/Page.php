<?php

class Page extends Eloquent
{

    protected $guarded = ['id'];

    public function magazine()
    {
        return $this->belongsTo('magazine');
    }

}
