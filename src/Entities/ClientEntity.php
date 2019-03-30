<?php

namespace Quadro\SimpleOAuth2\Entities;

use League\OAuth2\Server\Entities\ClientEntityInterface;

class ClientEntity implements ClientEntityInterface
{
    protected $clientIdentifier;
    protected $identifier;
    protected $redirectUri;

    public function __construct(string $clientIdentifier, string $grantType)
    {
        $this->name = $clientIdentifier;
        $this->identifier = $grantType;
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRedirectUri()
    {
        return $this->redirectUri;
    }
}
