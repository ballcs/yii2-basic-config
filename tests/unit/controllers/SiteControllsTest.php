<?php


namespace test\unit\Controller;

use app\controllers\SiteController;
use GuzzleHttp\Psr7\Request;
use Yii;

class SitrControllersTest extends \Codeception\Test\Unit
{
    public function testActionIndex()
    {

        $controller = new SiteController('site', Yii::$app);
        $response = $controller->actionIndex();

        $this->assertStringContainsString('Congratulations!', $response);
        $this->assertStringNotContainsString('go to the login page', $response);
    }
    public function testActionSignupUser()
    {
        $request_mock = $this->createMock(Request::class);

        $request_mock->method('post')->willReturn([
            'SignupForm' => [
                'username' => 'dev01',
                'email' => 'dev01@mailcom',
                'password' => '123456'
            ]
        ]);
        yii::$app->set('request', $request_mock);
        $controller = new SiteController('site', Yii::$app);
        $response = $controller->actionsignupUser();
        $this->assertArrayHasKey('reponse', $response);
        $this->assertEquals('Ok', $response);
    }
}
