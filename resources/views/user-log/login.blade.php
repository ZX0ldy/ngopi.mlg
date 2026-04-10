<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login — NGOPI.MLG</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Grotesk:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--a:#CDFF47;--a2:#FF3B5C;--a3:#00E5FF;--fd:'Bebas Neue',sans-serif;--fb:'Space Grotesk',sans-serif;--fm:'DM Mono',monospace;--r:16px;--rs:8px;--tr:.25s cubic-bezier(.4,0,.2,1)}
[data-theme="dark"]{--bg:#0A0A0B;--bg2:#111114;--bg3:#1A1A1F;--bg4:#242429;--brd:#2A2A30;--tx:#F0F0F5;--tx2:#888896;--tx3:#555560;--sh:rgba(0,0,0,.6);--a:#CDFF47;--a2:#FF3B5C;--a3:#00E5FF;}
[data-theme="light"]{--bg:#FAF9F6;--bg2:#F2F1EE;--bg3:#E8E6E1;--bg4:#DDD9D2;--brd:#C8C4BC;--tx:#18181A;--tx2:#4A4A52;--tx3:#8A8880;--sh:rgba(0,0,0,.10);--a:#6BBF00;--a2:#E02040;--a3:#007BB5;}
html,body{height:100%}
body{font-family:var(--fb);background:var(--bg);color:var(--tx);display:flex;min-height:100vh;transition:background var(--tr),color var(--tr)}
::-webkit-scrollbar{width:5px}::-webkit-scrollbar-thumb{background:var(--a);border-radius:3px}

/* LEFT PANEL */
.left-panel{width:48%;background:var(--bg2);border-right:1px solid var(--brd);display:flex;flex-direction:column;padding:48px;position:relative;overflow:hidden}
@media(max-width:768px){.left-panel{display:none}}
.lp-grid{position:absolute;inset:0;background-image:linear-gradient(var(--brd) 1px,transparent 1px),linear-gradient(90deg,var(--brd) 1px,transparent 1px);background-size:40px 40px;opacity:.25;pointer-events:none}
.lp-glow{position:absolute;bottom:-100px;left:-100px;width:400px;height:400px;background:radial-gradient(circle,rgba(205,255,71,.08) 0%,transparent 70%);pointer-events:none}
.lp-logo{font-family:var(--fd);font-size:28px;letter-spacing:3px;color:var(--tx);position:relative;z-index:1;display:flex;align-items:center;gap:2px}
.lp-logo span{color:var(--a)}
.lp-main{flex:1;display:flex;flex-direction:column;justify-content:center;position:relative;z-index:1}
.lp-tagline{font-family:var(--fd);font-size:clamp(52px,5vw,72px);line-height:.92;letter-spacing:1px;margin-bottom:20px}
.lp-tagline em{color:var(--a);font-style:normal}
.lp-sub{font-family:var(--fm);font-size:12px;color:var(--tx3);letter-spacing:1px;line-height:1.7;max-width:360px;margin-bottom:40px}
.lp-features{display:flex;flex-direction:column;gap:12px}
.lp-feat{display:flex;align-items:center;gap:12px;font-family:var(--fm);font-size:11px;color:var(--tx2);letter-spacing:.5px}
.lp-feat-icon{width:32px;height:32px;border-radius:var(--rs);background:rgba(205,255,71,.1);border:1px solid rgba(205,255,71,.2);display:flex;align-items:center;justify-content:center;font-size:15px;flex-shrink:0}
.lp-stats{display:flex;gap:32px;margin-top:48px;padding-top:32px;border-top:1px solid var(--brd)}
.lp-stat-n{font-family:var(--fd);font-size:32px;color:var(--a);line-height:1}
.lp-stat-l{font-family:var(--fm);font-size:9px;color:var(--tx3);letter-spacing:2px;margin-top:4px}

/* RIGHT PANEL */
.right-panel{flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:48px 40px;position:relative}
@media(max-width:768px){.right-panel{padding:40px 24px}}
.rp-top{position:absolute;top:24px;right:24px;display:flex;align-items:center;gap:10px}
.rp-logo{font-family:var(--fd);font-size:20px;letter-spacing:2px;color:var(--tx);text-decoration:none;display:none}
@media(max-width:768px){.rp-logo{display:flex;align-items:center;gap:2px}}
.rp-logo span{color:var(--a)}
.theme-btn{width:34px;height:34px;border-radius:50%;background:var(--bg3);border:1px solid var(--brd);cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:15px;transition:all var(--tr)}
.theme-btn:hover{background:var(--a);transform:rotate(20deg)}

.form-wrap{width:100%;max-width:400px}
.form-title{font-family:var(--fd);font-size:46px;letter-spacing:1px;line-height:.95;margin-bottom:6px}
.form-sub{font-family:var(--fm);font-size:11px;color:var(--tx3);letter-spacing:1px;margin-bottom:36px}

.form-group{margin-bottom:18px}
.flbl{font-family:var(--fm);font-size:10px;letter-spacing:3px;color:var(--tx3);text-transform:uppercase;display:block;margin-bottom:8px}
.finput{width:100%;background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:13px 16px;color:var(--tx);font-family:var(--fb);font-size:14px;outline:none;transition:border-color var(--tr),box-shadow var(--tr);-webkit-appearance:none}
.finput:focus{border-color:var(--a);box-shadow:0 0 0 3px rgba(205,255,71,.1)}
.finput::placeholder{color:var(--tx3)}
.finput-wrap{position:relative}
.finput-icon{position:absolute;right:14px;top:50%;transform:translateY(-50%);cursor:pointer;font-size:16px;color:var(--tx3);transition:color var(--tr)}
.finput-icon:hover{color:var(--tx)}

.form-row{display:flex;align-items:center;justify-content:space-between;margin-bottom:24px}
.form-check{display:flex;align-items:center;gap:8px;cursor:pointer}
.form-check input{width:16px;height:16px;accent-color:var(--a);cursor:pointer}
.form-check span{font-family:var(--fm);font-size:11px;color:var(--tx2)}
.form-link{font-family:var(--fm);font-size:11px;color:var(--a);text-decoration:none;letter-spacing:.3px}
.form-link:hover{text-decoration:underline}

.submit-btn{width:100%;font-family:var(--fd);font-size:22px;letter-spacing:3px;background:var(--a);color:#000;border:none;border-radius:var(--rs);padding:15px;cursor:pointer;transition:all var(--tr);display:flex;align-items:center;justify-content:center;gap:10px}
.submit-btn:hover{transform:translateY(-2px);box-shadow:0 8px 30px rgba(205,255,71,.35)}

.divider{display:flex;align-items:center;gap:14px;margin:24px 0}
.divider-line{flex:1;height:1px;background:var(--brd)}
.divider-text{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:2px}

.oauth-btns{display:flex;gap:10px}
.oauth-btn{flex:1;font-family:var(--fm);font-size:12px;background:var(--bg3);color:var(--tx2);border:1px solid var(--brd);border-radius:var(--rs);padding:12px;cursor:pointer;transition:all var(--tr);display:flex;align-items:center;justify-content:center;gap:8px;text-decoration:none;letter-spacing:.3px}
.oauth-btn:hover{border-color:var(--tx2);color:var(--tx)}

.form-footer{margin-top:28px;text-align:center;font-family:var(--fm);font-size:11px;color:var(--tx3)}
.form-footer a{color:var(--a);text-decoration:none}
.form-footer a:hover{text-decoration:underline}

.error-msg{font-family:var(--fm);font-size:11px;color:var(--a2);margin-top:6px;display:none;letter-spacing:.3px}
.error-msg.show{display:block}

@keyframes shake{0%,100%{transform:translateX(0)}20%,60%{transform:translateX(-6px)}40%,80%{transform:translateX(6px)}}
.shake{animation:shake .4s ease}
</style>
</head>
<body>

<!-- LEFT PANEL -->
<div class="left-panel">
  <div class="lp-grid"></div>
  <div class="lp-glow"></div>
  <div class="lp-logo">NGOPI<span>.</span>MLG</div>
  <div class="lp-main">
    <div class="lp-tagline">FIND YOUR<br><em>GRIND</em><br>SPOT.</div>
    <p class="lp-sub">// Login untuk submit speedtest, review kafe, dan berkontribusi ke komunitas remote workers Malang.</p>
    <div class="lp-features">
      <div class="lp-feat"><div class="lp-feat-icon">⚡</div>Submit hasil speedtest langsung dari kafe</div>
      <div class="lp-feat"><div class="lp-feat-icon">📊</div>Track histori speedtest kamu</div>
      <div class="lp-feat"><div class="lp-feat-icon">🔔</div>Notifikasi update kafe favorit</div>
    </div>
  </div>
  <div class="lp-stats">
    <div><div class="lp-stat-n">42</div><div class="lp-stat-l">KAFE</div></div>
    <div><div class="lp-stat-n">247</div><div class="lp-stat-l">REVIEWS</div></div>
    <div><div class="lp-stat-n">8</div><div class="lp-stat-l">AREA</div></div>
  </div>
</div>

<!-- RIGHT PANEL -->
<div class="right-panel">
  <div class="rp-top">
    <a href="ngopi-malang.html" class="rp-logo">NGOPI<span>.</span>MLG</a>
    <button class="theme-btn" onclick="toggleTheme()" id="themeBtn">🌙</button>
  </div>

  <div class="form-wrap">
    <div class="form-title">MASUK</div>
    <div class="form-sub">// WELCOME BACK, GRINDER</div>

    <div class="form-group">
      <label class="flbl" for="email">Email</label>
      <input class="finput" id="email" type="email" placeholder="kamu@email.com" autocomplete="email">
      <div class="error-msg" id="emailErr">Format email tidak valid</div>
    </div>

    <div class="form-group">
      <label class="flbl" for="password">Password</label>
      <div class="finput-wrap">
        <input class="finput" id="password" type="password" placeholder="••••••••" autocomplete="current-password" style="padding-right:44px">
        <span class="finput-icon" onclick="togglePass()" id="passToggle">👁</span>
      </div>
      <div class="error-msg" id="passErr">Password minimal 8 karakter</div>
    </div>

    <div class="form-row">
      <label class="form-check">
        <input type="checkbox" id="remember">
        <span>Ingat saya</span>
      </label>
      <a href="forgot-password.html" class="form-link">Lupa password?</a>
    </div>

    <button class="submit-btn" id="loginBtn" onclick="handleLogin()">MASUK →</button>

    <div class="divider">
      <div class="divider-line"></div>
      <div class="divider-text">ATAU</div>
      <div class="divider-line"></div>
    </div>

    <div class="oauth-btns">
      <a href="#" class="oauth-btn">
        <svg width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
        Google
      </a>
      <a href="#" class="oauth-btn">
        <svg width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M12 0c-6.627 0-12 5.373-12 12 0 5.303 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
        GitHub
      </a>
    </div>

    <div class="form-footer">Belum punya akun? <a href="register.html">Daftar sekarang</a></div>
  </div>
</div>

<script>
function togglePass() {
  const inp = document.getElementById('password');
  inp.type = inp.type === 'password' ? 'text' : 'password';
}

function handleLogin() {
  const email = document.getElementById('email').value.trim();
  const pass = document.getElementById('password').value;
  const emailErr = document.getElementById('emailErr');
  const passErr = document.getElementById('passErr');
  let valid = true;

  emailErr.classList.remove('show');
  passErr.classList.remove('show');

  if (!email || !/\S+@\S+\.\S+/.test(email)) { emailErr.classList.add('show'); valid = false; }
  if (pass.length < 8) { passErr.classList.add('show'); valid = false; }

  if (!valid) {
    document.getElementById('loginBtn').classList.add('shake');
    setTimeout(() => document.getElementById('loginBtn').classList.remove('shake'), 400);
    return;
  }
  // Redirect on success
  document.getElementById('loginBtn').textContent = 'MASUK...';
  setTimeout(() => { window.location.href = 'ngopi-malang.html'; }, 800);
}

document.addEventListener('keydown', e => { if (e.key === 'Enter') handleLogin(); });

function toggleTheme() {
  const h = document.documentElement, b = document.getElementById('themeBtn');
  if (h.getAttribute('data-theme') === 'dark') { h.setAttribute('data-theme', 'light'); b.textContent = '☀️'; }
  else { h.setAttribute('data-theme', 'dark'); b.textContent = '🌙'; }
}
</script>
</body>
</html>
