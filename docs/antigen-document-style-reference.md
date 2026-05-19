# ANTIGEN Document Style Reference
*For use with PPTX / PDF generation tools*

---

## COLORS

| Name | Hex | Use |
|---|---|---|
| Red | `#E31D28` | Primary brand field, urgent headlines, section bars |
| Magenta | `#E3195B` | Gradient partner, image overlays, emotional intensity |
| Crimson | `#B11226` | Dark red shadows, deep image treatment |
| Black | `#111111` | Primary text, brutalist headline overlays |
| White | `#FFFFFF` | Clean evidence fields, reversed text |
| Paper | `#F8F7F6` | Editorial off-white background |
| Smoke | `#E8E8E8` | Rules, pale panels, evidence containers |
| Grey | `#9FA2A4` | Metadata, captions, inactive nav |
| Blue | `#08A7D8` | Rare contrast accent, strategic emphasis |
| Yellow | `#FFC000` | Agents of growth, signal shards, solution emphasis |

### Gradients
- **Insurgence**: `linear-gradient(135deg, #E31D28 0%, #E3195B 72%, #F0448E 100%)`
- **Red Dark**: `linear-gradient(135deg, #E31D28 0%, #B11226 100%)`

### Color proportions by territory
- **Red Manifesto slides**: 70% red/magenta · 20% white · 10% black
- **White Evidence slides**: 70% white/off-white · 15% red · 10% black · 5% blue/yellow/grey
- **Black Intervention slides**: 60% black · 25% white · 15% red

---

## TYPOGRAPHY

### Fonts
| Role | Font | Fallback |
|---|---|---|
| Display / Headlines | Bebas Neue | Oswald, Impact, Arial Narrow |
| Body / UI | Montserrat | Inter, Arial, sans-serif |
| Monospace | IBM Plex Mono | SFMono-Regular, Menlo |

### Type roles

| Role | Size | Weight | Case | Leading | Tracking |
|---|---|---|---|---|---|
| Hero Display | 120–180pt | 400 (Bebas) | UPPER | 0.78 | −4.5% |
| Section Display | 72–100pt | 400 (Bebas) | UPPER | 0.82 | −3.5% |
| Editorial Headline | 40–60pt | 900 (Montserrat) | UPPER | 0.95 | −3% |
| Subheading | 24–36pt | 900 (Montserrat) | UPPER | 1.1 | −2.5% |
| Body Copy | 11–13pt | 500 (Montserrat) | Sentence | 1.5 | 0 |
| Caption / Label | 8–9pt | 800 (Montserrat) | UPPER | 1.2 | +8% |

### Rules
- Headlines: uppercase, left-aligned (not centred unless manifesto moment)
- Avoid centring everything; let text align left, bleed an edge, or collide with imagery
- Navigation labels: small, uppercase, top-aligned, spaced with `·` or `;`

---

## SLIDE / PAGE TERRITORIES

### Red Manifesto (covers, dividers, hero moments)
- **Background**: Insurgence gradient or flat `#E31D28`
- **Headline**: Bebas Neue, white, oversized, left-aligned, 3–5 stacked lines
- **Body**: Montserrat Bold white, max 2 short sentences
- **Image**: Full-bleed figure, grayscale + red overlay, partially hidden by type

### White Evidence (analysis, data, services, frameworks)
- **Background**: `#FFFFFF` or `#F8F7F6`
- **Headline**: Bebas Neue or Montserrat Black, `#E31D28`, left column
- **Body**: Montserrat 500, `#111111`, max 60 characters per line
- **Evidence object**: Right column — chart, screenshot, or large number

### Black Intervention (problem statements, quote cards, "what we reject")
- **Background**: `#111111`
- **Text**: White or `#FFC000` accent
- **Use sparingly** — hard conclusions and counter-positioning only

### Yellow Signal (agents of growth, capability modules)
- **Background**: `#FFC000`
- **Text**: `#111111`
- **Shape**: Torn / angular clip — not a clean rectangle

---

## LAYOUT

| Parameter | Value |
|---|---|
| Canvas (print/PPTX) | 16:9 (33.87 × 19.05 cm / 13.33 × 7.5 in) |
| Web max width | 1440px |
| Columns | 12-column grid |
| Desktop padding | 48–72px |
| Mobile padding | 24px |

### Grid modes
- **Manifesto**: Loose asymmetric — text bleeds to edges, nav stays small top-left/right
- **Evidence**: Disciplined two-column — claim left (5fr), proof right (7fr)
- **Triptych**: Three equal columns — Sameness · Stagnation · Suppression
- **Collision**: Opposing shapes, arrows, torn panels, hard diagonals

---

## SECTION NAVIGATION SYSTEM

Always visible at top of every slide/page. Small, uppercase, light weight.

```
0. PRELUDE   1. PURPOSE   2. PHILOSOPHY   3. PRODUCT   4. PEOPLE
```

- **Current section**: Yellow on red backgrounds · Red on white backgrounds
- All other sections: 45% white (red bg) or 38% black (white bg)

---

## COMPONENTS

### Hero Manifesto
- Full-bleed red/magenta · min 100% viewport height
- Stacked headline: `WE BATTLE / STAGNATION / WITH / INSURGENCE`
- One subline (bold, max 20 words)
- One CTA button — black, uppercase, no rounded corners

### Force Card (Sameness · Stagnation · Suppression)
- `6px` red top border
- Category label: uppercase micro text in red
- Title: Bebas Neue, red, large
- Body: one sharp explanatory sentence

### Evidence Block
- White or paper background
- `6px` red left border or top bar
- Large number or chart as centrepiece
- Red uppercase label + grey source caption

### Manifesto Statement
- Large declarative headline + one short paragraph
- Declarative, not descriptive: name the force, define the trap

### Torn Signal (Yellow)
- Yellow background, angular clip-path
- Black text, Bebas Neue title
- Represents growth agents / solution thrust

### Word Wall
- Insurgence gradient background
- Dense field of buzzwords (8–9pt, 55% opacity, uppercase)
- Massive black overprinted statement (mix-blend: multiply)

### CTA Strip
- Black background
- `"Talk to us if you have a hard problem or want to help solve one."`
- Two buttons: RED primary · Outline secondary

### Buttons
- **No rounded corners** (0px radius)
- Border: 2px solid
- Text: uppercase, 8% letter-spacing, weight 900
- Padding: ~12px vertical · 24px horizontal

---

## IMAGERY

### Select images that show
Insurgency · dissent · anonymity · masks · ritual · systems · machines · pressure · post-human tension · industrial texture · charts as evidence

### Avoid
Office scenes · smiling teams · handshake photography · soft gradients · generic AI robots · glassmorphism

### Treatment
- Red wash / colour overlay (multiply or hard-light blend mode)
- Grayscale + high contrast
- Aggressive cropping — forehead, mouth, or eye-line
- Allow type to partially obscure the subject
- Central composition: ritualistic posters
- Left-heavy: argument pages
- Right-heavy: evidence pages

---

## COPY RULES

### Structure
`[Name the force] · [Define the trap] · [Show evidence] · [Insurgent alternative]`

### Good patterns
- `"The legacy model solves post-algorithm problems with a pre-internet factory."`
- `"Speed without direction. 2026 tools plugging into 2006 systems."`
- `"Infinite capability, finite courage."`

### Preferred word bank
Insurgence · stagnation · sameness · suppression · convergence · organism · reaction · hard problems · post-algorithm · legacy model · minds and machines · first principles · agents of growth · unfamiliar pathways · signal · evidence · trap · rupture · purpose-built

### Avoid
"Innovative business transformation" · "collaborative strategy solutions" · "unlock" · "leverage synergies" · any phrase a consulting deck from 2008 would use

---

## QUALITY CHECKLIST

Before finalising any ANTIGEN document:

- [ ] Does it make a claim?
- [ ] Does it identify an enemy or trap?
- [ ] Does the typography have enough physical force?
- [ ] Does the red/white balance create confrontational contrast?
- [ ] Does the evidence look interrogated — not decorated?
- [ ] Does it look purpose-built rather than templated?
- [ ] Is it impossible to mistake for a legacy agency deck?
