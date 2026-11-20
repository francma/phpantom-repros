# array_map loses the return type of an array-style callback

```sh
composer install
phpantom_lsp analyze
```

`array_map([self::class, 'make'], $ids)` loses the `Item` element type. PHPantom
reports that `$arrayCallback[0]` could not be resolved, and definition/hover for
`name()` fail.

**Expected:** resolve `Item::name()`. The equivalent first-class callable and
arrow-function controls work.

The included config enables `unresolved-member-access` to expose the lost type
in CLI output. PHPStan 2.3.7 at level max accepts this example.
