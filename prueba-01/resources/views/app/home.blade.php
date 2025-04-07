<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Sitio Moderno</title>
  <!-- Importa una fuente de Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    /* Reset y variables */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    :root {
      --primary-color: #ff7e5f;
      --secondary-color: #feb47b;
      --dark-color: #333;
      --light-color: #fff;
    }
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.6;
      color: var(--dark-color);
      background: #f9f9f9;
    }
    
    /* Header / Navbar */
    header {
      background: var(--primary-color);
      color: var(--light-color);
      padding: 20px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .nav-container {
      max-width: 1200px;
      margin: auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }
    .logo {
      font-size: 1.8rem;
      font-weight: 600;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }
    nav ul li a {
      color: var(--light-color);
      text-decoration: none;
      font-weight: 400;
      transition: color 0.3s ease;
    }
    nav ul li a:hover {
      color: var(--secondary-color);
    }
    
    /* Hero Section */
    .hero {
      position: relative;
      min-height: 80vh;
      background: url('https://source.unsplash.com/1600x900/?city') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0,0,0,0.5);
    }
    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 800px;
      padding: 20px;
      color: var(--light-color);
    }
    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }
    .hero-content p {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }
    .hero-content a {
      display: inline-block;
      background: var(--secondary-color);
      color: var(--dark-color);
      padding: 12px 30px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s ease;
    }
    .hero-content a:hover {
      background: var(--primary-color);
    }
    
    /* Features Section */
    .features {
      padding: 60px 20px;
      background: var(--light-color);
    }
    .features .container {
      max-width: 1200px;
      margin: auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .feature {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s ease;
    }
    .feature:hover {
      transform: translateY(-5px);
    }
    .feature h3 {
      margin-bottom: 15px;
      font-size: 1.5rem;
      color: var(--dark-color);
    }
    .feature p {
      font-size: 1rem;
      color: #555;
    }
    
    /* Contact Section */
    .contact {
      padding: 60px 20px;
      background: var(--secondary-color);
      color: var(--light-color);
      text-align: center;
    }
    .contact h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    .contact p {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }
    .contact a {
      background: var(--light-color);
      color: var(--dark-color);
      padding: 12px 30px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s ease;
    }
    .contact a:hover {
      background: #ddd;
    }
    
    /* Footer */
    footer {
      background: var(--dark-color);
      color: var(--light-color);
      padding: 20px;
      text-align: center;
    }
    footer p {
      font-size: 0.9rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2.5rem;
      }
      nav ul {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>
  <!-- Header / Navbar -->
  <header>
    <div class="nav-container">
      <div class="logo">Mi Sitio Moderno</div>
      <nav>
        <ul>
          <li><a href="#hero">Inicio</a></li>
          <li><a href="#features">Características</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="hero">
    <div class="hero-content">
      <h1>Bienvenido a Mi Sitio Moderno</h1>
      <p>Descubre una experiencia web innovadora y elegante, diseñada para inspirarte.</p>
      <a href="#features">Explora más</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features" id="features">
    <div class="container">
      <div class="feature">
        <h3>Diseño Responsivo</h3>
        <p>Nuestro diseño se adapta a cualquier dispositivo para brindar la mejor experiencia.</p>
      </div>
      <div class="feature">
        <h3>Interfaz Intuitiva</h3>
        <p>Navega fácilmente con una interfaz limpia y moderna.</p>
      </div>
      <div class="feature">
        <h3>Alto Rendimiento</h3>
        <p>Optimizado para velocidad, para que nunca pierdas el ritmo.</p>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact" id="contact">
    <h2>¿Listo para empezar?</h2>
    <p>Contáctanos hoy mismo y descubre cómo podemos ayudarte a crecer.</p>
    <a href="mailto:contacto@misitiomoderno.com">Escríbenos</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Mi Sitio Moderno. Todos los derechos reservados.</p>
  </footer>
</body>
</html>
