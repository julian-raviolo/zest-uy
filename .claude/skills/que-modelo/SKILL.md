---
name: que-modelo
description: Recomienda qué modelo, nivel de esfuerzo y agente usar para una tarea, pensando en gastar la menor cantidad de tokens posible.
argument-hint: "[descripción de la tarea]"
disable-model-invocation: true
model: haiku
effort: low
---

Tarea a evaluar: $ARGUMENTS

Recomendá cómo encararla gastando lo mínimo sin perder calidad. Usá esta guía:

| Tipo de tarea | Modelo | Esfuerzo | Cómo |
|---|---|---|---|
| Cambio chico y claro: un texto, un estilo, un nombre, un valor | `haiku` | `low` | Directo en la sesión |
| Buscar dónde está algo o entender una parte del código | — | — | Agente `explorador` (Haiku) |
| Correr build, lint o tests y ver errores | — | — | Agente `verificador` (Haiku) |
| Cambio normal ya definido: una pantalla, un campo, un arreglo con causa conocida | `sonnet` | `medium` | Directo en la sesión |
| Funcionalidad nueva que toca varias partes | `opusplan` | `medium` | Modo plan (Shift+Tab), aprobar el plan y ejecutar |
| Bug raro sin causa clara, cambios de base de datos, permisos, login o seguridad | `sonnet` | `medium` | Pedir primero un plan al agente `arquitecto` (Opus) y ejecutarlo |
| Decisión de diseño muy compleja o tarea larga y crítica | `opus` | `high` | Directo, con modo plan |

Respondé en español, en máximo 6 líneas:
1. Tipo de tarea detectado.
2. Qué hacer, con los comandos exactos para copiar (por ejemplo `/model sonnet` y `/effort medium`, o "pedile al agente explorador que…").
3. Un consejo para ahorrar en esta tarea concreta (por ejemplo: nombrar el archivo, hacer `/clear` antes si viene de otro tema, dividirla en partes).

Si la descripción es demasiado vaga para decidir, hacé una sola pregunta corta.
