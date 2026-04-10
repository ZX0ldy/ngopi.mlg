<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil — NGOPI.MLG</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Grotesk:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--a:#CDFF47;--a2:#FF3B5C;--a3:#00E5FF;--a4:#FF9F47;--fd:'Bebas Neue',sans-serif;--fb:'Space Grotesk',sans-serif;--fm:'DM Mono',monospace;--r:16px;--rs:8px;--tr:.25s cubic-bezier(.4,0,.2,1)}
[data-theme="dark"]{--bg:#0A0A0B;--bg2:#111114;--bg3:#1A1A1F;--bg4:#242429;--brd:#2A2A30;--tx:#F0F0F5;--tx2:#888896;--tx3:#555560;--sh:rgba(0,0,0,.6);--a:#CDFF47;--a2:#FF3B5C;--a3:#00E5FF}
[data-theme="light"]{--bg:#FAF9F6;--bg2:#F2F1EE;--bg3:#E8E6E1;--bg4:#DDD9D2;--brd:#C8C4BC;--tx:#18181A;--tx2:#4A4A52;--tx3:#8A8880;--sh:rgba(0,0,0,.10);--a:#6BBF00;--a2:#E02040;--a3:#007BB5}
html{scroll-behavior:smooth}
body{font-family:var(--fb);background:var(--bg);color:var(--tx);min-height:100vh;transition:background var(--tr),color var(--tr)}
::-webkit-scrollbar{width:5px}::-webkit-scrollbar-thumb{background:var(--a);border-radius:3px}

nav{position:sticky;top:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:14px 28px;background:rgba(10,10,11,.92);border-bottom:1px solid var(--brd);backdrop-filter:blur(20px)}
[data-theme="light"] nav{background:rgba(250,249,246,.92)}
.nav-logo{font-family:var(--fd);font-size:24px;letter-spacing:2px;color:var(--tx);text-decoration:none}
.nav-logo span{color:var(--a)}
.nav-right{display:flex;align-items:center;gap:10px}
.nbtn{font-family:var(--fm);font-size:11px;color:var(--tx2);text-decoration:none;border:1px solid var(--brd);border-radius:100px;padding:7px 16px;transition:all var(--tr);background:transparent;cursor:pointer;letter-spacing:.5px}
.nbtn:hover{border-color:var(--a);color:var(--a)}
.theme-btn{width:36px;height:36px;border-radius:50%;background:var(--bg3);border:1px solid var(--brd);cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:16px;transition:all var(--tr)}
.theme-btn:hover{background:var(--a);transform:rotate(20deg)}

/* PROFILE HERO */
.profile-hero{background:var(--bg2);border-bottom:1px solid var(--brd);padding:40px;position:relative;overflow:hidden}
.ph-bg{position:absolute;inset:0;background:linear-gradient(135deg,rgba(205,255,71,.05) 0%,transparent 50%),linear-gradient(315deg,rgba(0,229,255,.04) 0%,transparent 50%);pointer-events:none}
.ph-grid{position:absolute;inset:0;background-image:linear-gradient(var(--brd) 1px,transparent 1px),linear-gradient(90deg,var(--brd) 1px,transparent 1px);background-size:36px 36px;opacity:.2;pointer-events:none}
.ph-inner{max-width:1100px;margin:0 auto;position:relative;z-index:1;display:flex;align-items:flex-end;gap:28px;flex-wrap:wrap}
.ph-avatar{width:96px;height:96px;border-radius:50%;background:var(--bg3);border:3px solid var(--a);display:flex;align-items:center;justify-content:center;font-size:44px;flex-shrink:0;box-shadow:0 0 0 6px rgba(205,255,71,.1);position:relative;cursor:pointer}
.ph-avatar-edit{position:absolute;bottom:2px;right:2px;width:24px;height:24px;border-radius:50%;background:var(--a);display:flex;align-items:center;justify-content:center;font-size:12px;color:#000;border:2px solid var(--bg2)}
.ph-info{flex:1;min-width:200px}
.ph-name{font-family:var(--fd);font-size:clamp(36px,5vw,56px);letter-spacing:1px;line-height:.95;margin-bottom:4px}
.ph-username{font-family:var(--fm);font-size:13px;color:var(--a);letter-spacing:.5px;margin-bottom:8px}
.ph-bio{font-family:var(--fm);font-size:11px;color:var(--tx2);letter-spacing:.3px;line-height:1.6;max-width:420px;margin-bottom:12px}
.ph-tags{display:flex;gap:7px;flex-wrap:wrap}
.ph-tag{font-family:var(--fm);font-size:10px;border-radius:100px;padding:4px 11px;border:1px solid var(--brd);color:var(--tx3)}
.ph-tag.verified{color:var(--a);border-color:rgba(205,255,71,.3);background:rgba(205,255,71,.07)}
.ph-stats{display:flex;gap:24px;margin-left:auto;align-self:center}
.ph-stat{text-align:center}
.ph-stat-n{font-family:var(--fd);font-size:32px;line-height:1}
.ph-stat-n.c1{color:var(--a)}.ph-stat-n.c2{color:var(--a2)}.ph-stat-n.c3{color:var(--a3)}
.ph-stat-l{font-family:var(--fm);font-size:9px;color:var(--tx3);letter-spacing:2px;margin-top:3px;text-transform:uppercase}

/* TABS */
.tabs{border-bottom:1px solid var(--brd);padding:0;background:var(--bg2)}
.tabs-inner{max-width:1100px;margin:0 auto;display:flex;gap:0;padding:0 40px;overflow-x:auto}
.tab{font-family:var(--fm);font-size:11px;letter-spacing:1px;color:var(--tx3);padding:15px 20px;cursor:pointer;border-bottom:2px solid transparent;transition:all var(--tr);white-space:nowrap}
.tab:hover{color:var(--tx)}
.tab.active{color:var(--a);border-bottom-color:var(--a)}

/* CONTENT */
.profile-content{max-width:1100px;margin:0 auto;padding:32px 40px 80px;display:grid;grid-template-columns:1fr 300px;gap:24px;align-items:start}
@media(max-width:860px){.profile-content{grid-template-columns:1fr;padding:24px 20px 60px}}
.tab-panel{display:none}
.tab-panel.active{display:block;animation:fadeUp .3s ease}
@keyframes fadeUp{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}

/* SECTION */
.sec-lbl{font-family:var(--fm);font-size:10px;letter-spacing:3px;color:var(--tx3);margin-bottom:14px;display:flex;align-items:center;gap:10px}
.sec-lbl::after{content:'';flex:1;height:1px;background:var(--brd)}

/* ACTIVITY FEED */
.activity-list{display:flex;flex-direction:column;gap:8px}
.activity-item{display:flex;align-items:flex-start;gap:12px;background:var(--bg2);border:1px solid var(--brd);border-radius:var(--rs);padding:14px 16px;transition:border-color var(--tr)}
.activity-item:hover{border-color:var(--brd)}
.ai-icon{width:36px;height:36px;border-radius:var(--rs);display:flex;align-items:center;justify-content:center;font-size:17px;flex-shrink:0}
.ai-icon.speed{background:rgba(205,255,71,.1);border:1px solid rgba(205,255,71,.2)}
.ai-icon.review{background:rgba(0,229,255,.1);border:1px solid rgba(0,229,255,.2)}
.ai-icon.fav{background:rgba(255,59,92,.1);border:1px solid rgba(255,59,92,.2)}
.ai-body{flex:1;min-width:0}
.ai-title{font-size:14px;font-weight:500;margin-bottom:2px}
.ai-sub{font-family:var(--fm);font-size:11px;color:var(--tx3);letter-spacing:.3px}
.ai-data{display:flex;gap:8px;margin-top:6px;flex-wrap:wrap}
.ai-badge{font-family:var(--fm);font-size:10px;border-radius:100px;padding:2px 9px;border:1px solid var(--brd);color:var(--tx3)}
.ai-badge.green{color:var(--a);border-color:rgba(205,255,71,.3);background:rgba(205,255,71,.06)}
.ai-badge.cyan{color:var(--a3);border-color:rgba(0,229,255,.3);background:rgba(0,229,255,.06)}
.ai-time{font-family:var(--fm);font-size:10px;color:var(--tx3);flex-shrink:0;margin-top:2px}

/* FAVORITES */
.fav-grid{display:flex;flex-direction:column;gap:8px}
.fav-item{display:flex;align-items:center;gap:12px;background:var(--bg2);border:1px solid var(--brd);border-radius:var(--rs);padding:12px;transition:all var(--tr);text-decoration:none;color:var(--tx)}
.fav-item:hover{border-color:var(--a);transform:translateX(4px)}
.fav-img{width:52px;height:52px;border-radius:var(--rs);object-fit:cover;filter:saturate(.7);flex-shrink:0}
.fav-name{font-family:var(--fd);font-size:17px;letter-spacing:.3px;display:block;margin-bottom:2px}
.fav-meta{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:.3px}
.fav-score{font-family:var(--fd);font-size:28px;color:var(--a);margin-left:auto;flex-shrink:0}
.fav-remove{font-size:14px;color:var(--tx3);background:none;border:none;cursor:pointer;padding:4px;transition:color var(--tr)}
.fav-remove:hover{color:var(--a2)}

/* SETTINGS FORM */
.settings-card{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:22px 24px;margin-bottom:16px}
.sc-title{font-family:var(--fd);font-size:22px;letter-spacing:.5px;margin-bottom:16px;display:flex;align-items:center;gap:8px}
.fg{margin-bottom:16px}
.flbl{font-family:var(--fm);font-size:10px;letter-spacing:3px;color:var(--tx3);text-transform:uppercase;display:block;margin-bottom:7px}
.finput,.fsel{width:100%;background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:11px 14px;color:var(--tx);font-family:var(--fb);font-size:13px;outline:none;transition:border-color var(--tr);-webkit-appearance:none}
.finput:focus,.fsel:focus{border-color:var(--a);box-shadow:0 0 0 3px rgba(205,255,71,.1)}
.finput::placeholder{color:var(--tx3)}
.fg-row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.save-btn{font-family:var(--fd);font-size:17px;letter-spacing:2px;background:var(--a);color:#000;border:none;border-radius:var(--rs);padding:12px 24px;cursor:pointer;transition:all var(--tr)}
.save-btn:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(205,255,71,.3)}
.danger-btn{font-family:var(--fd);font-size:17px;letter-spacing:1px;background:rgba(255,59,92,.1);color:var(--a2);border:1px solid rgba(255,59,92,.3);border-radius:var(--rs);padding:12px 24px;cursor:pointer;transition:all var(--tr)}
.danger-btn:hover{background:var(--a2);color:#fff}

/* TOGGLE SWITCH */
.setting-row{display:flex;align-items:center;justify-content:space-between;padding:14px 0;border-bottom:1px solid var(--brd)}
.setting-row:last-child{border-bottom:none}
.sr-info{}
.sr-label{font-weight:500;font-size:14px;margin-bottom:2px}
.sr-sub{font-family:var(--fm);font-size:11px;color:var(--tx3);letter-spacing:.3px}
.tog{width:44px;height:24px;border-radius:12px;background:var(--bg4);border:1px solid var(--brd);position:relative;cursor:pointer;transition:background var(--tr),border-color var(--tr);flex-shrink:0}
.tog-knob{position:absolute;top:3px;left:3px;width:16px;height:16px;border-radius:50%;background:var(--tx3);transition:all var(--tr)}
.tog.on{background:rgba(205,255,71,.2);border-color:var(--a)}
.tog.on .tog-knob{left:23px;background:var(--a)}

/* SIDEBAR */
.sidebar-widget{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:18px 20px;margin-bottom:16px}
.sw-title{font-family:var(--fd);font-size:18px;letter-spacing:.5px;margin-bottom:14px}
.badge-row{display:flex;gap:8px;flex-wrap:wrap}
.badge{border-radius:var(--rs);padding:8px 12px;text-align:center;font-family:var(--fm);font-size:10px;letter-spacing:.5px;border:1px solid var(--brd)}
.badge.earned{background:rgba(205,255,71,.08);border-color:rgba(205,255,71,.2);color:var(--a)}
.badge.locked{opacity:.4}
.badge-icon{font-size:20px;display:block;margin-bottom:4px}

.leaderboard-item{display:flex;align-items:center;gap:10px;padding:8px 0;border-bottom:1px solid var(--brd)}
.leaderboard-item:last-child{border-bottom:none}
.lb-rank{font-family:var(--fd);font-size:18px;color:var(--tx3);width:20px;text-align:center;flex-shrink:0}
.lb-rank.gold{color:#FFD700}.lb-rank.silver{color:#C0C0C0}.lb-rank.bronze{color:#CD7F32}
.lb-name{font-family:var(--fm);font-size:11px;flex:1}
.lb-count{font-family:var(--fd);font-size:18px;color:var(--a)}

/* TOAST */
.toast-wrap{position:fixed;bottom:24px;right:24px;z-index:300;display:flex;flex-direction:column;gap:8px}
.toast{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--rs);padding:12px 16px;display:flex;align-items:center;gap:10px;font-family:var(--fm);font-size:12px;color:var(--tx);box-shadow:0 8px 24px var(--sh);transform:translateX(120%);transition:transform .4s cubic-bezier(.4,0,.2,1);max-width:280px}
.toast.show{transform:translateX(0)}
</style>
</head>
<body>

<nav>
  <a href="{{ route('ngopi') }}" class="nav-logo">NGOPI<span>.</span>MLG</a>
  <div class="nav-right">
    <a href="{{ route('ngopi') }}" class="nbtn">← Kafe</a>
    <a href="{{ route('submit') }}" class="nbtn">⚡ Submit</a>
    <button class="theme-btn" onclick="toggleTheme()" id="themeBtn">🌙</button>
  </div>
</nav>

<!-- PROFILE HERO -->
<div class="profile-hero">
  <div class="ph-bg"></div>
  <div class="ph-grid"></div>
  <div class="ph-inner">
    <div class="ph-avatar" title="Ganti avatar">
      ☕
      <div class="ph-avatar-edit">✏️</div>
    </div>
    <div class="ph-info">
      <div class="ph-name">BUDI GRINDER</div>
      <div class="ph-username">@budi_grinder</div>
      <div class="ph-bio">Remote worker yang suka explore kafe di Malang. Kontributor aktif NGOPI.MLG.</div>
      <div class="ph-tags">
        <span class="ph-tag verified">✓ Verified Member</span>
        <span class="ph-tag">📍 Suhat, Malang</span>
        <span class="ph-tag">💻 Remote Worker</span>
        <span class="ph-tag">⭐ Top Contributor</span>
      </div>
    </div>
    <div class="ph-stats">
      <div class="ph-stat"><div class="ph-stat-n c1">24</div><div class="ph-stat-l">SPEEDTEST</div></div>
      <div class="ph-stat"><div class="ph-stat-n c2">7</div><div class="ph-stat-l">KAFE FAV</div></div>
      <div class="ph-stat"><div class="ph-stat-n c3">#12</div><div class="ph-stat-l">RANKING</div></div>
    </div>
  </div>
</div>

<!-- TABS -->
<div class="tabs">
  <div class="tabs-inner">
    <div class="tab active" onclick="switchTab('activity',this)">📊 Aktivitas</div>
    <div class="tab" onclick="switchTab('favorites',this)">❤️ Kafe Favorit</div>
    <div class="tab" onclick="switchTab('settings',this)">⚙️ Pengaturan</div>
  </div>
</div>

<!-- CONTENT -->
<div class="profile-content">

  <div>
    <!-- ACTIVITY TAB -->
    <div class="tab-panel active" id="tab-activity">
      <div class="sec-lbl">SPEEDTEST TERBARU</div>
      <div class="activity-list" id="activityList"></div>
    </div>

    <!-- FAVORITES TAB -->
    <div class="tab-panel" id="tab-favorites">
      <div class="sec-lbl">KAFE FAVORITMU</div>
      <div class="fav-grid" id="favList"></div>
    </div>

    <!-- SETTINGS TAB -->
    <div class="tab-panel" id="tab-settings">

      <div class="settings-card">
        <div class="sc-title">👤 Info Profil</div>
        <div class="fg-row">
          <div class="fg"><label class="flbl">Nama Depan</label><input class="finput" value="Budi" id="s-fname"></div>
          <div class="fg"><label class="flbl">Nama Belakang</label><input class="finput" value="Santoso" id="s-lname"></div>
        </div>
        <div class="fg"><label class="flbl">Username</label><input class="finput" value="@budi_grinder" id="s-uname"></div>
        <div class="fg"><label class="flbl">Email</label><input class="finput" value="budi@email.com" type="email" id="s-email"></div>
        <div class="fg"><label class="flbl">Bio</label><input class="finput" value="Remote worker yang suka explore kafe di Malang." id="s-bio"></div>
        <div class="fg-row">
          <div class="fg"><label class="flbl">Area / Kota</label>
            <select class="fsel"><option selected>Suhat</option><option>Dau</option><option>Klojen</option><option>Ijen</option><option>Dinoyo</option></select>
          </div>
          <div class="fg"><label class="flbl">Tipe</label>
            <select class="fsel"><option selected>Remote Worker</option><option>Freelancer</option><option>Mahasiswa</option></select>
          </div>
        </div>
        <button class="save-btn" onclick="showToast('✅ Profil disimpan!')">SIMPAN PERUBAHAN</button>
      </div>

      <div class="settings-card">
        <div class="sc-title">🔒 Keamanan</div>
        <div class="fg"><label class="flbl">Password Lama</label><input class="finput" type="password" placeholder="••••••••"></div>
        <div class="fg"><label class="flbl">Password Baru</label><input class="finput" type="password" placeholder="Min. 8 karakter"></div>
        <div class="fg"><label class="flbl">Konfirmasi Password</label><input class="finput" type="password" placeholder="Ulangi password baru"></div>
        <button class="save-btn" onclick="showToast('✅ Password diperbarui!')">UBAH PASSWORD</button>
      </div>

      <div class="settings-card">
        <div class="sc-title">🔔 Notifikasi</div>
        <div class="setting-row">
          <div class="sr-info"><div class="sr-label">Update Kafe Favorit</div><div class="sr-sub">Notif saat ada speedtest baru di kafe favoritmu</div></div>
          <div class="tog on" onclick="this.classList.toggle('on')"><div class="tog-knob"></div></div>
        </div>
        <div class="setting-row">
          <div class="sr-info"><div class="sr-label">Review Diverifikasi</div><div class="sr-sub">Saat speedtest kamu diverifikasi admin</div></div>
          <div class="tog on" onclick="this.classList.toggle('on')"><div class="tog-knob"></div></div>
        </div>
        <div class="setting-row">
          <div class="sr-info"><div class="sr-label">Newsletter Mingguan</div><div class="sr-sub">Rangkuman kafe & spotlights terbaik minggu ini</div></div>
          <div class="tog" onclick="this.classList.toggle('on')"><div class="tog-knob"></div></div>
        </div>
        <div class="setting-row">
          <div class="sr-info"><div class="sr-label">Kafe Baru di Areaku</div><div class="sr-sub">Notif kalau ada kafe baru di area pilihanmu</div></div>
          <div class="tog on" onclick="this.classList.toggle('on')"><div class="tog-knob"></div></div>
        </div>
      </div>

      <div class="settings-card">
        <div class="sc-title" style="color:var(--a2)">⚠️ Danger Zone</div>
        <p style="font-family:var(--fm);font-size:11px;color:var(--tx3);margin-bottom:16px;letter-spacing:.3px;line-height:1.6">Tindakan di bawah ini permanen dan tidak bisa dibatalkan.</p>
        <div style="display:flex;gap:10px;flex-wrap:wrap">
          <button class="danger-btn" onclick="showToast('⚠️ Fitur ini memerlukan konfirmasi lebih lanjut')">Hapus Semua Data</button>
          <button class="danger-btn" onclick="showToast('⚠️ Akun akan dihapus permanen')">Hapus Akun</button>
        </div>
      </div>

    </div>
  </div>

  <!-- SIDEBAR -->
  <div>
    <div class="sidebar-widget">
      <div class="sw-title">🏅 Badge Kamu</div>
      <div class="badge-row">
        <div class="badge earned"><span class="badge-icon">⚡</span>First Test</div>
        <div class="badge earned"><span class="badge-icon">🔟</span>10 Tests</div>
        <div class="badge earned"><span class="badge-icon">🌟</span>Top Contrib</div>
        <div class="badge locked"><span class="badge-icon">🏆</span>50 Tests</div>
        <div class="badge locked"><span class="badge-icon">🗺️</span>Explorer</div>
        <div class="badge locked"><span class="badge-icon">👑</span>Legend</div>
      </div>
    </div>

    <div class="sidebar-widget">
      <div class="sw-title">🏆 Leaderboard</div>
      <div id="leaderboard"></div>
      <a href="#" style="display:block;text-align:center;font-family:var(--fm);font-size:10px;color:var(--a);letter-spacing:1px;margin-top:12px;text-decoration:none">Lihat Semua →</a>
    </div>

    <div class="sidebar-widget">
      <div class="sw-title">📊 Statistikku</div>
      <div style="display:flex;flex-direction:column;gap:0">
        <div style="display:flex;justify-content:space-between;padding:9px 0;border-bottom:1px solid var(--brd)">
          <span style="font-family:var(--fm);font-size:11px;color:var(--tx3)">Avg Download</span>
          <span style="font-family:var(--fd);font-size:18px;color:var(--a)">78 <span style="font-family:var(--fm);font-size:9px;color:var(--tx3)">Mbps</span></span>
        </div>
        <div style="display:flex;justify-content:space-between;padding:9px 0;border-bottom:1px solid var(--brd)">
          <span style="font-family:var(--fm);font-size:11px;color:var(--tx3)">Avg Ping</span>
          <span style="font-family:var(--fd);font-size:18px;color:var(--a3)">12 <span style="font-family:var(--fm);font-size:9px;color:var(--tx3)">ms</span></span>
        </div>
        <div style="display:flex;justify-content:space-between;padding:9px 0;border-bottom:1px solid var(--brd)">
          <span style="font-family:var(--fm);font-size:11px;color:var(--tx3)">Kafe Dikunjungi</span>
          <span style="font-family:var(--fd);font-size:18px;color:var(--tx)">9</span>
        </div>
        <div style="display:flex;justify-content:space-between;padding:9px 0">
          <span style="font-family:var(--fm);font-size:11px;color:var(--tx3)">Area Favorit</span>
          <span style="font-family:var(--fd);font-size:18px;color:var(--a2)">Ijen</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="toast-wrap" id="toastWrap"></div>

<script>
const activities = [
  {icon:'⚡',type:'speed',title:'Submit Speedtest di Ruang Karya Co.',sub:'Klojen',dl:120,ul:80,ping:3,time:'2 jam lalu'},
  {icon:'⚡',type:'speed',title:'Submit Speedtest di Noi Coffee',sub:'Ijen',dl:87,ul:42,ping:8,time:'kemarin'},
  {icon:'❤️',type:'fav',title:'Tambah Kedai 97 ke Favorit',sub:'Sigura-gura',time:'2 hari lalu'},
  {icon:'⚡',type:'speed',title:'Submit Speedtest di Omah Kopi',sub:'Dau',dl:73,ul:35,ping:15,time:'3 hari lalu'},
  {icon:'⚡',type:'speed',title:'Submit Speedtest di Filosofi Kopi',sub:'Suhat',dl:52,ul:28,ping:12,time:'5 hari lalu'},
  {icon:'❤️',type:'fav',title:'Tambah Omah Kopi ke Favorit',sub:'Dau',time:'1 minggu lalu'},
  {icon:'⚡',type:'speed',title:'Submit Speedtest di Kedai 97',sub:'Sigura-gura',dl:95,ul:65,ping:5,time:'1 minggu lalu'},
];
document.getElementById('activityList').innerHTML = activities.map(a =>
  '<div class="activity-item">'
  + '<div class="ai-icon ' + a.type + '">' + a.icon + '</div>'
  + '<div class="ai-body">'
    + '<div class="ai-title">' + a.title + '</div>'
    + '<div class="ai-sub">📍 ' + a.sub + '</div>'
    + (a.dl ? '<div class="ai-data"><span class="ai-badge green">↓ ' + a.dl + ' Mbps</span><span class="ai-badge cyan">↑ ' + a.ul + ' Mbps</span><span class="ai-badge">ping: ' + a.ping + 'ms</span></div>' : '')
  + '</div>'
  + '<div class="ai-time">' + a.time + '</div>'
  + '</div>'
).join('');

const favorites = [
  {name:'Ruang Karya Co.',area:'Klojen',score:88,img:'https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?w=120&q=70'},
  {name:'Kedai 97',area:'Sigura-gura',score:82,img:'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=120&q=70'},
  {name:'Noi Coffee',area:'Ijen',score:76,img:'https://images.unsplash.com/photo-1559925393-8be0ec4767c8?w=120&q=70'},
  {name:'Omah Kopi',area:'Dau',score:64,img:'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=120&q=70'},
];
document.getElementById('favList').innerHTML = favorites.map(f =>
  '<a href="cafe-detail.html" class="fav-item">'
  + '<img class="fav-img" src="' + f.img + '" alt="">'
  + '<div><span class="fav-name">' + f.name + '</span><span class="fav-meta">📍 ' + f.area + '</span></div>'
  + '<div class="fav-score">' + f.score + '</div>'
  + '<button class="fav-remove" onclick="event.preventDefault();event.stopPropagation();this.closest(\'.fav-item\').remove();showToast(\'💔 Dihapus dari favorit\')">✕</button>'
  + '</a>'
).join('');

const leaderData = [
  {rank:'1',cls:'gold',name:'@rudy_speed',count:47},
  {rank:'2',cls:'silver',name:'@maya_mlg',count:38},
  {rank:'#12',cls:'',name:'@budi_grinder (kamu)',count:24},
  {rank:'13',cls:'',name:'@rika_wfh',count:21},
];
document.getElementById('leaderboard').innerHTML = leaderData.map(l =>
  '<div class="leaderboard-item">'
  + '<div class="lb-rank ' + l.cls + '">' + l.rank + '</div>'
  + '<div class="lb-name" style="' + (l.name.includes('kamu') ? 'color:var(--a);font-weight:600' : '') + '">' + l.name + '</div>'
  + '<div class="lb-count">' + l.count + '</div>'
  + '</div>'
).join('');

function switchTab(id, el) {
  document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
  document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
  document.getElementById('tab-' + id).classList.add('active');
  el.classList.add('active');
}

function showToast(msg) {
  const w = document.getElementById('toastWrap');
  const t = document.createElement('div'); t.className = 'toast';
  t.innerHTML = '<span>' + msg + '</span>';
  w.appendChild(t); setTimeout(() => t.classList.add('show'), 10);
  setTimeout(() => { t.classList.remove('show'); setTimeout(() => t.remove(), 400); }, 3000);
}

function toggleTheme() {
  const h = document.documentElement, b = document.getElementById('themeBtn');
  if (h.getAttribute('data-theme') === 'dark') { h.setAttribute('data-theme','light'); b.textContent='☀️'; }
  else { h.setAttribute('data-theme','dark'); b.textContent='🌙'; }
}
</script>
</body>
</html>
