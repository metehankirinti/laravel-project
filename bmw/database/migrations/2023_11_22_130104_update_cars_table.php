<?php

// database/migrations/xxxx_xx_xx_update_cars_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCarsTable extends Migration
{
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('make');
            $table->string('model');
            $table->year('year');
        });
    }

    public function down()
    {
        // Geri alma işlemleri
    }
}
