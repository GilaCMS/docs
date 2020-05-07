## Class db
Class db prepare statements for mysql queries to the connected database.
We use the global ``$db`` instance to access its methods.

### query ()
Runs a query and returns the result.

**Parameters**
- $q:string The query.
- $args:array (optional) Values to prepare the statement.

Examples:
```
$result1 = $db->query("SELECT title,author FROM post;");
$result2 = $db->query("SELECT title,author FROM post WHERE user_id=?;",[Session::user_id()]);
```


### get ()
Runs a query and returns the results as an array.

**Parameters**
- $q:string The query.
- $args:array (optional) Values to prepare the statement.

Example:
```
$result = $db->get("SELECT title,author FROM post;");
// Returns
[
  0=>[0=>'Lorem ipsum', 'title'=>'Lorem ipsum', 1=>'John', 'author'=>'John'],
  1=>[0=>'Duis aute irure', 'title'=>'Duis aute irure', 1=>'John', 'author'=>'John'],
]
```


### gen ()
Runs a query and returns a generator that yields the rows.

**Parameters**
- $q:string The query.
- $args:array (optional) Values to prepare the statement.

Example:
```
$generator = $db->gen("SELECT title,author FROM post;");
```


### getRows ()
Runs a query and returns the results as an array. With rows fetched with mysqli_fetch_row().

**Parameters**
- $q:string The query.
- $args:array (optional) Values to prepare the statement.

Example:
```
$result = $db->get("SELECT title,author FROM post;");
// Returns
[
  0=>[0=>'Lorem ipsum',1=>'John'],
  1=>[0=>'Duis aute irure',1=>'John'],
]
```


### getList ()
Runs a query and returns an array with the values of the first columns from the results.

**Parameters**
- $q:string The query.
- $args:array (optional) Values to prepare the statement.

Example:
```
$titles = $db->get("SELECT title,author FROM post;");
// Returns
[0=>'Lorem ipsum', 1=>'Duis aute irure']
```


### value ()
Runs a query and returns the value of the first column of the first row of the results.

**Parameters**
- $q:string The query.
- $args:array (optional) Values to prepare the statement.

Example:
```
$res = $db->get("SELECT title FROM post WHERE id=1;");
// returns
'Lorem ipsum'
```


### error ()
Return an error if exists from the last query executed.

Example:
```
$res = $db->get("SELECT title,author FROM post;");
if ($error = $db->error()) {
  trigger_error($error);
}
```


### close ()
Closes the connection to the database.

Example
```
$db->close();
```
