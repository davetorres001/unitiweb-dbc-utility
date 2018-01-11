# Leaguefolio Utilities

### Design by Contract Function

This is used to check that functions and methods are given the correct number of arguments

```php
function myMethod(string $arg1, int $arg2, array $arg3 = null)
{
    assert(valid_num_args());

    // continue with your code
}
```

If `$arg1` or `$arg2` are not supplied you will get an assert error. 
Since the `$arg3` argument is optional it can be left out without error  

### Type check functions

#### typeIsUuid

This function will check if the given value is a uuid or not

```php
// Will return false
$bool = typeIsUuid('not uuid');

// Will return true
$bool = typeIsUuid('b0519c7b-0654-4ac2-86eb-fed1583beecb');
```

#### typeUuidToBin

This function converts a uuid to the binary(16) version. 
It will throw an exception if the supplied uuid is not value

```php
// returns binary(16) value
$bin = typeUuidToBin('b0519c7b-0654-4ac2-86eb-fed1583beecb');
```
