```php
$data = file_get_contents('large_file.txt');
// ... process $data ...
```
This code might lead to a memory exhaustion error if 'large_file.txt' is significantly large.  `file_get_contents` loads the entire file into memory at once.