<?php

return [ // Ordered by ABC.
    'amazon' => [
        'name' => 'Amazon',
        'developers' => 'https://developer.amazon.com/apps-and-games/services-and-apis',
        'icon' => 'icon-amazon',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'apple' => [
        'name' => 'Apple',
        'developers' => 'https://developer.apple.com/',
        'icon' => 'icon-apple',
        'enabled' => true,
        'sandbox' => false,
        'form' => 'apple.phtml', // Perperation for adding ability to customized OAuth UI forms, currently handled hardcoded.
        'beta' => true,
        'mock' => false,
    ],
    'bitbucket' => [
        'name' => 'BitBucket',
        'developers' => 'https://developer.atlassian.com/bitbucket',
        'icon' => 'icon-bitbucket',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'bitly' => [
        'name' => 'Bitly',
        'developers' => 'https://dev.bitly.com/v4_documentation.html',
        'icon' => 'icon-bitly',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false
    ],
    'box' => [
        'name' => 'Box',
        'developers' => 'https://developer.box.com/reference/',
        'icon' => 'icon-box',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false
    ],
    'discord' => [
        'name' => 'Discord',
        'developers' => 'https://discordapp.com/developers/docs/topics/oauth2',
        'icon' => 'icon-discord',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'dropbox' => [
        'name' => 'Dropbox',
        'developers' => 'https://www.dropbox.com/developers/documentation',
        'icon' => 'icon-dropbox',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'facebook' => [
        'name' => 'Facebook',
        'developers' => 'https://developers.facebook.com/',
        'icon' => 'icon-facebook',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'github' => [
        'name' => 'GitHub',
        'developers' => 'https://developer.github.com/',
        'icon' => 'icon-github',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'gitlab' => [
        'name' => 'GitLab',
        'developers' => 'https://docs.gitlab.com/ee/api/',
        'icon' => 'icon-gitlab',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'google' => [
        'name' => 'Google',
        'developers' => 'https://support.google.com/googleapi/answer/6158849',
        'icon' => 'icon-google',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'keycloak' => [
        'name' => 'Keycloak',
        'developers' => 'https://www.keycloak.org/documentation',
        'icon' => 'icon-google',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'linkedin' => [
        'name' => 'LinkedIn',
        'developers' => 'https://developer.linkedin.com/',
        'icon' => 'icon-linkedin',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'microsoft' => [
        'name' => 'Microsoft',
        'developers' => 'https://developer.microsoft.com/en-us/',
        'icon' => 'icon-windows',
        'enabled' => true,
        'sandbox' => false,
        'form' => 'microsoft.phtml',
        'beta' => false,
        'mock' => false,
    ],
    'notion' => [
        'name' => 'Notion',
        'developers' => 'https://developers.notion.com/docs',
        'icon' => 'icon-notion',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'paypal' => [
        'name' => 'PayPal',
        'developers' => 'https://developer.paypal.com/docs/api/overview/',
        'icon' => 'icon-paypal',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false
    ],
    'paypalSandbox' => [
        'name' => 'PayPal',
        'developers' => 'https://developer.paypal.com/docs/api/overview/',
        'icon' => 'icon-paypal',
        'enabled' => true,
        'sandbox' => true,
        'form' => false,
        'beta' => false,
        'mock' => false
    ],
    'salesforce' => [
        'name' => 'Salesforce',
        'developers' => 'https://developer.salesforce.com/docs/',
        'icon' => 'icon-salesforce',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'slack' => [
        'name' => 'Slack',
        'developers' => 'https://api.slack.com/',
        'icon' => 'icon-slack',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'spotify' => [
        'name' => 'Spotify',
        'developers' => 'https://developer.spotify.com/documentation/general/guides/authorization-guide/',
        'icon' => 'icon-spotify',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'tradeshift' => [
        'name' => 'Tradeshift',
        'developers' => 'https://developers.tradeshift.com/docs/api',
        'icon' => 'icon-tradeshift',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'tradeshiftBox' => [
        'name' => 'Tradeshift',
        'developers' => 'https://developers.tradeshift.com/docs/api',
        'icon' => 'icon-tradeshiftbox',
        'enabled' => true,
        'sandbox' => true,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'twitch' => [
        'name' => 'Twitch',
        'developers' => 'https://dev.twitch.tv/docs/authentication',
        'icon' => 'icon-twitch',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'vk' => [
        'name' => 'VK',
        'developers' => 'https://vk.com/dev',
        'icon' => 'icon-vk',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'zoom' => [
        'name' => 'Zoom',
        'developers' => 'https://marketplace.zoom.us/docs/guides/auth/oauth/',
        'icon' => 'icon-zoom',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'yahoo' => [
        'name' => 'Yahoo',
        'developers' => 'https://developer.yahoo.com/oauth2/guide/flows_authcode/',
        'icon' => 'icon-yahoo',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'yammer' => [
        'name' => 'Yammer',
        'developers' => 'https://developer.yammer.com/docs/oauth-2',
        'icon' => 'icon-yammer',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    'yandex' => [
        'name' => 'Yandex',
        'developers' => 'https://tech.yandex.com/oauth/',
        'icon' => 'icon-yandex',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false,
    ],
    // 'instagram' => [
    //     'name' => 'Instagram',
    //     'developers' => 'https://www.instagram.com/developer/',
    //     'icon' => 'icon-instagram',
    //     'enabled' => false,
    //     'beta' => false,
    //     'mock' => false,
    // ],
    // 'twitter' => [
    //     'name' => 'twitter',
    //     'developers' => 'https://developer.twitter.com/',
    //     'icon' => 'icon-twitter',
    //     'enabled' => false,
    //     'beta' => false,
    //     'mock' => false,
    // ],
    'wordpress' => [
        'name' => 'WordPress',
        'developers' => 'https://developer.wordpress.com/docs/oauth2/',
        'icon' => 'icon-wordpress',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false
    ],
    'stripe' => [
        'name' => 'Stripe',
        'developers' => 'https://stripe.com/docs/api',
        'icon' => 'icon-stripe',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => false
    ],
    // Keep Last
    'mock' => [
        'name' => 'Mock',
        'developers' => 'https://appwrite.io',
        'icon' => 'icon-appwrite',
        'enabled' => true,
        'sandbox' => false,
        'form' => false,
        'beta' => false,
        'mock' => true,
    ],
];
