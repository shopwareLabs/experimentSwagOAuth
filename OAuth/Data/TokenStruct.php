<?php declare(strict_types=1);

namespace SwagOAuth\OAuth\Data;

use Shopware\Core\Framework\Struct\Struct;

class TokenStruct extends Struct
{
    /** @var string */
    private $id;

    /** @var string */
    private $token;

    /** @var string */
    private $contextToken;

    /** @var string */
    private $accessTokenId;

    /** @var string */
    private $tenantId;

    /** @var int Unix Timestamp */
    private $expires;

    /** @var string */
    private $xSwAccessKey;

    public function __construct(
        string $id,
        string $token,
        string $contextToken,
        string $accesTokenId,
        string $tenantId,
        string $xSwAccessKey,
        int $expires
    ) {
        $this->id = $id;
        $this->token = $token;
        $this->contextToken = $contextToken;
        $this->accessTokenId = $accesTokenId;
        $this->tenantId = $tenantId;
        $this->xSwAccessKey = $xSwAccessKey;
        $this->expires = $expires;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getContextToken(): string
    {
        return $this->contextToken;
    }

    public function getAccessTokenId(): string
    {
        return $this->accessTokenId;
    }

    public function getTenantId(): string
    {
        return $this->tenantId;
    }

    public function getXSwAccessKey(): string
    {
        return $this->xSwAccessKey;
    }

    public function getExpires(): int
    {
        return $this->expires;
    }

    public function isExpired(): bool
    {
        return $this->expires < time();
    }
}