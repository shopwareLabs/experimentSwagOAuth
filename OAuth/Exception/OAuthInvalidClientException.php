<?php declare(strict_types=1);

namespace SwagOAuth\OAuth\Exception;

class OAuthInvalidClientException extends OAuthException
{
    protected $code = 'invalid_client';
    protected $message = 'Client authentication failed, such as if the request contains an invalid client ID or secret.';
}