<?php /* Amaterasu UI — Documentation · index.php · v15.0 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<meta name="theme-color" content="#05030c">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="description" content="Amaterasu UI — The most cinematic Roblox script UI library. Full API docs, 131 themes, real code examples.">
<title>Amaterasu UI · 天照大神</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&family=Cinzel:wght@400;600;700;900&family=DM+Sans:ital,opsz,wght@0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=JetBrains+Mono:wght@300;400;500&display=swap" rel="stylesheet">

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--  MUSIC CONFIG — drop your hosted MP3/OGG URL here             -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<script>
  const MUSIC_URL  = "Gabriela.mp3"; /* ← put your hosted audio file URL here */
  const MUSIC_TITLE  = "Gabriela";
  const MUSIC_ARTIST = "Katseye";
</script>

<style>
/* ── TOKENS ─────────────────────────────────────────────────────── */
:root {
  --ink:    #04020b;
  --ink1:   #08051a;
  --ink2:   #0e0a1f;
  --ink3:   #151028;
  --ink4:   #1c1535;
  --paper:  #f0ebe0;
  --paper2: #cfc4af;
  --paper3: #8a7d6e;
  --gold:   #e8a000;
  --gold2:  #ffc840;
  --gold3:  #ffe080;
  --ember:  #d42c14;
  --ember2: #ff4422;
  --ember3: #ff7755;
  --jade:   #1ab87c;
  --sky:    #2290ff;
  --f-kanji: 'Shippori Mincho', serif;
  --f-title: 'Cinzel', serif;
  --f-body:  'DM Sans', sans-serif;
  --f-mono:  'JetBrains Mono', monospace;
  --ease1: cubic-bezier(0.16,1,0.3,1);
  --ease2: cubic-bezier(0.34,1.56,0.64,1);
  --ease3: cubic-bezier(0.25,0.46,0.45,0.94);
  --nav-h: 68px;
  --safe-top: env(safe-area-inset-top,0px);
  --safe-bot: env(safe-area-inset-bottom,0px);
  --safe-l:   env(safe-area-inset-left,0px);
  --safe-r:   env(safe-area-inset-right,0px);
}

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;font-size:16px;-webkit-text-size-adjust:100%}
body{background:var(--ink);color:var(--paper);font-family:var(--f-body);overflow-x:hidden}
::selection{background:rgba(232,160,0,.22);color:var(--paper)}
::-webkit-scrollbar{width:3px}
::-webkit-scrollbar-track{background:var(--ink)}
::-webkit-scrollbar-thumb{background:linear-gradient(var(--ember),var(--gold));border-radius:2px}
a{color:inherit;text-decoration:none}

/* ── WELCOME SCREEN ──────────────────────────────────────────────── */
#welcome{
  position:fixed;inset:0;z-index:10000;
  background:var(--ink);
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  overflow:hidden;
  transition:opacity .9s var(--ease3), transform .9s var(--ease3);
}
#welcome.hiding{opacity:0;transform:scale(1.04);pointer-events:none}
#welcome.gone{display:none}

.wlc-particles{position:absolute;inset:0;pointer-events:none;z-index:0}

.wlc-radial{
  position:absolute;inset:0;pointer-events:none;
  background:radial-gradient(ellipse 60% 55% at 50% 50%,
    rgba(232,160,0,.14) 0%,
    rgba(212,44,20,.07) 35%,
    transparent 70%);
  animation:wlcPulse 5s ease-in-out infinite;
}
@keyframes wlcPulse{0%,100%{opacity:.7;transform:scale(1)}50%{opacity:1;transform:scale(1.06)}}

.wlc-lines{
  position:absolute;inset:0;pointer-events:none;
  background:
    repeating-linear-gradient(0deg,transparent,transparent 79px,rgba(232,160,0,.025) 80px),
    repeating-linear-gradient(90deg,transparent,transparent 79px,rgba(232,160,0,.018) 80px);
}

.wlc-content{position:relative;z-index:2;text-align:center;padding:20px}

.wlc-badge{
  font-family:var(--f-mono);font-size:9px;letter-spacing:.5em;
  color:rgba(232,160,0,.5);text-transform:uppercase;
  margin-bottom:28px;
  animation:fadeInUp .8s .2s var(--ease1) both;
}

.wlc-kanji-wrap{
  position:relative;margin-bottom:8px;
  animation:fadeInUp .9s .3s var(--ease1) both;
}
.wlc-kanji{
  font-family:var(--f-kanji);
  font-size:clamp(80px,20vw,180px);
  font-weight:800;line-height:1;
  background:linear-gradient(160deg,var(--gold3) 0%,var(--gold) 40%,var(--ember2) 80%,var(--ember) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  filter:drop-shadow(0 0 60px rgba(232,160,0,.35));
  display:inline-block;
  animation:kanjiShimmer 4s ease-in-out infinite;
}
@keyframes kanjiShimmer{
  0%,100%{filter:drop-shadow(0 0 40px rgba(232,160,0,.3))}
  50%{filter:drop-shadow(0 0 80px rgba(232,160,0,.6)) drop-shadow(0 0 120px rgba(212,44,20,.3))}
}

.wlc-title{
  font-family:var(--f-title);
  font-size:clamp(28px,6vw,58px);
  font-weight:900;letter-spacing:.12em;text-transform:uppercase;
  color:var(--paper);
  margin-bottom:6px;
  animation:fadeInUp .9s .5s var(--ease1) both;
}

.wlc-sub{
  font-family:var(--f-kanji);font-size:clamp(12px,2vw,16px);
  color:rgba(232,160,0,.55);letter-spacing:.4em;
  margin-bottom:52px;
  animation:fadeInUp .8s .65s var(--ease1) both;
}

.wlc-divider{
  width:1px;height:48px;
  background:linear-gradient(var(--gold),transparent);
  margin:0 auto 40px;
  animation:fadeIn .8s .8s var(--ease1) both;
}

.wlc-btn{
  position:relative;
  font-family:var(--f-title);font-size:11px;font-weight:700;
  letter-spacing:.4em;text-transform:uppercase;
  color:var(--ink);background:var(--gold);
  border:none;padding:18px 52px;border-radius:4px;
  cursor:pointer;overflow:hidden;
  box-shadow:0 0 60px rgba(232,160,0,.4),0 0 120px rgba(232,160,0,.15);
  animation:fadeInUp .8s .9s var(--ease1) both;
  transition:transform .3s var(--ease2),box-shadow .3s,letter-spacing .3s;
  -webkit-tap-highlight-color:transparent;
}
.wlc-btn::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(115deg,rgba(255,255,255,.35) 0%,transparent 60%);
  pointer-events:none;
}
.wlc-btn::after{
  content:'';position:absolute;
  top:50%;left:50%;width:0;height:0;
  background:rgba(255,255,255,.3);border-radius:50%;
  transform:translate(-50%,-50%);
  transition:width .5s ease,height .5s ease,opacity .5s ease;opacity:0;
}
.wlc-btn:hover{transform:translateY(-3px) scale(1.03);box-shadow:0 0 80px rgba(232,160,0,.65),0 0 160px rgba(232,160,0,.2);letter-spacing:.5em}
.wlc-btn:active::after{width:300px;height:300px;opacity:0}

.wlc-version{
  position:absolute;bottom:28px;left:50%;transform:translateX(-50%);
  font-family:var(--f-mono);font-size:9px;letter-spacing:.3em;
  color:rgba(232,160,0,.22);text-transform:uppercase;white-space:nowrap;
  animation:fadeIn 1s 1.5s var(--ease1) both;
}

/* ── CURSOR (desktop) ────────────────────────────────────────────── */
@media(pointer:fine){
  body{cursor:none}
  #cur,#cur2{position:fixed;top:0;left:0;border-radius:50%;pointer-events:none;z-index:9999;transform:translate(-50%,-50%);will-change:transform}
  #cur{width:6px;height:6px;background:var(--gold);transition:width .15s,height .15s,background .2s}
  #cur2{width:28px;height:28px;border:1px solid rgba(232,160,0,.35);transition:width .2s var(--ease1),height .2s var(--ease1),border-color .2s,border-radius .2s}
  body.hov #cur{width:14px;height:14px;background:var(--ember2)}
  body.hov #cur2{width:46px;height:46px;border-color:rgba(212,44,20,.5);border-radius:6px}
}
@media(pointer:coarse){#cur,#cur2{display:none}}

/* ── CANVAS BG ───────────────────────────────────────────────────── */
#bg{position:fixed;inset:0;z-index:0;pointer-events:none;opacity:.6}

/* ── FIREFLY CANVAS ──────────────────────────────────────────────── */
#fireflies{position:fixed;inset:0;z-index:1;pointer-events:none;opacity:.7}

/* ── GRAIN ───────────────────────────────────────────────────────── */
body::after{
  content:'';position:fixed;inset:0;z-index:4;pointer-events:none;
  background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='f'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='200' height='200' filter='url(%23f)' opacity='.02'/%3E%3C/svg%3E");
  mix-blend-mode:overlay;opacity:.65
}

/* ── LAYOUT ──────────────────────────────────────────────────────── */
.wrap{max-width:1140px;margin:0 auto;padding:0 clamp(16px,5vw,52px);padding-left:calc(clamp(16px,5vw,52px) + var(--safe-l));padding-right:calc(clamp(16px,5vw,52px) + var(--safe-r));position:relative;z-index:2}
section{position:relative;z-index:2}
.sep{height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.12),transparent);position:relative;z-index:2}

/* ── NAV ─────────────────────────────────────────────────────────── */
nav{position:fixed;top:0;left:0;right:0;z-index:500;transition:background .5s,backdrop-filter .5s;padding-top:var(--safe-top)}
nav.stuck{background:rgba(4,2,11,.92);backdrop-filter:blur(28px) saturate(1.8);-webkit-backdrop-filter:blur(28px) saturate(1.8);border-bottom:1px solid rgba(232,160,0,.07)}
.nav-in{display:flex;align-items:center;justify-content:space-between;height:var(--nav-h)}
.logo{display:flex;align-items:center;gap:14px;cursor:pointer;-webkit-tap-highlight-color:transparent;flex-shrink:0}
.logo-jp{font-family:var(--f-kanji);font-size:24px;font-weight:700;color:var(--gold);text-shadow:0 0 40px rgba(232,160,0,.7);transition:text-shadow .3s}
.logo:hover .logo-jp{text-shadow:0 0 60px rgba(232,160,0,1)}
.logo-en{font-family:var(--f-title);font-size:11px;font-weight:700;letter-spacing:.3em;color:var(--paper);text-transform:uppercase}
.logo-badge{font-family:var(--f-mono);font-size:8px;background:rgba(232,160,0,.1);color:var(--gold);border:1px solid rgba(232,160,0,.2);border-radius:3px;padding:2px 7px;letter-spacing:.18em}
.nav-links{display:flex;align-items:center;gap:32px}
.nav-a{font-size:11px;font-weight:300;color:var(--paper3);letter-spacing:.06em;cursor:pointer;transition:color .2s;-webkit-tap-highlight-color:transparent;position:relative}
.nav-a::after{content:'';position:absolute;bottom:-4px;left:0;right:0;height:1px;background:var(--gold);transform:scaleX(0);transition:transform .25s var(--ease2);transform-origin:left}
.nav-a:hover{color:var(--paper)}.nav-a:hover::after,.nav-a.active::after{transform:scaleX(1)}
.nav-a.active{color:var(--paper)}
.nav-cta{font-family:var(--f-title);font-size:10px;font-weight:700;letter-spacing:.2em;text-transform:uppercase;background:linear-gradient(135deg,var(--ember) 0%,#8a1008 100%);color:#fff;cursor:pointer;padding:10px 22px;border-radius:4px;border:none;box-shadow:0 0 30px rgba(212,44,20,.35);transition:transform .22s var(--ease2),box-shadow .22s;-webkit-tap-highlight-color:transparent}
.nav-cta:hover{transform:translateY(-2px) scale(1.03);box-shadow:0 0 50px rgba(212,44,20,.65)}

/* Hamburger */
.nav-hamburger{display:none;flex-direction:column;justify-content:center;align-items:center;gap:5px;width:44px;height:44px;background:none;border:none;cursor:pointer;-webkit-tap-highlight-color:transparent;border-radius:8px;flex-shrink:0}
.nav-hamburger span{display:block;width:22px;height:1.5px;background:var(--paper);border-radius:2px;transition:transform .3s var(--ease1),opacity .3s}
.nav-hamburger.open span:nth-child(1){transform:translateY(6.5px) rotate(45deg)}
.nav-hamburger.open span:nth-child(2){opacity:0;transform:scaleX(0)}
.nav-hamburger.open span:nth-child(3){transform:translateY(-6.5px) rotate(-45deg)}

/* Drawer */
.nav-drawer{display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:490;background:rgba(4,2,11,.97);backdrop-filter:blur(32px);-webkit-backdrop-filter:blur(32px);flex-direction:column;justify-content:center;align-items:center;gap:0;opacity:0;pointer-events:none;transition:opacity .3s var(--ease1)}
.nav-drawer.open{opacity:1;pointer-events:all}
.drawer-link{font-family:var(--f-title);font-size:clamp(20px,5.5vw,30px);font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--paper3);padding:14px 32px;text-align:center;transition:color .2s;-webkit-tap-highlight-color:transparent;display:block;width:100%}
.drawer-link:hover,.drawer-link:active{color:var(--gold)}
.drawer-sep{width:36px;height:1px;background:rgba(232,160,0,.15);margin:10px auto}
.drawer-cta{margin-top:28px;font-family:var(--f-title);font-size:13px;font-weight:700;letter-spacing:.22em;text-transform:uppercase;background:linear-gradient(135deg,var(--ember),#8a1008);color:#fff;padding:14px 36px;border-radius:4px;border:none;box-shadow:0 0 40px rgba(212,44,20,.4);-webkit-tap-highlight-color:transparent;display:inline-block;cursor:pointer}

@media(max-width:780px){
  .nav-links .nav-a,.nav-cta{display:none}
  .nav-hamburger{display:flex}
  .nav-drawer{display:flex}
}

/* ── STATS BAR ───────────────────────────────────────────────────── */
.stats-bar{
  display:flex;align-items:center;justify-content:center;gap:0;
  border-bottom:1px solid rgba(232,160,0,.06);
  background:rgba(232,160,0,.02);
  padding:0;overflow:hidden;
  position:relative;z-index:2;
  flex-wrap:wrap;
}
.stat-item{
  display:flex;align-items:center;gap:10px;
  padding:12px clamp(16px,3vw,36px);
  border-right:1px solid rgba(232,160,0,.06);
  flex-shrink:0;
}
.stat-item:last-child{border-right:none}
.stat-num{font-family:var(--f-title);font-size:clamp(15px,2.5vw,20px);font-weight:700;color:var(--gold);letter-spacing:.04em}
.stat-lbl{font-family:var(--f-mono);font-size:9px;letter-spacing:.2em;color:var(--paper3);text-transform:uppercase;white-space:nowrap}
@media(max-width:480px){.stat-item{padding:10px 16px}}

/* ── BTNS ────────────────────────────────────────────────────────── */
.btn{display:inline-flex;align-items:center;gap:10px;font-family:var(--f-title);font-size:clamp(9px,1.4vw,11px);font-weight:700;letter-spacing:.2em;text-transform:uppercase;padding:clamp(12px,2vw,15px) clamp(20px,3.5vw,32px);border-radius:5px;cursor:pointer;border:none;position:relative;overflow:hidden;transition:transform .25s var(--ease2),box-shadow .25s;-webkit-tap-highlight-color:transparent;white-space:nowrap}
.btn::before{content:'';position:absolute;inset:0;background:linear-gradient(115deg,rgba(255,255,255,.15) 0%,transparent 55%);pointer-events:none}
.btn-fire{background:linear-gradient(140deg,var(--ember) 0%,#6a0a08 100%);color:#fff;box-shadow:0 0 40px rgba(212,44,20,.3),0 10px 30px rgba(0,0,0,.5)}
.btn-fire:hover{transform:translateY(-3px);box-shadow:0 0 70px rgba(212,44,20,.65),0 18px 48px rgba(0,0,0,.6)}
.btn-ghost{background:transparent;color:var(--paper);border:1px solid rgba(232,160,0,.2)}
.btn-ghost:hover{transform:translateY(-3px);border-color:rgba(232,160,0,.55);box-shadow:0 0 32px rgba(232,160,0,.12)}

/* ── SECTION HEADINGS ────────────────────────────────────────────── */
.sh{margin-bottom:clamp(32px,5vw,56px)}
.sh-tag{display:inline-flex;align-items:center;gap:12px;font-family:var(--f-mono);font-size:9px;letter-spacing:.5em;color:var(--gold);text-transform:uppercase;margin-bottom:18px}
.sh-tag::before{content:'';display:inline-block;width:28px;height:1px;background:currentColor}
.sh-h{font-family:var(--f-title);font-size:clamp(26px,5vw,66px);font-weight:900;line-height:.93;letter-spacing:-.025em;color:var(--paper);margin-bottom:18px}
.sh-h em{font-style:normal;background:linear-gradient(120deg,var(--gold2),var(--gold),var(--ember2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.sh-p{font-size:clamp(13px,1.8vw,15.5px);font-weight:300;color:var(--paper3);line-height:1.85;max-width:500px}

/* ── HERO ─────────────────────────────────────────────────────────── */
.hero{min-height:100svh;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;padding:calc(var(--nav-h) + var(--safe-top) + 50px) clamp(16px,5vw,52px) clamp(60px,8vw,80px);overflow:hidden;position:relative}

.hero-sun{position:absolute;top:50%;left:50%;transform:translate(-50%,-58%);width:min(700px,95vw);height:min(700px,95vw);border-radius:50%;pointer-events:none;z-index:0;background:radial-gradient(circle,rgba(232,160,0,.12) 0%,rgba(212,44,20,.06) 35%,transparent 70%);animation:sunPulse 9s ease-in-out infinite}
@keyframes sunPulse{0%,100%{transform:translate(-50%,-58%) scale(1);opacity:.8}50%{transform:translate(-50%,-58%) scale(1.1);opacity:1}}

/* Ring decorations */
.hero-ring{position:absolute;top:50%;left:50%;border-radius:50%;border:1px solid rgba(232,160,0,.06);pointer-events:none;transform:translate(-50%,-50%);animation:ringPulse 6s ease-in-out infinite}
.hero-ring:nth-child(2){width:min(460px,70vw);height:min(460px,70vw);animation-delay:0s}
.hero-ring:nth-child(3){width:min(640px,88vw);height:min(640px,88vw);animation-delay:1.5s;border-color:rgba(212,44,20,.04)}
.hero-ring:nth-child(4){width:min(820px,110vw);height:min(820px,110vw);animation-delay:3s;border-color:rgba(232,160,0,.03)}
@keyframes ringPulse{0%,100%{opacity:.6;transform:translate(-50%,-50%) scale(1)}50%{opacity:1;transform:translate(-50%,-50%) scale(1.02)}}

.hero-bg-kanji{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;pointer-events:none;z-index:0;overflow:hidden}
.hero-bg-kanji span{font-family:var(--f-kanji);font-size:clamp(150px,38vw,640px);font-weight:800;line-height:1;user-select:none;background:linear-gradient(180deg,rgba(232,160,0,.048) 0%,rgba(212,44,20,.02) 55%,transparent 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:bgKanjiBreathe 16s ease-in-out infinite;filter:blur(.6px)}
@keyframes bgKanjiBreathe{0%,100%{transform:scale(1) translateY(0)}50%{transform:scale(1.02) translateY(-10px)}}

.hero-content{position:relative;z-index:2;max-width:740px;width:100%}
.hero-eyebrow{font-family:var(--f-mono);font-size:clamp(8px,1.4vw,10px);letter-spacing:.5em;color:rgba(232,160,0,.6);text-transform:uppercase;margin-bottom:24px;animation:fadeInUp .8s .2s var(--ease1) both}
.hero-torii-line{display:flex;align-items:center;justify-content:center;gap:18px;margin-bottom:18px;animation:fadeInUp .8s .35s var(--ease1) both}
.htl-bar{flex:1;max-width:100px;height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.45))}
.htl-bar.r{background:linear-gradient(90deg,rgba(232,160,0,.45),transparent)}
.htl-icon{color:var(--gold);font-size:22px;filter:drop-shadow(0 0 14px rgba(232,160,0,.9))}
.hero-h1{font-family:var(--f-title);font-size:clamp(44px,12vw,148px);font-weight:900;line-height:.87;letter-spacing:-.025em;animation:fadeInUp 1s .5s var(--ease1) both}
.h1-gradient{background:linear-gradient(150deg,#fff 0%,var(--paper) 25%,var(--gold2) 58%,var(--gold) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.hero-jp-sub{display:block;font-family:var(--f-kanji);font-size:clamp(11px,1.8vw,19px);font-weight:400;color:var(--gold);letter-spacing:.6em;margin-top:14px;text-shadow:0 0 50px rgba(232,160,0,.55);animation:fadeInUp .8s .7s var(--ease1) both}
.hero-desc{font-size:clamp(13px,1.8vw,16px);font-weight:300;color:var(--paper3);line-height:1.9;max-width:480px;margin:30px auto 0;animation:fadeInUp .8s .85s var(--ease1) both;padding:0 8px}
.hero-btns{display:flex;gap:14px;justify-content:center;flex-wrap:wrap;margin-top:46px;animation:fadeInUp .8s 1s var(--ease1) both}
.hero-scroll{position:absolute;bottom:calc(32px + var(--safe-bot));left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:8px;animation:fadeIn 1.2s 2s var(--ease1) both}
.hs-txt{font-family:var(--f-mono);font-size:8px;letter-spacing:.4em;color:rgba(232,160,0,.35);text-transform:uppercase}
.hs-line{width:1px;height:46px;background:linear-gradient(var(--gold),transparent);animation:scrollDrop 2.6s ease-in-out infinite}
@keyframes scrollDrop{0%,100%{opacity:.2;transform:scaleY(.4) translateY(-10px)}60%{opacity:.9;transform:scaleY(1) translateY(0)}}
@keyframes fadeInUp{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:translateY(0)}}
@keyframes fadeIn{from{opacity:0}to{opacity:1}}
@media(max-width:500px){.hero-scroll{display:none}}

/* ── SETUP ───────────────────────────────────────────────────────── */
.setup-sec{padding:clamp(60px,8vw,110px) 0 clamp(50px,6vw,80px)}
.setup-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(clamp(240px,28vw,340px),1fr));gap:16px;margin-top:40px}
.setup-step{background:var(--ink2);border:1px solid rgba(255,255,255,.04);border-radius:16px;padding:clamp(20px,3vw,28px);position:relative;overflow:hidden;transition:border-color .3s,background .3s,transform .3s var(--ease1)}
.setup-step:hover{background:var(--ink3);border-color:rgba(232,160,0,.14);transform:translateY(-4px)}
.setup-step::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--ember),var(--gold),transparent)}
.step-num{font-family:var(--f-title);font-size:clamp(42px,6vw,62px);font-weight:900;color:rgba(232,160,0,.08);line-height:1;margin-bottom:14px;letter-spacing:-.04em}
.step-title{font-family:var(--f-title);font-size:clamp(11px,1.6vw,13px);font-weight:700;letter-spacing:.12em;color:var(--paper);margin-bottom:9px;text-transform:uppercase}
.step-desc{font-size:clamp(12px,1.4vw,13px);font-weight:300;color:var(--paper3);line-height:1.75}
.step-code{background:rgba(0,0,0,.4);border-radius:8px;padding:10px 14px;margin-top:16px;font-family:var(--f-mono);font-size:clamp(9px,1.3vw,10.5px);color:var(--gold);overflow-x:auto;white-space:nowrap;-webkit-overflow-scrolling:touch;border:1px solid rgba(232,160,0,.08)}
.compat-row{display:flex;flex-wrap:wrap;gap:7px;margin-top:32px}
.compat-badge{font-family:var(--f-mono);font-size:9px;background:var(--ink2);border:1px solid rgba(255,255,255,.06);border-radius:5px;padding:5px 12px;color:var(--paper2);letter-spacing:.08em;display:flex;align-items:center;gap:6px}
.compat-badge .dot{width:6px;height:6px;border-radius:50%;background:var(--jade);flex-shrink:0;box-shadow:0 0 6px rgba(26,184,124,.8)}
.compat-badge .dot.partial{background:var(--gold);box-shadow:0 0 6px rgba(232,160,0,.8)}

/* ── TERMINAL ────────────────────────────────────────────────────── */
.terminal{background:var(--ink2);border:1px solid rgba(232,160,0,.1);border-radius:16px;overflow:hidden;position:relative}
.terminal::before{content:'';position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.3),transparent)}
.t-bar{display:flex;align-items:center;gap:8px;padding:12px 18px;background:rgba(232,160,0,.03);border-bottom:1px solid rgba(255,255,255,.04)}
.t-dot{width:11px;height:11px;border-radius:50%;flex-shrink:0}
.td-r{background:#ff5f57}.td-y{background:#febc2e}.td-g{background:#28c840}
.t-title{font-family:var(--f-mono);font-size:10px;color:var(--paper3);letter-spacing:.12em;margin-left:8px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;flex:1;min-width:0}
.t-body{padding:22px 22px;overflow-x:auto;-webkit-overflow-scrolling:touch}
.t-body::-webkit-scrollbar{height:2px}.t-body::-webkit-scrollbar-thumb{background:rgba(232,160,0,.2);border-radius:2px}
pre{font-family:var(--f-mono);font-size:clamp(10px,1.4vw,12.5px);line-height:1.9;white-space:pre;tab-size:4}
.kw{color:#ff6b9d}.fn{color:var(--gold2)}.str{color:#7ec8a0}.num{color:#82cfff}
.cmt{color:#3d3456;font-style:italic}.op{color:var(--paper3)}.hi{color:#e8d5ff}
.acc{color:var(--ember2)}.sec-label{color:#c792ea}

/* ── ARCH ─────────────────────────────────────────────────────────── */
.arch-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.arch-row{display:flex;align-items:stretch}
.arch-indent{width:clamp(18px,3vw,34px);flex-shrink:0;position:relative}
.arch-indent::before{content:'';position:absolute;left:calc(50% - .5px);top:0;bottom:0;width:1px;background:rgba(232,160,0,.15)}
.arch-indent::after{content:'';position:absolute;left:50%;top:50%;width:50%;height:1px;background:rgba(232,160,0,.15)}
.arch-node{flex:1;display:flex;align-items:flex-start;gap:12px;padding:clamp(10px,2vw,14px) clamp(12px,2.5vw,18px);margin:3px 0;border-radius:12px;background:var(--ink2);border:1px solid rgba(255,255,255,.04);transition:border-color .2s,background .2s,transform .2s var(--ease1);min-width:0}
.arch-node:hover{background:var(--ink3);border-color:rgba(232,160,0,.16);transform:translateX(3px)}
.arch-icon{font-size:clamp(14px,2.5vw,18px);flex-shrink:0;margin-top:2px}
.arch-content{flex:1;min-width:0}
.arch-header{display:flex;align-items:center;gap:8px;margin-bottom:5px;flex-wrap:wrap}
.arch-name{font-family:var(--f-title);font-size:clamp(10px,1.4vw,12px);font-weight:700;letter-spacing:.05em;color:var(--paper);word-break:break-all}
.arch-desc{font-size:clamp(11px,1.4vw,12px);font-weight:300;color:var(--paper3);line-height:1.6}
.arch-badge{font-family:var(--f-mono);font-size:8px;background:rgba(232,160,0,.09);color:var(--gold);border:1px solid rgba(232,160,0,.2);border-radius:4px;padding:2px 8px;white-space:nowrap;letter-spacing:.1em;flex-shrink:0}
.arch-badge.ember{background:rgba(212,44,20,.1);color:var(--ember2);border-color:rgba(212,44,20,.22)}
.arch-badge.jade{background:rgba(26,184,124,.09);color:var(--jade);border-color:rgba(26,184,124,.22)}
.arch-badge.sky{background:rgba(34,144,255,.09);color:var(--sky);border-color:rgba(34,144,255,.22)}

/* ── API REFERENCE ───────────────────────────────────────────────── */
.api-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.api-grid{display:flex;flex-direction:column;gap:10px}
.api-card{background:var(--ink2);border:1px solid rgba(255,255,255,.04);border-radius:16px;overflow:hidden;transition:border-color .25s,background .25s}
.api-card:hover{background:var(--ink3);border-color:rgba(232,160,0,.12)}
.api-card-head{display:flex;align-items:flex-start;justify-content:space-between;padding:clamp(14px,2.5vw,18px) clamp(14px,2.5vw,22px) clamp(10px,2vw,14px);gap:12px}
.api-sig{font-family:var(--f-mono);font-size:clamp(10px,1.4vw,12.5px);color:var(--paper);flex:1;min-width:0;word-break:break-word;line-height:1.65}
.api-sig .fn-name{color:var(--gold2)}.api-sig .param{color:#c792ea}.api-sig .ret{color:var(--jade)}
.api-type-pill{font-family:var(--f-mono);font-size:8px;background:rgba(232,160,0,.09);color:var(--gold);border:1px solid rgba(232,160,0,.2);border-radius:100px;padding:3px 10px;white-space:nowrap;flex-shrink:0;letter-spacing:.12em;margin-top:2px}
.api-type-pill.toggle{background:rgba(26,184,124,.09);color:var(--jade);border-color:rgba(26,184,124,.22)}
.api-type-pill.button{background:rgba(212,44,20,.09);color:var(--ember2);border-color:rgba(212,44,20,.22)}
.api-type-pill.win{background:rgba(34,144,255,.09);color:var(--sky);border-color:rgba(34,144,255,.22)}
.api-type-pill.tab{background:rgba(200,120,255,.09);color:#c87aff;border-color:rgba(200,120,255,.22)}
.api-type-pill.notify{background:rgba(255,199,0,.09);color:#ffc700;border-color:rgba(255,199,0,.22)}
.api-body{padding:0 clamp(14px,2.5vw,22px) clamp(16px,2.5vw,20px);border-top:1px solid rgba(255,255,255,.03)}
.api-desc{font-size:clamp(12px,1.4vw,13px);font-weight:300;color:var(--paper3);line-height:1.8;padding-top:14px;margin-bottom:12px}
.api-ret-row{display:flex;align-items:flex-start;gap:10px;margin-bottom:12px;flex-wrap:wrap}
.api-ret-label{font-family:var(--f-mono);font-size:8px;color:var(--paper3);letter-spacing:.18em;text-transform:uppercase;flex-shrink:0;padding-top:2px}
.api-ret-val{font-family:var(--f-mono);font-size:clamp(10px,1.3vw,11px);color:var(--jade);line-height:1.7;word-break:break-word}
.api-mini-code{background:rgba(0,0,0,.42);border-radius:9px;padding:13px 15px;margin-top:10px;overflow-x:auto;-webkit-overflow-scrolling:touch;border:1px solid rgba(255,255,255,.03)}
.api-mini-code pre{font-size:clamp(10px,1.3vw,11px);line-height:1.9}
.table-wrap{overflow-x:auto;-webkit-overflow-scrolling:touch;margin-top:10px;border-radius:7px}
.params-table{width:100%;border-collapse:collapse;min-width:360px}
.params-table th{font-family:var(--f-mono);font-size:8px;letter-spacing:.2em;text-transform:uppercase;color:var(--paper3);padding:7px 10px;text-align:left;border-bottom:1px solid rgba(255,255,255,.05);white-space:nowrap}
.params-table td{font-family:var(--f-mono);font-size:clamp(10px,1.2vw,11px);color:var(--paper3);padding:7px 10px;border-bottom:1px solid rgba(255,255,255,.025);vertical-align:top}
.params-table td:first-child{color:var(--paper);font-weight:500;white-space:nowrap}
.params-table td:nth-child(2){color:#c792ea;white-space:nowrap}
.params-table td:nth-child(3){font-size:clamp(9px,1.1vw,10.5px)}
code.ic{font-family:var(--f-mono);font-size:11px;color:var(--gold2)}
code.ic.jade{color:var(--jade)}code.ic.p{color:#c792ea}

/* DOC LAYOUT */
@media(min-width:1080px){
  .doc-layout{display:grid;grid-template-columns:210px 1fr;gap:44px;align-items:start}
  .toc{position:sticky;top:calc(var(--nav-h) + 20px);background:var(--ink2);border:1px solid rgba(255,255,255,.05);border-radius:14px;padding:20px;max-height:calc(100vh - var(--nav-h) - 40px);overflow-y:auto}
  .toc::-webkit-scrollbar{width:2px}.toc::-webkit-scrollbar-thumb{background:var(--gold);border-radius:2px}
  .toc h6{font-family:var(--f-mono);font-size:8px;letter-spacing:.32em;color:var(--paper3);text-transform:uppercase;margin-bottom:14px;padding-bottom:8px;border-bottom:1px solid rgba(255,255,255,.05)}
  .toc a{display:block;font-size:11px;font-weight:300;color:var(--paper3);padding:5px 0;border-left:2px solid transparent;padding-left:10px;transition:color .18s,border-color .18s;line-height:1.45;cursor:pointer}
  .toc a:hover{color:var(--gold);border-left-color:var(--gold)}
  .toc a.active{color:var(--paper);border-left-color:var(--ember)}
  .toc .toc-group{margin-bottom:12px}
  .toc .toc-group-label{font-family:var(--f-mono);font-size:8px;letter-spacing:.22em;color:rgba(232,160,0,.45);text-transform:uppercase;margin:10px 0 4px;padding-left:10px}
}
@media(max-width:1079px){.toc{display:none}}

/* ── THEMES ───────────────────────────────────────────────────────── */
.theme-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.theme-cats{display:grid;grid-template-columns:repeat(auto-fill,minmax(clamp(120px,18vw,185px),1fr));gap:8px;margin-top:36px}
.tc{background:var(--ink2);border:1px solid rgba(255,255,255,.04);border-radius:14px;padding:clamp(12px,2.5vw,20px) clamp(10px,2vw,16px);text-align:center;transition:border-color .3s,background .3s,transform .3s var(--ease2);-webkit-tap-highlight-color:transparent;cursor:default}
.tc:hover{background:var(--ink3);border-color:rgba(232,160,0,.2);transform:translateY(-4px)}
.tc-em{font-size:clamp(18px,3vw,24px);display:block;margin-bottom:9px}
.tc-name{font-family:var(--f-title);font-size:clamp(10px,1.4vw,11px);font-weight:700;letter-spacing:.06em;color:var(--paper);margin-bottom:5px}
.tc-count{font-family:var(--f-mono);font-size:clamp(8px,1.1vw,9px);color:var(--paper3);letter-spacing:.06em}
.theme-fns{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:8px;margin-top:14px}
.tfn{background:var(--ink2);border:1px solid rgba(255,255,255,.04);border-radius:11px;padding:14px 16px;border-left:2px solid var(--gold);transition:border-left-color .25s,background .25s}
.tfn:hover{border-left-color:var(--ember);background:var(--ink3)}
.tfn-name{font-family:var(--f-mono);font-size:clamp(10px,1.4vw,11.5px);color:var(--gold2);margin-bottom:5px;word-break:break-word}
.tfn-desc{font-size:clamp(11px,1.4vw,12px);font-weight:300;color:var(--paper3);line-height:1.65}

/* ── SYSTEMS ─────────────────────────────────────────────────────── */
.sys-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.sys-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(clamp(200px,26vw,300px),1fr));gap:8px}
.sy{background:var(--ink2);border-radius:14px;padding:clamp(16px,2.5vw,22px) clamp(14px,2vw,20px);border:1px solid rgba(255,255,255,.04);border-left:2px solid var(--gold);transition:background .25s,border-left-color .25s,transform .25s var(--ease1)}
.sy:hover{background:var(--ink3);border-left-color:var(--ember);transform:translateX(4px)}
.sy-icon{font-size:clamp(15px,2.2vw,18px);margin-bottom:10px}
.sy-name{font-family:var(--f-title);font-size:clamp(11px,1.4vw,12px);font-weight:700;letter-spacing:.06em;color:var(--paper);margin-bottom:6px}
.sy-desc{font-size:clamp(11px,1.3vw,12px);font-weight:300;color:var(--paper3);line-height:1.7}

/* ── CTA ─────────────────────────────────────────────────────────── */
.cta-sec{padding:clamp(90px,11vw,150px) 0 clamp(100px,13vw,170px);text-align:center;position:relative;overflow:hidden}
.cta-flare{position:absolute;inset:0;pointer-events:none;background:radial-gradient(ellipse 65% 55% at 50% 50%,rgba(212,44,20,.1) 0%,transparent 70%)}
.cta-wm{font-family:var(--f-kanji);font-size:clamp(60px,16vw,190px);font-weight:800;color:rgba(232,160,0,.035);line-height:1;display:block;margin-bottom:-20px;pointer-events:none;user-select:none;animation:bgKanjiBreathe 12s ease-in-out infinite}
.cta-h{font-family:var(--f-title);font-size:clamp(28px,6.5vw,82px);font-weight:900;line-height:.91;letter-spacing:-.025em;color:var(--paper);margin-bottom:18px;position:relative;z-index:1}
.cta-h span{background:linear-gradient(120deg,var(--gold2),var(--gold),var(--ember2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.cta-sub{font-size:clamp(13px,1.8vw,16px);font-weight:300;color:var(--paper3);margin-bottom:clamp(28px,4vw,52px);position:relative;z-index:1;padding:0 16px}
.cta-loadstr{display:inline-flex;align-items:center;gap:14px;cursor:pointer;background:var(--ink2);border:1px solid rgba(232,160,0,.18);padding:clamp(10px,2vw,14px) clamp(14px,3vw,24px);border-radius:11px;font-family:var(--f-mono);font-size:clamp(9px,1.3vw,11px);color:var(--gold);position:relative;z-index:1;margin-bottom:clamp(24px,4vw,44px);max-width:calc(100vw - 40px);overflow:hidden;transition:border-color .2s,background .2s;-webkit-tap-highlight-color:transparent}
.cta-loadstr:hover{border-color:rgba(232,160,0,.45);background:rgba(232,160,0,.05)}
.cls-code{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;min-width:0;flex:1}
.cls-icon{flex-shrink:0;color:var(--paper3);transition:color .2s;font-size:13px}
.cta-loadstr:hover .cls-icon{color:var(--gold)}
.cta-btns{display:flex;gap:14px;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}

/* ── FOOTER ──────────────────────────────────────────────────────── */
footer{background:var(--ink1);border-top:1px solid rgba(255,255,255,.03);padding:clamp(40px,6vw,60px) 0 calc(clamp(28px,3vw,40px) + var(--safe-bot));position:relative;z-index:2}
.footer-top{display:flex;justify-content:space-between;align-items:flex-start;gap:40px;flex-wrap:wrap;margin-bottom:clamp(32px,4vw,48px)}
.fb{max-width:268px}
.fb-logo{display:flex;align-items:center;gap:13px;margin-bottom:12px}
.fb-jp{font-family:var(--f-kanji);font-size:26px;font-weight:700;color:var(--gold);text-shadow:0 0 24px rgba(232,160,0,.5)}
.fb-en{font-family:var(--f-title);font-size:12px;font-weight:700;letter-spacing:.24em;color:var(--paper)}
.fb-desc{font-size:13px;font-weight:300;color:var(--paper3);line-height:1.75;opacity:.65}
.footer-cols{display:flex;gap:clamp(24px,5vw,54px);flex-wrap:wrap}
.fc h5{font-family:var(--f-title);font-size:9px;letter-spacing:.28em;color:var(--paper);text-transform:uppercase;margin-bottom:18px}
.fc a{display:block;font-size:12px;font-weight:300;color:var(--paper3);margin-bottom:10px;cursor:pointer;transition:color .2s;opacity:.65;-webkit-tap-highlight-color:transparent}
.fc a:hover{color:var(--gold);opacity:1}
.footer-bottom{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;padding-top:26px;border-top:1px solid rgba(255,255,255,.03)}
.footer-bottom span{font-family:var(--f-mono);font-size:9px;color:var(--paper3);opacity:.45}
.footer-bottom b{color:var(--gold);opacity:1}
@media(max-width:500px){.footer-top{flex-direction:column}.footer-bottom{flex-direction:column;text-align:center}}

/* ── MUSIC PLAYER ────────────────────────────────────────────────── */
#music-player{
  position:fixed;bottom:calc(28px + var(--safe-bot));right:calc(22px + var(--safe-r));
  z-index:600;
  display:flex;flex-direction:column;align-items:flex-end;gap:10px;
  transition:transform .4s var(--ease1),opacity .4s;
}
#music-player.hidden{transform:translateY(8px);opacity:0;pointer-events:none}

.mp-card{
  background:rgba(8,5,18,.92);
  backdrop-filter:blur(28px) saturate(1.8);
  -webkit-backdrop-filter:blur(28px) saturate(1.8);
  border:1px solid rgba(232,160,0,.18);
  border-radius:16px;
  padding:14px 16px 12px;
  width:clamp(220px,70vw,280px);
  box-shadow:0 24px 64px rgba(0,0,0,.7),0 0 0 1px rgba(232,160,0,.06) inset,0 0 60px rgba(232,160,0,.06);
  position:relative;overflow:hidden;
}
.mp-card::before{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,rgba(232,160,0,.5),transparent);
}
.mp-card::after{
  content:'';position:absolute;inset:0;pointer-events:none;
  background:radial-gradient(ellipse 80% 50% at 50% -10%,rgba(232,160,0,.06),transparent);
}

.mp-top{display:flex;align-items:center;gap:10px;margin-bottom:10px}
.mp-disc{
  width:38px;height:38px;border-radius:50%;flex-shrink:0;
  background:linear-gradient(135deg,var(--ember) 0%,var(--gold) 50%,var(--ember) 100%);
  background-size:200% 200%;
  display:flex;align-items:center;justify-content:center;
  font-size:16px;position:relative;overflow:hidden;
  box-shadow:0 0 18px rgba(232,160,0,.4);
  transition:animation .3s;
}
.mp-disc.spinning{animation:discSpin 3s linear infinite}
@keyframes discSpin{to{transform:rotate(360deg)}}
.mp-disc::after{
  content:'';position:absolute;
  width:10px;height:10px;border-radius:50%;
  background:var(--ink);
  box-shadow:inset 0 1px 2px rgba(0,0,0,.5);
}
.mp-info{flex:1;min-width:0}
.mp-title{font-family:var(--f-title);font-size:11px;font-weight:700;letter-spacing:.06em;color:var(--paper);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.mp-artist{font-family:var(--f-mono);font-size:9px;color:var(--gold);letter-spacing:.12em;margin-top:2px;opacity:.8}

/* Equalizer bars */
.mp-eq{display:flex;align-items:flex-end;gap:2px;height:16px;flex-shrink:0}
.mp-eq span{width:3px;background:var(--gold);border-radius:2px;opacity:.7;transition:height .1s}
.mp-eq.playing span:nth-child(1){animation:eq 0.8s ease-in-out infinite}
.mp-eq.playing span:nth-child(2){animation:eq 0.6s ease-in-out infinite .15s}
.mp-eq.playing span:nth-child(3){animation:eq 0.9s ease-in-out infinite .3s}
.mp-eq.playing span:nth-child(4){animation:eq 0.7s ease-in-out infinite .05s}
@keyframes eq{
  0%,100%{height:4px;opacity:.4}
  50%{height:14px;opacity:.9}
}

/* Progress bar */
.mp-progress{width:100%;height:2px;background:rgba(255,255,255,.06);border-radius:2px;margin-bottom:10px;cursor:pointer;position:relative;overflow:hidden}
.mp-progress-fill{height:100%;background:linear-gradient(90deg,var(--ember),var(--gold));border-radius:2px;width:0%;transition:width .3s linear}
.mp-progress:hover{height:4px;margin-bottom:8px}

/* Controls */
.mp-controls{display:flex;align-items:center;gap:6px;justify-content:space-between}
.mp-btn{width:32px;height:32px;border-radius:50%;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.06);cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:12px;transition:background .2s,transform .2s var(--ease2),border-color .2s;-webkit-tap-highlight-color:transparent;color:var(--paper);flex-shrink:0}
.mp-btn:hover{background:rgba(232,160,0,.12);border-color:rgba(232,160,0,.3);transform:scale(1.1)}
.mp-btn.play{width:36px;height:36px;background:var(--gold);border-color:var(--gold);color:var(--ink);font-size:13px;box-shadow:0 0 20px rgba(232,160,0,.4)}
.mp-btn.play:hover{background:var(--gold2);transform:scale(1.12);box-shadow:0 0 32px rgba(232,160,0,.65)}

/* Volume */
.mp-vol-wrap{display:flex;align-items:center;gap:6px;flex:1;max-width:80px}
.mp-vol-icon{font-size:10px;color:var(--paper3);flex-shrink:0;cursor:pointer}
.mp-vol{width:100%;height:2px;-webkit-appearance:none;appearance:none;background:rgba(255,255,255,.08);border-radius:2px;outline:none;cursor:pointer}
.mp-vol::-webkit-slider-thumb{-webkit-appearance:none;width:10px;height:10px;border-radius:50%;background:var(--gold);cursor:pointer;box-shadow:0 0 6px rgba(232,160,0,.5)}
.mp-time{font-family:var(--f-mono);font-size:8px;color:var(--paper3);letter-spacing:.05em;flex-shrink:0}

/* Mini toggle button */
.mp-toggle-btn{
  width:42px;height:42px;border-radius:50%;
  background:rgba(8,5,18,.88);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);
  border:1px solid rgba(232,160,0,.2);
  display:flex;align-items:center;justify-content:center;font-size:17px;
  cursor:pointer;transition:transform .3s var(--ease2),box-shadow .3s,border-color .3s;
  -webkit-tap-highlight-color:transparent;
  box-shadow:0 8px 32px rgba(0,0,0,.5);
  align-self:flex-end;
}
.mp-toggle-btn:hover{transform:scale(1.1);box-shadow:0 12px 40px rgba(0,0,0,.6),0 0 30px rgba(232,160,0,.2);border-color:rgba(232,160,0,.4)}
.mp-toggle-btn.pulse{animation:mpPulse 2.5s ease-in-out infinite}
@keyframes mpPulse{0%,100%{box-shadow:0 8px 32px rgba(0,0,0,.5),0 0 0 0 rgba(232,160,0,.3)}50%{box-shadow:0 8px 32px rgba(0,0,0,.5),0 0 0 10px rgba(232,160,0,.0)}}

.mp-main{transition:transform .4s var(--ease1),opacity .4s;transform-origin:bottom right}
.mp-main.collapsed{transform:scale(.8) translateY(8px);opacity:0;pointer-events:none;position:absolute;bottom:52px;right:0}

/* ── REVEAL ──────────────────────────────────────────────────────── */
.r{opacity:0;transform:translateY(22px);transition:opacity .75s var(--ease1),transform .75s var(--ease1)}
.r.in{opacity:1;transform:translateY(0)}
.r[data-d="1"]{transition-delay:.1s}.r[data-d="2"]{transition-delay:.2s}.r[data-d="3"]{transition-delay:.3s}
@media(prefers-reduced-motion:reduce){
  .r{opacity:1;transform:none;transition:none}
  *{animation-duration:.01ms!important;transition-duration:.01ms!important}
}

/* ── PRINT ───────────────────────────────────────────────────────── */
@media print{
  #bg,#fireflies,#cur,#cur2,nav,body::after,.hero-scroll,#welcome,#music-player{display:none!important}
  body{background:#fff;color:#000}.wrap{max-width:100%}
}
</style>
</head>
<body>

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--  WELCOME SCREEN                                                -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<div id="welcome" role="dialog" aria-label="Welcome to Amaterasu UI">
  <canvas class="wlc-particles" id="wlc-canvas"></canvas>
  <div class="wlc-radial"></div>
  <div class="wlc-lines"></div>
  <div class="wlc-content">
    <div class="wlc-badge">天照大神 · Amaterasu UI · v15.0</div>
    <div class="wlc-kanji-wrap">
      <span class="wlc-kanji">天照</span>
    </div>
    <div class="wlc-title">Amaterasu UI</div>
    <div class="wlc-sub">日の神 · 天照大神 · The Sun Goddess</div>
    <div class="wlc-divider"></div>
    <button class="wlc-btn" id="wlc-enter" aria-label="Enter documentation">ENTER</button>
  </div>
  <div class="wlc-version">Developed by Kyo · Documentation · v15.0</div>
</div>

<!-- Cursor -->
<div id="cur" aria-hidden="true"></div>
<div id="cur2" aria-hidden="true"></div>

<!-- Background canvases -->
<canvas id="bg" aria-hidden="true"></canvas>
<canvas id="fireflies" aria-hidden="true"></canvas>

<!-- ═══ MUSIC PLAYER ═══════════════════════════════════════════════ -->
<div id="music-player" class="hidden" aria-label="Music player">
  <div class="mp-main collapsed" id="mp-main">
    <div class="mp-card">
      <div class="mp-top">
        <div class="mp-disc" id="mp-disc">🎵</div>
        <div class="mp-info">
          <div class="mp-title" id="mp-title">Gabriela</div>
          <div class="mp-artist" id="mp-artist">Katseye</div>
        </div>
        <div class="mp-eq" id="mp-eq">
          <span style="height:4px"></span>
          <span style="height:4px"></span>
          <span style="height:4px"></span>
          <span style="height:4px"></span>
        </div>
      </div>
      <div class="mp-progress" id="mp-progress" role="progressbar" aria-label="Song progress">
        <div class="mp-progress-fill" id="mp-progress-fill"></div>
      </div>
      <div class="mp-controls">
        <button class="mp-btn play" id="mp-play" aria-label="Play/pause">▶</button>
        <div class="mp-vol-wrap">
          <span class="mp-vol-icon" id="mp-vol-icon">🔊</span>
          <input type="range" class="mp-vol" id="mp-vol" min="0" max="1" step="0.01" value="0.6" aria-label="Volume">
        </div>
        <span class="mp-time" id="mp-time">0:00</span>
      </div>
    </div>
  </div>
  <button class="mp-toggle-btn" id="mp-toggle" aria-label="Toggle music player">🎵</button>
</div>

<!-- ═══ MOBILE DRAWER ═══════════════════════════════════════════════ -->
<div class="nav-drawer" id="drawer" role="dialog" aria-label="Navigation">
  <div class="drawer-sep"></div>
  <a class="drawer-link" href="#quickstart" onclick="closeDrawer()">Quick Start</a>
  <a class="drawer-link" href="#setup" onclick="closeDrawer()">Setup Guide</a>
  <a class="drawer-link" href="#architecture" onclick="closeDrawer()">Architecture</a>
  <a class="drawer-link" href="#api" onclick="closeDrawer()">API Ref</a>
  <a class="drawer-link" href="#themes" onclick="closeDrawer()">Themes</a>
  <div class="drawer-sep"></div>
  <a href="#get" class="drawer-cta" onclick="closeDrawer()">Get Script ⛩️</a>
</div>

<!-- ═══ NAV ══════════════════════════════════════════════════════════ -->
<nav id="nav" role="navigation" aria-label="Main navigation">
  <div class="wrap nav-in">
    <a class="logo" href="#top" aria-label="Amaterasu UI home">
      <span class="logo-jp" aria-hidden="true">天</span>
      <span class="logo-en">Amaterasu UI</span>
      <span class="logo-badge" aria-hidden="true">v15.0</span>
    </a>
    <div class="nav-links">
      <a class="nav-a" href="#quickstart">Quick Start</a>
      <a class="nav-a" href="#setup">Setup</a>
      <a class="nav-a" href="#architecture">Architecture</a>
      <a class="nav-a" href="#api">API</a>
      <a class="nav-a" href="#themes">Themes</a>
      <a class="nav-cta" href="#get">Get Script</a>
    </div>
    <button class="nav-hamburger" id="hamburger" aria-label="Toggle navigation" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- ═══ STATS BAR ════════════════════════════════════════════════════ -->
<div class="stats-bar" style="margin-top:var(--nav-h);padding-top:var(--safe-top)">
  <div class="stat-item"><div class="stat-num">131</div><div class="stat-lbl">Themes</div></div>
  <div class="stat-item"><div class="stat-num">12</div><div class="stat-lbl">Components</div></div>
  <div class="stat-item"><div class="stat-num">8</div><div class="stat-lbl">Executors</div></div>
  <div class="stat-item"><div class="stat-num">v15</div><div class="stat-lbl">Latest</div></div>
</div>

<!-- ═══ HERO ═════════════════════════════════════════════════════════ -->
<section class="hero" id="top" aria-labelledby="hero-heading">
  <div class="hero-ring"></div><div class="hero-ring"></div><div class="hero-ring"></div>
  <div class="hero-bg-kanji" aria-hidden="true"><span>天照</span></div>
  <div class="hero-sun" aria-hidden="true"></div>
  <div class="hero-content">
    <p class="hero-eyebrow">Developer Documentation · v15.0 · by Kyo</p>
    <div class="hero-torii-line" aria-hidden="true">
      <span class="htl-bar"></span><span class="htl-icon">⛩️</span><span class="htl-bar r"></span>
    </div>
    <h1 class="hero-h1" id="hero-heading">
      <span class="h1-gradient">Build Your</span>
      <span class="hero-jp-sub">天照大神 · 日の神</span>
    </h1>
    <h1 class="hero-h1" style="animation-delay:.62s"><span class="h1-gradient">Own Menu.</span></h1>
    <p class="hero-desc">Everything you need to scaffold a full Roblox script UI using Amaterasu — windows, tabs, sections, and every component, with real code examples for each.</p>
    <div class="hero-btns">
      <a href="#quickstart" class="btn btn-fire">Quick Start →</a>
      <a href="#api" class="btn btn-ghost">API Reference</a>
    </div>
  </div>
  <div class="hero-scroll" aria-hidden="true"><span class="hs-txt">Scroll</span><div class="hs-line"></div></div>
</section>

<div class="sep"></div>

<!-- ═══ SETUP GUIDE ══════════════════════════════════════════════════ -->
<section class="setup-sec" id="setup">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">Setup Guide</div>
      <h2 class="sh-h">Get running in<br><em>3 steps.</em></h2>
      <p class="sh-p">Host on Render for free, paste one line into your executor, and start building. Works on PC, mobile, and every major executor.</p>
    </div>
    <div class="setup-grid">
      <div class="setup-step r">
        <div class="step-num">01</div>
        <div class="step-title">Deploy to Render</div>
        <div class="step-desc">Push your repo to GitHub with the Dockerfile included. Connect to <a href="https://render.com" style="color:var(--gold);text-decoration:underline" target="_blank" rel="noopener">Render.com</a> and deploy. The Docker image serves all files via Apache on the free tier.</div>
        <div class="step-code">render.yaml → Auto-detected ✓</div>
      </div>
      <div class="setup-step r" data-d="1">
        <div class="step-num">02</div>
        <div class="step-title">Confirm Your URL</div>
        <div class="step-desc">Once deployed, your URL is <strong style="color:var(--paper)">https://&lt;name&gt;.onrender.com</strong>. Verify both <code class="ic">/amaterasu_lib.lua</code> and <code class="ic">/load.lua</code> return content in the browser.</div>
        <div class="step-code">https://amaterasu-ui.onrender.com/load.lua</div>
      </div>
      <div class="setup-step r" data-d="2">
        <div class="step-num">03</div>
        <div class="step-title">Paste & Execute</div>
        <div class="step-desc">Open your executor, paste the one-liner below, and run. The loader fetches the library, compiles it, and launches your menu automatically.</div>
        <div class="step-code">loadstring(game:HttpGet("…/load.lua"))()</div>
      </div>
    </div>
    <div style="margin-top:36px" class="r" data-d="1">
      <div class="sh-tag" style="margin-bottom:14px">Executor Compatibility</div>
      <div class="compat-row">
        <div class="compat-badge"><span class="dot"></span>Delta v4</div>
        <div class="compat-badge"><span class="dot"></span>Synapse Z</div>
        <div class="compat-badge"><span class="dot"></span>Wave</div>
        <div class="compat-badge"><span class="dot"></span>Fluxus</div>
        <div class="compat-badge"><span class="dot"></span>Xeno</div>
        <div class="compat-badge"><span class="dot"></span>Hydrogen (mobile)</div>
        <div class="compat-badge"><span class="dot partial"></span>Solara (partial)</div>
        <div class="compat-badge"><span class="dot partial"></span>Arceus X</div>
      </div>
    </div>
  </div>
</section>

<div class="sep"></div>

<!-- ═══ QUICK START ══════════════════════════════════════════════════ -->
<section class="qs-sec" id="quickstart" style="padding:clamp(60px,8vw,110px) 0 clamp(50px,6vw,80px)">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">Quick Start</div>
      <h2 class="sh-h">Zero to <em>menu</em><br>in 30 lines.</h2>
      <p class="sh-p">Create a ScreenGui, call <code class="ic">Lib.Window</code>, and start adding elements. That's all it takes.</p>
    </div>
    <div class="terminal r" data-d="1">
      <div class="t-bar">
        <div class="t-dot td-r"></div><div class="t-dot td-y"></div><div class="t-dot td-g"></div>
        <span class="t-title">my_script.lua — Full Quick Start</span>
      </div>
      <div class="t-body">
        <pre><span class="cmt">-- ① Load Amaterasu UI</span>
<span class="fn">loadstring</span>(<span class="hi">game</span><span class="op">:</span><span class="fn">HttpGet</span>(<span class="str">"https://amaterasu-ui.onrender.com/load.lua"</span>))()\n
<span class="cmt">-- ② Build the ScreenGui</span>
<span class="kw">local</span> <span class="hi">sg</span> <span class="op">=</span> <span class="fn">Instance</span><span class="op">.</span><span class="fn">new</span>(<span class="str">"ScreenGui"</span>)
<span class="hi">sg</span><span class="op">.</span><span class="hi">Name</span>          <span class="op">=</span> <span class="str">"MyMenu"</span>
<span class="hi">sg</span><span class="op">.</span><span class="hi">IgnoreGuiInset</span> <span class="op">=</span> <span class="kw">true</span>
<span class="hi">sg</span><span class="op">.</span><span class="hi">ResetOnSpawn</span>   <span class="op">=</span> <span class="kw">false</span>
<span class="hi">sg</span><span class="op">.</span><span class="hi">Parent</span>        <span class="op">=</span> <span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"CoreGui"</span>)

<span class="cmt">-- ③ Create the window</span>
<span class="kw">local</span> <span class="hi">win</span> <span class="op">=</span> <span class="fn">Lib</span><span class="op">.</span><span class="fn">Window</span>(<span class="hi">sg</span><span class="op">,</span> <span class="str">"My Script"</span><span class="op">,</span> <span class="num">390</span><span class="op">,</span> <span class="num">320</span>)
<span class="kw">local</span> <span class="hi">LP</span>  <span class="op">=</span> <span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"Players"</span>)<span class="op">.</span><span class="hi">LocalPlayer</span>

<span class="cmt">-- ④ Tab → Column → Section</span>
<span class="kw">local</span> <span class="sec-label">mainTab</span> <span class="op">=</span> <span class="hi">win</span><span class="op">:</span><span class="fn">AddTab</span>(<span class="str">"⚔️ Main"</span>)
<span class="kw">local</span> <span class="hi">sec</span>     <span class="op">=</span> <span class="sec-label">mainTab</span><span class="op">:</span><span class="fn">AddColumn</span>()<span class="op">:</span><span class="fn">AddSection</span>(<span class="str">"Movement"</span>)

<span class="cmt">-- ⑤ Elements</span>
<span class="hi">sec</span><span class="op">:</span><span class="fn">AddToggle</span>(<span class="str">"Speed Hack"</span><span class="op">,</span> <span class="kw">false</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">v</span>)
    <span class="fn">Notify</span>(<span class="str">"Speed: "</span> <span class="op">..</span> (<span class="hi">v</span> <span class="kw">and</span> <span class="str">"ON"</span> <span class="kw">or</span> <span class="str">"OFF"</span>))
<span class="kw">end</span>)

<span class="hi">sec</span><span class="op">:</span><span class="fn">AddSlider</span>(<span class="str">"Walk Speed"</span><span class="op">,</span> <span class="num">1</span><span class="op">,</span> <span class="num">200</span><span class="op">,</span> <span class="num">16</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">v</span>)
    <span class="kw">local</span> <span class="hi">hum</span> <span class="op">=</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span> <span class="kw">and</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span><span class="op">:</span><span class="fn">FindFirstChild</span>(<span class="str">"Humanoid"</span>)
    <span class="kw">if</span> <span class="hi">hum</span> <span class="kw">then</span> <span class="hi">hum</span><span class="op">.</span><span class="hi">WalkSpeed</span> <span class="op">=</span> <span class="hi">v</span> <span class="kw">end</span>
<span class="kw">end</span>)

<span class="hi">sec</span><span class="op">:</span><span class="fn">AddButton</span>(<span class="str">"Teleport Up"</span><span class="op">,</span> <span class="kw">function</span>()
    <span class="kw">local</span> <span class="hi">hrp</span> <span class="op">=</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span> <span class="kw">and</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span><span class="op">:</span><span class="fn">FindFirstChild</span>(<span class="str">"HumanoidRootPart"</span>)
    <span class="kw">if</span> <span class="hi">hrp</span> <span class="kw">then</span> <span class="hi">hrp</span><span class="op">.</span><span class="hi">CFrame</span> <span class="op">=</span> <span class="hi">hrp</span><span class="op">.</span><span class="hi">CFrame</span> <span class="op">+</span> <span class="fn">Vector3</span><span class="op">.</span><span class="fn">new</span>(<span class="num">0</span><span class="op">,</span><span class="num">50</span><span class="op">,</span><span class="num">0</span>) <span class="kw">end</span>
<span class="kw">end</span>)

<span class="cmt">-- ⑥ Keybind toggle</span>
<span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"UserInputService"</span>)<span class="op">.</span><span class="hi">InputBegan</span><span class="op">:</span><span class="fn">Connect</span>(<span class="kw">function</span>(<span class="hi">i</span><span class="op">,</span><span class="hi">gp</span>)
    <span class="kw">if</span> <span class="kw">not</span> <span class="hi">gp</span> <span class="kw">and</span> <span class="hi">i</span><span class="op">.</span><span class="hi">KeyCode</span> <span class="op">==</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">RightControl</span> <span class="kw">then</span>
        <span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>()
    <span class="kw">end</span>
<span class="kw">end</span>)
<span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>() <span class="cmt">-- open on load</span></pre>
      </div>
    </div>
  </div>
</section>

<div class="sep"></div>

<!-- ═══ ARCHITECTURE ═════════════════════════════════════════════════ -->
<section class="arch-sec" id="architecture">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">Architecture</div>
      <h2 class="sh-h">The <em>hierarchy</em><br>of every menu.</h2>
      <p class="sh-p">Window → Tab → Column → Section → Element. Build top-down, every time.</p>
    </div>
    <div class="arch-tree r" data-d="1">
      <div class="arch-row"><div class="arch-node"><span class="arch-icon">🪟</span><div class="arch-content"><div class="arch-header"><div class="arch-name">Lib.Window(sg, title, w, h)</div><span class="arch-badge sky">win</span></div><div class="arch-desc">Root draggable panel. Frosted-glass body, spinning gradient border, macOS title orbs, bottom tab shrine-bar.</div></div></div></div>
      <div class="arch-row"><div class="arch-indent"></div><div class="arch-node"><span class="arch-icon">📑</span><div class="arch-content"><div class="arch-header"><div class="arch-name">win:AddTab(label)</div><span class="arch-badge tab">tab</span></div><div class="arch-desc">Adds a button to the shrine-bar and a full-width scrollable page. Bar rebalances automatically.</div></div></div></div>
      <div class="arch-row"><div class="arch-indent"></div><div class="arch-indent"></div><div class="arch-node"><span class="arch-icon">📐</span><div class="arch-content"><div class="arch-header"><div class="arch-name">tab:AddColumn()</div><span class="arch-badge">col</span></div><div class="arch-desc">Vertical scrollable column. Two calls = 50/50 split. One call = full-width.</div></div></div></div>
      <div class="arch-row"><div class="arch-indent"></div><div class="arch-indent"></div><div class="arch-indent"></div><div class="arch-node"><span class="arch-icon">🗂️</span><div class="arch-content"><div class="arch-header"><div class="arch-name">col:AddSection(title)</div><span class="arch-badge jade">sec</span></div><div class="arch-desc">Collapsible frosted-glass card with accent top-stripe. Pass "" for a headerless card.</div></div></div></div>
      <div class="arch-row"><div class="arch-indent"></div><div class="arch-indent"></div><div class="arch-indent"></div><div class="arch-indent"></div><div class="arch-node"><span class="arch-icon">⚙️</span><div class="arch-content"><div class="arch-header"><div class="arch-name">sec:AddToggle / AddButton / AddSlider / …</div><span class="arch-badge ember">element</span></div><div class="arch-desc">Individual UI components — each returns a control object to read/write programmatically.</div></div></div></div>
    </div>
  </div>
</section>

<div class="sep"></div>

<!-- ═══ API REFERENCE ════════════════════════════════════════════════ -->
<section class="api-sec" id="api">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">API Reference</div>
      <h2 class="sh-h">Every function.<br>Every <em>parameter.</em></h2>
    </div>
    <div class="doc-layout">
      <nav class="toc" aria-label="API Contents">
        <h6>Navigation</h6>
        <div class="toc-group"><div class="toc-group-label">Window</div><a href="#api-window">Lib.Window</a><a href="#api-addtab">AddTab</a><a href="#api-toggle-win">Toggle / SetTitle</a></div>
        <div class="toc-group"><div class="toc-group-label">Elements</div><a href="#api-toggle">AddToggle</a><a href="#api-button">AddButton</a><a href="#api-slider">AddSlider</a><a href="#api-cycle">AddCycle</a><a href="#api-dropdown">AddDropdown</a><a href="#api-colorpicker">AddColorPicker</a><a href="#api-keybind">AddKeybind</a><a href="#api-multitoggle">AddMultiToggle</a><a href="#api-input">AddInput</a><a href="#api-label">AddLabel</a></div>
        <div class="toc-group"><div class="toc-group-label">Global</div><a href="#api-notify">Notify</a><a href="#api-accent">setAccent</a></div>
      </nav>
      <div class="api-grid">
        <!-- Window -->
        <div class="api-card r" id="api-window"><div class="api-card-head"><div class="api-sig"><span class="fn-name">Lib.Window</span>(<span class="param">sg</span>, <span class="param">title</span>, <span class="param">w</span>, <span class="param">h</span>) → <span class="ret">win</span></div><span class="api-type-pill win">Window</span></div><div class="api-body"><div class="api-desc">Creates and returns the root window. Starts hidden off-screen, slides in on first <code class="ic">:Toggle()</code>.</div><div class="table-wrap"><table class="params-table"><tr><th>Param</th><th>Type</th><th>Description</th></tr><tr><td>sg</td><td>ScreenGui</td><td>Parent ScreenGui (parent to CoreGui first)</td></tr><tr><td>title</td><td>string</td><td>Text shown in the top bar pill</td></tr><tr><td>w</td><td>number?</td><td>Width in pixels (default 390)</td></tr><tr><td>h</td><td>number?</td><td>Height in pixels (default 320)</td></tr></table></div></div></div>
        <!-- AddTab -->
        <div class="api-card r" id="api-addtab"><div class="api-card-head"><div class="api-sig"><span class="fn-name">win:AddTab</span>(<span class="param">label</span>) → <span class="ret">tab</span></div><span class="api-type-pill tab">Tab</span></div><div class="api-body"><div class="api-desc">Appends a tab to the shrine-bar. Use emoji + text for polish (e.g. <code class="ic jade">"⚔️ Combat"</code>).</div><div class="api-ret-row" style="margin-top:10px"><span class="api-ret-label">Methods</span><span class="api-ret-val">tab:Select() — switch to this tab<br>tab:LazyBuild(fn) — defer build until first open</span></div></div></div>
        <!-- Toggle/SetTitle -->
        <div class="api-card r" id="api-toggle-win"><div class="api-card-head"><div class="api-sig"><span class="fn-name">win:Toggle</span>() · <span class="fn-name">win:SetTitle</span>(<span class="param">text</span>) · <span class="fn-name">win:GetTab</span>(<span class="param">label</span>)</div><span class="api-type-pill win">Window</span></div><div class="api-body"><div class="api-desc"><b style="color:var(--paper)">Toggle</b> — Spring-animates open/closed. <b style="color:var(--paper)">SetTitle</b> — Updates title bar at any time. <b style="color:var(--paper)">GetTab</b> — Returns tab by label (case-insensitive) to call <code class="ic jade">:Select()</code>.</div><div class="api-mini-code"><pre><span class="hi">UIS</span><span class="op">.</span><span class="hi">InputBegan</span><span class="op">:</span><span class="fn">Connect</span>(<span class="kw">function</span>(<span class="hi">i</span><span class="op">,</span><span class="hi">gp</span>)
    <span class="kw">if</span> <span class="kw">not</span> <span class="hi">gp</span> <span class="kw">and</span> <span class="hi">i</span><span class="op">.</span><span class="hi">KeyCode</span> <span class="op">==</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">RightControl</span> <span class="kw">then</span> <span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>() <span class="kw">end</span>
<span class="kw">end</span>)
<span class="hi">win</span><span class="op">:</span><span class="fn">GetTab</span>(<span class="str">"⚙️ Settings"</span>)<span class="op">:</span><span class="fn">Select</span>()</pre></div></div></div>
        <!-- AddToggle -->
        <div class="api-card r" id="api-toggle"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddToggle</span>(<span class="param">label</span>, <span class="param">default</span>, <span class="param">callback</span>) → <span class="ret">tog</span></div><span class="api-type-pill toggle">Toggle</span></div><div class="api-body"><div class="api-desc">Pill switch with bounce-spring knob and ember glow ring. Returns a control object.</div><div class="table-wrap"><table class="params-table"><tr><th>Param</th><th>Type</th><th>Description</th></tr><tr><td>label</td><td>string</td><td>Label shown to the left of the pill</td></tr><tr><td>default</td><td>bool</td><td>Initial state (true = on)</td></tr><tr><td>callback</td><td>fn(v:bool)?</td><td>Called with new state on every flip</td></tr></table></div><div class="api-ret-row" style="margin-top:10px"><span class="api-ret-label">Returns</span><span class="api-ret-val">tog:Set(v, silent?) · tog:Get() → bool</span></div><div class="api-mini-code"><pre><span class="kw">local</span> <span class="hi">god</span> <span class="op">=</span> <span class="hi">sec</span><span class="op">:</span><span class="fn">AddToggle</span>(<span class="str">"God Mode"</span><span class="op">,</span> <span class="kw">false</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">v</span>)
    <span class="fn">Notify</span>(<span class="str">"God Mode "</span> <span class="op">..</span> (<span class="hi">v</span> <span class="kw">and</span> <span class="str">"🟢 ON"</span> <span class="kw">or</span> <span class="str">"🔴 OFF"</span>))
<span class="kw">end</span>)
<span class="hi">god</span><span class="op">:</span><span class="fn">Set</span>(<span class="kw">true</span><span class="op">,</span> <span class="kw">true</span>) <span class="cmt">-- silent ON</span></pre></div></div></div>
        <!-- AddButton -->
        <div class="api-card r" id="api-button"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddButton</span>(<span class="param">label</span>, <span class="param">callback</span>) → <span class="ret">bObj</span></div><span class="api-type-pill button">Button</span></div><div class="api-body"><div class="api-desc">Full-width button with solar-sweep hover. Callback runs in <code class="ic jade">task.spawn</code> — won't freeze the UI.</div><div class="api-ret-row" style="margin-top:10px"><span class="api-ret-label">Returns</span><span class="api-ret-val">bObj:SetText(t) · bObj:SetEnabled(v)</span></div></div></div>
        <!-- AddSlider -->
        <div class="api-card r" id="api-slider"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddSlider</span>(<span class="param">label</span>, <span class="param">min</span>, <span class="param">max</span>, <span class="param">default</span>, <span class="param">cb</span>) → <span class="ret">slid</span></div><span class="api-type-pill">Slider</span></div><div class="api-body"><div class="api-desc">44px touch-target slider. Throttled callback during drag (50ms max), always fires on release.</div><div class="api-ret-row" style="margin-top:10px"><span class="api-ret-label">Returns</span><span class="api-ret-val">slid:Set(v) · slid:Get() → number</span></div></div></div>
        <!-- AddCycle -->
        <div class="api-card r" id="api-cycle"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddCycle</span>(<span class="param">label</span>, <span class="param">options</span>, <span class="param">defIdx</span>, <span class="param">cb</span>) → <span class="ret">cyc</span></div><span class="api-type-pill">Cycle</span></div><div class="api-body"><div class="api-desc">Compact ‹ VALUE › pill. Best for 2-4 fixed options. Callback receives selected index.</div><div class="api-mini-code"><pre><span class="hi">sec</span><span class="op">:</span><span class="fn">AddCycle</span>(<span class="str">"Aura"</span><span class="op">,</span><span class="op">{</span><span class="str">"Small"</span><span class="op">,</span><span class="str">"Medium"</span><span class="op">,</span><span class="str">"Large"</span><span class="op">},</span><span class="num">1</span><span class="op">,</span><span class="kw">function</span>(<span class="hi">i</span>) <span class="fn">Notify</span>(<span class="hi">i</span>) <span class="kw">end</span>)</pre></div></div></div>
        <!-- AddDropdown -->
        <div class="api-card r" id="api-dropdown"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddDropdown</span>(<span class="param">label</span>, <span class="param">options</span>, <span class="param">defIdx</span>, <span class="param">cb</span>) → <span class="ret">drop</span></div><span class="api-type-pill">Dropdown</span></div><div class="api-body"><div class="api-desc">Animated accordion list. Better than Cycle for 5+ options or long labels.</div><div class="api-ret-row" style="margin-top:10px"><span class="api-ret-label">Returns</span><span class="api-ret-val">drop:Get() → number · drop:Set(i)</span></div></div></div>
        <!-- AddColorPicker -->
        <div class="api-card r" id="api-colorpicker"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddColorPicker</span>(<span class="param">label</span>, <span class="param">default</span>, <span class="param">cb</span>) → <span class="ret">cp</span></div><span class="api-type-pill">ColorPicker</span></div><div class="api-body"><div class="api-desc">Full inline HSV picker with hue strip and hex input. Expands below its header. Callback fires with Color3 on every change.</div></div></div>
        <!-- AddKeybind -->
        <div class="api-card r" id="api-keybind"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddKeybind</span>(<span class="param">label</span>, <span class="param">key</span>, <span class="param">name</span>, <span class="param">cb</span>) → <span class="ret">kb</span></div><span class="api-type-pill">Keybind</span></div><div class="api-body"><div class="api-desc">Rebindable key chip. Click = live-capture mode. Provide <code class="ic p">name</code> to persist; <code class="ic p">nil</code> = standalone.</div></div></div>
        <!-- AddMultiToggle -->
        <div class="api-card r" id="api-multitoggle"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddMultiToggle</span>(<span class="param">options</span>, <span class="param">defaults</span>, <span class="param">cb</span>) → <span class="ret">mt</span></div><span class="api-type-pill toggle">MultiToggle</span></div><div class="api-body"><div class="api-desc">Row of chip toggles each independently on/off. Callback fires with full boolean array.</div><div class="api-ret-row" style="margin-top:10px"><span class="api-ret-label">Returns</span><span class="api-ret-val">mt:Set(idx, val, silent?) · mt:GetAll() → bool[]</span></div></div></div>
        <!-- AddInput -->
        <div class="api-card r" id="api-input"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddInput</span>(<span class="param">label</span>, <span class="param">placeholder</span>, <span class="param">cb</span>) → <span class="ret">inp</span></div><span class="api-type-pill">Input</span></div><div class="api-body"><div class="api-desc">Bordered text field with accent focus ring. Callback fires on Enter.</div><div class="api-ret-row" style="margin-top:10px"><span class="api-ret-label">Returns</span><span class="api-ret-val">inp:Get() → string · inp:Set(v)</span></div></div></div>
        <!-- AddLabel -->
        <div class="api-card r" id="api-label"><div class="api-card-head"><div class="api-sig"><span class="fn-name">sec:AddLabel</span>(<span class="param">text</span>, <span class="param">size?</span>) · <span class="fn-name">AddSeparator</span>() · <span class="fn-name">AddDivider</span>(<span class="param">text?</span>)</div><span class="api-type-pill">Layout</span></div><div class="api-body"><div class="api-desc"><b style="color:var(--paper)">AddLabel</b> — Static text row, RichText supported. <b style="color:var(--paper)">AddSeparator</b> — Thin rule. <b style="color:var(--paper)">AddDivider</b> — Labeled divider with accent lines.</div></div></div>
        <!-- Notify -->
        <div class="api-card r" id="api-notify"><div class="api-card-head"><div class="api-sig"><span class="fn-name">Notify</span>(<span class="param">text</span>, <span class="param">dur?</span>, <span class="param">priority?</span>)</div><span class="api-type-pill notify">Notify</span></div><div class="api-body"><div class="api-desc">Stacked toast from the right. Supports RichText. Stacks up to 4. Priority: <code class="ic">"low"</code> <code class="ic">"normal"</code> <code class="ic">"high"</code> <code class="ic">"critical"</code>.</div><div class="api-mini-code"><pre><span class="fn">Notify</span>(<span class="str">"✅ Done"</span>)
<span class="fn">Notify</span>(<span class="str">"⚠️ Error"</span><span class="op">,</span> <span class="num">6</span><span class="op">,</span> <span class="str">"high"</span>)</pre></div></div></div>
        <!-- setAccent -->
        <div class="api-card r" id="api-accent"><div class="api-card-head"><div class="api-sig"><span class="fn-name">setAccent</span>(<span class="param">c3</span>) · <span class="fn-name">startDual</span> · <span class="fn-name">startTriple</span> · <span class="fn-name">startRainbow</span> · <span class="fn-name">stopDynamic</span></div><span class="api-type-pill notify">Theme</span></div><div class="api-body"><div class="api-desc">Instantly propagates accent color to every element. Dynamic helpers animate through color phases using the master Heartbeat.</div><div class="api-mini-code"><pre><span class="fn">setAccent</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">0</span><span class="op">,</span><span class="num">220</span><span class="op">,</span><span class="num">180</span>))
<span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">185</span><span class="op">,</span><span class="num">20</span>)<span class="op">,</span> <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">220</span><span class="op">,</span><span class="num">35</span><span class="op">,</span><span class="num">65</span>))
<span class="fn">startRainbow</span>()
<span class="fn">stopDynamic</span>()</pre></div></div></div>
      </div>
    </div>
  </div>
</section>

<div class="sep"></div>

<!-- ═══ THEMES ════════════════════════════════════════════════════════ -->
<section class="theme-sec" id="themes">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">Theme System</div>
      <h2 class="sh-h"><em>131</em> divine themes.<br>7 mythology realms.</h2>
      <p class="sh-p">Dual-phase and triple-phase animated color pairs — one master Heartbeat loop, zero lag, instant live reload.</p>
    </div>
    <div class="theme-cats r" data-d="1">
      <div class="tc"><span class="tc-em">⛩️</span><div class="tc-name">Kami</div><div class="tc-count">18 themes</div></div>
      <div class="tc"><span class="tc-em">👺</span><div class="tc-name">Yokai</div><div class="tc-count">21 themes</div></div>
      <div class="tc"><span class="tc-em">🗡️</span><div class="tc-name">Katana</div><div class="tc-count">24 themes</div></div>
      <div class="tc"><span class="tc-em">💭</span><div class="tc-name">Mugen</div><div class="tc-count">20 themes</div></div>
      <div class="tc"><span class="tc-em">🎆</span><div class="tc-name">Hanabi</div><div class="tc-count">24 themes</div></div>
      <div class="tc"><span class="tc-em">♾️</span><div class="tc-name">Tensei</div><div class="tc-count">21 themes</div></div>
      <div class="tc"><span class="tc-em">🌈</span><div class="tc-name">Taiyo</div><div class="tc-count">3 themes</div></div>
    </div>
    <div style="margin-top:36px">
      <div class="sh-tag r" style="margin-bottom:16px">Engine Functions</div>
      <div class="theme-fns r" data-d="1">
        <div class="tfn"><div class="tfn-name">startDual(c1, c2)</div><div class="tfn-desc">Breathes between two Color3 values in a continuous ping-pong loop.</div></div>
        <div class="tfn"><div class="tfn-name">startTriple(c1, c2, c3)</div><div class="tfn-desc">Steps through three colors — ideal for Tensei reincarnation themes.</div></div>
        <div class="tfn"><div class="tfn-name">startRainbow()</div><div class="tfn-desc">Full HSV rotation completing the spectrum every ~7.7 seconds.</div></div>
        <div class="tfn"><div class="tfn-name">stopDynamic()</div><div class="tfn-desc">Freezes the engine at its current color until you call another start function.</div></div>
      </div>
    </div>
  </div>
</section>

<div class="sep"></div>

<!-- ═══ SYSTEMS ══════════════════════════════════════════════════════ -->
<section class="sys-sec" id="systems">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">Core Systems</div>
      <h2 class="sh-h">Infrastructure<br>you get <em>for free.</em></h2>
    </div>
    <div class="sys-grid">
      <div class="sy r"><div class="sy-icon">📣</div><div class="sy-name">Event Bus</div><div class="sy-desc"><code class="ic">Emit(name,…)</code> / <code class="ic">On(name,fn)</code> — zero-coupling pub/sub, dead listeners auto-pruned.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🔮</div><div class="sy-name">State Store</div><div class="sy-desc"><code class="ic">Store.set / get / watch</code> — reactive shared state. Components rebuild on change.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">🌀</div><div class="sy-name">Spring Tweens</div><div class="sy-desc">Physics-based <code class="ic">springTween</code> for scalar, UDim2, and Color3. Frame-rate independent.</div></div>
      <div class="sy r"><div class="sy-icon">⚡</div><div class="sy-name">Master Heartbeat</div><div class="sy-desc">One <code class="ic">RunService.Heartbeat</code> drives all gradients, FPS tracking, and the theme engine.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🔒</div><div class="sy-name">Session Guard</div><div class="sy-desc"><code class="ic">getgenv()</code> session key kills all loops on re-run. Zero memory leaks guaranteed.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">💾</div><div class="sy-name">JSON Storage</div><div class="sy-desc">Executor-agnostic <code class="ic">readfile/writefile</code> with in-memory cache. Data persists across sessions.</div></div>
      <div class="sy r"><div class="sy-icon">⌨️</div><div class="sy-name">Keybind System</div><div class="sy-desc"><code class="ic">Keybinds.register/setKey/startRebind</code> — live-capture rebinding with persistence.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🆔</div><div class="sy-name">HWID Chain</div><div class="sy-desc">8-function fallback for gethwid, syn.get_hwid, hwid, getfingerprint, and more.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">📡</div><div class="sy-name">HTTP Chain</div><div class="sy-desc">Priority POST: http_request → syn.request → request → HttpService:RequestAsync.</div></div>
    </div>
  </div>
</section>

<div class="sep"></div>

<!-- ═══ CTA ═══════════════════════════════════════════════════════════ -->
<section class="cta-sec" id="get">
  <div class="cta-flare" aria-hidden="true"></div>
  <div class="wrap">
    <span class="cta-wm r" aria-hidden="true">天</span>
    <h2 class="cta-h r">Start building<br>with <span>Amaterasu.</span></h2>
    <p class="cta-sub r">Grab the loadstring, open your executor, and start crafting.</p>
    <div class="cta-loadstr r" data-d="1" id="copybtn" role="button" tabindex="0" aria-label="Copy loadstring">
      <span style="color:var(--ember);flex-shrink:0" aria-hidden="true">›</span>
      <span class="cls-code" id="copycode">loadstring(game:HttpGet("https://amaterasu-ui.onrender.com/load.lua"))()</span>
      <span class="cls-icon" id="copyicon" aria-hidden="true">⎘</span>
    </div>
    <div class="cta-btns r" data-d="2">
      <a href="#" class="btn btn-fire">Join Discord</a>
      <a href="#" class="btn btn-ghost">View on GitHub</a>
    </div>
  </div>
</section>

<!-- ═══ FOOTER ════════════════════════════════════════════════════════ -->
<footer>
  <div class="wrap">
    <div class="footer-top">
      <div class="fb">
        <div class="fb-logo"><span class="fb-jp">天照</span><span class="fb-en">AMATERASU UI</span></div>
        <p class="fb-desc">Forged in the myth of the sun goddess. The most cinematic Roblox script UI ever made. By Kyo, v15.0.</p>
      </div>
      <div class="footer-cols">
        <div class="fc"><h5>Documentation</h5><a href="#quickstart">Quick Start</a><a href="#setup">Setup Guide</a><a href="#architecture">Architecture</a><a href="#api">API Reference</a><a href="#themes">Themes</a><a href="#systems">Core Systems</a></div>
        <div class="fc"><h5>Community</h5><a href="#">Discord</a><a href="#">GitHub</a><a href="#">Bug Reports</a></div>
        <div class="fc"><h5>Executors</h5><a href="#">Delta v4</a><a href="#">Hydrogen (mobile)</a><a href="#">Synapse Z</a><a href="#">Wave · Fluxus · Xeno</a></div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 <b>Amaterasu UI</b> · by Kyo · 天照大神</span>
      <span>v15.0 · Documentation</span>
    </div>
  </div>
</footer>

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--  JAVASCRIPT                                                     -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<script>
/* ─────────────────────────────────────────────────────────────────
   WELCOME SCREEN PARTICLES
───────────────────────────────────────────────────────────────── */
(function(){
  const c = document.getElementById('wlc-canvas');
  const g = c.getContext('2d');
  function resize(){ c.width = window.innerWidth; c.height = window.innerHeight; }
  resize(); window.addEventListener('resize', resize, {passive:true});

  const particles = Array.from({length:70}, () => ({
    x: Math.random() * c.width,
    y: Math.random() * c.height,
    r: Math.random() * 1.8 + .4,
    vx: (Math.random() - .5) * .25,
    vy: -Math.random() * .6 - .15,
    a: Math.random() * .7 + .1,
    h: Math.random() < .6 ? 42 : 10  // gold vs ember
  }));

  function drawParticles(){
    g.clearRect(0, 0, c.width, c.height);
    particles.forEach(p => {
      p.x += p.vx; p.y += p.vy;
      if(p.y < -10) { p.y = c.height + 10; p.x = Math.random() * c.width; }
      if(p.x < -10) p.x = c.width + 10;
      if(p.x > c.width + 10) p.x = -10;
      const grad = g.createRadialGradient(p.x, p.y, 0, p.x, p.y, p.r * 3);
      grad.addColorStop(0, `hsla(${p.h},90%,65%,${p.a})`);
      grad.addColorStop(1, `hsla(${p.h},90%,65%,0)`);
      g.beginPath();
      g.arc(p.x, p.y, p.r * 3, 0, Math.PI * 2);
      g.fillStyle = grad;
      g.fill();
    });
    if(document.getElementById('welcome').style.display !== 'none')
      requestAnimationFrame(drawParticles);
  }
  drawParticles();
})();

/* ─────────────────────────────────────────────────────────────────
   WELCOME ENTER BUTTON
───────────────────────────────────────────────────────────────── */
document.getElementById('wlc-enter').addEventListener('click', function(){
  const w = document.getElementById('welcome');
  w.classList.add('hiding');
  // Show music player after welcome
  setTimeout(() => {
    w.classList.add('gone');
    document.getElementById('music-player').classList.remove('hidden');
  }, 950);
});

/* ─────────────────────────────────────────────────────────────────
   CURSOR (desktop)
───────────────────────────────────────────────────────────────── */
if(window.matchMedia('(pointer:fine)').matches){
  const cur = document.getElementById('cur'), cur2 = document.getElementById('cur2');
  let cx=0,cy=0,cx2=0,cy2=0;
  document.addEventListener('mousemove', e => { cx=e.clientX; cy=e.clientY; });
  (function loop(){
    cx2 += (cx - cx2) * .16; cy2 += (cy - cy2) * .16;
    cur.style.transform  = `translate(${cx}px,${cy}px) translate(-50%,-50%)`;
    cur2.style.transform = `translate(${cx2}px,${cy2}px) translate(-50%,-50%)`;
    requestAnimationFrame(loop);
  })();
  document.querySelectorAll('a,button,.api-card,.tc,.sy,.arch-node,.tfn,.setup-step').forEach(el => {
    el.addEventListener('mouseenter', () => document.body.classList.add('hov'));
    el.addEventListener('mouseleave', () => document.body.classList.remove('hov'));
  });
}

/* ─────────────────────────────────────────────────────────────────
   NAV STUCK + ACTIVE LINKS
───────────────────────────────────────────────────────────────── */
const nav = document.getElementById('nav');
const navLinks = document.querySelectorAll('.nav-a');
const sections = ['setup','quickstart','architecture','api','themes','systems','get'];

window.addEventListener('scroll', () => {
  nav.classList.toggle('stuck', window.scrollY > 30);
  let current = '';
  sections.forEach(id => {
    const el = document.getElementById(id);
    if(el && el.getBoundingClientRect().top < 120) current = id;
  });
  navLinks.forEach(a => {
    const href = a.getAttribute('href').slice(1);
    a.classList.toggle('active', href === current);
  });
}, {passive:true});

/* ─────────────────────────────────────────────────────────────────
   HAMBURGER / DRAWER
───────────────────────────────────────────────────────────────── */
const hamburger = document.getElementById('hamburger');
const drawer = document.getElementById('drawer');
let drawerOpen = false;

function openDrawer()  { drawerOpen=true;  hamburger.classList.add('open');    drawer.classList.add('open');    hamburger.setAttribute('aria-expanded','true');  document.body.style.overflow='hidden'; }
function closeDrawer() { drawerOpen=false; hamburger.classList.remove('open'); drawer.classList.remove('open'); hamburger.setAttribute('aria-expanded','false'); document.body.style.overflow=''; }
hamburger.addEventListener('click', () => drawerOpen ? closeDrawer() : openDrawer());
drawer.addEventListener('click', e => { if(e.target===drawer) closeDrawer(); });
document.addEventListener('keydown', e => { if(e.key==='Escape') { if(drawerOpen) closeDrawer(); } });

/* ─────────────────────────────────────────────────────────────────
   BACKGROUND ORBS
───────────────────────────────────────────────────────────────── */
(function(){
  const c = document.getElementById('bg');
  const g = c.getContext('2d');
  function resize(){ c.width=window.innerWidth; c.height=window.innerHeight; }
  resize();
  let rt; window.addEventListener('resize', () => { clearTimeout(rt); rt=setTimeout(resize,100); }, {passive:true});
  const W=()=>c.width, H=()=>c.height;
  const orbs = [
    {x:.18,y:.28,rx:.52,ry:.40,h:32,s:90,l:17,vx:.00009,vy:.00007,rot:.001},
    {x:.78,y:.18,rx:.42,ry:.46,h:348,s:84,l:13,vx:-.00007,vy:.00009,rot:-.0008},
    {x:.42,y:.72,rx:.48,ry:.36,h:268,s:78,l:11,vx:.00005,vy:-.00008,rot:.0011},
    {x:.82,y:.58,rx:.36,ry:.42,h:20,s:86,l:15,vx:-.00008,vy:.00010,rot:-.0009},
  ];
  let t=0;
  function draw(){
    g.clearRect(0,0,W(),H()); t+=.35;
    orbs.forEach(o => {
      o.x=((o.x+o.vx*Math.sin(t*.01+o.h*.01)+2)%2)-.5;
      o.y=((o.y+o.vy*Math.cos(t*.012+o.s*.01)+2)%2)-.5;
      o.rot+=.0001;
      const cx=o.x*W(),cy=o.y*H(),sc=Math.min(W(),H());
      const p=.93+.07*Math.sin(t*.018+o.h*.11);
      const gr=g.createRadialGradient(cx,cy,0,cx,cy,o.rx*sc*p);
      gr.addColorStop(0,`hsla(${o.h},${o.s}%,${o.l}%,.36)`);
      gr.addColorStop(.5,`hsla(${o.h},${o.s}%,${o.l*.4}%,.09)`);
      gr.addColorStop(1,`hsla(${o.h},${o.s}%,${o.l}%,0)`);
      g.save();g.translate(cx,cy);g.rotate(o.rot*t);g.scale(1,o.ry/o.rx);
      g.beginPath();g.arc(0,0,o.rx*sc*p,0,Math.PI*2);g.fillStyle=gr;g.fill();g.restore();
    });
    requestAnimationFrame(draw);
  }
  draw();
})();

/* ─────────────────────────────────────────────────────────────────
   FIREFLIES
───────────────────────────────────────────────────────────────── */
(function(){
  const c = document.getElementById('fireflies');
  const g = c.getContext('2d');
  function resize(){ c.width=window.innerWidth; c.height=window.innerHeight; }
  resize();
  let rt; window.addEventListener('resize', () => { clearTimeout(rt); rt=setTimeout(resize,80); }, {passive:true});
  const count = Math.min(40, Math.floor(window.innerWidth / 30));
  const flies = Array.from({length:count}, () => ({
    x: Math.random() * c.width,
    y: Math.random() * c.height,
    r: Math.random() * 1.2 + .3,
    vx: (Math.random()-.5)*.4,
    vy: (Math.random()-.5)*.4,
    phase: Math.random()*Math.PI*2,
    speed: Math.random()*.02+.008
  }));
  let t=0;
  function draw(){
    g.clearRect(0,0,c.width,c.height); t++;
    flies.forEach(f => {
      f.x += f.vx + Math.sin(t*f.speed+f.phase)*.3;
      f.y += f.vy + Math.cos(t*f.speed*1.3+f.phase)*.25;
      if(f.x<-20)f.x=c.width+20; if(f.x>c.width+20)f.x=-20;
      if(f.y<-20)f.y=c.height+20; if(f.y>c.height+20)f.y=-20;
      const blink = .4 + .6*Math.sin(t*f.speed*3+f.phase);
      const gr=g.createRadialGradient(f.x,f.y,0,f.x,f.y,f.r*6);
      gr.addColorStop(0,`rgba(255,200,40,${blink*.65})`);
      gr.addColorStop(.4,`rgba(255,140,20,${blink*.25})`);
      gr.addColorStop(1,'rgba(255,100,0,0)');
      g.beginPath();g.arc(f.x,f.y,f.r*6,0,Math.PI*2);g.fillStyle=gr;g.fill();
      g.beginPath();g.arc(f.x,f.y,f.r,0,Math.PI*2);
      g.fillStyle=`rgba(255,220,80,${blink*.9})`;g.fill();
    });
    requestAnimationFrame(draw);
  }
  draw();
})();

/* ─────────────────────────────────────────────────────────────────
   SCROLL REVEAL
───────────────────────────────────────────────────────────────── */
const revObs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('in'); });
}, {threshold:.06, rootMargin:'0px 0px -36px 0px'});
document.querySelectorAll('.r').forEach(el => revObs.observe(el));

/* ─────────────────────────────────────────────────────────────────
   COPY LOADSTRING
───────────────────────────────────────────────────────────────── */
const copybtn = document.getElementById('copybtn');
const copyicon = document.getElementById('copyicon');
function doCopy(){
  const text = document.getElementById('copycode').textContent.trim();
  if(navigator.clipboard){ navigator.clipboard.writeText(text).catch(()=>{}); }
  else {
    const ta=document.createElement('textarea');ta.value=text;ta.style.cssText='position:fixed;opacity:0';
    document.body.appendChild(ta);ta.select();try{document.execCommand('copy')}catch(e){}document.body.removeChild(ta);
  }
  copyicon.textContent='✓'; copyicon.style.color='#4ade80';
  setTimeout(() => { copyicon.textContent='⎘'; copyicon.style.color=''; }, 2400);
}
copybtn.addEventListener('click', doCopy);
copybtn.addEventListener('keydown', e => { if(e.key==='Enter'||e.key===' ') doCopy(); });

/* ─────────────────────────────────────────────────────────────────
   TOC HIGHLIGHT
───────────────────────────────────────────────────────────────── */
const tocLinks = document.querySelectorAll('.toc a');
const tocSecs = [];
tocLinks.forEach(a => {
  const el = document.getElementById(a.getAttribute('href').slice(1));
  if(el) tocSecs.push({el, a});
});
window.addEventListener('scroll', () => {
  let cur = '';
  tocSecs.forEach(({el,a}) => { if(el.getBoundingClientRect().top < 150) cur = a.getAttribute('href'); });
  tocLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href')===cur));
}, {passive:true});

/* ─────────────────────────────────────────────────────────────────
   MUSIC PLAYER
───────────────────────────────────────────────────────────────── */
(function(){
  const audio = new Audio();
  audio.src   = MUSIC_URL;
  audio.loop  = true;
  audio.volume = 0.6;
  audio.preload = 'metadata';

  const disc     = document.getElementById('mp-disc');
  const eq       = document.getElementById('mp-eq');
  const playBtn  = document.getElementById('mp-play');
  const progress = document.getElementById('mp-progress');
  const fill     = document.getElementById('mp-progress-fill');
  const volSlider= document.getElementById('mp-vol');
  const volIcon  = document.getElementById('mp-vol-icon');
  const timeEl   = document.getElementById('mp-time');
  const mpMain   = document.getElementById('mp-main');
  const mpToggle = document.getElementById('mp-toggle');
  const mpTitle  = document.getElementById('mp-title');
  const mpArtist = document.getElementById('mp-artist');

  mpTitle.textContent  = MUSIC_TITLE;
  mpArtist.textContent = MUSIC_ARTIST;

  let playing = false;
  let expanded = false;

  function formatTime(s){
    const m = Math.floor(s/60);
    const sec = Math.floor(s%60);
    return m+':'+(sec<10?'0':'')+sec;
  }

  function setPlaying(v){
    playing = v;
    playBtn.textContent = v ? '⏸' : '▶';
    disc.classList.toggle('spinning', v);
    eq.classList.toggle('playing', v);
    mpToggle.classList.toggle('pulse', v);
    if(v){ audio.play().catch(()=>{}); }
    else { audio.pause(); }
  }

  playBtn.addEventListener('click', () => setPlaying(!playing));

  // Progress bar
  audio.addEventListener('timeupdate', () => {
    if(!audio.duration) return;
    const pct = (audio.currentTime / audio.duration) * 100;
    fill.style.width = pct + '%';
    timeEl.textContent = formatTime(audio.currentTime);
  });

  progress.addEventListener('click', e => {
    const rect = progress.getBoundingClientRect();
    const pct = (e.clientX - rect.left) / rect.width;
    audio.currentTime = pct * audio.duration;
  });

  // Volume
  volSlider.addEventListener('input', () => {
    audio.volume = parseFloat(volSlider.value);
    volIcon.textContent = audio.volume === 0 ? '🔇' : audio.volume < .4 ? '🔉' : '🔊';
  });
  volIcon.addEventListener('click', () => {
    if(audio.volume > 0){ volSlider._prev = audio.volume; audio.volume=0; volSlider.value=0; volIcon.textContent='🔇'; }
    else { audio.volume = volSlider._prev||.6; volSlider.value=audio.volume; volIcon.textContent='🔊'; }
  });

  // Toggle expand/collapse
  function toggleExpand(){
    expanded = !expanded;
    mpMain.classList.toggle('collapsed', !expanded);
    mpToggle.style.transform = expanded ? 'rotate(0deg)' : '';
  }
  mpToggle.addEventListener('click', () => {
    if(!expanded){
      toggleExpand();
      // Auto-play on first open
      if(!playing) setPlaying(true);
    } else {
      toggleExpand();
    }
  });

  // Keyboard accessibility
  document.addEventListener('keydown', e => {
    // Space bar to toggle play when player is visible
    if(e.code==='Space' && e.target.tagName!=='INPUT' && e.target.tagName!=='BUTTON' && expanded){
      e.preventDefault();
      setPlaying(!playing);
    }
  });
})();
</script>
</body>
</html>
