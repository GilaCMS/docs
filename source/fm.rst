File Manager
============

File Manager controller gets calls from the front end and responds in json format.

/fm/dir
-------
Returns the contents of a directory

Parameters

* ``path`` The relative path (GET/POST)

**Example:**

.. code-block:: bash

   curl 'https://gilacms.com/fm/dir/?t=assets'

**Result:**

.. code-block:: json

    [
      {
        "name": image.jpg,
        "size": 145152,
        "mtime": 2019-02-01 11:01:01,
        "mode": 33206,
        "ext": "jpg"
      },
      .....
    ]

/fm/save
--------
Saves contents in a file

Parameters

* ``path`` The destination file (GET/POST)
* ``contents`` The data to save (POST)


/fm/newfolder
-------------
Creates a new folder

Parameters

* ``path`` The destination folder (GET/POST)


/fm/newfile
-----------
Creates a new empty file

Parameters

* ``path`` The destination file (GET/POST)


/fm/move
--------
Renames a folder or a file

Parameters

* ``path`` The source relative path (GET/POST)
* ``newpath`` The destination relative path (POST)

/fm/delete
----------
Deletes a folder or a file

Parameters

* ``newpath`` The relative path (GET/POST)
