# Finnimal - WordPress Block Theme

This is a minimal WordPress Block Theme project.

## Project Structure

- `templates/` - WordPress theme template files (.html)
- `parts/` - Reusable theme parts (e.g., footer.html)
- `patterns/` - Reusable block patterns
- `functions.php` - Theme functions and setup
- `style.css` - Theme metadata and custom styles
- `package.json` - npm scripts and dependencies
- `theme.json` - Theme settings including dark/light mode support (follows system preference)
- `.wordpress/` - WordPress Playground blueprints
- `src/` - JavaScript source files

## Available Scripts

```bash
npm run start         # Start WordPress Playground server
npm run format        # Format code with wp-scripts
npm run lint:css      # Lint CSS
npm run lint:js       # Lint JavaScript
npm run lint:pkg-json # Lint package.json
npm run packages-update # Update WordPress packages
npm run zip           # Create distributable theme zip
```

## Development Notes

- Uses `@wordpress/scripts` for build tooling
- Husky runs formatting and linting on pre-push, and validates commit messages on commit-msg
- Commit messages should follow conventional commits format
