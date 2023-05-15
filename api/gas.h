int gasSensorPin = A5; // Définit le numéro de pin du capteur de gaz
int threshold = 500; // Définit le seuil de détection du gaz

void setup_gas() {
  pinMode(gasSensorPin, INPUT); // Configure le capteur de gaz comme entrée
}

String loop_gas() {
    String response;
    int gasLevel = analogRead(gasSensorPin); // Lit la valeur du capteur de gaz

  if (gasLevel > threshold) { // Si une concentration de gaz dangereuse est détectée
    response = "Gas détecté";
  } else {
    response = "Aucun gas";
  }

  return response;
}
