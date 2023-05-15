#include <WiFiEsp.h>
#include <ArduinoJson.h>
#include "temperature.h"
#include "led.h"
#include "lcd.h"
#include "flame.h"
#include "motion.h"
#include "micro.h"
#include "gas.h"
#include "photo.h"
#include "ultrasonic.h"
#include "rfid.h"
#include "rgb.h"

WiFiEspServer server(80);  //serveur port

void setup_serveur() {
  server.begin();  // demmarage du serveur
  setup_dht();
  setup_led();
  setup_flame();
  setup_motion();
  setup_micro();
  setup_gas();
  setup_photo();
  setup_ultrasonic();
  setup_rfid();
  setup_rgb();
}

// Fonction pour décoder une chaîne de caractères URL-encoded
String urlDecode(String str) {
  String ret;
  char h;
  for (int i = 0; i < str.length(); i++) {
    if (int(str[i]) == 37) {
      sscanf(str.substring(i + 1, i + 3).c_str(), "%x", &h);
      ret += char(h);
      i += 2;
    } else {
      ret += str[i];
    }
  }
  return ret;
}

void loop_serveur() {

  WiFiEspClient client = server.available();

  if (client) {
    String request = client.readStringUntil('\r');
    client.flush();
    //----------------------------LED---------------------------------------//
    if (request.indexOf("/allumer_led_blanche") != -1) {

      allumerLedW();

    } else if (request.indexOf("/eteindre_led_blanche") != -1) {

      eteindreLedW();

    } else if (request.indexOf("/allumer_led_rouge") != -1) {

      allumerLedR();

    } else if (request.indexOf("/eteindre_led_rouge") != -1) {

      eteindreLedR();

    } else if (request.indexOf("/allumer_led_jaune") != -1) {

      allumerLedY();

    } else if (request.indexOf("/eteindre_led_jaune") != -1) {

      eteindreLedY();

    } else if (request.indexOf("/allumer_led_verte") != -1) {

      allumerLedG();

    } else if (request.indexOf("/eteindre_led_verte") != -1) {

      eteindreLedG();

    } else if (request.indexOf("/activer_alarme") != -1) {

      allume = true;

    } else if (request.indexOf("/rgb") != -1) {

      loop_rgb();

    } 

    //----------------------------------------------------------------//
    else if (request.indexOf("GET /data") != -1) {

      StaticJsonDocument<200> doc;
      doc["temperature"] = loop_temperature();
      doc["flame"] = loop_flame();
      doc["motion"] = loop_motion();
      doc["micro"] = loop_micro();
      doc["gas"] = loop_gas();
      doc["photo"] = loop_photo();
      doc["ultrasonic"] = loop_ultrasonic();
      String file_json;
      serializeJson(doc, file_json);
      String response = "HTTP/1.1 200 OK\r\nAccess-Control-Allow-Origin: *\r\nContent-Type: application/json\r\n\r\n";
      response += file_json;
      client.println(response);

    } else if (request.indexOf("GET /scan-badge") != -1) {
      String uid = loop_rfid();
      if (uid == "Aucun badge détecté") {
        String response = "HTTP/1.1 200 OK\r\nAccess-Control-Allow-Origin: *\r\nContent-Type: text/html\r\n\r\n";
        response += uid;
        client.print(response);
        delay(10);
      } else {
        String response = "HTTP/1.1 200 OK\r\nAccess-Control-Allow-Origin: *\r\nContent-Type: text/html\r\n\r\n";
        response += uid;
        client.print(response);
        delay(10);
      }

    } else if (request.indexOf("/desactiver_alarme")) {

      allume = false;

    } else {
      client.println("HTTP/1.1 404 Not Found");
      client.println("Content-Type: text/html");
      client.println("");
      client.println("<html><body><h1>Page non trouvée.</h1></body></html>");
    }
    client.stop();
  }
}
