import { GetClientes } from "./API.js";
addEventListener('DOMContentLoaded',()=>{
    cargarClientes();
})

async function cargarClientes() {
    const Clientes = await GetClientes();
    const TableClientes = document.querySelector("#datosClientes");
    console.log(Clientes);
    Clientes.forEach(Cliente => {
        const {	
            id_constructora,
            nombre_constructora,	
            nit_constructora,	
            nombre_representante,	
            email_contacto,	
            telefono_contacto}= Cliente
        TableClientes.innerHTML+= `
        <tr>
            <td>${id_constructora}</td>
            <td>${nombre_constructora}</td>
            <td>${nit_constructora}</td>
            <td>${nombre_representante}</td>
            <td>${email_contacto}</td>
            <td>${telefono_contacto}</td>
            
        </tr>
        `
    });

    async function PostClientes(){
        let form = document.querySelector('#Insert');
        form.addEventListener('submit', (e)=>{
            e.preventDefault();
            let DataForm = Object.fromEntries(FormData(e.target));
            console.log(DataForm);
        })

    }

}
