# DBAL SQL names are treated as PHP classes when ORM is installed

```sh
composer install
phpantom_lsp analyze
```

The receiver is Doctrine DBAL's `Connection`, and the returned builder is
`Doctrine\DBAL\Query\QueryBuilder`. Its SQL table and join alias are strings.

**Actual:** `Class sample_rows not found` and `Class r not found`.
**Expected:** accept the valid DBAL query without treating SQL names as classes.

The errors appear when Doctrine ORM is also installed. The same source analyzes
cleanly with DBAL alone. PHPStan 2.3.7 at level max accepts it, and DBAL builds
the expected SQL without connecting to a database.
