<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table -> id();

            $table -> string('azienda', 64);
            $table -> string('stazione_partenza', 64);
            $table -> string('stazione_arrivo', 64);
            $table -> time('orario_partenza');
            $table -> time('orario_arrivo');
            $table -> string('codice', 10) -> unique();
            $table -> integer('numero_carrozze');
            $table -> boolean('in_orario') -> default(true);
            $table -> boolean('cancellato') -> default(false);

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
