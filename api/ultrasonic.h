#define trigPin 25 // Définit le numéro de pin du signal trig
#define echoPin 26 // Définit le numéro de pin du signal echo

void setup_ultrasonic() {
  pinMode(trigPin, OUTPUT); // Configure le signal trig comme sortie
  pinMode(echoPin, INPUT); // Configure le signal echo comme entrée
}

long loop_ultrasonic() {
  long duration, distance; // Déclare des variables pour stocker la durée et la distance mesurées

  digitalWrite(trigPin, LOW); // Met le signal trig à LOW pour désactiver le capteur
  delayMicroseconds(2); // Attend 2 microsecondes

  digitalWrite(trigPin, HIGH); // Met le signal trig à HIGH pour activer le capteur
  delayMicroseconds(10); // Attend 10 microsecondes
  digitalWrite(trigPin, LOW); // Met le signal trig à LOW pour désactiver le capteur

  duration = pulseIn(echoPin, HIGH); // Mesure la durée de l'impulsion du signal echo
  distance = duration * 0.034 / 2; // Calcule la distance en centimètres

 return distance;
}

void light_presence(){
  digitalWrite(trigPin, LOW);  // Met le signal de déclenchement à LOW
  delayMicroseconds(2);           // Attends 2 microsecondes
  digitalWrite(trigPin, HIGH); // Met le signal de déclenchement à HIGH
  delayMicroseconds(10);          // Attends 10 microsecondes
  digitalWrite(trigPin, LOW);  // Met le signal de déclenchement à LOW

  long duration = pulseIn(echoPin, HIGH);  // Mesure la durée du signal reçu sur la broche de réception
  float distance = duration * 0.034 / 2;   // Calcule la distance en centimètres

  if (distance < 10) {             // Si la distance est inférieure à 10 cm
    digitalWrite(ledPinW, HIGH);    // Allume la LED
  } else {
    digitalWrite(ledPinW, LOW);     // Éteint la LED
  }

  delay(100);  // Attends 100 millisecondes avant de relancer la boucle
}

