import {Dropzone} from "dropzone";

console.log("dfasda");
Dropzone.autoDiscover = false;

window.addEventListener('DOMContentLoaded', function () {
    const dropzone = new Dropzone('#dropzone', {
        dictDefaultMessage: 'Sube aqui tu imagen',
        acceptedFiles: '.png,.jpg,.jpeg,.gif',
        addRemoveLinks: true,
        dictRemoveFile: 'Borrar Archivo',
        maxFiles: 1,
        uploadMultiple: false,
    });

    dropzone.on("sending", function (file, xhr, formData) {
        console.log(formData)
    });

    dropzone.on('success', function (file, response) {
        console.log(response);
    });

    dropzone.on('error', function (file, response) {
        console.log(response);
    });

    dropzone.on('removedfile', function (file) {
        console.log('No se pueden subir mas archivos');
    });

});
