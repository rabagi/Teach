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

  protected function selectTicketsList()
  {
    return Ticket::selectRaw(
          'tickets.*, '
          .'(SELECT COUNT(*) FROM ticket_comments WHERE ticket_comments.ticket_id = tickets.id) as num_comments,'
          .'(SELECT COUNT(*) FROM ticket_votes WHERE ticket_votes.ticket_id = tickets.id) as num_votes'
          
        )->with('author');

  }
    
    
   public function latest()
   {    
       $tickets = $this->selectTicketsList()
        ->orderBy('created_at', 'DESC')  
        ->paginate(10);
       
   		return view('tickets/list', compact('tickets'));
   }

    
   public function populares()
   {
   		return view('tickets/list');
   }

    
   public function open()
   {    
        $tickets = $this->selectTicketsList()
        ->where('status', 'open')
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
   		
        return view('tickets/list', compact('tickets'));
   }
    

   public function closed()
   {
        $tickets = $this->selectTicketsList()
        ->where('status', 'close')
        ->orderby('created_at', 'DESC')
        ->paginate(10);

   		return view('tickets/list', compact('tickets', 'title'));
   }

    
   public function details($id, Guard $auth)
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


