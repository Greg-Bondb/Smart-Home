bool allume = false;
bool ledacc;

#include "wifi.h"
#include "serveur.h"
#include "button.h"
#include "security.h"
#include "digicode.h"

void setup() {
  setup_lcd();
  config_wifi();
  setup_serveur();
  setup_button();
}

void loop() {
  loop_serveur();
  loop_button();
  alarme();
  digifunc();
  
}
