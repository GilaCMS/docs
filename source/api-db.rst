Class db
----------
.. class:: db

    Class db prepare statements for mysql queries to the connected database.
    We use the global ``$db`` instance to access its methods.

    .. method:: query($q, $args)

        Runs a query and returns the result.

        :param string $q: The query.
        :param (array) $args: Optional. Values to prepare the statement.

        Examples

        .. code-block:: php

            $result1 = $db->query("SELECT title,author FROM post;");
            $result2 = $db->query("SELECT title,author FROM post WHERE user_id=?;",[session::user_id()]);


    .. method:: get($q, $args)

        Runs a query and returns the results as an array.

        :param string $q: The query.
        :param (array) $args: Optional. Values to prepare the statement.

        Example

        .. code-block:: php

            $result = $db->get("SELECT title,author FROM post;");
            // Returns
            [
                0=>[0=>'Lorem ipsum', 'title'=>'Lorem ipsum', 1=>'John', 'author'=>'John'],
                1=>[0=>'Duis aute irure', 'title'=>'Duis aute irure', 1=>'John', 'author'=>'John'],
            ]


    .. method:: gen($q, $args)

        Runs a query and returns a generator that yields the rows.

        :param string $q: The query.
        :param (array) $args: Optional. Values to prepare the statement.

        Example

        .. code-block:: php

            $generator = $db->gen("SELECT title,author FROM post;");


    .. method:: getRows($q, $args)

        Runs a query and returns the results as an array. With rows fetched with mysqli_fetch_row().

        :param string $q: The query.
        :param (array) $args: Optional. Values to prepare the statement.

        Example

        .. code-block:: php

            $result = $db->get("SELECT title,author FROM post;");
            // Returns
            [
                0=>[0=>'Lorem ipsum',1=>'John'],
                1=>[0=>'Duis aute irure',1=>'John'],
            ]

    .. method:: getList($q, $args)

        Runs a query and returns an array with the values of the first columns from the results.

            :param string $q: The query.
            :param (array) $args: Optional. Values to prepare the statement.

            Example

            .. code-block:: php

                $titles = $db->get("SELECT title,author FROM post;");
                // Returns
                [0=>'Lorem ipsum', 1=>'Duis aute irure']



    .. method:: value($q, $args)

        Runs a query and returns the value of the first column of the first row of the results.

            :param string $q: The query.
            :param (array) $args: Optional. Values to prepare the statement.

            Example

            .. code-block:: php

                $res = $db->get("SELECT title FROM post WHERE id=1;");
                // returns
                'Lorem ipsum'


    .. method:: error()

        Return an error if exists from the last query executed.

            Example

            .. code-block:: php

                $res = $db->get("SELECT title,author FROM post;");
                if ($error = $db->error()) {
                    trigger_error($error);
                }


    .. method:: close()

        Closes the connection to the database.

            Example ``$db->close();``
