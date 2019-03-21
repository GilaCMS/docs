
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

