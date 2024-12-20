```php
$handle = fopen('large_file.txt', 'r');
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // Process each line individually
        // ... process $line ...
    }
    fclose($handle);
} else {
    // Error handling
}
```
This revised code reads and processes the file line by line, significantly reducing memory consumption.  For even more efficient handling of extremely large files, consider using memory-mapped files or other optimized techniques.