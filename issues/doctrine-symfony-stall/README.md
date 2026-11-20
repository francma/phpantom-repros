# Symfony lookup stalls on an unrelated Doctrine builder

```sh
composer install
phpantom_lsp analyze src/Probe.php
```

`Probe.php` only calls `$container->get('app.example')`. A separate Doctrine
builder has 18 conditional joins followed by `setParameter()`.

**Actual:** analyzing the probe did not finish within 30 seconds in either run.
**Expected:** the small container lookup completes promptly.

Remove the builder's `setParameter()` call, or keep only six joins, and the same
probe completes in about 0.04 seconds. No database or running Symfony kernel is
needed. The slow case may need to be interrupted with Ctrl-C.
