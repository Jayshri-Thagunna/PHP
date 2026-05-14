<?php
/**
 * a cryptographically secure random password.
 *
 * @param int $length The desired length of the password.
 * @return string The generated password.
 */
function generateSecurePassword($length = 16) {
    // Define character sets
    $sets = [
        'abcdefghijklmnopqrstuvwxyz',
        'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        '0123456789',
        '!@#$%^&*()-_=+'
    ];

    $allChars = implode('', $sets);
    $password = '';

    // 1. Ensure at least one character from each set for complexity
    foreach ($sets as $set) {
        $password .= $set[random_int(0, strlen($set) - 1)];
    }

    // 2. Fill the remaining length with random characters from the entire pool
    for ($i = strlen($password); $i < $length; $i++) {
        $password .= $allChars[random_int(0, strlen($allChars) - 1)];
    }

    // 3. Shuffle the string so the first 4 chars aren't predictable in order
    // str_shuffle is not secure, so we convert to array and use a secure shuffle
    $passwordArray = str_split($password);
    for ($i = count($passwordArray) - 1; $i > 0; $i--) {
        $j = random_int(0, $i);
        $temp = $passwordArray[$i];
        $passwordArray[$i] = $passwordArray[$j];
        $passwordArray[$j] = $temp;
    }

    return implode('', $passwordArray);
}

// Example usage:
echo "12-char: " . generateSecurePassword(12) . "\n";
echo "16-char: " . generateSecurePassword(16) . "\n";
echo "32-char: " . generateSecurePassword(32) . "\n";
?>