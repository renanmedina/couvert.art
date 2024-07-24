<?php
use App\Authentication\Translators\FacebookUserTranslator;

describe('translateToUserData', function() {
    $translator = new FacebookUserTranslator();
    $mockFacebookUser = (object) [
        "id" => 1,
        "token" => "",
        "refreshToken" => "",
        "expiresIn" => 5848488,
        "name" => "Mock Facebook User",
        "email" => "mock-email@facebook.com",
        "avatar_url" => "",
    ];
    $translatedData = $translator->translateToUserData($mockFacebookUser);

    it('calculates expiresAt for token', function() use ($translatedData) {
        expect($translatedData['facebook_token_data']['expires_at'])->not->toBeEmpty();
    });

    it('creates a subarray with token information', function() use ($translatedData) {
        $exceptedKeys = ["access_token","refresh_token", "created_at", "expires_in", "expires_at"];
        expect(array_keys($translatedData['facebook_token_data']))->toMatchArray($exceptedKeys);
    });

    it('returns an array of \App\Accounts\Models\User fillable fields', function() use ($translatedData) {
        $exceptedKeys = [
            'facebook_user_id',
            'facebook_token_data',
            'name',
            'email',
            'avatar_url',
            'password'
        ];
        expect(array_keys($translatedData))->toMatchArray($exceptedKeys);
    });
});
