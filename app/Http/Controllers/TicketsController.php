<?php

namespace Teach\Http\Controllers;

use Illuminate\Http\Request;

use Teach\Http\Requests;
use Teach\Http\Controllers\Controller;

class TicketsController extends Controller
{
   public function latest()
   {
   		return view('tickets/list');
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
   		return view('tickets/details');
   }
}
