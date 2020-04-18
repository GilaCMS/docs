
Class event
-----------
.. class:: event

    Registers and fires events (hooks)

    .. method:: listen($event, $handler)

        (static) Sets a new function to run when an event is triggered later.

        :param string $event: The event name.
        :param function $handler: The function to call.


    .. method:: fire(string $event [,Array $params])

        (static) Fires an event and calls all handling functions.

        :param string $event: The event name.
        :param function $params: (optional) Parameters to send to handlers.

    .. method:: get(string $event, mixed $default [,Array $params])

        (static) Fires an event and calls the handling function (only one should be set).
        Return the result of the handler.

        :param string $event: The event name.
        :param mixed $default: The value to return if there was no handler called.
        :param function $params: (optional) Parameters to send to handler.

