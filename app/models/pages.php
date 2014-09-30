<?php

class Pages extends Eloquent
{

    public function magazine()
    {
        return $this->belongsTo('magazine');
    }

}
