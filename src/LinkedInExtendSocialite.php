<?php
namespace SocialiteProviders\LinkedIn;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LinkedInExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'linkedin', __NAMESPACE__.'\Provider'
        );
    }
}
