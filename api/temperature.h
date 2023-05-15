#include <DHT.h>

#define DHTPIN 7          // Définir la broche de données du capteur DHT11
#define DHTTYPE DHT11     // Définir le type de capteur DHT
DHT dht(DHTPIN, DHTTYPE);
void setup_dht() {
  Serial.begin(9600);   // Initialiser la communication série
  dht.begin();          // Initialiser le capteur DHT11
}

float loop_temperature() {
  float temperature = dht.readTemperature();  // Lire la température en degrés Celsius
  return temperature;
}
