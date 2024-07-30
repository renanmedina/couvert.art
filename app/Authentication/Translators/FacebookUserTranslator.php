<?php
namespace App\Authentication\Translators;

class FacebookUserTranslator {
    function translateToUserData($facebookUser): array {
        $tokenCreatedAt = now();
        $tokenExpiresAt = $tokenCreatedAt->clone()->addSeconds($facebookUser->expiresIn);

        return [
            'facebook_user_id' => $facebookUser->id,
            'facebook_token_data' => [
                "access_token" => $facebookUser->token,
                "refresh_token" => $facebookUser->refreshToken,
                "created_at" => $tokenCreatedAt,
                "expires_in" => $facebookUser->expiresIn,
                "expires_at" => $tokenExpiresAt
            ],
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'avatar_url' => $facebookUser->avatar_url,
            'password' => 'changeme'
        ];
    }
}
