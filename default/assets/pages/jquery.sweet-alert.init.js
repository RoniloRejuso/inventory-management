!(function (t) {
    "use strict";
    var e = function () {};
    (e.prototype.init = function () {
        t("#sa-basic").on("click", function () {
            Swal.fire("Any fool can use a computer");
        }),
            t("#sa-title").click(function () {
                Swal.fire("The Internet?", "That thing is still around?", "question");
            }),
            t("#sa-success").click(function () {
                Swal.fire("Good job!", "You clicked the button!", "success");
            }),
            t("#sa-warning").click(function () {
                swal.fire({
                    title: "Confirmation Message",
                    text: "Click to confirm your registration and you will be directed to the Login page to continue.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Confirm",
                    cancelButtonText: "Cancel",
                    reverseButtons: true
                }).then(function (result) {
                    if (result.value) {
                        // Redirect to HTML page when the Confirm button is clicked
                        window.location.href = "auth-login.html";
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swal.fire("Cancelled", "You have cancelled your registration", "error");
                    }
                });
            }),
            t("#sa-footer").click(function () {
                Swal.fire({ icon: "error", title: "Oops...", text: "Something went wrong!", footer: "<a href>Why do I have this issue?</a>" });
            }),
            t("#sa-topright-success").click(function () {
                Swal.fire({ position: "top-end", icon: "success", title: "Your work has been saved", showConfirmButton: !1, timer: 1500 });
            }),
            t("#sa-custom-animation").click(function () {
                Swal.fire({ title: "Custom animation with Animate.css", showClass: { popup: "animated fadeInDown faster" }, hideClass: { popup: "animated fadeOutUp faster" } });
            }),
            t("#sa-params").click(function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonColor: "$success",
                    cancelButtonColor: "$danger",
                    confirmButtonText: "Yes, delete it!",
                }).then(function (t) {
                    t.value && Swal.fire("Deleted!", "Your file has been deleted.", "success");
                });
            }),
            t("#sa-image").click(function () {
                Swal.fire({ title: "Dastyle", text: "Modal with a custom image.", imageUrl: "assets/images/logo-sm.png", imageHeight: 80, animation: !1 });
            }),
            t("#custom-html-alert").click(function () {
                Swal.fire({
                    title: "<strong>HTML <u>example</u></strong>",
                    type: "info",
                    html: 'You can use <b>bold text</b>, <a href="//github.com">links</a> and other HTML tags',
                    showCloseButton: !0,
                    showCancelButton: !0,
                    focusConfirm: !1,
                    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                    confirmButtonAriaLabel: "Thumbs up, great!",
                    cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                    cancelButtonAriaLabel: "Thumbs down",
                });
            }),
            t("#custom-padding-width-alert").click(function () {
                Swal.fire({ title: "Custom width, padding, background.", width: 600, padding: 100, background: "rgba(254,254,254,0.9) url(assets/images/pattern.png)" });
            }),
            t("#sa-auto-close").click(function () {
                var t;
                Swal.fire({
                    title: "Auto close alert!",
                    html: "I will close in <strong></strong> seconds.",
                    timer: 2e3,
                    onBeforeOpen: function () {
                        Swal.showLoading(),
                            (t = setInterval(function () {
                                Swal.getContent().querySelector("strong").textContent = Swal.getTimerLeft();
                            }, 100));
                    },
                    onClose: function () {
                        clearInterval(t);
                    },
                }).then(function (t) {
                    t.dismiss === Swal.DismissReason.timer && console.log("I was closed by the timer");
                });
            }),
            t("#ajax-alert").click(function () {
                Swal.fire({
                    title: "Submit your Github username",
                    input: "text",
                    inputAttributes: { autocapitalize: "off" },
                    showCancelButton: !0,
                    confirmButtonText: "Look up",
                    showLoaderOnConfirm: !0,
                    preConfirm: function (t) {
                        return fetch("//api.github.com/users/+ login")
                            .then(function (t) {
                                if (!t.ok) throw new Error(t.statusText);
                                return t.json();
                            })
                            .catch(function (t) {
                                Swal.showValidationMessage("Request failed:" + t);
                            });
                    },
                    allowOutsideClick: function () {
                        return !Swal.isLoading();
                    },
                }).then(function (t) {
                    t.value && Swal.fire({ title: "result.value.login's avatar", imageUrl: t.value.avatar_url });
                });
            }),
            t("#chaining-alert").click(function () {
                Swal.mixin({ input: "text", confirmButtonText: "Next &rarr;", showCancelButton: !0, progressSteps: ["1", "2", "3"] })
                    .queue([{ title: "Question 1", text: "Chaining swal2 modals is easy" }, "Question 2", "Question 3"])
                    .then(function (t) {
                        t.value && Swal.fire({ title: "All done!", html: "Your answers: <pre><code>" + JSON.stringify(t.value) + "</code></pre>", confirmButtonText: "Lovely!" });
                    });
            }),
            t("#dynamic-alert").click(function () {
                Swal.queue([
                    {
                        title: "Your public IP",
                        confirmButtonText: "Show my public IP",
                        text: "Your public IP will be received via AJAX request",
                        showLoaderOnConfirm: !0,
                        preConfirm: function () {
                            return fetch("https://api.ipify.org?format=json")
                                .then(function (t) {
                                    return t.json();
                                })
                                .then(function (t) {
                                    Swal.insertQueueStep(t.ip);
                                })
                                .catch(function () {
                                    Swal.insertQueueStep({ type: "error", title: "Unable to get your public IP" });
                                });
                        },
                    },
                ]);
            }),
            t("#sa-mixin").click(function () {
                Swal.mixin({
                    toast: !0,
                    position: "top-end",
                    showConfirmButton: !1,
                    timer: 3e3,
                    timerProgressBar: !0,
                    onOpen: function (t) {
                        t.addEventListener("mouseenter", Swal.stopTimer), t.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                }).fire({ icon: "success", title: "Signed in successfully" });
            });
    }),
        (t.SweetAlert = new e()),
        (t.SweetAlert.Constructor = e);
})(window.jQuery),
    (function (t) {
        "use strict";
        window.jQuery.SweetAlert.init();
    })();
