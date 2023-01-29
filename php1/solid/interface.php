<?php
/* PROBLEMA
interface Aves
{
    public function setLocation($lat, $long);
    public function setAltitude($alt);
    public function render();
}

class Papagaio implements Aves
{
    public function setLocation($lat, $long){}
    public function setAltitude($alt){}
    public function render(){}
}

class Pinguim implements Aves
{
    ## Pinguim não sabe voar, e nesse caso teria que declarar setAltitude desnecessariamente
    public function setLocation($lat, $long){}
    public function setAltitude($alt){}
    public function render(){}
}
*/

/** SOLUÇÃO */

interface Aves
{
    public function setLocation($lat, $long);
    public function render();
}

interface AvesQueVoam extends Aves
{
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam
{
    public function setLocation($lat, $long){}
    public function setAltitude($alt){}
    public function render(){}
}

class Pinguim implements Aves
{
    public function setLocation($lat, $long){}
    public function render(){}
}