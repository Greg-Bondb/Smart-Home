int flameSensorPin = A3; // Définit le numéro de pin du capteur de flamme

void setup_flame() {
  pinMode(flameSensorPin, INPUT); // Configure le capteur de flamme comme entrée
}

String loop_flame() {
  String response;
  int flame = digitalRead(flameSensorPin); // Lit la valeur du capteur de flamme
  if (flame == HIGH) { // Si une flamme est détectée
    response = "Flamme détecté";
  }else{
    response = "Aucune flamme";
  }
  return response;
}
