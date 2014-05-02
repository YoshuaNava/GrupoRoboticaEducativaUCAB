int i = 0;

void setup()
{
    //Configuracion de todos los puertos como puertos de salida
    pinMode(0, OUTPUT);
    pinMode(1, OUTPUT);
    pinMode(2, OUTPUT);
    pinMode(3, OUTPUT);
    pinMode(4, OUTPUT);
    pinMode(5, OUTPUT);
    pinMode(6, OUTPUT);
    pinMode(7, OUTPUT);
    pinMode(8, OUTPUT);
    pinMode(9, OUTPUT);
    pinMode(10, OUTPUT);
    pinMode(11, OUTPUT);
    pinMode(12, OUTPUT);
    pinMode(13, OUTPUT);
    pinMode(14, OUTPUT);
    pinMode(15, OUTPUT);
    pinMode(16, OUTPUT);
    pinMode(17, OUTPUT);
    pinMode(18, OUTPUT);
    pinMode(19, OUTPUT);
    pinMode(20, OUTPUT);
    pinMode(21, OUTPUT);
    pinMode(22, OUTPUT);
    pinMode(23, OUTPUT);
    pinMode(24, OUTPUT);
    pinMode(25, OUTPUT);
    pinMode(26, OUTPUT);
    pinMode(27, OUTPUT);
    pinMode(28, OUTPUT);
    pinMode(USERLED, OUTPUT);
}
 
void loop()
{
    //Prueba puertos digitales
    toggle(0);			// alternate ON and OFF
    toggle(1);			// alternate ON and OFF
    toggle(2);			// alternate ON and OFF
    toggle(3);			// alternate ON and OFF
    toggle(4);			// alternate ON and OFF
    toggle(5);			// alternate ON and OFF
    toggle(6);			// alternate ON and OFF
    toggle(7);			// alternate ON and OFF
    toggle(8);			// alternate ON and OFF
    toggle(9);			// alternate ON and OFF
    toggle(10);			// alternate ON and OFF
    toggle(11);			// alternate ON and OFF
    //toggle(12);			// alternate ON and OFF
    //toggle(13);			// alternate ON and OFF
    toggle(14);			// alternate ON and OFF
    toggle(15);			// alternate ON and OFF
    toggle(16);			// alternate ON and OFF
    toggle(17);			// alternate ON and OFF
    toggle(18);			// alternate ON and OFF
    toggle(19);			// alternate ON and OFF
    toggle(20);			// alternate ON and OFF
    toggle(21);			// alternate ON and OFF
    toggle(22);			// alternate ON and OFF
    toggle(23);			// alternate ON and OFF
    toggle(24);			// alternate ON and OFF
    toggle(25);			// alternate ON and OFF
    toggle(26);			// alternate ON and OFF
    toggle(27);			// alternate ON and OFF
    toggle(28);			// alternate ON and OFF
    toggle(USERLED);			// alternate ON and OFF
    
    //Prueba PWM
    for(i=0; i<1024 ;i++)
    {
        analogWrite(11,i);
        analogWrite(12,i);
        delay(1);
    }
     
    //CDC.print("TOTO",4); // Send string throug emulated serial port to pc
    //delay(500);
}
