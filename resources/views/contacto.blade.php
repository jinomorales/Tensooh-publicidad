@extends('layouts.plantilla')

@section('title', 'Contacto - Tensooh Media')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-15 text-center">
                                <h2>Contáctanos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section pt-5">
            <div class="container">


                <div class="row">
                    <div class="col-12">
                        <h1 class="contact-title"> <strong> Dejanos tus datos, </strong> y te contactamos.</h1>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('mensaje') }}" method="post"
                            novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'"
                                            placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="telephone" id="telephone" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Teléfono'"
                                            placeholder="Teléfono" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="empresa" id="empresa" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Empresa'"
                                            placeholder="Empresa" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Comentarios..'"
                                            placeholder=" Comentarios.. "></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <input type="submit">

                                <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Tena, Napo - Ecuador</h3>
                                <p>Rosemead, CA 91770 <br> <a class="text-danger"
                                        href="https://goo.gl/maps/f8uScFWn5J3CLjZL9" target="_blank">ver en mapa <i
                                            class="fas fa-external-link-alt"></i></a></p>
                                <p> </p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-headphone-alt"></i></span>
                            <div class="media-body">
                                <h3><i class="fas fa-phone-volume"></i> (06) 2313021</h3> <br>
                                <h3><i class="fas fa-mobile-alt"></i> 0985453983</h3>
                                <p>Lunes-Viernes: 8:30am a 3pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@tensooh.com</h3>
                                <p>Disponible a cualquier hora!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>

@endsection

@section('scrips')
    <script>
        + function(t) {
            "use strict";

            function e(e) {
                return e.is('[type="checkbox"]') ? e.prop("checked") : e.is('[type="radio"]') ? !!t('[name="' + e.attr(
                    "name") + '"]:checked').length : e.is("select[multiple]") ? (e.val() || []).length : e.val()
            }

            function r(e) {
                return this.each(function() {
                    var r = t(this),
                        i = t.extend({}, a.DEFAULTS, r.data(), "object" == typeof e && e),
                        o = r.data("bs.validator");
                    (o || "destroy" != e) && (o || r.data("bs.validator", o = new a(this, i)), "string" ==
                        typeof e && o[e]())
                })
            }
            var a = function(r, i) {
                this.options = i, this.validators = t.extend({}, a.VALIDATORS, i.custom), this.$element = t(r), this
                    .$btn = t('button[type="submit"], input[type="submit"]').filter('[form="' + this.$element.attr(
                        "id") + '"]').add(this.$element.find('input[type="submit"], button[type="submit"]')), this
                    .update(), this.$element.on("input.bs.validator change.bs.validator focusout.bs.validator", t.proxy(
                        this.onInput, this)), this.$element.on("submit.bs.validator", t.proxy(this.onSubmit, this)),
                    this.$element.on("reset.bs.validator", t.proxy(this.reset, this)), this.$element.find(
                        "[data-match]").each(function() {
                        var r = t(this),
                            a = r.data("match");
                        t(a).on("input.bs.validator", function(t) {
                            e(r) && r.trigger("input.bs.validator")
                        })
                    }), this.$inputs.filter(function() {
                        return e(t(this)) && !t(this).closest(".has-error").length
                    }).trigger("focusout"), this.$element.attr("novalidate", !0)
            };
            a.VERSION = "0.11.8", a.INPUT_SELECTOR = ':input:not([type="hidden"], [type="submit"], [type="reset"], button)',
                a.FOCUS_OFFSET = 20, a.DEFAULTS = {
                    delay: 500,
                    html: !1,
                    disable: !0,
                    focus: !0,
                    custom: {},
                    errors: {
                        match: "Does not match",
                        minlength: "Not long enough"
                    },
                    feedback: {
                        success: "glyphicon-ok",
                        error: "glyphicon-remove"
                    }
                }, a.VALIDATORS = {
                    "native": function(t) {
                        var e = t[0];
                        return e.checkValidity ? !e.checkValidity() && !e.validity.valid && (e.validationMessage ||
                            "error!") : void 0
                    },
                    match: function(e) {
                        var r = e.data("match");
                        return e.val() !== t(r).val() && a.DEFAULTS.errors.match
                    },
                    minlength: function(t) {
                        var e = t.data("minlength");
                        return t.val().length < e && a.DEFAULTS.errors.minlength
                    }
                }, a.prototype.update = function() {
                    var e = this;
                    return this.$inputs = this.$element.find(a.INPUT_SELECTOR).add(this.$element.find(
                        '[data-validate="true"]')).not(this.$element.find('[data-validate="false"]').each(function() {
                        e.clearErrors(t(this))
                    })), this.toggleSubmit(), this
                }, a.prototype.onInput = function(e) {
                    var r = this,
                        a = t(e.target),
                        i = "focusout" !== e.type;
                    this.$inputs.is(a) && this.validateInput(a, i).done(function() {
                        r.toggleSubmit()
                    })
                }, a.prototype.validateInput = function(r, a) {
                    var i = (e(r), r.data("bs.validator.errors"));
                    r.is('[type="radio"]') && (r = this.$element.find('input[name="' + r.attr("name") + '"]'));
                    var o = t.Event("validate.bs.validator", {
                        relatedTarget: r[0]
                    });
                    if (this.$element.trigger(o), !o.isDefaultPrevented()) {
                        var s = this;
                        return this.runValidators(r).done(function(e) {
                            r.data("bs.validator.errors", e), e.length ? a ? s.defer(r, s.showErrors) : s
                                .showErrors(r) : s.clearErrors(r), i && e.toString() === i.toString() || (o = e
                                    .length ? t.Event("invalid.bs.validator", {
                                        relatedTarget: r[0],
                                        detail: e
                                    }) : t.Event("valid.bs.validator", {
                                        relatedTarget: r[0],
                                        detail: i
                                    }), s.$element.trigger(o)), s.toggleSubmit(), s.$element.trigger(t.Event(
                                    "validated.bs.validator", {
                                        relatedTarget: r[0]
                                    }))
                        })
                    }
                }, a.prototype.runValidators = function(r) {
                    function a(t) {
                        return r.data(t + "-error")
                    }

                    function i() {
                        var t = r[0].validity;
                        return t.typeMismatch ? r.data("type-error") : t.patternMismatch ? r.data("pattern-error") : t
                            .stepMismatch ? r.data("step-error") : t.rangeOverflow ? r.data("max-error") : t
                            .rangeUnderflow ? r.data("min-error") : t.valueMissing ? r.data("required-error") : null
                    }

                    function o() {
                        return r.data("error")
                    }

                    function s(t) {
                        return a(t) || i() || o()
                    }
                    var n = [],
                        l = t.Deferred();
                    return r.data("bs.validator.deferred") && r.data("bs.validator.deferred").reject(), r.data(
                        "bs.validator.deferred", l), t.each(this.validators, t.proxy(function(t, a) {
                        var i = null;
                        (e(r) || r.attr("required")) && (r.data(t) || "native" == t) && (i = a.call(this, r)) &&
                        (i = s(t) || i, !~n.indexOf(i) && n.push(i))
                    }, this)), !n.length && e(r) && r.data("remote") ? this.defer(r, function() {
                        var a = {};
                        a[r.attr("name")] = e(r), t.get(r.data("remote"), a).fail(function(t, e, r) {
                            n.push(s("remote") || r)
                        }).always(function() {
                            l.resolve(n)
                        })
                    }) : l.resolve(n), l.promise()
                }, a.prototype.validate = function() {
                    var e = this;
                    return t.when(this.$inputs.map(function(r) {
                        return e.validateInput(t(this), !1)
                    })).then(function() {
                        e.toggleSubmit(), e.focusError()
                    }), this
                }, a.prototype.focusError = function() {
                    if (this.options.focus) {
                        var e = this.$element.find(".has-error:first :input");
                        0 !== e.length && (t("html, body").animate({
                            scrollTop: e.offset().top - a.FOCUS_OFFSET
                        }, 250), e.focus())
                    }
                }, a.prototype.showErrors = function(e) {
                    var r = this.options.html ? "html" : "text",
                        a = e.data("bs.validator.errors"),
                        i = e.closest(".form-group"),
                        o = i.find(".help-block.with-errors"),
                        s = i.find(".form-control-feedback");
                    a.length && (a = t("<ul/>").addClass("list-unstyled").append(t.map(a, function(e) {
                        return t("<li/>")[r](e)
                    })), void 0 === o.data("bs.validator.originalContent") && o.data("bs.validator.originalContent",
                        o.html()), o.empty().append(a), i.addClass("has-error has-danger"), i.hasClass(
                        "has-feedback") && s.removeClass(this.options.feedback.success) && s.addClass(this.options
                        .feedback.error) && i.removeClass("has-success"))
                }, a.prototype.clearErrors = function(t) {
                    var r = t.closest(".form-group"),
                        a = r.find(".help-block.with-errors"),
                        i = r.find(".form-control-feedback");
                    a.html(a.data("bs.validator.originalContent")), r.removeClass("has-error has-danger has-success"), r
                        .hasClass("has-feedback") && i.removeClass(this.options.feedback.error) && i.removeClass(this
                            .options.feedback.success) && e(t) && i.addClass(this.options.feedback.success) && r.addClass(
                            "has-success")
                }, a.prototype.hasErrors = function() {
                    function e() {
                        return !!(t(this).data("bs.validator.errors") || []).length
                    }
                    return !!this.$inputs.filter(e).length
                }, a.prototype.isIncomplete = function() {
                    function r() {
                        var r = e(t(this));
                        return !("string" == typeof r ? t.trim(r) : r)
                    }
                    return !!this.$inputs.filter("[required]").filter(r).length
                }, a.prototype.onSubmit = function(t) {
                    this.validate(), (this.isIncomplete() || this.hasErrors()) && t.preventDefault()
                }, a.prototype.toggleSubmit = function() {
                    this.options.disable && this.$btn.toggleClass("disabled", this.isIncomplete() || this.hasErrors())
                }, a.prototype.defer = function(e, r) {
                    return r = t.proxy(r, this, e), this.options.delay ? (window.clearTimeout(e.data(
                        "bs.validator.timeout")), void e.data("bs.validator.timeout", window.setTimeout(r, this
                        .options.delay))) : r()
                }, a.prototype.reset = function() {
                    return this.$element.find(".form-control-feedback").removeClass(this.options.feedback.error)
                        .removeClass(this.options.feedback.success), this.$inputs.removeData(["bs.validator.errors",
                            "bs.validator.deferred"
                        ]).each(function() {
                            var e = t(this),
                                r = e.data("bs.validator.timeout");
                            window.clearTimeout(r) && e.removeData("bs.validator.timeout")
                        }), this.$element.find(".help-block.with-errors").each(function() {
                            var e = t(this),
                                r = e.data("bs.validator.originalContent");
                            e.removeData("bs.validator.originalContent").html(r)
                        }), this.$btn.removeClass("disabled"), this.$element.find(".has-error, .has-danger, .has-success")
                        .removeClass("has-error has-danger has-success"), this
                }, a.prototype.destroy = function() {
                    return this.reset(), this.$element.removeAttr("novalidate").removeData("bs.validator").off(
                            ".bs.validator"), this.$inputs.off(".bs.validator"), this.options = null, this.validators =
                        null, this.$element = null, this.$btn = null, this.$inputs = null, this
                };
            var i = t.fn.validator;
            t.fn.validator = r, t.fn.validator.Constructor = a, t.fn.validator.noConflict = function() {
                return t.fn.validator = i, this
            }, t(window).on("load", function() {
                t('form[data-toggle="validator"]').each(function() {
                    var e = t(this);
                    r.call(e, e.data())
                })
            })
        }(jQuery);
    </script>

@endsection
