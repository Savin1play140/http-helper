<?php
namespace ru\gmp\http;

class PacketOK {
	public const OK = "HTTP/1.1 200 OK\r\nConnection: close\r\n";
	public const CREATED = "HTTP/1.1 201 Created\r\nConnection: close\r\n";
	public const ACCEPTED = "HTTP/1.1 202 Accepted\r\nConnection: close\r\n";
	public const NONAUTHORITATIVEINFO = "HTTP/1.1 203 Non-Authoritative Information\r\nConnection: close\r\n";
	public const NOCONTENT = "HTTP/1.1 204 No Content\r\nConnection: close\r\n";
	public const RESETCONTENT = "HTTP/1.1 205 Reset Content\r\nConnection: close\r\n";
	public const PARTIALCONTENT = "HTTP/1.1 206 Partial Content\r\nConnection: close\r\n";
	public const MULTISTATUS = "HTTP/1.1 207 Multi-Status\r\nConnection: close\r\n";
	public const ALREADYREPORTED = "HTTP/1.1 208 Already Reported\r\nConnection: close\r\n";
	public const IMUSED = "HTTP/1.1 226 IM Used\r\nConnection: close\r\n";
}