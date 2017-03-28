<?php

use Illuminate\Database\Seeder;
use Teach\Entities\TicketComment;

class TicketCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TicketComment::class, 20)->create();
    }
}
