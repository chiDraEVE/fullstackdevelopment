# Fullstack Development Multisite

docs/ \
|-[architecture-notes.md](./docs/architecture-notes.md) \
|-[fullstack-blocks.md](./docs/fullstack-blocks.md) \
|-[my-first-gutenberg-app.md](./docs/my-first-gutenberg-app.md)

## Datenmodell

**Taxonomien:**
- `project-type`: Udemy-Kurs, eigenes Projekt, Kundenprojekt
- `technology`: Bootstrap, Tailwind, React
- `category`: Frontend, Backend, DevOps
- `post_tag`: PHP, JS, WordPress

## Status
- ✅ CPTs registriert
- ✅ ACF-Beziehungen eingerichtet
- ⏳ Navigation-Plugin in Arbeit

Ich habe übrigens noch eine ältere readme.md gefunden, die ich hier mal reinpacke. Sie ist nicht mehr ganz aktuell, aber gibt einen guten Überblick über die ursprünglichen Ziele und die Architektur des Projekts. Diese Datei habe ich umbenannt zu [docs/architecture-notes.md](./docs/architecture-notes.md), damit sie nicht mit der neuen readme verwechselt wird. Dafür habe ich auch den docs/-Folder erstellt, wo sämtliche Dokumentation landet bevor es die README.md sprengt.

# Fullstack Development – WordPress Multisite Theme & Plugin

Dieses Repository enthält das **Custom WordPress Block Theme** sowie ein [**eigenes Developer-Plugin**](./plugins/my-first-gutenberg-app/my-first-gutenberg-app.php) [[doc](./docs/architecture-notes.md)] , das ich für meine persönliche Fullstack-Development-Seite verwende.

Ziel des Projekts ist eine **moderne, wartbare und DSGVO-konforme WordPress-Installation**, die sowohl als **Portfolio** als auch langfristig als **Knowledge-Base** dienen kann.

---

## 🧩 Projektübersicht

- WordPress **Multisite**
- Custom **Block Theme (Full Site Editing)**
- Zentrale Konfiguration über `theme.json`
- **Lokal gehostete Schriften** (keine Google Fonts)
- Eigene **Developer-Tools** zur Umgebungs- & Branch-Erkennung
- Fokus auf **saubere Trennung** von:
    - Inhalt
    - Design
    - Logik

---

## 🎨 Theme – Custom Block Theme (FSE)

### Architektur

- Block Theme mit `theme.json` als **Single Source of Truth**
- Minimalistische `functions.php`
- Keine Abhängigkeit von Page Buildern
- Vorbereitung für:
    - eigene Gutenberg-Blöcke
    - optionale Frameworks (z. B. Tailwind / Bootstrap)

---

### Typografie

Alle Schriften werden **lokal ausgeliefert** (DSGVO-konform):

| Zweck            | Schrift           |
|------------------|-------------------|
| Body Text        | Libre Franklin    |
| Headings / Hero  | Crimson Pro       |
| Code / Monospace | Cousine           |
| Akzent / Script  | Dancing Script    |

**Prinzip:**
- Fonts sind semantischen Rollen zugeordnet
- Nutzung von CSS-Variablen statt harter Zuweisungen
- Austausch einzelner Fonts ohne Refactoring möglich

---

### Farben & Design Tokens

Die Farbpalette ist vollständig in der `theme.json` definiert und steht:
- im Block Editor
- als CSS Custom Properties
- für eigene Stylesheets & Code-Completion zur Verfügung

Beispiele:
- Primary (Penn Red)
- Secondary (Sapphire)
- Ternary (Pumpkin)
- Grey-Scale
- Light / Dark

---

### Layout & Inhalte

- Startseite mit **Video-Cover-Block** als Hero
- Kombination aus:
    - Überschriften
    - Absätzen
    - Code-Blöcken
    - visuellen Hervorhebungen
- JavaScript wird gezielt eingesetzt, z. B. um
    - Video-Hintergründe kontextabhängig zu deaktivieren

---

## 🧪 Plugin – Environment & Git Branch Indicator

Eigenes Developer-Plugin zur **visuellen Kennzeichnung der Umgebung** direkt in der WordPress Admin-Bar. (diesen Absatz könnte man auch löschen, da die Dokumnetation unter [architecture-notes.md](./docs/architecture-notes.md) zu finden ist, aber die README.md ist noch überschaubar, also lasse ich das mal drin)

### Funktionen

- Anzeige des aktuellen Environments:
    - local
    - development
    - staging
    - production
- Anzeige des aktiven Git-Branches
- Farblogik:
    - **Environment → Hintergrundfarbe**
    - **Branch → Schriftfarbe**
- Unterstützung für Branch-Namenskonventionen:
    - `development/*`
    - `feature/*`
    - `learn/*`
    - generische Branches

Ziel ist es, **Fehler durch falsche Umgebung** (z. B. Arbeiten auf Production) frühzeitig sichtbar zu vermeiden.

---

## 🔐 Datenschutz & Sicherheit

- Keine externen Google Fonts
- **Matomo** statt Google Analytics
- **Contact Form 7** mit Honeypot (kein reCAPTCHA)
- Bewusster Umgang mit:
    - Benutzerrollen
    - öffentlichen Display Names
    - Plugin-Abhängigkeiten (z. B. 2FA)

---

## 🛠️ Entwicklungsphilosophie

- `theme.json` dort einsetzen, wo sie sinnvoll ist
- CSS & JS nur dort, wo Block-Styles nicht ausreichen
- Kein Overengineering
- Fokus auf **Lesbarkeit**, **Wartbarkeit** und **Zukunftssicherheit**

---

## 🚧 Status

Das Projekt befindet sich in **aktiver Weiterentwicklung**.

Geplant / angedacht:
- eigene Gutenberg-Blöcke
- bessere Verwaltung von Instanz-Ständen (local → production)
- Ausbau als persönliche Knowledge-Base

---

## 📄 Lizenz

Private Nutzung / persönliches Projekt.  
Keine Garantie auf Stabilität oder Support.
