#	Python script (3) for index buttons
#
#	Version 0.0.3-alpha (30.05.2018 17:50)
#

	# [ System testing ]
	# Send switching signal LO/HI to GPIO
	#

import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(24,GPIO.OUT)
print "LED start"

c = 0
while c < 10:
	GPIO.output(24,GPIO.HIGH)
	time.sleep(1.5)
	GPIO.output(24,GPIO.LOW)
	time.sleep(0.5)
	c += 1
