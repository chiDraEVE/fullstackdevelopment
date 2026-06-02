# My First Gutenberg App

## Zweck

Das Plugin dient als Entwicklungs- und Experimentierumgebung für moderne WordPress-Funktionalitäten.

Ursprünglich basiert es auf einem Tutorial von learn.wordpress.org und wurde anschließend um eigene Entwicklerwerkzeuge erweitert.

---

## Funktionen

### Gutenberg Admin Application

Registriert eine eigene Admin-Seite:

```php
add_menu_page(...)
```

Die Anwendung wird über React/Gutenberg-Komponenten in folgendes Element gerendert:

```html
<div id="my-first-gutenberg-app"></div>
```

Aktuell implementiert:

- CRUD-Verwaltung von Seiten
- Nutzung des WordPress Data Stores
- Kommunikation mit der REST API

---

## Environment Detection

Das Plugin nutzt die native WordPress-Funktion:

```php
wp_get_environment_type()
```

Unterstützte Umgebungen:

- local
- development
- staging
- production

Dies muss allerdings in der `wp-config.php` definiert werden:

```php
define( 'WP_ENVIRONMENT_TYPE', 'local' );
```

---

## Git Branch Indicator

In lokalen Umgebungen wird der aktuelle Git-Branch in der Admin-Bar angezeigt.

Ermittelt über:

```bash
git rev-parse --abbrev-ref HEAD
```

Beispiel:

```txt
feature/matomo-fix  LOCAL
```

### Farblogik

Environment:
- local → grün
- development → blau
- staging → gelb
- production → rot

Branch:
- main/master
- feature/*
- learn/*
- development
- staging
- production

besitzen jeweils eigene Farben.

---

## Matomo Integration

Matomo wird ausschließlich geladen wenn:

- `fsd_matomo_enabled` aktiviert ist
- Environment = `production`

Dadurch werden lokale und Staging-Aufrufe nicht getrackt.

---

## Technische Besonderheiten

### Asset Loading

JavaScript und CSS werden nur auf der Plugin-Seite geladen.

```php
if ( 'toplevel_page_my-first-gutenberg-app' !== $hook ) {
    return;
}
```

Dadurch werden unnötige Requests im WordPress-Backend vermieden.

---

## Geplante Erweiterungen

- Synchronisation von Inhalten zwischen Umgebungen
- Deployment-Helfer
- Erweiterte Gutenberg-Werkzeuge
- Datenmigrationen zwischen Instanzen