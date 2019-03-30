<?php

namespace Quadro\SimpleOAuth2\Repositories;

use League\OAuth2\Server\Repositories\ClientRepositoryInterface;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\ClientTrait;
use Quadro\SimpleOAuth2\Entities\ClientEntity;

class ClientRepository implements ClientRepositoryInterface
{
    use EntityTrait, ClientTrait;

    public function getClientEntity($clientIdentifier, $grantType = NULL, $clientSecret = NULL, $mustValidateSecret = true)
    {
        $user = ['client_id' => 'test', 'client_secret' => 'test1234', 'scope' => '', 'redirect_uri' => 'http://localhost/callback'];

        if ($clientIdentifier == $user['client_id'] && $clientSecret == $user['client_secret']) {

            return new ClientEntity($clientIdentifier, $grantType);
        }
    }
}