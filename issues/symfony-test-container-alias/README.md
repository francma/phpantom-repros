# Test-container lookup ignores an implementation-only method

```sh
composer install
phpantom_lsp analyze
```

`services_test.php` overrides `Contract` with `InMemory`, which has `seed()`.
The class-literal lookup reports `Method Repro\Contract::seed() not found`.
The explicit string service ID resolves `InMemory::seed()` correctly.

**Requested behavior:** use the known test override when resolving the
implementation's methods. Both lookups return `InMemory` with Symfony's compiled
configuration. The test file is an analysis fixture; no application kernel is needed.
