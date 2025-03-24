<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpMqtt\Client\Facades\MQTT;
use Illuminate\Support\Facades\Cache;

class MqttListener extends Command
{
    protected $signature = 'mqtt:listen';
    protected $description = 'Listens to MQTT topics and stores data';

    public function handle()
    {
        $mqtt = MQTT::connection();

        $this->info("Connecting to broker at: ".config('mqtt-client.host'));
        $mqtt->subscribe('nodemcu/data', function (string $topic, string $message) {
            $this->info("Received: {$message}");
            Cache::put('latest_esp_data', $message, now()->addMinutes(10));
            event(new \App\Events\EspDataUpdated($message));
        }, 1);
        $this->info("Subscribed to nodemcu/data. Waiting for messages...");
        $mqtt->loop(true);
    }
}
