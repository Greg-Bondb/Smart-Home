// #include <Servo.h>

// int pos = 180;       // variable to store the servo position
// int servoPin = 3;  // define the pin of servo signal line
// Servo myservo;     // create servo object to control a servo

// void setup_motor() {
//        // attaches the servo on servoPin to the servo object
//          myservo.attach(servoPin);
// }

// void openDoor() {
//   Serial.println("open");
//   for (pos = 180; pos >= 90; pos -= 1) {  // goes from 0 degrees to 180 degrees
//     // in steps of 1 degree
//     myservo.write(pos);  // tell servo to go to position in variable "pos"
//     delay(15);           // waits 15ms for the servo to reach the position
//   }
// }

// void closeDoor() {
//   Serial.println("close");
//   for (pos = 90; pos <= 180; pos += 1) {  // goes from 180 degrees to 0 degrees
//     myservo.write(pos);                   // tell servo to go to position in variable "pos"
//     delay(15);                            // waits 15ms for the servo to reach the position
//   }
// }