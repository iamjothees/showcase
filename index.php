<?php
$projects = [
    [
        'name' => 'CLEAR',
        'dir' => 'fintech_finance',
        'tagline' => 'Banking for Builders',
        'industry' => 'Fintech',
        'tag' => 'Website',
        'color' => '#B8872A',
        'description' => 'Neo-banking platform with 4-tier rewards, editorial dashboard, and portfolio growth charts. Personal banking for entrepreneurs.',
    ],
    [
        'name' => 'AETHER',
        'dir' => 'fashion-brand',
        'tagline' => 'Experimental High-Streetwear',
        'industry' => 'Fashion',
        'tag' => 'Website',
        'color' => '#C8FF00',
        'description' => 'Avant-garde techwear brand with bento-grid categories, drop carousel, and manifesto sections.',
    ],
    [
        'name' => 'ROOTED',
        'dir' => 'agri_and_nursery',
        'tagline' => 'Farm Fresh & Sustainable',
        'industry' => 'Agriculture',
        'tag' => 'Website',
        'color' => '#E2725B',
        'description' => 'Seasonal harvest calendar, soil-to-table storytelling, and organic farm produce delivery platform.',
    ],
    [
        'name' => 'MediCare Plus',
        'dir' => 'medical-clinic',
        'tagline' => 'Your Health, Our Priority',
        'industry' => 'Healthcare',
        'tag' => 'Website',
        'color' => '#3B82F6',
        'description' => 'Multi-specialty clinic with appointment booking wizard, doctor profiles, and service grid.',
    ],
    [
        'name' => 'SkillMaster',
        'dir' => 'online-course',
        'tagline' => 'Master New Skills',
        'industry' => 'EdTech',
        'tag' => 'Website',
        'color' => '#7C3AED',
        'description' => 'Course platform with instructor spotlight, curriculum grid, and student progress tracking system.',
    ],
    [
        'name' => 'Wanderlust',
        'dir' => 'travel-agency',
        'tagline' => 'Discover Your Next Adventure',
        'industry' => 'Travel',
        'tag' => 'Website',
        'color' => '#0EA5E9',
        'description' => 'Travel agency with destination highlights, package gallery, and booking inquiry form.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>showcase.joecodes.in — Software Engineer Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --bg: #0A0A0A;
      --surface: #141418;
      --surface-hover: #1C1C21;
      --border: #2A2A2E;
      --border-hover: #3A3A42;
      --primary: #0066FF;
      --primary-glow: rgba(0, 102, 255, 0.3);
      --text: #FFFFFF;
      --text-muted: #888888;
      --text-dim: #555555;
      --accent: #0066FF;
      --mono: 'JetBrains Mono', monospace;
      --display: 'Space Grotesk', sans-serif;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      background: var(--bg);
      color: var(--text);
      font-family: var(--display);
      line-height: 1.6;
      overflow-x: hidden;
      min-height: 100vh;
    }

    ::selection {
      background: var(--primary);
      color: white;
    }

    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-track {
      background: var(--bg);
    }
    ::-webkit-scrollbar-thumb {
      background: var(--border);
      border-radius: 3px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: var(--text-dim);
    }

    /* ─── BACKGROUND GRID ─── */
    .bg-grid {
      position: fixed;
      inset: 0;
      background-image:
        linear-gradient(var(--border) 1px, transparent 1px),
        linear-gradient(90deg, var(--border) 1px, transparent 1px);
      background-size: 48px 48px;
      opacity: 0.3;
      pointer-events: none;
      z-index: 0;
    }

    .bg-grid::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at center, transparent 0%, var(--bg) 70%);
    }

    /* ─── PAGE WRAPPER ─── */
    .page {
      position: relative;
      z-index: 1;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
    }

    
    /* ─── HEADER ─── */
    .header {
      padding: 4rem 0 3rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid var(--border);
      margin-bottom: 4rem;
    }

    .header-left {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .header-avatar {
      width: 48px;
      height: 48px;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--mono);
      font-size: 0.8rem;
      font-weight: 500;
      color: var(--primary);
    }

    .header-info h1 {
      font-size: 1.1rem;
      font-weight: 600;
      letter-spacing: -0.01em;
    }

    .header-info p {
      font-size: 0.75rem;
      color: var(--text-muted);
      font-family: var(--mono);
    }

    .header-links {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .header-links a {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid var(--border);
      border-radius: 10px;
      color: var(--text-muted);
      transition: all 0.2s;
      text-decoration: none;
    }

    .header-links a:hover {
      border-color: var(--primary);
      color: var(--primary);
      background: rgba(0, 102, 255, 0.1);
    }

    .header-links a svg {
      width: 18px;
      height: 18px;
    }

    /* ─── HERO ─── */
    .hero {
      padding: 4rem 0 5rem;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }

    .hero-text {
      position: relative;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: var(--surface);
      border: 1px solid var(--border);
      padding: 0.4rem 0.8rem;
      border-radius: 100px;
      font-size: 0.7rem;
      font-family: var(--mono);
      color: var(--text-muted);
      margin-bottom: 1.5rem;
    }

    .hero-badge::before {
      content: '';
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #4ADE80;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.4; }
    }

    .hero-title {
      font-size: clamp(2rem, 4.5vw, 3.5rem);
      font-weight: 700;
      letter-spacing: -0.04em;
      line-height: 1.08;
      margin-bottom: 1.5rem;
    }

    .hero-title .line {
      display: block;
    }

    .hero-title .accent {
      color: var(--primary);
    }

    .hero-sub {
      font-size: 0.95rem;
      color: var(--text-muted);
      line-height: 1.7;
      max-width: 420px;
      margin-bottom: 2rem;
    }

    .hero-actions {
      display: flex;
      gap: 1rem;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: var(--primary);
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      font-size: 0.85rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.2s;
      border: none;
      cursor: pointer;
    }

    .btn-primary:hover {
      background: #0052CC;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0, 102, 255, 0.3);
    }

    .btn-primary svg {
      width: 16px;
      height: 16px;
    }

    .btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: transparent;
      color: var(--text-muted);
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      font-size: 0.85rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.2s;
      border: 1px solid var(--border);
    }

    .btn-secondary:hover {
      border-color: var(--text-muted);
      color: var(--text);
    }

    .btn-secondary svg {
      width: 16px;
      height: 16px;
    }

    /* ─── JOURNEY PATH ─── */
    .hero-journey {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 2rem;
    }

    .journey-tag {
      font-family: var(--mono);
      font-size: 0.7rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--text-dim);
      padding: 0.35rem 0.75rem;
      border: 1px solid var(--border);
      border-radius: 4px;
      transition: all 0.2s;
    }

    .journey-tag.active {
      color: var(--primary);
      border-color: var(--primary);
      background: rgba(0, 102, 255, 0.08);
    }

    .journey-arrow {
      color: var(--text-dim);
      font-size: 0.8rem;
    }

    /* ─── TERMINAL ─── */
    .terminal {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 16px;
      overflow: hidden;
      font-family: var(--mono);
      font-size: 0.8rem;
    }

    .terminal-bar {
      background: var(--border);
      padding: 0.75rem 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .terminal-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
    }

    .terminal-dot:nth-child(1) { background: #FF5F57; }
    .terminal-dot:nth-child(2) { background: #FFBD2E; }
    .terminal-dot:nth-child(3) { background: #28CA42; }

    .terminal-title {
      margin-left: 0.5rem;
      color: var(--text-dim);
      font-size: 0.7rem;
    }

    .terminal-body {
      padding: 1.5rem;
      line-height: 1.8;
    }

    .terminal-line {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
    }

    .terminal-prompt {
      color: var(--primary);
      user-select: none;
    }

    .terminal-command {
      color: var(--text);
    }

    .terminal-output {
      color: var(--text-muted);
      padding-left: 1.75rem;
    }

    .terminal-output.success {
      color: #4ADE80;
    }

    .terminal-cursor {
      display: inline-block;
      width: 8px;
      height: 16px;
      background: var(--primary);
      animation: blink 1s step-end infinite;
      vertical-align: middle;
      margin-left: 2px;
    }

    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0; }
    }

    /* ─── SECTION HEADER ─── */
    .section-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 2rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid var(--border);
    }

    .section-title {
      font-size: 0.7rem;
      font-family: var(--mono);
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--text-muted);
    }

    .section-count {
      font-size: 0.7rem;
      font-family: var(--mono);
      color: var(--text-dim);
    }

    /* ─── FILTER BAR ─── */
    .filter-bar {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
      margin-bottom: 2rem;
    }

    .filter-btn {
      padding: 0.4rem 0.9rem;
      border: 1px solid var(--border);
      background: transparent;
      font-family: var(--mono);
      font-size: 0.65rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--text-muted);
      cursor: pointer;
      transition: all 0.2s;
      border-radius: 4px;
    }

    .filter-btn:hover {
      border-color: var(--primary);
      color: var(--primary);
    }

    .filter-btn.active {
      background: var(--primary);
      border-color: var(--primary);
      color: white;
    }

    /* ─── PROJECTS GRID ─── */
    .projects-section {
      padding: 2rem 0 6rem;
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1px;
      background: var(--border);
      border: 1px solid var(--border);
      border-radius: 16px;
      overflow: hidden;
      position: relative;
    }

    /* ─── PROJECT CARD ─── */
    .project-card {
      background: var(--surface);
      position: relative;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      text-decoration: none;
      color: var(--text);
      display: block;
      overflow: hidden;
      padding: 0;
      min-height: 380px;
    }

    .project-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      background: var(--card-color);
      transform: scaleY(0);
      transform-origin: top;
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      z-index: 10;
    }

    .project-card:hover {
      box-shadow: 0 0 40px rgba(0, 102, 255, 0.15);
    }

    .project-card:hover::before {
      transform: scaleY(1);
    }

    /* Preview iframe */
    .project-card-preview {
      position: absolute;
      inset: 0;
      opacity: 0;
      transition: opacity 0.4s;
      pointer-events: none;
    }

    .project-card-preview iframe {
      width: 100%;
      height: 100%;
      border: none;
      filter: brightness(0.6) saturate(0.8);
    }

    .project-card:hover .project-card-preview {
      opacity: 1;
    }

    /* Card content overlay */
    .project-card-body {
      position: relative;
      z-index: 5;
      padding: 2rem;
      background: linear-gradient(180deg, rgba(10,10,10,0.85) 0%, rgba(20,20,24,0.6) 60%, transparent 100%);
      min-height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }

    /* ─── CARD CONTENT ─── */
    .project-card-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1rem;
      gap: 0.5rem;
      position: relative;
    }

    .project-card-index {
      font-family: var(--mono);
      font-size: 0.65rem;
      color: rgba(255,255,255,0.4);
      letter-spacing: 0.1em;
    }

    .project-card-badge {
      position: absolute;
      top: 0;
      right: 40px;
      font-family: var(--mono);
      font-size: 0.55rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--primary);
      padding: 0.25rem 0.5rem;
      border: 1px solid var(--primary);
      border-radius: 4px;
      background: rgba(0, 102, 255, 0.15);
    }

    .project-card-arrow {
      width: 32px;
      height: 32px;
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: rgba(255,255,255,0.6);
      transition: all 0.3s;
      flex-shrink: 0;
      backdrop-filter: blur(8px);
      background: rgba(255,255,255,0.05);
    }

    .project-card:hover .project-card-arrow {
      background: var(--card-color);
      border-color: var(--card-color);
      color: var(--bg);
      transform: translate(3px, -3px);
      box-shadow: -4px 4px 12px rgba(0, 0, 0, 0.3);
    }

    .project-card-arrow svg {
      width: 14px;
      height: 14px;
    }

    .project-card-name {
      font-size: 1.5rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      margin-bottom: 0.25rem;
      transition: color 0.2s;
      text-shadow: 0 2px 12px rgba(0,0,0,0.5);
    }

    .project-card:hover .project-card-name {
      color: var(--card-color);
    }

    .project-card-tagline {
      font-size: 0.8rem;
      color: rgba(255,255,255,0.6);
      font-style: italic;
      margin-bottom: 0.75rem;
      text-shadow: 0 1px 8px rgba(0,0,0,0.5);
    }

    .project-card-industry {
      display: inline-block;
      font-family: var(--mono);
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.5);
      padding: 0.3rem 0.6rem;
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 4px;
      margin-bottom: 0.5rem;
      margin-right: 0.4rem;
      backdrop-filter: blur(8px);
      background: rgba(255,255,255,0.05);
    }

    .project-card-desc {
      font-size: 0.8rem;
      color: rgba(255,255,255,0.5);
      line-height: 1.7;
    }

    .project-card-footer {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-top: 1.5rem;
      padding-top: 1rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      font-size: 0.7rem;
      font-family: var(--mono);
      color: rgba(255,255,255,0.4);
      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    .project-card-footer svg {
      width: 14px;
      height: 14px;
      transition: transform 0.2s;
    }

    .project-card:hover .project-card-footer svg {
      transform: translateX(4px);
    }

    /* ─── FOOTER ─── */
    footer {
      border-top: 1px solid var(--border);
      padding: 3rem 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .footer-left {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .footer-logo {
      font-family: var(--mono);
      font-size: 0.8rem;
      font-weight: 500;
      color: var(--text);
      letter-spacing: 0.05em;
    }

    .footer-copy {
      font-size: 0.7rem;
      color: var(--text-dim);
    }

    .footer-copy strong {
      color: var(--primary);
    }

    .footer-copy a {
      color: var(--primary);
      text-decoration: none;
      transition: opacity 0.2s;
    }

    .footer-copy a:hover {
      opacity: 0.7;
    }

    .footer-links {
      display: flex;
      gap: 0.75rem;
    }

    .footer-links a {
      font-family: var(--mono);
      font-size: 0.7rem;
      color: var(--text-muted);
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      transition: color 0.2s;
    }

    .footer-links a:hover {
      color: var(--text);
    }

    /* ─── REVEAL ANIMATION ─── */
    .reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }

    .reveal-delay-1 { transition-delay: 0.08s; }
    .reveal-delay-2 { transition-delay: 0.16s; }
    .reveal-delay-3 { transition-delay: 0.24s; }
    .reveal-delay-4 { transition-delay: 0.32s; }
    .reveal-delay-5 { transition-delay: 0.40s; }
    .reveal-delay-6 { transition-delay: 0.48s; }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 900px) {
      .hero {
        grid-template-columns: 1fr;
        gap: 2rem;
      }

      .terminal {
        display: none;
      }

      .header-links {
        display: none;
      }

      .header {
        padding: 2rem 0 2rem;
      }
    }

    @media (max-width: 640px) {
      .projects-grid {
        grid-template-columns: 1fr;
        border-radius: 12px;
      }

      .hero-title {
        font-size: 2rem;
      }

      .hero-actions {
        flex-direction: column;
      }

      .btn-primary,
      .btn-secondary {
        width: 100%;
        justify-content: center;
      }

      footer {
        flex-direction: column;
        align-items: flex-start;
      }

      .footer-links {
        flex-wrap: wrap;
        gap: 1rem;
      }
    }
  </style>
</head>
<body>

  <!-- BACKGROUND GRID -->
  <div class="bg-grid"></div>

  <div class="page">

    <!-- HEADER -->
    <header class="header reveal">
      <div class="header-left">
        <div class="header-avatar">JC</div>
        <div class="header-info">
          <h1>Joe Codes</h1>
          <p>End-to-End Engineer · Enterprise Solutions · SaaS</p>
        </div>
      </div>
      <div class="header-links">
        <a href="https://github.com/iamjothees" target="_blank" rel="noopener" aria-label="GitHub">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
        </a>
        <a href="https://in.linkedin.com/in/iamjothees" target="_blank" rel="noopener" aria-label="LinkedIn">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
        </a>
        <a href="mailto:iamjothees@gmail.com" aria-label="Email">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </a>
      </div>
    </header>

    <!-- HERO -->
    <section class="hero">
      <div class="hero-text">
        <div class="hero-badge reveal">Available for projects</div>
        <h2 class="hero-title reveal reveal-delay-1">
          <span class="line">Websites → ERP → SaaS.</span>
        </h2>
        <p class="hero-sub reveal reveal-delay-2">
          End-to-End Engineer building complete technical solutions — from landing pages to enterprise systems, legacy migrations, and multi-tenant SaaS platforms.
        </p>
        <div class="hero-journey reveal reveal-delay-3">
          <span class="journey-tag">Website Dev</span>
          <span class="journey-arrow">→</span>
          <span class="journey-tag active">Custom ERP</span>
          <span class="journey-arrow">→</span>
          <span class="journey-tag">SaaS</span>
        </div>
        <div class="hero-actions reveal reveal-delay-4">
          <a href="#projects" class="btn-primary">
            View Projects
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="mailto:iamjothees@gmail.com" class="btn-secondary">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Get in Touch
          </a>
        </div>
      </div>

      <div class="terminal reveal reveal-delay-2">
        <div class="terminal-bar">
          <div class="terminal-dot"></div>
          <div class="terminal-dot"></div>
          <div class="terminal-dot"></div>
          <span class="terminal-title">~/joecodes/portfolio</span>
        </div>
        <div class="terminal-body">
          <div class="terminal-line">
            <span class="terminal-prompt">→</span>
            <span class="terminal-command">whoami</span>
          </div>
          <div class="terminal-output">joe — End-to-End Engineer</div>
          <br>
          <div class="terminal-line">
            <span class="terminal-prompt">→</span>
            <span class="terminal-command">ls services/</span>
          </div>
          <div class="terminal-output">Website Dev · Custom ERP · Legacy Migration<br>SaaS Development · API Integration</div>
          <br>
          <div class="terminal-line">
            <span class="terminal-prompt">→</span>
            <span class="terminal-command">cat tech-stack.json</span>
          </div>
          <div class="terminal-output">PHP/Laravel · JavaScript/React · Go<br>MySQL · Docker · PEST · Figma</div>
          <br>
          <div class="terminal-line">
            <span class="terminal-prompt">→</span>
            <span class="terminal-command">cat projects.json | length</span>
          </div>
          <div class="terminal-output success">6 projects delivered</div>
          <br>
          <div class="terminal-line">
            <span class="terminal-prompt">→</span>
            <span class="terminal-command">_</span>
            <span class="terminal-cursor"></span>
          </div>
        </div>
      </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section class="projects-section" id="projects">
      <div class="section-header reveal">
        <span class="section-title">Selected Work</span>
        <span class="section-count">6 projects</span>
      </div>

      <div class="filter-bar reveal reveal-delay-1">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="fintech">Fintech</button>
        <button class="filter-btn" data-filter="fashion">Fashion</button>
        <button class="filter-btn" data-filter="healthcare">Healthcare</button>
        <button class="filter-btn" data-filter="edtech">EdTech</button>
        <button class="filter-btn" data-filter="agriculture">Agriculture</button>
        <button class="filter-btn" data-filter="travel">Travel</button>
      </div>

      <div class="projects-grid">
        <?php
        $filterMap = [
          'Fintech' => 'fintech',
          'Fashion' => 'fashion',
          'Healthcare' => 'healthcare',
          'EdTech' => 'edtech',
          'Agriculture' => 'agriculture',
          'Travel' => 'travel',
        ];
        foreach ($projects as $i => $p):
          $filter = $filterMap[$p['industry']] ?? 'all';
          $previewUrl = 'landing-pages/' . $p['dir'] . '/index.html';
        ?>
        <a href="<?php echo $previewUrl; ?>"
           class="project-card reveal reveal-delay-<?php echo ($i % 2) + 1; ?>"
           data-filter="<?php echo $filter; ?>"
           target="_blank"
           style="--card-color: <?php echo $p['color']; ?>">
          <!-- Live preview iframe -->
          <div class="project-card-preview">
            <iframe src="<?php echo $previewUrl; ?>" loading="lazy" sandbox="allow-same-origin allow-scripts"></iframe>
          </div>
          <!-- Content overlay -->
          <div class="project-card-body">
            <div class="project-card-top">
              <span class="project-card-index">0<?php echo $i + 1; ?></span>
              <?php if (!empty($p['tag'])): ?>
              <span class="project-card-badge"><?php echo $p['tag']; ?></span>
              <?php endif; ?>
              <div class="project-card-arrow">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </div>
            </div>
            <h3 class="project-card-name"><?php echo $p['name']; ?></h3>
            <p class="project-card-tagline"><?php echo $p['tagline']; ?></p>
            <span class="project-card-industry"><?php echo $p['industry']; ?></span>
            <p class="project-card-desc"><?php echo $p['description']; ?></p>
            <div class="project-card-footer">
              <span>View Project</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="footer-left">
        <span class="footer-logo">jc.</span>
        <span class="footer-copy"><strong>Template by</strong> <a href="https://joecodes.in" target="_blank">joecodes.in</a></span>
      </div>
      <div class="footer-links">
        <a href="https://github.com/iamjothees" target="_blank">GitHub</a>
        <a href="https://in.linkedin.com/in/iamjothees" target="_blank">LinkedIn</a>
        <a href="mailto:iamjothees@gmail.com">Email</a>
      </div>
    </footer>

  </div>

  <script>
    /* ── Filter functionality ── */
    const filterBtns = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;

        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        cards.forEach((card, i) => {
          const cardFilter = card.dataset.filter;
          if (filter === 'all' || cardFilter === filter) {
            card.style.display = 'block';
            card.style.animationDelay = `${i * 0.05}s`;
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

    /* ── Scroll reveal ── */
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, { threshold: 0.05, rootMargin: '0px 0px -20px 0px' });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    /* Init elements already in view */
    window.addEventListener('load', () => {
      document.querySelectorAll('.reveal').forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight + 50) {
          el.classList.add('active');
        }
      });
    });
  </script>

</body>
</html>