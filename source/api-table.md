## Class gTable

Make easy post requests from the database with the constructor of the class.
Use:
```
$userTable = new gTable('user');
$userTable = new gTable('src/core/tables/user.php');
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

### name ()
Returns the table name

### id ()
Returns the field name used as primary key

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
