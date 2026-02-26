<?php /* Amaterasu UI — Documentation · index.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;font-size:16px}
body{background:var(--ink);color:var(--paper);font-family:var(--f-body);overflow-x:hidden;cursor:none}
::selection{background:rgba(232,160,0,.22);color:var(--paper)}
::-webkit-scrollbar{width:3px}
::-webkit-scrollbar-track{background:var(--ink)}
::-webkit-scrollbar-thumb{background:linear-gradient(var(--ember),var(--gold));border-radius:2px}
a{color:inherit;text-decoration:none}

/* ── CURSOR ──────────────────────────────────────────────────────── */
#cur,#cur2{position:fixed;top:0;left:0;border-radius:50%;pointer-events:none;z-index:9999;transform:translate(-50%,-50%)}
#cur{width:7px;height:7px;background:var(--gold);transition:width .18s,height .18s,background .2s,opacity .2s}
#cur2{width:30px;height:30px;border:1px solid rgba(232,160,0,.4);transition:width .22s var(--ease1),height .22s var(--ease1),border-color .2s}
.hov #cur{width:16px;height:16px;background:var(--ember2)}
.hov #cur2{width:50px;height:50px;border-color:rgba(212,44,20,.45)}

/* ── BG CANVAS ───────────────────────────────────────────────────── */
#bg{position:fixed;inset:0;z-index:0;pointer-events:none;opacity:.55}

/* ── GRAIN ───────────────────────────────────────────────────────── */
body::after{content:'';position:fixed;inset:0;z-index:4;pointer-events:none;
  background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='f'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='200' height='200' filter='url(%23f)' opacity='.022'/%3E%3C/svg%3E");
  mix-blend-mode:overlay;opacity:.6}

/* ── LAYOUT ──────────────────────────────────────────────────────── */
.wrap{max-width:1100px;margin:0 auto;padding:0 44px;position:relative;z-index:2}
@media(max-width:680px){.wrap{padding:0 20px}}
section{position:relative;z-index:2}
.sep{height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.15),transparent);position:relative;z-index:2}

/* ── NAV ─────────────────────────────────────────────────────────── */
nav{position:fixed;top:0;left:0;right:0;z-index:500;transition:background .5s,backdrop-filter .5s,border-color .5s}
nav.stuck{background:rgba(5,3,12,.88);backdrop-filter:blur(24px) saturate(1.6);border-bottom:1px solid rgba(232,160,0,.08)}
.nav-in{display:flex;align-items:center;justify-content:space-between;height:70px}
.logo{display:flex;align-items:center;gap:13px;cursor:none}
.logo-jp{font-family:var(--f-kanji);font-size:22px;font-weight:700;color:var(--gold);text-shadow:0 0 32px rgba(232,160,0,.7)}
.logo-en{font-family:var(--f-title);font-size:11px;font-weight:700;letter-spacing:.3em;color:var(--paper);text-transform:uppercase}
.logo-badge{font-family:var(--f-mono);font-size:9px;background:rgba(232,160,0,.12);color:var(--gold);border:1px solid rgba(232,160,0,.25);border-radius:4px;padding:2px 7px;letter-spacing:.15em}
.nav-links{display:flex;align-items:center;gap:28px}
.nav-a{font-size:12px;font-weight:300;color:var(--paper3);letter-spacing:.04em;cursor:none;transition:color .2s}
.nav-a:hover{color:var(--paper)}
.nav-cta{font-family:var(--f-title);font-size:10px;font-weight:700;letter-spacing:.2em;text-transform:uppercase;background:var(--ember);color:#fff;cursor:none;padding:10px 22px;border-radius:5px;border:none;box-shadow:0 0 28px rgba(212,44,20,.4);transition:transform .22s var(--ease2),box-shadow .22s,background .2s}
.nav-cta:hover{transform:translateY(-2px) scale(1.02);box-shadow:0 0 46px rgba(212,44,20,.65);background:var(--ember2)}
@media(max-width:700px){.nav-a{display:none}.nav-links{gap:12px}}

/* ── BTNS ────────────────────────────────────────────────────────── */
.btn{display:inline-flex;align-items:center;gap:10px;font-family:var(--f-title);font-size:11px;font-weight:700;letter-spacing:.2em;text-transform:uppercase;padding:15px 32px;border-radius:6px;cursor:none;border:none;position:relative;overflow:hidden;transition:transform .22s var(--ease2),box-shadow .22s}
.btn::before{content:'';position:absolute;inset:0;background:linear-gradient(115deg,rgba(255,255,255,.13) 0%,transparent 55%);pointer-events:none}
.btn-fire{background:linear-gradient(140deg,var(--ember) 0%,#7a0d0d 100%);color:#fff;box-shadow:0 0 36px rgba(212,44,20,.36),0 8px 28px rgba(0,0,0,.5)}
.btn-fire:hover{transform:translateY(-3px);box-shadow:0 0 60px rgba(212,44,20,.62),0 16px 44px rgba(0,0,0,.6)}
.btn-ghost{background:transparent;color:var(--paper);border:1px solid rgba(232,160,0,.26)}
.btn-ghost:hover{transform:translateY(-3px);border-color:rgba(232,160,0,.6);box-shadow:0 0 28px rgba(232,160,0,.15)}

/* ── SECTION HEADINGS ────────────────────────────────────────────── */
.sh{margin-bottom:52px}
.sh-tag{display:inline-flex;align-items:center;gap:12px;font-family:var(--f-mono);font-size:10px;letter-spacing:.4em;color:var(--gold);text-transform:uppercase;margin-bottom:16px}
.sh-tag::before{content:'';display:inline-block;width:22px;height:1px;background:currentColor}
.sh-h{font-family:var(--f-title);font-size:clamp(28px,5vw,62px);font-weight:900;line-height:.95;letter-spacing:-.02em;color:var(--paper);margin-bottom:16px}
.sh-h em{font-style:normal;background:linear-gradient(120deg,var(--gold2),var(--gold),var(--ember2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.sh-p{font-size:16px;font-weight:300;color:var(--paper3);line-height:1.8;max-width:480px}

/* ── HERO ─────────────────────────────────────────────────────────── */
.hero{min-height:100svh;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;padding:130px 44px 80px;overflow:hidden;position:relative}
.hero-sun{position:absolute;top:50%;left:50%;transform:translate(-50%,-60%);width:min(600px,80vw);height:min(600px,80vw);border-radius:50%;pointer-events:none;z-index:0;background:radial-gradient(circle,rgba(232,160,0,.15) 0%,rgba(212,44,20,.07) 35%,transparent 70%);animation:sunPulse 8s ease-in-out infinite}
@keyframes sunPulse{0%,100%{transform:translate(-50%,-60%) scale(1);opacity:.8}50%{transform:translate(-50%,-60%) scale(1.08);opacity:1}}
.hero-bg-kanji{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;pointer-events:none;z-index:0;overflow:hidden}
.hero-bg-kanji span{font-family:var(--f-kanji);font-size:clamp(220px,42vw,680px);font-weight:800;line-height:1;user-select:none;background:linear-gradient(180deg,rgba(232,160,0,.055) 0%,rgba(212,44,20,.025) 55%,transparent 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:bgKanjiBreathe 14s ease-in-out infinite;filter:blur(.4px)}
@keyframes bgKanjiBreathe{0%,100%{transform:scale(1) translateY(0)}50%{transform:scale(1.018) translateY(-8px)}}
.hero-content{position:relative;z-index:2}
.hero-eyebrow{font-family:var(--f-mono);font-size:10px;letter-spacing:.42em;color:var(--gold);text-transform:uppercase;margin-bottom:22px;animation:fadeUp .8s .3s var(--ease1) both}
.hero-torii-line{display:flex;align-items:center;justify-content:center;gap:16px;margin-bottom:16px;animation:fadeUp .8s .45s var(--ease1) both}
.htl-bar{flex:1;max-width:80px;height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.5))}
.htl-bar.r{background:linear-gradient(90deg,rgba(232,160,0,.5),transparent)}
.htl-icon{color:var(--gold);font-size:20px;filter:drop-shadow(0 0 12px rgba(232,160,0,.8))}
.hero-h1{font-family:var(--f-title);font-size:clamp(48px,11vw,140px);font-weight:900;line-height:.88;letter-spacing:-.02em;animation:fadeUp 1s .55s var(--ease1) both}
.h1-gradient{background:linear-gradient(150deg,#fff 0%,var(--paper) 30%,var(--gold2) 62%,var(--gold) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.hero-jp-sub{display:block;font-family:var(--f-kanji);font-size:clamp(12px,2vw,20px);font-weight:400;color:var(--gold);letter-spacing:.55em;margin-top:12px;text-shadow:0 0 44px rgba(232,160,0,.5);animation:fadeUp .8s .75s var(--ease1) both}
.hero-desc{font-size:clamp(15px,1.7vw,17px);font-weight:300;color:var(--paper3);line-height:1.8;max-width:480px;margin:28px auto 0;animation:fadeUp .8s .9s var(--ease1) both}
.hero-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:44px;animation:fadeUp .8s 1.05s var(--ease1) both}
.hero-scroll{position:absolute;bottom:28px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:7px;animation:fadeIn 1s 2s var(--ease1) both}
.hs-txt{font-family:var(--f-mono);font-size:9px;letter-spacing:.36em;color:rgba(232,160,0,.4);text-transform:uppercase}
.hs-line{width:1px;height:44px;background:linear-gradient(var(--gold),transparent);animation:scrollDrop 2.4s ease-in-out infinite}
@keyframes scrollDrop{0%,100%{opacity:.2;transform:scaleY(.5) translateY(-8px)}55%{opacity:.9;transform:scaleY(1) translateY(0)}}
@keyframes fadeUp{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
@keyframes fadeIn{from{opacity:0}to{opacity:1}}

/* ── QUICK START ─────────────────────────────────────────────────── */
.qs-sec{padding:100px 0 80px}
.terminal{background:var(--ink2);border:1px solid rgba(232,160,0,.12);border-radius:14px;overflow:hidden;position:relative}
.terminal::before{content:'';position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,rgba(232,160,0,.35),transparent)}
.t-bar{display:flex;align-items:center;gap:8px;padding:12px 18px;background:rgba(232,160,0,.04);border-bottom:1px solid rgba(255,255,255,.05)}
.t-dot{width:11px;height:11px;border-radius:50%}
.td-r{background:#ff5f57}.td-y{background:#febc2e}.td-g{background:#28c840}
.t-title{font-family:var(--f-mono);font-size:10px;color:var(--paper3);letter-spacing:.15em;margin-left:8px}
.t-body{padding:22px 22px 22px;overflow-x:auto}
pre{font-family:var(--f-mono);font-size:12.5px;line-height:1.8;white-space:pre;tab-size:4}
.kw{color:#ff6b9d}      /* keywords: local function end */
.fn{color:var(--gold2)} /* function calls */
.str{color:#7ec8a0}     /* strings */
.num{color:#82cfff}     /* numbers */
.cmt{color:#4a4060;font-style:italic} /* comments */
.op{color:var(--paper3)} /* operators */
.hi{color:#e8d5ff}       /* identifiers */
.acc{color:var(--ember2)} /* accent names */
.sec-label{color:#c792ea} /* section/tab names */

/* ── ARCH ─────────────────────────────────────────────────────────── */
.arch-sec{padding:80px 0 100px}
.arch-tree{display:flex;flex-direction:column;gap:0}
.arch-row{display:flex;align-items:stretch;gap:0}
.arch-indent{width:32px;flex-shrink:0;position:relative}
.arch-indent::before{content:'';position:absolute;left:16px;top:0;bottom:0;width:1px;background:rgba(232,160,0,.18)}
.arch-indent::after{content:'';position:absolute;left:16px;top:50%;width:14px;height:1px;background:rgba(232,160,0,.18)}
.arch-node{flex:1;display:flex;align-items:center;gap:14px;padding:12px 16px;margin:3px 0;border-radius:10px;background:var(--ink2);border:1px solid rgba(255,255,255,.05);transition:border-color .2s,background .2s}
.arch-node:hover{background:var(--ink3);border-color:rgba(232,160,0,.2)}
.arch-icon{font-size:18px;flex-shrink:0}
.arch-name{font-family:var(--f-title);font-size:12px;font-weight:700;letter-spacing:.08em;color:var(--paper)}
.arch-desc{font-size:12px;font-weight:300;color:var(--paper3);line-height:1.55}
.arch-badge{font-family:var(--f-mono);font-size:9px;background:rgba(232,160,0,.1);color:var(--gold);border:1px solid rgba(232,160,0,.22);border-radius:4px;padding:2px 8px;white-space:nowrap;letter-spacing:.1em}
.arch-badge.ember{background:rgba(212,44,20,.12);color:var(--ember2);border-color:rgba(212,44,20,.25)}
.arch-badge.jade{background:rgba(26,184,124,.1);color:var(--jade);border-color:rgba(26,184,124,.25)}
.arch-badge.sky{background:rgba(34,144,255,.1);color:var(--sky);border-color:rgba(34,144,255,.25)}

/* ── API REFERENCE ───────────────────────────────────────────────── */
.api-sec{padding:80px 0 100px}
.api-grid{display:flex;flex-direction:column;gap:10px}
.api-card{background:var(--ink2);border:1px solid rgba(255,255,255,.05);border-radius:14px;overflow:hidden;transition:border-color .25s,background .25s}
.api-card:hover{background:var(--ink3);border-color:rgba(232,160,0,.14)}
.api-card-head{display:flex;align-items:center;justify-content:space-between;padding:18px 22px 14px;cursor:pointer;gap:16px}
.api-sig{font-family:var(--f-mono);font-size:12.5px;color:var(--paper);flex:1;min-width:0}
.api-sig .fn-name{color:var(--gold2)}
.api-sig .param{color:#c792ea}
.api-sig .ret{color:var(--jade)}
.api-type-pill{font-family:var(--f-mono);font-size:9px;background:rgba(232,160,0,.1);color:var(--gold);border:1px solid rgba(232,160,0,.22);border-radius:100px;padding:3px 10px;white-space:nowrap;flex-shrink:0;letter-spacing:.12em}
.api-type-pill.toggle{background:rgba(26,184,124,.1);color:var(--jade);border-color:rgba(26,184,124,.25)}
.api-type-pill.button{background:rgba(212,44,20,.1);color:var(--ember2);border-color:rgba(212,44,20,.25)}
.api-type-pill.win{background:rgba(34,144,255,.1);color:var(--sky);border-color:rgba(34,144,255,.25)}
.api-type-pill.tab{background:rgba(200,120,255,.1);color:#c87aff;border-color:rgba(200,120,255,.25)}
.api-type-pill.notify{background:rgba(255,199,0,.1);color:#ffc700;border-color:rgba(255,199,0,.25)}
.api-body{padding:0 22px 20px;border-top:1px solid rgba(255,255,255,.04)}
.api-desc{font-size:13px;font-weight:300;color:var(--paper3);line-height:1.72;padding-top:14px;margin-bottom:12px}
.api-ret-row{display:flex;align-items:flex-start;gap:10px;margin-bottom:12px}
.api-ret-label{font-family:var(--f-mono);font-size:9px;color:var(--paper3);letter-spacing:.15em;text-transform:uppercase;flex-shrink:0;padding-top:2px}
.api-ret-val{font-family:var(--f-mono);font-size:11px;color:var(--jade);line-height:1.65}
.api-mini-code{background:rgba(0,0,0,.38);border-radius:8px;padding:12px 14px;margin-top:10px}
.api-mini-code pre{font-size:11px;line-height:1.75}

/* params table */
.params-table{width:100%;border-collapse:collapse;margin-top:10px}
.params-table th{font-family:var(--f-mono);font-size:9px;letter-spacing:.18em;text-transform:uppercase;color:var(--paper3);padding:6px 10px;text-align:left;border-bottom:1px solid rgba(255,255,255,.06)}
.params-table td{font-family:var(--f-mono);font-size:11px;color:var(--paper3);padding:7px 10px;border-bottom:1px solid rgba(255,255,255,.03);vertical-align:top}
.params-table td:first-child{color:var(--paper);font-weight:500}
.params-table td:nth-child(2){color:#c792ea}
.params-table td:nth-child(3){color:var(--paper3);font-size:10.5px}

/* ── THEMES ───────────────────────────────────────────────────────── */
.theme-sec{padding:80px 0 100px}
.theme-cats{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;margin-top:36px}
@media(max-width:900px){.theme-cats{grid-template-columns:repeat(3,1fr)}}
@media(max-width:560px){.theme-cats{grid-template-columns:repeat(2,1fr)}}
.tc{background:var(--ink2);border:1px solid rgba(255,255,255,.05);border-radius:12px;padding:16px 14px;text-align:center;transition:border-color .25s,background .25s,transform .25s var(--ease2)}
.tc:hover{background:var(--ink3);border-color:rgba(232,160,0,.22);transform:translateY(-3px)}
.tc-em{font-size:22px;display:block;margin-bottom:8px}
.tc-name{font-family:var(--f-title);font-size:11px;font-weight:700;letter-spacing:.06em;color:var(--paper);margin-bottom:4px}
.tc-count{font-family:var(--f-mono);font-size:9px;color:var(--paper3);letter-spacing:.12em}
.theme-fns{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-top:14px}
@media(max-width:640px){.theme-fns{grid-template-columns:1fr}}
.tfn{background:var(--ink2);border:1px solid rgba(255,255,255,.05);border-radius:10px;padding:14px 16px;border-left:2px solid var(--gold)}
.tfn:hover{border-left-color:var(--ember);background:var(--ink3)}
.tfn-name{font-family:var(--f-mono);font-size:11.5px;color:var(--gold2);margin-bottom:4px}
.tfn-desc{font-size:12px;font-weight:300;color:var(--paper3);line-height:1.6}

/* ── SYSTEMS ─────────────────────────────────────────────────────── */
.sys-sec{padding:80px 0 100px}
.sys-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:8px}
@media(max-width:820px){.sys-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:480px){.sys-grid{grid-template-columns:1fr}}
.sy{background:var(--ink2);border-radius:12px;padding:22px 20px;border:1px solid rgba(255,255,255,.05);border-left:2px solid var(--gold);transition:background .25s,border-left-color .25s,transform .25s var(--ease1)}
.sy:hover{background:var(--ink3);border-left-color:var(--ember);transform:translateX(4px)}
.sy-icon{font-size:18px;margin-bottom:10px}
.sy-name{font-family:var(--f-title);font-size:12px;font-weight:700;letter-spacing:.06em;color:var(--paper);margin-bottom:5px}
.sy-desc{font-size:12px;font-weight:300;color:var(--paper3);line-height:1.65}

/* ── CTA ─────────────────────────────────────────────────────────── */
.cta-sec{padding:140px 0 160px;text-align:center;position:relative;overflow:hidden}
.cta-flare{position:absolute;inset:0;pointer-events:none;background:radial-gradient(ellipse 70% 60% at 50% 50%,rgba(212,44,20,.12) 0%,transparent 70%)}
.cta-wm{font-family:var(--f-kanji);font-size:clamp(80px,16vw,180px);font-weight:800;color:rgba(232,160,0,.04);line-height:1;display:block;margin-bottom:-20px;pointer-events:none;user-select:none;animation:bgKanjiBreathe 10s ease-in-out infinite}
.cta-h{font-family:var(--f-title);font-size:clamp(32px,6vw,76px);font-weight:900;line-height:.93;letter-spacing:-.02em;color:var(--paper);margin-bottom:16px;position:relative;z-index:1}
.cta-h span{background:linear-gradient(120deg,var(--gold2),var(--gold),var(--ember2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.cta-sub{font-size:16px;font-weight:300;color:var(--paper3);margin-bottom:48px;position:relative;z-index:1}
.cta-loadstr{display:inline-flex;align-items:center;gap:14px;cursor:none;background:var(--ink2);border:1px solid rgba(232,160,0,.2);padding:14px 24px;border-radius:10px;font-family:var(--f-mono);font-size:11px;color:var(--gold);position:relative;z-index:1;margin-bottom:40px;max-width:calc(100vw - 44px);overflow:hidden;transition:border-color .2s,background .2s}
.cta-loadstr:hover{border-color:rgba(232,160,0,.5);background:rgba(232,160,0,.06)}
.cls-code{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.cls-icon{flex-shrink:0;color:var(--paper3);transition:color .2s;font-size:13px}
.cta-loadstr:hover .cls-icon{color:var(--gold)}
.cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}

/* ── FOOTER ──────────────────────────────────────────────────────── */
footer{background:var(--ink1);border-top:1px solid rgba(255,255,255,.04);padding:56px 0 36px;position:relative;z-index:2}
.footer-top{display:flex;justify-content:space-between;align-items:flex-start;gap:40px;flex-wrap:wrap;margin-bottom:44px}
.fb{max-width:260px}
.fb-logo{display:flex;align-items:center;gap:12px;margin-bottom:12px}
.fb-jp{font-family:var(--f-kanji);font-size:24px;font-weight:700;color:var(--gold);text-shadow:0 0 22px rgba(232,160,0,.5)}
.fb-en{font-family:var(--f-title);font-size:12px;font-weight:700;letter-spacing:.22em;color:var(--paper)}
.fb-desc{font-size:13px;font-weight:300;color:var(--paper3);line-height:1.7;opacity:.7}
.footer-cols{display:flex;gap:50px;flex-wrap:wrap}
.fc h5{font-family:var(--f-title);font-size:10px;letter-spacing:.24em;color:var(--paper);text-transform:uppercase;margin-bottom:16px}
.fc a{display:block;font-size:12px;font-weight:300;color:var(--paper3);margin-bottom:10px;cursor:none;transition:color .2s;opacity:.7}
.fc a:hover{color:var(--gold);opacity:1}
.footer-bottom{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;padding-top:24px;border-top:1px solid rgba(255,255,255,.04)}
.footer-bottom span{font-family:var(--f-mono);font-size:10px;color:var(--paper3);opacity:.5}
.footer-bottom b{color:var(--gold);opacity:1}

/* ── REVEAL ──────────────────────────────────────────────────────── */
.r{opacity:0;transform:translateY(24px);transition:opacity .7s var(--ease1),transform .7s var(--ease1)}
.r.in{opacity:1;transform:translateY(0)}
.r[data-d="1"]{transition-delay:.1s}.r[data-d="2"]{transition-delay:.2s}.r[data-d="3"]{transition-delay:.3s}

/* ── INLINE TAG ──────────────────────────────────────────────────── */
.tag{font-family:var(--f-mono);font-size:10px;background:rgba(232,160,0,.1);color:var(--gold);border:1px solid rgba(232,160,0,.22);border-radius:4px;padding:2px 8px;letter-spacing:.1em;white-space:nowrap}
.tag.ember{background:rgba(212,44,20,.1);color:var(--ember2);border-color:rgba(212,44,20,.25)}

/* sidebar TOC (hidden on mobile) */
@media(min-width:1060px){
  .doc-layout{display:grid;grid-template-columns:220px 1fr;gap:40px;align-items:start}
  .toc{position:sticky;top:90px;background:var(--ink2);border:1px solid rgba(255,255,255,.06);border-radius:12px;padding:20px;max-height:calc(100vh - 110px);overflow-y:auto}
  .toc::-webkit-scrollbar{width:2px}
  .toc::-webkit-scrollbar-thumb{background:var(--gold);border-radius:2px}
  .toc h6{font-family:var(--f-mono);font-size:9px;letter-spacing:.28em;color:var(--paper3);text-transform:uppercase;margin-bottom:14px;padding-bottom:8px;border-bottom:1px solid rgba(255,255,255,.06)}
  .toc a{display:block;font-size:11.5px;font-weight:300;color:var(--paper3);padding:5px 0;border-left:2px solid transparent;padding-left:10px;transition:color .18s,border-color .18s;line-height:1.4;cursor:none}
  .toc a:hover{color:var(--gold);border-left-color:var(--gold)}
  .toc a.active{color:var(--paper);border-left-color:var(--ember)}
  .toc .toc-group{margin-bottom:12px}
  .toc .toc-group-label{font-family:var(--f-mono);font-size:9px;letter-spacing:.2em;color:rgba(232,160,0,.5);text-transform:uppercase;margin:10px 0 4px;padding-left:10px}
}
@media(max-width:1059px){.toc{display:none}}
</style>
</head>
<body>
<div id="cur"></div>
<div id="cur2"></div>
<canvas id="bg"></canvas>

<!-- ═══ NAV ══════════════════════════════════════════════════════════ -->
<nav id="nav">
  <div class="wrap nav-in">
    <a class="logo" href="#top">
      <span class="logo-jp">天</span>
      <span class="logo-en">Amaterasu UI</span>
      <span class="logo-badge">DOCS</span>
    </a>
    <div class="nav-links">
      <a class="nav-a" href="#quickstart">Quick Start</a>
      <a class="nav-a" href="#architecture">Architecture</a>
      <a class="nav-a" href="#api">API</a>
      <a class="nav-a" href="#themes">Themes</a>
      <a class="nav-cta" href="#get">Get Script</a>
    </div>
  </div>
</nav>

<!-- ═══ HERO ═════════════════════════════════════════════════════════ -->
<section class="hero" id="top">
  <div class="hero-bg-kanji"><span>天照</span></div>
  <div class="hero-sun"></div>
  <div class="hero-content">
    <p class="hero-eyebrow">Developer Documentation · v14.0 · by Kyo</p>
    <div class="hero-torii-line">
      <span class="htl-bar"></span>
      <span class="htl-icon">⛩️</span>
      <span class="htl-bar r"></span>
    </div>
    <h1 class="hero-h1">
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
  <div class="hero-scroll"><span class="hs-txt">Scroll</span><div class="hs-line"></div></div>
</section>

<div class="sep"></div>

<!-- ═══ QUICK START ══════════════════════════════════════════════════ -->
<section class="qs-sec" id="quickstart">
  <div class="wrap">
    <div class="sh r">
      <div class="sh-tag">Quick Start</div>
      <h2 class="sh-h">From zero to <em>menu</em><br>in 30 lines.</h2>
      <p class="sh-p">Paste the loadstring, create a ScreenGui, call <code style="font-family:var(--f-mono);font-size:13px;color:var(--gold2)">Lib.Window</code>, and start adding elements. That's all it takes.</p>
    </div>
    <div class="terminal r" data-d="1">
      <div class="t-bar">
        <div class="t-dot td-r"></div><div class="t-dot td-y"></div><div class="t-dot td-g"></div>
        <span class="t-title">my_script.lua — Full Quick Start</span>
      </div>
      <div class="t-body">
        <pre><span class="cmt">-- ① Load Amaterasu UI (paste your actual loadstring here)</span>
<span class="fn">loadstring</span>(<span class="hi">game</span><span class="op">:</span><span class="fn">HttpGet</span>(<span class="str">"https://raw.githubusercontent.com/YOU/amaterasu/main/load.lua"</span>))()

<span class="cmt">-- ② Build the ScreenGui</span>
<span class="kw">local</span> <span class="hi">CoreGui</span> <span class="op">=</span> <span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"CoreGui"</span>)
<span class="kw">local</span> <span class="hi">UIS</span>     <span class="op">=</span> <span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"UserInputService"</span>)
<span class="kw">local</span> <span class="hi">Players</span> <span class="op">=</span> <span class="hi">game</span><span class="op">:</span><span class="fn">GetService</span>(<span class="str">"Players"</span>)
<span class="kw">local</span> <span class="hi">LP</span>      <span class="op">=</span> <span class="hi">Players</span><span class="op">.</span><span class="hi">LocalPlayer</span>

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

<span class="cmt">-- ⑤ Add elements to the section</span>
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

<span class="cmt">-- ⑥ Toggle the window open/close with a keybind</span>
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
      <p class="sh-p">Every element lives inside a Section, which lives inside a Column, which lives inside a Tab, which lives inside the Window. Build top-down.</p>
    </div>
    <div class="arch-tree r" data-d="1">
      <!-- Window -->
      <div class="arch-row">
        <div class="arch-node">
          <span class="arch-icon">🪟</span>
          <div style="flex:1">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:4px">
              <div class="arch-name">Lib.Window(sg, title, w, h)</div>
              <span class="arch-badge win">win</span>
            </div>
            <div class="arch-desc">The root draggable panel. Spawns the frosted-glass body, spinning gradient border, title bar with macOS orbs, and the bottom tab bar. All other objects nest inside it.</div>
          </div>
        </div>
      </div>
      <!-- Tab -->
      <div class="arch-row">
        <div class="arch-indent"></div>
        <div class="arch-node">
          <span class="arch-icon">📑</span>
          <div style="flex:1">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:4px">
              <div class="arch-name">win:AddTab(label)</div>
              <span class="arch-badge tab">tab</span>
            </div>
            <div class="arch-desc">Adds a button to the bottom shrine-bar and a full-width scrollable page. You can add as many tabs as you need — the bar rebalances itself automatically.</div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <div class="arch-row">
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-node">
          <span class="arch-icon">📐</span>
          <div style="flex:1">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:4px">
              <div class="arch-name">tab:AddColumn()</div>
              <span class="arch-badge">col</span>
            </div>
            <div class="arch-desc">Creates a vertical scrollable column inside the tab. Each call divides the available width equally — one call gives full-width, two calls give a 50/50 split for a two-pane layout.</div>
          </div>
        </div>
      </div>
      <!-- Section -->
      <div class="arch-row">
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-indent"></div>
        <div class="arch-node">
          <span class="arch-icon">🗂️</span>
          <div style="flex:1">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:4px">
              <div class="arch-name">col:AddSection(title)</div>
              <span class="arch-badge jade">sec</span>
            </div>
            <div class="arch-desc">A collapsible frosted-glass card with an accent stripe header. This is where all elements (toggles, buttons, sliders…) are added. Pass an empty string for a headerless section.</div>
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
          <span class="arch-icon">⚙️</span>
          <div style="flex:1">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:4px">
              <div class="arch-name">sec:AddToggle / AddButton / AddSlider / …</div>
              <span class="arch-badge ember">element</span>
            </div>
            <div class="arch-desc">Individual UI components. Each returns a control object so you can read/write its value programmatically after creation. See the full API below.</div>
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
      <!-- TOC -->
      <nav class="toc">
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
          <a href="#api-separator">AddSeparator</a>
          <a href="#api-divider">AddDivider</a>
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
            <div class="api-desc">Creates and returns the root window object. The window starts hidden off-screen and slides in on the first <code style="font-family:var(--f-mono);color:var(--gold2);font-size:11px">:Toggle()</code> call. All tabs, columns, sections, and elements are built from the returned object.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>sg</td><td>ScreenGui</td><td>The parent ScreenGui (parent it to CoreGui before passing)</td></tr>
              <tr><td>title</td><td>string</td><td>Text shown in the top bar pill</td></tr>
              <tr><td>w</td><td>number?</td><td>Window width in pixels (default 390)</td></tr>
              <tr><td>h</td><td>number?</td><td>Window height in pixels (default 320)</td></tr>
            </table>
          </div>
        </div>

        <!-- AddTab -->
        <div class="api-card r" id="api-addtab">
          <div class="api-card-head">
            <div class="api-sig"><span class="fn-name">win:AddTab</span>(<span class="param">label</span>) <span style="color:var(--paper3)">→</span> <span class="ret">tab</span></div>
            <span class="api-type-pill tab">Tab</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Appends a new tab to the bottom shrine-bar and returns a tab object. Call <code style="font-family:var(--f-mono);color:var(--gold2);font-size:11px">:AddColumn()</code> on the returned tab to start building content. Use emoji + text for a polished label (e.g. <code style="font-family:var(--f-mono);color:var(--jade);font-size:11px">"⚔️ Combat"</code>).</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>label</td><td>string</td><td>Text (+ optional emoji) shown in the tab button</td></tr>
            </table>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Methods</span>
              <span class="api-ret-val">tab:Select() — programmatically switch to this tab<br>tab:LazyBuild(fn) — defer content build until first open (faster startup)</span>
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
            <div class="api-desc"><b style="color:var(--paper)">Toggle</b> — Animates the window open or closed with a spring scale. Wire it to your keybind. <b style="color:var(--paper)">SetTitle</b> — Updates the top-bar text at any time. <b style="color:var(--paper)">GetTab</b> — Returns a tab object by its label (case-insensitive) so you can call <code style="font-family:var(--f-mono);color:var(--jade);font-size:11px">:Select()</code> on it programmatically.</div>
            <div class="api-mini-code">
              <pre><span class="cmt">-- Toggle on RightControl</span>
<span class="hi">UIS</span><span class="op">.</span><span class="hi">InputBegan</span><span class="op">:</span><span class="fn">Connect</span>(<span class="kw">function</span>(<span class="hi">i</span><span class="op">,</span><span class="hi">gp</span>)
    <span class="kw">if</span> <span class="hi">gp</span> <span class="kw">then</span> <span class="kw">return</span> <span class="kw">end</span>
    <span class="kw">if</span> <span class="hi">i</span><span class="op">.</span><span class="hi">KeyCode</span> <span class="op">==</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">RightControl</span> <span class="kw">then</span>
        <span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>()
    <span class="kw">end</span>
<span class="kw">end</span>)

<span class="cmt">-- Navigate to a tab from code</span>
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
            <div class="api-desc">A sacred pill switch with a bounce-spring knob animation and ember glow ring. The callback fires on every user interaction with the new boolean value. Returns a control object to read/set the value in code.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>label</td><td>string</td><td>Label shown to the left of the pill</td></tr>
              <tr><td>default</td><td>bool</td><td>Initial state (true = on)</td></tr>
              <tr><td>callback</td><td>fn(v:bool)?</td><td>Called with the new state on every flip</td></tr>
            </table>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">tog:Set(v, silent?) — set value; silent=true skips callback<br>tog:Get() → bool — read current value</span>
            </div>
            <div class="api-mini-code">
              <pre><span class="kw">local</span> <span class="hi">godmode</span> <span class="op">=</span> <span class="hi">sec</span><span class="op">:</span><span class="fn">AddToggle</span>(<span class="str">"God Mode"</span><span class="op">,</span> <span class="kw">false</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">v</span>)
    <span class="fn">Notify</span>(<span class="str">"God Mode "</span> <span class="op">..</span> (<span class="hi">v</span> <span class="kw">and</span> <span class="str">"🟢 ON"</span> <span class="kw">or</span> <span class="str">"🔴 OFF"</span>))
<span class="kw">end</span>)

<span class="cmt">-- Read value elsewhere</span>
<span class="kw">if</span> <span class="hi">godmode</span><span class="op">:</span><span class="fn">Get</span>() <span class="kw">then</span> <span class="cmt">--[[…]]</span> <span class="kw">end</span>

<span class="cmt">-- Force ON silently (no callback fire)</span>
<span class="hi">godmode</span><span class="op">:</span><span class="fn">Set</span>(<span class="kw">true</span><span class="op">,</span> <span class="kw">true</span>)</pre>
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
            <div class="api-desc">A full-width button with a solar-sweep hover effect and material ripple. The callback is wrapped in <code style="font-family:var(--f-mono);font-size:11px;color:var(--jade)">task.spawn</code> automatically so long operations won't freeze the UI.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>label</td><td>string</td><td>Button text (emoji supported)</td></tr>
              <tr><td>callback</td><td>fn()?</td><td>Called on click, in a new thread</td></tr>
            </table>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">bObj:SetText(t) — change label dynamically<br>bObj:SetEnabled(v) — grey out / re-enable the button</span>
            </div>
            <div class="api-mini-code">
              <pre><span class="kw">local</span> <span class="hi">healBtn</span> <span class="op">=</span> <span class="hi">sec</span><span class="op">:</span><span class="fn">AddButton</span>(<span class="str">"💊 Heal Now"</span><span class="op">,</span> <span class="kw">function</span>()
    <span class="hi">healBtn</span><span class="op">:</span><span class="fn">SetText</span>(<span class="str">"Healing…"</span>)
    <span class="hi">healBtn</span><span class="op">:</span><span class="fn">SetEnabled</span>(<span class="kw">false</span>)
    <span class="fn">task</span><span class="op">.</span><span class="fn">wait</span>(<span class="num">1.5</span>)   <span class="cmt">-- your heal logic here</span>
    <span class="hi">healBtn</span><span class="op">:</span><span class="fn">SetText</span>(<span class="str">"💊 Heal Now"</span>)
    <span class="hi">healBtn</span><span class="op">:</span><span class="fn">SetEnabled</span>(<span class="kw">true</span>)
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
            <div class="api-desc">A 44px touch-target slider with an accent-filled track, value badge, and halo thumb. Integer ranges snap to whole numbers; float ranges snap to 2 decimal places. The callback is throttled during drag (fires max every 50ms) and always fires once on release.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>label</td><td>string</td><td>Label shown above the track</td></tr>
              <tr><td>min / max</td><td>number</td><td>Range bounds (int or float)</td></tr>
              <tr><td>default</td><td>number</td><td>Starting value</td></tr>
              <tr><td>callback</td><td>fn(v:number)?</td><td>Called with new value during/after drag</td></tr>
            </table>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">slid:Set(v) — set value and fire callback<br>slid:Get() → number — read current value</span>
            </div>
            <div class="api-mini-code">
              <pre><span class="kw">local</span> <span class="hi">speedSlider</span> <span class="op">=</span> <span class="hi">sec</span><span class="op">:</span><span class="fn">AddSlider</span>(<span class="str">"Walk Speed"</span><span class="op">,</span> <span class="num">1</span><span class="op">,</span> <span class="num">250</span><span class="op">,</span> <span class="num">16</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">v</span>)
    <span class="kw">local</span> <span class="hi">hum</span> <span class="op">=</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span> <span class="kw">and</span> <span class="hi">LP</span><span class="op">.</span><span class="hi">Character</span><span class="op">:</span><span class="fn">FindFirstChild</span>(<span class="str">"Humanoid"</span>)
    <span class="kw">if</span> <span class="hi">hum</span> <span class="kw">then</span> <span class="hi">hum</span><span class="op">.</span><span class="hi">WalkSpeed</span> <span class="op">=</span> <span class="hi">v</span> <span class="kw">end</span>
<span class="kw">end</span>)

<span class="cmt">-- Reset to default programmatically</span>
<span class="hi">speedSlider</span><span class="op">:</span><span class="fn">Set</span>(<span class="num">16</span>)</pre>
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
            <div class="api-desc">A compact ‹ VALUE › pill picker that cycles through an array. Great for a small fixed set of options where a full dropdown would be overkill (e.g. aura size, speed tier, mode). The callback receives the selected index.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>label</td><td>string</td><td>Label to the left of the picker pill</td></tr>
              <tr><td>options</td><td>string[]</td><td>Array of option strings to cycle through</td></tr>
              <tr><td>defIdx</td><td>number</td><td>Index of the default selection (1-based)</td></tr>
              <tr><td>callback</td><td>fn(i:number)?</td><td>Called with the new index on every change</td></tr>
            </table>
            <div class="api-mini-code">
              <pre><span class="hi">sec</span><span class="op">:</span><span class="fn">AddCycle</span>(<span class="str">"Aura Size"</span><span class="op">,</span> <span class="op">{</span><span class="str">"Small"</span><span class="op">,</span><span class="str">"Medium"</span><span class="op">,</span><span class="str">"Large"</span><span class="op">,</span><span class="str">"XL"</span><span class="op">},</span> <span class="num">1</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">i</span>)
    <span class="fn">Notify</span>(<span class="str">"Aura: "</span> <span class="op">..</span> <span class="op">{</span><span class="str">"Small"</span><span class="op">,</span><span class="str">"Medium"</span><span class="op">,</span><span class="str">"Large"</span><span class="op">,</span><span class="str">"XL"</span><span class="op">}</span><span class="op">[</span><span class="hi">i</span><span class="op">]</span>)
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
            <div class="api-desc">An animated expand/collapse torii list. Clicking the header accordion-opens a list of all options; selecting one closes it and fires the callback with the chosen index. Better than Cycle when you have 5+ options or long labels.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>label</td><td>string</td><td>Prefix shown in the header (e.g. "Theme")</td></tr>
              <tr><td>options</td><td>string[]</td><td>List of option strings</td></tr>
              <tr><td>defIdx</td><td>number</td><td>Default selected index (1-based)</td></tr>
              <tr><td>callback</td><td>fn(i:number)?</td><td>Called with the selected index</td></tr>
            </table>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">drop:Get() → number — current index<br>drop:Set(i) — change selection without callback</span>
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
            <div class="api-desc">A full inline HSV color picker with a saturation/value square, hue strip, and hex input. Expands below its header chip like a dropdown. The callback fires on every color change with the new Color3 value.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>label</td><td>string</td><td>Label text in the header row</td></tr>
              <tr><td>defaultColor</td><td>Color3</td><td>Starting color</td></tr>
              <tr><td>callback</td><td>fn(c:Color3)?</td><td>Called with the new Color3 on every change</td></tr>
            </table>
            <div class="api-mini-code">
              <pre><span class="hi">sec</span><span class="op">:</span><span class="fn">AddColorPicker</span>(<span class="str">"Trail Color"</span><span class="op">,</span> <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">100</span><span class="op">,</span><span class="num">0</span>)<span class="op">,</span> <span class="kw">function</span>(<span class="hi">c</span>)
    <span class="cmt">-- c is a Color3, e.g. apply to a beam or highlight</span>
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
            <div class="api-desc">A rebindable key chip. Clicking the chip enters live-capture mode (shows "…") and the next key pressed becomes the new binding. If <code style="font-family:var(--f-mono);font-size:11px;color:var(--jade)">name</code> is provided, the bind registers with the global Keybinds system and persists across sessions. Pass <code style="font-family:var(--f-mono);font-size:11px;color:#c792ea">nil</code> for name to use a standalone non-persisted bind.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>label</td><td>string</td><td>Label shown to the left of the chip</td></tr>
              <tr><td>defaultKey</td><td>Enum.KeyCode</td><td>Default key (e.g. Enum.KeyCode.RightControl)</td></tr>
              <tr><td>name</td><td>string?</td><td>Keybind system name for persistence; nil = standalone</td></tr>
              <tr><td>callback</td><td>fn(key)?</td><td>Called when the bound key is pressed (standalone mode)</td></tr>
            </table>
            <div class="api-mini-code">
              <pre><span class="cmt">-- Standalone keybind (not persisted)</span>
<span class="hi">sec</span><span class="op">:</span><span class="fn">AddKeybind</span>(<span class="str">"Menu Toggle"</span><span class="op">,</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">RightControl</span><span class="op">,</span> <span class="kw">nil</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">key</span>)
    <span class="hi">win</span><span class="op">:</span><span class="fn">Toggle</span>()
<span class="kw">end</span>)

<span class="cmt">-- Persisted keybind (saves to file)</span>
<span class="hi">sec</span><span class="op">:</span><span class="fn">AddKeybind</span>(<span class="str">"Teleport Up"</span><span class="op">,</span> <span class="hi">Enum</span><span class="op">.</span><span class="hi">KeyCode</span><span class="op">.</span><span class="hi">T</span><span class="op">,</span> <span class="str">"tpUp"</span><span class="op">,</span> <span class="kw">function</span>()
    <span class="cmt">-- your logic</span>
<span class="kw">end</span>)</pre>
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
            <div class="api-desc">A row of sacred chip toggles that can each be independently on or off. Perfect for selecting multiple modifiers or modes simultaneously. The callback fires with a boolean array of all states.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>options</td><td>string[]</td><td>Array of chip labels</td></tr>
              <tr><td>defaults</td><td>bool[]?</td><td>Initial states for each chip (nil = all false)</td></tr>
              <tr><td>callback</td><td>fn(states:bool[])?</td><td>Called with all states on any change</td></tr>
            </table>
            <div class="api-ret-row" style="margin-top:12px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">mt:Set(idx, val, silent?) — toggle one chip<br>mt:GetAll() → bool[] — all current states</span>
            </div>
            <div class="api-mini-code">
              <pre><span class="hi">sec</span><span class="op">:</span><span class="fn">AddMultiToggle</span>(<span class="op">{</span><span class="str">"Head"</span><span class="op">,</span><span class="str">"Body"</span><span class="op">,</span><span class="str">"Legs"</span><span class="op">},</span> <span class="op">{</span><span class="kw">true</span><span class="op">,</span><span class="kw">false</span><span class="op">,</span><span class="kw">false</span><span class="op">},</span> <span class="kw">function</span>(<span class="hi">states</span>)
    <span class="fn">print</span>(<span class="str">"Head:"</span><span class="op">,</span> <span class="hi">states</span><span class="op">[</span><span class="num">1</span><span class="op">],</span> <span class="str">"Body:"</span><span class="op">,</span> <span class="hi">states</span><span class="op">[</span><span class="num">2</span><span class="op">],</span> <span class="str">"Legs:"</span><span class="op">,</span> <span class="hi">states</span><span class="op">[</span><span class="num">3</span><span class="op">]</span>)
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
            <div class="api-desc">A bordered text input box with an accent focus ring. The callback fires when the user presses Enter. Label is optional — pass an empty string to skip it.</div>
            <div class="api-ret-row" style="margin-top:10px">
              <span class="api-ret-label">Returns</span>
              <span class="api-ret-val">inp:Get() → string — current text<br>inp:Set(v) — set the text value</span>
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
            <div class="api-desc"><b style="color:var(--paper)">AddLabel</b> — Renders a static text row. Supports RichText markup (e.g. <code style="font-family:var(--f-mono);font-size:11px;color:var(--jade)">&lt;font color="…"&gt;</code>). Optional size arg sets font size (default 10). <b style="color:var(--paper)">AddSeparator</b> — A thin horizontal rule with a 3px spacer below. <b style="color:var(--paper)">AddDivider</b> — A labeled text divider with accent-tinted lines on both sides; pass empty string for a plain line.</div>
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
            <div class="api-desc">Displays a stacked toast notification that slides in from the right. Supports RichText for coloured text. Stacks up to 4 at once — older ones are evicted by higher-priority notifications. The accent stripe and glass panel follow the current theme automatically.</div>
            <table class="params-table">
              <tr><th>Param</th><th>Type</th><th>Description</th></tr>
              <tr><td>text</td><td>string</td><td>Message (RichText supported)</td></tr>
              <tr><td>dur</td><td>number?</td><td>Seconds before auto-dismiss (default 4.5)</td></tr>
              <tr><td>priority</td><td>string?</td><td>"low" | "normal" | "high" | "critical" — controls eviction order</td></tr>
            </table>
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
            <div class="api-sig"><span class="fn-name">setAccent</span>(<span class="param">color3</span>) &nbsp;·&nbsp; via theme presets below</div>
            <span class="api-type-pill notify">Theme</span>
          </div>
          <div class="api-body">
            <div class="api-desc">Immediately propagates a new accent color to every element in every window — borders, toggles, sliders, tabs, notifications, everything. Sub-pixel perceptual threshold prevents redundant repaints. You can call it directly or use the theme engine functions below.</div>
            <div class="api-mini-code">
              <pre><span class="cmt">-- Raw color set</span>
<span class="fn">setAccent</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">0</span><span class="op">,</span> <span class="num">220</span><span class="op">,</span> <span class="num">180</span>))

<span class="cmt">-- Dual-phase animated cycle (breathes between two colors)</span>
<span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">185</span><span class="op">,</span><span class="num">20</span>)<span class="op">,</span> <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">220</span><span class="op">,</span><span class="num">35</span><span class="op">,</span><span class="num">65</span>))

<span class="cmt">-- Triple-phase animated cycle (3 colors, continuous loop)</span>
<span class="fn">startTriple</span>(
    <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">185</span><span class="op">,</span><span class="num">20</span>)<span class="op">,</span>  <span class="cmt">-- gold</span>
    <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">220</span><span class="op">,</span><span class="num">35</span><span class="op">,</span><span class="num">65</span>)<span class="op">,</span>   <span class="cmt">-- ember</span>
    <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">8</span><span class="op">,</span><span class="num">4</span><span class="op">,</span><span class="num">12</span>)        <span class="cmt">-- void</span>
)

<span class="cmt">-- Full rainbow</span>
<span class="fn">startRainbow</span>()

<span class="cmt">-- Stop any dynamic mode (snap to static)</span>
<span class="fn">stopDynamic</span>()</pre>
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
      <p class="sh-p">Every theme is a dual-phase or triple-phase animated color pair that breathes through your entire UI in real time — no restart, no lag, all driven by the single master Heartbeat loop.</p>
    </div>

    <div class="theme-cats r" data-d="1">
      <div class="tc"><span class="tc-em">⛩️</span><div class="tc-name">Kami</div><div class="tc-count">18 themes · divine gods</div></div>
      <div class="tc"><span class="tc-em">👺</span><div class="tc-name">Yokai</div><div class="tc-count">21 themes · spirits & demons</div></div>
      <div class="tc"><span class="tc-em">🗡️</span><div class="tc-name">Katana</div><div class="tc-count">24 themes · warrior & blade</div></div>
      <div class="tc"><span class="tc-em">💭</span><div class="tc-name">Mugen</div><div class="tc-count">20 themes · dream pastels</div></div>
      <div class="tc"><span class="tc-em">🎆</span><div class="tc-name">Hanabi</div><div class="tc-count">24 themes · fireworks & vivid</div></div>
      <div class="tc"><span class="tc-em">♾️</span><div class="tc-name">Tensei</div><div class="tc-count">21 themes · triple-phase reincarnation</div></div>
      <div class="tc"><span class="tc-em">🌈</span><div class="tc-name">Taiyo</div><div class="tc-count">3 themes · rainbow spectrum</div></div>
    </div>

    <div style="margin-top:36px">
      <div class="sh-tag r" style="margin-bottom:16px">Theme Engine Functions</div>
      <div class="theme-fns r" data-d="1">
        <div class="tfn"><div class="tfn-name">startDual(c1, c2)</div><div class="tfn-desc">Breathes smoothly between two Color3 values in a continuous ping-pong loop. Used by all 131 dual-phase presets.</div></div>
        <div class="tfn"><div class="tfn-name">startTriple(c1, c2, c3)</div><div class="tfn-desc">Steps through three colors in sequence — perfect for multi-deity or reincarnation cycle themes (Tensei category).</div></div>
        <div class="tfn"><div class="tfn-name">startRainbow()</div><div class="tfn-desc">Full HSV hue rotation — completes a full spectrum in ~7.7 seconds. Equivalent to the Taiyo Spectrum preset.</div></div>
        <div class="tfn"><div class="tfn-name">stopDynamic()</div><div class="tfn-desc">Freezes the dynamic engine at its current color. The accent stays static until you call another start function.</div></div>
      </div>
    </div>

    <div class="terminal r" data-d="2" style="margin-top:28px">
      <div class="t-bar">
        <div class="t-dot td-r"></div><div class="t-dot td-y"></div><div class="t-dot td-g"></div>
        <span class="t-title">Applying a preset theme in your Settings tab</span>
      </div>
      <div class="t-body">
        <pre><span class="cmt">-- Example: Settings tab with a theme dropdown</span>
<span class="kw">local</span> <span class="sec-label">settingsTab</span> <span class="op">=</span> <span class="hi">win</span><span class="op">:</span><span class="fn">AddTab</span>(<span class="str">"⚙️ Settings"</span>)
<span class="kw">local</span> <span class="hi">sCol</span> <span class="op">=</span> <span class="sec-label">settingsTab</span><span class="op">:</span><span class="fn">AddColumn</span>()
<span class="kw">local</span> <span class="hi">sSec</span> <span class="op">=</span> <span class="hi">sCol</span><span class="op">:</span><span class="fn">AddSection</span>(<span class="str">"Appearance"</span>)

<span class="kw">local</span> <span class="hi">themeList</span> <span class="op">=</span> <span class="op">{</span><span class="str">"Amaterasu ☀️"</span><span class="op">,</span><span class="str">"Oni Warlord 👹"</span><span class="op">,</span><span class="str">"Muramasa 🗡️"</span><span class="op">,</span><span class="str">"Rainbow 🌈"</span><span class="op">}</span>
<span class="hi">sSec</span><span class="op">:</span><span class="fn">AddDropdown</span>(<span class="str">"Theme"</span><span class="op">,</span> <span class="hi">themeList</span><span class="op">,</span> <span class="num">1</span><span class="op">,</span> <span class="kw">function</span>(<span class="hi">i</span>)
    <span class="kw">if</span>     <span class="hi">i</span> <span class="op">==</span> <span class="num">1</span> <span class="kw">then</span> <span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">185</span><span class="op">,</span><span class="num">20</span>)<span class="op">,</span>  <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">255</span><span class="op">,</span><span class="num">60</span><span class="op">,</span><span class="num">0</span>))
    <span class="kw">elseif</span> <span class="hi">i</span> <span class="op">==</span> <span class="num">2</span> <span class="kw">then</span> <span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">200</span><span class="op">,</span><span class="num">0</span><span class="op">,</span><span class="num">30</span>)<span class="op">,</span>   <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">60</span><span class="op">,</span><span class="num">0</span><span class="op">,</span><span class="num">0</span>))
    <span class="kw">elseif</span> <span class="hi">i</span> <span class="op">==</span> <span class="num">3</span> <span class="kw">then</span> <span class="fn">startDual</span>(<span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">220</span><span class="op">,</span><span class="num">0</span><span class="op">,</span><span class="num">40</span>)<span class="op">,</span>   <span class="fn">Color3</span><span class="op">.</span><span class="fn">fromRGB</span>(<span class="num">10</span><span class="op">,</span><span class="num">5</span><span class="op">,</span><span class="num">5</span>))
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
      <p class="sh-p">These systems run automatically the moment you load Amaterasu — no setup needed. They're available to your script if you need them.</p>
    </div>
    <div class="sys-grid">
      <div class="sy r"><div class="sy-icon">📣</div><div class="sy-name">Event Bus</div><div class="sy-desc"><code style="font-family:var(--f-mono);font-size:10px;color:var(--gold2)">Emit(name, …)</code> / <code style="font-family:var(--f-mono);font-size:10px;color:var(--gold2)">On(name, fn)</code> — zero-coupling pub/sub. Dead listeners are pruned automatically on each emit.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🔮</div><div class="sy-name">State Store</div><div class="sy-desc"><code style="font-family:var(--f-mono);font-size:10px;color:var(--gold2)">Store.set / get / watch</code> — reactive shared state. Components rebuild when state changes; no polling loops.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">🌀</div><div class="sy-name">Spring Tweens</div><div class="sy-desc">Physics-based <code style="font-family:var(--f-mono);font-size:10px;color:var(--gold2)">springTween(obj, prop, target, k, d)</code> for scalar, UDim2, and Color3. Frame-rate independent on all executors.</div></div>
      <div class="sy r"><div class="sy-icon">⚡</div><div class="sy-name">Master Heartbeat</div><div class="sy-desc">One <code style="font-family:var(--f-mono);font-size:10px;color:var(--gold2)">RunService.Heartbeat</code> drives spin gradients, FPS tracking, and the dynamic theme engine — zero orphaned threads.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🔒</div><div class="sy-name">Session Guard</div><div class="sy-desc"><code style="font-family:var(--f-mono);font-size:10px;color:var(--gold2)">getgenv()</code> session key kills all loops and listeners from previous executions on re-run. No memory leaks.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">💾</div><div class="sy-name">JSON Storage</div><div class="sy-desc">Executor-agnostic <code style="font-family:var(--f-mono);font-size:10px;color:var(--gold2)">readfile / writefile</code> with in-memory cache. Themes, keybinds, and any custom data persist across sessions.</div></div>
      <div class="sy r"><div class="sy-icon">⌨️</div><div class="sy-name">Keybind System</div><div class="sy-desc"><code style="font-family:var(--f-mono);font-size:10px;color:var(--gold2)">Keybinds.register / setKey / startRebind</code> — live-capture rebinding with storage persistence. Wire to AddKeybind elements.</div></div>
      <div class="sy r" data-d="1"><div class="sy-icon">🆔</div><div class="sy-name">HWID Chain</div><div class="sy-desc">8-function fallback covering gethwid, get_hwid_string, syn.get_hwid, hwid, getfingerprint, and more — works on every executor.</div></div>
      <div class="sy r" data-d="2"><div class="sy-icon">📡</div><div class="sy-name">HTTP Chain</div><div class="sy-desc">Priority POST chain: http_request → syn.request → request → HttpService:RequestAsync. Used for the verification endpoint.</div></div>
    </div>
  </div>
</section>

<div class="sep"></div>

<!-- ═══ CTA ═══════════════════════════════════════════════════════════ -->
<section class="cta-sec" id="get">
  <div class="cta-flare"></div>
  <div class="wrap">
    <span class="cta-wm r">天</span>
    <h2 class="cta-h r">Start building<br>with <span>Amaterasu.</span></h2>
    <p class="cta-sub r">Grab the loadstring, open your executor, and start crafting.</p>

    <div class="cta-loadstr r" data-d="1" id="copybtn">
      <span style="color:var(--ember);flex-shrink:0">›</span>
      <span class="cls-code" id="copycode">loadstring(game:HttpGet("https://raw.githubusercontent.com/YOUR/amaterasu/main/load.lua"))()</span>
      <span class="cls-icon" id="copyicon">⎘</span>
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
        <p class="fb-desc">Forged in the myth of the sun goddess. The most cinematic Roblox script UI ever made. By Kyo, v14.0.</p>
      </div>
      <div class="footer-cols">
        <div class="fc">
          <h5>Documentation</h5>
          <a href="#quickstart">Quick Start</a>
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
          <a href="#">Synapse X/Z</a>
          <a href="#">Wave · Fluxus · Xeno</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 <b>Amaterasu UI</b> · by Kyo · 天照大神</span>
      <span>v14.0 · Documentation</span>
    </div>
  </div>
</footer>

<script>
/* ── Cursor ─────────────────────────────────────────────────────── */
const cur=document.getElementById('cur'), cur2=document.getElementById('cur2');
let cx=0, cy=0, cx2=0, cy2=0;
document.addEventListener('mousemove', e=>{cx=e.clientX;cy=e.clientY});
(function loop(){
  cx2+=(cx-cx2)*.18; cy2+=(cy-cy2)*.18;
  cur.style.transform=`translate(${cx}px,${cy}px) translate(-50%,-50%)`;
  cur2.style.transform=`translate(${cx2}px,${cy2}px) translate(-50%,-50%)`;
  requestAnimationFrame(loop);
})();
document.querySelectorAll('a,button,.api-card-head,.tc,.sy,.arch-node,.tfn').forEach(el=>{
  el.addEventListener('mouseenter',()=>document.body.classList.add('hov'));
  el.addEventListener('mouseleave',()=>document.body.classList.remove('hov'));
});

/* ── Nav stuck ──────────────────────────────────────────────────── */
const nav=document.getElementById('nav');
window.addEventListener('scroll',()=>{
  nav.classList.toggle('stuck',window.scrollY>30);
});

/* ── Background orbs ────────────────────────────────────────────── */
(function(){
  const canvas=document.getElementById('bg');
  const g=canvas.getContext('2d');
  function resize(){canvas.width=window.innerWidth;canvas.height=window.innerHeight}
  resize(); window.addEventListener('resize',resize);
  const W=()=>canvas.width, H=()=>canvas.height;
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
      g.save(); g.translate(cx,cy); g.rotate(o.rot*t);
      g.scale(1,o.ry/o.rx); g.beginPath(); g.arc(0,0,o.rx*sc*p,0,Math.PI*2);
      g.fillStyle=grad; g.fill(); g.restore();
    });
    requestAnimationFrame(draw);
  }
  draw();
})();

/* ── Scroll reveal ──────────────────────────────────────────────── */
const revObs=new IntersectionObserver(entries=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('in')});
},{threshold:.08});
document.querySelectorAll('.r').forEach(el=>revObs.observe(el));

/* ── Copy loadstring ────────────────────────────────────────────── */
document.getElementById('copybtn').addEventListener('click',()=>{
  navigator.clipboard.writeText(document.getElementById('copycode').textContent.trim()).catch(()=>{});
  const ic=document.getElementById('copyicon');
  ic.textContent='✓'; ic.style.color='#4ade80';
  setTimeout(()=>{ic.textContent='⎘';ic.style.color='';},2200);
});

/* ── TOC active highlight ────────────────────────────────────────── */
const tocLinks=document.querySelectorAll('.toc a');
const sections=[];
tocLinks.forEach(a=>{
  const id=a.getAttribute('href').slice(1);
  const el=document.getElementById(id);
  if(el) sections.push({el,a});
});
window.addEventListener('scroll',()=>{
  let current='';
  sections.forEach(({el,a})=>{
    const top=el.getBoundingClientRect().top;
    if(top < 140) current=a.getAttribute('href');
  });
  tocLinks.forEach(a=>{
    a.classList.toggle('active',a.getAttribute('href')===current);
  });
},{passive:true});
</script>
</body>
</html>
