CM Controller
=============

[Under Developmet]

Content Manager controller gets calls from the front end and responds in json format.

Actions
-------
* ``describe`` Returns the schema of a content type
* ``list_rows`` Returns the rows as array
* ``update_rows`` Updates entries
* ``empty_row`` Returns a row with the deafault values
* ``insert_row`` Inserts a new row in the content table
* ``delete`` Deletes a row
* ``csv`` Returns the rows in csv format

Parameters
----------
* ``t`` The name of the table
* ``id`` The id of the requested row
* ``<field_name>`` A filter to apply on any field. More options:
** ``<field_name>[gt]`` Greater than
** ``<field_name>[lt]`` Less than
** ``<field_name>[begin]`` A string that begins with
** ``<field_name>[end]`` A string that ends with


**Example:**

.. code-block:: bash

   curl 'https://gilacms.com/cm/describe/?t=post'

**Result:**

.. code-block:: json

    {
        "name": "post",
        "title": "Posts",
        "pagination": 15,
        "id": "id",
        "tools": [
            "new_post",
            "csv"
        ],
        "csv": [
            "id",
            "title",
            "slug",
            "user_id",
            "updated",
            "publish",
            "post"
        ],
        "commands": [
            "edit",
            "clone",
            "delete"
        ],
        "lang": "core\/lang\/admin\/",
        "permissions": {
            "create": [
                "admin"
            ],
            "update": [
                "admin"
            ],
            "delete": [
                "admin"
            ],
            "read": [
                "admin"
            ]
        },
        "search-box": true,
        "search-boxes": [
            "user_id"
        ],
        "fields": {
            "id": {
                "title": "ID",
                "style": "width:5%",
                "create": false,
                "edit": false
            },
            "title": {
                "title": "Title"
            },
            "thumbnail": {
                "type": "meta",
                "list": false,
                "input-type": "media",
                "meta-csv": true,
                "mt": [
                    "postmeta",
                    "post_id",
                    "value"
                ],
                "metatype": [
                    "vartype",
                    "thumbnail"
                ],
                "title": "thumbnail"
            },
            "slug": {
                "list": false,
                "title": "slug"
            },
            "user_id": {
                "title": "User",
                "type": "select",
                "options": {
                    "1": "Vasilis"
                }
            },
            "updated": {
                "title": "Last updated",
                "type": "date",
                "searchbox": "period",
                "edit": false,
                "create": false
            },
            "categories": {
                "edit": true,
                "type": "meta",
                "mt": [
                    "postmeta",
                    "post_id",
                    "value"
                ],
                "metatype": [
                    "vartype",
                    "category"
                ],
                "title": "Categories",
                "options": []
            },
            "tags": {
                "list": false,
                "edit": true,
                "type": "meta",
                "meta-csv": true,
                "mt": [
                    "postmeta",
                    "post_id",
                    "value"
                ],
                "metatype": [
                    "vartype",
                    "tag"
                ],
                "title": "Tags"
            },
            "publish": {
                "title": "Public",
                "style": "width:8%",
                "type": "checkbox",
                "edit": true
            },
            "commands": {
                "title": "",
                "eval": "dv='<a href=\"admin\/posts\/'+rv.id+'\">Edit<\/a>';"
            },
            "post": {
                "list": false,
                "title": "Post",
                "edit": true,
                "type": "textarea",
                "input-type": "tinymce",
                "allow-tags": true
            }
        },
        "events": [
            [
                "change",
                {}
            ]
        ]
    }

