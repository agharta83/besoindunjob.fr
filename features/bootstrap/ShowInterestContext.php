<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class ShowInterestContext implements Context
{
    /**
     * @Given /^I want to show interest for a job seeker$/
     */
    public function iWantToShowInterestForAJobSeeker()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I send my interest to the job seeker$/
     */
    public function iSendMyInterestToTheJobSeeker()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^The job seeker is aware of our interest$/
     */
    public function theJobSeekerIsAwareOfOurInterest()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
