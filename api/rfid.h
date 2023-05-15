#include <MFRC522.h>

#define RST_PIN 49  // Broche de réinitialisation
#define SS_PIN 48   // Broche de sélection

MFRC522 mfrc522(SS_PIN, RST_PIN);  // Créer un objet MFRC522

void setup_rfid() {
  SPI.begin();
  mfrc522.PCD_Init();
}

String loop_rfid() {
  String uid = "";
  if (mfrc522.PICC_IsNewCardPresent() && mfrc522.PICC_ReadCardSerial()) {

    for (byte i = 0; i < mfrc522.uid.size; i++) {
      uid += String(mfrc522.uid.uidByte[i], HEX);
    }
    Serial.print("UID du badge : ");
    Serial.println(uid);
  } else {
    Serial.println("Aucun badge détecté");
    uid += "Aucun badge détecté";
  }
  return uid;
}

String scannerBadge() {
  String result = "";
  if (mfrc522.PICC_IsNewCardPresent() && mfrc522.PICC_ReadCardSerial()) {
    for (byte i = 0; i < mfrc522.uid.size; i++) {
      result += String(mfrc522.uid.uidByte[i], HEX);
    }
    mfrc522.PICC_HaltA();
    mfrc522.PCD_StopCrypto1();
  }
  return result;
}

void rfidTime() {
  String uid = scannerBadge();

  IPAddress server(192, 168, 137, 1);
  WiFiEspClient client;

  if (client.connect(server, 22001)) {
    Serial.println("Connexion au serveur réussie !");
    String url = "/rfid?uid=" + uid;
client.print(String("GET ") + url + " HTTP/1.1\r\n" + "Host: " + "192.168.137.1" + "\r\n" + "Connection: close\r\n\r\n");
    Serial.println("Requête HTTP envoyée.");
  } else {
    Serial.println("Échec de la connexion au serveur.");
  }
  delay(5000);
}

