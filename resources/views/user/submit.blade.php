<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Submit Speedtest — NGOPI.MLG</title>
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

/* PAGE HEADER */
.page-header{padding:48px 40px 0;max-width:960px;margin:0 auto}
@media(max-width:600px){.page-header{padding:32px 20px 0}}
.ph-eyebrow{font-family:var(--fm);font-size:10px;letter-spacing:3px;color:var(--a);text-transform:uppercase;margin-bottom:10px}
.ph-title{font-family:var(--fd);font-size:clamp(44px,6vw,72px);letter-spacing:1px;line-height:.92;margin-bottom:10px}
.ph-sub{font-family:var(--fm);font-size:12px;color:var(--tx3);letter-spacing:.5px;line-height:1.7;max-width:480px}

/* MAIN LAYOUT */
.main-wrap{max-width:960px;margin:40px auto 80px;padding:0 40px;display:grid;grid-template-columns:1fr 320px;gap:28px;align-items:start}
@media(max-width:840px){.main-wrap{grid-template-columns:1fr;padding:0 20px}}

/* FORM CARD */
.form-card{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);overflow:hidden}
.fc-head{padding:18px 24px;border-bottom:1px solid var(--brd);display:flex;align-items:center;justify-content:space-between}
.fc-title{font-family:var(--fd);font-size:22px;letter-spacing:.5px}
.fc-step{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:2px}
.fc-body{padding:24px}

/* FORM ELEMENTS */
.form-group{margin-bottom:20px}
.flbl{font-family:var(--fm);font-size:10px;letter-spacing:3px;color:var(--tx3);text-transform:uppercase;display:block;margin-bottom:8px;display:flex;align-items:center;justify-content:space-between}
.flbl span{color:var(--a2)}
.finput,.fsel{width:100%;background:var(--bg3);border:1px solid var(--brd);border-radius:var(--rs);padding:12px 15px;color:var(--tx);font-family:var(--fb);font-size:14px;outline:none;transition:border-color var(--tr),box-shadow var(--tr);-webkit-appearance:none}
.finput:focus,.fsel:focus{border-color:var(--a);box-shadow:0 0 0 3px rgba(205,255,71,.1)}
.finput::placeholder{color:var(--tx3)}
.fg-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}

/* SLIDER */
.slider-wrap{margin-bottom:20px}
.slider-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:10px}
.slider-label{font-family:var(--fm);font-size:10px;letter-spacing:3px;color:var(--tx3);text-transform:uppercase}
.slider-val{font-family:var(--fd);font-size:32px;line-height:1}
.slider-unit{font-family:var(--fm);font-size:10px;color:var(--tx3);margin-left:4px}
input[type=range]{-webkit-appearance:none;width:100%;height:6px;border-radius:3px;background:var(--bg4);outline:none;cursor:pointer}
input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;cursor:pointer;border:2px solid var(--bg2);box-shadow:0 2px 8px var(--sh);transition:transform var(--tr)}
input[type=range]::-webkit-slider-thumb:hover{transform:scale(1.2)}
#dlRange::-webkit-slider-thumb{background:var(--a)}
#ulRange::-webkit-slider-thumb{background:var(--a3)}
#pingRange::-webkit-slider-thumb{background:var(--a2)}
#dlRange{accent-color:var(--a)}
#ulRange{accent-color:var(--a3)}
#pingRange{accent-color:var(--a2)}

/* KONDISI RADIO */
.kondisi-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:20px}
.kondisi-opt{border:1px solid var(--brd);border-radius:var(--rs);padding:12px 14px;cursor:pointer;transition:all var(--tr);display:flex;align-items:center;gap:10px}
.kondisi-opt:hover{border-color:var(--tx2)}
.kondisi-opt.selected{border-color:var(--a);background:rgba(205,255,71,.07)}
.kondisi-opt input{accent-color:var(--a)}
.kondisi-label{font-family:var(--fm);font-size:11px;color:var(--tx2);letter-spacing:.3px}
.kondisi-opt.selected .kondisi-label{color:var(--a)}

/* PHOTO UPLOAD */
.photo-upload{border:2px dashed var(--brd);border-radius:var(--rs);padding:28px;text-align:center;cursor:pointer;transition:all var(--tr);position:relative;overflow:hidden;margin-bottom:20px}
.photo-upload:hover{border-color:var(--a);background:rgba(205,255,71,.03)}
.photo-upload.has-file{border-style:solid;border-color:rgba(205,255,71,.3);background:rgba(205,255,71,.04)}
.pu-icon{font-size:32px;margin-bottom:10px}
.pu-title{font-family:var(--fd);font-size:18px;letter-spacing:.5px;margin-bottom:4px}
.pu-sub{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:.5px}
.pu-input{position:absolute;inset:0;opacity:0;cursor:pointer}
.pu-preview{width:100%;border-radius:var(--rs);object-fit:cover;max-height:200px;display:none}

/* NEW CAFE TOGGLE */
.new-cafe-toggle{display:flex;align-items:center;gap:10px;margin-bottom:16px;cursor:pointer}
.toggle-switch{width:40px;height:22px;border-radius:11px;background:var(--bg4);border:1px solid var(--brd);position:relative;transition:background var(--tr);flex-shrink:0}
.toggle-knob{position:absolute;top:3px;left:3px;width:14px;height:14px;border-radius:50%;background:var(--tx3);transition:all var(--tr)}
.toggle-switch.on{background:rgba(205,255,71,.2);border-color:var(--a)}
.toggle-switch.on .toggle-knob{left:21px;background:var(--a)}
.toggle-label{font-family:var(--fm);font-size:11px;color:var(--tx2);letter-spacing:.5px}
.new-cafe-fields{display:none}
.new-cafe-fields.show{display:block;animation:fadeUp .3s ease}
@keyframes fadeUp{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:translateY(0)}}

/* SUBMIT */
.submit-btn{width:100%;font-family:var(--fd);font-size:22px;letter-spacing:3px;background:var(--a);color:#000;border:none;border-radius:var(--rs);padding:15px;cursor:pointer;transition:all var(--tr);display:flex;align-items:center;justify-content:center;gap:10px;margin-top:4px}
.submit-btn:hover{transform:translateY(-2px);box-shadow:0 8px 30px rgba(205,255,71,.3)}

/* SIDEBAR */
.sidebar-section{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);overflow:hidden;margin-bottom:16px}
.ss-head{padding:14px 18px;border-bottom:1px solid var(--brd)}
.ss-title{font-family:var(--fd);font-size:18px;letter-spacing:.5px}
.ss-sub{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:1px;margin-top:2px}
.ss-body{padding:16px 18px}

/* LIVE PREVIEW */
.preview-metric{display:flex;align-items:center;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--brd)}
.preview-metric:last-child{border-bottom:none}
.pm-label{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:.5px}
.pm-val{font-family:var(--fd);font-size:24px;line-height:1}
.pm-unit{font-family:var(--fm);font-size:9px;color:var(--tx3);margin-left:3px}

/* SCORE PREVIEW */
.score-preview{text-align:center;padding:16px 0}
.sp-label{font-family:var(--fm);font-size:10px;letter-spacing:2px;color:var(--tx3);margin-bottom:6px}
.sp-num{font-family:var(--fd);font-size:72px;line-height:1;color:var(--a);text-shadow:0 0 30px rgba(205,255,71,.3);transition:all .5s}
.sp-sub{font-family:var(--fm);font-size:10px;color:var(--tx3);letter-spacing:1px;margin-top:4px}

/* TIPS */
.tip-item{display:flex;gap:10px;margin-bottom:14px}
.tip-icon{font-size:16px;flex-shrink:0;margin-top:1px}
.tip-text{font-family:var(--fm);font-size:11px;color:var(--tx2);letter-spacing:.3px;line-height:1.6}
.tip-text:last-child{margin-bottom:0}

/* SUCCESS */
.success-overlay{position:fixed;inset:0;background:rgba(0,0,0,.85);z-index:200;display:none;align-items:center;justify-content:center}
.success-overlay.show{display:flex}
.success-card{background:var(--bg2);border:1px solid var(--brd);border-radius:var(--r);padding:48px 40px;max-width:420px;width:90%;text-align:center;animation:popIn .5s cubic-bezier(.34,1.56,.64,1)}
@keyframes popIn{from{transform:scale(.7);opacity:0}to{transform:scale(1);opacity:1}}
.sc-emoji{font-size:64px;margin-bottom:20px}
.sc-title{font-family:var(--fd);font-size:46px;letter-spacing:1px;color:var(--a);margin-bottom:8px}
.sc-sub{font-family:var(--fm);font-size:12px;color:var(--tx3);letter-spacing:.5px;line-height:1.7;margin-bottom:28px}
.sc-actions{display:flex;flex-direction:column;gap:10px}
.sc-btn{font-family:var(--fd);font-size:17px;letter-spacing:2px;border-radius:var(--rs);padding:13px;cursor:pointer;transition:all var(--tr);border:none;text-decoration:none;display:block;text-align:center}
.sc-btn.primary{background:var(--a);color:#000}
.sc-btn.primary:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(205,255,71,.3)}
.sc-btn.secondary{background:var(--bg3);color:var(--tx2);border:1px solid var(--brd)}
.sc-btn.secondary:hover{border-color:var(--tx2);color:var(--tx)}
</style>
</head>
<body>

<nav>
  <a href="{{ route('ngopi') }}" class="nav-logo">NGOPI<span>.</span>MLG</a>
  <div class="nav-right">
    <a href="{{ route('ngopi') }}" class="nbtn">← Kembali</a>
    <button class="theme-btn" onclick="toggleTheme()" id="themeBtn">🌙</button>
  </div>
</nav>

<!-- HEADER -->
<div class="page-header">
  <div class="ph-eyebrow">⚡ KONTRIBUSI</div>
  <div class="ph-title">SUBMIT<br>SPEEDTEST</div>
  <div class="ph-sub">// Bantu komunitas dengan share hasil speedtest kamu dari kafe. Data kamu langsung masuk ke speed log kafe tersebut.</div>
</div>

<!-- MAIN -->
<div class="main-wrap">

  <!-- FORM -->
  <div>
    <!-- PILIH KAFE -->
    <div class="form-card" style="margin-bottom:16px">
      <div class="fc-head">
        <div class="fc-title">📍 PILIH KAFE</div>
        <div class="fc-step">// LANGKAH 1</div>
      </div>
      <div class="fc-body">
        <div class="form-group">
          <label class="flbl">Nama Kafe <span>*Wajib</span></label>
          <select class="fsel" id="cafeSelect" onchange="onCafeChange(this.value)">
            <option value="">Pilih kafe...</option>
            <option value="1">Noi Coffee — Ijen</option>
            <option value="2">Filosofi Kopi — Suhat</option>
            <option value="3">Omah Kopi — Dau</option>
            <option value="4">Kedai 97 — Sigura-gura</option>
            <option value="5">Kopitiam Dinoyo — Dinoyo</option>
            <option value="6">Ruang Karya Co. — Klojen</option>
            <option value="new">+ Tambah Kafe Baru</option>
          </select>
        </div>

        <div class="new-cafe-toggle" onclick="toggleNewCafe()" id="ncToggle" style="display:none">
          <div class="toggle-switch on" id="ncSwitch"><div class="toggle-knob"></div></div>
          <div class="toggle-label">Tambah kafe baru ke database</div>
        </div>

        <div class="new-cafe-fields show" id="newCafeFields" style="display:none">
          <div class="fg-row">
            <div class="form-group"><label class="flbl">Nama Kafe <span>*</span></label><input class="finput" placeholder="Nama kafe..." id="newCafeName"></div>
            <div class="form-group"><label class="flbl">Area <span>*</span></label>
              <select class="fsel" id="newCafeArea">
                <option>Pilih area...</option>
                <option>Suhat</option><option>Dau</option><option>Klojen</option>
                <option>Ijen</option><option>Sigura-gura</option><option>Dinoyo</option><option>Lowokwaru</option>
              </select>
            </div>
          </div>
          <div class="form-group"><label class="flbl">Alamat</label><input class="finput" placeholder="Jl. nama jalan no..." id="newCafeAddr"></div>
          <div class="fg-row">
            <div class="form-group"><label class="flbl">Latitude</label><input class="finput" placeholder="-7.9xxx" id="newCafeLat" type="number" step="0.0001"></div>
            <div class="form-group"><label class="flbl">Longitude</label><input class="finput" placeholder="112.6xxx" id="newCafeLng" type="number" step="0.0001"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- SPEED DATA -->
    <div class="form-card" style="margin-bottom:16px">
      <div class="fc-head">
        <div class="fc-title">📡 DATA SPEEDTEST</div>
        <div class="fc-step">// LANGKAH 2</div>
      </div>
      <div class="fc-body">
        <div class="slider-wrap">
          <div class="slider-header">
            <div class="slider-label">Download</div>
            <div><span class="slider-val" id="dlVal" style="color:var(--a)">50</span><span class="slider-unit">Mbps ↓</span></div>
          </div>
          <input type="range" id="dlRange" min="1" max="300" value="50" oninput="updateSlider()">
        </div>
        <div class="slider-wrap">
          <div class="slider-header">
            <div class="slider-label">Upload</div>
            <div><span class="slider-val" id="ulVal" style="color:var(--a3)">20</span><span class="slider-unit">Mbps ↑</span></div>
          </div>
          <input type="range" id="ulRange" min="1" max="150" value="20" oninput="updateSlider()">
        </div>
        <div class="slider-wrap">
          <div class="slider-header">
            <div class="slider-label">Ping</div>
            <div><span class="slider-val" id="pingVal" style="color:var(--a2)">20</span><span class="slider-unit">ms</span></div>
          </div>
          <input type="range" id="pingRange" min="1" max="200" value="20" oninput="updateSlider()">
        </div>

        <div class="form-group" style="margin-top:4px">
          <label class="flbl">Atau input manual</label>
          <div class="fg-row">
            <input class="finput" placeholder="DL Mbps" type="number" id="dlManual" oninput="syncManual('dl',this.value)">
            <input class="finput" placeholder="UL Mbps" type="number" id="ulManual" oninput="syncManual('ul',this.value)">
            <input class="finput" placeholder="Ping ms" type="number" id="pingManual" oninput="syncManual('ping',this.value)">
          </div>
        </div>
      </div>
    </div>

    <!-- KONDISI & FOTO -->
    <div class="form-card" style="margin-bottom:16px">
      <div class="fc-head">
        <div class="fc-title">📸 KONDISI & FOTO</div>
        <div class="fc-step">// LANGKAH 3</div>
      </div>
      <div class="fc-body">
        <div class="form-group">
          <label class="flbl">Kondisi Kafe Saat Ini</label>
          <div class="kondisi-grid">
            <label class="kondisi-opt selected" onclick="selectKondisi(this,'sepi')">
              <input type="radio" name="kondisi" value="sepi" checked>
              <span class="kondisi-label">🟢 Lagi Sepi</span>
            </label>
            <label class="kondisi-opt" onclick="selectKondisi(this,'ramai')">
              <input type="radio" name="kondisi" value="ramai">
              <span class="kondisi-label">🔴 Lagi Ramai</span>
            </label>
            <label class="kondisi-opt" onclick="selectKondisi(this,'sedang')">
              <input type="radio" name="kondisi" value="sedang">
              <span class="kondisi-label">🟡 Sedang</span>
            </label>
            <label class="kondisi-opt" onclick="selectKondisi(this,'tutup')">
              <input type="radio" name="kondisi" value="tutup">
              <span class="kondisi-label">⛔ Tutup</span>
            </label>
          </div>
        </div>

        <div>
          <label class="flbl" style="display:block;margin-bottom:8px">Foto Bukti Speedtest</label>
          <div class="photo-upload" id="photoUpload" onclick="document.getElementById('photoInput').click()">
            <img class="pu-preview" id="photoPreview">
            <div id="photoPlaceholder">
              <div class="pu-icon">📷</div>
              <div class="pu-title">Upload Screenshot</div>
              <div class="pu-sub">// Foto layar speedtest atau suasana kafe (opsional)</div>
            </div>
            <input type="file" class="pu-input" id="photoInput" accept="image/*" onchange="previewPhoto(this)">
          </div>
        </div>

        <div class="form-group">
          <label class="flbl">Nama / Nickname</label>
          <input class="finput" placeholder="Anon" id="nickname">
        </div>
        <div class="form-group">
          <label class="flbl">Catatan (opsional)</label>
          <input class="finput" placeholder="Misal: WiFi cepat tapi sinyal kadang putus..." id="note">
        </div>

        <button class="submit-btn" onclick="submitTest()">⚡ SUBMIT SPEEDTEST</button>
      </div>
    </div>
  </div>

  <!-- SIDEBAR -->
  <div>
    <!-- LIVE PREVIEW -->
    <div class="sidebar-section">
      <div class="ss-head"><div class="ss-title">📊 Preview Data</div><div class="ss-sub">// Live update</div></div>
      <div class="ss-body">
        <div class="preview-metric">
          <span class="pm-label">DOWNLOAD</span>
          <span><span class="pm-val" id="prevDl" style="color:var(--a)">50</span><span class="pm-unit">Mbps ↓</span></span>
        </div>
        <div class="preview-metric">
          <span class="pm-label">UPLOAD</span>
          <span><span class="pm-val" id="prevUl" style="color:var(--a3)">20</span><span class="pm-unit">Mbps ↑</span></span>
        </div>
        <div class="preview-metric">
          <span class="pm-label">PING</span>
          <span><span class="pm-val" id="prevPing" style="color:var(--a2)">20</span><span class="pm-unit">ms</span></span>
        </div>
        <div class="score-preview">
          <div class="sp-label">// ESTIMASI KONTRIBUSI KE SKOR</div>
          <div class="sp-num" id="scorePreview">66</div>
          <div class="sp-sub">performa wifi</div>
        </div>
      </div>
    </div>

    <!-- TIPS -->
    <div class="sidebar-section">
      <div class="ss-head"><div class="ss-title">💡 Tips Submit</div></div>
      <div class="ss-body">
        <div class="tip-item"><div class="tip-icon">⚡</div><div class="tip-text">Gunakan app Speedtest by Ookla atau Fast.com untuk hasil paling akurat.</div></div>
        <div class="tip-item"><div class="tip-icon">📡</div><div class="tip-text">Pastikan terhubung ke WiFi kafe, bukan data seluler.</div></div>
        <div class="tip-item"><div class="tip-icon">📸</div><div class="tip-text">Screenshot hasil speedtest sebagai bukti sangat dianjurkan.</div></div>
        <div class="tip-item"><div class="tip-icon">🔁</div><div class="tip-text">Submit beberapa kali di waktu berbeda untuk data yang lebih akurat.</div></div>
      </div>
    </div>

    <!-- RECENT -->
    <div class="sidebar-section">
      <div class="ss-head"><div class="ss-title">🕐 Baru Disubmit</div></div>
      <div class="ss-body" id="recentList"></div>
    </div>
  </div>

</div>

<!-- SUCCESS OVERLAY -->
<div class="success-overlay" id="successOverlay">
  <div class="success-card">
    <div class="sc-emoji">⚡</div>
    <div class="sc-title">SUBMITTED!</div>
    <div class="sc-sub" id="successMsg">Speedtest kamu berhasil disubmit.<br>Terima kasih sudah berkontribusi!</div>
    <div class="sc-actions">
      <a href="{{ route('ngopi') }}" class="sc-btn primary">LIHAT SEMUA KAFE →</a>
      <button class="sc-btn secondary" onclick="closeSuccess()">Submit Lagi</button>
    </div>
  </div>
</div>

<script>
const recent = [
  {cafe:'Ruang Karya Co.',dl:120,ul:80,ping:3,by:'Ahmad B.',time:'9 menit lalu'},
  {cafe:'Kedai 97',dl:95,ul:65,ping:5,by:'Kevin A.',time:'23 menit lalu'},
  {cafe:'Noi Coffee',dl:87,ul:42,ping:8,by:'Sinta R.',time:'1 jam lalu'},
];

document.getElementById('recentList').innerHTML = recent.map(r =>
  '<div style="display:flex;align-items:center;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--brd)">'
  + '<div><div style="font-family:var(--fd);font-size:15px;letter-spacing:.3px">' + r.cafe + '</div>'
  + '<div style="font-family:var(--fm);font-size:10px;color:var(--tx3);margin-top:2px">↓' + r.dl + ' ↑' + r.ul + ' ping:' + r.ping + 'ms</div></div>'
  + '<div style="font-family:var(--fm);font-size:10px;color:var(--tx3);text-align:right">' + r.time + '</div>'
  + '</div>'
).join('');

function updateSlider() {
  const dl = +document.getElementById('dlRange').value;
  const ul = +document.getElementById('ulRange').value;
  const ping = +document.getElementById('pingRange').value;
  document.getElementById('dlVal').textContent = dl;
  document.getElementById('ulVal').textContent = ul;
  document.getElementById('pingVal').textContent = ping;
  document.getElementById('prevDl').textContent = dl;
  document.getElementById('prevUl').textContent = ul;
  document.getElementById('prevPing').textContent = ping;
  document.getElementById('dlManual').value = dl;
  document.getElementById('ulManual').value = ul;
  document.getElementById('pingManual').value = ping;
  updateScore(dl, ping);
}

function syncManual(type, v) {
  const val = Math.max(1, +v || 1);
  if (type==='dl') { document.getElementById('dlRange').value = Math.min(val,300); document.getElementById('dlVal').textContent=val; document.getElementById('prevDl').textContent=val; updateScore(val, +document.getElementById('pingRange').value); }
  if (type==='ul') { document.getElementById('ulRange').value = Math.min(val,150); document.getElementById('ulVal').textContent=val; document.getElementById('prevUl').textContent=val; }
  if (type==='ping') { document.getElementById('pingRange').value = Math.min(val,200); document.getElementById('pingVal').textContent=val; document.getElementById('prevPing').textContent=val; updateScore(+document.getElementById('dlRange').value, val); }
}

function updateScore(dl, ping) {
  const sp = Math.min(100,(dl/100)*100);
  const pg = Math.max(0,100-ping);
  const s = Math.round(sp*.6 + pg*.4);
  const el = document.getElementById('scorePreview');
  el.textContent = s;
  el.style.color = s >= 75 ? 'var(--a)' : s >= 50 ? 'var(--a4)' : 'var(--a2)';
}

function onCafeChange(v) {
  const fields = document.getElementById('newCafeFields');
  const toggle = document.getElementById('ncToggle');
  if (v === 'new') { fields.style.display = 'block'; toggle.style.display = 'none'; }
  else if (v) { fields.style.display = 'none'; toggle.style.display = 'none'; }
  else { toggle.style.display = 'none'; }
}

function toggleNewCafe() {
  const sw = document.getElementById('ncSwitch');
  const fields = document.getElementById('newCafeFields');
  sw.classList.toggle('on');
  fields.style.display = sw.classList.contains('on') ? 'block' : 'none';
}

function selectKondisi(el, val) {
  document.querySelectorAll('.kondisi-opt').forEach(o=>o.classList.remove('selected'));
  el.classList.add('selected');
}

function previewPhoto(input) {
  const file = input.files[0];
  if (!file) return;
  const reader = new FileReader();
  reader.onload = e => {
    const preview = document.getElementById('photoPreview');
    const placeholder = document.getElementById('photoPlaceholder');
    preview.src = e.target.result;
    preview.style.display = 'block';
    placeholder.style.display = 'none';
    document.getElementById('photoUpload').classList.add('has-file');
  };
  reader.readAsDataURL(file);
}

function submitTest() {
  const cafe = document.getElementById('cafeSelect').value;
  if (!cafe) { document.getElementById('cafeSelect').style.borderColor = 'var(--a2)'; return; }
  const dl = document.getElementById('dlRange').value;
  const cafeName = cafe === 'new'
    ? (document.getElementById('newCafeName').value || 'Kafe Baru')
    : document.getElementById('cafeSelect').options[document.getElementById('cafeSelect').selectedIndex].text.split(' — ')[0];
  document.getElementById('successMsg').innerHTML = 'Speedtest <strong style="color:var(--a)">' + dl + ' Mbps</strong> di <strong>' + cafeName + '</strong> berhasil disubmit.<br>Terima kasih sudah berkontribusi!';
  document.getElementById('successOverlay').classList.add('show');
}

function closeSuccess() {
  document.getElementById('successOverlay').classList.remove('show');
  document.getElementById('cafeSelect').value = '';
}

function toggleTheme() {
  const h=document.documentElement,b=document.getElementById('themeBtn');
  if(h.getAttribute('data-theme')==='dark'){h.setAttribute('data-theme','light');b.textContent='☀️';}
  else{h.setAttribute('data-theme','dark');b.textContent='🌙';}
}

updateSlider();
</script>
</body>
</html>
