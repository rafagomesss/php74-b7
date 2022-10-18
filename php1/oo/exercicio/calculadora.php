<?php

class Calculadora
{
    private float $subtotal = 0;
    public function add($value)
    {
        $this->subtotal += $value;
    }

    public function sub($value)
    {
        $this->subtotal -= $value;
    }

    public function multiply($value)
    {
        $this->subtotal *= $value;
    }

    public function divide($value)
    {
        $this->subtotal /= $value;
    }

    public function total()
    {
        return $this->subtotal;
    }

    public function clear()
    {
        $this->subtotal = 0;
        echo '<pre>' . print_r($this, true) . '</pre>';
        exit();
    }
}