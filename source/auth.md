### Authentication

In order to make the calls of Web APIs from a different domain you will need to use the token from your user.

**How to generate a Token**

You can generate a unique token key from the */admin/profile* page. Keep this key in secret.


**Use the Token from server calls (PHP)**

You can send the token as post parameter:
```
$url = "https://example.com/cm/delete/post";
$token = "<UNIQUE_TOKEN>";
$options = [
  'http' => [
    'method'  => 'POST',
    'header'  => "Content-type: application/json",
    'content' => http_build_query(['id'=>2, 'token'=>$token]),
    'ignore_errors' => true
  ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
```

**Authenticate from front-end (Javascript)**

In order to make calls from a different domain, you should include the domain of your front-end app in the website's **cors** value. In *config.php* of your installation add:
```
'cors'=> ['myapp.com']
```

From javascript you should authenticate first the user with cedentials and then use the token in your calls.

Example using axios:
```
// authenticate
axios.post('https://example.com/login/auth', {
  email: 'user@mail.com',
  password: 'password'
})
.then((response) => {
  token_key = response.data.token;
});

// send a request
axios.post('https://example.com/cm/delete/post', {
  id: 2,
  token: token_key
})
```
