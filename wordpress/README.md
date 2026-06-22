# Laxora — WordPress Theme & Elementor Kit

A dark-luxury chauffeur-service WordPress design suite. Includes:

```
wordpress/
├── laxora-theme/                  ← Standalone custom theme (works WITHOUT Elementor)
├── laxora-child-hello-elementor/  ← Child theme for the Hello Elementor parent theme
├── laxora-template-kit/           ← Elementor Free Template Kit (JSON import)
├── wpforms-templates/             ← Inquiry form JSON for WPForms Lite
└── laxora-demo-content.xml        ← Sample fleet vehicles (CPT) for one-click import
```

---

## Requirements
- WordPress **6.0+**
- PHP **7.4+**
- Elementor Free **3.16+** *(optional, only for the kit & child theme path)*
- WPForms Lite *(optional, only if you want the inquiry form)*

---

## Install path A — Standalone theme (fastest, recommended)
The standalone theme renders the entire Laxora design (hero, fleet, services, pillars, inquiry, footer) **out of the box** with no page builder required. It also ships with **4 dedicated inner-page templates** (About / Services / Fleet / Contact).

1. **Zip** the folder: `laxora-theme` → `laxora-theme.zip`.
2. WP Admin → **Appearance → Themes → Add New → Upload Theme** → select the zip → *Install* → *Activate*.
3. WP Admin → **Settings → Reading** → set *Your homepage displays* to **Your latest posts** (the theme's `front-page.php` will render automatically). *Or* create a page titled "Home" and set it as the static front page.
4. **Create the 4 inner pages**:
   - WP Admin → **Pages → Add New** → title `About` → in the right sidebar set **Template** to **Laxora — About** → Publish.
   - Repeat for `Services` (Template = *Laxora — Services*), `Fleet` (Template = *Laxora — Fleet*), and `Contact` (Template = *Laxora — Contact*).
   - The default fallback nav already links to `/about/`, `/services/`, `/fleet/`, and `/contact/` so they'll appear in the header menu automatically. (Override anytime via **Appearance → Menus**.)
5. WP Admin → **Appearance → Menus** → create a menu with Home, Services, Fleet, About, Contact items and assign it to the **Primary Navigation** location.
6. WP Admin → **Appearance → Customize → Laxora — Brand & Contact** → fill WhatsApp number, phone, concierge email, and the inquiry form shortcode (default `[wpforms id="1"]`).
7. *(Optional)* WP Admin → **Tools → Import → WordPress** → upload `laxora-demo-content.xml` to add 13 sample fleet vehicles. The Fleet section automatically prefers CPT entries over the bundled fallback.

**Done.** Homepage + 4 inner pages, all pixel-true Laxora — hero, 13-vehicle filterable fleet, services, three pillars, inquiry form, About (vision/mission/14-years stat/facts & figures/services grid/CTA), full Services detail with process timeline, dedicated Fleet page with standards strip, and a Contact page with WhatsApp/Phone/Email tiles, inquiry form, and 3 office locations.

---

## Install path B — Hello Elementor + Laxora Child + Template Kit
Use this if your client insists on editing every section visually via Elementor.

1. Install & activate the **Hello Elementor** parent theme (from `Appearance → Themes → Add New → search "Hello Elementor"`).
2. Zip `laxora-child-hello-elementor` and upload it as a theme → *Activate*.
3. Install **Elementor** (Free) from the Plugins screen.
4. Import the homepage template:
   - WP Admin → **Templates → Saved Templates → Import Templates** → upload `laxora-template-kit/laxora-homepage.json`.
5. Create a new page → *Edit with Elementor* → click the folder icon (My Templates) → *Insert* **Laxora — Homepage**.
6. Replace any `REPLACE_WITH_HERO_URL` placeholders with real media URLs. The standalone theme's images live at `wp-content/themes/laxora/assets/images/` (you can copy them into the child theme too if you wish).
7. Set this page as the static homepage (Settings → Reading).

The child theme automatically applies the dark luxury color palette, serif headings, and button styling to every Elementor widget.

---

## Inquiry form (WPForms Lite)
1. Install **WPForms Lite** (Plugins → Add New → search).
2. Create a new form named "Laxora Inquiry" → Blank.
3. Manually add the fields (or import via WPForms Pro's template feature using `wpforms-templates/laxora-inquiry-form.json`):
   - Full Name *(text)*
   - Executive Email *(email)*
   - Pickup Location *(text)*
   - Destination / Routing *(text)*
   - Service Date *(date)*
   - Bespoke Itinerary Requirements *(paragraph)*
4. Set the submit button label to **Request Quote**.
5. Copy the form's shortcode (e.g. `[wpforms id="42"]`).
6. WP Admin → **Appearance → Customize → Laxora — Brand & Contact** → paste the shortcode into *Inquiry Form Shortcode*.
7. *(Optional)* In WPForms → your form → **Settings → Confirmations**, set confirmation message to *"Inquiry Received. Thank you. A senior concierge will reach out personally within one business hour."*

The form will automatically pick up the dark-theme styling (gold submit, underline inputs) defined in `assets/css/laxora.css`.

---

## Managing the fleet
The theme registers a **Fleet** custom post type with its own *Vehicle Categories* taxonomy.
- Edit vehicles at WP Admin → **Fleet**.
- Each vehicle has a Title, Featured Image, and a *Vehicle Specs* meta box (Passengers + Bags).
- Assign each vehicle to one of the 6 categories: `suv`, `sedan`, `van`, `bus`, `buggy` (or your own).
- The Luxury Collection section automatically uses CPT entries when at least one is published. With no entries, the bundled 13-vehicle fallback is shown.

---

## File map
| File / Folder | Purpose |
|---|---|
| `laxora-theme/style.css` | Theme header (required) + base body styles |
| `laxora-theme/functions.php` | Theme setup, CPT/taxonomy, Customizer settings, Elementor support, fallback fleet |
| `laxora-theme/header.php` / `footer.php` | Sticky glassmorphism header + footer |
| `laxora-theme/front-page.php` | Composes the homepage from `/template-parts/*` |
| `laxora-theme/template-parts/hero.php` | Cinematic hero with gradient title + dual CTA |
| `laxora-theme/template-parts/luxury-collection.php` | Dark fleet grid with 6-tab category filter |
| `laxora-theme/template-parts/services.php` | 4-service grid with chauffeur-interior image |
| `laxora-theme/template-parts/pillars.php` | 3-pillar corporate values + live-ops image |
| `laxora-theme/template-parts/inquiry.php` | WPForms-powered inquiry form |
| `laxora-theme/template-parts/page-banner.php` | Reusable hero strip for inner pages |
| `laxora-theme/template-about.php` | Dedicated About page (vision/mission/stats/services) |
| `laxora-theme/template-services.php` | Dedicated Services page (detailed rows + process) |
| `laxora-theme/template-fleet.php` | Dedicated Fleet page (reuses Luxury Collection + standards) |
| `laxora-theme/template-contact.php` | Dedicated Contact page (tiles + form + offices) |
| `laxora-theme/assets/css/laxora.css` | Full design system (tokens, layout, components) |
| `laxora-theme/assets/js/laxora.js` | Header scroll state, mobile nav, fleet filter |
| `laxora-theme/assets/images/` | All packaged images (hero, interior, 13 vehicles) |
| `laxora-child-hello-elementor/` | Brand overlay for Elementor-built pages |
| `laxora-template-kit/laxora-homepage.json` | Elementor Free importable homepage |
| `laxora-demo-content.xml` | 13 fleet vehicles + 5 categories WXR |

---

## License
GPL-2.0-or-later. Images bundled under their original Pexels/Unsplash licenses (free for commercial use; attribution appreciated).
