async function validateForm(event, url) {
    event.preventDefault();
    const form = event.target.closest("form");
    const isValid = form.checkValidity();
    form.classList.add('was-validated');
    if (isValid) {
        // // loadingShow();
        // let data = await getFormData(form.elements);
        // let response = await sendRequest(data, url);
        // console.log(url);
        // console.log(data);
        // console.log(response);
        // if (response) {
        //     await Swal.fire({
        //         icon: "success",
        //         title: "Gracias por contactarnos",
        //         text: response,
        //         confirmButtonText: "Cerrar",
        //         confirmButtonColor: "#198754",
        //     });
        // } else {
        //     return false;
        // }
        let name = document.getElementById("book-name").value;
        let email = document.getElementById("book-email").value;
        let client_phone = document.getElementById("book-phone").value;
        let msg = document.getElementById("book-message").value;
        let message = `Hola, quiero más informes con los siguientes datos:
- Nombre: ${name}
- Correo: ${email}
- Teléfono: ${client_phone}
- Mensaje: ${msg}`;

        let phone = document.getElementById("whatsapp_number").value; // Replace with the number
        let url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;

        window.open(url, "_blank");
    } else {
        return false;
    }
}





async function getFormData(elements) {
    let data = new FormData();
    Array.from(elements).forEach(element => {
        if (element.hasAttribute("name")) {
            if (element.type === "file") {
                if (element.multiple) {
                    Array.from(element.files).forEach(file => {
                        data.append(element.name, file); // use name[] for array-like keys
                    });
                } else {
                    if (element.files[0]) {
                        data.append(element.name, element.files[0]);
                    }
                }
            } else {
                data.append(element.name, element.value);
            }
        }
    });
    return data;
}


async function sendRequest(formData, url) {
    var requestOptions = {
        method: 'POST',
        body: formData
    };
    return await fetch(`${url}`, requestOptions)
        .then(response => response.text())
        .then(result => {
            let res = JSON.parse(result);
            if (res.code == 200) {
                return res.data;
            } else {
                // loadingHide();
                Swal.fire({
                    title: `Error en la petición`,
                    text: res.message,
                    icon: 'error',
                    showCancelButton: true,
                    showConfirmButton: false,
                    cancelButtonText: 'Cerrar',
                    customClass: {
                        cancelButton: 'btn btn-secondary'
                    }
                })
                return false;
            }
        })
        .catch(error => {
            // loadingHide();
            Swal.fire({
                title: `Error en la petición`,
                text: "Error desconocido. Inténtalo más tarde",
                icon: 'error',
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: 'Cerrar',
                customClass: {
                    cancelButton: 'btn btn-secondary'
                }
            })
            return false;
        });
}

window.validateForm = validateForm;
