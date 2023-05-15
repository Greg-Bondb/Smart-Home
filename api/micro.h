int microphonePin = A4; // Définit le numéro de pin du module microphone

void setup_micro() {
  pinMode(microphonePin, INPUT); // Configure le module microphone comme entrée
}

String loop_micro() {
  String response;
  int noiseLevel = digitalRead(microphonePin); // Lit la valeur du module microphone
    Serial.println(noiseLevel);
  if (noiseLevel != 1) { // Si un bruit est détecté
    response = "Bruit détecté";
    Serial.println("Noise detected!"); // Affiche un message sur le moniteur série
  } else {
    response = "Aucun bruit";
  }

return response;
}
