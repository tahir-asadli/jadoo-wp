# Makefile for Tailwind CSS build

TAILWIND_INPUT=./src/tailwind.css
TAILWIND_OUTPUT=./assets/css/tailwind.css

.PHONY: tailwind-watch tailwind-build

tailwind-watch:
	npx @tailwindcss/cli -i $(TAILWIND_INPUT) -o $(TAILWIND_OUTPUT) --watch

tailwind-build:
	npx @tailwindcss/cli -i $(TAILWIND_INPUT) -o $(TAILWIND_OUTPUT)
