<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RefuseApplicationContext implements Context
{
    /**
     * @Given /^I want to refuse an application$/
     */
    public function iWantToRefuseAnApplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I send the reason of refusal$/
     */
    public function iSendTheReasonOfRefusal()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^The job seeker is aware of our decision$/
     */
    public function theJobSeekerIsAwareOfOurDecision()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
