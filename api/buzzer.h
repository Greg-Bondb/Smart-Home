int buzzerPin = 8; // Définit le numéro de broche du buzzer

void setup_buzzer(){
    pinMode(buzzerPin, OUTPUT); // Définit la broche du buzzer comme une sortie
}

void soundAlarm() {
    digitalWrite(buzzerPin, HIGH);  // Allume le buzzer
}
