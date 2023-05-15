#include "buzzer.h"

// Structure pour stocker les utilisateurs
struct Utilisateur {
  String nom;
  String prenom;
  String uid;
  String code;
};

// Tableau de structure pour stocker les utilisateurs
Utilisateur utilisateurs[] = {
  { "Quadro", "Thomas", "73a6f016", "1234" },
  { "Giro", "Alexis", "63e9bd1f", "5678" },
  { "Balatre", "Gregory", "456789123", "0000" }
};

const int NB_UTILISATEURS = sizeof(utilisateurs) / sizeof(Utilisateur);

String pass[15] = { "" };

void systeme_actif() {
  int sensorValue = digitalRead(motionSensorPin);  // Lis la valeur du capteur de mouvement
  if (sensorValue == HIGH) {                       // Si un mouvement est détecté
    digitalWrite(ledPinR, HIGH);                   // Allume la LED rouge
    soundAlarm();
  } else {
    digitalWrite(ledPinR, LOW);    // Éteint la LED rouge
    digitalWrite(buzzerPin, LOW);  // Éteint le buzzer
  }
}

void alarme() {
  if (allume == true) {
    ledacc = false;
    systeme_actif();

    delay(1000);
  } else if (ledacc != true) {
    digitalWrite(ledPinR, LOW);
    digitalWrite(buzzerPin, LOW);  // Éteint le buzzer
  }
}