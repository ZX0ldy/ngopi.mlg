<!doctype html>
<html lang="id" data-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang — NGOPI.MLG</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Grotesk:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <style>
      *,
      *::before,
      *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      :root {
        --a: #cdff47;
        --a2: #ff3b5c;
        --a3: #00e5ff;
        --a4: #ff9f47;
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
        --sh: rgba(0, 0, 0, 0.6);
        --a: #cdff47;
        --a2: #ff3b5c;
        --a3: #00e5ff;
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
        --sh: rgba(0, 0, 0, 0.1);
        --a: #6bbf00;
        --a2: #e02040;
        --a3: #007bb5;
      }
      html {
        scroll-behavior: smooth;
      }
      body {
        font-family: var(--fb);
        background: var(--bg);
        color: var(--tx);
        min-height: 100vh;
        transition:
          background var(--tr),
          color var(--tr);
      }
      ::-webkit-scrollbar {
        width: 5px;
      }
      ::-webkit-scrollbar-thumb {
        background: var(--a);
        border-radius: 3px;
      }

      nav {
        position: sticky;
        top: 0;
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 28px;
        background: rgba(10, 10, 11, 0.92);
        border-bottom: 1px solid var(--brd);
        backdrop-filter: blur(20px);
      }
      [data-theme="light"] nav {
        background: rgba(250, 249, 246, 0.92);
      }
      .nav-logo {
        font-family: var(--fd);
        font-size: 24px;
        letter-spacing: 2px;
        color: var(--tx);
        text-decoration: none;
      }
      .nav-logo span {
        color: var(--a);
      }
      .nav-right {
        display: flex;
        align-items: center;
        gap: 10px;
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
        color: var(--a);
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
        background: var(--a);
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
        background: var(--a);
        color: #000;
        border-color: var(--a);
        transform: translateY(-1px);
      }

      .nav-login-btn {
        font-family: var(--fm);
        font-size: 11px;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: var(--a);
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
        border-color: var(--a);
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
        color: var(--a);
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
        color: var(--a2);
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
        background: var(--a);
        border-color: var(--a);
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

      .nbtn {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx2);
        text-decoration: none;
        border: 1px solid var(--brd);
        border-radius: 100px;
        padding: 7px 16px;
        transition: all var(--tr);
        background: transparent;
        cursor: pointer;
        letter-spacing: 0.5px;
      }
      .nbtn:hover,
      .nbtn.active {
        border-color: var(--a);
        color: var(--a);
      }
      .theme-btn {
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
      }
      .theme-btn:hover {
        background: var(--a);
        transform: rotate(20deg);
      }

      /* HERO */
      .hero {
        padding: 100px 40px 60px;
        max-width: 1100px;
        margin: 0 auto;
        position: relative;
      }
      .hero-eyebrow {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 4px;
        color: var(--a);
        text-transform: uppercase;
        margin-bottom: 16px;
      }
      .hero-title {
        font-family: var(--fd);
        font-size: clamp(60px, 9vw, 120px);
        letter-spacing: 1px;
        line-height: 0.88;
        margin-bottom: 24px;
      }
      .hero-title em {
        color: var(--a2);
        font-style: normal;
      }
      .hero-sub {
        font-family: var(--fm);
        font-size: 13px;
        color: var(--tx2);
        letter-spacing: 0.5px;
        line-height: 1.8;
        max-width: 560px;
        margin-bottom: 40px;
      }
      .hero-cta {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
      }
      .btn-primary {
        font-family: var(--fd);
        font-size: 18px;
        letter-spacing: 2px;
        background: var(--a);
        color: #000;
        border: none;
        border-radius: var(--rs);
        padding: 14px 28px;
        cursor: pointer;
        transition: all var(--tr);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
      }
      .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(205, 255, 71, 0.35);
      }
      .btn-secondary {
        font-family: var(--fd);
        font-size: 18px;
        letter-spacing: 2px;
        background: transparent;
        color: var(--tx);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 14px 28px;
        cursor: pointer;
        transition: all var(--tr);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
      }
      .btn-secondary:hover {
        border-color: var(--a);
        color: var(--a);
      }

      /* MARQUEE */
      .marquee {
        border-top: 1px solid var(--brd);
        border-bottom: 1px solid var(--brd);
        padding: 10px 0;
        overflow: hidden;
        white-space: nowrap;
        background: rgba(205, 255, 71, 0.03);
      }
      .marquee-track {
        display: inline-flex;
        gap: 0;
        animation: marquee 28s linear infinite;
      }
      .marquee-item {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 3px;
        color: var(--a);
        padding: 0 24px;
        text-transform: uppercase;
      }
      .marquee-dot {
        color: var(--tx3);
      }
      @keyframes marquee {
        from {
          transform: translateX(0);
        }
        to {
          transform: translateX(-50%);
        }
      }

      /* STATS STRIP */
      .stats-strip {
        max-width: 1100px;
        margin: 60px auto;
        padding: 0 40px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 2px;
      }
      @media (max-width: 700px) {
        .stats-strip {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      .stat-card {
        background: var(--bg2);
        border: 1px solid var(--brd);
        padding: 28px 24px;
        position: relative;
        overflow: hidden;
      }
      .stat-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
      }
      .stat-card:nth-child(1)::before {
        background: var(--a);
      }
      .stat-card:nth-child(2)::before {
        background: var(--a2);
      }
      .stat-card:nth-child(3)::before {
        background: var(--a3);
      }
      .stat-card:nth-child(4)::before {
        background: var(--a4);
      }
      .stat-num {
        font-family: var(--fd);
        font-size: 52px;
        line-height: 1;
        margin-bottom: 4px;
      }
      .stat-card:nth-child(1) .stat-num {
        color: var(--a);
      }
      .stat-card:nth-child(2) .stat-num {
        color: var(--a2);
      }
      .stat-card:nth-child(3) .stat-num {
        color: var(--a3);
      }
      .stat-card:nth-child(4) .stat-num {
        color: var(--a4);
      }
      .stat-lbl {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 2px;
        color: var(--tx3);
        text-transform: uppercase;
      }
      .stat-sub {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx2);
        margin-top: 6px;
      }

      /* SECTION */
      .content-wrap {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 40px 80px;
      }
      @media (max-width: 600px) {
        .content-wrap {
          padding: 0 20px 60px;
        }
      }
      .section {
        margin-bottom: 80px;
      }
      .sec-eyebrow {
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 4px;
        color: var(--a);
        text-transform: uppercase;
        margin-bottom: 12px;
      }
      .sec-title {
        font-family: var(--fd);
        font-size: clamp(36px, 5vw, 60px);
        letter-spacing: 1px;
        line-height: 0.92;
        margin-bottom: 16px;
      }
      .sec-body {
        font-family: var(--fm);
        font-size: 12px;
        color: var(--tx2);
        letter-spacing: 0.3px;
        line-height: 1.8;
        max-width: 600px;
      }

      /* HOW IT WORKS */
      .steps-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 16px;
        margin-top: 32px;
      }
      .step-card {
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: var(--r);
        padding: 28px 24px;
        position: relative;
        overflow: hidden;
        transition:
          border-color var(--tr),
          transform var(--tr);
      }
      .step-card:hover {
        border-color: var(--a);
        transform: translateY(-4px);
      }
      .step-num {
        font-family: var(--fd);
        font-size: 80px;
        color: rgba(205, 255, 71, 0.07);
        position: absolute;
        top: -10px;
        right: 16px;
        line-height: 1;
        pointer-events: none;
        user-select: none;
      }
      .step-icon {
        font-size: 28px;
        margin-bottom: 14px;
      }
      .step-title {
        font-family: var(--fd);
        font-size: 22px;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
      }
      .step-desc {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 0.3px;
        line-height: 1.7;
      }

      /* SCORING */
      .scoring-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 14px;
        margin-top: 32px;
      }
      @media (max-width: 600px) {
        .scoring-grid {
          grid-template-columns: 1fr;
        }
      }
      .scoring-card {
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: var(--r);
        padding: 22px 24px;
      }
      .sc-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px;
      }
      .sc-icon {
        font-size: 24px;
      }
      .sc-weight {
        font-family: var(--fd);
        font-size: 36px;
        line-height: 1;
      }
      .sc-title {
        font-family: var(--fd);
        font-size: 20px;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
      }
      .sc-desc {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 0.3px;
        line-height: 1.6;
      }
      .sc-bar {
        height: 6px;
        background: var(--bg4);
        border-radius: 3px;
        margin-top: 14px;
        overflow: hidden;
      }
      .sc-bar-fill {
        height: 100%;
        border-radius: 3px;
      }

      /* COLLAB */
      .collab-banner {
        background: linear-gradient(
          135deg,
          rgba(255, 59, 92, 0.08),
          rgba(255, 59, 92, 0.03)
        );
        border: 1px solid rgba(255, 59, 92, 0.2);
        border-radius: var(--r);
        padding: 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
        margin-top: 32px;
      }
      .cb-left {
      }
      .cb-title {
        font-family: var(--fd);
        font-size: 36px;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
      }
      .cb-title em {
        color: var(--a2);
        font-style: normal;
      }
      .cb-desc {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx2);
        letter-spacing: 0.3px;
        line-height: 1.7;
        max-width: 400px;
      }
      .cb-btn {
        font-family: var(--fd);
        font-size: 18px;
        letter-spacing: 2px;
        background: var(--a2);
        color: #fff;
        border: none;
        border-radius: var(--rs);
        padding: 14px 28px;
        cursor: pointer;
        transition: all var(--tr);
        white-space: nowrap;
        text-decoration: none;
        display: inline-block;
      }
      .cb-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(255, 59, 92, 0.4);
      }

      /* TEAM */
      .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 14px;
        margin-top: 32px;
      }
      .team-card {
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: var(--r);
        padding: 24px;
        text-align: center;
        transition: border-color var(--tr);
      }
      .team-card:hover {
        border-color: var(--a);
      }
      .team-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: var(--bg3);
        border: 2px solid var(--brd);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin: 0 auto 14px;
        transition: border-color var(--tr);
      }
      .team-card:hover .team-avatar {
        border-color: var(--a);
      }
      .team-name {
        font-family: var(--fd);
        font-size: 18px;
        letter-spacing: 0.3px;
        margin-bottom: 4px;
      }
      .team-role {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        letter-spacing: 1px;
        text-transform: uppercase;
      }

      /* FAQ */
      .faq-list {
        display: flex;
        flex-direction: column;
        gap: 2px;
        margin-top: 32px;
      }
      .faq-item {
        background: var(--bg2);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        overflow: hidden;
      }
      .faq-q {
        padding: 18px 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        font-weight: 500;
        font-size: 15px;
        transition: background var(--tr);
      }
      .faq-q:hover {
        background: var(--bg3);
      }
      .faq-arrow {
        font-family: var(--fm);
        font-size: 14px;
        color: var(--a);
        transition: transform var(--tr);
        flex-shrink: 0;
      }
      .faq-a {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      }
      .faq-a-inner {
        padding: 0 20px 18px;
        font-family: var(--fm);
        font-size: 12px;
        color: var(--tx2);
        letter-spacing: 0.3px;
        line-height: 1.8;
      }
      .faq-item.open .faq-arrow {
        transform: rotate(45deg);
      }
      .faq-item.open .faq-a {
        max-height: 200px;
      }

      /* FOOTER */
      footer {
        border-top: 1px solid var(--brd);
        padding: 40px;
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
      }
      .footer-logo {
        font-family: var(--fd);
        font-size: 28px;
        letter-spacing: 2px;
      }
      .footer-logo span {
        color: var(--a);
      }
      .footer-links {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
      }
      .footer-links a {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        text-decoration: none;
        letter-spacing: 0.5px;
        transition: color var(--tr);
      }
      .footer-links a:hover {
        color: var(--a);
      }
      .footer-copy {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        letter-spacing: 0.5px;
      }
    </style>
  </head>
  <body>
    <nav>
      <a href="{{ route('ngopi') }}" class="nav-logo">NGOPI<span>.</span>MLG</a>
      <!-- CENTER: NAV LINKS -->
      <div class="nav-links">
        <a href="{{ route('ngopi') }}" class="nav-link" id="navCafe">Cafe</a>
        <a href="{{ route('about') }}" class="nav-link active" id="navDetail">Detail</a>
        <!-- Login state: show Profile, else show Login -->
        <a
          href="{{ route('profile') }}"
          class="nav-link"
          >Profile</a
        >
      </div>

      <div class="nav-actions">
        <button class="nav-pill" onclick="openSpeedtestForm()">
          ⚡ Submit
        </button>
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
            <a href="profile.html" class="nav-dropdown-item"
              >👤 &nbsp;My Profile</a
            >
            <a href="#" class="nav-dropdown-item">📋 &nbsp;Submissions Saya</a>
            <a href="#" class="nav-dropdown-item">🔖 &nbsp;Kafe Tersimpan</a>
            <div class="nav-dropdown-divider"></div>
            <a href="admin.html" class="nav-dropdown-item" target="_blank"
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

    <!-- HERO -->
    <div class="hero">
      <div class="hero-eyebrow">// TENTANG KAMI</div>
      <h1 class="hero-title">
        FIND YOUR<br /><em>PERFECT</em><br />GRIND SPOT.
      </h1>
      <p class="hero-sub">
        NGOPI.MLG adalah platform crowdsourced untuk remote workers dan coffee
        shop nomads di Malang. Temukan kafe dengan WiFi terbaik, berdasarkan
        data nyata dari komunitas.
      </p>
      <div class="hero-cta">
        <a href="ngopi-malang.html" class="btn-primary">Jelajahi Kafe →</a>
        <a href="{{ route('register') }}" class="btn-secondary">Gabung Komunitas</a>
      </div>
    </div>

    <!-- MARQUEE -->
    <div class="marquee">
      <div class="marquee-track">
        <span class="marquee-item">42 Kafe</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">8 Area Malang</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">247 Speedtest</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Crowdsourced Data</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Verified Reviews</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Real Time Status</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Free Forever</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Built for WFH Warriors</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">42 Kafe</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">8 Area Malang</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">247 Speedtest</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Crowdsourced Data</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Verified Reviews</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Real Time Status</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Free Forever</span
        ><span class="marquee-dot">◆</span>
        <span class="marquee-item">Built for WFH Warriors</span
        ><span class="marquee-dot">◆</span>
      </div>
    </div>

    <!-- STATS -->
    <div class="stats-strip">
      <div class="stat-card">
        <div class="stat-num">42</div>
        <div class="stat-lbl">Total Kafe</div>
        <div class="stat-sub">tersebar di 8 area Malang</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">247</div>
        <div class="stat-lbl">Speedtest</div>
        <div class="stat-sub">data nyata dari komunitas</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">1.2K</div>
        <div class="stat-lbl">Members</div>
        <div class="stat-sub">remote workers aktif</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">94%</div>
        <div class="stat-lbl">Akurasi</div>
        <div class="stat-sub">data terverifikasi admin</div>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="content-wrap">
      <!-- HOW IT WORKS -->
      <div class="section">
        <div class="sec-eyebrow">// CARA KERJA</div>
        <div class="sec-title">SESIMPEL<br />ITU.</div>
        <div class="steps-grid">
          <div class="step-card">
            <div class="step-num">01</div>
            <div class="step-icon">🗺️</div>
            <div class="step-title">TEMUKAN KAFE</div>
            <div class="step-desc">
              Filter berdasarkan area, fasilitas, atau kecepatan WiFi. List dan
              Map view tersedia.
            </div>
          </div>
          <div class="step-card">
            <div class="step-num">02</div>
            <div class="step-icon">📊</div>
            <div class="step-title">CEK DATA WIFI</div>
            <div class="step-desc">
              Lihat hasil speedtest real dari komunitas. Download, upload, dan
              ping yang terukur.
            </div>
          </div>
          <div class="step-card">
            <div class="step-num">03</div>
            <div class="step-icon">⚡</div>
            <div class="step-title">KONTRIBUSI</div>
            <div class="step-desc">
              Submit hasil speedtestmu sendiri dan bantu komunitas dapat data
              yang lebih akurat.
            </div>
          </div>
          <div class="step-card">
            <div class="step-num">04</div>
            <div class="step-icon">🔔</div>
            <div class="step-title">STAY UPDATED</div>
            <div class="step-desc">
              Dapat notifikasi kalau ada kafe baru atau update di area
              favoritmu.
            </div>
          </div>
        </div>
      </div>

      <!-- SCORING -->
      <div class="section">
        <div class="sec-eyebrow">// SISTEM SKOR</div>
        <div class="sec-title">TRANSPARENT<br />SCORING.</div>
        <div class="sec-body">
          Skor kafe dihitung dari 4 faktor dengan bobot yang transparan. Bukan
          opini subjektif — murni data terukur dari komunitas.
        </div>
        <div class="scoring-grid">
          <div class="scoring-card">
            <div class="sc-header">
              <div class="sc-icon">⚡</div>
              <div class="sc-weight" style="color: var(--a)">40%</div>
            </div>
            <div class="sc-title">WIFI SPEED</div>
            <div class="sc-desc">
              Kecepatan download rata-rata dari semua speedtest yang disubmit
              komunitas.
            </div>
            <div class="sc-bar">
              <div
                class="sc-bar-fill"
                style="width: 40%; background: var(--a)"
              ></div>
            </div>
          </div>
          <div class="scoring-card">
            <div class="sc-header">
              <div class="sc-icon">📡</div>
              <div class="sc-weight" style="color: var(--a3)">20%</div>
            </div>
            <div class="sc-title">PING / LATENCY</div>
            <div class="sc-desc">
              Semakin rendah ping, semakin ideal untuk meeting, coding, dan
              real-time tasks.
            </div>
            <div class="sc-bar">
              <div
                class="sc-bar-fill"
                style="width: 20%; background: var(--a3)"
              ></div>
            </div>
          </div>
          <div class="scoring-card">
            <div class="sc-header">
              <div class="sc-icon">🔌</div>
              <div class="sc-weight" style="color: var(--a4)">25%</div>
            </div>
            <div class="sc-title">COLOKAN</div>
            <div class="sc-desc">
              Ketersediaan stop kontak yang banyak adalah faktor krusial buat
              remote worker.
            </div>
            <div class="sc-bar">
              <div
                class="sc-bar-fill"
                style="width: 25%; background: var(--a4)"
              ></div>
            </div>
          </div>
          <div class="scoring-card">
            <div class="sc-header">
              <div class="sc-icon">💰</div>
              <div class="sc-weight" style="color: var(--a2)">15%</div>
            </div>
            <div class="sc-title">HARGA</div>
            <div class="sc-desc">
              Value for money — harga yang terjangkau untuk sesi kerja yang
              panjang.
            </div>
            <div class="sc-bar">
              <div
                class="sc-bar-fill"
                style="width: 15%; background: var(--a2)"
              ></div>
            </div>
          </div>
        </div>
      </div>

      <!-- COLLAB -->
      <div class="section">
        <div class="sec-eyebrow">// KOLABORASI</div>
        <div class="sec-title">CONTENT<br />CREATORS.</div>
        <div class="sec-body">
          NGOPI.MLG terbuka untuk kolaborasi dengan content creator lokal.
          Dapatkan verified badge, slot video review, dan analytics performa
          kontenmu.
        </div>
        <div class="collab-banner">
          <div class="cb-left">
            <div class="cb-title">
              PARTNER KAMI:<br /><em>@SPACESEEKERS.ID</em>
            </div>
            <div class="cb-desc">
              Content creator pertama yang bergabung sebagai Verified
              Collaborator NGOPI.MLG. Review honest & detail untuk remote
              workers Malang.
            </div>
          </div>
          <a href="{{ route('collab') }}" class="cb-btn">LIHAT HUB →</a>
        </div>
      </div>

      <!-- TEAM -->
      <div class="section">
        <div class="sec-eyebrow">// TIM</div>
        <div class="sec-title">BUILT BY<br />GRINDERS.</div>
        <div class="sec-body">
          Dibuat oleh remote workers, untuk remote workers. Kami tahu betul
          rasanya hunting WiFi kenceng di Malang.
        </div>
        <div class="team-grid">
          <div class="team-card">
            <div class="team-avatar">🚀</div>
            <div class="team-name">Dev A.</div>
            <div class="team-role">Founder & Dev</div>
          </div>
          <div class="team-card">
            <div class="team-avatar">🎨</div>
            <div class="team-name">Des B.</div>
            <div class="team-role">UI/UX Design</div>
          </div>
          <div class="team-card">
            <div class="team-avatar">📊</div>
            <div class="team-name">Data C.</div>
            <div class="team-role">Data & Research</div>
          </div>
          <div class="team-card">
            <div class="team-avatar">☕</div>
            <div class="team-name">Kamu?</div>
            <div class="team-role">Contributor</div>
          </div>
        </div>
      </div>

      <!-- FAQ -->
      <div class="section">
        <div class="sec-eyebrow">// FAQ</div>
        <div class="sec-title">PERTANYAAN<br />UMUM.</div>
        <div class="faq-list">
          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              <span>Apakah NGOPI.MLG gratis?</span
              ><span class="faq-arrow">+</span>
            </div>
            <div class="faq-a">
              <div class="faq-a-inner">
                Ya, 100% gratis untuk pengguna. NGOPI.MLG adalah proyek
                komunitas yang dibangun dengan semangat gotong royong para
                remote workers Malang. Kami tidak ada rencana monetisasi yang
                akan mengorbankan pengalaman pengguna.
              </div>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              <span>Seberapa akurat data speedtest-nya?</span
              ><span class="faq-arrow">+</span>
            </div>
            <div class="faq-a">
              <div class="faq-a-inner">
                Cukup akurat — data speedtest dikumpulkan dari banyak
                kontributor di berbagai waktu, jadi hasilnya mencerminkan
                performa WiFi yang realistis. Setiap submission juga
                diverifikasi admin sebelum masuk ke database. Skor yang
                ditampilkan adalah rata-rata dari semua submission.
              </div>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              <span>Bagaimana cara submit speedtest?</span
              ><span class="faq-arrow">+</span>
            </div>
            <div class="faq-a">
              <div class="faq-a-inner">
                Cukup kunjungi halaman Submit Speedtest, pilih kafe yang kamu
                kunjungi, masukkan hasil speedtest (download, upload, ping) dari
                app Speedtest by Ookla atau Fast.com, dan tambahkan foto sebagai
                bukti opsional. Data langsung masuk ke antrian verifikasi admin.
              </div>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              <span>Kafe saya belum terdaftar, bagaimana?</span
              ><span class="faq-arrow">+</span>
            </div>
            <div class="faq-a">
              <div class="faq-a-inner">
                Kamu bisa tambahkan kafe baru langsung saat submit speedtest.
                Pilih "Tambah Kafe Baru" di form, isi detail lengkap termasuk
                nama, alamat, dan koordinat GPS, dan submit. Tim kami akan
                verifikasi dan menambahkannya ke database biasanya dalam 1x24
                jam.
              </div>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)">
              <span>Saya content creator, bisa kolaborasi?</span
              ><span class="faq-arrow">+</span>
            </div>
            <div class="faq-a">
              <div class="faq-a-inner">
                Tentu! Kami terbuka untuk kolaborasi dengan content creator yang
                fokus di dunia kafe, remote work, atau lifestyle Malang. Hubungi
                kami melalui DM Instagram atau email untuk info lebih lanjut
                tentang program Verified Collaborator.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <footer>
      <div class="footer-logo">NGOPI<span>.</span>MLG</div>
      <div class="footer-links">
        <a href="ngopi-malang.html">Kafe</a>
        <a href="about.html">Tentang</a>
        <a href="submit-speedtest.html">Submit</a>
        <a href="register.html">Daftar</a>
        <a href="admin.html">Admin</a>
      </div>
      <div class="footer-copy">© 2025 NGOPI.MLG — Built with ☕ di Malang</div>
    </footer>

    <script>
      function toggleFaq(el) {
        const item = el.parentElement;
        const isOpen = item.classList.contains("open");
        document
          .querySelectorAll(".faq-item")
          .forEach((f) => f.classList.remove("open"));
        if (!isOpen) item.classList.add("open");
      }

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
      }
    </script>
  </body>
</html>
