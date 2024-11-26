# TPILaboratorioIV

👥 Integrantes del Grupo
Dominguez Rach Agustín - Legajo: 25795
Durini Nefle Enzo - Legajo: 27089
Muñoz Nicolás Gustavo - Legajo: 25744

# Sistema de Gestión Escolar - Laravel

## 📋 Descripción del Proyecto
Este sistema de gestión escolar permite administrar entidades clave de una escuela: alumnos, cursos, materias, comisiones y profesores. El objetivo es proporcionar una herramienta eficiente para gestionar información mediante funcionalidades completas de CRUD, filtros, reportes y vistas amigables.

### 🎯 Objetivo
Desarrollar un sistema que permita:
- Administrar estudiantes, cursos, materias, comisiones y profesores.
- Gestionar inscripciones de estudiantes en cursos y comisiones.
- Generar reportes exportables en PDF o Excel.

---

## ⚙️ Requisitos Técnicos
- **Framework:** Laravel
- **Base de Datos:** MySQL (u otro sistema compatible con Laravel)
- **Frontend:** Blade Templates con Bootstrap (opcionalmente React/Angular para vistas más dinámicas).
- **ORM:** Eloquent
- **Buenas Prácticas:** Validaciones, migraciones y middleware opcionales.

---

## 🛠️ Instrucciones de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone <URL-del-repositorio>
   cd <directorio-del-proyecto>
   ```
2. Instalar dependencias
```bash
composer install
npm install
```
3.Configurar el entorno
```bash
Copiar el archivo de ejemplo .env:
cp .env.example .env
```
4.Generar la clave de la aplicación
```bash
php artisan key:generate
```
.5 Crear las tablas y relaciones
```bash
php artisan migrate
```
.6 Ejecutar el servidor de desarrollo
```bash
php artisan serve
```
.7 Compilar assets frontend
```bash
npm run dev
```
