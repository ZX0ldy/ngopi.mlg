<!doctype html>
<html lang="id" data-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NGOPI.MLG — Find Your Grind Spot</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Grotesk:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css"
    />
    <style>
      *,
      *::before,
      *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        max-width: 100%;
        overflow-x: hidden;
      }

      :root {
        --accent: #cdff47;
        --accent2: #ff3b5c;
        --accent3: #00e5ff;
        --fd: "Bebas Neue", sans-serif;
        --fb: "Space Grotesk", sans-serif;
        --fm: "DM Mono", monospace;
        --r: 16px;
        --rs: 8px;
        --tr: 0.25s cubic-bezier(0.4, 0, 0.2, 1);
      }

      [data-theme="dark"] {
        --bg: #0a0a0b;
        --bg2: #111114;
        --bg3: #1a1a1f;
        --bg4: #242429;
        --brd: #2a2a30;
        --tx: #f0f0f5;
        --tx2: #888896;
        --tx3: #555560;
        --cbg: #111114;
        --cbrd: #222228;
        --sh: rgba(0, 0, 0, 0.6);
        --accent: #cdff47;
        --accent2: #ff3b5c;
        --accent3: #00e5ff;
      }

      [data-theme="light"] {
        --bg: #faf9f6;
        --bg2: #f2f1ee;
        --bg3: #e8e6e1;
        --bg4: #ddd9d2;
        --brd: #c8c4bc;
        --tx: #18181a;
        --tx2: #4a4a52;
        --tx3: #8a8880;
        --cbg: #ffffff;
        --cbrd: #e0ddd6;
        --sh: rgba(0, 0, 0, 0.1);
        --accent: #6bbf00;
        --accent2: #e02040;
        --accent3: #007bb5;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        font-family: var(--fb);
        background: var(--bg);
        color: var(--tx);
        min-height: 100vh;
        overflow-x: hidden;
        transition:
          background var(--tr),
          color var(--tr);
      }

      ::-webkit-scrollbar {
        width: 5px;
      }

      ::-webkit-scrollbar-track {
        background: var(--bg);
      }

      ::-webkit-scrollbar-thumb {
        background: var(--accent);
        border-radius: 3px;
      }

      /* VERIFIED BADGE */
      /* verified badge — see below */

      /* NAV */
      nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 200;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 24px;
        height: 60px;
        background: var(--bg);
        border-bottom: 1px solid var(--brd);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
      }

      .nav-logo {
        font-family: var(--fd);
        font-size: 26px;
        letter-spacing: 2px;
        color: var(--tx);
        display: flex;
        align-items: center;
        gap: 6px;
        text-decoration: none;
        flex-shrink: 0;
      }

      .nav-logo span {
        color: var(--accent);
        animation: pulse 2s ease-in-out infinite;
      }

      .nav-logo em {
        font-family: var(--fd);
        font-style: normal;
        font-size: 13px;
        color: var(--tx3);
        letter-spacing: 3px;
        align-self: flex-end;
        padding-bottom: 2px;
      }

      /* NAV LINKS — CENTER */
      .nav-links {
        display: flex;
        align-items: center;
        gap: 4px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
      }

      .nav-link {
        font-family: var(--fm);
        font-size: 11px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: var(--tx2);
        text-decoration: none;
        padding: 7px 16px;
        border-radius: 8px;
        border: 1px solid transparent;
        transition: all var(--tr);
        position: relative;
      }

      .nav-link:hover {
        color: var(--tx);
        background: var(--bg3);
        border-color: var(--brd);
      }

      .nav-link.active {
        color: var(--accent);
        background: rgba(205, 255, 71, 0.08);
        border-color: rgba(205, 255, 71, 0.2);
      }

      .nav-link.active::after {
        content: "";
        position: absolute;
        bottom: -1px;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 2px;
        background: var(--accent);
        border-radius: 2px 2px 0 0;
      }

      /* NAV ACTIONS — RIGHT */
      .nav-actions {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-shrink: 0;
      }

      .nav-pill {
        font-family: var(--fm);
        font-size: 11px;
        background: var(--bg3);
        color: var(--tx2);
        border: 1px solid var(--brd);
        border-radius: 100px;
        padding: 6px 14px;
        cursor: pointer;
        transition: all var(--tr);
        letter-spacing: 0.5px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
      }

      .nav-pill:hover {
        background: var(--accent);
        color: #000;
        border-color: var(--accent);
        transform: translateY(-1px);
      }

      .nav-login-btn {
        font-family: var(--fm);
        font-size: 11px;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: var(--accent);
        color: #000;
        border: none;
        border-radius: 8px;
        padding: 8px 18px;
        cursor: pointer;
        transition: all var(--tr);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-weight: 600;
      }

      .nav-login-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(205, 255, 71, 0.3);
      }

      /* AVATAR DROPDOWN */
      .nav-avatar-wrap {
        position: relative;
      }

      .nav-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--bg3);
        border: 2px solid var(--brd);
        cursor: pointer;
        transition: all var(--tr);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        overflow: hidden;
        position: relative;
      }

      .nav-avatar:hover {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(205, 255, 71, 0.15);
      }

      .nav-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .nav-avatar-status {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 10px;
        height: 10px;
        background: #22c55e;
        border: 2px solid var(--bg);
        border-radius: 50%;
      }

      .nav-dropdown {
        position: absolute;
        top: calc(100% + 10px);
        right: 0;
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: 12px;
        padding: 8px;
        min-width: 200px;
        opacity: 0;
        pointer-events: none;
        transform: translateY(-6px) scale(0.97);
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 16px 48px var(--sh);
        z-index: 300;
      }

      .nav-dropdown.open {
        opacity: 1;
        pointer-events: all;
        transform: translateY(0) scale(1);
      }

      .nav-dropdown-header {
        padding: 10px 12px 12px;
        border-bottom: 1px solid var(--brd);
        margin-bottom: 6px;
      }

      .nav-dropdown-name {
        font-family: var(--fb);
        font-size: 13px;
        font-weight: 600;
        color: var(--tx);
      }

      .nav-dropdown-role {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--accent);
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-top: 2px;
      }

      .nav-dropdown-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 12px;
        border-radius: 8px;
        font-family: var(--fm);
        font-size: 11px;
        letter-spacing: 0.5px;
        color: var(--tx2);
        cursor: pointer;
        transition: all var(--tr);
        text-decoration: none;
      }

      .nav-dropdown-item:hover {
        background: var(--bg3);
        color: var(--tx);
      }

      .nav-dropdown-item.danger {
        color: var(--accent2);
      }

      .nav-dropdown-item.danger:hover {
        background: rgba(255, 59, 92, 0.1);
      }

      .nav-dropdown-divider {
        height: 1px;
        background: var(--brd);
        margin: 6px 0;
      }

      /* THEME TOGGLE */
      .theme-toggle {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--bg3);
        border: 1px solid var(--brd);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        transition: all var(--tr);
        flex-shrink: 0;
      }

      .theme-toggle:hover {
        background: var(--accent);
        border-color: var(--accent);
        transform: rotate(30deg);
      }

      /* BURGER MENU */
      .nav-burger {
        display: none;
        flex-direction: column;
        gap: 5px;
        width: 36px;
        height: 36px;
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: 8px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        transition: all var(--tr);
        flex-shrink: 0;
      }

      .nav-burger:hover {
        border-color: var(--accent);
      }

      .nav-burger span {
        display: block;
        width: 16px;
        height: 2px;
        background: var(--tx);
        border-radius: 2px;
        transition: all 0.3s ease;
      }

      .nav-burger.open span:nth-child(1) {
        transform: translateY(7px) rotate(45deg);
      }

      .nav-burger.open span:nth-child(2) {
        opacity: 0;
        transform: scaleX(0);
      }

      .nav-burger.open span:nth-child(3) {
        transform: translateY(-7px) rotate(-45deg);
      }

      /* MOBILE DRAWER */
      .nav-drawer {
        position: fixed;
        top: 60px;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 199;
        display: flex;
        flex-direction: column;
        background: var(--bg);
        border-top: 1px solid var(--brd);
        transform: translateX(100%);
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        overflow-y: auto;
      }

      .nav-drawer.open {
        transform: translateX(0);
      }

      .nav-drawer-inner {
        display: flex;
        flex-direction: column;
        gap: 4px;
        padding: 20px 16px;
      }

      /* USER SECTION IN DRAWER */
      .nav-drawer-user {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px;
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: 12px;
        margin-bottom: 8px;
      }

      .nav-drawer-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: var(--bg3);
        border: 2px solid var(--accent);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
        overflow: hidden;
      }

      .nav-drawer-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .nav-drawer-user-info .name {
        font-family: var(--fb);
        font-weight: 600;
        font-size: 14px;
        color: var(--tx);
      }

      .nav-drawer-user-info .role {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 1px;
        color: var(--accent);
        text-transform: uppercase;
        margin-top: 2px;
      }

      .nav-drawer-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px;
        border-radius: 10px;
        font-family: var(--fm);
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--tx2);
        text-decoration: none;
        cursor: pointer;
        transition: all var(--tr);
        border: 1px solid transparent;
      }

      .nav-drawer-link:hover,
      .nav-drawer-link.active {
        background: var(--bg2);
        border-color: var(--brd);
        color: var(--tx);
      }

      .nav-drawer-link.active {
        color: var(--accent);
        border-color: rgba(205, 255, 71, 0.2);
        background: rgba(205, 255, 71, 0.05);
      }

      .nav-drawer-link .icon {
        font-size: 18px;
        width: 24px;
        text-align: center;
        flex-shrink: 0;
      }

      .nav-drawer-divider {
        height: 1px;
        background: var(--brd);
        margin: 8px 0;
      }

      .nav-drawer-login {
        margin: 12px 0 8px;
        padding: 15px 16px;
        background: var(--accent);
        color: #000;
        border-radius: 10px;
        font-family: var(--fm);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        text-align: center;
        cursor: pointer;
        transition: all var(--tr);
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
      }

      .nav-drawer-login:hover {
        box-shadow: 0 8px 24px rgba(205, 255, 71, 0.35);
      }

      .nav-drawer-logout {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px;
        border-radius: 10px;
        font-family: var(--fm);
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--accent2);
        cursor: pointer;
        transition: all var(--tr);
        border: 1px solid transparent;
      }

      .nav-drawer-logout:hover {
        background: rgba(255, 59, 92, 0.08);
        border-color: rgba(255, 59, 92, 0.2);
      }

      /* OVERLAY when drawer open */
      .nav-overlay {
        display: none;
        position: fixed;
        inset: 0;
        top: 60px;
        background: rgba(0, 0, 0, 0.5);
        z-index: 198;
        backdrop-filter: blur(2px);
      }

      .nav-overlay.open {
        display: block;
      }

      @media (max-width: 768px) {
        .nav-links {
          display: none;
        }
        .nav-actions .nav-pill,
        .nav-actions .nav-login-btn,
        .nav-actions .nav-avatar-wrap {
          display: none;
        }
        .nav-burger {
          display: flex;
        }
      }

      /* HERO */
      .hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 100px 24px 60px;
        overflow: hidden;
      }

      .hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background:
          radial-gradient(
            ellipse 80% 60% at 50% 60%,
            rgba(205, 255, 71, 0.08) 0%,
            transparent 70%
          ),
          radial-gradient(
            ellipse 40% 40% at 80% 20%,
            rgba(0, 229, 255, 0.06) 0%,
            transparent 60%
          ),
          radial-gradient(
            ellipse 40% 40% at 20% 80%,
            rgba(255, 59, 92, 0.06) 0%,
            transparent 60%
          );
      }

      .hero-grid {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-image:
          linear-gradient(var(--brd) 1px, transparent 1px),
          linear-gradient(90deg, var(--brd) 1px, transparent 1px);
        background-size: 48px 48px;
        mask-image: radial-gradient(
          ellipse 80% 80% at 50% 50%,
          black 0%,
          transparent 100%
        );
        opacity: 0.4;
      }

      .hero-badge {
        font-family: var(--fm);
        font-size: 11px;
        letter-spacing: 3px;
        text-transform: uppercase;
        background: var(--bg3);
        border: 1px solid var(--brd);
        color: var(--tx2);
        border-radius: 100px;
        padding: 6px 16px;
        margin-bottom: 24px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        position: relative;
        z-index: 1;
        animation: slideDown 0.6s ease both;
      }

      .hero-badge::before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--accent);
        box-shadow: 0 0 8px var(--accent);
        animation: pulse 1.5s ease-in-out infinite;
      }

      .hero-title {
        font-family: var(--fd);
        font-size: clamp(72px, 14vw, 160px);
        line-height: 0.9;
        letter-spacing: -2px;
        position: relative;
        z-index: 1;
        animation: slideDown 0.6s 0.1s ease both;
      }

      .hero-title .l1 {
        display: block;
        color: var(--tx);
      }

      .hero-title .l2 {
        display: block;
        color: var(--accent);
        text-shadow: 0 0 40px rgba(205, 255, 71, 0.4);
      }

      .hero-title .l3 {
        display: block;
        width: 100%;
        height: 1em; /* Mengunci tinggi span seukuran font clamp() saat itu */
        position: relative;
        margin-top: -10px; /* Opsional: Sesuaikan jika jarak dengan baris atasnya terasa kejauhan */
      }

      .hero-title .l3 svg {
        width: 100%;
        height: 100%;
        overflow: visible; /* Mencegah outline terpotong di tepi */
      }

      .hero-title .l3 text {
        font-family: var(--fd); /* Memanggil font Bebas Neue */
        font-size: 1em; /* Rahasianya di sini! SVG otomatis pakai ukuran clamp(72px, 14vw, 160px) dari .hero-title */
        letter-spacing: 4px;
      }

      .hero-sub {
        font-size: 16px;
        color: var(--tx2);
        max-width: 480px;
        line-height: 1.6;
        margin: 24px auto 0;
        position: relative;
        z-index: 1;
        animation: slideDown 0.6s 0.2s ease both;
      }

      .hero-cta {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 40px;
        position: relative;
        z-index: 1;
        animation: slideDown 0.6s 0.3s ease both;
        flex-wrap: wrap;
        justify-content: center;
      }

      .btn-primary {
        font-family: var(--fd);
        font-size: 18px;
        letter-spacing: 2px;
        background: var(--accent);
        color: #000;
        border: none;
        border-radius: var(--rs);
        padding: 14px 32px;
        cursor: pointer;
        transition: all var(--tr);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
      }

      .btn-primary:hover {
        transform: translateY(-2px) scale(1.02);
        box-shadow: 0 8px 30px rgba(205, 255, 71, 0.35);
      }

      .btn-ghost {
        font-family: var(--fm);
        font-size: 13px;
        background: transparent;
        color: var(--tx2);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 14px 24px;
        cursor: pointer;
        transition: all var(--tr);
        text-decoration: none;
      }

      .btn-ghost:hover {
        border-color: var(--tx2);
        color: var(--tx);
      }

      .hero-stats {
        display: flex;
        gap: 48px;
        margin-top: 64px;
        position: relative;
        z-index: 1;
        animation: slideDown 0.6s 0.4s ease both;
      }

      .hero-stat-num {
        font-family: var(--fd);
        font-size: 42px;
        color: var(--accent);
        line-height: 1;
      }

      .hero-stat-label {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 2px;
        margin-top: 4px;
      }

      .hero-scroll {
        position: absolute;
        bottom: 32px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
        animation: bounce 2s ease-in-out infinite;
        font-size: 24px;
        color: var(--tx3);
      }

      /* MARQUEE */
      .marquee-wrap {
        background: var(--accent);
        color: #000;
        padding: 10px 0;
        overflow: hidden;
        white-space: nowrap;
      }

      .marquee-track {
        display: inline-flex;
        animation: marquee 20s linear infinite;
      }

      .marquee-item {
        font-family: var(--fd);
        font-size: 14px;
        letter-spacing: 2px;
        padding: 0 24px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
      }

      .marquee-item::after {
        content: "★";
        font-size: 10px;
      }

      /* MAIN */
      .main {
        max-width: 1280px;
        margin: 0 auto;
        padding: 60px 24px 100px;
      }

      /* CROWDSOURCE BANNER */
      .cs-banner {
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: var(--r);
        padding: 22px 28px;
        margin-bottom: 28px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
        position: relative;
        overflow: hidden;
      }

      .cs-banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(
          90deg,
          var(--accent),
          var(--accent3),
          var(--accent2)
        );
      }

      .cs-banner h3 {
        font-family: var(--fd);
        font-size: 26px;
        letter-spacing: 1px;
        margin-bottom: 4px;
      }

      .cs-banner p {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 1px;
      }

      /* FILTER — 2 ROWS */
      .filter-section {
        margin-bottom: 28px;
      }

      .filter-row-label {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 3px;
        color: var(--tx3);
        text-transform: uppercase;
        margin-bottom: 8px;
      }

      .filter-row {
        display: flex;
        flex-wrap: wrap;
        gap: 7px;
        margin-bottom: 10px;
      }

      .filter-chip {
        font-family: var(--fm);
        font-size: 11px;
        background: var(--bg3);
        color: var(--tx2);
        border: 1px solid var(--brd);
        border-radius: 100px;
        padding: 7px 14px;
        cursor: pointer;
        transition: all var(--tr);
        white-space: nowrap;
        display: flex;
        align-items: center;
        gap: 5px;
      }

      .filter-chip:hover {
        border-color: var(--accent);
        color: var(--accent);
        transform: translateY(-1px);
      }

      .filter-chip.active {
        background: var(--accent);
        color: #000;
        border-color: var(--accent);
        font-weight: 600;
      }

      /* TOOLBAR */
      .toolbar {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 24px;
        flex-wrap: wrap;
      }

      .search-box {
        flex: 1;
        min-width: 220px;
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 11px 16px;
        transition: border-color var(--tr);
      }

      .search-box:focus-within {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(205, 255, 71, 0.1);
      }

      .search-box input {
        flex: 1;
        background: transparent;
        border: none;
        outline: none;
        font-family: var(--fb);
        font-size: 14px;
        color: var(--tx);
      }

      .search-box input::placeholder {
        color: var(--tx3);
      }

      .view-toggle {
        display: flex;
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        overflow: hidden;
      }

      .view-btn {
        padding: 11px 15px;
        background: transparent;
        border: none;
        color: var(--tx3);
        cursor: pointer;
        font-size: 16px;
        transition: all var(--tr);
        display: flex;
        align-items: center;
        gap: 5px;
        font-family: var(--fm);
        font-size: 12px;
      }

      .view-btn.active {
        background: var(--accent);
        color: #000;
        font-weight: 600;
      }

      .sort-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 22px;
        padding-bottom: 14px;
        border-bottom: 1px solid var(--brd);
      }

      .sort-info {
        font-family: var(--fm);
        font-size: 12px;
        color: var(--tx3);
      }

      .sort-info span {
        color: var(--accent);
        font-weight: 600;
      }

      .sort-select {
        font-family: var(--fm);
        font-size: 12px;
        background: var(--bg3);
        color: var(--tx2);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 8px 12px;
        cursor: pointer;
        outline: none;
      }

      /* GRID CARDS */
      .cafe-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 20px;
      }

      .cafe-card {
        background: var(--cbg);
        border: 1px solid var(--cbrd);
        border-radius: var(--r);
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        animation: fadeUp 0.5s ease both;
      }

      .cafe-card:hover {
        border-color: var(--accent);
        transform: translateY(-4px);
        box-shadow:
          0 20px 60px var(--sh),
          0 0 0 1px var(--accent);
      }

      .cafe-card:hover .card-accent-line {
        transform: scaleX(1);
      }

      .cafe-card:hover .card-img img {
        filter: saturate(1) brightness(1);
        transform: scale(1.05);
      }

      .card-accent-line {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--accent), var(--accent3));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
      }

      .card-img {
        width: 100%;
        height: 180px;
        background: var(--bg3);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
      }

      .card-img img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: saturate(0) brightness(0.8);
        transition:
          filter 0.55s cubic-bezier(0.4, 0, 0.2, 1),
          transform 0.55s ease;
        z-index: 0;
      }

      .card-img-fallback {
        position: relative;
        z-index: 1;
        font-size: 52px;
        line-height: 1;
      }

      .card-img-overlay {
        position: absolute;
        inset: 0;
        z-index: 2;
        background: linear-gradient(
          to bottom,
          transparent 40%,
          rgba(0, 0, 0, 0.6) 100%
        );
      }

      .card-rank {
        position: absolute;
        top: 12px;
        left: 12px;
        z-index: 3;
        font-family: var(--fd);
        font-size: 13px;
        letter-spacing: 1px;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(8px);
        color: var(--accent);
        border: 1px solid rgba(205, 255, 71, 0.3);
        border-radius: 6px;
        padding: 4px 10px;
      }

      .card-status {
        display: none;
      }

      /* CLOSED OVERLAY */
      .card-closed-overlay {
        position: absolute;
        inset: 0;
        z-index: 4;
        background: rgba(0, 0, 0, 0.65);
        backdrop-filter: blur(2px);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 5px;
        border-radius: 0;
      }

      .card-closed-badge {
        font-family: var(--fd);
        font-size: 18px;
        letter-spacing: 2px;
        color: #fff;
        background: rgba(255, 59, 92, 0.85);
        border-radius: 7px;
        padding: 5px 14px;
        border: 1px solid rgba(255, 59, 92, 0.6);
      }

      .card-closed-time {
        font-family: var(--fm);
        font-size: 9px;
        letter-spacing: 1.5px;
        color: rgba(255, 255, 255, 0.6);
      }

      .card-body {
        padding: 18px;
      }

      .card-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 6px;
        gap: 12px;
      }

      .card-name {
        font-family: var(--fd);
        font-size: 22px;
        letter-spacing: 0.5px;
        color: var(--tx);
        line-height: 1.1;
      }

      .card-score {
        flex-shrink: 0;
        width: 52px;
        height: 52px;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-family: var(--fd);
        font-size: 24px;
        line-height: 1;
      }

      .card-score.score-high {
        background: rgba(205, 255, 71, 0.15);
        color: var(--accent);
        border: 1px solid rgba(205, 255, 71, 0.3);
      }

      .card-score.score-mid {
        background: rgba(0, 229, 255, 0.1);
        color: var(--accent3);
        border: 1px solid rgba(0, 229, 255, 0.2);
      }

      .card-score.score-low {
        background: rgba(255, 59, 92, 0.1);
        color: var(--accent2);
        border: 1px solid rgba(255, 59, 92, 0.2);
      }

      .card-score-label {
        font-family: var(--fm);
        font-size: 8px;
        letter-spacing: 1px;
        opacity: 0.7;
      }

      .card-location {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        gap: 5px;
      }

      .wifi-section {
        margin-bottom: 14px;
      }

      .wifi-label {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 2px;
        color: var(--tx3);
        text-transform: uppercase;
        margin-bottom: 8px;
      }

      .wifi-speed-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 7px;
      }

      .wifi-metric {
        background: var(--bg3);
        border-radius: var(--rs);
        padding: 9px;
        text-align: center;
      }

      .wifi-metric-val {
        font-family: var(--fd);
        font-size: 20px;
        color: var(--tx);
        line-height: 1;
      }

      .wifi-metric-unit {
        font-family: var(--fm);
        font-size: 9px;
        color: var(--tx3);
        letter-spacing: 1px;
      }

      .wifi-bar-wrap {
        margin-top: 9px;
        height: 4px;
        background: var(--bg4);
        border-radius: 2px;
        overflow: hidden;
      }

      .wifi-bar {
        height: 100%;
        border-radius: 2px;
        background: linear-gradient(90deg, var(--accent), var(--accent3));
        transition: width 1s ease;
      }

      .card-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        margin-bottom: 14px;
      }

      .tag {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 0.5px;
        border-radius: 100px;
        padding: 4px 10px;
        border: 1px solid var(--brd);
        color: var(--tx2);
        background: var(--bg3);
        display: flex;
        align-items: center;
        gap: 4px;
      }

      .tag.green {
        color: var(--accent);
        border-color: rgba(205, 255, 71, 0.3);
        background: rgba(205, 255, 71, 0.08);
      }

      .tag.cyan {
        color: var(--accent3);
        border-color: rgba(0, 229, 255, 0.3);
        background: rgba(0, 229, 255, 0.08);
      }

      .tag.red {
        color: var(--accent2);
        border-color: rgba(255, 59, 92, 0.3);
        background: rgba(255, 59, 92, 0.08);
      }

      .card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 14px;
        border-top: 1px solid var(--brd);
      }

      .price-range {
        font-family: var(--fd);
        font-size: 16px;
        letter-spacing: 1px;
        color: var(--tx2);
      }

      .price-range .ap {
        color: var(--accent);
      }

      .hours {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        display: flex;
        align-items: center;
        gap: 5px;
      }

      /* LIST VIEW */
      .cafe-grid.list-view {
        grid-template-columns: 1fr;
      }

      .cafe-grid.list-view .cafe-card {
        display: grid;
        grid-template-columns: 220px 1fr;
      }

      .cafe-grid.list-view .card-img {
        height: 100%;
        min-height: 160px;
      }

      .cafe-grid.list-view .card-body {
        padding: 20px 24px;
      }

      .cafe-grid.list-view .card-header {
        flex-direction: row;
        align-items: center;
      }

      .cafe-grid.list-view .card-name {
        font-size: 26px;
      }

      .cafe-grid.list-view .wifi-speed-row {
        grid-template-columns: repeat(3, auto);
        gap: 12px;
        justify-content: start;
      }

      .cafe-grid.list-view .wifi-metric {
        padding: 10px 14px;
        min-width: 70px;
      }

      .cafe-grid.list-view .wifi-metric-val {
        font-size: 24px;
      }

      .cafe-grid.list-view .card-score {
        width: 64px;
        height: 64px;
        font-size: 30px;
      }

      /* MAP VIEW */
      .map-view-container {
        display: none;
        border: 1px solid var(--brd);
        border-radius: var(--r);
        overflow: hidden;
        height: 560px;
        position: relative;
        margin-bottom: 20px;
        z-index: 1;
      }

      .map-view-container.active {
        display: block;
      }

      #leafletMap {
        width: 100%;
        height: 100%;
        z-index: 1;
      }

      .leaflet-popup-content-wrapper {
        background: var(--bg2) !important;
        border: 1px solid var(--brd) !important;
        border-radius: var(--rs) !important;
        box-shadow: 0 8px 24px var(--sh) !important;
        color: var(--tx) !important;
        font-family: var(--fb) !important;
      }

      .leaflet-popup-tip {
        background: var(--bg2) !important;
      }

      .leaflet-popup-close-button {
        color: var(--tx2) !important;
        font-size: 18px !important;
      }

      .leaflet-control-zoom a {
        background: var(--bg2) !important;
        color: var(--tx) !important;
        border-color: var(--brd) !important;
      }

      .leaflet-bar {
        border: 1px solid var(--brd) !important;
        box-shadow: none !important;
      }

      .leaflet-tile-pane {
        filter: saturate(0.7) brightness(0.92);
      }

      /* MAP CONTROLS */
      .map-controls {
        position: absolute;
        bottom: 24px;
        right: 16px;
        z-index: 500;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 8px;
        pointer-events: none;
      }
      .map-ctrl-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        background: var(--bg);
        color: var(--tx);
        border: 1px solid var(--brd);
        border-radius: 100px;
        font-family: var(--fm);
        font-size: 11px;
        letter-spacing: 0.5px;
        cursor: pointer;
        box-shadow: 0 4px 20px var(--sh);
        transition: all var(--tr);
        pointer-events: all;
        white-space: nowrap;
      }
      .map-ctrl-btn:hover {
        background: var(--accent);
        color: #000;
        border-color: var(--accent);
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(205, 255, 71, 0.3);
      }
      .map-ctrl-btn:hover svg {
        stroke: #000;
      }
      .map-ctrl-btn.loading {
        opacity: 0.7;
        pointer-events: none;
      }
      .map-ctrl-btn.found {
        background: var(--accent);
        color: #000;
        border-color: var(--accent);
      }
      .map-ctrl-btn.found svg {
        stroke: #000;
      }
      .map-loc-status {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 0.5px;
        color: var(--tx2);
        background: var(--bg);
        border: 1px solid var(--brd);
        border-radius: 100px;
        padding: 5px 12px;
        box-shadow: 0 2px 12px var(--sh);
        display: none;
        pointer-events: none;
      }
      .map-loc-status.show {
        display: block;
      }
      .map-loc-status.error {
        color: var(--accent2);
        border-color: var(--accent2);
      }
      .map-loc-status.success {
        color: var(--accent);
        border-color: rgba(205, 255, 71, 0.3);
      }
      /* USER LOCATION MARKER */
      .user-loc-marker {
        position: relative;
        width: 20px;
        height: 20px;
      }
      .user-loc-dot {
        position: absolute;
        inset: 0;
        background: #00e5ff;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
        z-index: 2;
      }
      .user-loc-ring {
        position: absolute;
        inset: -8px;
        border-radius: 50%;
        background: rgba(0, 229, 255, 0.2);
        border: 2px solid rgba(0, 229, 255, 0.4);
        animation: locPulse 2s ease-out infinite;
        z-index: 1;
      }
      .user-loc-ring2 {
        position: absolute;
        inset: -16px;
        border-radius: 50%;
        background: rgba(0, 229, 255, 0.06);
        border: 1.5px solid rgba(0, 229, 255, 0.2);
        animation: locPulse 2s ease-out 0.6s infinite;
        z-index: 0;
      }
      @keyframes locPulse {
        0% {
          transform: scale(0.7);
          opacity: 1;
        }
        100% {
          transform: scale(1.4);
          opacity: 0;
        }
      }

      /* SPEED LOG */
      .speedlog {
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: var(--r);
        padding: 24px 28px;
        margin-bottom: 32px;
      }

      .speedlog-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 16px;
      }

      .speedlog-title {
        font-family: var(--fd);
        font-size: 24px;
        letter-spacing: 1px;
      }

      .speedlog-sub {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        letter-spacing: 2px;
      }

      .speedlog-list {
        display: flex;
        flex-direction: column;
        gap: 8px;
      }

      .speedlog-item {
        display: flex;
        align-items: center;
        gap: 14px;
        background: var(--bg4);
        border-radius: var(--rs);
        padding: 12px 16px;
        border: 1px solid var(--brd);
      }

      .speedlog-rank {
        font-family: var(--fd);
        font-size: 20px;
        color: var(--tx3);
        width: 24px;
        flex-shrink: 0;
      }

      .speedlog-info {
        flex: 1;
        min-width: 0;
      }

      .speedlog-cafe {
        font-family: var(--fd);
        font-size: 16px;
        letter-spacing: 0.5px;
      }

      .speedlog-meta {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        letter-spacing: 1px;
        margin-top: 2px;
      }

      .speedlog-speeds {
        display: flex;
        gap: 8px;
        flex-shrink: 0;
      }

      .speedlog-metric {
        text-align: center;
        background: var(--bg3);
        border-radius: 6px;
        padding: 6px 10px;
      }

      .speedlog-val {
        font-family: var(--fd);
        font-size: 16px;
        line-height: 1;
      }

      .speedlog-unit {
        font-family: var(--fm);
        font-size: 9px;
        color: var(--tx3);
        letter-spacing: 1px;
      }

      /* SPEEDTEST FORM MODAL */
      .form-modal {
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: var(--r);
        width: 100%;
        max-width: 540px;
        max-height: 92vh;
        overflow-y: auto;
        transform: translateY(20px) scale(0.97);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .modal-overlay.active .form-modal {
        transform: translateY(0) scale(1);
      }

      .form-header {
        padding: 24px 28px 0;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 12px;
      }

      .form-title {
        font-family: var(--fd);
        font-size: 34px;
        letter-spacing: 1px;
        line-height: 1.1;
      }

      .form-subtitle {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 2px;
        margin-top: 4px;
      }

      .form-body {
        padding: 18px 28px 28px;
      }

      .form-group {
        margin-bottom: 18px;
      }

      .flbl {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 3px;
        color: var(--tx3);
        text-transform: uppercase;
        display: block;
        margin-bottom: 7px;
      }

      .finput,
      .fsel,
      .ftextarea {
        width: 100%;
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 11px 15px;
        color: var(--tx);
        font-family: var(--fb);
        font-size: 14px;
        outline: none;
        transition:
          border-color var(--tr),
          box-shadow var(--tr);
        -webkit-appearance: none;
      }

      .finput:focus,
      .fsel:focus,
      .ftextarea:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(205, 255, 71, 0.1);
      }

      .finput::placeholder,
      .ftextarea::placeholder {
        color: var(--tx3);
      }

      .ftextarea {
        resize: vertical;
        min-height: 70px;
        line-height: 1.5;
      }

      .range-val {
        font-family: var(--fd);
        font-size: 26px;
        color: var(--accent);
        text-align: center;
        display: block;
        margin-bottom: 7px;
      }

      .range-input {
        width: 100%;
        -webkit-appearance: none;
        appearance: none;
        height: 5px;
        border-radius: 3px;
        background: var(--bg4);
        outline: none;
        cursor: pointer;
      }

      .range-input::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: var(--accent);
        cursor: pointer;
        box-shadow: 0 0 6px rgba(205, 255, 71, 0.5);
        border: 2px solid var(--bg);
      }

      .form-radio-group {
        display: flex;
        gap: 10px;
      }

      .form-radio-opt {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        padding: 11px;
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        cursor: pointer;
        font-family: var(--fm);
        font-size: 12px;
        color: var(--tx2);
        transition: all var(--tr);
        user-select: none;
      }

      .form-radio-opt.sel-ramai {
        background: rgba(255, 59, 92, 0.12);
        border-color: var(--accent2);
        color: var(--accent2);
      }

      .form-radio-opt.sel-sepi {
        background: rgba(205, 255, 71, 0.1);
        border-color: var(--accent);
        color: var(--accent);
      }

      .form-img-upload {
        border: 2px dashed var(--brd);
        border-radius: var(--rs);
        padding: 24px;
        text-align: center;
        cursor: pointer;
        transition: all var(--tr);
        position: relative;
      }

      .form-img-upload:hover {
        border-color: var(--accent);
        background: rgba(205, 255, 71, 0.04);
      }

      .form-img-upload input {
        position: absolute;
        inset: 0;
        opacity: 0;
        cursor: pointer;
        width: 100%;
        height: 100%;
      }

      .f-upload-icon {
        font-size: 28px;
        margin-bottom: 7px;
      }

      .f-upload-text {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 1px;
      }

      .f-upload-text strong {
        color: var(--accent);
        display: block;
        margin-bottom: 3px;
        font-size: 12px;
      }

      .f-preview {
        margin-top: 9px;
        display: none;
      }

      .f-preview img {
        width: 100%;
        border-radius: var(--rs);
        max-height: 110px;
        object-fit: cover;
        filter: saturate(0.7);
      }

      .form-submit-btn {
        width: 100%;
        font-family: var(--fd);
        font-size: 20px;
        letter-spacing: 3px;
        background: var(--accent);
        color: #000;
        border: none;
        border-radius: var(--rs);
        padding: 15px;
        cursor: pointer;
        transition: all var(--tr);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 6px;
      }

      .form-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(205, 255, 71, 0.35);
      }

      .form-note {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        text-align: center;
        margin-top: 10px;
        letter-spacing: 1px;
      }

      /* VERIFIED BADGE */
      .card-verified {
        position: absolute;
        bottom: 10px;
        left: 10px;
        z-index: 5;
        display: flex;
        align-items: center;
        gap: 6px;
        cursor: default;
        padding: 5px 5px;
        border-radius: 100px;
        transition:
          padding 0.35s cubic-bezier(0.4, 0, 0.2, 1),
          background 0.25s ease,
          border-color 0.25s ease;
        border: 1px solid transparent;
      }

      .card-verified:hover {
        padding: 5px 12px 5px 5px;
        background: rgba(0, 0, 0, 0.85);
        backdrop-filter: blur(10px);
        border-color: rgba(205, 255, 71, 0.4);
        z-index: 6;
      }

      .card-verified-icon {
        width: 22px;
        height: 22px;
        background: var(--accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 700;
        color: #000;
        flex-shrink: 0;
        box-shadow:
          0 0 0 2px rgba(205, 255, 71, 0.3),
          0 2px 10px rgba(205, 255, 71, 0.4);
        transition:
          transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1),
          box-shadow 0.3s ease;
      }

      .card-verified:hover .card-verified-icon {
        transform: scale(1.1);
        box-shadow:
          0 0 0 3px rgba(205, 255, 71, 0.5),
          0 4px 16px rgba(205, 255, 71, 0.5);
      }

      .card-verified-tooltip {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--accent);
        letter-spacing: 0.5px;
        white-space: nowrap;
        max-width: 0;
        overflow: hidden;
        opacity: 0;
        transition:
          max-width 0.35s cubic-bezier(0.4, 0, 0.2, 1) 0.05s,
          opacity 0.25s ease 0.05s;
        line-height: 1;
      }

      .card-verified:hover .card-verified-tooltip {
        max-width: 200px;
        opacity: 1;
      }

      /* INLINE VERIFIED + VIDEO IN CARD BODY (for list-view mobile) */
      .card-verified-inline {
        display: none;
        font-family: var(--fm);
        font-size: 9px;
        font-weight: 700;
        background: rgba(205, 255, 71, 0.15);
        color: var(--accent);
        border: 1px solid rgba(205, 255, 71, 0.3);
        border-radius: 100px;
        padding: 2px 7px;
        flex-shrink: 0;
        line-height: 1.4;
      }

      .card-video-inline {
        display: none;
        font-family: var(--fm);
        font-size: 9px;
        font-weight: 700;
        background: rgba(255, 59, 92, 0.12);
        color: var(--accent2);
        border: 1px solid rgba(255, 59, 92, 0.3);
        border-radius: 100px;
        padding: 2px 7px;
        flex-shrink: 0;
        text-decoration: none;
        line-height: 1.4;
        align-items: center;
        gap: 3px;
      }

      /* VIDEO BUTTON ON CARD */
      .card-video-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        z-index: 3;
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 0.5px;
        background: rgba(255, 59, 92, 0.85);
        backdrop-filter: blur(6px);
        color: #fff;
        border: 1px solid rgba(255, 59, 92, 0.5);
        border-radius: 100px;
        padding: 5px 11px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: all var(--tr);
        text-decoration: none;
        font-weight: 600;
      }

      .card-video-btn:hover {
        background: var(--accent2);
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(255, 59, 92, 0.4);
      }

      .card-video-btn svg {
        width: 12px;
        height: 12px;
        fill: currentColor;
      }

      /* MAKANAN BERAT TAG */
      .tag.makanan {
        color: #ff9f47;
        border-color: rgba(255, 159, 71, 0.35);
        background: rgba(255, 159, 71, 0.1);
      }

      .tag.tag-more {
        color: var(--tx3);
        border-color: var(--brd);
        background: var(--bg4);
        cursor: default;
        font-weight: 600;
        letter-spacing: 0.5px;
      }

      .mcl-item:first-child

    /* TOAST */
    .toast-container {
        position: fixed;
        bottom: 24px;
        right: 24px;
        z-index: 300;
        display: flex;
        flex-direction: column;
        gap: 10px;
      }

      .toast {
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 13px 18px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: var(--fm);
        font-size: 13px;
        color: var(--tx);
        box-shadow: 0 8px 24px var(--sh);
        transform: translateX(120%);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        max-width: 300px;
      }

      .toast.show {
        transform: translateX(0);
      }

      /* FAB */
      .fab {
        position: fixed;
        bottom: 28px;
        right: 28px;
        z-index: 150;
        width: 52px;
        height: 52px;
        background: var(--accent);
        border: none;
        border-radius: 50%;
        font-size: 22px;
        cursor: pointer;
        box-shadow: 0 4px 20px rgba(205, 255, 71, 0.4);
        transition: all var(--tr);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .fab:hover {
        transform: scale(1.1) rotate(90deg);
        box-shadow: 0 8px 30px rgba(205, 255, 71, 0.6);
      }

      /* FOOTER */
      footer {
        background: var(--bg2);
        border-top: 1px solid var(--brd);
        padding: 44px 24px;
        text-align: center;
      }

      .footer-logo {
        font-family: var(--fd);
        font-size: 44px;
        letter-spacing: 3px;
        color: var(--tx);
        margin-bottom: 6px;
      }

      .footer-logo span {
        color: var(--accent);
      }

      .footer-sub {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 2px;
        margin-bottom: 28px;
      }

      .footer-links {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 24px;
        flex-wrap: wrap;
        margin-bottom: 28px;
      }

      .f-link {
        font-family: var(--fm);
        font-size: 12px;
        color: var(--tx3);
        text-decoration: none;
        letter-spacing: 1px;
        transition: color var(--tr);
      }

      .f-link:hover {
        color: var(--accent);
      }

      .footer-copy {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 1px;
      }

      /* EMPTY */
      .empty-state {
        text-align: center;
        padding: 80px 24px;
        color: var(--tx3);
        display: none;
      }

      .empty-state h3 {
        font-family: var(--fd);
        font-size: 36px;
        letter-spacing: 2px;
        margin-bottom: 8px;
      }

      .empty-state p {
        font-family: var(--fm);
        font-size: 12px;
        letter-spacing: 1px;
      }

      /* ANIMATIONS */
      @keyframes pulse {
        0%,
        100% {
          opacity: 1;
        }

        50% {
          opacity: 0.6;
        }
      }

      @keyframes bounce {
        0%,
        100% {
          transform: translateX(-50%) translateY(0);
        }

        50% {
          transform: translateX(-50%) translateY(-8px);
        }
      }

      @keyframes slideDown {
        from {
          opacity: 0;
          transform: translateY(-20px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes fadeUp {
        from {
          opacity: 0;
          transform: translateY(20px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes marquee {
        from {
          transform: translateX(0);
        }

        to {
          transform: translateX(-50%);
        }
      }

      .cafe-card:nth-child(1) {
        animation-delay: 0s;
      }

      .cafe-card:nth-child(2) {
        animation-delay: 0.05s;
      }

      .cafe-card:nth-child(3) {
        animation-delay: 0.1s;
      }

      .cafe-card:nth-child(4) {
        animation-delay: 0.15s;
      }

      .cafe-card:nth-child(5) {
        animation-delay: 0.2s;
      }

      .cafe-card:nth-child(6) {
        animation-delay: 0.25s;
      }

      /* ═══════════════════════════════════════
   RESPONSIVE — TABLET  ≤900px
═══════════════════════════════════════ */
      @media (max-width: 900px) {
        .cafe-grid {
          grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }

        .cafe-grid.list-view .cafe-card {
          grid-template-columns: 160px 1fr;
        }

        .speedlog {
          padding: 18px 20px;
        }
      }

      /* ═══════════════════════════════════════
   RESPONSIVE — MOBILE  ≤768px
═══════════════════════════════════════ */
      @media (max-width: 768px) {
        /* NAV */
        nav {
          padding: 10px 16px;
        }

        .nav-logo em {
          display: none;
        }

        .nav-pill:not(.nav-pill-submit) {
          display: none;
        }

        /* hide admin link on mobile */

        /* HERO */
        .hero-title .l3 {
          display: none;
        }

        .hero-cta {
          flex-direction: column;
          gap: 10px;
        }

        .btn-primary,
        .btn-ghost {
          width: 100%;
          text-align: center;
          justify-content: center;
          padding: 14px;
        }

        .hero-stats {
          gap: 18px;
        }

        /* SPEED LOG — stack on mobile */
        .speedlog {
          padding: 16px;
        }

        .speedlog-header {
          flex-direction: column;
          align-items: flex-start;
          gap: 6px;
        }

        .speedlog-item {
          flex-wrap: wrap;
          gap: 8px;
          padding: 12px 14px;
          position: relative;
        }

        .speedlog-rank {
          width: 20px;
          font-size: 16px;
        }

        .speedlog-info {
          flex: 1;
          min-width: 0;
        }

        .speedlog-cafe {
          font-size: 14px;
          white-space: nowrap;
          overflow: hidden;
          text-overflow: ellipsis;
        }

        .speedlog-meta {
          font-size: 9px;
        }

        .speedlog-speeds {
          width: 100%;
          display: flex;
          gap: 6px;
          padding-top: 6px;
          border-top: 1px solid var(--brd);
          margin-top: 4px;
        }

        .speedlog-metric {
          flex: 1;
          padding: 6px 4px;
          text-align: center;
        }

        .speedlog-val {
          font-size: 14px;
        }

        .speedlog-unit {
          font-size: 8px;
        }

        /* FILTER TRIGGER */
        .filter-btn-wrap {
          margin-bottom: 16px;
          gap: 8px;
        }

        .filter-trigger {
          font-size: 11px;
          padding: 9px 15px;
        }

        .fap {
          font-size: 9px;
          padding: 3px 8px;
        }

        .filter-clear-all {
          font-size: 9px;
        }

        /* TOOLBAR */
        .toolbar {
          flex-direction: column;
          align-items: stretch;
          gap: 10px;
        }

        .search-box {
          min-width: unset;
          width: 100%;
        }

        .view-toggle {
          width: 100%;
          justify-content: stretch;
        }

        .view-btn {
          flex: 1;
          justify-content: center;
          padding: 10px 8px;
          font-size: 11px;
        }

        /* MAIN CONTAINER */
        .main {
          padding: 28px 16px 60px;
        }

        /* CROWDSOURCE BANNER */
        .cs-banner {
          flex-direction: column;
          gap: 12px;
          padding: 16px;
          text-align: center;
        }

        .cs-banner-actions {
          flex-direction: column;
          width: 100%;
        }

        .cs-banner-actions .crowd-btn {
          width: 100%;
          justify-content: center;
        }

        /* SORT BAR */
        .sort-bar {
          flex-direction: column;
          align-items: flex-start;
          gap: 8px;
          padding-bottom: 12px;
          margin-bottom: 16px;
        }

        .sort-select {
          width: 100%;
          padding: 9px 12px;
        }

        /* GRID */
        .cafe-grid {
          grid-template-columns: 1fr;
          gap: 14px;
        }

        /* LIST VIEW — compact horizontal rows on mobile */
        .cafe-grid.list-view .cafe-card {
          display: flex;
          flex-direction: row;
          grid-template-columns: unset;
          gap: 0;
          align-items: stretch;
        }

        .cafe-grid.list-view .card-img {
          width: 100px;
          min-width: 100px;
          height: auto;
          min-height: unset;
          flex-shrink: 0;
          border-radius: var(--r) 0 0 var(--r);
        }

        .cafe-grid.list-view .card-accent-line {
          display: none;
        }

        .cafe-grid.list-view .card-body {
          padding: 12px 14px;
          flex: 1;
          min-width: 0;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
        }

        .cafe-grid.list-view .card-name {
          font-size: 15px;
          line-height: 1.2;
        }

        .cafe-grid.list-view .card-location {
          font-size: 10px;
          margin-bottom: 8px;
        }

        .cafe-grid.list-view .card-score {
          width: 40px;
          height: 40px;
          font-size: 18px;
        }

        .cafe-grid.list-view .wifi-section {
          margin-bottom: 8px;
        }

        .cafe-grid.list-view .wifi-label {
          display: none;
        }

        .cafe-grid.list-view .wifi-speed-row {
          display: flex;
          gap: 6px;
          justify-content: flex-start;
        }

        .cafe-grid.list-view .wifi-metric {
          padding: 5px 8px;
          min-width: unset;
          background: var(--bg4);
        }

        .cafe-grid.list-view .wifi-metric-val {
          font-size: 14px;
        }

        .cafe-grid.list-view .wifi-metric-unit {
          font-size: 8px;
        }

        .cafe-grid.list-view .wifi-bar-wrap {
          display: none;
        }

        .cafe-grid.list-view .card-verified {
          display: none;
        }

        .cafe-grid.list-view .card-video-btn {
          display: none;
        }

        .cafe-grid.list-view .card-verified-inline {
          display: inline-flex;
        }

        .cafe-grid.list-view .card-video-inline {
          display: inline-flex;
        }

        .cafe-grid.list-view .card-tags {
          display: none;
        }

        .cafe-grid.list-view .card-footer {
          padding-top: 8px;
          border-top: 1px solid var(--brd);
        }

        .cafe-grid.list-view .price-range {
          font-size: 13px;
        }

        .cafe-grid.list-view .hours {
          font-size: 10px;
        }

        /* SPEEDTEST FORM MODAL */
        .form-modal {
          border-radius: var(--r);
          border-bottom: 1px solid var(--brd);
          max-height: 92vh;
        }

        .form-header {
          padding: 20px 18px 0;
        }

        .form-title {
          font-size: 28px;
        }

        .form-body {
          padding: 16px 18px 32px;
        }

        .slider-wrap {
          margin-bottom: 14px;
        }
      }

      /* ═══════════════════════════════════════
   RESPONSIVE — SMALL PHONE  ≤480px
═══════════════════════════════════════ */
      @media (max-width: 480px) {
        .hero-stats {
          gap: 12px;
        }

        .hero-stat-num {
          font-size: 26px;
        }

        .hero-stat-label {
          font-size: 8px;
          letter-spacing: 1.5px;
        }

        /* speedlog compact */
        .speedlog-speeds {
          gap: 4px;
        }

        .speedlog-metric {
          padding: 5px 3px;
        }

        .speedlog-val {
          font-size: 13px;
        }

        /* filter chips smaller */
        .filter-chip {
          font-size: 9px;
          padding: 5px 8px;
        }

        /* card body compact */
        .card-body {
          padding: 14px;
        }

        .card-name {
          font-size: 20px;
        }

        .wifi-metric-val {
          font-size: 20px;
        }

        /* modal tight */

        /* nav submit button text */
        .nav-pill-submit {
          font-size: 10px;
          padding: 6px 10px;
        }
      }

      /* ═══════════════════════════════════════
   UNIFIED FILTER SYSTEM
═══════════════════════════════════════ */

      /* FILTER TRIGGER BUTTON */
      .filter-btn-wrap {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        flex-wrap: wrap;
      }

      .filter-trigger {
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: var(--fm);
        font-size: 12px;
        letter-spacing: 0.5px;
        background: var(--bg3);
        color: var(--tx);
        border: 1px solid var(--brd);
        border-radius: 100px;
        padding: 10px 18px;
        cursor: pointer;
        transition: all var(--tr);
        position: relative;
      }

      .filter-trigger:hover,
      .filter-trigger.active {
        border-color: var(--accent);
        color: var(--accent);
        background: rgba(205, 255, 71, 0.06);
      }

      .filter-trigger.has-filters {
        background: rgba(205, 255, 71, 0.12);
        border-color: var(--accent);
        color: var(--accent);
      }

      .filter-trigger-icon {
        font-size: 15px;
        transition: transform var(--tr);
      }

      .filter-trigger.active .filter-trigger-icon {
        transform: rotate(45deg);
      }

      .filter-badge {
        background: var(--accent);
        color: #000;
        font-family: var(--fd);
        font-size: 12px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        margin-left: 2px;
      }

      .filter-badge.show {
        display: flex;
      }

      .filter-active-pills {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
        flex: 1;
      }

      .fap {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 0.3px;
        background: rgba(205, 255, 71, 0.1);
        color: var(--accent);
        border: 1px solid rgba(205, 255, 71, 0.25);
        border-radius: 100px;
        padding: 4px 10px;
      }

      .fap-x {
        cursor: pointer;
        opacity: 0.7;
        transition: opacity var(--tr);
        font-size: 12px;
        line-height: 1;
      }

      .fap-x:hover {
        opacity: 1;
      }

      .filter-clear-all {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 1px;
        color: var(--tx3);
        background: none;
        border: none;
        cursor: pointer;
        padding: 4px 8px;
        transition: color var(--tr);
      }

      .filter-clear-all:hover {
        color: var(--accent2);
      }

      /* ── DESKTOP POPOVER (≥769px) ── */
      .filter-popover {
        position: fixed;
        top: auto;
        left: auto;
        z-index: 400;
        width: min(400px, calc(100vw - 32px));
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: 16px;
        box-shadow:
          0 20px 60px var(--sh),
          0 4px 16px rgba(0, 0, 0, 0.2);
        opacity: 0;
        pointer-events: none;
        transform: translateY(-8px) scale(0.97);
        transform-origin: top left;
        transition:
          opacity 0.25s cubic-bezier(0.4, 0, 0.2, 1),
          transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
      }

      .filter-popover.open {
        opacity: 1;
        pointer-events: all;
        transform: translateY(0) scale(1);
      }

      /* ── MOBILE BOTTOM SHEET (≤768px) ── */
      .filter-sheet-overlay {
        position: fixed;
        inset: 0;
        z-index: 250;
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(4px);
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s;
      }

      .filter-sheet-overlay.open {
        opacity: 1;
        pointer-events: all;
      }

      .filter-sheet {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 260;
        background: var(--bg2);
        border-radius: 22px 22px 0 0;
        border-top: 1px solid var(--brd);
        max-height: 88vh;
        display: flex;
        flex-direction: column;
        transform: translateY(100%);
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .filter-sheet-overlay.open .filter-sheet {
        transform: translateY(0);
      }

      .filter-sheet-handle {
        padding: 12px 0 6px;
        text-align: center;
        flex-shrink: 0;
      }

      .filter-sheet-handle-bar {
        width: 36px;
        height: 4px;
        background: var(--brd);
        border-radius: 2px;
        margin: 0 auto;
      }

      .filter-sheet-scroll {
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        flex: 1;
      }

      /* ── SHARED PANEL CONTENT ── */
      .fp-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 20px 12px;
        border-bottom: 1px solid var(--brd);
        flex-shrink: 0;
      }

      .fp-title {
        font-family: var(--fd);
        font-size: 20px;
        letter-spacing: 0.5px;
      }

      .fp-close {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: var(--bg3);
        border: 1px solid var(--brd);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        transition: all var(--tr);
        color: var(--tx2);
      }

      .fp-close:hover {
        background: var(--accent2);
        color: #fff;
        border-color: transparent;
      }

      /* TABS within panel */
      .fp-tabs {
        display: flex;
        border-bottom: 1px solid var(--brd);
        padding: 0 20px;
        flex-shrink: 0;
        overflow-x: auto;
      }

      .fp-tab {
        font-family: var(--fm);
        font-size: 11px;
        letter-spacing: 0.5px;
        color: var(--tx3);
        padding: 12px 16px;
        cursor: pointer;
        border-bottom: 2px solid transparent;
        transition: all var(--tr);
        white-space: nowrap;
        flex-shrink: 0;
        background: none;
        border-top: none;
        border-left: none;
        border-right: none;
      }

      .fp-tab:hover {
        color: var(--tx);
      }

      .fp-tab.active {
        color: var(--accent);
        border-bottom-color: var(--accent);
      }

      /* TAB PANELS */
      .fp-panel {
        display: none;
        padding: 16px 20px;
      }

      .fp-panel.active {
        display: block;
        animation: fpFadeIn 0.2s ease;
      }

      @keyframes fpFadeIn {
        from {
          opacity: 0;
          transform: translateY(4px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* Area chips inside panel */
      .fp-section-label {
        font-family: var(--fm);
        font-size: 9px;
        letter-spacing: 3px;
        color: var(--tx3);
        text-transform: uppercase;
        margin-bottom: 10px;
      }

      .fp-chip-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 7px;
        margin-bottom: 16px;
      }

      .fp-chip {
        font-family: var(--fm);
        font-size: 11px;
        letter-spacing: 0.3px;
        background: var(--bg3);
        color: var(--tx2);
        border: 1px solid var(--brd);
        border-radius: 100px;
        padding: 7px 14px;
        cursor: pointer;
        transition: all var(--tr);
      }

      .fp-chip:hover {
        border-color: var(--tx2);
        color: var(--tx);
      }

      .fp-chip.active {
        background: rgba(205, 255, 71, 0.12);
        color: var(--accent);
        border-color: rgba(205, 255, 71, 0.35);
      }

      /* Toggle rows for amenities */
      .fp-toggle-list {
        display: flex;
        flex-direction: column;
        gap: 2px;
      }

      .fp-toggle-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 11px 14px;
        border-radius: 10px;
        transition: background var(--tr);
        cursor: pointer;
      }

      .fp-toggle-row:hover {
        background: var(--bg3);
      }

      .fp-toggle-left {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .fp-toggle-icon {
        font-size: 18px;
        width: 28px;
        text-align: center;
      }

      .fp-toggle-label {
        font-size: 13px;
        font-weight: 500;
      }

      .fp-toggle-sub {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        letter-spacing: 0.3px;
        margin-top: 1px;
      }

      .fp-toggle {
        width: 44px;
        height: 24px;
        border-radius: 12px;
        background: var(--bg4);
        border: 1px solid var(--brd);
        position: relative;
        transition:
          background 0.25s,
          border-color 0.25s;
        flex-shrink: 0;
      }

      .fp-toggle-knob {
        position: absolute;
        top: 3px;
        left: 3px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: var(--tx3);
        transition: all 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
      }

      .fp-toggle.on {
        background: rgba(205, 255, 71, 0.2);
        border-color: var(--accent);
      }

      .fp-toggle.on .fp-toggle-knob {
        left: 23px;
        background: var(--accent);
      }

      /* WiFi speed range inputs */
      .fp-range-group {
        margin-bottom: 16px;
      }

      .fp-range-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 6px;
      }

      .fp-range-label {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx2);
        letter-spacing: 0.3px;
      }

      .fp-range-val {
        font-family: var(--fd);
        font-size: 22px;
        line-height: 1;
      }

      .fp-range-unit {
        font-family: var(--fm);
        font-size: 9px;
        color: var(--tx3);
        margin-left: 2px;
      }

      /* fp-range-track removed — using native range input */
      /* fp-range-thumb removed */
      .fp-range-input {
        display: block;
        width: 100%;
        height: 6px;
        -webkit-appearance: none;
        appearance: none;
        background: var(--bg4);
        border-radius: 3px;
        outline: none;
        cursor: pointer;
        accent-color: var(--accent);
        position: relative;
        z-index: 2;
      }

      .fp-range-input::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: var(--accent);
        cursor: pointer;
        border: 2px solid var(--bg2);
        box-shadow: 0 2px 8px rgba(205, 255, 71, 0.4);
      }

      .fp-range-input::-moz-range-thumb {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: var(--accent);
        cursor: pointer;
        border: 2px solid var(--bg2);
        box-shadow: 0 2px 8px rgba(205, 255, 71, 0.4);
      }

      .fp-range-min,
      .fp-range-max {
        position: absolute;
        top: 0;
        pointer-events: all;
        cursor: pointer;
      }

      .fp-number-row {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-top: 8px;
      }

      .fp-number {
        flex: 1;
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: 8px;
        padding: 9px 12px;
        color: var(--tx);
        font-family: var(--fm);
        font-size: 13px;
        outline: none;
        transition: border-color var(--tr);
        -webkit-appearance: none;
      }

      .fp-number:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(205, 255, 71, 0.1);
      }

      .fp-number-sep {
        font-family: var(--fm);
        font-size: 12px;
        color: var(--tx3);
      }

      .fp-speed-presets {
        display: flex;
        gap: 7px;
        flex-wrap: wrap;
        margin-top: 12px;
      }

      .fp-preset {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 0.3px;
        background: var(--bg3);
        color: var(--tx3);
        border: 1px solid var(--brd);
        border-radius: 100px;
        padding: 5px 11px;
        cursor: pointer;
        transition: all var(--tr);
      }

      .fp-preset.active,
      .fp-preset:hover {
        background: rgba(205, 255, 71, 0.1);
        color: var(--accent);
        border-color: rgba(205, 255, 71, 0.3);
      }

      /* FOOTER ACTIONS in panel */
      .fp-footer {
        display: flex;
        gap: 10px;
        padding: 14px 20px;
        border-top: 1px solid var(--brd);
        flex-shrink: 0;
        background: var(--bg2);
      }

      .fp-apply {
        flex: 1;
        font-family: var(--fd);
        font-size: 17px;
        letter-spacing: 1.5px;
        background: var(--accent);
        color: #000;
        border: none;
        border-radius: 10px;
        padding: 13px;
        cursor: pointer;
        transition: all var(--tr);
      }

      .fp-apply:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(205, 255, 71, 0.3);
      }

      .fp-reset {
        font-family: var(--fm);
        font-size: 12px;
        background: var(--bg3);
        color: var(--tx3);
        border: 1px solid var(--brd);
        border-radius: 10px;
        padding: 13px 18px;
        cursor: pointer;
        transition: all var(--tr);
      }

      .fp-reset:hover {
        border-color: var(--accent2);
        color: var(--accent2);
      }
    </style>
  </head>

  <body>
    <!-- NAV OVERLAY -->
    <div class="nav-overlay" id="navOverlay" onclick="closeDrawer()"></div>

    <nav>
      <a href="#" class="nav-logo"
        >NGOPI<span>.</span>MLG<em>MALANG CITY</em></a
      >

      <!-- CENTER: NAV LINKS -->
      <div class="nav-links">
        <a href="{{ route('ngopi') }}" class="nav-link active" id="navCafe">Cafe</a>
        <a href="{{ route('about') }}" class="nav-link" id="navDetail">Detail</a>
        <!-- Login state: show Profile, else show Login -->
        <a
          href="{{ route('profile') }}"
          class="nav-link"
          id="navProfile"
          style="display: none"
          >Profile</a
        >
      </div>

      <!-- RIGHT: ACTIONS -->
      <div class="nav-actions">
        <a class="nav-pill" href="{{ route('submit') }}" onclick="openSpeedtestForm()">
          ⚡ Submit
        </a>
        <button class="theme-toggle" onclick="toggleTheme()" id="themeBtn">
          🌙
        </button>

        <!-- LOGGED IN: Avatar + Dropdown -->
        <div class="nav-avatar-wrap" id="avatarWrap" style="display: none">
          <div class="nav-avatar" onclick="toggleDropdown()" id="navAvatarBtn">
            <span>☕</span>
            <div class="nav-avatar-status"></div>
          </div>
          <div class="nav-dropdown" id="navDropdown">
            <div class="nav-dropdown-header">
              <div class="nav-dropdown-name" id="dropName">Kopi Enthusiast</div>
              <div class="nav-dropdown-role">⚡ Remote Worker</div>
            </div>
            <a href="{{ route('profile') }}" class="nav-dropdown-item"
              >👤 &nbsp;My Profile</a
            >
            <a href="#" class="nav-dropdown-item">📋 &nbsp;Submissions Saya</a>
            <a href="#" class="nav-dropdown-item">🔖 &nbsp;Kafe Tersimpan</a>
            <div class="nav-dropdown-divider"></div>
            <a href="{{ route('admin') }}" class="nav-dropdown-item" target="_blank"
              >🔧 &nbsp;Admin Panel</a
            >
            <div class="nav-dropdown-divider"></div>
            <div class="nav-dropdown-item danger" onclick="navLogout()">
              🚪 &nbsp;Logout
            </div>
          </div>
        </div>

        <!-- GUEST: Login Button -->
        <a href="{{ route('login') }}" class="nav-login-btn" id="loginBtn">🔑 Login</a>

        <!-- BURGER for mobile -->
        <button class="nav-burger" id="navBurger" onclick="toggleDrawer()">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </nav>

    <!-- MOBILE DRAWER -->
    <div class="nav-drawer" id="navDrawer">
      <div class="nav-drawer-inner">
        <!-- LOGGED IN user info -->
        <div class="nav-drawer-user" id="drawerUser" style="display: none">
          <div class="nav-drawer-avatar"><span>☕</span></div>
          <div class="nav-drawer-user-info">
            <div class="name" id="drawerName">Kopi Enthusiast</div>
            <div class="role">⚡ Remote Worker</div>
          </div>
        </div>

        <!-- NAV LINKS MOBILE -->
        <a href="#cafes" class="nav-drawer-link active" onclick="closeDrawer()">
          <span class="icon">☕</span> Cafe
        </a>
        <a
          href="#"
          class="nav-drawer-link"
          onclick="
            closeDrawer();
            return false;
          "
        >
          <span class="icon">📍</span> Detail Kafe
        </a>

        <!-- Logged in only -->
        <a
          href="profile.html"
          class="nav-drawer-link"
          id="drawerProfile"
          style="display: none"
          onclick="closeDrawer()"
        >
          <span class="icon">👤</span> My Profile
        </a>
        <a
          href="#"
          class="nav-drawer-link"
          id="drawerSaved"
          style="display: none"
          onclick="closeDrawer()"
        >
          <span class="icon">🔖</span> Kafe Tersimpan
        </a>
        <a
          href="#"
          class="nav-drawer-link"
          id="drawerSubs"
          style="display: none"
          onclick="closeDrawer()"
        >
          <span class="icon">📋</span> Submissions Saya
        </a>

        <div class="nav-drawer-divider"></div>

        <a
          href="#"
          class="nav-drawer-link"
          onclick="
            openSpeedtestForm();
            closeDrawer();
          "
        >
          <span class="icon">⚡</span> Submit Speedtest
        </a>
        <a
          href="admin.html"
          class="nav-drawer-link"
          target="_blank"
          onclick="closeDrawer()"
        >
          <span class="icon">🔧</span> Admin Panel
        </a>

        <div class="nav-drawer-divider"></div>

        <!-- GUEST: Login CTA -->
        <a href="login.html" class="nav-drawer-login" id="drawerLoginBtn"
          >🔑 Login / Daftar</a
        >

        <!-- LOGGED IN: Logout -->
        <div
          class="nav-drawer-logout"
          id="drawerLogout"
          style="display: none"
          onclick="navLogout()"
        >
          <span>🚪</span> Logout
        </div>
      </div>
    </div>

    <section class="hero" id="home">
      <div class="hero-bg"></div>
      <div class="hero-grid"></div>
      <div class="hero-badge">
        <span>🔴 Live</span>&nbsp;42 Kafe Terverifikasi
      </div>
      <h1 class="hero-title">
        <span class="l1">FIND YOUR</span>
        <span class="l2">GRIND SPOT</span>
        <span class="l3">
          <svg>
            <defs>
              <text
                id="txt-malang"
                x="50%"
                y="50%"
                dominant-baseline="central"
                text-anchor="middle"
              >
                MALANG CITY
              </text>

              <mask id="cut-inside">
                <rect
                  width="120%"
                  height="120%"
                  x="-10%"
                  y="-10%"
                  fill="white"
                />
                <use href="#txt-malang" fill="black" />
              </mask>
            </defs>

            <use
              href="#txt-malang"
              fill="none"
              stroke="var(--tx3)"
              stroke-width="7"
              mask="url(#cut-inside)"
            />
          </svg>
        </span>
      </h1>
      <p class="hero-sub">
        Kafe terbaik di Malang buat kerja remote &amp; nugas. Cek WiFi speed,
        colokan, dan kenyamanan — semua terukur, bukan katanya.
      </p>
      <div class="hero-cta">
        <a href="#cafes" class="btn-primary">🗺️ EXPLORE KAFE</a>
        <a href="#cafes" class="btn-ghost">Lihat Top 10 →</a>
      </div>
      <div class="hero-stats">
        <div>
          <div class="hero-stat-num">42</div>
          <div class="hero-stat-label">TOTAL KAFE</div>
        </div>
        <div>
          <div class="hero-stat-num">8</div>
          <div class="hero-stat-label">AREA</div>
        </div>
        <div>
          <div class="hero-stat-num">247</div>
          <div class="hero-stat-label">REVIEW</div>
        </div>
      </div>
      <div class="hero-scroll">↓</div>
    </section>

    <div class="marquee-wrap">
      <div class="marquee-track" id="marqueeTrack"></div>
    </div>

    <main class="main" id="cafes">
      <!-- CROWDSOURCE BANNER -->
      <div class="cs-banner">
        <div>
          <h3>📡 Submit Data Speedtest Kamu</h3>
          <p>
            // BANTU KOMUNITAS — UPLOAD HASIL TEST &amp; FOTO KONDISI KAFE
            REALTIME
          </p>
        </div>
        <button
          class="btn-primary"
          onclick="openSpeedtestForm()"
          style="font-size: 15px; padding: 12px 24px"
        >
          ⚡ Submit Speedtest
        </button>
      </div>

      <!-- TOP 5 WFC RECOMMENDATIONS -->
      <div class="speedlog" id="top5Section">
        <div class="speedlog-header">
          <div>
            <div class="speedlog-title">
              🏆 TOP 5 REKOMENDASI CAFE WFC HARI INI
            </div>
            <div class="speedlog-sub">
              // DIPILIH BERDASARKAN SCORE TERBAIK — WIFI · COLOKAN · HARGA
            </div>
          </div>
        </div>
        <div class="speedlog-list" id="top5List"></div>
      </div>

      <!-- TOOLBAR -->
      <div class="toolbar">
        <div class="search-box">
          <span style="color: var(--tx3)">🔍</span>
          <input
            type="text"
            placeholder="Cari nama kafe, area, atau fasilitas..."
            oninput="searchCafes(this.value)"
            id="searchInput"
          />
        </div>
        <div class="view-toggle">
          <button class="view-btn active" onclick="setView('grid', this)">
            ⊞ Grid
          </button>
          <button class="view-btn" onclick="setView('list', this)">
            ≡ List
          </button>
          <button class="view-btn" onclick="setView('map', this)">
            🗺 Map
          </button>
        </div>
      </div>

      <div class="sort-bar">
        <div
          style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap"
        >
          <div class="sort-info">
            Menampilkan <span id="cafeCount">6</span> kafe
          </div>
          <!-- FILTER TRIGGER (moved here, next to best score) -->
          <div style="position: relative">
            <button
              class="filter-trigger"
              id="filterTrigger"
              onclick="toggleFilterPanel()"
            >
              <span class="filter-trigger-icon">⚡</span>
              <span>Filter</span>
              <span class="filter-badge" id="filterBadge">0</span>
            </button>
            <!-- DESKTOP POPOVER -->
            <div class="filter-popover" id="filterPopover">
              <div class="fp-header">
                <div class="fp-title">FILTER KAFE</div>
                <button class="fp-close" onclick="closeFilterPanel()">✕</button>
              </div>
              <div class="fp-tabs">
                <button
                  class="fp-tab active"
                  onclick="switchFpTab('area', this)"
                >
                  📍 Area
                </button>
                <button class="fp-tab" onclick="switchFpTab('fasilitas', this)">
                  🏠 Fasilitas
                </button>
                <button class="fp-tab" onclick="switchFpTab('wifi', this)">
                  📡 WiFi Speed
                </button>
              </div>
              <!-- AREA -->
              <div class="fp-panel active" id="fp-area">
                <div class="fp-section-label">Pilih Area di Malang</div>
                <div class="fp-chip-grid">
                  <button
                    class="fp-chip active"
                    data-ftype="area"
                    data-fval="all"
                    onclick="fpSetArea('all', this)"
                  >
                    🗺️ Semua
                  </button>
                  <button
                    class="fp-chip"
                    data-ftype="area"
                    data-fval="Suhat"
                    onclick="fpSetArea('Suhat', this)"
                  >
                    Suhat
                  </button>
                  <button
                    class="fp-chip"
                    data-ftype="area"
                    data-fval="Dau"
                    onclick="fpSetArea('Dau', this)"
                  >
                    Dau
                  </button>
                  <button
                    class="fp-chip"
                    data-ftype="area"
                    data-fval="Klojen"
                    onclick="fpSetArea('Klojen', this)"
                  >
                    Klojen
                  </button>
                  <button
                    class="fp-chip"
                    data-ftype="area"
                    data-fval="Ijen"
                    onclick="fpSetArea('Ijen', this)"
                  >
                    Ijen
                  </button>
                  <button
                    class="fp-chip"
                    data-ftype="area"
                    data-fval="Sigura-gura"
                    onclick="fpSetArea('Sigura-gura', this)"
                  >
                    Sigura-gura
                  </button>
                  <button
                    class="fp-chip"
                    data-ftype="area"
                    data-fval="Dinoyo"
                    onclick="fpSetArea('Dinoyo', this)"
                  >
                    Dinoyo
                  </button>
                </div>
              </div>
              <!-- FASILITAS -->
              <div class="fp-panel" id="fp-fasilitas">
                <div class="fp-toggle-list">
                  <div class="fp-toggle-row" onclick="fpToggleAmenity('ac')">
                    <div class="fp-toggle-left">
                      <div class="fp-toggle-icon">❄️</div>
                      <div>
                        <div class="fp-toggle-label">AC</div>
                        <div class="fp-toggle-sub">Kafe ber-AC</div>
                      </div>
                    </div>
                    <div class="fp-toggle" id="tog-ac">
                      <div class="fp-toggle-knob"></div>
                    </div>
                  </div>
                  <div
                    class="fp-toggle-row"
                    onclick="fpToggleAmenity('colokan')"
                  >
                    <div class="fp-toggle-left">
                      <div class="fp-toggle-icon">🔌</div>
                      <div>
                        <div class="fp-toggle-label">Colokan Banyak</div>
                        <div class="fp-toggle-sub">
                          Stop kontak tersedia banyak
                        </div>
                      </div>
                    </div>
                    <div class="fp-toggle" id="tog-colokan">
                      <div class="fp-toggle-knob"></div>
                    </div>
                  </div>
                  <div class="fp-toggle-row" onclick="fpToggleAmenity('sofa')">
                    <div class="fp-toggle-left">
                      <div class="fp-toggle-icon">🛋️</div>
                      <div>
                        <div class="fp-toggle-label">Kursi Sofa</div>
                        <div class="fp-toggle-sub">
                          Tempat duduk yang nyaman
                        </div>
                      </div>
                    </div>
                    <div class="fp-toggle" id="tog-sofa">
                      <div class="fp-toggle-knob"></div>
                    </div>
                  </div>
                  <div
                    class="fp-toggle-row"
                    onclick="fpToggleAmenity('makanan')"
                  >
                    <div class="fp-toggle-left">
                      <div class="fp-toggle-icon">🍛</div>
                      <div>
                        <div class="fp-toggle-label">Makanan Berat</div>
                        <div class="fp-toggle-sub">
                          Tersedia menu makanan berat
                        </div>
                      </div>
                    </div>
                    <div class="fp-toggle" id="tog-makanan">
                      <div class="fp-toggle-knob"></div>
                    </div>
                  </div>
                  <div
                    class="fp-toggle-row"
                    onclick="fpToggleAmenity('verified')"
                  >
                    <div class="fp-toggle-left">
                      <div class="fp-toggle-icon">✅</div>
                      <div>
                        <div class="fp-toggle-label">Verified Review</div>
                        <div class="fp-toggle-sub">
                          Ada video review dari @spaceseekers.id
                        </div>
                      </div>
                    </div>
                    <div class="fp-toggle" id="tog-verified">
                      <div class="fp-toggle-knob"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- WIFI SPEED -->
              <div class="fp-panel" id="fp-wifi">
                <div class="fp-section-label">Minimum Download Speed</div>
                <div class="fp-range-group">
                  <div class="fp-range-header">
                    <div class="fp-range-label">Min</div>
                    <div>
                      <span class="fp-range-val" id="dlMinVal">0</span
                      ><span class="fp-range-unit">Mbps</span>
                    </div>
                  </div>
                  <input
                    type="range"
                    class="fp-range-input"
                    id="dlMinSlider"
                    min="0"
                    max="200"
                    value="0"
                    oninput="fpUpdateDlMin(this.value)"
                    style="accent-color: var(--accent)"
                  />
                </div>
                <div class="fp-range-group">
                  <div class="fp-range-header">
                    <div class="fp-range-label">Max</div>
                    <div>
                      <span class="fp-range-val" id="dlMaxVal">300</span
                      ><span class="fp-range-unit">Mbps</span>
                    </div>
                  </div>
                  <input
                    type="range"
                    class="fp-range-input"
                    id="dlMaxSlider"
                    min="0"
                    max="300"
                    value="300"
                    oninput="fpUpdateDlMax(this.value)"
                    style="accent-color: var(--accent3)"
                  />
                </div>
                <div class="fp-section-label" style="margin-top: 14px">
                  Atau input manual (Mbps)
                </div>
                <div class="fp-number-row">
                  <input
                    class="fp-number"
                    type="number"
                    id="dlMinNum"
                    placeholder="0"
                    min="0"
                    max="300"
                    oninput="fpSyncNum('min', this.value)"
                  />
                  <span class="fp-number-sep">—</span>
                  <input
                    class="fp-number"
                    type="number"
                    id="dlMaxNum"
                    placeholder="300"
                    min="0"
                    max="300"
                    oninput="fpSyncNum('max', this.value)"
                  />
                </div>
                <div class="fp-section-label" style="margin-top: 14px">
                  Preset Cepat
                </div>
                <div class="fp-speed-presets">
                  <button class="fp-preset" onclick="fpSetPreset(0, 39)">
                    🐢 &lt;40 Mbps
                  </button>
                  <button class="fp-preset" onclick="fpSetPreset(40, 79)">
                    📶 40–79 Mbps
                  </button>
                  <button class="fp-preset" onclick="fpSetPreset(80, 300)">
                    ⚡ 80+ Mbps
                  </button>
                  <button class="fp-preset" onclick="fpSetPreset(100, 300)">
                    🚀 100+ Mbps
                  </button>
                </div>
              </div>
              <div class="fp-footer">
                <button class="fp-reset" onclick="fpReset()">Reset</button>
                <button class="fp-apply" onclick="fpApply()">TERAPKAN →</button>
              </div>
            </div>
          </div>
          <!-- ACTIVE FILTER PILLS -->
          <div class="filter-active-pills" id="filterActivePills"></div>
          <button
            class="filter-clear-all"
            id="filterClearAll"
            onclick="fpReset()"
            style="display: none"
          >
            Hapus Semua ✕
          </button>
        </div>
        <select class="sort-select" onchange="sortCafes(this.value)">
          <option value="score">↓ Best Score</option>
          <option value="speed">↓ Fastest WiFi</option>
          <option value="price">↑ Cheapest</option>
          <option value="ping">↑ Lowest Ping</option>
        </select>
      </div>

      <!-- MOBILE FILTER BOTTOM SHEET OVERLAY -->
      <div
        class="filter-sheet-overlay"
        id="filterSheetOverlay"
        onclick="closeFilterSheet(event)"
      >
        <div class="filter-sheet" id="filterSheet">
          <div class="filter-sheet-handle">
            <div class="filter-sheet-handle-bar"></div>
          </div>
          <div class="fp-header" style="flex-shrink: 0">
            <div class="fp-title">FILTER KAFE</div>
            <button class="fp-close" onclick="closeFilterPanel()">✕</button>
          </div>
          <div class="fp-tabs">
            <button class="fp-tab active" onclick="switchFpTab('area-m', this)">
              📍 Area
            </button>
            <button class="fp-tab" onclick="switchFpTab('fasilitas-m', this)">
              🏠 Fasilitas
            </button>
            <button class="fp-tab" onclick="switchFpTab('wifi-m', this)">
              📡 WiFi Speed
            </button>
          </div>
          <div class="filter-sheet-scroll">
            <div
              class="fp-panel active"
              id="fp-area-m"
              style="padding: 16px 20px"
            >
              <div class="fp-section-label">Pilih Area di Malang</div>
              <div class="fp-chip-grid">
                <button
                  class="fp-chip active"
                  data-ftype="area-m"
                  data-fval="all"
                  onclick="fpSetArea('all', this)"
                >
                  🗺️ Semua
                </button>
                <button
                  class="fp-chip"
                  data-ftype="area-m"
                  data-fval="Suhat"
                  onclick="fpSetArea('Suhat', this)"
                >
                  Suhat
                </button>
                <button
                  class="fp-chip"
                  data-ftype="area-m"
                  data-fval="Dau"
                  onclick="fpSetArea('Dau', this)"
                >
                  Dau
                </button>
                <button
                  class="fp-chip"
                  data-ftype="area-m"
                  data-fval="Klojen"
                  onclick="fpSetArea('Klojen', this)"
                >
                  Klojen
                </button>
                <button
                  class="fp-chip"
                  data-ftype="area-m"
                  data-fval="Ijen"
                  onclick="fpSetArea('Ijen', this)"
                >
                  Ijen
                </button>
                <button
                  class="fp-chip"
                  data-ftype="area-m"
                  data-fval="Sigura-gura"
                  onclick="fpSetArea('Sigura-gura', this)"
                >
                  Sigura-gura
                </button>
                <button
                  class="fp-chip"
                  data-ftype="area-m"
                  data-fval="Dinoyo"
                  onclick="fpSetArea('Dinoyo', this)"
                >
                  Dinoyo
                </button>
              </div>
            </div>
            <div class="fp-panel" id="fp-fasilitas-m" style="padding: 8px 12px">
              <div class="fp-toggle-list">
                <div class="fp-toggle-row" onclick="fpToggleAmenity('ac')">
                  <div class="fp-toggle-left">
                    <div class="fp-toggle-icon">❄️</div>
                    <div>
                      <div class="fp-toggle-label">AC</div>
                      <div class="fp-toggle-sub">Kafe ber-AC</div>
                    </div>
                  </div>
                  <div class="fp-toggle" id="tog-ac-m">
                    <div class="fp-toggle-knob"></div>
                  </div>
                </div>
                <div class="fp-toggle-row" onclick="fpToggleAmenity('colokan')">
                  <div class="fp-toggle-left">
                    <div class="fp-toggle-icon">🔌</div>
                    <div>
                      <div class="fp-toggle-label">Colokan Banyak</div>
                      <div class="fp-toggle-sub">
                        Stop kontak tersedia banyak
                      </div>
                    </div>
                  </div>
                  <div class="fp-toggle" id="tog-colokan-m">
                    <div class="fp-toggle-knob"></div>
                  </div>
                </div>
                <div class="fp-toggle-row" onclick="fpToggleAmenity('sofa')">
                  <div class="fp-toggle-left">
                    <div class="fp-toggle-icon">🛋️</div>
                    <div>
                      <div class="fp-toggle-label">Kursi Sofa</div>
                      <div class="fp-toggle-sub">Tempat duduk yang nyaman</div>
                    </div>
                  </div>
                  <div class="fp-toggle" id="tog-sofa-m">
                    <div class="fp-toggle-knob"></div>
                  </div>
                </div>
                <div class="fp-toggle-row" onclick="fpToggleAmenity('makanan')">
                  <div class="fp-toggle-left">
                    <div class="fp-toggle-icon">🍛</div>
                    <div>
                      <div class="fp-toggle-label">Makanan Berat</div>
                      <div class="fp-toggle-sub">
                        Tersedia menu makanan berat
                      </div>
                    </div>
                  </div>
                  <div class="fp-toggle" id="tog-makanan-m">
                    <div class="fp-toggle-knob"></div>
                  </div>
                </div>
                <div
                  class="fp-toggle-row"
                  onclick="fpToggleAmenity('verified')"
                >
                  <div class="fp-toggle-left">
                    <div class="fp-toggle-icon">✅</div>
                    <div>
                      <div class="fp-toggle-label">Verified Review</div>
                      <div class="fp-toggle-sub">
                        Ada video review dari kolaborator
                      </div>
                    </div>
                  </div>
                  <div class="fp-toggle" id="tog-verified-m">
                    <div class="fp-toggle-knob"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fp-panel" id="fp-wifi-m" style="padding: 16px 20px">
              <div class="fp-section-label">Minimum Download Speed</div>
              <div class="fp-range-group">
                <div class="fp-range-header">
                  <div class="fp-range-label">Min</div>
                  <div>
                    <span class="fp-range-val" id="dlMinVal-m">0</span
                    ><span class="fp-range-unit">Mbps</span>
                  </div>
                </div>
                <input
                  type="range"
                  class="fp-range-input"
                  id="dlMinSlider-m"
                  min="0"
                  max="200"
                  value="0"
                  oninput="fpUpdateDlMin(this.value)"
                  style="accent-color: var(--accent)"
                />
              </div>
              <div class="fp-range-group">
                <div class="fp-range-header">
                  <div class="fp-range-label">Max</div>
                  <div>
                    <span class="fp-range-val" id="dlMaxVal-m">300</span
                    ><span class="fp-range-unit">Mbps</span>
                  </div>
                </div>
                <input
                  type="range"
                  class="fp-range-input"
                  id="dlMaxSlider-m"
                  min="0"
                  max="300"
                  value="300"
                  oninput="fpUpdateDlMax(this.value)"
                  style="accent-color: var(--accent3)"
                />
              </div>
              <div class="fp-section-label" style="margin-top: 14px">
                Input Manual (Mbps)
              </div>
              <div class="fp-number-row">
                <input
                  class="fp-number"
                  type="number"
                  id="dlMinNum-m"
                  placeholder="0"
                  oninput="fpSyncNum('min', this.value)"
                /><span class="fp-number-sep">—</span
                ><input
                  class="fp-number"
                  type="number"
                  id="dlMaxNum-m"
                  placeholder="300"
                  oninput="fpSyncNum('max', this.value)"
                />
              </div>
              <div class="fp-section-label" style="margin-top: 14px">
                Preset Cepat
              </div>
              <div class="fp-speed-presets" style="margin-bottom: 8px">
                <button class="fp-preset" onclick="fpSetPreset(0, 39)">
                  🐢 &lt;40
                </button>
                <button class="fp-preset" onclick="fpSetPreset(40, 79)">
                  📶 40–79
                </button>
                <button class="fp-preset" onclick="fpSetPreset(80, 300)">
                  ⚡ 80+
                </button>
                <button class="fp-preset" onclick="fpSetPreset(100, 300)">
                  🚀 100+
                </button>
              </div>
            </div>
          </div>
          <div class="fp-footer">
            <button class="fp-reset" onclick="fpReset()">Reset</button>
            <button class="fp-apply" onclick="fpApply()">TERAPKAN →</button>
          </div>
        </div>
      </div>

      <div class="map-view-container" id="mapView">
        <div id="leafletMap"></div>
        <div class="map-controls">
          <button
            class="map-ctrl-btn"
            id="locBtn"
            onclick="goToUserLocation()"
            title="Lokasi Saya"
          >
            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="3" />
              <path d="M12 2v3M12 19v3M2 12h3M19 12h3" />
            </svg>
            <span>Lokasi Saya</span>
          </button>
          <div class="map-loc-status" id="locStatus"></div>
        </div>
      </div>
      <div class="cafe-grid" id="cafeGrid">
        <!-- CARD 1: Odilia Cafe & Patisserie -->
        <div class="cafe-card" data-id="1" onclick="goToDetail(1)">
          <div class="card-accent-line"></div>
          <div class="card-img">
            <img
              src="./assets/odilia.webp"
              alt="Odilia Cafe & Patisserie"
              loading="lazy"
              onerror="this.style.display = 'none'"
            />
            <span
              class="card-img-fallback"
              style="
                font-family: var(--fd);
                font-size: 32px;
                letter-spacing: 1px;
                color: var(--tx2);
              "
              >ODILIA</span
            >
            <div class="card-img-overlay"></div>
            <div class="card-rank">#1</div>
            <div class="card-verified">
              <div class="card-verified-icon">✓</div>
              <div class="card-verified-tooltip">
                Verified by @spaceseekers.id
              </div>
            </div>
            <a
              class="card-video-btn"
              href="https://www.instagram.com/reel/example1"
              target="_blank"
              onclick="
                event.stopPropagation();
                trackVideoClick(1);
              "
              ><svg viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" /></svg
              >Review Video</a
            >
          </div>
          <div class="card-body">
            <div class="card-header">
              <div style="flex: 1; min-width: 0">
                <div
                  style="
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    flex-wrap: wrap;
                    margin-bottom: 3px;
                  "
                >
                  <div class="card-name">Noi Coffee</div>
                  <span class="card-verified-inline">✓ verified</span>
                  <a
                    class="card-video-inline"
                    href="https://www.instagram.com/reel/example1"
                    target="_blank"
                    onclick="
                      event.stopPropagation();
                      trackVideoClick(1);
                    "
                    ><svg
                      viewBox="0 0 24 24"
                      width="9"
                      height="9"
                      fill="currentColor"
                    >
                      <path d="M8 5v14l11-7z" /></svg
                    >Video</a
                  >
                </div>
                <div class="card-location">📍 Ijen</div>
              </div>
              <div class="card-score score-high" id="score-1">
                --<span class="card-score-label">SCORE</span>
              </div>
            </div>
            <div class="wifi-section">
              <div class="wifi-label">// WIFI SPEED</div>
              <div class="wifi-speed-row">
                <div class="wifi-metric">
                  <div class="wifi-metric-val">148</div>
                  <div class="wifi-metric-unit">MBPS ↓</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">202</div>
                  <div class="wifi-metric-unit">MBPS ↑</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">22</div>
                  <div class="wifi-metric-unit">MS PING</div>
                </div>
              </div>
              <div class="wifi-bar-wrap">
                <div class="wifi-bar" style="width: 72%"></div>
              </div>
            </div>
            <div class="card-tags">
              <span class="tag cyan">❄️ AC</span>
              <span class="tag green">🔌 Colokan banyak</span>
              <span class="tag makanan">🍛 Makanan Berat</span>
              <span class="tag tag-more">+3</span>
            </div>
            <div class="card-footer">
              <div class="price-range">
                <span class="ap">●</span><span class="ap">●</span
                ><span class="ap">●</span>
                <span
                  style="
                    font-family: var(--fm);
                    font-size: 11px;
                    color: var(--tx3);
                    margin-left: 6px;
                  "
                  >Rp 25rb–50rb</span
                >
              </div>
              <div class="hours">🕐 07:30–22:30</div>
            </div>
          </div>
        </div>

        <!-- CARD 2: Filosofi Kopi -->
        <div class="cafe-card" data-id="2" onclick="goToDetail(2)">
          <div class="card-accent-line"></div>
          <div class="card-img">
            <img
              src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=600&q=80"
              alt="Filosofi Kopi"
              loading="lazy"
              onerror="this.style.display = 'none'"
            />
            <span
              class="card-img-fallback"
              style="
                font-family: var(--fd);
                font-size: 32px;
                letter-spacing: 1px;
                color: var(--tx2);
              "
              >FK</span
            >
            <div class="card-img-overlay"></div>
            <div class="card-rank">#2</div>
            <div class="card-verified">
              <div class="card-verified-icon">✓</div>
              <div class="card-verified-tooltip">
                Verified by @spaceseekers.id
              </div>
            </div>
            <a
              class="card-video-btn"
              href="https://www.tiktok.com/@spaceseekers.id/video/example2"
              target="_blank"
              onclick="
                event.stopPropagation();
                trackVideoClick(2);
              "
              ><svg viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" /></svg
              >Review Video</a
            >
          </div>
          <div class="card-body">
            <div class="card-header">
              <div style="flex: 1; min-width: 0">
                <div
                  style="
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    flex-wrap: wrap;
                    margin-bottom: 3px;
                  "
                >
                  <div class="card-name">Filosofi Kopi</div>
                  <span class="card-verified-inline">✓ verified</span>
                  <a
                    class="card-video-inline"
                    href="https://www.tiktok.com/@spaceseekers.id/video/example2"
                    target="_blank"
                    onclick="
                      event.stopPropagation();
                      trackVideoClick(2);
                    "
                    ><svg
                      viewBox="0 0 24 24"
                      width="9"
                      height="9"
                      fill="currentColor"
                    >
                      <path d="M8 5v14l11-7z" /></svg
                    >Video</a
                  >
                </div>
                <div class="card-location">📍 Suhat</div>
              </div>
              <div class="card-score score-mid" id="score-2">
                --<span class="card-score-label">SCORE</span>
              </div>
            </div>
            <div class="wifi-section">
              <div class="wifi-label">// WIFI SPEED</div>
              <div class="wifi-speed-row">
                <div class="wifi-metric">
                  <div class="wifi-metric-val">52</div>
                  <div class="wifi-metric-unit">MBPS ↓</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">28</div>
                  <div class="wifi-metric-unit">MBPS ↑</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">12</div>
                  <div class="wifi-metric-unit">MS PING</div>
                </div>
              </div>
              <div class="wifi-bar-wrap">
                <div class="wifi-bar" style="width: 43%"></div>
              </div>
            </div>
            <div class="card-tags">
              <span class="tag cyan">❄️ AC</span>
              <span class="tag green">🔌 Colokan banyak</span>
              <span class="tag">🅿️ parkir luas</span>
              <span class="tag tag-more">+1</span>
            </div>
            <div class="card-footer">
              <div class="price-range">
                <span class="ap">●</span><span class="ap">●</span><span>●</span>
                <span
                  style="
                    font-family: var(--fm);
                    font-size: 11px;
                    color: var(--tx3);
                    margin-left: 6px;
                  "
                  >Rp 15rb–30rb</span
                >
              </div>
              <div class="hours">🕐 08:00–22:00</div>
            </div>
          </div>
        </div>

        <!-- CARD 3: Omah Kopi -->
        <div class="cafe-card" data-id="3" onclick="goToDetail(3)">
          <div class="card-accent-line"></div>
          <div class="card-img">
            <img
              src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600&q=80"
              alt="Omah Kopi"
              loading="lazy"
              onerror="this.style.display = 'none'"
            />
            <span
              class="card-img-fallback"
              style="
                font-family: var(--fd);
                font-size: 32px;
                letter-spacing: 1px;
                color: var(--tx2);
              "
              >OK</span
            >
            <div class="card-img-overlay"></div>
            <div class="card-rank">#3</div>
            <div class="card-verified">
              <div class="card-verified-icon">✓</div>
              <div class="card-verified-tooltip">
                Verified by @spaceseekers.id
              </div>
            </div>
            <a
              class="card-video-btn"
              href="https://www.instagram.com/reel/example3"
              target="_blank"
              onclick="
                event.stopPropagation();
                trackVideoClick(3);
              "
              ><svg viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" /></svg
              >Review Video</a
            >
          </div>
          <div class="card-body">
            <div class="card-header">
              <div style="flex: 1; min-width: 0">
                <div
                  style="
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    flex-wrap: wrap;
                    margin-bottom: 3px;
                  "
                >
                  <div class="card-name">Omah Kopi</div>
                  <span class="card-verified-inline">✓ verified</span>
                  <a
                    class="card-video-inline"
                    href="https://www.instagram.com/reel/example3"
                    target="_blank"
                    onclick="
                      event.stopPropagation();
                      trackVideoClick(3);
                    "
                    ><svg
                      viewBox="0 0 24 24"
                      width="9"
                      height="9"
                      fill="currentColor"
                    >
                      <path d="M8 5v14l11-7z" /></svg
                    >Video</a
                  >
                </div>
                <div class="card-location">📍 Dau</div>
              </div>
              <div class="card-score score-mid" id="score-3">
                --<span class="card-score-label">SCORE</span>
              </div>
            </div>
            <div class="wifi-section">
              <div class="wifi-label">// WIFI SPEED</div>
              <div class="wifi-speed-row">
                <div class="wifi-metric">
                  <div class="wifi-metric-val">73</div>
                  <div class="wifi-metric-unit">MBPS ↓</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">35</div>
                  <div class="wifi-metric-unit">MBPS ↑</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">15</div>
                  <div class="wifi-metric-unit">MS PING</div>
                </div>
              </div>
              <div class="wifi-bar-wrap">
                <div class="wifi-bar" style="width: 61%"></div>
              </div>
            </div>
            <div class="card-tags">
              <span class="tag">🌀 Non-AC</span>
              <span class="tag red">🔌 Colokan sedikit</span>
              <span class="tag makanan">🍛 Makanan Berat</span>
              <span class="tag tag-more">+2</span>
            </div>
            <div class="card-footer">
              <div class="price-range">
                <span class="ap">●</span><span class="ap">●</span><span>●</span>
                <span
                  style="
                    font-family: var(--fm);
                    font-size: 11px;
                    color: var(--tx3);
                    margin-left: 6px;
                  "
                  >Rp 15rb–35rb</span
                >
              </div>
              <div class="hours">🕐 09:00–21:00</div>
            </div>
          </div>
        </div>

        <!-- CARD 4: Kedai 97 -->
        <div class="cafe-card" data-id="4" onclick="goToDetail(4)">
          <div class="card-accent-line"></div>
          <div class="card-img">
            <img
              src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600&q=80"
              alt="Kedai 97"
              loading="lazy"
              onerror="this.style.display = 'none'"
            />
            <span
              class="card-img-fallback"
              style="
                font-family: var(--fd);
                font-size: 32px;
                letter-spacing: 1px;
                color: var(--tx2);
              "
              >K97</span
            >
            <div class="card-img-overlay"></div>
            <div class="card-rank">#4</div>
          </div>
          <div class="card-body">
            <div class="card-header">
              <div style="flex: 1; min-width: 0">
                <div
                  style="
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    flex-wrap: wrap;
                    margin-bottom: 3px;
                  "
                >
                  <div class="card-name">Kedai 97</div>
                </div>
                <div class="card-location">📍 Sigura-gura</div>
              </div>
              <div class="card-score score-high" id="score-4">
                --<span class="card-score-label">SCORE</span>
              </div>
            </div>
            <div class="wifi-section">
              <div class="wifi-label">// WIFI SPEED</div>
              <div class="wifi-speed-row">
                <div class="wifi-metric">
                  <div class="wifi-metric-val">95</div>
                  <div class="wifi-metric-unit">MBPS ↓</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">65</div>
                  <div class="wifi-metric-unit">MBPS ↑</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">5</div>
                  <div class="wifi-metric-unit">MS PING</div>
                </div>
              </div>
              <div class="wifi-bar-wrap">
                <div class="wifi-bar" style="width: 79%"></div>
              </div>
            </div>
            <div class="card-tags">
              <span class="tag cyan">❄️ AC</span>
              <span class="tag green">🔌 Colokan banyak</span>
              <span class="tag">💰 murah</span>
              <span class="tag tag-more">+1</span>
            </div>
            <div class="card-footer">
              <div class="price-range">
                <span class="ap">●</span><span>●</span><span>●</span>
                <span
                  style="
                    font-family: var(--fm);
                    font-size: 11px;
                    color: var(--tx3);
                    margin-left: 6px;
                  "
                  >Rp 10rb–25rb</span
                >
              </div>
              <div class="hours">🕐 07:00–24:00</div>
            </div>
          </div>
        </div>

        <!-- CARD 5: Kopitiam Dinoyo -->
        <div class="cafe-card" data-id="5" onclick="goToDetail(5)">
          <div class="card-accent-line"></div>
          <div class="card-img">
            <img
              src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=600&q=80"
              alt="Kopitiam Dinoyo"
              loading="lazy"
              onerror="this.style.display = 'none'"
            />
            <span
              class="card-img-fallback"
              style="
                font-family: var(--fd);
                font-size: 32px;
                letter-spacing: 1px;
                color: var(--tx2);
              "
              >KD</span
            >
            <div class="card-img-overlay"></div>
            <div class="card-rank">#5</div>
          </div>
          <div class="card-body">
            <div class="card-header">
              <div style="flex: 1; min-width: 0">
                <div
                  style="
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    flex-wrap: wrap;
                    margin-bottom: 3px;
                  "
                >
                  <div class="card-name">Kopitiam Dinoyo</div>
                </div>
                <div class="card-location">📍 Dinoyo</div>
              </div>
              <div class="card-score score-low" id="score-5">
                --<span class="card-score-label">SCORE</span>
              </div>
            </div>
            <div class="wifi-section">
              <div class="wifi-label">// WIFI SPEED</div>
              <div class="wifi-speed-row">
                <div class="wifi-metric">
                  <div class="wifi-metric-val">41</div>
                  <div class="wifi-metric-unit">MBPS ↓</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">18</div>
                  <div class="wifi-metric-unit">MBPS ↑</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">22</div>
                  <div class="wifi-metric-unit">MS PING</div>
                </div>
              </div>
              <div class="wifi-bar-wrap">
                <div class="wifi-bar" style="width: 34%"></div>
              </div>
            </div>
            <div class="card-tags">
              <span class="tag">🌀 Non-AC</span>
              <span class="tag red">🔌 Colokan sedikit</span>
              <span class="tag makanan">🍛 Makanan Berat</span>
              <span class="tag tag-more">+2</span>
            </div>
            <div class="card-footer">
              <div class="price-range">
                <span class="ap">●</span><span>●</span><span>●</span>
                <span
                  style="
                    font-family: var(--fm);
                    font-size: 11px;
                    color: var(--tx3);
                    margin-left: 6px;
                  "
                  >Rp 8rb–20rb</span
                >
              </div>
              <div class="hours">🕐 06:00–22:00</div>
            </div>
          </div>
        </div>

        <!-- CARD 6: Ruang Karya Co. -->
        <div class="cafe-card" data-id="6" onclick="goToDetail(6)">
          <div class="card-accent-line"></div>
          <div class="card-img">
            <img
              src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?w=600&q=80"
              alt="Ruang Karya Co."
              loading="lazy"
              onerror="this.style.display = 'none'"
            />
            <span
              class="card-img-fallback"
              style="
                font-family: var(--fd);
                font-size: 32px;
                letter-spacing: 1px;
                color: var(--tx2);
              "
              >RK</span
            >
            <div class="card-img-overlay"></div>
            <div class="card-rank">#6</div>
            <div class="card-verified">
              <div class="card-verified-icon">✓</div>
              <div class="card-verified-tooltip">
                Verified by @spaceseekers.id
              </div>
            </div>
            <a
              class="card-video-btn"
              href="https://www.instagram.com/reel/example4"
              target="_blank"
              onclick="
                event.stopPropagation();
                trackVideoClick(6);
              "
              ><svg viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" /></svg
              >Review Video</a
            >
          </div>
          <div class="card-body">
            <div class="card-header">
              <div style="flex: 1; min-width: 0">
                <div
                  style="
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    flex-wrap: wrap;
                    margin-bottom: 3px;
                  "
                >
                  <div class="card-name">Ruang Karya Co.</div>
                  <span class="card-verified-inline">✓ verified</span>
                  <a
                    class="card-video-inline"
                    href="https://www.instagram.com/reel/example4"
                    target="_blank"
                    onclick="
                      event.stopPropagation();
                      trackVideoClick(6);
                    "
                    ><svg
                      viewBox="0 0 24 24"
                      width="9"
                      height="9"
                      fill="currentColor"
                    >
                      <path d="M8 5v14l11-7z" /></svg
                    >Video</a
                  >
                </div>
                <div class="card-location">📍 Klojen</div>
              </div>
              <div class="card-score score-high" id="score-6">
                --<span class="card-score-label">SCORE</span>
              </div>
            </div>
            <div class="wifi-section">
              <div class="wifi-label">// WIFI SPEED</div>
              <div class="wifi-speed-row">
                <div class="wifi-metric">
                  <div class="wifi-metric-val">120</div>
                  <div class="wifi-metric-unit">MBPS ↓</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">80</div>
                  <div class="wifi-metric-unit">MBPS ↑</div>
                </div>
                <div class="wifi-metric">
                  <div class="wifi-metric-val">3</div>
                  <div class="wifi-metric-unit">MS PING</div>
                </div>
              </div>
              <div class="wifi-bar-wrap">
                <div class="wifi-bar" style="width: 100%"></div>
              </div>
            </div>
            <div class="card-tags">
              <span class="tag cyan">❄️ AC</span>
              <span class="tag green">🔌 Colokan banyak</span>
              <span class="tag">💼 co-working</span>
              <span class="tag tag-more">+2</span>
            </div>
            <div class="card-footer">
              <div class="price-range">
                <span class="ap">●</span><span class="ap">●</span
                ><span class="ap">●</span>
                <span
                  style="
                    font-family: var(--fm);
                    font-size: 11px;
                    color: var(--tx3);
                    margin-left: 6px;
                  "
                  >Rp 30rb–60rb</span
                >
              </div>
              <div class="hours">🕐 08:00–22:00</div>
            </div>
          </div>
        </div>
      </div>
      <div class="empty-state" id="emptyState">
        <div style="font-size: 64px; margin-bottom: 16px">☕</div>
        <h3>KAFE GAK KETEMU</h3>
        <p>// coba filter atau keyword yang lain</p>
      </div>
    </main>

    <footer>
      <div class="footer-logo">NGOPI<span>.</span>MLG</div>
      <div class="footer-sub">// YOUR MALANG REMOTE WORK COMPANION</div>
      <div class="footer-links">
        <a href="#" class="f-link">TENTANG</a>
        <a href="#" class="f-link">METODOLOGI</a>
        <a href="#" class="f-link">API</a>
        <a href="admin.html" class="f-link" target="_blank">ADMIN</a>
        <a href="#" class="f-link">KONTAK</a>
      </div>
      <div class="footer-copy">
        © 2025 NGOPI.MLG — Built for the grinders of Malang 🏔️
      </div>
    </footer>

    <button class="fab" onclick="openSpeedtestForm()" title="Submit Speedtest">
      ⚡
    </button>

    <!-- CAFE DETAIL MODAL -->

    <!-- SPEEDTEST FORM MODAL -->
    <div
      class="modal-overlay"
      id="formOverlay"
      onclick="if (event.target === this) closeSpeedtestForm();"
    >

    </div>

    <div class="toast-container" id="toastContainer"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
    <script>
      // ========== NAV STATE ==========
      // Simulate auth state — toggle this to test both states
      // In production, replace with real session/token check
      let NAV_AUTH = {
        loggedIn: true, // set true to test logged-in state
        name: "Budi Santoso",
        role: "Remote Worker",
        avatar: null, // URL or null for emoji fallback
      };

      function navInit() {
        const loggedIn = NAV_AUTH.loggedIn;
        // Desktop
        document.getElementById("avatarWrap").style.display = loggedIn
          ? "block"
          : "none";
        document.getElementById("loginBtn").style.display = loggedIn
          ? "none"
          : "inline-flex";
        document.getElementById("navProfile").style.display = loggedIn
          ? "inline-flex"
          : "none";
        if (loggedIn) {
          document.getElementById("dropName").textContent = NAV_AUTH.name;
        }
        // Mobile drawer
        document.getElementById("drawerUser").style.display = loggedIn
          ? "flex"
          : "none";
        document.getElementById("drawerName").textContent = NAV_AUTH.name;
        document.getElementById("drawerProfile").style.display = loggedIn
          ? "flex"
          : "none";
        document.getElementById("drawerSaved").style.display = loggedIn
          ? "flex"
          : "none";
        document.getElementById("drawerSubs").style.display = loggedIn
          ? "flex"
          : "none";
        document.getElementById("drawerLoginBtn").style.display = loggedIn
          ? "none"
          : "flex";
        document.getElementById("drawerLogout").style.display = loggedIn
          ? "flex"
          : "none";
      }

      function toggleDropdown() {
        const dd = document.getElementById("navDropdown");
        dd.classList.toggle("open");
        // close on outside click
        document.addEventListener("click", closeDropdownOutside, {
          once: true,
        });
      }

      function closeDropdownOutside(e) {
        const wrap = document.getElementById("avatarWrap");
        if (!wrap.contains(e.target)) {
          document.getElementById("navDropdown").classList.remove("open");
        }
      }

      function toggleDrawer() {
        const drawer = document.getElementById("navDrawer");
        const burger = document.getElementById("navBurger");
        const overlay = document.getElementById("navOverlay");
        const open = drawer.classList.toggle("open");
        burger.classList.toggle("open", open);
        overlay.classList.toggle("open", open);
        document.body.style.overflow = open ? "hidden" : "";
      }

      function closeDrawer() {
        document.getElementById("navDrawer").classList.remove("open");
        document.getElementById("navBurger").classList.remove("open");
        document.getElementById("navOverlay").classList.remove("open");
        document.body.style.overflow = "";
      }

      function navLogout() {
        NAV_AUTH.loggedIn = false;
        navInit();
        closeDrawer();
        document.getElementById("navDropdown").classList.remove("open");
      }

      // ========== DATA ==========
      const cafes = [
        {
          id: 1,
          name: "Odilia Cafe & Patisserie",
          area: "Ijen",
          address:
            "Jl. Merapi No.35A, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65119",
          img: "./assets/odilia.webp",
          lat: -7.9710939,
          lng: 112.6254226,
          download: 148,
          upload: 202,
          ping: 22,
          colokan: "banyak",
          ac: true,
          kursi: "sofa, kursi",
          price: 3,
          priceLabel: "Rp 25rb–50rb",
          hours: "07:30–22:30",
          status: "sepi",
          makananBerat: true,
          tags: ["colokan banyak", "ac", "sofa", "outdoor"],
          gmaps: "https://maps.google.com/?q=-7.9611,112.6238",
          verified: "@spaceseekers.id",
          videoUrl: "https://www.instagram.com/reel/example1",
          videoClicks: 142,
        },
        {
          id: 2,
          name: "Filosofi Kopi",
          area: "Suhat",
          address: "Jl. Sukarno-Hatta No.5, Malang",
          img: "https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=600&q=80",
          lat: -7.9397,
          lng: 112.6144,
          download: 52,
          upload: 28,
          ping: 12,
          colokan: "banyak",
          ac: true,
          kursi: "kayu",
          price: 2,
          priceLabel: "Rp 15rb–30rb",
          hours: "08:00–22:00",
          status: "ramai",
          makananBerat: false,
          tags: ["colokan banyak", "ac", "parkir luas"],
          gmaps: "https://maps.google.com/?q=-7.9397,112.6144",
          verified: "@spaceseekers.id",
          videoUrl: "https://www.tiktok.com/@spaceseekers.id/video/example2",
          videoClicks: 98,
        },
        {
          id: 3,
          name: "Omah Kopi",
          area: "Dau",
          address: "Jl. Raya Dau No.88, Malang",
          img: "https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600&q=80",
          lat: -7.916,
          lng: 112.5729,
          download: 73,
          upload: 35,
          ping: 15,
          colokan: "sedikit",
          ac: false,
          kursi: "sofa",
          price: 2,
          priceLabel: "Rp 15rb–35rb",
          hours: "09:00–21:00",
          status: "sepi",
          makananBerat: true,
          tags: ["outdoor", "view gunung", "non-ac", "sofa"],
          gmaps: "https://maps.google.com/?q=-7.9160,112.5729",
          verified: "@spaceseekers.id",
          videoUrl: "https://www.instagram.com/reel/example3",
          videoClicks: 217,
        },
        {
          id: 4,
          name: "Kedai 97",
          area: "Sigura-gura",
          address: "Jl. Sigura-gura No.30, Malang",
          img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600&q=80",
          lat: -7.9518,
          lng: 112.6082,
          download: 95,
          upload: 65,
          ping: 5,
          colokan: "banyak",
          ac: true,
          kursi: "kayu",
          price: 1,
          priceLabel: "Rp 10rb–25rb",
          hours: "07:00–24:00",
          status: "sepi",
          makananBerat: false,
          tags: ["colokan banyak", "ac", "murah", "24 jam"],
          gmaps: "https://maps.google.com/?q=-7.9518,112.6082",
          verified: null,
          videoUrl: null,
          videoClicks: 0,
        },
        {
          id: 5,
          name: "Kopitiam Dinoyo",
          area: "Dinoyo",
          address: "Jl. MT Haryono No.167, Malang",
          img: "https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=600&q=80",
          lat: -7.9487,
          lng: 112.6163,
          download: 41,
          upload: 18,
          ping: 22,
          colokan: "sedikit",
          ac: false,
          kursi: "kayu",
          price: 1,
          priceLabel: "Rp 8rb–20rb",
          hours: "06:00–22:00",
          status: "ramai",
          makananBerat: true,
          tags: ["murah", "dekat kampus", "non-ac", "sarapan"],
          gmaps: "https://maps.google.com/?q=-7.9487,112.6163",
          verified: null,
          videoUrl: null,
          videoClicks: 0,
        },
        {
          id: 6,
          name: "Ruang Karya Co.",
          area: "Klojen",
          address: "Jl. Semeru No.4, Klojen, Malang",
          img: "https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?w=600&q=80",
          lat: -7.9788,
          lng: 112.6313,
          download: 120,
          upload: 80,
          ping: 3,
          colokan: "banyak",
          ac: true,
          kursi: "sofa",
          price: 3,
          priceLabel: "Rp 30rb–60rb",
          hours: "08:00–22:00",
          status: "sepi",
          makananBerat: false,
          tags: ["colokan banyak", "ac", "co-working", "meeting room", "sofa"],
          gmaps: "https://maps.google.com/?q=-7.9788,112.6313",
          verified: "@spaceseekers.id",
          videoUrl: "https://www.instagram.com/reel/example4",
          videoClicks: 331,
        },
      ];

      // Speed log entries
      let speedLog = [
        {
          cafeId: 6,
          cafeName: "Ruang Karya Co.",
          dl: 120,
          ul: 80,
          ping: 3,
          by: "Ahmad B.",
          date: "04 Mar 2025, 09:12",
        },
        {
          cafeId: 4,
          cafeName: "Kedai 97",
          dl: 95,
          ul: 65,
          ping: 5,
          by: "Kevin A.",
          date: "04 Mar 2025, 08:45",
        },
        {
          cafeId: 1,
          cafeName: "Noi Coffee",
          dl: 87,
          ul: 42,
          ping: 8,
          by: "Sinta R.",
          date: "03 Mar 2025, 21:30",
        },
        {
          cafeId: 3,
          cafeName: "Omah Kopi",
          dl: 73,
          ul: 35,
          ping: 15,
          by: "Maya S.",
          date: "03 Mar 2025, 16:00",
        },
        {
          cafeId: 2,
          cafeName: "Filosofi Kopi",
          dl: 52,
          ul: 28,
          ping: 12,
          by: "Budi W.",
          date: "03 Mar 2025, 11:22",
        },
        {
          cafeId: 6,
          cafeName: "Ruang Karya Co.",
          dl: 115,
          ul: 76,
          ping: 4,
          by: "Nadia S.",
          date: "02 Mar 2025, 14:00",
        },
        {
          cafeId: 4,
          cafeName: "Kedai 97",
          dl: 102,
          ul: 68,
          ping: 6,
          by: "Rika F.",
          date: "02 Mar 2025, 11:30",
        },
        {
          cafeId: 1,
          cafeName: "Noi Coffee",
          dl: 91,
          ul: 44,
          ping: 7,
          by: "Arif K.",
          date: "01 Mar 2025, 20:15",
        },
        {
          cafeId: 1,
          cafeName: "Noi Coffee",
          dl: 78,
          ul: 38,
          ping: 11,
          by: "Hendra L.",
          date: "28 Feb 2025, 16:40",
        },
        {
          cafeId: 4,
          cafeName: "Kedai 97",
          dl: 88,
          ul: 55,
          ping: 9,
          by: "Toni W.",
          date: "28 Feb 2025, 10:00",
        },
        {
          cafeId: 5,
          cafeName: "Kopitiam Dinoyo",
          dl: 41,
          ul: 18,
          ping: 22,
          by: "Tono M.",
          date: "01 Mar 2025, 08:30",
        },
        {
          cafeId: 5,
          cafeName: "Kopitiam Dinoyo",
          dl: 38,
          ul: 15,
          ping: 28,
          by: "Lisa K.",
          date: "28 Feb 2025, 09:00",
        },
        {
          cafeId: 2,
          cafeName: "Filosofi Kopi",
          dl: 61,
          ul: 30,
          ping: 10,
          by: "Dina P.",
          date: "01 Mar 2025, 13:45",
        },
        {
          cafeId: 3,
          cafeName: "Omah Kopi",
          dl: 68,
          ul: 32,
          ping: 18,
          by: "Maya S.",
          date: "27 Feb 2025, 15:00",
        },
        {
          cafeId: 6,
          cafeName: "Ruang Karya Co.",
          dl: 125,
          ul: 83,
          ping: 3,
          by: "Ahmad B.",
          date: "27 Feb 2025, 09:00",
        },
      ];

      // ========== SCORING ==========
      function calcScore(c) {
        const sp = Math.min(100, (c.download / 100) * 100);
        const pg = Math.max(0, 100 - c.ping);
        const ck = c.colokan === "banyak" ? 100 : 30;
        const pr = c.price === 1 ? 100 : c.price === 2 ? 70 : 40;
        return Math.round(sp * 0.4 + pg * 0.2 + ck * 0.25 + pr * 0.15);
      }
      function scoreClass(s) {
        return s >= 70 ? "high" : s >= 50 ? "mid" : "low";
      }

      // ========== CLOSED HOURS CHECK ==========
      function isCafeClosedNow(hours) {
        if (!hours) return false;
        const m = hours.match(/(\d{2}):(\d{2})[–\-](\d{2}):(\d{2})/);
        if (!m) return false;
        const now = new Date();
        const cur = now.getHours() * 60 + now.getMinutes();
        const open = parseInt(m[1]) * 60 + parseInt(m[2]);
        let close = parseInt(m[3]) * 60 + parseInt(m[4]);
        if (close < open) close += 24 * 60; // overnight
        return cur < open || cur >= close;
      }

      // ========== TOP 5 WFC RENDER ==========
      function renderTop5() {
        const sorted = [...cafes]
          .map((c) => ({ ...c, score: calcScore(c) }))
          .sort((a, b) => b.score - a.score)
          .slice(0, 5);
        const colors = [
          "var(--accent)",
          "var(--accent3)",
          "var(--tx2)",
          "var(--tx3)",
          "var(--tx3)",
        ];
        const medals = ["🥇", "🥈", "🥉", "4", "5"];
        document.getElementById("top5List").innerHTML = sorted
          .map((c, i) => {
            const isClosed = isCafeClosedNow(c.hours);
            return `<div class="speedlog-item" onclick="goToDetail(${c.id})" style="cursor:pointer;transition:border-color .2s" onmouseenter="this.style.borderColor='var(--accent)'" onmouseleave="this.style.borderColor='var(--brd)'">
      <div class="speedlog-rank" style="color:${colors[i]};font-size:18px">${medals[i]}</div>
      <div class="speedlog-info">
        <div class="speedlog-cafe" style="display:flex;align-items:center;gap:7px">
          ${c.name}
          ${c.verified ? '<span style="font-family:var(--fm);font-size:9px;letter-spacing:.5px;background:rgba(205,255,71,.12);color:var(--accent);border:1px solid rgba(205,255,71,.3);border-radius:100px;padding:2px 7px">✓ verified</span>' : ""}
          ${isClosed ? '<span style="font-family:var(--fm);font-size:9px;letter-spacing:.5px;background:rgba(255,59,92,.12);color:var(--accent2);border:1px solid rgba(255,59,92,.3);border-radius:100px;padding:2px 7px">tutup</span>' : ""}
        </div>
        <div class="speedlog-meta">📍 ${c.area} · 🕐 ${c.hours} · Score: <span style="color:var(--accent)">${c.score}</span></div>
      </div>
      <div class="speedlog-speeds">
        <div class="speedlog-metric"><div class="speedlog-val" style="color:var(--accent)">${c.download}</div><div class="speedlog-unit">DL Mbps</div></div>
        <div class="speedlog-metric"><div class="speedlog-val" style="color:var(--accent3)">${c.upload}</div><div class="speedlog-unit">UL Mbps</div></div>
        <div class="speedlog-metric"><div class="speedlog-val" style="color:${c.ping < 20 ? "var(--accent)" : "var(--accent2)"}">${c.ping}</div><div class="speedlog-unit">ms Ping</div></div>
      </div>
    </div>`;
          })
          .join("");
      }

      // ========== STATE ==========
      let currentView = "grid";
      let activeFilters = {
        area: "all",
        amenity: null,
        wifi: null,
        makanan: null,
      };
      let searchQuery = "";
      let sortMode = "score";

      function getFilteredCafes() {
        let list = cafes
          .filter((c) => {
            // Area filter
            if (fpState.area !== "all" && c.area !== fpState.area) return false;
            // Amenity toggles (fpState)
            if (fpState.ac && !c.ac) return false;
            if (fpState.colokan && c.colokan !== "banyak") return false;
            if (fpState.sofa && c.kursi !== "sofa") return false;
            if (fpState.makanan && !c.makananBerat) return false;
            if (fpState.verified && !c.verified) return false;
            // WiFi speed range
            if (c.download < fpState.dlMin || c.download > fpState.dlMax)
              return false;
            // Search
            if (searchQuery) {
              const q = searchQuery.toLowerCase();
              if (
                !c.name.toLowerCase().includes(q) &&
                !c.area.toLowerCase().includes(q) &&
                !c.tags.join(" ").toLowerCase().includes(q)
              )
                return false;
            }
            return true;
          })
          .map((c) => ({ ...c, score: calcScore(c) }));
        if (sortMode === "score") list.sort((a, b) => b.score - a.score);
        else if (sortMode === "speed")
          list.sort((a, b) => b.download - a.download);
        else if (sortMode === "price") list.sort((a, b) => a.price - b.price);
        else if (sortMode === "ping") list.sort((a, b) => a.ping - b.ping);
        return list;
      }

      function renderCafes() {
        const list = getFilteredCafes();
        const grid = document.getElementById("cafeGrid");
        const empty = document.getElementById("emptyState");
        document.getElementById("cafeCount").textContent = list.length;

        // Update closed overlays and scores dynamically
        cafes.forEach((cafe) => {
          const card = grid.querySelector('[data-id="' + cafe.id + '"]');
          if (!card) return;
          const cardImg = card.querySelector(".card-img");
          const oldOv = cardImg.querySelector(".card-closed-overlay");
          if (oldOv) oldOv.remove();
          if (isCafeClosedNow(cafe.hours)) {
            const ov = document.createElement("div");
            ov.className = "card-closed-overlay";
            ov.innerHTML =
              '<div class="card-closed-badge">TUTUP</div><div class="card-closed-time">' +
              cafe.hours +
              "</div>";
            cardImg.appendChild(ov);
          }
          const score = cafe.score || calcScore(cafe);
          const sc = scoreClass(score);
          const scoreBadge = card.querySelector("#score-" + cafe.id);
          if (scoreBadge) {
            scoreBadge.className = "card-score score-" + sc;
            scoreBadge.innerHTML =
              score + '<span class="card-score-label">SCORE</span>';
          }
        });

        if (list.length === 0) {
          grid
            .querySelectorAll(".cafe-card")
            .forEach((c) => (c.style.display = "none"));
          empty.style.display = "block";
          return;
        }
        empty.style.display = "none";

        const idSet = new Set(list.map((c) => c.id));
        grid.querySelectorAll(".cafe-card").forEach((c) => {
          c.style.display = idSet.has(parseInt(c.dataset.id)) ? "" : "none";
        });

        // Reorder + update rank numbers
        list.forEach((cafe, idx) => {
          const card = grid.querySelector('[data-id="' + cafe.id + '"]');
          if (card) {
            const rankEl = card.querySelector(".card-rank");
            if (rankEl) rankEl.textContent = "#" + (idx + 1);
            grid.appendChild(card);
          }
        });
      }

      // ========== MAP ==========
      let leafletMap = null,
        leafletMarkers = [];
      function renderMap() {
        const list = getFilteredCafes();
        if (!leafletMap) {
          leafletMap = L.map("leafletMap", {
            zoomControl: true,
            scrollWheelZoom: true,
          }).setView([-7.9538, 112.6146], 13);
          L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "© OpenStreetMap",
            maxZoom: 19,
          }).addTo(leafletMap);
        } else {
          leafletMarkers.forEach((m) => m.remove());
          leafletMarkers = [];
        }
        setTimeout(() => leafletMap.invalidateSize(), 150);
        list.forEach((cafe) => {
          if (!cafe.lat || !cafe.lng) return;
          const sc = scoreClass(cafe.score || calcScore(cafe));
          const clr =
            sc === "high" ? "#CDFF47" : sc === "mid" ? "#00E5FF" : "#FF3B5C";
          const initials = cafe.name
            .split(" ")
            .map((w) => w[0])
            .join("")
            .substring(0, 2);
          const icon = L.divIcon({
            className: "",
            html:
              "<div style='width:38px;height:38px;background:" +
              clr +
              ";border-radius:50% 50% 50% 0;transform:rotate(-45deg);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,.4)'><span style='transform:rotate(45deg);font-family:Bebas Neue,sans-serif;font-size:11px;color:#000;font-weight:700;letter-spacing:.5px'>" +
              initials +
              "</span></div>",
            iconSize: [38, 38],
            iconAnchor: [19, 38],
            popupAnchor: [0, -42],
          });
          const score = cafe.score || calcScore(cafe);
          const m = L.marker([cafe.lat, cafe.lng], { icon })
            .addTo(leafletMap)
            .bindPopup(
              `<div style="min-width:180px;font-family:sans-serif">
        <div style="font-size:18px;font-weight:700;margin-bottom:4px">${cafe.name}</div>
        <div style="font-size:11px;color:#888;margin-bottom:8px">📍 ${cafe.area} · ${cafe.hours}</div>
        <div style="display:flex;gap:10px;align-items:center;margin-bottom:8px">
          <div><span style="font-size:28px;font-weight:700;color:${clr}">${score}</span><div style="font-size:9px;color:#888">SCORE</div></div>
          <div style="font-size:11px;color:#aaa;line-height:1.8">↓ ${cafe.download} Mbps<br>↑ ${cafe.upload} Mbps<br>⏱ ${cafe.ping} ms</div>
        </div>
        <button onclick="closeMapOpenModal(${cafe.id})" style="display:block;width:100%;font-size:11px;background:${clr};color:#000;border:none;border-radius:6px;padding:8px;cursor:pointer;font-weight:700;letter-spacing:1px">LIHAT DETAIL →</button>
      </div>`,
              { maxWidth: 220 },
            );
          leafletMarkers.push(m);
        });
      }

      function closeMapOpenModal(id) {
        leafletMarkers.forEach((m) => m.closePopup());
        setTimeout(() => goToDetail(id), 100);
      }

      // ========== USER LOCATION ==========
      let userLocMarker = null,
        userLocCircle = null;

      function goToUserLocation() {
        const btn = document.getElementById("locBtn");
        const status = document.getElementById("locStatus");

        if (!navigator.geolocation) {
          status.textContent = "⚠️ Browser tidak support geolocation";
          status.className = "map-loc-status show error";
          return;
        }

        // Make sure map is init
        if (!leafletMap) renderMap();

        btn.classList.add("loading");
        btn.querySelector("span").textContent = "Mencari lokasi...";
        status.textContent = "📡 Mengakses GPS...";
        status.className = "map-loc-status show";

        navigator.geolocation.getCurrentPosition(
          function (pos) {
            const lat = pos.coords.latitude;
            const lng = pos.coords.longitude;
            const acc = Math.round(pos.coords.accuracy);

            // Remove old marker
            if (userLocMarker) {
              userLocMarker.remove();
              userLocMarker = null;
            }
            if (userLocCircle) {
              userLocCircle.remove();
              userLocCircle = null;
            }

            // Accuracy circle
            userLocCircle = L.circle([lat, lng], {
              radius: acc,
              color: "#00E5FF",
              fillColor: "#00E5FF",
              fillOpacity: 0.08,
              weight: 1.5,
              dashArray: "4 4",
              opacity: 0.5,
            }).addTo(leafletMap);

            // Custom pulse marker
            const userIcon = L.divIcon({
              className: "",
              html: `<div class="user-loc-marker">
              <div class="user-loc-ring2"></div>
              <div class="user-loc-ring"></div>
              <div class="user-loc-dot"></div>
            </div>`,
              iconSize: [20, 20],
              iconAnchor: [10, 10],
              popupAnchor: [0, -14],
            });

            userLocMarker = L.marker([lat, lng], {
              icon: userIcon,
              zIndexOffset: 1000,
            })
              .addTo(leafletMap)
              .bindPopup(
                `
              <div style="font-family:sans-serif;min-width:160px">
                <div style="font-weight:700;font-size:13px;margin-bottom:4px">📍 Kamu di sini</div>
                <div style="font-size:11px;color:#888;line-height:1.6">
                  ${lat.toFixed(5)}, ${lng.toFixed(5)}<br>
                  Akurasi: ±${acc}m
                </div>
              </div>`,
                { maxWidth: 200 },
              );

            // Fly to user
            leafletMap.flyTo([lat, lng], 15, { animate: true, duration: 1.2 });

            // Update button state
            btn.classList.remove("loading");
            btn.classList.add("found");
            btn.querySelector("span").textContent = "Lokasi Ditemukan";

            status.textContent = `✓ Akurasi ±${acc}m`;
            status.className = "map-loc-status show success";

            // Reset button after 3s
            setTimeout(() => {
              btn.classList.remove("found");
              btn.querySelector("span").textContent = "Lokasi Saya";
              status.className = "map-loc-status";
            }, 3000);
          },
          function (err) {
            btn.classList.remove("loading");
            btn.querySelector("span").textContent = "Lokasi Saya";

            const msgs = {
              1: "🔒 Izin lokasi ditolak",
              2: "📡 Sinyal GPS lemah",
              3: "⏱️ Timeout, coba lagi",
            };
            status.textContent = msgs[err.code] || "⚠️ Gagal ambil lokasi";
            status.className = "map-loc-status show error";
            setTimeout(() => {
              status.className = "map-loc-status";
            }, 4000);
          },
          { enableHighAccuracy: true, timeout: 10000, maximumAge: 30000 },
        );
      }

      // ========== VIEW TOGGLE ==========
      function setView(mode, btn) {
        currentView = mode;
        document
          .querySelectorAll(".view-btn")
          .forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        const grid = document.getElementById("cafeGrid");
        const mapView = document.getElementById("mapView");
        if (mode === "map") {
          grid.style.display = "none";
          document.getElementById("emptyState").style.display = "none";
          mapView.classList.add("active");
          renderMap();
        } else {
          grid.style.display = "grid";
          mapView.classList.remove("active");
          grid.classList.toggle("list-view", mode === "list");
          renderCafes();
        }
      }

      // ========== UNIFIED FILTER PANEL ==========
      let fpState = {
        area: "all",
        ac: false,
        colokan: false,
        sofa: false,
        makanan: false,
        verified: false,
        dlMin: 0,
        dlMax: 300,
      };
      // Staged state while panel is open (applied only on TERAPKAN)
      let fpDraft = { ...fpState };

      function isMobile() {
        return window.innerWidth <= 768;
      }

      function toggleFilterPanel() {
        if (isMobile()) {
          openFilterSheet();
        } else {
          const pop = document.getElementById("filterPopover");
          const btn = document.getElementById("filterTrigger");
          const isOpen = pop.classList.contains("open");
          if (isOpen) {
            closeFilterPanel();
          } else {
            // Position popover below the trigger button
            const rect = btn.getBoundingClientRect();
            let left = rect.left;
            const popWidth = Math.min(400, window.innerWidth - 32);
            if (left + popWidth > window.innerWidth - 16)
              left = window.innerWidth - popWidth - 16;
            if (left < 16) left = 16;
            pop.style.top = rect.bottom + 8 + "px";
            pop.style.left = left + "px";
            pop.classList.add("open");
            btn.classList.add("active");
            fpDraft = { ...fpState };
            syncPanelUI();
          }
        }
      }

      function openFilterSheet() {
        const ov = document.getElementById("filterSheetOverlay");
        ov.classList.add("open");
        document.body.style.overflow = "hidden";
        fpDraft = { ...fpState };
        syncPanelUI();
      }

      function closeFilterSheet(e) {
        if (e && e.target !== document.getElementById("filterSheetOverlay"))
          return;
        closeFilterPanel();
      }

      function closeFilterPanel() {
        document.getElementById("filterPopover").classList.remove("open");
        document.getElementById("filterTrigger").classList.remove("active");
        document.getElementById("filterSheetOverlay").classList.remove("open");
        document.body.style.overflow = "";
      }

      // Close popover on outside click
      document.addEventListener("click", function (e) {
        const pop = document.getElementById("filterPopover");
        const trigger = document.getElementById("filterTrigger");
        if (pop.classList.contains("open") && !isMobile()) {
          if (!pop.contains(e.target) && !trigger.contains(e.target))
            closeFilterPanel();
        }
      });

      function switchFpTab(id, btn) {
        const container = btn.closest(".filter-sheet,.filter-popover");
        container
          .querySelectorAll(".fp-tab")
          .forEach((t) => t.classList.remove("active"));
        container
          .querySelectorAll(".fp-panel")
          .forEach((p) => p.classList.remove("active"));
        btn.classList.add("active");
        document.getElementById("fp-" + id).classList.add("active");
      }

      // Area
      function fpSetArea(val, btn) {
        fpDraft.area = val;
        const container = btn.closest(".filter-popover,.filter-sheet");
        container.querySelectorAll("[data-ftype]").forEach((b) => {
          const same = b.closest(".filter-popover,.filter-sheet") === container;
          if (same) b.classList.toggle("active", b.dataset.fval === val);
        });
      }

      // Amenity toggles
      function fpToggleAmenity(key) {
        fpDraft[key] = !fpDraft[key];
        // sync both desktop and mobile toggles
        ["tog-" + key, "tog-" + key + "-m"].forEach((id) => {
          const el = document.getElementById(id);
          if (el) el.classList.toggle("on", fpDraft[key]);
        });
      }

      // WiFi range
      function fpUpdateDlMin(v) {
        fpDraft.dlMin = +v;
        if (fpDraft.dlMin > fpDraft.dlMax) fpDraft.dlMax = fpDraft.dlMin;
        syncRangeUI();
      }
      function fpUpdateDlMax(v) {
        fpDraft.dlMax = +v;
        if (fpDraft.dlMax < fpDraft.dlMin) fpDraft.dlMin = fpDraft.dlMax;
        syncRangeUI();
      }
      function fpSyncNum(type, v) {
        if (type === "min") {
          fpDraft.dlMin = Math.min(300, Math.max(0, +v || 0));
          if (fpDraft.dlMin > fpDraft.dlMax) fpDraft.dlMax = fpDraft.dlMin;
        } else {
          fpDraft.dlMax = Math.min(300, Math.max(0, +v || 300));
          if (fpDraft.dlMax < fpDraft.dlMin) fpDraft.dlMin = fpDraft.dlMax;
        }
        syncRangeUI();
      }
      function fpSetPreset(min, max) {
        fpDraft.dlMin = min;
        fpDraft.dlMax = max;
        syncRangeUI();
        // highlight matching preset
        document.querySelectorAll(".fp-preset").forEach((p) => {
          const txt = p.textContent;
          const match =
            (min === 0 && max === 39 && txt.includes("<40")) ||
            (min === 40 && max === 79 && txt.includes("40")) ||
            (min === 80 &&
              max === 300 &&
              txt.includes("80+") &&
              !txt.includes("100")) ||
            (min === 100 && txt.includes("100"));
          p.classList.toggle("active", match);
        });
      }
      function syncRangeUI() {
        ["", "- m"].forEach((sfx) => {
          const s = sfx.replace(" ", "").replace("-", "");
          const minEl = document.getElementById(
            "dlMinVal" + sfx.replace(" ", ""),
          );
          const maxEl = document.getElementById(
            "dlMaxVal" + sfx.replace(" ", ""),
          );
          const minSl = document.getElementById(
            "dlMinSlider" + sfx.replace(" ", ""),
          );
          const maxSl = document.getElementById(
            "dlMaxSlider" + sfx.replace(" ", ""),
          );
          const minN = document.getElementById(
            "dlMinNum" + sfx.replace(" ", ""),
          );
          const maxN = document.getElementById(
            "dlMaxNum" + sfx.replace(" ", ""),
          );
          if (minEl) minEl.textContent = fpDraft.dlMin;
          if (maxEl) maxEl.textContent = fpDraft.dlMax;
          if (minSl) minSl.value = fpDraft.dlMin;
          if (maxSl) maxSl.value = fpDraft.dlMax;
          if (minN) minN.value = fpDraft.dlMin || "";
          if (maxN) maxN.value = fpDraft.dlMax === 300 ? "" : fpDraft.dlMax;
        });
      }

      function syncPanelUI() {
        // Area chips
        document.querySelectorAll("[data-ftype]").forEach((b) => {
          b.classList.toggle("active", b.dataset.fval === fpDraft.area);
        });
        // Toggles
        ["ac", "colokan", "sofa", "makanan", "verified"].forEach((k) => {
          ["tog-" + k, "tog-" + k + "-m"].forEach((id) => {
            const el = document.getElementById(id);
            if (el) el.classList.toggle("on", fpDraft[k]);
          });
        });
        // Range
        syncRangeUI();
      }

      function fpApply() {
        fpState = { ...fpDraft };
        // sync to activeFilters for getFilteredCafes
        activeFilters.area = fpState.area;
        activeFilters.amenity = null; // we now use fpState directly
        activeFilters.wifi = null;
        activeFilters.makanan = null;
        renderCafes();
        if (currentView === "map") renderMap();
        updateFilterPills();
        closeFilterPanel();
      }

      function fpReset() {
        fpDraft = {
          area: "all",
          ac: false,
          colokan: false,
          sofa: false,
          makanan: false,
          verified: false,
          dlMin: 0,
          dlMax: 300,
        };
        fpState = { ...fpDraft };
        activeFilters = {
          area: "all",
          amenity: null,
          wifi: null,
          makanan: null,
        };
        syncPanelUI();
        renderCafes();
        if (currentView === "map") renderMap();
        updateFilterPills();
        closeFilterPanel();
      }

      function updateFilterPills() {
        const pills = document.getElementById("filterActivePills");
        const clearBtn = document.getElementById("filterClearAll");
        const badge = document.getElementById("filterBadge");
        const trigger = document.getElementById("filterTrigger");
        let count = 0;
        let html = "";
        if (fpState.area !== "all") {
          count++;
          html +=
            '<div class="fap">📍 ' +
            fpState.area +
            '<span class="fap-x" onclick="fpRemovePill(\'area\')">✕</span></div>';
        }
        ["ac", "colokan", "sofa", "makanan", "verified"].forEach((k) => {
          if (fpState[k]) {
            count++;
            const labels = {
              ac: "AC",
              colokan: "Colokan",
              sofa: "Sofa",
              makanan: "Makanan",
              verified: "Verified",
            };
            html +=
              '<div class="fap">' +
              labels[k] +
              '<span class="fap-x" onclick="fpRemovePill(\'' +
              k +
              "')\">✕</span></div>";
          }
        });
        if (fpState.dlMin > 0 || fpState.dlMax < 300) {
          count++;
          html +=
            '<div class="fap">WiFi ' +
            fpState.dlMin +
            "–" +
            fpState.dlMax +
            ' Mbps<span class="fap-x" onclick="fpRemovePill(\'dl\')">✕</span></div>';
        }
        pills.innerHTML = html;
        badge.textContent = count;
        badge.classList.toggle("show", count > 0);
        trigger.classList.toggle("has-filters", count > 0);
        clearBtn.style.display = count > 0 ? "block" : "none";
      }

      function fpRemovePill(key) {
        if (key === "area") {
          fpState.area = "all";
          activeFilters.area = "all";
        } else if (key === "dl") {
          fpState.dlMin = 0;
          fpState.dlMax = 300;
        } else {
          fpState[key] = false;
        }
        fpDraft = { ...fpState };
        renderCafes();
        if (currentView === "map") renderMap();
        updateFilterPills();
      }

      // Patch getFilteredCafes to use fpState
      function filterBy(type, val, btn) {} // legacy stub — do nothing

      // Close on ESC
      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeFilterPanel();
      });
      function searchCafes(v) {
        searchQuery = v;
        renderCafes();
      }
      function sortCafes(v) {
        sortMode = v;
        renderCafes();
      }

      // ========== VIDEO CLICK TRACKING ==========
      function trackVideoClick(cafeId) {
        const c = cafes.find((x) => x.id === cafeId);
        if (c) c.videoClicks = (c.videoClicks || 0) + 1;
      }

      // ========== CAFE LOG BUILDER ==========

      // ========== NAVIGATION ==========
      function goToDetail(id) {
        window.location.href = "cafe-detail.html?id=" + id;
      }

      // ========== SPEEDTEST FORM ==========
      let selectedStatus = null;
      function openSpeedtestForm() {
        document.getElementById("formOverlay").classList.add("active");
        document.body.style.overflow = "hidden";
      }
      function closeSpeedtestForm() {
        document.getElementById("formOverlay").classList.remove("active");
        document.body.style.overflow = "";
      }
      function toggleNewCafe(v) {
        document.getElementById("newCafeFields").style.display =
          v === "0" ? "block" : "none";
      }
      function selectStatus(v) {
        selectedStatus = v;
        document.getElementById("opt-sepi").className =
          "form-radio-opt" + (v === "sepi" ? " sel-sepi" : "");
        document.getElementById("opt-ramai").className =
          "form-radio-opt" + (v === "ramai" ? " sel-ramai" : "");
      }
      function prevPhoto(inp) {
        if (inp.files && inp.files[0]) {
          const r = new FileReader();
          r.onload = (e) => {
            document.getElementById("fPrevImg").src = e.target.result;
            document.getElementById("fPreview").style.display = "block";
          };
          r.readAsDataURL(inp.files[0]);
        }
      }
      function submitSpeedtest() {
        const cv = document.getElementById("sf-cafe").value;
        const name = document.getElementById("sf-name").value.trim();
        if (!cv) {
          showToast("⚠️ Pilih kafe dulu ya!", "info");
          return;
        }
        if (!selectedStatus) {
          showToast("⚠️ Tentukan kondisi kafe!", "info");
          return;
        }
        const dl = parseInt(document.getElementById("sf-dl").value);
        const ul = parseInt(document.getElementById("sf-ul").value);
        const ping = parseInt(document.getElementById("sf-ping").value);
        let cafeName =
          cafes.find((c) => c.id == cv)?.name ||
          document.getElementById("sf-newcafe").value ||
          "Kafe Baru";
        // Add to speed log
        const now = new Date();
        const dateStr =
          now.getDate().toString().padStart(2, " ") +
          " " +
          [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "Mei",
            "Jun",
            "Jul",
            "Ags",
            "Sep",
            "Okt",
            "Nov",
            "Des",
          ][now.getMonth()] +
          " " +
          now.getFullYear() +
          ", " +
          now.getHours().toString().padStart(2, "0") +
          ":" +
          now.getMinutes().toString().padStart(2, "0");
        speedLog.unshift({
          cafeId: parseInt(cv) || 0,
          cafeName,
          dl,
          ul,
          ping,
          by: name || "Anonymous",
          date: dateStr,
        });
        speedLog = speedLog.slice(0, 5);
        closeSpeedtestForm();
        showToast("✅ Data terkirim! Makasih sudah kontribusi 🙏", "sepi");
        // Reset
        document.getElementById("sf-cafe").value = "";
        document.getElementById("newCafeFields").style.display = "none";
        document.getElementById("sf-dl").value = 50;
        document.getElementById("sf-dl-val").textContent = "50 Mbps";
        document.getElementById("sf-ul").value = 25;
        document.getElementById("sf-ul-val").textContent = "25 Mbps";
        document.getElementById("sf-ping").value = 20;
        document.getElementById("sf-ping-val").textContent = "20 ms";
        document.getElementById("sf-note").value = "";
        document.getElementById("sf-name").value = "";
        document.getElementById("fPreview").style.display = "none";
        selectedStatus = null;
        document.getElementById("opt-sepi").className = "form-radio-opt";
        document.getElementById("opt-ramai").className = "form-radio-opt";
      }

      // ========== TOAST ==========
      function showToast(msg, type) {
        const icons = { ramai: "🔴", sepi: "🟢", info: "ℹ️" };
        const c = document.getElementById("toastContainer");
        const t = document.createElement("div");
        t.className = "toast";
        t.innerHTML = `<span>${icons[type] || "ℹ️"}</span><span>${msg}</span>`;
        c.appendChild(t);
        setTimeout(() => t.classList.add("show"), 10);
        setTimeout(() => {
          t.classList.remove("show");
          setTimeout(() => t.remove(), 400);
        }, 3000);
      }

      // ========== THEME ==========
      function toggleTheme() {
        const h = document.documentElement,
          b = document.getElementById("themeBtn");
        if (h.getAttribute("data-theme") === "dark") {
          h.setAttribute("data-theme", "light");
          b.textContent = "☀️";
        } else {
          h.setAttribute("data-theme", "dark");
          b.textContent = "🌙";
        }
        if (leafletMap) {
          document.querySelector(".leaflet-tile-pane").style.filter =
            h.getAttribute("data-theme") === "dark"
              ? "saturate(.7) brightness(.92)"
              : "saturate(.8) brightness(1.05)";
        }
      }

      // ========== MARQUEE ==========
      function initMarquee() {
        const items = [
          "KEDAI 97 — FASTEST WIFI",
          "NOI COFFEE — BEST VIBES",
          "RUANG KARYA — CO-WORKING",
          "OMAH KOPI — MOUNTAIN VIEW",
          "FILOSOFI KOPI — AFFORDABLE",
          "KOPITIAM DINOYO — NEAR CAMPUS",
          "MALANG CAFE FINDER",
          "WIFI TESTED & VERIFIED",
        ];
        const t = document.getElementById("marqueeTrack");
        t.innerHTML =
          [...items, ...items]
            .map((i) => `<span class="marquee-item">${i}</span>`)
            .join("") +
          [...items, ...items]
            .map((i) => `<span class="marquee-item">${i}</span>`)
            .join("");
      }

      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
          closeSpeedtestForm();
        }
      });

      initMarquee();
      renderTop5();
      renderCafes();
      navInit();
    </script>
  </body>
</html>
