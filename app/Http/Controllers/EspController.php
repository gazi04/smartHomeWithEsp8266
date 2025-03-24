<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;

class EspController extends Controller
{
    public function sendData(Request $request)
    {
        $validated = $request->validate([
            'dataText' => 'required|string'
        ]);

        $dataText = $validated['dataText'];

        try {
            MQTT::publish('esp/data', $dataText);
            return redirect()->back()->with('message', 'Data sent to ESP successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Failed to send data to ESP: ' . $e->getMessage());
        }
    }
}
