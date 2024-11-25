<?php
namespace ru\gmp\http;

class HttpParser {
	public static function parse(string $http_request): array {
		$http_lines = explode(PHP_EOL, $http_request);
		$request_params = explode(' ', $http_lines[0]);

		if (count($http_lines) == 1) {
			return [
				'method' => $request_params[0],
				'url' => $request_params[1]
			];
		}

		return [
			'method' => $request_params[0],
			'url' => $request_params[1],
			'headers' => self::parse_header($http_lines),
			'body' => self::parse_body(trim($http_lines[count($http_lines)-1]))
		];
	}

	public static function parse_header(array $http_lines): array {
		$headers = [];

		for ($i = 1; $i < count($http_lines) and str_contains($http_lines[$i], ':'); $i++) { 
			[$header_name, $header_value] = explode(':', $http_lines[$i]);
			$headers[$header_name] = trim($header_value);
		}

		return $headers;
	}

	public static function parse_body(string $body_string): array {
		if (empty($body_string)) return [];

		$body = [];

		foreach (explode('&', $body_string) as $part) {
			[$key, $value] = explode('=', $part, 2);
			$body[$key] = $value;
		}
		return $body;
	}
}