<?php

namespace Tests\Unit\Domain\Entity;

use App\Domain\Entity\Battle;
use PHPUnit\Framework\TestCase;

class BattleTest extends TestCase
{
    public function testSeMetodoBattleExiste()
    {
        $this-assertTrue(
            method_exists(new Battle(), "battle"),
            "A classe nao tem o metodo battle"
        );
    }
}