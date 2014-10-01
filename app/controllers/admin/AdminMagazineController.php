<?php

class AdminMagazineController extends BaseController
{

    public function index()
    {
        $magazines = Magazine::get();

        return View::make('admin.magazine.index', compact('magazines'));
    }

    public function create()
    {
        $magazine = new magazine;
        return View::make('admin.magazine.create', compact('magazine'));
    }

    public function store()
    {
        $magazine = new Magazine;

        $magazine->title = Input::get('title');
        $magazine->save();

        return Redirect::route('admin.magazine');
    }

    public function edit($magazineId)
    {
        $magazine = Magazine::with('pages')->findOrFail($magazineId);

        return View::make('admin.magazine.edit', compact('magazine'));
    }

    public function update($magazineId)
    {
        $magazine = Magazine::findOrFail($magazineId);

        $magazine->title = Input::get('title');
        $magazine->save();

        return Redirect::route('admin.magazine');
    }
}
