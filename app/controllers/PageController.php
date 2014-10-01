<?php

class PageController extends BaseController
{

    public function show($pageId)
    {
        $page = Page::findOrFail($pageId);

        return View::make('page.show', compact('page'));
    }

}
