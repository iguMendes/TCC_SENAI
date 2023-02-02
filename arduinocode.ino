int ledpin = 16;
int ledpin2 = 17;
int um = 1;

void setup(){
  pinMode(ledpin,OUTPUT);
  pinMode(ledpin2,OUTPUT);
  Serial.begin(9600);
  Serial.println("serial iniciada");
}

void loop() {
  if(Serial.available() > 0){
    um = Serial.read();
  }
  if((um == '1') and (um == '3')){
    digitalWrite(ledpin,HIGH);
    delay(4000);
    digitalWrite(ledpin, LOW);
    um = 0;
  }else{
    
  
  if(um == '1'){
    digitalWrite(ledpin,HIGH);
    delay(2000);
    digitalWrite(ledpin, LOW);
    um = 0;
  }
  else if(um == '2'){
    digitalWrite(ledpin,HIGH);
    delay(4000);
    digitalWrite(ledpin, LOW);
    um = 0;
  }
  else if(um == '3'){
    digitalWrite(ledpin2,HIGH);
    delay(2000);
    digitalWrite(ledpin2, LOW);
    um = 0;
  }
  else if(um == '4'){
    digitalWrite(ledpin2,HIGH);
    delay(4000);
    digitalWrite(ledpin2, LOW);
    um = 0;
  }
 }
}  
