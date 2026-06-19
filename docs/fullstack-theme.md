[../README.md](../README.md)

# Fullstack Theme – Dokumentation
[Getting Started](#-getting-started) \
[Wann theme.json und wann SASS?](#-wann-themejson-und-wann-sass) \
[Theme-Konfiguration (theme.json)](#-theme-konfiguration-themejson) \
[Templates und Parts](#-templates-und-parts) \
[Video-Header](#-video-header) 


## Überblick

Das Fullstack Theme ist ein minimalistisches, modernes WordPress-Theme, das speziell für Entwickler und Designer entwickelt wurde. Es basiert auf den neuesten WordPress-Technologien und bietet eine solide Grundlage für die Erstellung von ansprechenden und funktionalen Websites.

## 🚀 Getting Started

Dieses WordPress Block Theme ist für **fullstackdevelopment.de** entwickelt und basiert auf modernen WordPress-Technologien wie `theme.json`, Gutenberg Blocks und `@wordpress/scripts`.

---

### 📦 Voraussetzungen

Bevor du startest, benötigst du:

- WordPress Installation (lokal oder Server)
- Node.js (für Build-Prozess)
- IntelliJ IDEA (oder WebStorm / PhpStorm empfohlen)
- Git (optional, aber empfohlen)

---

### 📁 Projekt öffnen (IntelliJ)

Dieses Projekt wird nicht über die Kommandozeile eingerichtet, sondern direkt über IntelliJ.

#### Schritte:

1. IntelliJ öffnen
2. `File → Open`
3. Projektordner `fullstack-theme` auswählen
4. Warten, bis Indexing abgeschlossen ist

---

### 📦 Dependencies installieren

IntelliJ erkennt automatisch die `package.json`.

#### Installation:

- Öffne `package.json`
- Klicke auf **"Install Dependencies"**

oder:

- Rechtsklick auf `package.json`
- „Run npm install“

---

### ⚙️ Development starten

Im npm-Toolfenster:

- Script auswählen: `start`

Das entspricht:

```bash
wp-scripts start
```

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
## 💡 Wann theme.json und wann SASS?

Als Faustregel enthält die `theme.json` alles, was Teil des globalen Designsystems ist und im Block-Editor verfügbar sein soll:

- Farben und Farbpaletten
- Schriftarten und Typografie
- Abstände und Layout-Vorgaben
- Globale Styles
- Block-spezifische Standardwerte
- Template Parts und Design Tokens

SASS/CSS wird dagegen für konkrete Implementierungen und Komponenten verwendet:

- Layouts (Grid, Flexbox, Positionierung)
- Navigationen, Header und Footer
- Eigene Blöcke und Komponenten
- Animationen und Hover-Effekte
- Responsive Anpassungen
- Komplexe Selektoren und Zustände

**Merksatz:**  
`theme.json` beschreibt **was das Designsystem kann**, SASS beschreibt **wie die Website umgesetzt wird**.

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
## 🎨 Theme-Konfiguration (theme.json)

Die theme.json ist die zentrale Design- und Konfigurationsdatei des WordPress-Block-Themes. Sie definiert globale Designsysteme wie Farben, Typografie, Abstände sowie Block-Styles und ersetzt viele klassische PHP-/CSS-Konfigurationen.

Sie bildet damit die Single Source of Truth für das Designsystem des Themes.

### 🎯 Überblick

Dieses Theme definiert:

[🎨 Farbpalette (Primary, Secondary, Ternary, Greyscale)](#-farbpalette)\
[🌈 Gradient-Systeme für Hero- und Overlay-Effekte](#-gradients)\
[🔤 Mehrere Font-Familien (Body, Heading, Code, Handwritten)](#-typografie)\
[📏 Globale Spacing- und Einheitssysteme](#-layout--spacing)\
[🧱 Block-spezifische Styles (z. B. Paragraph, Code, Site Title)](#-block-styles-core-blocks)\
[🎛️ Custom CSS für Feinjustierungen](#-custom-css)\
[🧩 Template Parts (Header / Footer Varianten)](#-template-parts)\
[🧠 Architektur-Notizen zur Rolle der theme.json](#-architektur-notiz)


### 🎨 Farbpalette
Das Theme basiert auf einem erweiterten Farbsystem mit semantischen Farben:

    Primärfarben

    primary: #991D0F (Penn Red) 
    primary-light: #CC7265
    primary-dark: #660E08

    Sekundärfarben
    secondary: #1152B2 (Sapphire)
    secondary-light: #7FE1FF
    secondary-dark: #0A3674

    Tertiärfarbe
    ternary: #FF8432 (Pumpkin)
    inkl. Light/Dark Varianten

    Neutrale Farben
    grey Skala für UI-Elemente
    light / dark als Basis-Hintergründe

👉 Ziel: klare Trennung zwischen UI-Akzenten und Lesefarben

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
### 🌈 Gradients

Das Theme definiert wiederverwendbare Gradient-Varianten:

    Primary Overlay
    Verlauf von Primary → Primary Dark
    für Hero-Overlays / Akzentflächen
    Hero Video Overlay
    transparenter Verlauf auf Dark
    für Lesbarkeit über Videos
    Secondary Soft
    diagonaler Farbverlauf aus Secondary-Tönen
    für Cards / Highlights


<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
### 🔤 Typografie
Font-System

Es gibt vier definierte Schriftfamilien:

    Body: Libre Franklin (Sans-Serif)
    für Fließtext und UI
    Heading: Crimson Pro (Serif)
    für Headlines
    Code: Cousine (Monospace)
    für Code-Blöcke
    Handwritten: Dancing Script
    für Akzent-/Brand-Elemente (z. B. Logo, Site Title)

#### 👉 Jede Schrift ist mit fontFace lokal eingebunden (self-hosted WOFF2/WOFF)

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
### 📏 Layout & Spacing
    blockGap: aktiviert (automatischer Abstand zwischen Blöcken)
    Unterstützte Einheiten:
    px, rem, vh, vw, %
    Margin & Padding global aktiv

#### 👉 Ziel: flexible, responsive Layoutkontrolle direkt im Editor

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
### 🧱 Block Styles (core blocks)

Das Theme überschreibt gezielt Standard-Blocks:


###### core/site-title
```json
{
    "typography": {
        "fontFamily": "var(--wp--preset--font-family--handwritten)",
        "fontWeight": "700"
    }
}
```

###### core/code
```json
{
    "typography": {
        "fontFamily": "var(--wp--preset--font-family--code)",
        "fontWeight": "500"
    }
}
```

###### core/paragraph
```json
{
    "color": {
        "text": "var(--wp--preset--color--light-grey)"
    },
    "elements": {
        "link": {
            "color": {
                "text": "var(--wp--preset--color--light-grey)"
            }
        }
    },
    "typography": {
        "fontSize": "1rem"
    }
}
```

###### core/heading
```json
{
    "typography": {
        "fontFamily": "var(--wp--preset--font-family--handwritten)",
        "fontWeight": "500"
    }
}                                  
```

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
### 🌍 Global Styles

##### Farben
```json
{
    "background": "var(--wp--preset--color--dark)",
    "text": "var(--wp--preset--color--light-grey)"
}
```
##### Typografie
```json
{
    "font": {
        "default": "Libre Franklin"
    },
    "font-size": {
        "base": "1rem"
    }
}
```
#### 🧩 Element Styles
```json
{
  "button": {
    "color": {
      "background": "var(--wp--preset--color--primary)",
      "text": "var(--wp--preset--color--light-grey)"
    },
    "typography": {
      "fontWeight": "700"
    }
  },
  "h1": {
    "typography": {
      "fontFamily": "var(--wp--preset--font-family--handwritten)",
      "fontWeight": "700"
    }
  },
  "heading": {
    "color": {
      "text": "var(--wp--preset--color--light)"
    },
    "typography": {
      "fontFamily": "var(--wp--preset--font-family--heading)"
    }
  },
  "link": {
    "color": {
      "text": "var(--wp--preset--color--ternary)"
    }
  }
}

```
<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
### 🧾 Custom CSS


Zusätzlich enthält die theme.json ein kleines Custom CSS Snippet:
```sass
hr
    border: none
    height: 1px
    background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.15), transparent)
    margin: 2.5rem 0
```
👉 sorgt für dezente, moderne Trennerlinien

Habe ich nach SASS ausgelagert, um die theme.json übersichtlich zu halten.



<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
### 🧩 Template Parts

Das Theme definiert wiederverwendbare Layout-Bausteine:

    Header
        header
        header-mit-video
    Footer
        footer

##### 👉 Diese Parts sind im Site Editor austauschbar und ermöglichen flexible Layouts ohne Codeänderung.

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
### 🧠 Architektur-Notiz

Die theme.json übernimmt in diesem Theme die Rolle von:
- Design Tokens (Farben, Fonts, Spacing)
- Global Styles (Defaults für UI)
- Block Overrides
- Teilweise Layout-Konfiguration

##### 👉 Sie ist bewusst so gestaltet, dass möglichst wenig zusätzliches CSS nötig ist.


<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___

## 🏗️ Templates und Parts

Also grundsätzlich habe ich hier nichts selbst programmiert, sondern den FSE benutzt und das Plugin "Create Blocke Theme". Ich kann aus dem Dashboad aus Templates und Parts daraus auf die Festplatte schreiben, dass ich sie auch in git tracken kann.

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___

## 🎞️ Video-Header

<div style="text-align: right;">

[theme.json](#-überblick) |
[nach oben](#fullstack-theme--dokumentation)

</div>

___
