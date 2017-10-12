<?php

/**
 * Configuration options for Salesforce Oath settings and REST API defaults.
 */
return [

    /*
     * Options include WebServer or UserPassword
     */
    'authentication' => 'UserPassword',

    /*
     * Enter your credentials
     * Username and Password are only necessary for UserPassword flow.
     * Likewise, callbackURI is only necessary for WebServer flow.
     */
    'credentials'    => [
        //Required:
        'consumerKey'    => '3MVG9zlTNB8o8BA0aBgAb2lts4mcW0CWBiD2cZC2fd_RDWEidVBpOEzkL1Rdv3Pi1PKA96bMDKQ==',
        'consumerSecret' => '358751127791857360',
        'callbackURI'    => 'https://teamdocassist.ca/callback',
        'loginURL'       => 'https://login.salesforce.com',

        // Only required for UserPassword authentication:
        'username'       => 'artur.kardash@jointoit.com',
        // Security token might need to be ammended to password unless IP Address is whitelisted
        'password'       => 'Ghbdtnvbh1989EhyAFfzUH9R5IMBVHbfUmI0t',
    ],

    /*
     * These are optional authentication parameters that can be specified for the WebServer flow.
     * https://help.salesforce.com/apex/HTViewHelpDoc?id=remoteaccess_oauth_web_server_flow.htm&language=en_US
     */
    'parameters'     => [
        'display'   => '',
        'immediate' => false,
        'state'     => '',
        'scope'     => '',
        'prompt'    => '',
    ],

    /*
     * Default settings for resource requests.
     * Format can be 'json', 'xml' or 'none'
     * Compression can be set to 'gzip' or 'deflate'
     */
    'defaults'       => [
        'method'          => 'get',
        'format'          => 'json',
        'compression'     => false,
        'compressionType' => 'gzip',
    ],

    /*
     * Where do you want to store access tokens fetched from Salesforce
     */
    'storage'        => [
        'type'          => 'session', // 'session' or 'cache' are the two options
        'path'          => 'forrest_', // unique storage path to avoid collisions
        'expire_in'     => 16293600, // number of minutes to expire cache/session
        'store_forever' => true, // never expire cache/session
    ],

    /*
     * If you'd like to specify an API version manually it can be done here.
     * Format looks like '32.0'
     */
    'version'        => '',

    /*
     * Optional (and not recommended) if you need to override the instance_url returned from Saleforce
     */
    'instanceURL'    => '',

    /*
     * Language
     */
    'language'       => 'en_US',
];
