function addNsEvent(e, t) {
    var i = e.split(".");
var n = i[0];
    i[1];
    return this.bindCache = this.bindCache || {}, this.bindCache[e] ? this.bindCache[e].push(t) : this.bindCache[e] = [ t ], 
    this.addEvent(n, t), this;
}

function removeNsEvent(e) {
    if (void 0 === this.bindCache || !this.bindCache.hasOwnProperty(e)) return this;
    for (var t;
var i = e.split(".")[0];
var n = 0;
var a = this.bindCache[e]; t = a[n++]; ) this.removeEvent(i, t);
    return this;
}

function removeNsEvents(e) {
    var t;
var i;
var n = this;
    return Object.each(this.bindCache, (function(a, o) {
        if (o.contains(".") && o.split(".").getLast() === e) for (t = 0; i = a[t++]; ) n.removeEvent(o.split(".")[0], i);
    })), this;
}

Travian.Constants = {
    RES_LUMBER: 1,
    RES_CLAY: 2,
    RES_IRON: 3,
    RES_CROP: 4,
    RESOURCE_NAME: {
        1: "lumber",
        2: "clay",
        3: "iron",
        4: "crop"
    },
    HERO_STATUS_IN_VILLAGE: 100,
    HERO_STATUS_DEAD: 101,
    HERO_STATUS_ON_THE_WAY_TO_ATTACK: 3,
    HERO_STATUS_ON_THE_WAY_TO_RAID: 4,
    HERO_STATUS_ON_THE_WAY_TO_SUPPLY: 5,
    HERO_STATUS_ON_THE_RETURN_PATH: 9,
    HERO_STATUS_ON_ESCAPE: 40,
    HERO_STATUS_ON_ADVENTURE: 50,
    HERO_STATUS_CAPTURED: 102,
    HERO_STATUS_ON_SUPPLY: 103,
    PROFILE_MAX_ACCUSATIONS_PLAYER_CAN_CREATE: 2,
    PLAYER_GENDER_DIVERSE: "diverse",
    PLAYER_GENDER_FEMALE: "female",
    PLAYER_GENDER_MALE: "male",
    PLAYER_GENDER_NOT_SPECIFIED: "NotSpecified",
    BUILDING_SLOT_RALLY_POINT: 39,
    VILLAGE_PERSPECTIVE_RESOURCES: "perspectiveResources",
    VILLAGE_PERSPECTIVE_BUILDINGS: "perspectiveBuildings",
    VILLAGE_TYPE_NORMAL: 0,
    VILLAGE_TYPE_CAPITAL: 1,
    VILLAGE_TYPE_OASIS_FREE: 3,
    VILLAGE_TYPE_OASIS_OCCUPIED: 2,
    VILLAGE_TYPE_VILLAGES: {
        0: 0,
        1: 1
    },
    VILLAGE_TYPE_OASES: {
        0: 3,
        1: 2
    },
    ACCUSATION_REASONS: {
        multiAccount: "admin.c3_sperrgrund_multi_und_pushing",
        passwordSharing: "admin.c3_sperrgrund_multiaccount",
        botScript: "admin.c3_sperrgrund_scripts_und_bots",
        other: "admin.c3_sperrgrund_sonstiges",
        inappropriateContent: "admin.inappropriateContent",
        privateFarm: "admin.banReasonPrivateFarm"
    },
    ACTION: {
        account: "account",
        troopsSend: "troopsSend",
        trainTroops: "trainTroops",
        tradeRoute: "traderoute",
        heroRevive: "heroRevive",
        auction: "auction",
        farmList: "farmList",
        premiumFeature: "premiumFeature",
        inventory: "inventory",
        silverExchange: "silverExchange",
        marketPlace: "marketPlace",
        paymentWizard: "paymentWizard"
    },
    MEDIUM_LOYALTY_VALUE: 100,
    EVENT_TYPES: {
        attack: 3,
        raid: 4,
        forward: 72
    },
    TROOP_NUMBER_TYPES: {
        allWithoutHero: {
            0: "t1",
            1: "t2",
            2: "t3",
            3: "t4",
            4: "t5",
            5: "t6",
            6: "t7",
            7: "t8",
            8: "t9",
            9: "t10"
        },
        catapult: "t8",
        hero: "t11"
    },
    TROOPS_MOVEMENT_SPEEDUP_DISTANCE: 20,
    TIME_FORMAT_MODE: {
        eu: 0,
        us: 1,
        uk: 2,
        iso: 3,
        acp: 4
    },
    TRIBE_ID: {
        roman: 1,
        teuton: 2,
        gaul: 3,
        nature: 4,
        natar: 5,
        egyptian: 6,
        hun: 7,
        spartan: 8
    },
    SHOP_TABS: {
        buyGold: "buyGold",
        advantages: "pros",
        vouchers: "vouchers",
        specialOffers: "specialOffers"
    },
    AUTO_COMPLETE: {
        villageName: "villagename",
        playerName: "playername"
    },
    TRADE_OFFER_RATIO_LIMIT: 1,
    TRADE_POPULATION_THRESHOLD: 200,
    TRANSFER_TYPE_GOLD_TO_SILVER: "GoldToSilver",
    TRANSFER_TYPE_SILVER_TO_GOLD: "SilverToGold"
}, Travian.emptyFunction = function() {}, Travian.redirectTo = function(e) {
    Travian.WindowManager.getWindows().map((function(e) {
        Travian.WindowManager.unregister(e);
    })), window.location.assign(e);
}, Travian.defaultErrorFunction = function(e) {
    e && e.message && new Travian.Dialog.Dialog({
        preventFormSubmit: !0
    }).setContent(e.message).show();
}, Travian.api = function(e, t = {}, i = "POST", n = "json") {
    const a = function(e = {};
const t;
const i) {
        return e.reload ? Travian.Autoreload.autoreload() : e.redirectTo ? Travian.redirectTo(e.redirectTo) : void t(e;
const i);
    }, o = t.success || Travian.emptyFunction, r = t.error || Travian.defaultErrorFunction, s = Object.assign(t.headers || {}, {
        "X-Version": "2435.8"
    }), l = Object.assign({}, Travian.Variables.javascript.ajaxOptions || {}, t, {
        url: "/api/v1/" + e,
        method: i,
        data: JSON.stringify(t.data),
        processData: !1,
        dataType: n,
        contentType: "application/json; charset=UTF-8",
        headers: s,
        complete: t.complete || Travian.emptyFunction,
        success: function(e, t, i) {
            a(e, o, i);
        },
        error: function(e, t, i) {
            a(e && e.responseJSON, r, e);
        }
    });
    return jQuery.ajax(l);
}, Travian.graphQL = function(e, t, i) {
    return Travian.api("graphql", {
        data: {
            query: e.query,
            variables: e.variables
        },
        success: t,
        error: i
    }, "POST", "json");
}, Travian.isToggleClosed = function(e, t) {
    e = jQuery(e);
    var i = (t = jQuery(t)).attr("class").indexOf("Mirrored") >= 0;
var n = e.hasClass("hide");
var a = n && t.hasClass("switchClosed");
    return i && (a = n && t.hasClass("switchClosedMirrored")), a;
}, Travian.toggleSwitch = function(e, t) {
    e = jQuery(e), t = jQuery(t), e.toggleClass("hide");
    var i = t.attr("class").indexOf("Mirrored") >= 0;
    return t.toggleClass("switchClosed"), i && t.toggleClass("switchClosedMirrored"), 
    t.toggleClass("switchOpened"), i && t.toggleClass("switchOpenedMirrored"), this;
}, Travian.toggleSwitchDescription = function(e, t, i) {
    return "element" == typeof e && (e = [ e ]), e.each((function() {
        let e = jQuery(this);
        e.hasClass("switchClosed") ? (e.attr("title", t), e.attr("alt", t)) : (e.attr("title", i), 
        e.attr("alt", i));
    })), this;
}, Travian.updateSideboxVillageHref = function(e) {
    jQuery("#sidebarBoxVillagelist").find("li").each((function() {
        var t = jQuery(this).find("a");
var i = Travian.Browser.parseURL(t.attr("href"));
var n = "";
var a = "?";
        for (var o in void 0 !== e && (i.searchObject.t = e);
var i.searchObject) i.searchObject.hasOwnProperty(o) && (n += a + o + "=" + i.searchObject[o];
var a = "&");
        t.attr("href", n);
    }));
}, Travian.getCursorPosition = function(e) {
    let t = e.pageX;
let i = e.pageY;
    return void 0 === i && (void 0 !== e.touches && (t = e.touches[0].pageX, i = e.touches[0].pageY), 
    void 0 !== e.originalEvent && (t = e.originalEvent.touches[0].pageX, i = e.originalEvent.touches[0].pageY), 
    void 0 !== e.nativeEvent && (t = e.nativeEvent.touches[0].pageX, i = e.nativeEvent.touches[0].pageY)), 
    {
        x: t,
        y: i,
        timestamp: new Date
    };
}, window.Travian.Autoreload = {
    reloadParameter: "reload",
    autoreloadParameterValue: "auto",
    inReload: !1,
    autoreload: function() {
        if (this.inReload) return;
        this.inReload = !0;
        let e;
let t = window.location.href;
        if (-1 !== (e = t.indexOf("#")) && (t = t.substring(0, e)), -1 === t.indexOf(Travian.Autoreload.reloadParameter)) {
            let e = Travian.Autoreload.reloadParameter + "=" + Travian.Autoreload.autoreloadParameterValue;
            -1 === t.indexOf("?") ? t += "?" + e : t += "&" + e;
        }
        window.location.href = t;
    },
    removeAutoreloadParameter: function() {
        let e = document.location.href;
let t = document.location.hash;
        if ("" !== t) {
            let i = e.indexOf(t);
            e = e.substring(0, i);
        }
        let i = Travian.Autoreload.reloadParameter + "=" + Travian.Autoreload.autoreloadParameterValue;
let n = e.indexOf(i);
        -1 !== n && (e = e.substring(0, n - 1) + t, window.history.pushState({
            id: e
        }, "", e));
    }
}, Travian.Helpers = {
    substitute: function(e, t, i) {
        return e.replace(i || /\\?\{([^{}]+)\}/g, (function(e, i) {
            return "\\" === e.charAt(0) ? e.slice(1) : null != t[i] ? t[i] : "";
        }));
    },
    capitalizeFirstLetter: function(e) {
        return e.charAt(0).toUpperCase() + e.slice(1);
    }
}, Travian.Browser = {
    isTouchInput: !1,
    isMobile: function() {
        var e = !1;
var t = navigator.userAgent || navigator.vendor || window.opera;
        return (/ipad|ipod|(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|windows nt.+touch|xda|xiino/i.test(t) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0, 4))) && (e = !0), 
        e;
    },
    monitorInputType: function() {
        [ "pointermove", "pointerdown" ].forEach((e => window.addEventListener(e, (function(e) {
            Travian.Browser.isTouchInput = "touch" === e.pointerType;
        }))));
    },
    parseURL: function(e) {
        var t = document.createElement("a");
var i = {};
        return t.href = e, t.search.substr(1).split("&").forEach((function(e) {
            var t = e.split("=");
var n = decodeURIComponent(t[0]);
            n.length > 0 && (i[n] = t[1]);
        })), {
            protocol: t.protocol,
            host: t.host,
            hostname: t.hostname,
            port: t.port,
            pathname: ("/" !== t.pathname.charAt(0) ? "/" : "") + t.pathname,
            searchObject: i,
            hash: t.hash
        };
    },
    composeURL: function(e) {
        var t = e.protocol + "//" + e.host;
        return t += this.composeURI(e);
    },
    composeURI: function(e) {
        var t = e.pathname;
var i = "?";
        for (var n in e.searchObject) e.searchObject.hasOwnProperty(n) && null !== e.searchObject[n] && (t += i + n + "=" + e.searchObject[n];
var i = "&");
        return t += e.hash;
    },
    getScript: function(e, t) {
        const i = jQuery("script");
        if (i) for (let n = i.length - 1; n >= 0; n--) if (i[n].src && i[n].src === e) return t && t();
        jQuery.ajax(e, {
            dataType: "script",
            success: t,
            cache: !0
        });
    },
    getCss: function(e) {
        var t = jQuery("link");
        if (t) for (var i = t.length - 1; i >= 0; i--) if (t[i].href && t[i].href === e) return !1;
        return jQuery('<link rel="stylesheet" type="text/css" href="' + e + '"/>').appendTo("head"), 
        !0;
    }
}, Travian.Browser.monitorInputType(), Travian.Draggable = function(e, t) {
    this.options = Object.assign({
        onDrag: function(e, t) {},
        snap: 6,
        unit: "px",
        grid: !1,
        style: !0,
        limit: !1,
        handle: !1,
        invert: !1,
        unDraggableTags: [ "button", "input", "a", "textarea", "select", "option" ],
        preventDefault: !0,
        stopPropagation: !0,
        compensateScroll: !1,
        modifiers: {
            x: "left",
            y: "top"
        }
    }, t), this.attach = function() {
        return this.handles.on("mousedown", this.bound.start), this.handles.on("touchstart", this.bound.start), 
        this.options.compensateScroll && this.offsetParent.on("scroll", this.bound.scrollListener), 
        this;
    }, this.detach = function() {
        return this.handles.off("mousedown", this.bound.start), this.handles.off("touchstart", this.bound.start), 
        this.options.compensateScroll && this.offsetParent.off("scroll", this.bound.scrollListener), 
        this;
    }, this.scrollListener = function() {
        if (this.mouse.start) {
            var e = {
                x: this.offsetParent.scrollTop();
var y: this.offsetParent.scrollLeft()
            };
            if ("absolute" === this.element.css("position")) {
                var t = this.sumValues(e;
var this.compensateScroll.last;
var -1);
                this.mouse.now = this.sumValues(this.mouse.now, t, 1);
            } else this.compensateScroll.diff = this.sumValues(e, this.compensateScroll.start, -1);
            this.offsetParent !== window && (this.compensateScroll.diff = this.sumValues(this.compensateScroll.start, e, -1)), 
            this.compensateScroll.last = e, this.render(this.options);
        }
    }, this.sumValues = function(e, t, i) {
        var n = {};
var a = this.options;
        for (var o in a.modifiers) a.modifiers[o] && (n[o] = e[o] + t[o] * i);
        return n;
    }, this.start = function(e) {
        if (-1 === this.options.unDraggableTags.indexOf(e.target.getAttribute("tag"))) {
            var t = this.options;
            if (3 !== e.which && 2 !== e.button) {
                t.preventDefault && e.preventDefault(), t.stopPropagation && e.stopPropagation(), 
                this.compensateScroll.start = this.compensateScroll.last = {
                    x: this.offsetParent.scrollTop(),
                    y: this.offsetParent.scrollLeft()
                }, this.compensateScroll.diff = {
                    x: 0,
                    y: 0
                }, this.mouse.start = {
                    x: e.pageX,
                    y: e.pageY
                };
                var i = t.limit;
                this.limit = {
                    x: [],
                    y: []
                };
                var n;
var a;
var o = this.offsetParent === window ? null : this.offsetParent;
                for (n in t.modifiers) if (t.modifiers.hasOwnProperty(n)) {
                    var r = this.element.css(t.modifiers[n]);
                    if (r && !r.match(/px$/) && (a || (a = this.element.getCoordinates(o)), r = a[t.modifiers[n]]), 
                    t.style ? this.value.now[n] = parseInt(r || 0) : this.value.now[n] = this.element[t.modifiers[n]], 
                    t.invert && (this.value.now[n] *= -1), this.mouse.pos[n] = this.mouse.start[n] - this.value.now[n], 
                    i && i[n]) for (var s = 2; s--; ) {
                        var l = i[n][s];
                        (l || 0 === l) && (this.limit[n][s] = "function" == typeof l ? l() : l);
                    }
                }
                "number" == typeof this.options.grid && (this.options.grid = {
                    x: this.options.grid,
                    y: this.options.grid
                });
                var c = {
                    mousemove: this.bound.check;
var mouseup: this.bound.cancel;
var touchend: this.bound.cancel
                };
                this.document.on(c), document.addEventListener("touchmove", this.bound.check, {
                    passive: !1
                });
            }
        }
    }, this.check = function(e) {
        this.options.preventDefault && e.preventDefault(), Math.round(Math.sqrt(Math.pow(e.pageX - this.mouse.start.x, 2) + Math.pow(e.pageY - this.mouse.start.y, 2))) > this.options.snap && (this.cancel(), 
        this.document.on({
            mousemove: this.bound.drag,
            mouseup: this.bound.stop,
            touchend: this.bound.stop
        }), document.addEventListener("touchmove", this.bound.drag, {
            passive: !1
        }));
    }, this.drag = function(e) {
        var t = this.options;
        t.preventDefault && e.preventDefault(), this.mouse.now = this.sumValues({
            x: e.pageX,
            y: e.pageY
        }, this.compensateScroll.diff, -1), this.render(t), this.options.onDrag(this.element, e);
    }, this.render = function(e) {
        for (var t in e.modifiers) if (e.modifiers.hasOwnProperty(t)) {
            if (!e.modifiers[t]) continue;
            this.value.now[t] = this.mouse.now[t] - this.mouse.pos[t], e.invert && (this.value.now[t] *= -1), 
            e.limit && this.limit[t] && ((this.limit[t][1] || 0 === this.limit[t][1]) && this.value.now[t] > this.limit[t][1] ? this.value.now[t] = this.limit[t][1] : (this.limit[t][0] || 0 === this.limit[t][0]) && this.value.now[t] < this.limit[t][0] && (this.value.now[t] = this.limit[t][0])), 
            e.grid[t] && (this.value.now[t] -= (this.value.now[t] - (this.limit[t][0] || 0)) % e.grid[t]), 
            e.style ? this.element.css(e.modifiers[t], this.value.now[t] + e.unit) : this.element[e.modifiers[t]] = this.value.now[t];
        }
    }, this.cancel = function(e) {
        this.document.off({
            mousemove: this.bound.check,
            mouseup: this.bound.cancel,
            touchmove: this.bound.check,
            touchend: this.bound.cancel
        });
    }, this.stop = function(e) {
        var t = {
            mousemove: this.bound.drag;
var mouseup: this.bound.stop;
var touchmove: this.bound.drag;
var touchend: this.bound.stop
        };
        this.document.off(t), this.mouse.start = null;
    }, this.element = jQuery(e), this.document = jQuery(document), this.handles = jQuery(this.options.handle) || this.element, 
    this.mouse = {
        now: {},
        pos: {}
    }, this.value = {
        start: {},
        now: {}
    }, this.offsetParent = this.element.parent(), this.selection = "selectstart" in document ? "selectstart" : "mousedown", 
    this.compensateScroll = {
        start: {},
        diff: {},
        last: {}
    }, this.bound = {
        start: this.start.bind(this),
        check: this.check.bind(this),
        drag: this.drag.bind(this),
        stop: this.stop.bind(this),
        cancel: this.cancel.bind(this),
        scrollListener: this.scrollListener.bind(this)
    }, this.attach();
}, Travian.Moveable = function(e, t) {
    if (this.options = Object.assign({
        onDrop: function(e, t, i) {},
        droppables: [],
        container: !1,
        precalculate: !1,
        includeMargins: !0,
        checkDroppables: !0
    }, t), this.setContainer = function(e) {
        this.container = jQuery(e);
    }, this.start = function(e) {
        this.container && (this.options.limit = this.calculateLimit()), this.options.precalculate && (this.positions = this.droppables.map((function(e) {
            return e.getCoordinates();
        }))), this.parent.start.call(this, e);
    }, this.calculateLimit = function() {
        var e = this.element;
var t = this.container;
var i = jQuery(e.parent() || document.body);
var n = t.getCoordinates(i);
var a = {};
var o = {};
var r = {};
var s = {};
var l = {};
var c = i.scrollTop();
var d = i.scrollLeft();
        [ "top", "right", "bottom", "left" ].each((function(n) {
            a[n] = parseInt(e.css("margin-" + n)), o[n] = parseInt(e.css("border-" + n)), r[n] = parseInt(t.css("margin-" + n)), 
            s[n] = parseInt(t.css("border-" + n)), l[n] = parseInt(i.css("padding-" + n));
        }), this);
        var u = e.offsetWidth + a.left + a.right;
var p = e.offsetHeight + a.top + a.bottom;
var h = 0 + c;
var m = 0 + d;
var v = n.right - s.right - u + c;
var f = n.bottom - s.bottom - p + d;
        if (this.options.includeMargins ? (h += a.left, m += a.top) : (v += a.right, f += a.bottom), 
        "relative" === e.css("position")) {
            var g = e.getCoordinates(i);
            g.left -= parseInt(e.css("left")), g.top -= parseInt(e.css("top")), h -= g.left, 
            m -= g.top, "relative" !== t.css("position") && (h += s.left, m += s.top), v += a.left - g.left, 
            f += a.top - g.top, t !== i && (h += r.left + l.left, !l.left && h < 0 && (h = 0), 
            m += i === document.body ? 0 : r.top + l.top, !l.top && m < 0 && (m = 0));
        } else h -= a.left, m -= a.top, t !== i && (h += n.left + s.left, m += n.top + s.top);
        return {
            x: [ h, v ],
            y: [ m, f ]
        };
    }, this.getDroppableCoordinates = function(e) {
        var t = e.getCoordinates();
        if ("fixed" === e.css("position")) {
            var i = window.getScroll();
            t.left += i.x, t.right += i.x, t.top += i.y, t.bottom += i.y;
        }
        return t;
    }, this.checkDroppables = function() {
        var e = this.droppables.filter((function(e;
var t) {
            e = this.positions ? this.positions[t] : this.getDroppableCoordinates(e);
            var i = this.mouse.now;
            return i.x > e.left && i.x < e.right && i.y < e.bottom && i.y > e.top;
        }), this).getLast();
        this.overed !== e && (this.overed = e);
    }, this.drag = function(e) {
        this.parent.drag.call(this, e), this.options.checkDroppables && this.droppables.length && this.checkDroppables();
    }, this.stop = function(e) {
        return this.checkDroppables(), this.options.onDrop(this.element, this.overed, e), 
        this.overed = null, this.parent.stop.call(this, e);
    }, Travian.Draggable.call(this, e, this.options), this.droppables = jQuery(this.options.droppables), 
    this.setContainer(this.options.container || document.body), this.options.style) {
        if ("left" === this.options.modifiers.x && "top" === this.options.modifiers.y) {
            var i = e.position();
var n = e.css([ "left";
var "top" ]);
            !i || "auto" !== n.left && "auto" !== n.top || e.offset(e.position());
        }
        "static" === e.css("position") && e.css("position", "absolute");
    }
    this.overed = null;
}, Travian.Moveable.prototype = Object.create(Travian.Draggable.prototype), Travian.Moveable.constructor = Travian.Moveable, 
Travian.Moveable.parent = Travian.Draggable.prototype, Travian.Storage = function() {
    var e = function(e) {
        var t = e ? "localStorage" : "sessionStorage";
        return window[t] ? window[t] : null;
    }, t = function(e) {
        return "Travian." + e;
    };
    return {
        cachingTime: 31536e6,
        clear: function(i, n) {
            return function(i, n) {
                var a = e(i);
                n = t(n), null === a || a.removeItem(n);
            }(n, i), this;
        },
        get: function(i, n) {
            var a = function(i;
var n) {
                var a = e(i);
var o = null;
                return n = t(n), null === a || null == (o = a.getItem(n)) || void 0 === o ? null : JSON.decode(o);
            }(n, i);
            return null === a || !0 === function(e, t) {
                var i = e.cachingTime;
                return void 0 !== t.cachingTime && null !== t.cachingTime && (i = t.cachingTime), 
                !1 !== t.time && (new Date).getTime() - t.time > i;
            }(this, a) ? null : a.data;
        },
        set: function(i, n, a, o) {
            var r = function(e;
var t) {
                return {
                    data: e;
var time: (new Date).getTime();
var cachingTime: t
                };
            }(n, o);
            return function(i, n, a) {
                var o = e(i);
var r = JSON.encode(a);
                if (n = t(n), null === o) return null;
                o.setItem(n, r);
            }(a, i, r), this;
        }
    };
}(), Travian.Translation = {
    keys: {},
    add: function(e, t) {
        var i = {};
        return "object" != typeof e ? i[e] = t : i = e, this.keys = Object.assign({}, this.keys, i), 
        this;
    },
    get: function(e) {
        return this.keys[e];
    },
    translate: function(e, t) {
        return t = t || {}, e.replace(/\\?\{([^{}]+)\}/g, (function(e, i) {
            return Travian.Translation.keys[i] || t[i] || "{" + i + "}";
        }));
    }
}, Travian.Translation.add(Travian.Strings), Travian.Tip = function() {
    return Object.create({
        PLACEMENT_DEFAULT: "bottom-start",
        PLACEMENT_MIRRORED: "bottom-end",
        initialized: !1,
        init: function() {
            tippy.setDefaultProps({
                theme: "travian",
                allowHTML: !0,
                followCursor: !0,
                arrow: !1,
                placement: this.PLACEMENT_DEFAULT,
                offset: [ 16, 16 ]
            }), this.initialized = !0, this.refresh();
        },
        updateAllInElement: function(e) {
            const t = this;
            t.initialized || t.init(), t.hide(), e instanceof jQuery && (e = e[0]), "string" == typeof e && (e = document.querySelector(e));
            for (let t of e.querySelectorAll('[title]:not([title=""])')) t._tippy && t._tippy.destroy();
            tippy(e.querySelectorAll('[title]:not([title=""])'), {
                content(e) {
                    let i = null;
                    const n = e.getAttribute("title");
                    if ("" !== n) return i = t.getTitleFromString(n), e.removeAttribute("title"), i ? t.render(i) : "";
                },
                onCreate(e) {
                    void 0 !== e.reference.dataset.loadTooltip && (e._tooltipName = e.reference.dataset.loadTooltip, 
                    e._tooltipData = JSON.parse(e.reference.dataset.loadTooltipData), e._isAjax = !0, 
                    e._hasLoaded = !1, e._isLoading = !1), t.initTimersInContext(e);
                },
                onShow(e) {
                    if (void 0 === e._isAjax || !e._isAjax || e._hasLoaded || e._isLoading || (e._isLoading = !0, 
                    Travian.api("tooltip/" + e._tooltipName, {
                        data: e._tooltipData,
                        success: function(i) {
                            e._hasLoaded = !0, e._isLoading = !1, !i || !i.text && !i.title || "" === i.text && "" === i.title ? (e.setContent(""), 
                            e.hide()) : e.setContent(t.render(i));
                        },
                        error: function(t) {
                            e.setContent(t.message), e._isLoading = !1;
                        }
                    })), !e.props.content && "" === e.props.content) return !1;
                }
            });
            const i = [ ...e.querySelectorAll("path;
const circle;
const rect") ].filter((function(e) {
                return null !== e.querySelector("title");
            }));
            tippy(i, {
                content: function(e) {
                    let i = t.unescape(t.getTitleFromString(e.textContent));
                    return e.querySelector("title").remove(), t.render(i);
                }
            });
        },
        set: function(e, t) {
            const i = this;
            return e instanceof jQuery && (e = e[0]), "string" == typeof e && (e = document.querySelector(e)), 
            "string" == typeof t && (t = i.getTitleFromString(t)), tippy(e, {
                content: function() {
                    return i.render(t);
                }
            });
        },
        setContent: function(e, t) {
            e instanceof jQuery && (e = e[0]), e._tippy && this.updateContentOfInstance(e._tippy, t);
        },
        updateContentOfInstance: function(e, t) {
            "string" == typeof t && (t = this.getTitleFromString(t)), e.setContent(this.render(t)), 
            this.initTimersInContext(e);
        },
        render: function(e) {
            return e.title && (e.title = Travian.Translation.translate(e.title)), e.text && (e.text = Travian.Translation.translate(e.text)), 
            '<div class="title">{{TITLE}}</div><div class="text">{{TEXT}}</div>'.replace("{{TITLE}}", e.title || "").replace("{{TEXT}}", e.text || "");
        },
        unescape: function(e) {
            const t = document.createElement("textarea");
            return t.innerHTML = e.title, e.title = t.value, t.innerHTML = e.text, e.text = t.value, 
            t.remove(), e;
        },
        getTitleFromString: function(e) {
            const t = {
                title: "";
const text: ""
            };
            if (void 0 === e) return !1;
            var i = e.split("||");
            if (1 === i.length) t.text = i[0]; else {
                if (2 !== i.length) return !1;
                t.title = i[0], t.text = i[1];
            }
            return t;
        },
        refresh: function() {
            this.updateAllInElement(document.body);
        },
        hide: function() {
            tippy.hideAll();
        },
        resetAjaxTipsInElement: function(e) {
            e instanceof jQuery && (e = e[0]);
            const t = e.querySelectorAll("[data-load-tooltip]");
            t && t.forEach((function(e) {
                if (void 0 !== e._tippy) {
                    const t = e._tippy;
                    t._isAjax && (t._hasLoaded = !1, t.setContent(Travian.Translation.get("layout.waitingForTooltip")));
                }
            }));
        },
        clearOnElement: function(e) {
            if (!e) return !1;
            e instanceof jQuery && (e = e[0]), void 0 !== e._tippy && e._tippy.destroy();
        },
        initTimersInContext: function(instance) {
            Travian.TimersAndCounters.initTimersInContext(instance.popper);
            const script = instance.popper.querySelector("script");
            script && eval(script.textContent);
        }
    });
}(), jQuery((function() {
    Travian.Tip.init();
})), Travian.Dialog = {
    CLOSE_CONTEXT_FORMSUBMIT: "formSubmit",
    CLOSE_CONTEXT_OVERLAYBACKGROUND: "overlayBackground",
    CLOSE_CONTEXT_CANCELBUTTON: "cancelButton",
    CLOSE_CONTEXT_CLOSEONCLICKOK: "closeOnClickOk",
    CLOSE_CONTEXT_CLOSEONESCKEY: "closeOnEscKey"
}, Travian.Dialog.Dialog = function(e) {
    this.overlay = null, this.overlaySize = {
        width: 0,
        height: 0
    }, this.clickedOnOverlay = !1, this.options = Object.assign({
        version: 1,
        cssClass: null,
        id: null,
        buttonOk: !0,
        keepOpen: !1,
        buttonTextOk: null,
        buttonCloseOnClickOk: !1,
        buttonCancel: !0,
        elementFocus: ".dialogButtonOk",
        relativeTo: null,
        title: null,
        useEscKey: !0,
        submitMethod: "get",
        submitUrl: null,
        preventFormSubmit: !1,
        overlayCancel: !0,
        draggable: !1,
        dragPosition: null,
        enableBackground: !0,
        darkOverlay: !1,
        savePositionForSession: {
            preferenceKey: null
        },
        infoIcon: null,
        buttonTextInfo: null,
        fx: {
            duration: 400
        },
        onOkay: Travian.emptyFunction,
        onClose: Travian.emptyFunction,
        afterClose: Travian.emptyFunction,
        onOpen: Travian.emptyFunction,
        onDrag: Travian.emptyFunction
    }, e), this.toggleFormState = function(e) {
        return this.buttonOk.toggleClass("disabled", e).disabled = e, this;
    }, this.disableForm = function() {
        return this.toggleFormState(!0);
    }, this.enableForm = function() {
        return this.toggleFormState(!1);
    }, this.correctDialogPosition = function(e) {
        let t = this.overlaySize.width;
let i = this.overlaySize.height;
let n = this.wrapper.width();
let a = this.wrapper.height();
let o = e.left;
let r = e.top;
        return o < 0 && (o = 0), o + n >= t && (o = t - n), r < 0 ? r = 0 : r + a >= i && (r = i - a), 
        {
            left: o,
            top: r
        };
    }, this.render = function() {
        let e = this;
let t = jQuery("body");
        if (this.options.savePositionForSession.preferenceKey) {
            var i = Travian.Game.Preferences.get(this.options.savePositionForSession.preferenceKey);
            null !== i && (i = JSON.parse(i), this.options.savePositionForSession.position = i.position);
        }
        let n = jQuery(Travian.Templates["ButtonV" + this.options.version]);
let a = jQuery(Travian.Templates["DialogV" + this.options.version]);
        if (n.length <= 0 || a.length <= 0) throw "Dialog.js: Unable to load required template(s).";
        if (n.addClass("green dialogButtonOk ok textButtonV" + this.options.version), n.attr("type", "submit"), 
        2 === this.options.version && n.addClass("buttonFramed withText rectangle"), this.overlay = a, 
        e.options.enableBackground ? (this.overlay.addClass("enabled"), e.options.darkOverlay && this.overlay.addClass("dark"), 
        e.options.overlayCancel && (this.overlay.on("mousedown touchstart", (function(t) {
            t.target.classList.contains("dialogOverlay") && (e.clickedOnOverlay = !0);
        })), this.overlay.on("touchmove", (function() {
            e.clickedOnOverlay = !1;
        })), this.overlay.on("click", (function() {
            e.clickedOnOverlay && e.close(Travian.Dialog.CLOSE_CONTEXT_OVERLAYBACKGROUND);
        })))) : this.overlay.addClass("allowMobileSidebars"), this.wrapper = this.overlay.find(".dialogWrapper"), 
        void 0 !== this.options.context && this.wrapper.attr("data-context", this.options.context), 
        null === this.options.cssClass && 2 === this.options.version && (this.options.cssClass = "basic"), 
        this.wrapper.find(".dialog").addClass(this.options.cssClass), null !== this.options.id && this.wrapper.find(".dialog").attr("id", this.options.id), 
        this.wrapper.find(".buttons").append(n), t.prepend(this.overlay), this.overlaySize.width = this.overlay.width(), 
        this.overlaySize.height = this.overlay.height(), jQuery(window).on("resize scroll", (function() {
            let t = jQuery(".dialogOverlay");
            e.overlaySize.width = t.width(), e.overlaySize.height = t.height(), !e.options.draggable || Travian.Browser.isMobile() ? e.updatePosition(200, !0) : e.options.draggable && e.wrapper.css(e.correctDialogPosition(e.wrapper.position()));
        })), this.content = this.wrapper.find("div#dialogContent"), this.title = this.wrapper.find("div.title"), 
        this.setTitle(this.options.title), this.elementContents = this.wrapper.find("div.dialogContents"), 
        this.infoButton = this.wrapper.find("div.info"), this.dialogDragbar = this.wrapper.find("div.dialogDragBar"), 
        this.options.infoIcon ? this.setInfoIcon(this.options.infoIcon) : this.infoButton.hide(), 
        this.options.draggable && (this.wrapper.addClass("dragWrapper"), new Travian.Moveable(this.wrapper, {
            droppables: this.title,
            handle: this.dialogDragbar,
            onDrop: function(t) {
                var i = jQuery(t).position();
                e.options.dragPosition = e.correctDialogPosition(i), null !== e.options.savePositionForSession.preferenceKey && (e.options.savePositionForSession.position = e.correctDialogPosition(i));
            },
            onDrag: function(t) {
                var i = jQuery(t);
                i.css(e.correctDialogPosition(i.position())), e.options.onDrag(e);
            }
        }), this.title.css("drag")), this.options.draggable && this.wrapper.on("mousedown touchdown", (function() {
            e.bringToFront();
        })), this.form = this.wrapper.find("form").on("submit", (function(t) {
            return e.form.disabled ? (t.stopPropagation(), !1) : (e.disableForm(), e.options.onOkay(e, e.content), 
            !1 === e.options.keepOpen && e.close(Travian.Dialog.CLOSE_CONTEXT_FORMSUBMIT), e.options.preventFormSubmit ? (t.stopPropagation(), 
            !1) : void 0);
        })), this.form.disabled = !1, this.options.submitMethod && this.form.attr("method", this.options.submitMethod), 
        this.options.submitUrl && this.form.attr("action", this.options.submitUrl), this.buttonOk = this.wrapper.find("button.ok"), 
        !1 === this.options.buttonOk) this.buttonOk.closest(".buttons").hide(); else {
            let e = this.buttonOk.find("div");
            e.length > 0 ? e.html(this.options.buttonTextOk) : this.buttonOk.html(this.options.buttonTextOk), 
            Travian.Tip.set(this.buttonOk, this.options.buttonTextOk);
        }
        this.options.buttonCloseOnClickOk && this.buttonOk.click((function(t) {
            t.preventDefault(), e.close(Travian.Dialog.CLOSE_CONTEXT_CLOSEONCLICKOK);
        })), this.buttonCancel = this.wrapper.find(".dialogCancelButton"), !1 === this.options.buttonCancel ? this.buttonCancel.hide() : this.buttonCancel.on("click", (function() {
            e.close(Travian.Dialog.CLOSE_CONTEXT_CANCELBUTTON);
        })), this.bringToFront();
    }, this.updateInfoButton = function(e) {
        return this.options = Object.assign(this.options, e), this.options.infoIcon ? this.setInfoIcon(this.options.infoIcon) : this.infoButton.hide(), 
        this;
    }, this.displayButtonOk = function(e) {
        null == e || !0 === e ? (this.buttonOk.closest(".buttons").show(), this.buttonOk.show()) : this.buttonOk.hide();
    }, this.setContent = function(e) {
        return this.content.empty(), this.content.append(e), this.updatePosition(), Travian.Tip.updateAllInElement(this.wrapper), 
        jQuery(window).trigger("domAltered", this.wrapper), this;
    }, this.setTitle = function(e) {
        return this.options.title = e, this.title.html(this.options.title), this.options.title || this.title.hide(), 
        this;
    }, this.calculatePosition = function() {
        let e = jQuery(window);
let t = e.scrollLeft();
let i = e.scrollTop();
let n = jQuery("body");
let a = this.overlaySize.width;
let o = this.overlaySize.height;
let r = this.wrapper.width();
let s = this.wrapper.height();
let l = jQuery(this.options.relativeTo);
        l.length <= 0 && (l = n);
        let c = l.width();
let d = l.height();
let u = {
            x: l.offset().left;
let y: l.offset().top
        };
        u.x = this.checkValue(u.x), u.y = this.checkValue(u.y);
        let p = {
            left: u.x + c / 2 - r / 2 - t;
let top: u.y + d / 2 - s / 2 - i
        };
        return p.left = this.checkValue(p.left, 5), p.top = this.checkValue(p.top, 40), 
        p.top + s > o && (p.top = o - s), p.top < 0 && (p.top = 0), p.left + r > a && (p.left = a - r), 
        p.left < 0 && (p.left = 0), p;
    }, this.checkValue = function(e, t) {
        return e < 0 ? t || 0 : e;
    }, this.updatePosition = function(e, t) {
        if (this.options.draggable || null !== this.options.relativeTo) {
            jQuery("body");
            if (!this.options.savePositionForSession.preferenceKey || !this.options.savePositionForSession.position || void 0 !== t && t) if (this.options.dragPosition && void 0 !== this.options.dragPosition.x && void 0 !== this.options.dragPosition.y) this.setPosition(this.options.dragPosition); else {
                let t = this.calculatePosition();
                this.setPosition({
                    x: t.left,
                    y: t.top
                }, e);
            } else this.setPosition(this.options.savePositionForSession.position);
        }
    }, this.hide = function() {
        this.overlay.hide();
    }, this.unhide = function() {
        this.overlay.show();
    }, this.dispose = function() {
        this.options.useEscKey && jQuery("body").off(".dialog"), void 0 !== Travian.WindowManager && Travian.WindowManager.unregister(this), 
        jQuery(this.overlay).remove(), this.overlay = null;
    }, this.toElement = function() {
        return this.wrapper;
    }, this.setPosition = function(e, t) {
        return this.wrapper.css({
            left: e.x,
            top: e.y
        }), e;
    }, this.bringToFront = function() {
        if (void 0 === Travian.WindowManager) return !1;
        if (Travian.WindowManager.getCurrentZIndex() === parseInt(this.wrapper.css("zIndex"))) return !1;
        var e = Travian.WindowManager.getZIndex();
        this.wrapper.css({
            zIndex: e
        }), this.overlay.length > 0 && this.overlay.css({
            zIndex: e - 5
        });
    }, this.setInfoIcon = function(e) {
        if (this.options.infoIcon = e, e) {
            var t = this;
            this.infoButton.off("click"), this.infoButton.show(), this.infoButton.on("click", (function() {
                return "string" == typeof t.options.infoIcon ? window.open(t.options.infoIcon, "_blank") : "function" == typeof t.options.infoIcon ? t.options.infoIcon() : void 0;
            })), this.options.buttonTextInfo && Travian.Tip.set(this.infoButton, this.options.buttonTextInfo);
        } else this.infoButton.hide();
        return this;
    }, this.updateCssClass = function(e) {
        if (e) {
            var t = this.options.cssClass.split(" ");
var i = this.wrapper.find("div.dialog");
            if (i) {
                for (var n = 0; n < t.length; n++) i.removeClass(t[n]);
                this.options.cssClass = e;
                for (var a = e.split(" ");
var o = 0; o < a.length; o++) "" !== a[o] && i.addClass(a[o]);
            }
        }
        return this;
    }, this.makeInputAmountable = function(e, t, i) {
        var n = t || Number.MAX_VALUE;
var a = function(e;
var t;
var i) {
            e = jQuery(e);
            var n = t || Number.MAX_VALUE;
var a = parseInt(e.val()) || 0;
var o = Math.max(0;
var Math.min(a;
var n));
            e.val(o), i && i(o);
        };
        jQuery(e).on({
            keydown: function(e) {
                var t;
var i;
var n;
                t = e.keyCode, i = e.ctrlKey, n = e.metaKey, 8 === t || 46 === t || 65 === t && (!0 === i || !0 === n) || 67 === t && (!0 === i || !0 === n) || 88 === t && (!0 === i || !0 === n) || 86 === t && (!0 === i || !0 === n) || t >= 35 && t <= 39 || 13 === t || 9 === t || t >= 48 && t <= 57 || t >= 96 && t <= 105 || e.preventDefault();
            },
            keyup: function() {
                a(this, n, i);
            },
            paste: function() {
                a(this, n, i);
            },
            change: function() {
                a(this, n, i);
            },
            blur: function() {
                a(this, n, i);
            },
            input: function() {
                a(this, n, i);
            }
        });
    }, Object.assign(this.options, e), this.animateFunction = 0 === this.options.fx.duration ? function(e, t, i, n) {
        e.css(t), "function" == typeof n && n();
    } : function(e, t, i, n) {
        e.animate(t, i, n);
    }, this.options.relativeTo = this.options.relativeTo || null, null !== this.options.relativeTo && (this.options.relativeTo = jQuery(this.options.relativeTo)), 
    null === this.options.buttonTextOk && (this.options.buttonTextOk = Travian.Translation.get("allgemein.ok")), 
    this.render(), void 0 !== Travian.WindowManager && Travian.WindowManager.register(this);
}, Travian.Dialog.Dialog.prototype.reload = Travian.emptyFunction, Travian.Dialog.Dialog.prototype.show = function() {
    var e = this;
    return this.open = !0, this.updatePosition(), this.overlay.addClass("dialogVisible"), 
    setTimeout((function() {
        e.options.onOpen(e, e.content);
        var t = jQuery(e.options.elementFocus);
        t.length > 0 && t.focus(), Travian.Game.Layout.MobileOptimizations.fixNumericKeyboardOnIOS();
    }), e.options.fx.duration), this.options.useEscKey && jQuery("body").one("keyup.dialog", (function(t) {
        27 === t.keyCode && e.close(Travian.Dialog.CLOSE_CONTEXT_CLOSEONESCKEY);
    })), Travian.TabManager.initializeOnDialogLoad(), Travian.Tip.hide(), this;
}, Travian.Dialog.Dialog.prototype.close = function(e) {
    var t = this;
    return this.open = !1, this.options.onClose(this, this.content), this.overlay && this.overlay.length > 0 && this.overlay.removeClass("dialogVisible"), 
    setTimeout((function() {
        t.dispose();
    }), t.options.fx.duration), this.options.savePositionForSession.preferenceKey && this.options.savePositionForSession.position && Travian.Game.Preferences.set(this.options.savePositionForSession.preferenceKey, JSON.stringify(this.options.savePositionForSession)), 
    Travian.Tip.hide(), this.options.afterClose(), this;
}, Travian.Dialog.Confirmation = function(e) {
    this.options = Object.assign({
        onConfirm: Travian.emptyFunction,
        onCancel: function() {
            Travian.WindowManager.closeByContext("confirmationDialog");
        },
        message: "",
        confirmText: "",
        cancelText: "",
        confirmClass: "green",
        cancelClass: "grey",
        buttonCancel: !1,
        buttonOk: !1,
        cssClass: "white confirmationDialog",
        context: "confirmationDialog"
    }, e);
    var t = jQuery('<div class="confirmationDialog"></div>').append('<div class="message">' + this.options.message + "</div>").append('<div class="buttons"></div>');
    if (void 0 !== Travian.Templates.ButtonV1) {
        var i = jQuery(Travian.Templates.ButtonV1);
        i.addClass("textButtonV1 " + this.options.confirmClass), i.attr("type", "button"), 
        i.on("click", this.options.onConfirm), i.html(this.options.confirmText);
        var n = jQuery(Travian.Templates.ButtonV1);
        n.addClass("textButtonV1 " + this.options.cancelClass), n.attr("type", "button"), 
        n.on("click", this.options.onCancel), n.html(this.options.cancelText), t.find(".buttons").append(n).append(i);
    }
    return new Travian.Dialog.Dialog(this.options).setContent(t);
}, Travian.WindowManager = {
    windows: [],
    currentZIndex: 6e3,
    zIndexMaxValue: 9900,
    register: function(e) {
        return void 0 === e.options.context && (e.options.context = "noContext"), e.identifier = this.__createIdentifier(), 
        this.windows.push(e), e;
    },
    unregister: function(e) {
        this.windows = this.windows.filter((function(t) {
            return t !== e;
        }));
    },
    closeWindow: function(e) {
        e.close();
    },
    hideWindow: function(e) {
        e.hide();
    },
    showWindow: function(e) {
        e.unhide();
    },
    hideByContext: function(e) {
        var t = this;
        this.eachWindow((function(i) {
            if (!t.checkContext(e, i)) return !1;
            t.hideWindow(i);
        }));
    },
    showByContext: function(e) {
        var t = this;
        this.eachWindow((function(i) {
            if (!t.checkContext(e, i)) return !1;
            t.showWindow(i);
        }));
    },
    closeByContext: function(e) {
        var t = this;
        this.eachWindow((function(i) {
            if (!t.checkContext(e, i)) return !1;
            t.closeWindow(i);
        }));
    },
    getWindowsByContext: function(e) {
        var t = this;
var i = [];
        return this.eachWindow((function(n) {
            if (!t.checkContext(e, n)) return !1;
            i.push(n);
        })), i;
    },
    checkContext: function(e, t) {
        return void 0 !== t.options.context && t.options.context === e;
    },
    eachWindow: function(e) {
        for (var t = 0; t < this.windows.length; t++) e(this.windows[t]);
    },
    getWindows: function() {
        return this.windows;
    },
    reloadWindow: function(e) {
        e.reload();
    },
    reloadWindowsByContext: function(e) {
        var t = this;
        this.eachWindow((function(i) {
            if (!t.checkContext(e, i)) return !1;
            t.reloadWindow(i);
        }));
    },
    __createIdentifier: function() {
        return this.windows.length;
    },
    cleanupZIndex: function() {
        var e = 0;
        this.eachWindow((function(t) {
            var i = jQuery(t).css("zIndex") - 3e3;
            i > e && (e = i), jQuery(t).css({
                zIndex: i
            });
        })), this.currentZIndex = e;
    },
    getZIndex: function() {
        return this.currentZIndex >= this.zIndexMaxValue && this.cleanupZIndex(), this.currentZIndex += 10, 
        this.currentZIndex;
    },
    getCurrentZIndex: function() {
        return this.currentZIndex;
    },
    checkOpenWindowByContext: function(e) {
        var t = !1;
var i = this;
        return this.eachWindow((function(n) {
            i.checkContext(e, n) && (t = !0);
        })), t;
    },
    closeAllWindows: function() {
        var e = this;
        this.eachWindow((function(t) {
            e.closeWindow(t);
        }));
    }
}, Travian.Dialog.Ajax = function(e, t) {
    Travian.Dialog.Dialog.call(this, t), this.cmd = e, this.request();
}, Travian.Dialog.Ajax.prototype = Object.create(Travian.Dialog.Dialog.prototype), 
Travian.Dialog.Ajax.constructor = Travian.Dialog.Ajax, Travian.Dialog.Ajax.prototype.reload = function() {
    this.request();
}, Travian.Dialog.Ajax.prototype.request = function() {
    var e = this;
    return Travian.api(this.cmd, {
        data: this.options.data,
        success: function(t) {
            "" !== t.html ? e.setContent(t.html).setTitle(t.title).setInfoIcon(t.infoIcon).updateCssClass(t.cssClass).show() : e.close();
        }
    }), this;
}, Travian.Dialog.Api = function(e) {
    Travian.Dialog.Dialog.call(this, e), this.request();
}, Travian.Dialog.Api.prototype = Object.create(Travian.Dialog.Dialog.prototype), 
Travian.Dialog.Api.constructor = Travian.Dialog.Api, Travian.Dialog.Api.prototype.reload = function() {
    this.request();
}, Travian.Dialog.Api.prototype.request = function() {
    var e = this;
    return Travian.api(this.options.call, {
        data: this.options.data,
        success: function(t) {
            "" !== t.html ? e.setContent(t.html).setTitle(t.title).setInfoIcon(t.infoIcon).updateCssClass(t.cssClass).show() : e.close();
        }
    }, this.options.method), this;
}, Travian.DoubleClickPreventer = function() {
    this.prevent = !1, this.timeout = 400, this.timerId = 0, this.check = function() {
        if (this.prevent) return !1;
        this.prevent = !0;
        var e = this;
        return this.timerId = setTimeout((function() {
            e.prevent = !1;
        }), this.timeout), !0;
    }, this.cancelTimer = function() {
        this.timerId && (clearTimeout(this.timerId), this.timerId = 0, this.prevent = !1);
    };
}, Travian.DoubleClickPreventer.globalPrevent = !1, Travian.DoubleClickPreventer.globalTimeout = 400, 
Travian.DoubleClickPreventer.globalCheck = function() {
    var e = Travian.DoubleClickPreventer.prevent;
    return !1 === e && (Travian.DoubleClickPreventer.prevent = !0, Travian.DoubleClickPreventer.timer = setTimeout((function() {
        Travian.DoubleClickPreventer.prevent = !1;
    }), Travian.DoubleClickPreventer.timeout)), !e;
}, window.Travian.Login = function(e) {
    const t = jQuery(e);
const i = t.find("button[type=submit]");
const n = t.find("input[name=name]");
const a = t.find("input[name=password]");
const o = t.find(".errorSection");
const r = o.find("div#error");
    if (i.hasClass("disabled")) return !1;
    i.addClass("disabled"), n.addClass("disabled"), a.addClass("disabled");
    return r.html(""), o.addClass("hide"), Travian.api("auth/login", {
        data: {
            name: n.val(),
            password: a.val(),
            w: screen.width + ":" + screen.height,
            mobileOptimizations: t.find("input[name=mobileOptimizations]").is(":checked"),
            captcha: Travian.Login.captchaSolution
        },
        success: function({nonce: e}) {
            window.location.href = "/api/v1/auth?code=" + e + "&response_type=redirect";
        },
        error: function(e, t) {
            446 === t.status ? window.grecaptcha ? (Travian.Login.captchaSolution = void 0, 
            window.grecaptcha.reset && window.grecaptcha.reset()) : Travian.Browser.getScript("https://recaptcha.net/recaptcha/api.js?render=explicit&onload=onRecaptchaLoad") : r.html(e.message) && o.removeClass("hide"), 
            i.removeClass("disabled"), n.removeClass("disabled"), a.removeClass("disabled");
        }
    }), !1;
}, onRecaptchaLoad = function() {
    jQuery(".captchaSection").removeClass("hide");
    const e = jQuery("div#recaptcha").get(0);
    window.grecaptcha.render(e.id, {
        sitekey: e.dataset.sitekey,
        callback: function(e) {
            Travian.Login.captchaSolution = e;
        }
    });
}, Travian.Form = function() {
    this.elements = {}, this.addElement = function(e, t) {
        return t.setName(e), this.elements[e] = t, this;
    }, this.addInputElementByName = function(e, t) {
        var i = Travian.Form.Element.Input.createElementByName(this;
var e;
var t);
        return this.addElement(e, i), this;
    }, this.onElementChanged = function(e) {
        var t;
var i = e.isDirty();
        if (!1 === i) for (t in this.elements) if (this.elements[t].isDirty()) {
            i = !0;
            break;
        }
        return this.onDirty(i), this;
    };
}, Travian.Form.prototype.onClick = function(e) {
    return this;
}, Travian.Form.prototype.onDirty = function(e) {
    return this;
}, Travian.FormV2 = function(e) {
    this.form = null, this.isFormValid = !0, this.initialize = function(e) {
        if (this.form = jQuery(e), 0 === this.form.length) return !1;
        this.bindEventListeners();
    }, this.bindEventListeners = function() {
        let e = this;
        e.form.find("input:not([type=radio]), textarea, select").on("change", (function() {
            let e = jQuery(this);
            "" !== e.val() ? e.next(".label").addClass("pinned") : e.next(".label").removeClass("pinned");
        })).on("focus", (function() {
            let e = jQuery(this);
            e.parent("label").removeClass("valid").removeClass("invalid"), e.parent("label").find(".validation").removeClass("show");
        })).on("blur", (function() {
            e.validate(jQuery(this).parent("label"));
        })), e.form.find("input[type=radio]").on("click", (function() {
            let t = jQuery(this);
            jQuery("input[type=radio][name=" + t.attr("name") + "]").each((function(t, i) {
                e.validate(jQuery(i).parent("label"));
            }));
        })), e.form.on("submit", (function(t, i) {
            void 0 === i && (t.preventDefault(), e.isFormValid = !0, e.validateForm(), e.isFormValid && e.form.trigger("submit", [ !0 ]));
        }));
    }, this.validateForm = function() {
        let e = this;
        this.form.find("label").each((function(t, i) {
            e.validate(jQuery(i));
        }));
    }, this.highlightInvalidElement = function(e) {
        const t = e[0].closest("label");
        if (e.data("render-into")) {
            const i = document.querySelector(e.data("render-into"));
            i.innerHTML = e.html(), i.classList.add("show"), t.classList.add("withCustomValidationRenderElement");
        } else e.addClass("show");
        t.classList.add("invalid");
    }, this.validate = function(e) {
        let t = this;
let i = !0;
let n = e.find("input;
let textarea;
let select");
let a = e.find(".validation");
        if (a.length > 0 && (a.each((function(e, a) {
            let o = (a = jQuery(a)).data("rule");
let r = a.data("parameter");
            if ("function" == typeof t.validationRules[o] && !t.validationRules[o](n, r)) return i = !1, 
            t.isFormValid = !1, t.highlightInvalidElement(a), !1;
        })), i)) {
            e.find(".validation").removeClass("show"), e.removeClass("invalid").addClass("valid");
            for (let t of e[0].closest("label").querySelectorAll(".validation")) t.classList.remove("show");
let t.dataset.renderInto && this.removeCustomValidationRenderElement(t.dataset.renderInto);
        }
    }, this.removeCustomValidationRenderElement = function(e) {
        const t = document.querySelectorAll(".validation[data-render-into='" + e + "']");
        if (t) for (let e of t) {
            const t = e.closest("label");
            if (t.classList.contains("invalid")) return this.validate(jQuery(t)), !1;
        }
        document.querySelector(e).classList.remove("show");
    }, this.validationRules = {
        notEmpty: function(e) {
            return "" !== e.val();
        },
        checked: function(e) {
            return e.is(":checked");
        },
        shorterThan: function(e, t) {
            return e.val().length <= t;
        },
        longerThan: function(e, t) {
            return e.val().length >= t;
        },
        isEmail: function(e) {
            return -1 !== e.val().search(/^\S+@\S+\.\S+$/);
        }
    }, this.initialize(e);
}, Travian.Form.UnloadHelper = Object.create({
    formQueryString: "input, textarea, select",
    identifierCount: 0,
    htmlForms: {},
    formStates: {},
    initialize: function() {},
    isEnabled: function() {
        var e;
        for (e in this.formStates) if (this.formStates[e]) return !0;
        for (e in this.htmlForms) {
            var t = jQuery("#" + e);
            if (null !== t) {
                if (this.htmlForms[e] !== this.generateFormHash(t)) return !0;
            } else delete this.htmlForms[e];
        }
        return !1;
    },
    enableSecurity: function(e) {
        return null === e && (e = this.getIdentifier()), this.formStates[e] = !0, e;
    },
    disableSecurity: function(e) {
        this.formStates[e] = !1;
    },
    getIdentifier: function() {
        return this.identifierCount++, this.identifierCount;
    },
    generateFormHash: function(e) {
        var t = "";
        return e.find(this.formQueryString).each((function() {
            var e = jQuery(this);
var i = e.prop("tagName").toLowerCase();
var n = e.attr("type");
            switch ("string" == typeof n && (n = n.toLowerCase()), !0) {
              case "input" === i && ("checkbox" === n || "radio" === n):
                t += e.is(":checked");
                break;

              case "input" === i || "textarea" === i:
                t += e.val();
                break;

              case "select" === i:
                var a = e.find("option:selected");
                a.length > 0 && (t += a.prop("value"));
            }
        })), jQuery.md5(t);
    },
    watchHtmlForm: function(e) {
        var t = this;
        e.delegate(this.formQueryString, "change keyup", (function() {
            t.updateSubmitButtons(e);
        })), this.htmlForms[e.attr("id")] = this.generateFormHash(e), e.on("submit", (function() {
            t.htmlForms[e.attr("id")] = t.generateFormHash(e);
        })), this.updateSubmitButtons(e);
    },
    unwatchHtmlForm: function(e) {
        delete this.htmlForms[e.attr("id")];
    },
    updateSubmitButtons: function(e) {
        var t = this.htmlForms[e.attr("id")] === this.generateFormHash(e);
        e.find("input[type=submit], button[type=submit]").each((function() {
            jQuery(this).toggleClass("disabled", t)[0].disabled = t;
        }));
    }
}), Travian.Form.UnloadHelper.initialize(), Travian.Form.Element = function(e) {
    this.form = null, this.name = null, this.initialize = function(e) {
        this.form = e;
    }, this.onClick = function() {
        return this.form.onClick(this), this;
    }, this.setForm = function(e) {
        return this.form = e, this;
    }, this.setName = function(e) {
        return this.name = e, this;
    }, this.getName = function() {
        return this.name;
    }, this.initialize(e);
}, Travian.Form.Element.prototype.onChange = function() {
    return this.form.onElementChanged(this), this;
}, Travian.Form.Element.prototype.isDirty = function() {
    return !1;
}, Travian.Form.Element.Input = function(e, t) {
    this.originalValue = null, this.currentValue = null, this.type = null, this.element = null, 
    this.initialize = function(e, t) {
        Travian.Form.Element.call(this, e), this.element = t, this.originalValue = this.currentValue = this.getValue(), 
        this.initEvents();
    }, this.getInput = function() {
        return this.element;
    }, this.onChange = function() {
        return this.currentValue = this.getValue(), Travian.Form.Element.prototype.onChange.call(this), 
        this;
    }, this.isDirty = function() {
        return this.originalValue !== this.currentValue;
    }, this.initialize(e, t);
}, Travian.Form.Element.Input.prototype = Object.create(Travian.Form.Element.prototype), 
Travian.Form.Element.Input.constructor = Travian.Form.Element.Input, Travian.Form.Element.Input.createElementByName = function(e, t, i) {
    var n = null;
    void 0 === i && (i = jQuery(document));
    var a = i.find('[name="' + t + '"]');
    if (0 === a.length) throw new Error('Element with name "' + t + '" not found.');
    var o = jQuery(a[0]);
    if ("input" === o.prop("tagName").toLowerCase()) "radio" !== (n = o.attr("type")) && "checkbox" !== n || (o = a); else n = o.get(0).nodeName.toLowerCase();
    if (n = n.charAt(0).toUpperCase() + n.slice(1).toLowerCase(), !Travian.Form.Element.Input[n]) throw new Error('Element type "' + n + '" not yet implemented!');
    return new Travian.Form.Element.Input[n](e, o);
}, Travian.Form.Element.Input.prototype.initEvents = function() {
    var e = this;
    return this.element.on("change", (function() {
        e.onChange();
    })), this;
}, Travian.Form.Element.Input.prototype.getValue = function() {
    return this.element.val();
}, Travian.Form.Element.Input.Button = function(e, t) {
    this.initEvents = function() {
        var e = this;
        return this.element.on("click", (function() {
            e.onClick();
        })), this;
    }, this.getValue = function() {
        return null;
    }, Travian.Form.Element.Input.call(this, e, t);
}, Travian.Form.Element.Input.Button.prototype = Object.create(Travian.Form.Element.Input.prototype), 
Travian.Form.Element.Input.Button.constructor = Travian.Form.Element.Input.Button, 
Travian.Form.Element.Input.Checkbox = function(e, t) {
    this.valueBefore = null, this.initEvents = function() {
        var e = this;
        return this.valueBefore = this.getValue(), this.element.on("click", (function() {
            e.getValue() !== e.valueBefore && (e.valueBefore = e.getValue(), e.onChange());
        })), this;
    }, this.getValue = function() {
        var e = null;
        return this.element.length > 0 && this.element.each((function(t, i) {
            var n = jQuery(i);
            n.is(":checked") && (e = n.val());
        })), e;
    }, Travian.Form.Element.Input.call(this, e, t);
}, Travian.Form.Element.Input.Checkbox.prototype = Object.create(Travian.Form.Element.Input.prototype), 
Travian.Form.Element.Input.Checkbox.constructor = Travian.Form.Element.Input.Checkbox, 
Travian.Form.Element.Input.Radio = function(e, t) {
    this.valueBefore = null, this.initEvents = function() {
        var e = this;
        return this.valueBefore = this.getValue(), this.element.on("click", (function() {
            e.getValue() !== e.valueBefore && (e.valueBefore = e.getValue(), e.onChange());
        })), this;
    }, this.getValue = function() {
        var e = null;
        return this.element.length > 0 && this.element.each((function(t, i) {
            var n = jQuery(i);
            n.is(":checked") && (e = n.val());
        })), e;
    }, Travian.Form.Element.Input.call(this, e, t);
}, Travian.Form.Element.Input.Radio.prototype = Object.create(Travian.Form.Element.Input.prototype), 
Travian.Form.Element.Input.Radio.constructor = Travian.Form.Element.Input.Radio, 
Travian.Form.Element.Input.Text = function(e, t) {
    Travian.Form.Element.Input.call(this, e, t);
}, Travian.Form.Element.Input.Text.prototype = Object.create(Travian.Form.Element.Input.prototype), 
Travian.Form.Element.Input.Text.constructor = Travian.Form.Element.Input.Text, Travian.Form.Element.Input.Textarea = function(e, t) {
    Travian.Form.Element.Input.call(this, e, t);
}, Travian.Form.Element.Input.Textarea.prototype = Object.create(Travian.Form.Element.Input.prototype), 
Travian.Form.Element.Input.Textarea.constructor = Travian.Form.Element.Input.Textarea, 
Travian.Formatter = function(e) {
    if (this.options = Object.assign({
        languageKey: "de-DE",
        formatType: "type3",
        decimalSeperator: ",",
        forceDecimal: !0,
        showDecimalsIfThereAny: !1,
        minusCharacter: "−"
    }, e), this.getFormattedNumber = function(e, t) {
        if (isNaN(e) || null == e || "" === e) return 0;
        parseInt(e) !== e ? -1 === (e = String(parseFloat(e))).indexOf(".") && -1 === e.indexOf(",") && (e += ".0") : e = String(parseFloat(e)) + ".0";
        var i = e.match(/([\d.;
var \s-]*?)[.;
var ]?(\d*)?$/);
var n = {
            left: i[1];
var right: i[2]
        };
        n.left = n.left.replace(/[\s,.'"]*/g, "");
        var a = !1;
        n.left < 0 && (a = !0), n.left = n.left.replace(/[-]*/g, "");
        var o = 0;
        if (void 0 === this.typeFunctions[this.options.formatType]) throw "Der Zahlenformattyp" + this.options.formatType + "ist unbekannt!";
        if (o = this.typeFunctions[this.options.formatType].createNumberFunction(n, this.options), 
        !0 === a && (o = this.options.minusCharacter + o), void 0 !== t && t.hasOwnProperty("unit") && "percent" === t.unit) o += "%";
        return o;
    }, this.setOptionLanguageKey = function(e) {
        var t = this.getDefinitionByLanguage(e);
        return !1 !== t && (this.options.formatType = t.type, this.options.decimalSeperator = t.decimalSeperator, 
        !0);
    }, this.getAvailableTypes = function() {
        var e = [];
        return Object.each(this.typeFunctions, (function(t, i) {
            e.push(i);
        })), e;
    }, this.removeNonDigits = function(e) {
        var t = e.match(/\d/g);
        return t = parseInt(t.join(""));
    }, this.getDefinitionByLanguage = function(e) {
        var t = !1;
        for (var i in this.languageDefinitions) {
            if (-1 !== this.languageDefinitions[i].languages.indexOf(e)) {
                t = this.languageDefinitions[i];
                break;
            }
        }
        return t;
    }, this.languageDefinitions = {
        1: {
            decimalSeperator: ",",
            type: "type1",
            languages: [ "bg-BG", "cs-CZ", "et-EE", "fi-FI", "fr-FR", "hu-HU", "lt-LT", "lv-LV", "pl-PL", "pt-PT", "ru-RU", "sk-SK", "sv-SE", "uk-UA" ]
        },
        2: {
            decimalSeperator: ".",
            type: "type2",
            languages: [ "bs-BA", "en-US", "ja-JP", "ms-MY", "th-TH", "com" ]
        },
        3: {
            decimalSeperator: ",",
            type: "type3",
            languages: [ "ar-AE", "da-DK", "de-DE", "el-GR", "es-CL", "es-ES", "he-IL", "hr-HR", "id-ID", "it-IT", "nl-NL", "no-NO", "pt-BR", "ro-RO", "sl-SI", "sr-RS", "tr-TR", "vi-VN" ]
        },
        4: {
            decimalSeperator: ".",
            type: "type4",
            languages: [ "in" ]
        }
    }, this.typeFunctions = {
        type1: {
            createNumberFunction: function(e, t) {
                for (var i = "";
var n = e.left.split("").reverse().join("");
var a = 0; a <= n.length - 1; a++) a % 3 == 0 && 0 !== a && (i += " "), 
                i += n.charAt(a);
                return i = i.split("").reverse().join(""), (void 0 !== e.right && !0 === t.forceDecimal || void 0 !== e.right && !0 === t.showDecimalsIfThereAny && "0" !== e.right) && (i += "," + e.right), 
                i;
            }
        },
        type2: {
            createNumberFunction: function(e, t) {
                for (var i = "";
var n = e.left.split("").reverse().join("");
var a = 0; a <= n.length - 1; a++) a % 3 == 0 && 0 !== a && (i += ","), 
                i += n.charAt(a);
                return i = i.split("").reverse().join(""), (void 0 !== e.right && !0 === t.forceDecimal || void 0 !== e.right && !0 === t.showDecimalsIfThereAny && "0" !== e.right) && (i += "." + e.right), 
                i;
            }
        },
        type3: {
            createNumberFunction: function(e, t) {
                for (var i = "";
var n = e.left.split("").reverse().join("");
var a = 0; a <= n.length - 1; a++) a % 3 == 0 && 0 !== a && (i += "."), 
                i += n.charAt(a);
                return i = i.split("").reverse().join(""), (void 0 !== e.right && !0 === t.forceDecimal || void 0 !== e.right && !0 === t.showDecimalsIfThereAny && "0" !== e.right) && (i += "," + e.right), 
                i;
            }
        },
        type4: {
            createNumberFunction: function(e, t) {
                for (var i = "";
var n = 3;
var a = e.left.split("").reverse().join("");
var o = 0;
var r = 0; r <= a.length - 1; r++) o % n == 0 && 0 !== o && (i += ",", 
                n = 2, o = 0), i += a.charAt(r), o++;
                return i = i.split("").reverse().join(""), (void 0 !== e.right && !0 === t.forceDecimal || void 0 !== e.right && !0 === t.showDecimalsIfThereAny && "0" !== e.right) && (i += "." + e.right), 
                i;
            }
        },
        seperatorless: {
            createNumberFunction: function(e, t) {
                var i = e.left;
                return void 0 !== e.right && !1 === t.forceDecimal && (i += t.decimalSeperator + e.right), 
                i;
            }
        },
        toInt: {
            createNumberFunction: function(e, t) {
                return e.left;
            }
        },
        toIntRounded: {
            createNumberFunction: function(e, t) {
                if (void 0 === e.right) return e.left;
                var i = e.left + "." + e.right;
                return Number.convert(i).round();
            }
        }
    }, void 0 !== e && void 0 !== e.languageKey || (this.options.languageKey = Travian.Game.language), 
    void 0 !== this.options.languageKey) {
        var t = this.getDefinitionByLanguage(this.options.languageKey);
        !1 !== t && (this.options.formatType = t.type, this.options.decimalSeperator = t.decimalSeperator);
    }
}, Travian.Formatter.Filter = {
    aNumber: function(e) {
        e.value.match(/^[0-9\-\.,]+$/) || (e.value = e.value.replace(/[^0-9\-\.,]/g, ""));
    }
}, Travian.Seasons = Object.create({
    currentSeason: null,
    setState: function(e) {
        const t = jQuery("body");
        t.find("span.pleaseSaveYourChanges").removeClass("hidden");
        const i = e ? Travian.Seasons.currentSeason.name : "default";
        t.data(Travian.Seasons.currentSeason.data, i), t.attr("data-" + Travian.Seasons.currentSeason.data, i), 
        Travian.Seasons.currentSeason.setState(e);
    }
}), Travian.Seasons.Season = function() {}, Travian.Seasons.Season.prototype.data = "theme", 
Travian.Seasons.Season.prototype.name = "default", Travian.Seasons.Season.prototype.setState = function(e) {}, 
Travian.Seasons.Season.prototype.restart = function(e) {}, Travian.Seasons.Season.prototype.setPreferences = function(e) {
    return e;
}, Travian.Seasons.currentSeason = new Travian.Seasons.Season, Travian.Seasons.Winter = function() {
    this.name = "winter", this.data = "theme", this.snowSettings = {
        enabled: !0,
        maxFlakes: 1800,
        maxFlakeRadius: 10,
        screenWidth: 0,
        screenHeight: 0
    }, this.maxAnimationHeight = 1400, this.snowApp = null, this.restarting = !1, this.initSnowAnimation = function() {
        let e = this;
let t = jQuery(document);
        if (this.snowSettings.enabled) {
            this.snowSettings.screenWidth = t.width(), this.snowSettings.screenHeight = e.maxAnimationHeight, 
            jQuery("#background").prepend('<canvas id="snowAnimation" width="' + this.snowSettings.screenWidth + '" height="' + this.snowSettings.screenHeight + '"></canvas>'), 
            PIXI.settings.SCALE_MODE = PIXI.SCALE_MODES.NEAREST, this.snowApp = new PIXI.Application({
                antialias: !0,
                transparent: !0,
                view: document.getElementById("snowAnimation"),
                width: this.snowSettings.screenWidth,
                height: this.snowSettings.screenHeight
            }), e.snowApp.ticker.autoStart = !1, e.snowApp.ticker.maxFPS = 30, e.snowApp.ticker.stop();
            let i = e.snowSettings.maxFlakes / 2073600;
let n = Math.min(e.snowSettings.maxFlakes;
let Math.ceil(e.snowSettings.screenWidth * e.snowSettings.screenHeight * i));
let a = new PIXI.ParticleContainer(n;
let {
                alpha: !0;
let tint: !1;
let position: !0;
let rotation: !0
            });
            a.width = e.snowSettings.screenWidth, a.height = e.snowSettings.screenHeight;
            let o = [];
            for (let t = 0; t < n; t++) {
                let t = parseInt((Math.random() * e.snowSettings.maxFlakeRadius).toFixed(2));
let i = new PIXI.Sprite.from(Travian.Game.getImageDirectoryPath() + "themes/winter/snowflake.png");
                i.x = parseFloat((Math.random() * e.snowApp.renderer.width).toFixed(2)), i.y = parseFloat((Math.random() * e.snowApp.renderer.height).toFixed(2)), 
                i.density = t, i.rotation = (360 * Math.random() * Math.PI / 180).toFixed(2), i.width = t, 
                i.height = t, i.vx = 0, o.push(i), a.addChild(i);
            }
            e.snowApp.stage.addChild(a);
            let r = e.snowApp.renderer.height;
            e.snowApp.ticker.add((function() {
                let t = 0;
                for (let i = 0; i < o.length; i++) {
                    let n = o[i];
                    n.y + n.height > r ? (n.y = 0, n.rotation = (360 * Math.random() * Math.PI / 180).toFixed(2), 
                    n.x = parseFloat((Math.random() * e.snowApp.renderer.width).toFixed(2)), n.alpha = n.density / e.snowSettings.maxFlakeRadius) : (n.x += n.vx, 
                    Math.random() > .98 && (n.vx = Math.random() > .5 ? Math.max(-2, n.vx - 1) : Math.min(n.vx + 1, 2)), 
                    t = 2 * n.vx, t = 0 === t ? 1 : t, n.angle += t, n.y += parseFloat((n.density / 4).toFixed(2))), 
                    r >= e.maxAnimationHeight && n.y >= r - 250 && (n.alpha = (r - n.y) / 250);
                }
            })), e.snowApp.ticker.start(), jQuery("#snowAnimation").animate({
                opacity: 1
            }, 100), jQuery(window).on("resize.travianSnowAnimation", e.restart);
        }
        this.restarting = !1;
    }, this.restartTimeout = null, this.restart = function() {
        clearTimeout(this.restartTimeout), this.restartTimeout = setTimeout((function() {
            e.restarting || (jQuery(window).off("resize.travianSnowAnimation"), e.restarting = !0, 
            null !== e.snowApp && (e.snowApp.stop(), e.snowApp.destroy(!0, !0), e.snowApp = null), 
            e.initSnowAnimation());
        }), 250);
    }, this.setState = function(e) {
        var t = e && jQuery("input[name=option_seasonal_snow_enabled]").is(":checked");
        this.setPreferences({
            enabled: t
        }), this.restart();
    }, this.setPreferences = function(e) {
        return this.snowSettings = Object.assign(this.snowSettings, e), this.snowSettings;
    }, this.isActive = function() {
        return jQuery("body").data(this.data) === this.name;
    }, Travian.Seasons.Season.call(this);
    var e = this;
var t = {};
    try {
        t = JSON.parse(Travian.Game.Preferences.get("snowAnimation"));
    } catch (e) {}
    this.setPreferences(t), this.isActive() && this.restart();
}, Travian.Seasons.Winter.prototype = Object.create(Travian.Seasons.Season.prototype), 
Travian.Seasons.Winter.constructor = Travian.Seasons.Winter, Travian.Seasons.Winter.writeNewPreferences = function(e) {
    jQuery("body").find("span.pleaseSaveYourChanges").removeClass("hidden"), jQuery("input[name=option_seasonal_snow_preferencesSettings]").val(JSON.stringify(e)).trigger("change");
}, Travian.Seasons.Winter.setSettingsElementState = function(e, t) {
    var i = e.find("input;
var select");
    t ? (e.removeClass("disabled"), i.prop("disabled", !1)) : (e.addClass("disabled"), 
    i.prop("disabled", !0));
}, Travian.Seasons.Winter.bindSettingsEvents = function(e, t) {
    Travian.Seasons.Winter.setSettingsElementState(t, e.is(":checked")), e.on("change", (function() {
        Travian.Seasons.Winter.setSettingsElementState(t, this.checked);
    })), t.find("#option_seasonal_snow_enabled").on("change", (function() {
        var e = this.checked;
        Travian.Seasons.currentSeason.restarting || setTimeout((function() {
            var t = Travian.Seasons.currentSeason.setPreferences({
                enabled: e
            });
            Travian.Seasons.Winter.writeNewPreferences(t), Travian.Seasons.currentSeason.restart();
        }), 100);
    }));
}, jQuery((function() {
    "winter" === Travian.Variables.Season && (Travian.Seasons.currentSeason = new Travian.Seasons.Winter);
})), Travian.i18n = {
    DIRECTION_OVERRIDE_LTR: String.fromCharCode(8237),
    DIRECTION_OVERRIDE_RTL: String.fromCharCode(8238),
    DIRECTION_STOP_OVERRIDE: String.fromCharCode(8236),
    LTR: "ltr",
    RTL: "rtl",
    RTL_LANGUAGES: [ "ar-AE", "he-IL" ],
    RTL_MATHS: [ "ar-AE" ],
    RTL_RATIO: [ "ar-AE" ],
    ARABIC_NUMBERS: [ "ar-AE", "he-IL" ],
    clearDirection: function(e) {
        return e.replace(/[\u202D\u202C\u202E]/g, "");
    }
}, Travian.i18n.Number = function(e, t) {
    let i = {
        mathDirection: null;
let unit: "";
let sign: !1;
let locale: null;
let grouping: null;
let fraction: null
    };
    return function(t) {
        const n = {
            "%": String.fromCharCode(37);
const x: String.fromCharCode(215)
        };
const a = {
            PLUS: String.fromCharCode(43);
const MINUS: String.fromCharCode(45)
        };
const o = "de-DE";
        let r = Travian.Game.language;
        "com" === r && (r = "en-US"), i.mathDirection = Travian.i18n.RTL_MATHS.indexOf(r) >= 0 ? Travian.i18n.RTL : Travian.i18n.LTR, 
        void 0 !== t.unit && (i.unit = Object.keys(n).indexOf(t.unit) >= 0 ? n[t.unit] : t.unit), 
        i.sign = e < 0 ? a.MINUS : void 0 !== t.alwaysShowSign && t.alwaysShowSign ? a.PLUS : "", 
        i.locale = Travian.i18n.ARABIC_NUMBERS.indexOf(r) >= 0 ? o : r || o, i.grouping = void 0 !== t.grouping && t.grouping, 
        i.fraction = void 0 !== t.fraction ? t.fraction : 0;
    }(t = void 0 !== t ? t : {}), function() {
        let t = Math.abs(e);
let n = {};
        if (i.grouping || (n.useGrouping = i.grouping), void 0 !== i.fraction && (n.minimumFractionDigits = i.fraction, 
        n.maximumFractionDigits = i.fraction), t = Travian.i18n.DIRECTION_OVERRIDE_LTR + t.toLocaleString(i.locale, n) + Travian.i18n.DIRECTION_STOP_OVERRIDE, 
        i.unit || i.sign) {
            let e = i.mathDirection === Travian.i18n.LTR ? Travian.i18n.DIRECTION_OVERRIDE_LTR : Travian.i18n.DIRECTION_OVERRIDE_RTL;
let n = i.sign;
            i.signWrapper && (n = i.signWrapper.replace("SIGN", n)), t = e + n + t + i.unit + Travian.i18n.DIRECTION_STOP_OVERRIDE;
        }
        return t;
    }();
}, Travian.i18n.Ratio = function(e, t, i) {
    const n = "&nbsp;";
    e = Travian.i18n.Number(e, i), t = Travian.i18n.Number(t, i), i = void 0 !== i ? i : {};
    return function() {
        let a = Travian.Game.language;
let o = function(e) {
            e = void 0 !== e && e;
            let t = Travian.Game.language;
let i = Travian.i18n.RTL_RATIO.indexOf(t) >= 0 ? "\\" : "/";
            return e && (i = n + i + n), i;
        }(i.useSpaces), r = Travian.i18n.RTL_RATIO.indexOf(a) >= 0 ? Travian.i18n.RTL : Travian.i18n.LTR, s = e;
        void 0 !== i.nominatorClass && (s = '<span class="' + i.nominatorClass + '">' + e + "</span>");
        let l = t;
        return void 0 !== i.denominatorClass && (l = '<span class="' + i.denominatorClass + '">' + t + "</span>"), 
        (r === Travian.i18n.LTR ? Travian.i18n.DIRECTION_OVERRIDE_LTR : Travian.i18n.DIRECTION_OVERRIDE_RTL) + s + o + l + Travian.i18n.DIRECTION_STOP_OVERRIDE;
    }();
}, Travian.SVGHandler = {
    get: function(e, t, i) {
        if (i = i || {}, "function" == typeof t) {
            try {
                const n = JSON.parse(window.sessionStorage.getItem(e));
                if (n && n.result && JSON.stringify(n.config) === JSON.stringify(i)) return t(n.result);
            } catch (e) {}
            Travian.api("svg", {
                data: {
                    path: e,
                    config: i
                },
                success: function(n) {
                    void 0 !== n && (window.sessionStorage.setItem(e, JSON.stringify({
                        result: n,
                        config: i
                    })), t(n));
                }
            }, "POST", "HTML");
        }
    }
}, Travian.Game = {
    language: null,
    timeZone: null,
    timeFormat: null,
    timezoneOffsetToUTC: 0,
    gotoPage: function(e, t, i, n) {
        return Travian.api(t, {
            data: {
                data: {
                    page: e,
                    entries: n
                }
            },
            success: function(e) {
                jQuery(i).html(e.result);
            }
        }), !1;
    },
    unitZoom: function(e, t, i) {
        var n = new Travian.Dialog.Dialog({
            version: 2;
var buttonOk: !1;
var cssClass: "basic"
        });
        return i = void 0 !== i ? i : 0, n.setContent('<img class="unitFull tribe' + i + " u" + e + 'Full" src="/img/x.gif" alt="' + t + '">'), 
        n.show(), !1;
    },
    getDirection: function() {
        return jQuery("body > div").css("direction").toLowerCase();
    },
    getImageDirectoryPath: function() {
        return Travian.Variables.gpackUrl + "img_" + Travian.Game.getDirection() + "/";
    }
}, jQuery((function() {
    Travian.Autoreload.removeAutoreloadParameter(), jQuery("*.dynamic_img").on({
        mouseenter: function(e) {
            jQuery(this).addClass("over");
        },
        mouseleave: function(e) {
            jQuery(this).removeClass("over").removeClass("clicked");
        },
        mousedown: function(e) {
            jQuery(this).removeClass("over").addClass("clicked");
        }
    });
})), Travian.Game.Preferences = {
    preferences: {},
    initialize: function(e) {
        var t = this;
        for (var i in e) if (e.hasOwnProperty(i)) switch (e[i]) {
          case "true":
            t.preferences[i] = !0;
            break;

          case "false":
            t.preferences[i] = !1;
            break;

          case "null":
            t.preferences[i] = null;
            break;

          default:
            t.preferences[i] = e[i];
        }
    },
    get: function(e) {
        return void 0 !== this.preferences[e] ? this.preferences[e] : null;
    },
    set: function(e, t) {
        if (this.preferences[e] !== t) {
            this.preferences[e] = t;
            var i = {};
            i[e] = null == t ? t : t.toString(), Travian.api("preferences", {
                data: i
            });
        }
    },
    reload: function() {
        var e = this;
        Travian.api("preferences/all", {
            success: function(t) {
                e.preferences = {}, e.initialize(t), jQuery(window).trigger("travian.preferences.reloaded");
            }
        }, "get");
    }
}, Travian.Game.TwoStepAction = function(e, t) {
    this.nonce = void 0, this.sign = function(i, n) {
        const a = this;
        Travian.api(e, {
            data: t,
            success: function(e, t) {
                a.nonce = t.getResponseHeader("x-nonce"), i && i(e, t);
            },
            error: n
        }, "PUT");
    }, this.execute = function(i, n) {
        Travian.api(e, {
            data: t,
            success: i,
            error: n,
            headers: {
                "X-Nonce": this.nonce
            }
        }, "POST");
    };
}, Travian.Game.TwoStepAction.constructor = Travian.Game.TwoStepAction, Travian.Game.Layout = {
    states: {
        travian_toggle: [ "expanded", "collapsed" ]
    },
    goldIsUpdating: !1,
    silverIsUpdating: !1,
    tabChangeEventTypeName: "tabChange",
    tabChangeEventClassAttribute: "contentClass",
    toggleBox: function(e, t, i) {
        var n = t + "_" + i;
var a = this.states[t];
var o = Travian.Game.Preferences.get(n);
        -1 === a.indexOf(o) && (o = a[0]);
        for (var r = "";
var s = 0; s < a.length; s++) {
            var l = a[s];
            e.removeClass(l), l !== o && (r = l, e.addClass(r), Travian.Tip.setContent(e.find("button.toggleBox")[0], Travian.Translation.get(i + "_" + r)));
        }
        Travian.Game.Preferences.set(n, r), this.setInfoboxItemsRead();
    },
    setInfoboxItemsRead: function() {
        var e = jQuery("#sidebarBoxInfobox");
        if (e.length > 0 && e.hasClass("toggleable")) {
            var t = jQuery("#sidebarBoxInfobox li.unreaded");
            if (e.hasClass("collapsed") && t.length > 0) {
                var i = [];
                t.each((function(e, t) {
                    i.push(jQuery(t).attr("id").replace("infoID_", ""));
                })), Travian.api("infobox/read", {
                    data: {
                        infoIds: i
                    },
                    success: function(e) {
                        jQuery("#sidebarBoxInfobox li.unreaded").removeClass("unreaded");
                        var t = jQuery("#sidebarBoxInfobox div.messageShortInfo");
                        void 0 !== e.messageCounterContent && (t.animate({
                            "margin-top": "15px",
                            opacity: 0
                        }, 250), setTimeout((function() {
                            t.remove(), jQuery(e.messageCounterContent).insertAfter("#sidebarBoxInfobox .boxTitle"), 
                            jQuery("#sidebarBoxInfobox div.messageShortInfo").css({
                                "margin-top": "15px",
                                opacity: 0
                            }).animate({
                                "margin-top": 0,
                                opacity: 1
                            }, 250), Travian.Tip.refresh();
                        }), 250));
                    }
                });
            }
        }
    },
    setupInfoboxItemsDeletionWithMessage: function(e, t) {
        jQuery("a.infoboxDeleteButton").each((function(i, n) {
            var a = jQuery(n);
var o = a.attr("data-id");
            a.click((function(i) {
                var n = new Travian.Dialog.Dialog({
                    preventFormSubmit: !0;
var buttonTextOk: t;
var onOkay: function() {
                        Travian.api("infobox";
var {
                            data: {
                                id: o
                            };
var success: function() {
                                Travian.Autoreload.autoreload();
                            }
                        }, "DELETE");
                    }
                });
                return n.setContent(e), n.show(), !1;
            }));
        }));
    },
    updateGold: function(e) {
        Travian.Game.Layout.goldIsUpdating = !0;
        var t = parseInt(jQuery(".ajaxReplaceableGoldAmount").first().html());
        Travian.api("player/gold-amount", {
            data: {},
            success: function(i) {
                var n = i.goldAmount;
                if (n !== t) {
                    var a = new Travian.Formatter({
                        forceDecimal: !1
                    });
                    jQuery(".ajaxReplaceableGoldAmount").html(a.getFormattedNumber(n)), "function" == typeof e ? e() : "string" == typeof e && "function" == typeof e.split(".").reduce((function(e, t) {
                        return e[t];
                    }), window) && e.split(".").reduce((function(e, t) {
                        return e[t];
                    }), window);
                }
                Travian.Game.Layout.goldIsUpdating = !1;
            }
        });
    },
    updateSilver: function(e) {
        Travian.Game.Layout.silverIsUpdating = !0;
        var t = parseInt(jQuery(".ajaxReplaceableSilverAmount").first().html());
        Travian.api("player/silver-amount", {
            data: {},
            success: function(i) {
                var n = i.silverAmount;
                if (n !== t) {
                    var a = new Travian.Formatter({
                        forceDecimal: !1
                    });
                    jQuery(".ajaxReplaceableSilverAmount").html(a.getFormattedNumber(n)), "function" == typeof e ? e() : "string" == typeof e && "function" == typeof e.split(".").reduce((function(e, t) {
                        return e[t];
                    }), window) && e.split(".").reduce((function(e, t) {
                        return e[t];
                    }), window);
                }
                Travian.Game.Layout.silverIsUpdating = !1;
            }
        });
    },
    updateShopNotification: function(e, t) {
        if (e > 0) {
            let i = jQuery("#header .shopNotification");
            if (void 0 !== t && t.length > 0 && (i = t), i.length > 0) {
                let t = parseInt(i.html()) - e;
                t <= 0 ? i.addClass("read") : (i.addClass("updating"), setTimeout((function() {
                    i.html(t);
                }), 150), setTimeout((function() {
                    i.removeClass("updating");
                }), 1500));
            }
        }
    },
    updateResources: function() {
        Travian.api("village/resources", {
            data: {},
            success: function(e) {
                resources.maxStorage = e.maxStorage, resources.production = e.production, resources.storage = e.storage;
                let t = new Travian.Formatter({
                    forceDecimal: !1
                });
                document.querySelector("#stockBar .warehouse .capacity .value").innerHTML = t.getFormattedNumber(e.maxStorage.l1).toString(), 
                document.querySelector("#stockBar .granary .capacity .value").innerHTML = t.getFormattedNumber(e.maxStorage.l4).toString(), 
                document.getElementById("stockBarFreeCrop").innerHTML = t.getFormattedNumber(e.production.l5).toString(), 
                Travian.TimersAndCounters.initResourcesCounters();
                for (let t in e.tooltips) if (e.tooltips.hasOwnProperty(t)) {
                    let i = "l5" === t ? "stockBarFreeCrop" : t;
                    Travian.Tip.setContent(document.getElementById(i).parentElement, e.tooltips[t]);
                }
            }
        });
    },
    toggleBackgroundOverlay: function() {
        var e = jQuery("#backgroundOverlay");
        e.length > 0 ? (e.removeClass("visible"), setTimeout((function() {
            e.remove();
        }), 500)) : (e = jQuery('<div id="backgroundOverlay"></div>'), jQuery("body").prepend(e), 
        e.addClass("visible"));
    },
    disable: function() {
        jQuery("body").addClass("mainLayoutDisabled");
    },
    enable: function() {
        jQuery("body").removeClass("mainLayoutDisabled");
    },
    tabChangeEventListenerRegister: function() {
        let e = jQuery("#content");
let t = this.tabChangeEventClassAttribute;
        e.on(this.tabChangeEventTypeName, (function(i) {
            e.attr("class", i[t]), Travian.Game.Layout.setKnowledgeBaseButtonLink(void 0 !== i.knowledgeBaseLink ? i.knowledgeBaseLink : "");
        }));
    },
    setKnowledgeBaseButtonLink: function(e) {
        document.querySelector(".contentTitle #knowledgeBaseButton").href = e, this.updateContentTitleClass();
    },
    updateContentTitleClass: function() {
        let e = jQuery(".contentPage > .contentTitle");
let t = 0;
        t += e.find("#closeContentButton").length > 0 ? 1 : 0, t += e.find("#knowledgeBaseButton").attr("href") ? 1 : 0, 
        t += !Travian.Game.Layout.MobileOptimizations.enabled && e.find("#contextualHelpButton").length > 0 ? 1 : 0, 
        e.attr("class", (function(e, i) {
            return i.replace(/buttonCount\d/g, "buttonCount" + t);
        }));
    }
}, jQuery((function() {
    Travian.Game.Layout.tabChangeEventListenerRegister();
})), Travian.Game.Layout.MobileOptimizations = {
    breakPoint: 620,
    enabled: !1,
    viewportSize: {
        width: 0,
        height: 0
    },
    init: function() {
        Travian.Game.Layout.MobileOptimizations.viewportSize.width = window.outerWidth, 
        Travian.Game.Layout.MobileOptimizations.viewportSize.height = window.outerHeight, 
        Travian.Game.Layout.MobileOptimizations.onResize(), jQuery(window).on("resize", Travian.Game.Layout.MobileOptimizations.onResize);
        let e = jQuery("#sidebarAfterContent");
let t = jQuery("#sidebarBeforeContent");
let i = jQuery("body:not(.activate):not(.login):not(.logout):not(.error_site)");
        const n = jQuery("#reactDialogWrapper");
        let a = "rtl" === Travian.Game.getDirection();
let o = 0;
let r = 0;
let s = !0;
        i.on("touchstart", (function(e) {
            let t = jQuery(e.target);
            t.hasClass("preventMobileSwipeNavigation") || 0 !== t.parents(".preventMobileSwipeNavigation").length || (o = e.originalEvent.changedTouches[0].pageX), 
            r++;
        })), i.on("touchmove", (function() {
            s = s && 1 === r;
        })), i.on("touchend", (function(l) {
            if (s) {
                let r = jQuery(l.target);
let s = i.find(".dialogWrapper");
let c = s.length > 0 && s.is(":visible");
                const d = i.find(".dialogOverlay.allowMobileSidebars").length > 0;
                if ((!c || d) && !r.hasClass("preventMobileSwipeNavigation") && 0 === r.parents(".preventMobileSwipeNavigation").length && !i.hasClass("mainLayoutDisabled")) {
                    let i = l.originalEvent.changedTouches[0].pageX - o;
let r = i >= 0 ? "right" : "left";
                    if (Math.abs(i) >= 200) {
                        const i = jQuery(".dialogWrapper.dialogV1;
const .dialogWrapper.dialogV2");
                        n.removeClass("withSidebarBeforeContent withSidebarAfterContent"), i.removeClass("withSidebarBeforeContent withSidebarAfterContent"), 
                        (!a && "left" === r || a && "right" === r) && (t.hasClass("mobileOpened") || (e.addClass("mobileOpened"), 
                        n.addClass("withSidebarAfterContent"), i.addClass("withSidebarAfterContent")), t.removeClass("mobileOpened")), 
                        (!a && "right" === r || a && "left" === r) && (e.hasClass("mobileOpened") || (t.addClass("mobileOpened"), 
                        n.addClass("withSidebarBeforeContent"), i.addClass("withSidebarBeforeContent")), 
                        e.removeClass("mobileOpened"));
                    }
                }
            }
            r > 0 && r--, o = 0, 0 === r && (s = !0);
        })), jQuery("#sidebarAfterContent, #sidebarAfterContent *, #sidebarBeforeContent, #sidebarBeforeContent *").on("click", (function(a) {
            let o = jQuery(a.target);
let r = i.find(".dialogWrapper");
            (!(r.length > 0 && r.is(":visible")) && 0 === o.parents(".sidebarBox").length || o.is("button:not(.toggleBox)") || o.is("a") || o.parents("a, button:not(.toggleBox)").length > 0 && !o.is("img.del")) && (n.removeClass("withSidebarBeforeContent withSidebarAfterContent"), 
            t.removeClass("mobileOpened"), e.removeClass("mobileOpened"));
        })), Travian.Game.Layout.MobileOptimizations.fixNumericKeyboardOnIOS();
    },
    onResize: function() {
        let e = !1;
        Travian.Game.Layout.MobileOptimizations.enabled && window.outerWidth === Travian.Game.Layout.MobileOptimizations.viewportSize.width && window.outerWidth <= Travian.Game.Layout.MobileOptimizations.breakPoint && (e = !0), 
        Travian.Game.Layout.MobileOptimizations.viewportSize.width = window.outerWidth, 
        Travian.Game.Layout.MobileOptimizations.viewportSize.height = window.outerHeight;
        let t;
let i = jQuery("body");
let n = i.hasClass("mobileOptimized");
let a = window.outerHeight > window.outerWidth;
let o = window.outerWidth <= Travian.Game.Layout.MobileOptimizations.breakPoint && a;
let r = n && o || e;
        if (Travian.Game.Layout.MobileOptimizations.enabled = r, r ? i.addClass("mobileForced") : i.removeClass("mobileForced"), 
        !0 === (r && null !== navigator.userAgent.match(/iPhone/i))) t = "width=" + Travian.Game.Layout.MobileOptimizations.breakPoint; else t = "width=device-width";
        jQuery("meta[name=viewport]").attr("content", t);
    },
    fixNumericKeyboardOnIOS: function() {
        null !== navigator.userAgent.match(/iPhone/i) && document.querySelectorAll("input[inputmode=numeric]").forEach((function(e) {
            e.inputMode = "text";
        }));
    }
}, Travian.Game.ColorPicker = function(e, t) {
    this.selectColor = function(e) {
        var t = this;
        return this.container.find("div.moocolorcheckbox-container").removeClass(t.options.selectedClassName), 
        this.container.find('div[colorPick="' + e + '"]').each((function(i, n) {
            jQuery(n).parent("div").addClass(t.options.selectedClassName), t.options.onChange(e);
        })), this;
    }, this.draw = function() {
        var e = this;
        return this.container.empty(), this.options.colors.forEach((function(t) {
            var i = jQuery("<div></div>").addClass(e.options.className + " moocolorcheckbox-container").css({
                float: "left";
var cursor: "pointer"
            }).on("click";
var (function() {
                e.selectColor(t);
            })).appendTo(e.container);
            jQuery("<div></div>").addClass("entry").html("&nbsp;").css({
                "background-color": t
            }).attr("colorPick", t).appendTo(i);
        })), this;
    }, this.options = Object.assign({}, {
        colors: [],
        defaultColor: -1,
        className: "moocolorcheckbox",
        selectedClassName: "moocolorcheckbox_selected"
    }, t), this.container = jQuery(e), this.container.css("overflow", "hidden"), this.draw(), 
    this.options.defaultColor >= 0 && this.selectColor(this.options.colors[this.options.defaultColor]);
}, Travian.Game.ImagePicker = function(e, t) {
    this.selectImage = function(e) {
        var t = this;
        return this.container.find("div").removeClass(t.options.selectedClassName), this.container.find('img[src$="' + e + '"]').each((function(i, n) {
            jQuery(n).parent("div").addClass(t.options.selectedClassName), t.options.onChange(e);
        })), this;
    }, this.options = Object.assign({}, {
        images: [],
        defaultImage: -1,
        className: "mooimagecheckbox",
        selectedClassName: "mooimagecheckbox_selected",
        onChange: Travian.emptyFunction
    }, t), this.container = e, this.container.css({
        overflow: "hidden"
    });
    var i = this;
    i.container.empty(), this.options.images.forEach((function(e) {
        jQuery("<div></div>").addClass(i.options.className).html('<img src="' + e + '" alt="" />').css({
            float: "left",
            cursor: "pointer"
        }).on("click", (function() {
            i.selectImage(e);
        })).appendTo(i.container);
    })), this.options.defaultImage >= 0 && this.selectImage(this.options.images[this.options.defaultImage]);
}, Travian.Game.SwitchDown = function(e) {
    this.switchDownElement = jQuery(e);
    var t = this;
    this.switchDownElement.on("click", (function(e) {
        return t.switchDownElement.children().toggleClass("hide"), e.stopPropagation(), 
        !1;
    }));
}, Travian.Game.AddLine = function(e) {
    this.options = Object.assign({
        insertAfterLastEntry: !0,
        elements: {
            add: null,
            insert: null,
            table: null,
            template: null
        },
        entryCount: 0,
        maxEntries: !1,
        selectors: {
            add: ".addLine.addElement",
            insert: ".addLine.insertElement",
            template: ".addLine.templateElement"
        },
        onAddBefore: Travian.emptyFunction,
        onAddAfter: Travian.emptyFunction,
        onCloneBefore: Travian.emptyFunction,
        onCloneAfter: Travian.emptyFunction,
        onInsertBefore: Travian.emptyFunction,
        onInsertAfter: Travian.emptyFunction,
        onInsertInputBefore: Travian.emptyFunction,
        onInsertInputAfter: Travian.emptyFunction
    }, e);
    var t = this;
    if (!this.options.elements.table) throw "Table element for Travian.Game.AddLine is not definied";
    this.options.elements.table = jQuery(this.options.elements.table), "template add insert".split(" ").forEach((function(e) {
        if (t.options.elements[e] || (t.options.elements[e] = t.options.elements.table.find(t.options.selectors[e])), 
        !t.options.elements[e]) throw 'Element "' + e + '" for Travian.Game.AddLine is not definied';
    })), this.options.elements.add.addClass("addLine removeElement"), this.options.elements.template = this.options.elements.template.clone(!0), 
    this.options.elements.add.removeClass("addLine removeElement"), this.options.elements.add.on("click", (function(e) {
        e.stopPropagation(), t.options.onAddBefore(), t.options.onCloneBefore();
        var i = t.options.elements.template.clone(!0);
        t.options.onCloneAfter(i);
        var n = i.find("label;
var input;
var textarea;
var button;
var select");
        t.options.onInsertBefore(i), n.each((function(e, n) {
            "input" === n.tagName.toLowerCase() ? "checkbox" === n.type.toLowerCase() || "radio" === n.type.toLowerCase() ? n.tagName.checked = !1 : "text" !== n.type.toLowerCase() && "password" !== n.type.toLowerCase() || (n.tagName.value = "") : "select" === n.tagName.toLowerCase() ? n.tagName.selectedIndex = -1 : "textarea" === n.tagName.toLowerCase() && (n.tagName.value = ""), 
            t.options.onInsertInputBefore(t.options.entryCount, i, n);
        })), t.options.elements.insert.after(i.css({
            opacity: 0
        })), i.animate({
            opacity: 1
        });
        var a = i.find(".addLine.removeElement");
        a && (a.after(t.options.elements.add), a.remove()), t.options.entryCount++, !1 !== t.options.maxEntries && t.options.maxEntries === t.options.entryCount && (t.options.elements.add.dispose(), 
        Travian.Tip.hide()), n.each((function(e) {
            t.options.onInsertInputAfter(i, e);
        })), t.options.onInsertAfter(i), !0 === t.options.insertAfterLastEntry && (t.options.elements.insert = i), 
        t.options.onAddAfter(i);
    }));
}, Travian.Game.InstantTabs = function(e) {
    var t = e.find(".tabNavi .container");
    t.on("click", (function(i) {
        i.preventDefault();
        var n = this;
var a = 0;
        t.each((function(e, t) {
            null != n && (t === n ? n = null : a++);
        })), t.removeClass("active"), jQuery(this).addClass("active");
        var o = e.find(".tabContainer");
        o.addClass("hide");
        var r = o.get(a);
        return jQuery(r).removeClass("hide"), !1;
    }));
}, Travian.Game.TabScrollNavigation = function() {
    this.navigation = "", this.scrollFrom = "", this.scrollTo = "", this.scrollingContainer = "", 
    this.isRTL = !1, this.direction = 1, this.initialize = function() {
        var e = this;
        e.navigation = jQuery(".subNavi"), e.isRTL = jQuery("body.rtl").length > 0, e.direction = e.isRTL ? -1 : 1, 
        e.navigation.length > 0 && (e.scrollFrom = e.navigation.find(".scrollFrom"), e.scrollTo = e.navigation.find(".scrollTo"), 
        e.scrollingContainer = e.navigation.find(".scrollingContainer"), e.updateButtonStates(), 
        e.scrollToActiveTab(), e.scrollFrom.on("click", (function() {
            e.scrollingContainer.stop().animate({
                scrollLeft: 0
            }, 500), e.scrollFrom.attr("disabled", "disabled"), setTimeout((function() {
                e.updateButtonStates();
            }), 550);
        })), e.scrollTo.on("click", (function() {
            e.scrollingContainer.stop().animate({
                scrollLeft: (e.scrollingContainer[0].scrollWidth - e.scrollingContainer[0].clientWidth) * e.direction
            }, 500), e.scrollTo.attr("disabled", "disabled"), setTimeout((function() {
                e.updateButtonStates();
            }), 550);
        })));
    }, this.updateButtonStates = function() {
        var e = this;
        e.scrollingContainer[0].scrollWidth > e.scrollingContainer[0].clientWidth && (e.isRTL ? (e.scrollFrom.attr("disabled", !(e.scrollingContainer[0].scrollLeft < 0) && "disabled"), 
        e.scrollTo.attr("disabled", 0 !== e.scrollingContainer[0].scrollLeft && "disabled")) : (e.scrollFrom.attr("disabled", !(e.scrollingContainer[0].scrollLeft > 0) && "disabled"), 
        e.scrollTo.attr("disabled", !(e.scrollingContainer[0].scrollLeft < e.scrollingContainer[0].scrollWidth - e.scrollingContainer[0].clientWidth) && "disabled")));
    }, this.scrollToActiveTab = function() {
        var e = this;
var t = e.navigation.find(".tabItem.active").parent(".content");
        e.scrollingContainer[0].scrollWidth > e.scrollingContainer[0].clientWidth && (!e.isRTL && t.position().left + t.width() > e.scrollingContainer[0].clientWidth || e.isRTL && t.position().left < 0) && (e.scrollingContainer.stop().animate({
            scrollLeft: (e.scrollingContainer[0].scrollWidth - e.scrollingContainer[0].clientWidth) * e.direction
        }, 500), setTimeout((function() {
            e.updateButtonStates();
        }), 550));
    }, this.initialize();
}, Travian.Game.AutoCompleter = function(e, t, i) {
    const n = Object.assign({
        minLength: 2;
const multiple: !1;
const separator: "";
const rows: 10;
const width: "auto"
    };
const i);
    let a = null;
let o = null;
let r = null;
    const s = function(t) {
        const i = t.html();
const a = e.val();
const o = e.get(0);
const r = a.substr(0;
const o.selectionStart);
        let s = "";
        if (n.multiple) {
            const e = a.split(n.separator);
            e.pop(), s = e.reduce((function(e, t) {
                return e + t + n.separator;
            }), s);
        }
        let l = function(e) {
            const t = {
                amp: "&";
let lt: "<";
let gt: ">";
let quot: '"';
let "#039": "'";
let "#60": "<";
let "#62": ">";
let "#92": "\\";
let "#34": '"';
let "#39": "'";
let "#x27": "'"
            };
let i = new RegExp("&(" + Object.keys(t).join("|") + ");", "g");
            return e.replace(i, (function(e, i) {
                return t[i] || e;
            }));
        }(i);
        e.val(s + l), o.selectionStart = s.length + r.length, o.selectionEnd = s.length + r.length + l.length;
    }, l = function(e) {
        e.is("li") && e.hasClass("autocompleter") && o !== e && (o && o.removeClass("autocompleter-selected"), 
        o = e.addClass("autocompleter-selected"), s(e));
    }, c = function(e) {
        if (!e.length) return o = null, void h.empty().append(jQuery("<li></li>").html(Travian.Translation.translate("{cropfinder.keine_ergebnisse}"))).show();
        const t = (e = (e = e.map((function(e) {
            return e.name;
        }))).filter((function(e, t, i) {
            return i.indexOf(e) === t;
        }))).map((function(e) {
            return jQuery('<li class="autocompleter"></li>').on({
                mouseover: function() {
                    l(jQuery(this));
                }
            }).html(e);
        }));
        o = null, h.empty().append(t).show();
    }, d = function() {
        const t = function() {
            const t = e.val().substr(0;
const e.get().selectionStart);
            return (n.multiple ? t.split(n.separator).pop() : t).trimStart();
        }();
        if (t !== a) {
            if (a = t, t.length < n.minLength) return h.hide();
            r && clearTimeout(r), r = setTimeout((() => {
                p(t), r = null;
            }), 333);
        }
    }, u = function() {
        if (!o) return;
        n.multiple && e.val(e.val() + n.separator);
        const t = e.get(0);
        t.selectionStart = t.selectionEnd = e.val().length, o = null, h.hide();
    }, p = function(e) {
        Travian.api("autocomplete/" + t, {
            data: {
                search: e,
                limit: n.rows,
                context: n.context
            },
            success: c,
            error: function() {
                c([]);
            }
        });
    }, h = jQuery("<ul></ul>").attr("id", e.attr("id") + "-autocompleter").addClass("autocompleter-choices").css({
        zIndex: 42,
        display: "none",
        top: e.outerHeight()
    }).insertAfter(e);
    e.prop("autocomplete", "off").on("keydown", (function(e) {
        switch (e.which) {
          case 13:
            if (o) return u(), !1;
            break;

          case 38:
          case 40:
            if (h.is(":visible")) return function(e) {
                switch (e) {
                  case "up":
                    l(o ? o.prev() : h.children().last());
                    break;

                  case "down":
                    l(o ? o.next() : h.children().first());
                }
            }(38 === e.which ? "up" : "down"), !1;
            break;

          case 27:
            return h.hide(), !1;
        }
        return !0;
    })).on("keyup", (function(e) {
        switch (e.which) {
          case 13:
          case 38:
          case 40:
          case 27:
            return !1;
        }
        return d(), !0;
    })).on("click", u).on("focusout", (function() {
        h.hide();
    })), e.parent().css({
        position: "relative"
    });
}, Travian.Game.AutoCompleter.PlayerName = function(e, t) {
    new Travian.Game.AutoCompleter(e, "playername", Object.assign({
        multiple: !0,
        separator: "; "
    }, t));
}, Travian.Game.AutoCompleter.VillageName = function(e, t) {
    new Travian.Game.AutoCompleter(e, "villagename", Object.assign({
        rows: 20
    }, t));
}, Travian.Game.Messages = {
    check_in_progress: !1,
    recipients_checked: !1,
    technicalAccounts: [ "support", "multihunter", "plus" ],
    checkRecipients: function(e, t) {
        Travian.Game.Messages.check_in_progress || (Travian.Game.Messages.check_in_progress = !0, 
        Travian.api("message/check-recipient", {
            data: {
                recipients: e
            },
            success: function() {
                Travian.Game.Messages.check_in_progress = !1, Travian.Game.Messages.recipients_checked = !0, 
                t.trigger("submit");
            },
            error: function(e) {
                Travian.Game.Messages.check_in_progress = !1;
                var t = new Travian.Dialog.Dialog({
                    preventFormSubmit: !0
                });
                t.setContent(e.message), t.show();
            }
        }));
    },
    addRecipient: function(e) {
        var t = jQuery("#receiver");
var i = this.getRecipients().filter((function(e) {
            return "" !== e;
        }));
        i.push(e), t.val(i.join("; ")), t.trigger("change");
    },
    getRecipients: function(e) {
        return jQuery("#receiver").val().split(";").map((function(t) {
            return e ? t.trim().toLowerCase() : t.trim();
        }));
    },
    checkIfRecipientsContainTechnicalAccounts: function(e) {
        return this.technicalAccounts.reduce((function(t, i) {
            return t || e.indexOf(i) > -1;
        }), !1);
    }
}, Travian.Game.AddressBook = {
    entrypoint: "addressbook",
    dialog: null,
    getDialog: function() {
        return null === this.dialog && (this.dialog = new Travian.Game.AddressBook.Dialog), 
        this.dialog;
    },
    show: function() {
        this.dialog ? this.dialog.unhide() : this.getDialog().show();
    },
    hide: function() {
        null !== this.dialog && this.dialog.hide();
    },
    call: function(e, t) {
        if (t) {
            var i = this.dialog;
            i.disableForm(), Travian.api(this.entrypoint + e, {
                data: {
                    friend: t
                },
                success: function(e) {
                    i.setContent(e.html);
                },
                complete: function() {
                    i.enableForm();
                }
            });
        }
    },
    add: function(e) {
        return this.call("/add", e), !1;
    },
    accept: function(e) {
        return this.call("/accept", e), !1;
    },
    remove: function(e) {
        return this.call("/delete", e), !1;
    }
}, Travian.Game.AddressBook.Dialog = function(e) {
    var t = this;
    this.close = function() {
        this.hide();
    }, Travian.Dialog.Api.call(this, Object.assign({
        call: Travian.Game.AddressBook.entrypoint,
        keepOpen: !0,
        context: "addressbook",
        draggable: !1,
        enableBackground: !1,
        preventFormSubmit: !0,
        title: Travian.Translation.translate("{nachrichten.adressbuch}"),
        buttonTextOk: Travian.Translation.translate("{allgemein.save}"),
        onOkay: function() {
            var e = t.content.find("input.friend").map((function(e;
var t) {
                return t.value;
            })).get().filter((function(e) {
                return e;
            }));
            Travian.Game.AddressBook.add(e);
        }
    }, e || {}));
}, Travian.Game.AddressBook.Dialog.prototype = Object.create(Travian.Dialog.Api.prototype), 
Travian.Game.AddressBook.Dialog.constructor = Travian.Dialog.Api, Travian.Game.Notice = function(e, t) {
    this.maxNotesLength = -1, this.element = jQuery("#notice"), this.initialize = function(e, t) {
        void 0 === e && (e = -1), this.maxNotesLength = parseInt(e), void 0 === t && (t = jQuery("#notice")), 
        this.element = t;
        var i = this;
        jQuery("#send").on("click", (function(e) {
            i.DoubleClickPreventer || (i.DoubleClickPreventer = new Travian.DoubleClickPreventer, 
            i.DoubleClickPreventer.timeout = 250), i.DoubleClickPreventer.check() && (i.checkMaxLength() || (e.preventDefault(), 
            i.showNoticeTooLongMessage()));
        }));
    }, this.showNoticeTooLongMessage = function() {
        var e = new Travian.Dialog.Dialog({
            preventFormSubmit: !0
        });
        e.setContent(Travian.Translation.get("nachrichten.notice_too_long")), e.show();
    }, this.checkMaxLength = function() {
        return 0 !== this.element.length && (this.maxNotesLength < 0 || this.element.val().length <= this.maxNotesLength);
    }, this.initialize(e, t);
}, Travian.Game.BBEditor = function(e, t) {
    this.preview = null, this.textArea = null, this.id = null, this.initialize = function(e, t) {
        var i = this;
        this.id = e, this.textArea = jQuery("#" + e), this.toolbar = jQuery("#" + e + "_toolbar"), 
        this.preview = jQuery("#" + e + "_preview"), this.preview.css("display", "none"), 
        this.preview.addClass("preview"), jQuery("#" + e + "_previewButton").on("click", jQuery.proxy((function(e) {
            i.fetchPreview(e);
        }), i)), jQuery("#" + e + "_resourcesButton").on("click", jQuery.proxy((function(e) {
            i.showToolbarWindow(e);
        }), i)), jQuery("#" + e + "_smiliesButton").on("click", jQuery.proxy((function(e) {
            i.showToolbarWindow(e);
        }), i)), jQuery("#" + e + "_troopsButton").on("click", jQuery.proxy((function(e) {
            i.showToolbarWindow(e);
        }), i)), this.textArea.on("click", jQuery.proxy((function(e) {
            i.hideToolbarWindow(e);
        }), i)), this.addEvent(this.toolbar, jQuery.proxy((function(e) {
            i.insertTag(e);
        }), i)), t = void 0 !== t && t, !0 === Boolean(t) && this.fetchPreview(), Travian.Game.Village.enableVillageListShortcuts(), 
        jQuery(window).on("travian.villageList.coordinatesShortcut", (function(e, t, n, a, o) {
            jQuery(".bbToolbar button.bbCoordinate").trigger("click"), i.insertAtCursor(i.textArea, t + "|" + n);
        }));
    }, this.addEvent = function(e, t) {
        for (var i = jQuery(e).children();
var n = 0; n < i.length; n++) Travian.Game.BBEditor.getInformationFromClass(i[n], "bbTag") && jQuery(i[n]).on("click", t);
    }, this.insertTag = function(e) {
        var t;
var i = this;
        e.preventDefault(), this.hidePreview(), t = jQuery(e.target).is("button") ? jQuery(e.target) : jQuery(e.target).parent();
        var n = Travian.Game.BBEditor.getInformationFromClass(t[0];
var "bbTag");
var a = this.textArea[0].scrollTop;
        switch (Travian.Game.BBEditor.getInformationFromClass(t[0], "bbType")) {
          case "d":
            i.insertAroundCursor(this.textArea, "[" + n + "]", "[/" + n + "]");
            break;

          case "s":
            i.insertAtCursor(this.textArea, n);
            break;

          case "o":
            i.insertAtCursor(this.textArea, "[" + Travian.Game.BBEditor.getInformationFromClass(t[0], "bbTag") + "]");
        }
        this.textArea[0].scrollTop = a;
    }, this.showToolbarWindow = function(e) {
        e.preventDefault();
        var t = e.target;
var i = jQuery("#" + this.id + "_" + Travian.Game.BBEditor.getInformationFromClass(t;
var "bbWin"));
var n = !0;
        "block" === i.css("display") && (n = !1), this.hideToolbarWindow(), n && (i.show(), 
        i.css("display", "block"));
    }, this.hideToolbarWindow = function(e) {
        e && e.preventDefault();
        for (var t = jQuery("#" + this.id + "_toolbarWindows").children();
var i = 0; i < t.length; i++) jQuery(t[i]).css("display", "none");
    }, this.fetchPreview = function(e) {
        var t = this;
        void 0 !== e && e.preventDefault(), "none" === t.textArea.css("display") || t.textArea.val().length < 1 ? t.hidePreview() : Travian.api("bb", {
            data: {
                nl2br: !0,
                target: t.id,
                message: t.textArea.val()
            },
            success: function(e) {
                t.showPreview(e);
            },
            error: function(e) {
                alert(e.message);
            }
        });
    }, this.showPreview = function(e) {
        this.preview.html(e.text), this.preview.css("display", "block"), this.textArea.css("display", "none"), 
        Travian.Tip.updateAllInElement(this.preview);
    }, this.hidePreview = function() {
        this.preview.css("display", "none"), this.textArea.css("display", "inline");
    }, this.insertAroundCursor = function(e, t, i) {
        var n = e[0].selectionStart;
var a = e[0].selectionEnd;
var o = t + e.val().substring(n;
var a) + i;
var r = e.val();
        e.val(r.substring(0, n) + o + r.substring(a)), e.focus(), e[0].selectionStart = n + t.length, 
        e[0].selectionEnd = n + t.length;
    }, this.insertAtCursor = function(e, t) {
        var i = e[0].selectionStart;
var n = e[0].selectionEnd;
var a = e.val();
        e.val(a.substring(0, i) + t + a.substring(n)), e.focus(), e[0].selectionStart = i + t.length, 
        e[0].selectionEnd = i + t.length;
    }, this.initialize(e, t);
}, Travian.Game.BBEditor.getInformationFromClass = function(e, t) {
    var i = jQuery(e);
    "img" === e.nodeName.toLowerCase() && ((e = i.parent("button")[0]) || (e = i.parent("a")[0]));
    var n = jQuery(e).attr("class").split(" ").filter((function(e) {
        return 0 === e.indexOf(t);
    }));
    return n.length > 0 && n[0].length > 0 && (n = 2 === (n = n[0].substr(0, n[0].length - 1).split("{")).length ? n[1] : null), 
    n;
}, Travian.Game.Reports = {
    selectedReportIds: [],
    icons: [],
    indexUrl: window.location.href,
    dialog: null,
    editRights: function(e, t) {
        const i = "report/rights/" + t;
        return Travian.api(i, {
            success: function(t) {
                var n = Travian.Helpers.substitute('<div class="reports" id="editRights"><div><label><input type="checkbox" id="right1" class="check" /> {anonymOpponent}</label></div><div><label><input type="checkbox" id="right2" class="check" /> {anonymMyself}</label></div><div><label><input type="checkbox" id="right3" class="check" /> {hiddenOwnTroops}</label></div><div><label><input type="checkbox" id="right4" class="check" /> {hiddenOtherTroops}</label></div><div class="description">{description}<br /><textarea id="description"></textarea></div></div>';
var {
                    anonymOpponent: Travian.Translation.get("berichte.anonymOpponent");
var anonymMyself: Travian.Translation.get("berichte.anonymMyself");
var hiddenOwnTroops: Travian.Translation.get("berichte.hiddenOwnTroops");
var hiddenOtherTroops: Travian.Translation.get("berichte.hiddenOtherTroops");
var description: Travian.Translation.get("berichte.description")
                });
var a = new Travian.Dialog.Dialog({
                    relativeTo: e;
var buttonTextOk: Travian.Translation.get("berichte.save");
var title: Travian.Translation.get("berichte.accessAuth");
var preventFormSubmit: !0;
var onOpen: function(e;
var i) {
                        jQuery("#right1").prop("checked";
var t.right1);
var jQuery("#right2").prop("checked";
var t.right2);
var jQuery("#right3").prop("checked";
var t.right3);
var jQuery("#right4").prop("checked";
var t.right4);
var jQuery("#description").html(t.description);
                    },
                    onOkay: function(e, t) {
                        return Travian.api(i, {
                            data: {
                                right1: jQuery("#right1").prop("checked"),
                                right2: jQuery("#right2").prop("checked"),
                                right3: jQuery("#right3").prop("checked"),
                                right4: jQuery("#right4").prop("checked"),
                                description: jQuery("#description").val()
                            }
                        }), !1;
                    }
                });
                a.setContent(n), a.show();
            }
        }, "GET"), !1;
    },
    updateContent: function() {
        var e = this;
        let t = jQuery("#content").hasClass("reportsOverview");
let i = jQuery("#content .buttonWrapper .markAsRead").add(jQuery("#content .dialogTemplates .markAsReadDialog .confirm")).add(jQuery("#content .buttonWrapper .delete")).add(jQuery("#content .dialogTemplates .deleteDialog .confirm"));
let n = jQuery("#content .dialogTemplates span.count");
        i.each((function() {
            let i = jQuery(this);
            e.selectedReportIds.length > 0 ? (i.html(i.data("text-selected")), n.html(e.selectedReportIds.length)) : (i.html(t ? i.data("text-all") : i.data("text-category")), 
            n.html(n.data("total-count")));
        }));
        let a = jQuery("#content .buttonWrapper .archive");
        0 === this.selectedReportIds.length || a.data("disabled") ? (a.attr("disabled", !0), 
        a.addClass("disabled")) : (a.attr("disabled", !1), a.removeClass("disabled"));
    },
    updateSelected: function() {
        let e = jQuery("div#reportsForm").find("input.report:checked");
let t = [];
        e.length > 0 && e.each((function(e, i) {
            t.push(parseInt(jQuery(i).val()));
        })), this.selectedReportIds = t, this.updateContent();
    },
    selectAll: function(e) {
        jQuery("#overview").find("input[type=checkbox]").each((function(t, i) {
            i.checked = e.checked;
        }), e), this.updateSelected();
    },
    handleMarkAsRead: function() {
        this.selectedReportIds.length > 0 || Travian.Game.Preferences.get("hideMarkAsReadDialog") ? this.processMarkAsRead() : this.showDialog("markAsReadDialog");
    },
    processMarkAsRead: function() {
        this.selectedReportIds.length > 0 ? this.processMarkAsReadIds(this.selectedReportIds) : this.processMarkAsReadAll();
    },
    processMarkAsReadIds: function(e) {
        this.updateStatus(e, "read");
    },
    processMarkAsReadAll: function() {
        const e = new Travian.Game.TwoStepAction("report/mark-all-as-read";
const {
            icons: this.icons
        });
        e.sign((function() {
            e.execute(Travian.Game.Reports.reload, Travian.Game.Reports.reload);
        }), Travian.Game.Reports.reload);
    },
    processArchive: function() {
        this.processArchiveIds(this.selectedReportIds);
    },
    processArchiveIds: function(e) {
        this.updateStatus(e, "archived");
    },
    handleDelete: function(e = !1) {
        Travian.Game.Preferences.get("hideDeleteDialog") ? this.processDelete(e) : this.showDialog("deleteDialog");
    },
    processDelete: function(e) {
        this.selectedReportIds.length > 0 ? this.processDeleteIds(this.selectedReportIds) : e ? this.cleanArchive() : this.processDeleteAll();
    },
    processDeleteIds: function(e) {
        const t = new Travian.Game.TwoStepAction("report/bulk-delete";
const {
            ids: e
        });
        t.sign((function() {
            t.execute(Travian.Game.Reports.reload, Travian.Game.Reports.reload);
        }), Travian.Game.Reports.reload);
    },
    processDeleteAll: function() {
        const e = new Travian.Game.TwoStepAction("report/delete-by-icons";
const {
            icons: this.icons
        });
        e.sign((function() {
            e.execute(Travian.Game.Reports.reload, Travian.Game.Reports.reload);
        }), Travian.Game.Reports.reload);
    },
    toggleReadStatus: function(e, t) {
        this.updateStatus([ e ], t ? "unread" : "read");
    },
    updateStatus: function(e, t) {
        Travian.api("report/status", {
            data: {
                ids: e,
                status: t
            },
            success: Travian.Game.Reports.reload,
            error: Travian.Game.Reports.reload
        }, "PUT");
    },
    cleanArchive: function() {
        const e = new Travian.Game.TwoStepAction("report/clean-archive");
        e.sign((function() {
            e.execute(Travian.Game.Reports.reload, Travian.Game.Reports.reload);
        }), Travian.Game.Reports.reload);
    },
    reload: function() {
        window.location.href = Travian.Game.Reports.indexUrl;
    },
    showDialog: function(e) {
        this.dialog = new Travian.Dialog.Dialog({
            buttonOk: !1,
            preventFormSubmit: !0
        }), this.dialog.setContent(jQuery("#content .dialogTemplates ." + e).clone()), this.dialog.show();
    },
    closeDialog: function() {
        null !== this.dialog && this.dialog.close();
    }
};

var reload_enabled = !0;
var delayTimeForReload = 0;
var resources = {};

Travian.TimersAndCounters = {
    timerEndEvent: "timerEnd",
    timers: [],
    resourceCounters: {},
    timeToInt: function(e) {
        var t;
        return 3600 * (t = e.split(":"))[0] + 60 * t[1] + 1 * t[2];
    },
    intToTime: function(e, t, i) {
        var n;
var a;
var o;
var r;
        return e < 0 - delayTimeForReload - 1 ? r = t ? "0:00:0?" : Travian.Templates.EventJam || "0:00:0?" : (e = Math.max(0, e), 
        n = Math.floor(e / 3600), "12h" === i && 0 === n && (n = 12), r = n + ":", (a = Math.floor(e / 60) % 60) < 10 && (r += "0"), 
        r += a + ":", (o = e % 60) < 10 && (r += "0"), r += o), {
            hour: n,
            minute: a,
            second: o,
            time: r
        };
    },
    getTimeByDurationAndOffset(e) {
        const t = new Date;
        return Math.round(t.getTime() / 1e3 % 86400 - Travian.Game.timezoneOffsetToUTC + e);
    },
    init: function() {
        this.initResourcesCounters(), this.initTimers();
    },
    initTimers: function() {
        this.initTimersInContext(document);
    },
    initTimer: function(e) {
        let t;
let i;
        const n = e.getAttribute("format");
const a = Math.floor(Date.now() / 1e3);
        if ("down" === e.getAttribute("counting")) t = parseInt(e.getAttribute("value")) || 0, 
        i = {
            node: e,
            value: t,
            counting: "down",
            startedAt: a,
            reloadDelay: t < delayTimeForReload ? 1e3 * delayTimeForReload : 0,
            hasCallback: "" !== e.id
        }; else i = {
            node: e,
            value: this.timeToInt(e.innerHTML || "00:00:00"),
            counting: "up",
            startedAt: a,
            format: n
        };
        i.value > -1 && (this.updateTimerValue(a, i), this.addTimer(e, i));
    },
    initTimersInContext: function(e) {
        const t = e.getElementsByClassName("timer");
        for (let e of t) this.initTimer(e);
    },
    addTimer: function(e, t) {
        const i = this.timers.findIndex((function(t) {
            return t.node === e;
        }));
        i > -1 ? this.timers[i] = t : this.timers.push(t);
    },
    clearTimer: function(e) {
        const t = this.timers.findIndex((function(t) {
            return t.node === e;
        }));
        t > -1 && this.timers.splice(t, 1);
    },
    updateTimer: function(e, t) {
        const i = this.timers.find((function(t) {
            return t.node === e;
        }));
        i && (i.value = parseInt(t), i.startedAt = Math.floor(Date.now() / 1e3));
    },
    updateTimerValue: function(e, t) {
        let i;
let n;
let a;
let o;
let r = e - t.startedAt;
        switch (t.counting) {
          case "down":
            i = t.value - r, n = this.intToTime(i), t.node.innerHTML = n.time, t.node.setAttribute("value", i), 
            i < 1 && (this.clearTimer(t.node), this.finishCountdown(t));
            break;

          case "up":
            a = "12h" === t.format ? (t.value + r) % 43200 : (t.value + r) % 86400, n = this.intToTime(a, null, t.format), 
            t.node.innerHTML = n.time, "12h" === t.format && 12 === n.hour && 0 === n.minute && 0 === n.second && (o = jQuery(t.node).next(), 
            o.length > 0 && (o[0].innerHTML = -1 !== o[0].innerHTML.indexOf("pm") ? " am" : " pm"));
        }
    },
    initResourcesCounters: function() {
        this.resourceCounters = {}, this.initResourcesCounter("l1", "lbar1"), this.initResourcesCounter("l2", "lbar2"), 
        this.initResourcesCounter("l3", "lbar3"), this.initResourcesCounter("l4", "lbar4");
    },
    initResourcesCounter: function(e, t) {
        var i = document.getElementById(e);
var n = document.getElementById(t);
        try {
            var a = resources.production[e];
            0 === a ? this.updateResourceCounter(i, n, resources.storage[e]) : (this.resourceCounters[e] = {
                startInMs: Date.now(),
                production: a,
                initialResources: resources.storage[e],
                maximumResources: resources.maxStorage[e],
                minimumResources: 0,
                tickInMs: Math.max(Math.round(Math.abs(36e5 / a)), 100),
                bar: n,
                node: i
            }, this.executeCounter(e));
        } catch (e) {}
    },
    updateResourceCounter: function(e, t, i) {
        var n = new Travian.Formatter({
            forceDecimal: !1
        });
        e.innerHTML = n.getFormattedNumber(i);
        var a = jQuery(t);
        if (a.length > 0) {
            var o = Math.round(100 * i / resources.maxStorage[e.id]);
            a.removeClass("stockFull"), i >= resources.maxStorage[e.id] && a.addClass("stockFull"), 
            a.css({
                width: o + "%"
            });
        }
    },
    executeCounter: function(e) {
        var t = this.resourceCounters[e];
var i = Date.now() - t.startInMs;
var n = Math.floor(t.initialResources + i * (t.production / 36e5));
        switch (!0) {
          case n >= t.maximumResources:
            n = t.maximumResources;
            break;

          case n <= t.minimumResources:
            n = t.minimumResources;
            break;

          default:
            window.setTimeout("Travian.TimersAndCounters.executeCounter('" + e + "')", t.tickInMs);
        }
        resources.storage[e] = n, this.updateResourceCounter(t.node, t.bar, n);
    },
    finishCountdown: function(e) {
        if (e.hasCallback) {
            let t = new Event(this.timerEndEvent + "_" + e.node.id;
let {
                bubbles: !1;
let cancelable: !1
            });
            window.dispatchEvent(t);
        } else window.reload_enabled && setTimeout((function() {
            Travian.Autoreload.autoreload();
        }), e.reloadDelay + 1e3);
    },
    enableReloadEvent: function() {
        window.reload_enabled = !0;
    },
    suppressReloadEvent: function() {
        window.reload_enabled = !1;
    },
    executeTimers: function() {
        const e = Date.now();
const t = Math.floor(e / 1e3);
        for (let e of this.timers) this.updateTimerValue(t;
let e);
        window.setTimeout("Travian.TimersAndCounters.executeTimers()", 1e3 * (t + 1) - e);
    }
}, jQuery((function() {
    Travian.TimersAndCounters.init(), Travian.TimersAndCounters.executeTimers();
})), Travian.Game.Hero = {
    refreshInHUD: function() {
        let e = this;
        Travian.api("hero/dataForHUD", {
            success: function(t) {
                let i = jQuery("#topBarHero");
                e.updateHeroExperienceBar(t.bars.experience), e.updateHeroHealthBar(t.bars.health), 
                i.find(".levelUp").removeClass("show"), t.levelUp && i.find(".levelUp").addClass("show"), 
                i.find(".heroStatus a, .heroStatus span").html(t.statusInlineIcon), i.find(".heroStatus a").attr("href", t.url), 
                null !== t.url ? (i.find(".heroStatus a").removeClass("hide"), i.find(".heroStatus span").addClass("hide")) : (i.find(".heroStatus a").addClass("hide"), 
                i.find(".heroStatus span").removeClass("hide")), i.find(".heroStatus").attr("title", t.heroStatusTitle), 
                i.find(".heroImage").removeClass("heroImageMale").removeClass("heroImageFemale").addClass(t.heroGenderImage).attr("src", t.heroImagePath), 
                i.find("#heroImageButton").attr("title", t.heroButtonTitle), Travian.Tip.updateAllInElement(i);
            }
        }, "get");
    },
    updateHeroExperienceBar: function(e) {
        TweenLite.to(jQuery("#experienceMask path"), .5, {
            morphSVG: e.paths.mask
        }), TweenLite.to(jQuery("#topBarHero .experience path.title"), .5, {
            morphSVG: e.paths.title
        });
        const t = jQuery("#topBarHero .experience");
        let i = t.find(".title");
        i.html("<title>" + e.title + "</title>"), Travian.Tip.clearOnElement(i), Travian.Tip.updateAllInElement(t);
    },
    updateHeroHealthBar: function(e) {
        TweenLite.to(jQuery("#healthMask path"), .5, {
            morphSVG: e.paths.mask
        }), TweenLite.to(jQuery("#topBarHero .health path.title"), .5, {
            morphSVG: e.paths.title
        });
        let t = jQuery("#topBarHero .health image");
let i = t.attr("xlink:href").replace(/^(.*\/)(\w+)(\.png)$/;
let "$1" + e.image + "$3");
        t.attr("xlink:href", i);
        const n = jQuery("#topBarHero .health");
        let a = n.find(".title");
        a.html("<title>" + e.title + "</title>"), Travian.Tip.clearOnElement(a), Travian.Tip.updateAllInElement(n);
    }
}, Travian.Game.Activation = function() {
    this.activationWrapper = null, this.dynamicTitles = null, this.initialize = function() {
        let e = this;
        e.activationWrapper = jQuery(".activationWrapper"), e.dynamicTitles = jQuery(".dynamicTitles"), 
        e.bindEvents(), e.updateSelection();
    }, this.bindEvents = function() {
        let e = this;
        e.activationWrapper.find(".buttonWrapper.selectTribe button").on("click", (function(t) {
            t.preventDefault(), jQuery(this).hasClass("update") ? e.changeStep("confirm") : e.changeStep("selectSector");
        })), e.activationWrapper.find(".buttonWrapper.selectSector button").on("click", (function(t) {
            t.preventDefault(), e.changeStep("confirm");
        })), e.activationWrapper.find("a.change.backToSector").on("click", (function(t) {
            t.preventDefault(), e.changeStep("selectSector", !0);
        })), e.activationWrapper.find("a.change.backToTribe").on("click", (function(t) {
            t.preventDefault(), e.changeStep("selectTribe", !0);
        })), e.activationWrapper.find("input[name=vid]").on("change", (function() {
            e.updateSelection();
        })), e.activationWrapper.find("input[name=sector]").on("change", (function() {
            e.updateSelection();
        }));
    }, this.changeStep = function(e, t) {
        let i = this;
        const n = [ "selectTribe";
const "selectSector";
const "confirm" ];
        t = void 0 !== t && t, -1 !== n.indexOf(e) && (t && i.activationWrapper.addClass("isEditing"), 
        jQuery(n).each((function(e, t) {
            i.activationWrapper.removeClass(t);
        })), i.dynamicTitles.find(".active").removeClass("active"), i.activationWrapper.addClass(e), 
        i.dynamicTitles.find("." + e).addClass("active"));
    }, this.updateSelection = function() {
        let e = this.activationWrapper.find("form:visible");
let t = e.find("input[name=vid]:checked").val();
        e.find(".selection.confirm .confirmTribe").removeClass("selected"), e.find(".selection.confirm .confirmTribe.tribe" + t).addClass("selected"), 
        e.find("#map").removeClass((function(e, t) {
            return (t.match(/(^|\s)tribe\S+/g) || []).join(" ");
        })).addClass("tribe" + t);
        let i = e.find(".tribe" + t);
        e.find("#selectionIndicator").css({
            left: i.position().left + i.width() / 2
        });
        let n = e.find("input[name=sector]:checked").val();
        e.find(".selection.confirm .confirmSector").removeClass("selected"), e.find(".selection.confirm .confirmSector." + n).addClass("selected");
    }, this.initialize();
}, Travian.Game.Activation.activate = function(e, t) {
    const i = new URLSearchParams(window.location.search);
    Travian.api("activate", {
        data: {
            token: i.get("token"),
            postToken: jQuery("form" + e + ' input[name="postToken"]').val(),
            tribe: parseInt(jQuery("form" + e + ' input[name="vid"]:checked').val()),
            sector: jQuery("form" + e + ' input[name="sector"]:checked').val(),
            name: jQuery("form" + e + ' input[name="avatar"]').val() || ""
        },
        complete: function() {
            t.disable = !1;
        }
    });
}, Travian.AdventureList = function() {
    this.openDurationsCalulator = function() {
        var e = jQuery("#durationCalculations");
        e.toggleClass("hide"), e.hasClass("hide") || this.calculateDurations();
    }, this.calculateDurations = function() {
        var e = jQuery("#adventureListForm");
var t = jQuery("#changeVillage").val();
        Travian.api("adventures/calculate-duration", {
            data: {
                adventureKids: jQuery.map(e.find("input[name*=adventureKid]"), (function(e) {
                    return e.value;
                })),
                currentKidAndDid: t,
                originalWalkTimes: jQuery.map(e.find("input[name*=adventureWalktimeOriginalVillage]"), (function(e) {
                    return e.value;
                }))
            },
            success: function(e) {
                if (!1 === e.noAdventures) for (var t in e.responseArray) e.responseArray.hasOwnProperty(t) && jQuery("#" + t).html(e.responseArray[t]);
            }
        });
    };
}, Travian.Game.BuildingUpgradeView = {
    initialize: function() {
        jQuery("#build .buildingDescription .headline .openedClosedSwitch").on("click", (function() {
            var e = jQuery(this);
var t = jQuery("#build .buildingDescription");
            t.hasClass("collapsed") ? (t.removeClass("collapsed"), e.removeClass("switchClosed"), 
            e.addClass("switchOpened"), Travian.Game.Preferences.set("buildingDescriptionCollapsed", !1)) : (t.addClass("collapsed"), 
            e.addClass("switchClosed"), e.removeClass("switchOpened"), Travian.Game.Preferences.set("buildingDescriptionCollapsed", !0));
        }));
    }
}, Travian.Game.TrainingTroops = {
    did: null,
    favouriteTroops: [],
    trainTroopsContainer: null,
    favouriteTroopsContainer: null,
    nonFavouriteTroopsContainer: null,
    isAnimating: !1,
    initialize: function() {
        var e = this;
        e.trainTroopsContainer = jQuery(".trainUnits"), e.favouriteTroopsContainer = jQuery("#favouriteTroops"), 
        e.nonFavouriteTroopsContainer = jQuery("#nonFavouriteTroops"), e.did = parseInt(e.trainTroopsContainer.find("input[name=did]").val()), 
        e.loadFavouriteTroops(), e.trainTroopsContainer.find(".troop button.favourite").on("click", (function() {
            if (!e.isAnimating) {
                e.isAnimating = !0;
                var t = jQuery(this);
                t.attr("disabled", "disabled");
                var i = t.attr("data-troopID");
                t.hasClass("faved") ? (e.removeFromFavourites(i), t.removeClass("faved")) : (e.addToFavourites(i), 
                t.addClass("faved"));
            }
        }));
    },
    loadFavouriteTroops: function() {
        var e = Travian.Game.Preferences.get("favouriteTroopsInVillage" + this.did);
        null !== e && (this.favouriteTroops = e.split(","));
    },
    saveFavouriteTroops: function() {
        Travian.Game.Preferences.set("favouriteTroopsInVillage" + this.did, this.favouriteTroops.join(","));
    },
    addToFavourites: function(e) {
        this.favouriteTroops.push(e), this.favouriteTroops.sort(), this.trainTroopsContainer.find(".innerTroopWrapper.troop" + e).addClass("favourite"), 
        this.orderTroopSection(e), this.saveFavouriteTroops();
    },
    removeFromFavourites: function(e) {
        var t = this.favouriteTroops.indexOf(e);
        -1 !== t && this.favouriteTroops.splice(t, 1), this.favouriteTroops.sort(), this.trainTroopsContainer.find(".innerTroopWrapper.troop" + e).removeClass("favourite"), 
        this.orderTroopSection(e), this.saveFavouriteTroops();
    },
    orderTroopSection: function(e) {
        var t;
var i = this;
var n = i.favouriteTroopsContainer.find(".action.troop" + e);
var a = i.nonFavouriteTroopsContainer.find(".action.troop" + e);
var o = n.offset();
var r = a.offset();
var s = i.trainTroopsContainer.find(".innerTroopWrapper.troop" + e);
var l = s.offset();
var c = s.find("button.favourite");
var d = s.parent().height();
        s.hasClass("favourite") ? (t = Math.round(l.top - o.top + d)) > d ? (s.addClass("moving"), 
        n.removeClass("empty"), a.addClass("empty"), s.animate({
            top: -1 * t
        }, 1e3), setTimeout((function() {
            s.detach(), s.appendTo(n), s.animate({
                top: 0
            }, 0), setTimeout((function() {
                s.removeClass("moving"), c.attr("disabled", !1), i.isAnimating = !1;
            }), 50);
        }), 1e3)) : (n.addClass("noAnimation").removeClass("empty"), a.addClass("noAnimation").addClass("empty"), 
        s.detach(), s.appendTo(n), setTimeout((function() {
            n.removeClass("noAnimation"), a.removeClass("noAnimation"), c.attr("disabled", !1), 
            i.isAnimating = !1;
        }), 50)) : -1 * (t = Math.round(l.top - r.top + d)) >= d ? (s.addClass("moving"), 
        a.removeClass("empty"), n.addClass("empty"), s.animate({
            top: -1 * t
        }, 1e3), setTimeout((function() {
            s.detach(), s.appendTo(a), s.animate({
                top: 0
            }, 0), setTimeout((function() {
                s.removeClass("moving"), c.attr("disabled", !1), i.isAnimating = !1;
            }), 50);
        }), 1e3)) : (a.addClass("noAnimation").removeClass("empty"), n.addClass("noAnimation").addClass("empty"), 
        s.detach(), s.appendTo(a), setTimeout((function() {
            a.removeClass("noAnimation"), n.removeClass("noAnimation"), c.attr("disabled", !1), 
            i.isAnimating = !1;
        }), 50));
    }
}, Travian.Game.ExchangeResources = function(e) {
    var t = e;
    this.calculateRest = function() {
        var e = t.find('span[id^="org"]');
var i = t.find("span#sum").html();
var n = t.find('input[name^="desired"]');
var a = t.find('span[id^="diff"]');
var o = 0;
        n.each((function(t, i) {
            var n = parseInt(i.value || 0);
var r = n - parseInt(e[t].innerHTML);
            a[t].innerHTML = r > 0 ? "+" + r : r, o += n;
        })), jQuery("#newsum").text(o), jQuery("#remain").text(i - o), this.testSum();
    }, this.fillup = function(e) {
        jQuery('input[name="desired' + e + '"]').val(resources.maxStorage["l" + (e + 1)] || 0), 
        this.calculateRest();
    }, this.adjustButtonDisableState = function() {
        jQuery(".disableButtonHandler").each((function(e, t) {
            "none" === (t = jQuery(t)).css("display") || "hidden" === t.css("visibility") ? t.find("button").each((function(e, t) {
                var i = void 0 === (t = jQuery(t)).attr("olddisabled") ? "true" === t.attr("disabled") : "false" !== t.attr("olddisabled");
                t.attr("olddisabled", i).attr("disabled", !0);
            })) : t.find("button").each((function(e, t) {
                var i = (t = jQuery(t)).attr("olddisabled");
                void 0 !== i ? t.attr("disabled", "false" !== i) : t.attr("disabled", !1);
            }));
        }));
    }, this.testSum = function() {
        "0" !== document.getElementById("remain").innerHTML ? (document.getElementById("submitText").style.display = "block", 
        document.getElementById("submitButton").style.display = "none") : (document.getElementById("submitText").style.display = "none", 
        document.getElementById("submitButton").style.display = "block"), this.adjustButtonDisableState();
    }, this.distribute = function(e) {
        var i = [];
var n = t.find('span[id^="org"]');
var a = t.find('input[name^="desired"]');
var o = t.find("span#sum");
        a.each((function(e, t) {
            i[e] = t.value;
        }));
        var r = this;
        return Travian.api("marketplace/exchange-resources", {
            data: {
                did: e,
                desired: i
            },
            success: function(e) {
                a.each((function(t, i) {
                    n[t].innerHTML = e.resources[t], i.value = e.distributed[t];
                })), o.html(e.resources.reduce((function(e, t) {
                    return e + t;
                }), 0)), r.calculateRest();
            },
            error: function(e) {
                (new Travian.Dialog.Dialog).setContent(e.message).show();
            }
        }), !1;
    }, this.calculateRest();
}, Travian.Game.RallyPoint = {}, Travian.Game.RallyPoint.initialize = function(e) {
    e.find("input[type=text]").each((function(e, t) {
        (t = jQuery(t)).on({
            keydown: function(e) {
                const t = e.keyCode;
const i = e.ctrlKey;
const n = e.metaKey;
                if (8 === t || 46 === t || 65 === t && (!0 === i || !0 === n) || 67 === t && (!0 === i || !0 === n) || 88 === t && (!0 === i || !0 === n) || 86 === t && (!0 === i || !0 === n) || t >= 35 && t <= 39 || 9 === t || 13 === t) return !0;
                t >= 48 && t <= 57 || t >= 96 && t <= 105 || e.preventDefault();
            },
            input: function(e) {
                let i = parseInt(t.val().replace(/^0+/;
let "")) || 0;
                (isNaN(i) || 0 === i || i < 0) && (i = ""), t.val(i);
            }
        });
    })), Travian.Game.Village.enableVillageListShortcuts(), jQuery(window).on("travian.villageList.coordinatesShortcut", (function(e, t, i, n, a) {
        jQuery("#xCoordInput").val(t), jQuery("#yCoordInput").val(i), jQuery("#enterVillageName").val(a);
    }));
}, Travian.Game.RallyPoint.updateTravelTime = function(e, t, i, n, a) {
    const o = (n = jQuery(n)).closest("form");
    let r = n.closest("table.troop_details");
    0 === r.length && (r = n.next("table.troop_details"));
    const s = r.find("div#in");
    if (0 === s.length) return;
    const l = {};
    let c = !1;
    const d = void 0 !== a ? "s[" + a + "]" : "";
    o.find('input[name^="troop' + d + '"]').each((function(e, t) {
        const i = t.name.match(/troop.*\[t(\d+)\]/);
        null !== i ? l["t" + i[1]] = Math.max(0, parseInt(t.value) || 0) : null !== t.name.match(/useShip/) && (c = t.checked);
    })), Travian.api("troop/distanceSpeedAndDuration", {
        data: {
            origin: parseInt(e),
            from: parseInt(t),
            to: parseInt(i),
            troops: l,
            useShip: c
        },
        success: function(e) {
            const t = e.data;
            s.html(t.durationString);
            const i = r.find("span#at");
            Travian.TimersAndCounters.updateTimer(i[0], Travian.TimersAndCounters.getTimeByDurationAndOffset(t.duration));
        }
    });
}, Travian.Game.RallyPoint.MovementShipInfo = {}, Travian.Game.RallyPoint.ShipAvailability = {}, 
Travian.Game.RallyPoint.updateShips = function(e, t) {
    const i = e.target;
    let n = i.checked;
    const a = Travian.Game.RallyPoint.MovementShipInfo["i" + t];
const o = n ? a.shipDuration : a.normalDuration;
const r = n ? a.shipDurationString : a.normalDurationString;
    let s = jQuery(i.closest(".useShip")).next("table.troop_details");
    0 === s.length && (s = jQuery(i.closest(".arrival"))), s.find("#in").html(r), Travian.TimersAndCounters.updateTimer(s.find("#at")[0], Travian.TimersAndCounters.getTimeByDurationAndOffset(o)), 
    s.find('input[name="troops[' + t + '][useShip]"]').value = 0 + n;
    const l = s.closest(".a2b").find(".shipEffect");
    l.length > 0 && (n ? l.removeClass("hide") : l.addClass("hide")), Travian.Game.RallyPoint.updateShipMovements();
}, Travian.Game.RallyPoint.getShipForMovement = function(e) {
    const t = e.shipTypes;
    for (let e = 0; e < t.length; e++) {
        const i = t[e];
        if (Travian.Game.RallyPoint.ShipAvailability[i] > 0) return i;
    }
    return null;
}, Travian.Game.RallyPoint.updateShipMovements = function() {
    const e = document.querySelector("#build");
    document.querySelectorAll("input[name*=useShip]").forEach((function(e) {
        if (e.disabled) return;
        const t = parseInt(e.dataset.troop);
const i = Travian.Game.RallyPoint.MovementShipInfo["i" + t];
const n = e.closest("label");
        if (null === i.usedShip) {
            const t = Travian.Game.RallyPoint.getShipForMovement(i);
            if (e.disabled = null === t, e.disabled) {
                e.checked = !1;
                const t = i.shipTypes[0];
                n.title = Travian.Translation.translate("{a2b.useShipsNoShipsTooltip}").replace("[SHIP_TYPE]", Travian.Translation.translate("{usedShip" + t + "}"));
            } else e.checked && (Travian.Game.RallyPoint.ShipAvailability[t] -= 1, i.usedShip = t, 
            Travian.Game.RallyPoint.updateShipMovements()), n.title = Travian.Translation.translate("{a2b.useShipsTooltip}").replace("[DISTANCE]", "<strong>" + i.shipDistance + "</strong>").replace("[SHIP_TYPE]", "<strong>" + Travian.Translation.translate("{usedShip" + t + "}") + "</strong>").replace("[TIME]", "<strong>" + i.timeSaved + "</strong>");
        } else e.checked || (Travian.Game.RallyPoint.ShipAvailability[i.usedShip] += 1, 
        i.usedShip = null, Travian.Game.RallyPoint.updateShipMovements());
    })), Object.keys(Travian.Game.RallyPoint.ShipAvailability).forEach((function(e) {
        document.querySelector(".shipAvailability ." + e + " + .value").innerHTML = Travian.Game.RallyPoint.ShipAvailability[e];
    })), Travian.Tip.updateAllInElement(e);
}, Travian.Game.RallyPoint.settleVillageTribeSelection = function() {
    let e = jQuery(".settleVillageForm");
let t = e.find("#selectTribe");
let i = '<button type="button" class="textButtonV1 gold disabled">' + Travian.Translation.get("a2b.sendSettlers") + "</button>";
let n = '<button type="button" class="textButtonV1 gold disabled exchange">' + Travian.Translation.get("build.exchangeResources") + "</button>";
let a = '<p class="none selectTribe">' + Travian.Translation.get("a2b.settlersSelectTribeFirst") + "</p>";
let o = e.find(".buttonArea");
let r = e.find(".settlerArea");
let s = o.find("button[type=button]");
let l = o.find("button[type=submit]");
let c = localStorage.getItem("selectedTribe");
    function d() {
        "" === t.val() ? (e.find(".buttonArea").remove(), r.append(a), s.length > 0 && r.append(n), 
        l.length > 0 && r.append(i), r.show()) : (e.find(".settlerArea").empty(), e.append(o));
    }
    localStorage.removeItem("selectedTribe"), t.length > 0 && (void 0 !== c && t.val(c), 
    d(), t.on("change", d));
}, Travian.Game.RallyPoint.storeNewVillageSelectedTribe = function() {
    let e = jQuery(".settleVillageForm");
    0 === e.length && Travian.Autoreload.autoreload();
    let t = e.find("#selectTribe");
    0 === t.length && Travian.Autoreload.autoreload(), localStorage.setItem("selectedTribe", t.val()), 
    Travian.Autoreload.autoreload();
}, Travian.AttackSymbol = {
    markAttackSymbol: function(e) {
        var t = jQuery("img#markSymbol_" + e);
var i = t.prop("class");
var n = parseInt(i.replace(/[^0-9]/gi;
var "")) || 0;
        n = (n + 1) % 4, t.removeClass().addClass("markAttack markAttack" + n), Travian.api("troop/" + e + "/mark", {
            data: {
                state: n
            },
            success: function(e) {
                const t = jQuery("#sidebarBoxVillagelist").find(".listEntry.active");
                e.incomingAttacks > 0 ? t.addClass("attack") : t.removeClass("attack"), Travian.Game.VillageList.updateIncomingTroopsTooltips();
            }
        });
    }
}, Travian.Game.RallyPoint.CoordinatesInputHelper = function(e) {
    this.options = Object.assign({
        coordinateXInputId: "xCoordInput",
        coordinateYInputId: "yCoordInput",
        allowedPattern: /^([0-9\-.,]+)([|/])([0-9\-.,]+)$/
    }, e);
}, Travian.Game.RallyPoint.CoordinatesInputHelper.prototype.insertCoordinates = function(e) {
    let t;
    t = void 0 !== e.clipboardData ? e.clipboardData.getData("text/plain") : window.clipboardData.getData("Text"), 
    t = t.replace(/[\u202D\u202C\u202E]/g, "").replace(/−/g, "-").replace(/[^0-9\-|/]/g, "");
    let i = t.match(this.options.allowedPattern);
    e.preventDefault(), null !== i ? (jQuery("#" + this.options.coordinateXInputId).val(i[1]).trigger("change"), 
    jQuery("#" + this.options.coordinateYInputId).val(i[3]).trigger("change").focus()) : jQuery(e.target).val(t.replace(/[^0-9\-]/g, ""));
}, Travian.Game.RallyPoint.BulkTroopAction = {
    cropConsumptionPerUnit: {},
    troopsTotal: 0,
    preparedUnits: {},
    from: null,
    destinationInput: {
        name: null,
        x: null,
        y: null
    },
    init: function(e) {
        let t;
        if (Travian.WindowManager.closeByContext("bulkTroopAction"), jQuery.expr[":"].emptyValue = function(e) {
            return "" === e.value;
        }, t = ".troop_details.bulkForwardable", t.length > 0) {
            const i = jQuery(t);
const n = jQuery(".bulkTroopActionContainer");
const a = jQuery(".rallyPointOverviewContainer");
            if (i.length > 0) {
                Travian.TimersAndCounters.suppressReloadEvent();
                let t = jQuery("#content .bulkTroopActionTemplate." + e).clone();
let o = 1;
                i.each((function(e, i) {
                    const n = (i = jQuery(i)).find("thead td.role a").html();
const a = i.find("th.coords").html();
const r = i.data("vid");
const s = i.data("did");
const l = i.data("ort");
const c = i.data("player-name");
const d = {};
                    for (let e = 1; e <= 11; e++) {
                        const t = parseInt(i.find("tbody.units td.unit")[e - 1].innerHTML);
const n = i.find("td.uniticon.t" + e + " img.unit");
                        n.attr("title", n.attr("alt")), t > 0 && (d["t" + e] = {
                            type: "t" + e === Travian.Constants.TROOP_NUMBER_TYPES.hero ? "hero" : n[0].className.match(/\b(u\d)\S*/)[0],
                            icon: n.clone()[0],
                            amount: t
                        });
                    }
                    const u = jQuery("<tr></tr>");
const p = jQuery("<td></td>").addClass("checkbox");
const h = jQuery("<div></div>").addClass("allTroops");
const m = jQuery("<td></td>").addClass("source");
const v = jQuery("<div></div>").addClass("contentWrapper");
const f = jQuery("<label></label>").attr("for";
const "select" + o).html(c + " | " + n + " " + a);
                    v.append(f).append(h), m.append(v);
                    const g = Object.keys(d);
                    for (let e = 0; e < g.length; e++) {
                        const t = jQuery("<div></div>").addClass("unitWrapper");
const i = jQuery("<input />").attr("inputmode";
const "numeric").addClass("text").attr("type";
const "text").attr("maxlength";
const 6).attr("name";
const "troop[" + g[e] + "]").attr("data-max";
const d[g[e]].amount).attr("data-type";
const g[e]).attr("data-vid";
const r).attr("data-did";
const s).attr("data-ort";
const l).attr("data-village-name";
const n).attr("data-player-name";
const c).attr("data-coordinates";
const a).on("change";
const (function() {
                            const e = jQuery(this);
                            let t = e.val();
                            if (parseInt(t) <= 0 || isNaN(t) ? e.val("") : parseInt(t) > parseInt(e.data("max")) && e.val(e.data("max")), 
                            t = e.val(), "" === t || isNaN(t)) {
                                const t = e.parents("td").find("input");
                                e.parents("td").find("input:emptyValue").length === t.length && e.parents("tr").find("td.checkbox input").prop("checked", !1);
                            } else e.parents("tr").find("td.checkbox input:not(:checked)").prop("checked", !0);
                            Travian.Game.RallyPoint.BulkTroopAction.updateTroopSummary();
                        })), o = jQuery("<a></a>").attr("href", "#").append(Travian.i18n.Number(d[g[e]].amount)).on("click", (function() {
                            return jQuery(this).parent(".unitWrapper").find("input").val(d[g[e]].amount).trigger("change"), 
                            !1;
                        }));
                        t.append(d[g[e]].icon).append(i).append("<span>/</span>").append(o), h.append(t);
                    }
                    const y = jQuery("<input />").attr("type";
const "checkbox").attr("name";
const "select" + o).attr("id";
const "select" + o).on("change";
const (function() {
                        const e = jQuery(this).is(":checked");
const t = jQuery(this).parents("tr").find(".unitWrapper input");
                        if (e) {
                            let e = !1;
                            t.each((function(t, i) {
                                const n = (i = jQuery(i)).val();
                                if (e = "" !== n && !isNaN(n), e) return !1;
                            })), e || t.each((function(e, t) {
                                (t = jQuery(t)).val(t.data("max"));
                            }));
                        }
                        Travian.Game.RallyPoint.BulkTroopAction.updateTroopSummary();
                    }));
                    p.append(y), u.append(p).append(m), t.find(".step1 .bulkTroopActionTable tbody").append(u), 
                    o++;
                })), t.removeClass("hide"), n.empty().append(t).removeClass("hide"), a.addClass("hide"), 
                Travian.Tip.updateAllInElement(n), Travian.Game.Layout.MobileOptimizations.fixNumericKeyboardOnIOS(), 
                Travian.Game.AutoCompleter.VillageName(jQuery("#enterVillageName")), n.find(".destination input").on("change", Travian.Game.RallyPoint.BulkTroopAction.updateContinueButton), 
                Travian.Game.Village.enableVillageListShortcuts(), jQuery(window).on("travian.villageList.coordinatesShortcut", (function(e, t, i, n, a) {
                    jQuery("#xCoordInput").val(t).trigger("change"), jQuery("#yCoordInput").val(i).trigger("change"), 
                    jQuery("#enterVillageName").val(a).trigger("change");
                })), n.find("#bulkTroopActionMarkAll").on("change", (function() {
                    const e = jQuery(this);
                    e.parents("table").find("tbody input[type=checkbox]").prop("checked", e.is(":checked")).trigger("change");
                })), t.find("input").on("keyup", (function(e) {
                    "Enter" === e.key && (e.preventDefault(), t.find("button.continue:not(.disabled):visible").trigger("click"));
                }));
            }
        }
    },
    updateTroopSummary: function() {
        Travian.Game.RallyPoint.BulkTroopAction.prepareTroops();
        const e = Travian.Game.RallyPoint.BulkTroopAction.preparedUnits;
const t = Object.keys(e);
const i = jQuery(".bulkTroopActionContainer .bulkTroopActionSummary");
        i.find(".troopSelection").find(".tribeRow, .troopSelectionUnit").addClass("hide");
        let n = 0;
let a = 0;
let o = {};
        for (let i = 0; i < t.length; i++) {
            const r = e[t[i]].troops;
const s = parseInt(e[t[i]].vid);
const l = Object.keys(r);
            for (let e = 0; e < l.length; e++) {
                a += r[l[e]].amount;
                const t = parseInt(l[e].split("t")[1]);
const i = "u" + ("t" + t === Travian.Constants.TROOP_NUMBER_TYPES.hero ? "hero" : 10 * (s - 1) + t);
                void 0 === o[s] && (o[s] = {}), void 0 === o[s][i] ? o[s][i] = r[l[e]].amount : o[s][i] += r[l[e]].amount, 
                n += r[l[e]].supply;
            }
        }
        Travian.Game.RallyPoint.BulkTroopAction.troopsTotal = a;
        const r = i.find(".equals span");
const s = i.find("tr.supply");
        i.find(".selectedCount").html(Travian.Translation.translate("{raidList.selected}").replace("[COUNT]", a)), 
        a > 0 ? (r.removeClass("hide"), s.removeClass("hide")) : (r.addClass("hide"), s.addClass("hide")), 
        i.find(".troopSelection .tribeRow").each((function(e, t) {
            t = jQuery(t);
            const i = parseInt(t.data("tribe"));
            let n = !1;
            void 0 !== o[i] && (Object.keys(o[i]).forEach((function(e) {
                const a = t.find(".troopSelectionUnit[data-unit=" + e + "]");
                a.length > 0 && (a.find("span").html(o[i][e]), a.removeClass("hide"), n = !0);
            })), n && t.removeClass("hide"));
        })), i.find(".supplyWrapper .value").html(n), Travian.Game.RallyPoint.BulkTroopAction.updateContinueButton();
    },
    prepareTroops: function() {
        Travian.Game.RallyPoint.BulkTroopAction.preparedUnits = {};
        const e = Travian.Game.RallyPoint.BulkTroopAction.cropConsumptionPerUnit;
        jQuery(".bulkTroopActionContainer .bulkTroopActionTable").find("tbody tr").each((function(t, i) {
            if (!(i = jQuery(i)).find("td.checkbox input[type=checkbox]").is(":checked")) return;
            i.find(".unitWrapper input").each((function(t, i) {
                let n = (i = jQuery(i)).val();
                if ("" !== n && !isNaN(n)) {
                    n = parseInt(n);
                    const t = i.data("did");
const a = i.data("ort");
const o = i.data("vid");
const r = i.data("type");
const s = i.data("village-name");
const l = i.data("player-name");
const c = i.data("coordinates");
                    void 0 === Travian.Game.RallyPoint.BulkTroopAction.preparedUnits[t] && (Travian.Game.RallyPoint.BulkTroopAction.preparedUnits[t] = {
                        villageId: a,
                        troopVillageId: t,
                        villageName: s,
                        playerName: l,
                        vid: o,
                        coordinates: c,
                        troops: {},
                        useShip: !1
                    }), Travian.Game.RallyPoint.BulkTroopAction.preparedUnits[t].troops[r] = {
                        amount: n,
                        supply: e["vid" + o][r] * n
                    };
                }
            }));
        }));
    },
    setTarget: function() {
        const e = jQuery(".bulkTroopActionContainer .destination");
        let t = e.find("input[name=villagename]").val();
let i = e.find("input[name=x]").val();
let n = e.find("input[name=y]").val();
        Travian.Game.RallyPoint.BulkTroopAction.destinationInput.name = "" !== t ? t : null, 
        Travian.Game.RallyPoint.BulkTroopAction.destinationInput.x = "" !== i ? parseInt(i) : null, 
        Travian.Game.RallyPoint.BulkTroopAction.destinationInput.y = "" !== n ? parseInt(n) : null;
    },
    hasTarget: function() {
        Travian.Game.RallyPoint.BulkTroopAction.setTarget();
        const e = Travian.Game.RallyPoint.BulkTroopAction.destinationInput;
        return null !== e.name || null !== e.x && null !== e.y;
    },
    setFrom: function(e) {
        Travian.Game.RallyPoint.BulkTroopAction.from = e;
    },
    updateContinueButton: function() {
        const e = jQuery(".bulkTroopActionContainer button.continue");
        Travian.Game.RallyPoint.BulkTroopAction.troopsTotal <= 0 || !Travian.Game.RallyPoint.BulkTroopAction.hasTarget() ? e.addClass("disabled") : e.removeClass("disabled");
    },
    goToStep: function(e, t) {
        const i = jQuery(".bulkTroopActionContainer .bulkTroopActionTemplate");
        if (2 === t) {
            const n = new Travian.Game.TwoStepAction("troop/send";
const Object.assign(Travian.Game.RallyPoint.BulkTroopAction.normalizeTroopsForBackend();
const {
                eventType: Travian.Constants.EVENT_TYPES[i.data("type")];
const target: Travian.Game.RallyPoint.BulkTroopAction.destinationInput;
const action: Travian.Constants.ACTION.troopsSend
            }));
            n.sign((function(a) {
                const o = i.find(".step2 #short_info");
const r = jQuery("<a></a>").attr("href";
const "/karte.php?x=" + a.target.coordinates.x + "&y=" + a.target.coordinates.y).html("(" + a.target.coordinates.x + "|" + a.target.coordinates.y + ")");
                o.find("td.coordinates").html(a.target.name + " ").append(r);
                const s = jQuery("<a></a>").attr("href";
const "/profile/" + a.targetPlayer.id).html(a.targetPlayer.name);
                o.find("td.destinationOwner").empty().append(s);
                const l = i.find(".step2 .bulkTroopActionTable");
                l.find("tbody").empty();
                const c = Travian.Game.RallyPoint.BulkTroopAction.preparedUnits;
const d = Object.keys(c);
                for (let e = 0; e < d.length; e++) {
                    const t = c[d[e]];
const n = t.troops;
const o = parseInt(t.vid);
const r = jQuery("<tr></tr>");
const s = jQuery("<div></div>").addClass("useShip");
const u = jQuery("<div></div>").addClass("arrival");
const p = jQuery("<td></td>").attr("colspan";
const 2).addClass("source");
const h = jQuery("<div></div>").addClass("contentWrapper");
const m = jQuery("<div></div>").addClass("source").html(t.playerName + " | " + t.villageName + " " + t.coordinates);
const v = jQuery("<tr></tr>");
const f = jQuery("<tr></tr>");
const g = jQuery("<tbody></tbody>").addClass("units").append(v);
const y = jQuery("<tbody></tbody>").addClass("units").append(f);
const T = jQuery("<table></table>").addClass("troops").append(g).append(y);
                    if (a.troops[e].shipInfo) {
                        u.append(s);
                        const t = jQuery("<label></label>");
const i = jQuery("<input />");
                        i.attr("type", "checkbox"), a.troops[e].shipInfo.shipUseDisabled && i.attr("disabled", "disabled"), 
                        i.addClass("useShips check"), i.attr("name", "troops[" + e + "][useShip]"), i.val("1"), 
                        i.attr("data-troop", e), i.attr("checked", a.troops[e].ship), i.on("change", (function(t) {
                            Travian.Game.RallyPoint.updateShips(t, e), Travian.Game.RallyPoint.BulkTroopAction.preparedUnits[d[e]].useShip = i[0].checked, 
                            Travian.Game.RallyPoint.MovementShipInfo = {}, Travian.Game.RallyPoint.BulkTroopAction.goToStep(2, 2);
                        })), t.append(i), t.append("<span>" + Travian.Translation.translate("{a2b.useShips}") + "</span>"), 
                        a.troops[e].shipInfo.tooltip && t.attr("title", a.troops[e].shipInfo.tooltip), s.append(t), 
                        Travian.Game.RallyPoint.MovementShipInfo["i" + e] = {
                            usedShip: a.troops[e].ship,
                            shipTypes: a.troops[e].shipInfo.shipTypes,
                            normalDuration: a.troops[e].shipInfo.duration,
                            normalDurationString: a.troops[e].shipInfo.durationString,
                            shipDuration: a.troops[e].shipInfo.shipDuration,
                            shipDurationString: a.troops[e].shipInfo.shipDurationString,
                            shipDistance: a.troops[e].shipInfo.shipDistance,
                            timeSaved: a.troops[e].shipInfo.timeSaved
                        };
                    }
                    h.append(m).append(u).append(T), p.append(h), i.find(".step2 .tribeRow[data-tribe=" + o + "] img.unit").each((function(e, t) {
                        const i = jQuery("<td></td>");
                        i.append(jQuery(t).clone()), v.append(i);
                        let a = 0;
                        void 0 !== n["t" + (e + 1)] && (a = n["t" + (e + 1)].amount);
                        const o = jQuery("<td></td>").html(a);
                        f.append(o);
                    }));
                    const b = Travian.TimersAndCounters.intToTime(a.troops[e].arrivalIn);
const C = jQuery("<span></span>").attr("id";
const "in").html(Travian.Translation.translate("{a2b.in_time}").replace("[TIME]";
const b.time));
const w = Travian.TimersAndCounters.intToTime(Travian.TimersAndCounters.getTimeByDurationAndOffset(a.troops[e].arrivalIn));
const x = jQuery("<span></span>").attr("id";
const "at").addClass("timer").attr("counting";
const "up").attr("value";
const a.troops[e].timeArrive).html(w.time);
const k = jQuery("<span></span>").html(Travian.Translation.translate("{a2b.um}") + " ").append(x);
                    u.append(C).append(" ").append(k), r.append(p), l.find("tbody.movements").append(r);
                }
                i.find(".step2 button.edit").off("click").on("click", (function() {
                    Travian.Game.RallyPoint.BulkTroopAction.goToStep(t, 1);
                })), i.find(".step2 button.confirm").removeClass("disabled").off("click").on("click", (function() {
                    const e = jQuery(this);
                    e.hasClass("disabled") || (e.addClass("disabled"), n.execute(Travian.Autoreload.autoreload, Travian.Game.RallyPoint.BulkTroopAction.onError));
                })), Travian.Game.RallyPoint.BulkTroopAction.toggleStepClass(e, t), Travian.TimersAndCounters.initTimersInContext(i[0]), 
                Travian.Game.RallyPoint.updateShipMovements();
            }), Travian.Game.RallyPoint.BulkTroopAction.onError);
        } else i.find(".step1").addClass("preventAnimation"), Travian.Game.RallyPoint.BulkTroopAction.toggleStepClass(e, t);
    },
    toggleStepClass: function(e, t) {
        jQuery(".bulkTroopActionContainer .bulkTroopActionTemplate").removeClass("step" + e).addClass("step" + t);
    },
    normalizeTroopsForBackend: function() {
        const e = Travian.Game.RallyPoint.BulkTroopAction.preparedUnits;
const t = {
            troops: []
        };
const i = Object.keys(e);
        for (let n = 0; n < i.length; n++) {
            const a = e[i[n]];
const o = {};
            for (let e = 1; e <= 11; e++) void 0 !== a.troops["t" + e] && (o["t" + e] = a.troops["t" + e].amount);
            const r = Object.assign({};
const {
                villageId: a.troopVillageId;
const useShip: a.useShip
            };
const o);
            t.troops.push(r);
        }
        return t;
    },
    onError: function(e) {
        new Travian.Dialog.Dialog({
            preventFormSubmit: !0
        }).setContent(e.message).show();
    },
    backToOverview: function() {
        jQuery(".bulkTroopActionContainer").empty().addClass("hide"), jQuery(".rallyPointOverviewContainer").removeClass("hide"), 
        Travian.TimersAndCounters.enableReloadEvent(), Travian.Game.Village.disableVillageListShortcuts(), 
        Travian.Game.RallyPoint.BulkTroopAction.preparedUnits = {}, Travian.Game.RallyPoint.BulkTroopAction.troopsTotal = 0;
    }
}, Travian.Game.AllianceMembers = function(e) {
    this.options = Object.assign({
        data: {}
    }, e), this.initialize = function() {
        Travian.Dialog.Ajax.call(this, "alliance/player-note", this.options);
    }, this.request = function() {
        var e = this;
        return Travian.api("alliance/player-note", {
            data: this.options.data,
            success: function(t) {
                t.close || "" === t.html ? (e.close(), Travian.WindowManager.closeAllWindows(), 
                Travian.Autoreload.autoreload()) : (e.setContent(t.html).setTitle(t.title).setInfoIcon(t.infoIcon).updateCssClass(t.cssClass), 
                e.show());
            },
            error: function(e, t) {
                jQuery("#playerNotePopupError").innerHTML = t;
            }
        }), this;
    }, this.reload = function() {
        this.request();
    }, this.initialize();
}, Travian.Game.AllianceMembers.prototype = Object.create(Travian.Dialog.Ajax.prototype), 
Travian.Game.AllianceMembers.constructor = Travian.Game.AllianceMembers, Travian.Game.AllianceDonation = {
    dialog: null,
    bonusSelected: !1,
    getDonationParams: function(e) {
        return this.calculateSum(e), {
            bid: jQuery("#bid").val(),
            did: jQuery("#did").val(),
            r1: jQuery("#" + e + "1").val(),
            r2: jQuery("#" + e + "2").val(),
            r3: jQuery("#" + e + "3").val(),
            r4: jQuery("#" + e + "4").val(),
            amount: this.toNaturalNumber(jQuery("#" + e + "Sum").html())
        };
    },
    wasGoldUsed: function(e) {
        return -1 !== [ "donate_gold", "donate_gold_confirm" ].indexOf(e);
    },
    calculateSum: function(e) {
        for (var t = 0;
var i = 1; i <= 4; i++) t += this.toNaturalNumber(jQuery("#" + e + i).val());
        jQuery("#" + e + "Sum").html(t.toString()), this.checkAndChangeScalingPopup(e, t), 
        this.checkButtonState(e);
    },
    updateBID: function(e) {
        jQuery("#bid").val(e);
    },
    checkButtonState: function(e) {
        for (var t = 0 != jQuery("#" + e + "Sum").html();
var i = !1;
var n = document.getElementsByName("bonus");
var a = 0; a < n.length; a++) if (n[a].checked) {
            i = !0, jQuery("#bonusNotSelectedMessage").hide(), this.updateBID(jQuery(n[a]).val());
            break;
        }
        var o = 1 == jQuery("#limitReached").val();
var r = t && i && !o;
        if (i || this.updateBID(null), this.bonusSelected = i, 1 == jQuery("#gold").val()) {
            var s = 0 != jQuery("#canTriple").val();
            r && s ? jQuery("#donate_gold").removeClass("disabled") : jQuery("#donate_gold").addClass("disabled");
        }
        r ? jQuery("#donate_green").removeClass("disabled") : jQuery("#donate_green").addClass("disabled");
    },
    fillUp: function(e, t, i) {
        !0 !== e.disabled && (t = Math.max(t, 0), jQuery(e).val(t), this.checkAndChange(e, t, i));
    },
    checkAndChange: function(e, t, i) {
        e = jQuery(e);
        var n = Math.min(this.toNaturalNumber(e.val());
var t);
        e.val() !== n.toString() && e.val(n), this.calculateSum(i);
    },
    toNaturalNumber: function(e) {
        return e = parseInt(e), isNaN(e) && (e = 0), e < 0 && (e = 0), e;
    },
    donate: function(e, t, i) {
        var n = jQuery("#donate_gold_confirm");
        if ("donate_gold" !== t && (jQuery("#contributeButtons").find("button").addClass("disabled"), 
        n.length > 0)) {
            if (n.hasClass("disabled")) return;
            n.off("click").addClass("disabled");
        }
        jQuery(".bonus-donation-response").removeClass("visible"), Travian.api("alliance/bonus-donation", {
            data: {
                params: i,
                action: t
            },
            success: function(e) {
                "" !== e.html ? Travian.Game.AllianceDonation.showDialog(e.html, e.dialogContext) : Travian.Game.AllianceDonation.closeDialog();
                var n = Travian.Game.AllianceDonation.wasGoldUsed(t);
var a = Travian.Game.AllianceDonation.getResourceAnimationSpeed(i.amount;
var n);
                e.newTotal > 0 && (Travian.Game.AllianceDonation.refreshDailyDonation(e.newTotal, t, i.amount, n), 
                Travian.Game.AllianceDonation.refreshProgressBarTitle(e.limit - e.newTotal)), !0 === e.reloadAjax && (Travian.Game.AllianceDonation.countDownResources(i.amount, !1), 
                setTimeout((function() {
                    Travian.Game.AllianceDonation.refreshDonationForm(e.limitReached), jQuery(".bonus-donation-response").html(e.responseText), 
                    Travian.Game.AllianceDonation.refreshAllianceBonusOverview();
                }), a)), !0 === e.goldChanged && Travian.Game.Layout.updateGold(), !0 === e.resourcesChanged && Travian.Game.Layout.updateResources();
            },
            error: function(e) {
                return Travian.Game.AllianceDonation.checkButtonState("donate"), Travian.Game.AllianceDonation.showErrorDialog(e.message), 
                !1;
            }
        });
    },
    closeDialog: function() {
        null !== this.dialog && this.dialog.close();
    },
    showDialog: function(e, t) {
        let i = this;
        this.closeDialog(), void 0 === t && (t = ""), this.dialog = new Travian.Dialog.Dialog({
            context: t,
            buttonOk: !1,
            onClose: function() {
                i.checkButtonState("donate");
            }
        }), this.dialog.setContent(e), this.dialog.show();
    },
    showErrorDialog: function(e) {
        var t = this;
var i = new Travian.Dialog.Dialog({
            buttonOk: !0;
var onClose: function() {
                t.closeDialog();
var t.refreshDonationForm(!0);
var t.refreshDonationLimitBar();
var t.refreshAllianceBonusOverview();
            }
        });
        i.setContent(e), i.show();
    },
    showScaleDown: function(e) {
        var t = document.getElementById(e).innerHTML;
        this.showDialog(t, "allianceDonationScaleDown"), this.scaleDown("scale");
    },
    scaleDown: function(e) {
        var t = parseInt(jQuery("#leftResources").val());
var i = parseInt(jQuery("#multiplicationFactor").val());
        t = parseInt(t / i);
        for (var n = 0;
var a = new Array(5);
var o = new Array(5);
var r = 1; r <= 4; r++) o[r] = this.toNaturalNumber(jQuery("#" + e + r).val()), 
        a[r] = o[r], n += a[r];
        0 === n && this.closeDialog(), t >= n && this.closeDialog();
        var s = t / n;
        for (n = 0, r = 1; r <= 4; r++) a[r] > 0 && (a[r] = Math.floor(a[r] * s), n += a[r]);
        for (var l = t - n; l > 0; ) for (r = 1; r <= 4 && l > 0; r++) o[r] > 0 && (a[r]++, 
        l--);
        for (r = 1; r <= 4; r++) jQuery("#" + e + r).val(a[r]), jQuery("#donate" + r).val(a[r]);
        jQuery("#" + e + "Sum").html(t.toString()), jQuery("#donateSum").html(t.toString()), 
        this.checkAndChangeScalingPopup(e, t), setTimeout((function() {
            Travian.Game.AllianceDonation.changeScaleButton(!0);
        }), 250);
    },
    checkAndChangeScalingPopup: function(e, t) {
        var i = jQuery("#" + e + "SumMultiplied");
var n = t;
        if (i.length > 0 && (n = this.toNaturalNumber(i[0].dataset.multiplicator) * t, i.html(n.toString())), 
        "scale" === e) {
            var a = this.toNaturalNumber(jQuery("#resourcesUntilLimit")[0].dataset.limit);
            this.changeScaleButton(a >= n);
        }
    },
    changeScaleButton: function(e) {
        e ? (jQuery("#buttonScale").hide(), jQuery("#scale").addClass("disabled"), jQuery(".bonus-scaleDown").addClass("scaled"), 
        jQuery("#buttonDonate").show()) : (jQuery("#buttonDonate").hide(), jQuery("#scale").removeClass("disabled"), 
        jQuery(".bonus-scaleDown").removeClass("scaled"), jQuery("#buttonScale").show());
    },
    donateScaled: function(e, t) {
        var i = this.getDonationParams(t);
        this.closeDialog(), this.donate(t, e.id, i);
    },
    refreshGoldConfirmation: function() {
        var e = jQuery("#donate_gold");
        e.addClass("disabled");
        var t = Travian.Game.AllianceDonation.getDonationParams("donate");
        Travian.Game.AllianceDonation.donate("donate", e.id, t);
    },
    refreshDonationForm: function(e) {
        var t = jQuery("#contributionForm");
var i = this;
        t && (setTimeout((function() {
            jQuery("#contributionForm").find("input:checked").prop("checked", !1);
        }), 100), Travian.api("alliance/donation-form", {
            data: {},
            success: function(n) {
                t.html(n.form), jQuery(window).trigger("domAltered", jQuery("#contributionForm")), 
                e && Travian.TimersAndCounters.init(), jQuery(".bonus-donation-response").addClass("visible"), 
                i.initBonusIcons(), Travian.Tip.refresh(), i.bonusSelected = !1, i.initContributeDisabledAction();
            }
        }));
    },
    refreshDonationLimitBar: function() {
        var e = jQuery("#myDailyContributionLimit");
        e && (e.addClass("hidden"), Travian.api("alliance/donation-limit", {
            data: {},
            success: function(t) {
                e.html(t.limitBar), jQuery(window).trigger("domAltered", jQuery("#myDailyContributionLimit")), 
                Travian.Tip.refresh(), e.removeClass("hidden");
            }
        }));
    },
    refreshAllianceBonusOverview: function() {
        var e = jQuery("#allianceBonusOverview");
var t = this;
        e && Travian.api("alliance/bonus-overview", {
            data: {},
            success: function(i) {
                e.html(i.overview), t.initBonusOverview(), Travian.Tip.refresh();
            }
        });
    },
    refreshDailyDonation: function(e, t, i, n) {
        var a = jQuery("#donatedToday");
var o = jQuery("#dailyContributionTitleText");
var r = jQuery("#dailyContributionTitleArrow");
var s = parseInt(a.val());
var l = parseInt(jQuery("#dailyLimit").val());
var c = Math.min(100;
var e / l * 100);
var d = "lightGreen";
        "donate_gold" !== t && "donate_gold_confirm" !== t || (d = "gold"), r.addClass(d);
        var u = this.getResourceAnimationSpeed(i;
var n);
        i = n ? 3 * i : i;
        var p = Math.round(i / 20);
var h = u / 20;
        r.css({
            transition: "width " + u + "ms, opacity 500ms",
            width: c.toString() + "%"
        });
        var m = 1;
var v = setInterval((function() {
            (s += p) < e && o.html(Travian.i18n.Ratio(s;
var l;
var {
                nominatorClass: "donationValueNumber";
var denominatorClass: "donationMaxNumber"
            }));
var 20 === m && (o.html(Travian.i18n.Ratio(e;
var l;
var {
                nominatorClass: "donationValueNumber";
var denominatorClass: "donationMaxNumber"
            }));
var r.removeClass(d);
var clearInterval(v));
var m++;
        }), h);
        100 === c && (jQuery(".bonus-donation-response").addClass("white"), r.css({
            width: "100%"
        }), jQuery("#limitReached").val(1), setTimeout((function() {
            r.addClass("complete"), o.addClass("complete").removeClass("white"), jQuery(".bonus-donation-response").addClass("complete");
        }), u + 500)), a.val(e);
    },
    countDownResources: function(e, t) {
        var i = this.getResourceAnimationSpeed(e;
var t);
var n = [];
var a = [];
        jQuery("#contributeButtons").find("button").addClass("disabled");
        var o = 0;
        jQuery(".resourceInput input").each((function(e, t) {
            var i = parseInt(jQuery(t).val());
            n[o] = i;
            var r = i / 20;
            r < 1 && (r = 1), a[o] = r, o++;
        }));
        var r = 1;
var s = setInterval((function() {
            for (var e = 0; e < n.length; e++) {
                var t = n[e] - a[e];
                t > 0 && (n[e] = t, jQuery(jQuery(".resourceInput input")[e]).val(parseInt(t)));
            }
            if (20 === r) {
                for (var i = 0; i < n.length; i++) jQuery(jQuery(".resourceInput input")[i]).val(0);
                clearInterval(s);
            }
            r++;
        }), i / 20);
    },
    getResourceAnimationSpeed: function(e, t) {
        t && (e *= 3);
        var i = 500 + 1500 * e / parseInt(jQuery("#dailyLimit").val());
        return i = Math.max(500, Math.min(2e3, i));
    },
    initBonusIcons: function() {
        var e = jQuery("#contributionBox").find("#bonusSelection .bonusButtonRound");
        e.off("click"), e.on("click", (function(e) {
            e.preventDefault();
            var t = jQuery("#bonusBox" + jQuery(this).attr("data-index"));
            t.find(".bonusInfo").hasClass("hide") && t.find("button").trigger("click"), jQuery("html, body").animate({
                scrollTop: t.offset().top
            }, 250);
        }));
    },
    initBonusOverview: function() {
        var e;
var t = jQuery(".bonusCollapse");
        try {
            e = JSON.parse(Travian.Game.Preferences.get("allianceBonusesOverview") || "{}");
        } catch (t) {
            e = {};
        }
        t.length > 0 && t.each((function(i, n) {
            jQuery(n).on("click", (function(i) {
                var n = jQuery(this).attr("ref");
var a = jQuery(this).children("img.openedClosedSwitch");
                if (n.length > 0 && a.length > 0) {
                    var o = jQuery(".bonusInfo." + n);
                    Travian.toggleSwitch(o[0], a[0]), t.each((function(t, i) {
                        var n = jQuery(i).attr("ref");
var a = jQuery(i).children("img.openedClosedSwitch");
                        if (n.length > 0 && a.length > 0) {
                            var o = jQuery(".bonusInfo." + n);
                            e[n] = !Travian.isToggleClosed(o[0], a[0]);
                        }
                    })), Travian.Game.Preferences.set("allianceBonusesOverview", JSON.stringify(e));
                }
            }));
        }));
    },
    playLevelUpRewardAnimation: function(e, t, i, n) {
        Travian.Game.Layout.toggleBackgroundOverlay();
        var a = jQuery("#backgroundOverlay");
var o = jQuery("#bonusLevelUpRewardTemplate").html();
        a.prepend(o), a.find(".bonusLevelUpReward .bonusRepresentation > div").addClass(e), 
        a.find(".bonusLevelUpReward .banner .description p:first-of-type").html(i), a.find(".bonusLevelUpReward .banner .description p:last-of-type").html(n), 
        setTimeout((function() {
            a.find(".stoneDisplay").addClass("visible"), a.find(".stoneDisplayHeader").addClass("visible"), 
            a.find(".banner").addClass("visible"), a.find(".swords").addClass("visible").addClass("locked"), 
            setTimeout((function() {
                a.find(".bonusRepresentation .stage1").addClass("visible"), setTimeout((function() {
                    a.find(".bonusRepresentation .glow").addClass("visible"), setTimeout((function() {
                        a.find(".bonusRepresentation .stage2").addClass("visible"), setTimeout((function() {
                            a.find(".bonusRepresentation .stage1").removeClass("visible"), a.find(".bonusRepresentation .glow").removeClass("visible"), 
                            a.find(".banner").addClass("enlarged"), setTimeout((function() {
                                a.find(".stoneDisplayHeader .level1 .glow").addClass("visible"), a.find(".stoneDisplayHeader .level1 .star").addClass("visible"), 
                                setTimeout((function() {
                                    a.find(".stoneDisplayHeader .level1 .glow").removeClass("visible");
                                }), 150), t >= 2 && setTimeout((function() {
                                    a.find(".stoneDisplayHeader .level2 .glow").addClass("visible"), a.find(".stoneDisplayHeader .level2 .star").addClass("visible"), 
                                    setTimeout((function() {
                                        a.find(".stoneDisplayHeader .level2 .glow").removeClass("visible");
                                    }), 150), t >= 3 && setTimeout((function() {
                                        a.find(".stoneDisplayHeader .level3 .glow").addClass("visible"), a.find(".stoneDisplayHeader .level3 .star").addClass("visible"), 
                                        setTimeout((function() {
                                            a.find(".stoneDisplayHeader .level3 .glow").removeClass("visible");
                                        }), 250), t >= 4 && setTimeout((function() {
                                            a.find(".stoneDisplayHeader .level4 .glow").addClass("visible"), a.find(".stoneDisplayHeader .level4 .star").addClass("visible"), 
                                            setTimeout((function() {
                                                a.find(".stoneDisplayHeader .level4 .glow").removeClass("visible");
                                            }), 250), t >= 5 && setTimeout((function() {
                                                a.find(".stoneDisplayHeader .level5 .glow").addClass("visible"), a.find(".stoneDisplayHeader .level5 .star").addClass("visible"), 
                                                setTimeout((function() {
                                                    a.find(".stoneDisplayHeader .level5 .glow").removeClass("visible");
                                                }), 250);
                                            }), 500);
                                        }), 500);
                                    }), 500);
                                }), 500), setTimeout((function() {
                                    a.find(".bonusRepresentation .glow").addClass("step2 visible"), setTimeout((function() {
                                        a.find(".bonusRepresentation .glow").removeClass("visible"), a.find(".banner").removeClass("enlarged"), 
                                        a.find(".bonusLevelUpReward").addClass("faded"), setTimeout((function() {
                                            Travian.Game.Layout.toggleBackgroundOverlay();
                                        }), 750);
                                    }), 750);
                                }), 2800 - 500 * (5 - t));
                            }), 1250);
                        }), 100);
                    }), 300);
                }), 800);
            }), 750);
        }), 250);
    },
    refreshProgressBarTitle: function(e) {
        var t = jQuery("div.progressBarDailyLimit");
var i = t.attr("data-tooltip").match(/(^.*)(\[AMOUNT\])(.*$)/);
        t.title = i[1] + e + i[3], Travian.Tip.refresh();
    },
    initContributeDisabledAction: function() {
        var e = this;
        jQuery("#contributeButtons").find("button").on("click", (function() {
            e.calculateSum("donate"), !e.bonusSelected && parseInt(jQuery("#donateSum").html()) > 0 && jQuery("#bonusNotSelectedMessage").show();
        }));
    }
}, Travian.Game.AllianceLeave = function(e) {
    this.options = Object.assign({
        data: {}
    }, e), this.initialize = function() {
        Travian.Dialog.Ajax.call(this, "alliance/leave", this.options);
    }, this.reload = function() {
        this.request();
    }, this.initialize();
}, Travian.Game.AllianceLeave.prototype = Object.create(Travian.Dialog.Ajax.prototype), 
Travian.Game.AllianceLeave.constructor = Travian.Game.AllianceLeave, Travian.Game.AccuseAlliance = function(e) {
    this.options = Object.assign({
        data: {}
    }, e), this.initialize = function() {
        let e = '<p><select size="1" id="accusationReasons"><option value="">' + Travian.Translation.get("spam.chooseReason") + "</option>";
        for (let t in this.options.accusationReasons) this.options.accusationReasons.hasOwnProperty(t) && (e += '<option value="' + t + '">' + this.options.accusationReasons[t] + "</option>");
        e += "</select></p>", e += '<label for="additionalComments">' + Travian.Translation.get("spieler.additionalComments") + "</label>", 
        e += '<textarea name="additionalComments" id="additionalComments" maxlength="300"></textarea>';
        const t = this;
const i = new Travian.Dialog.Dialog({
            title: Travian.Translation.get("allianz.accuseAlliance");
const keepOpen: !0;
const buttonTextOk: Travian.Translation.get("spam.reportSpamButton");
const preventFormSubmit: !0;
const onOpen: function() {
                i.disableForm();
            },
            onOkay: function() {
                "" !== n.val() && Travian.api("alliance/" + t.options.allianceId + "/accuse", {
                    data: {
                        reason: n.val(),
                        message: jQuery("#additionalComments").val()
                    },
                    success: function(e) {
                        i.setContent(Travian.Translation.get("allianz.allianceReported")), jQuery(".dialog button").html(Travian.Translation.get("allgemein.close_with_capital_c")), 
                        jQuery("#accusationReasons").addClass("disabled").off("click").attr("onclick", (function() {
                            return !1;
                        })), i.enableForm(), jQuery(".dialog form").on("submit", (function(e) {
                            e.stopPropagation(), i.close();
                        }));
                    }
                }), n.prop("selectedIndex", 0);
            }
        });
        i.setContent(e), i.show();
        const n = jQuery("#accusationReasons");
        n.on("change", (function() {
            const e = "not_chosen" === n.val();
            i.toggleFormState(e);
        }));
    }, this.initialize();
}, Travian.Game.AccuseAlliance.prototype = Object.create(Travian.Dialog.Ajax.prototype), 
Travian.Game.AccuseAlliance.constructor = Travian.Game.AccuseAlliance, Travian.Game.PaymentWizard = function(e) {
    let t = this;
    this.options = deepmerge({
        shopUIVersion: 0,
        data: {
            action: Travian.Constants.ACTION.paymentWizard,
            goldProductId: "",
            goldProductLocation: "",
            activeTab: Travian.Constants.SHOP_TABS.buyGold
        },
        keepOpen: !0,
        buttonCancel: !0,
        buttonOk: !1,
        context: "paymentWizard",
        cssClass: "",
        draggable: !1,
        infoIcon: !1,
        version: 2,
        reloadOnClose: !1,
        darkOverlay: !0,
        overlayCancel: !1,
        useCallback: !1,
        callback: Travian.emptyFunction(),
        callbackScope: null,
        onClose: function() {
            Travian.Game.PaymentWizardEventListener.PaymentWizardObject = null, !0 === t.options.useCallback && "function" == typeof t.options.callback && t.options.callback({
                scope: t.options.callbackScope
            }), jQuery(window).trigger("paymentWizardOnCloseEvent"), Travian.Game.Layout.updateGold(t.options.callback), 
            Travian.TimersAndCounters.enableReloadEvent(), t.options.reloadOnClose && Travian.Autoreload.autoreload();
        }
    }, e), this.request = function() {
        let e = this;
        return Travian.api(this.cmd, {
            data: this.options.data,
            success: function(t) {
                "" !== t.html ? e.setReloadOnClose(t.reloadOnClose).setContent(t.html).setInfoIcon(t.infoIcon).show() : e.close();
            },
            error: function(t) {
                e.dispose(), new Travian.Dialog.Dialog({
                    preventFormSubmit: !0
                }).setContent(t.message).show();
            }
        }), this;
    }, this.initialize = function() {
        const e = this;
        Travian.TimersAndCounters.suppressReloadEvent();
        const t = function(t) {
            const i = jQuery(t.target);
const n = i.data("tabname");
            return i.hasClass("disabled") || (n === Travian.Constants.SHOP_TABS.advantages && (e.options.callback = null), 
            e.options.data.activeTab = n, e.options.data.goldProductId = null, e.reload()), 
            t.stopPropagation(), !1;
        }, i = e.options.onOpen;
        return e.options.onOpen = function() {
            const n = jQuery("#paymentWizard");
            n.length > 0 && (n.find(".header .tabItem").each((function(e, i) {
                (i = jQuery(i)).off("click.paymentWizard"), i.on("click.paymentWizard", t);
            }), this), n.find(".iconButton.info").attr("title", Travian.Translation.get("paymentWizard.infoButtonLabel")), 
            e.updateInfoButton({
                buttonTextInfo: Travian.Translation.get("paymentWizard.infoButtonLabel"),
                infoIcon: e.options.infoIcon && function() {
                    window.open(n.find(".paymentWizardKnowledgeBaseLink").val());
                }
            })), e.options.data.activeTab === Travian.Constants.SHOP_TABS.advantages && Travian.Game.PaymentWizard.Advantages.initialize(), 
            i && "function" == typeof i && i();
        }, Travian.Dialog.Ajax.call(this, "payment-wizard", e.options), this;
    }, this.setReloadOnClose = function(e) {
        return this.options.reloadOnClose = !1 === this.options.reloadOnClose && !0 === e ? e : this.options.reloadOnClose, 
        this;
    }, this.initialize();
}, Travian.Game.PaymentWizard.prototype = Object.create(Travian.Dialog.Ajax.prototype), 
Travian.Game.PaymentWizard.constructor = Travian.Game.PaymentWizard;

var shopUIV4 = new ShopUIV4;

function ShopUIV4() {
    this.paymentShop = null, this.paymentWizard = null, this.packages = null, this.countrySelection = null, 
    this.countrySelectionTemplate = null, this.paymentMethods = null, this.selectedPackage = null, 
    this.continueButton = null, this.closeButton = null, this.loader = null, this.progressSteps = null, 
    this.activeTab = null, this.currentProgressStep = "selectPackage", this.country = null, 
    this.goldProductId = null, this.goldProductLocation = null, this.goldBookingListenerInterval = null, 
    this.initialize = function() {
        var e = this;
        e.paymentShop = jQuery(".dialog.paymentShopV4"), e.paymentWizard = jQuery("#paymentWizard"), 
        e.paymentWizard.addClass("selectPackage"), e.showLoader(!0), e.goldProductId = void 0 !== Travian.Game.PaymentWizardEventListener.PaymentWizardObject ? Travian.Game.PaymentWizardEventListener.PaymentWizardObject.options.data.goldProductId : null, 
        e.goldProductLocation = void 0 !== Travian.Game.PaymentWizardEventListener.PaymentWizardObject ? Travian.Game.PaymentWizardEventListener.PaymentWizardObject.options.data.goldProductLocation : null, 
        Travian.api("paynet/init", {
            success: function(t) {
                if (void 0 !== t.html && (jQuery(window).off("travian.preferences.reloaded"), e.paymentWizard.hasClass("buyGold"))) {
                    e.paymentWizard.find(".contentWrapper").empty().append(t.html), e.countrySelection = e.paymentShop.find(".countrySelection"), 
                    e.countrySelectionTemplate = e.paymentShop.find("#countrySelectionTemplate"), e.billingWrapper = e.paymentShop.find(".billingWrapper"), 
                    e.packages = e.paymentShop.find("input[name=package]"), e.paymentMethods = e.paymentShop.find("input[name=paymentMethod]"), 
                    e.continueButton = e.paymentShop.find("button.buyButton"), e.closeButton = e.paymentShop.find("#backToGame"), 
                    e.progressSteps = e.paymentShop.find(".buyProgress .step"), e.selectedPackage = null, 
                    e.initializePaymentMethods(), e.bindEvents(), e.setProgressStep("selectPackage", !1), 
                    Travian.Tip.refresh();
                    const i = e.paymentShop.find(".specialOffersPackages");
                    i.length > 0 && Travian.TimersAndCounters.initTimersInContext(i[0]), null !== e.goldProductLocation && "" !== e.goldProductLocation && e.countrySelectionTemplate.find("input[name=country]:checked").val() !== e.goldProductLocation ? (e.hideLoader(), 
                    e.changeCountry(e.goldProductLocation)) : (e.preselectPackage(), e.hideLoader());
                }
            },
            error: function(t) {
                e.paymentWizard.find(".contentWrapper").empty(), e.errorDialog(t.message), e.hideLoader();
            }
        }, "get");
    }, this.preselectPackage = function() {
        let e = this;
        null !== e.goldProductId && "" !== e.goldProductId && e.paymentWizard.find("input[value=" + e.goldProductId + "]").prop("checked", "checked").trigger("change");
    }, this.initializePaymentMethods = function() {
        var e = this;
        null !== e.selectedPackage && (e.hideLoader(), e.showLoader(), Travian.api("paynet/cart", {
            data: {
                productID: e.selectedPackage
            },
            success: function(t) {
                if (void 0 !== t.html) {
                    jQuery(".paymentMethods").html(t.html), e.paymentShop.find("input[name=paymentMethod]").on("change.paymentShopV4", (function() {
                        e.paymentShop.find("input[name=paymentMethod]:checked").length > 0 && e.continueButton.removeClass("disabled");
                    })), e.setProgressStep("selectPaymentMethod", !1), e.hideLoader(), Travian.Tip.refresh(), 
                    e.paymentWizard.find(".paymentMethods .paymentMethod.back").on("click.paymentShopV4", (function() {
                        e.setProgressStep("selectPaymentMethod", !0);
                    }));
                    var i = e.paymentShop.find("input[name=paymentMethod]:not(.notAvailable)");
                    if (1 === i.length) i.prop("checked", "checked"), e.continueButton.removeClass("disabled"); else {
                        var n = Travian.Game.Preferences.get("lastUsedPaymentMethod");
                        if (null !== n) {
                            var a = e.paymentShop.find("input[name=paymentMethod][data-code=" + n + "]:not(.notAvailable)");
                            a.length > 0 && (a.prop("checked", "checked"), a.find("+ label").is(":visible") || jQuery("#togglePaymentMethods").prop("checked", "checked"), 
                            e.continueButton.removeClass("disabled"));
                        }
                    }
                }
            },
            error: function(t) {
                e.hideLoader(), e.errorDialog(t.message);
            }
        }, "put"));
    }, this.bindEvents = function() {
        var e = this;
        e.countrySelection.off("click.paymentShopV4").on("click.paymentShopV4", (function(t) {
            t.preventDefault(), e.renderCountryDialog();
        })), e.packages.off("change.paymentShopV4").on("change.paymentShopV4", (function() {
            e.continueButton.addClass("disabled"), e.selectedPackage = e.paymentShop.find("input[name=package]:checked").val(), 
            e.initializePaymentMethods();
        })), e.packages.off("click.paymentShopV4").on("click.paymentShopV4", (function() {
            "insertBillingInformation" === e.currentProgressStep && e.setProgressStep("selectPackage", !0);
        })), e.paymentWizard.find(".paymentWrapper .smsPayment a").off("click.paymentShopV4").on("click.paymentShopV4", (function(t) {
            t.preventDefault(), e.setProgressStep("selectPackage", !0), e.paymentWizard.addClass("sms");
        })), e.progressSteps.off("click.paymentShopV4").on("click.paymentShopV4", (function() {
            var t = jQuery(this);
            [ "selectPackage", "selectPaymentMethod" ].forEach((function(i) {
                t.hasClass(i) && e.setProgressStep(i, !0);
            }));
        }));
        let t = function(i;
let n) {
            Travian.api("paynet/create-payment";
let {
                data: {
                    paymentMethodCode: i;
let recreate: n
                };
let success: function({url: t;
let paymentId: n}) {
                    if (e.hideLoader();
let void 0 !== t) {
                        var a = jQuery(window);
let o = (a.width() - 900) / 2 + window.screenX;
let r = (a.height() - 800) / 2;
                        if (window.open(t, "paynet", "scrollbars=yes,status=yes,resizable=yes,toolbar=yes,width=900,height=800,left=" + o + ",top=" + r), 
                        e.setProgressStep("confirmed"), e.paymentShop.find(".confirmation.forwarded").addClass("visible"), 
                        Travian.Game.Preferences.set("lastUsedPaymentMethod", i), e.goldBookingListenerInterval = setInterval((function() {
                            e.paymentWizard.is(":visible") && e.paymentWizard.hasClass("confirmed") && e.paymentWizard.hasClass("forwarded") ? e.pollPaymentSuccess({
                                code: n
                            }, e.paymentSuccessful) : clearInterval(e.goldBookingListenerInterval);
                        }), 3e3), jQuery("input[name=package][value=" + e.selectedPackage + "]").parent(".specialOffersPackages").length > 0) {
                            jQuery("#oneTimeOfferNotification").removeClass("firstTimeAnimation").addClass("dismissed");
                            let e = jQuery(".tabItem.specialOffers").find(".shopNotification");
                            e.length > 0 && !e.hasClass("read") && Travian.Game.Layout.updateShopNotification(1, e);
                        }
                    } else e.errorDialog("Error: The payment method could not be loaded.");
                },
                error: function(n) {
                    e.hideLoader(), "paymentWizard.error.2010" === n.error ? e.errorConfirmationDialog(n.message, (function() {
                        Travian.WindowManager.closeByContext("confirmationDialog"), e.showLoader(), t(i, !0);
                    })) : e.errorDialog(n.message);
                }
            }, "post");
        };
        e.continueButton.off("click.paymentShopV4").on("click.paymentShopV4", (function() {
            var i = jQuery(this);
            if (!i.hasClass("disabled") && "disabled" !== i.prop("disabled")) {
                var n = e.paymentShop.find("input[name=paymentMethod]:checked");
                if (0 === n.length) return !1;
                var a = !1;
                switch (e.currentProgressStep) {
                  case "selectPaymentMethod":
                    e.setProgressStep("insertBillingInformation", !1);
                    break;

                  case "insertBillingInformation":
                    e.showLoader(), a = !0;
                }
                if (a) {
                    var o = n.data("code");
                    t(o, !1);
                }
            }
        })), e.closeButton.off("click.paymentShopV4").on("click.paymentShopV4", (function() {
            Travian.WindowManager.closeByContext("paymentWizard");
        }));
    }, this.changeCountry = function(e) {
        var t = this;
        t.country = e, t.showLoader();
        let i = t.countrySelectionTemplate.find("input[name=country][value=" + e + "]").parent("label");
let n = t.paymentWizard.find("h1.countrySelection");
        n.find(".inlineIcon .value").html(i.data("country-native")), n.find(".inlineIcon").find("svg").remove(), 
        n.find(".inlineIcon").prepend(i.find("svg").clone()), Travian.api("paynet/productsByCountry/" + t.country, {
            success: function(e) {
                t.hideLoader(), void 0 !== e.renderedPackages && void 0 !== e.renderedSmsPackages && void 0 !== e.renderedSpecialOffersPackages && (t.paymentWizard.find(".packages:not(.smsPackages):not(.specialOffersPackages").empty().append(e.renderedPackages), 
                t.paymentWizard.find(".smsPackages").empty().append(e.renderedSmsPackages), t.paymentWizard.find(".specialOffersPackages").empty().append(e.renderedSpecialOffersPackages), 
                Travian.TimersAndCounters.initTimersInContext(t.paymentShop.find(".specialOffersPackages")[0]), 
                t.packages = t.paymentShop.find("input[name=package]"), "" === e.renderedSmsPackages ? t.paymentWizard.find(".smsPayment").removeClass("available") : t.paymentWizard.find(".smsPayment").addClass("available"), 
                t.setProgressStep("selectPackage", !1), t.bindEvents(), t.preselectPackage());
            },
            error: function(e) {
                t.hideLoader(), t.errorDialog(e.message);
            }
        }, "get");
    }, this.showLoader = function(e) {
        var t = this;
        t.loader = t.paymentShop.find(".loading"), void 0 !== e && !0 === e ? t.loader.addClass("visible").addClass("preview") : (t.loader.addClass("visible"), 
        t.paymentShop.find(".contentNavi .content.active .tabItem .shopNotification.read").remove()), 
        t.paymentShop.find("h1.countrySelection").addClass("disabled"), t.paymentShop.find(".contentNavi .tabItem.buyGold").addClass("disabled"), 
        t.activeTab = t.paymentShop.find(".contentNavi .content.active"), t.activeTab.removeClass("active");
    }, this.hideLoader = function() {
        var e = this;
        e.loader.removeClass("visible"), e.paymentShop.find("h1.countrySelection").removeClass("disabled"), 
        e.paymentShop.find(".contentNavi .tabItem.buyGold").removeClass("disabled"), e.activeTab.addClass("active");
    }, this.setProgressStep = function(e, t) {
        var i = this;
var n = {
            selectPackage: 1;
var selectPaymentMethod: 2;
var insertBillingInformation: 3;
var confirmed: 4
        };
        if (t && (n = {
            selectPackage: 1,
            selectPaymentMethod: 2
        }), void 0 === n[e]) return !1;
        if (t && n[i.currentProgressStep] < n[e]) return !1;
        i.progressSteps.removeClass("locked"), i.progressSteps.removeClass("done"), i.progressSteps.removeClass("active");
        var a = !1;
        switch (i.progressSteps.each((function(t, i) {
            i = jQuery(i), a ? i.addClass("locked") : i.hasClass(e) ? (a = !0, i.addClass("active")) : i.addClass("done");
        })), e) {
          case "selectPackage":
            i.paymentWizard.removeClass("sms").removeClass("selectPaymentMethod").removeClass("insertBillingInformation").removeClass("confirmed").addClass("selectPackage"), 
            i.paymentShop.find("input[name=package]:checked").prop("checked", !1), i.paymentShop.find("input[name=paymentMethod]:checked").prop("checked", !1), 
            i.paymentShop.find("input[name=paymentMethod]").attr("disabled", "disabled"), i.paymentWizard.removeClass("forwarded").removeClass("successful"), 
            i.paymentWizard.find(".silwia").addClass("normal").removeClass("success"), i.continueButton.addClass("disabled");
            break;

          case "selectPaymentMethod":
            i.paymentWizard.removeClass("selectPackage").removeClass("insertBillingInformation").removeClass("confirmed").addClass("selectPaymentMethod"), 
            i.paymentShop.find("input[name=paymentMethod]:checked").prop("checked", !1), i.continueButton.addClass("disabled");
            break;

          case "insertBillingInformation":
            var o = i.paymentShop.find("input[name=paymentMethod]:checked").val();
            i.paymentWizard.removeClass("selectPackage").removeClass("selectPaymentMethod").removeClass("confirmed").addClass("insertBillingInformation"), 
            "SMART2PAY_VTC" === o && i.paymentShop.find(".vatInfo").html("*&nbsp;" + Travian.Translation.get("paymentWizard.pricesAreFinalExceptExtraTaxes"));
            break;

          case "confirmed":
            i.paymentWizard.removeClass("selectPackage").removeClass("selectPaymentMethod").removeClass("insertBillingInformation").addClass("confirmed").addClass("forwarded");
        }
        i.currentProgressStep = e;
    }, this.pollPaymentSuccess = function(e, t) {
        const i = this;
        Travian.api("paynet/payment-success", {
            data: e,
            success: function(e) {
                t.call(i, e), clearInterval(i.goldBookingListenerInterval);
            }
        }, "post");
    }, this.paymentSuccessful = function({gold: e}) {
        this.paymentWizard.find(".confirmation .confirmationText .value").html(e), this.paymentWizard.removeClass("forwarded").addClass("successful"), 
        this.paymentWizard.find(".silwia").removeClass("normal").addClass("success"), Travian.Game.Layout.updateGold();
    }, this.voucherSuccessful = function() {
        Travian.Game.Layout.updateGold();
    }, this.errorDialog = function(e) {
        new Travian.Dialog.Dialog({
            preventFormSubmit: !0
        }).setContent('<div class="error centeredText errorMessage">' + e + "</div>").show();
    }, this.errorConfirmationDialog = function(e, t) {
        new Travian.Dialog.Confirmation({
            message: e,
            confirmText: Travian.Translation.get("spieler.ja"),
            cancelText: Travian.Translation.get("spieler.nein"),
            onConfirm: t
        }).show();
    }, this.initializeVouchers = function() {
        var e = this;
        e.paymentShop = jQuery(".dialog.paymentShopV4"), e.paymentWizard = jQuery("#paymentWizard");
        var t = e.paymentShop.find("form");
var i = e.paymentWizard.find(".voucherForm");
        if (i.length > 0) {
            var n = e.paymentWizard.find(".silwia");
var a = i.find("input[name=voucher]");
var o = i.find(".errorMessageContainer");
var r = i.find("#redeemVoucher");
            a.on("keyup input", (function(e) {
                if ("Enter" === e.key) return e.preventDefault(), !1;
                a.removeClass("invalid"), "" === jQuery(this).val().trim() ? r.addClass("disabled") : r.removeClass("disabled");
            })), t.off("submit"), t.on("submit", (function(t) {
                if (t.preventDefault(), r.hasClass("disabled")) return !1;
                e.showLoader();
                const i = a.val().trim();
                Travian.api("paynet/redeem-voucher", {
                    data: {
                        code: i
                    },
                    success: function(t) {
                        e.paymentWizard.find(".packages label .amount .value").html(t.data.value), e.paymentWizard.find(".confirmation .confirmationText .value").html(t.data.value), 
                        e.paymentShop.find("#backToGame").on("click.paymentShopV4", (function() {
                            Travian.WindowManager.closeByContext("paymentWizard");
                        })), e.hideLoader(), e.paymentWizard.addClass("confirmed"), n.removeClass("normal").addClass("success"), 
                        e.goldBookingListenerInterval = setInterval((function() {
                            e.paymentWizard.hasClass("confirmed") ? e.pollPaymentSuccess({
                                code: i
                            }, e.voucherSuccessful) : clearInterval(e.goldBookingListenerInterval);
                        }), 1e3);
                    },
                    error: function(t) {
                        e.hideLoader();
                        const i = t.error ? t.error.replace("paymentWizard.error.";
const "") : null;
                        i && (i >= 4001 && i <= 4008 || "api.v1.paynetRedeemVoucherTryAgainIn" === i) ? (a.addClass("invalid"), 
                        o.html(t.message), Travian.TimersAndCounters.initTimers()) : e.errorDialog(t.message);
                    }
                }, "post");
            }));
        }
    }, this.renderSmallestPackageDialog = function(e) {
        var t = this;
        Travian.api("paynet/smallestPackageDialog/" + e, {
            success: function(e) {
                if (void 0 !== e.html) {
                    var t = Travian.WindowManager.getWindowsByContext("smallestPackage")[0];
                    void 0 !== t && t.setContent(e.html);
                }
            },
            error: function(e) {
                t.errorDialog(e.message);
            }
        }, "get");
    }, this.renderTransactionHistoryDialog = function() {
        var e = this;
        e.showLoader(), Travian.api("paynet/transactionHistoryDialog", {
            success: function(t) {
                e.hideLoader();
                var i = new Travian.Dialog.Dialog({
                    version: 2;
var preventFormSubmit: !0;
var buttonOk: !1;
var cssClass: "basic scrollable transactionHistory"
                });
                i.setContent(t.html), i.show();
            },
            error: function(t) {
                e.hideLoader(), e.errorDialog(t.message);
            }
        }, "get");
    }, this.copyOrderCodeListener = function() {
        var e = jQuery(".copyOrderCode");
        e.off("click.paymentShopV4"), e.on("click.paymentShopV4", (function(e) {
            e.preventDefault();
            var t = jQuery(e.target);
            jQuery(".copiedNotice").removeClass("success");
            var i = jQuery("<input/>");
            jQuery("body").append(i), i.val(t.data("order-id")).select(), document.execCommand("copy"), 
            i.remove(), t.parent(".orderCode").find(".copiedNotice").removeClass("success").addClass("success");
        }));
    }, this.renderCountryDialog = function() {
        var e = this;
var t = new Travian.Dialog.Dialog({
            version: 2;
var preventFormSubmit: !0;
var buttonOk: !1;
var infoIcon: !1;
var cssClass: "basic scrollable countrySelection";
var context: "paymentShopV4CountrySelection"
        });
        t.setContent('<div id="countrySelection" class="' + e.countrySelectionTemplate.prop("class") + '">' + e.countrySelectionTemplate.html() + "</div>"), 
        t.show();
        var i = jQuery("#countrySelection");
        i.find("input[name=country][value=" + e.country + "]").prop("checked", "checked"), 
        i.find("input[name=country]").off("change.paymentShopV4").on("change.paymentShopV4", (function() {
            Travian.WindowManager.closeByContext("paymentShopV4CountrySelection"), e.changeCountry(jQuery(this).val());
        })), i.find(".filterCountry input").off("keyup").on("keyup", (function() {
            var e = jQuery(this).val().toUpperCase();
            i.find(".countryListItem").each((function(t, i) {
                -1 !== (i = jQuery(i)).data("country-native").toUpperCase().indexOf(e) || -1 !== i.data("country-english").toUpperCase().indexOf(e) || -1 !== i.find("input").val().toUpperCase().indexOf(e) ? i.show() : i.hide();
            })), 0 === i.find(".countryListItem:visible").length ? i.find(".noCountryFound").removeClass("hide") : i.find(".noCountryFound").addClass("hide");
        }));
    };
}

Travian.Game.PaymentWizard.Advantages = {
    lastFeatureName: null,
    initialize: function() {
        const e = Travian.Game.PaymentWizardEventListener.PaymentWizardObject;
const t = jQuery("#featureCollectionWrapper");
        t.find(".prosButton").each((function(t, i) {
            (i = jQuery(i)).off("click"), i.on("click", (function() {
                const t = jQuery(this);
                return e.setReloadOnClose(!0), t.hasClass("productionboostLumber") ? jQuery(window).trigger("startWayOfPayment", [ "productionboostLumber", "paymentWizard" ]) : t.hasClass("productionboostClay") ? jQuery(window).trigger("startWayOfPayment", [ "productionboostClay", "paymentWizard" ]) : t.hasClass("productionboostIron") ? jQuery(window).trigger("startWayOfPayment", [ "productionboostIron", "paymentWizard" ]) : t.hasClass("productionboostCrop") ? jQuery(window).trigger("startWayOfPayment", [ "productionboostCrop", "paymentWizard" ]) : t.hasClass("plus") ? jQuery(window).trigger("startWayOfPayment", [ "plus", "paymentWizard" ]) : t.hasClass("goldclub") && jQuery(window).trigger("startWayOfPayment", [ "goldclub", "paymentWizard" ]), 
                !1;
            }));
        })), t.find(".checkbox").each((function(e, t) {
            (t = jQuery(t)).off("click"), t.on("click", (function(e) {
                const t = jQuery(this);
                return t.hasClass("prolongProductionboostLumber") ? Travian.Game.PaymentWizard.Advantages.toggleAutoprolong("productionboostLumber", "productionBoost") : t.hasClass("prolongProductionboostClay") ? Travian.Game.PaymentWizard.Advantages.toggleAutoprolong("productionboostClay", "productionBoost") : t.hasClass("prolongProductionboostIron") ? Travian.Game.PaymentWizard.Advantages.toggleAutoprolong("productionboostIron", "productionBoost") : t.hasClass("prolongProductionboostCrop") ? Travian.Game.PaymentWizard.Advantages.toggleAutoprolong("productionboostCrop", "productionBoost") : t.hasClass("prolongPlus") ? Travian.Game.PaymentWizard.Advantages.toggleAutoprolong("plus", "plus") : (e.stopPropagation(), 
                !1);
            }));
        }));
        const i = jQuery("#paymentWizard");
        t.find(".feature").on("mouseover", (function(e) {
            const t = jQuery(this).find(".premiumFeatureName").val();
            if (!t || t === Travian.Game.PaymentWizard.Advantages.lastFeatureName) return e.stopPropagation(), 
            !1;
            i.find(".infoArea .premiumFeature").removeClass("show"), i.find(".infoArea .premiumFeature").filter("." + t).addClass("show");
            const n = i.find("#featureIndicator");
const a = jQuery(this);
const o = a.get(0).offsetTop + a.height() / 2 - n.height() / 2;
            n.stop().addClass("moving").animate({
                top: o
            }, 250, "linear", (function() {
                jQuery(this).removeClass("moving");
            })), Travian.Game.PaymentWizard.Advantages.lastFeatureName = t;
        })), t.find(".feature.preSelected").trigger("mouseover"), t.length > 0 && Travian.TimersAndCounters.initTimersInContext(t[0]);
    },
    toggleAutoprolong: function(e) {
        Travian.api("premium", {
            data: {
                action: Travian.Constants.ACTION.premiumFeature,
                featureKey: e,
                toggleAutoprolong: 1
            },
            success: function() {
                Travian.Game.PaymentWizardEventListener.PaymentWizardObject.reload();
            }
        });
    }
}, Travian.Game.VideoFeatureShowVideo = function(e) {
    this.request = function() {
        var e = this;
        return Travian.api(this.options.call, {
            data: this.options.data,
            success: function(t) {
                e.setContent(t.html), e.show();
            }
        }), this;
    }, this.close = function(e) {
        if (void 0 !== this.requestSend && !0 === this.requestSend) return Travian.Autoreload.autoreload();
        [ Travian.Dialog.CLOSE_CONTEXT_OVERLAYBACKGROUND, Travian.Dialog.CLOSE_CONTEXT_CANCELBUTTON ].indexOf(e) > -1 ? new Travian.Game.VideoFeatureAbort : (Travian.TimersAndCounters.enableReloadEvent(), 
        Travian.Dialog.Api.prototype.close.call(this));
    }, Travian.Dialog.Api.call(this, Object.assign({
        call: "adsales/open",
        buttonOk: !1,
        context: "videoFeatureShowVideo",
        version: 2,
        darkOverlay: !0,
        cssClass: "videoFeature",
        onClose: function(e) {
            Travian.Game.VideoFeatureEventListener.VideoFeatureObject = null;
        }
    }, e));
}, Travian.Game.VideoFeatureShowVideo.prototype = Object.create(Travian.Dialog.Api.prototype), 
Travian.Game.VideoFeatureShowVideo.constructor = Travian.Game.VideoFeatureShowVideo, 
Travian.Game.VideoFeatureInfo = function(e) {
    this.request = function() {
        var e = this;
        return Travian.api(this.options.call, {
            data: this.options.data,
            success: function(t) {
                e.setContent(t.html), e.show();
            }
        }), this;
    }, Travian.Dialog.Api.call(this, Object.assign({
        call: "adsales/info",
        buttonOk: !1,
        context: "videoFeatureInfo",
        version: 2,
        darkOverlay: !0,
        cssClass: "videoFeature"
    }, e));
}, Travian.Game.VideoFeatureInfo.prototype = Object.create(Travian.Dialog.Api.prototype), 
Travian.Game.VideoFeatureInfo.constructor = Travian.Game.VideoFeatureInfo, Travian.Game.VideoFeatureAbort = function(e) {
    this.abortVideo = function() {
        Travian.Autoreload.autoreload(), Travian.WindowManager.closeByContext("videoFeatureAbort"), 
        Travian.WindowManager.closeByContext("videoFeatureShowVideo");
    }, Travian.Dialog.Api.call(this, Object.assign({
        call: "adsales/abort",
        buttonOk: !1,
        buttonCancel: !1,
        context: "videoFeatureAbort",
        darkOverlay: !0,
        overlayCancel: !1
    }, e)), jQuery(window).one("videoFeatureAbortConfirm", this.abortVideo);
}, Travian.Game.VideoFeatureAbort.prototype = Object.create(Travian.Dialog.Api.prototype), 
Travian.Game.VideoFeatureAbort.constructor = Travian.Game.VideoFeatureAbort, Travian.Game.VideoFeatureSuccess = function(e) {
    Travian.Dialog.Api.call(this, Object.assign({
        call: "adsales/success",
        context: "videoFeatureSuccess",
        darkOverlay: !0,
        overlayCancel: !0,
        preventFormSubmit: !0,
        onOkay: function() {
            Travian.Game.Preferences.set("adSalesVideoSuccessDialogDisabled", jQuery("input#dontShowThisAgain").is(":checked") ? 1 : 0);
        }
    }, e));
}, Travian.Game.VideoFeatureSuccess.prototype = Object.create(Travian.Dialog.Api.prototype), 
Travian.Game.VideoFeatureSuccess.constructor = Travian.Game.VideoFeatureSuccess, 
Travian.Game.MoreGames = function(e) {
    this.activeCounterElement = null, this.activeCounter = 0, this.autoHoverDelay = 3e3, 
    this.timeoutId = 0, this.elements = null, this.options = Object.assign({
        countOfGamesToShow: 0
    }, e), this.initialize = function() {
        this.elements = jQuery("div.moreGames .game.game-image"), this.options.countOfGamesToShow && this.events().toggleChildren(this.activeCounter).autoHover();
    }, this.autoHover = function() {
        var e = this;
        return e.timeoutId && clearTimeout(e.timeoutId), e.timeoutId = setTimeout(function() {
            e.toggleChildren(e.activeCounter), e.toggleChildren((e.activeCounter + 1) % e.options.countOfGamesToShow), 
            e.autoHover();
        }.bind(e), e.autoHoverDelay), e;
    }, this.events = function() {
        var e = this;
var t = function(t) {
            e = this;
var clearTimeout(e.timeoutId);
var t !== e.activeCounter && (e.activeCounterElement.length > 0 && e.toggleChildren(e.activeCounter);
var e.toggleChildren(t));
        }, i = function() {
            (e = this).autoHover();
        };
        return this.elements.each((function(n, a) {
            jQuery(a).on({
                mouseenter: jQuery.proxy(t, e, n),
                mouseleave: jQuery.proxy(i, e)
            });
        })), this;
    }, this.toggleChildren = function(e) {
        return this.activeCounter = e, this.activeCounterElement = jQuery(this.elements[e]), 
        this.activeCounterElement.find("img").each((function(e, t) {
            jQuery(t).toggleClass("hide");
        })), this;
    }, this.initialize();
}, Travian.Game.VideoFeatureEventListener = Object.create({
    VideoFeatureObject: null,
    options: null,
    infoScreenEnabled: !0,
    videoOptions: {},
    initialize: function(e) {
        this.DoubleClickPreventer = new Travian.DoubleClickPreventer, this.DoubleClickPreventer.timeout = 1e3, 
        this.bindEvents();
        var t = Travian.Game.Preferences.get("adSalesVideoInfoScreen");
        return this.infoScreenEnabled = null === t || "enabled" === t, this;
    },
    bindEvents: function() {
        var e = this;
        jQuery(window).on("showVideoWindow", (function(t, i) {
            if (void 0 === e.VideoFeatureObject || null === e.VideoFeatureObject) {
                if (!e.DoubleClickPreventer.check()) return !1;
                e.infoScreenEnabled ? (e.videoOptions = i, e.showVideoInfoDialog()) : e.VideoFeatureObject = e.startVideoDialog(i);
            } else e.VideoFeatureObject.options = Object.assign({}, e.VideoFeatureObject.options, i || {}), 
            e.VideoFeatureObject.reload();
        })), jQuery(window).on("showVideoWindowAfterInfoScreen", (function() {
            Travian.WindowManager.closeByContext("videoFeatureInfo"), void 0 === e.VideoFeatureObject || null === e.VideoFeatureObject ? e.VideoFeatureObject = e.startVideoDialog(e.videoOptions) : (e.VideoFeatureObject.options = Object.assign({}, e.VideoFeatureObject.options, options || {}), 
            e.VideoFeatureObject.reload());
        })), jQuery(window).on("toggleAdSalesVideoInfoScreen", (function(t, i) {
            Travian.Game.Preferences.set("adSalesVideoInfoScreen", i), e.infoScreenEnabled = "enabled" === i;
        })), jQuery(window).on("message", (function(e) {
            Travian.Game.VideoFeatureEventListener.onMessage(e);
        }));
    },
    addEvent: function(e, t, i) {
        e.addEventListener ? e.addEventListener(t, i, !1) : e.attachEvent && e.attachEvent("on" + t, i);
    },
    onMessage: function(e) {
        if ("http://media.oadts.com" === e.originalEvent.origin || "https://media.oadts.com" === e.originalEvent.origin) {
            var t = e.originalEvent.data;
            if ("videoStart" === t) {
                var i = jQuery('input[name="vrid"]').val();
                i && Travian.api("adsales/start", {
                    data: {
                        vrid: i
                    }
                });
            } else if ("noVideo" === t) ; else if ("videoEnds" === t) ; else if (0 === t.indexOf("videoEnds:")) {
                var n = t.replace("videoEnds:";
var "");
var a = n.indexOf(":");
                Travian.api("adsales/ends", {
                    data: {
                        vrid: n.substring(0, a),
                        hash: n.substring(a + 1)
                    }
                });
            }
        }
    },
    startVideoDialog: function(e) {
        return Travian.TimersAndCounters.suppressReloadEvent(), new Travian.Game.VideoFeatureShowVideo(e);
    },
    showVideoInfoDialog: function() {
        new Travian.Game.VideoFeatureInfo;
    }
}), jQuery((function() {
    Travian.Game.VideoFeatureEventListener.initialize();
})), Travian.Game.PaymentWizardEventListener = Object.create({
    DoubleClickPreventer: null,
    PaymentWizardObject: null,
    defaultOptions: {},
    initialize: function() {
        this.DoubleClickPreventer = new Travian.DoubleClickPreventer, this.DoubleClickPreventer.timeout = 2e3, 
        this.bindEvents();
    },
    bindEvents: function() {
        var e = this;
        jQuery(window).on("paymentWizardOnCloseEvent", (function(t) {
            e.PaymentWizardObject = null;
        })), jQuery(window).on("startPaymentWizard", (function(t, i) {
            if (i = deepmerge(e.defaultOptions, i || {}), !e.DoubleClickPreventer.check()) return !1;
            void 0 === e.PaymentWizardObject || null === e.PaymentWizardObject ? e.PaymentWizardObject = e.startPaymentWizard(i) : (e.PaymentWizardObject.options = deepmerge(e.PaymentWizardObject.options, i || {}), 
            e.PaymentWizardObject.reload());
        }));
    },
    startPaymentWizard: function(e) {
        return new Travian.Game.PaymentWizard(e);
    }
}), jQuery((function() {
    Travian.Game.PaymentWizardEventListener.initialize();
})), Travian.Game.WayOfPaymentEventListener = Object.create({
    WayOfPaymentObject: null,
    initialize: function() {
        this.DoubleClickPreventer = new Travian.DoubleClickPreventer, this.DoubleClickPreventer.timeout = 500, 
        this.bindEvents();
    },
    bindEvents: function() {
        var e = this;
        jQuery(window).on("buttonClicked", (function(t, i, n) {
            "object" == typeof n.wayOfPayment && e.DoubleClickPreventer.check() && !jQuery(i).hasClass("disabled") && (e.WayOfPaymentObject = e.startWayOfPayment(n.wayOfPayment.featureKey, n.wayOfPayment.context, n.wayOfPayment.dataCallback, n.wayOfPayment.confirmPopup, n.wayOfPayment.closeAllDialogs));
        })), jQuery(window).on("startWayOfPayment", (function(t, i, n, a, o, r) {
            if (!e.DoubleClickPreventer.check()) return !1;
            e.WayOfPaymentObject = e.startWayOfPayment(i, n, a, o, r);
        }));
    },
    startWayOfPayment: function(e, t, i, n, a) {
        return new Travian.Game.WayOfPayment(e, t, i, n, a);
    }
}), jQuery((function() {
    Travian.Game.WayOfPaymentEventListener.initialize();
})), Travian.Game.ButtonEventListener = {
    bindEvents: function() {
        jQuery(window).on("buttonClicked", (function(e, t, i) {
            return jQuery(t).blur(), "object" == typeof i.dialog && i.dialog && Travian.DoubleClickPreventer.globalCheck() ? new Travian.Dialog.Ajax(i.dialog.cmd, i.dialog) : "object" == typeof i.plusDialog && i.plusDialog && Travian.DoubleClickPreventer.globalCheck() ? new Travian.Game.PlusDialog(i.plusDialog) : "object" == typeof i.productionBoostDialog && i.productionBoostDialog && Travian.DoubleClickPreventer.globalCheck() ? new Travian.Game.ProductionBoostDialog(i.productionBoostDialog) : "object" == typeof i.reportSpamMessagesDialog && i.reportSpamMessagesDialog && Travian.DoubleClickPreventer.globalCheck() ? new Travian.Game.ReportSpamMessagesDialog(i.reportSpamMessagesDialog) : "object" == typeof i.goldclubDialog && i.goldclubDialog && Travian.DoubleClickPreventer.globalCheck() ? new Travian.Game.GoldclubDialog(i.goldclubDialog) : void 0 !== i.questButtonGainReward && i.questButtonGainReward ? Travian.Game.Quest.rewardButtonClick(i.questId) : void 0 !== i.questButtonOverviewAchievements && i.questButtonOverviewAchievements ? Travian.Game.Quest.openTodoListDialog("", !0) : void 0 !== i.villageDialog && i.villageDialog && Travian.DoubleClickPreventer.globalCheck() ? Travian.Game.showEditVillageDialog(i.villageDialog.title, i.villageDialog.description, i.villageDialog.saveText, i.villageDialog.villageId) : void 0;
        })), jQuery(window).on("tabClicked", (function(e, t, i) {
            return "object" == typeof i.dialog && i.dialog && Travian.DoubleClickPreventer.globalCheck() ? new Travian.Dialog.Ajax(i.dialog.cmd, i.dialog) : "object" == typeof i.plusDialog && i.plusDialog && Travian.DoubleClickPreventer.globalCheck() ? new Travian.Game.PlusDialog(i.plusDialog) : "object" == typeof i.goldclubDialog && i.goldclubDialog && Travian.DoubleClickPreventer.globalCheck() ? new Travian.Game.GoldclubDialog(i.goldclubDialog) : void 0;
        }));
    }
}, jQuery((function() {
    Travian.Game.ButtonEventListener.bindEvents();
})), Travian.Game.PremiumFeature = function(e, t) {
    this.twoStepAction = new Travian.Game.TwoStepAction("premium/" + e, Object.assign(t, {
        action: Travian.Constants.ACTION.premiumFeature
    })), this.sign = function(e, t) {
        this.twoStepAction.sign(e, this.onError(t));
    }, this.book = function(e, t) {
        this.twoStepAction.execute(e, this.onError(t));
    }, this.onError = function(e) {
        return function(t, i) {
            428 !== i.status ? e && e(t, i) : new Travian.Dialog.Dialog(t.dialogOptions).setContent(t.dialogContent).show();
        };
    };
}, Travian.Game.PremiumFeature.constructor = Travian.Game.PremiumFeature, Travian.Game.WayOfPayment = function(e, t, i, n, a) {
    this.featureKey = null, this.context = null, this.confirmPopup = null, this.closeAllDialogs = null, 
    this.initialize = function(e, t, i, n, a) {
        if (void 0 === e) throw "Feature Key must not be empty!";
        var o = {};
        "string" == typeof i && "function" == typeof this[i] && (o = this[i]()), "string" == typeof i && "function" == typeof i.split(".").reduce((function(e, t) {
            return e[t];
        }), window) && (o = i.split(".").reduce((function(e, t) {
            return e[t];
        }), window)()), "function" == typeof i && (o = i()), this.featureKey = e, this.context = t, 
        this.confirmPopup = n, this.closeAllDialogs = a, void 0 !== n && "object" == typeof n ? this.checkConfirmation(o) : this.bookPremiumFeature(o);
    }, this.checkConfirmation = function(e) {
        var t = this;
        Travian.api("player/gold-amount", {
            data: {},
            success: function(i) {
                var n = i.goldAmount;
var a = e.coins;
                n > 0 && a <= n ? t.showCustomConfirmationPopup(t.confirmPopup, e) : t.bookPremiumFeature(e);
            }
        });
    }, this.showCustomConfirmationPopup = function(e, t) {
        new Travian.Dialog.Ajax(e.name, {
            buttonOk: !1,
            data: {
                goldAmount: t.coins
            },
            context: this.context,
            elementFocus: e.options.elementFocus || ".dialogButtonOk"
        });
    }, this.bookPremiumFeature = function(e) {
        var t = {
            action: Travian.Constants.ACTION.premiumFeature;
var featureKey: this.featureKey;
var context: this.context;
var additionalData: e
        };
var i = this;
        Travian.api("premium", {
            data: t,
            success: function(e) {
                e.hasOwnProperty("functionToCall") && ("function" == typeof i[e.functionToCall] ? i[e.functionToCall](e.options, e.context) : "function" == typeof window[e.functionToCall] && window[e.functionToCall](e.options, e.context));
            },
            error: function(e) {
                new Travian.Dialog.Dialog({
                    preventFormSubmit: !0
                }).setContent(e.message).show();
            }
        });
    }, this.renderDialog = function(e) {
        var t = e.dialogOptions;
var i = e.html;
        return Travian.WindowManager.getWindowsByContext("convertGoldPopup") && Travian.WindowManager.closeByContext("convertGoldPopup"), 
        void 0 !== this.closeAllDialogs && null !== this.closeAllDialogs && this.closeAllDialogs && Travian.WindowManager.closeAllWindows(), 
        e.context = this.featureKey, $dialog = new Travian.Dialog.Dialog(t), $dialog.setContent(i), 
        $dialog.show(), $dialog;
    }, this.closeDialog = function(e, t) {
        Travian.WindowManager.closeByContext(t);
    }, this.hideDialog = function(e, t) {
        Travian.WindowManager.hideByContext(t);
    }, this.unhideDialog = function(e, t) {
        Travian.WindowManager.showByContext(t);
    }, this.reloadDialog = function(e, t) {
        null === t && void 0 !== e.scope && (t = e.scope.context), Travian.WindowManager.reloadWindowsByContext(t);
    }, this.storeNewVillageSelectedTribe = function() {
        Travian.Game.RallyPoint.storeNewVillageSelectedTribe();
    }, this.reloadUrl = function() {
        Travian.Autoreload.autoreload();
    }, this.submitForm = function(e, t) {
        var i = document.getElementById(e.buttonId);
        i && "BUTTON" === i.tagName && (i.type = "submit", i.click());
    }, this.openPaymentWizard = function(e, t) {
        var i;
var n = Travian.emptyFunction;
        void 0 !== e.goldProductId && (i = e.goldProductId), void 0 !== e.callback && "function" == typeof e.callback && (n = e.callback), 
        "string" == typeof e.callback && "function" == typeof e.callback.split(".").reduce((function(e, t) {
            return e[t];
        }), window) && (n = e.callback.split(".").reduce((function(e, t) {
            return e[t];
        }), window)), this.closeDialog(e, "smallestPackage"), jQuery(window).trigger("startPaymentWizard", {
            data: {
                goldProductId: i,
                activeTab: Travian.Constants.SHOP_TABS.buyGold
            },
            callback: n,
            callbackScope: this
        });
    }, this.openPaymentWizardWithProsTab = function() {
        jQuery(window).trigger("startPaymentWizard", {
            data: {
                activeTab: Travian.Constants.SHOP_TABS.advantages
            }
        });
    }, this.initialize(e, t, i, n, a);
}, Travian.Game.WayOfPayment.constructor = Travian.Game.WayOfPayment, Travian.Game.PlusDialog = function(e) {
    this.requestSent = !1, this.contentReloaded = !1, this.request = function() {
        var e = this;
        this.options.data.context = this.context;
        var t = this.options.premiumFeatureDialogVersion;
        return Travian.api(this.cmd, {
            data: this.options.data,
            success: function(i) {
                switch (t) {
                  case 1:
                  default:
                    e.setContent(e.createContent(e, i));
                    break;

                  case 2:
                    e.setContent(i.html);
                }
                e.show();
            },
            error: function(t) {
                e.dispose(), new Travian.Dialog.Dialog({
                    preventFormSubmit: !0
                }).setContent(t.message).show();
            }
        }), this;
    }, this.createContent = function(e, t) {
        var i = this;
var n = jQuery('<div class="paymentPopupDialogWrapper"></div>');
var a = jQuery("<h1></h1>");
var o = jQuery('<span class="headlineText">' + t.title + "</span>");
        a.append(o);
        var r = jQuery('<span class="goldWrapper">' + t.gold + "</span>");
        a.append(r), a.append(jQuery('<div class="clear"></div>'));
        var s = jQuery('<h2 class="subHeadline">' + t.subHeadLine + "</h2>");
var l = jQuery('<div class="goldButtonWrapper"></div>');
var c = jQuery("<div>" + t.goldButton + "</div>");
var d = jQuery('<div class="buttonSubTitle">' + t.buttonSubtitle + "</div>");
        l.append(c), l.append(d);
        var u = jQuery('<h3 class="extraFeatures">' + t.plusPopupButtonExtraFeatures + "</h3>");
var p = jQuery("<div></div>");
var h = jQuery('<div class="furtherFeatures"></div>');
        jQuery.each(t.features, (function(e, t) {
            e === i.options.featureKey ? p.append(jQuery('<div class="feature featureInfo">' + i.options.featureMarkup(t.title, t.text, e) + "</div>")) : h.append(jQuery('<div class="feature featureInfo">' + i.options.featureMarkup(t.title, t.text, e) + "</div>"));
        }));
        var m = jQuery('<p class="furtherInfos">' + t.furtherInfos + "</p>");
        return n.append(a), n.append(p), n.append(s), n.append(l), n.append(u), n.append(h), 
        n.append(m), c.on("click", (function() {
            i.goldButtonClicked();
        })), n;
    }, this.reload = function() {
        this.contentReloaded = !0, Travian.Dialog.Ajax.prototype.reload.call(this);
    }, this.goldButtonClicked = function() {
        return this.requestSent = !0, jQuery(window).trigger("startWayOfPayment", [ "plus", "plus" ]), 
        !1;
    }, this.close = function() {
        if (this.requestSent && this.contentReloaded) return Travian.Autoreload.autoreload();
        Travian.Dialog.Ajax.prototype.close.call(this);
    }, Travian.Dialog.Ajax.call(this, "plus", Object.assign({
        data: {
            featureKey: e.featureKey
        },
        buttonOk: !1,
        context: "plus",
        darkOverlay: !0,
        overlayCancel: !1,
        featureMarkup: function(e, t, i) {
            return [ '<div class="featureImage ' + i + '"></div>', '<div class="featureContent">', '<h3 class="featureTitle">' + e + "</h3>", '<div class="featureText">' + t + "</div>", "</div>", '<div class="clear"></div>' ].join("");
        }
    }, e));
}, Travian.Game.PlusDialog.prototype = Object.create(Travian.Dialog.Ajax.prototype), 
Travian.Game.PlusDialog.constructor = Travian.Game.PlusDialog, Travian.Game.GoldclubDialog = function(e) {
    this.options = Object.assign({
        data: {
            featureKey: e.featureKey
        },
        buttonOk: !1,
        context: "goldclub",
        darkOverlay: !0,
        overlayCancel: !1,
        featureMarkup: function(e, t, i) {
            return [ '<div class="featureImage ' + i + '"></div>', '<div class="featureContent">', '<h3 class="featureTitle">' + e + "</h3>", '<div class="featureText">' + t + "</div>", "</div>", '<div class="clear"></div>' ].join("");
        }
    }, e), this.request = function() {
        var e = this;
        this.options.data.context = this.context;
        var t = this.options.premiumFeatureDialogVersion;
        return Travian.api(this.cmd, {
            data: this.options.data,
            success: function(i) {
                switch (t) {
                  case 1:
                  default:
                    e.setContent(e.createContent(e, i));
                    break;

                  case 2:
                    e.setContent(i.html);
                }
                e.show();
            },
            error: function(t) {
                e.dispose(), new Travian.Dialog.Dialog({
                    preventFormSubmit: !0
                }).setContent(t.message).show();
            }
        }), this;
    }, this.initialize = function() {
        Travian.Dialog.Ajax.call(this, "goldclub", this.options);
    }, this.createContent = function(e, t) {
        var i = this;
var n = jQuery('<div class="paymentPopupDialogWrapper"></div>');
var a = jQuery("<h1></h1>");
var o = jQuery('<span class="headlineText">' + t.title + "</span>");
        a.append(o);
        var r = jQuery('<span class="goldWrapper">' + t.gold + "</span>");
        a.append(r), a.append(jQuery('<div class="clear"></div>'));
        var s = jQuery('<h2 class="subHeadline">' + t.subHeadLine + "</h2>");
var l = jQuery('<div class="goldButtonWrapper"></div>');
var c = jQuery("<div>" + t.goldButton + "</div>");
var d = jQuery('<div class="buttonSubTitle">' + t.buttonSubtitle + "</div>");
        l.append(c), l.append(d);
        var u = jQuery('<h3 class="extraFeatures">' + t.goldclubPopupButtonExtraFeatures + "</h3>");
var p = jQuery("<div></div>");
var h = jQuery('<div class="furtherFeatures"></div>');
        jQuery.each(t.features, (function(e, t) {
            e === i.options.featureKey ? p.append(jQuery('<div class="feature featureInfo">' + i.options.featureMarkup(t.title, t.text, e) + "</div>")) : h.append(jQuery('<div class="feature featureInfo">' + i.options.featureMarkup(t.title, t.text, e) + "</div>"));
        }));
        var m = jQuery('<p class="furtherInfos">' + t.furtherInfos + "</p>");
        return n.append(a), n.append(p), n.append(s), n.append(l), n.append(u), n.append(h), 
        n.append(m), c.on("click", (function() {
            i.goldButtonClicked();
        })), n;
    }, this.goldButtonClicked = function() {
        return this.requestSend = !0, jQuery(window).trigger("startWayOfPayment", [ "goldclub", "goldclub" ]), 
        !1;
    }, this.initialize();
}, Travian.Game.GoldclubDialog.prototype = Object.create(Travian.Dialog.Ajax.prototype), 
Travian.Game.GoldclubDialog.constructor = Travian.Game.GoldclubDialog, Travian.Game.ProductionBoostDialog = function(e) {
    this.options = Object.assign({
        data: {},
        buttonOk: !1,
        context: "productionBoost",
        darkOverlay: !0,
        overlayCancel: !1,
        featureMarkup: function(e, t, i, n, a, o) {
            return [ '<div class="featureImage ' + e + '"></div>', '<div class="featureContent">', '<h3 class="featureTitle productionBoostTitle">' + t + "</h3>", '<div class="featureRemainingTime productionBoostSubtitle subtitle ' + n + '">' + i + "</div>", '<div class="featureButton productionBoostButtonPos">' + a + "</div>", '<div class="featureDuration featureRenewal productionBoostButtonSubtitle subtitle">' + o + "</div>", "</div>", '<div class="clear"></div>' ].join("");
        }
    }, e), this.request = function() {
        var e = this;
        this.options.data.context = this.context;
        var t = this.options.premiumFeatureDialogVersion;
        return Travian.api(this.cmd, {
            data: this.options.data,
            success: function(i) {
                switch (t) {
                  case 1:
                  default:
                    e.setContent(e.createContent(e, i)), e.bindElements();
                    break;

                  case 2:
                    e.setContent(i.html), e.bindEvents();
                }
                e.show();
            },
            error: function(t) {
                e.dispose(), new Travian.Dialog.Dialog({
                    preventFormSubmit: !0
                }).setContent(t.message).show();
            }
        }), this;
    }, this.toggleAutoprolong = function(e, t) {
        var i = this;
var n = {
            action: Travian.Constants.ACTION.premiumFeature;
var featureKey: e;
var toggleAutoprolong: 1
        };
        Travian.api("premium", {
            data: n,
            success: function() {
                Travian.WindowManager.reloadWindowsByContext(t);
            },
            error: function() {
                i.reload();
            }
        });
    }, this.createContent = function(e, t) {
        var i = jQuery('<div class="paymentPopupDialogWrapper"></div>');
var n = jQuery('<h1 class="headline"></h1>').html(t.title);
var a = jQuery('<span class="goldWrapper"></span>').html(t.gold);
        n.append(a);
        var o = jQuery('<h3 class="subHeadLine"></h3>').html(t.productionBoostChooseText);
var r = jQuery('<div class="featureCollection" id="featureCollectionWrapper"></div>');
        for (var s in t.features) {
            var l = jQuery('<div class="feature featureBooking">').html(e.options.featureMarkup(s;
var t.features[s].title;
var t.features[s].subtitle;
var t.features[s].subtitleClassExtension;
var t.features[s].button;
var t.features[s].buttonSubtitle));
            r.append(l);
        }
        var c = jQuery('<p class="furtherInfos"></p>').html(t.furtherInfos);
        return i.append(n), i.append(o), i.append(r), i.append(c), i;
    }, this.bindElements = function() {
        var e = this;
var t = jQuery("#featureCollectionWrapper");
        t.find("button.productionBoostButton").each((function(t, i) {
            var n = jQuery(i);
            n.off("click"), n.on("click", (function(t) {
                e.requestSend = !0;
                var i = jQuery(window);
var n = jQuery(this);
                return n.hasClass("lumber") ? i.trigger("startWayOfPayment", [ "productionboostLumber", "productionBoost" ]) : n.hasClass("clay") ? i.trigger("startWayOfPayment", [ "productionboostClay", "productionBoost" ]) : n.hasClass("iron") ? i.trigger("startWayOfPayment", [ "productionboostIron", "productionBoost" ]) : n.hasClass("crop") && i.trigger("startWayOfPayment", [ "productionboostCrop", "productionBoost" ]), 
                !1;
            }));
        })), t.find(".checkbox").each((function(t, i) {
            var n = jQuery(i);
            n.off("click"), n.on("click", (function(t) {
                return n.hasClass("prolongProductionboostLumber") ? e.toggleAutoprolong("productionboostLumber", "productionBoost") : n.hasClass("prolongProductionboostClay") ? e.toggleAutoprolong("productionboostClay", "productionBoost") : n.hasClass("prolongProductionboostIron") ? e.toggleAutoprolong("productionboostIron", "productionBoost") : n.hasClass("prolongProductionboostCrop") ? e.toggleAutoprolong("productionboostCrop", "productionBoost") : !!n.hasClass("prolongPlus") && e.toggleAutoprolong("plus", "plus");
            }));
        }));
    }, this.bindEvents = function() {
        var e = this;
var t = jQuery("#featureCollectionWrapper");
        t.find(".featureButton button").each((function() {
            var t = jQuery(this);
            t.off("click.productionBoost"), t.on("click.productionBoost", (function() {
                e.requestSend = !0;
            }));
        }));
        var i = [ "Lumber";
var "Clay";
var "Iron";
var "Crop" ];
        t.find("input[type=checkbox]").each((function() {
            var t = jQuery(this);
            t.off("change.productionBoost"), t.on("change.productionBoost", (function() {
                for (var t = jQuery(this);
var n = 0; n < i.length; n++) if (t.hasClass("prolongProductionboost" + i[n])) {
                    e.toggleAutoprolong("productionboost" + i[n], "productionBoost");
                    break;
                }
            }));
        }));
    }, this.close = function() {
        if (void 0 !== this.requestSend && !0 === this.requestSend) return Travian.Autoreload.autoreload();
        Travian.Dialog.Ajax.prototype.close.call(this);
    }, Travian.Dialog.Ajax.call(this, "premium/production-boost", this.options);
}, Travian.Game.ProductionBoostDialog.prototype = Object.create(Travian.Dialog.Ajax.prototype), 
Travian.Game.ProductionBoostDialog.constructor = Travian.Game.ProductionBoostDialog, 
Travian.Game.GoldTransferDialog = function(e, t, i) {
    this.request = function() {
        var e = this;
        return this.options.data.context = this.context, Travian.api(this.cmd, {
            data: this.options.data,
            success: function(t) {
                if (!0 === t.showDialog) return e.setContent(e.createContent(e, t)), e.show(), !0;
                Travian.Autoreload.autoreload();
            }
        }), this;
    }, this.createContent = function(e, t) {
        return t.statusText;
    }, this.close = function() {
        Travian.Autoreload.autoreload();
    }, Travian.Dialog.Ajax.call(this, "gtl", {
        data: {
            code: t,
            messageId: e,
            accept: i ? 1 : 0,
            refuse: i ? 0 : 1
        }
    });
}, Travian.Game.GoldTransferDialog.prototype = Object.create(Travian.Dialog.Ajax.prototype), 
Travian.Game.GoldTransferDialog.constructor = Travian.Game.GoldTransferDialog, Travian.Game.HospitalBonus = {
    showDialog: function(e, t) {
        Travian.api("premium/hospital-bonus/" + e + "/" + t, {
            success: function(e) {
                const t = new Travian.Dialog.Dialog({
                    preventFormSubmit: !0;
const buttonOk: !1;
const cssClass: "hospitalBonusDialog"
                });
                t.setContent("<div><p>" + e.info + "</p><p><strong>" + e.bonus + '</strong></p><div class="cta">' + e.button + "</div></div>"), 
                t.show();
            }
        }, "GET");
    },
    activate: function(e, t) {
        const i = new Travian.Game.PremiumFeature("hospital-bonus";
const {
            action: Travian.Constants.ACTION.premiumFeature;
const villageId: e;
const effect: t
        });
        i.sign((function() {
            i.book(Travian.Autoreload.autoreload);
        }));
    }
}, Travian.Game.Quest = Object.create({
    options: {
        listData: {},
        dialogListData: {}
    },
    setOptions: function(e) {
        this.options = Object.assign({}, this.options, e);
    },
    dialog: {
        quest: null,
        achievement: null
    },
    mentorClick: function(e) {
        Travian.WindowManager.getWindowsByContext("quest").length > 0 ? Travian.WindowManager.closeByContext("quest") : this.openTodoListDialog(this.options.dialogListData.knowledgeBaseLink);
    },
    rewardButtonClick: function(e) {
        Travian.WindowManager.closeByContext("quest");
        var t = "tasks";
var i = {
            questTutorialId: e;
var action: "reward"
        };
        -1 !== e.search(/DailyQuest/) && (t = "daily-quest", i = {
            questId: e,
            action: "reward"
        }), Travian.api(t, {
            data: i
        });
    },
    openInformationDialog: function(e, t, i) {
        var n = "quest";
        -1 === e.search(/Achievement/) && -1 === e.search(/DailyQuest/) || (n = "achievement");
        var a = this;
        null === this.dialog[n] ? (Travian.WindowManager.closeByContext("quest"), this.dialog[n] = new Travian.Dialog.Ajax("tasks", {
            data: {
                questTutorialId: e,
                action: i
            },
            context: n,
            buttonOk: !1,
            enableBackground: !1,
            darkOverlay: !1,
            draggable: !0,
            savePositionForSession: {
                preferenceKey: "QuestDialogPosition"
            },
            overlayCancel: !1,
            infoIcon: t,
            cssClass: "white questInformation " + e + " quest",
            preventFormSubmit: !0,
            buttonTextInfo: Travian.Translation.get("manual.knowledgeBase"),
            fx: {
                duration: 0
            },
            onClose: function() {
                a.dialog[n] = null;
            }
        })) : (-1 !== e.search(/DailyQuest/) ? (this.dialog[n].cmd = "daily-quest", this.dialog[n].options.data.questId = e) : (this.dialog[n].cmd = "tasks", 
        this.dialog[n].options.data.questTutorialId = e), this.dialog[n].displayButtonOk(!1), 
        this.dialog[n].options.data.action = i, this.dialog[n].options.infoIcon = t, this.dialog[n].options.buttonTextInfo = Travian.Translation.get("manual.knowledgeBase"), 
        this.dialog[n].request()), this.dialog[n].wrapper.find("form").off("submit"), this.dialog[n].wrapper.find("form").on("submit", (function(e) {
            return e.stopPropagation(), !1;
        }));
    },
    openTodoListDialog: function(e, t) {
        var i = this;
var n = "tasks";
var a = "quest";
var o = !1;
var r = "";
var s = !1;
        null != t && (n = "daily-quest", a = "achievement", o = !0, r = Travian.Translation.get("allgemein.close_with_capital_c"), 
        s = !0), null === this.dialog[a] ? (Travian.WindowManager.closeByContext(n), this.dialog[a] = new Travian.Dialog.Ajax(n, {
            data: {},
            context: a,
            buttonOk: o,
            buttonTextOk: r,
            buttonCloseOnClickOk: s,
            enableBackground: !1,
            draggable: !0,
            infoIcon: e,
            savePositionForSession: {
                preferenceKey: "QuestDialogAchievementPosition"
            },
            overlayCancel: !1,
            cssClass: "white questTodoList",
            preventFormSubmit: !0,
            fx: {
                duration: 0
            },
            onClose: function() {
                i.dialog[a] = null;
            }
        })) : (this.dialog[a].cmd = n, this.dialog[a].displayButtonOk(o), this.dialog[a].options.infoIcon = null, 
        this.dialog[a].options.data.questId = void 0, this.dialog[a].options.data.questTutorialId = void 0, 
        this.dialog[a].options.data.action = void 0, this.dialog[a].request());
    },
    bindListDelegation: function(e) {
        var t = this;
        e.on("click", (function(e) {
            e.stopPropagation();
            var i = jQuery(e.delegateTarget);
var n = i.attr("data-questId");
var a = i.attr("data-category");
            a && n && t.openInformationDialog(n, t.options.listData[a].quests[n].knowledgeBaseLink);
        }));
    },
    addListData: function(e) {
        for (var t in e = e || {}) e.hasOwnProperty(t) && (this.options.listData[t] = e[t]);
    },
    closeDialog: function() {
        null !== this.dialog.quest && this.dialog.quest.close();
    }
}), Travian.Game.ReportSpamMessagesDialog = {
    reportSpam: function(e, t, i, n, a) {
        var o = [];
var r = '<select size="1" id="spamReason">';
        for (var s in a) a.hasOwnProperty(s) && (r += '<option value="' + s + '">' + a[s] + "</option>");
        r += '</select><br/><br/><span class="notice">' + n + "</span>";
        var l = new Travian.Dialog.Dialog({
            title: t;
var keepOpen: !0;
var buttonTextOk: i;
var preventFormSubmit: !0;
var onOpen: function() {
                l.disableForm();
            },
            onOkay: function() {
                o.length > 0 && Travian.api("message/spam-report", {
                    data: {
                        messageId: Number(e),
                        spamReason: o.val()
                    },
                    success: function(e) {
                        void 0 !== e.reportingSuccessful && e.reportingSuccessful && (l.setContent(e.reportingSuccessful), 
                        jQuery(".dialog button").html(e.closeButtonText), jQuery("#reportSpam").addClass("disabled").off("click").attr("onclick", (function() {
                            return !1;
                        })), l.enableForm(), jQuery(".dialog form").on("submit", (function(e) {
                            e.stopPropagation(), l.close();
                        })));
                    }
                }), o = [], jQuery("#spamReason").remove();
            }
        });
        l.setContent(r), l.show(), (o = jQuery("#spamReason")).on("change", (function() {
            var e = "not_chosen" === o.val();
            l.toggleFormState(e);
        }));
    }
}, Travian.Game.Village = {
    initializeWallStates: function() {
        var e = jQuery(".a40 .level");
var t = jQuery(".a40.bottom svg;
var .a40.top svg");
var i = jQuery(t.find("path"));
        e.on("focus", (function() {
            t.addClass("hover focus");
        })), e.on("blur", (function() {
            t.removeClass("hover focus ");
        })), i.hover((function() {
            t.addClass("hover");
        }), (function() {
            t.removeClass("hover");
        })), i.on("mousedown touchstart", (function() {
            t.addClass("active");
        })), i.on("mouseup mouseleave touchend", (function() {
            t.removeClass("active");
        }));
    },
    toggleMobileUnitDisplay: function() {
        var e = Travian.Game.Preferences.get("mobileUnitDisplay");
        Travian.Game.Preferences.set("mobileUnitDisplay", "expanded" === e ? "collapsed" : "expanded");
    },
    enableVillageListShortcuts: function() {
        const e = jQuery("#sidebarBoxVillagelist .content .villageList");
const t = e.find(".listEntry:not(.active) .coordinatesGrid");
const i = t[0];
        void 0 !== i && i.hasAttribute("data-x") && i.hasAttribute("data-y") && i.hasAttribute("data-did") && i.hasAttribute("data-villagename") && (e.addClass("shortcutsEnabled"), 
        t.each((function() {
            const e = jQuery(this);
            e.attr("title", e.data("title"));
        })), Travian.Tip.refresh(), e.find(".listEntry:not(.active)").off("click").on("click", (function(e) {
            let t = jQuery(e.target);
            if (t.is(".coordinatesGrid") || t.parents(".coordinatesGrid").length > 0) {
                e.preventDefault();
                let t = jQuery(this).find(".coordinatesGrid");
                if (t.length > 0) {
                    let e = parseInt(t.data("x"));
let i = parseInt(t.data("y"));
let n = parseInt(t.data("did"));
let a = t.data("villagename");
                    jQuery(window).trigger("travian.villageList.coordinatesShortcut", [ e, i, n, a ]), 
                    jQuery(this).parents(".sidebar.mobileOpened").removeClass("mobileOpened"), jQuery("#reactDialogWrapper").removeClass("withSidebarBeforeContent withSidebarAfterContent");
                }
            }
        })));
    },
    disableVillageListShortcuts: function() {
        jQuery("#sidebarBoxVillagelist .content .villageList").removeClass("shortcutsEnabled");
    },
    getColorClassByLoyaltyValue: function(e) {
        switch (!0) {
          case e < Travian.Constants.MEDIUM_LOYALTY_VALUE:
            return "low";

          case e > Travian.Constants.MEDIUM_LOYALTY_VALUE:
            return "high";

          default:
            return "medium";
        }
    },
    updateLoyalty: function(e) {
        if (!e) return;
        const t = jQuery("#sidebarBoxActiveVillage .loyalty");
const i = this.getColorClassByLoyaltyValue(e);
        t.removeClass("high medium low").addClass(i), t.find("span").html(e + "%");
    }
}, Travian.Game.ActiveVillage = {
    updateActiveVillageName: function() {
        Travian.api("villageList/getVillageNames", {
            success: function(e) {
                let t = document.querySelector("#villageName input");
                t.value = e.villageNames[t.dataset.did];
            }
        }, "get");
    }
}, Travian.Game.VillageList = {
    closestDropContainer: null,
    enableDragAndDropSorting: function() {
        jQuery((function() {
            jQuery(".villageList .dragAndDrop").off("mousedown touchstart").on("mousedown touchstart", (function(t) {
                if ("0" === jQuery(this).find("svg.handle").css("opacity")) return !0;
                t.preventDefault();
                let i = jQuery(this).parents(".listEntry");
                i.addClass("dragged");
                let n = i.clone();
                n.attr("id", "villageListDragElement"), n.css({
                    width: i.width()
                }), i.parents(".dropContainer").prepend(n), e(t), Travian.Game.VillageList.closestDropContainer = i.parents(".dropContainer");
            })), jQuery(window).on("mousemove touchmove", (function(t) {
                let i = jQuery(".villageList .listEntry.dragged");
                if (i.length > 0) {
                    e(t);
                    let n = Travian.getCursorPosition(t);
                    if (Travian.Game.VillageList.closestDropContainer = i.parents(".dropContainer"), 
                    i.parents(".villageList").find(".dropContainer").each((function() {
                        let e = jQuery(this);
                        Math.abs(n.y - e.offset().top - e.height() / 2) < Math.abs(n.y - Travian.Game.VillageList.closestDropContainer.offset().top - Travian.Game.VillageList.closestDropContainer.height() / 2) && (Travian.Game.VillageList.closestDropContainer = e);
                    })), jQuery(".villageList .dropContainer").removeClass("highlightDropSection"), 
                    parseInt(Travian.Game.VillageList.closestDropContainer.find(".listEntry").data("did")) !== parseInt(i.data("did"))) {
                        let e = parseInt(Travian.Game.VillageList.closestDropContainer.data("sortindex")) > parseInt(i.parent(".dropContainer").data("sortindex")) ? "down" : "up";
                        Travian.Game.VillageList.closestDropContainer.removeClass("up").removeClass("down").addClass("highlightDropSection " + e);
                    }
                }
            })), jQuery(window).on("mouseup touchend", (function(e) {
                let t = jQuery(".villageList .listEntry.dragged");
                if (t.length > 0) {
                    let i = parseInt(t.parents(".dropContainer").data("sortindex"));
let n = parseInt(Travian.Game.VillageList.closestDropContainer.data("sortindex"));
let a = parseInt(t.data("did"));
                    Travian.Game.VillageList.closestDropContainer.append(t), i !== n && Travian.Game.VillageList.updateVillageSortIndex(a, n + +(i < n));
                    let o = Travian.Game.VillageList.closestDropContainer.parents(".villageList").find(".listEntry");
                    n > i ? o.each((function() {
                        let e = jQuery(this);
                        if (e.data("did") !== t.data("did")) {
                            let t = e.parent(".dropContainer");
let a = t.data("sortindex");
                            a > i && a <= n && t.prev(".dropContainer").append(e);
                        }
                    })) : o.each((function() {
                        let e = jQuery(this);
                        if (e.data("did") !== t.data("did")) {
                            let t = e.parent(".dropContainer");
let a = t.data("sortindex");
                            a < i && a >= n && t.next(".dropContainer").append(e);
                        }
                    }));
                    let r = jQuery("#villageListDragElement");
let s = Travian.Game.VillageList.closestDropContainer.find(".listEntry:not(#villageListDragElement)");
                    s.addClass("hidden");
                    let l = s.offset();
let c = jQuery(window).scrollTop();
                    if ("auto" === jQuery("#sidebarAfterContent").css("overflow")) {
                        let t = jQuery(e.target).parents(".sidebarBoxWrapper").css("transform").match(/-?[\d.]+/g);
                        if (null !== t) {
                            t = parseFloat(t[0]);
                            let e = jQuery(".villageList");
                            c = 0, l.left = e.position().left - 10, l.top = s.parents(".sidebarBox").position().top / t + s.parent(".dropContainer").position().top / t + 10;
                        }
                    }
                    r.animate({
                        left: l.left,
                        top: l.top - c
                    }, 250), setTimeout((function() {
                        s.removeClass("hidden"), r.remove();
                    }), 250), t.removeClass("dragged"), jQuery(".villageList .dropContainer").removeClass("highlightDropSection");
                    const d = jQuery(".villageList .dropContainer").length;
                    let u = jQuery(".villageList .listEntry.active").parent(".dropContainer");
let p = u.prev();
                    d > 2 && p.length <= 0 && (p = jQuery(".villageList .dropContainer:last-child"));
                    let h = u.next();
                    d > 2 && h.length <= 0 && (h = jQuery(".villageList .dropContainer:first-child")), 
                    jQuery(".villageList .listEntry a").attr("accesskey", null), jQuery(p.find("a")).attr("accesskey", "b"), 
                    jQuery(h.find("a")).attr("accesskey", "n");
                } else jQuery("#villageListDragElement").remove();
            }));
            let e = function(e) {
                let t = Travian.getCursorPosition(e);
let i = jQuery("#sidebarAfterContent");
                const n = "auto" === i.css("overflow");
                let a = jQuery(window).scrollTop();
                n && (a = a - i.scrollTop() + i.offset().top);
                let o = jQuery("#villageListDragElement");
let r = o.offset();
let s = o.find(".dragAndDrop svg");
let l = s.offset();
let c = r.left - l.left + s.width() / 2;
let d = l.top - r.top + s.height() / 2 + a;
                if (n) {
                    let i = jQuery(e.target).parents(".sidebarBoxWrapper").css("transform").match(/-?[\d.]+/g);
                    null !== i && (i = parseFloat(i[0]), jQuery("body").hasClass("rtl") ? t.x = (t.x + o.width() / 2) / i + 10 : t.x = (t.x - o.parents(".sidebarBox").offset().left) / i - 10, 
                    t.y /= i, d = d / i + d - a);
                }
                o.css({
                    left: t.x + c,
                    top: t.y - d
                });
            };
        }));
    },
    updateVillageSortIndex: function(e, t) {
        Travian.api("village/" + e + "/update-sort-index", {
            data: {
                to: t
            },
            success: Travian.emptyFunction(),
            error: this.onError
        });
    },
    update: function(e) {
        jQuery("#sidebarBoxVillagelist").find(".listEntry a").each((function(t, i) {
            const n = Travian.Browser.parseURL(i.href);
            Object.keys(e).forEach((function(t) {
                n.searchObject[t] = e[t] ? encodeURIComponent(e[t]) : null;
            })), i.href = Travian.Browser.composeURL(n);
        }));
    },
    onError: function(e) {
        const t = new Travian.Dialog.Dialog({
            buttonOk: !0;
const buttonCancel: !1;
const buttonCloseOnClickOk: !0;
const preventFormSubmit: !0;
const version: 2;
const cssClass: "basic"
        });
        t.setContent(e.message), t.show();
    },
    updateIncomingTroopsTooltips: function() {
        const e = document.getElementById("sidebarBoxVillagelist");
        Travian.Tip.resetAjaxTipsInElement(e), Travian.Tip.updateAllInElement(e);
    },
    updateVillageNames: function() {
        Travian.api("villageList/getVillageNames", {
            success: function(e) {
                [ ...document.querySelectorAll("#sidebarBoxVillagelist .villageList .listEntry .name") ].forEach((t => {
                    t.innerHTML = e.villageNames[t.dataset.did];
                }));
            }
        }, "get");
    }
}, Travian.Game.Village.RearrangeBuildings = {
    did: null,
    step: 1,
    slotFrom: null,
    slotTo: null,
    hash: null,
    buildingSlotPositions: {},
    isMousedown: !1,
    isDragging: !1,
    isDropping: !1,
    dragObject: null,
    lastCursorPosition: {
        x: null,
        y: null
    },
    closestBuildingSlot: null,
    initialize: function(e) {
        this.did = e, Travian.Game.Layout.disable(), Travian.Game.contextHelpData = {}, 
        jQuery("body").addClass("rearrangeBuildings"), jQuery("#contentOuterContainer .rearrangeBuildings").prependTo("#background");
        let t = jQuery("#background .rearrangeBuildings").removeClass("hide");
        setTimeout((function() {
            t.addClass("show");
        }), 1), this.hash = jQuery.md5(JSON.stringify(this.getBuildingPositions())), this.bindEvents(), 
        this.calculateBuildingSlotPositions(), this.enableDragAndDrop();
    },
    bindEvents: function() {
        let e = this;
let t = jQuery("#villageContent");
        t.find(".buildingSlot.movable[data-aid]").off("mouseup touchend").on("mouseup touchend", (function() {
            if (!e.isDragging) {
                let t = jQuery(this);
let i = parseInt(t.data("aid"));
let n = parseInt(t.data("gid"));
                switch (e.step) {
                  case 1:
                    0 !== n && (e.slotFrom = i, e.step = 2);
                    break;

                  case 2:
                    e.slotTo = i, e.step = 3;
                    break;

                  default:
                    e.slotFrom = null, e.slotTo = null, e.step = 1;
                }
                e.executeStep();
            }
        }));
        let i = t.find(".buildingSlot svg path;
let .buildingSlot .level");
        i.off("hover").off("mousedown touchstart").off("mouseup mouseleave blur touchend"), 
        i.hover((function() {
            jQuery(this).parents(".buildingSlot").find(".buildingShape.iso").addClass("hover");
        }), (function() {
            jQuery(this).parents(".buildingSlot").find(".buildingShape.iso").removeClass("hover");
        })), i.on("mousedown touchstart", (function() {
            jQuery(this).parents(".buildingSlot").find(".buildingShape.iso").addClass("active");
        })), i.on("mouseup mouseleave blur touchend", (function() {
            jQuery(this).parents(".buildingSlot").find(".buildingShape.iso").removeClass("active");
        })), jQuery(window).on("resize", (function() {
            e.calculateBuildingSlotPositions();
        }));
    },
    executeStep: function() {
        let e = this;
let t = jQuery("#villageContent");
let i = jQuery("#background .rearrangeBuildings").find(".instructions");
let n = i.find(".step1");
let a = i.find(".step2");
        switch (e.step) {
          case 2:
            let o = t.find(".buildingSlot.aid" + e.slotFrom).addClass("selected");
let r = o.data("name");
let s = o.find(".level").data("level");
            a.html(Travian.Translation.get("gid15.rearrangeBuildings_step2").replace("[NAME]", "<strong>" + r + "</strong>").replace("[LEVEL]", s)), 
            n.removeClass("active"), a.addClass("active"), t.addClass("selectTarget");
            break;

          case 3:
            e.animateMovement(), t.removeClass("selectTarget"), i.find(".step.active").removeClass("active"), 
            n.addClass("active");
        }
    },
    animateMovement: function() {
        let e = this;
let t = e.slotFrom === e.slotTo;
        if (!e.isDragging && e.slotFrom === e.slotTo) return void e.animationCallback();
        let i = jQuery("#villageContent");
let n = jQuery("body").hasClass("rtl") ? "right" : "left";
let a = i.find(".buildingSlot.aid" + e.slotFrom);
let o = i.find(".buildingSlot.aid" + e.slotTo);
let r = e.isDragging ? i.find(".dragContainer") : i.find(".animationContainer.buildingFrom");
let s = i.find(".animationContainer.buildingTo");
        a.addClass("animating"), o.addClass("animating"), e.isDragging || (r.empty(), a.find("img.building").clone().appendTo(r), 
        a.find(".level").clone().appendTo(r)), t || (s.empty(), o.find("img.building").clone().appendTo(s), 
        o.find(".level").clone().appendTo(s));
        let l = {};
        e.isDragging || (l[n] = a.css(n), l.top = a.css("top"), r.css(l)), l[n] = o.css(n), 
        l.top = o.css("top"), s.css(l), r.animate(l, e.isDragging ? 150 : 300), t || (l[n] = a.css(n), 
        l.top = a.css("top"), s.animate(l, 300)), setTimeout((function() {
            e.animationCallback(), a.removeClass("animating"), o.removeClass("animating"), r.empty(), 
            s.empty();
        }), 300);
    },
    animationCallback: function() {
        let e = this;
        if (e.move(), e.isDragging) {
            let t = jQuery("#villageContent");
let i = t.find(".dragContainer");
            e.dragObject.removeClass("dragged"), e.dragObject = null, e.isDragging = !1, e.isDropping = !1, 
            t.removeClass("dragMode"), i.removeClass("enabled"), i.empty();
        }
    },
    move: function() {
        let e = this;
let t = jQuery("#villageContent");
let i = t.find(".buildingSlot.aid" + e.slotFrom);
let n = t.find(".buildingSlot.aid" + e.slotTo);
        if (i.length > 0 && n.length > 0) {
            let t = i.html();
let a = n.html();
let o = i.data("building-id");
let r = n.data("building-id");
let s = i.data("gid");
let l = n.data("gid");
let c = i.data("name");
let d = n.data("name");
            i.html(a), n.html(t), i.data("gid", l), i.data("building-id", r), i.removeClass("g" + s).addClass("g" + l), 
            n.data("gid", s), n.data("building-id", o), n.removeClass("g" + l).addClass("g" + s), 
            i.data("name", d), n.data("name", c), jQuery(".buildingSlot .hover").removeClass("hover"), 
            e.bindEvents(), i.removeClass("selected"), e.step = 1, e.slotFrom = null, e.slotTo = null, 
            e.updateProceedButton();
        }
    },
    getBuildingPositions: function() {
        const e = jQuery("#villageContent").find(".buildingSlot[data-building-id].movable");
const t = [];
        return e.each((function(e, i) {
            const n = jQuery(i);
            t.push({
                slotId: n.data("aid"),
                buildingId: n.data("building-id")
            });
        })), t.filter((e => e.buildingId > 0));
    },
    isAllowedToProceed: function() {
        return this.hash !== jQuery.md5(JSON.stringify(this.getBuildingPositions()));
    },
    updateProceedButton: function() {
        let e = jQuery("#background .rearrangeBuildings").find("button.confirm");
        this.isAllowedToProceed() ? (e.removeClass("disabled"), Travian.Tip.setContent(e, Travian.Translation.get("gid15.rearrangeBuildings"))) : (e.addClass("disabled"), 
        Travian.Tip.setContent(e, Travian.Translation.get("gid15.rearrangeToContinue")));
    },
    proceed: function() {
        if (this.isAllowedToProceed()) {
            let e = new Travian.Dialog.Dialog({
                context: "rearrangeBuildingsConfirm";
let cssClass: "rearrangeBuildingsConfirmDialog";
let preventFormSubmit: !0;
let buttonOk: !1;
let relativeTo: jQuery("#background .rearrangeBuildings button.confirm")
            });
            e.setContent(jQuery("#background .rearrangeBuildings .proceedDialog").html()), e.show();
        }
    },
    wayOfPaymentDataCallback: function() {
        return {
            villageId: Travian.Game.Village.RearrangeBuildings.did,
            positions: Travian.Game.Village.RearrangeBuildings.getBuildingPositions()
        };
    },
    abort: function() {
        if (this.isAllowedToProceed()) {
            let e = new Travian.Dialog.Dialog({
                context: "rearrangeBuildingsAbort";
let cssClass: "rearrangeBuildingsAbortDialog";
let preventFormSubmit: !0;
let buttonOk: !1;
let buttonCancel: !1;
let overlayCancel: !1;
let relativeTo: jQuery("#background .rearrangeBuildings .container .close svg")
            });
            e.setContent(jQuery("#background .rearrangeBuildings .abortDialog").html()), e.show();
        } else window.location.href = "/dorf2.php";
    },
    enableDragAndDrop: function() {
        let e = this;
let t = jQuery("#background .rearrangeBuildings").find(".instructions");
let i = jQuery("#villageContent");
let n = jQuery("body").hasClass("rtl") ? "right" : "left";
        jQuery(".buildingSlot.movable[data-aid]").on("mousedown touchstart", (function(t) {
            if (t.preventDefault(), e.isMousedown = !0, !e.isDragging && !e.isDropping) {
                let i = jQuery(this);
                0 !== parseInt(i.data("gid")) ? (e.dragObject = i, e.lastCursorPosition = Travian.getCursorPosition(t)) : e.dragObject = null;
            }
        })), jQuery(window).on("mousemove touchmove", (function(a) {
            if (e.isMousedown && 1 === e.step && null !== e.dragObject) {
                let o = Travian.getCursorPosition(a);
                if ((!Travian.Browser.isTouchInput || new Date - e.lastCursorPosition.timestamp > 200) && (o.x !== e.lastCursorPosition.x || o.y !== e.lastCursorPosition.y)) {
                    e.isDragging = !0, i.addClass("dragMode");
                    let a = i.find(".dragContainer");
                    if (!a.hasClass("enabled")) {
                        let a = jQuery(e.dragObject);
                        a.addClass("dragged");
                        let o = i.find(".dragContainer");
                        o.empty(), o.addClass("enabled"), a.find("img.building").clone().appendTo(o), a.find(".level").clone().appendTo(o), 
                        a.find("svg.buildingShape:not(.iso)").clone().appendTo(o);
                        let r = {};
                        r[n] = a.css(n), r.top = a.css("top"), o.css(r), t.find(".step.active").removeClass("active");
                        let s = a.data("name");
let l = a.find(".level").data("level");
                        t.find(".dragAndDrop").html(Travian.Translation.get("gid15.rearrangeBuildings_dragAndDrop").replace("[NAME]", "<strong>" + s + "</strong>").replace("[LEVEL]", l)).addClass("active");
                    }
                    let r = i.offset();
let s = r.left + a.width() / 2;
let l = r.top + a.height() / 2;
let c = {};
                    c[n] = "left" === n ? o.x - s : jQuery(window).outerWidth() - o.x - s + 10, c.top = o.y - l, 
                    a.css(c), e.closestBuildingSlot = e.dragObject;
                    let d = null;
                    Object.keys(e.buildingSlotPositions).map((function(t) {
                        let i = e.buildingSlotPositions[t];
let n = o.y - a.height() / 2;
let r = o.x - a.width() / 2;
let s = Math.sqrt(Math.pow(i.left - r;
let 2) + Math.pow(i.top - n;
let 2));
                        (null === d || s < d) && (e.closestBuildingSlot = jQuery(".buildingSlot.aid" + t), 
                        d = s);
                    })), jQuery(".dropTarget").removeClass("dropTarget"), e.closestBuildingSlot.addClass("dropTarget");
                }
            }
        })), jQuery(window).on("mouseup touchend", (function() {
            !e.isDropping && e.isDragging && null !== e.dragObject && e.dragObject.length > 0 && e.closestBuildingSlot.length > 0 && (e.isDropping = !0, 
            e.slotFrom = e.dragObject.data("aid"), e.slotTo = e.closestBuildingSlot.data("aid"), 
            e.step = 3, e.executeStep()), e.isMousedown = !1;
        }));
    },
    calculateBuildingSlotPositions: function() {
        let e = this;
        e.buildingSlotPositions = {}, jQuery("#villageContent .buildingSlot.movable[data-aid]").each((function() {
            let t = jQuery(this);
let i = t.data("aid");
let n = t.offset();
            e.buildingSlotPositions[i] = {
                left: n.left,
                top: n.top
            };
        }));
    }
}, Travian.TabManager = {
    initializeOnPageLoad: function() {
        var e = window.location.hash.trim();
        "" !== e && Travian.TabManager.applyAnchor(e);
    },
    initializeOnDialogLoad: function() {
        jQuery(".dialog .contentNavi .tabItem:not([id])").off("click.tabManger").on("click.tabManger", (function(e) {
            e.preventDefault();
            var t = jQuery(this);
var i = t.attr("href");
            "#" !== i && Travian.api(i, {
                success: function(e) {
                    var i = Travian.WindowManager.getWindowsByContext(t.parents(".dialogWrapper").data("context"))[0];
                    i.updateInfoButton(e.options), i.setContent(e.content), void 0 !== e.options.cssClass && i.updateCssClass(e.options.cssClass), 
                    Travian.TabManager.initializeOnDialogLoad();
                },
                error: function(e) {
                    new Travian.Dialog.Dialog({
                        preventFormSubmit: !0
                    }).setContent('<div class="error">' + e.status + " " + e.statusText + "</div>").show();
                }
            }, "GET");
        }));
    },
    handlers: {
        payment: function(e) {
            jQuery(window).trigger("startPaymentWizard", {
                data: {
                    activeTab: e
                }
            });
        }
    },
    applyAnchor: function(e) {
        var t = e.split("-");
var i = t[0].substring(1);
        delete t[0], t.length && void 0 !== Travian.TabManager.handlers[i] && Travian.TabManager.handlers[i](t.join(""));
    }
}, jQuery((function() {
    Travian.TabManager.initializeOnPageLoad();
})), Travian.Game.Vacation = {
    dialog: null,
    updateVacationTime: function(e, t) {
        var i = parseInt(Date.now()) + 864e5 * parseInt(e);
        jQuery("#vacationTime").html(function(e, t) {
            var i = function(e) {
                return e < 10 ? "0" + e : e;
            }, n = new Date(e.getTime() + 6e4 * e.getTimezoneOffset() + 1e3 * t);
            return i(n.getDate()) + "." + i(n.getMonth() + 1) + "." + i(n.getFullYear() % 100) + ", " + i(n.getHours()) + ":" + i(n.getMinutes());
        }(new Date(i), t));
    },
    closeDialog: function() {
        null !== this.dialog && this.dialog.close();
    },
    showDialog: function(e) {
        this.dialog = new Travian.Dialog.Dialog({
            buttonOk: !1,
            submitMethod: "post",
            submitUrl: "/options/vacation",
            keepOpen: !0
        }), this.dialog.setContent(e), this.dialog.show();
    },
    openConfirmation: function() {
        Travian.api("vacation-mode/confirmation", {
            data: {
                days: jQuery("#dayInput").val()
            },
            success: function(e) {
                "" !== e.html ? Travian.Game.Vacation.showDialog(e.html) : Travian.Game.Vacation.closeDialog();
            }
        });
    }
}, Travian.Game.Arifact = {
    setAutoProlongue: function(e, t) {
        Travian.api("artifact", {
            data: {
                id: e,
                action: "reactivate",
                state: t ? 1 : 0
            }
        });
    }
}, Travian.Game.ContextualHelp = {
    groupName: "",
    restartableGroup: null,
    helpData: [],
    stickyElements: [],
    documentDimensions: {
        width: 0,
        height: 0
    },
    currentStep: 0,
    isRTL: !1,
    isInitialized: !1,
    isMousedown: !1,
    isKeydown: !1,
    keyDownInterval: null,
    overlay: !1,
    initialize: function() {
        this.reset();
        var e = this;
var t = jQuery(document);
        jQuery((function() {
            e.documentDimensions.width = t.width(), e.documentDimensions.height = t.height(), 
            e.isRTL = jQuery("body").hasClass("rtl");
            var i = Travian.Game.contextHelpData;
var n = i.steps || [];
            e.groupName = i.groupName, e.restartableGroup = i.restartableGroup, n.forEach((function(t) {
                var i = t.stickToElement;
                e.addStep(t.content, i, t.boxPosition, t.arrowPosition, !!t.dismissButton, t.delay, t.teaser);
            }));
        })), jQuery(window).on("resize scroll click keyup travian.map.zoomed travian.map.imageLoaded travian.toggleMapDialog", (function() {
            e.updateStickyElements(), e.updateElements();
        })), t.on("mousedown touchstart", (function() {
            e.isMousedown = !0;
        })), t.on("mouseup touchend", (function() {
            e.isMousedown = !1;
        })), t.on("keydown", (function() {
            e.isKeydown = !0, e.keyDownInterval && clearInterval(e.keyDownInterval), e.keyDownInterval = setInterval((function() {
                e.updateStickyElements(), e.updateElements();
            }), 25);
        })), t.on("keyup", (function() {
            e.isKeydown = !1, clearInterval(e.keyDownInterval);
        })), t.on("mousemove", (function() {
            e.isMousedown && (e.updateStickyElements(), e.updateElements());
        })), jQuery(window).on("travian.contextualHelp.add", (function(t, i, n, a, o, r, s, l) {
            e.addStep(i, n, a, o, r, s, l);
        }));
    },
    addStep: function(e, t, i, n, a, o, r) {
        var s = this;
var l = 0 === s.helpData.length;
        o = void 0 !== o ? o : 0, r = void 0 !== r ? r : null, !1 !== s.registerStickyElement(t) && (s.helpData.push({
            content: e,
            stickToElement: t,
            boxPosition: i,
            arrowPosition: n,
            dismissButton: a,
            delay: o,
            teaser: r,
            active: l,
            dimensions: {
                width: 0,
                height: 0
            }
        }), setTimeout((function() {
            l && (s.initialRender(), jQuery(".contextualHelp .helpBody nav svg").on("click", (function() {
                jQuery(this).hasClass("chevronForward") ? s.currentStep += 1 : s.currentStep -= 1, 
                s.updateElements();
            })), jQuery(".contextualHelp .helpBody nav button").on("click", (function() {
                s.close();
            })), s.isInitialized = !0), jQuery("<div></div>").appendTo(".contextualHelp .helpBody .steps").html(e), 
            jQuery("<div></div>").appendTo(".contextualHelp .helpBody .progress"), null !== r && !1 !== s.registerStickyElement(r.stickToElement) && jQuery("<div></div>").insertAfter(".contextualHelp .helpBody .steps").addClass("teaser hide").html(r.content), 
            l || jQuery(".contextualHelp .helpBody .steps div:last-of-type").addClass("hide"), 
            s.updateElements();
        }), 1e3 * o));
    },
    close: function() {
        var e = this;
        jQuery("#contextualHelp").addClass("close").fadeOut(150), setTimeout((function() {
            Travian.api("contextHelp/finish", {
                data: {
                    group: e.groupName
                },
                success: function() {
                    e.reset();
                }
            }, "POST");
        }), 150);
    },
    restart: function() {
        var e = this;
        this.restartableGroup != this.groupName && Travian.api("contextHelp/restart", {
            data: {
                group: this.restartableGroup
            },
            success: function(t) {
                t.groupName && t.steps && t.steps.length > 0 && (e.reset(), e.groupName = t.groupName, 
                t.steps.forEach((function(t) {
                    var i = t.stickToElement;
                    e.addStep(t.content, i, t.boxPosition, t.arrowPosition, !!t.dismissButton, t.delay, t.teaser);
                })));
            }
        }, "POST");
    },
    check: function(e) {
        this.reset();
        const t = this;
        Travian.api("contextHelp/check", {
            data: {
                page: e
            },
            success: function(e) {
                if (Travian.Game.contextHelpData = e, e.groupName && (!t.isInitialized || e.groupName !== t.groupName) && e.steps && e.steps.length > 0 && (t.groupName = e.groupName, 
                e.steps.forEach((function(e) {
                    let i = e.stickToElement;
                    t.addStep(e.content, i, e.boxPosition, e.arrowPosition, !!e.dismissButton, e.delay, e.teaser);
                }))), e.restartableGroup !== t.restartableGroup) {
                    t.restartableGroup = e.restartableGroup;
                    let i = jQuery(".contentTitle");
let n = i.find("#contextualHelpButton");
                    e.restartableGroup && 0 === n.length ? (n = jQuery('<a id="contextualHelpButton" class="contentTitleButton buttonFramed green withIcon rectangle">&nbsp;</a>'), 
                    n.attr("title", Travian.Translation.get("contextHelp.show_contextual_help")), n.on("click", (function() {
                        t.restart();
                    })), i.append(n)) : e.restartableGroup || n.remove();
                }
                Travian.Game.Layout.updateContentTitleClass();
            }
        }, "POST");
    },
    reset: function() {
        this.groupName = "", this.helpData = [], this.stickyElements = [], this.currentStep = 0, 
        jQuery("#contextualHelp").remove();
    },
    updateElements: function(e) {
        void 0 === e && (e = !1);
        var t = this;
        if (!t.isInitialized || 0 === t.helpData.length) return;
        var i = t.helpData[t.currentStep];
var n = jQuery(window);
var a = jQuery(".contextualHelp .helpBody");
var o = a.find(".steps div");
var r = a.find("nav");
var s = r.find("svg");
var l = r.find(".chevronForward");
var c = r.find(".chevronBack");
var d = r.find("button");
var u = a.find(".progress div");
var p = jQuery(".contextualHelp .pointingArrow");
var h = a.find(".teaser:eq(" + t.currentStep + ")");
        r.removeClass("hide"), 1 !== t.helpData.length || t.helpData[0].dismissButton || r.addClass("hide");
        var m = h.length > 0 && !h.hasClass("hide");
        o.addClass("hide"), u.removeClass("active"), s.addClass("hide"), d.addClass("hide"), 
        m || (a.find(".steps div:nth-of-type(" + (t.currentStep + 1) + ")").removeClass("hide"), 
        a.find(".progress div:nth-of-type(" + (t.currentStep + 1) + ")").addClass("active"), 
        t.helpData.length > 1 && (t.currentStep > 0 && c.removeClass("hide"), t.currentStep + 1 < t.helpData.length && l.removeClass("hide")), 
        i.dismissButton && d.removeClass("hide"));
        var v = jQuery("#contextualHelp .contextualHelp");
var f = v.outerWidth();
var g = v.outerHeight();
        v.offset();
        let y = parseInt(v.data("currentstep"));
        v.removeClass("hide");
        var T = t.stickyElements.filter((function(e) {
            return e.selector === i.stickToElement;
        }))[0];
        if (null === i.teaser || jQuery(T.selector).is(":visible")) {
            if (m) return h.addClass("hide"), void t.updateElements();
        } else {
            var b = t.stickyElements.filter((function(e) {
                return e.selector === i.teaser.stickToElement;
            }))[0];
            if (jQuery(b.selector).length > 0 && (T = b, !m)) return h.removeClass("hide"), 
            void t.updateElements();
        }
        var C = T.isMapElement ? T.mapSelector : T.selector;
        if (jQuery(C).is(":visible")) {
            var w;
var x;
var k;
var S = 27;
var j = m ? i.teaser.boxPosition : i.boxPosition;
var M = m ? i.teaser.arrowPosition : i.arrowPosition;
            let a = y !== t.currentStep;
            if (T.y1 - 5 > n.height() + n.scrollTop()) {
                var D = j;
                switch (j = "above", k = "from", x = n.height() - g, w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100) - n.scrollLeft(), 
                D) {
                  case "before":
                    M = 100, w = T.x1 - f + S;
                    break;

                  case "after":
                    M = 0, w = T.x2 - S;
                }
                v.addClass("teasing");
            } else switch (v.removeClass("teasing"), j) {
              case "above":
                x = T.y1 - g - 5, w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100), k = "from", 
                x < 0 && (j = "below", x = T.y2 + 5), w < 0 && (j = "after", w = T.x2 + 5, x = T.y1 - (g - T.height) / 2 + (g - 54) * (.5 - M / 100), 
                k = "top"), w + f > t.documentDimensions.width && (j = "before", w = T.x1 - f - 5, 
                x = T.y1 - (g - T.height) / 2 + (g - 54) * (.5 - M / 100), k = "top");
                break;

              case "below":
                if (x = T.y2 + 5, w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100), k = "from", 
                x + g > n.height() + n.scrollTop()) {
                    j = "above";
                    let e = T.y1 - g - 5;
                    if (e >= 0) x = e; else {
                        j = "above", k = "from";
                        let e = 50;
                        x = n.height() + window.scrollY > T.y2 - e ? T.y2 - g - window.scrollY - e : n.height() - g, 
                        w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100) - n.scrollLeft(), v.addClass("teasing");
                    }
                }
                w < 0 && (j = "after", w = T.x2 + 5, x = T.y1 - (g - T.height) / 2 + (g - 54) * (.5 - M / 100), 
                k = "top"), w + f > t.documentDimensions.width && (j = "before", w = T.x1 - f - 5, 
                x = T.y1 - (g - T.height) / 2 + (g - 54) * (.5 - M / 100), k = "top");
                break;

              case "before":
                w = T.x1 - f - 5, k = "top", (x = T.y1 - (g - T.height) / 2 + (g - 54) * (.5 - M / 100)) < 0 && (j = "below", 
                x = T.y2 + 5, w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100), k = "from"), 
                x + g > n.height() + n.scrollTop() && (j = "above", k = "from", M = 100, x = T.y1 - g - 5, 
                w = T.x1 - f + S), w < 0 && (j = "after", w = T.x2 + 5), (w + f > t.documentDimensions.width || e && v.hasClass("above")) && (j = "above", 
                k = "from", M = 50, x = T.y1 - g - 5, w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100));
                break;

              case "after":
                w = T.x2 + 5, k = "top", (x = T.y1 - (g - T.height) / 2 + (g - 54) * (.5 - M / 100)) < 0 && (j = "below", 
                x = T.y2 + 5, w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100), k = "from"), 
                x + g > n.height() + n.scrollTop() && (j = "above", k = "from", M = 0, x = T.y1 - g - 5, 
                w = T.x2 - S), w + f > t.documentDimensions.width && (j = "before", w = T.x1 - f - 5), 
                (w < 0 || e && v.hasClass("above")) && (j = "above", k = "from", M = 50, x = T.y1 - g - 5, 
                w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100));
            }
            if (T.isMapElement) {
                var O = jQuery("body.map.fullScreen");
                if (O.length <= 0 && (O = jQuery("#content.map")), O.length > 0) {
                    var I = O.outerWidth();
var P = O.outerHeight();
var L = O.offset();
                    T.x2 <= L.left || T.x1 >= L.left + I || T.y2 <= L.top || T.y2 >= L.top + P ? v.addClass("hide") : O.hasClass("fullScreen") || (M = T.x2 <= L.left + I / 2 ? 80 : 20, 
                    x = "below" === (j = T.y2 <= L.top + P / 2 ? "above" : "below") ? T.y2 + 5 : T.y1 - g - 5, 
                    w = T.x1 - (f - T.width) / 2 + (f - 54) * (.5 - M / 100));
                }
            }
            var G = !v.hasClass(j);
            v.removeClass("above").removeClass("below").removeClass("before").removeClass("after").addClass(j), 
            G || (t.isRTL ? a ? v.stop().animate({
                right: w + "px",
                top: x + "px"
            }, 250) : v.css({
                right: w + "px",
                top: x + "px"
            }) : a ? v.stop().animate({
                left: w + "px",
                top: x + "px"
            }, 250) : v.css({
                left: w + "px",
                top: x + "px"
            }), "from" === k ? t.isRTL ? p.css({
                top: 0,
                right: M + "%"
            }) : p.css({
                top: 0,
                left: M + "%"
            }) : t.isRTL ? p.css({
                right: 0,
                top: M + "%"
            }) : p.css({
                left: 0,
                top: M + "%"
            }), v.data("currentstep", t.currentStep)), G && t.updateElements(!0);
        } else v.addClass("hide");
    },
    registerStickyElement: function(e) {
        var t = this;
var i = [];
        i.selector = e, i.isMapElement = /^MapID/.test(e), i.mapSelector = "." + Travian.Game.Map.mapIds[e.replace("MapID.", "")], 
        jQuery("#contextualHelp").removeClass("overlay"), /\.dialog/.test(e) && (this.overlay = !0);
        var n = jQuery(i.isMapElement ? i.mapSelector : e);
        if (!(n.length > 0)) return !1;
        var a = n.offset();
        i.width = n.outerWidth(), i.height = n.outerHeight();
        var o = jQuery(window);
var r = t.documentDimensions.width - o.width();
        t.isRTL ? (i.x1 = t.documentDimensions.width - r - a.left - i.width, i.x2 = t.documentDimensions.width - r - a.left) : (i.x1 = a.left, 
        i.x2 = a.left + i.width), i.y1 = a.top, i.y2 = a.top + i.height, t.stickyElements.push(i);
    },
    updateStickyElements: function() {
        var e = this;
var t = jQuery(window);
var i = e.documentDimensions.width - t.width();
        e.stickyElements.map((function(t) {
            var n = jQuery(t.isMapElement ? t.mapSelector : t.selector);
            if (n.length > 0) {
                var a = n.offset();
                t.width = n.outerWidth(), t.height = n.outerHeight(), e.isRTL ? (t.x1 = e.documentDimensions.width - i - a.left - t.width, 
                t.x2 = e.documentDimensions.width - i - a.left) : (t.x1 = a.left, t.x2 = a.left + t.width), 
                t.y1 = a.top, t.y2 = a.top + t.height;
            } else t.isMapElement && (t.mapSelector = "." + Travian.Game.Map.mapIds[t.selector.replace("MapID.", "")]);
        }));
        var n = jQuery(document);
        e.documentDimensions.width = n.width(), e.documentDimensions.height = n.height();
    },
    initialRender: function() {
        jQuery('<div id="contextualHelp"></div>').prependTo("body"), this.overlay && jQuery("#contextualHelp").addClass("overlay");
        let e = '<div class="contextualHelp" data-currentstep="0"><div class="arrowContainer"><svg class="pointingArrow" viewBox="0 0 20 20"><path d="M20 0L1 10L20 20"/></svg></div> <div class="helpBody"><div class="progress"></div><div class="steps"></div><nav>   <svg class="chevronBack" viewBox="0 0 20 20" preserveAspectRatio="none">      <path d="M19 1L1 10L19 19"/>   </svg>   <svg class="chevronForward" viewBox="0 0 20 20" preserveAspectRatio="none">      <path d="M1 1L19 10L1 19"/>   </svg>   <button type="button" class="textButtonV1">' + Travian.Translation.get("allgemein.ok") + "</button></nav></div></div>";
        jQuery(e).appendTo("#contextualHelp");
    }
}, Travian.Game.Profile = {}, Travian.Game.Profile.Languages = {
    init: function(e, t, i, n) {
        var a;
var o = {};
var r = !1;
var s = !1;
var l = "";
var c = jQuery(e);
var d = jQuery(e + " #playerLanguages");
var u = jQuery(e + " .addLanguageButton");
var p = function() {
            r = Object.keys(o).length > 1;
var s = Object.keys(o).length < 4;
var r ? d.addClass("deletable") : d.removeClass("deletable");
var s ? c.addClass("addable") : c.removeClass("addable");
        };
        let h = function(t) {
            if (void 0 !== t && !o.hasOwnProperty(t)) {
                let n = i[t];
let a = n.langNative + " (" + n.countryNative + ")";
                Travian.SVGHandler.get("flags/" + n.flag + ".svg", (function(i) {
                    d.append(jQuery('<div class="flagContainer" title="' + a + '" data-flag="' + t + '" >' + i + '<input value="' + t + '" type="hidden" name="languages[]"/></div>')), 
                    Travian.Tip.updateAllInElement(e);
                }), {
                    attributes: {
                        title: a,
                        class: "languageFlag"
                    },
                    titleFollowsPath: !1
                }), o[t] = t;
            }
            window.dispatchEvent(new CustomEvent("travian.profileLanguages.sync", {
                detail: {
                    languagesSelected: o
                }
            }));
        };
        var m = function(t;
var i) {
            Object.values(t).length > 0 && (h(t.language);
var p());
var i.close();
var Travian.Tip.updateAllInElement(e);
var Travian.Form.UnloadHelper.updateSubmitButtons(jQuery(n));
        };
        t.forEach((function(e) {
            h(e);
        })), p(), d.on("click", ".flagContainer", (function(e) {
            var t = jQuery(e.target);
            if (1 === Object.keys(o).length) return !0;
            var i = t.data("flag");
            delete o[i], t.remove(), p(), Travian.Form.UnloadHelper.updateSubmitButtons(jQuery(n));
        })), u.off("click").on("click", "", (function(e) {
            e.preventDefault();
            var t = {};
var i = new Travian.Dialog.Dialog({
                version: 2;
var preventFormSubmit: !0;
var buttonOk: !1;
var cssClass: "profileLanguages"
            });
            i.form.keydown((function(e) {
                13 === e.keyCode && m(t, i);
            }));
            var n = function(e;
var t) {
                var i = Object.values(o);
var n = "profile-languages?" + jQuery.param({
                    query: t;
var languages: i
                });
                Travian.api(n, {
                    success: function(t) {
                        e(t);
                    }
                }, "GET", "html");
            };
            jQuery("body").off("keyup", '#dialogLanguagesList input[type="text"]').on("keyup", '#dialogLanguagesList input[type="text"]', (function(e) {
                clearTimeout(a), a = setTimeout((function() {
                    l = jQuery(e.target).val(), n((function(e) {
                        i.setContent(e), jQuery('#dialogLanguagesList input[type="text"]').val(l), jQuery('#dialogLanguagesList input[type="text"]').focus();
                    }), jQuery(e.target).val());
                }), 700);
            })), jQuery("body").off("click", "#dialogLanguagesList label").on("click", "#dialogLanguagesList label", (function(e) {
                var i = jQuery(this).data("language");
                t = {
                    language: i
                };
            })), jQuery("body").off("click", "#dialogLanguagesList button").on("click", "#dialogLanguagesList button", (function(e) {
                m(t, i);
            })), n((function(e) {
                i.setContent(e).show(), jQuery('#dialogLanguagesList input[type="text"]').focus();
            }));
        }));
    }
}, Travian.Game.Manual = {
    dialog: null,
    position: null,
    open: function(e, t, i) {
        void 0 === e && (e = 0), void 0 === t && (t = 0);
        let n = Travian.Game.Manual;
let a = "manual/" + e + "/" + t;
        void 0 !== i && (a += "/" + i), new Travian.api(a, {
            success: function(e) {
                let t = jQuery(".dialogWrapper[data-context=manual]");
                0 === t.length ? (n.dialog = new Travian.Dialog.Dialog({
                    context: "manual",
                    title: Travian.Translation.translate("{allgemein.anleitung}"),
                    buttonOk: !1,
                    enableBackground: !1,
                    draggable: !0,
                    cssClass: "manual"
                }), n.position = null) : n.position = t.position(), n.dialog.setContent(e.html), 
                n.dialog.show(), null !== n.position && n.dialog.setPosition({
                    x: n.position.left,
                    y: n.position.top
                });
            },
            error: function(e) {
                let t = new Travian.Dialog.Dialog({
                    buttonOk: !0;
let buttonCloseOnClickOk: !0;
let preventFormSubmit: !0
                });
                t.setContent(e.message), t.show();
            }
        }, "GET");
    },
    toggleArachnophobiaMode: function() {
        jQuery(".arachnophobiaWarning").removeClass("arachnophobiaMode"), jQuery(".arachnophobiaWarning ~ .bigUnitSection").removeClass("arachnophobiaMode");
    }
}, Travian.Game.Europe = {}, Travian.Game.Europe.RegionMinimap = function() {
    this.region = jQuery("tr.region, svg.regionsInEurope g.region"), this.mapContainer = jQuery("svg.regionsInEurope"), 
    this.copyFront = this.mapContainer.find("g.copyFront"), this.activeRegion = null, 
    this.init = function() {
        const e = this.mapContainer.find("g.region.active");
        1 === e.length && (this.activeRegion = this.getRegionIdClass(e), this.highlightRegion(this.activeRegion));
        const t = this;
        this.region.on("mouseover", (function() {
            t.highlightRegion(t.getRegionIdClass(jQuery(this)));
        })), this.region.on("mouseout", (function() {
            t.activeRegion && t.highlightRegion(t.activeRegion);
        }));
    }, this.getRegionIdClass = function(e) {
        return e.attr("class").split(/\s+/)[1];
    }, this.highlightRegion = function(e) {
        this.activeRegion && (e === this.activeRegion ? this.mapContainer.find(this.activeRegion).addClass("active") : this.mapContainer.find(this.activeRegion).removeClass("active")), 
        jQuery(".region.highlight").removeClass("highlight"), jQuery("." + e).addClass("highlight"), 
        this.copyFront.empty(), this.mapContainer.find("g." + e + ".highlight").clone().appendTo(this.copyFront);
    
	}, this.init();





















Travian.Game.Map = (function() {
    var a = 0;
    return {
        Containers: null,
        debug: false,
        version: 1,
        getNewId: function() {
            a++;
            return "mapId" + a
        },
        isMapPositionInRect: function(c, b) {
            if (c.x0 <= b.x && c.y0 <= b.y && b.x <= c.x1 && b.y <= c.y1) {
                return true
            }
            return false
        },
        isPositionInRect: function(c, b) {
            return (c.x0 <= b.x && c.y0 <= b.y && b.x <= c.x1 && b.y <= c.y1)
        },
        register: function(b) {
            if (this.debug) {
                if (this.Containers === null) {
                    this.Containers = []
                }
                this.Containers.push(b)
            }
        },
        remapShortParameters: function(b) {
            if (typeof b.x !== "undefined" && typeof b.y !== "undefined") {
                b.position = {
                    x: b.x,
                    y: b.y
                };
                delete(b.x);
                delete(b.y)
            }
            if (typeof b.s !== "undefined") {
                b.symbols = b.s;
                delete(b.s)
            }
            if (typeof b.c !== "undefined") {
                b.title = b.c;
                delete(b.c)
            }
            if (typeof b.t !== "undefined") {
                b.text = b.t;
                delete(b.t)
            }
            if (typeof b.u !== "undefined") {
                b.uid = b.u;
                delete(b.u)
            }
            if (typeof b.d !== "undefined") {
                b.did = b.d;
                delete(b.d)
            }
            if (typeof b.a !== "undefined") {
                b.aid = b.a;
                delete(b.a)
            }
            return b
        },
        wrapCoordinate: function(f, e) {
            var d = Travian.Defaults.Map.Size;
            var c = ((f - d.left) % d.width + d.width) % d.width + d.left;
            var b = ((e - d.bottom) % d.height + d.height) % d.height + d.bottom;
            return {
                $x: c,
                $y: b
            }
        },
        xy2id: function(d, c) {
            var e = this.wrapCoordinate(d, c);
            var b = Travian.Defaults.Map.Size;
            return (b.top - e.$y) * b.width + (e.$x - b.left) + 1
        }
    }
})();
Travian.Game.Map.Base = new Class({
    contextMenu: null,
    id: null,
    globalProperties: ["cookie", "dataStore", "transition", "updater", "contextMenu"],
    element: null,
    options: null,
    parentContainer: null,
    transition: null,
    classType: "Travian.Game.Map.Base",
    updater: null,
    destroy: function() {
        if (this.element) {
            this.element.destroy()
        }
    },
    getMapCoordinates: function() {
        if (!this.position || !this.transition) {
            return null
        }
        return this.transition.translateToMap(this.position)
    },
    initialize: function(a, c) {
        a = Travian.Game.Map.remapShortParameters(a);
        var b = this;
        this.options = Object.merge({}, a);
        Object.each(this.options, function(e, d) {
            b[d] = e
        });
        if (this.id === null) {
            this.id = Travian.Game.Map.getNewId()
        }
        if (c) {
            this.parentContainer = c;
            this.globalProperties.each(function(d) {
                if (b.parentContainer[d]) {
                    b[d] = b.parentContainer[d]
                }
            });
            if (c.classType === "Travian.Game.Map.Container") {
                this.mapContainer = c
            } else {
                if (c.mapContainer) {
                    this.mapContainer = this.parentContainer.mapContainer
                }
            }
        }
    },
    isMapPositionInRect: function(a) {
        if (!this.mapCoordinates || !a) {
            return false
        }
        var b = Object.clone(this.mapCoordinates);
        if (!b.right) {
            b.right = b.x
        }
        if (!b.top) {
            b.top = b.y
        }
        return (b.x <= a.x && b.y <= a.y && a.x <= b.right && a.y <= b.top)
    },
    isPositionInRect: function(a) {
        return Travian.Game.Map.isPositionInRect({
            x0: this.position.x,
            y0: this.position.y,
            x1: this.position.x + this.position.width,
            y1: this.position.y + this.position.height
        }, a)
    },
    render: function(a) {
        a = a || {};
        if (!a.nodeType) {
            a.nodeType = "div"
        }
        this.element = (new Element(a.nodeType)).disableSelection();
        return this
    }
});
Travian.Game.Map.Container = (function() {
    var a = function(c) {
        var f = false;
        var b = false;
        var m = null;
        var g = {
            count: 0,
            shift: false,
            control: false,
            alt: false,
            keys: {},
            fn: null
        };
        var d = {
            moved: false,
            x: null,
            y: null,
            target: null
        };
        Object.each(c.keyboard, function(p, o) {
            if (typeof c.keyboard[o] === "string") {
                c.keyboard[o] = {
                    fn: c.keyboard[o]
                }
            }
            c.keyboard[o] = Object.append({
                on: ["keydown", "keyup"],
                periodical: 1
            }, c.keyboard[o]);
            if (typeof c.keyboard[o].fn === "string") {
                g.keys[o] = false
            }
        });
        var n = c.containerRender.getStyle("cursor");
        var k = function(q, o, r, p) {
            if (!c.isEventsEnabled()) {
                return
            }
            if (c.containerViewSize.x <= o && c.containerViewSize.y <= r && o <= c.containerViewSize.right && r <= c.containerViewSize.bottom && p === c.containerMover && !q.rightClick) {
                f = true;
                b = false;
                m = {
                    x: o,
                    y: r
                };
                q.stop()
            }
        };
        var e = function(p, o, r) {
            if (c.containerViewSize.x <= o && c.containerViewSize.y <= r && o <= c.containerViewSize.right && r <= c.containerViewSize.bottom) {
                c.currentMousePosition.browserAbsolute.x = o;
                c.currentMousePosition.browserAbsolute.y = r;
                c.currentMousePosition.browser.x = o - c.containerSize.x - c.elementSize.x;
                c.currentMousePosition.browser.y = r - c.containerSize.y - c.elementSize.y;
                c.currentMousePosition.map = c.transition.translateToMap(c.currentMousePosition.browser, {})
            } else {
                c.currentMousePosition.browserAbsolute.x = null;
                c.currentMousePosition.browserAbsolute.y = null;
                c.currentMousePosition.browser.x = null;
                c.currentMousePosition.browser.y = null;
                c.currentMousePosition.map.x = null;
                c.currentMousePosition.map.y = null
            }
            if (!f) {
                return
            }
            if (!c.isEventsEnabled()) {
                return
            }
            var q = {
                x: o - m.x,
                y: -(r - m.y)
            };
            m = {
                x: o,
                y: r
            };
            b = true;
            c.containerRender.setStyles({
                cursor: "move"
            });
            c.move(q);
            p.stop()
        };
        var h = function(p, o, r) {
            if (!c.isEventsEnabled()) {
                return
            }
            if (o !== null && r !== null && c.containerViewSize.x <= o && c.containerViewSize.y <= r && o <= c.containerViewSize.right && r <= c.containerViewSize.bottom && !p.rightClick && !b && f && !Travian.WindowManager.checkOpenWindowByContext("map")) {
                var q = c.transition.translateToMap({
                    x: o - c.containerViewSize.x - c.elementSize.x,
                    y: r - c.containerViewSize.y - c.elementSize.y
                }, {});
                if (c.tileDisplayInformation.type === "dialog") {
                    new Travian.Dialog.Ajax(Object.merge({}, c.tileDisplayInformation.optionsDialog, {
                        context: "map",
                        stickToUrlOnRestore: true,
                        data: {
                            x: q.x,
                            y: q.y
                        },
                        onOpen: function(t, s) {
                            $(s).getElements('a[href^="karte.php"]').addEvent("click", function(v) {
                                v.stop();
                                var u = new URI(v.target.href);
                                c.moveTo({
                                    x: parseInt(u.getData("x")),
                                    y: parseInt(u.getData("y"))
                                });
                                t.close();
                                return false
                            })
                        }
                    }))
                } else {
                    Travian.popup(c.tileDisplayInformation.optionsPopup.url.substitute(q), c.tileDisplayInformation.optionsPopup.windowOptions)
                }
            }
            c.containerRender.setStyles({
                cursor: n
            });
            if (b) {
                p.stop();
                c.updateBrowserURL(c.transition.getPointOfCenterInView())
            }
            f = false;
            b = false
        };
        $(document).addEvents({
            selectstart: function(o) {
                if (!c.isEventsEnabled()) {
                    return
                }
                if (!b) {
                    return
                }
                o.stop();
                return false
            },
            dragstart: function(o) {
                if (!c.isEventsEnabled()) {
                    return
                }
                if (!b) {
                    return
                }
                o.stop();
                return false
            },
            mousedown: function(o) {
                c.mouseDownLastCoordinates.x = o.event.clientX;
                c.mouseDownLastCoordinates.y = o.event.clientY;
                k(o, o.page.x, o.page.y, o.target)
            },
            mousemove: function(o) {
                if ((Browser.name === "chrome" || Browser.name === "safari") && (o.event.clientX === c.mouseDownLastCoordinates.x && o.event.clientY === c.mouseDownLastCoordinates.y)) {
                    return false
                }
                e(o, o.page.x, o.page.y)
            },
            mouseup: function(o) {
                h(o, o.page.x, o.page.y)
            },
            mousewheel: function(o) {
                if (!c.isEventsEnabled()) {
                    return
                }
                if (c.containerViewSize.x <= o.page.x && c.containerViewSize.y <= o.page.y && o.page.x <= c.containerViewSize.right && o.page.y <= c.containerViewSize.bottom && o.target === c.containerMover) {
                    var p = c.transition.translateToMap({
                        x: o.page.x - c.containerViewSize.x - c.elementSize.x,
                        y: o.page.y - c.containerViewSize.y - c.elementSize.y
                    }, {});
                    if (o.wheel < 0) {
                        c.zoomOut(p)
                    } else {
                        if (o.wheel > 0) {
                            c.zoomIn(p)
                        }
                    }
                    o.stop()
                }
            },
            touchstart: function(o) {
                d.moved = false;
                d.x = o.event.touches[0].pageX;
                d.y = o.event.touches[0].pageY;
                d.target = o.event.touches[0].target;
                k(o, d.x, d.y, d.target)
            },
            touchmove: function(o) {
                d.moved = true;
                d.x = o.event.touches[0].pageX;
                d.y = o.event.touches[0].pageY;
                d.target = o.event.touches[0].target;
                e(o, d.x, d.y)
            },
            touchend: function(o) {
                h(o, d.x, d.y)
            },
            keydown: function(o) {
                if (!c.isEventsEnabled()) {
                    return
                }
                if (o.shift) {
                    g.shift = true
                }
                if (o.control) {
                    g.control = true
                }
                if (o.alt) {
                    g.alt = true
                }
                if (g.keys[o.code] === false && o.target.nodeName.toLowerCase() !== "input") {
                    if (c.keyboard[o.code].on.contains("keydown") === false) {
                        return
                    }
                    g.count++;
                    g.keys[o.code] = true;
                    o.stop();
                    if (!g.fnTimer) {
                        g.fn = (function() {
                            Object.each(g.keys, function(s, q) {
                                if (s) {
                                    if (!c.keyboard[q]) {
                                        return
                                    }
                                    var u = c.keyboard[q].fn;
                                    if (u === false || !c[u]) {
                                        return
                                    }
                                    var r = "";
                                    if (u.substring(0, 4) === "move") {
                                        r = "normal";
                                        var p = c.keyboard.speed.slow;
                                        var t = c.keyboard.speed.fast;
                                        if (g[p] && !g[t]) {
                                            r = "slow"
                                        } else {
                                            if (!g[p] && g[t]) {
                                                r = "fast"
                                            }
                                        }
                                    } else {
                                        if (u.substring(0, 4) === "zoom") {
                                            r = null
                                        }
                                    }
                                    c[u](r)
                                }
                            })
                        });
                        if (c.keyboard[o.code].periodical === 0) {
                            g.fn()
                        } else {
                            if (c.keyboard[o.code].periodical > 0) {
                                g.fnTimer = g.fn.periodical(c.keyboard[o.code].periodical)
                            }
                        }
                    }
                }
            },
            keyup: function(o) {
                if (!c.isEventsEnabled()) {
                    return
                }
                if (!o.shift) {
                    g.shift = false
                }
                if (!o.control) {
                    g.control = false
                }
                if (!o.alt) {
                    g.alt = false
                }
                if (g.keys[o.code]) {
                    if (c.keyboard[o.code].on.contains("keyup") === false) {
                        return
                    }
                    g.count--;
                    g.keys[o.code] = false;
                    o.stop();
                    if (g.count === 0 && g.fnTimer) {
                        clearInterval(g.fnTimer);
                        g.fnTimer = null;
                        c.updateBrowserURL(c.transition.getPointOfCenterInView())
                    }
                }
            }
        })
    };
    return new Class({
        Extends: Travian.Game.Map.Base,
        blocks: null,
        classType: "Travian.Game.Map.Container",
        containerRender: null,
        containerSize: null,
        containerViewSize: null,
        currentMousePosition: {
            browserAbsolute: {
                x: null,
                y: null
            },
            browser: {
                x: null,
                y: null
            },
            map: {
                x: null,
                y: null
            }
        },
        element: null,
        elementSize: null,
        eventsEnabled: true,
        gridDisplayed: true,
        loading: false,
        forcedUpdates: 0,
        mouseDownLastCoordinates: {
            x: null,
            y: null
        },
        savedURL: {},
        addSymbol: function(b) {
            var c = this.blocks.find(function(d) {
                return d.isMapPositionInRect(b.position)
            });
            if (c) {
                c.addSymbol(b)
            }
            return this
        },
        deleteSymbol: function(b) {
            var c = this.blocks.find(function(d) {
                return d.isMapPositionInRect(b.position)
            });
            if (c) {
                c.deleteSymbol(b)
            }
            return this
        },
        disableEvents: function() {
            this.eventsEnabled = false;
            return this
        },
        enableEvents: function() {
            this.eventsEnabled = true;
            return this
        },
        forceUpdateBlocksLayer: function(b) {
            this.forcedUpdates = this.forcedUpdates + 1;
            this.blocks.each(function(c) {
                c.forceUpdateLayer(b)
            });
            return this
        },
        forceUpdateBlocksSymbols: function(c, b) {
            this.blocks.each(function(d) {
                d.forceUpdateSymbols(c, b)
            });
            return this
        },
        getContentForTooltip: function(b) {
            var c = this.blocks.find(function(d) {
                return d.isPositionInRect(b)
            });
            return c ? c.getContentForTooltip(b) : false
        },
        hideGrid: function() {
            this.cookie.set("grid", false);
            this.gridDisplayed = false;
            return this.updateGrid()
        },
        setContainerSizes: function(b) {
            this.containerViewSize = {
                x: b.x,
                y: b.y,
                width: b.width,
                height: b.height,
                right: b.x + b.width,
                bottom: b.y + b.height
            };
            this.containerSize = {
                x: this.containerViewSize.x,
                y: this.containerViewSize.y,
                width: Math.ceil(this.containerViewSize.width / this.blockSize.width) * this.blockSize.width,
                height: Math.ceil(this.containerViewSize.height / this.blockSize.height) * this.blockSize.height,
                right: this.containerViewSize.x + Math.ceil(this.containerViewSize.width / this.blockSize.width) * this.blockSize.width,
                bottom: this.containerViewSize.y + Math.ceil(this.containerViewSize.height / this.blockSize.height) * this.blockSize.height
            }
        },
        positionChange: function() {
            var c = Object.append(this.containerRender.getDimensions({
                computeSize: true
            }), this.containerRender.getPosition());
            var b = {
                x: this.containerViewSize.x - c.x,
                y: this.containerViewSize.y - c.y
            };
            this.setContainerSizes(c);
            this.miniMap.containerPosition = this.miniMap.container.getPosition();
            this.transition.containerPositionChange(b)
        },
        initialize: function(b) {
            var d = this;
            this.loading = true;
            if (typeof b === "undefined") {
                b = Travian.Game.Map.Options.Default
            }
            this.parent(b);
            this.onMove = this.onMove || Travian.emptyFunction;
            this.onCreate = this.onCreate || Travian.emptyFunction;
            this.onRender = this.onRender || Travian.emptyFunction;
            this.onZoom = this.onZoom || Travian.emptyFunction;
            Travian.Game.Map.register(this);
            this.cookie = new Hash.Cookie(this.id);
            this.containerRender = this.container = $(this.container);
            this.containerRender._map = this;
            var e = Object.append(this.containerRender.getDimensions({
                computeSize: true
            }), this.containerRender.getPosition());
            this.setContainerSizes(e);
            this.globalProperties.each(function(f) {
                if (Travian.Game.Map[f.capitalize()]) {
                    d[f] = new Travian.Game.Map[f.capitalize()](d[f] || {}, d)
                }
            });
            if (this.data.elements) {
                this.dataStore.setMultiple(Travian.Game.Map.DataStore.TYPE_TILE, this.data.elements)
            }
            var c = this.cookie.get("grid");
            if (c !== null) {
                this.gridDisplayed = c
            }
            this.onCreate(this);
            this.savedURL = Travian.parseURL(window.location.href);
            this.render();
            window.addEvents({
                resize: this.positionChange.bind(this)
            })
        },
        invalidateBlockVersionCache: function() {
            Object.each(this.blocks, function(b) {
                b.invalidateVersionCache()
            });
            return this
        },
        isEventsEnabled: function() {
            return this.eventsEnabled
        },
        updateBrowserURL: function(b) {
            this.savedURL.searchObject = Object.merge(this.savedURL.searchObject, b);
            window.history.replaceState(this.savedURL, document.title, Travian.composeURI(this.savedURL))
        },
        move: function(b) {
            this.transition.move(b);
            if (this.blocks !== null) {
                Object.each(this.blocks, function(c) {
                    c.move(b)
                })
            }
            if (this.loading) {
                if (!this.blockInitialDelta) {
                    this.blockInitialDelta = {
                        x: 0,
                        y: 0
                    }
                }
                this.blockInitialDelta.x += b.x;
                this.blockInitialDelta.y += b.y
            }
            this.onMove(this, b);
            return this
        },
        moveDown: function(b) {
            if (typeof b === "string") {
                b = this.speeds[b]
            }
            if (!b) {
                return
            }
            return this.move({
                x: 0,
                y: b
            })
        },
        moveLeft: function(b) {
            if (typeof b === "string") {
                b = this.speeds[b]
            }
            if (!b) {
                return
            }
            return this.move({
                x: b,
                y: 0
            })
        },
        moveLeftDown: function(b) {
            if (typeof b === "string") {
                b = this.speeds[b]
            }
            if (!b) {
                return
            }
            return this.move({
                x: b,
                y: b
            })
        },
        moveLeftUp: function(b) {
            if (typeof b === "string") {
                b = this.speeds[b]
            }
            if (!b) {
                return
            }
            return this.move({
                x: b,
                y: -b
            })
        },
        moveRight: function(b) {
            if (typeof b === "string") {
                b = this.speeds[b]
            }
            if (!b) {
                return
            }
            return this.move({
                x: -b,
                y: 0
            })
        },
        moveRightDown: function(b) {
            if (typeof b === "string") {
                b = this.speeds[b]
            }
            if (!b) {
                return
            }
            return this.move({
                x: -b,
                y: b
            })
        },
        moveRightUp: function(b) {
            if (typeof b === "string") {
                b = this.speeds[b]
            }
            if (!b) {
                return
            }
            return this.move({
                x: -b,
                y: -b
            })
        },
        moveTo: function(c) {
            var b = this.transition.translateToBrowser({
                x: Math.floor(c.x),
                y: Math.floor(c.y)
            });
            b.x += this.blockSize.width / this.transition.elementsPerBlock.x / 2;
            b.y += this.blockSize.height / this.transition.elementsPerBlock.y / 2;
            b.x += (this.containerSize.width - this.containerViewSize.width) / 2;
            b.y += (this.containerSize.height - this.containerViewSize.height) / 2;
            this.updateBrowserURL(c);
            return this.move({
                x: this.elementSize.width / 2 - b.x,
                y: -(this.elementSize.height / 2 - b.y)
            })
        },
        moveUp: function(b) {
            if (typeof b === "string") {
                b = this.speeds[b]
            }
            if (!b) {
                return
            }
            return this.move({
                x: 0,
                y: -b
            })
        },
        render: function() {
            this.container = new Element("div", {
                styles: {
                    overflow: "hidden",
                    position: "relative",
                    left: 0,
                    top: 0,
                    width: "100%",
                    height: "100%",
                    right: 0,
                    bottom: 0
                }
            }).disableSelection().inject(this.containerRender, "top").set("oncontextmenu", "return (false);");
            this.elementSize = {
                x: -this.blockSize.width * this.blockOverflow,
                y: -this.blockSize.height * this.blockOverflow,
                width: this.containerSize.width + this.blockSize.width * this.blockOverflow * 2,
                height: this.containerSize.height + this.blockSize.height * this.blockOverflow * 2
            };
            this.parent({
                nodeType: "div"
            }).element.setStyles({
                position: "absolute",
                left: this.elementSize.x,
                top: this.elementSize.y,
                width: this.elementSize.width,
                height: this.elementSize.height
            }).inject(this.container, "top");
            this.containerMover = new Element("div", {
                styles: {
                    overflow: "hidden",
                    position: "absolute",
                    left: 0,
                    top: 0,
                    width: this.containerViewSize.width,
                    height: this.containerViewSize.height,
                    zIndex: 100,
                    backgroundColor: Browser.name === "ie" ? "#FFFFFF" : "transparent",
                    opacity: Browser.name === "ie" ? 0.001 : 1
                }
            }).disableSelection().inject(this.container, "after");
            this.onRender(this);
            this.moveTo(this.mapInitialPosition);
            this.renderBlocks();
            if (this.gridDisplayed) {
                this.showGrid()
            }
            a(this);
            this.loading = false;
            return this
        },
        renderBlocks: function() {
            if (this.blocks) {
                return this
            }
            this.blocks = [];
            var c = Math.ceil(this.elementSize.width / this.blockSize.width);
            var b = Math.ceil(this.elementSize.height / this.blockSize.height);
            var e = {
                x: 0,
                y: 0
            };
            var g = null;
            var m = null;
            var d = null;
            if (this.blockInitialDelta) {
                e = Object.clone(this.blockInitialDelta);
                delete(this.blockInitialDelta)
            }
            for (var h = 0, f = 0; h < b; h++) {
                for (var k = 0; k < c; k++) {
                    g = Travian.Game.Map.Layer.Block.getCorrectPosition({
                        x: k * this.blockSize.width + e.x,
                        y: h * this.blockSize.height - e.y,
                        width: this.blockSize.width,
                        height: this.blockSize.height
                    }, this).position;
                    m = this.transition.translateToMap(g, {});
                    d = {
                        id: f++,
                        version: 0
                    };
                    if (this.data.blocks[m.x] && this.data.blocks[m.x][m.y] && this.data.blocks[m.x][m.y][m.right] && this.data.blocks[m.x][m.y][m.right][m.top]) {
                        d = Object.merge(d, this.data.blocks[m.x][m.y][m.right][m.top])
                    }
                    this.blocks.push(new Travian.Game.Map.Layer.Block(Object.merge({}, this.options.block, {
                        id: d.id,
                        symbolTypes: this.symbolTypes,
                        position: g,
                        mapCoordinates: m,
                        version: d.version
                    }), this))
                }
            }
            return this
        },
        showGrid: function() {
            this.cookie.set("grid", true);
            this.gridDisplayed = true;
            return this.updateGrid()
        },
        toggleGrid: function() {
            var b = "showGrid";
            if (this.gridDisplayed === true) {
                b = "hideGrid"
            }
            return this[b]()
        },
        toggleMiniMap: function() {
            return this.miniMap.animate()
        },
        toggleOutline: function() {
            return this.outline.animate()
        },
        updateGrid: function() {
            var c = this;
            var b = c.gridDisplayed ? this.grid[this.transition.zoomLevel] : false;
            this.element.select(".imageMark").each(function(d) {
                d.setStyles({
                    backgroundColor: "transparent",
                    backgroundImage: b !== false ? "url(" + b + ")" : "none",
                    backgroundPosition: "left top",
                    backgroundRepeat: "repeat"
                })
            });
            return this
        },
        updateSymbolData: function(b) {
            var c = this.blocks.find(function(d) {
                return d.isMapPositionInRect(b.position)
            });
            if (c) {
                c.updateSymbolData(b)
            }
            return this
        },
        zoom: function(d, c) {
            var b = this.transition.zoomLevel;
            if (this.transition.zoom(d)) {
                this.savedURL.searchObject.zoom = this.transition.zoomLevel;
                this.onZoom(this);
                if (T4_feature_flags.territory && b === 3 || this.transition.zoomLevel === 3) {
                    this.dataStore.removeAllOfType(Travian.Game.Map.DataStore.TYPE_TOOLTIP)
                }
                this.moveTo(c);
                if (this.gridDisplayed) {
                    this.updateGrid()
                }
            }
            return this
        },
        zoomIn: function(b) {
            if (!b) {
                b = this.transition.getPointOfCenterInView()
            }
            return this.zoom(-1, b)
        },
        zoomOut: function(b) {
            if (!b) {
                b = this.transition.getPointOfCenterInView()
            }
            return this.zoom(1, b)
        }
    })
})();
Travian.Game.Map.Transition = (function() {
    var a = [];
    var d = function(g, f) {
        var e = false;
        do {
            e = false;
            if (Math.round(g.x) > f.border.right) {
                g.x = f.border.left + (g.x - f.border.right) - 1;
                e = true
            } else {
                if (Math.round(g.x) < f.border.left) {
                    g.x = f.border.right - (f.border.left - g.x) + 1;
                    e = true
                }
            }
            if (Math.round(g.right) > f.border.right) {
                g.right = f.border.left + (g.right - f.border.right) - 1;
                e = true
            } else {
                if (Math.round(g.right) < f.border.left) {
                    g.right = f.border.right - (f.border.left - g.right) + 1;
                    e = true
                }
            }
            if (Math.round(g.y) > f.border.top) {
                g.y = f.border.bottom + (g.y - f.border.top) - 1;
                e = true
            } else {
                if (Math.round(g.y) < f.border.bottom) {
                    g.y = f.border.top - (f.border.bottom - g.y) + 1;
                    e = true
                }
            }
            if (Math.round(g.top) > f.border.top) {
                g.top = f.border.bottom + (g.top - f.border.top) - 1;
                e = true
            } else {
                if (Math.round(g.top) < f.border.bottom) {
                    g.top = f.border.top - (f.border.bottom - g.top) + 1;
                    e = true
                }
            }
        } while (e);
        return g
    };
    var b = function(e) {
        e.elementsPerBlock = e.zoomOptions.sizes[e.zoomLevel - 1];
        e.pixelPerTile = {
            x: e.mapContainer.blockSize.width / e.elementsPerBlock.x,
            y: e.mapContainer.blockSize.height / e.elementsPerBlock.y
        };
        e.elementsInView = {
            x: e.elementsPerBlock.x * e.mapContainer.containerSize.width / e.mapContainer.blockSize.width,
            y: e.elementsPerBlock.y * e.mapContainer.containerSize.height / e.mapContainer.blockSize.height
        }
    };
    var c = function(h, f) {
        var g = {
            x: h.mapContainer.containerSize.x + h.mapContainer.elementSize.x,
            y: h.mapContainer.containerSize.y + h.mapContainer.elementSize.y
        };
        var e = h.mapContainer.blockSize.height / h.elementsPerBlock.y;
        return {
            x: (f.x - h.positionOrigin.map.x) * h.pixelPerTile.x + h.positionOrigin.browser.x - g.x,
            y: (h.positionOrigin.map.y - f.y) * h.pixelPerTile.y - e - g.y + h.positionOrigin.browser.y
        }
    };
    return new Class({
        Extends: Travian.Game.Map.Base,
        classType: "Travian.Game.Map.Transition",
        elementsPerBlock: null,
        pixelPerTile: null,
        zoomLevel: null,
        zoomOptions: null,
        border: null,
        mapContainer: null,
        getPointOfCenterInView: function() {
            var e = {
                x: this.mapContainer.containerViewSize.x + this.mapContainer.containerViewSize.width / 2,
                y: this.mapContainer.containerViewSize.y + this.mapContainer.containerViewSize.height / 2
            };
            e.x -= this.mapContainer.containerSize.x;
            e.y -= this.mapContainer.containerSize.y;
            e.x -= this.mapContainer.elementSize.x;
            e.y -= this.mapContainer.elementSize.y;
            return this.translateToMap(e, {})
        },
        initialize: function(e, g) {
            var f = this;
            this.parent(e, g);
            this.onMove = this.onMove || Travian.emptyFunction;
            this.onCreate = this.onCreate || Travian.emptyFunction;
            this.onZoom = this.onZoom || Travian.emptyFunction;
            this.zoomLevel = this.zoomOptions.level;
            this.zoomOptions.sizes.each(function(k, h) {
                if (typeof k === "number") {
                    f.zoomOptions.sizes[h] = {
                        x: Math.floor(f.zoomOptions.sizes[h] * f.mapContainer.blockSize.width / f.mapContainer.containerSize.width),
                        y: Math.floor(f.zoomOptions.sizes[h] * f.mapContainer.blockSize.height / f.mapContainer.containerSize.height)
                    }
                }
            });
            this.positionOrigin = {
                browser: {
                    x: this.mapContainer.containerSize.x,
                    y: this.mapContainer.containerSize.y + this.mapContainer.containerSize.height
                },
                map: {
                    x: 0,
                    y: 0
                }
            };
            b(this);
            this.onCreate(this)
        },
        containerPositionChange: function(e) {
            this.positionOrigin.browser.x -= e.x;
            this.positionOrigin.browser.y += e.y
        },
        move: function(e) {
            this.positionOrigin.browser.x += e.x;
            this.positionOrigin.browser.y -= e.y;
            this.onMove(this, e);
            return this
        },
        registerCallbackOnZoom: function(e) {
            a.push(e);
            return this
        },
        translateToBrowser: function(f) {
            var g = {
                x: this.mapContainer.containerSize.x + this.mapContainer.elementSize.x,
                y: this.mapContainer.containerSize.y + this.mapContainer.elementSize.y
            };
            var e = this.mapContainer.blockSize.height / this.elementsPerBlock.y;
            return {
                x: (f.x - this.positionOrigin.map.x) * this.pixelPerTile.x + this.positionOrigin.browser.x - g.x,
                y: (this.positionOrigin.map.y - f.y) * this.pixelPerTile.y - e - g.y + this.positionOrigin.browser.y
            }
        },
        translateToMap: function(g, h) {
            h = Object.merge({
                round: true,
                correct: true
            }, h || {});
            var k = {
                x: this.mapContainer.containerSize.x + this.mapContainer.elementSize.x,
                y: this.mapContainer.containerSize.y + this.mapContainer.elementSize.y
            };
            var f = this.mapContainer.blockSize.height / this.elementsPerBlock.y;
            if (typeof g.height !== "undefined") {
                f = g.height
            }
            var e = null;
            if (h.round) {
                e = {
                    x: Math.floor((g.x + k.x - this.positionOrigin.browser.x) / this.pixelPerTile.x) + this.positionOrigin.map.x,
                    y: this.positionOrigin.map.y - Math.floor((g.y + f + (k.y - this.positionOrigin.browser.y)) / this.pixelPerTile.y)
                }
            } else {
                e = {
                    x: ((g.x + k.x - this.positionOrigin.browser.x) / this.pixelPerTile.x) + this.positionOrigin.map.x - 1,
                    y: this.positionOrigin.map.y - ((g.y + f + (k.y - this.positionOrigin.browser.y)) / this.pixelPerTile.y)
                }
            }
            if (g.width) {
                e.right = e.x + g.width / this.pixelPerTile.x - 1
            }
            if (g.height) {
                e.top = e.y + g.height / this.pixelPerTile.y - 1
            }
            if (h.correct) {
                e = d(e, this)
            }
            return e
        },
        zoom: function(f) {
            var e = this;
            if (f === 0 || (f < 0 && this.zoomLevel + f < 1) || (f > 0 && this.zoomLevel + f > this.zoomOptions.sizes.length)) {
                return false
            }
            this.zoomLevel += f;
            b(this);
            this.onZoom(this);
            a.each(function(g) {
                g(e)
            });
            return true
        }
    })
})();
Travian.Game.Map.Transition.Precision = 2;
Travian.Game.Map.Updater = (function() {
    var c = window.location.href.split("/").slice(0, -1).join("/") + "/";
    var b = function(g) {
        if (g.objects.ajax.getLength() <= 0) {
            return false
        }
        g.updateWorking(1);
        var f = [];
        g.objects.ajax.each(function(k) {
            var h = k.getRequestData();
            if (h !== false) {
                f.push(h)
            }
        });
        g.requestObject.multiple = Travian.ajax({
            url: g.url,
            data: Object.merge({}, g.parameters.multiple, {
                data: f,
                zoomLevel: g.transition.zoomLevel
            }),
            onSuccess: function(h) {
                g.updateWorking(-1);
                g.setContentDataAndRefresh(h);
                d(g)
            },
            onFailure: function(h) {
                g.updateWorking(-1);
                g.setContentDataAndRefresh(h);
                d(g)
            }
        });
        return true
    };
    var a = function(h, g) {
        h.updateWorking(1);
        var f = {
            x0: g.position.x + h.options.positionOptions.areaAroundPosition[h.transition.zoomLevel].left,
            y0: g.position.y + h.options.positionOptions.areaAroundPosition[h.transition.zoomLevel].bottom,
            x1: g.position.x + h.options.positionOptions.areaAroundPosition[h.transition.zoomLevel].right,
            y1: g.position.y + h.options.positionOptions.areaAroundPosition[h.transition.zoomLevel].top
        };
        if (h.requestObject.position) {
            h.requestObject.position.cancel();
            h.requestObject.position = null;
            h.updateWorking(-1)
        }
        h.requestObject.position = Travian.ajax({
            url: h.url,
            data: Object.merge({}, h.parameters.position, {
                data: Object.merge({}, g.position, {
                    zoomLevel: h.transition.zoomLevel,
                    ignorePositions: h.dataStore.getPositionsOfData(g.dataStoreType).inject([], function(m, k) {
                        if (Travian.Game.Map.isMapPositionInRect(f, k)) {
                            m.push(Travian.Game.Map.xy2id(k.x, k.y))
                        }
                        return m
                    })
                })
            }),
            onSuccess: function(k) {
                h.updateWorking(-1);
                (g.onSuccess || Travian.emptyFunction)(k)
            },
            onFailure: function(k) {
                h.updateWorking(-1);
                (g.onFailure || Travian.emptyFunction)(k)
            }
        })
    };
    var e = function(g, f) {
        f.element.src = f.srcUrl;
        if (f.finishedLoading) {
            f.finishedLoading()
        }
        delete(g.loadings[f.blockContainer.updaterId][f.updaterId]);
        if (g.loadings[f.blockContainer.updaterId].getLength() == 0) {
            f.blockContainer.layers.loading.hide()
        }
        g.requestCountImages--;
        g.updateWorking(-1);
        d(g)
    };
    var d = function(f) {
        if (f.requestCountImages >= f.maxRequestCount) {
            return
        }
        if (f.objects.images.getLength() == 0) {
            return
        }
        f.objects.images.sort(function(m, k) {
            var h = m.getPriority();
            var g = k.getPriority();
            if (h < g) {
                return -1
            } else {
                if (h > g) {
                    return 1
                }
            }
            return 0
        }).some(function(k, h) {
            var g = e.pass([f, k]);
            delete(f.objects.images[k.updaterId]);
            f.requestCountImages++;
            f.updateWorking(1);
            if (k.element.src.replace(c, "") == k.srcUrl) {
                g.delay(1)
            } else {
                if (!k.imageLoader) {
                    k.imageLoader = $(new Image()).addEvent("load", g)
                }
                k.refreshSrcUrl();
                k.imageLoader.src = k.srcUrl
            }
            return f.requestCountImages >= f.maxRequestCount
        })
    };
    return new Class({
        Extends: Travian.Game.Map.Base,
        lastRequestPosition: {
            x: null,
            y: null
        },
        loadings: {},
        requestCount: 0,
        requestCountImages: 0,
        requestDelayId: {
            multiple: null,
            position: null
        },
        requestImages: $H({}),
        requestObject: {
            multiple: null,
            position: null
        },
        objects: null,
        classType: "Travian.Game.Map.Updater",
        initialize: function(f, g) {
            this.parent(f, g);
            this.objects = {
                ajax: $H({}),
                images: $H({})
            };
            this.elementWorking = $(this.elementWorking)
        },
        register: function(g, f) {
            var h = this;
            if (!this.objects[g]) {
                return this
            }
            if (!f.updaterId) {
                f.updaterId = Travian.Game.Map.getNewId()
            }
            if (!this.objects[g][f.updaterId]) {
                this.objects[g][f.updaterId] = f
            }
            if (g == "images") {
                if (!f.blockContainer.updaterId) {
                    f.blockContainer.updaterId = Travian.Game.Map.getNewId()
                }
                if (!this.loadings[f.blockContainer.updaterId]) {
                    this.loadings[f.blockContainer.updaterId] = $H({})
                }
                this.loadings[f.blockContainer.updaterId][f.updaterId] = true;
                f.blockContainer.layers.loading.show()
            }
            this.request();
            return this
        },
        request: function() {
            var f = this;
            if (this.requestObject.multiple && this.requestObject.multiple.cancel) {
                this.requestObject.multiple.cancel();
                this.requestObject.multiple = null;
                this.updateWorking(-1)
            }
            if (this.requestDelayId.multiple) {
                clearTimeout(this.requestDelayId.multiple);
                this.requestDelayId.multiple = null
            }
            this.requestDelayId.multiple = (function() {
                if (b(f) === false) {
                    d(f)
                }
            }).delay(this.requestDelayTime.multiple);
            return this
        },
        requestPosition: function(f) {
            var g = this;
            if (this.lastRequestPosition.x == f.position.x && this.lastRequestPosition.y == f.position.y) {
                return this
            }
            this.lastRequestPosition.x = f.position.x;
            this.lastRequestPosition.y = f.position.y;
            if (this.requestObject.position && this.requestObject.position.cancel) {
                this.requestObject.position.cancel();
                this.requestObject.position = null;
                this.updateWorking(-1)
            }
            if (this.requestDelayId.position) {
                clearTimeout(this.requestDelayId.position);
                this.requestDelayId.position = null
            }
            this.requestDelayId.position = (function() {
                a(g, f)
            }).delay(this.requestDelayTime.position);
            return this
        },
        setContentDataAndRefresh: function(f) {
            var g = this;
            if (f.blocks) {
                Object.each(f.blocks, function(k, h) {
                    Object.each(k, function(m, n) {
                        Object.each(m, function(p, o) {
                            Object.each(p, function(t, r) {
                                var q = {
                                    x: h,
                                    y: n,
                                    right: o,
                                    top: r
                                };
                                var s = Object.merge({}, g.dataStore.get(Travian.Game.Map.DataStore.TYPE_BLOCKS, q, "block") || {}, t);
                                g.dataStore.push({
                                    type: Travian.Game.Map.DataStore.TYPE_BLOCKS,
                                    position: q,
                                    index: "block",
                                    data: s
                                })
                            })
                        })
                    })
                });
                this.mapContainer.invalidateBlockVersionCache()
            }
            if (f.elements) {
                this.dataStore.setMultiple(Travian.Game.Map.DataStore.TYPE_TILE, f.elements)
            }
            this.objects.ajax.each(function(h) {
                if (h.refreshContent) {
                    h.refreshContent()
                }
                delete(g.objects.ajax[h.updaterId])
            });
            return this
        },
        updateWorking: function(f) {
            this.requestCount += f;
            if (this.requestCount < 0) {
                this.requestCount = 0
            }
            if (this.elementWorking) {
                if (this.requestCount > 0) {
                    this.elementWorking.setStyles({
                        visibility: "visible"
                    })
                } else {
                    this.elementWorking.setStyles({
                        visibility: "hidden"
                    })
                }
                this.elementWorking.set("html", this.requestCount)
            }
            return this
        }
    })
})();
Travian.Game.Map.ContextMenu = new Class({
    Implements: [Options, Events],
    options: {
        actions: {},
        menu: "contextmenu",
        stopEvent: true,
        targets: "body",
        trigger: "contextmenu",
        offsets: {
            x: 0,
            y: 0
        },
        onShow: Travian.emptyFunction,
        onHide: Travian.emptyFunction,
        onClick: Travian.emptyFunction,
        fadeSpeed: 200
    },
    classType: "Travian.Game.Map.ContextMenu",
    parentContainer: null,
    mapPosition: null,
    addAction: function(b) {
        var d = this;
        var c = false;
        b.element = $(b.element);
        if (b.element && !c) {
            var a = b.element.down("a");
            if (a) {
                a.addEvent("click", function(f) {
                    b.fn(d, d.mapPosition, d.contentData)
                });
                this.actions.push(b)
            } else {
                b.element.hide()
            }
        }
        return this
    },
    disable: function() {
        this.options.disabled = true;
        return this
    },
    disableItem: function(a) {
        this.menu.getElements("a[href$=" + a + "]").addClass("disabled");
        return this
    },
    enable: function() {
        this.options.disabled = false;
        return this
    },
    enableItem: function(a) {
        this.menu.getElements("a[href$=" + a + "]").removeClass("disabled");
        return this
    },
    execute: function(b, a) {
        if (this.options.actions[b]) {
            this.options.actions[b](a, this)
        }
        return this
    },
    hide: function() {
        if (this.shown) {
            this.fx.start(0);
            this.parentContainer.enableEvents();
            this.fireEvent("hide");
            this.shown = false
        }
        return this
    },
    initialize: function(a, c) {
        var b = this;
        this.setOptions(a);
        this.parentContainer = c;
        this.menu = document.id(this.options.menu);
        this.targets = $$(this.options.targets);
        this.fx = new Fx.Tween(this.menu, {
            property: "opacity",
            duration: this.options.fadeSpeed,
            onComplete: function() {
                b.menu.setStyles({
                    display: b.shown ? "block" : "none"
                })
            }
        });
        this.hide().startListener();
        /*
        this.menu.setStyles({
            position: "absolute",
            top: "-900000px",
            display: "block"
        });
        $(a.menu).dispose().inject(document.body);*/
        this.actions = [];
        a.actions.each(function(d) {
            b.addAction(d)
        });
        this.targets.each(function(d) {
            d.addEvent(b.options.trigger, function(f) {
                b.mapPosition = b.parentContainer.transition.translateToMap({
                    x: f.page.x - b.parentContainer.containerSize.x - b.parentContainer.elementSize.x,
                    y: f.page.y - b.parentContainer.containerSize.y - b.parentContainer.elementSize.y
                });
                b.update()
            })
        })
    },
    show: function() {
        this.fx.start(1);
        this.parentContainer.disableEvents();
        this.fireEvent("show");
        this.shown = true;
        return this
    },
    startListener: function() {
        var a = this;
        this.targets.each(function(b) {
            b.addEvent(a.options.trigger, function(c) {
                if (c.target == a.parentContainer.containerMover && !a.options.disabled) {
                    if (a.options.stopEvent) {
                        c.stop()
                    }
                    a.options.element = document.id(b);
                    a.menu.setStyles({
                        top: (c.page.y + a.options.offsets.y),
                        left: (c.page.x + a.options.offsets.x),
                        position: "absolute"
                    });
                    a.show()
                }
            })
        });
        /*
        this.menu.getElements("a").each(function(b) {
            b.addEvent("click", function(c) {
                if (!b.hasClass("disabled")) {
                    a.execute(b.get("href").split("#")[1], document.id(a.options.element));
                    a.fireEvent("click", [b, c])
                }
            })
        });*/
        document.id(document.body).addEvent("click", function() {
            a.hide()
        });
        return this
    },
    update: function() {
        var a = this;
        if (this.options.disabled || !this.shown) {
            return this
        }
        this.contentData = this.parentContainer.dataStore.get(Travian.Game.Map.DataStore.TYPE_TOOLTIP, this.mapPosition);
        this.actions.each(function(b) {
            if (a.contentData != null && b.shouldDisplay(a.contentData)) {
                b.element.show()
            } else {
                b.element.hide()
            }
        });
        Object.each(this.options.separators, function(d) {
            var c = a.menu.down(d.selector);
            if (!c) {
                return
            }
            var b = 0;
            d.elements.each(function(e) {
                var f = a.menu.down(e);
                if (!f) {
                    return
                }
                if (f.isDisplayed()) {
                    b++
                }
                return
            });
            c[b > 0 ? "show" : "hide"]().getPrevious()[b > 0 ? "show" : "hide"]()
        });
        return this
    }
});
Travian.Game.Map.DataStore = (function() {
    var f = 0;
    var e = function(g) {
        Object.each(g.options.useStorageForType, function(k, h) {
            if (k) {
                Travian.Storage.set("mapDataContainer." + h, g.data[h], g.options.persistentStorage)
            }
        })
    };
    var c = function(k, o, g) {
        var m = g.x;
        var p = g.y;
        var h = typeof g.right != "undefined" ? g.right : m;
        var n = typeof g.top != "undefined" ? g.top : p;
        if (!k.data[o]) {
            k.data[o] = {
                all: $H()
            }
        }
        if (!k.data[o][m]) {
            k.data[o][m] = {}
        }
        if (!k.data[o][m][p]) {
            k.data[o][m][p] = {}
        }
        if (!k.data[o][m][p][h]) {
            k.data[o][m][p][h] = {}
        }
        if (!k.data[o][m][p][h][n]) {
            k.data[o][m][p][h][n] = {}
        }
        if (!k.data[o][m][p][h][n].id) {
            f++;
            k.data[o][m][p][h][n].id = f
        }
        k.data[o][m][p][h][n].position = g;
        return k.data[o][m][p][h][n]
    };
    var b = function(k, o, g) {
        var m = g.x;
        var p = g.y;
        var h = typeof g.right != "undefined" ? g.right : m;
        var n = typeof g.top != "undefined" ? g.top : p;
        if (!k.data[o]) {
            return null
        }
        if (!k.data[o][m]) {
            return null
        }
        if (!k.data[o][m][p]) {
            return null
        }
        if (!k.data[o][m][p][h]) {
            return null
        }
        if (!k.data[o][m][p][h][n]) {
            return null
        }
        if (d(k, k.data[o][m][p][h][n], o)) {
            return null
        }
        return k.data[o][m][p][h][n]
    };
    var d = function(g, k, h) {
        return k.time !== false && (new Date()).getTime() - k.time > g.cachingTimeForType[h]
    };
    var a = new Class({
        Extends: Travian.Game.Map.Base,
        classType: "Travian.Game.Map.DataStore",
        data: null,
        get: function(k, g, h) {
            var m = b(this, k, g);
            if (m == null) {
                return null
            }
            if (typeof h != "undefined") {
                if (m.data[h]) {
                    return m.data[h]
                }
                return null
            }
            return m.data
        },
        getDataForArea: function(m, h, p) {
            var n = this;
            var g = [];
            var o = null;
            var k = Object.clone(h);
            if (!this.data[m] || !this.data[m].all) {
                return g
            }
            if (k.x > k.right) {
                k.right += this.parentContainer.transition.border.width
            }
            if (k.y > k.top) {
                k.top += this.parentContainer.transition.border.height
            }
            this.data[m].all.each(function(q) {
                var r = {
                    x: q.position.x,
                    y: q.position.y
                };
                if (k.x > r.x) {
                    r.x += n.parentContainer.transition.border.width
                }
                if (k.y > r.y) {
                    r.y += n.parentContainer.transition.border.height
                }
                if (d(n, q, m) === false && k.x <= r.x && r.x <= k.right && k.y <= r.y && r.y <= k.top) {
                    if (p) {
                        Object.each(q.data, function(s) {
                            g.push(s)
                        })
                    } else {
                        g.push(q.data)
                    }
                }
            });
            return g
        },
        getPositionsOfData: function(g) {
            var h = this;
            if (!this.data[g] || !this.data[g].all) {
                return []
            }
            return this.data[g].all.inject([], function(m, k) {
                if (d(h, k, g) === false) {
                    m.push(k.position)
                }
                return m
            })
        },
        initialize: function(g, k) {
            var h = this;
            this.parent(g, k);
            this.data = {};
            Object.each(this.options.clearStorageForType, function(n, m) {
                if (n) {
                    Travian.Storage.clear("mapDataContainer." + m, h.options.persistentStorage)
                }
            });
            this.options.useStorageForType = $H(this.options.useStorageForType).inject($H(), function(o, p, m) {
                if (p) {
                    o[m] = true;
                    h.data[m] = Travian.Storage.get("mapDataContainer." + m, h.options.persistentStorage) || {};
                    if (!h.data[m].all) {
                        h.data[m].all = $H({})
                    } else {
                        h.data[m].all = $H(h.data[m].all);
                        var n = h.data[m].all.getKeys().max();
                        if (n > f) {
                            f = n
                        }
                    }
                }
                return o
            })
        },
        push: function(g) {
            if (typeof g.time == "undefined") {
                g.time = (new Date()).getTime()
            }
            if (g.time == -1) {
                g.time = false
            }
            g = Travian.Game.Map.remapShortParameters(g);
            var h = c(this, g.type, g.position);
            if (!h.data) {
                h.data = {}
            }
            h.data[g.index] = g.data;
            h.time = g.time;
            this.data[g.type].all[h.id] = h;
            return this
        },
        refresh: function(g) {
            var h = b(this, g.type, g.position);
            if (h != null) {
                if (typeof g.time == "undefined") {
                    g.time = (new Date()).getTime()
                }
                if (g.time == -1) {
                    g.time = false
                }
                h.time = g.time
            }
            return this
        },
        remove: function(k, g, h) {
            var m = b(this, k, g);
            if (m == null) {
                return this
            }
            if (typeof h != "undefined") {
                if (m.data[h]) {
                    delete(m.data[h])
                }
                return this
            }
            m.time = 0;
            return this
        },
        removeAllOfType: function(g) {
            if (this.data[g] !== undefined) {
                delete(this.data[g])
            }
        },
        saveDataToStorage: function() {
            e(this);
            return this
        },
        set: function(g) {
            var h = this;
            if (typeof g.time == "undefined") {
                g.time = (new Date()).getTime()
            }
            if (g.time == -1) {
                g.time = false
            }
            g = Travian.Game.Map.remapShortParameters(g);
            var k = c(this, g.type, g.position);
            k.data = g.data;
            k.time = g.time;
            this.data[g.type].all[k.id] = k;
            if (g.data.symbols) {
                g.data.symbols.each(function(n, m) {
                    if (!n.dataId) {
                        n.dataId = n.type + "-" + m
                    }
                    n = Travian.Game.Map.remapShortParameters(n);
                    if (!n.position) {
                        n.position = g.position
                    }
                    h.push({
                        type: Travian.Game.Map.DataStore.TYPE_SYMBOL,
                        position: g.position,
                        data: n,
                        index: n.dataId,
                        time: false
                    })
                })
            }
            return this
        },
        setMultiple: function(h, g, m) {
            var k = this;
            g.each(function(n) {
                n = Travian.Game.Map.remapShortParameters(n);
                k.set({
                    type: h,
                    position: n.position,
                    data: n,
                    time: m
                })
            });
            e(this);
            return this
        }
    });
    a.TYPE_BLOCKS = "blocks";
    a.TYPE_SYMBOL = "symbol";
    a.TYPE_TILE = "tile";
    a.TYPE_TOOLTIP = "tooltip";
    return a
})();
Travian.Game.Map.Tips = {
    lastText: "",
    lastTitle: "",
    tooltipHtml: '<span class="xCoord">({x}</span><span class="pi">|</span><span class="yCoord">{y})</span><span class="clear"></span>',
    render: function(c, a) {
        var b = this;
        a.setTitle({
            title: "",
            text: ""
        }).addEvents({
            mousemove: function(g) {
                var f = {
                    x: g.page.x - c.containerSize.x - c.elementSize.x,
                    y: g.page.y - c.containerSize.y - c.elementSize.y
                };
                var d = c.getContentForTooltip(f, g);
                if (d === false) {
                    d = {
                        title: "",
                        text: b.tooltipHtml.substitute(c.transition.translateToMap(f))
                    }
                }
                if (b.lastText !== d.text || b.lastTitle !== d.title) {
                    d.unescaped = true;
                    Travian.Tip.show(d);
                    b.lastText = d.text;
                    b.lastTitle = d.title
                }
            }
        });
        return this
    }
};
Travian.Game.Map.Rulers = (function() {
    var b = function(g, f) {
        f += g.delta.x[g.transition.zoomLevel];
        if (f < g.transition.border.left) {
            f = g.transition.border.right - (g.transition.border.left - f) + 1
        } else {
            if (f > g.transition.border.right) {
                f = g.transition.border.left + (f - g.transition.border.right) - 1
            }
        }
        return f
    };
    var a = function(g, f) {
        f += g.delta.y[g.transition.zoomLevel];
        if (f < g.transition.border.bottom) {
            f = g.transition.border.top - (g.transition.border.bottom - f) + 1
        } else {
            if (f > g.transition.border.top) {
                f = g.transition.border.bottom + (f - g.transition.border.top) - 1
            }
        }
        return f
    };
    var e = function(f) {
        f.elements.moverX.setStyles({
            backgroundImage: "url(" + f.imgSource.x.substitute({
                zoomLevel: f.transition.zoomLevel
            }) + ")"
        });
        f.elements.moverY.setStyles({
            backgroundImage: "url(" + f.imgSource.y.substitute({
                zoomLevel: f.transition.zoomLevel
            }) + ")"
        })
    };
    var d = function(o) {
        if (o.elements.coordinates) {
            o.elements.coordinates.x.invoke("dispose");
            o.elements.coordinates.y.invoke("dispose")
        }
        o.elements.coordinates = {
            x: [],
            y: []
        };
        var p = o.transition.elementsInView.x + o.transition.elementsPerBlock.x * 2;
        var n = o.steps.x[o.transition.zoomLevel];
        for (var f = 0, g = null, k = null; f < p; f += n) {
            g = (new Element("div", {
                "class": "coordinate zoom" + o.transition.zoomLevel,
                styles: {
                    position: "absolute",
                    left: f * o.mapContainer.blockSize.width / o.transition.elementsPerBlock.x,
                    top: 0,
                    width: n * o.mapContainer.blockSize.width / o.transition.elementsPerBlock.x,
                    height: o.containerSize.height
                }
            })).inject(o.elements.moverX, "bottom");
            g.rulerLeft = f * o.mapContainer.blockSize.width / o.transition.elementsPerBlock.x;
            k = g.getDimensions({
                computeSize: true
            });
            g.setStyles({
                width: k.width - k["padding-left"] - k["padding-right"],
                height: k.height - k["padding-top"] - k["padding-bottom"]
            });
            o.elements.coordinates.x[f] = g
        }
        var m = o.transition.elementsInView.y + o.transition.elementsPerBlock.y * 2;
        var h = o.steps.y[o.transition.zoomLevel];
        for (f = 0, g = null, k = null; f < m; f += h) {
            g = (new Element("div", {
                "class": "coordinate zoom" + o.transition.zoomLevel,
                styles: {
                    position: "absolute",
                    left: 0,
                    top: f * o.mapContainer.blockSize.height / o.transition.elementsPerBlock.y,
                    width: o.containerSize.width,
                    height: h * o.mapContainer.blockSize.height / o.transition.elementsPerBlock.y
                }
            })).inject(o.elements.moverY, "bottom");
            g.rulerTop = f * o.mapContainer.blockSize.height / o.transition.elementsPerBlock.y;
            k = g.getDimensions({
                computeSize: true
            });
            if (k.height - k["padding-top"] - k["padding-bottom"] > 0) {
                g.setStyles({
                    width: k.width - k["padding-left"] - k["padding-right"],
                    height: k.height - k["padding-top"] - k["padding-bottom"]
                })
            } else {
                g.setStyles({
                    height: 0
                })
            }
            o.elements.coordinates.y[f] = g
        }
        c(o, true, true)
    };
    var c = function(k, g, f) {
        var h = false;
        do {
            h = false;
            if (k.position.x < -2 * k.mapContainer.blockSize.width) {
                k.position.x += k.mapContainer.blockSize.width * 1;
                g = true;
                h = true
            }
            if (k.position.x > 0) {
                k.position.x += k.mapContainer.blockSize.width * -1;
                g = true;
                h = true
            }
            if (k.position.y < -2 * k.mapContainer.blockSize.height) {
                k.position.y += k.mapContainer.blockSize.height * 1;
                f = true;
                h = true
            }
            if (k.position.y > 0) {
                k.position.y += k.mapContainer.blockSize.height * -1;
                f = true;
                h = true
            }
        } while (h);
        k.elements.moverX.setStyles({
            left: k.position.x
        });
        k.elements.moverY.setStyles({
            top: k.position.y
        });
        if (g && k.elements.coordinates) {
            k.elements.coordinates.x.each(function(o, m) {
                if (o) {
                    var n = k.transition.translateToMap({
                        x: k.position.x + o.rulerLeft - k.mapContainer.elementSize.x,
                        y: 0
                    });
                    o.set("html", b(k, n.x))
                }
            })
        }
        if (f && k.elements.coordinates) {
            k.elements.coordinates.y.each(function(n) {
                if (n) {
                    var m = k.transition.translateToMap({
                        x: 0,
                        y: k.position.y + n.rulerTop - k.mapContainer.elementSize.y
                    });
                    n.set("html", a(k, m.y))
                }
            })
        }
    };
    return new Class({
        Extends: Travian.Game.Map.Base,
        classType: "Travian.Game.Map.Rulers",
        destroy: function() {
            this.elements.containerX.dispose();
            this.elements.containerY.dispose();
            return this
        },
        initialize: function(f, g) {
            if (!f.direction) {
                f.direction = $(document.body).getStyle("direction")
            }
            this.parent(f, g);
            this.position = {
                x: 0,
                y: 0
            }
        },
        render: function() {
            var f = this;
            this.position = {
                x: this.mapContainer.blockSize.width,
                y: this.mapContainer.blockSize.height
            };
            Object.each(this.mapContainer.blocks, function(g) {
                if (f.position.x > g.position.x) {
                    f.position.x = g.position.x
                }
                if (f.position.y > g.position.y) {
                    f.position.y = g.position.y
                }
            });
            this.elements = {
                containerX: (new Element("div")).addClass(this.cls.x).inject(this.mapContainer.containerRender, "bottom").setStyles({
                    position: "absolute",
                    left: 0,
                    right: 0,
                    width: this.mapContainer.containerViewSize.width,
                    overflow: "hidden"
                }),
                containerY: (new Element("div")).addClass(this.cls.y).inject(this.mapContainer.containerRender, "bottom").setStyles({
                    position: "absolute",
                    top: 0,
                    bottom: 0,
                    height: this.mapContainer.containerViewSize.height,
                    overflow: "hidden"
                })
            };
            this.containerSize = {
                width: this.elements.containerY.getDimensions({
                    computeSize: true
                }).width,
                height: this.elements.containerX.getDimensions({
                    computeSize: true
                }).height
            };
            this.elements.containerX.setStyles({
                height: this.containerSize.height
            });
            if (this.direction.toLowerCase() === "ltr") {
                this.elements.containerY.setStyles({
                    left: -this.containerSize.width
                })
            } else {
                if (this.direction.toLowerCase() === "rtl") {
                    this.elements.containerY.setStyles({
                        right: -this.containerSize.width
                    })
                }
            }
            this.elements.moverX = new Element("div", {
                styles: {
                    position: "absolute",
                    left: 0,
                    top: 0,
                    width: this.mapContainer.containerSize.width + 2 * this.mapContainer.blockSize.width,
                    height: "100%",
                    backgroundPosition: "left top",
                    backgroundColor: "transparent",
                    backgroundRepeat: "repeat-x"
                }
            }).inject(this.elements.containerX, "bottom");
            this.elements.moverY = new Element("div", {
                styles: {
                    position: "absolute",
                    left: 0,
                    top: 0,
                    width: "100%",
                    height: this.mapContainer.containerSize.height + 2 * this.mapContainer.blockSize.height,
                    backgroundPosition: "left top",
                    backgroundColor: "transparent",
                    backgroundRepeat: "repeat-y"
                }
            }).inject(this.elements.containerY, "bottom");
            e(this);
            d(this);
            c(this);
            return this
        },
        move: function(f) {
            this.position.x += f.x;
            this.position.y -= f.y;
            c(this);
            return this
        },
        zoom: function() {
            e(this);
            d(this);
            c(this);
            return this
        }
    })
})();
Travian.Game.Map.MiniMap = (function() {
    var c = Travian.emptyFunction;
    if (Browser.name === "opera") {
        c = function(e) {
            var d = e.elements.background.getStyle("bottom");
            e.elements.background.setStyles({
                bottom: 0
            });
            (function() {
                e.elements.background.setStyles({
                    bottom: d
                })
            }).delay(0.1)
        }
    }
    var b = function(m) {
        var f = m.transition.translateToMap({
            x: -m.mapContainer.elementSize.x,
            y: -m.mapContainer.elementSize.y
        }, {});
        var k = m.transition.translateToMap({
            x: 0,
            y: 0,
            width: m.mapContainer.containerViewSize.width,
            height: m.mapContainer.containerViewSize.height
        }, {
            round: false,
            correct: false
        });
        k.width = k.right - k.x;
        k.height = k.top - k.y;
        var h = {
            x: m.containerSize.width / m.transition.border.width,
            y: m.containerSize.height / m.transition.border.height
        };
        m.position.width = k.width * h.x;
        m.position.height = k.height * h.y;
        m.position.x = f.x * h.x;
        m.position.x += m.containerSize.width / 2;
        m.position.y = f.y * h.y;
        m.position.y += m.containerSize.height / 2;
        var g = {
            x: m.position.x - m.elementSize["border-left-width"],
            y: m.position.y - m.elementSize["border-top-width"] - m.elementSize["border-bottom-width"],
            width: m.position.width + m.elementSize["border-left-width"] + m.elementSize["border-right-width"],
            height: m.position.height + m.elementSize["border-top-width"] + m.elementSize["border-bottom-width"]
        };
        if (g.width >= m.containerSize.width) {
            g.x = -1
        }
        if (g.height >= m.containerSize.height) {
            g.y = -1
        }
        m.element.setStyles({
            left: g.x,
            bottom: g.y,
            width: g.width,
            height: g.height
        });
        var e = Object.clone(g);
        var d = false;
        if (g.width >= m.containerSize.width) {
            d = true
        } else {
            if (g.x < 0) {
                g.x += m.containerSize.width;
                d = true
            } else {
                if (g.x + g.width > m.containerSize.width) {
                    g.x -= m.containerSize.width;
                    d = true
                }
            }
        }
        if (g.height >= m.containerSize.height) {
            d = true
        } else {
            if (g.y < 0) {
                g.y += m.containerSize.height;
                d = true
            } else {
                if (g.y + g.height > m.containerSize.height) {
                    g.y -= m.containerSize.height;
                    d = true
                }
            }
        }
        m.elementHelpers[0].setStyles({
            left: g.x,
            bottom: g.y,
            width: g.width,
            height: g.height,
            display: d ? "block" : "none"
        });
        m.elementHelpers[1].setStyles({
            left: e.x,
            bottom: g.y,
            width: g.width,
            height: g.height,
            display: (g.x < 0 && g.y < 0 && g.x + g.width > 0 && g.y + g.height > 0) ? "block" : "none"
        });
        m.elementHelpers[2].setStyles({
            left: g.x,
            bottom: e.y,
            width: g.width,
            height: g.height,
            display: (g.x < 0 && g.y < 0 && g.x + g.width > 0 && g.y + g.height > 0) ? "block" : "none"
        })
    };
    var a = function(g, f) {
        var d = {
            x: f.containerSize.width / f.transition.border.width,
            y: f.containerSize.height / f.transition.border.height
        };
        return {
            x: Math.floor((g.page.x - f.containerPosition.x) / d.x - Math.abs(f.transition.border.left)),
            y: -Math.floor((g.page.y - f.containerPosition.y) / d.y - Math.abs(f.transition.border.bottom))
        }
    };
    return new Class({
        Extends: Travian.Game.Map.Base,
        classType: "Travian.Game.Map.MiniMap",
        expanded: false,
        animate: function() {
            var d = this;
            if (this.elements.headlineExpander._fx && this.elements.headlineExpander._fx.cancel) {
                this.elements.headlineExpander._fx.cancel()
            }
            if (this.elements.headlineExpander.hasClass("expand")) {
                this.expanded = true;
                this.cookie.set("minimap-expanded", true);
                this.elements.headlineExpander.removeClass("expand").addClass("collapse");
                this.elements.headlineExpander._fx = (new Fx.Morph(this.elements.container, {
                    onComplete: function() {
                        c(d)
                    }
                })).start({
                    height: [this.elements.container.getSize().y, this.elements.container._height.max]
                });
                this.parentContainer.outline.update(this.elements.container.getSize().y - this.elements.container._height.max)
            } else {
                this.expanded = false;
                this.cookie.set("minimap-expanded", false);
                this.elements.headlineExpander.removeClass("collapse").addClass("expand");
                this.elements.headlineExpander._fx = (new Fx.Morph(this.elements.container, {
                    onComplete: function() {
                        c(d)
                    }
                })).start({
                    height: [this.elements.container.getSize().y, this.elements.container._height.min]
                });
                this.parentContainer.outline.update(this.elements.container.getSize().y - this.elements.container._height.min)
            }
            return this
        },
        getContentForTooltip: function(d, g) {
            var f = a(g, this);
            return {
                text: this.tooltipHtml.substitute(f)
            }
        },
        initialize: function(d, e) {
            this.parent(d, e);
            this.position = {
                x: 0,
                y: 0,
                width: 0,
                height: 0
            }
        },
        render: function() {
            var f = this;
            this.container = $(this.container).setStyles({
                overflow: "hidden"
            }).disableSelection().addEvent("click", function(h) {
                f.mapContainer.moveTo(a(h, f))
            });
            this.parent({
                nodeType: "div"
            }).element.addClass("view").setStyles({
                position: "absolute",
                zIndex: 3
            }).inject(this.container, "bottom");
            (new Element("div", {
                "class": "inner",
                styles: {
                    height: "100%",
                    opacity: 0.25,
                    width: "100%"
                }
            })).inject(this.element, "bottom");
            this.elementHelpers = [];
            for (var e = 0; e < 3; e++) {
                var d = (new Element("div", {
                    "class": "view",
                    styles: {
                        position: "absolute",
                        zIndex: 3,
                        display: "none"
                    }
                })).inject(this.container, "bottom");
                (new Element("div", {
                    "class": "inner",
                    styles: {
                        height: "100%",
                        opacity: 0.25,
                        width: "100%"
                    }
                })).inject(d, "bottom");
                this.elementHelpers.push(d)
            }
            this.containerSize = this.container.getDimensions({
                computeSize: !(Browser.name === "chrome" || Browser.name === "safari")
            });
            this.containerPosition = this.container.getPosition();
            this.elementSize = this.element.getDimensions({
                computeSize: true
            });
            if (this.showToolTip) {
                Travian.Game.Map.Tips.render(this, this.container.down("img"))
            }
            b(this);
            this.elements = {
                container: $(this.containerContent),
                headline: $(this.containerContent).down(".headline"),
                headlineExpander: $(this.containerContent).down(".headline").down(".iconButton"),
                background: $(this.containerContent).down(".background")
            };
            this.elements.headlineExpander.addClass(this.cookie.get("minimap-expanded") === true ? "collapse" : "expand");
            var g = function() {
                f.elements.container._height = {
                    max: f.elements.container.getSize().y,
                    min: f.elements.headline.getSize().y + parseInt(f.elements.headline.getStyle("margin-top")) + parseInt(f.elements.headline.getStyle("margin-bottom"))
                };
                if (f.elements.container._height.min < 0) {
                    f.elements.container._height.min = 0
                }
                if (f.elements.container._height.max < 0) {
                    f.elements.container._height.max = 0
                }
                if (f.cookie.get("minimap-expanded") !== true) {
                    f.elements.container.setStyles({
                        height: f.elements.container._height.min
                    });
                    c(f)
                }
                f.elements.headline.addEvent("click", function(h) {
                    f.animate()
                })
            };
            if (Browser.name === "chrome" || Browser.name === "safari") {
                g.delay(300)
            } else {
                g()
            }
        },
        move: function() {
            b(this);
            return this
        },
        zoom: function() {
            b(this);
            return this
        }
    })
})();
Travian.Game.Map.Toolbar = new Class({
    Extends: Travian.Game.Map.Base,
    classType: "Travian.Game.Map.Toolbar",
    initialize: function(a, b) {
        this.parent(a, b)
    },
    render: function() {
        var c = this;
        var a = null;
        this.element = $(this.element);
        this.zoomIn = this.element.down(".zoomIn").addEvent("click", function(d) {
            c.mapContainer.zoomIn()
        });
        this.zoomOut = this.element.down(".zoomOut").addEvent("click", function(d) {
            c.mapContainer.zoomOut()
        });
        var b = function() {
            c.zoomDropDownDataContainer._dropped = false;
            c.zoomDropDownDataContainer.setStyles({
                height: c.zoomDropDownDataContainer._styleBackup.height
            });
            c.zoomDropDownEntries.each(function(d) {
                if (d.hasClass("selected")) {
                    d.addClass("display")
                }
                d.addClass("hide").removeClass("selected")
            });
            c.zoomDropDownEntries[c.transition.zoomLevel - 1].removeClass("hide").addClass("display")
        };
        this.zoomDropDownDataContainer = this.element.down(".dropdown .dataContainer");
        this.zoomDropDownEntries = this.zoomDropDownDataContainer.getElements(".entry");
        this.zoomDropDownDataContainer._styleBackup = {
            height: this.zoomDropDownDataContainer.getStyle("height"),
            maxHeight: this.zoomDropDownEntries.inject(0, function(e, d) {
                return e + parseInt(d.getStyle("height"))
            })
        };
        this.zoomDropDownClick = this.element.down(".dropdown .dropDownImage").addEvent("click", function(d) {
            if (!c.mapContainer.isEventsEnabled()) {
                return
            }
            d.stop();
            if (c.zoomDropDownDataContainer._dropped) {
                b();
                return
            }
            c.zoomDropDownDataContainer._dropped = true;
            c.zoomDropDownEntries.each(function(e) {
                if (e.hasClass("display")) {
                    e.addClass("selected")
                }
                e.removeClass("display").removeClass("hide")
            });
            c.zoomDropDownDataContainer.setStyles({
                height: Browser.name === "opera" ? "auto" : c.zoomDropDownDataContainer._styleBackup.maxHeight
            })
        });
        this.zoomDropDownEntries.each(function(e, d) {
            e.addEvent("click", function(f) {
                f.stop();
                if (!c.zoomDropDownDataContainer._dropped) {
                    return
                }
                c.zoomDropDownDataContainer._dropped = false;
                c.zoomDropDownDataContainer.setStyles({
                    height: c.zoomDropDownDataContainer._styleBackup.height
                });
                c.zoomDropDownEntries.each(function(g) {
                    g.addClass("hide").removeClass("selected")
                });
                e.removeClass("hide").addClass("display");
                c.mapContainer.zoom(d + 1 - c.mapContainer.transition.zoomLevel, c.mapContainer.transition.getPointOfCenterInView())
            })
        });
        $(document.body).addEvent("click", function() {
            if (c.zoomDropDownDataContainer._dropped) {
                b()
            }
        });
        a = this.element.down(".viewFull");
        if (a) {
            this.viewFull = a.addEvent("click", function(d) {
                window.location.href = c.viewFullScreenUrl.substitute(Object.merge({}, c.mapContainer.transition.getPointOfCenterInView(), {
                    zoom: c.mapContainer.transition.zoomLevel
                }))
            })
        }
        a = this.element.down(".viewNormal");
        if (a) {
            this.viewNormal = this.element.down(".viewNormal").addEvent("click", function(d) {
                window.location.href = c.viewNormalUrl.substitute(Object.merge({}, c.mapContainer.transition.getPointOfCenterInView(), {
                    zoom: c.mapContainer.transition.zoomLevel
                }))
            })
        }
        this.filterPlayer = this.element.down(".filterMy").addEvent("click", function(d) {
            Travian.ajax({
                data: {
                    cmd: "mapSetting",
                    data: {
                        type: "outline",
                        outline: "user"
                    }
                },
                onSuccess: function(e) {
                    c.filterPlayer[e.result ? "addClass" : "removeClass"]("checked");
                    c.filterPlayer.checked = e.result;
                    c.mapContainer.forceUpdateBlocksLayer("imageMark").forceUpdateBlocksSymbols("player", e.result)
                }
            })
        });
        this.filterPlayer.checked = this.filterPlayer.hasClass("checked");
        this.filterAlliance = this.element.down(".filterAlliance");
        if (!this.filterAlliance.hasClass("disabled")) {
            this.filterAlliance.addEvent("click", function(d) {
                Travian.ajax({
                    data: {
                        cmd: "mapSetting",
                        data: {
                            type: "outline",
                            outline: "alliance"
                        }
                    },
                    onSuccess: function(e) {
                        c.filterAlliance[e.result ? "addClass" : "removeClass"]("checked");
                        c.filterAlliance.checked = e.result;
                        c.mapContainer.forceUpdateBlocksLayer("imageMark").forceUpdateBlocksSymbols("alliance", e.result)
                    }
                })
            });
            this.filterAlliance.checked = this.filterAlliance.hasClass("checked")
        }
        a = this.element.down(".linkCropfinder");
        if (a && !(a.getParent().hasClass("iconRequireGold"))) {
            a.addEvent("click", function(d) {
                window.location.href = "cropfinder.php"
            })
        }
        this.coordinateEnter = $("mapCoordEnter").addEvent("submit", function(d) {
            var f = {
                x: parseInt(c.coordinateEnter.down("input.coordinates.x").value),
                y: parseInt(c.coordinateEnter.down("input.coordinates.y").value)
            };
            if (!f.x.isNaN() && !f.y.isNaN()) {
                c.mapContainer.moveTo(f)
            }
            d.stop();
            return false
        });
        this.update()
    },
    update: function() {
        var a = this;
        if (this.transition.zoomLevel === 1) {
            this.zoomIn.addClass("disabled");
            this.zoomOut.removeClass("disabled")
        } else {
            if (this.transition.zoomLevel === this.transition.zoomOptions.sizes.length) {
                this.zoomIn.removeClass("disabled");
                this.zoomOut.addClass("disabled")
            } else {
                this.zoomIn.removeClass("disabled");
                this.zoomOut.removeClass("disabled")
            }
        }
        this.zoomDropDownEntries.each(function(b) {
            if (a.zoomDropDownDataContainer._dropped) {
                b.removeClass("selected")
            } else {
                b.addClass("hide").removeClass("display")
            }
        });
        this.zoomDropDownEntries[this.transition.zoomLevel - 1].removeClass("hide").addClass(this.zoomDropDownDataContainer._dropped ? "selected" : "display")
    },
    zoom: function() {
        this.update()
    }
});
Travian.Game.Map.Outline = (function() {
    var a = Travian.emptyFunction;
    if (Browser.name === "opera") {
        a = function(c) {
            var b = c.elements.background.getStyle("top");
            c.elements.background.setStyles({
                top: 0
            });
            (function() {
                c.elements.background.setStyles({
                    top: b
                })
            }).delay(0.1)
        }
    }
    return new Class({
        Extends: Travian.Game.Map.Base,
        classType: "Travian.Game.Map.Outline",
        expanded: false,
        animate: function() {
            var b = this;
            if (this.elements.headlineExpander._fx && this.elements.headlineExpander._fx.cancel) {
                this.elements.headlineExpander._fx.cancel()
            }
            if (this.expanded === false) {
                this.expanded = true;
                this.elements.tabContainer.show();
                this.cookie.set("outline-expanded", true);
                this.elements.headlineExpander.removeClass("expand").addClass("collapse");
                this.elements.headlineExpander._fx = (new Fx.Morph(this.element, {
                    onComplete: function() {
                        a(b);
                        Object.each(b.parentContainer.mapMarks, function(c) {
                            c.update(false)
                        })
                    }
                })).start({
                    height: [this.element.getSize().y, this.element._height.max]
                })
            } else {
                this.expanded = false;
                this.cookie.set("outline-expanded", false);
                this.elements.headlineExpander.removeClass("collapse").addClass("expand");
                this.elements.headlineExpander._fx = (new Fx.Morph(this.element, {
                    onComplete: function() {
                        a(b);
                        b.elements.tabContainer.hide()
                    }
                })).start({
                    height: [this.element.getSize().y, this.element._height.min]
                })
            }
            return this
        },
        initialize: function(b, c) {
            this.parent(b, c);
            this.render()
        },
        render: function() {
            var b = this;
            this.selector = "#" + this.element;
            this.element = $(this.element);
            this.elements = {
                headline: this.element.down(".headline"),
                headlineExpander: this.element.down(".headline").down(".iconButton"),
                tabContainer: this.element.down(".tabContainer"),
                mapMarks: this.element.down("#mapMarks"),
                background: this.element.down(".background")
            };
            this.elements.headlineExpander.addClass(this.cookie.get("outline-expanded") === true ? "collapse" : "expand");
            var c = function() {
                b.element._height = {
                    max: b.parentContainer.containerViewSize.height - parseInt(b.element.getStyle("bottom")) - b.parentContainer.miniMap.elements.container.getSize().y - 2,
                    min: b.element.getSize().y
                };
                if (b.element._height.min < 0) {
                    b.element._height.min = 0
                }
                if (b.element._height.max < 0) {
                    b.element._height.max = 0
                }
                b.elements.tabContainer.hide();
                if (b.cookie.get("outline-expanded") === true) {
                    b.expanded = true;
                    b.elements.tabContainer.show();
                    b.element.setStyles({
                        height: b.element._height.max
                    });
                    Object.each(b.parentContainer.mapMarks, function(d) {
                        d.update(false)
                    });
                    a(b)
                }
                b.elements.headlineExpander.addEvent("click", function(d) {
                    b.animate()
                })
            };
            if (Browser.name === "chrome" || Browser.name === "safari") {
                c.delay(300)
            } else {
                c()
            }
            return this
        },
        update: function(b) {
            var c = this;
            this.element._height.max += b;
            if (this.element._height.min < 0) {
                this.element._height.min = 0
            }
            if (this.element._height.max < 0) {
                this.element._height.max = 0
            }
            if (this.expanded) {
                if (this.elements.headlineExpander._fx && this.elements.headlineExpander._fx.cancel) {
                    this.elements.headlineExpander._fx.cancel()
                }
                this.elements.headlineExpander._fx = (new Fx.Morph(this.element, {
                    onComplete: function() {
                        Object.each(c.parentContainer.mapMarks, function(d) {
                            d.update(false)
                        });
                        a(c)
                    }
                })).start({
                    height: [this.element.getSize().y, this.element._height.max]
                })
            }
            return this
        }
    })
})();
Travian.Game.Map.Layer = (function() {
    return new Class({
        Extends: Travian.Game.Map.Base,
        element: null,
        index: null,
        position: null,
        classType: "Travian.Game.Map.Layer",
        finishedLoading: function() {
            return this
        },
        forceUpdateContent: function() {
            return this
        },
        getContentForTooltip: function(a) {
            return false
        },
        getRequestData: function() {
            return false
        },
        hide: function() {
            this.element.hide();
            return this
        },
        initialize: function(a, c) {
            this.parent(a, c);
            if (this.position === null && this.parentContainer !== null) {
                var b = this.parentContainer.element.getSize();
                this.position = {
                    x: 0,
                    y: 0,
                    width: Math.ceil(b.x),
                    height: Math.ceil(b.y)
                }
            }
            if (this.parentContainer.classType === "Travian.Game.Map.Layer.Block") {
                this.blockContainer = this.parentContainer
            } else {
                if (this.parentContainer.blockContainer) {
                    this.blockContainer = this.parentContainer.blockContainer
                }
            }
            if (typeof a.version !== "undefined") {
                this.setVersion(a.version)
            }
            this.render()
        },
        refreshContent: function() {
            return this
        },
        render: function(a) {
            this.parent(a);
            if (this.id !== null) {
                this.element.addClass(this.id)
            }
            if (this.position) {
                this.element.setStyles({
                    position: "absolute",
                    left: this.position.x,
                    top: this.position.y,
                    width: this.position.width,
                    height: this.position.height
                })
            }
            if (this.zIndex) {
                this.element.setStyles({
                    zIndex: this.zIndex + 1
                })
            }
            if (this.parentContainer && this.parentContainer.element) {
                this.element.inject(this.parentContainer.element, "bottom")
            }
            return this
        },
        setVersion: function(a) {
            return this
        },
        show: function() {
            this.element.show();
            return this
        },
        update: function() {
            this.element.setStyles({
                left: this.position.x + "px",
                top: this.position.y + "px"
            });
            return this
        },
        updateContent: function() {
            return this
        }
    })
})();
Travian.Game.Map.Layer.Block = (function() {
    var b = function(n, m, k) {
        if (typeof m.x == "undefined") {
            m.x = k.x
        }
        if (typeof m.y == "undefined") {
            m.y = k.y
        }
        m = Travian.Game.Map.remapShortParameters(m);
        if (typeof m.text == "undefined" && typeof m.title == "undefined") {
            m.text = n.tooltipHtml.substitute(m.position)
        }
        return m
    };
    var c = function(s, q) {
        var n = Object.clone(q);
        var m = s.transition.getPointOfCenterInView();
        var o = Object.clone(s.mapCoordinates);
        n.x = parseFloat(n.x);
        n.y = parseFloat(n.y);
        m.x = parseFloat(m.x);
        m.y = parseFloat(m.y);
        o.x = parseFloat(o.x);
        o.y = parseFloat(o.y);
        var p = {
            x: (s.transition.border.right - Math.abs(n.x) < s.transition.border.right / 2),
            y: (s.transition.border.top - Math.abs(n.y) < s.transition.border.top / 2)
        };
        var r = {
            x: (s.transition.border.right - Math.abs(m.x) < s.transition.border.right / 2),
            y: (s.transition.border.top - Math.abs(m.y) < s.transition.border.top / 2)
        };
        var k = {
            x: (s.transition.border.right - Math.abs(o.x) < s.transition.border.right / 2),
            y: (s.transition.border.top - Math.abs(o.y) < s.transition.border.top / 2)
        };
        if ((p.x || r.x) && (n.x.sgn() + m.x.sgn() === 0 && n.x.sgn() !== m.x.sgn())) {
            n.x += m.x.sgn() * s.transition.border.width
        }
        if ((p.y || r.y) && (n.y.sgn() + m.y.sgn() === 0 && n.y.sgn() !== m.y.sgn())) {
            n.y += m.y.sgn() * s.transition.border.height
        }
        if ((k.x || r.x) && (o.x.sgn() + m.x.sgn() === 0 && o.x.sgn() !== m.x.sgn())) {
            o.x += m.x.sgn() * s.transition.border.width
        }
        if ((k.y || r.y) && (o.y.sgn() + m.y.sgn() === 0 && o.y.sgn() !== m.y.sgn())) {
            o.y += m.y.sgn() * s.transition.border.height
        }
        return {
            x: (n.x - o.x) * s.transition.pixelPerTile.x,
            y: (s.transition.elementsPerBlock.y - (n.y - o.y) - 1) * s.transition.pixelPerTile.y
        }
    };
    var g = function(s, q, n) {
        if (!q.type) {
            throw "Missing symbol type for symbol: " + q.dataId;
            return
        }
        var p = s.symbolTypes[q.type];
        if (!p || !p["class"] || !p.visibleInZoom[s.transition.zoomLevel]) {
            return
        }
        if (!s.symbols[q.position.x]) {
            s.symbols[q.position.x] = {}
        }
        if (!s.symbols[q.position.x][q.position.y]) {
            s.symbols[q.position.x][q.position.y] = $H({})
        }
        var o = p.sizes[s.transition.zoomLevel];
        var r = c(s, n);
        var m = s.symbols[q.position.x][q.position.y];
        var k = e(s, p, m);
        m[q.dataId] = new p["class"](Object.merge({}, p, q, {
            positionOfTile: {
                x: r.x,
                y: r.y
            },
            positionInTile: k,
            position: {
                x: r.x + k.x,
                y: r.y + k.y,
                width: p.sizes[s.transition.zoomLevel].width,
                height: p.sizes[s.transition.zoomLevel].height
            },
            positionDefault: {
                x: r.x + k.x,
                y: r.y + k.y,
                width: p.sizes[s.transition.zoomLevel].width,
                height: p.sizes[s.transition.zoomLevel].height
            },
            symbolSize: {
                width: p.sizes[s.transition.zoomLevel].width,
                height: p.sizes[s.transition.zoomLevel].height
            }
        }), s)
    };
    var f = function(k) {
        h(k);
        k.symbols = {};
        k.dataStore.getDataForArea(Travian.Game.Map.DataStore.TYPE_SYMBOL, k.mapCoordinates, true).each(function(m) {
            g(k, m, m.position)
        })
    };
    var h = function(k) {
        if (k.symbols) {
            Object.each(k.symbols, function(m) {
                Object.each(m, function(n) {
                    n.each(function(o) {
                        o.destroy();
                        delete(n[o.dataId])
                    })
                })
            });
            delete(k.symbols)
        }
    };
    var e = function(q, p, m) {
        var k = {
            x: false,
            y: false
        };
        var n = p.sizes[q.transition.zoomLevel].width;
        var o = m.getKeys().reverse().find(function(s) {
            var r = m[s].position.x == m[s].positionDefault.x;
            r = r && m[s].position.y == m[s].positionDefault.y;
            r = r && m[s].position.width == m[s].positionDefault.width;
            r = r && m[s].position.height == m[s].positionDefault.height;
            return r
        });
        if (o) {
            k.x = m[o].positionInTile.x;
            k.x += n
        }
        if (k.x === false) {
            k.x = 0
        }
        if (k.x + n > (q.position.width / q.transition.elementsPerBlock.x)) {
            k.x = 0;
            k.y += p.sizes[q.transition.zoomLevel].height
        }
        return k
    };
    var a = function(n, k, m) {
        if (typeof m == "undefined") {
            m = {}
        }
        if (typeof m.tiles != "undefined" && m.tiles.length != 0) {
            Object.each(m.tiles, function(o) {
                o = b(n, o, k);
                if (o.position.x == k.x && o.position.y == k.y) {
                    m.tile = o
                }
                n.dataStore.set({
                    position: o.position,
                    type: Travian.Game.Map.DataStore.TYPE_TOOLTIP,
                    data: o
                })
            })
        }
        if (typeof m.tile == "undefined") {
            m.tile = {};
            m.tile = b(n, m.tile, k);
            n.dataStore.set({
                position: m.tile.position,
                type: Travian.Game.Map.DataStore.TYPE_TOOLTIP,
                data: m.tile
            })
        }
        if (typeof m.tiles != "undefined" || typeof m.tile == "undefined") {
            n.dataStore.saveDataToStorage()
        }
        if (n.mapContainer.currentMousePosition.map.x == null || n.mapContainer.currentMousePosition.map.y == null) {
            return
        }
        if (k.x != n.mapContainer.currentMousePosition.map.x || k.y != n.mapContainer.currentMousePosition.map.y) {
            return
        }
        n.mapContainer.containerMover.setTitle({
            unescaped: true,
            title: m.tile.title,
            text: m.tile.text
        });
        n.mapContainer.contextMenu.update()
    };
    var d = function(n, k, m) {
        if (n.mapContainer.currentMousePosition.map.x == null || n.mapContainer.currentMousePosition.map.y == null) {
            return
        }
        if (k.x != n.mapContainer.currentMousePosition.map.x || k.y != n.mapContainer.currentMousePosition.map.y) {
            return
        }
        n.mapContainer.containerMover.setTitle({
            title: "",
            text: "{x}|{y}".substitute(k)
        })
    };
    return new Class({
        Extends: Travian.Game.Map.Layer,
        mapCoordinates: null,
        layers: null,
        versionCache: null,
        classType: "Travian.Game.Map.Layer.Block",
        addSymbol: function(k) {
            g(this, k, k.position);
            return this
        },
        deleteSymbol: function(k) {
            if (!this.symbols || !this.symbols[k.position.x] || !this.symbols[k.position.x][k.position.y]) {
                return this
            }
            if (this.symbols[k.position.x][k.position.y][k.dataId]) {
                this.symbols[k.position.x][k.position.y][k.dataId].destroy();
                delete(this.symbols[k.position.x][k.position.y][k.dataId])
            }
            return this
        },
        forceUpdateLayer: function(k) {
            if (this.layers[k]) {
                this.layers[k].forceUpdateContent()
            }
            return this
        },
        forceUpdateSymbols: function(m, k) {
            if (this.symbols) {
                Object.each(this.symbols, function(n) {
                    Object.each(n, function(o) {
                        o.each(function(p) {
                            if (p.layer == m) {
                                p.forceUpdate(k)
                            }
                        })
                    })
                })
            }
            return this
        },
        getContentForTooltip: function(k) {
            var p = this;
            var m = this.transition.translateToMap(k);
            if (this.symbols && this.symbols[m.x] && this.symbols[m.x][m.y] && this.symbols[m.x][m.y] != 0) {
                var q = false;
                var o = this.symbols[m.x][m.y].find(function(r) {
                    q = r.getContentForTooltip();
                    return q !== false && r.isPositionInRect({
                        x: k.x - p.position.x,
                        y: k.y - p.position.y
                    })
                });
                if (o && q !== false) {
                    return q
                }
            }
            var n = this.dataStore.get(Travian.Game.Map.DataStore.TYPE_TOOLTIP, m);
            if (n != null && (n.text != undefined || n.title != undefined)) {
                n = {
                    text: n.text,
                    title: n.title
                }
            } else {
                n = {
                    title: "",
                    text: this.tooltipHtml.translate(m)
                };
                this.requestDataForPosition(m)
            }
            return n
        },
        getData: function() {
            return Object.merge({
                loaded: false,
                version: 0
            }, this.dataStore.get(Travian.Game.Map.DataStore.TYPE_BLOCKS, this.mapCoordinates, "block") || {})
        },
        getRequestData: function() {
            return {
                position: {
                    x0: this.mapCoordinates.x,
                    y0: this.mapCoordinates.y,
                    x1: this.mapCoordinates.right,
                    y1: this.mapCoordinates.top
                }
            }
        },
        getVersion: function() {
            if (this.versionCache == null) {
                this.versionCache = this.getData().version
            }
            return this.versionCache
        },
        invalidateVersionCache: function() {
            this.versionCache = null;
            return this
        },
        move: function(m) {
            if (m.x == 0 && m.y == 0) {
                return this
            }
            this.position.x += m.x;
            this.position.y -= m.y;
            var k = Travian.Game.Map.Layer.Block.getCorrectPosition(this.position, this.mapContainer);
            this.position = k.position;
            this.mapCoordinates = this.transition.translateToMap(this.position);
            this.update(k.updateInnerContent);
            return this
        },
        refreshContent: function(k) {
            if (k) {
                var m = this.getData();
                m.loaded = true;
                this.setData(m)
            }
            this.parent();
            Object.each(this.layers, function(n) {
                n.refreshContent()
            });
            f(this);
            return this
        },
        render: function() {
            var m = this;
            this.layers = {};
            this.parent({
                nodeType: "div"
            });
            this.mapCoordinates = this.transition.registerCallbackOnZoom(function() {
                m.mapCoordinates = m.transition.translateToMap(m.position);
                m.update(true)
            }).translateToMap(this.position);
            this.mapContainer.layers.each(function(o, n) {
                if (!o["class"]) {
                    return
                }
                var p = {};
                Object.append(p, o);
                p.index = n;
                m.layers[p.id] = new o["class"](p, m)
            });
            var k = this.getData();
            k.loaded = true;
            this.setData(k);
            f(this);
            return this
        },
        requestDataForPosition: function(k) {
            var m = this;
            this.updater.requestPosition({
                dataStoreType: Travian.Game.Map.DataStore.TYPE_TOOLTIP,
                position: k,
                onSuccess: function(o, n) {
                    a(m, k, o)
                },
                onFailure: function(o, n) {
                    d(m, k, o)
                }
            });
            return this
        },
        setData: function(k) {
            this.dataStore.push({
                type: Travian.Game.Map.DataStore.TYPE_BLOCKS,
                position: this.mapCoordinates,
                index: "block",
                data: Object.merge({
                    loaded: false,
                    version: 0
                }, k)
            });
            return this
        },
        setVersion: function(k) {
            var m = this.getData();
            m.version = k;
            return this.setData(m)
        },
        update: function(k) {
            this.parent();
            this.updateContent(k);
            return this
        },
        updateContent: function(k) {
            this.parent();
            Object.each(this.layers, function(m) {
                m.updateContent(k)
            });
            if (k) {
                h(this);
                if (this.getData.loaded) {
                    this.refreshContent(false)
                } else {
                    this.updater.register("ajax", this)
                }
            }
            return this
        },
        updateSymbolData: function(k) {
            if (!this.symbols || !this.symbols[k.position.x] || !this.symbols[k.position.x][k.position.y]) {
                return this
            }
            if (this.symbols[k.position.x][k.position.y][k.dataId]) {
                this.symbols[k.position.x][k.position.y][k.dataId].updateData(k)
            }
            return this
        }
    })
})();
Travian.Game.Map.Layer.Block.getCorrectPosition = function(b, c) {
    var a = {
        position: b,
        updateInnerContent: false,
        updateBlockPosition: false
    };
    do {
        a.updateBlockPosition = false;
        if (a.position.x < 0 && Math.abs(a.position.x) >= c.blockSize.width) {
            a.position.x = c.elementSize.width + a.position.x;
            a.updateInnerContent = true;
            a.updateBlockPosition = true
        } else {
            if (a.position.x + a.position.width > c.elementSize.width) {
                a.position.x = a.position.x - c.elementSize.width;
                a.updateInnerContent = true;
                a.updateBlockPosition = true
            }
        }
        if (a.position.y < 0 && Math.abs(a.position.y) >= c.blockSize.height) {
            a.position.y = c.elementSize.height + a.position.y;
            a.updateInnerContent = true;
            a.updateBlockPosition = true
        } else {
            if (a.position.y + a.position.height > c.elementSize.height) {
                a.position.y = a.position.y - c.elementSize.height;
                a.updateInnerContent = true;
                a.updateBlockPosition = true
            }
        }
    } while (a.updateBlockPosition);
    return a
};
Travian.Game.Map.Layer.Image = new Class({
    Extends: Travian.Game.Map.Layer,
    image: null,
    srcUrl: null,
    classType: "Travian.Game.Map.Layer.Image",
    getPriority: function() {
        var c = {
            x: this.blockContainer.mapCoordinates.x + (this.blockContainer.mapCoordinates.right - this.blockContainer.mapCoordinates.x) / 2,
            y: this.blockContainer.mapCoordinates.y + (this.blockContainer.mapCoordinates.top - this.blockContainer.mapCoordinates.y) / 2
        };
        var a = this.transition.getPointOfCenterInView();
        var b = {
            x: a.x - c.x,
            y: a.y - c.y
        };
        return Math.pow(b.x, 2) + Math.pow(b.y, 2)
    },
    getSrcUrl: function() {
        return this.src.substitute({
            x: this.parentContainer.mapCoordinates.x,
            y: this.parentContainer.mapCoordinates.y,
            right: this.parentContainer.mapCoordinates.right,
            top: this.parentContainer.mapCoordinates.top,
            width: this.position.width,
            height: this.position.height,
            time: this.time,
            forcedUpdates: this.mapContainer.forcedUpdates,
            version: this.blockContainer.getVersion(),
            uid: this.uid
        })
    },
    refreshSrcUrl: function() {
        this.srcUrl = this.getSrcUrl();
        return this
    },
    render: function() {
        var a = this;
        this.parent({
            nodeType: "img"
        });
        if (this.srcInit) {
            this.element.src = this.srcInit
        }
        this.time = (new Date()).getTime();
        this.updateContent();
        return this
    },
    updateContent: function(a) {
        var b = this.getSrcUrl();
        if (this.srcUrl !== b || a) {
            this.refreshSrcUrl();
            this.updater.register("images", this)
        }
        return this
    }
});
Travian.Game.Map.Layer.ImageMark = new Class({
    Extends: Travian.Game.Map.Layer.Image,
    classType: "Travian.Game.Map.Layer.ImageMark",
    finishedLoading: function() {
        this.parent();
        this.show();
        return this
    },
    forceUpdateContent: function() {
        this.time = (new Date()).getTime();
        this.updateContent(true);
        return this
    },
    updateContent: function(a) {
        this.parent(a);
        if (a) {
            this.hide()
        }
        return this
    }
});
Travian.Game.Map.Layer.Loading = new Class({
    Extends: Travian.Game.Map.Layer,
    classType: "Travian.Game.Map.Layer.Loading",
    render: function() {
        this.parent({
            nodeType: "div"
        }).element.setStyles(this.styles).hide();
        return this
    },
    updateContent: function(a) {
        return this
    }
});
Travian.Game.Map.Layer.Symbol = new Class({
    Extends: Travian.Game.Map.Layer,
    byUser: false,
    classType: "Travian.Game.Map.Layer.Symbol",
    visible: true,
    destroy: function() {
        if (this.element) {
            this.element.destroy()
        }
        return this
    },
    forceUpdate: function(a) {
        if (this.byUser) {
            this.visible = a;
            this.element[a ? "show" : "hide"]()
        }
        return this
    },
    getContentForTooltip: function() {
        if (this.visible && (this.title || this.text)) {
            return {
                title: this.title,
                text: this.text
            }
        }
        return false
    },
    initialize: function(a, c) {
        var b = this;
        a.mapCoordinates = a.mapCoordinates || c.transition.translateToMap({
            x: a.position.x + c.position.x,
            y: a.position.y + c.position.y
        });
        a.id = a.id || Travian.Game.Map.getNewId();
        a.parameters = a.parameters || {};
        this.parent(a, c)
    },
    render: function() {
        this.parent({
            nodeType: "img"
        }).element.set("src", this.imgSource.substitute(Object.merge({}, this.parameters, {
            width: this.symbolSize.width,
            height: this.symbolSize.height,
            zoomLevel: this.transition.zoomLevel
        }))).setStyles({
            position: "absolute",
            left: this.position.x,
            top: this.position.y,
            width: this.position.width,
            height: this.position.height
        });
        return this
    },
    updateData: function(a) {
        this.title = a.title;
        this.text = a.text
    }
});
Travian.Game.Map.Layer.Symbol.Flag = new Class({
    Extends: Travian.Game.Map.Layer.Symbol,
    classType: "Travian.Game.Map.Layer.Symbol.Flag",
    index: null,
    render: function() {
        this.parameters.index = this.index || 1;
        this.parent();
        var a = Travian.Game.Map.Options.Toolbar;
        var b = "filterPlayer";
        if (this.layer == "alliance") {
            var b = "filterAlliance"
        }
        if (this.mapContainer.toolbar) {
            a = this.mapContainer.toolbar
        }
        this.forceUpdate(a[b].checked)
    },
    updateData: function(a) {
        this.parent(a);
        this.parameters.index = this.index = a.index;
        this.element.set("src", this.imgSource.substitute(Object.merge({}, this.parameters, {
            zoomLevel: this.transition.zoomLevel,
            width: this.symbolSize.width,
            height: this.symbolSize.height
        })))
    }
});
Travian.Game.Map.Layer.Symbol.Attack = new Class({
    Extends: Travian.Game.Map.Layer.Symbol,
    classType: "Travian.Game.Map.Layer.Symbol.Attack"
});
Travian.Game.Map.Layer.Symbol.BattleGround = new Class({
    Extends: Travian.Game.Map.Layer.Symbol,
    classType: "Travian.Game.Map.Layer.Symbol.BattleGround",
    getContentForTooltip: function() {
        return false
    },
    render: function() {
        this.position = {
            x: this.positionOfTile.x,
            y: this.positionOfTile.y,
            width: this.transition.pixelPerTile.x,
            height: this.transition.pixelPerTile.y
        };
        this.parent()
    }
});
Travian.Game.Map.Layer.Symbol.Adventure = new Class({
    Extends: Travian.Game.Map.Layer.Symbol,
    classType: "Travian.Game.Map.Layer.Symbol.Adventure",
    render: function() {
        this.position = {
            x: this.positionOfTile.x + this.transition.pixelPerTile.x - this.position.width,
            y: this.positionOfTile.y + this.transition.pixelPerTile.y - this.position.height,
            width: this.position.width,
            height: this.position.height
        };
        this.parent()
    }
});
Travian.Game.Map.Layer.Symbol.Reinforcement = new Class({
    Extends: Travian.Game.Map.Layer.Symbol,
    classType: "Travian.Game.Map.Layer.Symbol.Reinforcement",
    render: function() {
        this.position = {
            x: this.positionOfTile.x,
            y: this.positionOfTile.y + this.transition.pixelPerTile.y - this.position.height,
            width: this.position.width,
            height: this.position.height
        };
        this.parent()
    }
});
Travian.Game.Map.MapMark = new Class({
    Extends: Travian.Game.Map.Base,
    classType: "Travian.Game.Map.MapMark",
    initialize: function(a, b) {
        this.parent(a, b);
        this.render()
    },
    render: function() {
        var a = this;
        this.element = $(this.element);
        Object.each(this.layers, function(c, b) {
            a.layers[b] = new c["class"](c, a)
        });
        this.update(false);
        this.data.each(function(b) {
            if (!b.layer || !a.layers[b.layer]) {
                return
            }
            a.layers[b.layer].addData(b)
        });
        return this
    },
    update: function(d) {
        var b = this.element.isDisplayed();
        this.element.show();
        var e = [];
        var a = this.element.getSize().y;
        var c = 0;
        Object.each(this.layers, function(g, f) {
            if (g.expanded) {
                c++
            }
            e.push({
                layer: g,
                expanded: g.expanded,
                elementCollapse: g.elements.expandContainer,
                heightCurrent: g.elements.expandContainer.getSize().y
            });
            var h = g.element.getDimensions({
                computeSize: true
            });
            a -= (h.height - g.elements.expandContainer.getSize().y);
            a -= h["border-top-width"];
            a -= h["border-bottom-width"];
            a -= h["padding-top"];
            a -= h["padding-bottom"];
            a -= g.element.getStyle("margin-top").toInt();
            a -= g.element.getStyle("margin-bottom").toInt();
            if (g._fx && g._fx.cancel) {
                g._fx.cancel()
            }
        });
        if (c !== 0) {
            a = a / c - 1
        }
        if (a < 0) {
            a = 0
        }
        e.each(function(f) {
            if (d === false) {
                f.elementCollapse.setStyles({
                    height: f.expanded ? a : 0
                });
                if (f.expanded) {
                    f.layer.jScroll.refresh()
                }
            } else {
                if (f.expanded) {
                    f._fx = new Fx.Morph(f.elementCollapse, {
                        onComplete: function() {
                            f.layer.jScroll.refresh()
                        }
                    }).start({
                        height: [f.heightCurrent, a]
                    })
                } else {
                    if (!f.expanded) {
                        f._fx = new Fx.Morph(f.elementCollapse).start({
                            height: [f.heightCurrent, 0]
                        })
                    }
                }
            }
        });
        if (b === false) {
            this.element.hide()
        }
    }
});
Travian.Game.Map.MapMark.Layer = new Class({
    Extends: Travian.Game.Map.Base,
    classType: "Travian.Game.Map.MapMark.Layer",
    addData: function(a) {
        return this
    },
    deleteData: function(a) {
        if (this.datas[a.id]) {
            delete(this.datas[a.id])
        }
        return this
    },
    initialize: function(b, c) {
        this.parent(b, c);
        var a = this.cookie.get("markLayer-" + this.parentContainer.typeId + "-" + this.typeId + "-expanded");
        if (a != null) {
            this.expanded == a
        }
        this.datas = {};
        this.render()
    },
    render: function(a) {
        var b = this;
        this.element = (new Element("div")).addClass("collapseContainer").set("html", this.html.substitute(Object.merge({}, a || {}, {
            data: "dataContainer",
            add: "addButton",
            expandButton: "expandButton",
            expandContainer: "expandContainer",
            title: this.title
        }))).inject(this.parentContainer.element, "bottom");
        this.elements = {
            data: this.element.down(".dataContainer"),
            add: this.element.down(".addButton"),
            expandButton: this.element.down(".expandButton"),
            expandContainer: this.element.down(".expandContainer")
        };
        if (!this.editable && this.elements.add) {
            this.elements.add.hide()
        }
        if (this.elements.expandButton) {
            this.elements.expandButton.addClass(this.expanded ? "collapse" : "expand");
            this.elements.expandButton.addEvent("click", function(c) {
                if (b.expanded) {} else {
                    Object.each(b.parentContainer.layers, function(d) {
                        d.expanded = false;
                        d.elements.expandButton.removeClass("collapse").addClass("expand");
                        b.cookie.set("markLayer-" + d.parentContainer.typeId + "-" + d.typeId + "-expanded", d.expanded)
                    });
                    b.expanded = true;
                    b.elements.expandButton.removeClass("expand").addClass("collapse");
                    b.cookie.set("markLayer-" + b.parentContainer.typeId + "-" + b.typeId + "-expanded", true)
                }
                b.parentContainer.update()
            })
        }
        this.jScroll = new jScroll({
            container: this.elements.expandContainer
        });
        return this
    }
});
Travian.Game.Map.MapMark.Layer.Mark = new Class({
    Extends: Travian.Game.Map.MapMark.Layer,
    classType: "Travian.Game.Map.MapMark.Layer.Mark",
    dialogInstance: null,
    addData: function(a) {
        var b = new Travian.Game.Map.MapMark.Layer.Data.Mark(Object.merge({}, a, this.optionsData, {
            editable: this.editable
        }), this);
        this.datas[b.id] = b;
        return this
    },
    add: function(a) {
        var b = this;
        if (!this.editable) {
            return this
        }
        a = Travian.Game.Map.remapShortParameters(a);
        Travian.ajax({
            data: {
                cmd: "mapMultiMarkAdd",
                data: {
                    x: a.position.x,
                    y: a.position.y,
                    type: this.typeId,
                    color: a.color || 0,
                    owner: this.parentContainer.typeId,
                    text: a.text || undefined,
                    title: a.title || undefined
                }
            },
            onSuccess: function(c) {
                b.addData(c);
                b.mapContainer.forceUpdateBlocksLayer("imageMark");
                b.dialogInstance.close();
                b.dialogInstance = null
            },
            onFailure: function(d, c) {
                b.dialogInstance.enableForm().toElement().down(".errorMessage").set("html", c);
                return false
            }
        });
        return this
    },
    initialize: function(a, c) {
        var b = this;
        this.parent(a, c);
        this.colorsArray = [];
        Object.each(this.colors, function(d) {
            if (typeof d == "string") {
                b.colorsArray.push(d)
            }
        })
    },
    render: function() {
        var a = this;
        this.parent();
        this.elements.add.addEvent("click", function(b) {
            a.showDialog()
        });
        return this
    },
    showDialog: function(a) {
        var b = this;
        a = Object.merge({
            color: this.color,
            onOkay: this.add.bind(this),
            onOpen: Travian.emptyFunction,
            position: {
                x: "",
                y: ""
            }
        }, a || {});
        this.color = a.color;
        this.dialogInstance = this.dialog.html.substitute({
            select: "select",
            textX: this.dialog.textX,
            textY: this.dialog.textY,
            textDisplay: "textDisplay",
            coord: "coord",
            inputX: "inputX",
            inputY: "inputY"
        }).dialog({
            keepOpen: true,
            relativeTo: this.mapContainer.container,
            elementFocus: a.position.x == "" ? this.dialog.elementFocusNew : this.dialog.elementFocusEdit,
            buttonTextOk: this.dialog.textOkay,
            buttonTextCancel: this.dialog.textCancel,
            title: this.dialog.title,
            onOpen: function(d, e) {
                e.down(".inputX").value = a.position.x;
                e.down(".inputY").value = a.position.y;
                var c = (new Travian.Game.ColorPicker(e.down(".select"), {
                    colors: b.colorsArray,
                    defaultColor: b.color
                })).addEvent("change", function(f, g) {
                    b.colorsArray.find(function(h, k) {
                        if (h == f) {
                            b.color = k
                        }
                    })
                });
                a.onOpen(d, e, c)
            },
            onOkay: function(c, d) {
                a.onOkay({
                    color: b.color,
                    position: {
                        x: d.down(".inputX").value,
                        y: d.down(".inputY").value
                    }
                }, c, d)
            }
        }).dialog;
        return this
    }
});
Travian.Game.Map.MapMark.Layer.Flag = new Class({
    Extends: Travian.Game.Map.MapMark.Layer,
    classType: "Travian.Game.Map.MapMark.Layer.Flag",
    dialogInstance: null,
    add: function(a) {
        var b = this;
        if (!this.editable) {
            return this
        }
        a = Travian.Game.Map.remapShortParameters(a);
        if (a.index < this.indexes.min) {
            a.index = this.indexes.max
        }
        if (a.index > this.indexes.max) {
            a.index = this.indexes.min
        }
        Travian.ajax({
            data: {
                cmd: "mapFlagAdd",
                data: {
                    x: a.position.x,
                    y: a.position.y,
                    color: a.index || this.indexes.min,
                    owner: this.parentContainer.typeId,
                    text: a.text || undefined,
                    title: a.title || undefined
                }
            },
            onSuccess: function(c) {
                c.type = "flag";
                b.dataStore.push({
                    type: Travian.Game.Map.DataStore.TYPE_SYMBOL,
                    index: c.dataId,
                    position: c.position,
                    data: c,
                    time: false
                });
                b.addData(c);
                c.position = a.position;
                c.layer = b.parentContainer.typeId;
                b.mapContainer.addSymbol(c);
                b.dialogInstance.close();
                b.dialogInstance = null
            },
            onFailure: function(d, c) {
                b.dialogInstance.enableForm().toElement().down(".errorMessage").set("html", c);
                return false
            }
        });
        return this
    },
    addData: function(b) {
        var a = new Travian.Game.Map.MapMark.Layer.Data.Flag(Object.merge({}, b, this.optionsData, {
            editable: this.editable
        }), this);
        this.datas[a.id] = a;
        return this
    },
    initialize: function(a, c) {
        this.parent(a, c);
        this.imagesArray = [];
        for (var b = this.indexes.min; b <= this.indexes.max; b++) {
            this.imagesArray.push(this.imgSource.substitute({
                index: b
            }))
        }
    },
    render: function() {
        var a = this;
        this.parent();
        this.elements.add.addEvent("click", function(b) {
            a.showDialog()
        });
        return this
    },
    showDialog: function(a) {
        var b = this;
        a = Object.merge({
            index: this.index,
            onOkay: this.add.bind(this),
            onOpen: Travian.emptyFunction,
            text: "",
            position: {
                x: "",
                y: ""
            }
        }, a || {});
        this.index = a.index;
        this.dialogInstance = this.dialog.html.substitute({
            select: "select",
            textX: this.dialog.textX,
            textY: this.dialog.textY,
            textDisplay: "textDisplay",
            coord: "coord",
            inputX: "inputX",
            inputY: "inputY",
            inputText: "inputText"
        }).dialog({
            keepOpen: true,
            relativeTo: this.mapContainer.container,
            elementFocus: a.position.x == "" ? this.dialog.elementFocusNew : this.dialog.elementFocusEdit,
            buttonTextOk: this.dialog.textOkay,
            buttonTextCancel: this.dialog.textCancel,
            title: this.dialog.title,
            onOpen: function(d, e) {
                e.down(".inputX").value = a.position.x;
                e.down(".inputY").value = a.position.y;
                e.down(".inputText").value = a.text;
                var c = (new Travian.Game.ImagePicker(e.down(".select"), {
                    images: b.imagesArray,
                    defaultImage: b.index - b.indexes.min
                })).addEvent("change", function(g, f) {
                    b.imagesArray.find(function(k, h) {
                        if (k == g) {
                            b.index = h + 1
                        }
                    })
                });
                a.onOpen(d, e, c)
            },
            onOkay: function(c, d) {
                if (b.index < b.indexes.min) {
                    b.index += b.indexes.min - 1
                }
                a.onOkay({
                    index: b.index,
                    text: d.down(".inputText").value,
                    position: {
                        x: d.down(".inputX").value,
                        y: d.down(".inputY").value
                    }
                }, c, d)
            }
        }).dialog;
        return this
    }
});
Travian.Game.Map.MapMark.Layer.Data = new Class({
    Extends: Travian.Game.Map.MapMark.Layer,
    classType: "Travian.Game.Map.MapMark.Layer.Data",
    del: function() {
        this.destroy();
        this.parentContainer.deleteData(this);
        return this
    },
    render: function(a) {
        var b = this;
        this.element = (new Element("div")).set("html", this.html.substitute(Object.merge({}, a || {}, {
            entry: this.id,
            text: "textContainer",
            "delete": "deleteButton",
            select: "selectLink",
            editDelete: "editDeleteContainer"
        }))).inject(this.parentContainer.elements.data, "bottom");
        this.elements = {
            text: this.element.down(".textContainer"),
            "delete": this.element.down(".deleteButton"),
            select: this.element.down(".selectLink"),
            editDelete: this.element.down(".editDeleteContainer")
        };
        this.elements["delete"].addEvent("click", function(c) {
            b.del()
        });
        this.elements.text.set("html", this.text);
        if (!this.editable && this.elements.editDelete) {
            this.elements.editDelete.hide()
        }
        if (this.parentContainer.expanded) {
            this.parentContainer.jScroll.refresh()
        }
        return this
    }
});
Travian.Game.Map.MapMark.Layer.Data.Mark = (function() {
    var a = function(b) {
        b.elements.color.setStyles({
            backgroundColor: b.parentContainer.colors[b.color]
        })
    };
    return new Class({
        Extends: Travian.Game.Map.MapMark.Layer.Data,
        classType: "Travian.Game.Map.MapMark.Layer.Data.Mark",
        del: function() {
            var b = this;
            if (!this.editable) {
                return this
            }
            Travian.ajax({
                data: {
                    cmd: "mapFlagOrMultiMarkDelete",
                    data: {
                        dataId: this.dataId,
                        owner: this.parentContainer.parentContainer.typeId,
                        type: "mark"
                    }
                },
                onSuccess: function(c) {
                    if (c.result) {
                        b.destroy();
                        b.mapContainer.forceUpdateBlocksLayer("imageMark");
                        if (b.parentContainer.expanded) {
                            b.parentContainer.jScroll.refresh()
                        }
                    }
                }
            });
            return this
        },
        initialize: function(b, c) {
            b.color = Number(b.color);
            this.parent(b, c)
        },
        render: function(b) {
            var c = this;
            this.parent({
                color: "colorContainer",
                urlLink: "urlLink"
            });
            this.elements.color = this.element.down(".colorContainer");
            this.elements.urlLink = this.element.down(".urlLink");
            if (this.elements.urlLink) {
                this.elements.urlLink.href = this.urlLink.substitute({
                    markId: this.markId
                })
            }
            if (this.editable) {
                this.elements.select.addEvent("click", function(d) {
                    c.parentContainer.showDialog({
                        color: c.color,
                        onOpen: function(f, g, e) {
                            g.select(".coord").each(function(h) {
                                h.hide()
                            });
                            g.down(".textDisplay").show().set("html", c.text)
                        },
                        onOkay: function(e, f, g) {
                            c.setColor(e.color)
                        }
                    })
                })
            }
            a(this);
            return this
        },
        setColor: function(b) {
            var c = this;
            if (!this.editable) {
                return this
            }
            if (typeof b != "number") {
                return this
            }
            if (b < this.parentContainer.colors.min) {
                b = this.parentContainer.colors.max
            }
            if (b > this.parentContainer.colors.max) {
                b = this.parentContainer.colors.min
            }
            Travian.ajax({
                data: {
                    cmd: "mapMultiMarkUpdate",
                    data: {
                        color: b,
                        dataId: this.dataId,
                        owner: this.parentContainer.parentContainer.typeId
                    }
                },
                onSuccess: function(d) {
                    if (d) {
                        c.color = b;
                        a(c);
                        c.mapContainer.forceUpdateBlocksLayer("imageMark")
                    }
                    c.dialogInstance.close();
                    c.dialogInstance = null
                },
                onFailure: function(e, d) {
                    c.parentContainer.dialogInstance.enableForm().toElement().down(".errorMessage").set("html", d);
                    return false
                }
            });
            return this
        }
    })
})();
Travian.Game.Map.MapMark.Layer.Data.Flag = (function() {
    var a = function(b) {
        b.elements.text.set("html", b.text);
        b.elements.index.set("html", '<img src="' + b.parentContainer.imgSource.substitute({
            index: b.index
        }) + '" alt="" />')
    };
    return new Class({
        Extends: Travian.Game.Map.MapMark.Layer.Data,
        classType: "Travian.Game.Map.MapMark.Layer.Data.Flag",
        del: function() {
            var b = this;
            if (!this.editable) {
                return this
            }
            Travian.ajax({
                data: {
                    cmd: "mapFlagOrMultiMarkDelete",
                    data: {
                        dataId: this.dataId,
                        owner: this.parentContainer.parentContainer.typeId,
                        type: "flag"
                    }
                },
                onSuccess: function(c) {
                    if (c.result) {
                        b.destroy();
                        b.dataStore.remove(Travian.Game.Map.DataStore.TYPE_SYMBOL, b.position, b.dataId);
                        b.mapContainer.deleteSymbol({
                            position: b.position,
                            dataId: b.dataId
                        });
                        if (b.parentContainer.expanded) {
                            b.parentContainer.jScroll.refresh()
                        }
                    }
                }
            });
            return this
        },
        initialize: function(b, c) {
            b.index = Number(b.index);
            this.parent(b, c)
        },
        render: function(b) {
            var c = this;
            this.parent({
                index: "indexContainer",
                urlLink: "urlLink"
            });
            this.elements.index = this.element.down(".indexContainer");
            this.elements.urlLink = this.element.down(".urlLink");
            if (this.editable) {
                this.elements.select.addEvent("click", function(d) {
                    c.parentContainer.showDialog({
                        index: c.index,
                        text: c.text,
                        position: c.position,
                        onOpen: function(f, g, e) {
                            c.dialogInstance = f;
                            g.down(".inputX").disabled = true;
                            g.down(".inputY").disabled = true
                        },
                        onOkay: function(e, f, g) {
                            c.setIndex(e.index, e.text)
                        }
                    })
                })
            }
            this.elements.urlLink.addEvent("click", function(d) {
                if (c.mapContainer.isEventsEnabled()) {
                    c.mapContainer.moveTo(c.position)
                }
            });
            a(this);
            return this
        },
        setIndex: function(b, d) {
            var c = this;
            if (!this.editable) {
                return this
            }
            if (typeof b != "number") {
                return this
            }
            if (b < this.parentContainer.indexes.min) {
                b = this.parentContainer.indexes.max
            }
            if (b > this.parentContainer.indexes.max) {
                b = this.parentContainer.indexes.min
            }
            Travian.ajax({
                data: {
                    cmd: "mapFlagUpdate",
                    data: {
                        index: b,
                        text: d,
                        dataId: this.dataId,
                        owner: this.parentContainer.parentContainer.typeId
                    }
                },
                onSuccess: function(e) {
                    if (e) {
                        c.index = b;
                        c.text = d;
                        a(c);
                        var f = c.dataStore.get(Travian.Game.Map.DataStore.TYPE_SYMBOL, c.position, c.dataId);
                        f.index = c.index;
                        f.text = c.text;
                        c.dataStore.push({
                            type: Travian.Game.Map.DataStore.TYPE_SYMBOL,
                            position: c.position,
                            index: c.dataId,
                            data: f,
                            time: false
                        });
                        c.mapContainer.updateSymbolData({
                            position: c.position,
                            dataId: c.dataId,
                            index: c.index,
                            text: c.text
                        })
                    }
                    c.dialogInstance.close();
                    c.dialogInstance = null
                },
                onFailure: function(f, e) {
                    c.parentContainer.dialogInstance.enableForm().toElement().down(".errorMessage").set("html", e);
                    return false
                }
            });
            return this
        }
    })
})();
Travian.Game.Map.Options = {};
Travian.Game.Map.Options.Symbols = {
    flag: {
        "class": Travian.Game.Map.Layer.Symbol.Flag,
        imgSource: "img/map/flag/flag-{index}/{width}x{height}.png",
        byUser: true,
        zIndex: 10,
        visibleInZoom: {
            1: true,
            2: true,
            3: false,
            4: false
        },
        sizes: {
            1: {
                width: 16,
                height: 16
            },
            2: {
                width: 10,
                height: 10
            },
            3: {
                width: 6,
                height: 6
            },
            4: {
                width: 4,
                height: 4
            }
        }
    },
    attack: {
        "class": Travian.Game.Map.Layer.Symbol.Attack,
        imgSource: "img/map/attack/attack-{attackType}/{width}x{height}.gif",
        zIndex: 10,
        visibleInZoom: {
            1: true,
            2: true,
            3: false,
            4: false
        },
        sizes: {
            1: {
                width: 16,
                height: 16
            },
            2: {
                width: 10,
                height: 10
            },
            3: {
                width: 6,
                height: 6
            },
            4: {
                width: 4,
                height: 4
            }
        }
    },
    battleGround: {
        "class": Travian.Game.Map.Layer.Symbol.BattleGround,
        imgSource: "img/map/battleground/battleground-{center}-{north}-{east}-{south}-{west}-{width}x{height}.png",
        zIndex: 9,
        visibleInZoom: {
            1: true,
            2: true,
            3: false,
            4: false
        },
        sizes: {
            1: {
                width: 16,
                height: 16
            },
            2: {
                width: 8,
                height: 8
            },
            3: {
                width: 4,
                height: 4
            },
            4: {
                width: 4,
                height: 4
            }
        }
    },
    adventure: {
        "class": Travian.Game.Map.Layer.Symbol.Adventure,
        imgSource: "img/map/adventure/difficulty-{difficulty}/{width}x{height}.png",
        zIndex: 10,
        visibleInZoom: {
            1: true,
            2: true,
            3: false,
            4: false
        },
        sizes: {
            1: {
                width: 16,
                height: 16
            },
            2: {
                width: 8,
                height: 8
            },
            3: {
                width: 6,
                height: 6
            },
            4: {
                width: 4,
                height: 4
            }
        }
    },
    reinforcement: {
        "class": Travian.Game.Map.Layer.Symbol.Reinforcement,
        imgSource: "img/map/reinforcement/{width}x{height}.gif",
        zIndex: 10,
        visibleInZoom: {
            1: true,
            2: true,
            3: false,
            4: false
        },
        sizes: {
            1: {
                width: 16,
                height: 16
            },
            2: {
                width: 10,
                height: 10
            },
            3: {
                width: 6,
                height: 6
            },
            4: {
                width: 4,
                height: 4
            }
        }
    }
};
Travian.Game.Map.Options.Rulers = {
    direction: null,
    imgSource: {
        x: "img/map/rulers/x-{zoomLevel}.gif",
        y: "img/map/rulers/y-{zoomLevel}.gif"
    },
    cls: {
        x: "ruler x",
        y: "ruler y"
    },
    steps: {
        x: {
            1: 1,
            2: 1,
            3: 10,
            4: 20
        },
        y: {
            1: 1,
            2: 1,
            3: 10,
            4: 20
        }
    },
    delta: {
        x: {
            1: 0,
            2: 0,
            3: 0,
            4: 0
        },
        y: {
            1: 0,
            2: 0,
            3: -9,
            4: -19
        }
    }
};
Travian.Game.Map.Options.MiniMap = {
    container: "miniMap",
    containerContent: "minimapContainer",
    showToolTip: true,
    classLines: {
        x: "lines",
        y: "lines"
    },
    tooltipHtml: '<span class="xCoord">({x}</span><span class="pi">|</span><span class="yCoord">{y})</span><span class="clear"></span>'
};
Travian.Game.Map.Options.Toolbar = {
    element: "toolbar",
    viewFullScreenUrl: "karte.php?fullscreen=1&x={x}&y={y}&zoom={zoom}",
    viewNormalUrl: "karte.php?x={x}&y={y}&zoom={zoom}",
    filterPlayer: {
        checked: true
    },
    filterAlliance: {
        checked: true
    }
};
Travian.Game.Map.Options.Outline = {
    element: "outline"
};
Travian.Game.Map.Options.MapMark = Travian.Game.Map.Options.MapMark || {};
Travian.Game.Map.Options.MapMark.Mark = {
    "class": Travian.Game.Map.MapMark.Layer.Mark,
    title: "",
    typeId: "player",
    editable: true,
    expanded: false,
    color: 0,
    colors: {
        0: "#C0C0C0",
        1: "#FF7722",
        2: "#B15BDB",
        3: "#DF4E78",
        4: "#34822F",
        5: "#3F90C5",
        6: "#C2AF09",
        7: "#8B1C1C",
        8: "#575BD2",
        9: "#4FE600",
        min: 0,
        max: 9
    },
    html: '<div class="title">{title} <a href="#" class="add {add}">+</a></div><div class="iconButton {expandButton} small"></div><div class="clear"></div><div class="{expandContainer}"><div class="{data}"></div></div>',
    dialog: {
        title: "",
        textOkay: "okay",
        textCancel: "cancel",
        textX: "X:",
        textY: "Y:",
        elementFocusNew: "coordinateDialogX",
        elementFocusEdit: "coordinateDialogX",
        html: '<div class="mapMarkMark"><div class="color {select}"></div><div class="{coord}"><span>{textX}</span><input id="coordinateDialogX" class="text coordinates x {inputX}" type="text" /><span>{textY}</span><input class="text coordinates y {inputY}" type="text" /></div><div class="{textDisplay}"></div></div>'
    },
    optionsData: {
        urlLink: "spieler.php?uid={markId}",
        html: '<div class="entry flag {entry}"><div class="marker color"><a href="#" class="{select} {color}"></a></div><div class="text"><a href="#" class="{urlLink} {text}"></a></div><div class="iconButton delete small {editDelete} {delete}"></div><div class="clear"></div></div>'
    }
};
Travian.Game.Map.Options.MapMark = Travian.Game.Map.Options.MapMark || {};
Travian.Game.Map.Options.MapMark.Flag = {
    "class": Travian.Game.Map.MapMark.Layer.Flag,
    title: "",
    editable: true,
    expanded: true,
    typeId: "flag",
    index: 1,
    indexes: {
        min: 1,
        max: 20
    },
    imgSource: Travian.Game.Map.Options.Symbols.flag.imgSource.substitute({
        index: "{index}",
        zoomLevel: 1,
        width: 16,
        height: 16
    }),
    html: '<div class="title">{title} <a href="#" class="add {add}">+</a></div><div class="iconButton {expandButton} small"></div><div class="clear"></div><div class="{expandContainer}"><div class="{data}"></div></div>',
    dialog: {
        title: "",
        textOkay: "okay",
        textCancel: "cancel",
        textX: "X:",
        textY: "Y:",
        elementFocusNew: "coordinateDialogX",
        elementFocusEdit: "coordinateDialogText",
        html: '<div class="mapMarkField"><div class="flag {select}"></div><div class="{coord}"><span>{textX}</span><input id="coordinateDialogX" class="text coordinates x {inputX}" type="text" /><span>{textY}</span><input class="text coordinates y {inputY}" type="text" /></div><div class="{textDisplay}"><input id="coordinateDialogText" class="text {inputText}" type="text" /></div><p class="error errorMessage"></p></div>'
    },
    optionsData: {
        html: '<div class="entry flag {entry}"><div class="marker index"><a href="#" class="{select} {index}"></a></div><div class="text"><a href="#" class="{urlLink} {text}"></a></div><div class="iconButton delete small {editDelete} {delete}"></div><div class="clear"></div></div>'
    }
};
Travian.Game.Map.Options.Default = {
    container: "mapContainer",
    containerViewSize: null,
    tileDisplayInformation: {
        type: "dialog",
        optionsPopup: {
            url: "position_details.php?x={x}&y={y}",
            windowOptions: {}
        },
        optionsDialog: {
            buttonOk: false,
            data: {
                cmd: "viewTileDetails",
                x: null,
                y: null
            }
        }
    },
    blockOverflow: 1,
    blockSize: {
        width: 170,
        height: 150
    },
    mapInitialPosition: {
        x: 0,
        y: 0
    },
    grid: {
        1: "/img/map/grid/grid-1.gif",
        2: "/img/map/grid/grid-2.gif",
        3: "/img/map/grid/grid-3.gif",
        4: false
    },
    speeds: {
        slow: 5,
        normal: 20,
        fast: 40
    },
    symbolTypes: Travian.Game.Map.Options.Symbols,
    onCreate: function(a) {},
    onRender: function(a) {
        (function() {
            Travian.Game.Map.Tips.render(a, a.containerMover);
            a.rulers = new Travian.Game.Map.Rulers(Travian.Game.Map.Options.Rulers, a);
            a.rulers.render();
            a.miniMap = new Travian.Game.Map.MiniMap(Travian.Game.Map.Options.MiniMap, a);
            a.miniMap.render();
            if (a.mapMarks) {
                Object.each(a.mapMarks, function(b, c) {
                    if (b.enabled === true) {
                        a.mapMarks[c] = new Travian.Game.Map.MapMark(b, a)
                    } else {
                        delete(a.mapMarks[c])
                    }
                })
            }
            a.outline = new Travian.Game.Map.Outline(Travian.Game.Map.Options.Outline, a);
            a.toolbar = new Travian.Game.Map.Toolbar(Travian.Game.Map.Options.Toolbar, a);
            a.toolbar.render()
        }).delay(500)
    },
    onMove: function(a, b) {
        if (a.rulers) {
            a.rulers.move(b)
        }
        if (a.miniMap) {
            a.miniMap.move()
        }
    },
    onZoom: function(a) {
        if (a.rulers) {
            a.rulers.zoom()
        }
        if (a.miniMap) {
            a.miniMap.zoom()
        }
        if (a.toolbar) {
            a.toolbar.zoom()
        }
    }
};
Travian.Game.Map.Options.Default.contextMenu = {
    targets: "#mapContainer",
    zIndex: 2000,
    menu: "contextmenu",
    separators: [{
        selector: ".separatorActions",
        elements: ["#contextMenuSendTroops", "#contextMenuSendTraders"]
    }],
    actions: [{
        element: "contextMenuSendTroops",
        displayOn: "did",
        shouldDisplay: function(a) {
            return (typeof a[this.displayOn] !== "undefined")
        },
        fn: function(c, b, a) {
            window.location.href = "build.php?gid=16&tt=2&x=" + a.position.x + "&y=" + a.position.y
        }
    }, {
        element: "contextMenuSendTraders",
        displayOn: "uid",
        shouldDisplay: function(a) {
            var c = (typeof a[this.displayOn] !== "undefined");
            var b = (a.title != "{k.bt}");
            return (c && b)
        },
        fn: function(c, b, a) {
            window.location.href = "build.php?gid=17&t=5&x=" + a.position.x + "&y=" + a.position.y
        }
    }, {
        element: "contextMenuMarkPlayerAlliance",
        displayOn: "aid",
        shouldDisplay: function(a) {
            return (typeof a[this.displayOn] !== "undefined")
        },
        fn: function(c, b, a) {
            c.parentContainer.mapMarks.player.layers.alliance.showDialog({
                position: b
            })
        }
    }, {
        element: "contextMenuMarkPlayerPlayer",
        displayOn: "uid",
        shouldDisplay: function(a) {
            return (typeof a[this.displayOn] !== "undefined")
        },
        fn: function(c, b, a) {
            c.parentContainer.mapMarks.player.layers.player.showDialog({
                position: b
            })
        }
    }, {
        element: "contextMenuFlagPlayer",
        displayOn: true,
        shouldDisplay: function(a) {
            return true
        },
        fn: function(c, b, a) {
            c.parentContainer.mapMarks.player.layers.flag.showDialog({
                position: b
            })
        }
    }, {
        element: "contextMenuMarkAllianceAlliance",
        displayOn: "aid",
        shouldDisplay: function(a) {
            return (typeof a[this.displayOn] !== "undefined")
        },
        fn: function(c, b, a) {
            c.parentContainer.mapMarks.alliance.layers.alliance.showDialog({
                position: b
            })
        }
    }, {
        element: "contextMenuMarkAlliancePlayer",
        displayOn: "uid",
        shouldDisplay: function(a) {
            return (typeof a[this.displayOn] !== "undefined")
        },
        fn: function(c, b, a) {
            c.parentContainer.mapMarks.alliance.layers.player.showDialog({
                position: b
            })
        }
    }, {
        element: "contextMenuFlagAlliance",
        displayOn: true,
        shouldDisplay: function(a) {
            return true
        },
        fn: function(c, b, a) {
            c.parentContainer.mapMarks.alliance.layers.flag.showDialog({
                position: b
            })
        }
    }]
};
Travian.Game.Map.Options.Default.transition = {
    onCreate: function(a) {},
    onMove: function(a, b) {},
    onZoom: function(a) {},
    zoomOptions: {
        level: 1,
        sizes: [{
            x: 5,
            y: 5
        }, {
            x: 10,
            y: 10
        }, {
            x: 51,
            y: 51
        }, {
            x: 135,
            y: 135
        }]
    },
    border: Travian.Defaults.Map.Size
};
Travian.Game.Map.Options.Default.layers = [{
    id: "loading",
    styles: {
        background: "#000000 url(img/loading.gif) center center no-repeat",
        opacity: 0.5
    },
    "class": Travian.Game.Map.Layer.Loading,
    zIndex: 20
}, {
    id: "image",
    src: "map_block.php?tx0={x}&ty0={y}&tx1={right}&ty1={top}&w={width}&h={height}&version={version}",
    srcInit: "img/x.gif",
    "class": Travian.Game.Map.Layer.Image,
    zIndex: 1
}, {
    id: "imageMark",
    src: "map_mark.php?tx0={x}&ty0={y}&tx1={right}&ty1={top}&w={width}&h={height}&updates={forcedUpdates}",
    srcInit: "img/x.gif",
    "class": Travian.Game.Map.Layer.ImageMark,
    zIndex: 2
}];
Travian.Game.Map.Options.Default.block = {
    tooltipHtml: '<span class="xCoord">({x}</span><span class="pi">|</span><span class="yCoord">{y})</span><span class="clear"></span><br />{k.loadingData}'
};
Travian.Game.Map.Options.Default.updater = {
    maxRequestCount: 5,
    parameters: {
        multiple: {
            cmd: "mapInfo"
        },
        position: {
            cmd: "mapPositionData"
        }
    },
    requestDelayTime: {
        multiple: 100,
        position: 300
    },
    url: "ajax.php",
    elementWorking: "working",
    positionOptions: {
        areaAroundPosition: {
            1: {
                left: -5,
                bottom: -4,
                right: 5,
                top: 4
            },
            2: {
                left: -10,
                bottom: -8,
                right: 10,
                top: 8
            },
            3: {
                left: -25,
                bottom: -25,
                right: 25,
                top: 25
            },
            4: {
                left: -25,
                bottom: -25,
                right: 25,
                top: 25
            }
        }
    }
};
Travian.Game.Map.Options.Default.keyboard = {
    37: "moveLeft",
    65: "moveLeft",
    100: Browser.name != "opera" ? "moveLeft" : false,
    52: Browser.name == "opera" ? "moveLeft" : false,
    39: "moveRight",
    68: "moveRight",
    102: Browser.name != "opera" ? "moveRight" : false,
    54: Browser.name == "opera" ? "moveRight" : false,
    38: "moveUp",
    87: "moveUp",
    104: Browser.name != "opera" ? "moveUp" : false,
    56: Browser.name == "opera" ? "moveUp" : false,
    40: "moveDown",
    83: "moveDown",
    98: Browser.name != "opera" ? "moveDown" : false,
    50: Browser.name == "opera" ? "moveDown" : false,
    61: "zoomIn",
    107: Browser.name != "opera" ? "zoomIn" : false,
    43: Browser.name == "opera" ? "zoomIn" : false,
    109: "zoomOut",
    45: Browser.name == "opera" ? "zoomOut" : false,
    103: Browser.name != "opera" ? "moveLeftUp" : false,
    55: Browser.name == "opera" ? "moveLeftUp" : false,
    97: Browser.name != "opera" ? "moveLeftDown" : false,
    49: Browser.name == "opera" ? "moveLeftDown" : false,
    105: Browser.name != "opera" ? "moveRightUp" : false,
    57: Browser.name == "opera" ? "moveRightUp" : false,
    99: Browser.name != "opera" ? "moveRightDown" : false,
    51: Browser.name == "opera" ? "moveRightDown" : false,
    speed: {
        slow: "control",
        fast: "shift"
    },
    71: {
        fn: "toggleGrid",
        periodical: 0
    },
    77: {
        fn: "toggleMiniMap",
        periodical: 0
    },
    79: {
        fn: "toggleOutline",
        periodical: 0
    }
};
Travian.Game.Map.Options.Default.dataStore = {
    cachingTimeForType: {
        blocks: 30 * 60 * 1000,
        symbol: 10 * 60 * 1000,
        tile: 10 * 60 * 1000,
        tooltip: 2 * 60 * 1000
    },
    persistentStorage: false,
    useStorageForType: {
        blocks: false,
        symbol: false,
        tile: false,
        tooltip: true
    },
    clearStorageForType: {
        blocks: false,
        symbol: false,
        tile: false,
        tooltip: false
    }
};
Travian.Game.Map.Options.Default.data = {
    elements: []
};
Travian.Game.Map.Options.Default.mapMarks = {
    player: {
        enabled: true,
        data: [],
        element: "tabPlayer",
        typeId: "player",
        layers: {
            alliance: Object.merge({}, Travian.Game.Map.Options.MapMark.Mark, {
                typeId: "alliance"
            }),
            player: Object.merge({}, Travian.Game.Map.Options.MapMark.Mark, {
                typeId: "player"
            }),
            flag: Object.merge({}, Travian.Game.Map.Options.MapMark.Flag, {
                indexes: {
                    min: 1,
                    max: 10
                }
            })
        }
    },
    alliance: {
        enabled: true,
        data: [],
        element: "tabAlliance",
        typeId: "alliance",
        layers: {
            alliance: Object.merge({}, Travian.Game.Map.Options.MapMark.Mark, {
                typeId: "alliance"
            }),
            player: Object.merge({}, Travian.Game.Map.Options.MapMark.Mark, {
                typeId: "player"
            }),
            flag: Object.merge({}, Travian.Game.Map.Options.MapMark.Flag, {
                indexes: {
                    min: 11,
                    max: 20
                }
            })
        }
    }
};










