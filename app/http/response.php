<?php

class Response
{
  private
    $httpCode = 200,
    $contentType = 'text/html',
    $headers = [];

  public function addHeader(string $key, string $value): self
  {
    $this->headers[$key] = $value;
    return $this;
  }

  public function setContentType(string $contentType): self
  {
    $this->contentType = $contentType;
    $this->addHeader('Content-Type', $contentType);
    return $this;
  }

  public function setHttpCode(int $httpCode): self
  {
    $this->httpCode = $httpCode;
    return $this;
  }

  public function status(int $httpCode): self
  {
    $this->setHttpCode($httpCode);
    return $this;
  }

  private function sendCode()
  {
    http_response_code($this->httpCode);
  }

  private function sendHeaders()
  {
    foreach ($this->headers as $key => $value) {
      header($key . ':' . $value);
    }
  }

  public function send($content = '')
  {
    $this->sendCode();
    $this->sendHeaders();

    switch ($this->contentType) {
      case 'text/html':
        echo $content;
        break;
      case 'application/json':
        echo json_encode(
          $content,
          JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
        );
        break;
      default:
        echo $content;
        break;
    }
  }

  public function json(): self
  {
    $this->setContentType('application/json');
    return $this;
  }

  public function onlyCode(): self
  {
    $this->setContentType('');
    return $this;
  }

  public function error(): self
  {
    $this->setHttpCode(500);
    return $this;
  }

  public function methodNotAllowed(): self
  {
    $this->setHttpCode(405);
    return $this;
  }

  public function notFound(): self
  {
    $this->setHttpCode(404);
    return $this;
  }

  public function ok(): self
  {
    $this->setHttpCode(200);
    return $this;
  }
}
