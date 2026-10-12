# Viewers Badge Shortcode

A small WordPress shortcode that displays a styled **"👁 12 People watching this product now!"** badge. Place it on a product page, landing page or anywhere you can use a shortcode.

```
[ds_live_viewers]
```

## ⚠️ Please read: how the number works

The number is **randomly generated** between 5 and 30 each time the page loads (`rand(5, 30)`). It does **not** track real visitors.

Use it for **design previews, demos, mockups and staging sites**. Showing random numbers as real visitor activity on a live store can mislead customers and may break consumer-protection rules in some countries, so be transparent with your clients about what it does.

To change the range, edit this line in the PHP file:

```php
$count = rand(5, 30);
```

## Files

| File | Purpose |
|---|---|
| `viewers-badge-shortcode.php` | The shortcode (PHP) |
| `style.css` | The badge design (CSS) |
| `README.md` | This file |

## Installation

### Step 1: Add the PHP

**Option A: as a plugin**
1. Put `viewers-badge-shortcode.php` inside a folder named `viewers-badge-shortcode`, and zip the folder.
2. In WordPress go to **Plugins → Add New → Upload Plugin**, upload the zip and click **Activate**.

**Option B: with a code snippets plugin or `functions.php`**
Copy everything from `function ds_live_viewers_shortcode() {` down to the `add_shortcode(...)` line, and paste it into a snippets plugin (such as Code Snippets) or your child theme's `functions.php`.

### Step 2: Add the CSS

Copy the contents of `style.css` and paste it into one of these:
- **Appearance → Customize → Additional CSS**
- Elementor's **Site Settings → Custom CSS**
- Your child theme's stylesheet

### Step 3: Show the badge

- **Elementor:** drag a **Shortcode** widget where you want the badge and enter `[ds_live_viewers]`.
- **Gutenberg:** add a **Shortcode** block and enter `[ds_live_viewers]`.
- **WooCommerce product pages (automatic):** add this to `functions.php` or a snippets plugin:

```php
add_action( 'woocommerce_single_product_summary', function () {
    echo do_shortcode( '[ds_live_viewers]' );
}, 25 );
```

## Customize

All styling is in `style.css`:
- `background`: badge color
- `border-radius`: corner roundness
- `font-size`: text size
- `.ds-eye`: eye icon size and color

To change the text, edit `People watching this product now!` in the PHP file.

## Requirements

- WordPress 5.0 or newer
- PHP 7.0 or newer

## License

MIT. Free to use in personal and client projects.

## Author

**Shahzaib Sheikh**, WordPress Web Developer & SEO Specialist
🌐 [Portfolio](https://shahzaibsheikhofficial.github.io)
