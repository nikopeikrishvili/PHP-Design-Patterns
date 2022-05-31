<?php

namespace DesignPatterns\Structural\DataMapper\test;

use DesignPatterns\Structural\DataMapper\StorageAdapter;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;

class DataMapperTest extends \PHPUnit\Framework\TestCase
{
    public function testCanMapToUserFromStorage(){
        $adapter = new StorageAdapter([1=>['user_name'=>'popcorn','email'=>'popcorn@movie.io']]);

        $userMapper = new UserMapper($adapter);

        $user = $userMapper->getById(1);
        $this->assertInstanceOf(User::class, $user);
    }


    public function testThrowsExceptionForRowThatNotInStorage()
    {
        $this->expectException(\InvalidArgumentException::class);
        $adapter = new StorageAdapter([]);

        $userMapper = new UserMapper($adapter);

        $user = $userMapper->getById(1);
    }
}