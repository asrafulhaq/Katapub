

// this is new effects start 
    let dpi = window.devicePixelRatio || 1;
    window.onload = function () {
        !(function () {
            const e = document.querySelectorAll(".pagelink"),
                t = document.createElement("canvas");
            (t.style = "position: fixed;\n              top: 0;\n              left: 0;\n              width: 100vw;\n              height: 100vh;\n              z-index: 2000;\n              pointer-events: none;"),
                document.body.appendChild(t);
            const n = t.getContext("2d");
            let o = (n.canvas.width = window.innerWidth),
                i = (n.canvas.height = window.innerHeight),
                a = "#FFAAFF",
                l = 1.2,
                u = !1,
                c = { value: 1 },
                d = { value: 1 };
            function v(e) {
                e.preventDefault();
                let t = this.getAttribute("href");
                (a = "#E5E3DC"),
                    (c.value = 1),
                    (d.value = 1),
                    (u = !1),
                    setTimeout(function () {
                        document.location.href = t;
                    }, 1e3 * l),
                    null == t && (t = "index.html"),
                    window.isMobile || TweenLite.to(soundReactor.audio, l, { volume: 0 }),
                    TweenLite.to(d, l, {
                        value: 0,
                        ease: Power4.easeInOut,
                        onComplete: function () {
                            u = !0;
                        },
                    }),
                    TweenLite.to(c, l, {
                        value: 0,
                        ease: Power4.easeInOut,
                        delay: l,
                        onComplete: function () {
                            window.localStorage.setItem("audioTime", soundReactor.audio.currentTime);
                        },
                    });
            }
            RAF.subscribe("overlayUpdate", function () {
                n.clearRect(0, 0, o, i),
                    n.beginPath(),
                    (n.fillStyle = a),
                    n.rect(0, 0, o, i),
                    u && n.fill(),
                    n.closePath(),
                    n.beginPath(),
                    n.moveTo(0, i * c.value),
                    n.quadraticCurveTo(o / 2, i * c.value + 300 * Math.sin(c.value * Math.PI), o, i * c.value),
                    n.lineTo(o, i * d.value),
                    n.quadraticCurveTo(o / 2, i * d.value + -300 * Math.sin(d.value * Math.PI), 0, i * d.value),
                    n.lineTo(0, 0),
                    n.closePath(),
                    (n.fillStyle = "#0D0D0D"),
                    n.fill();
            }),
                e.forEach((e) => {
                    e.addEventListener("click", v);
                });
        })();
    };
// this is new effects end 

// this is new effects start 
    if ($(window).width() >= 991) {
        function initSmoothScroll() {
            let o,
                e = document.querySelectorAll(".parazoom"),
                t = 0,
                i = [];
            e.forEach((o) => {
                i.push({ el: o, width: o.width, height: 0 });
            }),
                setTimeout(function () {
                    window.scrollTo(0, 0);
                }, 100),
                console.log(window.scrollY),
                (window.onbeforeunload = function () {
                    window.scrollTo(0, 0);
                }),
                (o =
                    navigator.userAgent.toLowerCase().indexOf("firefox") > -1
                        ? new LocomotiveScroll({ el: document.querySelector("[data-scroll-container]"), smooth: !0, multiplier: 5 })
                        : new LocomotiveScroll({ el: document.querySelector("[data-scroll-container]"), smooth: !0 })).on("scroll", function (o) {
                    (t = o.scroll.y),
                        i.forEach((e) => {
                            console.log(e.height);
                            let i = e.el.getAttribute("zoomIntensity") || 0.3;
                            (e.el.style.width = e.width + e.width * (t / o.limit) * i + "px"), (e.el.style.height = e.height + e.height * (t / o.limit) * i + "px");
                        });
                }),
                o.on("call", function (o) {
                    console.log(o);
                }),
                window.addEventListener("resize", function () {
                    e.forEach((o) => {
                        (o.el = o), (o.width = o.offsetWidth), (o.height = o.offsetHeight);
                    });
                });
        }
        const o = document.querySelector(".app");
        null != o && (o.style.position = "fixed"),
            document.addEventListener("DOMContentLoaded", function () {
                setTimeout(function () {
                    initSmoothScroll(), console.log("init");
                }, 1e3);
            });
    }
// this is new effects end 

// this is new effects start 
    const burgerBP = [
        { sWidth: 1920, burgerRad: 60 * dpi, burgerMargin: 100 * dpi, burgerBigRad: 90 * dpi, burgerBigMargin: 140 * dpi },
        { sWidth: 991, burgerRad: 48 * dpi, burgerMargin: 90 * dpi, burgerBigRad: 80 * dpi, burgerBigMargin: 120 * dpi },
        { sWidth: 479, burgerRad: 30 * dpi, burgerMargin: 50 * dpi, burgerBigRad: 60 * dpi, burgerBigMargin: 100 * dpi },
        { sWidth: 0, burgerRad: 30 * dpi, burgerMargin: 50 * dpi, burgerBigRad: 60 * dpi, burgerBigMargin: 100 * dpi },
    ];
    function burgerInit() {
        let e = !0;
        const r = new SimplexNoise();
        let i = {
                burgerRad: 40,
                burgerMargin: 60,
                burgerBigRad: 80,
                burgerBigMargin: 120,
                burgerPosition: { x: window.innerWidth * dpi, y: 0 },
                circleNumber: 2,
                noiseAmplitude: 5,
                noiseDetail: 0.5,
                noiseSpeed: 0.001,
                buttonAlpha: 1,
            },
            t = !0;
        burgerBP.forEach((e, r) => {
            t && window.innerWidth > e.sWidth && ((i.burgerRad = e.burgerRad), (i.burgerMargin = e.burgerMargin), (i.burgerBigRad = e.burgerBigRad), (i.burgerBigMargin = e.burgerBigMargin), (t = !1));
        }),
            (i.burgerPosition.x = window.innerWidth * dpi - i.burgerMargin),
            (i.burgerPosition.y = i.burgerMargin);
        let a = JSON.parse(JSON.stringify(i));
        const n = document.querySelectorAll(".menulink");
        let u = "#FFAAFF",
            o = !1;
        const g = document.querySelector(".burgercontainer"),
            s = document.querySelector(".burgerclickablein"),
            l = document.querySelector(".burgerclickableout");
        s.classList.add("on");
        const d = document.createElement("canvas");
        g.appendChild(d);
        const b = d.getContext("2d");
        let c = (b.canvas.width = g.offsetWidth * dpi),
            v = (b.canvas.height = g.offsetHeight * dpi),
            w = 20 * dpi,
            h = 5 * dpi,
            p = [{ value: 10 - w / 2 }, { value: -h / 2 }, { value: w / 2 }, { value: -h / 2 }],
            P = [{ value: -w / 2 }, { value: h / 2 }, { value: w / 2 }, { value: h / 2 }],
            M = JSON.parse(JSON.stringify(p)),
            R = JSON.parse(JSON.stringify(P));
        const f = 1.2;
        let T = !1,
            m = { value: 0 },
            L = { value: 1 },
            y = { value: 0 };
        function I() {
            !T && e
                ? (s.classList.remove("on"),
                  (e = !1),
                  (T = !0),
                  (i.burgerMargin = i.burgerBigMargin),
                  TweenLite.to(i.burgerPosition, f, {
                      x: c - i.burgerMargin,
                      y: i.burgerMargin,
                      ease: Power4.easeInOut,
                      onComplete: function () {
                          setTimeout(function () {
                              l.classList.add("on"), (e = !0);
                          }, 500);
                      },
                  }),
                  TweenLite.to(m, f, { value: 255, ease: Power4.easeInOut }),
                  TweenLite.to(y, f, { value: 1, ease: Power4.easeInOut }),
                  TweenLite.to(i, f, { burgerRad: i.burgerBigRad, ease: Power4.easeInOut }),
                  TweenLite.to(p[0], f, { value: -w / 2, ease: Power4.easeInOut }),
                  TweenLite.to(p[1], f, { value: +w / 2, ease: Power4.easeInOut }),
                  TweenLite.to(p[2], f, { value: +w / 2, ease: Power4.easeInOut }),
                  TweenLite.to(p[3], f, { value: -w / 2, ease: Power4.easeInOut }),
                  TweenLite.to(P[0], f, { value: -w / 2, ease: Power4.easeInOut }),
                  TweenLite.to(P[1], f, { value: -w / 2, ease: Power4.easeInOut }),
                  TweenLite.to(P[2], f, { value: +w / 2, ease: Power4.easeInOut }),
                  TweenLite.to(P[3], f, { value: +w / 2, ease: Power4.easeInOut }),
                  document.querySelector(".nav-trigger").classList.add("on"))
                : e &&
                  (l.classList.remove("on"),
                  (e = !1),
                  (T = !1),
                  setTimeout(function () {
                      (i.burgerMargin = a.burgerMargin),
                          TweenLite.to(i.burgerPosition, f, {
                              x: c - i.burgerMargin,
                              y: i.burgerMargin,
                              ease: Power4.easeInOut,
                              onComplete: function () {
                                  setTimeout(function () {
                                      s.classList.add("on"), (e = !0);
                                  }, 500);
                              },
                          }),
                          TweenLite.to(m, f, { value: 0, ease: Power4.easeInOut }),
                          TweenLite.to(y, f, { value: 0, ease: Power4.easeInOut }),
                          TweenLite.to(i, f, { burgerRad: a.burgerRad, ease: Power4.easeInOut }),
                          p.forEach((e, r) => {
                              TweenLite.to(e, f, { value: M[r].value, ease: Power4.easeInOut });
                          }),
                          P.forEach((e, r) => {
                              TweenLite.to(e, f, { value: R[r].value, ease: Power4.easeInOut });
                          }),
                          document.querySelector(".nav-trigger").classList.remove("on");
                  }, 500));
        }
        let B = 2e3;
        function O(e) {
            e.preventDefault();
            let r = this.getAttribute("href");
            console.log(r),
                setTimeout(function () {
                    document.location.href = r;
                }, 1e3 * f),
                (u = this.getAttribute("targetcolor")),
                (o = !0),
                (T = !1),
                null == r && (r = "index.html"),
                TweenLite.to(i, 0.5, { buttonAlpha: 0 }),
                TweenLite.to(y, f, {
                    value: 0,
                    ease: Power4.easeInOut,
                    onComplete: function () {
                        null != soundReactor.audio && window.localStorage.setItem("audioTime", soundReactor.audio.currentTime);
                    },
                }),
                null != soundReactor.audio && TweenLite.to(soundReactor.audio, f, { volume: 0 });
        }
        s.addEventListener("click", I),
            l.addEventListener("click", I),
            window.isMobile ||
                window.addEventListener("mousemove", function (e) {
                    let r = [e.clientX, e.clientY],
                        t = Math.sqrt(Math.pow(i.burgerPosition.x - r[0], 2) + Math.pow(i.burgerPosition.y - r[1], 2));
                    t <= i.burgerRad && B > i.burgerRad && ((document.body.style.cursor = "pointer"), (clickFlag = !0), d.classList.add("on"), TweenLite.to(L, 0.2, { value: 0 })),
                        t >= i.burgerRad && B < i.burgerRad && ((document.body.style.cursor = "inherit"), (clickFlag = !1), d.classList.remove("on"), TweenLite.to(L, 0.2, { value: 1 })),
                        (B = t);
                }),
            window.addEventListener("resize", function () {
                (t = !0),
                    burgerBP.forEach((e, r) => {
                        t && window.innerWidth > e.sWidth && ((i.burgerRad = e.burgerRad), (i.burgerMargin = e.burgerMargin), (i.burgerBigRad = e.burgerBigRad), (i.burgerBigMargin = e.burgerBigMargin), (t = !1));
                    }),
                    (a.burgerMargin = i.burgerMargin),
                    (a.burgerRad = i.burgerRad),
                    T && ((i.burgerMargin = i.burgerBigMargin), (i.burgerRad = i.burgerBigRad)),
                    (i.burgerPosition.x = window.innerWidth - i.burgerMargin),
                    (i.burgerPosition.y = i.burgerMargin),
                    (c = b.canvas.width = g.offsetWidth * dpi),
                    (v = b.canvas.height = g.offsetHeight * dpi),
                    (i.burgerPosition.x = c - i.burgerMargin);
            }),
            n.forEach((e) => {
                e.addEventListener("click", O);
            }),
            RAF.subscribe("burgerUpdate", function () {
                b.clearRect(0, 0, c, v),
                    (b.lineWidth = dpi),
                    b.beginPath(),
                    (b.fillStyle = u),
                    b.rect(0, 0, c, v),
                    o && b.fill(),
                    b.closePath(),
                    (b.fillStyle = "#0A0A0A"),
                    b.beginPath(),
                    b.moveTo(0, v * y.value),
                    T ? b.quadraticCurveTo(c / 2, v * y.value + 300 * Math.sin(y.value * Math.PI), c, v * y.value) : b.quadraticCurveTo(c / 2, v * y.value - 300 * Math.sin(y.value * Math.PI), c, v * y.value),
                    b.lineTo(c, 0),
                    b.lineTo(0, 0),
                    b.closePath(),
                    (b.fillStyle = "#0A0A0A"),
                    b.fill(),
                    (function () {
                        for (let t = 0; t < i.circleNumber; t++) {
                            b.beginPath();
                            for (let a = 0; a < 2 * Math.PI; a += (2 * Math.PI) / 50) {
                                let n = Math.cos(a),
                                    u = Math.sin(a);
                                var e = r.noise3D(n * i.noiseDetail, u * i.noiseDetail, Date.now() * i.noiseSpeed + t);
                                let o = i.burgerRad + e * i.noiseAmplitude * L.value;
                                (n = n * o + i.burgerPosition.x), (u = u * o + i.burgerPosition.y), 0 == a ? b.moveTo(n, u) : b.lineTo(n, u);
                            }
                            let a = 1;
                            0 == t && (a = 0.6), (b.strokeStyle = `rgba( ${m.value}, ${m.value}, ${m.value}, ${a * i.buttonAlpha})`), b.closePath(), b.stroke();
                        }
                    })(),
                    b.beginPath(),
                    b.moveTo(p[0].value + i.burgerPosition.x, p[1].value + i.burgerPosition.y),
                    b.lineTo(p[2].value + i.burgerPosition.x, p[3].value + i.burgerPosition.y),
                    b.closePath(),
                    b.stroke(),
                    b.beginPath(),
                    b.moveTo(P[0].value + i.burgerPosition.x, P[1].value + i.burgerPosition.y),
                    b.lineTo(P[2].value + i.burgerPosition.x, P[3].value + i.burgerPosition.y),
                    b.closePath(),
                    b.stroke(),
                    (s.style = `\n            width: ${(2 * i.burgerRad) / dpi}px;\n            height:${(2 * i.burgerRad) / dpi}px;\n            top: ${i.burgerMargin / (3 * dpi)}px;\n            right: ${
                        i.burgerMargin / (3 * dpi)
                    }px;`),
                    (l.style = `\n            width: ${(2 * i.burgerRad) / dpi}px;\n            height:${(2 * i.burgerRad) / dpi}px;\n             top: ${i.burgerMargin / (3 * dpi)}px;\n            right: ${
                        i.burgerMargin / (3 * dpi)
                    }px;`);
            });
    }
    burgerInit();
// this is new effects end 
// this is new effects start 
    let soundToggler = null;
    if (!window.isMobile) soundToggler = new SoundToggler();
// this is new effects end 

// this is new effects start 
    let customCursor;
    if (!window.isMobile) {
        customCursor = new CustomCursor();
        customCursor.customCursorInit(document.querySelector(".cursorcontainer"));
        const links = document.querySelectorAll("a");
        links.forEach((a) => {
            a.addEventListener("mouseenter", customCursor.aIn);
            a.addEventListener("mouseleave", customCursor.aOut);
        });
    }
    window.onpageshow = function (event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
// this is new effects end 
// this is new effects start 
    const soundReactor = new SoundReactor("https://cdn.jsdelivr.net/gh/niccolomiranda/chiara-luzzana/sound/mainSound.mp3");
    window.isMobile || (soundReactor.init(), (soundReactor.audio.crossOrigin = "anonymous"), null == soundToggler || window.isSafari ? (soundToggler.autoPlay = !1) : (soundToggler.autoPlay = !0));
    let transitioning = !1,
        pLinks = document.querySelectorAll(".pagelink");
    pLinks.forEach((n) => {
        n.addEventListener("click", function () {
            transitioning = !0;
        });
    });
    const audioUrls = [
        "https://cdn.jsdelivr.net/gh/niccolomiranda/chiara-luzzana/sound/rollovers/rol01.mp3",
        "https://cdn.jsdelivr.net/gh/niccolomiranda/chiara-luzzana/sound/rollovers/rol02.mp3",
        "https://cdn.jsdelivr.net/gh/niccolomiranda/chiara-luzzana/sound/rollovers/rol03.mp3",
        "https://cdn.jsdelivr.net/gh/niccolomiranda/chiara-luzzana/sound/rollovers/rol04.mp3",
        "https://cdn.jsdelivr.net/gh/niccolomiranda/chiara-luzzana/sound/rollovers/rol05.mp3",
        "https://cdn.jsdelivr.net/gh/niccolomiranda/chiara-luzzana/sound/rollovers/rol06.mp3",
    ];
    let audios = [];
    function elasticsInit() {
        let n = document.querySelectorAll(".elasticbox"),
            o = [],
            e = { x: 0, y: 0 };
        function t(n) {
            o.forEach((o) => {
                o.container.classList == n.target.classList && ((o.mouseIn = !0), console.log(o.mouseIn), null != o.anim && o.anim.kill());
            });
        }
        function a(n) {
            o.forEach((o, e) => {
                if (o.container.classList == n.target.classList) {
                    if (((o.mouseIn = !1), (o.anim = TweenLite.to(o.handlePos, 1, { x: o.handleInitPos.x, y: o.handleInitPos.y, ease: Elastic.easeOut.config(1, 0.3) })), transitioning)) return;
                    (audios[e].currentTime = 0), audios[e].play();
                }
            });
        }
        function i(n) {
            let o = n.target.getBoundingClientRect();
            (e.x = n.clientX - o.left), (e.y = n.clientY - o.top);
        }
        n.forEach((n, e) => {
            let s = document.createElement("canvas"),
                l = s.getContext("2d"),
                c = (l.canvas.width = n.offsetWidth),
                r = (l.canvas.height = n.offsetHeight);
            n.classList.add("boxid_" + e),
                n.appendChild(s),
                o.push({ ctx: l, canvas: s, container: n, mouseIn: !1, handlePos: { x: c / 2, y: r / 2 }, handleInitPos: { x: c / 2, y: r / 2 }, anim: null }),
                window.isMobile || (n.addEventListener("mouseenter", t), n.addEventListener("mouseleave", a), n.addEventListener("mousemove", i));
        }),
            window.addEventListener("resize", function () {
                o.forEach((o, e) => {
                    (o.ctx.canvas.width = n[e].offsetWidth), (o.ctx.canvas.height = n[e].offsetHeight);
                });
            }),
            RAF.subscribe("elasticsRAF", function () {
                o.forEach((o, t) => {
                    let a = (o.ctx.canvas.width = n[t].offsetWidth),
                        i = (o.ctx.canvas.height = n[t].offsetHeight);
                    o.mouseIn && ((o.handlePos.x += 0.5 * (e.x - o.handlePos.x)), (o.handlePos.y += 0.5 * (e.y - o.handlePos.y))),
                        o.ctx.clearRect(0, 0, a, i),
                        o.ctx.beginPath(),
                        o.ctx.moveTo(a / 2, 0),
                        o.ctx.quadraticCurveTo(o.handlePos.x, o.handlePos.y, a / 2, i),
                        o.ctx.stroke(),
                        o.ctx.closePath();
                });
            });
    }
    audioUrls.forEach((n) => {
        let o = new Audio(n);
        (o.crossOrigin = "anonymous"), audios.push(o);
    }),
        elasticsInit();
// this is new effects end 

// this is new effects start 
    function sideScrollInit() {
        const e = document.querySelector(".sidescrollbox"),
            t = document.querySelector(".scroller");
        let n,
            i = 0,
            o = 0;
        window.isMobile
            ? (e.addEventListener("touchstart", function (e) {
                  n = e.touches[0].screenX;
              }),
              e.addEventListener("touchmove", function (e) {
                  let i = e.touches[0].screenX - n;
                  (o = -i) <= 0 && (o = 0), o >= t.offsetWidth - window.innerWidth && (o = t.offsetWidth - window.innerWidth);
              }))
            : e.addEventListener("wheel", function (e) {
                  (o += e.deltaY), (o += e.deltaX) <= 0 && (o = 0), o >= t.offsetWidth - window.innerWidth && (o = t.offsetWidth - window.innerWidth);
              }),
            RAF.subscribe("sideScrollUpdate", function () {
                window.isMobile ? (t.style = `transform: translate3d(-${o}px,0,0)`) : ((i += 0.05 * (o - i)), (t.style = `transform: translate3d(-${i}px,0,0)`));
            });
    }
    sideScrollInit();
// this is new effects end 


