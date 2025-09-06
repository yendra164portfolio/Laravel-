// resources/js/script2.js
document.addEventListener("DOMContentLoaded", function() {
    console.log("Script2.js aktif ✅");

    const btn = document.getElementById("ubahWarnaBtn");
    if (btn) {
        btn.addEventListener("click", function() {
            document.body.style.backgroundColor =
                document.body.style.backgroundColor === "lightyellow" ? "white" : "lightyellow";
        });
    }
});
