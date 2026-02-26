<?php /* Amaterasu UI — Documentation · index.php · v15.0 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<meta name="theme-color" content="#05030c">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="description" content="Amaterasu UI — The most cinematic Roblox script UI library. Full API documentation, 131 themes, and real code examples.">
<title>Amaterasu UI — Documentation · 天照大神</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&family=Cinzel:wght@400;600;700;900&family=DM+Sans:ital,opsz,wght@0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=JetBrains+Mono:wght@300;400;500&display=swap" rel="stylesheet">
<style>
/* ── TOKENS ─────────────────────────────────────────────────────── */
:root {
  --ink:    #05030c;
  --ink1:   #0a071a;
  --ink2:   #100d22;
  --ink3:   #17122e;
  --paper:  #ede8df;
  --paper2: #c9bfac;
  --paper3: #8a7d6e;
  --gold:   #e8a000;
  --gold2:  #ffc840;
  --gold3:  #ffe080;
  --ember:  #d42c14;
  --ember2: #ff4422;
  --jade:   #1ab87c;
  --sky:    #2290ff;
  --f-kanji:'Shippori Mincho', serif;
  --f-title:'Cinzel', serif;
  --f-body: 'DM Sans', sans-serif;
  --f-mono: 'JetBrains Mono', monospace;
  --ease1:  cubic-bezier(0.16,1,0.3,1);
  --ease2:  cubic-bezier(0.34,1.56,0.64,1);
  --nav-h:  68px;
  --safe-top: env(safe-area-inset-top, 0px);
  --safe-bot: env(safe-area-inset-bottom, 0px);
  --safe-l:   env(safe-area-inset-left, 0px);
  --safe-r:   env(safe-area-inset-right, 0px);
}

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;font-size:16px;-webkit-text-size-adjust:100%}
body{background:var(--ink);color:var(--paper);font-family:var(--f-body);overflow-x:hidden}
::selection{background:rgba(232,160,0,.22);color:var(--paper)}
::-webkit-scrollbar{width:3px}
::-webkit-scrollbar-track{background:var(--ink)}
::-webkit-scrollbar-thumb{background:linear-gradient(var(--ember),var(--gold));border-radius:2px}
a{color:inherit;text-decoration:none}
img{max-width:100%;height:auto}

/* ── CUSTOM CURSOR (desktop only) ────────────────────────────────── */
@media (pointer: fine) {
  body{cursor:none}
  #cur,#cur2{position:fixed;top:0;left:0;border-radius:50%;pointer-events:none;z-index:9999;transform:translate(-50%,-50%);will-change:transform}
  #cur{width:7px;height:7px;background:var(--gold);transition:width .18s,height .18s,background .2s,opacity .2s}
  #cur2{width:30px;height:30px;border:1px solid rgba(232,160,0,.4);transition:width .22s var(--ease1),height .22s var(--ease1),border-color .2s}
  body.hov #cur{width:16px;height:16px;background:var(--ember2)}
  body.hov #cur2{width:50px;height:50px;border-color:rgba(212,44,20,.45)}
}
@media (pointer: coarse) {
  #cur,#cur2{display:none}
}

/* ── BG CANVAS ───────────────────────────────────────────────────── */
#bg{position:fixed;inset:0;z-index:0;pointer-events:none;opacity:.55}

/* ── GRAIN ───────────────────────────────────────────────────────── */
body::after{content:'';position:fixed;inset:0;z-index:4;pointer-events:none;
  background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='f'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='200' height='200' filter='url(%23f)' opacity='.022'/%3E%3C/svg%3E");
  mix-blend-mode:overlay;opacity:.6}

/* ── LAYOUT ──────────────────────────────────────────────────────── */
.wrap{max-width:1100px;margin:0 auto;padding:0 clamp(16px,5vw,44px);padding-left:calc(clamp(16px,5vw,44px) + var(--safe-l));padding-right:calc(clamp(16px,5vw,44px) + var(--safe-r));position:relative;z-index:2}
section{position:relative;z-index:2}
.sep{height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.15),transparent);position:relative;z-index:2}

/* ── NAV ─────────────────────────────────────────────────────────── */
nav{position:fixed;top:0;left:0;right:0;z-index:500;transition:background .5s,backdrop-filter .5s,border-color .5s;padding-top:var(--safe-top)}
nav.stuck{background:rgba(5,3,12,.92);backdrop-filter:blur(24px) saturate(1.6);-webkit-backdrop-filter:blur(24px) saturate(1.6);border-bottom:1px solid rgba(232,160,0,.08)}
.nav-in{display:flex;align-items:center;justify-content:space-between;height:var(--nav-h)}
.logo{display:flex;align-items:center;gap:13px;cursor:pointer;-webkit-tap-highlight-color:transparent;flex-shrink:0}
.logo-jp{font-family:var(--f-kanji);font-size:22px;font-weight:700;color:var(--gold);text-shadow:0 0 32px rgba(232,160,0,.7)}
.logo-en{font-family:var(--f-title);font-size:11px;font-weight:700;letter-spacing:.3em;color:var(--paper);text-transform:uppercase}
.logo-badge{font-family:var(--f-mono);font-size:9px;background:rgba(232,160,0,.12);color:var(--gold);border:1px solid rgba(232,160,0,.25);border-radius:4px;padding:2px 7px;letter-spacing:.15em}
.nav-links{display:flex;align-items:center;gap:28px}
.nav-a{font-size:12px;font-weight:300;color:var(--paper3);letter-spacing:.04em;cursor:pointer;transition:color .2s;-webkit-tap-highlight-color:transparent}
.nav-a:hover,.nav-a:focus{color:var(--paper)}

/* Desktop CTA button */
.nav-cta{font-family:var(--f-title);font-size:10px;font-weight:700;letter-spacing:.2em;text-transform:uppercase;background:var(--ember);color:#fff;cursor:pointer;padding:10px 22px;border-radius:5px;border:none;box-shadow:0 0 28px rgba(212,44,20,.4);transition:transform .22s var(--ease2),box-shadow .22s,background .2s;-webkit-tap-highlight-color:transparent;white-space:nowrap}
.nav-cta:hover{transform:translateY(-2px) scale(1.02);box-shadow:0 0 46px rgba(212,44,20,.65);background:var(--ember2)}

/* Hamburger button */
.nav-hamburger{display:none;flex-direction:column;justify-content:center;align-items:center;gap:5px;width:44px;height:44px;background:none;border:none;cursor:pointer;-webkit-tap-highlight-color:transparent;border-radius:8px;flex-shrink:0}
.nav-hamburger span{display:block;width:22px;height:1.5px;background:var(--paper);border-radius:2px;transition:transform .3s var(--ease1),opacity .3s,background .2s}
.nav-hamburger.open span:nth-child(1){transform:translateY(6.5px) rotate(45deg)}
.nav-hamburger.open span:nth-child(2){opacity:0;transform:scaleX(0)}
.nav-hamburger.open span:nth-child(3){transform:translateY(-6.5px) rotate(-45deg)}

/* Mobile drawer */
.nav-drawer{display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:490;background:rgba(5,3,12,.96);backdrop-filter:blur(28px) saturate(1.4);-webkit-backdrop-filter:blur(28px) saturate(1.4);flex-direction:column;justify-content:center;align-items:center;gap:0;opacity:0;pointer-events:none;transition:opacity .35s var(--ease1)}
.nav-drawer.open{opacity:1;pointer-events:all}
.drawer-link{font-family:var(--f-title);font-size:clamp(22px,6vw,32px);font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--paper2);padding:16px 32px;text-align:center;transition:color .2s;-webkit-tap-highlight-color:transparent;display:block;width:100%}
.drawer-link:hover,.drawer-link:active{color:var(--gold)}
.drawer-cta{margin-top:24px;font-family:var(--f-title);font-size:14px;font-weight:700;letter-spacing:.2em;text-transform:uppercase;background:var(--ember);color:#fff;padding:14px 36px;border-radius:6px;border:none;box-shadow:0 0 36px rgba(212,44,20,.45);-webkit-tap-highlight-color:transparent;display:inline-block}
.drawer-sep{width:40px;height:1px;background:rgba(232,160,0,.2);margin:8px auto}

@media(max-width:760px){
  .nav-links .nav-a,.nav-cta{display:none}
  .nav-hamburger{display:flex}
  .nav-drawer{display:flex}
}

/* ── BTNS ────────────────────────────────────────────────────────── */
.btn{display:inline-flex;align-items:center;gap:10px;font-family:var(--f-title);font-size:clamp(9px,1.5vw,11px);font-weight:700;letter-spacing:.2em;text-transform:uppercase;padding:clamp(12px,2.5vw,15px) clamp(20px,4vw,32px);border-radius:6px;cursor:pointer;border:none;position:relative;overflow:hidden;transition:transform .22s var(--ease2),box-shadow .22s;-webkit-tap-highlight-color:transparent;white-space:nowrap}
.btn::before{content:'';position:absolute;inset:0;background:linear-gradient(115deg,rgba(255,255,255,.13) 0%,transparent 55%);pointer-events:none}
.btn-fire{background:linear-gradient(140deg,var(--ember) 0%,#7a0d0d 100%);color:#fff;box-shadow:0 0 36px rgba(212,44,20,.36),0 8px 28px rgba(0,0,0,.5)}
.btn-fire:hover{transform:translateY(-3px);box-shadow:0 0 60px rgba(212,44,20,.62),0 16px 44px rgba(0,0,0,.6)}
.btn-ghost{background:transparent;color:var(--paper);border:1px solid rgba(232,160,0,.26)}
.btn-ghost:hover{transform:translateY(-3px);border-color:rgba(232,160,0,.6);box-shadow:0 0 28px rgba(232,160,0,.15)}
@media(max-width:400px){
  .btn{padding:12px 18px;font-size:9px;letter-spacing:.1em}
}

/* ── SECTION HEADINGS ────────────────────────────────────────────── */
.sh{margin-bottom:clamp(32px,5vw,52px)}
.sh-tag{display:inline-flex;align-items:center;gap:12px;font-family:var(--f-mono);font-size:10px;letter-spacing:.4em;color:var(--gold);text-transform:uppercase;margin-bottom:16px}
.sh-tag::before{content:'';display:inline-block;width:22px;height:1px;background:currentColor}
.sh-h{font-family:var(--f-title);font-size:clamp(26px,5vw,62px);font-weight:900;line-height:.95;letter-spacing:-.02em;color:var(--paper);margin-bottom:16px}
.sh-h em{font-style:normal;background:linear-gradient(120deg,var(--gold2),var(--gold),var(--ember2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.sh-p{font-size:clamp(14px,2vw,16px);font-weight:300;color:var(--paper3);line-height:1.8;max-width:480px}

/* ── HERO ─────────────────────────────────────────────────────────── */
.hero{min-height:100svh;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;padding:calc(var(--nav-h) + var(--safe-top) + 40px) clamp(16px,5vw,44px) clamp(60px,8vw,80px);overflow:hidden;position:relative}
.hero-sun{position:absolute;top:50%;left:50%;transform:translate(-50%,-60%);width:min(600px,90vw);height:min(600px,90vw);border-radius:50%;pointer-events:none;z-index:0;background:radial-gradient(circle,rgba(232,160,0,.15) 0%,rgba(212,44,20,.07) 35%,transparent 70%);animation:sunPulse 8s ease-in-out infinite}
@keyframes sunPulse{0%,100%{transform:translate(-50%,-60%) scale(1);opacity:.8}50%{transform:translate(-50%,-60%) scale(1.08);opacity:1}}
.hero-bg-kanji{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;pointer-events:none;z-index:0;overflow:hidden}
.hero-bg-kanji span{font-family:var(--f-kanji);font-size:clamp(160px,42vw,680px);font-weight:800;line-height:1;user-select:none;background:linear-gradient(180deg,rgba(232,160,0,.055) 0%,rgba(212,44,20,.025) 55%,transparent 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:bgKanjiBreathe 14s ease-in-out infinite;filter:blur(.4px)}
@keyframes bgKanjiBreathe{0%,100%{transform:scale(1) translateY(0)}50%{transform:scale(1.018) translateY(-8px)}}
.hero-content{position:relative;z-index:2;max-width:700px;width:100%}
.hero-eyebrow{font-family:var(--f-mono);font-size:clamp(8px,1.5vw,10px);letter-spacing:.42em;color:var(--gold);text-transform:uppercase;margin-bottom:22px;animation:fadeUp .8s .3s var(--ease1) both}
.hero-torii-line{display:flex;align-items:center;justify-content:center;gap:16px;margin-bottom:16px;animation:fadeUp .8s .45s var(--ease1) both}
.htl-bar{flex:1;max-width:80px;height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.5))}
.htl-bar.r{background:linear-gradient(90deg,rgba(232,160,0,.5),transparent)}
.htl-icon{color:var(--gold);font-size:20px;filter:drop-shadow(0 0 12px rgba(232,160,0,.8))}
.hero-h1{font-family:var(--f-title);font-size:clamp(44px,12vw,140px);font-weight:900;line-height:.88;letter-spacing:-.02em;animation:fadeUp 1s .55s var(--ease1) both}
.h1-gradient{background:linear-gradient(150deg,#fff 0%,var(--paper) 30%,var(--gold2) 62%,var(--gold) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.hero-jp-sub{display:block;font-family:var(--f-kanji);font-size:clamp(11px,2vw,20px);font-weight:400;color:var(--gold);letter-spacing:.55em;margin-top:12px;text-shadow:0 0 44px rgba(232,160,0,.5);animation:fadeUp .8s .75s var(--ease1) both}
.hero-desc{font-size:clamp(14px,2vw,17px);font-weight:300;color:var(--paper3);line-height:1.8;max-width:480px;margin:28px auto 0;animation:fadeUp .8s .9s var(--ease1) both;padding:0 8px}
.hero-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:44px;animation:fadeUp .8s 1.05s var(--ease1) both}
.hero-scroll{position:absolute;bottom:calc(28px + var(--safe-bot));left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:7px;animation:fadeIn 1s 2s var(--ease1) both}
.hs-txt{font-family:var(--f-mono);font-size:9px;letter-spacing:.36em;color:rgba(232,160,0,.4);text-transform:uppercase}
.hs-line{width:1px;height:44px;background:linear-gradient(var(--gold),transparent);animation:scrollDrop 2.4s ease-in-out infinite}
@keyframes scrollDrop{0%,100%{opacity:.2;transform:scaleY(.5) translateY(-8px)}55%{opacity:.9;transform:scaleY(1) translateY(0)}}
@keyframes fadeUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
@keyframes fadeIn{from{opacity:0}to{opacity:1}}
@media(max-width:480px){.hero-scroll{display:none}}

/* ── QUICK START ─────────────────────────────────────────────────── */
.qs-sec{padding:clamp(60px,8vw,100px) 0 clamp(50px,6vw,80px)}
.terminal{background:var(--ink2);border:1px solid rgba(232,160,0,.12);border-radius:14px;overflow:hidden;position:relative}
.terminal::before{content:'';position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.35),transparent)}
.t-bar{display:flex;align-items:center;gap:8px;padding:12px 18px;background:rgba(232,160,0,.04);border-bottom:1px solid rgba(255,255,255,.05);flex-wrap:nowrap;overflow:hidden}
.t-dot{width:11px;height:11px;border-radius:50%;flex-shrink:0}
.td-r{background:#ff5f57}.td-y{background:#febc2e}.td-g{background:#28c840}
.t-title{font-family:var(--f-mono);font-size:10px;color:var(--paper3);letter-spacing:.15em;margin-left:8px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;flex:1;min-width:0}
.t-body{padding:20px;overflow-x:auto;-webkit-overflow-scrolling:touch}
.t-body::-webkit-scrollbar{height:3px}
.t-body::-webkit-scrollbar-track{background:transparent}
.t-body::-webkit-scrollbar-thumb{background:rgba(232,160,0,.2);border-radius:2px}
pre{font-family:var(--f-mono);font-size:clamp(10px,1.5vw,12.5px);line-height:1.85;white-space:pre;tab-size:4}
.kw{color:#ff6b9d}
.fn{color:var(--gold2)}
.str{color:#7ec8a0}
.num{color:#82cfff}
.cmt{color:#4a4060;font-style:italic}
.op{color:var(--paper3)}
.hi{color:#e8d5ff}
.acc{color:var(--ember2)}
.sec-label{color:#c792ea}

/* ── ARCH ─────────────────────────────────────────────────────────── */
.arch-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.arch-tree{display:flex;flex-direction:column;gap:0}
.arch-row{display:flex;align-items:stretch;gap:0}
.arch-indent{width:clamp(18px,3vw,32px);flex-shrink:0;position:relative}
.arch-indent::before{content:'';position:absolute;left:calc(clamp(18px,3vw,32px)/2);top:0;bottom:0;width:1px;background:rgba(232,160,0,.18)}
.arch-indent::after{content:'';position:absolute;left:calc(clamp(18px,3vw,32px)/2);top:50%;width:calc(clamp(18px,3vw,32px)/2);height:1px;background:rgba(232,160,0,.18)}
.arch-node{flex:1;display:flex;align-items:flex-start;gap:12px;padding:clamp(10px,2vw,14px) clamp(12px,2.5vw,18px);margin:3px 0;border-radius:10px;background:var(--ink2);border:1px solid rgba(255,255,255,.05);transition:border-color .2s,background .2s;min-width:0}
.arch-node:hover{background:var(--ink3);border-color:rgba(232,160,0,.2)}
.arch-icon{font-size:clamp(14px,2.5vw,18px);flex-shrink:0;margin-top:2px}
.arch-content{flex:1;min-width:0}
.arch-header{display:flex;align-items:center;gap:8px;margin-bottom:4px;flex-wrap:wrap}
.arch-name{font-family:var(--f-title);font-size:clamp(10px,1.5vw,12px);font-weight:700;letter-spacing:.06em;color:var(--paper);word-break:break-all}
.arch-desc{font-size:clamp(11px,1.5vw,12px);font-weight:300;color:var(--paper3);line-height:1.55}
.arch-badge{font-family:var(--f-mono);font-size:9px;background:rgba(232,160,0,.1);color:var(--gold);border:1px solid rgba(232,160,0,.22);border-radius:4px;padding:2px 8px;white-space:nowrap;letter-spacing:.1em;flex-shrink:0}
.arch-badge.ember{background:rgba(212,44,20,.12);color:var(--ember2);border-color:rgba(212,44,20,.25)}
.arch-badge.jade{background:rgba(26,184,124,.1);color:var(--jade);border-color:rgba(26,184,124,.25)}
.arch-badge.sky{background:rgba(34,144,255,.1);color:var(--sky);border-color:rgba(34,144,255,.25)}

/* Mobile: collapse deep indents */
@media(max-width:480px){
  .arch-indent{width:14px}
}

/* ── API REFERENCE ───────────────────────────────────────────────── */
.api-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.api-grid{display:flex;flex-direction:column;gap:10px}
.api-card{background:var(--ink2);border:1px solid rgba(255,255,255,.05);border-radius:14px;overflow:hidden;transition:border-color .25s,background .25s}
.api-card:hover{background:var(--ink3);border-color:rgba(232,160,0,.14)}
.api-card-head{display:flex;align-items:flex-start;justify-content:space-between;padding:clamp(14px,2.5vw,18px) clamp(14px,2.5vw,22px) clamp(10px,2vw,14px);cursor:pointer;gap:12px}
.api-sig{font-family:var(--f-mono);font-size:clamp(10px,1.5vw,12.5px);color:var(--paper);flex:1;min-width:0;word-break:break-word;line-height:1.6}
.api-sig .fn-name{color:var(--gold2)}
.api-sig .param{color:#c792ea}
.api-sig .ret{color:var(--jade)}
.api-type-pill{font-family:var(--f-mono);font-size:9px;background:rgba(232,160,0,.1);color:var(--gold);border:1px solid rgba(232,160,0,.22);border-radius:100px;padding:3px 10px;white-space:nowrap;flex-shrink:0;letter-spacing:.12em;margin-top:2px}
.api-type-pill.toggle{background:rgba(26,184,124,.1);color:var(--jade);border-color:rgba(26,184,124,.25)}
.api-type-pill.button{background:rgba(212,44,20,.1);color:var(--ember2);border-color:rgba(212,44,20,.25)}
.api-type-pill.win{background:rgba(34,144,255,.1);color:var(--sky);border-color:rgba(34,144,255,.25)}
.api-type-pill.tab{background:rgba(200,120,255,.1);color:#c87aff;border-color:rgba(200,120,255,.25)}
.api-type-pill.notify{background:rgba(255,199,0,.1);color:#ffc700;border-color:rgba(255,199,0,.25)}
.api-body{padding:0 clamp(14px,2.5vw,22px) clamp(16px,2.5vw,20px);border-top:1px solid rgba(255,255,255,.04)}
.api-desc{font-size:clamp(12px,1.5vw,13px);font-weight:300;color:var(--paper3);line-height:1.72;padding-top:14px;margin-bottom:12px}
.api-ret-row{display:flex;align-items:flex-start;gap:10px;margin-bottom:12px;flex-wrap:wrap}
.api-ret-label{font-family:var(--f-mono);font-size:9px;color:var(--paper3);letter-spacing:.15em;text-transform:uppercase;flex-shrink:0;padding-top:2px}
.api-ret-val{font-family:var(--f-mono);font-size:clamp(10px,1.5vw,11px);color:var(--jade);line-height:1.65;word-break:break-word}
.api-mini-code{background:rgba(0,0,0,.38);border-radius:8px;padding:12px 14px;margin-top:10px;overflow-x:auto;-webkit-overflow-scrolling:touch}
.api-mini-code::-webkit-scrollbar{height:2px}
.api-mini-code::-webkit-scrollbar-thumb{background:rgba(232,160,0,.2);border-radius:2px}
.api-mini-code pre{font-size:clamp(10px,1.4vw,11px);line-height:1.85}

/* params table — scrollable on mobile */
.table-wrap{overflow-x:auto;-webkit-overflow-scrolling:touch;margin-top:10px;border-radius:6px}
.table-wrap::-webkit-scrollbar{height:2px}
.table-wrap::-webkit-scrollbar-thumb{background:rgba(232,160,0,.2);border-radius:2px}
.params-table{width:100%;border-collapse:collapse;min-width:360px}
.params-table th{font-family:var(--f-mono);font-size:9px;letter-spacing:.18em;text-transform:uppercase;color:var(--paper3);padding:6px 10px;text-align:left;border-bottom:1px solid rgba(255,255,255,.06);white-space:nowrap}
.params-table td{font-family:var(--f-mono);font-size:clamp(10px,1.3vw,11px);color:var(--paper3);padding:7px 10px;border-bottom:1px solid rgba(255,255,255,.03);vertical-align:top}
.params-table td:first-child{color:var(--paper);font-weight:500;white-space:nowrap}
.params-table td:nth-child(2){color:#c792ea;white-space:nowrap}
.params-table td:nth-child(3){color:var(--paper3);font-size:clamp(9px,1.2vw,10.5px)}

/* ── DOC LAYOUT with sidebar TOC ────────────────────────────────── */
@media(min-width:1060px){
  .doc-layout{display:grid;grid-template-columns:220px 1fr;gap:40px;align-items:start}
  .toc{position:sticky;top:calc(var(--nav-h) + 20px);background:var(--ink2);border:1px solid rgba(255,255,255,.06);border-radius:12px;padding:20px;max-height:calc(100vh - var(--nav-h) - 40px);overflow-y:auto}
  .toc::-webkit-scrollbar{width:2px}
  .toc::-webkit-scrollbar-thumb{background:var(--gold);border-radius:2px}
  .toc h6{font-family:var(--f-mono);font-size:9px;letter-spacing:.28em;color:var(--paper3);text-transform:uppercase;margin-bottom:14px;padding-bottom:8px;border-bottom:1px solid rgba(255,255,255,.06)}
  .toc a{display:block;font-size:11.5px;font-weight:300;color:var(--paper3);padding:5px 0;border-left:2px solid transparent;padding-left:10px;transition:color .18s,border-color .18s;line-height:1.4;cursor:pointer}
  .toc a:hover{color:var(--gold);border-left-color:var(--gold)}
  .toc a.active{color:var(--paper);border-left-color:var(--ember)}
  .toc .toc-group{margin-bottom:12px}
  .toc .toc-group-label{font-family:var(--f-mono);font-size:9px;letter-spacing:.2em;color:rgba(232,160,0,.5);text-transform:uppercase;margin:10px 0 4px;padding-left:10px}
}
@media(max-width:1059px){
  .toc{display:none}
}

/* ── THEMES ───────────────────────────────────────────────────────── */
.theme-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.theme-cats{display:grid;grid-template-columns:repeat(auto-fill,minmax(clamp(130px,20vw,200px),1fr));gap:8px;margin-top:36px}
.tc{background:var(--ink2);border:1px solid rgba(255,255,255,.05);border-radius:12px;padding:clamp(12px,2.5vw,18px) clamp(10px,2vw,16px);text-align:center;transition:border-color .25s,background .25s,transform .25s var(--ease2);-webkit-tap-highlight-color:transparent}
.tc:hover{background:var(--ink3);border-color:rgba(232,160,0,.22);transform:translateY(-3px)}
.tc-em{font-size:clamp(18px,3vw,22px);display:block;margin-bottom:8px}
.tc-name{font-family:var(--f-title);font-size:clamp(10px,1.5vw,11px);font-weight:700;letter-spacing:.06em;color:var(--paper);margin-bottom:4px}
.tc-count{font-family:var(--f-mono);font-size:clamp(8px,1.2vw,9px);color:var(--paper3);letter-spacing:.08em}
.theme-fns{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:8px;margin-top:14px}
.tfn{background:var(--ink2);border:1px solid rgba(255,255,255,.05);border-radius:10px;padding:14px 16px;border-left:2px solid var(--gold)}
.tfn:hover{border-left-color:var(--ember);background:var(--ink3)}
.tfn-name{font-family:var(--f-mono);font-size:clamp(10px,1.5vw,11.5px);color:var(--gold2);margin-bottom:4px;word-break:break-word}
.tfn-desc{font-size:clamp(11px,1.5vw,12px);font-weight:300;color:var(--paper3);line-height:1.6}

/* ── SYSTEMS ─────────────────────────────────────────────────────── */
.sys-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.sys-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(clamp(200px,28vw,320px),1fr));gap:8px}
.sy{background:var(--ink2);border-radius:12px;padding:clamp(16px,2.5vw,22px) clamp(14px,2vw,20px);border:1px solid rgba(255,255,255,.05);border-left:2px solid var(--gold);transition:background .25s,border-left-color .25s,transform .25s var(--ease1)}
.sy:hover{background:var(--ink3);border-left-color:var(--ember);transform:translateX(4px)}
.sy-icon{font-size:clamp(14px,2.5vw,18px);margin-bottom:10px}
.sy-name{font-family:var(--f-title);font-size:clamp(11px,1.5vw,12px);font-weight:700;letter-spacing:.06em;color:var(--paper);margin-bottom:5px}
.sy-desc{font-size:clamp(11px,1.5vw,12px);font-weight:300;color:var(--paper3);line-height:1.65}

/* ── CTA ─────────────────────────────────────────────────────────── */
.cta-sec{padding:clamp(80px,10vw,140px) 0 clamp(90px,12vw,160px);text-align:center;position:relative;overflow:hidden}
.cta-flare{position:absolute;inset:0;pointer-events:none;background:radial-gradient(ellipse 70% 60% at 50% 50%,rgba(212,44,20,.12) 0%,transparent 70%)}
.cta-wm{font-family:var(--f-kanji);font-size:clamp(60px,16vw,180px);font-weight:800;color:rgba(232,160,0,.04);line-height:1;display:block;margin-bottom:-20px;pointer-events:none;user-select:none;animation:bgKanjiBreathe 10s ease-in-out infinite}
.cta-h{font-family:var(--f-title);font-size:clamp(28px,6vw,76px);font-weight:900;line-height:.93;letter-spacing:-.02em;color:var(--paper);margin-bottom:16px;position:relative;z-index:1}
.cta-h span{background:linear-gradient(120deg,var(--gold2),var(--gold),var(--ember2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.cta-sub{font-size:clamp(13px,2vw,16px);font-weight:300;color:var(--paper3);margin-bottom:clamp(28px,4vw,48px);position:relative;z-index:1;padding:0 12px}

/* Loadstring pill */
.cta-loadstr{display:inline-flex;align-items:center;gap:14px;cursor:pointer;background:var(--ink2);border:1px solid rgba(232,160,0,.2);padding:clamp(10px,2vw,14px) clamp(14px,3vw,24px);border-radius:10px;font-family:var(--f-mono);font-size:clamp(9px,1.4vw,11px);color:var(--gold);position:relative;z-index:1;margin-bottom:clamp(24px,4vw,40px);max-width:calc(100vw - 32px);overflow:hidden;transition:border-color .2s,background .2s;-webkit-tap-highlight-color:transparent;text-align:left}
.cta-loadstr:hover{border-color:rgba(232,160,0,.5);background:rgba(232,160,0,.06)}
.cls-code{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;min-width:0;flex:1}
.cls-icon{flex-shrink:0;color:var(--paper3);transition:color .2s;font-size:13px}
.cta-loadstr:hover .cls-icon{color:var(--gold)}
.cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}

/* Copy success state */
.copy-success .cls-icon{color:var(--jade)!important}

/* ── FOOTER ──────────────────────────────────────────────────────── */
footer{background:var(--ink1);border-top:1px solid rgba(255,255,255,.04);padding:clamp(36px,6vw,56px) 0 calc(clamp(24px,3vw,36px) + var(--safe-bot));position:relative;z-index:2}
.footer-top{display:flex;justify-content:space-between;align-items:flex-start;gap:40px;flex-wrap:wrap;margin-bottom:clamp(28px,4vw,44px)}
.fb{max-width:260px}
.fb-logo{display:flex;align-items:center;gap:12px;margin-bottom:12px}
.fb-jp{font-family:var(--f-kanji);font-size:24px;font-weight:700;color:var(--gold);text-shadow:0 0 22px rgba(232,160,0,.5)}
.fb-en{font-family:var(--f-title);font-size:12px;font-weight:700;letter-spacing:.22em;color:var(--paper)}
.fb-desc{font-size:13px;font-weight:300;color:var(--paper3);line-height:1.7;opacity:.7}
.footer-cols{display:flex;gap:clamp(24px,5vw,50px);flex-wrap:wrap}
.fc h5{font-family:var(--f-title);font-size:10px;letter-spacing:.24em;color:var(--paper);text-transform:uppercase;margin-bottom:16px}
.fc a{display:block;font-size:12px;font-weight:300;color:var(--paper3);margin-bottom:10px;cursor:pointer;transition:color .2s;opacity:.7;-webkit-tap-highlight-color:transparent}
.fc a:hover{color:var(--gold);opacity:1}
.footer-bottom{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;padding-top:24px;border-top:1px solid rgba(255,255,255,.04)}
.footer-bottom span{font-family:var(--f-mono);font-size:10px;color:var(--paper3);opacity:.5}
.footer-bottom b{color:var(--gold);opacity:1}
@media(max-width:500px){
  .footer-top{flex-direction:column}
  .footer-bottom{flex-direction:column;text-align:center}
}

/* ── REVEAL ──────────────────────────────────────────────────────── */
.r{opacity:0;transform:translateY(20px);transition:opacity .7s var(--ease1),transform .7s var(--ease1)}
.r.in{opacity:1;transform:translateY(0)}
.r[data-d="1"]{transition-delay:.1s}.r[data-d="2"]{transition-delay:.2s}.r[data-d="3"]{transition-delay:.3s}
@media(prefers-reduced-motion:reduce){
  .r{opacity:1;transform:none;transition:none}
  *{animation-duration:.01ms!important;transition-duration:.01ms!important}
}

/* ── INLINE TAG ──────────────────────────────────────────────────── */
.tag{font-family:var(--f-mono);font-size:10px;background:rgba(232,160,0,.1);color:var(--gold);border:1px solid rgba(232,160,0,.22);border-radius:4px;padding:2px 8px;letter-spacing:.1em;white-space:nowrap}
.tag.ember{background:rgba(212,44,20,.1);color:var(--ember2);border-color:rgba(212,44,20,.25)}

/* ── INLINE CODE ─────────────────────────────────────────────────── */
code.ic{font-family:var(--f-mono);font-size:11px;color:var(--gold2)}
code.ic.jade{color:var(--jade)}
code.ic.purple{color:#c792ea}

/* ── SETUP SECTION ───────────────────────────────────────────────── */
.setup-sec{padding:clamp(50px,6vw,80px) 0 clamp(60px,8vw,100px)}
.setup-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(clamp(240px,30vw,350px),1fr));gap:16px;margin-top:36px}
.setup-step{background:var(--ink2);border:1px solid rgba(255,255,255,.05);border-radius:14px;padding:clamp(18px,3vw,26px);position:relative;overflow:hidden;transition:border-color .25s,background .25s}
.setup-step:hover{background:var(--ink3);border-color:rgba(232,160,0,.16)}
.setup-step::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--ember),var(--gold))}
.step-num{font-family:var(--f-title);font-size:clamp(36px,6vw,56px);font-weight:900;color:rgba(232,160,0,.1);line-height:1;margin-bottom:12px;letter-spacing:-.04em}
.step-title{font-family:var(--f-title);font-size:clamp(12px,1.8vw,14px);font-weight:700;letter-spacing:.1em;color:var(--paper);margin-bottom:8px;text-transform:uppercase}
.step-desc{font-size:clamp(12px,1.5vw,13px);font-weight:300;color:var(--paper3);line-height:1.7}
.step-code{background:rgba(0,0,0,.35);border-radius:8px;padding:10px 14px;margin-top:14px;font-family:var(--f-mono);font-size:clamp(10px,1.4vw,11px);color:var(--gold);overflow-x:auto;white-space:nowrap;-webkit-overflow-scrolling:touch}
.step-code::-webkit-scrollbar{height:2px}
.step-code::-webkit-scrollbar-thumb{background:rgba(232,160,0,.2);border-radius:2px}

/* ── EXECUTOR COMPAT BADGES ─────────────────────────────────────── */
.compat-row{display:flex;flex-wrap:wrap;gap:8px;margin-top:28px}
.compat-badge{font-family:var(--f-mono);font-size:10px;background:var(--ink2);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:5px 12px;color:var(--paper2);letter-spacing:.08em;display:flex;align-items:center;gap:6px}
.compat-badge .dot{width:6px;height:6px;border-radius:50%;background:var(--jade);flex-shrink:0;box-shadow:0 0 6px rgba(26,184,124,.7)}
.compat-badge .dot.partial{background:var(--gold)}

/* ── MOBILE: reduce arch depth ───────────────────────────────────── */
@media(max-width:560px){
  .arch-row:nth-child(4) .arch-indent:nth-child(3),
  .arch-row:nth-child(5) .arch-indent:nth-child(4){display:none}
}

/* ── PRINT ───────────────────────────────────────────────────────── */
@media print{
  #bg,#cur,#cur2,nav,body::after,.hero-scroll{display:none!important}
  body{background:#fff;color:#000}
  .wrap{max-width:100%}
}
</style>
</head>
<body>
<div id="cur"></div>
<div id="cur2"></div>
<canvas id="bg" aria-hidden="true"></canvas>

<!-- ═══ MOBILE DRAWER ═══════════════════════════════════════════════ -->
<div class="nav-drawer" id="drawer" role="dialog" aria-label="Navigation menu">
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
    <div class="nav-links" role="list">
      <a class="nav-a" href="#quickstart">Quick Start</a>
      <a class="nav-a" href="#setup">Setup</a>
      <a class="nav-a" href="#architecture">Architecture</a>
      <a class="nav-a" href="#api">API</a>
      <a class="nav-a" href="#themes">Themes</a>
      <a class="nav-cta" href="#get">Get Script</a>
    </div>
    <button class="nav-hamburger" id="hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="drawer">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- ═══ HERO ═════════════════════════════════════════════════════════ -->
<section class="hero" id="top" aria-labelledby="hero-heading">
  <div class="hero-bg-kanji" aria-hidden="true"><span>天照</span></div>
  <div class="hero-sun" aria-hidden="true"></div>
  <div class="hero-content">
    <p class="hero-eyebrow">Developer Documentation · v15.0 · by Kyo</p>
    <div class="hero-torii-line" aria-hidden="true">
      <span class="htl-bar"></span>
      <span class="htl-icon">⛩️</span>
      <span class="htl-bar r"></span>
    </div>
    <h1 class="hero-h1" id="hero-heading">
      <span class="h1-gradient">Build Your</span>
      <span class="hero-jp-sub">天照大神 · 日の神</span>
    </h1>
    <h1 class="hero-h1" style="animation-delay:.65s"><span class="h1-gradient">Own Menu.</span></h1>
    <p class="hero-desc">Everything you need to scaffold a full Roblox script UI using Amaterasu — window, tabs, sections, and every component, with real code examples for each.</p>
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
      <!-- Step 1 -->
      <div class="setup-step r">
        <div class="step-num">01</div>
        <div class="step-title">Deploy to Render</div>
        <div class="step-desc">Fork the repo, connect to <a href="https://render.com" style="color:var(--gold);text-decoration:underline" target="_blank" rel="noopener">Render.com</a>, and deploy with the included <code class="ic">render.yaml</code>. The Docker image serves all files via Apache. Free tier is enough.</div>
        <div class="step-code">render.yaml → Auto-detected ✓</div>
      </div>
      <!-- Step 2 -->
      <div class="setup-step r" data-d="1">
        <div class="step-num">02</div>
        <div class="step-title">Confirm Your URL</div>
        <div class="step-desc">Once deployed, your service URL will be <strong style="color:var(--paper)">https://&lt;your-name&gt;.onrender.com</strong>. Verify <code class="ic">/amaterasu_lib.lua</code> and <code class="ic">/load.lua</code> are accessible in your browser.</div>
        <div class="step-code">https://amaterasu-ui.onrender.com/amaterasu_lib.lua</div>
      </div>
      <!-- Step 3 -->
      <div class="setup-step r" data-d="2">
        <div class="step-num">03</div>
        <div class="step-title">Paste & Execute</div>
        <div class="step-desc">Open your executor, paste the one-line loadstring below, and run it. The loader fetches the library, compiles it, and launches your menu.</div>
        <div class="step-code">loadstring(game:HttpGet("https://…/load.lua"))()</div>
      </div>
    </div>

    <!-- Executor compatibility -->
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
<section class="qs-sec" id="quickstart">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">Quick Start</div>
      <h2 class="sh-h">From zero to <em>menu</em><br>in 30 lines.</h2>
      <p class="sh-p">Paste the loadstring, create a ScreenGui, call <code class="ic">Lib.Window</code>, and start adding elements. That's all it takes.</p>
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
<span class="kw">local</span> <span class="hi">CoreGui</span> <span class="op">=</span> <span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"CoreGui"</span>)
<span class="kw">local</span> <span class="hi">UIS</span>     <span class="op">=</span> <span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"UserInputService"</span>)
<span class="kw">local</span> <span class="hi">LP</span>      <span class="op">=</span> <span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"Players"</span>)<span class="op">.</span><span class="hi">LocalPlayer</span>

<span class="kw">local</span> <span class="hi">sg</span> <span class="op">=</span> <span class="fn">Instance</span><span class="op">.</span><span class="fn">new</span>(<span class="str">"ScreenGui"</span>)
<span class="hi">sg</span><span class="op">.</span><span class="hi">Name</span>           <span class="op">=</span> <span class="str">"MyMenu"</span>
<span class="hi">sg</span><span class="op">.</span><span class="hi">IgnoreGuiInset</span>  <span class="op">=</span> <span class="kw">true</span>
<span class="hi">sg</span><span class="op">.</span><span class="hi">ResetOnSpawn</span>    <span class="op">=</span> <span class="kw">false</span>
<span class="hi">sg</span><span class="op">.</span><span class="hi">Parent</span>         <span class="op">=</span> <span class="hi">CoreGui</span>

<span class="cmt">-- ③ Create the window  (sg, title, width, height)</span>
<span class="kw">local</span> <span class="hi">win</span> <span class="op">=</span> <span class="fn">Lib</span><span class="op">.</span><span class="fn">Window</span>(<span class="hi">sg</span><span class="op">,</span> <span class="str">"My Script"</span><span class="op">,</span> <span class="num">390</span><span class="op">,</span> <span class="num">320</span>)

<span class="cmt">-- ④ Add a tab, a column, and a section</span>
<span class="kw">local</span> <span class="sec-label">mainTab</span> <span class="op">=</span> <span class="hi">win</span><span class="op">:</span><span class="fn">AddTab</span>(<span class="str">"⚔️ Main"</span>)
<span class="kw">local</span> <span class="hi">col</span>     <span class="op">=</span> <span class="sec-label">mainTab</span><span class="op">:</span><span class="fn">AddColumn</span>()
<span class="kw">local</span> <span class="hi">sec</span>     <span class="op">=</span> <span class="hi">col</span><span class="op">:</span><span class="fn">AddSection</span>(<span class="str">"Movement"</span>)

<span class="cmt">-- ⑤ Add elements</span>
<span class="hi">sec</span><span class="op">:</span><span class="fn">AddToggle</span>(<span class="str">"Speed Hack"</span><span class="op">,</span> <span class="kw">false</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">v</span>)
    <span class="fn">Notify</span>(<span class="str">"Speed: "</span> <span class="op">..</span> (<span class="hi">v</span> <span class="kw">and</span> <span class="str">"ON"</span> <span class="kw">or</span> <span class="str">"OFF"</span>))
<span class="kw">end</span>)

<span class="hi">sec</span><span class="op">:</span><span class="fn">AddSlider</span>(<span class="str">"Walk Speed"</span><span class="op">,</span> <span class="num">1</span><span class="op">,</span> <span class="num">200</span><span class="op">,</span> <span class="num">16</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">v</span>)
    <span class="kw">local</span> <span class="hi">hum</span> <span class="op">=</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span> <span class="kw">and</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span><span class="op">:</span><span class="fn">FindFirstChild</span>(<span class="str">"Humanoid"</span>)
    <span class="kw">if</span> <span class="hi">hum</span> <span class="kw">then</span> <span class="hi">hum</span><span class="op">.</span><span class="hi">WalkSpeed</span> <span class="op">=</span> <span class="hi">v</span> <span class="kw">end</span>
<span class="kw">end</span>)

<span class="hi">sec</span><span class="op">:</span><span class="fn">AddButton</span>(<span class="str">"Teleport Up"</span><span class="op">,</span> <span class="kw">function</span>()
    <span class="kw">local</span> <span class="hi">hrp</span> <span class="op">=</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span> <span class="kw">and</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span><span class="op">:</span><span class="fn">FindFirstChild</span>(<span class="str">"HumanoidRootPart"</span>)
    <span class="kw">if</span> <span class="hi">hrp</span> <span class="kw">then</span> <span class="hi">hrp</span><span class="op">.</span><span class="hi">CFrame</span> <span class="op">=</span> <span class="hi">hrp</span><span class="op">.</span><span class="hi">CFrame</span> <span class="op">+</span> <span class="fn">Vector3</span><span class="op">.</span><span class="fn">new</span>(<span class="num">0</span><span class="op">,</span> <span class="num">50</span><span class="op">,</span> <span class="num">0</span>) <span class="kw">end</span>
<span class="kw">end</span>)

<span class="cmt">-- ⑥ Toggle with keybind</span>
<span class="hi">UIS</span><span class="op">.</span><span class="hi">InputBegan</span><span class="op">:</span><span class="fn">Connect</span>(<span class="kw">function</span>(<span class="hi">i</span><span class="op">,</span> <span class="hi">gp</span>)
    <span class="kw">if</span> <span class="hi">gp</span> <span class="kw">then</span> <span class="kw">return</span> <span class="kw">end</span>
    <span class="kw">if</span> <span class="hi">i</span><span class="op">.</span><span class="hi">KeyCode</span> <span class="op">==</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">RightControl</span> <span class="kw">then</span>
        <span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>()
    <span class="kw">end</span>
<span class="kw">end</span>)

<span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>()  <span class="cmt">-- open on load</span></pre>
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
      <p class="sh-p">Every element lives inside a Section → Column → Tab → Window. Build top-down.</p>
    </div>
    <div class="arch-tree r" data-d="1">
      <!-- Window -->
      <div class="arch-row">
        <div class="arch-node">
          <span class="arch-icon" aria-hidden="true">🪟</span>
          <div class="arch-content">
            <div class="arch-header">
              <div class="arch-name">Lib.Window(sg, title, w, h)</div>
              <span class="arch-badge sky">win</span>
            </div>
            <div class="arch-desc">Root draggable panel. Spawns the frosted-glass body, spinning gradient border, title bar, and bottom tab bar.</div>
          </div>
        </div>
      </div>
      <!-- Tab -->
      <div class="arch-row">
        <div class="arch-indent"></div>
        <div class="arch-node">
          <span class="arch-icon" aria-hidden="true">📑</span>
          <div class="arch-content">
            <div class="arch-header">
              <div class="arch-name">win:AddTab(label)</div>
              <span class="arch-badge tab">tab</span>
            </div>
            <div class="arch-desc">Appends a button to the bottom shrine-bar and a full-width scrollable page. The bar rebalances automatically.</div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="arch-row">
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-node">
          <span class="arch-icon" aria-hidden="true">📐</span>
          <div class="arch-content">
            <div class="arch-header">
              <div class="arch-name">tab:AddColumn()</div>
              <span class="arch-badge">col</span>
            </div>
            <div class="arch-desc">Vertical scrollable column. Two calls give a 50/50 split; one call = full-width.</div>
          </div>
        </div>
      </div>
      <!-- Section -->
      <div class="arch-row">
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-node">
          <span class="arch-icon" aria-hidden="true">🗂️</span>
          <div class="arch-content">
            <div class="arch-header">
              <div class="arch-name">col:AddSection(title)</div>
              <span class="arch-badge jade">sec</span>
            </div>
            <div class="arch-desc">Collapsible frosted-glass card with accent stripe header. Pass "" for a headerless card.</div>
          </div>
        </div>
      </div>
      <!-- Elements -->
      <div class="arch-row">
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-node">
          <span class="arch-icon" aria-hidden="true">⚙️</span>
          <div class="arch-content">
            <div class="arch-header">
              <div class="arch-name">sec:AddToggle / AddButton / AddSlider / …</div>
              <span class="arch-badge ember">element</span>
            </div>
            <div class="arch-desc">Individual UI components. Each returns a control object so you can read/write its value programmatically.</div>
          </div>
        </div>
      </div>
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
      <!-- TOC (desktop only) -->
      <nav class="toc" aria-label="API Table of Contents">
        <h6>Navigation</h6>
        <div class="toc-group">
          <div class="toc-group-label">Window</div>
          <a href="#api-window">Lib.Window</a>
          <a href="#api-addtab">AddTab</a>
          <a href="#api-toggle-win">Toggle / SetTitle</a>
        </div>
        <div class="toc-group">
          <div class="toc-group-label">Elements</div>
          <a href="#api-toggle">AddToggle</a>
          <a href="#api-button">AddButton</a>
          <a href="#api-slider">AddSlider</a>
          <a href="#api-cycle">AddCycle</a>
          <a href="#api-dropdown">AddDropdown</a>
          <a href="#api-colorpicker">AddColorPicker</a>
          <a href="#api-keybind">AddKeybind</a>
          <a href="#api-multitoggle">AddMultiToggle</a>
          <a href="#api-input">AddInput</a>
          <a href="#api-label">AddLabel</a>
        </div>
        <div class="toc-group">
          <div class="toc-group-label">Global</div>
          <a href="#api-notify">Notify</a>
          <a href="#api-accent">setAccent</a>
        </div>
      </nav>

      <!-- Cards -->
      <div class="api-grid">

        <!-- Lib.Window -->
        <div class="api-card r" id="api-window">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">Lib.Window</span>(<span class="param">sg</span>, <span class="param">title</span>, <span class="param">w</span>, <span class="param">h</span>) <span style="color:var(--paper3)">→</span> <span class="ret">win</span></div>
            <span class="api-type-pill win">Window</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Creates and returns the root window object. The window starts hidden off-screen and slides in on the first <code class="ic">:Toggle()</code> call.</div>
            <div class="table-wrap">
              <table class="params-table">
                <tr><th>Param</th><th>Type</th><th>Description</th></tr>
                <tr><td>sg</td><td>ScreenGui</td><td>Parent ScreenGui (parent to CoreGui first)</td></tr>
                <tr><td>title</td><td>string</td><td>Text shown in the top bar pill</td></tr>
                <tr><td>w</td><td>number?</td><td>Width in pixels (default 390)</td></tr>
                <tr><td>h</td><td>number?</td><td>Height in pixels (default 320)</td></tr>
              </table>
            </div>
          </div>
        </div>

        <!-- AddTab -->
        <div class="api-card r" id="api-addtab">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">win:AddTab</span>(<span class="param">label</span>) <span style="color:var(--paper3)">→</span> <span class="ret">tab</span></div>
            <span class="api-type-pill tab">Tab</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Appends a new tab and returns a tab object. Use emoji + text for a polished label (e.g. <code class="ic jade">"⚔️ Combat"</code>).</div>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Methods</span>
              <span class="api-ret-val">tab:Select() — switch to this tab<br>tab:LazyBuild(fn) — defer build until first open</span>
            </div>
          </div>
        </div>

        <!-- Toggle/SetTitle -->
        <div class="api-card r" id="api-toggle-win">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">win:Toggle</span>() &nbsp;·&nbsp; <span class="fn-name">win:SetTitle</span>(<span class="param">text</span>) &nbsp;·&nbsp; <span class="fn-name">win:GetTab</span>(<span class="param">label</span>)</div>
            <span class="api-type-pill win">Window</span>
          </div>
          <div class="api-body">
            <div class="api-desc"><b style="color:var(--paper)">Toggle</b> — Animates open/closed with spring scale. <b style="color:var(--paper)">SetTitle</b> — Updates the top-bar text at any time. <b style="color:var(--paper)">GetTab</b> — Returns tab by label (case-insensitive) to call <code class="ic jade">:Select()</code> programmatically.</div>
            <div class="api-mini-code">
              <pre><span class="hi">UIS</span><span class="op">.</span><span class="hi">InputBegan</span><span class="op">:</span><span class="fn">Connect</span>(<span class="kw">function</span>(<span class="hi">i</span><span class="op">,</span><span class="hi">gp</span>)
    <span class="kw">if</span> <span class="hi">gp</span> <span class="kw">then</span> <span class="kw">return</span> <span class="kw">end</span>
    <span class="kw">if</span> <span class="hi">i</span><span class="op">.</span><span class="hi">KeyCode</span> <span class="op">==</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">RightControl</span> <span class="kw">then</span>
        <span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>()
    <span class="kw">end</span>
<span class="kw">end</span>)
<span class="hi">win</span><span class="op">:</span><span class="fn">GetTab</span>(<span class="str">"⚙️ Settings"</span>)<span class="op">:</span><span class="fn">Select</span>()</pre>
            </div>
          </div>
        </div>

        <!-- AddToggle -->
        <div class="api-card r" id="api-toggle">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddToggle</span>(<span class="param">label</span>, <span class="param">default</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">tog</span></div>
            <span class="api-type-pill toggle">Toggle</span>
          </div>
          <div class="api-body">
            <div class="api-desc">A pill switch with bounce-spring knob animation and ember glow ring. Returns a control object to read/set the value in code.</div>
            <div class="table-wrap">
              <table class="params-table">
                <tr><th>Param</th><th>Type</th><th>Description</th></tr>
                <tr><td>label</td><td>string</td><td>Label shown to the left of the pill</td></tr>
                <tr><td>default</td><td>bool</td><td>Initial state (true = on)</td></tr>
                <tr><td>callback</td><td>fn(v:bool)?</td><td>Called with new state on every flip</td></tr>
              </table>
            </div>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">tog:Set(v, silent?) — set value; silent=true skips callback<br>tog:Get() → bool</span>
            </div>
            <div class="api-mini-code">
              <pre><span class="kw">local</span> <span class="hi">godmode</span> <span class="op">=</span> <span class="hi">sec</span><span class="op">:</span><span class="fn">AddToggle</span>(<span class="str">"God Mode"</span><span class="op">,</span> <span class="kw">false</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">v</span>)
    <span class="fn">Notify</span>(<span class="str">"God Mode "</span> <span class="op">..</span> (<span class="hi">v</span> <span class="kw">and</span> <span class="str">"🟢 ON"</span> <span class="kw">or</span> <span class="str">"🔴 OFF"</span>))
<span class="kw">end</span>)
<span class="kw">if</span> <span class="hi">godmode</span><span class="op">:</span><span class="fn">Get</span>() <span class="kw">then</span> <span class="cmt">--[[…]]</span> <span class="kw">end</span>
<span class="hi">godmode</span><span class="op">:</span><span class="fn">Set</span>(<span class="kw">true</span><span class="op">,</span> <span class="kw">true</span>)  <span class="cmt">-- force ON silently</span></pre>
            </div>
          </div>
        </div>

        <!-- AddButton -->
        <div class="api-card r" id="api-button">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddButton</span>(<span class="param">label</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">bObj</span></div>
            <span class="api-type-pill button">Button</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Full-width button with solar-sweep hover and material ripple. Callback is wrapped in <code class="ic jade">task.spawn</code> automatically — long operations won't freeze the UI.</div>
            <div class="api-ret-row" style="margin-top:10px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">bObj:SetText(t) — change label dynamically<br>bObj:SetEnabled(v) — grey out / re-enable</span>
            </div>
            <div class="api-mini-code">
              <pre><span class="kw">local</span> <span class="hi">healBtn</span> <span class="op">=</span> <span class="hi">sec</span><span class="op">:</span><span class="fn">AddButton</span>(<span class="str">"💊 Heal Now"</span><span class="op">,</span> <span class="kw">function</span>()
    <span class="hi">healBtn</span><span class="op">:</span><span class="fn">SetText</span>(<span class="str">"Healing…"</span>); <span class="hi">healBtn</span><span class="op">:</span><span class="fn">SetEnabled</span>(<span class="kw">false</span>)
    <span class="fn">task</span><span class="op">.</span><span class="fn">wait</span>(<span class="num">1.5</span>)
    <span class="hi">healBtn</span><span class="op">:</span><span class="fn">SetText</span>(<span class="str">"💊 Heal Now"</span>); <span class="hi">healBtn</span><span class="op">:</span><span class="fn">SetEnabled</span>(<span class="kw">true</span>)
<span class="kw">end</span>)</pre>
            </div>
          </div>
        </div>

        <!-- AddSlider -->
        <div class="api-card r" id="api-slider">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddSlider</span>(<span class="param">label</span>, <span class="param">min</span>, <span class="param">max</span>, <span class="param">default</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">slid</span></div>
            <span class="api-type-pill">Slider</span>
          </div>
          <div class="api-body">
            <div class="api-desc">44px touch-target slider with accent track, value badge, and halo thumb. Callback throttled during drag (max 50ms), always fires on release.</div>
            <div class="table-wrap">
              <table class="params-table">
                <tr><th>Param</th><th>Type</th><th>Description</th></tr>
                <tr><td>label</td><td>string</td><td>Label shown above the track</td></tr>
                <tr><td>min / max</td><td>number</td><td>Range bounds (int or float)</td></tr>
                <tr><td>default</td><td>number</td><td>Starting value</td></tr>
                <tr><td>callback</td><td>fn(v:number)?</td><td>Called with new value during/after drag</td></tr>
              </table>
            </div>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">slid:Set(v) — set value and fire callback<br>slid:Get() → number</span>
            </div>
          </div>
        </div>

        <!-- AddCycle -->
        <div class="api-card r" id="api-cycle">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddCycle</span>(<span class="param">label</span>, <span class="param">options</span>, <span class="param">defIdx</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">cyc</span></div>
            <span class="api-type-pill">Cycle</span>
          </div>
          <div class="api-body">
            <div class="api-desc">A compact ‹ VALUE › pill picker. Great for small fixed sets (aura size, speed tier). Callback receives the selected index.</div>
            <div class="api-mini-code">
              <pre><span class="hi">sec</span><span class="op">:</span><span class="fn">AddCycle</span>(<span class="str">"Aura Size"</span><span class="op">,</span> <span class="op">{</span><span class="str">"Small"</span><span class="op">,</span><span class="str">"Medium"</span><span class="op">,</span><span class="str">"Large"</span><span class="op">,</span><span class="str">"XL"</span><span class="op">},</span> <span class="num">1</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">i</span>)
    <span class="fn">Notify</span>(<span class="str">"Aura: "</span> <span class="op">..</span> <span class="op">{</span><span class="str">"Small"</span><span class="op">,</span><span class="str">"Medium"</span><span class="op">,</span><span class="str">"Large"</span><span class="op">,</span><span class="str">"XL"</span><span class="op">}[</span><span class="hi">i</span><span class="op">]</span>)
<span class="kw">end</span>)</pre>
            </div>
          </div>
        </div>

        <!-- AddDropdown -->
        <div class="api-card r" id="api-dropdown">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddDropdown</span>(<span class="param">label</span>, <span class="param">options</span>, <span class="param">defIdx</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">drop</span></div>
            <span class="api-type-pill">Dropdown</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Animated accordion list. Better than Cycle when you have 5+ options or long labels. Clicking the header expands the list; selecting one closes it and fires callback.</div>
            <div class="api-ret-row" style="margin-top:10px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">drop:Get() → number<br>drop:Set(i) — change without callback</span>
            </div>
          </div>
        </div>

        <!-- AddColorPicker -->
        <div class="api-card r" id="api-colorpicker">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddColorPicker</span>(<span class="param">label</span>, <span class="param">defaultColor</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">cp</span></div>
            <span class="api-type-pill">ColorPicker</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Full inline HSV picker with saturation/value square, hue strip, and hex input. Expands below its header chip. Callback fires on every change with a Color3.</div>
            <div class="api-mini-code">
              <pre><span class="hi">sec</span><span class="op">:</span><span class="fn">AddColorPicker</span>(<span class="str">"Trail Color"</span><span class="op">,</span> <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">100</span><span class="op">,</span><span class="num">0</span>)<span class="op">,</span> <span class="kw">function</span>(<span class="hi">c</span>)
    <span class="kw">if</span> <span class="hi">myTrail</span> <span class="kw">then</span> <span class="hi">myTrail</span><span class="op">.</span><span class="hi">Color</span> <span class="op">=</span> <span class="hi">c</span> <span class="kw">end</span>
<span class="kw">end</span>)</pre>
            </div>
          </div>
        </div>

        <!-- AddKeybind -->
        <div class="api-card r" id="api-keybind">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddKeybind</span>(<span class="param">label</span>, <span class="param">defaultKey</span>, <span class="param">name</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">kb</span></div>
            <span class="api-type-pill">Keybind</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Rebindable key chip. Click to enter live-capture mode ("…") — next key pressed becomes the new binding. Provide <code class="ic purple">name</code> to persist across sessions; pass <code class="ic purple">nil</code> for standalone.</div>
            <div class="api-mini-code">
              <pre><span class="cmt">-- Standalone (not persisted)</span>
<span class="hi">sec</span><span class="op">:</span><span class="fn">AddKeybind</span>(<span class="str">"Menu Toggle"</span><span class="op">,</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">RightControl</span><span class="op">,</span> <span class="kw">nil</span><span class="op">,</span> <span class="kw">function</span>()
    <span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>()
<span class="kw">end</span>)
<span class="cmt">-- Persisted (saves to file)</span>
<span class="hi">sec</span><span class="op">:</span><span class="fn">AddKeybind</span>(<span class="str">"Teleport Up"</span><span class="op">,</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">T</span><span class="op">,</span> <span class="str">"tpUp"</span><span class="op">,</span> <span class="kw">function</span>() <span class="kw">end</span>)</pre>
            </div>
          </div>
        </div>

        <!-- AddMultiToggle -->
        <div class="api-card r" id="api-multitoggle">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddMultiToggle</span>(<span class="param">options</span>, <span class="param">defaults</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">mt</span></div>
            <span class="api-type-pill toggle">MultiToggle</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Row of chip toggles each independently on/off. Callback fires with a boolean array of all states.</div>
            <div class="api-ret-row" style="margin-top:10px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">mt:Set(idx, val, silent?)<br>mt:GetAll() → bool[]</span>
            </div>
            <div class="api-mini-code">
              <pre><span class="hi">sec</span><span class="op">:</span><span class="fn">AddMultiToggle</span>(<span class="op">{</span><span class="str">"Head"</span><span class="op">,</span><span class="str">"Body"</span><span class="op">,</span><span class="str">"Legs"</span><span class="op">},</span> <span class="op">{</span><span class="kw">true</span><span class="op">,</span><span class="kw">false</span><span class="op">,</span><span class="kw">false</span><span class="op">},</span> <span class="kw">function</span>(<span class="hi">s</span>)
    <span class="fn">print</span>(<span class="str">"Head:"</span><span class="op">,</span> <span class="hi">s</span><span class="op">[</span><span class="num">1</span><span class="op">],</span> <span class="str">"Body:"</span><span class="op">,</span> <span class="hi">s</span><span class="op">[</span><span class="num">2</span><span class="op">],</span> <span class="str">"Legs:"</span><span class="op">,</span> <span class="hi">s</span><span class="op">[</span><span class="num">3</span><span class="op">]</span>)
<span class="kw">end</span>)</pre>
            </div>
          </div>
        </div>

        <!-- AddInput -->
        <div class="api-card r" id="api-input">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddInput</span>(<span class="param">label</span>, <span class="param">placeholder</span>, <span class="param">callback</span>) <span style="color:var(--paper3)">→</span> <span class="ret">inp</span></div>
            <span class="api-type-pill">Input</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Bordered text input with accent focus ring. Callback fires on Enter. Pass empty string to skip the label.</div>
            <div class="api-ret-row" style="margin-top:10px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">inp:Get() → string · inp:Set(v)</span>
            </div>
          </div>
        </div>

        <!-- AddLabel / AddSeparator / AddDivider -->
        <div class="api-card r" id="api-label">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">sec:AddLabel</span>(<span class="param">text</span>, <span class="param">size?</span>) &nbsp;·&nbsp; <span class="fn-name">AddSeparator</span>() &nbsp;·&nbsp; <span class="fn-name">AddDivider</span>(<span class="param">text?</span>)</div>
            <span class="api-type-pill">Layout</span>
          </div>
          <div class="api-body">
            <div class="api-desc"><b style="color:var(--paper)">AddLabel</b> — Static text row. Supports RichText (e.g. <code class="ic jade">&lt;font color="…"&gt;</code>). <b style="color:var(--paper)">AddSeparator</b> — Thin horizontal rule. <b style="color:var(--paper)">AddDivider</b> — Labeled divider with accent lines; pass "" for plain.</div>
            <div class="api-mini-code">
              <pre><span class="hi">sec</span><span class="op">:</span><span class="fn">AddLabel</span>(<span class="str">'Status: &lt;font color="rgb(80,255,130)"&gt;Active&lt;/font&gt;'</span>)
<span class="hi">sec</span><span class="op">:</span><span class="fn">AddSeparator</span>()
<span class="hi">sec</span><span class="op">:</span><span class="fn">AddDivider</span>(<span class="str">"Advanced"</span>)</pre>
            </div>
          </div>
        </div>

        <!-- Notify -->
        <div class="api-card r" id="api-notify">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">Notify</span>(<span class="param">text</span>, <span class="param">dur?</span>, <span class="param">priority?</span>)</div>
            <span class="api-type-pill notify">Notify</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Stacked toast notification that slides in from the right. Supports RichText. Stacks up to 4 at once. Priority: <code class="ic">"low"</code> | <code class="ic">"normal"</code> | <code class="ic">"high"</code> | <code class="ic">"critical"</code>.</div>
            <div class="api-mini-code">
              <pre><span class="fn">Notify</span>(<span class="str">"✅ Teleport complete"</span>)
<span class="fn">Notify</span>(<span class="str">"⚠️  Server unreachable"</span><span class="op">,</span> <span class="num">6</span><span class="op">,</span> <span class="str">"high"</span>)
<span class="fn">Notify</span>(<span class="str">'🎵  &lt;font color="rgb(255,200,0)"&gt;Neon Drift&lt;/font&gt;'</span><span class="op">,</span> <span class="num">4</span>)</pre>
            </div>
          </div>
        </div>

        <!-- setAccent -->
        <div class="api-card r" id="api-accent">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">setAccent</span>(<span class="param">color3</span>) &nbsp;·&nbsp; <span class="fn-name">startDual</span> &nbsp;·&nbsp; <span class="fn-name">startTriple</span> &nbsp;·&nbsp; <span class="fn-name">startRainbow</span> &nbsp;·&nbsp; <span class="fn-name">stopDynamic</span></div>
            <span class="api-type-pill notify">Theme</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Instantly propagates a new accent to every element across all windows. Sub-pixel threshold prevents redundant repaints. Use the dynamic helpers for animated themes.</div>
            <div class="api-mini-code">
              <pre><span class="fn">setAccent</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">0</span><span class="op">,</span> <span class="num">220</span><span class="op">,</span> <span class="num">180</span>))           <span class="cmt">-- static</span>
<span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">185</span><span class="op">,</span><span class="num">20</span>)<span class="op">,</span> <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">220</span><span class="op">,</span><span class="num">35</span><span class="op">,</span><span class="num">65</span>)) <span class="cmt">-- ping-pong</span>
<span class="fn">startTriple</span>(
    <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">185</span><span class="op">,</span><span class="num">20</span>)<span class="op">,</span>
    <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">220</span><span class="op">,</span><span class="num">35</span><span class="op">,</span><span class="num">65</span>)<span class="op">,</span>
    <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">8</span><span class="op">,</span><span class="num">4</span><span class="op">,</span><span class="num">12</span>)
)
<span class="fn">startRainbow</span>()                                       <span class="cmt">-- full HSV</span>
<span class="fn">stopDynamic</span>()                                        <span class="cmt">-- freeze</span></pre>
            </div>
          </div>
        </div>

      </div>
    </div><!-- end doc-layout -->
  </div>
</section>

<div class="sep"></div>

<!-- ═══ THEMES ════════════════════════════════════════════════════════ -->
<section class="theme-sec" id="themes">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">Theme System</div>
      <h2 class="sh-h"><em>131</em> divine themes.<br>7 mythology realms.</h2>
      <p class="sh-p">Every theme is a dual-phase or triple-phase animated color pair breathing through your UI in real time — one master Heartbeat loop, no lag.</p>
    </div>

    <div class="theme-cats r" data-d="1">
      <div class="tc"><span class="tc-em">⛩️</span><div class="tc-name">Kami</div><div class="tc-count">18 themes · divine gods</div></div>
      <div class="tc"><span class="tc-em">👺</span><div class="tc-name">Yokai</div><div class="tc-count">21 themes · spirits & demons</div></div>
      <div class="tc"><span class="tc-em">🗡️</span><div class="tc-name">Katana</div><div class="tc-count">24 themes · warrior & blade</div></div>
      <div class="tc"><span class="tc-em">💭</span><div class="tc-name">Mugen</div><div class="tc-count">20 themes · dream pastels</div></div>
      <div class="tc"><span class="tc-em">🎆</span><div class="tc-name">Hanabi</div><div class="tc-count">24 themes · fireworks & vivid</div></div>
      <div class="tc"><span class="tc-em">♾️</span><div class="tc-name">Tensei</div><div class="tc-count">21 themes · triple-phase</div></div>
      <div class="tc"><span class="tc-em">🌈</span><div class="tc-name">Taiyo</div><div class="tc-count">3 themes · rainbow spectrum</div></div>
    </div>

    <div style="margin-top:36px">
      <div class="sh-tag r" style="margin-bottom:16px">Theme Engine Functions</div>
      <div class="theme-fns r" data-d="1">
        <div class="tfn"><div class="tfn-name">startDual(c1, c2)</div><div class="tfn-desc">Breathes between two Color3 values in a ping-pong loop. Used by all dual-phase presets.</div></div>
        <div class="tfn"><div class="tfn-name">startTriple(c1, c2, c3)</div><div class="tfn-desc">Steps through three colors in sequence — perfect for Tensei reincarnation themes.</div></div>
        <div class="tfn"><div class="tfn-name">startRainbow()</div><div class="tfn-desc">Full HSV hue rotation completing a spectrum in ~7.7 seconds. Equivalent to Taiyo Spectrum.</div></div>
        <div class="tfn"><div class="tfn-name">stopDynamic()</div><div class="tfn-desc">Freezes the dynamic engine at its current color. Stays static until you call another start function.</div></div>
      </div>
    </div>

    <div class="terminal r" data-d="2" style="margin-top:28px">
      <div class="t-bar">
        <div class="t-dot td-r"></div><div class="t-dot td-y"></div><div class="t-dot td-g"></div>
        <span class="t-title">Applying a theme preset in Settings tab</span>
      </div>
      <div class="t-body">
        <pre><span class="kw">local</span> <span class="sec-label">settingsTab</span> <span class="op">=</span> <span class="hi">win</span><span class="op">:</span><span class="fn">AddTab</span>(<span class="str">"⚙️ Settings"</span>)
<span class="kw">local</span> <span class="hi">sSec</span> <span class="op">=</span> <span class="sec-label">settingsTab</span><span class="op">:</span><span class="fn">AddColumn</span>()<span class="op">:</span><span class="fn">AddSection</span>(<span class="str">"Appearance"</span>)

<span class="kw">local</span> <span class="hi">themeList</span> <span class="op">=</span> <span class="op">{</span><span class="str">"Amaterasu ☀️"</span><span class="op">,</span><span class="str">"Oni Warlord 👹"</span><span class="op">,</span><span class="str">"Muramasa 🗡️"</span><span class="op">,</span><span class="str">"Rainbow 🌈"</span><span class="op">}</span>
<span class="hi">sSec</span><span class="op">:</span><span class="fn">AddDropdown</span>(<span class="str">"Theme"</span><span class="op">,</span> <span class="hi">themeList</span><span class="op">,</span> <span class="num">1</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">i</span>)
    <span class="kw">if</span>     <span class="hi">i</span> <span class="op">==</span> <span class="num">1</span> <span class="kw">then</span> <span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">185</span><span class="op">,</span><span class="num">20</span>)<span class="op">,</span> <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">60</span><span class="op">,</span><span class="num">0</span>))
    <span class="kw">elseif</span> <span class="hi">i</span> <span class="op">==</span> <span class="num">2</span> <span class="kw">then</span> <span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">200</span><span class="op">,</span><span class="num">0</span><span class="op">,</span><span class="num">30</span>)<span class="op">,</span>  <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">60</span><span class="op">,</span><span class="num">0</span><span class="op">,</span><span class="num">0</span>))
    <span class="kw">elseif</span> <span class="hi">i</span> <span class="op">==</span> <span class="num">3</span> <span class="kw">then</span> <span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">220</span><span class="op">,</span><span class="num">0</span><span class="op">,</span><span class="num">40</span>)<span class="op">,</span>  <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">10</span><span class="op">,</span><span class="num">5</span><span class="op">,</span><span class="num">5</span>))
    <span class="kw">elseif</span> <span class="hi">i</span> <span class="op">==</span> <span class="num">4</span> <span class="kw">then</span> <span class="fn">startRainbow</span>()
    <span class="kw">end</span>
<span class="kw">end</span>)</pre>
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
      <p class="sh-p">These systems run automatically the moment you load Amaterasu — no setup needed.</p>
    </div>
    <div class="sys-grid">
      <div class="sy r"><div class="sy-icon">📣</div><div class="sy-name">Event Bus</div><div class="sy-desc"><code class="ic">Emit(name, …)</code> / <code class="ic">On(name, fn)</code> — zero-coupling pub/sub. Dead listeners are pruned on each emit.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🔮</div><div class="sy-name">State Store</div><div class="sy-desc"><code class="ic">Store.set / get / watch</code> — reactive shared state. Components rebuild on change; no polling loops.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">🌀</div><div class="sy-name">Spring Tweens</div><div class="sy-desc">Physics-based <code class="ic">springTween(obj, prop, target, k, d)</code> for scalar, UDim2, and Color3. Frame-rate independent.</div></div>
      <div class="sy r"><div class="sy-icon">⚡</div><div class="sy-name">Master Heartbeat</div><div class="sy-desc">One <code class="ic">RunService.Heartbeat</code> drives spin gradients, FPS tracking, and the dynamic theme engine.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🔒</div><div class="sy-name">Session Guard</div><div class="sy-desc"><code class="ic">getgenv()</code> session key kills all loops from previous executions on re-run. No memory leaks.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">💾</div><div class="sy-name">JSON Storage</div><div class="sy-desc">Executor-agnostic <code class="ic">readfile / writefile</code> with in-memory cache. Themes, keybinds, and custom data persist.</div></div>
      <div class="sy r"><div class="sy-icon">⌨️</div><div class="sy-name">Keybind System</div><div class="sy-desc"><code class="ic">Keybinds.register / setKey / startRebind</code> — live-capture rebinding with storage persistence.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🆔</div><div class="sy-name">HWID Chain</div><div class="sy-desc">8-function fallback covering gethwid, get_hwid_string, syn.get_hwid, hwid, getfingerprint, and more.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">📡</div><div class="sy-name">HTTP Chain</div><div class="sy-desc">Priority POST chain: http_request → syn.request → request → HttpService:RequestAsync.</div></div>
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

    <div class="cta-loadstr r" data-d="1" id="copybtn" role="button" tabindex="0" aria-label="Copy loadstring to clipboard">
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
        <div class="fb-logo">
          <span class="fb-jp">天照</span>
          <span class="fb-en">AMATERASU UI</span>
        </div>
        <p class="fb-desc">Forged in the myth of the sun goddess. The most cinematic Roblox script UI ever made. By Kyo, v15.0.</p>
      </div>
      <div class="footer-cols">
        <div class="fc">
          <h5>Documentation</h5>
          <a href="#quickstart">Quick Start</a>
          <a href="#setup">Setup Guide</a>
          <a href="#architecture">Architecture</a>
          <a href="#api">API Reference</a>
          <a href="#themes">Themes</a>
          <a href="#systems">Core Systems</a>
        </div>
        <div class="fc">
          <h5>Community</h5>
          <a href="#">Discord</a>
          <a href="#">GitHub</a>
          <a href="#">Bug Reports</a>
        </div>
        <div class="fc">
          <h5>Executors</h5>
          <a href="#">Delta v4</a>
          <a href="#">Hydrogen (mobile)</a>
          <a href="#">Synapse Z</a>
          <a href="#">Wave · Fluxus · Xeno</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 <b>Amaterasu UI</b> · by Kyo · 天照大神</span>
      <span>v15.0 · Documentation</span>
    </div>
  </div>
</footer>

<script>
/* ── Cursor (desktop only) ───────────────────────────────────────── */
if(window.matchMedia('(pointer: fine)').matches){
  const cur=document.getElementById('cur'), cur2=document.getElementById('cur2');
  let cx=0,cy=0,cx2=0,cy2=0;
  document.addEventListener('mousemove',e=>{cx=e.clientX;cy=e.clientY});
  (function loop(){
    cx2+=(cx-cx2)*.18; cy2+=(cy-cy2)*.18;
    cur.style.transform=`translate(${cx}px,${cy}px) translate(-50%,-50%)`;
    cur2.style.transform=`translate(${cx2}px,${cy2}px) translate(-50%,-50%)`;
    requestAnimationFrame(loop);
  })();
  document.querySelectorAll('a,button,.api-card-head,.tc,.sy,.arch-node,.tfn,.setup-step,.compat-badge').forEach(el=>{
    el.addEventListener('mouseenter',()=>document.body.classList.add('hov'));
    el.addEventListener('mouseleave',()=>document.body.classList.remove('hov'));
  });
}

/* ── Nav stuck ──────────────────────────────────────────────────── */
const nav=document.getElementById('nav');
window.addEventListener('scroll',()=>{
  nav.classList.toggle('stuck',window.scrollY>30);
},{passive:true});

/* ── Hamburger / Drawer ─────────────────────────────────────────── */
const hamburger=document.getElementById('hamburger');
const drawer=document.getElementById('drawer');
let drawerOpen=false;

function openDrawer(){
  drawerOpen=true;
  hamburger.classList.add('open');
  drawer.classList.add('open');
  hamburger.setAttribute('aria-expanded','true');
  document.body.style.overflow='hidden';
}
function closeDrawer(){
  drawerOpen=false;
  hamburger.classList.remove('open');
  drawer.classList.remove('open');
  hamburger.setAttribute('aria-expanded','false');
  document.body.style.overflow='';
}
hamburger.addEventListener('click',()=>{
  drawerOpen ? closeDrawer() : openDrawer();
});
drawer.addEventListener('click',e=>{
  if(e.target===drawer) closeDrawer();
});
document.addEventListener('keydown',e=>{
  if(e.key==='Escape'&&drawerOpen) closeDrawer();
});

/* ── Background orbs ────────────────────────────────────────────── */
(function(){
  const canvas=document.getElementById('bg');
  const g=canvas.getContext('2d');
  function resize(){canvas.width=window.innerWidth;canvas.height=window.innerHeight}
  resize();
  let resizeTimer;
  window.addEventListener('resize',()=>{
    clearTimeout(resizeTimer);
    resizeTimer=setTimeout(resize,100);
  },{passive:true});
  const W=()=>canvas.width,H=()=>canvas.height;
  const orbs=[
    {x:.20,y:.30,rx:.50,ry:.38,h:28,s:88,l:18,vx:.00010,vy:.00008,rot:0.0010},
    {x:.75,y:.20,rx:.40,ry:.44,h:345,s:82,l:14,vx:-.00008,vy:.00010,rot:-0.0008},
    {x:.45,y:.70,rx:.46,ry:.38,h:265,s:76,l:12,vx:.00006,vy:-.00009,rot:0.0012},
    {x:.80,y:.55,rx:.35,ry:.40,h:22,s:84,l:16,vx:-.00009,vy:.00011,rot:-0.0009},
  ];
  let t=0;
  function draw(){
    g.clearRect(0,0,W(),H());
    t+=.4;
    orbs.forEach(o=>{
      o.x=((o.x+o.vx*Math.sin(t*.011+o.h*.01)+2)%2)-.5;
      o.y=((o.y+o.vy*Math.cos(t*.013+o.s*.01)+2)%2)-.5;
      o.rot+=.00012;
      const cx=o.x*W(),cy=o.y*H(),sc=Math.min(W(),H());
      const p=.92+.08*Math.sin(t*.019+o.h*.12);
      const grad=g.createRadialGradient(cx,cy,0,cx,cy,o.rx*sc*p);
      grad.addColorStop(0,`hsla(${o.h},${o.s}%,${o.l}%,.38)`);
      grad.addColorStop(.5,`hsla(${o.h},${o.s}%,${o.l*.5}%,.10)`);
      grad.addColorStop(1,`hsla(${o.h},${o.s}%,${o.l}%,0)`);
      g.save();g.translate(cx,cy);g.rotate(o.rot*t);
      g.scale(1,o.ry/o.rx);g.beginPath();g.arc(0,0,o.rx*sc*p,0,Math.PI*2);
      g.fillStyle=grad;g.fill();g.restore();
    });
    requestAnimationFrame(draw);
  }
  draw();
})();

/* ── Scroll reveal ──────────────────────────────────────────────── */
const revObs=new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('in')});
},{threshold:.06,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.r').forEach(el=>revObs.observe(el));

/* ── Copy loadstring ────────────────────────────────────────────── */
const copybtn=document.getElementById('copybtn');
const copyicon=document.getElementById('copyicon');
function triggerCopy(){
  const text=document.getElementById('copycode').textContent.trim();
  if(navigator.clipboard){
    navigator.clipboard.writeText(text).catch(()=>{});
  } else {
    const ta=document.createElement('textarea');
    ta.value=text;ta.style.position='fixed';ta.style.opacity='0';
    document.body.appendChild(ta);ta.select();
    try{document.execCommand('copy')}catch(e){}
    document.body.removeChild(ta);
  }
  copyicon.textContent='✓';copyicon.style.color='#4ade80';
  copybtn.classList.add('copy-success');
  setTimeout(()=>{
    copyicon.textContent='⎘';copyicon.style.color='';
    copybtn.classList.remove('copy-success');
  },2200);
}
copybtn.addEventListener('click',triggerCopy);
copybtn.addEventListener('keydown',e=>{if(e.key==='Enter'||e.key===' ')triggerCopy()});

/* ── TOC active highlight ────────────────────────────────────────── */
const tocLinks=document.querySelectorAll('.toc a');
const tocSections=[];
tocLinks.forEach(a=>{
  const id=a.getAttribute('href').slice(1);
  const el=document.getElementById(id);
  if(el) tocSections.push({el,a});
});
window.addEventListener('scroll',()=>{
  let current='';
  tocSections.forEach(({el,a})=>{
    if(el.getBoundingClientRect().top < 150) current=a.getAttribute('href');
  });
  tocLinks.forEach(a=>{
    a.classList.toggle('active',a.getAttribute('href')===current);
  });
},{passive:true});
</script>
</body>
</html>
