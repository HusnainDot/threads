// make post popup opner
const mk_post_modal_1 = document.querySelector(".mk-post_popup")
const mk_post_modal_2 = document.querySelector(".mk_post_modal_2")
const mk_post_modal_opner_1 = document.querySelector(".mk-post-opner")
const mk_post_modal_opner_2 = document.querySelector(".post_modal_opner_2")
const close_post_popup = document.querySelectorAll(".close_post_popup")
const post_modal_opner_3 = document.querySelectorAll(".post_modal_opner_3")
const pstm_caption = document.querySelector(".pstm_caption")
const pstm_upload_image = document.querySelector(".pstm_upload_image")

mk_post_modal_opner_1.addEventListener("click", () => {
    mk_post_modal_1.style.transform = "translateX(0%)";


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


document.addEventListener("input", (e) => {
    const target = e.target.closest(".post_modal");

    if (target) {
        const pstm_caption = document.querySelector(".pstm_caption");
        const pstm_upload_image = document.querySelector(".pstm_upload_image");
        const pstm_btn = document.querySelector(".pstm_btn");
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

    };

});




// document.addEventListener("click", (e) => {

//     const traget = e.traget.closest(".mk-post_popup");
//     if (traget) {
//         const pstm_btn = document.querySelector(".pstm_btn");
//         const pstm_caption = document.querySelector(".pstm_caption");
//         const pstm_upload_image = document.querySelector(".pstm_upload_image");
//         const tem_img = document.querySelector(".tem_img");







//     }


// })


mk_post_modal_1.addEventListener("click", (e) => {
    const pstm_btn = e.target.closest(".pstm_btn");
    const pstm_caption = e.target.closest(".pstm_caption");
    const pstm_upload_image = e.target.closest(".pstm_upload_image");
    const tem_img = e.target.closest(".tem_img");


    // if (pstm_upload_image) {
    //     tem_img.classList.add("d-none")
    // }


})