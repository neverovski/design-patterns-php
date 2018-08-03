<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Neverovski
 * Date: 03.08.18
 * Time: 9:45
 */

namespace PatternsPHP\Structural\Composite\Tests;

use PatternsPHP\Structural\Composite\Client;
use PatternsPHP\Structural\Composite\FieldSet;
use PatternsPHP\Structural\Composite\Form;
use PatternsPHP\Structural\Composite\TextArea;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testGetForm()
    {
        $form = new Form('Form element', "Add form element", "/form");
        $form->setMethod("POST");

        $message = new FieldSet('message', "Message");
        $message->add(new TextArea('subject', "Subject"));
        $message->add(new TextArea('body', "Body"));

        $form->add($message);

        $this->assertEquals("<form action=\"/form\" method=\"POST\">\n<h1>Add form element</h1>\n<fieldset><legend>Message</legend>\n<textarea name=\"subject\" placeholder=\"Subject\"></textarea><textarea name=\"body\" placeholder=\"Body\"></textarea></fieldset>\n</form>\n", Client::client($form));
        print("Test GET FORM: SUCCESSFUL \n");
    }
}