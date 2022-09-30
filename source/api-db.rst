Class Db
========
Class db prepare statements for mysql queries to the connected database.


query ()
--------
(static) Runs a query and returns the result.

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.

Examples:

.. code-block:: bash

  $result1 = DB::query("SELECT title,author FROM post;");
  $result2 = DB::query("SELECT title,author FROM post WHERE user_id=?;",[Session::userId()]);


get ()
------
(static) Runs a query and returns the results as an array.

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.

Example:

.. code-block:: bash

  $result = DB::get("SELECT title,author FROM post;");
  // Returns
  [
    0=>[0=>'Lorem ipsum', 'title'=>'Lorem ipsum', 1=>'John', 'author'=>'John'],
    1=>[0=>'Duis aute irure', 'title'=>'Duis aute irure', 1=>'John', 'author'=>'John'],
  ]


getAssoc ()
-----------
(static) Runs a query and returns the results as an associative array.

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.


gen ()
------
(static) Runs a query and returns a generator that yields the rows.

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.

Example:

.. code-block:: bash

  $generator = DB::gen("SELECT title,author FROM post;");


getOne ()
---------
(static) Runs a query and returns the first result as an array.

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.

Example:

.. code-block:: bash

  $result = DB::get("SELECT title,author FROM post;");
  // Returns
  [0=>'Lorem ipsum', 'title'=>'Lorem ipsum', 1=>'John', 'author'=>'John']


getRows ()
----------
(static) Runs a query and returns the results as an array. With rows fetched with mysqli_fetch_row().

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.

Example:

.. code-block:: bash

  $result = DB::get("SELECT title,author FROM post;");
  // Returns
  [
    0=>[0=>'Lorem ipsum',1=>'John'],
    1=>[0=>'Duis aute irure',1=>'John'],
  ]


value ()
--------
(static) Runs a query and returns the value of the first column of the first row of the results.

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.

Example:

.. code-block:: bash

  $res = DB::get("SELECT title FROM post WHERE id=1;");
  // Returns
  'Lorem ipsum'


getList ()
----------
(static) Runs a query and returns an array with the values of the first columns from the results.

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.

Example:

.. code-block:: bash

  $titles = DB::get("SELECT title,author FROM post;");
  // Returns
  [0=>'Lorem ipsum', 1=>'Duis aute irure']


getOptions ()
-------------
(static) Returns an associative array using the first column as keys, and the second column as values.

**Parameters**

* $q:string The query.
* $args:array (optional) Values to prepare the statement.

Example:

.. code-block:: bash

  $res = DB::get("SELECT id, title FROM post;");
  // Returns
  [1=>'Lorem ipsum', 2=>'Lorem ipsum2']


error ()
--------
(static) Return an error if exists from the last query executed.

Example:

.. code-block:: bash

  $res = DB::get("SELECT title,author FROM post;");
  if ($error = DB::error()) {
    trigger_error($error);
  }


close ()
--------
(static) Closes the connection to the database.

Example

.. code-block:: bash

  DB::close();


