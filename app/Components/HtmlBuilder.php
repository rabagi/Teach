<?php
namespace Teach\Components;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class  HtmlBuilder extends CollectiveHtmlBuilder {
	
	public function menu(array $items)
    {
        return view('partials/menu', compact('items') );
    }
    

}