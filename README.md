# php-google-contacts-v3-api

PHP library for the Google Contacts API (v3)

This repository is forked from [rapidwebltd/php-google-contacts-v3-api](https://github.com/rapidwebltd/php-google-contacts-v3-api) and the following changes has been done 

1. Code changes to Support PHP Google Api Client version greater than 2.0.0 and PHP version greater than 5.4

## Dependencies

its dependencies can be installed using `composer`. 

## Setup

1. Install required dependencies. See the 'Dependencies' section above.
2. Copy or rename `.config_blank.json` to `.config.json`. Note the dot (`.`) at the beginning of the file name.
3. Fill in the `clientID`, `clientSecret` in `.config.json`.
  * The `clientID` and `clientSecret` can be found in the Google Developers console at https://console.developers.google.com/ under 'APIs & auth' -> 'Credentials', after enabling the Contacts API.
4. Go to `index.php` in a web browser and click Authorize.
5. Accept the permissions requested on the page displayed. You should then be redirected back to the `test.php` showing the contact lists in a table format and options to edit and create a contant where it takes to `test_individual.php`
6. Setup is done!

## Usage

Also, take a look at the following files for basic examples of how to retrieve contacts. They can also be used to ensure you have currently associated your Google account with the library.

* `test.php`
* `test_individual.php`
