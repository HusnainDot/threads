// make post popup opner
const mk_post_modal_1 = document.querySelector(".mk-post_popup")
const mk_post_modal_2 = document.querySelector(".sc_mk-post_popup")
const mk_post_modal_opner_1 = document.querySelector(".mk-post-opner")
const mk_post_modal_opner_2 = document.querySelector(".post_modal_opner_2")
const close_post_popup = document.querySelectorAll(".close_post_popup")

mk_post_modal_opner_1.addEventListener("click", () => {
    mk_post_modal_1.style.transform = "translateX(0%)";

});
mk_post_modal_opner_2.addEventListener("click", () => {
    mk_post_modal_2.style.transform = "translate(-50%, -50%)";
    mk_post_modal_2.style.top = "50%";
    mk_post_modal_2.style.opacity = "1";

});


close_post_popup.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.stopPropagation();

        // Traverse up to find the modal this close button belongs to
        const modal = btn.closest(".mk-post_popup");
        if (modal) {
            mk_post_modal_1.style.transform = "translateX(150%)";

        }
    });
});

close_post_popup.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.stopPropagation();

        // Traverse up to find the modal this close button belongs to
        const modal = btn.closest(".sc_mk-post_popup");
        if (modal) {
            mk_post_modal_2.style.transform = "translate(-50%, -100%)";
            mk_post_modal_2.style.top = "0%";
            mk_post_modal_2.style.opacity = "0";

        }
    });
});

