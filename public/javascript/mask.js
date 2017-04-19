// jQuery Mask Plugin v1.1.3
// github.com/igorescobar/jQuery-Mask-Plugin
(function (b) {
    var u = function (a, g, e) {
            var c = this;
            a = b(a);
            var l;
            g = "function" == typeof g ? g(a.val(), e) : g;
            c.init = function () {
                e = e || {};
                c.byPassKeys = [8, 9, 37, 38, 39, 40, 46];
                c.translation = {
                    0: {
                        pattern: /\d/
                    },
                    9: {
                        pattern: /\d/,
                        optional: !0
                    },
                    A: {
                        pattern: /[a-zA-Z0-9]/
                    },
                    S: {
                        pattern: /[a-zA-Z]/
                    }
                };
                c.translation = b.extend({}, c.translation, e.translation);
                c = b.extend(!0, {}, c, e);
                a.each(function () {
                    a.attr("maxlength", g.length).attr("autocomplete", "off");
                    f.destroyEvents();
                    f.events();
                    f.val(f.getMasked())
                })
            };
            var f = {
                events: function () {
                    a.on("keydown.mask", function () {
                        l = f.val()
                    });
                    a.on("keyup.mask", f.behaviour);
                    a.on("paste.mask", function () {
                        setTimeout(function () {
                            a.keydown().keyup()
                        }, 100)
                    })
                },
                destroyEvents: function () {
                    a.off("keydown.mask").off("keyup.mask").off("paste.mask")
                },
                isInput: function () {
                    return "input" === a.get(0).tagName.toLowerCase()
                },
                val: function (s) {
                    return 0 < arguments.length ? f.isInput() ? a.val(s) : a.text(s) : f.isInput() ? a.val() : a.text()
                },
                behaviour: function (a) {
                    a = a || window.event;
                    if (-1 === b.inArray(a.keyCode || a.which, c.byPassKeys)) return f.val(f.getMasked()), f.callbacks(a)
                },
                getMasked: function () {
                    var a = [],
                        b = f.val(),
                        d = 0,
                        t = g.length,
                        h = 0,
                        l = b.length,
                        k = 1,
                        m = "push",
                        n;
                    e.reverse ? (m = "unshift", k = -1, d = t - 1, h = l - 1, n = function () {
                        return -1 < d && -1 < h
                    }) : n = function () {
                        return d < t && h < l
                    };
                    for (; n();) {
                        var p = g.charAt(d),
                            q = c.translation[p],
                            r = b.charAt(h);
                        q ? (r.match(q.pattern) ? (a[m](r), d += k) : !0 == q.optional && (d += k, h -= k), h += k) : (a[m](p), r == p && (h += k), d += k)
                    }
                    return a.join("")
                },
                callbacks: function (b) {
                    var c = f.val(),
                        d = f.val() !== l;
                    if (!0 === d && "function" == typeof e.onChange) e.onChange(c, b, a, e);
                    if (!0 === d && "function" == typeof e.onKeyPress) e.onKeyPress(c, b, a, e);
                    if ("function" === typeof e.onComplete && c.length === g.length) e.onComplete(c, b, a, e)
                }
            };
            c.remove = function () {
                f.destroyEvents();
                f.val(c.getCleanVal()).removeAttr("maxlength")
            };
            c.getCleanVal = function () {
                for (var a = [], b = f.val(), d = 0, e = g.length; d < e; d++) c.translation[g.charAt(d)] && a.push(b.charAt(d));
                return a.join("")
            };
            c.init()
        };
    b.fn.mask = function (a, g) {
        return this.each(function () {
            b(this).data("mask", new u(this, a, g))
        })
    };
    b.fn.unmask = function () {
        return this.each(function () {
            b(this).data("mask").remove()
        })
    };
    b("input[data-mask]").each(function () {
        b(this).mask(b(this).attr("data-mask"))
    })
})(window.jQuery || window.Zepto);
// JavaScript Document