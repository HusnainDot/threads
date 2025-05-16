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
            const close_temp_img = modal.querySelector(".close_temp_img");
            const upload_imag = modal.querySelector(".upload_imag");
            const pstm_preview_img = modal.querySelector(".pstm_preview_img");


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

            // upload btn 
            if (uploadButton && !uploadButton.dataset.listenerAdded) {
                uploadButton.dataset.listenerAdded = "true";
                uploadButton.addEventListener("click", () => {
                    temImg.classList.remove("d-none")

                });

            };


            // upload temp img

            if (upload_imag && !upload_imag.dataset.listenerAdded) {
                upload_imag.dataset.listenerAdded = "true";
                upload_imag.addEventListener("input", (event) => {
                    const file = event.target.files[0];
                    if (file) {
                        const fileUrl = URL.createObjectURL(file)
                        pstm_btn.disabled = false;
                        pstm_btn.classList.add("bg-white");
                        pstm_btn.classList.add("text-black");
                        pstm_preview_img.classList.remove("d-none");
                        pstm_preview_img.src = fileUrl;
                    }


                })

            }



            // close temp img
            if (close_temp_img && !close_temp_img.dataset.listenerAdded) {
                close_temp_img.dataset.listenerAdded = "true";
                close_temp_img.addEventListener("click", () => {

                    temImg.classList.add("d-none");
                    pstm_preview_img.classList.add("d-none")
                    pstm_preview_img.src = "";
                    pstm_btn.disabled = true;
                    pstm_btn.classList.remove("bg-white");
                    pstm_btn.classList.remove("text-black");

                })


            };

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
            mk_post_modal_2.style.top = "-150%";
            mk_post_modal_2.style.opacity = "0";

        }
    });
});

// post upload 
document.addEventListener("click", (e) => {
    const modal = document.querySelector(".mk_post_modal_2");

    if (modal) {
        const temImg = modal.querySelector(".temp_img")
        const uploadButton = modal.querySelector(".pstm_upload_image");
        const pstm_btn = modal.querySelector(".pstm_btn");
        const pstm_caption = modal.querySelector(".pstm_caption")
        const close_temp_img = modal.querySelector(".close_temp_img");
        const upload_imag = modal.querySelector(".upload_imag");
        const pstm_preview_img = modal.querySelector(".pstm_preview_img");
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
        // upload temp img
        if (uploadButton && !uploadButton.dataset.listenerAdded) {
            uploadButton.dataset.listenerAdded = "true";
            uploadButton.addEventListener("click", () => {
                if (temImg) {
                    temImg.classList.remove("d-none");
                }
            });
        };


        // upload temp img

        if (upload_imag && !upload_imag.dataset.listenerAdded) {
            upload_imag.dataset.listenerAdded = "true";
            upload_imag.addEventListener("input", (event) => {
                const file = event.target.files[0];
                if (file) {
                    const fileUrl = URL.createObjectURL(file)
                    pstm_preview_img.classList.remove("d-none");
                    pstm_preview_img.src = fileUrl;
                    pstm_btn.disabled = false;
                    pstm_btn.classList.add("bg-white");
                    pstm_btn.classList.add("text-black");
                }

            })

        }


        // close temp img
        if (close_temp_img && !close_temp_img.dataset.listenerAdded) {
            close_temp_img.dataset.listenerAdded = "true";
            close_temp_img.addEventListener("click", () => {

                temImg.classList.add("d-none");
                pstm_preview_img.classList.add("d-none")
                pstm_btn.disabled = true;
                pstm_btn.classList.remove("bg-white");
                pstm_btn.classList.remove("text-black");

            })


        };

    }
});



//  footer menu icone

const footerMenuicone = document.querySelector(".footer-menu-icone");
const footerMenuDropdown = document.querySelector(".footer-menu");
let footer = false;

footerMenuicone.addEventListener("click", (e) => {
    e.stopPropagation();
    if (footer) {
        footerMenuDropdown.style.transform = "scale(0)";

    } else {
        footerMenuDropdown.style.transform = "scale(1)";

    }

    footer = !footer;
});


document.addEventListener("click", (e) => {
    if (footer && !footerMenuDropdown.contains(e.target) && !footerMenuicone.contains(e.target)) {
        footerMenuDropdown.style.transform = "scale(0)";
        footer = false;
    }


})




// nav menu

document.addEventListener("DOMContentLoaded", () => {
    const navMenuIcone = document.querySelector("#sm-nav-menu-icone");
    const navMenuDropdown = document.querySelector(".nav-menu");

    let isOpen = false;

    if (navMenuIcone && navMenuDropdown) {
        navMenuIcone.addEventListener("click", (e) => {
            e.stopPropagation();
            isOpen = !isOpen;
            navMenuDropdown.style.transform = isOpen ? "scale(1)" : "scale(0)";
        });

        document.addEventListener("click", (e) => {
            // If the click is outside both the icon and the menu, close it
            if (
                isOpen &&
                !e.target.closest("#sm-nav-menu-icone") &&
                !e.target.closest(".nav-menu")
            ) {
                navMenuDropdown.style.transform = "scale(0)";
                isOpen = false;
            }
        });
    }
});





// posts likes comments shares repost




const commentTriggers = document.querySelectorAll(".comment-trigger");
const closeButtons = document.querySelectorAll(".close-comment-modal");

commentTriggers.forEach(trigger => {
    const modal = trigger.querySelector(".comment-modal-wrapper");

    trigger.addEventListener("click", (e) => {
        e.stopPropagation(); // Prevent clicks from bubbling
        modal.style.transform = "scale(1)";
        modal.style.pointerEvents = "auto"; // Enable interaction
    });
});

closeButtons.forEach(button => {
    button.addEventListener("click", () => {
        const modal = button.closest(".comment-modal"); // Find the modal container
        const wrapper = modal?.parentElement;

        if (wrapper?.classList.contains("comment-modal-wrapper")) {
            wrapper.style.transform = "scale(0)";
            wrapper.style.pointerEvents = "none"; // Disable interaction
        }
    });
});
