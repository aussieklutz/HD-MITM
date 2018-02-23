#include "Keyboard.h"
#include "Mouse.h"

void setup() {
  // open the serial port:
  Serial1.begin(9600);
  //Serial.begin(9600);
  // initialize control over the keyboard:
  delay(1000);
  Keyboard.begin();
  Mouse.begin();
  delay(1000);
}

char data;

void loop() {
  // check for incoming serial data:
  if (Serial1.available() > 0) {
    // read incoming serial data:
    data = Serial1.read();
    //Serial.println(inChar);
    //Serial1.println(inChar);
    Serial1.println(data);
    if(data == 'a') {
      Mouse.move(10,0,0);
      delay(100);
    }
    if(data == 'b') {
      Mouse.move(0,10,0);
      delay(100);
    }
    if(data == 'c') {
      Mouse.move(-10,0,0);
      delay(100);
    }
    if(data == 'd') {
      Mouse.move(0,-10,0);
      delay(100);
    }
    if(data == 'e') {
      Mouse.click(MOUSE_LEFT);
      delay(10);
    }
    if(data == 'f') {
      Mouse.click(MOUSE_RIGHT);
      delay(10);
    }
    if(data == 'g') {
      Keyboard.press(KEY_RIGHT_CTRL);
      delay(100);
      Keyboard.press(KEY_RIGHT_ALT);
      delay(100);
      Keyboard.press(KEY_DELETE);
      delay(100);
      Keyboard.releaseAll();
    }
    if(data == 'h') {
      Keyboard.press(KEY_ESC);
      delay(100);
      Keyboard.releaseAll();
    }
    if(data == 'i') {
      Keyboard.press(KEY_RIGHT_GUI);
      delay(100);
      Keyboard.print("r");
      delay(100);
      Keyboard.releaseAll();
    }
    if(data == 'j') {
      Keyboard.print("shutdown -r -t 0");
    }
    if(data == 'k') {
      Keyboard.press(KEY_RETURN);
      delay(100);
      Keyboard.releaseAll();
    }
    if(data == 'l') {
      for(int i = 0; i < 100; i++)
      {
        Keyboard.press(KEY_F1);
        Keyboard.press(KEY_F2);
        Keyboard.press(KEY_F11);
        Keyboard.press(KEY_F12);
        Keyboard.press(KEY_DELETE);
        Keyboard.press(KEY_ESC);
        delay(50);
        Keyboard.releaseAll();
        delay(50);
      }
    }
    if(data == 'm') {
      Keyboard.press(KEY_UP_ARROW);
      delay(100);
      Keyboard.releaseAll();
    }
    if(data == 'n') {
      Keyboard.press(KEY_DOWN_ARROW);
      delay(100);
      Keyboard.releaseAll();
    }
    if(data == 'o') {
      Keyboard.press(KEY_LEFT_ARROW);
      delay(100);
      Keyboard.releaseAll();
    }
    if(data == 'p') {
      Keyboard.press(KEY_RIGHT_ARROW);
      delay(100);
      Keyboard.releaseAll();
    }
  }
}
