This is an HTTP assistant for HTTP generation and parsing.

# Parsing example
```php
var_dump(ru\gmp\http\HttpParser::parse($http_request));
```
# Https packet generation examples
```php
// HTTP 200 OK
ru\gmp\http\PacketOK::OK."Content-Length: {$bodyLength}\r\n\r\n{$body}";
// HTTP 305 Use Proxy
ru\gmp\http\PacketRedirection::USEPROXY;
// HTTP 400 Bad Request
ru\gmp\http\ClientErrors::BADREQUEST;
// HTTP 500 Internal Server Error
ru\gmp\http\ServerErrors::ISE;
```
