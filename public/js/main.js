// Favicon Controller
matcher = window.matchMedia('(prefers-color-scheme: dark)');
var linkHref= document.querySelector("#icon");
var lightIcon = "./assets/images/favicon/favicon-light.ico";
var darkIcon = "./assets/images/favicon/favicon-dark.ico";
if (matcher.matches) {
    linkHref.setAttribute("href", darkIcon);
} else {
    linkHref.setAttribute("href", lightIcon);
}



// Mobile Menu
function $(selector) { 
	return document.querySelector(selector)
}
//  Elements
var getIcon = $('#menu-icon');
var getCbNav = $('#vl-nav');

getIcon.addEventListener('click', () => {
	getIcon.classList.toggle('is-active');
	getCbNav.classList.toggle('active');
});


// Mega Menu
const Menus = function (menu) {
    // DOM element(s)
    let container = menu.parentElement,
        currentMenuItem,
        i,
        len;

    this.init = function () {
        menuSetup();
        document.addEventListener('click', closeOpenMenu);
    };
    function toggleOnMenuClick(e) {
        const a = e.currentTarget;
        if (currentMenuItem && a !== currentMenuItem) {
            toggleSubmenu(currentMenuItem);
        }

        toggleSubmenu(a);
    }

    function toggleSubmenu(a) {
        const submenu = document.getElementById(
            a.getAttribute('aria-controls')
        );

        if ('true' === a.getAttribute('aria-expanded')) {
            a.setAttribute('aria-expanded', false);
            submenu.setAttribute('aria-hidden', true);
            currentMenuItem = false;
        } else {
            a.setAttribute('aria-expanded', true);
            submenu.setAttribute('aria-hidden', false);
            preventOffScreenSubmenu(submenu);
            currentMenuItem = a;
        }
    }

    function preventOffScreenSubmenu(submenu) {
        const screenWidth =
                window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth,
            parent = submenu.offsetParent,
            menuLeftEdge = parent.getBoundingClientRect().left,
            menuRightEdge = menuLeftEdge + submenu.offsetWidth;

        if (menuRightEdge + 32 > screenWidth) {
            submenu.classList.add('sub-menu--right');
        }
    }

    function closeOnEscKey(e) {
        if (27 === e.keyCode) {
            // we're in a submenu item
            if (null !== e.target.closest('ul[aria-hidden="false"]')) {
                currentMenuItem.focus();
                toggleSubmenu(currentMenuItem);
            } else if ('true' === e.target.getAttribute('aria-expanded')) {
                toggleSubmenu(currentMenuItem);
            }
        }
    }

    function closeOpenMenu(e) {
        if (currentMenuItem && !e.target.closest('#' + container.id)) {
            toggleSubmenu(currentMenuItem);
        }
    }
    function menuSetup() {
        menu.classList.remove('no-js');

        menu.querySelectorAll('ul.cb-mega').forEach((submenu) => {
            const menuItem = submenu.parentElement;

            if ('undefined' !== typeof submenu) {
                let a = convertLinkToa(menuItem);

                setUpAria(submenu, a);

                // bind event listener to a
                a.addEventListener('click', toggleOnMenuClick);
                menu.addEventListener('keyup', closeOnEscKey);
            }
        });
    }
    function convertLinkToa(menuItem) {
        const link = menuItem.getElementsByTagName('a')[0],
            linkHTML = link.innerHTML,
            linkAtts = link.attributes,
            a = document.createElement('a');

        if (null !== link) {
            // copy a attributes and content from link
            a.innerHTML = linkHTML.trim();
            for (i = 0, len = linkAtts.length; i < len; i++) {
                let attr = linkAtts[i];
                if ('href' !== attr.name) {
                    a.setAttribute(attr.name, attr.value);
                }
            }

            menuItem.replaceChild(a, link);
        }

        return a;
    }

    function setUpAria(submenu, a) {
        const submenuId = submenu.getAttribute('id');

        let id;
        if (null === submenuId) {
            id =
                a.textContent.trim().replace(/\s+/g, '-').toLowerCase() +
                '-submenu';
        } else {
            id = menuItemId + '-submenu';
        }
        a.setAttribute('aria-controls', id);
        a.setAttribute('aria-expanded', false);
        submenu.setAttribute('id', id);
        submenu.setAttribute('aria-hidden', true);
    }
};

document.addEventListener('DOMContentLoaded', function () {
    const menus = document.querySelectorAll('#menu');

    menus.forEach((menu) => {
        let clickyMenu = new Menus(menu);
        clickyMenu.init();
    });
});

function selector(el) {
    return document.querySelector(el);
}

// Scroll To Top
(function () {
    let header = selector('header'),
        clickToTop = selector('.scroll-progress'),
        path = selector('.scroll-progress path');
    let totalLength = path.getTotalLength();

    function calculate() {
        let cal = document.documentElement.scrollTop,
            r = document.documentElement.scrollHeight - window.innerHeight,
            i = totalLength - (cal * totalLength) / r;
            path.style.strokeDashoffset = i;
    }

    window.onscroll = function () {
        calculate();
        let scrollTop = window.pageYOffset || document.body.scrollTop;
        scrollTop > header.offsetHeight
            ? selector('.scroll-progress').classList.add('progressing')
            : selector('.scroll-progress').classList.remove('progressing');
    };

    clickToTop.onclick = function () {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth',
        });
    };
})();
! function () {
	"use strict";

	function r(t) {
		return (r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
			return typeof t
		} : function (t) {
			return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
		})(t)
	}

	function i(t, e) {
		for (var n = 0; n < e.length; n++) {
			var a = e[n];
			a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(t, a.key, a)
		}
	}

	function u(t, e, n) {
		return e in t ? Object.defineProperty(t, e, {
			value: n,
			enumerable: !0,
			configurable: !0,
			writable: !0
		}) : t[e] = n, t
	}

	function $(e) {
		for (var t = 1; t < arguments.length; t++) {
			var n = null != arguments[t] ? arguments[t] : {},
				a = Object.keys(n);
			"function" == typeof Object.getOwnPropertySymbols && (a = a.concat(Object.getOwnPropertySymbols(n).filter(function (t) {
				return Object.getOwnPropertyDescriptor(n, t).enumerable
			}))), a.forEach(function (t) {
				u(e, t, n[t])
			})
		}
		return e
	}

	function h(t, e) {
		return function (t) {
			if (Array.isArray(t)) return t
		}(t) || function (t, e) {
			var n = [],
				a = !0,
				r = !1,
				i = void 0;
			try {
				for (var o, c = t[Symbol.iterator](); !(a = (o = c.next()).done) && (n.push(o.value), !e || n.length !== e); a = !0);
			} catch (t) {
				r = !0, i = t
			} finally {
				try {
					a || null == c.return || c.return()
				} finally {
					if (r) throw i
				}
			}
			return n
		}(t, e) || function () {
			throw new TypeError("Invalid attempt to destructure non-iterable instance")
		}()
	}

	function d(t) {
		return function (t) {
			if (Array.isArray(t)) {
				for (var e = 0, n = new Array(t.length); e < t.length; e++) n[e] = t[e];
				return n
			}
		}(t) || function (t) {
			if (Symbol.iterator in Object(t) || "[object Arguments]" === Object.prototype.toString.call(t)) return Array.from(t)
		}(t) || function () {
			throw new TypeError("Invalid attempt to spread non-iterable instance")
		}()
	}
	var t = function () {},
		e = {},
		n = {},
		a = null,
		o = {
			mark: t,
			measure: t
		};
	try {
		"undefined" != typeof window && (e = window), "undefined" != typeof document && (n = document), "undefined" != typeof MutationObserver && (a = MutationObserver), "undefined" != typeof performance && (o = performance)
	} catch (t) {}
	var c = (e.navigator || {}).userAgent,
		s = void 0 === c ? "" : c,
		v = e,
		b = n,
		l = a,
		f = o,
		m = !!v.document,
		p = !!b.documentElement && !!b.head && "function" == typeof b.addEventListener && "function" == typeof b.createElement,
		k = ~s.indexOf("MSIE") || ~s.indexOf("Trident/"),
		g = "___FONT_AWESOME___",
		A = 16,
		y = "fa",
		w = "svg-inline--fa",
		tt = "data-fa-i2svg",
		x = "data-fa-pseudo-element",
		S = "data-fa-pseudo-element-pending",
		C = "data-prefix",
		O = "data-icon",
		M = "fontawesome-i2svg",
		N = "async",
		P = ["HTML", "HEAD", "STYLE", "SCRIPT"],
		E = function () {
			try {
				return !0
			} catch (t) {
				return !1
			}
		}(),
		z = {
			fas: "solid",
			far: "regular",
			fal: "light",
			fad: "duotone",
			fab: "brands",
			fak: "kit",
			fa: "solid"
		},
		L = {
			solid: "fas",
			regular: "far",
			light: "fal",
			duotone: "fad",
			brands: "fab",
			kit: "fak"
		},
		j = "fa-layers-text",
		R = /Font Awesome ([5 ]*)(Solid|Regular|Light|Duotone|Brands|Free|Pro|Kit).*/i,
		F = {
			900: "fas",
			400: "far",
			normal: "far",
			300: "fal"
		},
		I = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
		T = I.concat([11, 12, 13, 14, 15, 16, 17, 18, 19, 20]),
		_ = ["class", "data-prefix", "data-icon", "data-fa-transform", "data-fa-mask"],
		U = {
			GROUP: "group",
			SWAP_OPACITY: "swap-opacity",
			PRIMARY: "primary",
			SECONDARY: "secondary"
		},
		H = ["xs", "sm", "lg", "fw", "ul", "li", "border", "pull-left", "pull-right", "spin", "pulse", "rotate-90", "rotate-180", "rotate-270", "flip-horizontal", "flip-vertical", "flip-both", "stack", "stack-1x", "stack-2x", "inverse", "layers", "layers-text", "layers-counter", U.GROUP, U.SWAP_OPACITY, U.PRIMARY, U.SECONDARY].concat(I.map(function (t) {
			return "".concat(t, "x")
		})).concat(T.map(function (t) {
			return "w-".concat(t)
		})),
		Y = v.FontAwesomeConfig || {};
	if (b && "function" == typeof b.querySelector) {
		var D = [
			["data-family-prefix", "familyPrefix"],
			["data-replacement-class", "replacementClass"],
			["data-auto-replace-svg", "autoReplaceSvg"],
			["data-auto-add-css", "autoAddCss"],
			["data-auto-a11y", "autoA11y"],
			["data-search-pseudo-elements", "searchPseudoElements"],
			["data-observe-mutations", "observeMutations"],
			["data-mutate-approach", "mutateApproach"],
			["data-keep-original-source", "keepOriginalSource"],
			["data-measure-performance", "measurePerformance"],
			["data-show-missing-icons", "showMissingIcons"]
		];
		D.push(["data-auto-fetch-svg", "autoFetchSvg"], ["data-fetch-svg-from", "fetchSvgFrom"], ["data-fetch-uploaded-svg-from", "fetchUploadedSvgFrom"]), D.forEach(function (t) {
			var e, n = h(t, 2),
				a = n[0],
				r = n[1],
				i = "" === (e = function (t) {
					var e = b.querySelector("script[" + t + "]");
					if (e) return e.getAttribute(t)
				}(a)) || "false" !== e && ("true" === e || e);
			null != i && (Y[r] = i)
		})
	}
	var V = {
			familyPrefix: y,
			replacementClass: w,
			autoReplaceSvg: !0,
			autoAddCss: !0,
			autoA11y: !0,
			searchPseudoElements: !1,
			observeMutations: !0,
			mutateApproach: "async",
			keepOriginalSource: !0,
			measurePerformance: !1,
			showMissingIcons: !0,
			autoFetchSvg: !1,
			fetchSvgFrom: null,
			fetchUploadedSvgFrom: null
		},
		q = $({}, V, Y);
	q.autoReplaceSvg || (q.observeMutations = !1);
	var W = /\/js\/.*\.js.*/,
		X = 'Manually set config.fetchSvgFrom = "URL" or use <script data-fetch-svg-from="URL" ...> to explicitly configure.';
	if (q.autoFetchSvg && !q.fetchSvgFrom && b && b.currentScript) {
		var G = b.currentScript.getAttribute("src"); - 1 < G.search(W) && (E || console.info("Font Awesome SVG Auto-fetching URL has been determined using document.currentScript. This features is not supported in any version of Internet Explorer. ".concat(X)), q.fetchSvgFrom = G.replace(W, "/svgs"))
	}
	if (q.fetchSvgFrom) {
		var K = b.createElement("a");
		K.href = q.fetchSvgFrom, q.fetchSvgFrom = K.href
	}!q.autoFetchSvg || q.fetchSvgFrom || E || (console.error("Disabling Font Awesome auto-fetching of SVG icons (it was enabled) because we could not guess the correct URL to load them from. ".concat(X)), q.autoFetchSvg = !1);
	var et = $({}, q);
	v.FontAwesomeConfig = et;
	var B = v || {};
	B[g] || (B[g] = {}), B[g].styles || (B[g].styles = {}), B[g].hooks || (B[g].hooks = {}), B[g].shims || (B[g].shims = []);
	var J = B[g],
		Q = [],
		Z = !1;

	function nt(t) {
		p && (Z ? setTimeout(t, 0) : Q.push(t))
	}
	p && ((Z = (b.documentElement.doScroll ? /^loaded|^c/ : /^loaded|^i|^c/).test(b.readyState)) || b.addEventListener("DOMContentLoaded", function t() {
		b.removeEventListener("DOMContentLoaded", t), Z = 1, Q.map(function (t) {
			return t()
		})
	}));
	var at, rt = "pending",
		it = "settled",
		ot = "fulfilled",
		ct = "rejected",
		st = function () {},
		lt = "undefined" != typeof global && void 0 !== global.process && "function" == typeof global.process.emit,
		ft = "undefined" == typeof setImmediate ? setTimeout : setImmediate,
		ut = [];

	function dt() {
		for (var t = 0; t < ut.length; t++) ut[t][0](ut[t][1]);
		at = !(ut = [])
	}

	function mt(t, e) {
		ut.push([t, e]), at || (at = !0, ft(dt, 0))
	}

	function ht(t) {
		var e = t.owner,
			n = e._state,
			a = e._data,
			r = t[n],
			i = t.then;
		if ("function" == typeof r) {
			n = ot;
			try {
				a = r(a)
			} catch (t) {
				bt(i, t)
			}
		}
		pt(i, a) || (n === ot && gt(i, a), n === ct && bt(i, a))
	}

	function pt(e, n) {
		var a;
		try {
			if (e === n) throw new TypeError("A promises callback cannot return that same promise.");
			if (n && ("function" == typeof n || "object" === r(n))) {
				var t = n.then;
				if ("function" == typeof t) return t.call(n, function (t) {
					a || (a = !0, n === t ? vt(e, t) : gt(e, t))
				}, function (t) {
					a || (a = !0, bt(e, t))
				}), !0
			}
		} catch (t) {
			return a || bt(e, t), !0
		}
		return !1
	}

	function gt(t, e) {
		t !== e && pt(t, e) || vt(t, e)
	}

	function vt(t, e) {
		t._state === rt && (t._state = it, t._data = e, mt(wt, t))
	}

	function bt(t, e) {
		t._state === rt && (t._state = it, t._data = e, mt(xt, t))
	}

	function yt(t) {
		t._then = t._then.forEach(ht)
	}

	function wt(t) {
		t._state = ot, yt(t)
	}

	function xt(t) {
		t._state = ct, yt(t), !t._handled && lt && global.process.emit("unhandledRejection", t._data, t)
	}

	function kt(t) {
		global.process.emit("rejectionHandled", t)
	}

	function At(t) {
		if ("function" != typeof t) throw new TypeError("Promise resolver " + t + " is not a function");
		if (this instanceof At == !1) throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.");
		this._then = [],
			function (t, e) {
				function n(t) {
					bt(e, t)
				}
				try {
					t(function (t) {
						gt(e, t)
					}, n)
				} catch (t) {
					n(t)
				}
			}(t, this)
	}
	At.prototype = {
		constructor: At,
		_state: rt,
		_then: null,
		_data: void 0,
		_handled: !1,
		then: function (t, e) {
			var n = {
				owner: this,
				then: new this.constructor(st),
				fulfilled: t,
				rejected: e
			};
			return !e && !t || this._handled || (this._handled = !0, this._state === ct && lt && mt(kt, this)), this._state === ot || this._state === ct ? mt(ht, n) : this._then.push(n), n.then
		},
		catch: function (t) {
			return this.then(null, t)
		}
	}, At.all = function (c) {
		if (!Array.isArray(c)) throw new TypeError("You must pass an array to Promise.all().");
		return new At(function (n, t) {
			var a = [],
				r = 0;

			function e(e) {
				return r++,
					function (t) {
						a[e] = t, --r || n(a)
					}
			}
			for (var i, o = 0; o < c.length; o++)(i = c[o]) && "function" == typeof i.then ? i.then(e(o), t) : a[o] = i;
			r || n(a)
		})
	}, At.race = function (r) {
		if (!Array.isArray(r)) throw new TypeError("You must pass an array to Promise.race().");
		return new At(function (t, e) {
			for (var n, a = 0; a < r.length; a++)(n = r[a]) && "function" == typeof n.then ? n.then(t, e) : t(n)
		})
	}, At.resolve = function (e) {
		return e && "object" === r(e) && e.constructor === At ? e : new At(function (t) {
			t(e)
		})
	}, At.reject = function (n) {
		return new At(function (t, e) {
			e(n)
		})
	};
	var St = "function" == typeof Promise ? Promise : At,
		Ct = A,
		Ot = {
			size: 16,
			x: 0,
			y: 0,
			rotate: 0,
			flipX: !1,
			flipY: !1
		};

	function Mt(t) {
		if (t && p) {
			var e = b.createElement("style");
			e.setAttribute("type", "text/css"), e.innerHTML = t;
			for (var n = b.head.childNodes, a = null, r = n.length - 1; - 1 < r; r--) {
				var i = n[r],
					o = (i.tagName || "").toUpperCase(); - 1 < ["STYLE", "LINK"].indexOf(o) && (a = i)
			}
			return b.head.insertBefore(e, a), t
		}
	}
	var Nt = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

	function Pt() {
		for (var t = 12, e = ""; 0 < t--;) e += Nt[62 * Math.random() | 0];
		return e
	}

	function Et(t) {
		for (var e = [], n = (t || []).length >>> 0; n--;) e[n] = t[n];
		return e
	}

	function zt(t) {
		return t.classList ? Et(t.classList) : (t.getAttribute("class") || "").split(" ").filter(function (t) {
			return t
		})
	}

	function Lt(t, e) {
		var n, a = e.split("-"),
			r = a[0],
			i = a.slice(1).join("-");
		return r !== t || "" === i || (n = i, ~H.indexOf(n)) ? null : i
	}

	function jt(t) {
		return "".concat(t).replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
	}

	function Rt(n) {
		return Object.keys(n || {}).reduce(function (t, e) {
			return t + "".concat(e, ": ").concat(n[e], ";")
		}, "")
	}

	function Ft(t) {
		return t.size !== Ot.size || t.x !== Ot.x || t.y !== Ot.y || t.rotate !== Ot.rotate || t.flipX || t.flipY
	}

	function It(t) {
		var e = t.transform,
			n = t.containerWidth,
			a = t.iconWidth,
			r = {
				transform: "translate(".concat(n / 2, " 256)")
			},
			i = "translate(".concat(32 * e.x, ", ").concat(32 * e.y, ") "),
			o = "scale(".concat(e.size / 16 * (e.flipX ? -1 : 1), ", ").concat(e.size / 16 * (e.flipY ? -1 : 1), ") "),
			c = "rotate(".concat(e.rotate, " 0 0)");
		return {
			outer: r,
			inner: {
				transform: "".concat(i, " ").concat(o, " ").concat(c)
			},
			path: {
				transform: "translate(".concat(a / 2 * -1, " -256)")
			}
		}
	}
	var Tt = {
		x: 0,
		y: 0,
		width: "100%",
		height: "100%"
	};

	function _t(t) {
		var e = !(1 < arguments.length && void 0 !== arguments[1]) || arguments[1];
		return t.attributes && (t.attributes.fill || e) && (t.attributes.fill = "black"), t
	}

	function Ut(t) {
		var e = t.icons,
			n = e.main,
			a = e.mask,
			r = t.prefix,
			i = t.iconName,
			o = t.transform,
			c = t.symbol,
			s = t.title,
			l = t.maskId,
			f = t.titleId,
			u = t.extra,
			d = t.watchable,
			m = void 0 !== d && d,
			h = a.found ? a : n,
			p = h.width,
			g = h.height,
			v = "fak" === r,
			b = v ? "" : "fa-w-".concat(Math.ceil(p / g * 16)),
			y = [et.replacementClass, i ? "".concat(et.familyPrefix, "-").concat(i) : "", b].filter(function (t) {
				return -1 === u.classes.indexOf(t)
			}).filter(function (t) {
				return "" !== t || !!t
			}).concat(u.classes).join(" "),
			w = {
				children: [],
				attributes: $({}, u.attributes, {
					"data-prefix": r,
					"data-icon": i,
					class: y,
					role: u.attributes.role || "img",
					xmlns: "http://www.w3.org/2000/svg",
					viewBox: "0 0 ".concat(p, " ").concat(g)
				})
			},
			x = v && !~u.classes.indexOf("fa-fw") ? {
				width: "".concat(p / g * 16 * .0625, "em")
			} : {};
		m && (w.attributes[tt] = ""), s && w.children.push({
			tag: "title",
			attributes: {
				id: w.attributes["aria-labelledby"] || "title-".concat(f || Pt())
			},
			children: [s]
		});
		var k, A, S, C, O, M, N, P, E, z, L, j, R, F, I, T, _, U, H, Y, D, V, q, W, X, G, K, B = $({}, w, {
				prefix: r,
				iconName: i,
				main: n,
				mask: a,
				maskId: l,
				transform: o,
				symbol: c,
				styles: $({}, x, u.styles)
			}),
			J = a.found && n.found ? (S = (k = B).children, C = k.attributes, O = k.main, M = k.mask, N = k.maskId, P = k.transform, E = O.width, z = O.icon, L = M.width, j = M.icon, R = It({
				transform: P,
				containerWidth: L,
				iconWidth: E
			}), F = {
				tag: "rect",
				attributes: $({}, Tt, {
					fill: "white"
				})
			}, I = z.children ? {
				children: z.children.map(_t)
			} : {}, T = {
				tag: "g",
				attributes: $({}, R.inner),
				children: [_t($({
					tag: z.tag,
					attributes: $({}, z.attributes, R.path)
				}, I))]
			}, _ = {
				tag: "g",
				attributes: $({}, R.outer),
				children: [T]
			}, U = "mask-".concat(N || Pt()), H = "clip-".concat(N || Pt()), Y = {
				tag: "mask",
				attributes: $({}, Tt, {
					id: U,
					maskUnits: "userSpaceOnUse",
					maskContentUnits: "userSpaceOnUse"
				}),
				children: [F, _]
			}, D = {
				tag: "defs",
				children: [{
					tag: "clipPath",
					attributes: {
						id: H
					},
					children: (A = j, "g" === A.tag ? A.children : [A])
				}, Y]
			}, S.push(D, {
				tag: "rect",
				attributes: $({
					fill: "currentColor",
					"clip-path": "url(#".concat(H, ")"),
					mask: "url(#".concat(U, ")")
				}, Tt)
			}), {
				children: S,
				attributes: C
			}) : function (t) {
				var e = t.children,
					n = t.attributes,
					a = t.main,
					r = t.transform,
					i = Rt(t.styles);
				if (0 < i.length && (n.style = i), Ft(r)) {
					var o = It({
						transform: r,
						containerWidth: a.width,
						iconWidth: a.width
					});
					e.push({
						tag: "g",
						attributes: $({}, o.outer),
						children: [{
							tag: "g",
							attributes: $({}, o.inner),
							children: [{
								tag: a.icon.tag,
								children: a.icon.children,
								attributes: $({}, a.icon.attributes, o.path)
							}]
						}]
					})
				} else e.push(a.icon);
				return {
					children: e,
					attributes: n
				}
			}(B),
			Q = J.children,
			Z = J.attributes;
		return B.children = Q, B.attributes = Z, c ? (q = (V = B).prefix, W = V.iconName, X = V.children, G = V.attributes, K = V.symbol, [{
			tag: "svg",
			attributes: {
				style: "display: none;"
			},
			children: [{
				tag: "symbol",
				attributes: $({}, G, {
					id: !0 === K ? "".concat(q, "-").concat(et.familyPrefix, "-").concat(W) : K
				}),
				children: X
			}]
		}]) : function (t) {
			var e = t.children,
				n = t.main,
				a = t.mask,
				r = t.attributes,
				i = t.styles,
				o = t.transform;
			if (Ft(o) && n.found && !a.found) {
				var c = n.width / n.height / 2,
					s = .5;
				r.style = Rt($({}, i, {
					"transform-origin": "".concat(c + o.x / 16, "em ").concat(s + o.y / 16, "em")
				}))
			}
			return [{
				tag: "svg",
				attributes: r,
				children: e
			}]
		}(B)
	}

	function Ht(t) {
		var e = t.content,
			n = t.width,
			a = t.height,
			r = t.transform,
			i = t.title,
			o = t.extra,
			c = t.watchable,
			s = void 0 !== c && c,
			l = $({}, o.attributes, i ? {
				title: i
			} : {}, {
				class: o.classes.join(" ")
			});
		s && (l[tt] = "");
		var f, u, d, m, h, p, g, v, b, y = $({}, o.styles);
		Ft(r) && (y.transform = (u = (f = {
			transform: r,
			startCentered: !0,
			width: n,
			height: a
		}).transform, d = f.width, m = void 0 === d ? A : d, h = f.height, p = void 0 === h ? A : h, g = f.startCentered, b = "", b += (v = void 0 !== g && g) && k ? "translate(".concat(u.x / Ct - m / 2, "em, ").concat(u.y / Ct - p / 2, "em) ") : v ? "translate(calc(-50% + ".concat(u.x / Ct, "em), calc(-50% + ").concat(u.y / Ct, "em)) ") : "translate(".concat(u.x / Ct, "em, ").concat(u.y / Ct, "em) "), b += "scale(".concat(u.size / Ct * (u.flipX ? -1 : 1), ", ").concat(u.size / Ct * (u.flipY ? -1 : 1), ") "), b += "rotate(".concat(u.rotate, "deg) ")), y["-webkit-transform"] = y.transform);
		var w = Rt(y);
		0 < w.length && (l.style = w);
		var x = [];
		return x.push({
			tag: "span",
			attributes: l,
			children: [e]
		}), i && x.push({
			tag: "span",
			attributes: {
				class: "sr-only"
			},
			children: [i]
		}), x
	}
	var Yt = function () {},
		Dt = et.measurePerformance && f && f.mark && f.measure ? f : {
			mark: Yt,
			measure: Yt
		},
		Vt = 'FA "5.15.4"',
		qt = function (t) {
			Dt.mark("".concat(Vt, " ").concat(t, " ends")), Dt.measure("".concat(Vt, " ").concat(t), "".concat(Vt, " ").concat(t, " begins"), "".concat(Vt, " ").concat(t, " ends"))
		},
		Wt = {
			begin: function (t) {
				return Dt.mark("".concat(Vt, " ").concat(t, " begins")),
					function () {
						return qt(t)
					}
			},
			end: qt
		},
		Xt = function (t, e, n, a) {
			var r, i, o, c, s, l = Object.keys(t),
				f = l.length,
				u = void 0 !== a ? (c = e, s = a, function (t, e, n, a) {
					return c.call(s, t, e, n, a)
				}) : e;
			for (o = void 0 === n ? (r = 1, t[l[0]]) : (r = 0, n); r < f; r++) o = u(o, t[i = l[r]], i, t);
			return o
		};

	function Gt(t) {
		for (var e = "", n = 0; n < t.length; n++) {
			e += ("000" + t.charCodeAt(n).toString(16)).slice(-4)
		}
		return e
	}

	function Kt(t) {
		if (1 !== t.length) return !1;
		var e, n, a, r, i, o = (n = 0, r = (e = t).length, 55296 <= (i = e.charCodeAt(n)) && i <= 56319 && n + 1 < r && 56320 <= (a = e.charCodeAt(n + 1)) && a <= 57343 ? 1024 * (i - 55296) + a - 56320 + 65536 : i);
		return 57344 <= o && o <= 63743
	}

	function Bt(t, a) {
		var e = (2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {}).skipHooks,
			n = void 0 !== e && e,
			r = Object.keys(a).reduce(function (t, e) {
				var n = a[e];
				return !!n.icon ? t[n.iconName] = n.icon : t[e] = n, t
			}, {});
		"function" != typeof J.hooks.addPack || n ? J.styles[t] = $({}, J.styles[t] || {}, r) : J.hooks.addPack(t, r), "fas" === t && Bt("fa", a)
	}
	var Jt = /viewBox="0 0 ([0-9]+) ([0-9]+)"/,
		Qt = /path d="([^"]+)"/,
		Zt = /path d="([^"]+)".*path d="([^"]+)"/;
	var $t = J.styles,
		te = J.shims,
		ee = {},
		ne = {},
		ae = {};

	function re(t, e, n) {
		var a, r, i, o, c, s, l = (i = r = null, o = (a = n).match(Jt), c = a.match(Qt), (s = a.match(Zt)) ? i = [s[1], s[2]] : c && (i = c[1]), o && i && (r = [parseInt(o[1], 10), parseInt(o[2], 10), [], null, i]), r);
		l && !Kt(e) && (Bt(t, u({}, e, l), {
			skipHooks: !0
		}), se()), ie[t][e].map(function (t) {
			t(l)
		}), delete ie[t][e]
	}
	var ie = {};

	function oe(t, e) {
		return Kt(t) ? "unicode/".concat(Gt(t)).concat(void 0 === e ? "" : "-".concat(e), ".svg") : "".concat(t).concat(void 0 === e ? "" : "-".concat(e), ".svg")
	}
	var ce = function (r, i) {
			var t = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {},
				o = "fak" === r,
				e = t.url,
				c = void 0 === e ? et.fetchSvgFrom : e,
				n = t.uploadedSvgUrl,
				s = void 0 === n ? et.fetchUploadedSvgFrom : n,
				l = t.token,
				f = t.version;
			return ie[r] && ie[r][i] || (ie[r] = $({}, ie[r] || {}, u({}, i, []))), new St(function (e, t) {
				if (!c) return t(new Error("No URL available to fetch SVGs from. Specify in params or by setting config.fetchSvgFrom"));
				if (o && !s) return t(new Error("No URL available to fetch kit SVGs from. Specify in params or by setting config.fetchKitSvgFrom"));
				var n = o ? "".concat(s, "/").concat(l, "/icons/").concat(oe(i, f)) : "".concat(c, "/").concat(z[r], "/").concat(oe(i));
				if (l && (n = "".concat(n, "?token=").concat(l)), J.styles[r] && J.styles[r][i]) return e(J.styles[r][i]);
				if (ie[r][i].push(function (t) {
						e(t)
					}), 1 === ie[r][i].length)
					if ("function" == typeof fetch) fetch(n, {
						mode: "cors"
					}).then(function (t) {
						return t.text()
					}).then(function (t) {
						re(r, i, t)
					}).catch(function () {
						re(r, i, "")
					});
					else if ("function" == typeof XMLHttpRequest) {
					var a = new XMLHttpRequest;
					a.addEventListener("loadend", function () {
						this.responseText ? re(r, i, this.responseText) : re(r, i, "")
					}), a.open("GET", n), a.send()
				} else re(r, i, "")
			})
		},
		se = function () {
			var t = function (a) {
				return Xt($t, function (t, e, n) {
					return t[n] = Xt(e, a, {}), t
				}, {})
			};
			ee = t(function (t, e, n) {
				return e[3] && (t[e[3]] = n), t
			}), ne = t(function (e, t, n) {
				var a = t[2];
				return e[n] = n, a.forEach(function (t) {
					e[t] = n
				}), e
			});
			var i = "far" in $t;
			ae = Xt(te, function (t, e) {
				var n = e[0],
					a = e[1],
					r = e[2];
				return "far" !== a || i || (a = "fas"), t[n] = {
					prefix: a,
					iconName: r
				}, t
			}, {})
		};

	function le(t, e) {
		return (ee[t] || {})[e]
	}
	se();
	var fe = J.styles,
		ue = function () {
			return {
				prefix: null,
				iconName: null,
				rest: []
			}
		};

	function de(t) {
		return t.reduce(function (t, e) {
			var n = Lt(et.familyPrefix, e);
			if (fe[e]) t.prefix = e;
			else if (et.autoFetchSvg && -1 < Object.keys(z).indexOf(e)) t.prefix = e;
			else if (n) {
				var a = "fa" === t.prefix ? ae[n] || {
					prefix: null,
					iconName: null
				} : {};
				t.iconName = a.iconName || n, t.prefix = a.prefix || t.prefix
			} else e !== et.replacementClass && 0 !== e.indexOf("fa-w-") && t.rest.push(e);
			return t
		}, ue())
	}

	function me(t, e, n) {
		if (t && t[e] && t[e][n]) return {
			prefix: e,
			iconName: n,
			icon: t[e][n]
		}
	}

	function he(t) {
		var n, e = t.tag,
			a = t.attributes,
			r = void 0 === a ? {} : a,
			i = t.children,
			o = void 0 === i ? [] : i;
		return "string" == typeof t ? jt(t) : "<".concat(e, " ").concat((n = r, Object.keys(n || {}).reduce(function (t, e) {
			return t + "".concat(e, '="').concat(jt(n[e]), '" ')
		}, "").trim()), ">").concat(o.map(he).join(""), "</").concat(e, ">")
	}
	var pe = function () {};

	function ge(t) {
		return "string" == typeof (t.getAttribute ? t.getAttribute(tt) : null)
	}
	var ve = {
		replace: function (t) {
			var e = t[0],
				n = t[1].map(function (t) {
					return he(t)
				}).join("\n");
			if (e.parentNode && e.outerHTML) e.outerHTML = n + (et.keepOriginalSource && "svg" !== e.tagName.toLowerCase() ? "\x3c!-- ".concat(e.outerHTML, " Font Awesome fontawesome.com --\x3e") : "");
			else if (e.parentNode) {
				var a = document.createElement("span");
				e.parentNode.replaceChild(a, e), a.outerHTML = n
			}
		},
		nest: function (t) {
			var e = t[0],
				n = t[1];
			if (~zt(e).indexOf(et.replacementClass)) return ve.replace(t);
			var a = new RegExp("".concat(et.familyPrefix, "-.*"));
			delete n[0].attributes.style, delete n[0].attributes.id;
			var r = n[0].attributes.class.split(" ").reduce(function (t, e) {
				return e === et.replacementClass || e.match(a) ? t.toSvg.push(e) : t.toNode.push(e), t
			}, {
				toNode: [],
				toSvg: []
			});
			n[0].attributes.class = r.toSvg.join(" ");
			var i = n.map(function (t) {
				return he(t)
			}).join("\n");
			e.setAttribute("class", r.toNode.join(" ")), e.setAttribute(tt, ""), e.innerHTML = i
		}
	};

	function be(t) {
		t()
	}

	function ye(n, t) {
		var a = "function" == typeof t ? t : pe;
		if (0 === n.length) a();
		else {
			var e = be;
			et.mutateApproach === N && (e = v.requestAnimationFrame || be), e(function () {
				var t = !0 === et.autoReplaceSvg ? ve.replace : ve[et.autoReplaceSvg] || ve.replace,
					e = Wt.begin("mutate");
				n.map(t), e(), a()
			})
		}
	}
	var we = !1;

	function xe() {
		we = !1
	}
	var ke = null;

	function Ae(t) {
		if (l && et.observeMutations) {
			var r = t.treeCallback,
				i = t.nodeCallback,
				o = t.pseudoElementsCallback,
				e = t.observeMutationsRoot,
				n = void 0 === e ? b : e;
			ke = new l(function (t) {
				we || Et(t).forEach(function (t) {
					if ("childList" === t.type && 0 < t.addedNodes.length && !ge(t.addedNodes[0]) && (et.searchPseudoElements && o(t.target), r(t.target)), "attributes" === t.type && t.target.parentNode && et.searchPseudoElements && o(t.target.parentNode), "attributes" === t.type && ge(t.target) && ~_.indexOf(t.attributeName))
						if ("class" === t.attributeName) {
							var e = de(zt(t.target)),
								n = e.prefix,
								a = e.iconName;
							n && t.target.setAttribute("data-prefix", n), a && t.target.setAttribute("data-icon", a)
						} else i(t.target)
				})
			}), p && ke.observe(n, {
				childList: !0,
				attributes: !0,
				characterData: !0,
				subtree: !0
			})
		}
	}

	function Se(t) {
		var e, n, a = t.getAttribute("data-prefix"),
			r = t.getAttribute("data-icon"),
			i = void 0 !== t.innerText ? t.innerText.trim() : "",
			o = de(zt(t));
		return a && r && (o.prefix = a, o.iconName = r), o.prefix && 1 < i.length ? o.iconName = (e = o.prefix, n = t.innerText, (ne[e] || {})[n]) : o.prefix && 1 === i.length && (o.iconName = le(o.prefix, Gt(t.innerText))), o
	}
	var Ce = function (t) {
		var e = {
			size: 16,
			x: 0,
			y: 0,
			flipX: !1,
			flipY: !1,
			rotate: 0
		};
		return t ? t.toLowerCase().split(" ").reduce(function (t, e) {
			var n = e.toLowerCase().split("-"),
				a = n[0],
				r = n.slice(1).join("-");
			if (a && "h" === r) return t.flipX = !0, t;
			if (a && "v" === r) return t.flipY = !0, t;
			if (r = parseFloat(r), isNaN(r)) return t;
			switch (a) {
				case "grow":
					t.size = t.size + r;
					break;
				case "shrink":
					t.size = t.size - r;
					break;
				case "left":
					t.x = t.x - r;
					break;
				case "right":
					t.x = t.x + r;
					break;
				case "up":
					t.y = t.y - r;
					break;
				case "down":
					t.y = t.y + r;
					break;
				case "rotate":
					t.rotate = t.rotate + r
			}
			return t
		}, e) : e
	};

	function Oe(t) {
		var e, n, a, r, i, o, c, s, l = Se(t),
			f = l.iconName,
			u = l.prefix,
			d = l.rest,
			m = (e = t.getAttribute("style"), n = [], e && (n = e.split(";").reduce(function (t, e) {
				var n = e.split(":"),
					a = n[0],
					r = n.slice(1);
				return a && 0 < r.length && (t[a] = r.join(":").trim()), t
			}, {})), n),
			h = Ce(t.getAttribute("data-fa-transform")),
			p = null !== (a = t.getAttribute("data-fa-symbol")) && ("" === a || a),
			g = (i = Et((r = t).attributes).reduce(function (t, e) {
				return "class" !== t.name && "style" !== t.name && (t[e.name] = e.value), t
			}, {}), o = r.getAttribute("title"), c = r.getAttribute("data-fa-title-id"), et.autoA11y && (o ? i["aria-labelledby"] = "".concat(et.replacementClass, "-title-").concat(c || Pt()) : (i["aria-hidden"] = "true", i.focusable = "false")), i),
			v = (s = t.getAttribute("data-fa-mask")) ? de(s.split(" ").map(function (t) {
				return t.trim()
			})) : ue();
		return {
			iconName: f,
			title: t.getAttribute("title"),
			titleId: t.getAttribute("data-fa-title-id"),
			prefix: u,
			transform: h,
			symbol: p,
			mask: v,
			maskId: t.getAttribute("data-fa-mask-id"),
			extra: {
				classes: d,
				styles: m,
				attributes: g
			}
		}
	}

	function Me(t) {
		this.name = "MissingIcon", this.message = t || "Icon unavailable", this.stack = (new Error).stack
	}(Me.prototype = Object.create(Error.prototype)).constructor = Me;
	var Ne = {
			fill: "currentColor"
		},
		Pe = {
			attributeType: "XML",
			repeatCount: "indefinite",
			dur: "2s"
		},
		Ee = {
			tag: "path",
			attributes: $({}, Ne, {
				d: "M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"
			})
		},
		ze = $({}, Pe, {
			attributeName: "opacity"
		}),
		Le = {
			tag: "g",
			children: [Ee, {
				tag: "circle",
				attributes: $({}, Ne, {
					cx: "256",
					cy: "364",
					r: "28"
				}),
				children: [{
					tag: "animate",
					attributes: $({}, Pe, {
						attributeName: "r",
						values: "28;14;28;28;14;28;"
					})
				}, {
					tag: "animate",
					attributes: $({}, ze, {
						values: "1;0;1;1;0;1;"
					})
				}]
			}, {
				tag: "path",
				attributes: $({}, Ne, {
					opacity: "1",
					d: "M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z"
				}),
				children: [{
					tag: "animate",
					attributes: $({}, ze, {
						values: "1;0;0;0;0;1;"
					})
				}]
			}, {
				tag: "path",
				attributes: $({}, Ne, {
					opacity: "0",
					d: "M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z"
				}),
				children: [{
					tag: "animate",
					attributes: $({}, ze, {
						values: "0;0;1;1;0;0;"
					})
				}]
			}]
		},
		je = J.styles;

	function Re(t) {
		var e = t[0],
			n = t[1],
			a = h(t.slice(4), 1)[0];
		return {
			found: !0,
			width: e,
			height: n,
			icon: Array.isArray(a) ? {
				tag: "g",
				attributes: {
					class: "".concat(et.familyPrefix, "-").concat(U.GROUP)
				},
				children: [{
					tag: "path",
					attributes: {
						class: "".concat(et.familyPrefix, "-").concat(U.SECONDARY),
						fill: "currentColor",
						d: a[0]
					}
				}, {
					tag: "path",
					attributes: {
						class: "".concat(et.familyPrefix, "-").concat(U.PRIMARY),
						fill: "currentColor",
						d: a[1]
					}
				}]
			} : {
				tag: "path",
				attributes: {
					fill: "currentColor",
					d: a
				}
			}
		}
	}

	function Fe(o, c) {
		return new St(function (n, t) {
			var a = {
				found: !1,
				width: 512,
				height: 512,
				icon: Le
			};
			if (o && c && je[c] && je[c][o]) {
				var e = je[c][o];
				return n(Re(e))
			}
			var r = {},
				i = function () {
					var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {},
						e = 1 < arguments.length ? arguments[1] : void 0;
					if (e && Kt(e)) {
						if (t && t.iconUploads) {
							var n = t.iconUploads,
								a = Object.keys(n).find(function (t) {
									return n[t] && n[t].u && n[t].u === Gt(e)
								});
							if (a) return n[a].v
						}
					} else if (t && t.iconUploads && t.iconUploads[e] && t.iconUploads[e].v) return t.iconUploads[e].v
				}(v.FontAwesomeKitConfig, o);
			if (v.FontAwesomeKitConfig && v.FontAwesomeKitConfig.token && (r.token = v.FontAwesomeKitConfig.token), "fak" === c && (r.version = i), o && c && et.autoFetchSvg) return ce(c, o, $({}, r)).then(function (t) {
				var e = {};
				t && (e = Re(t)), n($({}, a, e))
			}).catch(t);
			o && c && !et.showMissingIcons ? t(new Me("Icon is missing for prefix ".concat(c, " with icon name ").concat(o))) : n(a)
		})
	}
	var Ie = J.styles;

	function Te(t) {
		var i, e, o, c, s, l, f, u, n, d, m, a = Oe(t);
		return ~a.extra.classes.indexOf(j) ? function (t, e) {
			var n = e.title,
				a = e.transform,
				r = e.extra,
				i = null,
				o = null;
			if (k) {
				var c = parseInt(getComputedStyle(t).fontSize, 10),
					s = t.getBoundingClientRect();
				i = s.width / c, o = s.height / c
			}
			return et.autoA11y && !n && (r.attributes["aria-hidden"] = "true"), St.resolve([t, Ht({
				content: t.innerHTML,
				width: i,
				height: o,
				transform: a,
				title: n,
				extra: r,
				watchable: !0
			})])
		}(t, a) : (i = t, o = (e = a).iconName, c = e.title, s = e.titleId, l = e.prefix, f = e.transform, u = e.symbol, n = e.mask, d = e.maskId, m = e.extra, new St(function (r, t) {
			St.all([Fe(o, l), Fe(n.iconName, n.prefix)]).then(function (t) {
				var e = h(t, 2),
					n = e[0],
					a = e[1];
				r([i, Ut({
					icons: {
						main: n,
						mask: a
					},
					prefix: l,
					iconName: o,
					transform: f,
					symbol: u,
					mask: a,
					maskId: d,
					title: c,
					titleId: s,
					extra: m,
					watchable: !0
				})])
			})
		}))
	}

	function _e(t) {
		var n = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : null;
		if (p) {
			var e = b.documentElement.classList,
				a = function (t) {
					return e.add("".concat(M, "-").concat(t))
				},
				r = function (t) {
					return e.remove("".concat(M, "-").concat(t))
				},
				i = et.autoFetchSvg ? Object.keys(z) : Object.keys(Ie),
				o = [".".concat(j, ":not([").concat(tt, "])")].concat(i.map(function (t) {
					return ".".concat(t, ":not([").concat(tt, "])")
				})).join(", ");
			if (0 !== o.length) {
				var c = [];
				try {
					c = Et(t.querySelectorAll(o))
				} catch (t) {}
				if (0 < c.length) {
					a("pending"), r("complete");
					var s = Wt.begin("onTree"),
						l = c.reduce(function (t, e) {
							try {
								var n = Te(e);
								n && t.push(n)
							} catch (t) {
								E || t instanceof Me && console.error(t)
							}
							return t
						}, []);
					return new St(function (e, t) {
						St.all(l).then(function (t) {
							ye(t, function () {
								a("active"), a("complete"), r("pending"), "function" == typeof n && n(), s(), e()
							})
						}).catch(function () {
							s(), t()
						})
					})
				}
			}
		}
	}

	function Ue(t) {
		var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : null;
		Te(t).then(function (t) {
			t && ye([t], e)
		})
	}

	function He(h, p) {
		var g = "".concat(S).concat(p.replace(":", "-"));
		return new St(function (a, t) {
			if (null !== h.getAttribute(g)) return a();
			var e = Et(h.children).filter(function (t) {
					return t.getAttribute(x) === p
				})[0],
				n = v.getComputedStyle(h, p),
				r = n.getPropertyValue("font-family").match(R),
				i = n.getPropertyValue("font-weight"),
				o = n.getPropertyValue("content");
			if (e && !r) return h.removeChild(e), a();
			if (r && "none" !== o && "" !== o) {
				var c = n.getPropertyValue("content"),
					s = ~["Solid", "Regular", "Light", "Duotone", "Brands", "Kit"].indexOf(r[2]) ? L[r[2].toLowerCase()] : F[i],
					l = Gt(3 === c.length ? c.substr(1, 1) : c),
					f = le(s, l),
					u = f;
				if (u || (u = l), f || (f = String.fromCharCode(parseInt(l, 16))), !f || e && e.getAttribute(C) === s && e.getAttribute(O) === u) a();
				else {
					h.setAttribute(g, u), e && h.removeChild(e);
					var d = {
							iconName: null,
							title: null,
							titleId: null,
							prefix: null,
							transform: Ot,
							symbol: !1,
							mask: null,
							maskId: null,
							extra: {
								classes: [],
								styles: {},
								attributes: {}
							}
						},
						m = d.extra;
					m.attributes[x] = p, Fe(f, s).then(function (t) {
						var e = Ut($({}, d, {
								icons: {
									main: t,
									mask: ue()
								},
								prefix: s,
								iconName: u,
								extra: m,
								watchable: !0
							})),
							n = b.createElement("svg");
						":before" === p ? h.insertBefore(n, h.firstChild) : h.appendChild(n), n.outerHTML = e.map(function (t) {
							return he(t)
						}).join("\n"), h.removeAttribute(g), a()
					}).catch(t)
				}
			} else a()
		})
	}

	function Ye(t) {
		return St.all([He(t, ":before"), He(t, ":after")])
	}

	function De(t) {
		return !(t.parentNode === document.head || ~P.indexOf(t.tagName.toUpperCase()) || t.getAttribute(x) || t.parentNode && "svg" === t.parentNode.tagName)
	}

	function Ve(r) {
		if (p) return new St(function (t, e) {
			var n = Et(r.querySelectorAll("*")).filter(De).map(Ye),
				a = Wt.begin("searchPseudoElements");
			we = !0, St.all(n).then(function () {
				a(), xe(), t()
			}).catch(function () {
				a(), xe(), e()
			})
		})
	}
	var qe = "svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;-webkit-box-sizing:border-box;box-sizing:border-box;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.3333333333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2.5em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1.25em}.svg-inline--fa.fa-stack-2x{height:2em;width:2.5em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}.svg-inline--fa .fa-primary{fill:var(--fa-primary-color,currentColor);opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa .fa-secondary{fill:var(--fa-secondary-color,currentColor);opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-primary{opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-secondary{opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa mask .fa-primary,.svg-inline--fa mask .fa-secondary{fill:#000}.fad.fa-inverse{color:#fff}";

	function We() {
		var t = y,
			e = w,
			n = et.familyPrefix,
			a = et.replacementClass,
			r = qe;
		if (n !== t || a !== e) {
			var i = new RegExp("\\.".concat(t, "\\-"), "g"),
				o = new RegExp("\\--".concat(t, "\\-"), "g"),
				c = new RegExp("\\.".concat(e), "g");
			r = r.replace(i, ".".concat(n, "-")).replace(o, "--".concat(n, "-")).replace(c, ".".concat(a))
		}
		return r
	}

	function Xe() {
		et.autoAddCss && !Qe && (Mt(We()), Qe = !0)
	}

	function Ge(e, t) {
		return Object.defineProperty(e, "abstract", {
			get: t
		}), Object.defineProperty(e, "html", {
			get: function () {
				return e.abstract.map(function (t) {
					return he(t)
				})
			}
		}), Object.defineProperty(e, "node", {
			get: function () {
				if (p) {
					var t = b.createElement("div");
					return t.innerHTML = e.html, t.children
				}
			}
		}), e
	}

	function Ke(t) {
		var e = t.prefix,
			n = void 0 === e ? "fa" : e,
			a = t.iconName;
		if (a) return me(Je.definitions, n, a) || me(J.styles, n, a)
	}
	var Be, Je = new(function () {
			function t() {
				! function (t, e) {
					if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
				}(this, t), this.definitions = {}
			}
			var e, n, a;
			return e = t, (n = [{
				key: "add",
				value: function () {
					for (var e = this, t = arguments.length, n = new Array(t), a = 0; a < t; a++) n[a] = arguments[a];
					var r = n.reduce(this._pullDefinitions, {});
					Object.keys(r).forEach(function (t) {
						e.definitions[t] = $({}, e.definitions[t] || {}, r[t]), Bt(t, r[t]), se()
					})
				}
			}, {
				key: "reset",
				value: function () {
					this.definitions = {}
				}
			}, {
				key: "_pullDefinitions",
				value: function (i, t) {
					var o = t.prefix && t.iconName && t.icon ? {
						0: t
					} : t;
					return Object.keys(o).map(function (t) {
						var e = o[t],
							n = e.prefix,
							a = e.iconName,
							r = e.icon;
						i[n] || (i[n] = {}), i[n][a] = r
					}), i
				}
			}]) && i(e.prototype, n), a && i(e, a), t
		}()),
		Qe = !1,
		Ze = {
			i2svg: function () {
				var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
				if (p) {
					Xe();
					var e = t.node,
						n = void 0 === e ? b : e,
						a = t.callback,
						r = void 0 === a ? function () {} : a;
					return et.searchPseudoElements && Ve(n), _e(n, r)
				}
				return St.reject("Operation requires a DOM of some kind.")
			},
			css: We,
			insertCss: function () {
				Qe || (Mt(We()), Qe = !0)
			},
			watch: function () {
				var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {},
					e = t.autoReplaceSvgRoot,
					n = t.observeMutationsRoot;
				!1 === et.autoReplaceSvg && (et.autoReplaceSvg = !0), et.observeMutations = !0, nt(function () {
					en({
						autoReplaceSvgRoot: e
					}), Ae({
						treeCallback: _e,
						nodeCallback: Ue,
						pseudoElementsCallback: Ve,
						observeMutationsRoot: n
					})
				})
			}
		},
		$e = (Be = function (t) {
			var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {},
				n = e.transform,
				a = void 0 === n ? Ot : n,
				r = e.symbol,
				i = void 0 !== r && r,
				o = e.mask,
				c = void 0 === o ? null : o,
				s = e.maskId,
				l = void 0 === s ? null : s,
				f = e.title,
				u = void 0 === f ? null : f,
				d = e.titleId,
				m = void 0 === d ? null : d,
				h = e.classes,
				p = void 0 === h ? [] : h,
				g = e.attributes,
				v = void 0 === g ? {} : g,
				b = e.styles,
				y = void 0 === b ? {} : b;
			if (t) {
				var w = t.prefix,
					x = t.iconName,
					k = t.icon;
				return Ge($({
					type: "icon"
				}, t), function () {
					return Xe(), et.autoA11y && (u ? v["aria-labelledby"] = "".concat(et.replacementClass, "-title-").concat(m || Pt()) : (v["aria-hidden"] = "true", v.focusable = "false")), Ut({
						icons: {
							main: Re(k),
							mask: c ? Re(c.icon) : {
								found: !1,
								width: null,
								height: null,
								icon: {}
							}
						},
						prefix: w,
						iconName: x,
						transform: $({}, Ot, a),
						symbol: i,
						title: u,
						maskId: l,
						titleId: m,
						extra: {
							attributes: v,
							styles: y,
							classes: p
						}
					})
				})
			}
		}, function (t) {
			var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {},
				n = (t || {}).icon ? t : Ke(t || {}),
				a = e.mask;
			return a && (a = (a || {}).icon ? a : Ke(a || {})), Be(n, $({}, e, {
				mask: a
			}))
		}),
		tn = {
			noAuto: function () {
				et.autoReplaceSvg = !1, et.observeMutations = !1, ke && ke.disconnect()
			},
			config: et,
			dom: Ze,
			library: Je,
			parse: {
				transform: function (t) {
					return Ce(t)
				}
			},
			findIconDefinition: Ke,
			icon: $e,
			text: function (t) {
				var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {},
					n = e.transform,
					a = void 0 === n ? Ot : n,
					r = e.title,
					i = void 0 === r ? null : r,
					o = e.classes,
					c = void 0 === o ? [] : o,
					s = e.attributes,
					l = void 0 === s ? {} : s,
					f = e.styles,
					u = void 0 === f ? {} : f;
				return Ge({
					type: "text",
					content: t
				}, function () {
					return Xe(), Ht({
						content: t,
						transform: $({}, Ot, a),
						title: i,
						extra: {
							attributes: l,
							styles: u,
							classes: ["".concat(et.familyPrefix, "-layers-text")].concat(d(c))
						}
					})
				})
			},
			counter: function (t) {
				var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {},
					n = e.title,
					a = void 0 === n ? null : n,
					r = e.classes,
					i = void 0 === r ? [] : r,
					o = e.attributes,
					c = void 0 === o ? {} : o,
					s = e.styles,
					l = void 0 === s ? {} : s;
				return Ge({
					type: "counter",
					content: t
				}, function () {
					return Xe(),
						function (t) {
							var e = t.content,
								n = t.title,
								a = t.extra,
								r = $({}, a.attributes, n ? {
									title: n
								} : {}, {
									class: a.classes.join(" ")
								}),
								i = Rt(a.styles);
							0 < i.length && (r.style = i);
							var o = [];
							return o.push({
								tag: "span",
								attributes: r,
								children: [e]
							}), n && o.push({
								tag: "span",
								attributes: {
									class: "sr-only"
								},
								children: [n]
							}), o
						}({
							content: t.toString(),
							title: a,
							extra: {
								attributes: c,
								styles: l,
								classes: ["".concat(et.familyPrefix, "-layers-counter")].concat(d(i))
							}
						})
				})
			},
			layer: function (t) {
				var e = (1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {}).classes,
					n = void 0 === e ? [] : e;
				return Ge({
					type: "layer"
				}, function () {
					Xe();
					var e = [];
					return t(function (t) {
						Array.isArray(t) ? t.map(function (t) {
							e = e.concat(t.abstract)
						}) : e = e.concat(t.abstract)
					}), [{
						tag: "span",
						attributes: {
							class: ["".concat(et.familyPrefix, "-layers")].concat(d(n)).join(" ")
						},
						children: e
					}]
				})
			},
			toHtml: he
		},
		en = function () {
			var t = (0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {}).autoReplaceSvgRoot,
				e = void 0 === t ? b : t;
			(0 < Object.keys(J.styles).length || et.autoFetchSvg) && p && et.autoReplaceSvg && tn.dom.i2svg({
				node: e
			})
		};
	! function (t) {
		try {
			t()
		} catch (t) {
			if (!E) throw t
		}
	}(function () {
		m && (v.FontAwesome || (v.FontAwesome = tn), nt(function () {
			en(), Ae({
				treeCallback: _e,
				nodeCallback: Ue,
				pseudoElementsCallback: Ve
			})
		})), J.hooks = $({}, J.hooks, {
			addPack: function (t, e) {
				J.styles[t] = $({}, J.styles[t] || {}, e), se(), en()
			},
			addShims: function (t) {
				var e;
				(e = J.shims).push.apply(e, d(t)), se(), en()
			}
		})
	})
}();