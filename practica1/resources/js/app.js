//import './bootstrap';
import Dropzone from "dropzone"
Dropzone.autoDiscover = false;
const dropzone = new Dropzone ('#dropzone',{
    dictDefaultMessage:'Sube una imagen aquí',
    acceptedFiles:".png,.jpg,.jpeg,.gif",
    addRemoveLinks:true,
    dictRemoveFile: "<button type='button' class='bg-green-700 hover:bg-emerald-600 transition-colors cursor-pointer uppercase font-bold p-3 text-white rounded-lg'>Borrar archivo</button>",
    maxFiles: 1,
    uploadMultiple: false,
});
//eventos de dropzone
/*dropzone.on('sending', function(file,xhr,formdata){
    console.log(file);
});*/

//evento de envio de correo correcto
dropzone.on('success', function(file,response){
    console.log(response);
});

//envio cuando hay error
dropzone.on('error', function(file,message){
    console.log(message);
});

//remiver un archivo
dropzone.on('removedfile', function(){
    console.log('El archivo se eliminó');
});

