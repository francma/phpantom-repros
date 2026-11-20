# array_column loses the selected object type

```sh
composer install
phpantom_lsp analyze
```

Given rows containing `Item` objects, `array_column($rows, 'item')` is inferred
as a bare `array`. PHPantom reports that `$column[0]` could not be resolved, and
definition/hover for `name()` fail.

**Expected:** resolve `Item::name()`. The equivalent `array_map` and direct row
access both work.

The included config enables `unresolved-member-access` to expose the lost type
in CLI output. PHPStan 2.3.7 at level max accepts this example.
