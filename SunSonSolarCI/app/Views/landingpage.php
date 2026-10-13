<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sun Son Solar | Clean Energy Solutions</title>
    <meta
      name="description"
      content="Sun Son Solar provides premium solar panels, storage, and full-service installation for homes and businesses."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,500;9..144,600&display=swap" rel="stylesheet" />
    <style>
      :root {
        --primary: #f5a623;
        --primary-dark: #d88d0d;
        --secondary: #102a43;
        --secondary-soft: #244a73;
        --dark: #0d1724;
        --text: #1c2733;
        --muted: #576574;
        --light: #f7f9fc;
        --white: #ffffff;
        --border: rgba(16, 42, 67, 0.12);
        --success: #1a9b68;
      }

      * {
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        margin: 0;
        font-family: "DM Sans", "Segoe UI", sans-serif;
        background: linear-gradient(180deg, #f4f8fb 0%, #edf7f2 100%);
        color: var(--text);
        line-height: 1.6;
      }

      img {
        max-width: 100%;
        display: block;
      }

      a {
        text-decoration: none;
        color: inherit;
      }

      .container {
        width: min(1180px, calc(100% - 32px));
        margin: 0 auto;
      }

      .topbar {
        background: var(--white);
        color: var(--text);
        border-bottom: 1px solid rgba(16, 42, 67, 0.1);
        position: sticky;
        top: 0;
        z-index: 50;
        box-shadow: 0 2px 12px rgba(15, 22, 33, 0.04);
      }

      .nav {
        display: flex;
        align-items: center;
        gap: 22px;
        min-height: 80px;
      }

      .brand {
        display: flex;
        flex: 0 0 auto;
        align-items: center;
        gap: 12px;
        font-weight: 800;
        letter-spacing: 0.04em;
      }

      .brand-mark {
        width: 38px;
        height: 38px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        background: var(--primary);
        color: var(--dark);
        font-size: 1.3rem;
      }

      .nav-links {
        display: flex;
        flex: 0 0 auto;
        align-items: center;
        gap: 20px;
        color: var(--text);
        font-size: 0.96rem;
        font-weight: 650;
      }

      .nav-links a:hover {
        color: var(--primary-dark);
      }

      .nav-search {
        position: relative;
        display: flex;
        min-width: 150px;
        flex: 1 1 auto;
        align-items: center;
      }

      .nav-search svg {
        position: absolute;
        left: 16px;
        width: 18px;
        height: 18px;
        color: #626a70;
        pointer-events: none;
      }

      .nav-search input {
        width: 100%;
        height: 48px;
        border: 0;
        border-radius: 16px;
        padding: 0 18px 0 44px;
        outline: 2px solid transparent;
        color: var(--text);
        background: #efefec;
        font: inherit;
        transition: background 0.2s ease, outline-color 0.2s ease;
      }

      .nav-search input:hover {
        background: #e9e9e6;
      }

      .nav-search input:focus {
        background: var(--white);
        outline-color: var(--primary-dark);
      }

      .nav-actions {
        display: flex;
        flex: 0 0 auto;
        align-items: center;
        gap: 8px;
      }

      .nav-button {
        display: inline-flex;
        min-height: 48px;
        align-items: center;
        justify-content: center;
        border: 0;
        font: inherit;
        font-weight: 700;
        padding: 0 18px;
        border-radius: 999px;
        transition: background 0.2s ease, color 0.2s ease, outline-color 0.2s ease;
      }

      .nav-login {
        color: var(--dark);
        background: var(--primary);
      }

      .nav-login:hover {
        background: var(--primary-dark);
      }

      .nav-signup {
        border: 1px solid #d3d6d8;
        color: var(--text);
        background: #efefec;
      }

      .nav-signup:hover {
        background: #e2e3e1;
      }

      .nav-logout {
        color: var(--dark);
        background: var(--primary);
        cursor: pointer;
      }

      .nav-logout:hover {
        background: var(--primary-dark);
      }

      .nav-actions [hidden] {
        display: none;
      }

      .nav-links [hidden] {
        display: none;
      }

      .nav-button:focus-visible,
      .nav-links a:focus-visible,
      .brand:focus-visible {
        outline: 3px solid var(--primary-dark);
        outline-offset: 3px;
      }

      .hero {
        position: relative;
        overflow: hidden;
        background:
          linear-gradient(120deg, rgba(7, 18, 29, 0.82), rgba(10, 42, 55, 0.6)),
          url("https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=2000&q=88") center/cover no-repeat;
      }

      .hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 20% 15%, rgba(245, 166, 35, 0.28), transparent 24%);
      }

      .hero-inner {
        position: relative;
        min-height: 560px;
        padding: 120px 0 90px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.12);
        color: #fef3d6;
        border: 1px solid rgba(255, 255, 255, 0.12);
        font-size: 0.82rem;
        letter-spacing: 0.06em;
        text-transform: uppercase;
      }

      h1 {
        margin: 22px 0 18px;
        font-size: clamp(2.7rem, 5vw, 5rem);
        line-height: 1.02;
        letter-spacing: 0;
        color: var(--white);
        font-family: "Fraunces", Georgia, serif;
      }

      .hero-copy {
        max-width: 760px;
      }

      .hero-copy p {
        margin: 0 auto 26px;
        font-size: 1.08rem;
        color: rgba(255, 255, 255, 0.8);
        max-width: 620px;
      }

      .button-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 16px;
      }

      .primary-btn,
      .secondary-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 52px;
        padding: 0 24px;
        border-radius: 999px;
        font-weight: 700;
        transition: 0.2s ease;
      }

      .primary-btn {
        background: var(--primary);
        color: var(--dark);
      }

      .primary-btn:hover {
        background: #ffbb44;
      }

      .secondary-btn {
        background: rgba(255, 255, 255, 0.08);
        color: var(--white);
        border: 1px solid rgba(255, 255, 255, 0.2);
      }

      .secondary-btn:hover {
        background: rgba(255, 255, 255, 0.14);
      }

      .section {
        padding: 96px 0;
      }

      .section-header {
        max-width: 680px;
        margin: 0 auto 42px;
        text-align: center;
      }

      .section-header h2 {
        margin: 0 0 12px;
        font-size: clamp(2rem, 4vw, 3rem);
        color: var(--secondary);
        letter-spacing: 0;
        line-height: 1.12;
        font-family: "Fraunces", Georgia, serif;
      }

      .section-header p {
        margin: 0;
        color: var(--muted);
        font-size: 1.04rem;
      }

      .benefit-strip {
        background: var(--white);
        border-bottom: 1px solid var(--border);
      }

      .benefit-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
      }

      .benefit-item {
        display: flex;
        align-items: center;
        gap: 14px;
        min-height: 112px;
        padding: 20px 28px;
        border-right: 1px solid var(--border);
      }

      .benefit-item:last-child { border-right: 0; }

      .benefit-icon {
        width: 42px;
        height: 42px;
        flex: 0 0 42px;
        display: grid;
        place-items: center;
        border-radius: 12px;
        background: rgba(245, 166, 35, 0.18);
        color: #8b5700;
        font-size: 1.25rem;
        font-weight: 700;
      }

      .benefit-item strong {
        display: block;
        color: var(--secondary);
        font-size: 0.98rem;
      }

      .benefit-item span:last-child {
        display: block;
        color: var(--muted);
        font-size: 0.88rem;
        line-height: 1.4;
      }

      .product-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 22px;
      }

      .product-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 12px 12px 18px;
        box-shadow: 0 10px 24px rgba(15, 22, 33, 0.04);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 28px rgba(15, 22, 33, 0.08);
      }

      .product-photo {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 8px;
        display: block;
        margin-bottom: 18px;
      }

      .product-card h3 {
        margin: 0 0 8px;
        color: var(--secondary);
        font-size: 1.24rem;
      }

      .product-card h3,
      .feature-item h3,
      .story-card h3,
      .faq-list summary,
      .contact-box h3,
      .cta-band h3 {
        font-family: "Fraunces", Georgia, serif;
        letter-spacing: 0;
      }

      .product-card p {
        margin: 0;
        color: var(--muted);
        font-size: 0.96rem;
      }

      .features {
        background: linear-gradient(180deg, rgba(13, 23, 36, 0.98), rgba(16, 42, 67, 0.96));
        color: var(--white);
      }

      .feature-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(240px, 1fr));
        gap: 24px;
      }

      .feature-item {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        padding: 28px 22px;
      }

      .feature-item .icon-badge {
        background: rgba(245, 166, 35, 0.15);
        color: #ffd77a;
      }

      .feature-item h3 {
        margin: 0 0 10px;
        font-size: 1.35rem;
      }

      .feature-item p {
        margin: 0;
        color: rgba(255, 255, 255, 0.76);
      }

      .cta-band {
        background: linear-gradient(135deg, var(--primary), #ffd371);
        border-radius: 12px;
        padding: 32px 34px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
        box-shadow: 0 25px 50px rgba(245, 166, 35, 0.2);
      }

      .cta-band h3 {
        margin: 0 0 8px;
        color: var(--dark);
        font-size: clamp(1.6rem, 2vw, 2.3rem);
        line-height: 1.12;
      }

      .cta-band p {
        margin: 0;
        color: rgba(13, 23, 36, 0.75);
        font-size: 1rem;
      }

      .contact {
        padding: 80px 0 100px;
      }

      .contact-wrap {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 26px;
        align-items: center;
      }

      .contact-box {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 30px;
      }

      .contact-box h3 {
        margin: 0 0 18px;
        color: var(--secondary);
        font-size: 2rem;
        line-height: 1.15;
      }

      .contact-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        gap: 14px;
      }

      .contact-list li {
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--muted);
        font-size: 1rem;
      }

      .contact-list .dot {
        width: 10px;
        height: 10px;
        background: var(--primary);
        border-radius: 50%;
      }

      .contact-card {
        background: linear-gradient(180deg, #11314f, #1f4668);
        color: var(--white);
        border-radius: 12px;
        padding: 30px 26px;
        box-shadow: 0 24px 45px rgba(17, 49, 79, 0.22);
      }

      .contact-card h4 {
        margin: 0 0 16px;
        font-size: 1.5rem;
      }

      .contact-card p {
        margin: 0 0 18px;
        color: rgba(255, 255, 255, 0.8);
      }

      .contact-card a {
        display: inline-block;
        margin-top: 8px;
        color: #ffd77a;
        font-weight: 700;
      }

      .stories {
        background: rgba(255, 255, 255, 0.68);
      }

      .story-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
      }

      .story-card {
        padding: 24px;
        background: var(--white);
        border: 1px solid var(--border);
        border-top: 3px solid var(--primary);
        border-radius: 10px;
      }

      .story-label {
        display: inline-block;
        margin-bottom: 12px;
        color: #8b5700;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
      }

      .story-card blockquote {
        margin: 0 0 18px;
        color: var(--secondary);
        font-size: 1.04rem;
        line-height: 1.55;
      }

      .story-card p {
        margin: 0;
        color: var(--muted);
        font-size: 0.9rem;
      }

      .faq-list {
        max-width: 820px;
        margin: 0 auto;
        border-top: 1px solid var(--border);
      }

      .faq-list details {
        border-bottom: 1px solid var(--border);
      }

      .faq-list summary {
        position: relative;
        padding: 20px 44px 20px 4px;
        color: var(--secondary);
        cursor: pointer;
        font-size: 1.12rem;
        font-weight: 600;
        list-style: none;
      }

      .faq-list summary::-webkit-details-marker { display: none; }

      .faq-list summary::after {
        content: "+";
        position: absolute;
        right: 6px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary-dark);
        font: 500 1.5rem/1 "DM Sans", sans-serif;
      }

      .faq-list details[open] summary::after { content: "−"; }

      .faq-list details p {
        max-width: 72ch;
        margin: -4px 0 20px 4px;
        color: var(--muted);
      }

      .faq-list summary:focus-visible,
      .faq-list a:focus-visible,
      footer a:focus-visible {
        outline: 3px solid var(--primary-dark);
        outline-offset: 3px;
      }

      footer {
        background: #091823;
        color: rgba(255, 255, 255, 0.72);
        padding: 48px 0 24px;
      }

      .footer-main {
        display: grid;
        grid-template-columns: 1.4fr 1fr 1fr;
        gap: 42px;
        padding-bottom: 34px;
      }

      .footer-brand strong,
      .footer-column h2 {
        display: block;
        margin: 0 0 12px;
        color: var(--white);
        font-size: 1rem;
      }

      .footer-brand p {
        max-width: 38ch;
        margin: 0;
        font-size: 0.92rem;
      }

      .footer-column h2 { font-family: inherit; }

      .footer-links {
        display: grid;
        justify-items: start;
        gap: 8px;
      }

      .footer-links a,
      .footer-legal a {
        color: rgba(255, 255, 255, 0.78);
        text-decoration: underline;
        text-decoration-color: rgba(255, 255, 255, 0.28);
        text-underline-offset: 3px;
      }

      .footer-links a:hover,
      .footer-legal a:hover { color: #ffd77a; }

      .footer-legal {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 12px 24px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.14);
        font-size: 0.84rem;
      }

      .footer-wrap {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
        font-size: 0.94rem;
      }

      @media (max-width: 980px) {
        .nav {
          gap: 8px;
        }

        .nav-links {
          gap: 8px;
        }

        .contact-wrap,
        .product-grid,
        .feature-grid,
        .story-grid {
          grid-template-columns: 1fr 1fr;
        }

        .benefit-item { padding: 18px 14px; }

        .hero-inner {
          min-height: 480px;
          padding-top: 90px;
        }

        .cta-band {
          flex-direction: column;
          align-items: flex-start;
        }
      }

      @media (max-width: 700px) {
        .nav {
          min-height: 0;
          flex-wrap: wrap;
          gap: 10px 14px;
          padding-top: 12px;
          padding-bottom: 12px;
        }

        .brand {
          margin-right: auto;
        }

        .nav-links {
          order: 3;
          width: 100%;
          justify-content: space-between;
          gap: 8px;
        }

        .nav-search {
          order: 2;
          min-width: 100%;
        }

        .nav-actions {
          order: 1;
        }

        .nav-button {
          min-height: 42px;
          padding: 0 14px;
        }

        .product-grid,
        .feature-grid,
        .story-grid,
        .contact-wrap,
        .benefit-grid,
        .footer-main {
          grid-template-columns: 1fr;
        }

        .benefit-item {
          min-height: 88px;
          border-right: 0;
          border-bottom: 1px solid var(--border);
        }

        .benefit-item:last-child { border-bottom: 0; }

        .hero {
          background-position: center;
        }

        .section {
          padding: 72px 0;
        }

        .footer-wrap {
          flex-direction: column;
          text-align: center;
        }

        .footer-main { gap: 26px; }

        .footer-legal { align-items: flex-start; flex-direction: column; }
      }
    </style>
  </head>
  <body>
    <header class="topbar">
      <div class="container nav">
        <a href="#home" class="brand" aria-label="Sun Son Solar home">
          <span class="brand-mark">☀</span>
          <span>Sun Son Solar</span>
        </a>

        <nav class="nav-links" aria-label="Main navigation">
          <a href="#solutions">Services</a>
          <a href="#about">About</a>
          <a href="#faqs">FAQs</a>
          <a href="#contact">Contact</a>
        </nav>

        <form class="nav-search" id="productSearch" role="search">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
            <circle cx="10.8" cy="10.8" r="6.8"></circle>
            <path d="m16 16 4.5 4.5"></path>
          </svg>
          <input id="searchInput" type="search" aria-label="Search solar products and services" placeholder="Search solar panels, batteries, installation..." autocomplete="off">
        </form>

        <div class="nav-actions">
          <a class="nav-button nav-login" id="navLogin" href="login.html">Customer login</a>
          <a class="nav-button nav-signup" id="navSignup" href="index.html">Sign up</a>
          <button class="nav-button nav-logout" id="navLogout" type="button" hidden>Log out</button>
        </div>
      </div>
    </header>

    <main id="home">
      <section class="hero">
        <div class="container hero-inner">
          <div class="hero-copy">
            <span class="eyebrow">Clean energy for every home</span>
            <h1>Power Your Future with Solar.</h1>
            <p>
              Sun Son Solar helps homes and businesses plan, install, and care for solar
              systems that can lower electricity costs, support a cleaner future, and
              give you more control over where your energy comes from.
            </p>

            <div class="button-row">
              <a href="mailto:info@sunsonsolar.com?subject=Free%20solar%20quote" class="primary-btn">Request a Free Quote</a>
              <a href="#solutions" class="secondary-btn">Explore Solutions</a>
            </div>

          </div>
        </div>
      </section>

      <section class="benefit-strip" aria-label="Solar benefits">
        <div class="container benefit-grid">
          <div class="benefit-item">
            <span class="benefit-icon" aria-hidden="true">↓</span>
            <div><strong>Manage energy costs</strong><span>Use solar generation to reduce reliance on grid electricity.</span></div>
          </div>
          <div class="benefit-item">
            <span class="benefit-icon" aria-hidden="true">✳</span>
            <div><strong>Choose cleaner power</strong><span>Support a more sustainable energy mix with renewable generation.</span></div>
          </div>
          <div class="benefit-item">
            <span class="benefit-icon" aria-hidden="true">↗</span>
            <div><strong>Build energy independence</strong><span>Add storage for more flexibility when the sun goes down.</span></div>
          </div>
        </div>
      </section>

      <section class="section" id="solutions">
        <div class="container">
          <div class="section-header">
            <h2>Solar services for every step</h2>
            <p>
              Get practical guidance from your first questions through installation and ongoing care.
            </p>
          </div>

          <p id="searchStatus" role="status" aria-live="polite" hidden></p>
          <div class="product-grid" id="productGrid">
            <article class="product-card">
              <img class="product-photo" src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=900&q=82" alt="Solar panels catching sunlight on a rooftop" loading="lazy" />
              <h3>Solar panels</h3>
              <p>Explore panel options and find a system sized around your property and energy needs.</p>
            </article>  

            <article class="product-card">
              <img class="product-photo" src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?auto=format&fit=crop&w=900&q=82" alt="Rows of solar panels in a renewable energy installation" loading="lazy" />
              <h3>Consultation</h3>
              <p>Talk through your energy use, goals, property, and questions with a solar specialist.</p>
            </article>

            <article class="product-card">
              <img class="product-photo" src="https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?auto=format&fit=crop&w=900&q=82" alt="Solar panels installed across a roof" loading="lazy" />
              <h3>System design</h3>
              <p>Plan a solar setup that reflects your site, energy needs, and available storage options.</p>
            </article>

            <article class="product-card">
              <img class="product-photo" src="https://images.unsplash.com/photo-1497440001374-f26997328c1b?auto=format&fit=crop&w=900&q=82" alt="Residential solar panel installation" loading="lazy" />
              <h3>Professional installation</h3>
              <p>Coordinate the equipment, installation, and project details with an experienced team.</p>
            </article>

            <article class="product-card">
              <img class="product-photo" src="https://images.unsplash.com/photo-1593941707882-a5bba14938c7?auto=format&fit=crop&w=900&q=82" alt="Modern home energy storage equipment" loading="lazy" />
              <h3>Battery storage</h3>
              <p>Consider storing solar energy for evening use or backup when your system supports it.</p>
            </article>

            <article class="product-card">
              <img class="product-photo" src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=900&q=82" alt="Solar panels ready for ongoing system care" loading="lazy" />
              <h3>Maintenance &amp; repair</h3>
              <p>Get help checking system performance and addressing service or repair needs.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section features" id="about">
        <div class="container">
          <div class="section-header">
            <h2 style="color: var(--white);">Why homeowners choose Sun Son Solar</h2>
            <p style="color: rgba(255, 255, 255, 0.7);">
              We combine premium products, technical expertise, and dependable support.
            </p>
          </div>

          <div class="feature-grid">
            <article class="feature-item">
              <h3>Cost savings</h3>
              <p>Solar can lower the amount of electricity you purchase from the grid. Your results depend on your usage, system, and local utility rates.</p>
            </article>

            <article class="feature-item">
              <h3>Sustainability</h3>
              <p>Generate electricity from sunlight and support a cleaner energy mix for your home or business.</p>
            </article>

            <article class="feature-item">
              <h3>Energy independence</h3>
              <p>Pair solar with battery storage for more control over when you use the energy your system produces.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section stories" id="stories">
        <div class="container">
          <div class="section-header">
            <h2>Customer stories</h2>
            <p>Clear guidance and dependable service make every solar project easier to navigate.</p>
          </div>
          <div class="story-grid">
            <article class="story-card">
              <span class="story-label">Sample customer story</span>
              <blockquote>“The consultation helped us understand how system size, storage, and our energy use fit together.”</blockquote>
              <p>Residential solar customer</p>
            </article>
            <article class="story-card">
              <span class="story-label">Sample customer story</span>
              <blockquote>“Having a clear plan from the first site review through installation made the whole process easier to follow.”</blockquote>
              <p>Homeowner</p>
            </article>
            <article class="story-card">
              <span class="story-label">Sample customer story</span>
              <blockquote>“We appreciated having practical answers about maintaining our system and what to do if we needed service.”</blockquote>
              <p>Solar customer</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section" id="faqs">
        <div class="container">
          <div class="section-header">
            <h2>Frequently asked questions</h2>
            <p>Start with the essentials, then talk with our team about your property.</p>
          </div>
          <div class="faq-list">
            <details>
              <summary>How do I get started with solar?</summary>
              <p>Request a free quote. We can discuss your property, current energy use, goals, and the next steps for a site assessment.</p>
            </details>
            <details>
              <summary>Can solar be paired with battery storage?</summary>
              <p>Yes. A battery may store some of the energy your panels produce for later use. The right setup depends on your energy needs and property.</p>
            </details>
            <details>
              <summary>Will solar eliminate my electricity bill?</summary>
              <p>Not necessarily. Savings depend on system size, energy use, weather, utility rates, and local program rules. A site-specific quote can help set expectations.</p>
            </details>
            <details>
              <summary>Do you offer maintenance and repairs?</summary>
              <p>Yes. Contact us to discuss system checks, maintenance, monitoring, or repair support for your solar equipment.</p>
            </details>
          </div>
        </div>
      </section>

      <section class="section contact" id="contact">
        <div class="container">
          <div class="cta-band">
            <div>
              <h3>Ready to explore solar?</h3>
              <p>Request a free quote and talk through the right next step for your property.</p>
            </div>
            <a href="mailto:info@sunsonsolar.com?subject=Free%20solar%20quote" class="primary-btn">Request a Free Quote</a>
          </div>

          <div class="contact-wrap" style="margin-top: 36px;">
            <div class="contact-box">
              <h3>Let’s build your energy future.</h3>
              <ul class="contact-list">
                <li><span class="dot"></span> Expert solar advice for residential and commercial projects</li>
                <li><span class="dot"></span> Premium equipment and professional installation</li>
                <li><span class="dot"></span> Ongoing maintenance, repair, and monitoring support</li>
              </ul>
            </div>

            <div class="contact-card">
              <h4>Contact Sun Son Solar</h4>
              <p>Call us for a free quote or ask us about your next solar project.</p>
              <a href="tel:+1234567890">(123) 456-7890</a><br />
              <a href="mailto:info@sunsonsolar.com">info@sunsonsolar.com</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="container">
        <div class="footer-main">
          <div class="footer-brand">
            <strong>Sun Son Solar</strong>
            <p>Solar guidance, installation, storage, and ongoing care for homes and businesses.</p>
          </div>
          <div class="footer-column">
            <h2>Contact</h2>
            <div class="footer-links">
              <a href="tel:+1234567890">(123) 456-7890</a>
              <a href="mailto:info@sunsonsolar.com">info@sunsonsolar.com</a>
              <a href="login.html">Customer login</a>
            </div>
          </div>
          <div class="footer-column">
            <h2>Explore</h2>
            <div class="footer-links">
              <a href="#solutions">Services</a>
              <a href="#about">Why solar</a>
              <a href="#stories">Customer stories</a>
              <a href="#faqs">FAQs</a>
            </div>
          </div>
        </div>
        <div class="footer-legal">
          <span>© <span id="year"></span> Sun Son Solar. All rights reserved.</span>
          <span>Privacy: Contact details are used to respond to your inquiry; this static page does not store quote requests.</span>
          <span>Terms: Quotes are preliminary and depend on a property assessment and written confirmation.</span>
          <span>Social: <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">Facebook</a> · <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">Instagram</a> · <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">LinkedIn</a></span>
        </div>
      </div>
    </footer>

    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
      const authSessionKey = "sunSonSolarLoggedIn";
      const loginLink = document.getElementById("navLogin");
      const signupLink = document.getElementById("navSignup");
      const logoutButton = document.getElementById("navLogout");
      const searchForm = document.getElementById("productSearch");
      const searchInput = document.getElementById("searchInput");
      const productCards = Array.from(document.querySelectorAll(".product-card"));
      const searchStatus = document.getElementById("searchStatus");

      function updateAuthNavigation() {
        const isLoggedIn = sessionStorage.getItem(authSessionKey) === "true";
        loginLink.hidden = isLoggedIn;
        signupLink.hidden = isLoggedIn;
        logoutButton.hidden = !isLoggedIn;
      }

      logoutButton.addEventListener("click", () => {
        sessionStorage.removeItem(authSessionKey);
        updateAuthNavigation();
      });

      updateAuthNavigation();

      function filterProducts() {
        const query = searchInput.value.trim().toLocaleLowerCase();
        let visibleCount = 0;

        productCards.forEach((card) => {
          const matches = card.textContent.toLocaleLowerCase().includes(query);
          card.hidden = !matches;
          if (matches) visibleCount += 1;
        });

        searchStatus.hidden = !query;
        if (query) {
          searchStatus.textContent = visibleCount
            ? `${visibleCount} ${visibleCount === 1 ? "result" : "results"} for “${searchInput.value.trim()}”`
            : `No solar products or services found for “${searchInput.value.trim()}”.`;
        }
      }

      searchInput.addEventListener("input", filterProducts);
      searchForm.addEventListener("submit", (event) => {
        event.preventDefault();
        document.getElementById("solutions").scrollIntoView({ behavior: "smooth" });
      });
    </script>
  </body>
</html>