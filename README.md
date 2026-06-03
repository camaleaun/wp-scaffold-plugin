# wp-scaffold-plugin

Template pack for [`wp scaffold template`](https://github.com/camaleaun/wpcli-scaffold-template-command).

Generates an opinionated WordPress plugin skeleton based on the camaleaun convention — PSR-4 `src/` layout, DI container, unit-only PHPUnit bootstrap, PHPStan level 6, PHPCS/WPCS.

## Usage

```bash
wp scaffold template camaleaun/wp-scaffold-plugin my-plugin
wp scaffold template camaleaun/wp-scaffold-plugin my-plugin --plugin_author="Gilberto Tavares" --activate
wp scaffold template camaleaun/wp-scaffold-plugin my-plugin --skip-tests
wp scaffold template camaleaun/wp-scaffold-plugin my-plugin --ci=github
```

## Template spec: `scaffold.yml`

The `scaffold.yml` file declares everything the engine needs:

| Key | Purpose |
|---|---|
| `parameters` | CLI flags exposed to the user (`--plugin_name`, etc.) with defaults |
| `computed` | Values derived from other variables (namespace, const prefix, etc.) |
| `files.core` | Always generated |
| `files.tests` | Skipped when `--skip-tests` |
| `files.ci` | One file selected by `--ci=<provider>` |

## Forking

Clone this repo, edit the `.mustache` files or `scaffold.yml`, then:

```bash
wp scaffold template your-org/wp-scaffold-plugin my-plugin
```
