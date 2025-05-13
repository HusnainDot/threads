// make post popup opner
const mk_post_modal_opner_1 = document.querySelector(".mk-post-opner");
const mk_post_modal_1 = document.querySelector(".mk-post_popup")
const mk_post_modal_2 = document.querySelector(".mk_post_modal_2")
const mk_post_modal_opner_2 = document.querySelector(".post_modal_opner_2")
const close_post_popup = document.querySelectorAll(".close_post_popup")
const post_modal_opner_3 = document.querySelectorAll(".post_modal_opner_3")
const pstm_caption = document.querySelector(".pstm_caption")
const pstm_upload_image = document.querySelector(".pstm_upload_image")
const pstm_tem_img = document.querySelector(".temp_img")

  
// post modal 1
document.addEventListener("click", function (e) {
    const target = e.target.closest(".mk-post-opner");

    if (target) {
        e.stopPropagation(); // moved inside
        const modal = document.querySelector(".mk-post_popup");
        if (modal) {
            modal.style.transform = "translateX(0%)"; // fixed reference
            const temImg = modal.querySelector(".temp_img")
            const uploadButton = modal.querySelector(".pstm_upload_image");
            const pstm_btn = modal.querySelector(".pstm_btn");
            const pstm_caption = modal.querySelector(".pstm_caption")


            if (pstm_caption && !pstm_caption.dataset.listenerAdded) {
                pstm_caption.dataset.listenerAdded = "true";
                pstm_caption.addEventListener("input", () => { 
                    if (pstm_caption.value != "") {
                        pstm_btn.disabled = false;
                        pstm_btn.classList.add("bg-white");
                        pstm_btn.classList.add("text-black");
                    }
                    else {
                        pstm_btn.disabled = true;
                        pstm_btn.classList.remove("bg-white");
                        pstm_btn.classList.remove("text-black");
                    }
                })
            }


            if (uploadButton && !uploadButton.dataset.listenerAdded) {
                uploadButton.dataset.listenerAdded = "true"; // prevent duplicate binding
                uploadButton.addEventListener("click", () => {
                    temImg.classList.remove("d-none")

                });
            }
        }
    }
});



close_post_popup.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.stopPropagation();

        const modal = btn.closest(".mk-post_popup");
        if (modal) {
            mk_post_modal_1.style.transform = "translateX(150%)";

        }
    });
});



// post modal 2




document.addEventListener("click", function (e) {
    const target = e.target.closest(".post_modal_opner_2");

    if (target) {
        const mk_post_modal_2 = document.querySelector(".mk_post_modal_2");

        if (mk_post_modal_2) {
            if (window.innerWidth <= 780) {
                mk_post_modal_2.style.top = "0%";

            } else {
                mk_post_modal_2.style.top = "50%";

            }
            mk_post_modal_2.style.opacity = "1";

        } else {
            console.error("Modal element not found");
        }
    }
});
close_post_popup.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.stopPropagation();
        const modal = btn.closest(".mk_post_modal_2");
        if (modal) {

            if (window.innerWidth <= 780) {
                mk_post_modal_2.style.top = "-100%";

            } else {
                mk_post_modal_2.style.top = "50%";

            }
            mk_post_modal_2.style.opacity = "0";

        }
    });
});



// // post modal 3




document.addEventListener("click", function (e) {
    const target = e.target.closest(".post_modal_opner_3");

    if (target) {
        const mk_post_modal_2 = document.querySelector(".mk_post_modal_2");

        if (mk_post_modal_2) {
            mk_post_modal_2.style.top = "50%";
            mk_post_modal_2.style.opacity = "1";

        } else {
            console.error("Modal element not found");
        }
    }
});
close_post_popup.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.stopPropagation();
        const modal = btn.closest(".mk_post_modal_2");
        if (modal) {
            mk_post_modal_2.style.top = "-50%";
            mk_post_modal_2.style.opacity = "0";

        }
    });
});


document.addEventListener("click", (e) => {
    const modal = document.querySelector(".mk_post_modal_2");

    if (modal) {
        const temImg = modal.querySelector(".temp_img");
        const uploadButton = modal.querySelector(".pstm_upload_image");
        const pstm_btn = modal.querySelector(".pstm_btn");
        const pstm_caption = modal.querySelector(".pstm_caption");
// for caption functionality
        if (pstm_caption && !pstm_caption.dataset.listenerAdded) {
            pstm_caption.dataset.listenerAdded = "true";
            pstm_caption.addEventListener("input", () => {
                if (pstm_caption.value !== "") {
                    pstm_btn.disabled = false;
                    pstm_btn.classList.add("bg-white");
                    pstm_btn.classList.add("text-black");
                } else {
                    pstm_btn.disabled = true;
                    pstm_btn.classList.remove("bg-white");
                    pstm_btn.classList.remove("text-black");
                }
            });
        };
// upload tem img
        if (uploadButton && !uploadButton.dataset.listenerAdded) {
            uploadButton.dataset.listenerAdded = "true"; // prevent duplicate binding
            uploadButton.addEventListener("click", () => {
                if (temImg) {
                    temImg.classList.remove("d-none");
                }
            });
        }
    }
});



