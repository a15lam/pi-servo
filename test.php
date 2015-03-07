<?php

include('src/Servo.php');

use A15lam\PiServo\Servo;

$servo = new Servo();

while(true)
{

        $servo->middle();
        sleep(1);
        $servo->left();
        sleep(1);
        $servo->middle();
        sleep(1);
        $servo->right();
        sleep(1);
}
