- [Angular-Render-Web-Building](#angular-render-web-building)
  - [Description](#description)
    - [Projet description](#projet-description)
    - [Branche description](#branche-description)
  - [Features](#features)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Contribution](#contribution)
- [**TUTORIAL** - Deploy a Web Project to Render Using AngularJS (or Any Web Project)](#tutorial---deploy-a-web-project-to-render-using-angularjs-or-any-web-project)
  - [1. **Download the Project**](#1-download-the-project)
  - [2. **Adjust Configuration if Needed (Optional)**](#2-adjust-configuration-if-needed-optional)
  - [3. **Fork the Project or Create a New Repository**](#3-fork-the-project-or-create-a-new-repository)
    - [Sub-steps to Fork the Project](#sub-steps-to-fork-the-project)
    - [Sub-steps to Create a New Repository](#sub-steps-to-create-a-new-repository)
  - [4. **Add Your Build to the `deployApp` Folder**](#4-add-your-build-to-the-deployapp-folder)
    - [Sub-steps for Angular](#sub-steps-for-angular)
  - [5. **Push the Modifications to Your Repository**](#5-push-the-modifications-to-your-repository)
    - [Sub-steps to Push](#sub-steps-to-push)
  - [6. **Go to Render**](#6-go-to-render)
    - [Sub-steps to Create a Render Account](#sub-steps-to-create-a-render-account)
  - [7. **Create a New Project on Render**](#7-create-a-new-project-on-render)
    - [Sub-steps](#sub-steps)
- [Other](#other)
  - [Links](#links)

# Angular-Render-Web-Building

## Description

### Projet description

This GitHub repository provides a powerful tool for developers looking to build web applications using AngularJS.  
It allows users to design, compile, and test their applications efficiently.  
With **Render** integration, you can easily deploy your project and see it live. 🌐 The process starts with creating your AngularJS application, followed by compiling it using Angular CLI.  
You can then test your application locally before deploying it on Render for real-time visualization. 🚀  
This is an ideal solution for those seeking to optimize their web development workflow.

---

### Branche description

This branch of the repository is dedicated to **the application enabling compilation on Render**. It includes the necessary files for API deployment, a configurable Dockerfile, and the compiled application from the Angular-Build-App branch (Optional - Add your code).

This project is designed to simplify the deployment and management of the application on the Render platform.  
It provides easy configuration and deployment of an Angular application with a secure API.

- Secret: **PSSWD**

## Features

- Automated API deployment
- Simplified Docker configuration
- Pre-compiled Angular application

## Prerequisites

Before starting, make sure you have the following installed:

- **Node.js**
- **Docker** (Optional)
- **Git**

## Installation

Choose your preferred method to install the project:

1. Clone the repository:

   ```bash
   git clone https://github.com/Mfxof/Angular-Render-Web-Building.git
   cd Angular-Render-Web-Building
   ```

---
---

## Contribution

If you'd like to contribute to this project, please follow these steps:

- Fork the repository
- Create a new branch (git checkout -b feature/my-new-feature)
- Make your changes and commit them (git commit -m 'Add my new feature')
- Push your branch (git push origin feature/my-new-feature)
- Open a Pull Request

---
---
---

# **TUTORIAL** - Deploy a Web Project to Render Using AngularJS (or Any Web Project)

This tutorial will guide you through downloading, configuring, forking, and deploying a web project on Render using AngularJS as an example.

---

## 1. **Download the Project**

- Clone the project to your local machine.
- Use the following command in your terminal:

     ```bash
     git clone https://github.com/username/project-name.git
     ```

## 2. **Adjust Configuration if Needed (Optional)**

- Before starting, make sure the project configuration matches your needs.
- Check for the following:
  - Configure the `Dockerfile` file, or other file.
  - Any other environment-specific settings (environment variables, file paths, etc..).

   *Example:* For Angular projects, you might want to check the `angular.json` file or the environment settings in `src/environments/`.

## 3. **Fork the Project or Create a New Repository**

- If you want to make changes, you can either:
  - **Fork** the project (by clicking "Fork" on GitHub) to create a copy under your GitHub account.
  - **Create a new repository** on GitHub to host a modified version of the project.

- ⚠️ Sur GitHub configurer sa pour avoir des envois automatiques des Push dans les repository sur Render ⚠️
  - In the repository go to `Settings`
  - `Security` -> `Secret and variables` -> `Actions`
  - Create a `New repository secret`
  - Add a the name "RENDER"

### Sub-steps to Fork the Project

- Go to the project page on GitHub.
- Click the **Fork** button in the top-right corner.
- After forking, you'll have a copy of the project under your GitHub account.

### Sub-steps to Create a New Repository

- Go to GitHub and click **New Repository**.
- Name your repository and add initial files if necessary.

## 4. **Add Your Build to the `deployApp` Folder**

- After customizing or building your project, you need to place the ready-to-deploy version in a folder called `deployApp`.

### Sub-steps for Angular

- If you're using Angular, build the project with the following command:

     ```bash
     ng build --prod
     ```

- Look the <https://github.com/Mfxof/Angular-Render-Web-Building/tree/Angular-Build-App>
- This will generate an optimized version of your project in the `/dist` folder.
- Copy the files from the `dist/` folder to the `deployApp/` folder.

## 5. **Push the Modifications to Your Repository**

- Once you've added the build to the `deployApp` folder, it's time to push the changes to your GitHub repository.

### Sub-steps to Push

- Open your terminal and navigate to the project directory.
- Run the following commands:

     ```bash
     git add deployApp/
     git commit -m "Added build to deployApp"
     git push origin main
     ```

## 6. **Go to [Render](https://dashboard.render.com/)**

- If you don't have a Render account yet, create one [here](https://dashboard.render.com/register).

### Sub-steps to Create a Render Account

- Click **Sign Up**.
- Choose your sign-up method (GitHub, Google, or Email).
  - **Choose GitHub if you can.** ⚠️ *(To have a automatic connect to your repository)*
- Follow the instructions to complete your account creation.

## 7. **Create a New Project on Render**

- Once logged in to Render, follow these steps to create a new project.

### Sub-steps

- Go to your dashboard.
- Click **Create New Project**.
- Name your project (e.g., "My AngularJS Project").
- Select your GitHub repository (the one where you pushed the project in `deployApp`).

---

The next steps will include configuring deployment settings and launching the project on Render.

# Other

## Links

- My GitHub : <https://github.com/Mfxof>
- The initial repository : <https://github.com/Mfxof/Angular-Render-Web-Building>
- Render : <https://dashboard.render.com>
