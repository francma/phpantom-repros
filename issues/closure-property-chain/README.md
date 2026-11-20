# Chaining after a closure property loses its return type

```sh
composer install
phpantom_lsp analyze
```

The property is annotated `Closure(): Service`, but `($this->factory)()->seed()`
reports `Method Closure::seed() not found`. Definition and hover also fail.

**Expected:** resolve `Service::seed()`. Assigning the invocation result to a
local variable works, as do the two local-closure controls in `Invoke.php`.
