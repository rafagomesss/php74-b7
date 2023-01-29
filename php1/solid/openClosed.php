<?php
/* PROBLEMA: CASO PRECISE ADICIONAR CONTRATO PJ, JÁ TERIA QUE ALTERAR A CLASSE E ADICIONAR MAIS UMA VERIFICAÇÃO
class ContratoCLT
{
    public function calcularSalario() {}
}

class Estagio
{
    public function bolsaAuxilio() {}
}

class FolhaDePagamento
{
    public function calcular($funcionario)
    {
        $salario = 0;
        if ($funcionario instanceof ContratoCLT) {
            $salario = $funcionario->calcularSalario();
        } else if ($funcionario instanceof Estagio) {
            $salario = $funcionario->bolsaAuxilio();
        }

        return $salario;
    }
}
*/

/** SOLUÇÃO */
interface Remuneravel
{
    public function remuneracao();
}

class ContratoCLT implements Remuneravel
{
    public function remuneracao()
    {
        
    }
}

class Estagio implements Remuneravel
{
    public function remuneracao()
    {
        
    }
}

class ContratoPJ implements Remuneravel
{
    public function remuneracao()
    {
        
    }
}

class FolhaDePagamento
{
    protected $saldo;

    public function calcular(Remuneravel $funcionario)
    {
        $this->saldo = $funcionario->remuneracao();
    }
}