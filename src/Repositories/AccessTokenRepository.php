<?php

namespace Quadro\SimpleOAuth2\Repositories;

use League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use Quadro\SimpleOAuth2\Entities\AccessTokenEntity;

class AccessTokenRepository implements AccessTokenRepositoryInterface
{
    public function getNewToken(ClientEntityInterface $clientEntity, array $scopes, $userIdentifier = NULL)
    {
        return new AccessTokenEntity;
    }

    public function persistNewAccessToken(AccessTokenEntityInterface $accessTokenEntity)
    {

    }

    public function revokeAccessToken($tokenId)
    {

    }

    public function isAccessTokenRevoked($tokenId)
    {
        return TRUE;
    }
}