# Database index deployment

Run the migration script once on production to add the new indexes optimised for emeraldnews traffic spikes.

```
mysql -u <user> -p <database> < migrations/20241018_add_targeted_indexes.sql
```

Verify the indexes were created successfully with `SHOW INDEX FROM <table>;`.

After applying the indexes, warm the Games, Browse, and Friends pages so the new per-request cache entries are generated.
