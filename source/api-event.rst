Class Event
===========

Registers and fires events (hooks)

listen ()
---------
(static) Sets a new function to run when an event is triggered later.

**Parameters**

* $event:string The event name.
* $handler:(function) The function to call. The functions should expect the parameters sent from *Event::fire()*, and return value when is called from *Event::get()*


fire ()
-------
(static) Fires an event and calls all handling functions.

**Parameters**

* $event:string The event name.
* $params:array (optional) Parameters to send to handlers.


get ()
------
(static) Fires an event and calls the handling function (only one should be set).
Returns the result of the handler.

**Parameters**

* $event:string The event name.
* $default:mixed The value to return if there was no handler called.
* $params:array (optional) Parameters to send to handler.


Basic events
------------
* **load** Runs after all packages where loaded. Useful to overrite values
* **head** Runs inside *&lt;head&gt;* tag in a public page
* **foot**  Runs inside *&lt;head&gt;* tag in a public page
* **sendmail** Replaces *mail()* function in Sendmail class
* **validateUserPassword** Run from *User::create()* to accept the new password
* **recaptcha.form** Can print add a recaptha input in post form like register/contact-form
* **recaptcha** is called to verify the recaptcha code send from form
* **login.btn** can print new buttons in login form
* **login.callback** Runs from /login/callback endpoint
