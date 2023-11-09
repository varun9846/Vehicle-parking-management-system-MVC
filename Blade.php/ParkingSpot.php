// app/Models/ParkingSpot.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParkingSpot extends Model
{
    protected $fillable = ['spot_number', 'is_available'];
}
