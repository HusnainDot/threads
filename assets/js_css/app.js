// make post popup opner
const mk_post_modal_1 = document.querySelector(".mk-post_popup_1")
const mk_post_modal_2 = document.querySelector(".mk-post_popup_2")
const mk_post_modal_opner_1 = document.querySelector(".mk-post-opner")
const mk_post_modal_opner_2 = document.querySelector(".post_modal_opner_2")
const close_post_popup_1 = document.querySelector(".close_post_popup_1")
const close_post_popup_2 = document.querySelector(".close_post_popup_2")

mk_post_modal_opner_1.addEventListener("click", () => {
    mk_post_modal_1.classList.remove("hide_mk_post_1");
    mk_post_modal_1.classList.add("show_mk_post_1");

})
close_post_popup_1.addEventListener("click", (e) => {
    e.stopPropagation();
    mk_post_modal_1.classList.remove("show_mk_post_1");
    mk_post_modal_1.classList.add("hide_mk_post_1");

})


//post modal 2

mk_post_modal_opner_2.addEventListener("click", () => {
    mk_post_modal_1.classList.remove("hide_mk_post_2");
    mk_post_modal_1.classList.add("show_mk_post_2");

})
close_post_popup_2.addEventListener("click", (e) => {
    e.stopPropagation();
    mk_post_modal_1.classList.remove("show_mk_post_2");
    mk_post_modal_1.classList.add("hide_mk_post_2");

})