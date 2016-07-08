<?php
$_SERVER['SERVER_NAME'] = 'sample.com';
$I = new FunctionalTester($scenario);
$I->wantTo('internal domain accessible');

$I->amOnPage('/');
$I->see('My web application');
$I->amOnPage('//sample.com/');
$I->see('My web application');
$I->amOnPage('http://sample.com/');
$I->see('My web application');
$I->amOnPage('http://sample.com/site/contact');
$I->see('My web application');
$I->see('Contact Us', 'h1');
