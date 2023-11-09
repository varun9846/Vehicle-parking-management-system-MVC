// database/migrations/xxxx_xx_xx_create_parking_spots_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingSpotsTable extends Migration
{
    public function up()
    {
        Schema::create('parking_spots', function (Blueprint $table) {
            $table->id();
            $table->string('spot_number');
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parking_spots');
    }
}
