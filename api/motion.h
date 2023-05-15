int motionSensorPin = 13; // Définit le numéro de pin du capteur de mouvement

void setup_motion() {
  pinMode(motionSensorPin, INPUT); // Configure le capteur de mouvement comme entrée
}

String loop_motion() {
    String response;
    int motion = digitalRead(motionSensorPin); // Lit la valeur du capteur de mouvement

  if (motion == HIGH) { // Si un mouvement est détecté
    response = "Mouvement détecté";
   } else {
     response = "Aucun mouvement";
   }

return response;

}