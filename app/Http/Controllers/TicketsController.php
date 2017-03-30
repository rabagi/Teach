<?php

namespace Teach\Http\Controllers;

use Illuminate\Auth\Guard;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Teach\Http\Requests;
use Teach\Http\Controllers\Controller;
use Teach\Entities\Ticket;
use Teach\Entities\TicketComment;

class TicketsController extends Controller
{
    
   public function latest()
   {    
       $tickets = Ticket::orderby('created_at', 'DESC')->paginate(10);
       
   		return view('tickets/list', compact('tickets'));
   }

    
   public function populares()
   {
   		return view('tickets/list');
   }

    
   public function open()
   {    
        $tickets = Ticket::where('status', 'open')->orderby('created_at', 'DESC')->paginate(10);
   		return view('tickets/list', compact('tickets'));
   }
    

   public function closed()
   {
        $tickets = Ticket::where('status', 'close')->orderby('created_at', 'DESC')->paginate(10);

   		return view('tickets/list', compact('tickets', 'title'));
   }

    
   public function details($id)
   {
        $ticket = Ticket::findOrfail($id);       
   		return view('tickets/details', compact('ticket'));
   }
    
    
    public function create()
    {
        return view('tickets.create');
    }
    
    
    public function store(Request $request, Guard $auth)
    {   
        $this->validate($request, [
            
            'title'  => 'required|max:120',
                        
        ]);
        
        $ticket = $auth->user()->tickets()->create([
            
            'title' => $request->get('title'),
            'status' => 'open',
            
        ]);
        
        return Redirect::route('tickets.details', $ticket->id);
    }
}


