# PHPantom reproductions

Each folder is an independent PHP 8.4+ Composer project. Open that folder, run
`composer install`, then `phpantom_lsp analyze` as described in its README.
All example code is synthetic; dependencies are public.

| Project | Issue |
| --- | --- |
| [doctrine-symfony-stall](issues/doctrine-symfony-stall/) | A Symfony lookup stalls on an unrelated Doctrine builder |
| [closure-property-chain](issues/closure-property-chain/) | Invoking a closure property loses the returned object's type |
| [symfony-test-container-alias](issues/symfony-test-container-alias/) | A test override is missed by a class-literal lookup |
| [array-map-array-callable](issues/array-map-array-callable/) | Array-style callbacks lose the mapped element type |
| [array-map-generic-constructor](issues/array-map-generic-constructor/) | An inline mapped list becomes a single element in a generic constructor |
| [array-column-object-result](issues/array-column-object-result/) | Selecting a column loses its object type |
| [dbal-query-builder-sql](issues/dbal-query-builder-sql/) | Installing ORM makes DBAL SQL names look like PHP classes |

Verified on Linux with `phpantom_lsp 0.11.1-580-gb759b41da`, commit
`b759b41da61efc31c66e823245cc0118ef5f87bb` (upstream main on 2026-11-20).
