<?php

namespace Teach\Entities;

use Illuminate\Database\Eloquent\Model;
use Teach\Entities\Ticket;

class TicketComment extends Model
{

	protected $fillable =  ['comment', 'link'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
