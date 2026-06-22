# Laxora — Elementor Template Kit

This kit contains a starter homepage that recreates the Laxora landing page using Elementor's **free** widgets (Heading, Text Editor, Button, Shortcode, Inner Section).

## What's inside
```
laxora-template-kit/
  manifest.json        — Kit metadata (colors, typography, templates)
  laxora-homepage.json — The homepage template, ready to import
```

## How to import (Elementor Free)
1. WordPress dashboard → **Templates → Saved Templates → Import Templates**.
2. Upload `laxora-homepage.json`.
3. Create a new page → “Edit with Elementor” → click the folder icon → **My Templates** → **Insert** *Laxora — Homepage*.
4. Replace the placeholder image URLs (`REPLACE_WITH_HERO_URL`) with actual media library URLs (the standalone Laxora theme already bundles all required images at `wp-content/themes/laxora/assets/images/`).
5. Replace `[wpforms id="1"]` shortcode with your real WPForms form ID.

## Recommended pairing
- **Theme:** *Laxora* standalone theme (`/app/wordpress/laxora-theme`) — it already ships with the full design, fleet section, and Customizer settings.
- **Plugin:** Elementor Free 3.16+, WPForms Lite.
