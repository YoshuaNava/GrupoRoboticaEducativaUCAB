unsigned char rxstr[64];

void setup()
 {
 }
 
void loop()
 {
    //CDC.printf("Press a Key ...\r\n");
    int numCaracteres = CDC.read(rxstr);
    if(numCaracteres > 0)
    {
        CDC.printf(numCaracteres);
        CDC.printf(rxstr);
    }
}