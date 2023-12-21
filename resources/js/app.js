import Alpine from "alpinejs";
import Swal from "sweetalert2";
import FormsAlpinePlugin from "../../vendor/filament/forms/dist/module.esm";
import NotificationsAlpinePlugin from "../../vendor/filament/notifications/dist/module.esm";

Alpine.plugin(FormsAlpinePlugin);
Alpine.plugin(NotificationsAlpinePlugin);

window.Alpine = Alpine;

Alpine.start();

// Testing out sweetalert
// Swal.fire({
//     title: "Error!",
//     text: "Do you want to continue",
//     icon: "error",
//     confirmButtonText: "Cool",
// });
