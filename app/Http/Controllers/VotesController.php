<?php

namespace Teach\Http\Controllers;

use Illuminate\Http\Request;

use Teach\Http\Requests;
use Teach\Http\Controllers\Controller;

class VotesController extends Controller
{
    
    public function submit($id)
    {
        dd('votando por ticket: ' . $id);
        
    }
    
    public function destroy($id)
    {
        dd('quitando voto de ticket: ' . $id);    
    }
}
