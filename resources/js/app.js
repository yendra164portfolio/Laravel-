import './bootstrap';

// Tampilkan alert ketika halaman di klik
window.addEventListener('click', function () {
  alert('click Gue dong');
});
// Contoh sederhana
console.log("Laravel + Vite jalan 🎉");

// Bisa tambahkan interaksi tombol
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".btn");
    btn.addEventListener("click", () => {
        alert("Penasaran yah click-click gue🤔😄");
    });
});

import './script1.js';
import './script2.js';
import '../css/style1.css';
import '../css/style2.css';
