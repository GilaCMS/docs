# More classes

## Class gpost

Make easy post requests from the server with the constructor of the class.
Use:
```
$postData = ['id'=> 100];
$args = ['type'=> 'x-www-form-urlencoded'];

$response = new gpost('https://api.example.com/get', $postData, $args);
$list = $response->json();
```
**Parameters**
- $url:string the url, or 
- $data:assoc array (optional) posted data
- $args:assoc array (optional)  options
- $name:string (optional) base name

**Option keys**
- type: x-www-form-urlencoded|json Default: json
- ignore_errors:boolean Default: true
- header:assoc array of headers
- method:string Default: POST
- url:string the url, applies only on method set() (see below)


### body ()
Returns the row contents of the response


### json ()
Returns the response data in object format or null


### header ()
Returns a header value. If header is not specified, it returns the array of headers

**Parameters**
- $key: (optional) the header name


### set ()
(static) Sets the prefix arguments of a base gpost

**Parameters**
- $name:string the base name
- $args:assoc options to save

**Examples**
```
$postData = ['id'=> 100];
$args = ['type'=> 'x-www-form-urlencoded'];

// directly to endpoint
$response = new gpost('https://api.example.com/get', $postData, $args);

// using a base, you can skip sending empty arguments as third parameter,
// and send the base api name
$args['url] = 'https://api.example.com/';
$args['header'] = ['Authorization'=> 'Bearer <token>'];
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

### verifyToken ()
Compares a value to the stored token in session. Returns boolean

**Parameters**
- $name: the form token name
- $check: the value

### getToken ()
(static) Creates and returns a new form token.

**Parameters**
- $name: the form token name

### hiddenInput ()
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

Example
```
gForm::html([
  'group'=>[
    'type'=>'select',
    'options'=>[0=>'Group A', 0=>'Group B']
  ]
],
[
  'group'=>1
]);
```


### input ()
(static) Prints an input tag.

**Parameters**
- $name:string the input name
- $op:assoc the field schema
- $ov:string (optional) current value
- $key:string (optional) input label


### addInputType ()
(static) Create a new input type for gForm class.

**Parameters**
- $name:string the input type name
- $function:function a function that returns the html

**Function Parameters**
- $name:string the input name
- $field:assoc the field schema
- $value:mixed the current value

Example
```
gForm::addInputType('group-select', function($name, $field, $value) {
  // a web coomponent that will be rendered with vuejs
  $valueProp = 'value="' . $value . '"';
  $dataProp = 'data-group="' . json_encode($field['options']) . '"';
  return "<group-select $valueProp $dataProp></group-select>";
});
```
