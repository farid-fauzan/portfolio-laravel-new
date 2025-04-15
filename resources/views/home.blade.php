@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Intro -->
<section id="intro" class="wrapper style1 fullscreen fade-up">
    <div class="inner">
        <h1>Farid Fauzan</h1>
        <p>
            Hey there! I’m a fullstack developer who loves building things with <strong>Java Spring Boot</strong> — from clean backend services to sleek web and mobile apps. Let’s build something awesome!
        </p>
        <ul class="actions">
            <li><a href="#about" class="button scrolly">Get to Know Me</a></li>
        </ul>
    </div>
</section>


<!-- About Me -->
<section id="about" class="wrapper style2 fade-up">
    <div class="inner">
        <h2>About Me</h2>
        <p>
            I’m a tech enthusiast and fullstack developer who’s happiest solving real-world problems through code.
            My sweet spot? Building scalable backend systems with <strong>Java Spring Boot</strong>, but I move just as comfortably in the frontend and mobile world.
        </p>
        <p>
            Over the years, I’ve worked on everything from enterprise platforms and internal tools, to logistics apps and real-time monitoring systems.
            I enjoy architecting clean solutions, optimizing performance, and collaborating with cross-functional teams to turn ideas into polished software.
        </p>
        <p>
            Whether it’s a dashboard for enterprise users, a mobile app for field agents, or a backend system that runs behind the scenes —
            I build with impact, reliability, and maintainability in mind.
        </p>
    </div>
</section>


<!-- Projects -->
<section id="projects" class="wrapper style3 fade-up">
    <div class="inner">
        <h2 class="major">Projects</h2>
        <div class="grid-projects">

            <!-- CodeCraft.co.id -->
            <div class="project-card">
                <img src="{{ asset('images/project-codecraft.png') }}" alt="CodeCraft" />
                <h3>CodeCraft.co.id</h3>
                <p>Company profile website for a software agency built on WordPress with a custom theme and VPS deployment.</p>
                <a href="javascript:void(0);" class="button" style="background-color: #0f222f; color: white;"
                    onclick="openModal(
                        'CodeCraft.co.id',
                        'A modern company profile website for a digital software agency, built using WordPress with a custom theme and optimized SEO structure. I handled the full setup including VPS provisioning (Ubuntu Server), database configuration using MariaDB, WordPress deployment, plugin integrations, and performance optimization for Lighthouse standards. Designed to showcase services, portfolios, and attract B2B leads.',
                        ['WordPress', 'MariaDB', 'Ubuntu Server', 'Nginx', 'Custom Theme', 'SEO Optimization', 'VPS Deployment'],
                        ['{{ asset('images/project-codecraft.png') }}']
                    )">Details</a>
            </div>

            <!-- SIKAP (Employee Management System) -->
            <div class="project-card">
                <img src="{{ asset('images/project-sikap.png') }}" alt="SIKAP" />
                <h3>SIKAP (Employee Management System)</h3>
                <p>A robust HR system for managing employee lifecycle...</p>
                <a href="javascript:void(0);" class="button" style="background-color: #0f222f; color: white;"
                onclick="openModal(
                    'SIKAP (Employee Management System)',
                    'SIKAP is a full-featured employee management system developed for PT Paramatech. I was responsible for designing and implementing the backend architecture using Java Spring Boot, including scalable and secure RESTful APIs. The system integrates asynchronous job handling using Apache Kafka, supports containerized deployment with Docker, and automates workflows such as onboarding, leave requests, and performance reviews. I also integrated third-party services and implemented role-based access control (RBAC) for security.',
                    ['Java Spring Boot', 'Apache Kafka', 'Docker', 'REST API', 'MySQL', 'Microservices', 'SQL Server', 'CI/CD', 'Windows Server', 'Ubuntu Server' ],
                    ['{{ asset('images/project-sikap.png') }}']
                )">Details</a>
            </div>


            <!-- Project: Ultimate – PT Unilever -->
            <div class="project-card">
                <img src="{{ asset('images/project-ultimate.png') }}" alt="Ultimate – PT Unilever" />
                <h3>Ultimate – PT Unilever</h3>
                <p>Enterprise-grade HR platform to manage employee...</p>
                <a href="javascript:void(0);" class="button" style="background-color: #0f222f; color: white;"
                onclick="openModal(
                    'Ultimate – PT Unilever',
                    'Ultimate is a corporate-grade HR platform used by PT Unilever to manage employee performance reviews, and automated approval workflows. I was responsible for building and maintaining backend microservices using Java Spring Boot, designing secure and scalable REST APIs, and handling asynchronous processing with Apache Kafka. The system runs on Dockerized environments across both Windows Server and Ubuntu Server with CI/CD pipelines for seamless deployment. Data is stored across hybrid RDBMS setups including MySQL and SQL Server.',
                    ['Java Spring Boot', 'Apache Kafka', 'Docker', 'REST API', 'MySQL', 'Microservices', 'SQL Server', 'CI/CD', 'Windows Server', 'Ubuntu Server'],
                    ['{{ asset('images/project-ultimate.png') }}']
                )">Details</a>
            </div>


            <!-- Project: Long Leave – PT Unilever -->
            <div class="project-card">
                <img src="{{ asset('images/project-longleave.png') }}" alt="Long Leave – PT Unilever" />
                <h3>Long Leave – PT Unilever</h3>
                <p>Leave entitlement platform with advanced approval...</p>
                <a href="javascript:void(0);" class="button" style="background-color: #0f222f; color: white;"
                onclick="openModal(
                    'Long Leave – PT Unilever',
                    'Long Leave is a leave entitlement platform developed for PT Unilever, built to manage complex eligibility calculations and multi-step approval workflows. I worked on designing and implementing backend microservices with Java Spring Boot, asynchronous task handling using Apache Kafka, and container-based deployment using Docker. The system integrates with other HR modules and uses hybrid databases including MySQL and SQL Server. I also handled CI/CD setup for staging and production environments.',
                    ['Java Spring Boot', 'Apache Kafka', 'Docker', 'REST API', 'MySQL', 'Microservices', 'SQL Server', 'CI/CD', 'Windows Server', 'Ubuntu Server'],
                    ['{{ asset('images/project-longleave.png') }}']
                )">Details</a>
            </div>


            <!-- Project: Kimo Kargo App -->
            <div class="project-card">
                <img src="{{ asset('images/project-kimo.png') }}" alt="Kimo Kargo App" />
                <h3>Kimo Kargo App</h3>
                <p>End-to-end logistics platform supporting real-time...</p>
                <a href="javascript:void(0);" class="button" style="background-color: #0f222f; color: white;"
                onclick="openModal(
                    'Kimo Kargo App',
                    'Kimo Kargo is an end-to-end logistics platform supporting mobile and web interfaces for delivery management, tracking, and driver coordination. I developed the Android app using Java and Kotlin, and built the backend APIs with Spring Boot and Laravel. The system includes real-time delivery status tracking, Google Maps API integration, and PostgreSQL as the primary database. I also implemented push notifications and login via Firebase Auth.',
                    ['Java', 'Kotlin', 'Spring Boot', 'Laravel', 'PostgreSQL', 'Firebase Auth', 'Google Maps API', 'Android SDK', 'REST API', 'Wordpress'],
                    ['{{ asset('images/project-kimo.png') }}']
                )">Details</a>
            </div>


           <!-- EEM (Electric E-Monitoring) -->
            <div class="project-card">
                <img src="{{ asset('images/project-eem-1.png') }}" alt="EEM" />
                <h3>EEM (Electric E-Monitoring)</h3>
                <p>Real-time monitoring system for tracking electricity usage...</p>
                <a href="javascript:void(0);" class="button" style="background-color: #0f222f; color: white;"
                onclick="openModal(
                    'EEM (Electric E-Monitoring)',
                    'EEM is a real-time electric monitoring system used to measure voltage, current, and power consumption across industrial and office environments. I developed the Android application using Java to interface with IoT devices via Bluetooth and MQTT, and built the backend using Laravel for dashboard visualization, data logging, and alerting. The system includes real-time fault detection, usage analytics, and historical trend charts stored in a MySQL database.',
                    ['Java (Android)', 'Laravel', 'MySQL', 'IoT', 'Realtime Monitoring', 'Bluetooth Communication', 'REST API', 'Data Visualization'],
                    [
                        '{{ asset('images/project-eem-1.png') }}',
                        '{{ asset('images/project-eem-2.png') }}'
                    ]
                )">
                Details
                </a>
            </div>


            <!-- Magnum.id -->
            <div class="project-card">
                <img src="{{ asset('images/project-magnum.png') }}" alt="Magnum.id" />
                <h3>Magnum.id</h3>
                <p>Multi-service digital platform built to...</p>
                <a href="javascript:void(0);" class="button" style="background-color: #0f222f; color: white;"
                onclick="openModal(
                    'Magnum.id',
                    'A centralized platform designed to streamline internal operations at Magnum.id — including role-based user management, analytics dashboard, and integration with third-party APIs. I built the frontend using Vue.js and developed the backend services using Express.js and Node.js, including API orchestration and authentication. CI/CD pipeline was also configured for automated deployment.',
                    ['Vue.js', 'Express.js', 'Node.js'],
                    ['{{ asset('images/project-magnum.png') }}']
                )">Details</a>
            </div>

            <!-- LegalDoc.id -->
            <div class="project-card">
                <img src="{{ asset('images/project-legaldoc.png') }}" alt="LegalDoc.id" />
                <h3>LegalDoc.id</h3>
                <p>A legal tech platform that automates document...</p>
                <a href="javascript:void(0);" class="button" style="background-color: #0f222f; color: white;"
                onclick="openModal(
                    'LegalDoc.id',
                    'LegalDoc.id is a legal technology platform that simplifies legal document workflows. I developed the backend architecture, template engine for dynamic PDF generation, and implemented role-based access for lawyers, clients, and admins. The platform supports contract lifecycle management, digital signatures, and approval tracking.',
                    ['Laravel', 'Bootstrap', 'PDF Generator', 'Role Management', 'MySQL'],
                    ['{{ asset('images/project-legaldoc.png') }}']
                )">Details</a>
            </div>



        </div>
    </div>
</section>


<!-- Skills -->
<section id="skills" class="wrapper style7 fade-up skills-dark">
    <div class="inner">
        <h2>Skills</h2>
        <p>Here are the technologies, tools, and frameworks I’ve worked with throughout my professional journey.</p>

        <div class="skills-grid">
            <!-- Programming Languages -->
            <div>
                <h3>Programming Languages</h3>
                <ul>
                    <li><i class="devicon-java-plain colored"></i> Java</li>
                    <li><i class="devicon-php-plain colored"></i> PHP</li>
                    <li><i class="devicon-go-original-wordmark colored"></i> Golang</li>
                    <li><i class="devicon-javascript-plain colored"></i> JavaScript</li>
                    <li><i class="devicon-kotlin-plain colored"></i> Kotlin</li>
                </ul>
            </div>

            <!-- Frameworks & Libraries -->
            <div>
                <h3>Frameworks & Libraries</h3>
                <ul>
                    <li><i class="devicon-spring-plain colored"></i> Spring Boot</li>
                    <li><i class="devicon-laravel-plain colored"></i> Laravel</li>
                    <li><i class="devicon-express-original"></i> Express.js</li>
                    <li><i class="devicon-vuejs-plain colored"></i> Vue.js</li>
                    <li><i class="devicon-bootstrap-plain colored"></i> Bootstrap</li>
                    <li><i class="devicon-tailwindcss-plain colored"></i> Tailwind CSS</li>
                </ul>
            </div>

            <!-- Databases -->
            <div>
                <h3>Databases</h3>
                <ul>
                    <li><i class="devicon-mysql-plain colored"></i> MySQL</li>
                    <li><i class="devicon-postgresql-plain colored"></i> PostgreSQL</li>
                    <li><i class="devicon-microsoftsqlserver-plain"></i> SQL Server</li>
                    <li><i class="devicon-oracle-original colored"></i> Oracle</li>
                </ul>
            </div>

            <!-- DevOps & Tools -->
            <div>
                <h3>DevOps & Tools</h3>
                <ul>
                    <li><i class="devicon-docker-plain colored"></i> Docker</li>
                    <li><i class="devicon-nginx-original colored"></i> Nginx</li>
                    <li><i class="devicon-apachekafka-original"></i> Apache Kafka</li>
                    <li><i class="devicon-ubuntu-plain colored"></i> Ubuntu Server</li>
                    <li><i class="devicon-windows8-original colored"></i> Windows Server</li>
                    <li><i class="devicon-gitlab-plain colored"></i> CI/CD (GitHub Actions, GitLab CI)</li>
                    <li><i class="devicon-firebase-plain colored"></i> Firebase</li>
                    <li><i class="devicon-redhat-plain colored"></i> Red Hat Studio</li>
                </ul>
            </div>

            <!-- Mobile Development -->
            <div>
                <h3>Mobile Development</h3>
                <ul>
                    <li><i class="devicon-android-plain colored"></i> Android (Java & Kotlin)</li>
                    <li><i class="devicon-firebase-plain colored"></i> Firebase Auth & Notifications</li>
                    <li><i class="devicon-google-plain colored"></i> Google Maps SDK</li>
                    {{-- <li><i class="devicon-api-plain"></i> REST API Integration</li> --}}
                    {{-- <li>Bluetooth Communication (BLE)</li> --}}
                </ul>
            </div>

            <!-- IoT & Realtime -->
            <div>
                <h3>IoT & Realtime Communication</h3>
                <ul>
                    {{-- <li><i class="devicon-mqtt-original"></i> MQTT Protocol</li> --}}
                    <li>Sensor Data Aggregation</li>
                    <li>Realtime Dashboard & Alerting</li>
                    <li>Bluetooth-to-Backend Communication</li>
                </ul>
            </div>

            <!-- Other Skills -->
            <div>
                <h3>Other Skills</h3>
                <ul>
                    <li>System Design & Architecture</li>
                    <li>Microservices Architecture</li>
                    <li>Performance Optimization</li>
                    <li>Event-Driven Architecture</li>
                    <li>Admin Panel Development</li>
                    <li>Client Requirement Translation</li>
                    <li>Data Visualization</li>
                    <li>Cross-functional Collaboration</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- Contact -->
<section id="contact" class="wrapper style1 fade-up">
    <div class="inner">
        <h2>Contact</h2>
        <p>Feel free to reach out to me via email or connect on social media below.</p>

        <ul class="contact-list">
            <li>
                <strong>Email:</strong>
                <a href="mailto:farid.fauzan93@gmail.com">
                    <i class="fas fa-envelope"></i> farid.fauzan93@gmail.com
                </a>
            </li>
            <li>
                <strong>LinkedIn:</strong>
                <a href="https://www.linkedin.com/in/farid-f-a415a7201" target="_blank" rel="noopener">
                    <i class="fab fa-linkedin"></i> linkedin.com/in/farid-f-a415a7201
                </a>
            </li>
            <li>
                <strong>GitHub:</strong>
                <a href="https://github.com/farid-fauzan" target="_blank" rel="noopener">
                    <i class="fab fa-github"></i> github.com/farid-fauzan
                </a>
            </li>
        </ul>
    </div>
</section>

<x-project-modal />


@endsection
