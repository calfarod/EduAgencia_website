<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My First App Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- <link rel="icon" type="image/png" href="img/favicon.png"> -->
  <link rel="icon" type="image/svg+xml" href="img/favicon.svg">
  <link href="css/stylesFirstAppLayout.css" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="header-content">
      <div class="logo">
        <!-- <img
            src="https://placehold.co/40x40/73D3FF/FFFFFF/png"
            alt="App Icon"
            class="logo-img"
          /> -->
        <i class="bi bi-backpack4-fill"></i>
        <div class="logo-text">
          <span class="text-app">Edu</span><span class="text-logo">Agencia</span>
        </div>
      </div>
      <nav> <!-- Menu -->
        <ul>
          <li>
            <a href="#" class="nav-item">
              <div class="icon-wrapper">
                <i class="bi bi-house-door-fill"></i>
                <span class="badge">8</span>
              </div>
              <span class="nav-text">Home</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <div class="icon-wrapper">
                <i class="bi bi-gift-fill"></i>
                <span class="badge hidden">8</span>
              </div>
              <span class="nav-text">Products</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <div class="icon-wrapper">
                <i class="bi bi-file-earmark-person-fill"></i>
                <span class="badge hidden">8</span>
              </div>
              <span class="nav-text">Learning</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <div class="icon-wrapper">
                <i class="bi bi-award-fill"></i>
                <span class="badge hidden">8</span>
              </div>
              <span class="nav-text">eCommerce</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <div class="icon-wrapper">
                <i class="bi bi-camera-video-fill"></i>
                <span class="badge hidden">8</span>
              </div>
              <span class="nav-text">Cost Management</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <div class="icon-wrapper">
                <i class="bi bi-file-earmark-person-fill"></i>
                <span class="badge hidden">8</span>
              </div>
              <span class="nav-text">Market-Research</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="auth-group">
        <a href="#" class="btn-secondary">Unirse ahora</a>
        <a href="#" class="btn-primary">Iniciar sesión</a>
      </div>
    </div>
  </header>

  <main class="container">
    <aside class="left-col"> <!-- Columna izquierda -->
      <div class="profile-card">
        <div class="banner">
          <span class="premium-label">General Projects Owner</span>
        </div>

        <div class="profile-img-container">
          <img src="img/carlos2.png" alt="Foto 100x100 de Carlos A. Alfaro" class="profile-avatar">
        </div>

        <div class="profile-info">
          <h2 class="profile-name">Carlos Alfaro Díaz <i class="bi bi-patch-check-fill"></i></h2>
          <p class="profile-title">Profesor Asistente | Ingeniero Comercial | Magister en Gestión | EduAgencia Project
            Owner</p>
          <p class="profile-location">Tarapacá - Chile</p>
          <!-- <div class="profile-organization">
            <img src="logo-universidad.png" alt="University Logo" class="org-logo">
            <span>Universidad Santo Tomás</span>
          </div> -->
        </div>
      </div>

      <div class="card contact-cta-card">
        <div class="contact-header">
          <i class="bi bi-person-lines-fill"></i>
          <span>Gestión de Proyectos</span>
        </div>
        <div class="contact-body">
          <p class="manager-name">Carlos Alfaro</p>
          <p class="manager-role">General Project Manager</p>

          <div class="contact-info-list">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <span>carlos@eduagencia.com</span>
            </div>
            <div class="info-item">
              <i class="bi bi-telephone"></i>
              <span>+569 8612 0041</span>
            </div>
          </div>

          <div class="contact-buttons">
            <a href="mailto:carlos@eduagencia.com" class="btn-contact email-btn">
              <i class="bi bi-send-fill"></i> Escribir Email
            </a>
            <a href="https://wa.me/56986120041" target="_blank" class="btn-contact whatsapp-btn">
              <i class="bi bi-whatsapp"></i> Contactar WhatsApp
            </a>
          </div>
        </div>
      </div>

      <div class="textual">
        <div class="footer-links">
          <span>Servicios de Capacitación a empresas</span>
          <span>Diseño Web y Comercio Electrónico</span>
          <span>Servicio Gestión de Costos</span>
          <span>Investigación de Mercados</span>
        </div>

        <div class="footer-copy">
          <div class="brand-row">
            <div class="brand-text">
              <span class="brand-blue">Edu</span><span class="brand-dark">Agencia</span>
            </div>
            <i class="bi bi-backpack4-fill"></i>
          </div>

          <p>Caadconsulting ©<span id="current-year"></span></p>
        </div>
      </div>
    </aside>

    <section class="center-col"> <!-- Columna central -->
      <article class="card product-card"> <!-- article 1 -->
        <h1 class="product-badge">SOLUCIÓN EMPRESARIAL</h1>
        <img src="img/cen1.png" alt="Ecosistema de Aprendizaje" class="post-img">

        <div class="product-body">
          <h3 class="product-title">Desarrollo de Talento 360: Del Gap Analysis al ROI</h3>
          <p class="product-description">
            Transformamos brechas de habilidades en activos estratégicos mediante **Project-Based Learning (PBL)**.
          </p>

          <div class="features-grid">
            <div class="feature-item">
              <i class="bi bi-database-fill-check"></i>
              <strong>Base de Conocimiento:</strong> Repositorio dinámico y reutilizable de activos (Video/Docs).
            </div>
            <div class="feature-item">
              <i class="bi bi-clock-history"></i>
              <strong>Just-in-Time Learning:</strong> Capacitación precisa en el momento que el flujo de trabajo lo
              exige.
            </div>
            <div class="feature-item">
              <i class="bi bi-arrow-repeat"></i>
              <strong>Estándar PDCA:</strong> Ciclo continuo de Planificación, Ejecución, Verificación y Mejora.
            </div>
          </div>

          <div class="product-cta">
            <button class="btn-primary">Solicitar Auditoría de Brechas</button>
            <button class="btn-secondary">Ver Metodología</button>
          </div>
        </div>
      </article>
      <article class="card companion-card"> <!-- article 3 -->
        <div class="companion-header">
          <div class="badge-premium">PREMIUM SERVICE</div>
          <h1 class="product-badge">eCommerce Complete Companion</h1>
          <p class="subtitle">Arquitectura Integral: Diseño, Logística y Tráfico</p>
        </div>

        <img src="img/cen3.jpg" alt="cen3png Ecosistema de Aprendizaje" class="post-img">

        <div class="features-grid">
          <div class="feature-item">
            <i class="bi bi-magic"></i>
            <strong>Customer Journey Design:</strong> Mapeo de puntos de contacto para eliminar la fricción y maximizar
            la tasa de conversión (CR).
          </div>
          <div class="feature-item">
            <i class="bi bi-cpu"></i>
            <strong>Lean Logistics Engineering:</strong> Optimización de la cadena de suministro y procesos de
            fulfillment para reducir el costo operativo.
          </div>
          <div class="feature-item">
            <i class="bi bi-megaphone"></i>
            <strong>Qualified Traffic Strategy:</strong> Marketing de precisión enfocado en atraer leads con alta
            intención de compra (ROAS optimizado).
          </div>
        </div>

        <div class="companion-footer">
          <button class="btn-primary main-cta">Iniciar Transformación Digital</button>
          <span class="consultancy-note">*Incluye Auditoría de Madurez Digital sin costo.</span>
        </div>
      </article>
      <article class="card cost-eng-card"> <!-- article 4 -->
        <div class="cost-header-main">
          <div class="status-tag">METODOLOGÍA AVANZADA</div>
          <h2>Cost Engineering Service</h2>
          <p class="tagline">Precisión en la arquitectura financiera y toma de decisiones.</p>
        </div>

        <img src="img/cen4.png" alt="cen4png Cost Engineering Service" class="post-img">
        <div class="cost-analysis-grid">
          <div class="analysis-item">
            <div class="analysis-icon"><i class="bi bi-calculator-fill"></i></div>
            <div class="analysis-text">
              <strong>Análisis Metodológico</strong>
              <span>Descomposición granular de costos fijos y variables para una visibilidad total.</span>
            </div>
          </div>
          <div class="analysis-item">
            <div class="analysis-icon"><i class="bi bi-pie-chart-fill"></i></div>
            <div class="analysis-text">
              <strong>Asignación Justa de Recursos</strong>
              <span>Modelos de atribución precisos que eliminan el desperdicio operativo.</span>
            </div>
          </div>
          <div class="analysis-item">
            <div class="analysis-icon"><i class="bi bi-incognito"></i></div>
            <div class="analysis-text">
              <strong>Meticulous Decision Making</strong>
              <span>Inteligencia de datos para proyecciones de rentabilidad y margen neto.</span>
            </div>
          </div>
        </div>



        <div class="cost-footer">
          <div class="impact-metric">
            <strong>+25%</strong>
            <span>Optimización de Margen</span>
          </div>
          <button class="btn-primary btn-cost">Solicitar Análisis de Estructura</button>
        </div>
      </article>
      <article class="card market-research-card"> <!-- article 5 -->
        <div class="card-header-research">
          <div class="header-meta">
            <i class="bi bi-globe-americas"></i>
            <span>Intelligence & Analytics</span>
          </div>
          <h2>Strategic Market Investigation</h2>
          <p class="description-text">
            Metodologías de muestreo experto y software estadístico para decisiones de inversión sin distorsiones.
          </p>
        </div>

        <div class="image-container">
          <img src="img/cen5.png" alt="cen5pngStrategic Market Investigation" class="post-img">
        </div>

        <div class="research-features">
          <div class="feature">
            <i class="bi bi-diagram-2-fill"></i>
            <div>
              <strong>Sampling Techniques:</strong>
              <span>Reducción de sesgos mediante marcos muestrales probabilísticos de alta precisión.</span>
            </div>
          </div>
          <div class="feature">
            <i class="bi bi-cpu-fill"></i>
            <div>
              <strong>Analytical Software:</strong>
              <span>Procesamiento de datos con herramientas estadísticas de vanguardia para detectar patrones
                ocultos.</span>
            </div>
          </div>
          <div class="feature">
            <i class="bi bi-bar-chart-steps"></i>
            <div>
              <strong>Powerful Graphics:</strong>
              <span>Visualización de datos compleja transformada en insights ejecutivos accionables.</span>
            </div>
          </div>
        </div>

        <div class="research-footer">
          <button class="btn-primary-alt">Agendar Consultoría de Mercado</button>
        </div>
      </article>
      <article class="card chart-card"> <!-- article 2 -->
        <div class="card-header-chart">
          <i class="bi bi-bar-chart-line-fill"></i>
          <span>Análisis de Rendimiento: Proyección de Cierre de Brecha</span>
        </div>

        <div class="chart-container">
          <div class="chart-description">
            <p>Impacto del Ciclo PDCA en la eficiencia operativa (Q1 - Q3)</p>
          </div>

          <div class="bar-chart">
            <div class="chart-column">
              <div class="bar-wrapper">
                <div class="bar gap-bar" style="height: 65%;"><span>65% Gap</span></div>
                <div class="bar skill-bar" style="height: 35%;"></div>
              </div>
              <span class="bar-label">Q1 (Inicio)</span>
            </div>

            <div class="chart-column">
              <div class="bar-wrapper">
                <div class="bar gap-bar" style="height: 30%;"><span>30% Gap</span></div>
                <div class="bar skill-bar" style="height: 70%;"></div>
              </div>
              <span class="bar-label">Q2 (PBL)</span>
            </div>

            <div class="chart-column">
              <div class="bar-wrapper">
                <div class="bar gap-bar" style="height: 10%;"><span>10% Gap</span></div>
                <div class="bar skill-bar" style="height: 90%;"></div>
              </div>
              <span class="bar-label">Q3 (Standard)</span>
            </div>
          </div>

          <div class="chart-legend">
            <span class="legend-item"><span class="dot gap-dot"></span> Brecha de Habilidades</span>
            <span class="legend-item"><span class="dot skill-dot"></span> Competencia Adquirida</span>
          </div>
        </div>
      </article>
      <!-- <div class="card">
        <img src="https://placehold.co/540x400/73D3FF/FFFFFF/png" alt="News" />
        <h3>Post 3</h3>
        <p>CSS will make this look beautiful soon.</p>
      </div> -->
    </section>

    <aside class="right-col"> <!-- Columna derecha -->
      <div class="card tech-card">
        <div class="card-header-tech">
          <i class="bi bi-cpu-fill"></i>
          <h4>TechStack: Knowledge Base</h4>
        </div>
        <div class="card-body-tech">
          <p class="tech-tagline">Optimización de Activos Intelectuales</p>

          <ul class="tech-list">
            <li>
              <i class="bi bi-diagram-3"></i>
              <div>
                <strong>Arquitectura SSoT:</strong>
                <span>Eliminación de silos informativos y redundancia de datos.</span>
              </div>
            </li>
            <li>
              <i class="bi bi-lightning-charge"></i>
              <div>
                <strong>RAG-Ready Engine:</strong>
                <span>Estructura optimizada para integración con Agentes de IA.</span>
              </div>
            </li>
            <li>
              <i class="bi bi-shield-lock"></i>
              <div>
                <strong>Gobernanza de Datos:</strong>
                <span>Control de versiones y trazabilidad de cambios (Git-style).</span>
              </div>
            </li>
          </ul>

          <button class="btn-outline-tech">
            Ver Documentación Técnica <i class="bi bi-arrow-right"></i>
          </button>
        </div>
      </div>

      <div class="card strategy-card">
        <div class="card-header-strategy">
          <i class="bi bi-search"></i>
          <h4>Audit & Investigation</h4>
        </div>
        <div class="card-body-compact">
          <p class="strategy-title">Skill Gap Dashboard</p>

          <div class="strategy-step">
            <span class="step-icon"><i class="bi bi-graph-up-arrow"></i></span>
            <div class="step-text">
              <strong>Análisis Competitivo:</strong>
              Benchmark contra líderes del sector para definir metas.
            </div>
          </div>

          <div class="strategy-step">
            <span class="step-icon"><i class="bi bi-person-check"></i></span>
            <div class="step-text">
              <strong>Inventario de Skills:</strong>
              Mapeo de habilidades actuales vs. requeridas.
            </div>
          </div>

          <div class="strategy-step">
            <span class="step-icon"><i class="bi bi-shield-check"></i></span>
            <div class="step-text">
              <strong>Garantía de Aprendizaje:</strong>
              Protocolos de validación de eficacia post-entrenamiento.
            </div>
          </div>

          <button class="btn-strategy-cta">Solicitar Auditoría</button>
        </div>
      </div>


      <!-- <div class="card">
        <h3>Fixed Ad 2</h3>
        <p>Always visible below Ad 1.</p>
      </div> -->
    </aside>
  </main>

  <footer>
    <div class="footer-content">
      <p>©<span id="current-year"></span> Caadconsulting - Todos los derechos reservados.</p>
      <p>EduAgencia.com</p>
    </div>
  </footer>
  <script>
    // This finds the span by its ID and inserts the current year
    document.getElementById("current-year").textContent = new Date().getFullYear();
  </script>
</body>

</html>