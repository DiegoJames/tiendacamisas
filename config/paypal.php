<?php
return array(
    // set your paypal credential
    'client_id' => 'AQZkJUgAPc3TdV2WsxJxGotHBqY8HKx3PKg07dq61-9Tkyti-8R8z0dQdOc07QmcyugPHSSu_s84g9pC',
    'secret' => 'EHGcH8qpJ6ikU0ixI6rRi4OpP4Ak14gacJEVqAclqoSiefCKfoWAFAe7-xYt8ifH3FLFFdTz80an94z5',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);