<?php

use Page\YandexVideo as YandexVideoPage;

class YandexVideoPreviewCest
{
    public function yandexVideoPreviewCheck(AcceptanceTester $I, YandexVideoPage $yandexVideoPage)
    {
        $I->wantTo("Check that when user's cursor hover on video he can see preview");
        $I->amOnPage(YandexVideoPage::$URL);
        $yandexVideoPage->search('ураган');
        $I->moveMouseOver(YandexVideoPage::$FIRST_VIDEO);
        $I->waitForElementChangeAttribute(YandexVideoPage::$FIRST_VIDEO_PREVIEW, 'src');
    }
}
