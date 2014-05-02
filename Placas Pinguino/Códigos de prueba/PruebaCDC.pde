unsigned char rxstr[64];
int numCaracteres = 0;

void setup()
 {
 }
 
void loop()
 {
    //CDC.printf("Press a Key ...\r\n");
    
    numCaracteres  = CDC.read(rxstr);
    
    if(numCaracteres > 0)
    {
        //CDC.printf("%d\n\r",numCaracteres);
        CDC.printf("%s\n\r",rxstr);
    }
}