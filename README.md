# TPI Laboratorio IV

👥 Integrantes del Grupo
- Dominguez Rach Agustín - Legajo: 25795
- Durini Nefle Enzo - Legajo: 27089
- Muñoz Nicolás Gustavo - Legajo: 25744

https://youtu.be/nPZvW2bxmnc

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
2. **Instalar dependencias**
   ```bash
   composer install
   npm install
   ```
3. **Configurar el entorno**
   ```bash
   Copiar el archivo de ejemplo .env:
   cp .env.example .env
   ```
4. **Configurar el entorno**
   ```bash
   php artisan key:generate
   ```
5. **Configurar el entorno**
   ```bash
   php artisan migrate
   ```
6. **Configurar el entorno**
   ```bash
   php artisan serve
   ```
7. **Configurar el entorno**
   ```bash
   npm run dev
   ```
___

## 🚀 Instrucciones de Uso
1. Acceso al Dashboard
- Al iniciar la aplicación, encontrarás un panel principal con acceso a todas las funcionalidades: gestión de estudiantes, cursos, materias, comisiones, profesores e inscripciones.

2. Funcionalidades Clave
- CRUD completo para:
   * Estudiantes
   * Materias
   * Cursos
   * Comisiones
   * Profesores
   * Inscripciones de Estudiantes
- Filtros avanzados y búsquedas globales.
- Generación y exportación de reportes en PDF o Excel.
   
___

## 📑 Requerimientos Funcionales

**CRUDs**
   
1. Estudiantes: Crear, editar, eliminar y listar estudiantes. Filtros por nombre y curso.
      
2. Materias: Crear, editar, eliminar y listar materias.
      
3. Cursos: Crear, editar, eliminar y listar cursos. Filtros por materia y comisiones.
      
4. Comisiones: Crear, editar, eliminar y listar comisiones. Filtros por curso y horario.

5. Profesores: Crear, editar, eliminar y listar profesores. Asignación de comisiones.
      
6. Inscripciones: Gestionar inscripciones de estudiantes en cursos y comisiones.

**Reportes**
   
1. Estudiantes inscritos: Lista de estudiantes con sus cursos y comisiones.
      
2. Cursos por materia: Cursos agrupados por materias.
      
3. Comisiones y horarios: Información de aulas, horarios y profesores asignados.
      
4. Asistencia de profesores: Listado de profesores con comisiones asignadas.
      

**Navegación**
   
1. Dashboard inicial para acceder a todas las funcionalidades.
      
2. Listados con botones para Crear, Editar y Eliminar.
      
3. Opcional: Paginación para listados largos.

___

## 🧾 Notas Adicionales

   - Asegúrate de tener instalado Laravel y Composer en tu máquina.
     
   - Revisa que la base de datos esté correctamente configurada en el archivo .env.
     
   - Para más información sobre Laravel, consulta su documentación oficial.
     


