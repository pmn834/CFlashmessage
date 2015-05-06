<?php

namespace pmn834\CFlashmessage;

/**
 * Flash messages-
 * 
 */ 
class CFlashmessageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test 
     *
     * @return void
     *
     */
    public function testCreateFlashMessageObject() 
    {
        $msg = new \pmn834\CFlashmessage\CFlashmessage();
        $this->assertTrue($msg->getUseFA());
        
        $msg = new \pmn834\CFlashmessage\CFlashmessage('nofa');
        $this->assertFalse($msg->getUseFA());
    }
    
    /**
     * Test 
     *
     * @return void
     * 
     */
    public function testAddNewInfoMessage() 
    {
        $msg = new \pmn834\CFlashmessage\CFlashmessage();
        $msg->info("Info message");
        $res = $msg->output();
        $exp = '<div class="flash_messages"><div class="flash_message flash_info"><i class="fa fa-info"></i>Info message</div></div>';
        $this->assertEquals($res, $exp, "Create Info message failed.");
    }
        
    /**
     * Test 
     *
     * @return void
     * 
     */
    public function testAddNewErrorMessage() 
    {
        $msg = new \pmn834\CFlashmessage\CFlashmessage();
        $msg->error("Error message");
        $res = $msg->output();
        $exp = '<div class="flash_messages"><div class="flash_message flash_error"><i class="fa fa-exclamation-triangle"></i>Error message</div></div>';
        $this->assertEquals($res, $exp, "Create Error message failed.");
    }
    
    /**
     * Test 
     *
     * @return void
     * 
     */
    public function testAddNewSuccessMessage() 
    {
        $msg = new \pmn834\CFlashmessage\CFlashmessage();
        $msg->success("Success message");
        $res = $msg->output();
        $exp = '<div class="flash_messages"><div class="flash_message flash_success"><i class="fa fa-check"></i>Success message</div></div>';
        $this->assertEquals($res, $exp, "Create Success message failed.");
    }
    
    /**
     * Test 
     *
     * @return void
     * 
     */
    public function testAddNewWarningMessage() 
    {
        $msg = new \pmn834\CFlashmessage\CFlashmessage();
        $msg->warning("Warning message");
        $res = $msg->output();
        $exp = '<div class="flash_messages"><div class="flash_message flash_warning"><i class="fa fa-bolt"></i>Warning message</div></div>';
        $this->assertEquals($res, $exp, "Create Warning message failed.");
    }

     
    
    
}