<?php


class WeddingCardTestCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests

    public function testLoginSuccsess(FunctionalTester $I)
    {
        $I->wantTo('login as a user');
        $I->haveRecord('users', [
            'name' => 'john',
            'email' =>  'john@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        $I->amOnPage('auth/login');
        $I->fillField('email', 'john@gmail.com');
        $I->fillField('password', '123456');
        $I->click('Login');
        $I->amOnPage('/');
        $I->seeAuthentication();
    }

    public function testRegisterSuccsess(FunctionalTester $I)
    {
        $I->wantTo('register a user');
        $I->amOnPage('/register');
        $I->fillField('name', 'JohnDoe');
        $I->fillField('email', 'johnDoe@gmail.com');
        $I->fillField('password', 'admin');
        $I->fillField('password_confirmation', 'admin');
        $I->click('Continue');       
        $I->amOnPage('/');
    }


}
