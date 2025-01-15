from machine import Pin
from utime import sleep

print("Hello, Pi Pico!")

ledRED = Pin(1, Pin.OUT)
ledYELLOW = Pin(9, Pin.OUT)
ledGREEN = Pin(13, Pin.OUT)
while True:
   ledRED.on()
   ledYELLOW.off()
   ledGREEN.off()
   sleep(1)
   ledRED.off()
   ledYELLOW.on()
   ledGREEN.off()
   sleep(1)
   ledRED.off()
   ledYELLOW.off()
   ledGREEN.on()
   sleep(1)
