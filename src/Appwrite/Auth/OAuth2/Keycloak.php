<?php

namespace Appwrite\Auth\OAuth2;

use Appwrite\Auth\OAuth2;

// Reference Material
// https://openid.net/connect/

class Keycloak extends OAuth2
{
     /**
     * @var array
     */
    protected $scopes = [
        // [ARRAY_OF_REQUIRED_SCOPES]
    ];
    
    /**
     * @var array
     */
    protected $user = [];
    
    /**
     * @var array
     */
    protected $tokens = [];
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Keycloak';
    }

    /**
     * @return string
     */
    public function getLoginURL(): string
    {
        $url = $this->endpoint . '[LOGIN_URL_STUFF]';
        return $url;
    }

    /**
     * @param string $code
     *
     * @return array
     */
    protected function getTokens(string $code): array
    {
        if(empty($this->tokens)) {
            // TODO: Fire request to oauth API to generate access_token
            // Make sure to use '$this->getScopes()' to include all scopes properly
            $this->tokens = "[FETCH TOKEN RESPONSE]";
        }

        return $this->tokens;
    }
    
    
    /**
     * @param string $refreshToken
     *
     * @return array
     */
    public function refreshTokens(string $refreshToken):array
    {
        // TODO: Fire request to oauth API to generate access_token using refresh token
        $this->tokens = "[FETCH TOKEN RESPONSE]";

        return $this->tokens;
    }

    /**
     * @param string $accessToken
     *
     * @return string
     */
    public function getUserID(string $accessToken): string
    {
        $user = $this->getUser($accessToken);
        
        // TODO: Pick user ID from $user response 
        $userId = "[USER ID]";
        
        return $userId;
    }

    /**
     * @param string $accessToken
     *
     * @return string
     */
    public function getUserEmail(string $accessToken): string
    {
        $user = $this->getUser($accessToken);
        
        // TODO: Pick user email from $user response 
        $userEmail = "[USER EMAIL]";
        
        return $userEmail;
    }

    /**
     * @param string $accessToken
     *
     * @return string
     */
    public function getUserName(string $accessToken): string
    {
        $user = $this->getUser($accessToken);
        
        // TODO: Pick username from $user response 
        $username = "[USERNAME]";
        
        return $username;
    }
    
     /**
     * @param string $accessToken
     *
     * @return array
     */
    protected function getUser(string $accessToken)
    {
        if (empty($this->user)) {
            // TODO: Fire request to oauth API to get information about users
            $this->user = "[FETCH USER RESPONSE]";
        }

        return $this->user;
    }
}