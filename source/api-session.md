## Class Session
Methods related to the current sessions, link with a user

### userId ()
(static) Returns the id of the current user.

Example
```
$userId = Session::userId();
```


### hasPrivilege ()
(static) Checks if logged in user has at least one of the required privileges.
Return True or false.

**Parameters**
- $pri:string/Array The privilege(s) to check.

### permissions ()
(static) Get the list of the permissions for the current user.
