# Project Database Structure Explanation

This document provides an overview of the database structure for the project management website, explaining the contents of each table used to store project data, media, and other relevant information.

## 1. **projects Table**

This table stores information about each project.

### Columns:

-   **id**: (Primary Key) A unique identifier for each project.
-   **title**: A string field to store the title/name of the project.
-   **description**: A text field that holds a detailed description of the project.
-   **image**: A nullable string field that stores the URL or path of the main image representing the project. It can be `null` if no image is provided.
-   **category_id**: A foreign key that links the project to a category in the `categories` table. It uses the `constrained()` method to ensure referential integrity.
-   **status**: An enum field that stores the status of the project. The options are:
    -   `completed`: The project is finished.
    -   `in_progress`: The project is currently being worked on.
    -   `on_hold`: The project is temporarily paused.
-   **created_at**: Timestamp indicating when the project was created.
-   **updated_at**: Timestamp indicating when the project was last updated.

### Purpose:

The `projects` table is used to store the main details about each project, including its title, description, image, status, and associated category.

---

## 2. **categories Table**

This table stores the categories for the projects. Categories are used to classify projects into different types (e.g., "Web Development", "Mobile Apps", "Design").

### Columns:

-   **id**: (Primary Key) A unique identifier for each category.
-   **name**: A string field that stores the name of the category (e.g., "Web Development", "Mobile App").
-   **created_at**: Timestamp indicating when the category was created.
-   **updated_at**: Timestamp indicating when the category was last updated.

### Purpose:

The `categories` table helps categorize projects into meaningful groups. This allows users to filter and view projects based on specific types or themes.

---

## 3. **project_media Table**

This table is used to store media files (such as images or videos) related to each project.

### Columns:

-   **id**: (Primary Key) A unique identifier for each media entry.
-   **project_id**: A foreign key that links the media to a project in the `projects` table. This ensures each media entry belongs to a specific project.
-   **media_type**: An enum field that indicates the type of media:
    -   `image`: For image files.
    -   `video`: For video files.
-   **media_url**: A string field that stores the URL or path of the media file (e.g., path to an image or video file).
-   **created_at**: Timestamp indicating when the media entry was created.
-   **updated_at**: Timestamp indicating when the media entry was last updated.

### Purpose:

The `project_media` table allows you to associate multiple images or videos with a single project. This is useful for projects that need to showcase multiple media files.

---

## 4. **languages Table (Optional)**

This table stores the programming languages or technologies used in projects.

### Columns:

-   **id**: (Primary Key) A unique identifier for each language or technology.
-   **name**: A string field that stores the name of the language or technology (e.g., "PHP", "React", "Node.js").
-   **created_at**: Timestamp indicating when the language entry was created.
-   **updated_at**: Timestamp indicating when the language entry was last updated.

### Purpose:

The `languages` table is optional but can be useful if you want to track the technologies used in your projects. You can associate each project with one or more languages or technologies through a pivot table.

---

## 5. **skills Table (Optional)**

This table stores the skills required for or demonstrated in the project.

### Columns:

-   **id**: (Primary Key) A unique identifier for each skill.
-   **name**: A string field that stores the name of the skill (e.g., "Backend Development", "UI/UX Design").
-   **created_at**: Timestamp indicating when the skill entry was created.
-   **updated_at**: Timestamp indicating when the skill entry was last updated.

### Purpose:

The `skills` table is optional and can be used if you want to track the specific skills used or demonstrated in each project. Like languages, this can also be linked to projects using a pivot table.

---

## 6. **Pivot Table (Optional) `project_language`**

If you are using the `languages` table to track programming languages used in each project, you will need a pivot table to establish a many-to-many relationship between projects and languages.

### Columns:

-   **id**: (Primary Key) A unique identifier for the pivot record.
-   **project_id**: A foreign key that links the project to a language.
-   **language_id**: A foreign key that links the language to a project.
-   **created_at**: Timestamp indicating when the relationship between project and language was created.
-   **updated_at**: Timestamp indicating when the relationship was last updated.

### Purpose:

The `project_language` pivot table allows many-to-many relationships between projects and programming languages. A project can have multiple languages, and each language can be used in multiple projects.

---

## 7. **Pivot Table (Optional) `project_skill`**

If you are using the `skills` table to track specific skills required for a project, this pivot table will link projects to skills.

### Columns:

-   **id**: (Primary Key) A unique identifier for the pivot record.
-   **project_id**: A foreign key that links the project to a skill.
-   **skill_id**: A foreign key that links the skill to a project.
-   **created_at**: Timestamp indicating when the relationship between project and skill was created.
-   **updated_at**: Timestamp indicating when the relationship was last updated.

### Purpose:

The `project_skill` pivot table allows a many-to-many relationship between projects and skills. This is useful for associating specific skills (like "Frontend Development" or "Data Analysis") with each project.

---

## Conclusion

The database structure is designed to efficiently store and manage projects, including their associated categories, media files, languages, and skills. Using relationships like `hasMany`, `belongsTo`, and pivot tables, the system allows for flexible and scalable management of project data.
