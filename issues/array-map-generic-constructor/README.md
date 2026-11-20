# Inline array_map loses its list type in a generic constructor

```sh
composer install
phpantom_lsp analyze
```

`new Box(array_map(...))` is inferred as `Box<Item>` instead of
`Box<list<Item>>`, producing a `type_mismatch_return` diagnostic. Navigation
through `$inline->get()[0]->name()` also fails.

**Expected:** preserve the list. Assigning the mapped result to a variable before
passing it to `Box` works, as does a literal array.

PHPStan 2.3.7 at level max accepts this example.
