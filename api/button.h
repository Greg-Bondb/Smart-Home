const int BUTTON_PINR = 9;  // Broche d'entrée pour le bouton
const int BUTTON_PINB = 10;

void setup_button() {
  Serial.begin(9600);                  // Initialise la communication série pour l'affichage des messages
  pinMode(BUTTON_PINR, INPUT_PULLUP);  // Configure la broche du bouton en entrée avec une résistance de tirage vers le haut
  pinMode(BUTTON_PINB, INPUT_PULLUP);  // Configure la broche du bouton en entrée avec une résistance de tirage vers le haut
}

void loop_button() {
  int buttonStateR = digitalRead(BUTTON_PINR);  // Lit l'état du bouton
  int buttonStateB = digitalRead(BUTTON_PINB);  // Lit l'état du bouton
  if (buttonStateR == LOW) {                    // Vérifie si le bouton est appuyé
    Serial.println("activée");
        delay(7000);                  // Affiche le mot sur le moniteur série
    allume = true;                              // Attend 1 seconde pour éviter les répétitions
  }
  if (buttonStateB == LOW) {       // Vérifie si le bouton est appuyé
    Serial.println("desactivée");  // Affiche le mot sur le moniteur série
    allume = false;                // Attend 1 seconde pour éviter les répétitions
  }
}