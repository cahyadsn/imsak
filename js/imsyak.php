<?php 
/*
BISMILLAAHIRRAHMAANIRRAHIIM - In the Name of Allah, Most Gracious, Most Merciful
================================================================================
filename  : imsyak.php
purpose  :
create  : 2015/07/02
last edit  : 1804028,170329,150702
author  : cahya dsn
================================================================================
This program is free software; you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

copyright (c) 2015-2018 by cahya dsn; cahyadsn@gmail.com
================================================================================
*/
header("Content-type: text/javascript");if(isset($_GET['h'])) $h=$_GET['h'];else die('illegal call');?>
! function(g) {
    function h() {
        var g = Array.prototype.slice.call(arguments, 0);
        if (0 == g.length) this.g = new Date;
        else if (1 == g.length && "string" == typeof g[0]) this.g = new Date(f(g[0]));
        else if (1 == g.length && "number" == typeof g[0]) this.g = new Date(g[0]);
        else if (1 == g.length && g[0] instanceof Date) this.g = g[0];
        else if (g.length >= 2) {
            var h = +g[0],
                t = +g[1],
                n = +g[2] || 1,
                i = +g[3] || 0,
                r = +g[4] || 0,
                o = +g[5] || 0,
                s = +g[6] || 0,
                a = f([h, t + 1, n].join("-"));
            this.g = new Date(a), this.g.setHours(i), this.g.setMinutes(r), this.g.setSeconds(o), this.g.setMilliseconds(s)
        }
        this.h = e(this.g);
        var u = this.h.split("-");
        return this.year = +u[0], this.month = +u[1], this.date = +u[2], this
    }

    function e(g) {
        var h = [g.getFullYear(), g.getMonth() + 1, g.getDate()].join("-");
        return c(n(h))
    }

    function n(g) {
        var h = g.split("-");
        return h[1] = h[1].length < 2 ? "0" + h[1] : h[1], h[2] = h[2].length < 2 ? "0" + h[2] : h[2], h.join("-")
    }

    function i(g) {
        for (var h = [], t = 0; t < g.length - 1; t++)
            for (var e = g[t], n = g[t + 1], i = new Date(e.g), s = new Date(n.g), u = e.h, f = e.g; s > i;) {
                var c = {
                    h: u,
                    g: f
                };
                h.push(c), u = a(u), f = r(o(i)), i = o(i)
            }
        var l = g[g.length - 1];
        return h.push(l), h
    }

    function r(g) {
        var h = [g.getFullYear(), g.getMonth() + 1, g.getDate()].join("-");
        return s(h)
    }

    function o(g) {
        return new Date(g.getTime() + 864e5)
    }

    function s(g) {
        var h = g.split("-");
        return h[1] = h[1].length < 2 ? "0" + h[1] : h[1], h[2] = h[2].length < 2 ? "0" + h[2] : h[2], h.join("-")
    }

    function a(g) {
        var h = g.split("-");
        return h[2] = +h[2] + 1, s(h.join("-"))
    }

    function u(g) {
        g.g = {}, g.h = {};
        for (var h = 0; h < g.length; h++) {
            var t = g[h];
            g.g[t.h] = t.g, g.h[t.g] = t.h
        }
        return g
    }

    function f() {
        var g, h = {},
            t = Array.prototype.slice.call(arguments, 0),
            e = t[t.length - 1];
        if (typeof e != typeof {} || e instanceof Date || e instanceof Array || (h = e, t.pop()), 0 == t.length) var n = new Date,
            g = c(n, {
                type: "array"
            });
        else if (1 == t.length && "string" == typeof t[0]) {
            var i = t[0].split("-"),
                r = +i[0],
                o = +i[1],
                a = +i[2];
            g = [r, o, a]
        } else if (1 == t.length && "number" == typeof t[0]) var n = new Date(t[0]),
            g = c(n, {
                type: "array"
            });
        else if (1 == t.length && t[0] instanceof Array) {
            var u = t[0],
                r = +u[0],
                o = +u[1],
                a = +u[2];
            g = [r, o, a]
        } else if (3 == t.length) {
            var r = +t[0],
                o = +t[1],
                a = +t[2];
            g = [r, o, a]
        }
        var f = s([+g[0], +g[1], +g[2]].join("-")),
            p = l.g[f],
            y = p.split("-").map(function(g) {
                return +g
            }),
            D = {
                y: +y[0],
                m: +y[1],
                d: +y[2]
            },
            v = JSON.stringify(D),
            T = new Date(+y[0], +y[1] - 1, +y[2]);
        switch (h.type) {
            case "array":
                return y;
            case "object":
                return D;
            case "json":
                return v;
            case "date":
                return T;
            default:
                return p
        }
    }

    function c() {
        var g, h = {},
            t = Array.prototype.slice.call(arguments, 0),
            e = t[t.length - 1];
        if (typeof e != typeof {} || e instanceof Date || e instanceof Array || (h = e, t.pop()), 0 == t.length) g = new Date;
        else if (1 == t.length && "string" == typeof t[0]) {
            var n = t[0].split("-"),
                i = +n[0],
                r = +n[1] - 1,
                o = +n[2];
            g = new Date(i, r, o)
        } else if (1 == t.length && "number" == typeof t[0]) g = new Date(t[0]);
        else if (1 == t.length && t[0] instanceof Date) g = t[0];
        else if (1 == t.length && t[0] instanceof Array) {
            var a = t[0],
                i = +a[0],
                r = +a[1] - 1,
                o = +a[2];
            g = new Date(i, r, o)
        } else if (3 == t.length) {
            var i = +t[0],
                r = +t[1] - 1,
                o = +t[2];
            g = new Date(i, r, o)
        }
        var u = s([g.getFullYear(), g.getMonth() + 1, g.getDate()].join("-")),
            f = l.h[u],
            c = f.split("-").map(function(g) {
                return +g
            }),
            p = {
                y: +c[0],
                m: +c[1],
                d: +c[2]
            },
            y = JSON.stringify(p);
        switch (h.type) {
            case "array":
                return c;
            case "object":
                return p;
            case "json":
                return y;
            default:
                return f
        }
    }
    var l = [{
        h: "1420-01-01",
        g: "1999-04-17"
    }, {
        h: "1420-02-01",
        g: "1999-05-16"
    }, {
        h: "1420-03-01",
        g: "1999-06-15"
    }, {
        h: "1420-04-01",
        g: "1999-07-14"
    }, {
        h: "1420-05-01",
        g: "1999-08-12"
    }, {
        h: "1420-06-01",
        g: "1999-09-11"
    }, {
        h: "1420-07-01",
        g: "1999-10-10"
    }, {
        h: "1420-08-01",
        g: "1999-11-09"
    }, {
        h: "1420-09-01",
        g: "1999-12-09"
    }, {
        h: "1420-10-01",
        g: "2000-01-08"
    }, {
        h: "1420-11-01",
        g: "2000-02-07"
    }, {
        h: "1420-12-01",
        g: "2000-03-07"
    }, {
        h: "1421-01-01",
        g: "2000-04-06"
    }, {
        h: "1421-02-01",
        g: "2000-05-05"
    }, {
        h: "1421-03-01",
        g: "2000-06-03"
    }, {
        h: "1421-04-01",
        g: "2000-07-03"
    }, {
        h: "1421-05-01",
        g: "2000-08-01"
    }, {
        h: "1421-06-01",
        g: "2000-08-30"
    }, {
        h: "1421-07-01",
        g: "2000-09-28"
    }, {
        h: "1421-08-01",
        g: "2000-10-28"
    }, {
        h: "1421-09-01",
        g: "2000-11-27"
    }, {
        h: "1421-10-01",
        g: "2000-12-27"
    }, {
        h: "1421-11-01",
        g: "2001-01-26"
    }, {
        h: "1421-12-01",
        g: "2001-02-24"
    }, {
        h: "1422-01-01",
        g: "2001-03-26"
    }, {
        h: "1422-02-01",
        g: "2001-04-25"
    }, {
        h: "1422-03-01",
        g: "2001-05-24"
    }, {
        h: "1422-04-01",
        g: "2001-06-22"
    }, {
        h: "1422-05-01",
        g: "2001-07-22"
    }, {
        h: "1422-06-01",
        g: "2001-08-20"
    }, {
        h: "1422-07-01",
        g: "2001-09-18"
    }, {
        h: "1422-08-01",
        g: "2001-10-17"
    }, {
        h: "1422-09-01",
        g: "2001-11-16"
    }, {
        h: "1422-10-01",
        g: "2001-12-16"
    }, {
        h: "1422-11-01",
        g: "2002-01-15"
    }, {
        h: "1422-12-01",
        g: "2002-02-13"
    }, {
        h: "1423-01-01",
        g: "2002-03-15"
    }, {
        h: "1423-02-01",
        g: "2002-04-14"
    }, {
        h: "1423-03-01",
        g: "2002-05-13"
    }, {
        h: "1423-04-01",
        g: "2002-06-12"
    }, {
        h: "1423-05-01",
        g: "2002-07-11"
    }, {
        h: "1423-06-01",
        g: "2002-08-10"
    }, {
        h: "1423-07-01",
        g: "2002-09-08"
    }, {
        h: "1423-08-01",
        g: "2002-10-07"
    }, {
        h: "1423-09-01",
        g: "2002-11-06"
    }, {
        h: "1423-10-01",
        g: "2002-12-05"
    }, {
        h: "1423-11-01",
        g: "2003-01-04"
    }, {
        h: "1423-12-01",
        g: "2003-02-02"
    }, {
        h: "1424-01-01",
        g: "2003-03-04"
    }, {
        h: "1424-02-01",
        g: "2003-04-03"
    }, {
        h: "1424-03-01",
        g: "2003-05-02"
    }, {
        h: "1424-04-01",
        g: "2003-06-01"
    }, {
        h: "1424-05-01",
        g: "2003-07-01"
    }, {
        h: "1424-06-01",
        g: "2003-07-30"
    }, {
        h: "1424-07-01",
        g: "2003-08-29"
    }, {
        h: "1424-08-01",
        g: "2003-09-27"
    }, {
        h: "1424-09-01",
        g: "2003-10-26"
    }, {
        h: "1424-10-01",
        g: "2003-11-25"
    }, {
        h: "1424-11-01",
        g: "2003-12-24"
    }, {
        h: "1424-12-01",
        g: "2004-01-23"
    }, {
        h: "1425-01-01",
        g: "2004-02-21"
    }, {
        h: "1425-02-01",
        g: "2004-03-22"
    }, {
        h: "1425-03-01",
        g: "2004-04-20"
    }, {
        h: "1425-04-01",
        g: "2004-05-20"
    }, {
        h: "1425-05-01",
        g: "2004-06-19"
    }, {
        h: "1425-06-01",
        g: "2004-07-18"
    }, {
        h: "1425-07-01",
        g: "2004-08-17"
    }, {
        h: "1425-08-01",
        g: "2004-09-15"
    }, {
        h: "1425-09-01",
        g: "2004-10-15"
    }, {
        h: "1425-10-01",
        g: "2004-11-14"
    }, {
        h: "1425-11-01",
        g: "2004-12-13"
    }, {
        h: "1425-12-01",
        g: "2005-01-12"
    }, {
        h: "1426-01-01",
        g: "2005-02-10"
    }, {
        h: "1426-02-01",
        g: "2005-03-11"
    }, {
        h: "1426-03-01",
        g: "2005-04-10"
    }, {
        h: "1426-04-01",
        g: "2005-05-09"
    }, {
        h: "1426-05-01",
        g: "2005-06-08"
    }, {
        h: "1426-06-01",
        g: "2005-07-07"
    }, {
        h: "1426-07-01",
        g: "2005-08-06"
    }, {
        h: "1426-08-01",
        g: "2005-09-05"
    }, {
        h: "1426-09-01",
        g: "2005-10-04"
    }, {
        h: "1426-10-01",
        g: "2005-11-03"
    }, {
        h: "1426-11-01",
        g: "2005-12-03"
    }, {
        h: "1426-12-01",
        g: "2006-01-01"
    }, {
        h: "1427-01-01",
        g: "2006-01-31"
    }, {
        h: "1427-02-01",
        g: "2006-03-01"
    }, {
        h: "1427-03-01",
        g: "2006-03-30"
    }, {
        h: "1427-04-01",
        g: "2006-04-29"
    }, {
        h: "1427-05-01",
        g: "2006-05-28"
    }, {
        h: "1427-06-01",
        g: "2006-06-27"
    }, {
        h: "1427-07-01",
        g: "2006-07-26"
    }, {
        h: "1427-08-01",
        g: "2006-08-25"
    }, {
        h: "1427-09-01",
        g: "2006-09-24"
    }, {
        h: "1427-10-01",
        g: "2006-10-23"
    }, {
        h: "1427-11-01",
        g: "2006-11-22"
    }, {
        h: "1427-12-01",
        g: "2006-12-22"
    }, {
        h: "1428-01-01",
        g: "2007-01-20"
    }, {
        h: "1428-02-01",
        g: "2007-02-19"
    }, {
        h: "1428-03-01",
        g: "2007-03-20"
    }, {
        h: "1428-04-01",
        g: "2007-04-18"
    }, {
        h: "1428-05-01",
        g: "2007-05-18"
    }, {
        h: "1428-06-01",
        g: "2007-06-16"
    }, {
        h: "1428-07-01",
        g: "2007-07-15"
    }, {
        h: "1428-08-01",
        g: "2007-08-14"
    }, {
        h: "1428-09-01",
        g: "2007-09-13"
    }, {
        h: "1428-10-01",
        g: "2007-10-13"
    }, {
        h: "1428-11-01",
        g: "2007-11-11"
    }, {
        h: "1428-12-01",
        g: "2007-12-11"
    }, {
        h: "1429-01-01",
        g: "2008-01-10"
    }, {
        h: "1429-02-01",
        g: "2008-02-08"
    }, {
        h: "1429-03-01",
        g: "2008-03-09"
    }, {
        h: "1429-04-01",
        g: "2008-04-07"
    }, {
        h: "1429-05-01",
        g: "2008-05-06"
    }, {
        h: "1429-06-01",
        g: "2008-06-05"
    }, {
        h: "1429-07-01",
        g: "2008-07-04"
    }, {
        h: "1429-08-01",
        g: "2008-08-02"
    }, {
        h: "1429-09-01",
        g: "2008-09-01"
    }, {
        h: "1429-10-01",
        g: "2008-10-01"
    }, {
        h: "1429-11-01",
        g: "2008-10-30"
    }, {
        h: "1429-12-01",
        g: "2008-11-29"
    }, {
        h: "1430-01-01",
        g: "2008-12-29"
    }, {
        h: "1430-02-01",
        g: "2009-01-27"
    }, {
        h: "1430-03-01",
        g: "2009-02-26"
    }, {
        h: "1430-04-01",
        g: "2009-03-28"
    }, {
        h: "1430-05-01",
        g: "2009-04-26"
    }, {
        h: "1430-06-01",
        g: "2009-05-25"
    }, {
        h: "1430-07-01",
        g: "2009-06-24"
    }, {
        h: "1430-08-01",
        g: "2009-07-23"
    }, {
        h: "1430-09-01",
        g: "2009-08-22"
    }, {
        h: "1430-10-01",
        g: "2009-09-20"
    }, {
        h: "1430-11-01",
        g: "2009-10-20"
    }, {
        h: "1430-12-01",
        g: "2009-11-18"
    }, {
        h: "1431-01-01",
        g: "2009-12-18"
    }, {
        h: "1431-02-01",
        g: "2010-01-16"
    }, {
        h: "1431-03-01",
        g: "2010-02-15"
    }, {
        h: "1431-04-01",
        g: "2010-03-17"
    }, {
        h: "1431-05-01",
        g: "2010-04-15"
    }, {
        h: "1431-06-01",
        g: "2010-05-15"
    }, {
        h: "1431-07-01",
        g: "2010-06-13"
    }, {
        h: "1431-08-01",
        g: "2010-07-13"
    }, {
        h: "1431-09-01",
        g: "2010-08-11"
    }, {
        h: "1431-10-01",
        g: "2010-09-10"
    }, {
        h: "1431-11-01",
        g: "2010-10-09"
    }, {
        h: "1431-12-01",
        g: "2010-11-07"
    }, {
        h: "1432-01-01",
        g: "2010-12-07"
    }, {
        h: "1432-02-01",
        g: "2011-01-05"
    }, {
        h: "1432-03-01",
        g: "2011-02-04"
    }, {
        h: "1432-04-01",
        g: "2011-03-06"
    }, {
        h: "1432-05-01",
        g: "2011-04-05"
    }, {
        h: "1432-06-01",
        g: "2011-05-04"
    }, {
        h: "1432-07-01",
        g: "2011-06-03"
    }, {
        h: "1432-08-01",
        g: "2011-07-02"
    }, {
        h: "1432-09-01",
        g: "2011-08-01"
    }, {
        h: "1432-10-01",
        g: "2011-08-30"
    }, {
        h: "1432-11-01",
        g: "2011-09-29"
    }, {
        h: "1432-12-01",
        g: "2011-10-28"
    }, {
        h: "1433-01-01",
        g: "2011-11-26"
    }, {
        h: "1433-02-01",
        g: "2011-12-26"
    }, {
        h: "1433-03-01",
        g: "2012-01-24"
    }, {
        h: "1433-04-01",
        g: "2012-02-23"
    }, {
        h: "1433-05-01",
        g: "2012-03-24"
    }, {
        h: "1433-06-01",
        g: "2012-04-22"
    }, {
        h: "1433-07-01",
        g: "2012-05-22"
    }, {
        h: "1433-08-01",
        g: "2012-06-21"
    }, {
        h: "1433-09-01",
        g: "2012-07-20"
    }, {
        h: "1433-10-01",
        g: "2012-08-19"
    }, {
        h: "1433-11-01",
        g: "2012-09-17"
    }, {
        h: "1433-12-01",
        g: "2012-10-17"
    }, {
        h: "1434-01-01",
        g: "2012-11-15"
    }, {
        h: "1434-02-01",
        g: "2012-12-14"
    }, {
        h: "1434-03-01",
        g: "2013-01-13"
    }, {
        h: "1434-04-01",
        g: "2013-02-11"
    }, {
        h: "1434-05-01",
        g: "2013-03-13"
    }, {
        h: "1434-06-01",
        g: "2013-04-11"
    }, {
        h: "1434-07-01",
        g: "2013-05-11"
    }, {
        h: "1434-08-01",
        g: "2013-06-10"
    }, {
        h: "1434-09-01",
        g: "2013-07-09"
    }, {
        h: "1434-10-01",
        g: "2013-08-08"
    }, {
        h: "1434-11-01",
        g: "2013-09-07"
    }, {
        h: "1434-12-01",
        g: "2013-10-06"
    }, {
        h: "1435-01-01",
        g: "2013-11-04"
    }, {
        h: "1435-02-01",
        g: "2013-12-04"
    }, {
        h: "1435-03-01",
        g: "2014-01-02"
    }, {
        h: "1435-04-01",
        g: "2014-02-01"
    }, {
        h: "1435-05-01",
        g: "2014-03-02"
    }, {
        h: "1435-06-01",
        g: "2014-04-01"
    }, {
        h: "1435-07-01",
        g: "2014-04-30"
    }, {
        h: "1435-08-01",
        g: "2014-05-30"
    }, {
        h: "1435-09-01",
        g: "2014-06-28"
    }, {
        h: "1435-10-01",
        g: "2014-07-28"
    }, {
        h: "1435-11-01",
        g: "2014-08-27"
    }, {
        h: "1435-12-01",
        g: "2014-09-25"
    }, {
        h: "1436-01-01",
        g: "2014-10-25"
    }, {
        h: "1436-02-01",
        g: "2014-11-23"
    }, {
        h: "1436-03-01",
        g: "2014-12-23"
    }, {
        h: "1436-04-01",
        g: "2015-01-21"
    }, {
        h: "1436-05-01",
        g: "2015-02-20"
    }, {
        h: "1436-06-01",
        g: "2015-03-21"
    }, {
        h: "1436-07-01",
        g: "2015-04-20"
    }, {
        h: "1436-08-01",
        g: "2015-05-19"
    }, {
        h: "1436-09-01",
        g: "2015-06-18"
    }, {
        h: "1436-10-01",
        g: "2015-07-17"
    }, {
        h: "1436-11-01",
        g: "2015-08-16"
    }, {
        h: "1436-12-01",
        g: "2015-09-14"
    }, {
        h: "1437-01-01",
        g: "2015-10-14"
    }, {
        h: "1437-02-01",
        g: "2015-11-13"
    }, {
        h: "1437-03-01",
        g: "2015-12-12"
    }, {
        h: "1437-04-01",
        g: "2016-01-11"
    }, {
        h: "1437-05-01",
        g: "2016-02-10"
    }, {
        h: "1437-06-01",
        g: "2016-03-10"
    }, {
        h: "1437-07-01",
        g: "2016-04-08"
    }, {
        h: "1437-08-01",
        g: "2016-05-08"
    }, {
        h: "1437-09-01",
        g: "2016-06-06"
    }, {
        h: "1437-10-01",
        g: "2016-07-06"
    }, {
        h: "1437-11-01",
        g: "2016-08-04"
    }, {
        h: "1437-12-01",
        g: "2016-09-02"
    }, {
        h: "1438-01-01",
        g: "2016-10-02"
    }, {
        h: "1438-02-01",
        g: "2016-11-01"
    }, {
        h: "1438-03-01",
        g: "2016-11-30"
    }, {
        h: "1438-04-01",
        g: "2016-12-30"
    }, {
        h: "1438-05-01",
        g: "2017-01-29"
    }, {
        h: "1438-06-01",
        g: "2017-02-28"
    }, {
        h: "1438-07-01",
        g: "2017-03-29"
    }, {
        h: "1438-08-01",
        g: "2017-04-27"
    }, {
        h: "1438-09-01",
        g: "2017-05-27"
    }, {
        h: "1438-10-01",
        g: "2017-06-25"
    }, {
        h: "1438-11-01",
        g: "2017-07-24"
    }, {
        h: "1438-12-01",
        g: "2017-08-23"
    }, {
        h: "1439-01-01",
        g: "2017-09-21"
    }, {
        h: "1439-02-01",
        g: "2017-10-21"
    }, {
        h: "1439-03-01",
        g: "2017-11-19"
    }, {
        h: "1439-04-01",
        g: "2017-12-19"
    }, {
        h: "1439-05-01",
        g: "2018-01-18"
    }, {
        h: "1439-06-01",
        g: "2018-02-17"
    }, {
        h: "1439-07-01",
        g: "2018-03-18"
    }, {
        h: "1439-08-01",
        g: "2018-04-17"
    }, {
        h: "1439-09-01",
        g: "2018-05-16"
    }, {
        h: "1439-10-01",
        g: "2018-06-15"
    }, {
        h: "1439-11-01",
        g: "2018-07-14"
    }, {
        h: "1439-12-01",
        g: "2018-08-12"
    }, {
        h: "1440-01-01",
        g: "2018-09-11"
    }, {
        h: "1440-02-01",
        g: "2018-10-10"
    }, {
        h: "1440-03-01",
        g: "2018-11-09"
    }, {
        h: "1440-04-01",
        g: "2018-12-08"
    }, {
        h: "1440-05-01",
        g: "2019-01-07"
    }, {
        h: "1440-06-01",
        g: "2019-02-06"
    }, {
        h: "1440-07-01",
        g: "2019-03-08"
    }, {
        h: "1440-08-01",
        g: "2019-04-06"
    }, {
        h: "1440-09-01",
        g: "2019-05-06"
    }, {
        h: "1440-10-01",
        g: "2019-06-04"
    }, {
        h: "1440-11-01",
        g: "2019-07-04"
    }, {
        h: "1440-12-01",
        g: "2019-08-02"
    }, {
        h: "1441-01-01",
        g: "2019-08-31"
    }, {
        h: "1441-02-01",
        g: "2019-09-30"
    }, {
        h: "1441-03-01",
        g: "2019-10-29"
    }, {
        h: "1441-04-01",
        g: "2019-11-28"
    }, {
        h: "1441-05-01",
        g: "2019-12-27"
    }, {
        h: "1441-06-01",
        g: "2020-01-26"
    }, {
        h: "1441-07-01",
        g: "2020-02-25"
    }, {
        h: "1441-08-01",
        g: "2020-03-25"
    }, {
        h: "1441-09-01",
        g: "2020-04-24"
    }, {
        h: "1441-10-01",
        g: "2020-05-24"
    }, {
        h: "1441-11-01",
        g: "2020-06-22"
    }, {
        h: "1441-12-01",
        g: "2020-07-22"
    }, {
        h: "1442-01-01",
        g: "2020-08-20"
    }, {
        h: "1442-02-01",
        g: "2020-09-18"
    }, {
        h: "1442-03-01",
        g: "2020-10-18"
    }, {
        h: "1442-04-01",
        g: "2020-11-16"
    }, {
        h: "1442-05-01",
        g: "2020-12-16"
    }, {
        h: "1442-06-01",
        g: "2021-01-14"
    }, {
        h: "1442-07-01",
        g: "2021-02-13"
    }, {
        h: "1442-08-01",
        g: "2021-03-14"
    }, {
        h: "1442-09-01",
        g: "2021-04-13"
    }, {
        h: "1442-10-01",
        g: "2021-05-13"
    }, {
        h: "1442-11-01",
        g: "2021-06-11"
    }, {
        h: "1442-12-01",
        g: "2021-07-11"
    }, {
        h: "1443-01-01",
        g: "2021-08-09"
    }, {
        h: "1443-02-01",
        g: "2021-09-08"
    }, {
        h: "1443-03-01",
        g: "2021-10-07"
    }, {
        h: "1443-04-01",
        g: "2021-11-06"
    }, {
        h: "1443-05-01",
        g: "2021-12-05"
    }, {
        h: "1443-06-01",
        g: "2022-01-04"
    }, {
        h: "1443-07-01",
        g: "2022-02-02"
    }, {
        h: "1443-08-01",
        g: "2022-03-04"
    }, {
        h: "1443-09-01",
        g: "2022-04-02"
    }, {
        h: "1443-10-01",
        g: "2022-05-02"
    }, {
        h: "1443-11-01",
        g: "2022-05-31"
    }, {
        h: "1443-12-01",
        g: "2022-06-30"
    }, {
        h: "1444-01-01",
        g: "2022-07-30"
    }, {
        h: "1444-02-01",
        g: "2022-08-28"
    }, {
        h: "1444-03-01",
        g: "2022-09-27"
    }, {
        h: "1444-04-01",
        g: "2022-10-26"
    }, {
        h: "1444-05-01",
        g: "2022-11-25"
    }, {
        h: "1444-06-01",
        g: "2022-12-25"
    }, {
        h: "1444-07-01",
        g: "2023-01-23"
    }, {
        h: "1444-08-01",
        g: "2023-02-21"
    }, {
        h: "1444-09-01",
        g: "2023-03-23"
    }, {
        h: "1444-10-01",
        g: "2023-04-21"
    }, {
        h: "1444-11-01",
        g: "2023-05-21"
    }, {
        h: "1444-12-01",
        g: "2023-06-19"
    }, {
        h: "1445-01-01",
        g: "2023-07-19"
    }, {
        h: "1445-02-01",
        g: "2023-08-17"
    }, {
        h: "1445-03-01",
        g: "2023-09-16"
    }, {
        h: "1445-04-01",
        g: "2023-10-16"
    }, {
        h: "1445-05-01",
        g: "2023-11-15"
    }, {
        h: "1445-06-01",
        g: "2023-12-14"
    }, {
        h: "1445-07-01",
        g: "2024-01-13"
    }, {
        h: "1445-08-01",
        g: "2024-02-11"
    }, {
        h: "1445-09-01",
        g: "2024-03-11"
    }, {
        h: "1445-10-01",
        g: "2024-04-10"
    }, {
        h: "1445-11-01",
        g: "2024-05-09"
    }, {
        h: "1445-12-01",
        g: "2024-06-07"
    }, {
        h: "1446-01-01",
        g: "2024-07-07"
    }, {
        h: "1446-02-01",
        g: "2024-08-05"
    }, {
        h: "1446-03-01",
        g: "2024-09-04"
    }, {
        h: "1446-04-01",
        g: "2024-10-04"
    }, {
        h: "1446-05-01",
        g: "2024-11-03"
    }, {
        h: "1446-06-01",
        g: "2024-12-02"
    }, {
        h: "1446-07-01",
        g: "2025-01-01"
    }, {
        h: "1446-08-01",
        g: "2025-01-31"
    }, {
        h: "1446-09-01",
        g: "2025-03-01"
    }, {
        h: "1446-10-01",
        g: "2025-03-30"
    }, {
        h: "1446-11-01",
        g: "2025-04-29"
    }, {
        h: "1446-12-01",
        g: "2025-05-28"
    }, {
        h: "1447-01-01",
        g: "2025-06-26"
    }, {
        h: "1447-02-01",
        g: "2025-07-26"
    }, {
        h: "1447-03-01",
        g: "2025-08-24"
    }, {
        h: "1447-04-01",
        g: "2025-09-23"
    }, {
        h: "1447-05-01",
        g: "2025-10-23"
    }, {
        h: "1447-06-01",
        g: "2025-11-22"
    }, {
        h: "1447-07-01",
        g: "2025-12-21"
    }, {
        h: "1447-08-01",
        g: "2026-01-20"
    }, {
        h: "1447-09-01",
        g: "2026-02-18"
    }, {
        h: "1447-10-01",
        g: "2026-03-20"
    }, {
        h: "1447-11-01",
        g: "2026-04-18"
    }, {
        h: "1447-12-01",
        g: "2026-05-18"
    }, {
        h: "1448-01-01",
        g: "2026-06-16"
    }, {
        h: "1448-02-01",
        g: "2026-07-15"
    }, {
        h: "1448-03-01",
        g: "2026-08-14"
    }, {
        h: "1448-04-01",
        g: "2026-09-12"
    }, {
        h: "1448-05-01",
        g: "2026-10-12"
    }, {
        h: "1448-06-01",
        g: "2026-11-11"
    }, {
        h: "1448-07-01",
        g: "2026-12-10"
    }, {
        h: "1448-08-01",
        g: "2027-01-09"
    }, {
        h: "1448-09-01",
        g: "2027-02-08"
    }, {
        h: "1448-10-01",
        g: "2027-03-09"
    }, {
        h: "1448-11-01",
        g: "2027-04-08"
    }, {
        h: "1448-12-01",
        g: "2027-05-07"
    }, {
        h: "1449-01-01",
        g: "2027-06-06"
    }, {
        h: "1449-02-01",
        g: "2027-07-05"
    }, {
        h: "1449-03-01",
        g: "2027-08-03"
    }, {
        h: "1449-04-01",
        g: "2027-09-02"
    }, {
        h: "1449-05-01",
        g: "2027-10-01"
    }, {
        h: "1449-06-01",
        g: "2027-10-31"
    }, {
        h: "1449-07-01",
        g: "2027-11-29"
    }, {
        h: "1449-08-01",
        g: "2027-12-29"
    }, {
        h: "1449-09-01",
        g: "2028-01-28"
    }, {
        h: "1449-10-01",
        g: "2028-02-26"
    }, {
        h: "1449-11-01",
        g: "2028-03-27"
    }, {
        h: "1449-12-01",
        g: "2028-04-26"
    }, {
        h: "1450-01-01",
        g: "2028-05-25"
    }, {
        h: "1450-02-01",
        g: "2028-06-24"
    }, {
        h: "1450-03-01",
        g: "2028-07-23"
    }, {
        h: "1450-04-01",
        g: "2028-08-22"
    }, {
        h: "1450-05-01",
        g: "2028-09-20"
    }, {
        h: "1450-06-01",
        g: "2028-10-19"
    }, {
        h: "1450-07-01",
        g: "2028-11-18"
    }, {
        h: "1450-08-01",
        g: "2028-12-17"
    }, {
        h: "1450-09-01",
        g: "2029-01-16"
    }, {
        h: "1450-10-01",
        g: "2029-02-14"
    }, {
        h: "1450-11-01",
        g: "2029-03-16"
    }, {
        h: "1450-12-01",
        g: "2029-04-15"
    }];
    l = i(l), u(l);
    var p = 1e3;
    h.prototype = {
        getDate: function() {
            return this.date
        },
        getMonth: function() {
            return this.month
        },
        getFullYear: function() {
            return this.year
        },
        getDay: function() {
            return this.g.getDay()
        },
        getHours: function() {
            return this.g.getHours()
        },
        getMilliseconds: function() {
            return this.g.getMilliseconds()
        },
        getMinutes: function() {
            return this.g.getMinutes()
        },
        getSeconds: function() {
            return this.g.getSeconds()
        },
        getTime: function() {
            return this.g.getTime()
        },
        getTimezoneOffset: function() {
            return this.g.getTimezoneOffset()
        },
        getUTCDate: function() {},
        getUTCFullYear: function() {},
        getUTCHours: function() {},
        getUTCMilliseconds: function() {},
        getUTCMinutes: function() {},
        getUTCMonth: function() {},
        getUTCSeconds: function() {},
        setMilliseconds: function() {
            var g = t % p,
                h = Math.floor(t / p);
            this.g.setMilliseconds(g), this.setSeconds(h)
        },
        setSeconds: function() {},
        setMinutes: function() {},
        setHours: function() {},
        setDate: function(g) {
            switch (g) {
                case 0 > g:
                case 0 == g:
            }
        },
        setMonth: function() {},
        setFullYear: function(g, h, t) {
            {
                var e = e || this.getMonth(),
                    n = n || this.getDate();
                this.g.getTime(), +h || this.getMonth(), +t || this.getDate()
            }
        },
        setTime: function(g) {
            return this.g.setTime(g)
        },
        setUTCDate: function() {},
        setUTCFullYear: function() {},
        setUTCHours: function() {},
        setUTCMilliseconds: function() {},
        setUTCMinutes: function() {},
        setUTCMonth: function() {},
        setUTCSeconds: function() {},
        toString: function() {},
        toLocaleString: function() {},
        toDateString: function() {},
        toLocaleDateString: function() {},
        toTimeString: function() {},
        toLocaleTimeString: function() {},
        toISOString: function() {},
        toUTCString: function() {},
        toJSONDate: function() {},
        toSource: function() {},
        valueOf: function() {}
    }, g.G = f, g.H = c, g.hijriData = l, g.Hijri = h
}(window);
var gr=G('<?php echo $h;?>-09-01');var gs=G('<?php echo $h;?>-10-01');var gx=G('<?php echo $h;?>-09-29');var hijri=<?php echo $h;?>;var showTimes = ["Imsak", "Fajr", "Dhuhr", "Asr", "Maghrib", "Isha"];
var dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

function parseDate(a) {
    var b = a.split('-');
    return new Date(b[0], b[1] - 1, b[2])
}

function daydiff(a, b) {
    return (b - a) / (1000 * 60 * 60 * 24)
}

function toHari(a) {
    var b = a.split('-');
    return b[2] + '/' + b[1] + '/' + b[0]
}

function getHari(a) {
    var d = parseDate(a);
    return dayNames[d.getDay()]
}
var jmlhari = daydiff(parseDate(gx), parseDate(gs)) == 2 ? 30 : 29;

function Adzan(t) {
    var a, i, n, r, e, s = {
            imsak: "Imsak",
            fajr: "Fajr",
            sunrise: "Sunrise",
            dhuha: "Dhuha",
            dhuhr: "Dhuhr",
            noon: "Noon",
            asr: "Asr",
            sunset: "Sunset",
            maghrib: "Maghrib",
            isha: "Isha",
            midnight: "Midnight"
        },
        o = {
            Depag: {
                name: "Departemen Agama RI",
                params: {
                    fajr: 20,
                    isha: 18
                }
            },
            MWL: {
                name: "Muslim World League",
                params: {
                    fajr: 18,
                    isha: 17
                }
            },
            ISNA: {
                name: "Islamic Society of North America (ISNA)",
                params: {
                    fajr: 15,
                    isha: 15
                }
            },
            Egypt: {
                name: "Egyptian General Authority of Survey",
                params: {
                    fajr: 19.5,
                    isha: 17.5
                }
            },
            Makkah: {
                name: "Umm Al-Qura University, Makkah",
                params: {
                    fajr: 18.5,
                    isha: "90 min"
                }
            },
            Karachi: {
                name: "University of Islamic Sciences, Karachi",
                params: {
                    fajr: 18,
                    isha: 18
                }
            },
            Tehran: {
                name: "Institute of Geophysics, University of Tehran",
                params: {
                    fajr: 17.7,
                    isha: 14,
                    maghrib: 4.5,
                    midnight: "Jafari"
                }
            },
            Jafari: {
                name: "Shia Ithna-Ashari, Leva Institute, Qum",
                params: {
                    fajr: 16,
                    isha: 14,
                    maghrib: 4,
                    midnight: "Jafari"
                }
            }
        },
        h = {
            maghrib: "0 min",
            midnight: "Standard"
        },
        u = "Depag",
        d = {
            imsak: "10 min",
            dhuha: "Standard",
            dhuhr: "0 min",
            asr: "Standard",
            highLats: "NightMiddle"
        },
        c = "24h",
        f = ["am", "pm"],
        l = "-----",
        m = 1,
        g = {},
        v = h;
    for (var M in o) {
        var D = o[M].params;
        for (var p in v) "undefined" == typeof D[p] && (D[p] = v[p])
    }
    u = o[t] ? t : u;
    var D = o[u].params;
    for (var b in D) d[b] = D[b];
    for (var M in s) g[M] = 0;
    return {
        setMethod: function(t) {
            o[t] && (this.adjust(o[t].params), u = t)
        },
        adjust: function(t) {
            for (var a in t) d[a] = t[a]
        },
        tune: function(t) {
            for (var a in t) g[a] = t[a]
        },
        getMethod: function() {
            return u
        },
        getSetting: function() {
            return d
        },
        getOffsets: function() {
            return g
        },
        getDefaults: function() {
            return o
        },
        getTimes: function(t, s, o, h, u) {
            return a = 1 * s[0], i = 1 * s[1], n = s[2] ? 1 * s[2] : 0, c = u || c, t.constructor === Date && (t = [t.getFullYear(), t.getMonth() + 1, t.getDate()]), ("undefined" == typeof o || "auto" == o) && (o = this.getTimeZone(t)), ("undefined" == typeof h || "auto" == h) && (h = this.getDst(t)), r = 1 * o + (1 * h ? 1 : 0), e = this.julian(t[0], t[1], t[2]) - i / 360, this.computeTimes()
        },
        getFormattedTime: function(t, a, i) {
            if (isNaN(t)) return l;
            if ("Float" == a) return t;
            i = i || f, t = DMath.fixHour(t); {
                var n = Math.floor(t),
                    r = (Math.floor(60 * (t - n)), "12h" == a ? i[12 > n ? 0 : 1] : "");
                "24h" == a ? this.twoDigitsFormat(n) : (n + 12 - 1) % 12 + 1
            }
            return this.h2hms(t) + (r ? " " + r : "")
        },
        midDay: function(t) {
            var a = this.sunPosition(e + t).equation,
                i = DMath.fixHour(12 - a);
            return i
        },
        sunAngleTime: function(t, i, n) {
            var r = this.sunPosition(e + i).declination,
                s = this.midDay(i),
                o = 1 / 15 * DMath.arccos((-DMath.sin(t) - DMath.sin(r) * DMath.sin(a)) / (DMath.cos(r) * DMath.cos(a)));
            return s + ("ccw" == n ? -o : o)
        },
        asrTime: function(t, i) {
            var n = this.sunPosition(e + i).declination,
                r = -DMath.arccot(t + DMath.tan(Math.abs(a - n)));
            return this.sunAngleTime(r, i)
        },
        dhuhaTime: function(t, i) {
            var n = this.sunPosition(e + i).declination,
                r = 1 / 15 * DMath.arccos((-DMath.sin(t) - DMath.sin(n) * DMath.sin(a)) / (DMath.cos(n) * DMath.cos(a)));
            return r
        },
        sunPosition: function(t) {
            var a = t - 2451545,
                i = DMath.fixAngle(357.529 + .98560028 * a),
                n = DMath.fixAngle(280.459 + .98564736 * a),
                r = DMath.fixAngle(n + 1.915 * DMath.sin(i) + .02 * DMath.sin(2 * i)),
                e = (1.00014 - .01671 * DMath.cos(i) - 14e-5 * DMath.cos(2 * i), 23.439 - 3.6e-7 * a),
                s = DMath.arctan2(DMath.cos(e) * DMath.sin(r), DMath.cos(r)) / 15,
                o = n / 15 - DMath.fixHour(s),
                h = DMath.arcsin(DMath.sin(e) * DMath.sin(r));
            return {
                declination: h,
                equation: o
            }
        },
        julian: function(t, a, i) {
            2 >= a && (t -= 1, a += 12);
            var n = Math.floor(t / 100),
                r = 2 - n + Math.floor(n / 4),
                e = Math.floor(365.25 * (t + 4716)) + Math.floor(30.6001 * (a + 1)) + i + r - 1524.5;
            return e
        },
        computePrayerTimes: function(t) {
            t = this.dayPortion(t);
            var a = d,
                i = this.sunAngleTime(this.eval(a.imsak), t.imsak, "ccw"),
                n = this.sunAngleTime(this.eval(a.fajr), t.fajr, "ccw"),
                r = this.sunAngleTime(this.riseSetAngle(), t.sunrise, "ccw"),
                e = this.dhuhaTime(this.dhuhaAngle(a.dhuha), t.dhuha),
                s = this.midDay(t.dhuhr),
                o = this.midDay(t.noon),
                h = this.asrTime(this.asrFactor(a.asr), t.asr),
                u = this.sunAngleTime(this.riseSetAngle(), t.sunset),
                c = this.sunAngleTime(this.eval(a.maghrib), t.maghrib),
                f = this.sunAngleTime(this.eval(a.isha), t.isha);
            return {
                imsak: i,
                fajr: n,
                sunrise: r,
                dhuha: e,
                dhuhr: s,
                noon: o,
                asr: h,
                sunset: u,
                maghrib: c,
                isha: f
            }
        },
        computeTimes: function() {
            for (var t = {
                    imsak: 5,
                    fajr: 5,
                    sunrise: 6,
                    dhuha: 7,
                    dhuhr: 12,
                    noon: 12,
                    asr: 15,
                    sunset: 18,
                    maghrib: 18,
                    isha: 19
                }, a = 1; m >= a; a++) t = this.computePrayerTimes(t);
            return t = this.adjustTimes(t), t.midnight = "Jafari" == d.midnight ? t.sunset + this.timeDiff(t.sunset, t.fajr) / 2 : t.sunset + this.timeDiff(t.sunset, t.sunrise) / 2, t = this.tuneTimes(t), this.modifyFormats(t)
        },
        adjustTimes: function(t) {
            var a = d;
            for (var n in t) t[n] += r - i / 15;
            return "None" != a.highLats && (t = this.adjustHighLats(t)), t.fajr += 2 / 60, this.isMin(a.imsak) && (t.imsak = t.fajr - this.eval(a.imsak) / 60), t.asr += 2 / 60, this.isMin(a.maghrib) && (t.maghrib = t.sunset + this.eval(a.maghrib) / 60), this.isMin(a.isha) && (t.isha = t.maghrib + this.eval(a.isha) / 60), t.dhuhr += 2 / 60, t.isha += 2 / 60, t
        },
        asrFactor: function(t) {
            var a = {
                Standard: 1,
                Hanafi: 2
            }[t];
            return a || this.eval(t)
        },
        dhuhaAngle: function(t) {
            var a = {
                Standard: 4.5,
                Hanafi: 9
            }[t];
            return a || this.eval(t)
        },
        riseSetAngle: function() {
            var t = .0347 * Math.sqrt(n);
            return .833 + t
        },
        tuneTimes: function(t) {
            for (var a in t) t[a] += g[a] / 60;
            return t
        },
        modifyFormats: function(t) {
            for (var a in t) t[a] = this.getFormattedTime(t[a], c);
            return t
        },
        adjustHighLats: function(t) {
            var a = d,
                i = this.timeDiff(t.sunset, t.sunrise);
            return t.imsak = this.adjustHLTime(t.imsak, t.sunrise, this.eval(a.imsak), i, "ccw"), t.fajr = this.adjustHLTime(t.fajr, t.sunrise, this.eval(a.fajr), i, "ccw"), t.isha = this.adjustHLTime(t.isha, t.sunset, this.eval(a.isha), i), t.maghrib = this.adjustHLTime(t.maghrib, t.sunset, this.eval(a.maghrib), i), t
        },
        adjustHLTime: function(t, a, i, n, r) {
            var e = this.nightPortion(i, n),
                s = "ccw" == r ? this.timeDiff(t, a) : this.timeDiff(a, t);
            return (isNaN(t) || s > e) && (t = a + ("ccw" == r ? -e : e)), t
        },
        nightPortion: function(t, a) {
            var i = d.highLats,
                n = .5;
            return "AngleBased" == i && (n = 1 / 60 * t), "OneSeventh" == i && (n = 1 / 7), n * a
        },
        dayPortion: function(t) {
            for (var a in t) t[a] /= 24;
            return t
        },
        getTimeZone: function(t) {
            var a = t[0],
                i = this.gmtOffset([a, 0, 1]),
                n = this.gmtOffset([a, 6, 1]);
            return Math.min(i, n)
        },
        getDst: function(t) {
            return 1 * (this.gmtOffset(t) != this.getTimeZone(t))
        },
        gmtOffset: function(t) {
            var a = new Date(t[0], t[1] - 1, t[2], 12, 0, 0, 0),
                i = a.toGMTString(),
                n = new Date(i.substring(0, i.lastIndexOf(" ") - 1)),
                r = (a - n) / 36e5;
            return r
        },
        eval: function(t) {
            return 1 * (t + "").split(/[^0-9.+-]/)[0]
        },
        isMin: function(t) {
            return -1 != (t + "").indexOf("min")
        },
        timeDiff: function(t, a) {
            return DMath.fixHour(a - t)
        },
        twoDigitsFormat: function(t) {
            return 10 > t ? "0" + t : t
        },
        h2hms: function(t) {
            var a = Math.floor(t),
                i = 60 * (t - a),
                n = Math.floor(i),
                r = 60 * (i - n);
            return this.twoDigitsFormat(a) + ":" + this.twoDigitsFormat(n) + ":" + this.twoDigitsFormat(r.toFixed(0))
        }
    }
}

function rightAscension(t, a) {
    return atan(sin(t) * cos(e) - tan(a) * sin(e), cos(t))
}

function declination(t, a) {
    return asin(sin(a) * cos(e) + cos(a) * sin(e) * sin(t))
}

function azimuth(t, a, i) {
    return atan(sin(t), cos(t) * sin(a) - tan(i) * cos(a))
}

function altitude(t, a, i) {
    return asin(sin(a) * sin(i) + cos(a) * cos(i) * cos(t))
}

function siderealTime(t, a) {
    return rad * (280.16 + 360.9856235 * t) - a
}

function moonCoords(t) {
    var a = rad * (218.316 + 13.176396 * t),
        i = rad * (134.963 + 13.064993 * t),
        n = rad * (93.272 + 13.22935 * t),
        r = a + 6.289 * rad * sin(i),
        e = 5.128 * rad * sin(n),
        s = 385001 - 20905 * cos(i);
    return {
        ra: rightAscension(r, e),
        dec: declination(r, e),
        dist: s
    }
}

function initialize(t, a, i, n) {
    if (typeof google !== 'undefined') {
        geocoder = new google.maps.Geocoder, t || (t = "Jakarta"), a || (a = -6.2115), i || (i = 106.8452), n || (n = 12);
        var r = {};
        try {
            for (var e = String(document.location).split("?")[1].split("&"), s = 0; s < e.length; ++s) {
                var o = e[s].split("=");
                r[o[0]] = o[1]
            }
        } catch (h) {}
        elevator = new google.maps.ElevationService, a = r.latitude ? parseFloat(r.latitude) : a, i = r.longitude ? parseFloat(r.longitude) : i, n = r.zoom ? parseInt(r.zoom) : n, t = r.address ? r.address : t
    } else {
        t || (t = "Jakarta"), a || (a = -6.2115), i || (i = 106.8452), n || (n = 12)
    }
}

function codeAddress() {
    if (typeof geocoder !== 'undefined') {
        address = $(".inp").val(), geocoder.geocode({
            address: address
        }, function(t, a) {
            a == google.maps.GeocoderStatus.OK ? drawAgain(t[0].geometry.location) : alert("Geocode was not successful for the following reason: " + a)
        })
    } else {
        t = null;
        drawAgain(t)
    }
}

function drawAgain(t) {
    line && line.setMap(null);
    if (t !== null) {
        var a = t.lat(),
            i = t.lng()
    } else {
        var a = -6.2115,
            i = 106.8452
    }
    $("#table").html(printAdzanTable(a, i))
}

function printAdzanTable(t, a) {
    var i = new Date,
        n = Math.floor(a / 15);
    Adzan.adjust({
        dhuhr: "2 min",
        maghrib: "2 min"
    });
    var e = '<div><h2 class="w3-center">' + (address ? address : "Jakarta") + " " + deg2dms(Math.abs(t)) + (0 > t ? " S " : " N ") + deg2dms(a) + (0 > a ? " W " : " E ") + "</h2></div>";
    e += '<div class="w3-responsive"><table class="w3-table-all"><thead><tr class="w3-theme-d1"><th>No</th><th>Hari</th><th>Tanggal</th>';
    for (var s in showTimes) e += "<th>" + showTimes[s] + "</th>";
    e += "</tr></thead><tbody>";
    var o = new Array;
    for (today = G(), j = 1; j <= jmlhari; j++) {
        if (i = G(hijri + "-09-" + j, {
                type: "date"
            }), o = Adzan.getTimes(i, [t, a, elev], n.toFixed(0)), today == G(hijri + "-09-" + j)) {
            e += "<tr class='w3-theme-d1 w3-hover-blue'><td>" + j + "</td><td>" + getHari(G(hijri + "-09-" + j)) + "</td><td>" + toHari(G(hijri + "-09-" + j)) + "</td>";
            for (var s in showTimes) e += "<td>" + o[showTimes[s].toLowerCase()] + "</td>"
        } else {
            e += "<tr class='w3-hover-light-blue'><td>" + j + "</td><td>" + getHari(G(hijri + "-09-" + j)) + "</td><td>" + toHari(G(hijri + "-09-" + j)) + "</td>";
            for (var s in showTimes) e += "<td>" + o[showTimes[s].toLowerCase()] + "</td>"
        }
        e += "</tr>"
    }
    return e += "</tbody></table></div>"
}

function deg2dms(t) {
    var a = 0 > t ? "-" : "";
    t = Math.abs(t);
    var i = Math.floor(t),
        n = 60 * (t - i),
        r = Math.floor(n),
        e = 60 * (n - r);
    return a + i + "&deg;" + r + "'" + e.toFixed(2) + '"'
}
var DMath = {
        dtr: function(t) {
            return t * Math.PI / 180
        },
        rtd: function(t) {
            return 180 * t / Math.PI
        },
        sin: function(t) {
            return Math.sin(this.dtr(t))
        },
        cos: function(t) {
            return Math.cos(this.dtr(t))
        },
        tan: function(t) {
            return Math.tan(this.dtr(t))
        },
        arcsin: function(t) {
            return this.rtd(Math.asin(t))
        },
        arccos: function(t) {
            return this.rtd(Math.acos(t))
        },
        arctan: function(t) {
            return this.rtd(Math.atan(t))
        },
        arccot: function(t) {
            return this.rtd(Math.atan(1 / t))
        },
        arctan2: function(t, a) {
            return this.rtd(Math.atan2(t, a))
        },
        getDirection: function(t, a, i, n) {
            var r = a - n;
            return this.arctan2(this.sin(r), this.cos(t) * this.tan(i) - this.sin(t) * this.cos(r))
        },
        fixAngle: function(t) {
            return this.fix(t, 360)
        },
        fixHour: function(t) {
            return this.fix(t, 24)
        },
        fixMinute: function(t) {
            return this.fix(t, 60)
        },
        fixSecond: function(t) {
            return this.fix(t, 60)
        },
        fix: function(t, a) {
            return t -= a * Math.floor(t / a), 0 > t ? t + a : t
        }
    },
    Adzan = new Adzan,
    elevator, elev = "10.0293632507324",
    map, geocoder, centerMarker, line, direction, distance, address, lines = [],
    sunrise, daylength, sunrisePolyline, sunsetPolyline, sunPolyline, date1 = new Date,
    layerArray = [],
    PI = Math.PI,
    rad = PI / 180,
    e = 23.4397 * rad;
