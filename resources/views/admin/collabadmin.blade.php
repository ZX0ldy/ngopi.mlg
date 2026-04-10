<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NGOPI.MLG × Collaborator Hub</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Space+Grotesk:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --a:#CDFF47;--a2:#FF3B5C;--a3:#00E5FF;--a4:#FF9F47;
  --fd:'Bebas Neue',sans-serif;--fb:'Space Grotesk',sans-serif;--fm:'DM Mono',monospace;
  --r:14px;--rs:8px;--tr:.22s cubic-bezier(.4,0,.2,1)
}
[data-theme="dark"]{
  --bg:#0A0A0B;--bg2:#111114;--bg3:#1A1A1F;--bg4:#222228;
  --brd:#2A2A30;--tx:#F0F0F5;--tx2:#888896;--tx3:#44444C;--sh:rgba(0,0,0,.6)
}
[data-theme="light"]{
  --bg:#F2F2EE;--bg2:#E8E8E4;--bg3:#DCDCD8;--bg4:#D0D0CB;
  --brd:#C8C8C2;--tx:#111114;--tx2:#555560;--tx3:#999998;--sh:rgba(0,0,0,.1)
}
html{scroll-behavior:smooth}
body{font-family:var(--fb);background:var(--bg);color:var(--tx);min-height:100vh;display:flex;flex-direction:column}
::-webkit-scrollbar{width:4px}::-webkit-scrollbar-thumb{background:var(--a2);border-radius:2px}

/* TOPBAR */
.topbar{background:var(--bg2);border-bottom:1px solid var(--brd);padding:0 28px;display:flex;align-items:stretch;justify-content:space-between;position:sticky;top:0;z-index:50;height:54px}
.topbar-left{display:flex;align-items:center;gap:14px}
.topbar-logo{font-family:var(--fd);font-size:20px;letter-spacing:2px;color:var(--tx);display:flex;align-items:center;gap:2px}
.topbar-logo .dot{color:var(--a)}
.topbar-divider{width:1px;height:24px;background:var(--brd)}
.collab-badge{display:flex;align-items:center;gap:8px}
.collab-avatar{width:28px;height:28px;border-radius:50%;background:var(--a2);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:#fff;font-family:var(--fd)}
.collab-name{font-family:var(--fm);font-size:12px;color:var(--a2);letter-spacing:.5px}
.collab-role{font-family:var(--fm);font-size:9px;color:var(--tx3);letter-spacing:2px}
.topbar-right{display:flex;align-items:center;gap:10px}
.tbtn{font-family:var(--fm);font-size:11px;padding:7px 14px;border-radius:100px;border:1px solid var(--brd);background:var(--bg3);color:var(--tx2);cursor:pointer;transition:all var(--tr);text-decoration:none;display:inline-flex;align-items:center;gap:6px;letter-spacing:.5px}
.tbtn:hover{border-color:var(--a);color:var(--a)}
.theme-tog{width:32px;height:32px;border-radius:50%;background:var(--bg3);border:1px solid var(--brd);cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:15px;transition:all var(--tr)}
.theme-tog:hover{background:var(--a);transform:rotate(20deg);border-color:var(--a)}

/* HERO STRIP */
.collab-hero{background:var(--bg2);border-bottom:1px solid var(--brd);padding:28px 32px;position:relative;overflow:hidden}
.collab-hero::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(255,59,92,.08) 0%,transparent 60%),radial-gradient(ellipse 50% 100% at 100% 50%,rgba(205,255,71,.05),transparent);pointer-events:none}
.hero-grid-bg{position:absolute;inset:0;background-image:linear-gradient(var(--brd) 1px,transparent 1px),linear-gradient(90deg,var(--brd) 1px,transparent 1px);background-size:32px 32px;opacity:.25;pointer-events:none}
.ch-inner{position:relative;z-index:1;display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap}
.ch-title{font-family:var(--fd);font-size:48px;letter-spacing:1px;line-height:.95}
.ch-title span{color:var(--a2)}
.ch-subtitle{font-family:var(--fm);font-size:11px;color:var(--tx3);letter-spacing:2px;margin-top:6px}
.ch-stats{display:flex;gap:28px}
.ch-stat-num{font-family:var(--fd);font-size:36px;line-height:1}
.ch-stat-num.c1{color:var(--a)}.ch-stat-num.c2{color:var(--a2)}.ch-stat-num.c3{color:var(--a3)}
.ch-stat-label{font-family:var(--fm);font-size:9px;color:var(--tx3);letter-spacing:2px;margin-top:3px}

/* LAYOUT */
.admin-wrap{display:flex;flex:1}
.sidebar{width:210px;background:var(--bg2);border-right:1px solid var(--brd);padding:20px 0;flex-shrink:0;position:sticky;top:54px;height:calc(100vh - 54px);overflow-y:auto}
.sb-lbl{font-family:var(--fm);font-size:9px;letter-spacing:3px;color:var(--tx3);padding:0 18px;margin-bottom:7px;text-transform:uppercase}
.sb-item{display:flex;align-items:center;gap:9px;padding:10px 18px;cursor:pointer;transition:all var(--tr);font-family:var(--fm);font-size:11px;color:var(--tx2);letter-spacing:.5px;border-left:2px solid transparent;margin-bottom:1px}
.sb-item:hover{background:var(--bg3);color:var(--tx)}
.sb-item.active{background:rgba(255,59,92,.08);color:var(--a2);border-left-color:var(--a2);font-weight:600}
.sb-cnt{font-size:10px;margin-left:auto;background:var(--bg4);padding:1px 7px;border-radius:100px;color:var(--tx3)}
.sb-divider{height:1px;background:var(--brd);margin:12px 0}

/* MAIN */
.main{flex:1;overflow-y:auto}
.page{display:none;padding:28px 32px;animation:fadeUp .25s ease}
.page.active{display:block}
@keyframes fadeUp{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
.ph{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:24px;gap:16px;flex-wrap:wrap}
.ph-title{font-family:var(--fd);font-size:34px;letter-spacing:1px;line-height:1}
.ph-sub{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:2px;margin-top:4px}
.ph-actions{display:flex;gap:8px;flex-wrap:wrap;align-items:center}

/* STAT GRID */
.stat-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:14px;margin-bottom:24px}
.stat-card{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:18px 20px;position:relative;overflow:hidden;transition:border-color var(--tr),transform var(--tr)}
.stat-card:hover{border-color:var(--a2);transform:translateY(-2px)}
.stat-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px}
.stat-card.c1::before{background:var(--a)}.stat-card.c2::before{background:var(--a2)}.stat-card.c3::before{background:var(--a3)}.stat-card.c4::before{background:var(--a4)}
.stat-val{font-family:var(--fd);font-size:38px;line-height:1;margin-bottom:4px}
.stat-card.c1 .stat-val{color:var(--a)}.stat-card.c2 .stat-val{color:var(--a2)}.stat-card.c3 .stat-val{color:var(--a3)}.stat-card.c4 .stat-val{color:var(--a4)}
.stat-label{font-family:var(--fm);font-size:9px;color:var(--tx3);letter-spacing:2px;text-transform:uppercase}
.stat-sub{font-family:var(--fm);font-size:11px;color:var(--tx2);margin-top:6px}
.stat-trend{font-family:var(--fm);font-size:10px;margin-top:4px}
.stat-trend.up{color:var(--a)}.stat-trend.dn{color:var(--a2)}

/* CARDS GRID */
.cards-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:16px;margin-bottom:24px}
.item-card{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);overflow:hidden;transition:all var(--tr)}
.item-card:hover{border-color:var(--a2);box-shadow:0 8px 24px var(--sh)}
.ic-img{height:130px;background:var(--bg3);position:relative;overflow:hidden}
.ic-img img{width:100%;height:100%;object-fit:cover;filter:saturate(.6) brightness(.85);transition:filter .4s}
.item-card:hover .ic-img img{filter:saturate(1) brightness(.95)}
.ic-img-overlay{position:absolute;inset:0;background:linear-gradient(to bottom,transparent 30%,rgba(0,0,0,.7))}
.ic-claimed{position:absolute;top:10px;right:10px;font-family:var(--fm);font-size:9px;letter-spacing:1px;background:rgba(205,255,71,.9);color:#000;border-radius:100px;padding:4px 10px;font-weight:700}
.ic-unclaimed{position:absolute;top:10px;right:10px;font-family:var(--fm);font-size:9px;letter-spacing:1px;background:rgba(0,0,0,.7);color:var(--tx2);border:1px solid var(--brd);border-radius:100px;padding:4px 10px}
.ic-area{position:absolute;bottom:10px;left:10px;font-family:var(--fm);font-size:10px;color:rgba(255,255,255,.7);letter-spacing:.5px}
.ic-body{padding:14px 16px}
.ic-name{font-family:var(--fd);font-size:20px;letter-spacing:.5px;margin-bottom:4px}
.ic-meta{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:.5px;margin-bottom:12px;display:flex;align-items:center;gap:8px}
.ic-video-row{display:flex;align-items:center;gap:8px;margin-bottom:10px}
.ic-video-inp{flex:1;background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:8px 12px;color:var(--tx);font-family:var(--fm);font-size:11px;outline:none;transition:border-color var(--tr)}
.ic-video-inp:focus{border-color:var(--a2)}
.ic-video-inp::placeholder{color:var(--tx3)}
.ic-actions{display:flex;gap:7px;flex-wrap:wrap}
.ic-btn{font-family:var(--fm);font-size:10px;padding:6px 12px;border-radius:var(--rs);border:1px solid var(--brd);background:var(--bg3);color:var(--tx2);cursor:pointer;transition:all var(--tr);white-space:nowrap;display:flex;align-items:center;gap:5px}
.ic-btn:hover{border-color:var(--a2);color:var(--a2)}
.ic-btn.claim{background:rgba(255,59,92,.1);border-color:rgba(255,59,92,.3);color:var(--a2)}
.ic-btn.claim:hover{background:var(--a2);color:#fff}
.ic-btn.save{background:rgba(205,255,71,.1);border-color:rgba(205,255,71,.3);color:var(--a)}
.ic-btn.save:hover{background:var(--a);color:#000}
.ic-btn.unclaim{color:var(--tx3)}
.ic-btn.unclaim:hover{border-color:var(--a2);color:var(--a2)}
.ic-clicks{font-family:var(--fm);font-size:11px;color:var(--tx2);display:flex;align-items:center;gap:5px;margin-top:8px}
.ic-clicks strong{color:var(--a);font-family:var(--fd);font-size:16px}

/* ANALYTICS CHART */
.chart-section{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:20px 24px;margin-bottom:20px}
.chart-title{font-family:var(--fd);font-size:22px;letter-spacing:1px;margin-bottom:4px}
.chart-sub{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:1px;margin-bottom:18px}
.bar-chart{display:flex;flex-direction:column;gap:10px}
.bar-row{display:flex;align-items:center;gap:12px}
.bar-label{font-family:var(--fm);font-size:11px;color:var(--tx2);width:130px;flex-shrink:0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.bar-track{flex:1;height:10px;background:var(--bg4);border-radius:5px;overflow:hidden;position:relative}
.bar-fill{height:100%;border-radius:5px;transition:width 1s cubic-bezier(.4,0,.2,1);position:relative}
.bar-fill::after{content:'';position:absolute;top:0;right:0;bottom:0;width:20px;background:linear-gradient(90deg,transparent,rgba(255,255,255,.15))}
.bar-val{font-family:var(--fm);font-size:11px;color:var(--tx2);width:50px;text-align:right;flex-shrink:0}

/* CLICK TIMELINE */
.timeline{display:flex;flex-direction:column;gap:8px}
.tl-item{display:flex;align-items:center;gap:12px;background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:11px 14px;transition:border-color var(--tr)}
.tl-item:hover{border-color:var(--a2)}
.tl-dot{width:8px;height:8px;border-radius:50%;background:var(--a2);flex-shrink:0;box-shadow:0 0 8px rgba(255,59,92,.5)}
.tl-cafe{font-family:var(--fd);font-size:15px;flex:1}
.tl-action{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:.5px}
.tl-time{font-family:var(--fm);font-size:10px;color:var(--tx3);flex-shrink:0}
.tl-count{font-family:var(--fd);font-size:18px;color:var(--a2);flex-shrink:0}

/* TIPS CARD */
.tips-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:24px}
.tip-card{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:18px 20px}
.tip-icon{font-size:28px;margin-bottom:10px}
.tip-title{font-family:var(--fd);font-size:18px;letter-spacing:.5px;margin-bottom:6px}
.tip-text{font-family:var(--fm);font-size:11px;color:var(--tx3);letter-spacing:.5px;line-height:1.6}

/* PROFILE FORM */
.form-section{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:22px 24px;margin-bottom:18px}
.fs-title{font-family:var(--fd);font-size:22px;letter-spacing:.5px;margin-bottom:16px;display:flex;align-items:center;gap:10px}
.fg{margin-bottom:16px}
.flbl{font-family:var(--fm);font-size:10px;letter-spacing:3px;color:var(--tx3);text-transform:uppercase;display:block;margin-bottom:7px}
.finput,.fsel,.ftextarea{width:100%;background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:10px 14px;color:var(--tx);font-family:var(--fb);font-size:14px;outline:none;transition:border-color var(--tr);-webkit-appearance:none}
.finput:focus,.fsel:focus,.ftextarea:focus{border-color:var(--a2);box-shadow:0 0 0 3px rgba(255,59,92,.1)}
.finput::placeholder,.ftextarea::placeholder{color:var(--tx3)}
.ftextarea{resize:vertical;min-height:80px;line-height:1.5}
.fp-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.fp-full{grid-column:1/-1}
.save-btn{font-family:var(--fd);font-size:17px;letter-spacing:2px;background:var(--a2);color:#fff;border:none;border-radius:var(--rs);padding:12px 26px;cursor:pointer;transition:all var(--tr)}
.save-btn:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(255,59,92,.4)}

/* NOTIFICATION FEED */
.notif-feed{display:flex;flex-direction:column;gap:8px}
.notif-item{display:flex;align-items:flex-start;gap:12px;background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:12px 14px;transition:all var(--tr)}
.notif-item.unread{border-color:rgba(255,59,92,.25);background:rgba(255,59,92,.04)}
.notif-icon{width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;background:var(--bg4)}
.notif-body{flex:1;min-width:0}
.notif-title{font-family:var(--fd);font-size:15px;letter-spacing:.3px;margin-bottom:2px}
.notif-desc{font-family:var(--fm);font-size:11px;color:var(--tx2);letter-spacing:.3px;line-height:1.5}
.notif-time{font-family:var(--fm);font-size:10px;color:var(--tx3);flex-shrink:0;margin-top:2px}
.unread-dot{width:7px;height:7px;border-radius:50%;background:var(--a2);flex-shrink:0;margin-top:6px;box-shadow:0 0 6px rgba(255,59,92,.5)}

/* TABLE */
.tbl-wrap{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);overflow:hidden;margin-bottom:20px}
.tbl-wrap .table-scroll{overflow-x:auto;-webkit-overflow-scrolling:touch}
.tbl-wrap table{min-width:580px}
.tbl-hdr{padding:14px 18px;border-bottom:1px solid var(--brd);display:flex;align-items:center;justify-content:space-between}
.tbl-title{font-family:var(--fd);font-size:20px;letter-spacing:1px}
table{width:100%;border-collapse:collapse}
thead tr{background:var(--bg3)}
th{font-family:var(--fm);font-size:9px;letter-spacing:2px;color:var(--tx3);text-transform:uppercase;padding:10px 16px;text-align:left;border-bottom:1px solid var(--brd);white-space:nowrap}
td{padding:12px 16px;font-size:13px;border-bottom:1px solid var(--brd);vertical-align:middle}
tr:last-child td{border-bottom:none}
tr:hover td{background:rgba(255,59,92,.02)}
.td-name{font-family:var(--fd);font-size:16px;letter-spacing:.3px}
.td-mono{font-family:var(--fm);font-size:11px;color:var(--tx2)}
.tag{font-family:var(--fm);font-size:10px;border-radius:100px;padding:3px 9px;border:1px solid var(--brd);color:var(--tx2);background:var(--bg3);display:inline-flex;align-items:center;gap:4px}
.tag.green{color:var(--a);border-color:rgba(205,255,71,.3);background:rgba(205,255,71,.08)}
.tag.red{color:var(--a2);border-color:rgba(255,59,92,.3);background:rgba(255,59,92,.08)}

/* TOAST */
.toast-container{position:fixed;bottom:24px;right:24px;z-index:999;display:flex;flex-direction:column;gap:8px}
.toast{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--rs);padding:12px 16px;display:flex;align-items:center;gap:10px;font-family:var(--fm);font-size:12px;color:var(--tx);box-shadow:0 8px 24px var(--sh);transform:translateX(120%);transition:transform .4s cubic-bezier(.4,0,.2,1);max-width:280px}
.toast.show{transform:translateX(0)}

/* SEARCH */
.search-mini{background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:8px 12px;color:var(--tx);font-family:var(--fm);font-size:11px;outline:none;width:200px;transition:border-color var(--tr)}
.search-mini:focus{border-color:var(--a2)}
.search-mini::placeholder{color:var(--tx3)}

/* BURGER & MOBILE DRAWER */
.burger-btn{display:none;width:34px;height:34px;border-radius:var(--rs);background:var(--bg3);border:1px solid var(--brd);cursor:pointer;align-items:center;justify-content:center;flex-direction:column;gap:5px;flex-shrink:0;transition:all var(--tr)}
.burger-btn:hover{border-color:var(--a2)}
.burger-btn span{display:block;width:15px;height:2px;background:var(--tx2);border-radius:2px;transition:all var(--tr)}
.burger-btn.open span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.burger-btn.open span:nth-child(2){opacity:0;transform:scaleX(0)}
.burger-btn.open span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.mobile-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,.6);z-index:98;backdrop-filter:blur(2px)}
.mobile-overlay.show{display:block}
.mobile-drawer{position:fixed;top:0;left:-280px;width:260px;height:100vh;background:var(--bg2);border-right:1px solid var(--brd);z-index:99;transition:left .28s cubic-bezier(.4,0,.2,1);overflow-y:auto;padding:0 0 40px}
.mobile-drawer.open{left:0}
.drawer-header{padding:14px 18px;border-bottom:1px solid var(--brd);display:flex;align-items:center;justify-content:space-between}
.drawer-logo{font-family:var(--fd);font-size:18px;letter-spacing:2px}
.drawer-logo .dot{color:var(--a)}
.drawer-close{width:28px;height:28px;border-radius:6px;background:var(--bg3);border:1px solid var(--brd);cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:13px;color:var(--tx2)}
.drawer-section{padding:14px 0 0}
.drawer-lbl{font-family:var(--fm);font-size:9px;letter-spacing:3px;color:var(--tx3);padding:0 16px;margin-bottom:7px;text-transform:uppercase}
.drawer-item{display:flex;align-items:center;gap:9px;padding:10px 16px;cursor:pointer;font-family:var(--fm);font-size:11px;color:var(--tx2);letter-spacing:.5px;border-left:2px solid transparent;transition:all var(--tr);text-decoration:none}
.drawer-item:hover,.drawer-item.active{background:rgba(255,59,92,.08);color:var(--a2);border-left-color:var(--a2)}
.drawer-item.site-link{color:var(--tx3)}
.drawer-item.site-link:hover{color:var(--a2);background:rgba(255,59,92,.05)}
.drawer-cnt{font-size:10px;margin-left:auto;background:var(--bg4);padding:1px 7px;border-radius:100px;color:var(--tx3)}
.drawer-divider{height:1px;background:var(--brd);margin:10px 0}

@media(max-width:900px){.sidebar{display:none}.burger-btn{display:flex}.tbtn.site-link-btn{display:none}.tips-grid{grid-template-columns:1fr}.fp-grid{grid-template-columns:1fr}.cards-grid{grid-template-columns:1fr}}
@media(max-width:600px){.stat-grid{grid-template-columns:1fr 1fr}.main .page{padding:16px}}
</style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
  <div class="topbar-left">
    <div class="topbar-logo">NGOPI<span class="dot">.</span>MLG</div>
    <div class="topbar-divider"></div>
    <div class="collab-badge">
      <div class="collab-avatar">S</div>
      <div>
        <div class="collab-name">@spaceseekers.id</div>
        <div class="collab-role">// VERIFIED COLLABORATOR</div>
      </div>
    </div>
  </div>
  <div class="topbar-right">
    <a href="ngopi-malang.html" class="tbtn site-link-btn" target="_blank">← Lihat Site</a>
    <button class="theme-tog" onclick="toggleTheme()" id="themeBtn">🌙</button>
    <button class="burger-btn" id="burgerBtn" onclick="toggleDrawer()" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</div>

<!-- MOBILE DRAWER -->
<div class="mobile-overlay" id="mobileOverlay" onclick="closeDrawer()"></div>
<div class="mobile-drawer" id="mobileDrawer">
  <div class="drawer-header">
    <div class="drawer-logo">NGOPI<span class="dot">.</span>MLG</div>
    <button class="drawer-close" onclick="closeDrawer()">✕</button>
  </div>
  <div class="drawer-section">
    <div class="drawer-lbl">OVERVIEW</div>
    <div class="drawer-item active" onclick="nav('dashboard',this);closeDrawer()">📊 Dashboard</div>
    <div class="drawer-item" onclick="nav('notif',this);closeDrawer()">🔔 Notifikasi<span class="drawer-cnt" id="dNotifCnt">2</span></div>
  </div>
  <div class="drawer-divider"></div>
  <div class="drawer-section">
    <div class="drawer-lbl">KONTEN</div>
    <div class="drawer-item" onclick="nav('claiming',this);closeDrawer()">📌 Claim Kafe</div>
    <div class="drawer-item" onclick="nav('videos',this);closeDrawer()">▶ Kelola Video<span class="drawer-cnt" id="dVidCnt">3</span></div>
    <div class="drawer-item" onclick="nav('add-cafe',this);closeDrawer()">➕ Tambah Kafe</div>
  </div>
  <div class="drawer-divider"></div>
  <div class="drawer-section">
    <div class="drawer-lbl">ANALYTICS</div>
    <div class="drawer-item" onclick="nav('analytics',this);closeDrawer()">📈 Performa Video</div>
    <div class="drawer-item" onclick="nav('clicks',this);closeDrawer()">👆 Click Log</div>
  </div>
  <div class="drawer-divider"></div>
  <div class="drawer-section">
    <div class="drawer-lbl">AKUN</div>
    <div class="drawer-item" onclick="nav('profile',this);closeDrawer()">👤 Profil & Bio</div>
    <div class="drawer-item" onclick="nav('tips',this);closeDrawer()">💡 Tips & Panduan</div>
    <a href="ngopi-malang.html" class="drawer-item site-link" target="_blank">← Lihat Site</a>
  </div>
</div>

<!-- HERO STRIP -->
<div class="collab-hero">
  <div class="hero-grid-bg"></div>
  <div class="ch-inner">
    <div>
      <div class="ch-title">COLLABORATOR<br><span>HUB</span></div>
      <div class="ch-subtitle">// KELOLA KONTEN, TRACK PERFORMA, CLAIM KAFE</div>
    </div>
    <div class="ch-stats">
      <div><div class="ch-stat-num c1" id="hs-claimed">3</div><div class="ch-stat-label">KAFE CLAIMED</div></div>
      <div><div class="ch-stat-num c2" id="hs-clicks">788</div><div class="ch-stat-label">TOTAL KLIK VIDEO</div></div>
      <div><div class="ch-stat-num c3" id="hs-videos">3</div><div class="ch-stat-label">VIDEO AKTIF</div></div>
    </div>
  </div>
</div>

<div class="admin-wrap">
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div style="padding:0 0 14px">
      <div class="sb-lbl">OVERVIEW</div>
      <div class="sb-item active" onclick="nav('dashboard',this)">📊 Dashboard</div>
      <div class="sb-item" onclick="nav('notif',this)">🔔 Notifikasi<span class="sb-cnt" id="notifCnt">2</span></div>
    </div>
    <div class="sb-divider"></div>
    <div style="padding:14px 0">
      <div class="sb-lbl">KONTEN</div>
      <div class="sb-item" onclick="nav('claiming',this)">📌 Claim Kafe</div>
      <div class="sb-item" onclick="nav('videos',this)">▶ Kelola Video<span class="sb-cnt" id="vidCnt">3</span></div>
      <div class="sb-item" onclick="nav('add-cafe',this)">➕ Tambah Kafe</div>
    </div>
    <div class="sb-divider"></div>
    <div style="padding:14px 0">
      <div class="sb-lbl">ANALYTICS</div>
      <div class="sb-item" onclick="nav('analytics',this)">📈 Performa Video</div>
      <div class="sb-item" onclick="nav('clicks',this)">👆 Click Log</div>
    </div>
    <div class="sb-divider"></div>
    <div style="padding:14px 0">
      <div class="sb-lbl">AKUN</div>
      <div class="sb-item" onclick="nav('profile',this)">👤 Profil & Bio</div>
      <div class="sb-item" onclick="nav('tips',this)">💡 Tips & Panduan</div>
    </div>
  </aside>

  <main class="main">

    <!-- DASHBOARD -->
    <div class="page active" id="page-dashboard">
      <div class="ph">
        <div><div class="ph-title">DASHBOARD</div><div class="ph-sub">// RINGKASAN PERFORMA @SPACESEEKERS.ID</div></div>
        <button class="tbtn" onclick="refreshDash()">🔄 Refresh</button>
      </div>
      <div class="stat-grid">
        <div class="stat-card c1"><div class="stat-val" id="ds-claimed">3</div><div class="stat-label">KAFE CLAIMED</div><div class="stat-sub">dari 6 total kafe</div><div class="stat-trend up">↑ +1 bulan ini</div></div>
        <div class="stat-card c2"><div class="stat-val" id="ds-clicks">788</div><div class="stat-label">TOTAL KLIK VIDEO</div><div class="stat-sub">semua video</div><div class="stat-trend up">↑ +47 minggu ini</div></div>
        <div class="stat-card c3"><div class="stat-val" id="ds-vids">3</div><div class="stat-label">VIDEO AKTIF</div><div class="stat-sub">link terpasang</div></div>
        <div class="stat-card c4"><div class="stat-val" id="ds-avgclk">263</div><div class="stat-label">AVG KLIK/VIDEO</div><div class="stat-sub">rata-rata engagement</div><div class="stat-trend up">↑ bagus!</div></div>
      </div>

      <div class="chart-section">
        <div class="chart-title">📹 PERFORMA PER KAFE</div>
        <div class="chart-sub">// JUMLAH KLIK "LIHAT REVIEW VIDEO" DI NGOPI.MLG</div>
        <div class="bar-chart" id="perfChart"></div>
      </div>

      <div class="chart-section">
        <div class="chart-title">📅 KLIK 7 HARI TERAKHIR</div>
        <div class="chart-sub">// TREN HARIAN</div>
        <div class="bar-chart" id="trendChart"></div>
      </div>

      <div class="tbl-wrap">
        <div class="tbl-hdr"><div class="tbl-title">🆕 KAFE BELUM CLAIMED</div><button class="tbtn" onclick="nav('claiming',document.querySelector('[onclick*=\"claiming\"]'))">Claim Sekarang →</button></div>
        <div class="table-scroll"><table><thead><tr><th>Nama Kafe</th><th>Area</th><th>Score</th><th>Status</th><th>Aksi</th></tr></thead>
        <tbody id="unclaimedTable"></tbody></table></div>
      </div>
    </div>

    <!-- NOTIFICATIONS -->
    <div class="page" id="page-notif">
      <div class="ph"><div><div class="ph-title">NOTIFIKASI</div><div class="ph-sub">// UPDATE TERBARU</div></div>
        <button class="tbtn" onclick="markAllRead()">✓ Tandai Semua Dibaca</button>
      </div>
      <div class="notif-feed" id="notifFeed"></div>
    </div>

    <!-- CLAIM KAFE -->
    <div class="page" id="page-claiming">
      <div class="ph">
        <div><div class="ph-title">CLAIM KAFE</div><div class="ph-sub">// PASANG BADGE VERIFIED + VIDEO REVIEW</div></div>
        <input class="search-mini" type="text" placeholder="Cari kafe..." oninput="filterClaiming(this.value)">
      </div>
      <div class="cards-grid" id="claimingGrid"></div>
    </div>

    <!-- KELOLA VIDEO -->
    <div class="page" id="page-videos">
      <div class="ph"><div><div class="ph-title">KELOLA VIDEO</div><div class="ph-sub">// LINK VIDEO REVIEW DI TIAP KAFE</div></div></div>
      <div class="cards-grid" id="videosGrid"></div>
    </div>

    <!-- ANALYTICS -->
    <div class="page" id="page-analytics">
      <div class="ph"><div><div class="ph-title">PERFORMA VIDEO</div><div class="ph-sub">// DETAIL ANALYTICS PER VIDEO</div></div></div>
      <div class="stat-grid">
        <div class="stat-card c2"><div class="stat-val" id="an-total">788</div><div class="stat-label">TOTAL KLIK SEMUA VIDEO</div></div>
        <div class="stat-card c1"><div class="stat-val" id="an-best">331</div><div class="stat-label">KLIK TERTINGGI</div><div class="stat-sub" id="an-bestname">Ruang Karya Co.</div></div>
        <div class="stat-card c3"><div class="stat-val" id="an-today">12</div><div class="stat-label">KLIK HARI INI</div></div>
        <div class="stat-card c4"><div class="stat-val" id="an-cvr">4.2</div><div class="stat-label">EST. CONVERSION RATE (%)</div><div class="stat-sub">klik / tampil kafe</div></div>
      </div>
      <div class="chart-section">
        <div class="chart-title">📊 RANKING KLIK PER VIDEO</div>
        <div class="chart-sub">// SEMUA KAFE YANG SUDAH CLAIMED</div>
        <div class="bar-chart" id="analyticsChart"></div>
      </div>
      <div class="tbl-wrap">
        <div class="tbl-hdr"><div class="tbl-title">📋 DETAIL PER KAFE</div></div>
        <div class="table-scroll"><table><thead><tr><th>Kafe</th><th>Area</th><th>Platform</th><th>Total Klik</th><th>Link</th></tr></thead>
        <tbody id="analyticsTable"></tbody></table></div>
      </div>
    </div>

    <!-- CLICK LOG -->
    <div class="page" id="page-clicks">
      <div class="ph"><div><div class="ph-title">CLICK LOG</div><div class="ph-sub">// LOG AKTIVITAS KLIK VIDEO</div></div>
        <button class="tbtn" onclick="generateDummyClicks()">+ Generate Dummy Clicks</button>
      </div>
      <div class="timeline" id="clickTimeline"></div>
    </div>

    <!-- PROFILE -->
    <div class="page" id="page-profile">
      <div class="ph"><div><div class="ph-title">PROFIL KOLABORATOR</div><div class="ph-sub">// INFO YANG MUNCUL DI NGOPI.MLG</div></div></div>
      <div class="form-section">
        <div class="fs-title">👤 Identitas Publik</div>
        <div class="fp-grid">
          <div class="fg"><label class="flbl">Username</label><input class="finput" value="@spaceseekers.id" id="p-username"></div>
          <div class="fg"><label class="flbl">Display Name</label><input class="finput" value="Spaceseekers.id" id="p-displayname"></div>
          <div class="fg fp-full"><label class="flbl">Bio Singkat</label><textarea class="ftextarea" id="p-bio">Content creator yang review kafe & working spots di Malang & sekitarnya. Jujur, detail, & aesthetic.</textarea></div>
          <div class="fg"><label class="flbl">Link Instagram</label><input class="finput" value="https://instagram.com/spaceseekers.id" id="p-ig"></div>
          <div class="fg"><label class="flbl">Link TikTok</label><input class="finput" value="https://tiktok.com/@spaceseekers.id" id="p-tt"></div>
          <div class="fg"><label class="flbl">Link YouTube</label><input class="finput" placeholder="https://youtube.com/@..." id="p-yt"></div>
        </div>
        <button class="save-btn" onclick="saveProfile()">💾 SIMPAN PROFIL</button>
      </div>
      <div class="form-section">
        <div class="fs-title">🎨 Branding</div>
        <div class="fp-grid">
          <div class="fg"><label class="flbl">Warna Badge (hex)</label><input class="finput" value="#FF3B5C" id="p-color" type="color" style="height:42px;padding:4px 8px;cursor:pointer"></div>
          <div class="fg"><label class="flbl">Tagline (max 40 karakter)</label><input class="finput" value="Honest cafe reviews for remote workers" id="p-tagline" maxlength="40"></div>
        </div>
        <button class="save-btn" onclick="showToast('✅ Branding disimpan!','ok')">💾 SIMPAN</button>
      </div>
    </div>

    <!-- TAMBAH KAFE -->
    <div class="page" id="page-add-cafe">
      <div class="ph">
        <div><div class="ph-title">TAMBAH KAFE</div><div class="ph-sub">// SUBMIT KAFE BARU KE NGOPI.MLG</div></div>
      </div>
      <div class="form-section">
        <div class="fs-title">☕ Info Kafe</div>
        <div class="fp-grid">
          <div class="fg"><label class="flbl">Nama Kafe *</label><input class="finput" id="ac-name" type="text" placeholder="cth: Omah Kopi Baru"></div>
          <div class="fg"><label class="flbl">Area *</label>
            <select class="fsel" id="ac-area">
              <option value="">-- Pilih area --</option>
              <option>Suhat</option><option>Dau</option><option>Klojen</option>
              <option>Ijen</option><option>Sigura-gura</option><option>Dinoyo</option><option>Lainnya</option>
            </select>
          </div>
          <div class="fg fp-full"><label class="flbl">Alamat Lengkap *</label><input class="finput" id="ac-address" type="text" placeholder="cth: Jl. Ijen No.10, Klojen, Malang"></div>
          <div class="fg"><label class="flbl">Jam Operasional</label><input class="finput" id="ac-hours" type="text" placeholder="07:00–22:00"></div>
          <div class="fg"><label class="flbl">Link Google Maps</label><input class="finput" id="ac-gmaps" type="url" placeholder="https://maps.google.com/..."></div>
          <div class="fg"><label class="flbl">Latitude</label><input class="finput" id="ac-lat" type="number" step="0.0001" placeholder="-7.9xxx"></div>
          <div class="fg"><label class="flbl">Longitude</label><input class="finput" id="ac-lng" type="number" step="0.0001" placeholder="112.6xxx"></div>
          <div class="fg"><label class="flbl">URL Foto Kafe</label><input class="finput" id="ac-img" type="url" placeholder="https://images.unsplash.com/..."></div>
        </div>
      </div>
      <div class="form-section">
        <div class="fs-title">📡 WiFi Speed Data</div>
        <div class="fp-grid">
          <div class="fg"><label class="flbl">Download (Mbps)</label><input class="finput" id="ac-dl" type="number" min="0" max="500" placeholder="50"></div>
          <div class="fg"><label class="flbl">Upload (Mbps)</label><input class="finput" id="ac-ul" type="number" min="0" max="200" placeholder="25"></div>
          <div class="fg"><label class="flbl">Ping (ms)</label><input class="finput" id="ac-ping" type="number" min="0" max="500" placeholder="20"></div>
        </div>
      </div>
      <div class="form-section">
        <div class="fs-title">🏷️ Fasilitas & Info</div>
        <div class="fp-grid">
          <div class="fg"><label class="flbl">AC</label>
            <select class="fsel" id="ac-ac"><option value="1">✅ Ada AC</option><option value="0">❌ Non-AC</option></select>
          </div>
          <div class="fg"><label class="flbl">Colokan</label>
            <select class="fsel" id="ac-colokan"><option value="banyak">🔌 Banyak</option><option value="sedikit">⚡ Sedikit</option></select>
          </div>
          <div class="fg"><label class="flbl">Range Harga (1–3)</label>
            <select class="fsel" id="ac-price">
              <option value="1">💚 Murah (Rp 8rb–25rb)</option>
              <option value="2">💛 Sedang (Rp 15rb–40rb)</option>
              <option value="3">🔴 Mahal (Rp 25rb–60rb+)</option>
            </select>
          </div>
          <div class="fg"><label class="flbl">Label Harga</label><input class="finput" id="ac-pricelabel" type="text" placeholder="Rp 15rb–30rb"></div>
          <div class="fg fp-full"><label class="flbl">Tags (pisahkan dengan koma)</label><input class="finput" id="ac-tags" type="text" placeholder="colokan banyak, ac, outdoor, sofa"></div>
        </div>
      </div>
      <div class="form-section">
        <div class="fs-title">▶ Link Video Review (opsional)</div>
        <div class="fp-grid">
          <div class="fg fp-full"><label class="flbl">Link Video (IG Reel / TikTok)</label><input class="finput" id="ac-video" type="url" placeholder="https://www.instagram.com/reel/..."></div>
        </div>
      </div>
      <div style="display:flex;gap:12px;margin-top:4px;flex-wrap:wrap">
        <button class="save-btn" onclick="saveNewCafeCollab()">💾 SUBMIT KAFE</button>
        <button style="font-family:var(--fm);font-size:13px;background:transparent;color:var(--tx2);border:1px solid var(--brd);border-radius:var(--rs);padding:12px 20px;cursor:pointer" onclick="nav('claiming',document.querySelector('[onclick*=\\'claiming\\']'))">Batal</button>
      </div>
    </div>

    <!-- TIPS -->
    <div class="page" id="page-tips">
      <div class="ph"><div><div class="ph-title">TIPS & PANDUAN</div><div class="ph-sub">// MAKSIMALKAN KOLABORASI DI NGOPI.MLG</div></div></div>
      <div class="tips-grid">
        <div class="tip-card"><div class="tip-icon">📌</div><div class="tip-title">CARA CLAIM KAFE</div><div class="tip-text">Masuk ke menu "Claim Kafe", cari kafe yang sudah kamu review, klik "Claim sebagai Verified Reviewer", lalu paste link video kamu. Badge verified langsung muncul di card kafe.</div></div>
        <div class="tip-card"><div class="tip-icon">▶</div><div class="tip-title">FORMAT VIDEO TERBAIK</div><div class="tip-text">Link IG Reel atau TikTok langsung lebih bagus dari link profil. Video singkat 60–90 detik yang fokus ke WiFi speed, meja kerja, dan suasana kafe perform paling bagus.</div></div>
        <div class="tip-card"><div class="tip-icon">📊</div><div class="tip-title">BACA ANALYTICS</div><div class="tip-text">Klik tinggi berarti audience NGOPI.MLG tertarik sama kafe itu. Jadikan data ini referensi untuk memilih lokasi video selanjutnya — fokus di kafe dengan traffic tinggi tapi belum ada video.</div></div>
        <div class="tip-card"><div class="tip-icon">⚡</div><div class="tip-title">UPLOAD SPEEDTEST</div><div class="tip-text">Kamu bisa upload data speedtest sendiri lewat tombol "Submit Speedtest" di site utama. Data kamu langsung muncul di speed log kafe, meningkatkan kredibilitas konten.</div></div>
        <div class="tip-card"><div class="tip-icon">🔔</div><div class="tip-title">NOTIFIKASI PENTING</div><div class="tip-text">Kamu dapat notifikasi tiap ada user yang submit data speedtest di kafe yang kamu claim — artinya ada traffic baru, waktu yang bagus untuk push konten!</div></div>
        <div class="tip-card"><div class="tip-icon">🤝</div><div class="tip-title">KETENTUAN KOLABORASI</div><div class="tip-text">Review harus jujur dan berdasarkan kunjungan nyata. Dilarang memasang link yang mengarah ke konten berbayar/sponsor tanpa disclosure. Admin NGOPI.MLG berhak mencabut badge.</div></div>
      </div>
    </div>

  </main>
</div>

<div class="toast-container" id="toastContainer"></div>

<script>
// ========== DATA ==========
const cafes = [
  {id:1,name:"Noi Coffee",area:"Ijen",img:"https://images.unsplash.com/photo-1559925393-8be0ec4767c8?w=400&q=70",download:87,score:76,claimed:true,videoUrl:"https://www.instagram.com/reel/example1",videoClicks:142,platform:"Instagram"},
  {id:2,name:"Filosofi Kopi",area:"Suhat",img:"https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=400&q=70",download:52,score:66,claimed:true,videoUrl:"https://www.tiktok.com/@spaceseekers.id/video/example2",videoClicks:98,platform:"TikTok"},
  {id:3,name:"Omah Kopi",area:"Dau",img:"https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400&q=70",download:73,score:64,claimed:true,videoUrl:"https://www.instagram.com/reel/example3",videoClicks:217,platform:"Instagram"},
  {id:4,name:"Kedai 97",area:"Sigura-gura",img:"https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400&q=70",download:95,score:82,claimed:false,videoUrl:null,videoClicks:0,platform:null},
  {id:5,name:"Kopitiam Dinoyo",area:"Dinoyo",img:"https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=400&q=70",download:41,score:57,claimed:false,videoUrl:null,videoClicks:0,platform:null},
  {id:6,name:"Ruang Karya Co.",area:"Klojen",img:"https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?w=400&q=70",download:120,score:88,claimed:true,videoUrl:"https://www.instagram.com/reel/example4",videoClicks:331,platform:"Instagram"}
];

const trendData = [
  {day:"Sen",clicks:18},{day:"Sel",clicks:24},{day:"Rab",clicks:31},{day:"Kam",clicks:19},{day:"Jum",clicks:42},{day:"Sab",clicks:37},{day:"Min",clicks:12}
];

let notifications = [
  {id:1,icon:"⚡",title:"Speedtest Baru di Ruang Karya Co.",desc:"Kevin A. baru upload hasil speedtest 125 Mbps. Kafe kamu makin populer!",time:"2 jam lalu",read:false},
  {id:2,icon:"📊",title:"Milestone: 300 Klik Video!",desc:"Video review Ruang Karya Co. kamu sudah mencapai 331 klik. Keren!",time:"1 hari lalu",read:false},
  {id:3,icon:"☕",title:"Kafe Baru Ditambahkan",desc:"Ada 1 kafe baru di area Lowokwaru yang belum di-claim. Mungkin menarik untuk diulas!",time:"2 hari lalu",read:true},
  {id:4,icon:"✅",title:"Claim Omah Kopi Disetujui",desc:"Admin NGOPI.MLG sudah verifikasi claim kamu untuk Omah Kopi, Dau.",time:"3 hari lalu",read:true}
];

let clickLog = [
  {cafe:"Ruang Karya Co.",action:"Klik video review",time:"10 menit lalu"},
  {cafe:"Omah Kopi",action:"Klik video review",time:"23 menit lalu"},
  {cafe:"Noi Coffee",action:"Klik video review",time:"1 jam lalu"},
  {cafe:"Ruang Karya Co.",action:"Klik video review",time:"1 jam lalu"},
  {cafe:"Filosofi Kopi",action:"Klik video review",time:"2 jam lalu"},
  {cafe:"Omah Kopi",action:"Klik video review",time:"3 jam lalu"},
  {cafe:"Ruang Karya Co.",action:"Klik video review",time:"4 jam lalu"},
  {cafe:"Noi Coffee",action:"Klik video review",time:"kemarin"},
];

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

// ========== NAV ==========
function nav(id, el) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.querySelectorAll('.sb-item').forEach(s => s.classList.remove('active'));
  document.querySelectorAll('.drawer-item').forEach(s => s.classList.remove('active'));
  document.getElementById('page-' + id).classList.add('active');
  if (el) el.classList.add('active');
  if (id === 'dashboard') renderDashboard();
  if (id === 'claiming') renderClaimingGrid();
  if (id === 'videos') renderVideosGrid();
  if (id === 'analytics') renderAnalytics();
  if (id === 'clicks') renderClickLog();
  if (id === 'notif') renderNotifs();
}

// ========== DASHBOARD ==========
function renderDashboard() {
  const claimed = cafes.filter(c => c.claimed);
  const totalClicks = cafes.reduce((s, c) => s + c.videoClicks, 0);
  const withVideo = cafes.filter(c => c.videoUrl).length;
  const avg = withVideo ? Math.round(totalClicks / withVideo) : 0;

  document.getElementById('ds-claimed').textContent = claimed.length;
  document.getElementById('ds-clicks').textContent = totalClicks;
  document.getElementById('ds-vids').textContent = withVideo;
  document.getElementById('ds-avgclk').textContent = avg;
  document.getElementById('hs-claimed').textContent = claimed.length;
  document.getElementById('hs-clicks').textContent = totalClicks;
  document.getElementById('hs-videos').textContent = withVideo;

  // Perf chart
  const maxClicks = Math.max(...claimed.map(c => c.videoClicks), 1);
  document.getElementById('perfChart').innerHTML = claimed
    .sort((a,b) => b.videoClicks - a.videoClicks)
    .map(c => '<div class="bar-row">'
      + '<div class="bar-label">' + c.name + '</div>'
      + '<div class="bar-track"><div class="bar-fill" style="width:' + Math.round(c.videoClicks/maxClicks*100) + '%;background:var(--a2)"></div></div>'
      + '<div class="bar-val">' + c.videoClicks + ' klik</div>'
    + '</div>').join('');

  // 7-day trend
  const maxT = Math.max(...trendData.map(d => d.clicks));
  document.getElementById('trendChart').innerHTML = trendData.map(d => '<div class="bar-row">'
    + '<div class="bar-label">' + d.day + '</div>'
    + '<div class="bar-track"><div class="bar-fill" style="width:' + Math.round(d.clicks/maxT*100) + '%;background:var(--a)"></div></div>'
    + '<div class="bar-val">' + d.clicks + '</div>'
  + '</div>').join('');

  // Unclaimed
  const unclaimed = cafes.filter(c => !c.claimed);
  document.getElementById('unclaimedTable').innerHTML = unclaimed.map(c =>
    '<tr><td><div class="td-name">' + c.name + '</div></td>'
    + '<td><span class="td-mono">' + c.area + '</span></td>'
    + '<td><span style="font-family:var(--fd);font-size:18px;color:var(--a)">' + c.score + '</span></td>'
    + '<td><span class="tag">Belum diclaim</span></td>'
    + '<td><button class="ic-btn claim" onclick="claimCafe(' + c.id + ')">📌 Claim</button></td>'
    + '</tr>'
  ).join('');
}

// ========== CLAIMING GRID ==========
function renderClaimingGrid(filter='') {
  const list = cafes.filter(c => !filter || c.name.toLowerCase().includes(filter.toLowerCase()) || c.area.toLowerCase().includes(filter.toLowerCase()));
  document.getElementById('claimingGrid').innerHTML = list.map(c => {
    const isClaimed = c.claimed;
    return '<div class="item-card">'
      + '<div class="ic-img">'
        + '<img src="' + c.img + '" alt="' + c.name + '" loading="lazy">'
        + '<div class="ic-img-overlay"></div>'
        + (isClaimed ? '<div class="ic-claimed">✓ CLAIMED</div>' : '<div class="ic-unclaimed">Belum diclaim</div>')
        + '<div class="ic-area">📍 ' + c.area + '</div>'
      + '</div>'
      + '<div class="ic-body">'
        + '<div class="ic-name">' + c.name + '</div>'
        + '<div class="ic-meta"><span>↓ ' + c.download + ' Mbps</span><span>Score: ' + c.score + '</span></div>'
        + '<div class="ic-video-row">'
          + '<input class="ic-video-inp" id="vu-' + c.id + '" type="url" placeholder="Paste link IG Reel / TikTok..." value="' + (c.videoUrl||'') + '">'
        + '</div>'
        + '<div class="ic-actions">'
          + (isClaimed
            ? '<button class="ic-btn save" onclick="saveVideo(' + c.id + ')">💾 Simpan Video</button>'
              + '<button class="ic-btn unclaim" onclick="unclaimCafe(' + c.id + ')">✕ Unclaim</button>'
            : '<button class="ic-btn claim" onclick="claimCafe(' + c.id + ')">📌 Claim Kafe Ini</button>')
        + '</div>'
        + (isClaimed ? '<div class="ic-clicks">Klik video: <strong>' + c.videoClicks + '</strong></div>' : '')
      + '</div>'
    + '</div>';
  }).join('');
}

function filterClaiming(v) { renderClaimingGrid(v); }

function claimCafe(id) {
  const c = cafes.find(x => x.id === id);
  if (!c) return;
  c.claimed = true;
  showToast('📌 ' + c.name + ' berhasil diclaim!', 'ok');
  renderClaimingGrid();
  renderDashboard();
  notifications.unshift({id:Date.now(),icon:'✅',title:'Claim ' + c.name + ' Disetujui',desc:'Kafe berhasil diclaim. Pasang link video sekarang!',time:'Baru saja',read:false});
  document.getElementById('notifCnt').textContent = notifications.filter(n=>!n.read).length;
}

function unclaimCafe(id) {
  if (!confirm('Yakin mau unclaim kafe ini?')) return;
  const c = cafes.find(x => x.id === id);
  if (!c) return;
  c.claimed = false; c.videoUrl = null;
  showToast('✕ ' + c.name + ' di-unclaim', 'ok');
  renderClaimingGrid();
  renderDashboard();
}

function saveVideo(id) {
  const c = cafes.find(x => x.id === id);
  const inp = document.getElementById('vu-' + id);
  if (!inp.value.trim()) { showToast('⚠️ Paste link video dulu!', 'err'); return; }
  c.videoUrl = inp.value.trim();
  c.platform = inp.value.includes('tiktok') ? 'TikTok' : 'Instagram';
  showToast('✅ Link video ' + c.name + ' disimpan!', 'ok');
  renderDashboard();
}

// ========== VIDEOS GRID ==========
function renderVideosGrid() {
  const claimed = cafes.filter(c => c.claimed);
  document.getElementById('vidCnt').textContent = cafes.filter(c => c.videoUrl).length;
  document.getElementById('videosGrid').innerHTML = claimed.map(c =>
    '<div class="item-card">'
      + '<div class="ic-img">'
        + '<img src="' + c.img + '" alt="' + c.name + '" loading="lazy">'
        + '<div class="ic-img-overlay"></div>'
        + (c.videoUrl ? '<div class="ic-claimed">▶ ADA VIDEO</div>' : '<div class="ic-unclaimed">Belum ada video</div>')
        + '<div class="ic-area">📍 ' + c.area + '</div>'
      + '</div>'
      + '<div class="ic-body">'
        + '<div class="ic-name">' + c.name + '</div>'
        + '<div class="ic-meta">' + (c.platform ? '<span class="tag green">' + c.platform + '</span>' : '<span class="tag">No Platform</span>') + '</div>'
        + '<div class="ic-video-row">'
          + '<input class="ic-video-inp" id="vv-' + c.id + '" type="url" placeholder="Paste link video..." value="' + (c.videoUrl||'') + '">'
        + '</div>'
        + '<div class="ic-actions">'
          + '<button class="ic-btn save" onclick="saveVideoFromVid(' + c.id + ')">💾 Simpan</button>'
          + (c.videoUrl ? '<a class="ic-btn" href="' + c.videoUrl + '" target="_blank">↗ Buka Video</a>' : '')
        + '</div>'
        + (c.videoUrl ? '<div class="ic-clicks">Total klik: <strong>' + c.videoClicks + '</strong></div>' : '')
      + '</div>'
    + '</div>'
  ).join('');
}

function saveVideoFromVid(id) {
  const c = cafes.find(x => x.id === id);
  const inp = document.getElementById('vv-' + id);
  if (!inp.value.trim()) { showToast('⚠️ Paste link video dulu!', 'err'); return; }
  c.videoUrl = inp.value.trim();
  c.platform = inp.value.includes('tiktok') ? 'TikTok' : 'Instagram';
  showToast('✅ Video ' + c.name + ' diperbarui!', 'ok');
  renderVideosGrid();
  renderDashboard();
}

// ========== ANALYTICS ==========
function renderAnalytics() {
  const claimed = cafes.filter(c => c.claimed);
  const total = claimed.reduce((s,c) => s+c.videoClicks, 0);
  const best = claimed.sort((a,b)=>b.videoClicks-a.videoClicks)[0];
  document.getElementById('an-total').textContent = total;
  document.getElementById('an-best').textContent = best ? best.videoClicks : 0;
  if (best) document.getElementById('an-bestname').textContent = best.name;
  document.getElementById('an-today').textContent = trendData[trendData.length-1].clicks;

  const maxC = Math.max(...claimed.map(c=>c.videoClicks), 1);
  document.getElementById('analyticsChart').innerHTML = claimed.map(c =>
    '<div class="bar-row">'
    + '<div class="bar-label">' + c.name + '</div>'
    + '<div class="bar-track"><div class="bar-fill" style="width:' + Math.round(c.videoClicks/maxC*100) + '%;background:linear-gradient(90deg,var(--a2),var(--a4))"></div></div>'
    + '<div class="bar-val">' + c.videoClicks + '</div>'
    + '</div>'
  ).join('');

  document.getElementById('analyticsTable').innerHTML = claimed.map(c =>
    '<tr>'
    + '<td><div class="td-name">' + c.name + '</div></td>'
    + '<td><span class="td-mono">' + c.area + '</span></td>'
    + '<td>' + (c.platform ? '<span class="tag ' + (c.platform==='Instagram'?'red':'green') + '">' + c.platform + '</span>' : '—') + '</td>'
    + '<td><span style="font-family:var(--fd);font-size:22px;color:var(--a2)">' + c.videoClicks + '</span></td>'
    + '<td>' + (c.videoUrl ? '<a class="tbtn" href="' + c.videoUrl + '" target="_blank" style="font-size:10px">↗ Buka</a>' : '—') + '</td>'
    + '</tr>'
  ).join('');
}

// ========== CLICK LOG ==========
function renderClickLog() {
  document.getElementById('clickTimeline').innerHTML = clickLog.map(e =>
    '<div class="tl-item">'
    + '<div class="tl-dot"></div>'
    + '<div style="flex:1"><div class="tl-cafe">' + e.cafe + '</div><div class="tl-action">' + e.action + '</div></div>'
    + '<div class="tl-time">' + e.time + '</div>'
    + '</div>'
  ).join('');
}

function generateDummyClicks() {
  const names = cafes.filter(c=>c.claimed).map(c=>c.name);
  const times = ['baru saja','2 menit lalu','5 menit lalu','10 menit lalu','15 menit lalu'];
  clickLog.unshift({cafe:names[Math.floor(Math.random()*names.length)],action:'Klik video review',time:times[Math.floor(Math.random()*times.length)]});
  const c = cafes.find(x=>x.name===clickLog[0].cafe);
  if(c) c.videoClicks++;
  renderClickLog();
  renderDashboard();
  showToast('👆 Dummy click log ditambahkan!','ok');
}

// ========== NOTIFICATIONS ==========
function renderNotifs() {
  document.getElementById('notifFeed').innerHTML = notifications.map(n =>
    '<div class="notif-item' + (n.read ? '' : ' unread') + '" onclick="markRead(' + n.id + ')">'
    + '<div class="notif-icon">' + n.icon + '</div>'
    + '<div class="notif-body"><div class="notif-title">' + n.title + '</div><div class="notif-desc">' + n.desc + '</div></div>'
    + '<div style="display:flex;flex-direction:column;align-items:flex-end;gap:6px">'
      + '<div class="notif-time">' + n.time + '</div>'
      + (!n.read ? '<div class="unread-dot"></div>' : '')
    + '</div>'
    + '</div>'
  ).join('');
}

function markRead(id) {
  const n = notifications.find(x=>x.id===id);
  if(n) n.read = true;
  renderNotifs();
  const cnt = notifications.filter(n=>!n.read).length;
  document.getElementById('notifCnt').textContent = cnt || '';
  if(document.getElementById('dNotifCnt')) document.getElementById('dNotifCnt').textContent = cnt || '';
}

function markAllRead() {
  notifications.forEach(n=>n.read=true);
  renderNotifs();
  document.getElementById('notifCnt').textContent = '';
  if(document.getElementById('dNotifCnt')) document.getElementById('dNotifCnt').textContent = '';
  showToast('✓ Semua notif dibaca','ok');
}

// ========== PROFILE ==========
function saveProfile() { showToast('✅ Profil disimpan!','ok'); }

function refreshDash() { renderDashboard(); showToast('🔄 Data direfresh!','ok'); }

// ========== TOAST ==========
function showToast(msg, type) {
  const c = document.getElementById('toastContainer');
  const t = document.createElement('div');
  t.className = 'toast';
  t.innerHTML = '<span>' + (type==='ok'?'✅':type==='err'?'⚠️':'ℹ️') + '</span><span>' + msg + '</span>';
  c.appendChild(t);
  setTimeout(() => t.classList.add('show'), 10);
  setTimeout(() => { t.classList.remove('show'); setTimeout(()=>t.remove(),400); }, 3000);
}

// ========== TAMBAH KAFE ==========
function saveNewCafeCollab() {
  const name = document.getElementById('ac-name').value.trim();
  const area = document.getElementById('ac-area').value;
  const address = document.getElementById('ac-address').value.trim();
  if (!name || !area || !address) { showToast('⚠️ Lengkapi data yang wajib!', 'err'); return; }
  const dl = parseInt(document.getElementById('ac-dl').value) || 0;
  const ul = parseInt(document.getElementById('ac-ul').value) || 0;
  const ping = parseInt(document.getElementById('ac-ping').value) || 0;
  const videoUrl = document.getElementById('ac-video').value.trim() || null;
  const newId = Math.max(...cafes.map(c => c.id)) + 1;
  const score = Math.round(Math.min(100,(dl/100)*100)*.4+Math.max(0,100-ping)*.2+
    (document.getElementById('ac-colokan').value==='banyak'?100:30)*.25+
    (parseInt(document.getElementById('ac-price').value)===1?100:parseInt(document.getElementById('ac-price').value)===2?70:40)*.15);
  cafes.push({
    id: newId, name, area,
    img: document.getElementById('ac-img').value.trim() || 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400&q=70',
    download: dl, score,
    claimed: true,
    videoUrl,
    videoClicks: 0,
    platform: videoUrl ? (videoUrl.includes('tiktok') ? 'TikTok' : 'Instagram') : null
  });
  notifications.unshift({
    id: Date.now(), icon: '☕',
    title: `Kafe Baru: ${name}`,
    desc: `Kafe ${name} di area ${area} berhasil disubmit dan langsung diclaim.`,
    time: 'Baru saja', read: false
  });
  const cnt = notifications.filter(n => !n.read).length;
  document.getElementById('notifCnt').textContent = cnt;
  if(document.getElementById('dNotifCnt')) document.getElementById('dNotifCnt').textContent = cnt;
  showToast(`✅ ${name} berhasil disubmit!`, 'ok');
  // Reset form
  ['ac-name','ac-address','ac-hours','ac-gmaps','ac-lat','ac-lng','ac-img','ac-dl','ac-ul','ac-ping','ac-tags','ac-video','ac-pricelabel'].forEach(id => { const el=document.getElementById(id); if(el) el.value=''; });
  document.getElementById('ac-area').value = '';
  nav('claiming', document.querySelector('[onclick*="claiming"]'));
}

// ========== THEME ==========
function toggleTheme() {
  const h = document.documentElement, b = document.getElementById('themeBtn');
  if (h.getAttribute('data-theme')==='dark') { h.setAttribute('data-theme','light'); b.textContent='☀️'; }
  else { h.setAttribute('data-theme','dark'); b.textContent='🌙'; }
}

// ========== INIT ==========
renderDashboard();
renderClaimingGrid();
renderNotifs();
const _initCnt = notifications.filter(n=>!n.read).length;
document.getElementById('notifCnt').textContent = _initCnt;
if(document.getElementById('dNotifCnt')) document.getElementById('dNotifCnt').textContent = _initCnt;
</script>
</body>
</html>
