<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NGOPI.MLG — Admin Panel</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Grotesk:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--a:#CDFF47;--a2:#FF3B5C;--a3:#00E5FF;--fd:'Bebas Neue',sans-serif;--fb:'Space Grotesk',sans-serif;--fm:'DM Mono',monospace;--r:14px;--rs:8px;--tr:.22s cubic-bezier(.4,0,.2,1)}
[data-theme="dark"]{--bg:#0A0A0B;--bg2:#111114;--bg3:#1A1A1F;--bg4:#242429;--brd:#2A2A30;--tx:#F0F0F5;--tx2:#888896;--tx3:#555560;--sh:rgba(0,0,0,.6)}
[data-theme="light"]{--bg:#F0F0EB;--bg2:#E8E8E4;--bg3:#DCDCD8;--bg4:#D0D0CB;--brd:#C8C8C2;--tx:#111114;--tx2:#555560;--tx3:#888896;--sh:rgba(0,0,0,.1)}
html{scroll-behavior:smooth}
body{font-family:var(--fb);background:var(--bg);color:var(--tx);min-height:100vh;display:flex;flex-direction:column}
::-webkit-scrollbar{width:4px}::-webkit-scrollbar-thumb{background:var(--a);border-radius:2px}

/* TOPBAR */
.topbar{background:var(--bg2);border-bottom:2px solid var(--a);padding:14px 28px;display:flex;align-items:center;justify-content:space-between;position:sticky;top:0;z-index:50}
.topbar-logo{font-family:var(--fd);font-size:22px;letter-spacing:2px;color:var(--tx);display:flex;align-items:center;gap:8px}
.topbar-logo span{color:var(--a)}
.topbar-badge{font-family:var(--fm);font-size:10px;background:rgba(255,59,92,.15);color:var(--a2);border:1px solid rgba(255,59,92,.3);border-radius:100px;padding:4px 10px;letter-spacing:1px}
.topbar-right{display:flex;align-items:center;gap:10px}
.tbtn{font-family:var(--fm);font-size:11px;padding:7px 14px;border-radius:100px;border:1px solid var(--brd);background:var(--bg3);color:var(--tx2);cursor:pointer;transition:all var(--tr);text-decoration:none;display:inline-flex;align-items:center;gap:6px;letter-spacing:.5px}
.tbtn:hover{background:var(--a);color:#000;border-color:var(--a);transform:translateY(-1px)}
.tbtn.danger:hover{background:var(--a2);border-color:var(--a2);color:#fff}
.theme-toggle{width:34px;height:34px;border-radius:50%;background:var(--bg3);border:1px solid var(--brd);cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:16px;transition:all var(--tr)}
.theme-toggle:hover{background:var(--a);border-color:var(--a);transform:rotate(30deg)}

/* LAYOUT */
.admin-wrap{display:flex;flex:1}
.sidebar{width:220px;background:var(--bg2);border-right:1px solid var(--brd);padding:24px 0;flex-shrink:0;position:sticky;top:53px;height:calc(100vh - 53px);overflow-y:auto}
.sidebar-section{margin-bottom:24px}
.sidebar-label{font-family:var(--fm);font-size:9px;letter-spacing:3px;color:var(--tx3);padding:0 20px;margin-bottom:8px;text-transform:uppercase}
.sidebar-item{display:flex;align-items:center;gap:10px;padding:10px 20px;cursor:pointer;transition:all var(--tr);font-family:var(--fm);font-size:12px;color:var(--tx2);letter-spacing:.5px;border-left:2px solid transparent}
.sidebar-item:hover{background:var(--bg3);color:var(--tx)}
.sidebar-item.active{background:rgba(205,255,71,.08);color:var(--a);border-left-color:var(--a)}
.sidebar-count{font-family:var(--fm);font-size:10px;margin-left:auto;background:var(--bg4);padding:2px 7px;border-radius:100px;color:var(--tx3)}

/* MAIN CONTENT */
.admin-main{flex:1;padding:28px 32px;overflow-y:auto}
.page-section{display:none}
.page-section.active{display:block}

/* PAGE HEADER */
.page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;gap:16px;flex-wrap:wrap}
.page-title{font-family:var(--fd);font-size:36px;letter-spacing:1px;line-height:1}
.page-subtitle{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:2px;margin-top:4px}

/* STAT CARDS */
.stat-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:16px;margin-bottom:28px}
.stat-card{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:20px;position:relative;overflow:hidden;transition:border-color var(--tr)}
.stat-card:hover{border-color:var(--a)}
.stat-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px}
.stat-card.c1::before{background:var(--a)}.stat-card.c2::before{background:var(--a3)}.stat-card.c3::before{background:var(--a2)}.stat-card.c4::before{background:#FF9F47}
.stat-val{font-family:var(--fd);font-size:42px;line-height:1;margin-bottom:4px}
.stat-card.c1 .stat-val{color:var(--a)}.stat-card.c2 .stat-val{color:var(--a3)}.stat-card.c3 .stat-val{color:var(--a2)}.stat-card.c4 .stat-val{color:#FF9F47}
.stat-label{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:2px;text-transform:uppercase}
.stat-sub{font-family:var(--fm);font-size:11px;color:var(--tx2);margin-top:6px}

/* TABLE */
.table-wrap{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);overflow:hidden;margin-bottom:24px}
.table-wrap .table-scroll{overflow-x:auto;-webkit-overflow-scrolling:touch}
.table-wrap table{min-width:640px}
.table-header{padding:16px 20px;border-bottom:1px solid var(--brd);display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap}
.table-title{font-family:var(--fd);font-size:22px;letter-spacing:1px}
.table-actions{display:flex;gap:8px;flex-wrap:wrap;align-items:center}
.search-mini{background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:8px 12px;color:var(--tx);font-family:var(--fm);font-size:12px;outline:none;width:200px;transition:border-color var(--tr)}
.search-mini:focus{border-color:var(--a)}
.search-mini::placeholder{color:var(--tx3)}
table{width:100%;border-collapse:collapse}
thead tr{background:var(--bg3)}
th{font-family:var(--fm);font-size:10px;letter-spacing:2px;color:var(--tx3);text-transform:uppercase;padding:12px 16px;text-align:left;border-bottom:1px solid var(--brd);white-space:nowrap}
td{padding:13px 16px;font-size:13px;border-bottom:1px solid var(--brd);vertical-align:middle}
tr:last-child td{border-bottom:none}
tr:hover td{background:rgba(255,255,255,.02)}
.td-name{font-family:var(--fd);font-size:17px;letter-spacing:.5px}
.td-mono{font-family:var(--fm);font-size:11px;color:var(--tx2)}
.score-badge{font-family:var(--fd);font-size:18px;padding:4px 10px;border-radius:7px;display:inline-block}
.score-badge.high{background:rgba(205,255,71,.15);color:var(--a);border:1px solid rgba(205,255,71,.3)}
.score-badge.mid{background:rgba(0,229,255,.1);color:var(--a3);border:1px solid rgba(0,229,255,.2)}
.score-badge.low{background:rgba(255,59,92,.1);color:var(--a2);border:1px solid rgba(255,59,92,.2)}
.status-dot{display:inline-flex;align-items:center;gap:6px;font-family:var(--fm);font-size:11px}
.status-dot::before{content:'';width:7px;height:7px;border-radius:50%;flex-shrink:0}
.status-dot.sepi{color:var(--a)}.status-dot.sepi::before{background:var(--a);box-shadow:0 0 6px var(--a)}
.status-dot.ramai{color:var(--a2)}.status-dot.ramai::before{background:var(--a2);box-shadow:0 0 6px var(--a2)}
.action-btns{display:flex;gap:6px}
.act-btn{font-family:var(--fm);font-size:10px;padding:5px 10px;border-radius:6px;border:1px solid var(--brd);background:var(--bg3);color:var(--tx2);cursor:pointer;transition:all var(--tr);white-space:nowrap}
.act-btn:hover{border-color:var(--a);color:var(--a)}
.act-btn.del:hover{border-color:var(--a2);color:var(--a2)}
.act-btn.approve:hover{border-color:var(--a);background:var(--a);color:#000}

/* PENDING LOG TABLE */
.pending-badge{font-family:var(--fm);font-size:10px;background:rgba(255,159,71,.15);color:#FF9F47;border:1px solid rgba(255,159,71,.3);border-radius:100px;padding:3px 8px;letter-spacing:1px}

/* CHARTS */
.chart-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:24px}
.chart-card{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:20px}
.chart-title{font-family:var(--fd);font-size:20px;letter-spacing:1px;margin-bottom:16px}
.bar-chart{display:flex;flex-direction:column;gap:10px}
.bar-row{display:flex;align-items:center;gap:12px}
.bar-label{font-family:var(--fm);font-size:11px;color:var(--tx2);width:100px;flex-shrink:0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.bar-track{flex:1;height:8px;background:var(--bg4);border-radius:4px;overflow:hidden}
.bar-fill{height:100%;border-radius:4px;transition:width .8s cubic-bezier(.4,0,.2,1)}
.bar-val{font-family:var(--fm);font-size:11px;color:var(--tx2);width:40px;text-align:right;flex-shrink:0}

/* FORM PANEL */
.form-panel{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:24px;margin-bottom:20px}
.form-panel-title{font-family:var(--fd);font-size:24px;letter-spacing:1px;margin-bottom:20px;display:flex;align-items:center;gap:10px}
.fp-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.fp-full{grid-column:1/-1}
.flbl{font-family:var(--fm);font-size:10px;letter-spacing:3px;color:var(--tx3);text-transform:uppercase;display:block;margin-bottom:7px}
.finput,.fsel,.ftextarea{width:100%;background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:10px 14px;color:var(--tx);font-family:var(--fb);font-size:14px;outline:none;transition:border-color var(--tr);-webkit-appearance:none}
.finput:focus,.fsel:focus,.ftextarea:focus{border-color:var(--a);box-shadow:0 0 0 3px rgba(205,255,71,.1)}
.finput::placeholder{color:var(--tx3)}
.ftextarea{resize:vertical;min-height:80px;line-height:1.5}
.fsave-btn{font-family:var(--fd);font-size:18px;letter-spacing:2px;background:var(--a);color:#000;border:none;border-radius:var(--rs);padding:12px 28px;cursor:pointer;transition:all var(--tr)}
.fsave-btn:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(205,255,71,.35)}
.fcancel-btn{font-family:var(--fm);font-size:13px;background:transparent;color:var(--tx2);border:1px solid var(--brd);border-radius:var(--rs);padding:12px 20px;cursor:pointer;transition:all var(--tr)}
.fcancel-btn:hover{border-color:var(--tx2);color:var(--tx)}

/* TOAST */
.toast-container{position:fixed;bottom:24px;right:24px;z-index:300;display:flex;flex-direction:column;gap:8px}
.toast{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--rs);padding:12px 16px;display:flex;align-items:center;gap:10px;font-family:var(--fm);font-size:12px;color:var(--tx);box-shadow:0 8px 24px var(--sh);transform:translateX(120%);transition:transform .4s cubic-bezier(.4,0,.2,1);max-width:280px}
.toast.show{transform:translateX(0)}

/* TAG */
.tag{font-family:var(--fm);font-size:10px;border-radius:100px;padding:3px 9px;border:1px solid var(--brd);color:var(--tx2);background:var(--bg3);display:inline-flex;align-items:center;gap:4px}
.tag.green{color:var(--a);border-color:rgba(205,255,71,.3);background:rgba(205,255,71,.08)}
.tag.cyan{color:var(--a3);border-color:rgba(0,229,255,.3);background:rgba(0,229,255,.08)}
.tag.red{color:var(--a2);border-color:rgba(255,59,92,.3);background:rgba(255,59,92,.08)}

/* ANIMATIONS */
@keyframes fadeUp{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:translateY(0)}}
.page-section.active{animation:fadeUp .3s ease}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.5}}

/* BURGER & MOBILE DRAWER */
.burger-btn{display:none;width:36px;height:36px;border-radius:var(--rs);background:var(--bg3);border:1px solid var(--brd);cursor:pointer;align-items:center;justify-content:center;flex-direction:column;gap:5px;flex-shrink:0;transition:all var(--tr)}
.burger-btn:hover{border-color:var(--a)}
.burger-btn span{display:block;width:16px;height:2px;background:var(--tx2);border-radius:2px;transition:all var(--tr)}
.burger-btn.open span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.burger-btn.open span:nth-child(2){opacity:0;transform:scaleX(0)}
.burger-btn.open span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.mobile-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,.6);z-index:98;backdrop-filter:blur(2px)}
.mobile-overlay.show{display:block}
.mobile-drawer{position:fixed;top:0;left:-280px;width:260px;height:100vh;background:var(--bg2);border-right:1px solid var(--brd);z-index:99;transition:left .28s cubic-bezier(.4,0,.2,1);overflow-y:auto;padding:0 0 40px}
.mobile-drawer.open{left:0}
.drawer-header{padding:16px 20px;border-bottom:1px solid var(--brd);display:flex;align-items:center;justify-content:space-between}
.drawer-logo{font-family:var(--fd);font-size:20px;letter-spacing:2px}
.drawer-logo span{color:var(--a)}
.drawer-close{width:30px;height:30px;border-radius:6px;background:var(--bg3);border:1px solid var(--brd);cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:14px;color:var(--tx2)}
.drawer-section{padding:16px 0 0}
.drawer-label{font-family:var(--fm);font-size:9px;letter-spacing:3px;color:var(--tx3);padding:0 18px;margin-bottom:8px;text-transform:uppercase}
.drawer-item{display:flex;align-items:center;gap:10px;padding:11px 18px;cursor:pointer;font-family:var(--fm);font-size:12px;color:var(--tx2);letter-spacing:.5px;border-left:2px solid transparent;transition:all var(--tr)}
.drawer-item:hover,.drawer-item.active{background:rgba(205,255,71,.08);color:var(--a);border-left-color:var(--a)}
.drawer-item.site-link{color:var(--tx3)}
.drawer-item.site-link:hover{color:var(--a);background:rgba(205,255,71,.05)}
.drawer-count{font-family:var(--fm);font-size:10px;margin-left:auto;background:var(--bg4);padding:2px 7px;border-radius:100px;color:var(--tx3)}
.drawer-divider{height:1px;background:var(--brd);margin:12px 0}

/* RESPONSIVE */
@media(max-width:900px){
  .sidebar{display:none}
  .burger-btn{display:flex}
  .topbar-right .tbtn.back-to-site{display:none}
  .chart-grid{grid-template-columns:1fr}
  .fp-grid{grid-template-columns:1fr}
}
@media(max-width:600px){
  .stat-grid{grid-template-columns:1fr 1fr}
  .admin-main{padding:16px}
}
</style>
</head>
<body>

<div class="topbar">
  <div class="topbar-logo">
    NGOPI<span>.</span>MLG
    <span class="topbar-badge">🔧 ADMIN PANEL</span>
  </div>
  <div class="topbar-right">
    <a href="{{ route('ngopi') }}" class="tbtn back-to-site" target="_blank">← Back to Site</a>
    <button class="theme-toggle" onclick="toggleTheme()" id="themeBtn">🌙</button>
    <button class="burger-btn" id="burgerBtn" onclick="toggleDrawer()" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</div>

<!-- MOBILE DRAWER -->
<div class="mobile-overlay" id="mobileOverlay" onclick="closeDrawer()"></div>
<div class="mobile-drawer" id="mobileDrawer">
  <div class="drawer-header">
    <div class="drawer-logo">NGOPI<span>.</span>MLG</div>
    <button class="drawer-close" onclick="closeDrawer()">✕</button>
  </div>
  <div class="drawer-section">
    <div class="drawer-label">Overview</div>
    <div class="drawer-item active" onclick="switchPage('dashboard',this);closeDrawer()">📊 Dashboard</div>
    <div class="drawer-item" onclick="switchPage('analytics',this);closeDrawer()">📈 Analytics</div>
  </div>
  <div class="drawer-divider"></div>
  <div class="drawer-section">
    <div class="drawer-label">Data Management</div>
    <div class="drawer-item" onclick="switchPage('cafes',this);closeDrawer()">☕ Daftar Kafe<span class="drawer-count" id="dcCafe">6</span></div>
    <div class="drawer-item" onclick="switchPage('add-cafe',this);closeDrawer()">➕ Tambah Kafe</div>
    <div class="drawer-item" onclick="switchPage('speedlogs',this);closeDrawer()">⚡ Speed Logs<span class="drawer-count" id="dcLog">5</span></div>
  </div>
  <div class="drawer-divider"></div>
  <div class="drawer-section">
    <div class="drawer-label">Moderation</div>
    <div class="drawer-item" onclick="switchPage('pending',this);closeDrawer()">⏳ Pending Review<span class="drawer-count" id="dcPending">3</span></div>
    <div class="drawer-item" onclick="switchPage('reports',this);closeDrawer()">🚩 Reports</div>
  </div>
  <div class="drawer-divider"></div>
  <div class="drawer-section">
    <div class="drawer-label">System</div>
    <div class="drawer-item" onclick="switchPage('settings',this);closeDrawer()">⚙️ Settings</div>
    <a href="ngopi-malang.html" class="drawer-item site-link" target="_blank">← Back to Site</a>
  </div>
</div>

<div class="admin-wrap">
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-section">
      <div class="sidebar-label">Overview</div>
      <div class="sidebar-item active" onclick="switchPage('dashboard',this)">📊 Dashboard</div>
      <div class="sidebar-item" onclick="switchPage('analytics',this)">📈 Analytics</div>
    </div>
    <div class="sidebar-section">
      <div class="sidebar-label">Data Management</div>
      <div class="sidebar-item" onclick="switchPage('cafes',this)">☕ Daftar Kafe<span class="sidebar-count" id="scCafe">6</span></div>
      <div class="sidebar-item" onclick="switchPage('add-cafe',this)">➕ Tambah Kafe</div>
      <div class="sidebar-item" onclick="switchPage('speedlogs',this)">⚡ Speed Logs<span class="sidebar-count" id="scLog">5</span></div>
    </div>
    <div class="sidebar-section">
      <div class="sidebar-label">Moderation</div>
      <div class="sidebar-item" onclick="switchPage('pending',this)">⏳ Pending Review<span class="sidebar-count" id="scPending">3</span></div>
      <div class="sidebar-item" onclick="switchPage('reports',this)">🚩 Reports</div>
    </div>
    <div class="sidebar-section">
      <div class="sidebar-label">System</div>
      <div class="sidebar-item" onclick="switchPage('settings',this)">⚙️ Settings</div>
    </div>
  </aside>

  <main class="admin-main">

    <!-- DASHBOARD -->
    <section class="page-section active" id="page-dashboard">
      <div class="page-header">
        <div>
          <div class="page-title">DASHBOARD</div>
          <div class="page-subtitle">// OVERVIEW KONDISI DATABASE</div>
        </div>
        <button class="tbtn" onclick="showToast('🔄 Data direfresh!','ok')">🔄 Refresh Data</button>
      </div>
      <div class="stat-grid">
        <div class="stat-card c1"><div class="stat-val">6</div><div class="stat-label">TOTAL KAFE</div><div class="stat-sub">+1 kafe baru bulan ini</div></div>
        <div class="stat-card c2"><div class="stat-val">5</div><div class="stat-label">SPEED LOGS</div><div class="stat-sub">Update terbaru 2j lalu</div></div>
        <div class="stat-card c3"><div class="stat-val">3</div><div class="stat-label">PENDING</div><div class="stat-sub">Perlu review sekarang</div></div>
        <div class="stat-card c4"><div class="stat-val">247</div><div class="stat-label">TOTAL USER REPORTS</div><div class="stat-sub">+12 hari ini</div></div>
      </div>

      <div class="chart-grid">
        <div class="chart-card">
          <div class="chart-title">⚡ TOP SPEED RANKING</div>
          <div class="bar-chart" id="speedChart"></div>
        </div>
        <div class="chart-card">
          <div class="chart-title">📊 SCORE RANKING</div>
          <div class="bar-chart" id="scoreChart"></div>
        </div>
      </div>

      <div class="table-wrap">
        <div class="table-header">
          <div class="table-title">⏳ PENDING SUBMISSIONS</div>
          <button class="tbtn" onclick="switchPage('pending',document.querySelector('[onclick*=\"pending\"]'))">Lihat Semua →</button>
        </div>
        <div class="table-scroll"><table>
          <thead><tr><th>Kafe</th><th>Submitter</th><th>DL/UL/Ping</th><th>Tanggal</th><th>Aksi</th></tr></thead>
          <tbody id="dashPending"></tbody>
        </table></div>
      </div>
    </section>

    <!-- ANALYTICS -->
    <section class="page-section" id="page-analytics">
      <div class="page-header">
        <div><div class="page-title">ANALYTICS</div><div class="page-subtitle">// STATISTIK & TREN DATA</div></div>
      </div>
      <div class="stat-grid">
        <div class="stat-card c1"><div class="stat-val">87</div><div class="stat-label">AVG DOWNLOAD (Mbps)</div><div class="stat-sub">Rata-rata semua kafe</div></div>
        <div class="stat-card c2"><div class="stat-val">45</div><div class="stat-label">AVG UPLOAD (Mbps)</div><div class="stat-sub">Rata-rata semua kafe</div></div>
        <div class="stat-card c3"><div class="stat-val">11</div><div class="stat-label">AVG PING (ms)</div><div class="stat-sub">Rata-rata semua kafe</div></div>
        <div class="stat-card c4"><div class="stat-val">71</div><div class="stat-label">AVG SCORE</div><div class="stat-sub">Weighted average</div></div>
      </div>
      <div class="chart-grid">
        <div class="chart-card">
          <div class="chart-title">🗺️ DISTRIBUSI AREA</div>
          <div class="bar-chart" id="areaChart"></div>
        </div>
        <div class="chart-card">
          <div class="chart-title">💰 DISTRIBUSI HARGA</div>
          <div class="bar-chart" id="priceChart"></div>
        </div>
      </div>
    </section>

    <!-- DAFTAR KAFE -->
    <section class="page-section" id="page-cafes">
      <div class="page-header">
        <div><div class="page-title">DAFTAR KAFE</div><div class="page-subtitle">// KELOLA DATA KAFE</div></div>
        <div style="display:flex;gap:8px">
          <input class="search-mini" id="cafeSearch" type="text" placeholder="Cari kafe..." oninput="filterCafeTable(this.value)">
          <button class="tbtn" onclick="switchPage('add-cafe',document.querySelector('[onclick*=\"add-cafe\"]'))">+ Tambah</button>
        </div>
      </div>
      <div class="table-wrap">
        <div class="table-scroll"><table>
          <thead><tr><th>#</th><th>Nama Kafe</th><th>Area</th><th>Download</th><th>Ping</th><th>Score</th><th>Status</th><th>Fasilitas</th><th>Aksi</th></tr></thead>
          <tbody id="cafeTable"></tbody>
        </table></div>
      </div>
    </section>

    <!-- TAMBAH KAFE -->
    <section class="page-section" id="page-add-cafe">
      <div class="page-header">
        <div><div class="page-title">TAMBAH KAFE</div><div class="page-subtitle">// INPUT DATA KAFE BARU</div></div>
      </div>
      <div class="form-panel">
        <div class="form-panel-title">☕ Info Kafe</div>
        <div class="fp-grid">
          <div><label class="flbl">Nama Kafe *</label><input class="finput" id="ac-name" type="text" placeholder="cth: Omah Kopi Baru"></div>
          <div><label class="flbl">Area *</label>
            <select class="fsel" id="ac-area">
              <option value="">-- Pilih area --</option>
              <option>Suhat</option><option>Dau</option><option>Klojen</option>
              <option>Ijen</option><option>Sigura-gura</option><option>Dinoyo</option><option>Lainnya</option>
            </select>
          </div>
          <div class="fp-full"><label class="flbl">Alamat Lengkap *</label><input class="finput" id="ac-address" type="text" placeholder="cth: Jl. Ijen No.10, Klojen, Malang"></div>
          <div><label class="flbl">Jam Operasional</label><input class="finput" id="ac-hours" type="text" placeholder="07:00–22:00"></div>
          <div><label class="flbl">Link Google Maps</label><input class="finput" id="ac-gmaps" type="url" placeholder="https://maps.google.com/..."></div>
          <div><label class="flbl">Latitude</label><input class="finput" id="ac-lat" type="number" step="0.0001" placeholder="-7.9xxx"></div>
          <div><label class="flbl">Longitude</label><input class="finput" id="ac-lng" type="number" step="0.0001" placeholder="112.6xxx"></div>
          <div><label class="flbl">URL Foto Kafe</label><input class="finput" id="ac-img" type="url" placeholder="https://images.unsplash.com/..."></div>
        </div>
      </div>
      <div class="form-panel">
        <div class="form-panel-title">📡 WiFi Speed Data</div>
        <div class="fp-grid">
          <div><label class="flbl">Download (Mbps)</label><input class="finput" id="ac-dl" type="number" min="0" max="500" placeholder="50"></div>
          <div><label class="flbl">Upload (Mbps)</label><input class="finput" id="ac-ul" type="number" min="0" max="200" placeholder="25"></div>
          <div><label class="flbl">Ping (ms)</label><input class="finput" id="ac-ping" type="number" min="0" max="500" placeholder="20"></div>
        </div>
      </div>
      <div class="form-panel">
        <div class="form-panel-title">🏷️ Fasilitas & Info</div>
        <div class="fp-grid">
          <div><label class="flbl">AC</label>
            <select class="fsel" id="ac-ac"><option value="1">✅ Ada AC</option><option value="0">❌ Non-AC</option></select>
          </div>
          <div><label class="flbl">Colokan</label>
            <select class="fsel" id="ac-colokan"><option value="banyak">🔌 Banyak</option><option value="sedikit">⚡ Sedikit</option></select>
          </div>
          <div><label class="flbl">Kursi</label>
            <select class="fsel" id="ac-kursi"><option value="sofa">🛋️ Sofa</option><option value="kayu">🪑 Kayu</option></select>
          </div>
          <div><label class="flbl">Range Harga (1–3)</label>
            <select class="fsel" id="ac-price">
              <option value="1">💚 Murah (Rp 8rb–25rb)</option>
              <option value="2">💛 Sedang (Rp 15rb–40rb)</option>
              <option value="3">🔴 Mahal (Rp 25rb–60rb+)</option>
            </select>
          </div>
          <div><label class="flbl">Label Harga</label><input class="finput" id="ac-pricelabel" type="text" placeholder="Rp 15rb–30rb"></div>
          <div><label class="flbl">Status Awal</label>
            <select class="fsel" id="ac-status"><option value="sepi">🟢 Lagi Sepi</option><option value="ramai">🔴 Lagi Ramai</option></select>
          </div>
          <div class="fp-full"><label class="flbl">Tags (pisahkan dengan koma)</label><input class="finput" id="ac-tags" type="text" placeholder="colokan banyak, ac, outdoor, sofa"></div>
        </div>
      </div>
      <div style="display:flex;gap:12px;margin-top:8px">
        <button class="fsave-btn" onclick="saveNewCafe()">💾 SIMPAN KAFE</button>
        <button class="fcancel-btn" onclick="switchPage('cafes',document.querySelector('[onclick*=\"\\\'cafes\\\'\"]'))">Batal</button>
      </div>
    </section>

    <!-- SPEED LOGS -->
    <section class="page-section" id="page-speedlogs">
      <div class="page-header">
        <div><div class="page-title">SPEED LOGS</div><div class="page-subtitle">// RIWAYAT SUBMISSION SPEEDTEST</div></div>
        <button class="tbtn danger" onclick="if(confirm('Hapus semua log?')){speedLog=[];renderSpeedLogTable();showToast('🗑️ Log dihapus','ok')}">🗑️ Clear All</button>
      </div>
      <div class="table-wrap">
        <div class="table-scroll"><table>
          <thead><tr><th>#</th><th>Kafe</th><th>Download</th><th>Upload</th><th>Ping</th><th>Submitter</th><th>Tanggal</th><th>Aksi</th></tr></thead>
          <tbody id="speedLogTable"></tbody>
        </table></div>
      </div>
    </section>

    <!-- PENDING -->
    <section class="page-section" id="page-pending">
      <div class="page-header">
        <div><div class="page-title">PENDING REVIEW</div><div class="page-subtitle">// SUBMISSIONS YANG PERLU DIVERIFIKASI</div></div>
        <div style="display:flex;gap:8px">
          <button class="tbtn" onclick="approveAll()">✅ Approve All</button>
          <button class="tbtn danger" onclick="rejectAll()">❌ Reject All</button>
        </div>
      </div>
      <div class="table-wrap">
        <div class="table-scroll"><table>
          <thead><tr><th>#</th><th>Kafe</th><th>DL/UL/Ping</th><th>Kondisi</th><th>Foto</th><th>Catatan</th><th>Submitter</th><th>Tanggal</th><th>Aksi</th></tr></thead>
          <tbody id="pendingTable"></tbody>
        </table></div>
      </div>
    </section>

    <!-- REPORTS -->
    <section class="page-section" id="page-reports">
      <div class="page-header">
        <div><div class="page-title">REPORTS</div><div class="page-subtitle">// LAPORAN USER TERKAIT KONDISI KAFE</div></div>
      </div>
      <div class="table-wrap">
        <div class="table-scroll"><table>
          <thead><tr><th>#</th><th>Kafe</th><th>Tipe Report</th><th>Deskripsi</th><th>Tanggal</th><th>Aksi</th></tr></thead>
          <tbody id="reportsTable"></tbody>
        </table></div>
      </div>
    </section>

    <!-- SETTINGS -->
    <section class="page-section" id="page-settings">
      <div class="page-header">
        <div><div class="page-title">SETTINGS</div><div class="page-subtitle">// KONFIGURASI SISTEM</div></div>
      </div>
      <div class="form-panel">
        <div class="form-panel-title">⚖️ Weighted Score Formula</div>
        <div style="font-family:var(--fm);font-size:11px;color:var(--tx3);letter-spacing:1px;margin-bottom:16px">// Total jumlah harus = 100%</div>
        <div class="fp-grid">
          <div><label class="flbl">Download Speed Weight (%)</label><input class="finput" id="w-dl" type="number" value="40" min="0" max="100"></div>
          <div><label class="flbl">Ping/Stability Weight (%)</label><input class="finput" id="w-ping" type="number" value="20" min="0" max="100"></div>
          <div><label class="flbl">Fasilitas Colokan Weight (%)</label><input class="finput" id="w-colokan" type="number" value="25" min="0" max="100"></div>
          <div><label class="flbl">Harga/Affordability Weight (%)</label><input class="finput" id="w-price" type="number" value="15" min="0" max="100"></div>
        </div>
        <div style="margin-top:16px;font-family:var(--fm);font-size:12px;color:var(--tx3)">
          Total: <span id="weightTotal" style="color:var(--a);font-size:16px;font-family:var(--fd)">100</span>%
        </div>
        <div style="display:flex;gap:12px;margin-top:20px">
          <button class="fsave-btn" onclick="saveWeights()">💾 SIMPAN</button>
        </div>
      </div>
      <div class="form-panel">
        <div class="form-panel-title">🌐 Site Config</div>
        <div class="fp-grid">
          <div><label class="flbl">Site Title</label><input class="finput" type="text" value="NGOPI.MLG"></div>
          <div><label class="flbl">Max Kafe per Page</label><input class="finput" type="number" value="12"></div>
          <div class="fp-full"><label class="flbl">Deskripsi Site</label><textarea class="ftextarea">Kafe terbaik di Malang buat kerja remote & nugas.</textarea></div>
        </div>
        <div style="margin-top:16px"><button class="fsave-btn" onclick="showToast('✅ Config disimpan!','ok')">💾 SIMPAN</button></div>
      </div>
    </section>

  </main>
</div>

<div class="toast-container" id="toastContainer"></div>

<script>
// ========== DATA (shared state) ==========
const cafes = [
  {id:1,name:"Noi Coffee",area:"Ijen",address:"Jl. Ijen No.12, Klojen, Malang",download:87,upload:42,ping:8,colokan:"banyak",ac:true,kursi:"sofa",price:3,priceLabel:"Rp 25rb–50rb",hours:"07:00–23:00",status:"sepi",tags:["colokan banyak","ac","sofa"]},
  {id:2,name:"Filosofi Kopi",area:"Suhat",address:"Jl. Sukarno-Hatta No.5, Malang",download:52,upload:28,ping:12,colokan:"banyak",ac:true,kursi:"kayu",price:2,priceLabel:"Rp 15rb–30rb",hours:"08:00–22:00",status:"ramai",tags:["colokan banyak","ac"]},
  {id:3,name:"Omah Kopi",area:"Dau",address:"Jl. Raya Dau No.88, Malang",download:73,upload:35,ping:15,colokan:"sedikit",ac:false,kursi:"sofa",price:2,priceLabel:"Rp 15rb–35rb",hours:"09:00–21:00",status:"sepi",tags:["outdoor","view gunung"]},
  {id:4,name:"Kedai 97",area:"Sigura-gura",address:"Jl. Sigura-gura No.30, Malang",download:95,upload:65,ping:5,colokan:"banyak",ac:true,kursi:"kayu",price:1,priceLabel:"Rp 10rb–25rb",hours:"07:00–24:00",status:"sepi",tags:["murah","24 jam"]},
  {id:5,name:"Kopitiam Dinoyo",area:"Dinoyo",address:"Jl. MT Haryono No.167, Malang",download:41,upload:18,ping:22,colokan:"sedikit",ac:false,kursi:"kayu",price:1,priceLabel:"Rp 8rb–20rb",hours:"06:00–22:00",status:"ramai",tags:["murah","dekat kampus"]},
  {id:6,name:"Ruang Karya Co.",area:"Klojen",address:"Jl. Semeru No.4, Klojen, Malang",download:120,upload:80,ping:3,colokan:"banyak",ac:true,kursi:"sofa",price:3,priceLabel:"Rp 30rb–60rb",hours:"08:00–22:00",status:"sepi",tags:["co-working","sofa"]}
];

let speedLog = [
  {id:1,cafeId:6,cafeName:"Ruang Karya Co.",dl:120,ul:80,ping:3,by:"Ahmad B.",date:"04 Mar 2025, 09:12",status:"approved"},
  {id:2,cafeId:4,cafeName:"Kedai 97",dl:95,ul:65,ping:5,by:"Kevin A.",date:"04 Mar 2025, 08:45",status:"approved"},
  {id:3,cafeId:1,cafeName:"Noi Coffee",dl:87,ul:42,ping:8,by:"Sinta R.",date:"03 Mar 2025, 21:30",status:"approved"},
  {id:4,cafeId:3,cafeName:"Omah Kopi",dl:73,ul:35,ping:15,by:"Maya S.",date:"03 Mar 2025, 16:00",status:"approved"},
  {id:5,cafeId:2,cafeName:"Filosofi Kopi",dl:52,ul:28,ping:12,by:"Budi W.",date:"03 Mar 2025, 11:22",status:"approved"}
];

let pendingItems = [
  {id:101,cafeId:2,cafeName:"Filosofi Kopi",dl:48,ul:22,ping:18,status_kafe:"sepi",note:"Pagi sepi banget, colokan masih ada",by:"Rizal M.",date:"04 Mar 2025, 07:30",hasPhoto:true},
  {id:102,cafeId:0,cafeName:"Kopi Kenangan Soekarno-Hatta",dl:65,ul:30,ping:11,status_kafe:"ramai",note:"Kafe baru, WiFi lumayan kencang",by:"Dewi S.",date:"03 Mar 2025, 19:45",hasPhoto:true},
  {id:103,cafeId:4,cafeName:"Kedai 97",dl:101,ul:70,ping:4,status_kafe:"sepi",note:"Speed meningkat drastis!",by:"Andi P.",date:"03 Mar 2025, 15:10",hasPhoto:false}
];

let reports = [
  {id:201,cafeName:"Filosofi Kopi",type:"WiFi Bermasalah",desc:"WiFi mati total dari jam 12–15",date:"04 Mar 2025",status:"open"},
  {id:202,cafeName:"Omah Kopi",type:"Info Salah",desc:"Jam buka berubah jadi 10:00–20:00",date:"03 Mar 2025",status:"open"},
  {id:203,cafeName:"Kopitiam Dinoyo",type:"Penuh/Ramai",desc:"Meja penuh, antrian panjang",date:"03 Mar 2025",status:"resolved"}
];

// ========== SCORING ==========
function calcScore(c){
  return Math.round(Math.min(100,(c.download/100)*100)*.4+Math.max(0,100-c.ping)*.2+(c.colokan==='banyak'?100:30)*.25+(c.price===1?100:c.price===2?70:40)*.15);
}
function scoreClass(s){return s>=70?'high':s>=50?'mid':'low'}

// ========== MOBILE DRAWER ==========
function toggleDrawer(){
  const d=document.getElementById('mobileDrawer'),o=document.getElementById('mobileOverlay'),b=document.getElementById('burgerBtn');
  const isOpen=d.classList.contains('open');
  d.classList.toggle('open',!isOpen);o.classList.toggle('show',!isOpen);b.classList.toggle('open',!isOpen);
}
function closeDrawer(){
  document.getElementById('mobileDrawer').classList.remove('open');
  document.getElementById('mobileOverlay').classList.remove('show');
  document.getElementById('burgerBtn').classList.remove('open');
}

// ========== NAVIGATION ==========
function switchPage(id, el) {
  document.querySelectorAll('.page-section').forEach(s=>s.classList.remove('active'));
  document.querySelectorAll('.sidebar-item').forEach(s=>s.classList.remove('active'));
  document.querySelectorAll('.drawer-item').forEach(s=>s.classList.remove('active'));
  document.getElementById('page-'+id).classList.add('active');
  if(el)el.classList.add('active');
  // Render relevant data
  if(id==='cafes')renderCafeTable();
  if(id==='speedlogs')renderSpeedLogTable();
  if(id==='pending')renderPendingTable();
  if(id==='reports')renderReportsTable();
  if(id==='analytics')renderAnalytics();
  if(id==='dashboard')renderDashboard();
}

// ========== RENDER DASHBOARD ==========
function renderDashboard(){
  // Speed chart
  const sorted=[...cafes].sort((a,b)=>b.download-a.download);
  document.getElementById('speedChart').innerHTML=sorted.map(c=>`
    <div class="bar-row">
      <div class="bar-label">${c.name}</div>
      <div class="bar-track"><div class="bar-fill" style="width:${Math.min(100,(c.download/120)*100)}%;background:var(--a)"></div></div>
      <div class="bar-val">${c.download}</div>
    </div>`).join('');
  // Score chart
  const scoreSorted=[...cafes].map(c=>({...c,score:calcScore(c)})).sort((a,b)=>b.score-a.score);
  document.getElementById('scoreChart').innerHTML=scoreSorted.map(c=>`
    <div class="bar-row">
      <div class="bar-label">${c.name}</div>
      <div class="bar-track"><div class="bar-fill" style="width:${c.score}%;background:${c.score>=70?'var(--a)':c.score>=50?'var(--a3)':'var(--a2)'}"></div></div>
      <div class="bar-val">${c.score}</div>
    </div>`).join('');
  // Pending preview
  document.getElementById('dashPending').innerHTML=pendingItems.slice(0,3).map((p,i)=>`
    <tr>
      <td class="td-mono">${i+1}</td>
      <td><div class="td-name">${p.cafeName}</div></td>
      <td><span class="td-mono">${p.by}</span></td>
      <td><span class="td-mono">${p.dl}↓ / ${p.ul}↑ / ${p.ping}ms</span></td>
      <td><span class="td-mono">${p.date}</span></td>
      <td><div class="action-btns">
        <button class="act-btn approve" onclick="approvePending(${p.id})">✅ Approve</button>
        <button class="act-btn del" onclick="rejectPending(${p.id})">❌ Reject</button>
      </div></td>
    </tr>`).join('');
}

// ========== RENDER CAFE TABLE ==========
function renderCafeTable(filter=''){
  const list=cafes.filter(c=>!filter||c.name.toLowerCase().includes(filter.toLowerCase())||c.area.toLowerCase().includes(filter.toLowerCase()));
  document.getElementById('cafeTable').innerHTML=list.map((c,i)=>{
    const s=calcScore(c);const sc=scoreClass(s);
    return `<tr>
      <td class="td-mono">${i+1}</td>
      <td><div class="td-name">${c.name}</div><div class="td-mono">📍 ${c.area}</div></td>
      <td><span class="td-mono">${c.area}</span></td>
      <td><span style="font-family:var(--fd);font-size:18px;color:var(--a)">${c.download}</span><span class="td-mono"> Mbps</span></td>
      <td><span style="font-family:var(--fd);font-size:18px;color:${c.ping<20?'var(--a)':'var(--a2)'}">${c.ping}</span><span class="td-mono"> ms</span></td>
      <td><span class="score-badge ${sc}">${s}</span></td>
      <td><span class="status-dot ${c.status}">${c.status==='sepi'?'Lagi Sepi':'Lagi Ramai'}</span></td>
      <td>
        ${c.ac?'<span class="tag cyan">AC</span>':''}
        <span class="tag ${c.colokan==='banyak'?'green':'red'}">🔌 ${c.colokan}</span>
      </td>
      <td><div class="action-btns">
        <button class="act-btn" onclick="editCafe(${c.id})">✏️ Edit</button>
        <button class="act-btn" onclick="toggleStatus(${c.id})">${c.status==='sepi'?'→ Ramai':'→ Sepi'}</button>
        <button class="act-btn del" onclick="deleteCafe(${c.id})">🗑️</button>
      </div></td>
    </tr>`;
  }).join('');
  document.getElementById('scCafe').textContent=cafes.length;
  if(document.getElementById('dcCafe'))document.getElementById('dcCafe').textContent=cafes.length;
}

function filterCafeTable(v){renderCafeTable(v)}
function deleteCafe(id){if(confirm('Hapus kafe ini?')){const i=cafes.findIndex(c=>c.id===id);cafes.splice(i,1);renderCafeTable();showToast('🗑️ Kafe dihapus','ok')}}
function toggleStatus(id){const c=cafes.find(x=>x.id===id);if(c){c.status=c.status==='sepi'?'ramai':'sepi';renderCafeTable();showToast(`🔄 Status ${c.name} diupdate`,'ok')}}
function editCafe(id){switchPage('add-cafe',document.querySelector('[onclick*="add-cafe"]'));showToast('📝 Edit mode untuk ID '+id,'ok')}

// ========== RENDER SPEED LOG ==========
function renderSpeedLogTable(){
  document.getElementById('speedLogTable').innerHTML=speedLog.map((e,i)=>`
    <tr>
      <td class="td-mono">${i+1}</td>
      <td><div class="td-name">${e.cafeName}</div></td>
      <td><span style="font-family:var(--fd);font-size:18px;color:var(--a)">${e.dl}</span><span class="td-mono"> Mbps</span></td>
      <td><span style="font-family:var(--fd);font-size:18px;color:var(--a3)">${e.ul}</span><span class="td-mono"> Mbps</span></td>
      <td><span style="font-family:var(--fd);font-size:18px;color:${e.ping<20?'var(--a)':'var(--a2)'}">${e.ping}</span><span class="td-mono"> ms</span></td>
      <td><span class="td-mono">${e.by}</span></td>
      <td><span class="td-mono">${e.date}</span></td>
      <td><div class="action-btns">
        <button class="act-btn del" onclick="deleteLog(${e.id})">🗑️</button>
      </div></td>
    </tr>`).join('');
  document.getElementById('scLog').textContent=speedLog.length;
  if(document.getElementById('dcLog'))document.getElementById('dcLog').textContent=speedLog.length;
}
function deleteLog(id){speedLog=speedLog.filter(e=>e.id!==id);renderSpeedLogTable();showToast('🗑️ Log dihapus','ok')}

// ========== RENDER PENDING ==========
function renderPendingTable(){
  document.getElementById('pendingTable').innerHTML=pendingItems.map((p,i)=>`
    <tr>
      <td class="td-mono">${i+1}</td>
      <td><div class="td-name">${p.cafeName}</div>${p.cafeId===0?'<span class="pending-badge">BARU</span>':''}</td>
      <td><span class="td-mono">${p.dl}↓ / ${p.ul}↑ / ${p.ping}ms</span></td>
      <td><span class="status-dot ${p.status_kafe}">${p.status_kafe==='sepi'?'Lagi Sepi':'Lagi Ramai'}</span></td>
      <td>${p.hasPhoto?'<span class="tag green">📸 Ada</span>':'<span class="tag">❌ Tidak ada</span>'}</td>
      <td><span style="font-size:12px;color:var(--tx2)">${p.note||'—'}</span></td>
      <td><span class="td-mono">${p.by}</span></td>
      <td><span class="td-mono">${p.date}</span></td>
      <td><div class="action-btns">
        <button class="act-btn approve" onclick="approvePending(${p.id})">✅</button>
        <button class="act-btn del" onclick="rejectPending(${p.id})">❌</button>
      </div></td>
    </tr>`).join('');
  document.getElementById('scPending').textContent=pendingItems.length;
  if(document.getElementById('dcPending'))document.getElementById('dcPending').textContent=pendingItems.length;
}
function approvePending(id){
  const p=pendingItems.find(x=>x.id===id);
  if(p&&p.cafeId>0){const c=cafes.find(x=>x.id===p.cafeId);if(c){c.download=p.dl;c.upload=p.ul;c.ping=p.ping;c.status=p.status_kafe;}}
  pendingItems=pendingItems.filter(x=>x.id!==id);
  speedLog.unshift({id:Date.now(),cafeId:p.cafeId,cafeName:p.cafeName,dl:p.dl,ul:p.ul,ping:p.ping,by:p.by,date:p.date,status:'approved'});
  renderPendingTable();renderDashboard();showToast('✅ Submission diapprove!','ok');
}
function rejectPending(id){pendingItems=pendingItems.filter(x=>x.id!==id);renderPendingTable();showToast('❌ Submission direject','ok')}
function approveAll(){const ids=[...pendingItems.map(p=>p.id)];ids.forEach(id=>approvePending(id));showToast('✅ Semua diapprove!','ok')}
function rejectAll(){pendingItems=[];renderPendingTable();showToast('❌ Semua direject','ok')}

// ========== RENDER REPORTS ==========
function renderReportsTable(){
  document.getElementById('reportsTable').innerHTML=reports.map((r,i)=>`
    <tr>
      <td class="td-mono">${i+1}</td>
      <td><div class="td-name">${r.cafeName}</div></td>
      <td><span class="tag ${r.type.includes('WiFi')?'red':'cyan'}">${r.type}</span></td>
      <td><span style="font-size:12px;color:var(--tx2)">${r.desc}</span></td>
      <td><span class="td-mono">${r.date}</span></td>
      <td><div class="action-btns">
        ${r.status==='open'?`<button class="act-btn approve" onclick="resolveReport(${r.id})">✅ Resolve</button>`:'<span class="tag green">✓ Resolved</span>'}
        <button class="act-btn del" onclick="deleteReport(${r.id})">🗑️</button>
      </div></td>
    </tr>`).join('');
}
function resolveReport(id){const r=reports.find(x=>x.id===id);if(r)r.status='resolved';renderReportsTable();showToast('✅ Report diresolved','ok')}
function deleteReport(id){reports=reports.filter(x=>x.id!==id);renderReportsTable();showToast('🗑️ Report dihapus','ok')}

// ========== ANALYTICS ==========
function renderAnalytics(){
  const areas=[...new Set(cafes.map(c=>c.area))];
  document.getElementById('areaChart').innerHTML=areas.map(a=>{
    const cnt=cafes.filter(c=>c.area===a).length;
    return `<div class="bar-row"><div class="bar-label">${a}</div><div class="bar-track"><div class="bar-fill" style="width:${cnt/cafes.length*100}%;background:var(--a3)"></div></div><div class="bar-val">${cnt} kafe</div></div>`;
  }).join('');
  const prices=[{l:'Murah (Rp<25rb)',v:cafes.filter(c=>c.price===1).length},{l:'Sedang',v:cafes.filter(c=>c.price===2).length},{l:'Mahal',v:cafes.filter(c=>c.price===3).length}];
  document.getElementById('priceChart').innerHTML=prices.map(p=>`
    <div class="bar-row"><div class="bar-label">${p.l}</div><div class="bar-track"><div class="bar-fill" style="width:${p.v/cafes.length*100}%;background:var(--a2)"></div></div><div class="bar-val">${p.v}</div></div>`).join('');
}

// ========== ADD CAFE ==========
function saveNewCafe(){
  const name=document.getElementById('ac-name').value.trim();
  const area=document.getElementById('ac-area').value;
  const address=document.getElementById('ac-address').value.trim();
  const dl=parseInt(document.getElementById('ac-dl').value)||0;
  const ul=parseInt(document.getElementById('ac-ul').value)||0;
  const ping=parseInt(document.getElementById('ac-ping').value)||0;
  if(!name||!area||!address){showToast('⚠️ Lengkapi data yang wajib!','err');return;}
  const newId=Math.max(...cafes.map(c=>c.id))+1;
  cafes.push({
    id:newId,name,area,address,
    download:dl,upload:ul,ping,
    ac:document.getElementById('ac-ac').value==='1',
    colokan:document.getElementById('ac-colokan').value,
    kursi:document.getElementById('ac-kursi').value,
    price:parseInt(document.getElementById('ac-price').value),
    priceLabel:document.getElementById('ac-pricelabel').value||'Rp ???',
    hours:document.getElementById('ac-hours').value||'08:00–22:00',
    status:document.getElementById('ac-status').value,
    tags:(document.getElementById('ac-tags').value||'').split(',').map(t=>t.trim()).filter(Boolean),
    img:'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600&q=80',
    lat:parseFloat(document.getElementById('ac-lat').value)||null,
    lng:parseFloat(document.getElementById('ac-lng').value)||null,
    gmaps:document.getElementById('ac-gmaps').value||`https://maps.google.com/?q=${name}+Malang`
  });
  showToast(`✅ ${name} berhasil ditambahkan!`,'ok');
  switchPage('cafes',document.querySelectorAll('.sidebar-item')[2]);
}

// ========== SETTINGS ==========
function saveWeights(){
  const vals=['w-dl','w-ping','w-colokan','w-price'].map(id=>parseInt(document.getElementById(id).value)||0);
  const total=vals.reduce((a,b)=>a+b,0);
  document.getElementById('weightTotal').textContent=total;
  document.getElementById('weightTotal').style.color=total===100?'var(--a)':'var(--a2)';
  if(total!==100){showToast('⚠️ Total harus 100%! Sekarang: '+total+'%','err');return;}
  showToast('✅ Bobot scoring disimpan!','ok');
}
['w-dl','w-ping','w-colokan','w-price'].forEach(id=>{
  setTimeout(()=>{const el=document.getElementById(id);if(el)el.addEventListener('input',()=>{
    const t=['w-dl','w-ping','w-colokan','w-price'].map(i=>parseInt(document.getElementById(i).value)||0).reduce((a,b)=>a+b,0);
    const wt=document.getElementById('weightTotal');if(wt){wt.textContent=t;wt.style.color=t===100?'var(--a)':'var(--a2)';}
  })},100);
});

// ========== TOAST ==========
function showToast(msg,type){
  const icons={ok:'✅',err:'⚠️',ok:'✅'};
  const c=document.getElementById('toastContainer');
  const t=document.createElement('div');t.className='toast';
  t.innerHTML=`<span>${type==='ok'?'✅':type==='err'?'⚠️':'ℹ️'}</span><span>${msg}</span>`;
  c.appendChild(t);setTimeout(()=>t.classList.add('show'),10);
  setTimeout(()=>{t.classList.remove('show');setTimeout(()=>t.remove(),400);},3000);
}

// ========== THEME ==========
function toggleTheme(){
  const h=document.documentElement,b=document.getElementById('themeBtn');
  if(h.getAttribute('data-theme')==='dark'){h.setAttribute('data-theme','light');b.textContent='☀️';}
  else{h.setAttribute('data-theme','dark');b.textContent='🌙';}
}

// ========== INIT ==========
renderDashboard();
renderCafeTable();
renderSpeedLogTable();
renderPendingTable();
renderReportsTable();
</script>
</body>
</html>
