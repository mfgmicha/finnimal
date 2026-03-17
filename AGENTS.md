# Finnimal - WordPress Block Theme

This is a minimal WordPress Block Theme project.

## Project Structure

- `templates/` - WordPress theme template files (.html)
- `parts/` - Reusable theme parts (e.g., footer.html)
- `functions.php` - Theme functions and setup
- `package.json` - npm scripts and dependencies

## Available Scripts

```bash
npm run start         # Start WordPress Playground server
npm run format        # Format code with wp-scripts
npm run lint:css      # Lint CSS
npm run lint:js       # Lint JavaScript
npm run packages-update # Update WordPress packages
npm run zip          # Create plugin zip
```

## Development Notes

- Uses `@wordpress/scripts` for build tooling
- Husky is configured for pre-commit hooks
- Commit messages should follow conventional commits format
