<?php

namespace Teach\Http\Controllers;

use Illuminate\Http\Request;

use Teach\Http\Requests;
use Teach\Http\Controllers\Controller;

class TicketsController extends Controller
{
   public function latest()
   {
   		return view('tickets/ticket');
   }

   public function populares()
   {
   		return view('tickets/detail');
   }

   public function open()
   {
   		return view('tickets/detail');
   }

   public function closed()
   {
   		return view('tickets/detail');
   }

   public function details($id)
   {
   		return view('tickets/detail');
   }
}
