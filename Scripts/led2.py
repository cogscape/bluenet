#	Python script (2) for index buttons
#
#	Version 0.0.3-alpha (30.05.2018 17:11)
#

	# [ System testing ]
	# Send switching signal LO/HI to GPIO
	# Added to project in v0.0.3

import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(23,GPIO.OUT)
print "LED start"

c = 0
while c < 10:
	GPIO.output(23,GPIO.HIGH)
	time.sleep(0.5)
	GPIO.output(23,GPIO.LOW)
	time.sleep(0.5)
	c += 1
