<?php
$text = "  Hello PHP World!  ";
$secondText = "2026 is here.";

echo "<h2>PHP String Operations</h2>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>
        <tr>
            <th>Operation Name</th>
            <th>Output</th>
        </tr>";

// 1. String Length
echo "<tr><td>Original String Length</td><td>" . strlen($text) . "</td></tr>";

// 2. Word Count
echo "<tr><td>Word Count</td><td>" . str_word_count($text) . "</td></tr>";

// 3. Reverse String
echo "<tr><td>Reverse String</td><td>" . strrev(trim($text)) . "</td></tr>";

// 4. Search for Position (Finds 'PHP')
echo "<tr><td>Search Position ('PHP')</td><td>" . strpos($text, "PHP") . "</td></tr>";

// 5. Replace Text
echo "<tr><td>Replace 'World' with 'User'</td><td>" . str_replace("World", "User", $text) . "</td></tr>";

// 6. Lowercase
echo "<tr><td>Convert to Lowercase</td><td>" . strtolower($text) . "</td></tr>";

// 7. Uppercase
echo "<tr><td>Convert to Uppercase</td><td>" . strtoupper($text) . "</td></tr>";

// 8. Capitalize First Letter
echo "<tr><td>Uppercase First Letter (ucfirst)</td><td>" . ucfirst(trim(strtolower($text))) . "</td></tr>";

// 9. Trim Whitespace (Removes spaces from ends)
echo "<tr><td>Trim Whitespace</td><td>[" . trim($text) . "]</td></tr>";

// 10. Substring (Get first 5 characters)
echo "<tr><td>Substring (First 5)</td><td>" . substr(trim($text), 0, 5) . "</td></tr>";

// 11. Repeat String
echo "<tr><td>Repeat String (x2)</td><td>" . str_repeat("PHP! ", 2) . "</td></tr>";

// 12. String to Array (Explode)
$parts = explode(" ", trim($text));
echo "<tr><td>Explode (String to Array)</td><td>" . $parts[0] . " and " . $parts[1] . "</td></tr>";

// 13. Shuffle String
echo "<tr><td>Shuffle String</td><td>" . str_shuffle("Gemini") . "</td></tr>";

// 14. String Comparison
$comp = strcmp("Apple", "Apple"); // Returns 0 if equal
echo "<tr><td>Compare 'Apple' vs 'Apple'</td><td>" . ($comp === 0 ? "Equal" : "Not Equal") . "</td></tr>";

// 15. Pad String
echo "<tr><td>String Padding (to 20 chars)</td><td>" . str_pad(trim($text), 20, "*", STR_PAD_BOTH) . "</td></tr>";

echo "</table>";
?>