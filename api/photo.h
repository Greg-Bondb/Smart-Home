int photoSensorPin = A2;  // Définit le numéro de pin du capteur photosensible

void setup_photo() {
  pinMode(photoSensorPin, INPUT);  // Configure le capteur photosensible comme entrée
}

String loop_photo() {
  String response;
  int lightLevel = analogRead(photoSensorPin);  // Lit la valeur du capteur photosensible
  response = lightLevel;

  return response;
}
