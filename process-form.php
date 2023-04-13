$file = fopen("contacts.txt", "a") or die("Unable to open file!");
if ($file) {
    $txt = $name . ", " . $email . "\n";
    if (fwrite($file, $txt) === false) {
        die("Unable to write to file!");
    }
    fclose($file);
} else {
    die("Unable to open file!");
}
