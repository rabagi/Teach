<?php

namespace Teach\Http\Controllers;

use Illuminate\Http\Request;

use Teach\Http\Requests;
use Teach\Http\Controllers\Controller;
use Teach\Entities\Ticket;

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
   		return view('tickets/list');
   }

   public function closed()
   {
   		return view('tickets/details');
   }

   public function details($id)
   {
        $ticket = Ticket::findOrfail($id);
   		return view('tickets/details', compact('ticket'));
   }
}
