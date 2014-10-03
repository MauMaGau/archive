<?php

class PageController extends BaseController
{

    public function show($pageId)
    {
        $page = Page::with('magazine')->findOrFail($pageId);
        $page->next = Page::where('magazine_id', $page->magazine_id)->where('number', $page->number+1)->first();
        $page->prev = Page::where('magazine_id', $page->magazine_id)->where('number', $page->number-1)->first();

        return View::make('page.show', compact('page'));
    }

}
