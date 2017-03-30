<?php

namespace Teach\Http\Controllers;

use Illuminate\Http\Request;

use Teach\Http\Requests;
use Teach\Http\Controllers\Controller;

use Teach\Entities\Ticket;

class VotesController extends Controller
{
 
    
    public function submit($id)
    {
        $ticket = Ticket::findOrfail($id);
        
        currentUser()->vote($ticket);
        
        return redirect()->back();
        
    }
    
    
    public function destroy($id)
    {
        $ticket = Ticket::findOrfail($id);        
        currentUser()->unvote($ticket);
        
        return redirect()->back();  
    }
    
    
}
