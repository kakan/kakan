Flashmessage module for ANAXMVC
=====
FlashMessage is a tool built for anaxMVC that helps you show flash messages. This module requires you to have anaxMVC installed
so make sure you have that before installing this module.

License
=====
This software is free software and carries a MIT license.

Installation
=====
Install using composer and packagist: "kakan/flashmessage": "dev-master"
Note that you might have to put the stylesheet, Flashmessage.css into the correct folder by yourself.
Correct folders are following



Flashmessage.css = anaxMVC/webroot/css/



CFlashMessage.php = anaxMVC/src/CFlashMessage/


How to get started
=====
The first thing you need to do for Flashmessage to work is to start a session in your front-controller.
After you have started a session you need to add the following code to your front-controller of choise.

---

$di->set('flash', function() { 


    $flash = new \Anax\CFlashMessage\CFlashMessage(); 
    
    
    return $flash; 
}); 

---

This is to initate our module, after our module is initated we are ready to use it. 
You now need to add the following code to show the message you would like displayed.

---

$app->theme->addStylesheet('css/FlashMessage.css');  


$app->flash->newMessage('You have sucessfully installed flashMessage Module', 'Success');


$app->views->add('me/page', array('content' => $app->flash->showMessage()));

---

Your module should now be working and you can show any message you want.
If the module is not working go back to the installation guide and make sure you have done every step correctly.

Functions
====
The functions are important for you because they dictate how your message is displayed.

If we take a look at what functions you can use they are the following:

newMessage($message, $type); 
Replace Message with what you want your flashMessage to type out.
The type is what the div class will be called.
This module comes with 4 preinstalled types(divs), Error,Notice,Success,Warning. You can either use theese preinstalled types
or style your own types using the CSS file that follows this module.

showMessage(); 
This function displays all messages stored in the current session.

deleteMessage();
This function removes all messages stored in the current session.
