CHECK constraints are not supported by MySQL. You can define them, but they do nothing (as of MySQL 5.7).

From the manual:

The CHECK clause is parsed but ignored by all storage engines.
The workaround is to create triggers, but they aren't the easiest thing to work with.

If you want an open-source RDBMS that supports CHECK constraints, try PostgreSQL. It's actually a very good database
