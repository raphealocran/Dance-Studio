# Afrobeat Dance Studio Website

A multi-page website for Afrobeat Dance Studio — class info, schedules, contact form, and class subscription page.

## Pages

- `index.html` — Home (hero, trial membership offer, hours)
- `about.html` — About the studio
- `contact.html` — Contact form (posts to `process_form.php`)
- `subscription.php` — Class subscription plans (Basic $50 / Standard $75 / Premium $100)
- `template.html` — Reusable page template

## Tech stack

- HTML5, CSS3
- PHP for form handling (`process_form.php`, `subscription.php`)
- Google Fonts (Francois One, Roboto Slab)

## Run locally (full functionality)

The PHP pages need a PHP setup. Easiest is [XAMPP](https://www.apachefriends.org/):

1. Install XAMPP and start Apache.
2. Copy this folder to `htdocs/dance-studio`.
3. Visit `http://localhost/dance-studio`.

## Static preview

The `.html` pages work as a static site — just open `index.html`. The PHP contact and subscription forms require a server (see above).

## Deploying

Static hosts (Vercel, Netlify, GitHub Pages) serve the HTML pages fine, but the PHP forms will not execute there. For working forms on a static host, point them at a form service such as Formspree.
