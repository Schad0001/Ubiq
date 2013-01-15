[Ubiq](https://github.com/Pixel418/Ubiq#readme) / [Documentation](../index.md#readme) / [String](../index.md#string) / not_end_with
======


Description
-------- 

```php
string \UString\not_end_with( string $haystack, string $needle );
```

If a string ends with a specific character/sequence, the sufix is removed.

**Note**: The input string is not modified. See [do_not_end_with](./do_not_end_with.md#readme).



Examples
--------

### Example 1

```php
\UString\not_end_with( 'http://www.example.com', '/' );
```
Returns 'http://www.example.com'.

### Example 2

```php
\UString\not_end_with( 'http://www.example.com/', '/' );
```
Returns 'http://www.example.com'.

### Example 3

```php
\UString\not_end_with( 'http://www.example.com///', '/' );
```
Returns 'http://www.example.com'.