<?php

namespace Teach\Repositories;
use Teach\Entities\Ticket;

class TicketRepository {
	
	protected function selectTicketsList()
  	{
  	  return Ticket::selectRaw(
          'tickets.*, '
          .'(SELECT COUNT(*) FROM ticket_comments WHERE ticket_comments.ticket_id = tickets.id) as num_comments,'
          .'(SELECT COUNT(*) FROM ticket_votes WHERE ticket_votes.ticket_id = tickets.id) as num_votes'
          
        )->with('author');

  	}


	public function paginateLatest()
	{
		return $this->selectTicketsList()
        ->orderBy('created_at', 'DESC')  
        ->paginate(10);
	}	



}