<?php

/*-------- Cookies ----------*/

/*
  Cookies are a mechanism for storing data in remote browser and thus tracking or identifying return users.
  You can set specific data to be stored in the browser and then retrive it when the user visits the site again.
  N/B : While creating a cookie, the - setcookie() - function must appear before the <html> tag. Never store sensitive information on cookies 
*/

/**
 * syntax
   setcookie(name, value, expiration time, path, domain, secure, httponly);

   - name : specifies cookie's name
   - value : specifies the cookie's value
   - expiration time : specifies(in seconds) when the cookie is to expire. If this parameter is omitted or set to 0, the cookie will expire at the end of the session when the browser closes
   - path : specifies the server path of the cookie. The default value is the current directory in which the cookie is being set
   - domain : specifies the cookie's domain name. To make the cookie available on all subdomains of enterprise.com, set the domain to "enterprise.com"
   - secure : specifies whether or not the cookie should be transmitted over a secure, HTTPS connection. TRUE indicates that the cookie will only be set if a secure connection exists. Default is false.
   - httponly : If set to true, the cookie will be accessible only through the HTTP protocol. Default is false
*/

// Setting a cookie - The name parameter is the only one that is required

setcookie('name', 'Jack', (time() + 86400) * 30);

if(isset($_COOKIE['name'])) {
  echo 'Welcome back '.$_COOKIE['name'];
}