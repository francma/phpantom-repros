# Symfony service lookup stalls on an unrelated report query

```sh
composer install
phpantom_lsp analyze tests/MessageFormatterTest.php -vvv
```

The test fetches a registered service using `self::getContainer()->get('test.message_formatter')`.
An unrelated `BookReport` builds a query with 15 optional columns and **no joins**.
The test never calls the report.

**Actual:** analysis remains on the test file and exceeds 60 seconds.
**Expected:** the small service lookup completes promptly.

Move `setParameter()` above the conditional `addSelect()` calls in `BookReport`:
the same analysis finishes in under 0.2 seconds. This preserves the query's behavior.
A class-literal service lookup also completes promptly.

The Symfony test passes, and Doctrine compiles the report query to SQL.
No database or running server is needed. Interrupt the slow analysis with Ctrl-C.
