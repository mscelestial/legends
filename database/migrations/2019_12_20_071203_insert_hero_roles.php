<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;

class InsertHeroRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Role::create ([
            'name' => 'Tank'
        ]);

        Role::create ([
            'name' => 'Mage'
        ]);

        Role::create([
            'name' => 'Support'
        ]);

        Role::create([
            'name' => 'Marksman'
        ]);

        Role::create([
            'name' => 'Assassin'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
