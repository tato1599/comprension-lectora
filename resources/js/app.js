import './../../vendor/power-components/livewire-powergrid/dist/powergrid'
// resources/js/app.js
import './../../vendor/power-components/livewire-powergrid/dist/tailwind.css'
import './bootstrap';
import 'flowbite';
import Swal from 'sweetalert2';

window.Swal = Swal;

window.Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});