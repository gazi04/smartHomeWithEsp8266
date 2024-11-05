// int count = 0; // Initialize the counter variable
//
// void setup() {
//   // Start the Serial communication at 115200 baud rate
//   Serial.begin(115200);
// }
//
// void loop() {
//   Serial.print("Count: "); // Print label
//   Serial.println(count);    // Print the current count value
//   count++;                  // Increment the counter
//   delay(1000);              // Wait for 1 second
// }

#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

const char* ssid = "Gajur@KosovaNet";         // Replace with your Wi-Fi SSID
const char* password = "g@zmend2024"; // Replace with your Wi-Fi Password
const char* serverName = "http://192.168.1.10:8080/test/"; // Replace with your server's local IP

void setup() {
  Serial.begin(115200);
  
  // Connect to Wi-Fi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("\nConnected to Wi-Fi");
}

void loop() {
  if (WiFi.status() == WL_CONNECTED) { // Check Wi-Fi connection
    HTTPClient http;
    WiFiClient client;
    // Use default WiFiClient (no first argument)
    http.begin(client, serverName); 

    http.addHeader("Content-Type", "application/x-www-form-urlencoded"); // Content-Type header

    // Prepare your data
    String sensorData = "sensorData=" + String(random(100)); // Replace random with actual sensor data

    // Send the request
    int httpResponseCode = http.POST(sensorData);

    // Check for a response
    if (httpResponseCode > 0) {
      String response = http.getString(); // Get the response payload
      Serial.println("Response from server: " + response); // Print response
    } else {
      Serial.println("Error in sending POST request: " + String(httpResponseCode));
    }

    http.end(); // Close connection
  } else {
    Serial.println("Disconnected from Wi-Fi");
  }

  delay(5000); // Send data every 5 seconds
}
