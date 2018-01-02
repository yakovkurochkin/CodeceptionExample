<?php

use \Facebook\WebDriver\WebDriverElement;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Waits up to $timeout seconds for the given element to change attribute.
     * If element stays with old attribute, a timeout exception is thrown.
     * @param $element
     * @param $attribute
     * @param null $timeout
     */
    public function waitForElementChangeAttribute($element, $attribute, $timeout = null)
    {
        $attributeData = $this->grabAttributeFrom($element, $attribute);
        $this->waitForElementChange($element, function (WebDriverElement $el) use ($attribute, $attributeData) {
            return $attributeData != $el->getAttribute($attribute);
        }, $timeout);
    }
}
