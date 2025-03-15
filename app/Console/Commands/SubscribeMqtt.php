<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpMqtt\Client\Facades\MQTT;

class SubscribeMqtt extends Command
{
    protected $signature = 'mqtt:subscribe';
    protected $description = 'Subscribe to MQTT topics';

    public function handle()
    {
        MQTT::subscribe('nodemcu/data', function (string $topic, string $message) {
            $this->info("Received message on topic [$topic]: $message");
            // Process the message (e.g., save to database, trigger an event, etc.)
        });

        MQTT::loop(true); // Keep the connection alive
    }
}
