<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Login into ProcessMaker 3.0');
$I->amOnPage('/syslabs_3_0_1_7/en/neoclassic/login/login');
$I->fillField('form[USR_USERNAME]', 'pepe');
$I->fillField('form[USR_PASSWORD_MASK]', 'p3p1t4');
$I->click('Login');
$I->canSeeInCurrentUrl('main');
$I->see('Designer');
$I->click('Home');
$I->waitForElementVisible('iframe[name="casesFrame"]');
$I->switchToIFrame('casesFrame');
$I->waitForText('New case');
$I->click('New case');
$I->waitForElementVisible('iframe[name="casesSubFrame"]');
$I->switchToIFrame('casesSubFrame');
$I->waitForText('CUN');
$I->doubleClick('//li//span[contains(., "CUN")]');
$I->waitForElementVisible('iframe[name="openCaseFrame"]');
$I->switchToIFrame('openCaseFrame');
$I->waitForText('PQRS');
$I->click('Enviar');
$I->see('This field is required');
