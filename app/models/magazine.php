<?php

class Magazine extends Eloquent
{

    public function pages()
    {
        return $this->hasMany('pages');
    }

}
