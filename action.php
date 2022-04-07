<?php

$to = "name";
$subject = "email";
$message = "message";

mail(
    string $to,
    string $subject,
    string $message,
    array|string $additional_headers = [],
    string $additional_params = ""
): bool