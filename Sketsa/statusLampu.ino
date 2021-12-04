// -------------------------------------------------
// Sketsa untuk mengontrol enam lampu
//    dengan membaca data keadaan pada tabel peranti
//    Diwujudkan dengan menggunakan Ethernet Shield
// -------------------------------------------------

#include <Ethernet.h>

const int PIN_LED[] = {2, 3, 4, 5, 6, 7}; 

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };

// Alamat server perlu diganti dengan domain Anda
char server[] = "ardubeta.heliohost.org";

// Deklarasi objek klien
EthernetClient www;

String tanggapan;

void setup() {
  // Atur pin-pin yang terhubung ke LED
  for (int j = 0; j < 6; j++) 
    pinMode(PIN_LED[j], OUTPUT);
  
  Serial.begin(9600);
  Ethernet.begin(mac);
}

void loop() {
  Serial.println("Koneksi ke server...");
  
  if (www.connect(server, 80)) { 
    String dataPost = "pemakai=admin&sandi=pelikan";

    www.println("POST /dataLampu.php HTTP/1.1");
    www.print("Host:  ");
    www.println(server); 
    www.println("Content-Type: application/x-www-form-urlencoded;");
    www.print("Content-Length: ");
    www.println(dataPost.length());
    www.println();
    www.println(dataPost);
      
    // Baca tanggapan dari server maksimal 10 detik
    tanggapan = "";
    boolean tanggapanAda = false;
    long awal = millis();
    while (!tanggapanAda && millis() - awal < 10000) {
      // Untuk memeriksa kiriman dari server 
      if (www.available()) {
        tanggapanAda = true;
        while (www.available()) {
          char karakter = www.read();
          tanggapan += karakter;
        }

        Serial.println(tanggapan);
        prosesLed();
      }
    }

    // Tutup koneksi
    www.stop();
  }  
}

void prosesLed() {
  aturLED('A');
  aturLED('B');
  aturLED('C');   
  aturLED('D');
  aturLED('E');
  aturLED('F');
}

void aturLED(char kode) {
  String dicariNol = "\"" + String(kode) + "\",\"0\",";
  String dicariSatu = "\"" + String(kode) + "\",\"1\",";
  
  if (tanggapan.indexOf(dicariNol) > -1)
    digitalWrite(PIN_LED[kode - 'A'], LOW);
  else
    if (tanggapan.indexOf(dicariSatu) > -1)
      digitalWrite(PIN_LED[kode - 'A'], HIGH);
}

