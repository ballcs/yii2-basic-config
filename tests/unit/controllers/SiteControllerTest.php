<?php
namespace test\unit\controller;
use app\controllers\SiteController;
use Yii;

class SiteControllerTest extends \Codeception\Test\Unit 
{
    public function testActionIndex(){
        $controller = new SiteController('site',Yii::$app);
        $response = $controller->actionIndex();
        $this->assertStringContainsString("Congra",$response);

    }

   /* public function testActionSignupUser(){
        $request_mock = $this->createMock(Request::class);

        $request_mock ->method('post')->willReturn([

            'SignupForm'=>[
                'username'=>'dev01',
                'email'=>'dev@gmail.com',
                'password'=>'123456'

            ]
            ]);

            Yii::$app->set('request',$request_mock);
            $controller = new SiteController('site',Yii::$app);

            /////----------
            

            //รอ------

    }*/


}

?>