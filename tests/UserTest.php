<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        $user = new User;

        $user->first_name = "Nam";
        $user->surname = "Doi";

        $this->assertEquals("Nam Doi", $user->getFullName());
    }

    public function testtFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }
    
    /**
     * @test
     */
    public function user_has_first_name()
    {
        $user = new User;

        $user->first_name = "Mio";

        $this->assertEquals('Mio', $user->first_name);
    }
}