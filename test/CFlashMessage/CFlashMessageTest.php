<?php
namespace Anax\CFlashMessage;
class CFlashMessageTest extends \PHPUnit_Framework_TestCase
{
    public function test_newMessage()
    {
        $module = new \Anax\CFlashMessage\CFlashMessage();
        $module->newMessage('Message', 'Error');
        $res = $module->showMessage();
        $exp = "<div class='FlashMessage-Error'><p>Message</p></div>";
        $this->assertEquals($res, $exp, "newMessage failure.");
    }
    public function test_showMessage()
    {
        $module = new \Anax\CFlashMessage\CFlashMessage();
        $res    = $module->showMessage();
        $exp    = null;
        $this->assertEquals($res, $exp, "showMessage failure.");
    }
    public function test_deleteMessage()
    {
        $module = new \Anax\CFlashMessage\CFlashMessage();
        $module->newMessage('Message', 'Error');
        $module->deleteMessage();
        $res = $module->showMessage();
        $exp = null;
        $this->assertEquals($res, $exp, "deleteMessage failure.");
    }
}
?>