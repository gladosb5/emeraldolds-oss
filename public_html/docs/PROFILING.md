# Query profiling

Append `?__profile=1` to any emeraldnews page (e.g. `/News.aspx?__profile=1`) to emit query metrics.

* Response headers now include `X-DB-Query-Count` and `X-DB-Query-Time-Ms`.
* A structured summary is also written to the PHP error log whenever profiling is enabled.

To include bound parameters in the summary set the environment variable `DB_PROFILE_PARAMS=1` before hitting the page.

Example:

```
DB_PROFILE=1 DB_PROFILE_PARAMS=1 php -S localhost:8080
```

All metrics are collected per request; disable profiling in production once investigations are complete.
