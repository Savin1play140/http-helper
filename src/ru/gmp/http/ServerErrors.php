<?php
namespace ru\gmp\http;

class ServerErrors {
	public const ISE = "HTTP/1.1 500 Internal Server Error\r\nConnection: close\r\n";
	public const BADGATEWAY = "HTTP/1.1 502 Bad Gateway\r\nConnection: close\r\n";
	public const SU = "HTTP/1.1 503 Service Unavailable\r\nConnection: close\r\n";
	public const GATEWAYTIMEOUT = "HTTP/1.1 502 Gateway Timeout\r\nConnection: close\r\n";
}