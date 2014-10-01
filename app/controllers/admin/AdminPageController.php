<?php

class AdminPageController extends BaseController
{

    public function create($magazineId)
    {
        $magazine = Magazine::findOrFail($magazineId);
        $page = new Page;

        return View::make('admin.page.create', compact('page', 'magazine'));
    }

    public function store($magazineId)
    {
        $page = new Page;

        $page->magazine_id = $magazineId;
        $page->number = Input::get('number');
        $page->body = Input::get('body');
        $page->save();

        return Redirect::route('admin.magazine.edit', $magazineId);
    }

    public function edit($pageId)
    {
        $page = Page::findOrFail($pageId);

        return View::make('admin.page.edit', compact('page'));
    }

    public function update($pageId)
    {
        $page = Page::with('magazine')->findOrFail($pageId);

        $page->number = Input::get('number');
        $page->body = Input::get('body');
        $page->save();

        return Redirect::route('admin.magazine.edit', $page->magazine->id);
    }
}
