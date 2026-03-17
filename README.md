# Finnimal

A clean and minimal WordPress Block Theme.

Named after my dog Finn.

[![Release](https://github.com/mfgmicha/finnimal/actions/workflows/release.yml/badge.svg)](https://github.com/mfgmicha/finnimal/actions/workflows/release.yml)

## For Users

### Installing the Theme

1. Download this theme as a ZIP file
2. In your WordPress admin, go to **Appearance → Themes**
3. Click **Add New** → **Upload Theme**
4. Upload the ZIP file and activate

### Customizing

Finnimal supports the WordPress Site Editor (Full Site Editing). Go to **Appearance → Editor** to customize:
- Colors and typography
- Header and footer layouts
- Page templates
- Dark/light mode (follows system preference automatically)
- And more

## For Developers

### Prerequisites

- Node.js 18+
- npm 9+

### Setup

```bash
npm install
```

### Development

Start the WordPress Playground server with live reload:

```bash
npm run start
```

This opens a local WordPress instance where you can test changes.

### Available Commands

| Command | Description |
|---------|-------------|
| `npm run start` | Start dev server (WordPress Playground) |
| `npm run format` | Format code |
| `npm run lint:css` | Lint CSS files |
| `npm run lint:js` | Lint JavaScript files |
| `npm run lint:pkg-json` | Lint package.json |
| `npm run packages-update` | Update WordPress packages |
| `npm run zip` | Create distributable ZIP |

All linting commands are run automaitically on the pre-push hook via
`.husky/pre-push`

### Project Structure

```
finnimal/
├── templates/       # Theme template files (.html)
├── parts/           # Reusable parts (footer, header, etc.)
├── functions.php    # Theme functions and setup
└── package.json     # npm scripts and dependencies
```

## License

GPL-2.0-or-later
