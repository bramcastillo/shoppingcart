<?php
define('URLROOT', 'http://localhost/shoppingcart');
define('SECRET_KEY', 'RYdC5cmDUbgglwwMLTUrcBzs6HXG5NBZ');
define('BRAND_NAME', 'About the Fit');
define('BRAND_EMAIL', 'aboutthefit.php@gmail.com');
define('BRAND_EMAIL_PASS', 'zlnF3X4cM%Z4on53');

// Database config values
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'shoppingcart');

// Flash message types
define('SUCCESS', 'success');
define('INFO', 'info');
define('ERROR', 'danger');

// Generic error message
define('ERROR_MESSAGE', 'Something went wrong. Please try again');

// User authentication notifications
define('LOGIN_REQUIRED', 'You need to be logged in to perform that action');
define('LOGIN_ERROR', 'Email and password combination is wrong');
define('REGISTRATION_ERROR', 'Something went wrong with your registration');

// Form fields validation errors
define('INVALID_NAME', 'Name can only contain letters and spaces and must be at least 2 characters long');
define('INVALID_EMAIL', 'Invalid email address');
define('INVALID_PASS', 'Password needs at least: 4 characters, 1 uppercase letter, 1 lowercase letter, 1 number');
define('EMAIL_TAKEN', 'This email is already registered');
define('EMAIL_DOESNT_EXISTS', 'The email address you entered is not in our database');
define('PASS_MATCH_ERR', 'Password must match confirmation');

// User profile notifications
define('NO_CHANGES', 'No changes to make');
define('DATA_UPDATED', 'Your information was updated successfully');
define('RECOVER_PASSWORD_EMAIL', 'We sent you an email with a link to recover your password');
define('RECOVER_TOKEN_EXPIRED', 'It seems like the link to recover your password has expired. Please ask for a new one in "Forgot my password"');

// // Product notifications
// define('REVIEW_SUBMITTED', 'Your review was submitted successfully');
// define('REVIEW_DELETED', 'Your review was deleted');

// // Cart notifications
// define('ITEM_ADDED', 'Item added to your cart');
// define('ITEM_REMOVED', 'Item removed from your cart');
// define('ERROR_MESSAGE', 'Something went wrong. Please try again');
// define('OVER_BUDGET', 'You don\'t have enough money for this purchase. Please remove some items');
// define('PURCHASE_COMPLETED', 'Your order was processed successfully. You can download the receipt in your profile page.');
// define('VOTE_SUBMITTED', 'Your vote was submitted successfully');
// define('VOTE_ERROR', 'Sorry but you can rate an item only once per session');