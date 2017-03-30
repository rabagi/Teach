<?php

namespace Teach\Http\Controllers;

use Illuminate\Http\Request;

use Teach\Http\Requests;
use Teach\Http\Controllers\Controller;
use Illuminate\Auth\Guard;
use Teach\Entities\Ticket;
use Teach\Entities\TicketComment;

class CommentsController extends Controller
{
    
    public function submit(Request $request, Guard $auth, $id)
    {   
        $this->validate($request, [
           'comment'  => 'required|max:250',
           'link' => 'url',
                        
        ]);

        $comment = new TicketComment($request->all());
        $comment->user_id = $auth->id();

        $ticket = Ticket::findOrFail($id);
        $ticket->comments()->save($comment);

        session()->flash('success', 'Comentario guardado');

        return redirect()->back();
        
    
    }
    
}
