# Bootloaders:

Un Bootloader (Gestor de arranque) es un pequeño código que se ejecuta una vez que el sistema se inicia. El código se ejecuta dentro del microcontrolador y es responsable de la transferencia de su aplicación desde su PC a la memoria del microcontrolador y entrega el control a esta aplicación después.

Este pequeño codigo, debe ser cargado una unica vez, al momento de construir tu Pinguino, luego de esto, este codigo estara permamentemente dentro de la Memoria RAM del microcontrolador. Para esta carga inicial debes apoyarte en un programdor de PIC tradicional (Siendo esta la unica vez que deberas usar alguno).

# Versiones
Existen 2 versiones del Booloader 100% compatibles con el Diseño de PinguinoBase 4550:

## Versión 2:
Se puede utilizar tanto en 18F2550 y 18F4550.
## Versión 4:
Se escribe con SDCC ( > 3.0.0 ) , con un tamaño alrededor de 3Kb
