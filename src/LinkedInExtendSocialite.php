<?php
namespace SocialiteProviders\LinkedIn;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LinkedInExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('linkedin', __NAMESPACE__.'\Provider');
    }
}
