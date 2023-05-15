const int ledPinW = 11; // définir la broche à utiliser pour la LED
const int ledPinR = 12; // définir la broche à utiliser pour la LED
const int ledPinY = 5; // définir la broche à utiliser pour la LED
const int ledPinG = 4; // définir la broche à utiliser pour la LED

String etat;

void setup_led() {
  pinMode(ledPinW, OUTPUT); // configure la broche 13 en sortie
  pinMode(ledPinR, OUTPUT); // configure la broche 13 en sortie
  pinMode(ledPinY, OUTPUT); // configure la broche 13 en sortie
  pinMode(ledPinG, OUTPUT); // configure la broche 13 en sortie
}

// Fonction pour allumer la LED
void allumerLedW() {
  digitalWrite(ledPinW, HIGH); // mettre la broche de la LED à l'état haut
}

void allumerLedR() {
  ledacc = true;
  digitalWrite(ledPinR, HIGH); // mettre la broche de la LED à l'état haut
}

void allumerLedY() {
  digitalWrite(ledPinY, HIGH); // mettre la broche de la LED à l'état haut
}

void allumerLedG() {
  digitalWrite(ledPinG, HIGH); // mettre la broche de la LED à l'état haut
}

// Fonction pour éteindre la LED
void eteindreLedW() {
  digitalWrite(ledPinW, LOW); // mettre la broche de la LED à l'état bas
}

void eteindreLedR() {
  digitalWrite(ledPinR, LOW); // mettre la broche de la LED à l'état bas
}

void eteindreLedY() {
  digitalWrite(ledPinY, LOW); // mettre la broche de la LED à l'état bas
}

void eteindreLedG() {
  digitalWrite(ledPinG, LOW); // mettre la broche de la LED à l'état bas
}

