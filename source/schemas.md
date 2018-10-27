
# Schemas



## package.json
package.json is used from both packages and themes to set their values. This schema is daved in json format and uses these indeces:

- **name** (string)

Name of the package or theme.

- **version** (string)

Version in (semantic versioning)[https://semver.org/]

- **description** (string)

A small paragraph explaining what the package does.

- **url** (string)

A path to more information for this package.

- **logo** (string)

An image path to display as logo. Used only by packages.

- **screenshot** (string)

An image path to display as screenshot. Used only by themes.

- **parent** (string)

The parennt package. Used only by themes.

- **options** (object)

An array of options that uses this package. They use the [Field Schema](#field-schema).

- **permissions** (object)

An image path to display as logo. Used only by packages.

Example
```
"permissions": {
		"admin":"All administration privileges",
		"admin_user":"Administrate users"
}
```

- **lang** (string)

A relative path to the language prefix that translates the strings set in the package.json like permissions and option labels.

## Table Schema

The table schema is used for a content type. It gives to the application the structure of the database table that stores the data. So the content administration page will be generated on its own and the content creators can manipulate the data with no further code.

- **name** (string)

The name of database table that data is stored.

- **title** (string)

The title to display at content administration.

- **id** (string)

The field index that is the primary key on database table. Default value is *id*.

- **permissions** (assoc array)

Associative array of user permissions required to run the actions. Example:
```
'permissions'=>[
        'create'=>['admin','content-contributor'],
        'update'=>['admin','content-editor'],
        'delete'=>['admin']
    ],
```

- **fields** (assoc array)

Associative array of the content fields. They follow the [Field Schema](#field-schema). Example:
```
'title'=> [
            'title'=>'Title',
        ],
```

- **pagination** (int)

Number of results per page in content administration.

- **lang** (string)

A relative path to the language prefix that translates the strings set in thetable schema like permissions and field titles.

- **search-box** (boolean)

If true, it displays a search box in content administration.

- **tools** (array)

An array of tools that will be displayed in content administration.

- **commands** (array)

An array of commands that will be displayed in content administration.

- **search-boxes**

An array of field names.  Their search filters will be displayed in content administration as.

- **children** (assoc array)

References to other content types that are partials of the parent content. The index of a child must be an existing content type. The child is an associative array with two indeces:
    - **parent_id** (string) The field of child table that points to the parent's id.
    - **list** (array) The listed fields of child table. The schema of the child must result in the same list of fields.

Example child for a *shop_order* content type:
```
'children'=>[
        'shop_orderitem'=>[
            'parent_id'=>'order_id', 
            'list'=>['id','image','product_id','description','qty','cost']
        ]
    ]
```

- **events** (array of [string,function])

The first value is the event name and the second value is the function that will be triggered. The function gets a reference to the specific row of the table. Posible values for the event:
    - **change** Runs when a row is created or updated



## Field Schema
Fields are used as options from packages and widgets or as columns from table schemas. When are used as options from packages their format is JSON, the other cases are as php associative arrays.

[Field Schema is still unfinished, please join a chat for more information]

- **title** (string)

The label of the field to display.

- **default** (any)

The default value to use in input field.

- **type** (string)

The field type. Specifies how the data is processed. If *input-type* is not specified it will also be used as input type. These values can be:
    - text
    - select
    - meta

- **input-type** (string)

Specifies what input type will be used. Default values for 1.8.0:
    - select
    - meta
    - radio
    - postcategory
    - media
    - textarea
    - tinymce
    - checkbox
    - switcher
    - list (cannot be used in table schemas)

- **allow-tags** (boolean/string)

Lets the field value keep html tags or remove them. The default value of *allow-tags* is false.

Example
```
"allow-tags": "<a><p><ul><li>",
```
