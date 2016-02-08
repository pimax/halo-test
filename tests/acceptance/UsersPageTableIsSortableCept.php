<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('sign in');
$I->amOnPage('/users');
$I->fillField('#user', 'demo');
$I->fillField('#pass', 'demo');
$I->click('Sign in');

$I->see('Users', 'h3');


$I->click('#users-table thead th:first-child');
$I->see('Mr Test', '#users-table tbody tr:first-child td:first-child');