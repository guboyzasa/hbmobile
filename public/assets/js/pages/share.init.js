! function(pe, _e) {
    var e, s, v, h, k, fe, b, w, i, o, x, A, S, me, t, he, ge, C, c, g, d, ye, u, y, F, E, p, a, ve, n, B, T, L, ke, r, N, l, z, be, I, we, j, M, xe, _, Ae, Se, Ce, D, f, Fe, O, H, P, Ee, m, R, $, U, W, q, Y, V, J, G, K, X, Be, Te, Le, Q, Z, ee, ae, te, ne, ie, oe, re, le, se, ce, Ne, de, ue, ze, Ie, je, Me, De, Oe, He, Pe, Re, $e, Ue, We, qe, Ye, Ve, Je, Ge, Ke, Xe, Qe, Ze;
    "object" == typeof pe.a2a && pe.a2a.init ? pe.a2a.init_all("page") : (e = this && this.__assign || function() {
        return (e = Object.assign || function(e) {
            for (var a, t = 1, n = arguments.length; t < n; t++)
                for (var i in a = arguments[t]) Object.prototype.hasOwnProperty.call(a, i) && (e[i] = a[i]);
            return e
        }).apply(this, arguments)
    }, s = function() {}, v = void 0, pe.a2a_config = pe.a2a_config || {}, Ze = { localize: pe.a2a_localize || {}, static_server: pe.a2a_config.static_server || "https://static.addtoany.com/menu", http_s: "http:" != _e.location.protocol ? "s" : "", templates: {}, track_links: !1, track_links_key: "", callbacks: [], tracking_callback: v, add_services: !1, thanks: {}, locale: v, no_3p: v, icon_color: v, color_main: v, color_bg: v, color_border: v, color_link_text: v, color_link_text_hover: v, counts: v, overlays: [] }, h = { onclick: !1, num_services: 8, prioritize: v, exclude_services: v, custom_services: v, delay: 0, show_menu: v, bookmarklet: v }, k = { linkmedia: v, linkname: v, linkurl: v, linkname_escape: v, menu_type: v, orientation: v, target: v }, fe = e(e(e({}, Ze), h), k), w = function(e) { for (var a in e) fe[a] = e[a], pe.a2a_config[a] && (pe.a2a_config[a] = e[a]) }, (b = function() { for (var e in pe.a2a_config) fe[e] = pe.a2a_config[e] })(), i = "https://static.addtoany.com/menu", o = ["feed", "mail", "page"], x = "", S = A = 0, me = {}, t = { feed: [], page: [] }, he = [], ge = [], g = c = C = v, d = _e.getElementsByTagName("head")[0], ye = function() {
        if (!_e.querySelector) return !1;
        var e = _e.querySelector('meta[property="og:url"]'),
            a = e ? e.getAttribute("content") : !!(a = _e.querySelector('link[rel="canonical"]')) && a.href;
        return a
    }(), u = _e.currentScript && _e.currentScript.nonce ? _e.currentScript.nonce : null, y = function() { for (var e = -1, a = _e.createElement("b"); a.innerHTML = "\x3c!--[if gt IE " + ++e + "]>1<![endif]--\x3e", +a.innerHTML;); return y = function() { return e }, e }, F = navigator.userAgent.match(/Mobi/) || "screen" in pe && pe.screen.width < 1366, E = "ontouchend" in pe, p = {
        isReady: !1,
        ready: function(e) {
            function a() {
                if (!_e.body) return setTimeout(function() { p.ready(e) });
                e(), p.isReady = !0
            }
            var t = function(e) {!_e.addEventListener && "load" !== e.type && "complete" !== _e.readyState || (_e.removeEventListener("DOMContentLoaded", t, !1), pe.removeEventListener("load", t, !1), a()) };
            "complete" === _e.readyState ? a() : _e.addEventListener && (_e.addEventListener("DOMContentLoaded", t, !1), pe.addEventListener("load", t, !1))
        }
    }, a = function() { x = "page", Be("ready"), a = s }, ve = function(e, a) {
        b();
        var t, n, i, o, r, l, s, c, d, u, p, _, f = fe,
            a = a || {},
            m = {},
            h = null,
            g = {},
            y = location.href;
        for (i in Xe(e), a) f[i] = a[i];
        for (i in f) m[i] = f[i];
        if (n = f.target)
            if ("string" == typeof n) {
                if (t = n.substr(0, 1), n = n.substr(1), "." == t) return B(we(I(n, _e)), e, a), void(f.target = v);
                0 <= (n = (h = be(n)).className).indexOf("a2a_kit") && n.indexOf("a2a_target") < 0 && (h = null)
            } else h = f.target;
        g.type = x, g.node = h, g.linkmedia = f.linkmedia, g.linkname = f.linkname || _e.title || location.href, g.linkurl = f.linkurl || location.href, g.linkname_escape = f.linkname_escape, g.linkname_implicit = !f.linkname_escape && (_e.title || y) == g.linkname, g.linkurl_implicit = y == g.linkurl, g.orientation = f.orientation || !1, g.track_links = f.track_links || !1, g.track_links_key = f.track_links_key || "", w(k), "custom" == fe.track_links && (fe.track_links = pe.a2a_config.track_links = !1, fe.track_links_key = pe.a2a_config.track_links_key = ""), pe["a2a" + x + "_init"] = 1, o = g, r = m, s = (me["n" + (A = ++S)] = o).node = z(o.node), c = me[e], d = _e.createElement("div"), u = Ee(s)["a2a-media"], p = Ee(s)["a2a-title"], _ = Ee(s)["a2a-url"], s ? (o.linkname_escape && (l = I("a2a_linkname_escape", s.parentNode)[0] || I("a2a_linkname_escape", s.parentNode.parentNode)[0]) && (o.linkname = l.textContent || l.innerText), o.linkmedia = r.linkmedia = u || o.linkmedia, o.linkname = r.linkname = p || o.linkname, o.linkurl = r.linkurl = _ || o.linkurl, p && (o.linkname_implicit = !1), _ && (o.linkurl_implicit = !1), "textContent" in _e ? d.textContent = o.linkname : d.innerText = o.linkname, (d = d.childNodes[0]) && (o.linkname = d.nodeValue), s.a2a_kit ? L(o, r) : T(o)) : c.show_menu || S--, N()
    }, n = function(a) { l(function(e) { 0 <= e.className.indexOf("a2a_follow") ? ve("feed", { target: e }) : ve(a || "page", { target: e }) }, !0) || !be("a2a_menu_container") || N.a2a_done || ve(a) }, B = function(e, a, t) { for (var n = 0, i = e.length; n < i; n++) t.target = e[n], ve(a, t) }, T = function(e) {
        var t = e.node,
            n = e.type,
            i = "a2a" + n,
            o = be(i + "_dropdown"),
            a = be(i + "_full"),
            r = t.firstChild,
            l = me[n].onclick;
        t.getAttribute("onclick") && -1 != (t.getAttribute("onclick") + "").indexOf("a2a_") || t.getAttribute("onmouseover") && -1 != (t.getAttribute("onmouseover") + "").indexOf("a2a_") || (xe(t, "click", function(e) {
            Ae(e), _(e);
            var a = !!R(o),
                e = _e.activeElement;
            a ? P("none", n) : 2 !== l && (ne(t), me[n].last_focus = e, o.focus()), (a && R(be(i + "_show_more_less")) || 2 === l) && "mail" != n && (te(), me[n].last_focus = e)
        }), xe(t, "click", _), xe(t, "touchstart", _, !!M() && { passive: !0 }), me[x].onclick || (me[x].delay ? t.onmouseenter = function() { me[x].over_delay = setTimeout(function() { ne(t) }, me[x].delay) } : t.onmouseenter = function() { ne(t) }, t.onmouseleave = function() { O(), me[x].over_delay && clearTimeout(me[x].over_delay) }), xe(t, "mouseenter", function() { a.style.willChange = "transform, opacity", be("a2a_overlay").style.willChange = "backdrop-filter, opacity" })), "a" == t.tagName.toLowerCase() && "page" == x && (t.href = "https://www.addtoany.com/share#url=" + encodeURIComponent(e.linkurl) + "&title=" + encodeURIComponent(e.linkname).replace(/'/g, "%27")), r && void 0 !== r.srcset && /\/share_save_171_16.(?:gif|png)$/.test(r.src) && (r.srcset = "https://static.addtoany.com/buttons/share_save_342_32.png 2x")
    }, L = function(n, e) {
        function a(e, a) {
            if (e && !Ce(e, o))
                for (var t = 0, n = a ? me[p].services.most.concat(me[p].services.email) : he, i = n.length; t < i; t++)
                    if (e == n[t][1]) return [n[t][0], n[t][2], n[t][3], n[t][4], n[t][5]];
            return !a && [e, e]
        }

        function r(e, a) { for (var t, n = 0, i = e.attributes.length, o = a; n < i; n++)(t = e.attributes[n]).name && "data-" == t.name.substr(0, 5) && (o[t.name.substr(5)] = t.value); return o }

        function t() { v = n.linkurl = Ee(_)["a2a-url"] || v, b = n.linkname = Ee(_)["a2a-title"] || b, w = n.linkmedia = Ee(_)["a2a-media"] || w, Te(this) }

        function u(e, a, t) { return e = { node: a, service: e, title: b, url: v, media: w, mediaNode: _.a2a_mediaNode }, void 0 !== (e = Be("share", e)) && (e.url && (n.linkurl = e.url, n.linkurl_implicit = !1), e.title && (n.linkname = e.title, n.linkname_implicit = !1), e.media && (n.linkmedia = e.media), Te(a), e.stop && t && Ae(t)), e }
        var p = n.type,
            i = { behance: { name: "Behance", icon: "behance", color: "007EFF", url: "https://www.behance.net/${id}" }, discord: { name: "Discord", icon: "discord", color: "5865F2", url: "https://discord.com/invite/${id}" }, facebook: { name: "Facebook", icon: "facebook", color: "1877f2", url: "https://www.facebook.com/${id}" }, flickr: { name: "Flickr", icon: "flickr", color: "FF0084", url: "https://www.flickr.com/photos/${id}" }, foursquare: { name: "Foursquare", icon: "foursquare", color: "F94877", url: "https://foursquare.com/${id}" }, github: { name: "GitHub", icon: "github", color: "2A2A2A", url: "https://github.com/${id}" }, instagram: { name: "Instagram", icon: "instagram", color: "E4405F", url: "https://www.instagram.com/${id}" }, linkedin: { name: "LinkedIn", icon: "linkedin", color: "007BB5", url: "https://www.linkedin.com/in/${id}" }, linkedin_company: { name: "LinkedIn", icon: "linkedin", color: "007BB5", url: "https://www.linkedin.com/company/${id}" }, medium: { name: "Medium", icon: "medium", color: "2A2A2A", url: "https://medium.com/@${id}" }, pinterest: { name: "Pinterest", icon: "pinterest", color: "BD081C", url: "https://www.pinterest.com/${id}" }, snapchat: { name: "Snapchat", icon: "snapchat", color: "2A2A2A", url: "https://www.snapchat.com/add/${id}" }, tumblr: { name: "Tumblr", icon: "tumblr", color: "35465C", url: "https://${id}.tumblr.com" }, twitter: { name: "Twitter", icon: "twitter", color: "1D9BF0", url: "https://twitter.com/${id}" }, vimeo: { name: "Vimeo", icon: "vimeo", color: "1AB7EA", url: "https://vimeo.com/${id}" }, youtube: { name: "YouTube", icon: "youtube", color: "FF0000", url: "https://www.youtube.com/user/${id}" }, youtube_channel: { name: "YouTube Channel", icon: "youtube", color: "FF0000", url: "https://www.youtube.com/channel/${id}" } },
            o = ["facebook_like", "twitter_tweet", "pinterest_pin", "linkedin_share"],
            l = ke.avail,
            s = fe.templates,
            _ = n.node,
            c = Ee(_),
            d = _.className,
            f = _.a2a_follow,
            m = we(_.getElementsByTagName("a")),
            h = m.length,
            g = _e.createElement("div"),
            y = encodeURIComponent,
            v = n.linkurl,
            k = y(n.linkurl).replace(/'/g, "%27"),
            b = n.linkname,
            w = (y(n.linkname).replace(/'/g, "%27"), n.linkmedia),
            x = (w && y(n.linkmedia).replace(/'/g, "%27"), c["a2a-icon-color"] || fe.icon_color),
            A = x && x.split(",", 2),
            S = A && A[0],
            C = A && A[1],
            A = d.match(/a2a_kit_size_([\w\.]+)(?:\s|$)/),
            F = A ? A[1] : "16",
            A = F + "px",
            E = "a2a_svg a2a_s__default a2a_s_",
            B = {},
            T = {},
            L = n.linkurl_implicit && ye ? encodeURIComponent(ye).replace(/'/g, "%27") : k,
            c = c["a2a-scroll-show"],
            N = 0 <= d.indexOf("a2a_vertical_style");
        F && !isNaN(F) && (Ye.load(), x && "unset" != x && (S && "unset" != S && (B.backgroundColor = S), C && "unset" != C.trim() && (C = C.trim())), _.style.lineHeight = T.height = T.lineHeight = A, T.width = 2 * F + "px", T.fontSize = "16px", N && (T.height = T.lineHeight = F / 2 + "px", T.fontSize = "10px", T.width = F + "px"), c && Fe(_, c), 32 != F && (B.backgroundSize = B.height = B.lineHeight = B.width = A, T.borderRadius = B.borderRadius = (.14 * F).toFixed() + "px", T.fontSize = (parseInt(T.height, 10) + (N ? 4 : 0)) / 2 + "px")), _.facebook_like = function() {
            oe.href = v, oe.width = "90", oe.layout = "button_count", oe.ref = "addtoany", oe = r($, oe), $.style.width = oe.width + "px";
            var e, a, t, n, i = "v3.1",
                o = Je();
            for (e in 2 == (o = o ? o.replace(/-/, "_") : "en_US").length && (o += "_" + o.toUpperCase()), oe) ie += " data-" + e + '="' + oe[e] + '"';
            pe.fbAsyncInit || (pe.fbAsyncInit = function() { pe.FB.init({ appId: "0", status: !1, xfbml: !0, version: i }), pe.FB.Event.subscribe("edge.create", function(e, a) { je.track("Facebook Like", "facebook_like", e, "pages", "AddToAny Share/Save Button"), u("Facebook Like", $) }) }, (O = _e.createElement("span")).id = "fb-root", _e.body.insertBefore(O, _e.body.firstChild)), _.facebook_like_script || (t = "facebook-jssdk", n = (a = _e).getElementsByTagName("script")[0], a.getElementById(t) || ((a = a.createElement("script")).id = t, a.src = "https://connect.facebook.net/" + o + "/sdk.js#xfbml=1&version=" + i, n.parentNode.insertBefore(a, n))), _.facebook_like_script = 1, $.innerHTML = '<div class="fb-like"' + ie + "></div>";
            try { pe.FB.XFBML.parse($) } catch (e) {}
        }, _.twitter_tweet = function() {
            oe.url = v, oe.lang = Je() || "en", oe.related = "AddToAny,micropat";
            var e = s.twitter,
                a = "string" == typeof e ? e.lastIndexOf("@") : null;
            a && -1 !== a && (a = (a = e.substr(++a).split(" ", 1))[0].replace(/:/g, "").replace(/\//g, "").replace(/-/g, "").replace(/\./g, "").replace(/,/g, "").replace(/;/g, "").replace(/!/g, ""), oe.related = a + ",AddToAny"), oe = r($, oe);
            var t, n, i, o = _e.createElement("a");
            for (t in o.className = "twitter-share-button", oe) o.setAttribute("data-" + t, oe[t]);
            $.appendChild(o), _.twitter_tweet_script || (n = "twitter-wjs", a = (e = _e).getElementsByTagName("script")[0], e.getElementById(n) || ((e = e.createElement("script")).id = n, e.src = "https://platform.twitter.com/widgets.js", a.parentNode.insertBefore(e, a), pe.twttr = pe.twttr || (i = { _e: [], ready: function(e) { i._e.push(e) } }))), _.twitter_tweet_script = 1;
            try {
                pe.twttr.ready(function(e) {
                    _.twitter_bind || (e.events.bind("click", function(r) {
                        var e;
                        !r || "tweet" != r.region || (e = function() {
                            var e = r.target.src.split("#")[1] || "";
                            if (e && -1 < e.indexOf("url=")) {
                                for (var a = {}, t = e.split("&"), n = t.length, i = 0; i < n; i++) {
                                    var o = t[i].split("=");
                                    a[o[0]] = o[1]
                                }
                                return a
                            }
                            return !1
                        }()) && e.url && (je.track("Twitter Tweet", "twitter_tweet", unescape(e.url), "pages", "AddToAny Share/Save Button"), u("Twitter Tweet", $))
                    }), _.twitter_bind = 1), e.widgets && e.widgets.load()
                })
            } catch (e) {}
        }, _.pinterest_pin = function() { oe["pin-config"] = "beside", oe["pin-do"] = "buttonPin", oe.media = w, oe.url = v, oe = r($, oe); var e, a, t, n = _e.createElement("a"); for (e in oe) n.setAttribute("data-" + e, oe[e]); "beside" == oe["pin-config"] && "buttonPin" == oe["pin-do"] && ($.style.width = "76px"), n.href = "https://www.pinterest.com/pin/create/button/?url=" + oe.url + (oe.media ? "&media=" + oe.media : "") + (oe.description ? "&description=" + encodeURIComponent(oe.description).replace(/'/g, "%27") : ""), xe($, "click", function() { je.track("Pinterest Pin", "pinterest_pin", v, "pages", "AddToAny Share/Save Button"), u("Pinterest Pin", $) }), $.appendChild(n), _.pinterest_pin_script || (t = (a = _e).createElement("script"), a = a.getElementsByTagName("script")[0], t.async = !0, t.src = "https://assets.pinterest.com/js/pinit.js", a.parentNode.insertBefore(t, a)), _.pinterest_pin_script = 1 }, _.linkedin_share = function() {
            for (var e in oe.onsuccess = "kit.linkedin_share_event", oe.url = v, oe = r($, oe)) ie += " data-" + e + '="' + oe[e] + '"';
            var a, t;
            _.linkedin_share_event = function() { je.track("LinkedIn Share", "linkedin_share", v, "pages", "AddToAny Share/Save Button"), u("LinkedIn Share", $) }, _.linkedin_share_script || (t = (a = _e).createElement("script"), a = a.getElementsByTagName("script")[0], t.type = "text/javascript", t.async = !0, t.src = "https://platform.linkedin.com/in.js", a.parentNode.insertBefore(t, a)), _.linkedin_share_script = 1, $.innerHTML = '<script type="IN/Share"' + ie + "><\/script>"
        };
        for (var z, I, j, M, D = 0; D < h; D++) {
            var O, H, P, R, $ = m[D],
                U = $.className,
                W = U.match(/a2a_button_([\w\.]+)(?:\s|$)/),
                q = 0 <= U.indexOf("a2a_dd"),
                Y = 0 <= U.indexOf("a2a_counter"),
                V = !!W && W[1],
                J = $.childNodes,
                G = a(V),
                K = f && i[V] ? i[V].name : G[0],
                X = " noopener",
                Q = "_blank",
                Z = f && i[V] ? i[V].icon : G[1],
                ee = f && i[V] ? i[V].color : G[2] || "CAE0FF",
                ae = G[3] || {},
                te = ae.type,
                ne = G[4],
                W = !1,
                G = !1,
                ie = "",
                oe = {};
            if (q ? (e.target = $, ve(p, e), ee = "0166FF", Z = V = "a2a", G = Y, 0 <= d.indexOf("a2a_floating_style") && ($.a2a_floating = 1)) : "feed" == V || "print" == V ? X = Q = "" : "copy_link" == V ? xe($, "mouseenter", function() { be("a2a_modal").style.willChange = "transform, opacity", be("a2a_overlay").style.willChange = "backdrop-filter, opacity" }) : Y && V && Ce(V, l) ? G = !0 : V && Ce(V, o) && (_[V](), W = !0), V && !Ce(V, ["google_plus", "stumbleupon"]) && !W) {
                if (q || ($.target = Q, !f || !i[V] && a(V, !0) ? "feed" == V ? $.href = $.href || n.linkurl : ($.href = "/#" + V, "js" === te ? xe($, "click", t) : (xe($, "mousedown", t), xe($, "keydown", t)), $.rel = "nofollow" + X) : $.href = (I = V, M = j = void 0, M = r(z = $, {})["a2a-follow"], I = i[I], (j = M && I ? I.url.replace("${id}", M) : j) || z.href), $.a2a = {}, $.a2a.customserviceuri = ne, $.a2a.stype = te, $.a2a.linkurl = n.linkurl, $.a2a.servicename = K, $.a2a.safename = V, ae.src && ($.a2a.js_src = ae.src), ae.url && ($.a2a.url = ae.url), ae.pu && ($.a2a.popup = 1), ae.na && ($.a2a.na = 1), ae.media && ($.a2a.media = 1), _.a2a_codes = _.a2a_codes || [], _.a2a_codes.push(V), f || xe($, "click", function(r, l, s, c, d) {
                        return function(e) {
                            var a = "js" === d.a2a.stype,
                                t = screen.height,
                                n = "event=service_click&url=" + y(location.href) + "&title=" + y(_e.title || "") + "&ev_service=" + y(r) + "&ev_service_type=kit&ev_menu_type=" + p + "&ev_url=" + y(s) + "&ev_title=" + y(c).replace(/'/g, "%27"),
                                i = u(l, d, e),
                                o = !(!i || !i.stop),
                                i = d.a2a.js_skip;
                            "feed" == p || d.a2a.url || d.a2a.js_src || Ne(_), !d.a2a.popup || Se(e) || "_blank" !== d.target || a || (Ae(e), pe.open(d.href, "_blank", "toolbar=0,personalbar=0,resizable,scrollbars,status,width=550,height=450,top=" + (450 < t ? Math.round(t / 2 - 225) : 40) + ",left=" + Math.round(screen.width / 2 - 275))), !d.a2a.externalJS && !d.a2a.literalJS || o || i || Le(d.a2a), a && !i && Ae(e), i && delete d.a2a.js_skip, Pe(p, n), je.track(l, r, s, "pages", "AddToAny Share/Save Button")
                        }
                    }(V, K, v, b, $))), J.length) {
                    for (var re, le, se, ce = 0, de = J.length; ce < de; ce++)
                        if (se = (le = "string" == typeof(re = J[ce].className)) && ("a2a_label" === re || 0 <= re.indexOf("a2a_ignore")), 1 == J[ce].nodeType && (se || (R = !0), le && 0 <= re.indexOf("a2a_count"))) { P = !0; break }
                    if (!R) {
                        for (var ue in (O = _e.createElement("span")).className = E + Z + " a2a_img_text", ee && (O.style.backgroundColor = "#" + ee), "pending" !== (H = Ye.get(Z, O, C)) && (O.innerHTML = H), B) O.style[ue] = B[ue];
                        $.insertBefore(O, J[0])
                    }
                } else {
                    for (var ue in (O = _e.createElement("span")).className = E + Z, ee && (O.style.backgroundColor = "#" + ee), "pending" !== (H = Ye.get(Z, O, C)) && (O.innerHTML = H), B) O.style[ue] = B[ue];
                    $.appendChild(O), (O = _e.createElement("span")).className = "a2a_label", O.innerHTML = K || ("feed" == p ? fe.localize.Subscribe : fe.localize.Share), K || (O.className += " a2a_localize", O.setAttribute("data-a2a-localize", "inner," + ("feed" == p ? "Subscribe" : "Share"))), $.appendChild(O)
                }
                if ((G = N && F && F < 20 ? !1 : G) && !P) {
                    for (var ue in (O = _e.createElement("span")).className = "a2a_count", O.a2a = {}, O.a2a.kit = _, T) O.style[ue] = T[ue];
                    $.appendChild(O), q ? (O.a2a.is_a2a_dd_counter = 1, _.a2a_dd_counter = O, ke.get("facebook", O, L)) : ke.get(V, O, L)
                }
                "a2a_dd" != U && ge.push($)
            }
        }
        0 <= d.indexOf("a2a_default_style") && (g.style.clear = "both", _.appendChild(g))
    }, ke = {
        get: function(o, r, e, l) {
            fe.counts;
            var s, a, t = decodeURIComponent(e),
                n = ke.bonus(o, t, e, r.a2a.kit),
                c = "",
                i = ke[o],
                d = i.api,
                u = (i.cb, r.a2a.is_a2a_dd_counter);
            !l && n && (c = "2", ke.get(o, r, n, !0)), "string" != typeof(s = i[t] = i[t] || {}).num || l ? "number" != typeof s.num ? (s.queued = s.queued || [], s.queued.push(r), i.n = i.n || 0, i.n++, i["cb" + i.n] = function(e) { var a, t = ke[o].cb(e, r); if (void 0 !== t) { if ("string" == typeof t && "facebook" == o) return "empty" == t ? a = "Note: Facebook no longer provides public API access to share counts. AddToAny is soon launching a premium service to manage private API access to Facebook and display share counts." : "limit" == t && (a = "Facebook's public share counts API has reached its request limit from your connection. Try again later."), console && "function" == typeof console.log && console.log("%c" + a, "color:#1877f2"), l || (r.style.display = "none"), void(s.num = "error"); for (var n, i = 0; i < s.queued.length; i++) n = s.queued[i], s.num = t, n.a2a.is_a2a_dd_counter ? ke.sum(n, t, o + c) : ke.set(n, t, o + c) } }, 1 == s.queued.length && (a = d[0] + e + (d[1] || "&callback") + "=a2a.counters." + o + ".cb" + i.n, p.ready(function() { de(a) }))) : u ? ke.sum(r, s.num, o + c) : ke.set(r, s.num, o + c) : r.style.display = "none"
        },
        set: function(e, a, t) {
            var n = a;
            a = void 0 !== e.a2a.last_count ? e.a2a.last_count + a : a, e.innerHTML = "<span>" + ke.format(a) + "</span>", "a2a" != t && (e.a2a.last_count = n, ke.sum(e, n, t))
        },
        sum: function(e, a, t) {
            var n = e.a2a.kit,
                i = n.a2a_counts_sum || 0,
                e = n.a2a_counts_summed || [];
            "a2a" != t && -1 === e.indexOf(t) && (i = n.a2a_counts_sum = i + a, (e = n.a2a_counts_summed = e || []).push(t)), n.a2a_dd_counter && ke.set(n.a2a_dd_counter, i, "a2a")
        },
        format: function(e) {
            var a = ke.format,
                t = "localize";
            return a[t] || (a.locale = Je(), a[t] = "object" == typeof Intl && Intl && "function" == typeof Intl.NumberFormat ? function(e) { return e.toLocaleString(a.locale, { maximumFractionDigits: 1 }) } : function(e, a) { return a && "decimal" === a ? Math.round(10 * e) / 10 : e = (e += "").charAt(0) + "," + e.substring(1) }), e = 999 < e ? e < 1e6 ? 1e4 < e ? a[t](e / 1e3, "decimal") + "k" : a[t](e) : e < 1e9 ? a[t](e / 1e6, "decimal") + "M" : "1B+" : e
        },
        bonus: function(e, a, t, n) {
            var i, o, r = fe.counts,
                l = "%3A%2F%2F";
            return r && (r.recover_protocol && "http" === r.recover_protocol && (i = t.replace(/^https%/, "http%"), a = decodeURIComponent(i)), r.recover_domain && (i = encodeURIComponent(a.replace(/^(https?\:\/\/)(?:[^\/?#]+)([\/?#]|$)/i, "$1" + r.recover_domain + "$2")), a = decodeURIComponent(i)), r.recover && "function" == typeof r.recover && (n = { url: (o = _e.createElement("a")).href = a, pathParts: o.pathname.split("/"), domain: o.hostname, protocol: o.protocol, kit: n }, i = encodeURIComponent(r.recover(n)))), !(!i || i === t || -1 !== ["tumblr"].indexOf(e) && i.split(l).pop() === t.split(l).pop()) && i
        },
        avail: ["facebook", "pinterest", "reddit", "tumblr"],
        facebook: { api: ["https://graph.facebook.com/?fields=og_object%7Bengagement%7D&id=", "&callback"], cb: function(e, a) { return e && e.og_object && e.og_object.engagement && !isNaN(e.og_object.engagement.count) ? e.og_object.engagement.count : e && e.error && e.error.code && 4 === e.error.code ? "limit" : "empty" } },
        pinterest: { api: ["https://widgets.pinterest.com/v1/urls/count.json?url="], cb: function(e, a) { if (e && !isNaN(e.count)) return e.count } },
        reddit: { api: ["https://www.reddit.com/api/info.json?url=", "&jsonp"], cb: function(e, a) { var t = e.data; if (e && t && t.children) { for (var n, i = 0, o = [], r = t.children; i < r.length; i++)(n = r[i].data) && !isNaN(n.ups) && o.push(n.ups); return 0 < o.length ? Math.max.apply(null, o) : 0 } } },
        tumblr: { api: ["https://api.tumblr.com/v2/share/stats?url="], cb: function(e, a) { if (e && e.response && !isNaN(e.response.note_count)) return e.response.note_count } }
    }, r = function() {
        var e = fe.overlays || [],
            a = !!M() && { passive: !0 },
            t = pe.innerWidth,
            n = pe.innerHeight,
            p = t && (t < 375 || n < 375) ? 150 : 200,
            _ = location.href,
            f = _e.title || _;
        for (var i = 0, o = e.length; i < o; i++) {
            var r, l = e[i],
                s = l.services || ["pinterest", "facebook"],
                c = "",
                d = l.html,
                u = l.position,
                m = l.style,
                h = l.size || 32,
                g = l.target,
                l = l.useImage,
                y = Math.round,
                u = u && 2 < u.length ? u.split(" ") : ["top", "left"],
                m = !m || "horizontal" !== m && "default" !== m ? "vertical" : "default",
                g = g || "img";
            if (d) _e.body.insertAdjacentHTML("beforeend", d), r = _e.body.lastChild;
            else {
                for (var v = 0, k = s.length; v < k; v++) c += '<a class="a2a_button_' + s[v] + '"></a>';
                (r = _e.createElement("div")).className = "a2a_kit a2a_kit_size_" + h + " a2a_overlay_style a2a_" + m + "_style", r.innerHTML = c, _e.body.insertBefore(r, null)
            }
            r.style.display = "none", r.style.position = "absolute", r.setAttribute("data-a2a-title", f), r.setAttribute("data-a2a-url", _), xe(_e.body, "mouseover", function(a, t, n, i) {
                return function(e) {
                    ! function(e, a, t, n, i) {
                        var o, r, l = (r = e).target ? 3 === r.target.nodeType ? r.target.parentNode : r.target : r.srcElement,
                            s = l,
                            c = 0,
                            d = 0,
                            u = l.longDesc;
                        if (j(l, n) && "false" !== l.getAttribute("data-a2a-overlay")) e = l.width < p || l.height < p, r = "naturalWidth" in l && (l.naturalWidth < 200 || l.naturalHeight < 200), e || r || j(l, "header img,footer img") || (n = $(l, "scroll"), a.style.display = "", e = a.clientHeight || a.offsetHeight, r = a.clientWidth || a.offsetWidth, t[0] && ("bottom" === t[0] ? d = l.height - e : "center" === t[0] && (d = y((l.height - e) / 2))), t[1] && ("right" === t[1] ? c = l.width - r : "center" === t[1] && (c = y((l.width - r) / 2))), c = n.left + c, d = n.top + d, a.style.left = c + "px", a.style.top = d + "px", a.setAttribute("data-a2a-media", l.src), (a.a2a_mediaNode = l).alt ? a.setAttribute("data-a2a-title", l.alt) : a.setAttribute("data-a2a-title", f), !u || "#" !== u.substr(0, 1) && "http" !== u.substr(0, 4) ? i ? a.setAttribute("data-a2a-url", l.src) : a.setAttribute("data-a2a-url", _) : (u = "#" === u.substr(0, 1) ? _.split("#")[0] + l.longDesc : u, a.setAttribute("data-a2a-url", u)));
                        else if ("none" !== a.style.display) {
                            for (;
                                (o = s) && "body" !== s.tagName.toLowerCase();) {
                                if (o === a) return;
                                s = s.parentNode
                            }
                            a.style.display = "none"
                        }
                    }(e, a, t, n, i)
                }
            }(r, u, g, l), a)
        }
        fe.overlays = []
    }, N = function() {
        var e = me[x],
            a = A;
        e.bookmarklet && (e.no_hide = 1, C = a, ne()), e.show_menu && (e.no_hide = 1, C = a, ne(null, e.show_menu), e.show_menu = v), N.a2a_done = 1
    }, l = function(o, e) {
        var a = I,
            t = a("a2a_kit", _e),
            a = we(_e.getElementsByName("a2a_dd")).concat(a("a2a_dd", _e));

        function n(e) {
            for (var a, t, n = 0, i = e.length; n < i; n++)
                if (t = (void 0 === (a = e[n]).a2a_index || "" === a.a2a_index) && a.className.indexOf("a2a_target") < 0 && a.parentNode.className.indexOf("a2a_kit") < 0 ? o(a) : t) return t;
            return null
        }
        if (e) return n(t) || n(a);
        n(t.concat(a))
    }, z = function(e) {
        function a(e) { 0 <= e.className.indexOf("a2a_kit") && (e.a2a_kit = 1, 0 <= e.className.indexOf("a2a_follow") && (e.a2a_follow = 1)) }
        return e ? (e.a2a_index = A, a(e), e) : l(function(e) { return e.a2a_index = A, a(e), e }, !0)
    }, be = function(e) { return _e.getElementById(e) }, I = function(e, a, t) { for (var n, i = (a = a || be("a2a" + x + "_dropdown")).getElementsByClassName(e), o = t ? new RegExp("\\b" + t + "\\b", "i") : null, r = [], l = 0, s = i.length; l < s; l += 1) n = i[l], o && !o.test(n.nodeName) || r.push(n); return r }, we = function(e) { for (var a = [], t = e.length, n = 0; n < t; n++) a[a.length] = e[n]; return a }, j = function(e, a) {
        var t, n = "MatchesSelector",
            i = "ms" + n,
            n = "webkit" + n;
        if (e.matches) t = "matches";
        else if (e[i]) t = i;
        else {
            if (!e[n]) return !(j = function(e, a) { return !1 });
            t = n
        }
        return (j = function(e, a) { return e[t](a) })(e, a)
    }, M = function() {
        var e = !1;
        try {
            var a = Object.defineProperty({}, "passive", { get: function() { e = !0 } });
            pe.addEventListener("test", null, a)
        } catch (e) {}
        return M = function() { return e }, e
    }, xe = function(e, a, t, n) {
        var i;
        if (e.addEventListener) return "object" == typeof n && (i = !!n.useCapture, n = M() ? n : i), e.addEventListener(a, t, n), { destroy: function() { e.removeEventListener(a, t, n) } };

        function o() { t.call(e, pe.event) }
        return e.attachEvent("on" + a, o), { destroy: function() { e.detachEvent("on" + a, o) } }
    }, _ = function(e) {
        (e = e || pe.event).cancelBubble = !0, e.stopPropagation && e.stopPropagation()
    }, Ae = function(e) { e.preventDefault ? e.preventDefault() : e.returnValue = !1 }, Se = function(e) { return !!(e.defaultPrevented || !1 === e.returnValue || void 0 === e.defaultPrevented && e.getPreventDefault && e.getPreventDefault()) }, Ce = function(e, a, t, n, i) {
        if ("object" == typeof a) {
            e = e.toLowerCase();
            for (var o, r = a.length, l = 0; l < r; l++)
                if (o = n ? a[l][n] : a[l], o = i ? o[i] : o, t) { if (e == o.toLowerCase()) return a[l] } else if (-1 != e.indexOf(o.toLowerCase()) && "" !== o) return a[l]
        }
        return !1
    }, D = function(e, a) { var t, n, i, o = []; for (t in e) e.hasOwnProperty(t) && (n = a ? a + "[" + t + "]" : t, i = e[t], o.push("object" == typeof i ? D(i, n) : encodeURIComponent(n) + "=" + encodeURIComponent(i))); return o.join("&") }, f = function(t, n, i) {
        void 0 === i && (i = {});

        function o() { d = !1 === i.leading ? 0 : u(), r = null, c = t.apply(l, s), r || (l = s = null) }

        function e() {
            var e = u();
            d || !1 !== i.leading || (d = e);
            var a = n - (e - d);
            return l = this, s = arguments, a <= 0 || n < a ? (r && (clearTimeout(r), r = null), d = e, c = t.apply(l, s), r || (l = s = null)) : r || !1 === i.trailing || (r = setTimeout(o, a)), c
        }
        var r, l, s, c, d = 0,
            u = Date.now || function() { return (new Date).getTime() };
        return e.cancel = function() { clearTimeout(r), d = 0, r = l = s = null }, e
    }, Fe = function(e, a) {
        (a = a.split(","))[0] && a[0].trim(), a[1] && a[1].trim();
        var n, t = parseInt(a[0], 10) || 0,
            a = parseInt(a[1], 10) || 0,
            e = function(e, a, t) {
                var n = pe.pageYOffset,
                    i = _e.documentElement.scrollHeight - pe.innerHeight - n;
                e.style.display = a <= n && t <= i ? "" : "none"
            }.bind(null, e, t, a);
        (t || a) && (Fe.handlers = Fe.handlers || [], (n = Fe.handlers).push(e), n.length < 2 && (a = f(function() { for (var e = 0, a = n, t = a.length; e < t; e++) a[e]() }, 20), pe.addEventListener("scroll", a)), e())
    }, O = function() {
        var e = x,
            a = "a2a" + e,
            t = me[e];
        R(be(a + "_dropdown")) && "none" === m(be(a + "_full"), "display") && (t.out_delay = setTimeout(function() { P("none", e), t.out_delay = null }, 501))
    }, H = function() {
        var e = x = me["n" + (C || A)].type;
        me[e] && me[e].out_delay && clearTimeout(me[e].out_delay)
    }, P = function(e, a) { var t, n; "none" == e && me[a].no_hide || (t = be("a2a" + a + "_dropdown"), _e.activeElement, n = ne.key_listener, t.style.display = e, H(), "none" == e ? (ne["doc_click_listener_" + a].destroy(), delete me[a].doc_click_close_mini, n && n[a] && n[a].destroy()) : o.forEach(function(e) { e !== a && ne["doc_click_listener_" + e] && P("none", e) })) }, Ee = function(e) { if (!e) return {}; for (var a, t = 0, n = e.attributes.length, i = {}; t < n; t++)(a = e.attributes[t]).name && "data-" == a.name.substr(0, 5) && (i[a.name.substr(5)] = a.value); return i }, m = function(e, a) { return e ? e.currentStyle ? e.currentStyle[a.replace(/-(\w)/gi, function(e, a) { return a.toUpperCase() })] : pe.getComputedStyle(e, null).getPropertyValue(a) : null }, R = function(e) { e = m(e, "display"); return !(!e || "none" === e) }, $ = function(e, a) {
        var t = Math.round,
            n = "scroll" === a ? q("w") : 0,
            a = "scroll" === a ? q("h") : 0;
        return void 0 === e.getBoundingClientRect ? U(e) : { left: t((e = e.getBoundingClientRect()).left + n), top: t(e.top + a) }
    }, U = function(e) { for (var a = 0, t = 0; a += e.offsetLeft || 0, t += e.offsetTop || 0, e = e.offsetParent;); return { left: a, top: t } }, W = function(e) {
        var a = 0,
            t = 0;
        return "number" == typeof pe.innerWidth ? (a = pe.innerWidth, t = pe.innerHeight) : _e.documentElement && (_e.documentElement.clientWidth || _e.documentElement.clientHeight) ? (a = _e.documentElement.clientWidth, t = _e.documentElement.clientHeight) : _e.body && (_e.body.clientWidth || _e.body.clientHeight) && (a = _e.body.clientWidth, t = _e.body.clientHeight), "w" == e ? a : t
    }, q = function(e) {
        var a = 0,
            t = 0;
        return "number" == typeof pe.pageYOffset ? (a = pe.pageXOffset, t = pe.pageYOffset) : _e.body && (_e.body.scrollLeft || _e.body.scrollTop) ? (a = _e.body.scrollLeft, t = _e.body.scrollTop) : _e.documentElement && (_e.documentElement.scrollLeft || _e.documentElement.scrollTop) && (a = _e.documentElement.scrollLeft, t = _e.documentElement.scrollTop), "w" == e ? a : t
    }, Y = function() {
        be("a2a" + x + "_show_more_less");
        te()
    }, V = function() { var e = be("a2a" + x + "_find"); "none" != be("a2a" + x + "_find_container").style.display && e.focus() }, J = function(e) { for (var a = me[e || x].main_services_col_1, t = a.length, n = 0; n < t; n++) a[n].style.display = "" }, G = function() {
        var e = me[x].main_services,
            a = e.length,
            t = be("a2a" + x + "_find").value;
        if ("" !== t)
            for (var n, i = t.split(" "), o = 0; o < a; o++) n = e[o].a2a.serviceNameLowerCase, Ce(n, i, !1) ? e[o].style.display = "" : e[o].style.display = "none";
        else J()
    }, K = function(e) {
        var a, t, n = _e.getElementsByTagName("meta"),
            i = n.length;
        if ((a = pe.getSelection ? pe.getSelection() + "" : a) && "" !== a) return a;
        if (me["n" + A].linkurl === location.href && -1 === ["facebook", "twitter", "linkedin"].indexOf(e))
            for (var o, r, l = 0; l < i; l++)
                if (o = (o = n[l].getAttribute("name")) ? o.toLowerCase() : "", r = (r = n[l].getAttribute("property")) ? r.toLowerCase() : "", o && "description" === o || r && "og:description" === r) { t = n[l].getAttribute("content"); break }
        return t ? t.substring(0, 1200) : ""
    }, X = function(e) {
        var a = me[e],
            e = "a2a" + e;
        a.main_services_col_1 = I("a2a_i", be(e + "_full_services"), "a"), a.main_services = a.main_services_col_1, a.email_services = I("a2a_i", be(e + "_2_col1"), "a"), a.all_services = a.main_services.concat(a.email_services)
    }, Be = function(e, a) {
        var t = fe.callbacks || [],
            n = fe.tracking_callback,
            i = {};
        n && (n[e] ? t.push(n) : n[0] == e ? (i[e] = n[1], t.push(i)) : "function" == typeof n && (i[e] = n, t.push(i)), fe.tracking_callback = null);
        for (var o, r, l = 0, s = t.length; l < s; l++)
            if ("function" == typeof(o = t[l][e]) && (r = o(a), "ready" == e && (o = null), void 0 !== r)) return r
    }, Te = function(e) {
        var a, t, n = location.href,
            i = _e.title || n,
            o = e.parentNode,
            r = me["n" + (o.a2a_index || o.parentNode.a2a_index || C || A)],
            l = r.type,
            s = e.a2a.safename,
            c = r.linkurl_implicit && n != r.linkurl ? n : r.linkurl,
            d = encodeURIComponent(c).replace(/'/g, "%27"),
            u = r.linkname_implicit && i != r.linkname ? i : r.linkname,
            p = encodeURIComponent(u).replace(/'/g, "%27"),
            _ = r.linkmedia,
            f = !!_ && encodeURIComponent(_).replace(/'/g, "%27"),
            m = encodeURIComponent(K(s)).replace(/'/g, "%27"),
            o = !r.track_links || "page" != l && "mail" != l ? "" : "&linktrack=" + r.track_links + "&linktrackkey=" + encodeURIComponent(r.track_links_key),
            n = e.a2a.customserviceuri || !1,
            h = e.a2a.stype,
            i = e.a2a.js_src,
            g = e.a2a.url,
            u = e.a2a.media,
            _ = e.a2a.na,
            y = fe.templates,
            v = y[s],
            k = "email",
            r = navigator.userAgent,
            r = -1 != r.indexOf("Safari") && -1 == r.indexOf("Chrome");

        function b(e) { return encodeURIComponent(e).replace(/'/g, "%27").replace(/%24%7Blink%7D/g, "${link}").replace(/%24%7Blink_noenc%7D/g, "${link_noenc}").replace(/%24%7Blink_nohttp%7D/g, "${link_nohttp}").replace(/%24%7Bmedia%7D/g, "${media}").replace(/%24%7Btitle%7D/g, "${title}").replace(/%24%7Btitle_noenc%7D/g, "${title_noenc}").replace(/%24%7Bnotes%7D/g, "${notes}") }
        if (u && f) e.a2a.js_skip = 1, e.target = "_blank";
        else if (h && "js" == h && i) e.target = "_top", "javascript:" == i.substr(0, 11) ? (a = i.replace("${link}", c.replace(/'/g, "\\'")), e.a2a.literalJS = a.substr(11)) : e.a2a.externalJS = i, a = "#" + s;
        else if (g && (s != k || s == k && (F || r)) && !o) {
            if (e.target = "_top", "object" == typeof v)
                for (var w in v) g = Re(g, w, b(v[w]));
            else "string" == typeof v && (g = Re(g, "text", b(v)));
            a = g.replace(/\$\{link\}/g, d).replace(/\$\{media\}/g, f).replace(/\$\{link_noenc\}/g, c).replace(/\$\{link_nohttp\}/g, c.replace(/^https?:\/\//, "")).replace(/\$\{title\}/g, p)
        } else n && "undefined" != n && (a = n.replace(/A2A_LINKNAME_ENC/, p).replace(/A2A_LINKURL_ENC/, d).replace(/A2A_LINKNOTE_ENC/, m));
        return F && _ && (e.target = "_top"), e.href = a || "http" + fe.http_s + "://www.addtoany.com/add_to/" + s + "?linkurl=" + d + "&linkname=" + p + (f ? "&linkmedia=" + f : "") + o + (t = "", v ? t = "&" + D({ template: v }) : y[k] && h && h == k && (t = "&" + D({ template: y[k] })), t) + ("feed" == l ? "&type=feed" : "") + "&linknote=" + m, !0
    }, Le = function(e) {
        var a;
        e.literalJS ? (a = _e.createElement("script"), u && a.setAttribute("nonce", u), a.textContent = e.literalJS, d.appendChild(a)) : e.externalJS && de(e.externalJS)
    }, Q = function(a, t, n) {
        var e, i, o, r, l, s;
        t && (e = R(t), i = t.classList, o = "a2a_starting", r = "transitionend", "show" === a ? e || (l = t, (s = i) && m(l, "transition-duration") && s.add(o), t.style.display = "block", i && setTimeout(function() { i.remove(o) }, 1)) : i ? e ? (t.addEventListener(r, function e() { t.style.display = "show" === a ? "block" : "none", n && n(), t.removeEventListener(r, e, !1) }, !1), i.add(o)) : n && n() : n && (t.style.display = "none", n()))
    }, Z = {
        show: function() {
            var e = "a2a" + x,
                a = be("a2a_overlay"),
                t = be(e + "_find");
            "none" === m(a, "display") && (Q("show", a), Z.key_listener = xe(_e, "keydown", function(e) {
                var a = (e = e || pe.event).which || e.keyCode,
                    e = _e.activeElement;
                27 == a && t != e ? ee(x) : 40 < a && a < 91 && t != e && t.focus()
            }))
        },
        hide: function(e) {
            var a = be("a2a_overlay"),
                t = Z,
                n = t.key_listener;
            Q("hide", a, e), n && (n.destroy(), setTimeout(function() { delete t.key_listener }, 1))
        },
        key_listener: v
    }, ee = function(e) {
        var a = "a2a" + e,
            t = be(a + "_full"),
            n = be("a2a_overlay"),
            i = be("a2a_modal");
        te.full_shown = !1, Q("hide", i), Q("hide", t), Z.hide(function() { n.style.display = i.style.display = "none", n.style.willChange = i.style.willChange = "", t && (t.style.display = "none", t.style.willChange = ""), ce.showing = !1, R(be(a + "_dropdown")) && be(a + "_show_more_less").focus() })
    }, ae = function() {
        be("a2a_overlay");
        for (var e = be("a2a_modal"), a = I("a2a_modal_body", e), t = 0; t < a.length; t++) a[t].style.display = "none";
        Z.show(), Q("show", e)
    }, (te = function() {
        var e = "a2a" + x,
            a = I,
            t = be(e + "_full"),
            n = a("a2a_full_header", t)[0],
            e = be(e + "_full_services"),
            a = a("a2a_full_footer", t)[0];
        ie(x), Z.show(), Q("show", t), e.style.cssText = "height:calc(10px)", e.style.height.length && (e.style.height = "calc(100% - " + (n.offsetHeight + a.offsetHeight) + "px)"), t.focus(), Ie("full")
    }).full_shown = v, (ne = function(e, a) {
        e ? A = e.a2a_index : C && (A = C);
        var t, n, i, o, r, l, s, c, d, u = me["n" + A],
            p = E ? "touchstart" : "click",
            _ = !(!E || !M()) && { passive: !0 };
        x = u.type;
        var f, m = be("a2a" + x + "_dropdown");
        ie(x), P("block", x), n = [m.clientWidth, m.clientHeight], i = W("w"), o = W("h"), e ? (t = (s = e.a2a_floating) ? "viewport" : "scroll", m.style.position = s ? "fixed" : "", r = s ? 0 : q("w"), l = s ? 0 : q("h"), e = (s = e.getElementsByTagName("img")[0]) ? (c = $(s, t), d = s.clientWidth, s.clientHeight) : (c = $(e, t), d = e.offsetWidth, e.offsetHeight), c.left - r + n[0] + d > i && (c.left = c.left - n[0] + d - 8), ("up" == u.orientation || "down" != u.orientation && c.top - l + n[1] + e > o && c.top > n[1]) && (c.top = c.top - n[1] - e), m.style.left = (c.left < 0 ? 0 : c.left) + 2 + "px", m.style.top = c.top + e + "px") : (m.style.position = (a = a || {}).position || "absolute", m.style.left = a.left || i / 2 - n[0] / 2 + "px", m.style.top = a.top || o / 2 - n[1] / 2 + "px"), me[x].doc_click_close_mini || me[x].no_hide || (me[x].doc_click_close_mini = (f = x, function(e) {!y() && "number" == typeof e.button && 0 < e.button || (me[x].last_focus && me[x].last_focus.focus(), P("none", f)) }), ne["doc_click_listener_" + x] = xe(_e, p, me[x].doc_click_close_mini, _)), ne.key_listener = ne.key_listener || {}, ne.key_listener[x] = xe(_e, "keydown", function(e) { 27 != ((e = e || pe.event).which || e.keyCode) || Z.key_listener || P("none", x) }), Ye.load();
        _ = encodeURIComponent, _ = "event=menu_show&url=" + _(location.href) + "&title=" + _(_e.title || "") + "&ev_menu_type=" + x;
        Pe(x, _)
    }).key_listener = v, oe = {
        feed: !(ie = function(e) {
            if (!oe[e]) {
                var a, t, n = "a2a" + e,
                    i = _e.createDocumentFragment(),
                    o = _e.createDocumentFragment(),
                    r = me[e].services,
                    l = be(n + "_find"),
                    s = _e.createElement("i");
                if ("mail" != e) {
                    for (var c = 0, d = r.most, u = d.length, p = parseInt(me[e].num_services), _ = 0, f = me[e].exclude_services; c < u; c++) {
                        var m = d[c];
                        f && Ce(m[1], f, !0) || i.appendChild(Ve(m[0], m[1], m[2], m[3], m[4])), !(_ < p) || f && Ce(m[1], f, !0) || (o.appendChild(Ve(m[0], m[1], m[2], m[3], m[4])), _++)
                    }
                    be(n + "_full_services").appendChild(i), be(n + "_mini_services").appendChild(o)
                }
                t = be(n + "_full_services"), s.className = "a2a_i", a = s.cloneNode(), t.appendChild(s), t.appendChild(a);
                for (var c = 0, h = r.email, g = h.length; c < g; c++) {
                    m = h[c];
                    f && Ce(m[1], f, !0) || be(n + "_2_col1").appendChild(Ve(m[0], m[1], m[2], m[3], m[4]))
                }
                $e(), re(e), "mail" != e && (l.onkeydown = function(e) {
                    e = e || pe.event, e = e.which || e.keyCode;
                    if (13 == e) {
                        for (var a, t = 0, n = me[x].main_services, i = n.length; t < i; t++)
                            if ("none" != (a = n[t]).style.display) return a.focus(), !1
                    } else 27 == e && ("" == l.value && l.blur(), l.value = "", G())
                }), oe[e] = !0
            }
        }),
        page: !1
    }, re = function(e) { me[e] && (Ue(t[e], e, " a2a_sss"), X(e), J(e)) }, le = s, (se = function(e) {
        var a = be("a2apage_full"),
            t = (be("a2a_overlay"), be("a2a_modal")),
            n = be("a2a_copy_link"),
            i = be("a2a_copy_link_copied"),
            o = be("a2a_copy_link_text");

        function r() { t.setAttribute("aria-label", "Copy link"), o.value = e, ae(), n.style.display = "block", t.focus(), Ie("copy") }
        te.full_shown = R(a), se.clickListen || (xe(o, "click", function(e) { o.setSelectionRange ? o.setSelectionRange(0, o.value.length) : o.select(), _e.execCommand && _e.execCommand("copy") && (o.blur(), i.style.display = "block", setTimeout(function() { t.style.display = n.style.display = i.style.display = "none", te.full_shown ? te() : ee("page") }, 700)) }), se.clickListen = 1), te.full_shown ? Q("hide", a, r) : r()
    }).clickListen = v, ce = {
        off: function() { var e = fe.thanks; return "boolean" == typeof e && !1 === e || e && "boolean" == typeof e.postShare && !1 === e.postShare },
        show: function() {
            var e = "a2a" + x,
                a = be("a2a_modal"),
                t = be(e + "_full"),
                n = be("a2a_thanks"),
                i = fe.thanks,
                e = ce.off();

            function o() { a.setAttribute("aria-label", "Thanks for sharing"), ae(), n.style.display = "inline-block", ce.showing = !0 }
            ze.lit() && i && !e && (ze.has(!0) || i.postShare) && !ce.showing && "none" === m(a, "display") && (R(t) ? Q("hide", t, o) : o())
        },
        showing: !1
    }, Ne = function(e) {
        var a = ce,
            t = "focus",
            n = "waiting";

        function i() { Ie("post"), ce.show(), pe.removeEventListener(t, i), a[n] = 0 }

        function o() {
            pe.removeEventListener("blur", o), pe.addEventListener(t, i),
                function(e) {
                    var a = "",
                        t = e ? e.a2a_index : null,
                        n = e ? e.a2a_codes : ["facebook", "twitter", "email"],
                        i = me["n" + (t || A)],
                        o = i.type,
                        r = be("a2a_thanks");
                    (t = be(e = "a2a_thanks_kit")) || ((t = _e.createElement("div")).id = e, r.appendChild(t)), t.innerHTML = "", (r = _e.createElement("div")).className = "a2a_kit a2a_kit_size_32 a2a_default_style", r.setAttribute("data-a2a-url", i.linkurl), r.setAttribute("data-a2a-title", i.linkname), i.linkmedia && r.setAttribute("data-a2a-media", i.linkmedia), r.style.display = "flex", r.style.justifyContent = "center";
                    for (var l = 0; l < n.length && l < 8; l++) a += '<a class="a2a_button_' + n[l] + '"></a>';
                    r.innerHTML = a, t.appendChild(r), ve("page", { target: r }), x = o
                }(e)
        }
        a[n] || (a[n] = 1, pe.addEventListener("blur", o))
    }, de = function(e, a) {
        var t = _e.createElement("script");
        t.src = e, a && (t.readyState ? t.onreadystatechange = function() { "loaded" !== t.readyState && "complete" !== t.readyState || (t.onreadystatechange = null, a()) } : t.onload = a), _e.body.appendChild(t)
    }, ue = function(e, a) {
        var t, i, o, r = /^$|^module$|\/(?:java|ecma)script/i;

        function n() {
            var e = _e.createEvent("Event");
            e.initEvent("DOMContentLoaded", !0, !0), _e.dispatchEvent(e)
        }
        a.innerHTML = e, t = (t = a).querySelectorAll("script"), o = [], [].forEach.call(t, function(n) {
            (i = n.getAttribute("type")) && !r.test(i) || o.push(function(e) {
                var a, t;
                a = n, t = e, e = _e.createElement("script"), a.src ? (e.onload = t, e.onerror = t, e.src = a.src) : e.textContent = a.innerText, _e.head.appendChild(e), a.src || t()
            })
        }), o.length && function e(a, t, n) { a[n = void 0 === n ? 0 : n](function() {++n === a.length ? t() : e(a, t, n) }) }(o, n)
    }, ze = {
        lit: function() { var e = fe.thanks; return !((be("wpadminbar") || void 0 !== pe.wp && pe.wp.customize) && (!e || !e.postShare)) },
        has: function(e) {
            void 0 === e && (e = !1);
            var a = {},
                t = !1;
            return ("object" == typeof pe.adsbygoogle && pe.adsbygoogle.loaded || "object" == typeof pe.google_ad_modifications) && (a.as = t = !0), "object" == typeof pe.googletag && pe.googletag.slots && "function" == typeof Object.keys && 0 < Object.keys(pe.googletag.slots).length && (a.dc = t = !0), pe.vglnk && pe.vglnk.key && (a.vl = t = !0), pe.__SKIM_JS_GLOBAL__ && (a.sl = t = !0), (pe.amazon_ad_tag || pe.amzn_assoc_ad) && (a.az = t = !0), !(e && !a.as && !a.dc) && (t ? a : void 0)
        },
        set: function(e) {
            void 0 === e && (e = !1);
            var a, n = "a2a_thanks_a2a_ad",
                t = "a2a_thanks_pub_ad",
                i = be("a2a_thanks"),
                o = fe.thanks,
                r = "boolean" == typeof o && !1 === o || o && "boolean" == typeof o.postShare && !1 === o.postShare || o && "boolean" == typeof o.ad && !1 === o.ad,
                l = o && void 0 !== o.ad && !1 !== o.ad,
                s = be(n),
                c = be(t);

            function d() {
                var e, a = encodeURIComponent(location.href),
                    t = "width:300px;height:250px;";
                c && (c.style.display = "none"), s ? pe.postMessage && be("a2a_thanks_ifr").contentWindow.postMessage("a2a_refresh_slot1", "*") : (function() {
                    {
                        var a;
                        pe.postMessage ? a = xe(pe, "message", function(e) { ".a2a.me" !== e.origin.substr(-7) || (e = e.data) && "a2a_display_slot1" === e && (s.style.display = "", a.destroy()) }) : s.style.display = ""
                    }
                }(), (e = _e.createElement("iframe")).id = "a2a_thanks_ifr", e.title = "Post-Share Container", e.setAttribute("transparency", "true"), e.setAttribute("allowTransparency", "true"), e.setAttribute("frameBorder", "0"), e.src = "https://www.a2a.me/html/tag.html#url=" + a, (s = _e.createElement("div")).id = n, s.insertBefore(e, null), e.style = t, s.style = t + "display:none;border-radius:6px;margin:45px auto 0;overflow:hidden;", i.appendChild(s), u(), xe(pe, "resize", u))
            }

            function u() {
                var e = pe.innerHeight,
                    a = e < 460,
                    t = Math.max(.5, parseInt((e / 600).toFixed(1), 10)),
                    n = Math.floor(250 * (t - 1) / 2);
                s.style.marginTop = e < 360 ? "25px" : "45px", s.style.transform = a ? "translateY(" + n + "px) scale(" + t + ")" : "none"
            }(ze.lit() && ze.has(!0) && !r || l) && (o && "string" == typeof o.ad && o.ad && .5 <= Math.random() ? (s && (s.style.display = "none"), c || ((a = _e.createElement("div")).id = t, a.style.margin = "45px auto 0", i.appendChild(a), ue(o.ad, a))) : e && d())
        }
    }, Ie = function(a) {
        var e, t, n, i, o, r, l;
        Ie.a2a = Ie.a2a || {}, Ie.a2a[a] || (e = "&domain=" + encodeURIComponent(location.href.split("/")[2]), t = (r = ze.has()) && r.as ? "&as=1" : "", n = r && r.dc ? "&dc=1" : "", r && r.vl, i = r && r.sl ? "&sl=1" : "", o = r && r.az ? "&az=1" : "", r = r ? "&ad=1" : "", (l = new XMLHttpRequest).open("POST", "https://stats.addtoany.com/menu"), l.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), l.timeout = 3e3, l.ontimeout = function(e) { l.abort(), "post" === a && ze.set() }, "post" === a && (l.onload = function(e) {
            var a = this.responseText;
            200 === this.status && a && "1" === a ? ze.set(!0) : ze.set()
        }), l.send("view=" + a + e + r + t + n + i + o), Ie.a2a[a] = 1)
    }, (je = function() {
        function e() {
            "function" == typeof pe.urchinTracker ? je.track = function(e, a, t, n, i) { pe.urchinTracker("/addtoany.com/" + n), pe.urchinTracker("/addtoany.com/" + n + "/" + (t || me["n" + A].linkurl)), pe.urchinTracker("/addtoany.com/services/" + a) } : "object" == typeof pe.pageTracker && "object" == typeof pe._gat ? je.track = function(e, a, t, n, i) { r != l && (pe._gat._anonymizeIp(), pe._gat._forceSSL(), pe.pageTracker._trackSocial("AddToAny", e, t || me["n" + A].linkurl)) } : "object" == typeof pe._gaq ? je.track = function(e, a, t, n, i) { r != l && (pe._gaq.push(["_gat._anonymizeIp"]), pe._gaq.push(["_gat._forceSSL"]), pe._gaq.push(["_trackSocial", "AddToAny", e, t || me["n" + A].linkurl])) } : "string" == typeof pe.GoogleAnalyticsObject && "object" != typeof pe.dataLayer ? je.track = function(e, a, t, n, i) { r != l && (t = t || me["n" + A].linkurl, pe[GoogleAnalyticsObject]("send", "social", { anonymizeIp: !0, forceSSL: !0, socialNetwork: "AddToAny", socialAction: e, socialTarget: t, page: t })) } : "object" == typeof pe.dataLayer && (je.track = function(e, a, t, n, i) {
                var o;
                r != l && (o = t || me["n" + A].linkurl, t = fe.callbacks, function() { pe.dataLayer.push(arguments) }("event", e, { anonymize_ip: !0, event_category: "AddToAny", event_label: o }), t && t.length && "function" == typeof t.some && t.some(function(e) { return !!(e = e.share) && /dataLayer[^]+AddToAnyShare[^]+socialAction/.test(e.toString()) }) || pe.dataLayer.push({ event: "AddToAnyShare", socialNetwork: "AddToAny", socialAction: e, socialTarget: o }))
            })
        }
        var r = x,
            l = "feed";
        je.track = s, e(), je.track === s && pe.addEventListener("load", e)
    }).track = v, Me = function() {
        var e, a = parseInt(me[x].num_services),
            t = be("a2a" + x + "_full_services"),
            n = be("a2a" + x + "_mini_services");
        if (me[x].custom_services) {
            var i = (l = me[x].custom_services).length;
            l.reverse();
            for (var o, r = 0; r < i; r++) l[r] && (o = Ve(l[r][0], l[r][0].replace(/ /g, "_"), null, null, {}, l[r][1], l[r][2]), t.insertBefore(o, t.firstChild), o = Ve(l[r][0], l[r][0].replace(/ /g, "_"), null, null, {}, l[r][1], l[r][2]), n.insertBefore(o, n.firstChild))
        }
        if ("page" == x && fe.add_services)
            for (var l, i = (l = fe.add_services).length, s = fe.http_s, r = 0; r < i; r++) l[r] && (s && (l[r].icon = !1), o = Ve(l[r].name, l[r].safe_name, null, null, {}, null, l[r].icon), t.insertBefore(o, t.firstChild), o = Ve(l[r].name, l[r].safe_name, null, null, {}, null, l[r].icon), n.insertBefore(o, n.firstChild));
        if ((e = I("a2a_i", n, "a")).length > a)
            for (var r = 0, c = e.length; r < c - a; r++) n.removeChild(n.lastChild)
    }, De = function() {
        var e = _e.createElement("iframe"),
            a = _e.createElement("div"),
            t = encodeURIComponent,
            n = navigator,
            i = _e.referrer ? t(_e.referrer) : "",
            o = t(location.href),
            n = (t(_e.title || ""), n.browserLanguage || n.language, fe.no_3p ? "&no_3p=1" : "");
        e.id = "a2a_sm_ifr", e.style.width = e.style.height = a.style.width = a.style.height = "1px", e.style.top = e.style.left = e.frameborder = e.style.border = "0", e.style.position = a.style.position = "absolute", e.style.zIndex = a.style.zIndex = "100000", e.title = "AddToAny Utility Frame", e.setAttribute("transparency", "true"), e.setAttribute("allowTransparency", "true"), e.setAttribute("frameBorder", "0"), e.src = "https://static.addtoany.com/menu/sm.23.html#type=core&event=load&url=" + o + "&referrer=" + i + n, a.style.top = "0", a.style.visibility = "hidden", g.insertBefore(a, null), a.insertBefore(e, null)
    }, He = !(Oe = function() { pe.postMessage && !He && (De(), xe(pe, "message", function(e) { var a; ".addtoany.com" !== e.origin.substr(-13) || "object" == typeof(a = e.data) && a.a2a && (fe.http_s = "s", ["feed", "page"].forEach(function(e) { t[e] = a.user_services[e], oe[e] && re(e) }), be("a2a_sm_ifr").style.display = "none") }), He = !0) }), Pe = function(e, a) {
        var t = be("a2a_sm_ifr");
        pe.postMessage && t && t.contentWindow.postMessage(a, "*")
    }, Re = function(e, a, t) {
        var n, i = new RegExp("[?&]" + a.replace(/[.\\+*?\[\^\]$(){}=!<>|:\-]/g, "\\$&") + "=([^&#]*)", "i"),
            o = i.exec(e);
        return null === o ? e + (n = /\?/.test(e) ? "&" : "?") + a + "=" + t : (n = o[0].charAt(0), e.replace(i, n + a + "=" + t))
    }, $e = function() {
        var e = me[x].prioritize;
        e && Ue(e, x), Me()
    }, Ue = function(e, a, t) {
        var n = parseInt(me[a].num_services),
            i = be("a2a" + a + "_full_services"),
            o = be("a2a" + a + "_mini_services"),
            r = I("a2a_i", i, "a"),
            l = I("a2a_i", o, "a"),
            s = [];
        if (e) {
            for (var c = e.length - 1, t = t; - 1 < c; c--) {
                var d = e[c],
                    d = Ce(d, r, !0, "a2a", "safename");
                d && (t && (d.className = d.className + t), i.insertBefore(d, i.firstChild), s.push(d))
            }
            if (0 < s.length) {
                for (var u, p, c = 0, t = t; c < s.length; c++) p = (u = Ce(s[c].a2a.safename, l, !0, "a2a", "safename")) ? u : (p = s[c].a2a, Ve(p.servicename, p.safename, p.serviceIcon, p.serviceColor, { src: p.js_src, url: p.url, type: p.serviceType, pu: p.popup, na: p.na, media: p.media })), t && (p.className = p.className + t), o.insertBefore(p, o.firstChild);
                if ((l = I("a2a_i", o, "a")).length > n)
                    for (var c = 0, _ = l.length; c < _ - n; c++) o.removeChild(o.lastChild)
            }
        }
    }, We = function(e) {
        var a = fe,
            t = a.color_main || "EEE",
            n = a.color_bg || "FFF",
            i = a.color_border || "CCC",
            o = a.color_link_text || "0166FF",
            r = a.color_link_text_hover || "2A2A2A",
            l = a.color_link_text || "2A2A2A",
            s = a.color_link_text || "2A2A2A",
            a = a.color_border || i,
            t = ".a2a_hide{display:none}.a2a_logo_color{background-color:" + (e || "#0166FF") + "}.a2a_menu,.a2a_menu *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;float:none;margin:0;padding:0;position:static;height:auto;width:auto}.a2a_menu{border-radius:6px;display:none;direction:ltr;background:#" + n + ';font:16px sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;color:#000;line-height:12px;border:1px solid #' + i + ";vertical-align:baseline;overflow:hidden}.a2a_mini{min-width:200px;position:absolute;width:300px;z-index:9999997}.a2a_overlay{display:none;background:#616c7d;opacity:.92;backdrop-filter:blur(8px);position:fixed;top:0;right:0;left:0;bottom:0;z-index:9999998;-webkit-tap-highlight-color:transparent;transition:opacity .14s,backdrop-filter .14s}.a2a_full{background:#" + n + ";border:1px solid #" + n + ";height:auto;height:calc(320px);top:15%;left:50%;margin-left:-320px;position:fixed;text-align:center;width:640px;z-index:9999999;transition:transform .14s,opacity .14s}.a2a_full_footer,.a2a_full_header,.a2a_full_services{border:0;margin:0;padding:12px;box-sizing:border-box}.a2a_full_header{padding-bottom:8px}.a2a_full_services{height:280px;overflow-y:scroll;padding:0 12px;-webkit-overflow-scrolling:touch}.a2a_full_services .a2a_i{display:inline-block;float:none;width:181px;width:calc(33.334% - 18px)}div.a2a_full_footer{font-size:12px;text-align:center;padding:8px 14px}div.a2a_full_footer a,div.a2a_full_footer a:visited{display:inline;font-size:12px;line-height:14px;padding:8px 14px}div.a2a_full_footer a:focus,div.a2a_full_footer a:hover{background:0 0;border:0;color:#" + o + '}div.a2a_full_footer a span.a2a_s_a2a,div.a2a_full_footer a span.a2a_w_a2a{background-size:14px;border-radius:3px;display:inline-block;height:14px;line-height:14px;margin:0 3px 0 0;vertical-align:top;width:14px}.a2a_modal{height:0;left:50%;margin-left:-320px;position:fixed;text-align:center;top:15%;width:640px;z-index:9999999;transition:transform .14s,opacity .14s;-webkit-tap-highlight-color:transparent}.a2a_modal_body{background:0 0;border:0;font:24px sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;position:relative;height:auto;width:auto}.a2a_thanks{color:#fff;height:auto;margin-top:20px;width:auto}.a2a_thanks>div:first-child{margin:0 0 40px 0}.a2a_thanks div *{height:inherit}#a2a_copy_link{background:#' + n + ";border:1px solid #" + n + ";margin-top:15%}span.a2a_s_link#a2a_copy_link_icon,span.a2a_w_link#a2a_copy_link_icon{background-size:48px;border-radius:0;display:inline-block;height:48px;left:0;line-height:48px;margin:0 3px 0 0;position:absolute;vertical-align:top;width:48px}#a2a_modal input#a2a_copy_link_text{background-color:transparent;border:0;color:#" + s + ";font:inherit;height:48px;left:62px;max-width:initial;padding:0;position:relative;width:564px;width:calc(100% - 76px)}#a2a_copy_link_copied{background-color:#0166ff;color:#fff;display:none;font:inherit;font-size:16px;margin-top:1px;padding:3px 8px}@media (prefers-color-scheme:dark){.a2a_menu a,.a2a_menu a.a2a_i,.a2a_menu a.a2a_i:visited,.a2a_menu a.a2a_more,i.a2a_i{border-color:#2a2a2a!important;color:#fff!important}.a2a_menu a.a2a_i:active,.a2a_menu a.a2a_i:focus,.a2a_menu a.a2a_i:hover,.a2a_menu a.a2a_more:active,.a2a_menu a.a2a_more:focus,.a2a_menu a.a2a_more:hover,.a2a_menu_find_container{border-color:#444!important;background-color:#444!important}.a2a_menu{background-color:#2a2a2a;border-color:#2a2a2a}.a2a_menu_find{color:#fff!important}.a2a_menu span.a2a_s_find svg{background-color:transparent!important}.a2a_menu span.a2a_s_find svg path{fill:#fff!important}}@media print{.a2a_floating_style,.a2a_menu,.a2a_overlay{visibility:hidden}}@keyframes a2aFadeIn{from{opacity:0}to{opacity:1}}.a2a_starting{opacity:0}.a2a_starting.a2a_full,.a2a_starting.a2a_modal{transform:scale(.8)}@media (max-width:639px){.a2a_full{border-radius:0;top:15%;left:0;margin-left:auto;width:100%}.a2a_modal{left:0;margin-left:10px;width:calc(100% - 20px)}}@media (min-width:318px) and (max-width:437px){.a2a_full .a2a_full_services .a2a_i{width:calc(50% - 18px)}}@media (max-width:317px){.a2a_full .a2a_full_services .a2a_i{width:calc(100% - 18px)}}@media (max-height:436px){.a2a_full{bottom:40px;height:auto;top:40px}}@media (max-height:550px){.a2a_modal{top:30px}}@media (max-height:360px){.a2a_modal{top:20px}.a2a_thanks>div:first-child{margin-bottom:20px}}.a2a_menu a{color:#" + o + ';text-decoration:none;font:16px sans-serif-light,HelveticaNeue-Light,"Helvetica Neue Light","Helvetica Neue",Arial,Helvetica,"Liberation Sans",sans-serif;line-height:14px;height:auto;width:auto;outline:0}.a2a_menu a.a2a_i:visited,.a2a_menu a.a2a_more{color:#' + o + "}.a2a_menu a.a2a_i:active,.a2a_menu a.a2a_i:focus,.a2a_menu a.a2a_i:hover,.a2a_menu a.a2a_more:active,.a2a_menu a.a2a_more:focus,.a2a_menu a.a2a_more:hover{color:#" + r + ";border-color:#" + t + ";border-style:solid;background-color:#" + t + ";text-decoration:none}.a2a_menu span.a2a_s_find{background-size:24px;height:24px;left:8px;position:absolute;top:7px;width:24px}.a2a_menu span.a2a_s_find svg{background-color:#" + n + "}.a2a_menu span.a2a_s_find svg path{fill:#" + a + "}#a2a_menu_container{display:inline-block}.a2a_menu_find_container{border:1px solid #" + a + ";border-radius:6px;padding:2px 24px 2px 0;position:relative;text-align:left}.a2a_cols_container .a2a_col1{overflow-x:hidden;overflow-y:auto;-webkit-overflow-scrolling:touch}#a2a_modal input,#a2a_modal input[type=text],.a2a_menu input,.a2a_menu input[type=text]{display:block;background-image:none;box-shadow:none;line-height:100%;margin:0;outline:0;overflow:hidden;padding:0;-moz-box-shadow:none;-webkit-box-shadow:none;-webkit-appearance:none}#a2afeed_find_container input,#a2afeed_find_container input[type=text],#a2apage_find_container input,#a2apage_find_container input[type=text]{background-color:transparent;border:0;box-sizing:content-box;color:#" + s + ";font:inherit;font-size:16px;height:28px;line-height:20px;left:38px;outline:0;margin:0;max-width:initial;padding:2px 0;position:relative;width:99%}.a2a_clear{clear:both}.a2a_svg{background-repeat:no-repeat;display:block;overflow:hidden;height:32px;line-height:32px;padding:0;width:32px}.a2a_svg svg{background-repeat:no-repeat;background-position:50% 50%;border:none;display:block;left:0;margin:0 auto;overflow:hidden;padding:0;position:relative;top:0;width:auto;height:auto}a.a2a_i,i.a2a_i{display:block;float:left;border:1px solid #" + n + ";line-height:24px;padding:6px 8px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:132px}a.a2a_i span,a.a2a_more span{display:inline-block;overflow:hidden;vertical-align:top}a.a2a_i .a2a_svg{margin:0 6px 0 0}a.a2a_i .a2a_svg,a.a2a_more .a2a_svg{background-size:24px;height:24px;line-height:24px;width:24px}a.a2a_sss:hover{border-left:1px solid #" + i + "}a.a2a_more{border-bottom:1px solid #" + n + ';border-left:0;border-right:0;line-height:24px;margin:6px 0 0;padding:6px;-webkit-touch-callout:none}a.a2a_more span{height:24px;margin:0 6px 0 0}.a2a_kit .a2a_svg{background-repeat:repeat}.a2a_default_style a{float:left;line-height:16px;padding:0 2px}.a2a_default_style a:hover .a2a_svg,.a2a_floating_style a:hover .a2a_svg,.a2a_overlay_style a:hover .a2a_svg svg{opacity:.7}.a2a_overlay_style.a2a_default_style a:hover .a2a_svg{opacity:1}.a2a_default_style .a2a_count,.a2a_default_style .a2a_svg,.a2a_floating_style .a2a_svg,.a2a_menu .a2a_svg,.a2a_vertical_style .a2a_count,.a2a_vertical_style .a2a_svg{border-radius:4px}.a2a_default_style .a2a_counter img,.a2a_default_style .a2a_dd,.a2a_default_style .a2a_svg{float:left}.a2a_default_style .a2a_img_text{margin-right:4px}.a2a_default_style .a2a_divider{border-left:1px solid #000;display:inline;float:left;height:16px;line-height:16px;margin:0 5px}.a2a_kit a{cursor:pointer}.a2a_floating_style{background-color:#fff;border-radius:6px;position:fixed;z-index:9999995}.a2a_overlay_style{z-index:2147483647}.a2a_floating_style,.a2a_overlay_style{animation:a2aFadeIn .2s ease-in;padding:4px}.a2a_vertical_style a{clear:left;display:block;overflow:hidden;padding:4px;text-decoration:none}.a2a_floating_style.a2a_default_style{bottom:0}.a2a_floating_style.a2a_default_style a,.a2a_overlay_style.a2a_default_style a{padding:4px}.a2a_count{background-color:#fff;border:1px solid #ccc;box-sizing:border-box;color:#2a2a2a;display:block;float:left;font:12px Arial,Helvetica,sans-serif;height:16px;margin-left:4px;position:relative;text-align:center;width:50px}.a2a_count:after,.a2a_count:before{border:solid transparent;border-width:4px 4px 4px 0;content:"";height:0;left:0;line-height:0;margin:-4px 0 0 -4px;position:absolute;top:50%;width:0}.a2a_count:before{border-right-color:#ccc}.a2a_count:after{border-right-color:#fff;margin-left:-3px}.a2a_count span{animation:a2aFadeIn .14s ease-in}.a2a_vertical_style .a2a_counter img{display:block}.a2a_vertical_style .a2a_count{float:none;margin-left:0;margin-top:6px}.a2a_vertical_style .a2a_count:after,.a2a_vertical_style .a2a_count:before{border:solid transparent;border-width:0 4px 4px 4px;content:"";height:0;left:50%;line-height:0;margin:-4px 0 0 -4px;position:absolute;top:0;width:0}.a2a_vertical_style .a2a_count:before{border-bottom-color:#ccc}.a2a_vertical_style .a2a_count:after{border-bottom-color:#fff;margin-top:-3px}.a2a_nowrap{white-space:nowrap}.a2a_note{margin:0 auto;padding:9px;font-size:12px;text-align:center}.a2a_note .a2a_note_note{margin:0;color:#' + l + "}.a2a_wide a{display:block;margin-top:3px;border-top:1px solid #" + t + ";text-align:center}.a2a_label{position:absolute!important;clip-path:polygon(0px 0px,0px 0px,0px 0px);-webkit-clip-path:polygon(0px 0px,0px 0px,0px 0px);overflow:hidden;height:1px;width:1px}.a2a_kit,.a2a_menu,.a2a_modal,.a2a_overlay{-ms-touch-action:manipulation;touch-action:manipulation;outline:0}.a2a_dd img{border:0}.a2a_button_facebook_like iframe{max-width:none}";
        (c = _e.createElement("style")).setAttribute("type", "text/css"), u && c.setAttribute("nonce", u), d.appendChild(c), c.styleSheet ? c.styleSheet.cssText = t : (t = _e.createTextNode(t), c.appendChild(t))
    }, qe = function() {
        ve("page");
        for (var e, a, t = c.sheet || c.styleSheet || {}, n = ("insertRule" in t), i = ("addRule" in t), o = he.concat([
                [0, 0, "a2a", "0166FF"]
            ]), r = 0, l = o.length; r < l; r++) e = ".a2a_s_" + o[r][2], a = "background-color:#" + o[r][3] + ";", n ? t.insertRule(e + "{" + a + "}", 0) : i && t.addRule(e, a, 0);
        Ye.load(!0), qe = s
    }, Ye = {
        icons: {},
        queue: [],
        tagO: '<svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">',
        tagC: "</svg>",
        fill: function(e, a) { return e.replace(/#FFF/gi, a) },
        get: function(e, a, t) {
            var n = Ye.fill,
                i = Ye.icons,
                o = Ye.tagO,
                r = Ye.tagC,
                l = i[e],
                i = i.a2a;
            return l ? o + (l = t ? n(l, t) : l) + r : i ? o + (i = t ? n(i, t) : i) + r : (Ye.queue.push({ name: e, node: a, color: t }), "pending")
        },
        set: function(e) {
            var a = Ye.queue,
                t = Ye.icons = e,
                n = Ye.tagO,
                i = Ye.tagC;
            if (t.a2a)
                for (var o, r, l, s = 0, c = a.length; s < c; s++) l = (o = a[s]).name, r = o.color, l = t[l] || t.a2a, l = r ? Ye.fill(l, r) : l, o.node.innerHTML = n + l + i
        },
        load: function(t) {
            var n = new pe.Image;
            n.onerror = function() { Ye.loadCSS(!1) }, n.onload = function() {
                var a, e = 1 === n.width && 1 === n.height;
                t ? Ye.loadCSS(e) : Ye.loadJS(_e), Ye.load = (a = e, function(e) { e && Ye.loadCSS(a) })
            }, Ye.load = s, n.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
        },
        loadCSS: function(e) {
            var a = fe.static_server,
                t = _e.createElement("link"),
                a = e && a != i ? a + "/" : i + "/svg/";
            t.rel = "stylesheet", t.href = a + "icons.30.svg.css", d.appendChild(t)
        },
        loadJS: function() {
            var e = fe.static_server,
                a = _e.createElement("script"),
                t = _e.getElementsByTagName("script")[0],
                e = e != i ? e + "/" : e + "/svg/";
            u && a.setAttribute("nonce", u), a.async = !0, a.src = e + "icons.30.svg.js", t.parentNode.insertBefore(a, t), Ye.loadJS = s
        }
    }, Ve = function(d, u, e, a, t, n, i) {
        function o(e) { Te(this) }
        var p = _e.createElement("a"),
            t = t || {},
            r = "a2a_svg a2a_s__default",
            l = fe.icon_color,
            s = l ? l.split(",", 2) : v,
            c = s ? s[0] : v,
            _ = s ? s[1] : v;
        return p.rel = "nofollow noopener", p.className = "a2a_i", p.href = "/#" + u, p.target = "_blank", p.a2a = {}, p.a2a.safename = u, p.a2a.servicename = d, p.a2a.serviceNameLowerCase = d.toLowerCase(), p.a2a.serviceIcon = e, p.a2a.serviceColor = a, p.a2a.serviceType = t.type, p.innerHTML = "<span></span>" + d + " ", s = p.firstChild, t.type && (p.a2a.stype = t.type), t.src && (p.a2a.js_src = t.src), t.url && (p.a2a.url = t.url), t.pu && (p.a2a.popup = 1), t.na && (p.a2a.na = 1), t.media && (p.a2a.media = 1), n && (p.a2a.customserviceuri = n), i ? (s.style.backgroundImage = "url(" + i + ")", s.className = r) : l ? (s.className = r + " a2a_s_" + e, c && "unset" != c ? s.style.backgroundColor = c : a && (s.style.backgroundColor = "#" + a), _ = _ && _.trim()) : e ? (s.className = r + " a2a_s_" + e, a && (s.style.backgroundColor = "#" + a)) : s.className = r, i || "pending" !== (_ = Ye.get(e, s, _)) && (s.innerHTML = _), "js" === p.a2a.stype ? xe(p, "click", o) : (xe(p, "mousedown", o), xe(p, "keydown", o)), "copy_link" == u && xe(p, "mouseenter", function() { be("a2a_modal").style.willChange = "transform, opacity", be("a2a_overlay").style.willChange = "backdrop-filter, opacity" }), xe(p, "click", function(e) {
            var a = me["n" + A],
                t = { node: p, service: d, title: a.linkname, url: a.linkurl, media: a.linkmedia },
                n = encodeURIComponent,
                i = "page" == x ? "pages" : "subscriptions",
                o = "page" == x ? "AddToAny Share/Save Button" : "AddToAny Subscribe Button",
                r = p.a2a,
                l = "js" === r.stype,
                s = screen.height,
                c = "event=service_click&url=" + n(location.href) + "&title=" + n(_e.title || "") + "&ev_service=" + n(u) + "&ev_service_type=menu&ev_menu_type=" + x + "&ev_url=" + n(a.linkurl) + "&ev_title=" + n(a.linkname).replace(/'/g, "%27"),
                n = Be("share", t),
                t = !1;
            void 0 !== n && (n.url && (a.linkurl = n.url, a.linkurl_implicit = !1), n.title && (a.linkname = n.title, a.linkname_implicit = !1), n.media && (a.linkmedia = n.media), Te(p), n.stop && (t = !0, Ae(e))), "feed" == x || r.url || r.js_src || Ne(), !r.popup || Se(e) || "_blank" !== p.target || l || (Ae(e), pe.open(p.href, "_blank", "toolbar=0,personalbar=0,resizable,scrollbars,status,width=550,height=450,top=" + (450 < s ? Math.round(s / 2 - 225) : 40) + ",left=" + Math.round(screen.width / 2 - 275))), s = r.js_skip, !r.externalJS && !r.literalJS || t || s || Le(r), l && !s && Ae(e), s && delete p.a2a.js_skip, Pe(x, c), je.track(d, u, a.linkurl, i, o)
        }), p
    }, Je = function() {
        if (fe.static_server != i) return !1;
        var e = navigator,
            a = ["ar", "id", "ms", "ms-MY", "bn", "bn-IN", "bs", "bs-BA", "bg", "ca", "ca-AD", "ca-ES", "cs", "cs-CZ", "cy", "cy-GB", "da", "da-DK", "de", "dv", "el", "el-GR", "et", "et-EE", "es", "es-AR", "es-VE", "eo", "en-US", "eu", "eu-ES", "fa", "fa-IR", "fr", "fr-CA", "gd", "he", "hi", "hi-IN", "hr", "hy", "hy-AM", "is", "it", "ja", "ja-JP", "ko", "ko-KR", "ku", "ku-TR", "lv", "lt", "li", "li-NL", "hu", "mk", "nl", "nn-NO", "no", "pl", "pt", "pt-BR", "pt-PT", "ro", "ru", "sr", "sr-RS", "fi", "sk", "sl", "sl-SI", "sv", "sv-SE", "ta", "ta-IN", "tr", "te-IN", "uk", "uk-UA", "vi", "vi-VN", "zh-CN", "zh-TW"],
            t = fe.locale || (e.browserLanguage || e.language).toLowerCase(),
            n = Ce(t, a, !0);
        return n || -1 != (e = t.indexOf("-")) && (n = Ce(t.substr(0, e), a, !0)), !("en-us" == t || !n) && n
    }, Ge = function() {
        var e = I("a2a_localize", _e),
            a = fe.localize,
            t = Ke;

        function n(e) { var a, t = _e.createElement("div"); return t.innerHTML = e, a = (t = t.childNodes[0]) ? t.nodeValue : a }
        for (var i, o, r, l = 0, s = e.length; l < s; l++)(r = (r = (i = e[l]).getAttribute("data-a2a-localize")) && r.split(",", 2)) && (o = r[0], r = a[r = r[1]] || t[r] || "", "inner" === o ? i.innerHTML = r : "label" === o ? i.setAttribute("aria-label", n(r)) : "title" === o && i.setAttribute("title", n(r)))
    }, Ke = { Share: "Share", Save: "Save", Subscribe: "Subscribe", Email: "Email", Bookmark: "Bookmark", ShowAll: "Show all", ShowLess: "Show less", FindAnyServiceToAddTo: "Find any service", PoweredBy: "By", AnyEmail: "Any email", ShareViaEmail: "Share via email", SubscribeViaEmail: "Subscribe via email", BookmarkInYourBrowser: "Bookmark in your browser", BookmarkInstructions: "Press Ctrl+D or &#8984;+D to bookmark this page", AddToYourFavorites: "Add to Favorites", SendFromWebOrProgram: "Send from any other email service", EmailProgram: "Email application", More: "More&#8230;", ThanksForSharing: "Thanks for sharing!", ThanksForFollowing: "Thanks for following!" }, Xe = function(e) {
        if (x = fe.menu_type || e, !me[x] && !pe["a2a" + x + "_init"]) {
            me[x] = {}, pe.a2a_show_dropdown = ne, pe.a2a_miniLeaveDelay = O, pe.a2a_init = ve;
            var a = {
                page: {
                    most: [
                        ["Facebook", "facebook", "facebook", "1877F2", { pu: 1 }],
                        ["Twitter", "twitter", "twitter", "1D9BF0", { pu: 1, na: 1 }],
                        ["WhatsApp", "whatsapp", "whatsapp", "12AF0A", { pu: 1, na: 1 }],
                        ["Email", "email", "email", "0166FF", { url: "mailto:?subject=${title}&body=${link}" }],
                        ["LinkedIn", "linkedin", "linkedin", "007BB5", { pu: 1, na: 1 }],
                        ["Pinterest", "pinterest", "pinterest", "BD081C", { type: "js", src: "https://assets.pinterest.com/js/pinmarklet.js", media: 1, pu: 1 }],
                        ["Telegram", "telegram", "telegram", "2CA5E0", { na: 1 }],
                        ["Messenger", "facebook_messenger", "facebook_messenger", "0084FF", { pu: 1, na: 1 }],
                        ["Reddit", "reddit", "reddit", "ff4500", { na: 1 }],
                        ["Gmail", "google_gmail", "gmail", "DD5347", { type: "email", pu: 1 }],
                        ["Pocket", "pocket", "pocket", "EE4056"],
                        ["Tumblr", "tumblr", "tumblr", "35465C", { media: 1, pu: 1 }],
                        ["Amazon Wish List", "amazon_wish_list", "amazon", "F90"],
                        ["AOL Mail", "aol_mail", "aol", "2A2A2A", { type: "email", pu: 1 }],
                        ["Balatarin", "balatarin", "balatarin", "079948"],
                        ["BibSonomy", "bibsonomy", "bibsonomy", "2A2A2A"],
                        ["Bitty Browser", "bitty_browser", "bitty", "999"],
                        ["Blogger", "blogger", "blogger", "FDA352"],
                        ["BlogMarks", "blogmarks", "blogmarks", "535353"],
                        ["Bookmarks.fr", "bookmarks_fr", "bookmarks_fr", "96C044"],
                        ["Box.net", "box_net", "box", "1A74B0"],
                        ["Buffer", "buffer", "buffer", "2A2A2A"],
                        ["Care2 News", "care2_news", "care2", "6EB43F"],
                        ["CiteULike", "citeulike", "citeulike", "2781CD"],
                        ["Copy Link", "copy_link", "link", "0166FF", { type: "js", src: "javascript:a2a.copyLink('${link}')" }],
                        ["Design Float", "design_float", "designfloat", "8AC8FF"],
                        ["Diary.Ru", "diary_ru", "diary_ru", "912D31"],
                        ["Diaspora", "diaspora", "diaspora", "2E3436"],
                        ["Digg", "digg", "digg", "2A2A2A"],
                        ["Diigo", "diigo", "diigo", "4A8BCA"],
                        ["Douban", "douban", "douban", "071", { pu: 1 }],
                        ["Draugiem", "draugiem", "draugiem", "F60", { pu: 1 }],
                        ["DZone", "dzone", "dzone", "82C251"],
                        ["Evernote", "evernote", "evernote", "00A82D"],
                        ["Fark", "fark", "fark", "555"],
                        ["Flipboard", "flipboard", "flipboard", "C00", { pu: 1 }],
                        ["Folkd", "folkd", "folkd", "0F70B2"],
                        ["Google Bookmarks", "google_bookmarks", "google", "4285F4"],
                        ["Google Classroom", "google_classroom", "google_classroom", "FFC112"],
                        ["Hacker News", "hacker_news", "y18", "F60"],
                        ["Hatena", "hatena", "hatena", "00A6DB"],
                        ["Houzz", "houzz", "houzz", "7AC143", { type: "js", src: "https://www.houzz.com/js/clipperBookmarklet.js", media: 1, pu: 1 }],
                        ["Instapaper", "instapaper", "instapaper", "2A2A2A"],
                        ["Kakao", "kakao", "kakao", "FCB700", { pu: 1 }],
                        ["Kik", "kik", "kik", "2A2A2A"],
                        ["Push to Kindle", "kindle_it", "kindle", "2A2A2A"],
                        ["Known", "known", "known", "2A2A2A"],
                        ["Line", "line", "line", "00C300", { pu: 1, na: 1 }],
                        ["LiveJournal", "livejournal", "livejournal", "113140"],
                        ["Mail.Ru", "mail_ru", "mail_ru", "356FAC"],
                        ["Mastodon", "mastodon", "mastodon", "2b90d9"],
                        ["Mendeley", "mendeley", "mendeley", "A70805"],
                        ["Meneame", "meneame", "meneame", "FF7D12"],
                        ["MeWe", "mewe", "mewe", "007DA1"],
                        ["Mixi", "mixi", "mixi", "D1AD5A"],
                        ["MySpace", "myspace", "myspace", "2A2A2A"],
                        ["Netvouz", "netvouz", "netvouz", "6C3"],
                        ["Odnoklassniki", "odnoklassniki", "odnoklassniki", "F2720C"],
                        ["Outlook.com", "outlook_com", "outlook_com", "0072C6", { type: "email" }],
                        ["Papaly", "papaly", "papaly", "3AC0F6", { pu: 1 }],
                        ["Pinboard", "pinboard", "pinboard", "1341DE", { pu: 1 }],
                        ["Plurk", "plurk", "plurk", "CF682F"],
                        ["Print", "print", "print", "0166FF", { type: "js", src: "javascript:print()" }],
                        ["PrintFriendly", "printfriendly", "printfriendly", "6D9F00"],
                        ["Protopage Bookmarks", "protopage_bookmarks", "protopage", "413FFF"],
                        ["Pusha", "pusha", "pusha", "0072B8"],
                        ["Qzone", "qzone", "qzone", "2B82D9"],
                        ["Rediff MyPage", "rediff", "rediff", "D20000"],
                        ["Refind", "refind", "refind", "1492ef"],
                        ["Renren", "renren", "renren", "005EAC", { pu: 1 }],
                        ["Sina Weibo", "sina_weibo", "sina_weibo", "E6162D"],
                        ["SiteJot", "sitejot", "sitejot", "FFC808"],
                        ["Skype", "skype", "skype", "00AFF0"],
                        ["Slashdot", "slashdot", "slashdot", "004242"],
                        ["SMS", "sms", "sms", "6CBE45", { url: "sms:?&body=${title}%20${link}" }],
                        ["Snapchat", "snapchat", "snapchat", "2A2A2A", { pu: 1, na: 1 }],
                        ["StockTwits", "stocktwits", "stocktwits", "40576F", { pu: 1 }],
                        ["Svejo", "svejo", "svejo", "5BD428"],
                        ["Symbaloo Bookmarks", "symbaloo_bookmarks", "symbaloo", "6DA8F7"],
                        ["Threema", "threema", "threema", "2A2A2A", { url: "threema://compose?text=${title}%20${link}", na: 1 }],
                        ["Trello", "trello", "trello", "0079BF", { pu: 1 }],
                        ["Tuenti", "tuenti", "tuenti", "0075C9"],
                        ["Twiddla", "twiddla", "twiddla", "2A2A2A"],
                        ["TypePad Post", "typepad_post", "typepad", "D2DE61"],
                        ["Viadeo", "viadeo", "viadeo", "2A2A2A", { pu: 1 }],
                        ["Viber", "viber", "viber", "7C529E", { url: "viber://forward?text=${title}%20${link}", na: 1 }],
                        ["VK", "vk", "vk", "587EA3", { pu: 1 }],
                        ["Wanelo", "wanelo", "wanelo", "9cb092"],
                        ["WeChat", "wechat", "wechat", "7BB32E"],
                        ["WordPress", "wordpress", "wordpress", "464646"],
                        ["Wykop", "wykop", "wykop", "367DA9"],
                        ["XING", "xing", "xing", "165B66", { pu: 1 }],
                        ["Yahoo Mail", "yahoo_mail", "yahoo", "400090", { type: "email" }],
                        ["Yoolink", "yoolink", "yoolink", "A2C538"],
                        ["Yummly", "yummly", "yummly", "E16120", { type: "js", src: "https://www.yummly.com/js/yumlet.js", media: 1, pu: 1 }]
                    ],
                    email: [
                        ["Email", "email", "email", "0166FF", { type: "email" }],
                        ["Gmail", "google_gmail", "gmail", "DD5347", { type: "email", pu: 1 }],
                        ["AOL Mail", "aol_mail", "aol", "2A2A2A", { type: "email", pu: 1 }],
                        ["Outlook.com", "outlook_com", "outlook_com", "0072C6", { type: "email" }],
                        ["Yahoo Mail", "yahoo_mail", "yahoo", "400090", { type: "email" }]
                    ]
                },
                feed: {
                    most: [
                        ["Feed", "feed", "feed", "E3702D", { url: "${link_noenc}" }],
                        ["Feedly", "feedly", "feedly", "2BB24C"],
                        ["My Yahoo", "my_yahoo", "yahoo", "400090"],
                        ["FeedBlitz", "feedblitz", "feedblitz", "FF8B23", { type: "email" }],
                        ["AOL Reader", "my_aol", "aol", "2A2A2A"],
                        ["The Old Reader", "oldreader", "oldreader", "D73F31"],
                        ["Agregator", "agregator", "agregator", "359440"],
                        ["Bitty Browser Preview", "bitty_browser_preview", "bitty", "999"],
                        ["Daily Rotation", "daily_rotation", "dailyrotation", "2A2A2A"],
                        ["Feed Mailer", "feed_mailer", "feedmailer", "78A8D1"],
                        ["FeedBucket", "feedbucket", "feedbucket", "E3702D"],
                        ["iTunes", "itunes", "itunes", "FB233A", { url: "itpc://${link_nohttp}" }],
                        ["Miro", "miro", "miro", "D41700"],
                        ["Netvibes", "netvibes", "netvibes", "7CA900"],
                        ["NewsAlloy", "newsalloy", "newsalloy", "8E2B3D"],
                        ["NewsIsFree", "newsisfree", "newsisfree", "316CA9"],
                        ["Outlook", "outlook", "outlook_com", "0072C6", { url: "feed://${link_nohttp}" }],
                        ["PodNova", "podnova", "podnova", "B50419"],
                        ["Protopage News Feeds", "protopage_news_feeds", "protopage", "413FFF"],
                        ["Symbaloo Feeds", "symbaloo_feeds", "symbaloo", "6DA8F7"],
                        ["The Free Dictionary", "the_free_dictionary", "thefreedictionary", "004B85"],
                        ["The Free Library", "the_free_library", "thefreelibrary", "004B85"],
                        ["WINKsite", "winksite", "winksite", "6FE738"]
                    ],
                    email: [
                        ["FeedBlitz", "feedblitz", "feedblitz", "FF8B23", { type: "email" }]
                    ]
                }
            };
            he = a.page.most.concat(a.feed.most);
            var t, n, i, o, r, l, s, c, d, u, p, _ = me[x],
                f = "feed" == x ? "feed" : "page",
                m = fe;
            location.host.split(".").slice(-1);
            for (t in h) _[t] = m[t];
            (p = Je()) && "custom" != p && de(m.static_server + "/locale/" + p + ".js", function() { m.localize = pe.a2a_localize, Ge() }), n = x, i = a[f], r = o = "", l = "a2a" + x, s = fe, y(), _e.createElement("a"), c = s.icon_color, d = c && c.split(",", 2), u = d && d[0], e = d && d[1], p = "a2a_svg a2a_s__default a2a_s_", a = u && "unset" != u ? u : "#0166ff", c = '<svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="' + (f = e || "#FFF") + '"><path d="M14 7h4v18h-4z"/><path d="M7 14h18v4H7z"/></g></svg>', d = Ke, e = s.localize, u = be("a2a_overlay"), x = n, We(a), e = s.localize = { Share: e.Share || d.Share, Save: e.Save || d.Save, Subscribe: e.Subscribe || d.Subscribe, Email: e.Email || d.Email, Bookmark: e.Bookmark || d.Bookmark, ShowAll: e.ShowAll || d.ShowAll, ShowLess: e.ShowLess || d.ShowLess, FindAnyServiceToAddTo: e.FindAnyServiceToAddTo || d.FindAnyServiceToAddTo, PoweredBy: e.PoweredBy || d.PoweredBy, AnyEmail: "Any email", ShareViaEmail: e.ShareViaEmail || d.ShareViaEmail, SubscribeViaEmail: e.SubscribeViaEmail || d.SubscribeViaEmail, BookmarkInYourBrowser: e.BookmarkInYourBrowser || d.BookmarkInYourBrowser, BookmarkInstructions: e.BookmarkInstructions || d.BookmarkInstructions, AddToYourFavorites: e.AddToYourFavorites || d.AddToYourFavorites, SendFromWebOrProgram: e.SendFromWebOrProgram || d.SendFromWebOrProgram, EmailProgram: e.EmailProgram || d.EmailProgram, More: e.More || d.More, ThanksForSharing: e.ThanksForSharing || d.ThanksForSharing, ThanksForFollowing: e.ThanksForFollowing || d.ThanksForFollowing }, u || (r += '<div class="a2a_overlay" id="a2a_overlay"></div>', r += '<div id="a2a_modal" class="a2a_modal a2a_hide" role="dialog" tabindex="-1" aria-label="">', r += '<div class="a2a_modal_body a2a_menu a2a_hide" id="a2a_copy_link"><span id="a2a_copy_link_icon" class="a2a_svg a2a_s_link a2a_logo_color"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="' + f + '" d="M24.4 21.18c0-.36-.1-.67-.36-.92l-2.8-2.8a1.24 1.24 0 0 0-.92-.38c-.38 0-.7.14-.97.43.02.04.1.12.25.26l.3.3.2.24c.08.12.14.24.17.35.03.1.05.23.05.37 0 .36-.13.66-.38.92a1.25 1.25 0 0 1-.92.37 1.4 1.4 0 0 1-.37-.03 1.06 1.06 0 0 1-.35-.18 2.27 2.27 0 0 1-.25-.2 6.82 6.82 0 0 1-.3-.3l-.24-.25c-.3.28-.44.6-.44.98 0 .36.13.66.38.92l2.78 2.8c.24.23.54.35.9.35.37 0 .68-.12.93-.35l1.98-1.97c.26-.25.38-.55.38-.9zm-9.46-9.5c0-.37-.13-.67-.38-.92l-2.78-2.8a1.24 1.24 0 0 0-.9-.37c-.36 0-.67.1-.93.35L7.97 9.92c-.26.25-.38.55-.38.9 0 .36.1.67.37.92l2.8 2.8c.24.25.55.37.92.37.36 0 .7-.13.96-.4-.03-.04-.1-.12-.26-.26s-.24-.23-.3-.3a2.67 2.67 0 0 1-.2-.24 1.05 1.05 0 0 1-.17-.35 1.4 1.4 0 0 1-.04-.37c0-.36.1-.66.36-.9.26-.26.56-.4.92-.4.14 0 .26.03.37.06.12.03.23.1.35.17.1.1.2.16.25.2l.3.3.24.26c.3-.28.44-.6.44-.98zM27 21.17c0 1.07-.38 2-1.15 2.73l-1.98 1.98c-.74.75-1.66 1.12-2.73 1.12-1.1 0-2-.38-2.75-1.14l-2.8-2.8c-.74-.74-1.1-1.65-1.1-2.73 0-1.1.38-2.04 1.17-2.82l-1.18-1.17c-.8.8-1.72 1.18-2.82 1.18-1.08 0-2-.36-2.75-1.12l-2.8-2.8C5.38 12.8 5 11.9 5 10.82c0-1.08.38-2 1.15-2.74L8.13 6.1C8.87 5.37 9.78 5 10.86 5c1.1 0 2 .38 2.75 1.15l2.8 2.8c.74.73 1.1 1.65 1.1 2.72 0 1.1-.38 2.05-1.17 2.82l1.18 1.18c.8-.8 1.72-1.2 2.82-1.2 1.08 0 2 .4 2.75 1.14l2.8 2.8c.76.76 1.13 1.68 1.13 2.76z"/></svg></span><input id="a2a_copy_link_text" type="text" title="Copy link" readonly><div id="a2a_copy_link_copied">&check;</div></div>', r += '<div class="a2a_modal_body a2a_menu a2a_thanks a2a_hide" id="a2a_thanks"><div class="a2a_localize" data-a2a-localize="inner,ThanksForSharing">' + e.ThanksForSharing + "</div></div>", r += "</div>"), o += '<div class="a2a_menu a2a_full a2a_localize" id="a2a' + x + '_full" role="dialog" tabindex="-1" aria-label="' + ("feed" == x ? e.Subscribe : e.Share) + '" data-a2a-localize="title,' + ("feed" == x ? "Subscribe" : "Share") + '"><div class="a2a_full_header"><div id="a2a' + x + '_find_container" class="a2a_menu_find_container"><input id="a2a' + x + '_find" class="a2a_menu_find a2a_localize" type="text" autocomplete="off" title="' + e.FindAnyServiceToAddTo + '" data-a2a-localize="title,FindAnyServiceToAddTo"><span id="a2a' + x + '_find_icon" class="a2a_svg a2a_s_find"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#CCC" d="M19.7 18.2l-4.5-4.5c.7-1.1 1.2-2.3 1.2-3.6 0-3.5-2.8-6.3-6.3-6.3s-6.3 2.8-6.3 6.3 2.8 6.3 6.3 6.3c1.4 0 2.6-.4 3.6-1.2l4.5 4.5c.6.6 1.3.7 1.7.2.5-.4.4-1.1-.2-1.7zm-9.6-3.6c-2.5 0-4.5-2.1-4.5-4.5 0-2.5 2.1-4.5 4.5-4.5 2.5 0 4.5 2.1 4.5 4.5s-2 4.5-4.5 4.5z"/></svg></span></div></div><div class="a2a_full_services" id="a2a' + x + '_full_services" role="presentation"></div><div class="a2a_full_footer"><a href="https://www.addtoany.com" title="Share Buttons" rel="noopener" target="_blank"><span class="' + p + 'a2a a2a_logo_color">' + c + '</span>AddToAny</a></div></div><div id="a2a' + x + '_dropdown" class="a2a_menu a2a_mini a2a_localize a2a_hide" tabindex="-1" aria-label="' + ("feed" == x ? e.Subscribe : e.Share) + '" data-a2a-localize="label,' + ("feed" == x ? "Subscribe" : "Share") + '"><div class="a2a_mini_services" id="a2a' + x + '_mini_services"></div><div id="a2a' + x + '_cols_container" class="a2a_cols_container"><div class="a2a_col1' + ("mail" == x ? " a2a_hide" : "") + '" id="a2a' + x + '_col1"></div><div id="a2a' + x + '_2_col1"' + ("mail" != x ? ' class="a2a_hide"' : "") + '></div><div class="a2a_clear"></div></div>', "mail" != x && (o += '<div class="a2a' + x + '_wide a2a_wide"><a href="#addtoany" id="a2a' + x + '_show_more_less" class="a2a_more a2a_localize" title="' + e.ShowAll + '" data-a2a-localize="title,ShowAll"><span class="' + p + 'a2a a2a_logo_color">' + c + '</span><span class="a2a_localize" data-a2a-localize="inner,More">' + e.More + "</a></span></div>"), o += "</div>", u ? g.insertAdjacentHTML("beforeend", o) : g.insertAdjacentHTML("afterbegin", r + o), (o = be(l + "_dropdown")) && (xe(o, "mouseenter", H), me[x].onclick || xe(o, "mouseleave", O)), (o = be(l + "_find")) && (xe(be(l + "_find_icon"), "click", V), xe(o, "click", V), xe(o, "keyup", G)), (o = be("a2a_copy_link_icon")) && xe(o, "click", function() { be("a2a_copy_link_text").click() }), me[x].services = i, xe(be("a2a_overlay"), "click", function(e) { ee(x) }), "mail" != x && xe(be(l + "_show_more_less"), "click", function(e) { Ae(e), Y() }), je(), w(h)
        }
    }, Qe = function() {
        var e, a;
        g || (a = be(e = "a2a_menu_container"), g = a && !N.a2a_done ? a : _e.createElement("div"), xe(g, "click", _), xe(g, "touchstart", _, !!M() && { passive: !0 }), g.id != e && (g.style.position = "static", _e.body.insertBefore(g, null)))
    }, Ze = function() { r(), Qe(), n("page"), Oe(), a() }, pe.a2a = pe.a2a || {}, pe.a2a.bmBrowser = le, pe.a2a.copyLink = se, pe.a2a.counters = ke, pe.a2a.GA = je, pe.a2a.init = ve, pe.a2a.init_all = n, pe.a2a.svg = Ye, pe.a2a.svg_css = qe, _e.body && Ze(), p.ready(Ze))
}(window, document);