
# Schemas

Schemas are

## package.json
package.json is used from both packages and themes to set their values. This schema is daved in json format and uses these indeces:

**name** (string)

Name of the package or theme.

**version** (string)

Version in (semantic versioning)[https://semver.org/]

**description** (string)

A small paragraph explaining what the package does.

**url** (string)

A path to more information for this package.

**logo** (string)

An image path to display as logo. Used only by packages.

**screenshot** (string)

An image path to display as screenshot. Used only by themes.

**parent** (string)

The parennt package. Used only by themes.

**options** (object)

An array of options that uses this package. They use the (Field Schema)[#field-schema].

**permissions** (object)

An image path to display as logo. Used only by packages.

Example
```
"permissions": {
		"admin":"All administration privileges",
		"admin_user":"Administrate users"
}
```

**lang** (string)

A relative path to the language prefix that translates the strings set in the package.json like permissions and option labels.


## Field Schema
Fields are used as options from packages and widgets or as columns from table schemas.

**title** (string)

The label of the field to display.

**default** (any)

The default value to use in input field.

**type** (string)

The field type. Specifies how the data is processed. If *input-type* is not specified it will also be used as input type. These values can be:
- text
- select
- meta

**input-type** (string)

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

**allow-tags** (boolean/string)

Lets the field value keep html tags or remove them. The default value of *allow-tags* is false.

Example
```
"allow-tags": "<a><p><ul><li>",
```

