<?php

interface HttpResponseInterface
{
    public function setCode(int $code): void;
    public function getCode(): int;

    public function setContent(string $content): void;
    public function getContent();

    public function setHeader($header): void;
    public function getHeader();

    public function setInfo($infos): void;
    public function getInfo();

    public function setError(bool $error): void;
    public function getError(): bool;

    public function setErrorMessage(?string $errorMessage): void;
    public function getErrorMessage(): ?string;

    public function setData($data): void;
    public function getData();
}