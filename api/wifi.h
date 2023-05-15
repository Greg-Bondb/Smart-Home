#include <SoftwareSerial.h>
#include <WiFiEsp.h>

// Configuration des broches pour le module WiFiEsp
SoftwareSerial wifiSerial(A9, A8); // RX, TX

// Configuration des informations de connexion pour le réseau Wi-Fi
char ssid[] = "ssid";
char password[] = "password";

void config_wifi(){
  // Initialisation de la communication série
  Serial.begin(9600);
  wifiSerial.begin(9600);

  // Initialisation du module WiFiEsp
  WiFi.init(&wifiSerial);

  // Connexion au réseau Wi-Fi
  while (WiFi.status() != WL_CONNECTED) {
    Serial.println("Connecting to WiFi...");
    if (WiFi.begin(ssid, password) == WL_CONNECTED) {
      Serial.println("Connected to WiFi");
    } else {
      Serial.println("Failed to connect to WiFi");
      delay(5000);
    }
  }
  
  // Configuration de l'adresse IP statique
  IPAddress ip(192, 168, 137, 10);

  WiFi.config(ip);

  // Affichage de l'adresse IP attribuée
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());
}

