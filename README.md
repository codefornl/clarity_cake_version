# Clarity

A catalog application for curated projects


## Installation

1. Set up the database connections in  `config/app.php`.
2. __Make sure the database exists__. When it is not populated, run migrations: `bin/cake migrations migrate`.
3. __Optional__ Run seeds to fill database with test data: `bin/cake migrations seed --seed=all`.

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.
