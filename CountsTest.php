<?php

use PHPUnit\Framework\TestCase;
require_once "Counts.php";

class CountsTest extends TestCase
{
    private $counts;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->counts = new counts();
    }
 
    protected function tearDown(): void
    {
        $this->counts = NULL;
        parent::tearDown();
    }

    //Test of User Requirement / Specification 
    //Equivalence Partitioning (+/-)
    //Boundary Value Analysis / Limit Testing 
    //Decision Table 
    //Cause Effect Graph 
    //Error Guessing

    //Test of User Requirement / Specification
    public function testimt_req1()
    {
        $BeratBadan = 53;
        $TinggiBadan = 1.70;
        $imt = $this->counts->getimt($BeratBadan, $TinggiBadan);
        $this->assertEquals('slim', $imt); 
    }

    //Test of User Requirement / Specification
    public function testimt_req2()
    {
        $BeratBadan = 72;
        $TinggiBadan = 1.70;
        $imt = $this->counts->getimt($BeratBadan, $TinggiBadan);
        $this->assertEquals('normal', $imt); 
    }

    //Test of User Requirement / Specification
    public function testimt_req3()
    {
        $BeratBadan = 78;
        $TinggiBadan = 1.70;
        $imt = $this->counts->getimt($BeratBadan, $TinggiBadan);
        $this->assertEquals('overweight', $imt); 
    }

    //Test of User Requirement / Specification
    public function testimt_req4()
    {
        $BeratBadan = 100;
        $TinggiBadan = 1.70;
        $imt = $this->counts->getimt($BeratBadan, $TinggiBadan);
        $this->assertEquals('obesity', $imt); 
    }

}