!(function (e) {
  "use strict";
  var t = function () {};
  (t.prototype.initPopoverPlugin = function () {
    e.fn.popover && e('[data-toggle="popover"]').popover();
  }),
    (t.prototype.initSlimScrollPlugin = function () {
      e.fn.slimScroll &&
        e(".slimscroll-alt").slimScroll({
          position: "right",
          size: "5px",
          color: "#98a6ad",
          wheelStep: 10,
        });
    }),
    (t.prototype.initRangeSlider = function () {
      e.fn.slider && e('[data-plugin="range-slider"]').slider({});
    }),
    (t.prototype.initCounterUp = function () {
      e(this).attr("data-delay") && e(this).attr("data-delay"),
        e(this).attr("data-time") && e(this).attr("data-time");
      e('[data-plugin="counterup"]').each(function (t, i) {
        e(this).counterUp({ delay: 100, time: 1200 });
      });
    }),
    (t.prototype.initToast = function () {
      e.fn.toast && e('[data-toggle="toast"]').toast();
    }),
    (t.prototype.initAccordionBg = function () {
      e(".collapse.show").each(function () {
        e(this).prev(".card-header").addClass("custom-accordion");
      }),
        e(".collapse")
          .on("show.bs.collapse", function () {
            e(this).prev(".card-header").addClass("custom-accordion");
          })
          .on("hide.bs.collapse", function () {
            e(this).prev(".card-header").removeClass("custom-accordion");
          });
    }),
    (t.prototype.initValidation = function () {
      window.addEventListener(
        "load",
        function () {
          var t = document.getElementsByClassName("needs-validation");
          Array.prototype.filter.call(t, function (i) {
            i.addEventListener(
              "submit",
              function (t) {
                !1 === i.checkValidity() &&
                  (t.preventDefault(), t.stopPropagation()),
                  i.classList.add("was-validated");
              },
              !1
            );
          });
        },
        !1
      );
    }),
    (t.prototype.initPrettify = function () {
      var n = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#39;",
        "/": "&#x2F;",
        "`": "&#x60;",
        "=": "&#x3D;",
      };
      e(function () {
        e(".escape").each(function (t, i) {
          var o;
          e(i).html(
            ((o = e(i).html()),
            String(o).replace(/[&<>"'`=\/]/g, function (t) {
              return n[t];
            })).trim()
          );
        });
      });
    }),
    (t.prototype.init = function () {
      this.initPopoverPlugin(),
        this.initSlimScrollPlugin(),
        this.initRangeSlider(),
        this.initCounterUp(),
        this.initToast(),
        this.initAccordionBg(),
        this.initValidation(),
        this.initPrettify();
    }),
    (e.Components = new t()),
    (e.Components.Constructor = t);
})(window.jQuery),
  (function (t) {
    "use strict";
    window.jQuery.Components.init();
  })();
