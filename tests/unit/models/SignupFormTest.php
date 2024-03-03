<?php

namespace tests\unit\models;

use Yii;
use app\models\SignupForm;
use app\models\User;

class SignupFormTest extends \Codeception\Test\Unit
{
    protected function _before()
    {
        // You can prepare your test environment here
    }

    protected function _after()
    {
        // Clean up after each test if needed
    }

    public function testRules()
    {
        $model = new SignupForm();

        // Test valid data
        $model->username = 'testuser';
        $model->email = 'test@example.com';
        $model->password = 'testpassword';
        $this->assertTrue($model->validate());

        // Test missing username
        $model->username = null;
        $this->assertFalse($model->validate());

        // Test missing email
        $model->username = 'testuser';
        $model->email = null;
        $this->assertFalse($model->validate());
    }
    public function testSignup()
    {
        $model = new SignupForm();
        //success
        $model->username = "dev01";
        $model->email = "dev01@mail.com";
        $model->password = "123456";

        $user = $model->signup();
        $this->assertNotEmpty($user->username);
        //insert to database success
        $newUser = User::findByUsername($model->username);
        $this->assertNotEmpty($newUser->username);

        //fail
        $model->username = "";
        $user = $model->signup();
        $this->assertNull($user);
    }
}
