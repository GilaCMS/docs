## Class Table

Class Table is a tool to make queries to the database, that escapes sql injections and checks the user permissions for you.

How to create an instance:
```
$userTable = new Table('user');
$userTable = new Table('src/core/tables/user.php');
```

**Parameters**
- $name:string the table name or the relevant schema file
- $permissions:assoc the permissions list Default: admin

The permissions that will be send will override this array:
```
[
  'create'=> ['admin'],
  'read'=> ['admin'],
  'update'=> ['admin'],
  'delete'=> ['admin']
]
```
So, by default the created Table instance uses the admin permission, and it will compare them with the permissions that the table [schema](schemas.html#table-schema) accepts. The The keys of the array can have a string array of permissions or boolean (true|false) for value.


### name ()
Returns the table name


### id ()
Returns the field name used as primary key


### can ()
Returns true if an action is permited based on permissions. When a field name is no specified the response applies for the default permission for all the fields.

**Parameters**
- $action:string the action name
- $field:string (optional) field name 

The permissions that will be send will override this array:
```
$permissions = user::permissions(Session::user_id());
$userTable = new Table('user', $permissions);
$userTable->can('read', 'password');
$userTable->can('delete'); // create & delete are not specified for fields 
```


### getTable ()
Returns all table schema


### getFields ()
Returns field schemas


### getEmpty ()
Returns a new row with empty and predefined values

### getRow ()
Returns a result in assoc arrow

**Parameters**
- $filters: the filters
- $args: (optional) more arguments

Example
```
$row = $user->getRow(['id'=>1]);
```

**Argument keys**
- select:array the list of fields to return
- orderby:assoc the prefered order of the results
- limit:int/array the limit values for the query
- page:int the page of total results (calculates the limit values)

### getRows ()
Returns all results 

**Parameters**
- $filters:assoc (optional) the filters
- $args:assoc (optional) more arguments

Example
```
$userNames = $user->getRows([
  'active'=> 1
],
[
  'select'=> ['name'],
  'orderby'=> ['name'=>'ASC'],
  'page'=> 1
]);
```


### getRowsIndexed ()
Like getRows(), but rows are indexed arrays not associative arrays 

**Parameters**
- $filters:assoc (optional) the filters
- $args:assoc (optional) more arguments


### totalRows ()
Returns the number of rows found

**Parameters**
- $filters:assoc (optional) the filters


### deleteRow ()
Deletes a row from the database table

**Parameters**
- $id:int the value of primary key

### update ()
Updates or creates table in database based on schema. Can be used from update.php file from your package.

Example
```
Gila::content('post','core/tables/post.php');
$postTable = new Table('post');
$postTable->update();
```
