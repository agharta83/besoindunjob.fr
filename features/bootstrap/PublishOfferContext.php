<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class PublishOfferContext implements Context
{
    /**
     * @Given /^I want to publish an offer$/
     */
    public function iWantToPublishAnOffer()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I write the offere$/
     */
    public function iWriteTheOffere()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^The offer is published and job seeker can send their application for a new job$/
     */
    public function theOfferIsPublishedAndJobSeekerCanSendTheirApplicationForANewJob()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
