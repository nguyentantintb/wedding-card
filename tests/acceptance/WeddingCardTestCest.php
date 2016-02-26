<?php


class WeddingCardTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testWeddingCardHomepageContain(AcceptanceTester $I)
    {
        $I->wantTo('Check If Home page contains ');

        $I->amOnPage('/');
        $I->see('TRANG CHỦ');
        $I->see('GIỎ HÀNG');
        $I->see('ĐẶT HÀNG');
        $I->see('LOẠI THIỆP');
        $I->see('TÀI KHOẢN');
        $I->see('LIÊN HỆ');
    }

    public function testWeddingCardLoginpageContain(AcceptanceTester $I)
    {
        $I->wantTo('Check If Login page contains ');

        $I->amOnPage('/auth/login');
        $I->see('NEW CUSTOMER');
        $I->see('RETURNING CUSTOMER');
        $I->see('ACCOUNT');
        $I->see('LOGIN');
        //$I->see('Forgotten Password ');
        $I->see('Register Account');
    }

    public function testWeddingCardContactpageContain(AcceptanceTester $I)
    {
        $I->wantTo('Check If Contact page contains ');

        $I->amOnPage('/contact');
        $I->see('CONTACT');
        $I->see('CONTACT INFO');
        // $I->see('Send email');
        $I->see('Name');
        $I->see('Email');
        $I->see('Phone Number');
        $I->see('Message');
    }

    public function testWeddingCardCartpageContain(AcceptanceTester $I)
    {
        $I->wantTo('Check If Shopping Cart page contains ');

        $I->amOnPage('/shopping-cart');
        $I->see('SHOPPING CART');
        $I->see('Hình');
        $I->see('Tên thiệp');
        $I->see('Số lượng');
        $I->see('Hành Động');
        $I->see('Giá');
        $I->see('Tổng Cộng');
        $I->see('Đặt Hàng');
    }
}
