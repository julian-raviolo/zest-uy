# Graph Report - zest-uy  (2026-10-24)

## Corpus Check
- cluster-only mode — file stats not available

## Summary
- 43 nodes · 29 edges · 17 communities (4 shown, 13 thin omitted)
- Extraction: 97% EXTRACTED · 3% INFERRED · 0% AMBIGUOUS · INFERRED: 1 edges (avg confidence: 0.85)
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `dcaac8a9`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- Documentación del sitio
- Funciones e íconos
- Instrucciones para Claude
- Publicación en hosting

## God Nodes (most connected - your core abstractions)
1. `Zest — sitio web` - 8 edges
2. `e()` - 3 edges
3. `Zest — instrucciones para Claude` - 3 edges
4. `Subir al hosting` - 3 edges
5. `csrf_token()` - 2 edges
6. `zest_mark()` - 2 edges
7. `zest_session()` - 2 edges
8. `ico()` - 2 edges
9. `SEO incluido` - 2 edges
10. `Antes de publicar` - 1 edges

## Surprising Connections (you probably didn't know these)
- `ico()` --calls--> `e()`  [INFERRED]
  includes/icons.php → includes/functions.php

## Import Cycles
- None detected.

## Communities (17 total, 13 thin omitted)

### Community 0 - "Documentación del sitio"
Cohesion: 0.22
Nodes (8): Antes de publicar, Después de publicar, Formulario, Movimiento, Probar en tu computadora, Secciones, SEO incluido, Zest — sitio web

### Community 1 - "Funciones e íconos"
Cohesion: 0.32
Nodes (5): csrf_token(), e(), zest_mark(), zest_session(), ico()

### Community 2 - "Instrucciones para Claude"
Cohesion: 0.50
Nodes (3): Carpeta del CRM: `crm/`, Carpeta protegida: `assets/img/firma/`, Zest — instrucciones para Claude

### Community 5 - "Publicación en hosting"
Cohesion: 0.67
Nodes (3): Hostinger (desde GitHub), Otro hosting, Subir al hosting

## Knowledge Gaps
- **13 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `Zest — sitio web` connect `Documentación del sitio` to `Publicación en hosting`?**
  _High betweenness centrality (0.059) - this node is a cross-community bridge._
- **Why does `Subir al hosting` connect `Publicación en hosting` to `Documentación del sitio`?**
  _High betweenness centrality (0.022) - this node is a cross-community bridge._