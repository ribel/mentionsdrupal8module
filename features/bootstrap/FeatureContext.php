<?php

/**
 * @file
 * @file
 */

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Drupal\DrupalExtension\Context\RawDrupalContext;

/**
 * .
 *
 * Define application features from the specific context.
 */
class FeatureContext extends RawDrupalContext implements Context, SnippetAcceptingContext {
  /**
   * .
   *
   * Initializes context.
   * Every scenario gets its own context object.
   *
   * @param array $parameters
   *   Context parameters (set them in behat.yml)
   */
  public function __construct(array $parameters = []) {
    // Initialize your context here.
  }

  //
  // Place your definition and hook methods here:
  //
  //  /**
  //   * @Given I have done something with :stuff
  //   */
  //  public function iHaveDoneSomethingWith($stuff) {
  //    doSomethingWith($stuff);
  //  }
  //
  /**
   * .
   *
   * @When I wait :waittime seconds
   */
  public function iWaitSeconds($waittime) {
    sleep($waittime);
  }

  /**
   * .
   *
   * @When I custom fill content :text into the body field
   */
  public function fillBodyFieldWithText($text) {
    $this->getSession()->evaluateScript("document.querySelector('iframe').contentWindow.document.querySelector('body').innerHTML = '" . $text . "';");
  }

}
