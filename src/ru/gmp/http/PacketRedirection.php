<?php
namespace ru\gmp\http;

class PacketRedirection {
	public const MC = "HTTP/1.1 300 Multiple Choices\r\nConnection: close\r\n";
	public const MP = "HTTP/1.1 301 Moved Permanently\r\nConnection: close\r\n";
	public const FOUND = "HTTP/1.1 302 Found\r\nConnection: close\r\n";
	public const MT = "HTTP/1.1 302 Moved Temporarily\r\nConnection: close\r\n";
	public const SEEOTHER = "HTTP/1.1 303 See Other\r\nConnection: close\r\n";	
	public const NOTMODIFIED = "HTTP/1.1 304 Not Modified\r\nConnection: close\r\n";
	public const USEPROXY = "HTTP/1.1 305 Use Proxy\r\nConnection: close\r\n";
	public const SWITCHPROXY = "HTTP/1.1 306 Switch Proxy\r\nConnection: close\r\n";
	public const TR = "HTTP/1.1 307 Temporarily Redirect\r\nConnection: close\r\n";
	public const PR = "HTTP/1.1 308 Permanently Redirect\r\nConnection: close\r\n";
}