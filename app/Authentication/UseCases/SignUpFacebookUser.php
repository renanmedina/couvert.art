<?php

namespace App\Authentication\UseCases;

use App\Accounts\Models\User;
use App\Authentication\Translators\FacebookUserTranslator;

class SignUpFacebookUser {

    function __construct(User $userModel, FacebookUserTranslator $translator) {
        $this->userModel = $userModel;
        $this->translator = $translator;
    }

    public function execute($facebookUser): User {
        $translatedData = $this->translator->translateToUserData($facebookUser);
        $user = $this->userModel->updateOrCreate(['facebook_user_id' => $translatedData['facebook_user_id']], $translatedData);
        // TODO: Add event publishing
        return $user;
    }

}
