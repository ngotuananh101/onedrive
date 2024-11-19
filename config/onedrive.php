<?php

return [
    'client_id' => env('ONEDRIVE_CLIENT_ID'),
    'client_secret' => env('ONEDRIVE_CLIENT_SECRET'),
    'redirect_uri' => env('ONEDRIVE_REDIRECT_URI'),
    'auth_api_url' => env('ONEDRIVE_AUTH_API_URL'),
    'token_api_url' => env('ONEDRIVE_TOKEN_API_URL'),
    'user_api_url' => env('ONEDRIVE_USER_API_URL'),
    'scope' => env('ONEDRIVE_SCOPE'),
    'root_folder_path' => env('ONEDRIVE_ROOT_FOLDER_PATH'),
    'date_format' => env('ONEDRIVE_DATE_FORMAT', 'Y-m-d H:i:s'),
];
