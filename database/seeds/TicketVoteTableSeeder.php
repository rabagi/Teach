<?php

use Illuminate\Database\Seeder;
use Teach\Entities\TicketVote;

class TicketVoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TicketVote::class, 20)->create();
    }
}
