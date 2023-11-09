// app/Http/Controllers/ParkingController.php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\ParkingSpot;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index()
    {
        $parkingSpots = ParkingSpot::all();
        return view('parking.index', compact('parkingSpots'));
    }

    public function create()
    {
        return view('parking.create');
    }

    public function store(Request $request)
    {
        $vehicle = Vehicle::create($request->all());
        $parkingSpot = ParkingSpot::where('is_available', true)->first();
        $parkingSpot->update(['is_available' => false, 'vehicle_id' => $vehicle->id]);

        return redirect()->route('parking.index')->with('success', 'Vehicle parked successfully.');
    }

    // Implement other methods like edit, update, delete as needed
}
