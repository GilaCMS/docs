# More classes

## Class gpost

Make easy post requests from the server with the constructor of the class.

### body ()
Returns the row contents of the response

### json ()
Returns the response data in object format or null

### header ()
Returns a header value. If header is not specified, it return the array of headers

**Parameters**
- $key: (optional) the header name

### set ($name, $args)
(static) Sets the prefix arguments of a base gpost

**Parameters**
- $name:string the base name
- $args:assoc the arguments to save

**Examples**
```
$postData = ['id'=> 100];
$args = ['type'=> 'x-www-form-urlencoded'];

// directly to endpoint
$response = new gpost('https://api.example.com/get', $postData, $args);

// using a base
$args['url] = 'https://api.example.com/';
gpost::set('api_ex', $args);
$response = new gpost('get', $postData, 'api_ex');

```

## Class gForm

Displays forms

### posted ()
(static) It compares the value *formToken* from the request (GET/POST) with
the stored token in session. If the name is specified the stored token will
be removed in this function. Return boolean.

**Parameters**
- $name: (optional) the form token name.

### verifyToken ($name, $check)
Compares a value to the stored token in session. Returns boolean

**Parameters**
- $name: the form token name
- $check: the value

### getToken ()
(static) Creates and returns a new form token.

**Parameters**
- $name: the form token name

### hiddenInput ($name)
(static) Prints a hidden input with the value of the form token.

**Parameters**
- $name: (optional) the form token name

### html ()
(static) Prints the input fields for a form.

**Parameters**
- $fields:assoc the fields to print as input elements
- $values:assoc (optional) values
- $preffic:string (optional) preffix fot the input names
- $suffix:string (optional) suffix fot the input names

### input ($name,$op,$ov = '', $key = '')
(static) Prints an input tag.

**Parameters**
- $name:string the input name
- $op:assoc the field schema
- $ov:string (optional) current value
- $key:string (optional) input label
