<!doctype html>
<html lang="id" data-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar — NGOPI.MLG</title>
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
      html,
      body {
        min-height: 100%;
      }
      body {
        font-family: var(--fb);
        background: var(--bg);
        color: var(--tx);
        display: flex;
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

      /* LEFT PANEL */
      .left-panel {
        width: 44%;
        background: var(--bg2);
        border-right: 1px solid var(--brd);
        display: flex;
        flex-direction: column;
        padding: 48px;
        position: relative;
        overflow: hidden;
        min-height: 100vh;
      }
      @media (max-width: 768px) {
        .left-panel {
          display: none;
        }
      }
      .lp-grid {
        position: absolute;
        inset: 0;
        background-image:
          linear-gradient(var(--brd) 1px, transparent 1px),
          linear-gradient(90deg, var(--brd) 1px, transparent 1px);
        background-size: 40px 40px;
        opacity: 0.2;
        pointer-events: none;
      }
      .lp-glow {
        position: absolute;
        top: -80px;
        right: -80px;
        width: 360px;
        height: 360px;
        background: radial-gradient(
          circle,
          rgba(255, 59, 92, 0.07) 0%,
          transparent 70%
        );
        pointer-events: none;
      }
      .lp-logo {
        font-family: var(--fd);
        font-size: 26px;
        letter-spacing: 3px;
        color: var(--tx);
        position: relative;
        z-index: 1;
      }
      .lp-logo span {
        color: var(--a);
      }
      .lp-main {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        z-index: 1;
      }
      .lp-tagline {
        font-family: var(--fd);
        font-size: clamp(44px, 4.5vw, 64px);
        line-height: 0.9;
        letter-spacing: 1px;
        margin-bottom: 18px;
      }
      .lp-tagline em {
        color: var(--a2);
        font-style: normal;
      }
      .lp-sub {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 1px;
        line-height: 1.7;
        max-width: 340px;
        margin-bottom: 36px;
      }
      .step-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
      }
      .step {
        display: flex;
        align-items: flex-start;
        gap: 14px;
      }
      .step-num {
        font-family: var(--fd);
        font-size: 24px;
        color: var(--a);
        width: 28px;
        flex-shrink: 0;
        line-height: 1;
      }
      .step-text {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx2);
        letter-spacing: 0.3px;
        line-height: 1.6;
        padding-top: 3px;
      }
      .step-text strong {
        color: var(--tx);
        display: block;
        font-size: 13px;
        font-family: var(--fb);
        margin-bottom: 2px;
      }

      /* RIGHT PANEL */
      .right-panel {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 0;
      }
      .rp-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 40px;
        border-bottom: 1px solid var(--brd);
      }
      .rp-logo {
        font-family: var(--fd);
        font-size: 20px;
        letter-spacing: 2px;
        color: var(--tx);
        text-decoration: none;
        display: none;
      }
      @media (max-width: 768px) {
        .rp-logo {
          display: block;
        }
      }
      .rp-logo span {
        color: var(--a);
      }
      .theme-btn {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: var(--bg3);
        border: 1px solid var(--brd);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        transition: all var(--tr);
      }
      .theme-btn:hover {
        background: var(--a);
        transform: rotate(20deg);
      }
      .rp-login-link {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 0.3px;
      }
      .rp-login-link a {
        color: var(--a);
        text-decoration: none;
      }

      .rp-scroll {
        flex: 1;
        overflow-y: auto;
        padding: 40px;
        display: flex;
        flex-direction: column;
      }
      @media (max-width: 768px) {
        .rp-scroll {
          padding: 100px 24px 40px; /* Beri jarak ekstra di atas agar form yang di tengah tidak menabrak topbar */
        }
      }

      .form-wrap {
        width: 100%;
        max-width: 440px;
        margin: auto; /* Ini yang akan menarik form persis ke tengah */
      }
      .form-title {
        font-family: var(--fd);
        font-size: 42px;
        letter-spacing: 1px;
        line-height: 0.95;
        margin-bottom: 4px;
      }
      .form-sub {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx3);
        letter-spacing: 1px;
        margin-bottom: 32px;
      }

      @media (max-width: 768px) {
        .right-panel {
          position: relative; /* Menjadi acuan agar topbar bisa melayang */
        }

        .rp-topbar {
          position: absolute;
          top: 24px;
          left: 24px;
          right: 24px;
          padding: 0;
          border-bottom: none;
          z-index: 10;
        }

        .rp-scroll {
          padding: 100px 24px 40px; /* Beri jarak ekstra di atas agar form yang di tengah tidak menabrak topbar */
        }

        .rp-login-link {
          font-size: 10px; /* Mengecilkan teks login sedikit agar rapi bersebelahan dengan logo di HP */
        }
      }

      /* PROGRESS STEPS */
      .progress-steps {
        display: flex;
        align-items: center;
        gap: 0;
        margin-bottom: 32px;
      }
      .ps-step {
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: var(--fm);
        font-size: 10px;
        letter-spacing: 1px;
      }
      .ps-dot {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: var(--bg3);
        border: 2px solid var(--brd);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: var(--fd);
        font-size: 14px;
        transition: all var(--tr);
        flex-shrink: 0;
      }
      .ps-dot.active {
        background: var(--a);
        border-color: var(--a);
        color: #000;
      }
      .ps-dot.done {
        background: rgba(205, 255, 71, 0.15);
        border-color: var(--a);
        color: var(--a);
      }
      .ps-label {
        color: var(--tx3);
      }
      .ps-step.active .ps-label {
        color: var(--a);
      }
      .ps-line {
        flex: 1;
        height: 1px;
        background: var(--brd);
        margin: 0 8px;
      }

      .form-step {
        display: none;
      }
      .form-step.active {
        display: block;
        animation: fadeUp 0.3s ease;
      }
      @keyframes fadeUp {
        from {
          opacity: 0;
          transform: translateY(10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .form-group {
        margin-bottom: 16px;
      }
      .fg-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
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
      .fsel {
        width: 100%;
        background: var(--bg3);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 12px 15px;
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
      .fsel:focus {
        border-color: var(--a);
        box-shadow: 0 0 0 3px rgba(205, 255, 71, 0.1);
      }
      .finput::placeholder {
        color: var(--tx3);
      }
      .finput.err {
        border-color: var(--a2);
        box-shadow: 0 0 0 3px rgba(255, 59, 92, 0.1);
      }
      .err-txt {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--a2);
        margin-top: 5px;
        letter-spacing: 0.3px;
      }
      .hint-txt {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        margin-top: 5px;
        letter-spacing: 0.3px;
      }

      /* Password strength */
      .strength-bar {
        display: flex;
        gap: 4px;
        margin-top: 8px;
      }
      .sb-seg {
        flex: 1;
        height: 4px;
        border-radius: 2px;
        background: var(--bg4);
        transition: background 0.3s;
      }
      .strength-label {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        margin-top: 4px;
        letter-spacing: 0.5px;
      }

      /* Avatar selector */
      .avatar-grid {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
      }
      .av-option {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--bg3);
        border: 2px solid var(--brd);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        cursor: pointer;
        transition: all var(--tr);
      }
      .av-option:hover {
        border-color: var(--a);
        transform: scale(1.1);
      }
      .av-option.selected {
        border-color: var(--a);
        background: rgba(205, 255, 71, 0.1);
        box-shadow: 0 0 0 3px rgba(205, 255, 71, 0.15);
      }

      /* Checkbox */
      .check-row {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        cursor: pointer;
        margin-bottom: 14px;
      }
      .check-row input {
        width: 16px;
        height: 16px;
        accent-color: var(--a);
        cursor: pointer;
        margin-top: 2px;
        flex-shrink: 0;
      }
      .check-row span {
        font-family: var(--fm);
        font-size: 11px;
        color: var(--tx2);
        line-height: 1.5;
      }
      .check-row a {
        color: var(--a);
        text-decoration: none;
      }

      /* Action buttons */
      .action-row {
        display: flex;
        gap: 10px;
        margin-top: 8px;
      }
      .btn-next {
        flex: 1;
        font-family: var(--fd);
        font-size: 20px;
        letter-spacing: 2px;
        background: var(--a);
        color: #000;
        border: none;
        border-radius: var(--rs);
        padding: 14px;
        cursor: pointer;
        transition: all var(--tr);
      }
      .btn-next:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(205, 255, 71, 0.3);
      }
      .btn-back {
        font-family: var(--fm);
        font-size: 12px;
        background: var(--bg3);
        color: var(--tx2);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 14px 18px;
        cursor: pointer;
        transition: all var(--tr);
      }
      .btn-back:hover {
        border-color: var(--tx2);
        color: var(--tx);
      }

      .divider {
        display: flex;
        align-items: center;
        gap: 14px;
        margin: 24px 0;
      }
      .divider-line {
        flex: 1;
        height: 1px;
        background: var(--brd);
      }
      .divider-text {
        font-family: var(--fm);
        font-size: 10px;
        color: var(--tx3);
        letter-spacing: 2px;
      }
      .oauth-btns {
        display: flex;
        gap: 10px;
      }
      .oauth-btn {
        flex: 1;
        font-family: var(--fm);
        font-size: 11px;
        background: var(--bg3);
        color: var(--tx2);
        border: 1px solid var(--brd);
        border-radius: var(--rs);
        padding: 11px;
        cursor: pointer;
        transition: all var(--tr);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        text-decoration: none;
      }
      .oauth-btn:hover {
        border-color: var(--tx2);
        color: var(--tx);
      }

      /* Success */
      .success-state {
        text-align: center;
        padding: 20px 0;
        display: none;
      }
      .success-icon {
        font-size: 64px;
        margin-bottom: 20px;
        animation: popIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
      }
      @keyframes popIn {
        from {
          transform: scale(0);
        }
        to {
          transform: scale(1);
        }
      }
      .success-title {
        font-family: var(--fd);
        font-size: 42px;
        letter-spacing: 1px;
        color: var(--a);
        margin-bottom: 8px;
      }
      .success-sub {
        font-family: var(--fm);
        font-size: 12px;
        color: var(--tx3);
        letter-spacing: 0.5px;
        margin-bottom: 28px;
        line-height: 1.7;
      }
    </style>
  </head>
  <body>
    <!-- LEFT PANEL -->
    <div class="left-panel">
      <div class="lp-grid"></div>
      <div class="lp-glow"></div>
      <div class="lp-logo">NGOPI<span>.</span>MLG</div>
      <div class="lp-main">
        <div class="lp-tagline">
          JOIN THE<br /><em>GRIND</em><br />COMMUNITY.
        </div>
        <p class="lp-sub">
          // Gabung dan bantu komunitas remote workers Malang nemuin spot wifi
          terbaik.
        </p>
        <div class="step-list">
          <div class="step">
            <div class="step-num">01</div>
            <div class="step-text">
              <strong>Buat akun</strong>Isi info dasar kamu
            </div>
          </div>
          <div class="step">
            <div class="step-num">02</div>
            <div class="step-text">
              <strong>Setup profil</strong>Pilih username & avatar
            </div>
          </div>
          <div class="step">
            <div class="step-num">03</div>
            <div class="step-text">
              <strong>Mulai kontribusi</strong>Submit speedtest dari kafe
              favoritmu
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="right-panel">
      <div class="rp-topbar">
        <a href="{{ route('ngopi') }}" class="rp-logo">NGOPI<span>.</span>MLG</a>
        <div class="rp-login-link">
          Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
        </div>
        <button class="theme-btn" onclick="toggleTheme()" id="themeBtn">
          🌙
        </button>
      </div>

      <div class="rp-scroll">
        <div class="form-wrap">
          <div class="form-title">DAFTAR</div>
          <div class="form-sub">// BUAT AKUN NGOPI.MLG</div>

          <!-- PROGRESS -->
          <div class="progress-steps" id="progressSteps">
            <div class="ps-step active" id="ps1">
              <div class="ps-dot active" id="pd1">1</div>
              <div class="ps-label">AKUN</div>
            </div>
            <div class="ps-line"></div>
            <div class="ps-step" id="ps2">
              <div class="ps-dot" id="pd2">2</div>
              <div class="ps-label">PROFIL</div>
            </div>
            <div class="ps-line"></div>
            <div class="ps-step" id="ps3">
              <div class="ps-dot" id="pd3">3</div>
              <div class="ps-label">SELESAI</div>
            </div>
          </div>

          <!-- STEP 1: AKUN -->
          <div class="form-step active" id="step1">
            <div class="fg-row">
              <div class="form-group">
                <label class="flbl">Nama Depan</label>
                <input
                  class="finput"
                  id="fname"
                  placeholder="Budi"
                  type="text"
                />
              </div>
              <div class="form-group">
                <label class="flbl">Nama Belakang</label>
                <input
                  class="finput"
                  id="lname"
                  placeholder="Santoso"
                  type="text"
                />
              </div>
            </div>
            <div class="form-group">
              <label class="flbl">Email</label>
              <input
                class="finput"
                id="email"
                placeholder="kamu@email.com"
                type="email"
              />
            </div>
            <div class="form-group">
              <label class="flbl">Password</label>
              <input
                class="finput"
                id="password"
                placeholder="Min. 8 karakter"
                type="password"
                oninput="checkStrength(this.value)"
              />
              <div class="strength-bar">
                <div class="sb-seg" id="sb1"></div>
                <div class="sb-seg" id="sb2"></div>
                <div class="sb-seg" id="sb3"></div>
                <div class="sb-seg" id="sb4"></div>
              </div>
              <div class="strength-label" id="strengthLabel">
                // masukkan password
              </div>
            </div>
            <div class="form-group">
              <label class="flbl">Konfirmasi Password</label>
              <input
                class="finput"
                id="password2"
                placeholder="Ulangi password"
                type="password"
              />
            </div>

            <div class="divider">
              <div class="divider-line"></div>
              <div class="divider-text">ATAU DAFTAR VIA</div>
              <div class="divider-line"></div>
            </div>
            <div class="oauth-btns" style="margin-bottom: 20px">
              <a href="#" class="oauth-btn">
                <svg width="15" height="15" viewBox="0 0 24 24">
                  <path
                    fill="currentColor"
                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                  />
                  <path
                    fill="currentColor"
                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                  />
                  <path
                    fill="currentColor"
                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                  />
                  <path
                    fill="currentColor"
                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                  />
                </svg>
                Google
              </a>
              <a href="#" class="oauth-btn">
                <svg width="15" height="15" viewBox="0 0 24 24">
                  <path
                    fill="currentColor"
                    d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"
                  />
                </svg>
                GitHub
              </a>
            </div>

            <div class="action-row">
              <button class="btn-next" onclick="goStep(2)">LANJUT →</button>
            </div>
          </div>

          <!-- STEP 2: PROFIL -->
          <div class="form-step" id="step2">
            <div class="form-group">
              <label class="flbl">Username</label>
              <input
                class="finput"
                id="username"
                placeholder="@grinder_mlg"
                type="text"
              />
              <div class="hint-txt">
                // Ini yang tampil di speed log dan review kamu
              </div>
            </div>
            <div class="form-group">
              <label class="flbl">Kota / Area di Malang</label>
              <select class="fsel" id="area">
                <option value="">Pilih area...</option>
                <option>Suhat</option>
                <option>Dau</option>
                <option>Klojen</option>
                <option>Ijen</option>
                <option>Sigura-gura</option>
                <option>Dinoyo</option>
                <option>Lowokwaru</option>
                <option>Blimbing</option>
                <option>Lainnya</option>
              </select>
            </div>
            <div class="form-group">
              <label class="flbl">Avatar</label>
              <div class="avatar-grid" id="avatarGrid">
                <div
                  class="av-option selected"
                  data-av="☕"
                  onclick="selectAv(this)"
                >
                  ☕
                </div>
                <div class="av-option" data-av="💻" onclick="selectAv(this)">
                  💻
                </div>
                <div class="av-option" data-av="🎯" onclick="selectAv(this)">
                  🎯
                </div>
                <div class="av-option" data-av="⚡" onclick="selectAv(this)">
                  ⚡
                </div>
                <div class="av-option" data-av="🎨" onclick="selectAv(this)">
                  🎨
                </div>
                <div class="av-option" data-av="🚀" onclick="selectAv(this)">
                  🚀
                </div>
                <div class="av-option" data-av="🔥" onclick="selectAv(this)">
                  🔥
                </div>
                <div class="av-option" data-av="🌿" onclick="selectAv(this)">
                  🌿
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="flbl">Tipe Pengguna</label>
              <select class="fsel" id="usertype">
                <option>Remote Worker / WFH</option>
                <option>Freelancer</option>
                <option>Mahasiswa</option>
                <option>Content Creator</option>
                <option>Pemilik Bisnis</option>
                <option>Lainnya</option>
              </select>
            </div>
            <label class="check-row"
              ><input type="checkbox" id="tos" checked /><span
                >Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan
                <a href="#">Kebijakan Privasi</a> NGOPI.MLG</span
              ></label
            >
            <label class="check-row"
              ><input type="checkbox" id="notif" /><span
                >Kirim notifikasi email saat ada update kafe favoritku</span
              ></label
            >
            <div class="action-row">
              <button class="btn-back" onclick="goStep(1)">← Kembali</button>
              <button class="btn-next" style="flex: 1" onclick="doRegister()">
                DAFTAR SEKARANG →
              </button>
            </div>
          </div>

          <!-- SUCCESS -->
          <div class="success-state" id="successState">
            <div class="success-icon">✅</div>
            <div class="success-title">WELCOME!</div>
            <div class="success-sub">
              Akun kamu berhasil dibuat.<br />Selamat bergabung di komunitas
              NGOPI.MLG!
            </div>
            <a
              href="ngopi-malang.html"
              style="
                display: inline-block;
                font-family: var(--fd);
                font-size: 20px;
                letter-spacing: 2px;
                background: var(--a);
                color: #000;
                border-radius: var(--rs);
                padding: 13px 28px;
                text-decoration: none;
                transition: all var(--tr);
              "
              onmouseover="this.style.transform = 'translateY(-2px)'"
              onmouseout="this.style.transform = ''"
              >EKSPLORASI KAFE →</a
            >
          </div>
        </div>
      </div>
    </div>

    <script>
      let currentStep = 1;
      let selectedAvatar = "☕";

      function goStep(n) {
        if (n === 2) {
          const email = document.getElementById("email").value.trim();
          const p1 = document.getElementById("password").value;
          const p2 = document.getElementById("password2").value;
          if (!email || !p1 || p1.length < 8 || p1 !== p2) {
            if (!email) document.getElementById("email").classList.add("err");
            if (p1.length < 8)
              document.getElementById("password").classList.add("err");
            if (p1 !== p2)
              document.getElementById("password2").classList.add("err");
            return;
          }
        }
        document
          .getElementById("step" + currentStep)
          .classList.remove("active");
        document.getElementById("ps" + currentStep).classList.remove("active");
        document.getElementById("pd" + currentStep).classList.remove("active");
        document.getElementById("pd" + currentStep).classList.add("done");
        currentStep = n;
        document.getElementById("step" + currentStep).classList.add("active");
        document.getElementById("ps" + currentStep).classList.add("active");
        document.getElementById("pd" + currentStep).classList.add("active");
      }

      function doRegister() {
        if (!document.getElementById("tos").checked) {
          alert("Harap setujui syarat & ketentuan");
          return;
        }
        const username = document.getElementById("username").value.trim();
        if (!username) {
          document.getElementById("username").classList.add("err");
          return;
        }
        document.getElementById("step2").style.display = "none";
        document.getElementById("progressSteps").style.display = "none";
        document.getElementById("pd3").classList.add("done");
        document.getElementById("successState").style.display = "block";
      }

      function checkStrength(v) {
        let score = 0;
        if (v.length >= 8) score++;
        if (/[A-Z]/.test(v)) score++;
        if (/[0-9]/.test(v)) score++;
        if (/[^A-Za-z0-9]/.test(v)) score++;
        const colors = ["", "var(--a2)", "var(--a4)", "var(--a3)", "var(--a)"];
        const labels = [
          "// masukkan password",
          "// lemah",
          "// sedang",
          "// kuat",
          "// sangat kuat ⚡",
        ];
        for (let i = 1; i <= 4; i++) {
          document.getElementById("sb" + i).style.background =
            i <= score ? colors[score] : "var(--bg4)";
        }
        document.getElementById("strengthLabel").textContent = labels[score];
        document.getElementById("strengthLabel").style.color =
          colors[score] || "var(--tx3)";
      }

      function selectAv(el) {
        document
          .querySelectorAll(".av-option")
          .forEach((a) => a.classList.remove("selected"));
        el.classList.add("selected");
        selectedAvatar = el.dataset.av;
      }

      document.querySelectorAll(".finput").forEach((inp) => {
        inp.addEventListener("input", () => inp.classList.remove("err"));
      });

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
