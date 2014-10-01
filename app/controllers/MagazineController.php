<?php

class MagazineController extends BaseController
{

    public function index()
    {
        $magazines = Magazine::paginate(20);

        return View::make('magazine.list', compact('magazines'));
    }

    public function show($magazineId)
    {
        $magazine = Magazine::with('pages')->findOrFail($magazineId);

        return View::make('magazine.show', compact('magazine'));
    }

}
