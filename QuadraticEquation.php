<?php


class QuadraticEquation
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function getC(): int
    {
        return $this->c;
    }

    public function getDiscriminant(): float|int
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;
    }

    public function getRoot1()
    {
        return (-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

    public function getRoot2()
    {
        return (-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

    public function calculator() {

        if ($this->a == 0) {
            // code them phan giai phuong trinh bac 1
        } else {
            if ($this->getDiscriminant() < 0) {
                echo "The equation has no roots";
            } else if ($this->getDiscriminant() == 0){
                echo "Nghiem kep = " . (-$this->b) / (2 * $this->a);
            } else {
                echo "2 nghiem phan biet r1= " . $this->getRoot1() . " va r2= " . $this->getRoot2();
            }
        }

    }

}

