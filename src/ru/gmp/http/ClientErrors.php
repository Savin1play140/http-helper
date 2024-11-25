<?php
namespace ru\gmp\http;

class ClientErrors {
	public const BADREQUEST = "HTTP/1.1 400 Bad Request\r\nConnection: close\r\n";
	public const UNAUTHORIZED = "HTTP/1.1 401 Unauthorized\r\nConnection: close\r\n";
	public const FORBIDDEN = "HTTP/1.1 403 Forbidden\r\nConnection: close\r\n";
	public const NOTFOUND = "HTTP/1.1 404 Not Found\r\nConnection: close\r\n";
	public const MNA = "HTTP/1.1 405 Method Not Allowed\r\nConnection: close\r\n";
	public const PAR = "HTTP/1.1 407 Proxy Authentication Required\r\nConnection: close\r\n";
	public const REQUESTTIMEOUT = "HTTP/1.1 408 Request Timeout\r\nConnection: close\r\n";
	public const CONFLICT = "HTTP/1.1 409 Conflict\r\nConnection: close\r\n";
	public const GONE = "HTTP/1.1 410 Gone\r\nConnection: close\r\n";
	public const LENGHTREQUIRED = "HTTP/1.1 411 Lenght Required\r\nConnection: close\r\n";
	public const PTL = "HTTP/1.1 413 Payload Too Large\r\nConnection: close\r\n";
	public const UTL = "HTTP/1.1 414 URL Too Long\r\nConnection: close\r\n";
	public const ImATeapot = "HTTP/1.1 418 I'm a teapot\r\nConnection: close\r\n";
	public const AT = "HTTP/1.1 419 Authentication Timeout\r\nConnection: close\r\n";
	public const MR = "HTTP/1.1 421 Misdirected Request\r\nConnection: close\r\n";
	public const UE = "HTTP/1.1 422 Unprocessable Entity\r\nConnection: close\r\n";
	public const LOCKED = "HTTP/1.1 423 Locked\r\nConnection: close\r\n";
	public const TMR = "HTTP/1.1 429 Too Many Request\r\nConnection: close\r\n";
	public const UFLR = "HTTP/1.1 451 Unavailable For Legal Reasons\r\nConnection: close\r\n";
}