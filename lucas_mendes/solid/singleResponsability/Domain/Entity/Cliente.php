<?php

class Cliente  
{
    protected string $name;
    protected string $cpf;
    protected int $age;

    public function __construct(array $cliente)
    {
        $this->setName($cliente["name"]);
        $this->setCpf($cliente["cpf"]);
        $this->setAge($cliente["age"]);
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setAge($age)
    { 
        if ($age < 18) {
            throw new Exception("nao pode ser menor de 18");
        }
        $this->age = $age;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function getAge()
    {
        return $this->Age;
    }
}
