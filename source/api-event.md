
## Class Event

Registers and fires events (hooks)

### listen ()
(static) Sets a new function to run when an event is triggered later.

**Parameters**
- $event:string The event name.
- $handler:(function) The function to call.


### fire ()
(static) Fires an event and calls all handling functions.

**Parameters**
- $event:string The event name.
- $params:array (optional) Parameters to send to handlers.


### get ()
(static) Fires an event and calls the handling function (only one should be set).
Returns the result of the handler.

**Parameters**
- $event:string The event name.
- $default:mixed The value to return if there was no handler called.
- $params:array (optional) Parameters to send to handler.


### Basic events
load
head
foot
sendmail
validateUserPassword
recaptcha
login.btn
login.callback
admin::media
admin::media-view