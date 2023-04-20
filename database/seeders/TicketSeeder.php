<?php

namespace Database\Seeders;

use App\Http\Middleware\ticket;
use App\Models\category;
use App\Models\programer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        programer::create([
            'name'=>'Hala ui ux',
            'ticket_id'=>'6',

        ]);
              

    }
}
