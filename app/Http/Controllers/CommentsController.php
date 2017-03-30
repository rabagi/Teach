<?php

namespace Teach\Http\Controllers;

use Illuminate\Http\Request;

use Teach\Http\Requests;
use Teach\Http\Controllers\Controller;

class CommentsController extends Controller
{
    
    public function submit(Request $request)
    {   
        $this->validate($request, [
           'title'  => 'required|max:120',
            
            
        ]);
        
    
    }
    
}
