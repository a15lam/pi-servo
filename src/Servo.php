<?php

namespace A15lam\PiServo;

class Servo
{
        const LEFT = 27;
        const RIGHT = 107;
        const MIDDLE = 67;

        const GPIO = 'gpio';
        const PWM_PIN = 1;

        public function __construct()
        {
                $this->setupPWM();
        }

        protected function setupPWM()
        {
                exec(static::GPIO." mode ".static::PWM_PIN." pwm");
                exec(static::GPIO." pwm-ms");
                exec(static::GPIO." pwmc 400");
                exec(static::GPIO." pwmr 1000");
        }

        public function left()
        {
                $this->writePWM(static::LEFT);
        }

        public function right()
        {
                $this->writePWM(static::RIGHT);
        }

        public function middle()
        {
                $this->writePWM(static::MIDDLE);
        }

        public function writePWM($pulse)
        {
                exec(static::GPIO." pwm ".static::PWM_PIN." ".$pulse);
        }
}
