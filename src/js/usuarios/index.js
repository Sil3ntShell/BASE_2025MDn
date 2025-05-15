import { Dropdown } from "bootstrap";
import Swal from "sweetalert2";
import { validarFormulario } from '../funciones';

const FormUsuarios = document.getElementById('FormUsuarios');
const BtnGuardar = document.getElementById('BtnGuardar');
const BtnModificar = document.getElementById('BtnModificar');
const InputUsuarioTelefono = document.getElementById('usuario_telefono');
const usuario_nit = document.getElementById('usuario_nit');


const ValidarTelefono = () => {

    const CantidadDigitos = InputUsuarioTelefono.value


    if (CantidadDigitos.length < 1) {
        InputUsuarioTelefono.classList.remove('is-valid', 'is-invalid')
    }

    if (CantidadDigitos.length != 8) {
        Swal.fire({
            position: "top-center",
            icon: "Error",
            title: "Revise el número de telefono",
            text: "Error, la cantidad de digitos es menor a 8 ¡Por favor, revise!",
            showConfirmButton: false,
            timer: 1500
        });

        InputUsuarioTelefono.classList.remove('is-valid');
        InputUsuarioTelefono.classList.add('is-invalid');


    } else {

        InputUsuarioTelefono.classList.remove('is-invalid');
        InputUsuarioTelefono.classList.add('is-valid');
    }

}


function validarNit() {
    const nit = usuario_nit.value.trim();



    let nd, add = 0;


    if (nd = /^(\d+)\-?([\dkK])$/.exec(nit)) {
        nd[2] = (nd[2].toLowerCase() === 'k') ? 10 : parseInt(nd[2]);
        for (let i = 0; i < nd[1].length; i++) {
            add += ((((i - nd[1].length) * -1) + 1) * nd[1][i]);
        }
        return ((11 - (add % 11)) % 11) === nd[2];
    } else {
        return false;
    }
}

const EsValidoNit = () => {

    validarNit();

    if (validarNit()) {
        usuario_nit.classList.add('is-valid');
        usuario_nit.classList.remove('is-invalid');

    } else {
        usuario_nit.classList.remove('is-valid');
        usuario_nit.classList.add('is-invalid');



        Swal.fire({
            position: "center",
            icon: "Error",
            title: "NIT Invalido",
            text: "El número de nit ingresado es invalido",
            showCancelButton: true,

        });

    }
}

const GuardarUsuario = async (e) => {
    e.preventDefault();
    if (!validarFormulario(FormUsuarios, ['usuario_id'])) {
        Swal.fire({
            position: "center",
            icon: "Info",
            title: "Formulario incompleto",
            text: "Debe validar todos los campos",
            showConfirmButton: true,
        });
        BtnGuardar.disabled = false;

    }

    const body = new FormData(FormUsuarios);

    const url = '/frame/usuarios/guardarAPI';
    const config = {
        method: 'POST',
        body
    }

    try {
        const respuesta = await fetch(url, config)
        const datos = await respuesta.json()
        console.log(datos);

    } catch (error) {
        console.log(error);

    }
}


FormUsuarios.addEventListener('submit', GuardarUsuario);
usuario_nit.addEventListener('change', EsValidoNit);
InputUsuarioTelefono.addEventListener('change', ValidarTelefono);