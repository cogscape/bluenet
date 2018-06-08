#	Python script for index buttons
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
GPIO.setup(18,GPIO.OUT)
print "LED start"

c = 0
while c < 10:
	GPIO.output(18,GPIO.HIGH)
	time.sleep(1)
	GPIO.output(18,GPIO.LOW)
	time.sleep(1)
	c += 1
