<?php

namespace Page;

class YandexVideo
{
    public static $URL = '/video';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    public static $SEARCH_VIDEO_FIELD = '.input__control';
    public static $SEARCH_VIDEO_BUTTON = '.search2__button';
    public static $FIRST_VIDEO_PREVIEW = '.serp-item_type_search:nth-child(1) .thumb-preview__target';
    public static $FIRST_VIDEO = '.serp-item_type_search:nth-child(1)';
    public static $PROGRESS_LAYOUT = '.fade_progress_yes';


    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function search($query)
    {
        $I = $this->tester;
        $I->fillField($this::$SEARCH_VIDEO_FIELD, $query);
        $I->click($this::$SEARCH_VIDEO_BUTTON);
        $I->waitForElementNotVisible($this::$PROGRESS_LAYOUT);
    }
}
