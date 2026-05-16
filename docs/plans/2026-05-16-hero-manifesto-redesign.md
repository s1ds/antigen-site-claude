# Hero Section Redesign — Typographic Manifesto
**Date:** 2026-05-16  
**File:** `index.html` (hero section only)  
**Reference:** https://ntgn1.carrd.co/

## Decision

Replace the gradient-red hero with a black typographic manifesto where the intro copy phrases ARE the section navigation — displayed in large Bebas Neue, each linking to its section below.

## Layout

Full-viewport black (`#111111`) section. Content bottom-anchored (same as current).

1. **Kicker** — micro uppercase, muted: `FILE REF: 001-A · STATUS: ACTIVE`
2. **Title** — Bebas Neue large: `WELCOME TO THE INSURGENCE.`
3. **Manifesto block** — alternating connective text + large linked phrases:
   - "We are a" → `POST ALGORITHM ORGANISM` → `#what`
   - "built to tackle" → `STAGNATION AND SAMENESS` → `#why`
   - "through purpose-built configurations of" → `MINDS AND MACHINES.` → `#who`
   - "We are looking for" → `HARD PROBLEMS.` → `#contact`
   - Small CTA: "Talk to us if you have one →" → `#contact`
4. **Scroll indicator** — unchanged

## Typography

- Connective text: Montserrat, ~0.9rem, `rgba(255,255,255,0.35)`, uppercase
- Phrase links: Bebas Neue, `clamp(4rem, 10vw, 10rem)`, white → yellow on hover
- No underline on links; size + color change is the interaction cue

## Removals

Gradient red background, noise overlay, grid lines, diagonal slashes, ghost "AG", nav pills, yellow CTA button.
