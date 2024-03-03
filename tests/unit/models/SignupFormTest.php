<?php

namespace tests\unit\models;

use app\controllers\SiteController;
use Yii;
use app\models\SignupForm;
use app\models\User;
use yii\base\Request;

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
       /* $model->username = 'testuser';
        $model->email = 'test@example.com';
        $model->password = 'testpassword';
        $this->assertTrue($model->validate());
*/
        $model->username = '  dev01';
        $model->validate();
        $this->assertEquals("dev01", $model->username);
        
    }

    public function testSignup()  {
        $model= new SignupForm();
        $model->username = "admin";
        $model->password="password";
        $model->email="admin@gmail.com";

        $user= $model->signup();
        $this->assertNotEmpty($model->username);

        
    }


   

}
