<?php
class AssertNotContainsTestFixture extends \Enhance\EnhanceTestFixture
{
    /** @var \Enhance\EnhanceAssertions $target */
    private $target;
    
    public function setUp()
    {
        $this->target = \Enhance\Enhance::getCodeCoverageWrapper('\Enhance\EnhanceAssertions', array(\Enhance\EnhanceLanguage::English));
    }
    
    public function assertNotContainsWithStringThatContains() 
    {
        $verifyFailed = false;
        try {
            $this->target->notContains('Test', 'Some Test String');
        } catch (Exception $e) {
            $verifyFailed = true;
        }
        \Enhance\Assert::isTrue($verifyFailed);
    }
    
    public function assertNotContainsWithStringThatEndsWith()
    {
        $verifyFailed = false;
        try {
            $this->target->notContains('Test', 'Some Test');
        } catch (Exception $e) {
            $verifyFailed = true;
        }
        \Enhance\Assert::isTrue($verifyFailed);
    }
    
    public function assertNotContainsWithStringThatStartsWith()
    {
        $verifyFailed = false;
        try {
            $this->target->notContains('Test', 'Test Some String');
        } catch (Exception $e) {
            $verifyFailed = true;
        }
        \Enhance\Assert::isTrue($verifyFailed);
    }
    
    public function assertNotContainsWithStringThatDoesNotContain()
    {
        $this->target->notContains('Test', 'Some Other String');
    }
}
?>