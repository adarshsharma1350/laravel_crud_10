<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel 10 CRUD

# Various Commands

    php artisan about
    php artisan about --only=enviornment
    php artisan config:show database

    php artisan env:encrypt
    php artisan env:encrypt --key=3UVsEgGVK36XN82KKeyLFMhvosbZN1aF
    php artisan env:encrypt --env=staging

    php artisan env:decrypt
    php artisan env:decrypt --key=3UVsEgGVK36XN82KKeyLFMhvosbZN1aF
    php artisan env:decrypt --key=qUWuNRdfuImXcKxZ --cipher=AES-128-CBC
    php artisan env:decrypt --env=staging
    php artisan env:decrypt --force

    php artisan config:clear
    php artisan config:publish
    php artisan config:publish -all

    php artisan down
    php artisan down --refresh=20
    php artisan down --retry=50
    php artisan down --secret="1630542a-246b-4b66-afa1-dd72a4c43515"
    php artisan down --with-secret
    php artisan down --render="errors::503"

    php artisan up
    
