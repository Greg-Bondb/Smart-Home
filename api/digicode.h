#include <WiFiEsp.h>
#include <WiFiEspClient.h>
#include <WiFiEspServer.h>
#include <WiFiEspUdp.h>

#include <Keypad.h>

const byte ROWS = 4;  // nombre de lignes sur le clavier
const byte COLS = 4;  // nombre de colonnes sur le clavier

String last_name;
String first_name;

String keycode;
String mul;

char keys[ROWS][COLS] = {  // définition des touches du clavier
  { '1', '2', '3', 'A' },
  { '4', '5', '6', 'B' },
  { '7', '8', '9', 'C' },
  { '*', '0', '#', 'D' }
};
byte rowPins[ROWS] = { 33, 35, 37, 39 };                                 //connect to the row pinouts of the keypad
byte colPins[COLS] = { 41, 43, 45, 47 };                                 //connect to the column pinouts of the keypad
Keypad keypad = Keypad(makeKeymap(keys), rowPins, colPins, ROWS, COLS);  // initialise le clavier

void digifunc() {
  char key = keypad.getKey();  // Lit la touche du keypad

  if (key != 'A') {  // Si une touche est appuyée
    keycode += key;
    mul += "*";
    lcd.clear();
    lcd.print("code : " + mul);
    if (keycode.length() >= 4) {
      for (int i = 0; i < sizeof(utilisateurs) / sizeof(utilisateurs[0]); i++) {
        if (keycode == utilisateurs[i].code) {
          last_name = utilisateurs[i].nom;
          first_name = utilisateurs[i].prenom;
          lcd.clear();
          lcd.print(last_name + " " + first_name);
        }
      }
      if (last_name == "" || first_name == "") {
        lcd.clear();
        lcd.print("code invalide");
      }
      keycode = "";
      mul = "";
      last_name = "";
      first_name = "";
    }
  } else if (key == 'A') {
    rfidTime();
    delay(2000);
  }
}