<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        //
        schema::table('users',function(Blueprint $table)
        {
            $table->string('contact',90); //agr string wagera k ilawa or b koi colomn mai dyna mai to woh laravel k documentation sy dekh skty hen boht sary hen
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
            schema::table('users',function(Blueprint $table)
        {
            $table->dropColumn('contact'); //agr dropcolumn wagera k ilawa or b koi colomn mai dyna mai to woh laravel k documentation sy dekh skty hen boht sary hen
        });
    }
}
